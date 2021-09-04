@csrf

        <div class="card">
            <div class="card-body">
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nome de Usuario</label>
                                <input value="{{ old('name', $usuarios->name ?? '')}}" type "input" required class="form-control" name="name" id="name" placeholder="Nome de Usuario">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email do Usuario</label>
                                <input value="{{ old('email', $usuarios->email ?? '')}}" type="email" required class="form-control" name="email" id="email" placeholder="E.mail do Usuario">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input value="{{ old('password', '')}}" type="password" required class="form-control" name="password" id="password" placeholder="Senha">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation">Confirme Senha</label>
                                <input value="{{ old('password_confirmation', '')}}" type="password" required class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirme Senha">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
