# お問合せフォーム

## 環境構築手順
1. リポジトリをクローン
   ```bash
   git clone git@github.com:yyoshi-dev/coachtech-laravel.git
   ```
2. contact-formディレクトリに移動
    ※ このディレクトリ直下に`docker-compose.yml`が存在する
    ```bash
    cd coachtech-laravel/contact-form
    ```
3. コンテナを起動
    ```bash
    docker compose up -d --build
    ```
4. PHPコンテナに接続
    ```bash
    docker compose exec php bash
    ```
5. コンテナ内で依存関係をインストール
    ```bash
    composer install
    ```
6. `.env.example`をコピーして`.env`を作成
   ```bash
   cp .env.example .env
   ```
7. `.env`ファイルのDB設定及びセッション設定を以下の通り修正
    ```ini
    # DB設定
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel_db
    DB_USERNAME=laravel_user
    DB_PASSWORD=laravel_pass

    # セッション設定
    SESSION_DRIVER=file
    ```
8. アプリケーションキーを生成 (初回のみ)
    ```bash
    php artisan key:generate
    ```
9.  マイグレーションを実行
    ```bash
    php artisan migrate
    ```
10. アプリケーションにアクセス
    ```
    http://localhost/
    ```
