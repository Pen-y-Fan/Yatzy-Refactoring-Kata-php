FROM php:8.0-cli-alpine3.13

# user, uid and gid are the same on Linix. This has no effect on windows
# 'pop-os' is my Linux host name, on Linux change to your host name! On Windows and Mac change to:
    # xdebug.client_host=host.docker.internal
ENV USER=michael \
    UID=1000 \
    GID=1000 \
    XDEBUG_MODE=coverage,debug,develop \
    XDEBUG_CLIENT_host=pop-os \
    XDEBUG_CLIENT_PORT=9003 \
    XDEBUG_START_WITH_REQUEST=yes

# create a system user with home folder, uid:gid 1000:1000, no password called michael
RUN addgroup -g $GID $USER \
    && adduser \
    --system \
    --disabled-password \
    --gecos "" \
    --home "/home/$USER" \
    --ingroup "$USER" \
    --no-create-home \
    --uid "$UID" \
    "$USER"

RUN apk add --no-cache php8-pecl-xdebug php8-intl \
    && docker-php-ext-enable /usr/lib/php8/modules/xdebug.so /usr/lib/php8/modules/intl.so

# smoke test
RUN php -v \
    && php -m

WORKDIR /app
# docker build -t php8-cli-alpine:local .
# docker run -it --rm -v $(pwd):/app -u 1000:1000 -w /app php8-cli-alpine:local /bin/sh
# PhpStorm: Add php8-cli-alpine:local as the CLI Interpreter
# Configure tests to use this as too
