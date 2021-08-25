## Projeto sistema administrativo da plataforma E-Diaristas

Desenvolvido no curso multi-stack da Treinaweb

### instalando o projeto

#### Clonar o Repositorio

```
git clone https://github.com/cocogum/Multistack-Sistema-administrativo-de-de-Diaristas-PHP.git
```

#### Instalar as dependências

```
composer install
```

Ou em ambiente de desemvolvimento:

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo 'env.exemple' para '.env' na raiz do projeto 
configurar os detalhes de aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Inicair o servidor de desenvolvimento

```
php artisan serve
```

