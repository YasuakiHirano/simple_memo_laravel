## simple memo laravel  
laravelで作成したEvernote風メモアプリです。  
nginx1.19.1 + php7.4-fpm + mysql5.7を使用しています。  

## 起動する  
docker-composeを使って、下記のコマンドで起動できます。  

```
docker-compose -f .docker_memo_laravel/docker-compose.yml up -d 
```

## 初期設定  
起動後にデータベースの作成などの初期設定をします。  
下記のコマンドで、dockerに入って  

```
docker-compose -f .docker_memo_laravel/docker-compose.yml exec php /bin/bash 
```

プロジェクトフォルダに移動した後に  

```
cd simple_memo_laravel/
```

下記を行います。  
1. composer installでライブラリインストール  
2. laravelの環境設定ファイル作成  
3. appキーの生成  

```
composer install
cp .env.example .env 
php artisan key:generate
```

## データベースの設定  
### データベース作成  
http://localhost:8086でphpmyadminが開くので、そこからデータベースを作成します。  

```
CREATE DATABASE simple_memo_laravel DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
```

### laravelでマイグレーション  
dockerに入って、プロジェクトフォルダ配下でマイグレーションを実行します。  

```
docker-compose -f .docker_memo_laravel/docker-compose.yml exec php /bin/bash 
cd simple_memo_laravel/
php artisan migrate
```

