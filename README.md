# laravel-websockets-vue-cli
Servidor com Laravel Websockts e VueJS Cli

# Pacotes
Instale os pacotes do laravel e vue, acessar a pasta do vue executar:
```bash
npm i
```
Na pasta do websocket do laravel executar:
```bash
composer install
```
# Started Serve
Para iniciar os servidores, primeiro nosso laravel:
```bash
php artisan serve
```
Depois iniciamos o servidor websockets, ainda na pasta do laravel:
```bash
php artisan websockts:serve
```

O nosso cliente vai precisar do Vue Cli, se já estiver instalado acesse a pasta do vue e execute:
```bash
npm run serve
```
