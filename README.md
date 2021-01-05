<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About

Laravel8を用いたECサンプルアプリ、S3バケットでItem画像を配信するバージョン

機能
- ユーザー登録・ログイン
- メインページ (15アイテム表示)
- カートページ
- 購入ページ

## How to use

1. LEMPインフラの準備
 <br>[Docker LEMP環境構築](https://github.com/siwai0208/docker-template)

2. S3バケットの準備
 [CloudformationでS3バケット作成](https://github.com/siwai0208/cloudformation/tree/main/s3)<br>
 マネコンより、CloudFormation > スタック > s3 > 出力を参考に以下の値を控えておく<br>
```
 S3BucketAccessKey
 S3BucketKeyID
 S3BucketName
 S3BucketRegion
```

3. Login to App container and clone this repository into document root (/usr/share/nginx/html/laravel)
```
$ docker-compose exec app bash
$ git clone https://github.com/siwai0208/food-app laravel
```

4. storage と　bootstrap/cache/　のパーミッション変更
```
docker-compose exec app bash
cd laravel/
chmod -R 777 storage
chmod -R 777 bootstrap/cache/
```

5. Composer update
```
composer update
```

6. .envファイルを編集
```
cp .env.example .env
vim .env
 DB_HOST=mysql
 DB_DATABASE="See docker-compose.yml"
 DB_USERNAME="See docker-compose.yml"
 DB_PASSWORD="See docker-compose.yml"
 AWS_ACCESS_KEY_ID="S3BucketKeyID"
 AWS_SECRET_ACCESS_KEY="S3BucketAccessKey"
 AWS_DEFAULT_REGION="S3BucketRegion"
 AWS_BUCKET="S3BucketName"
```

7. DB migrate
```
php artisan key:generate
php artisan config:cache
php artisan migrate
```

8. DB seed to update item (Option)　
```
php artisan db:seed
```
