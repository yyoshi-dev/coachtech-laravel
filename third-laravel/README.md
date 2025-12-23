# Third-Laravel

## Laravelの環境構築
1. `.env.sample`ファイルをコピーして、`.env`ファイルを作成
2. `.env`に以下の設定を記述
    ```ini
    # MySQL
    MYSQL_ROOT_PASSWORD=root
    MYSQL_DATABASE=laravel_db
    MYSQL_USER=laravel_user
    MYSQL_PASSWORD=laravel_pass

    # PHP Admin
    PMA_USER=laravel_user
    PMA_PASSWORD=laravel_pass

    # PHP
    UID=1000
    GID=1000
    ```
3. コンテナを起動
    ```bash
    docker compose up -d --build
    ```
4. PHPコンテナに入る
    ```bash
    docker compose exec php bash
    ```
5. 依存関係をインストール
    ```bash
    composer install
    ```
6. DBへの接続
`./src/.env.example`ファイルをコピーして、`./src/.env`を作成
7. `.env`に以下の設定を記述
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel_db
    DB_USERNAME=laravel_user
    DB_PASSWORD=laravel_pass
    ```
8. アプリケーションキーを生成 (初回のみ)
    ```bash
    php artisan key:generate
    ```
9. マイグレーションを実行
    ```bash
    php artisan migrate
    ```

## 補足: Create Projectによる作成Laravel環境構築
1. `.env.sample`ファイルをコピーして、`.env`ファイルを作成
2. `.env`にDB情報等の設定を記述
    今回は練習環境という事で設定は以下の通り
    ```ini
    # MySQL
    MYSQL_ROOT_PASSWORD=root
    MYSQL_DATABASE=laravel_db
    MYSQL_USER=laravel_user
    MYSQL_PASSWORD=laravel_pass

    # PHP Admin
    PMA_USER=laravel_user
    PMA_PASSWORD=laravel_pass

    # PHP
    UID=1000
    GID=1000
    ```

3. `docker compose up -d —build`で起動
4. `docker compose exec php bash`でPHPコンテナにアクセス
5. `composer create-project "laravel/laravel=^12.0" . --prefer-dist`でLaravelプロジェクトを作成
6. 時間設定をUTCから日本時間へ変更
    - `./src/config/app.php`ファイルを開く
    - `'timezone' => 'UTC',`と記載されている部分を、`'timezone' => 'Asia/Tokyo',`に修正する
    - PHPコンテナにて、`$ php artisan tinker`を実行し、`echo Carbon\Carbon::now();`を実行して、日本時間になっている事を確認する
    - もし時間が合わない場合は、`php artisan config:clear`を実行する

7. `.env`にDBの設定を記述
   今回は練習環境という事で設定は以下の通り
   ```ini
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel_db
    DB_USERNAME=laravel_user
    DB_PASSWORD=laravel_pass
   ```