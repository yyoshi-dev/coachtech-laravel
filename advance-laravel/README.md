# Laravel入門

## セットアップ
### Laravelの環境構築
1. `.env.sample`ファイルをコピーして、`.env`ファイルを作成
2. `.env`にDB情報等の設定を記述
3. `docker-compose up -d —build`で起動
4. `docker-compose exec php bash`でPHPコンテナにアクセス
5. `composer create-project "laravel/laravel=^12.0" . --prefer-dist`でLaravelプロジェクトを作成

### DB接続
1. `.env.sample`ファイルをコピーして、`.env`ファイルを作成
2. `.env`にDBの設定を記述