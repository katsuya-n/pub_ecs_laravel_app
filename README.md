# pub_ecs_laravel_app

```
$ cp .env.example .env
$ docker-compose run --rm ecs_laravel_app composer install
$ docker-compose run --rm ecs_laravel_app php artisan key:generate
# ecs_laravel_projectを作成しておく 
$ docker-compose run --rm ecs_laravel_app php artisan migrate
```