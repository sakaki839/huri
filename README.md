# アプリケーション名

choachtechフリマ

## 環境構築

```
$ cd coachtech/laravel
$ git clone git@github.com:coachtech-material/laravel-docker-template.git
$ mv laravel-docker-template hurima
$ cd hurima
$ git remote set-url origin git@github.com:sakaki839/hurima.git
$ git remote -v
$ git add .
$ git push -u origin main
$ git push origin main
$ docker-compose up -d --build
$ code .
$ docker-compose exec php bash

# composer install
#  cp .env.example .env
# exit

$ docker-compose run php bash
# php artisan make:controller ExhibitionController

# php artisan key:generate
# php artisan make:migration create_item_table
# php artisan 
# php artisan make:model Exhibition

```


## 使用技術（実行環境）
- Dockerバージョン 27.3.1
- laravelバージョン  8.83.8
- gitバージョン　 2.43.0

## ER図

## URL
- phpmyadmin: http://localhost:8080/
- 開発環境: http://localhost/

