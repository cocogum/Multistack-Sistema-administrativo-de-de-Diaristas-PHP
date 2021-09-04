<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usuariorequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $emailunico = 'unique:app\models\user,email';

            if ($this->ismethod('PUT') || $this->ismethod("PATCH")) {
                $emailunico = $emailunico . ',' . $this->route('usuario')->id;
            }
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', $emailunico],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
