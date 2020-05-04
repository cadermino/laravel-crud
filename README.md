## Laravel CRUD

Project based in [Bitnami Laravel docker image](https://hub.docker.com/r/bitnami/laravel).

## Requisites

- Docker
- Docker-compose >= 1.7.0

## Installation

- First clone the repository
```shell
git clone git@github.com:cadermino/laravel-crud.git
```
- Go to directory
```shell
cd laravel-crud
```
- Run the docker compose command and wait installation to finish
```shell
docker-compose up
```
- Copy .env file
```shell
docker-compose exec myapp cp .env.example .env
```
- Generate app key
```shell
docker-compose exec myapp php artisan key:generate
```
- Put this url in your browser
```shell
http://localhost:3000/customers
```

## Demo
http://54.152.92.105:3000/customers
