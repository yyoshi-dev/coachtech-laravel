FROM php:8.4-fpm

COPY php.ini /usr/local/etc/php/

RUN apt update \
  && apt install -y default-mysql-client zlib1g-dev libzip-dev unzip \
  && docker-php-ext-install pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && composer self-update

WORKDIR /var/www


# 教科書に記載されていない追記
# コンテナをホストのUID/GIDで動かしているが、コンテナ内にそのUIDに対応するユーザーが存在しない為、
# Laravelインストール時、ホームディレクトリがないのに、Composerが"/"にキャッシュを作ろうとして警告が発生
# コンテナにユーザーを作る事で対応 (/home/appuserが存在し、Composerが正しくキャッシュを保存出来る)

# ホストと同じ UID/GID のユーザーを作成
ARG UID=1000
ARG GID=1000
# GIDを指定し、appgroudというグループを作成し、UIDを指定してappuserというユーザーを作成
# -mはホームディレクトリを作るオプション
RUN groupadd -g ${GID} appgroup \
    && useradd -m -u ${UID} -g ${GID} appuser
# 以降のDockerfileの処理やコンテナ実行時のデフォルトユーザーをappuserに切り替える
USER appuser