# GSL - Back-end

Pasta contendo o projeto de back-end (microsserviços, gateway, docker, etc) para o sistema GSL Boa Entrega.

Link da documentação da API: https://puc.stoplight.io/docs/tcc-puc-minas

Principais tecnologias utilizadas:

Para Ambiente:
- Docker: Contêineres 
- Docker-compose: Orquestração de serviços e balanceamento de carga
- Kong: API Gateway
- RabbitMQ: Mensageria
- Mailcatcher: Servidor SMTP local para testes
- Nginx: Servidor Web

Para Microsserviços:
- PHP Laravel 8: Framework Web
- Postgres 13: Sistema Gerenciador de Banco de Dados

## Inicialização do projeto
Para inicializar o ambiente, basta entrar com o seguinte comando:
```shell
docker-compose up -d
```

Para parar o ambiente, entre com o seguinte comando:
```shell
docker-compose stop
```

Para limpar o ambiente e remover os containeres criados:
```shell
docker-compose down --remove-orphans
```

# Configuração do projeto para a primeira execução
Na **primeira execução**, após inicializar o ambiente, será necessário executar alguns comandos para configuração dos microsserviços:
```shell
docker-compose exec data-science-bi cp .env.example .env
docker-compose exec data-science-bi php artisan key:generate

docker-compose exec registration-information cp .env.example .env
docker-compose exec registration-information php artisan key:generate
docker-compose exec registration-information php artisan migrate --seed

docker-compose exec strategic-management cp .env.example .env

docker-compose restart
```

## Serviços
Após a inicialização do projeto, você poderá acessar os serviços através dos seguintes endereços:
- API Gateway: http://localhost:8000/
- RabbitMQ: http://localhost:8081/ (Username: `user`, Password: `password`)
- MailCatcher: http://localhost:1080/

## Email de gestão
Para enviar o email de gestão, execute o seguinte comando:

```shell
docker-compose exec strategic-management php artisan report:send
```
