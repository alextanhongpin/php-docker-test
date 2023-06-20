# PHP Docker

```bash
# Run PHP server
$ make up

# Access PHP shell
$ make php
```

# Install Composer.

```bash
$ curl -sS https://getcomposer.org/installer | php

$ php composer.phar require guzzlehttp/guzzle:^7.0



```

If you face this error:
```
Failed to download symfony/deprecation-contracts from dist: The zip extension and unzip/7z commands are both missing, skipping.
The php.ini used by your command-line PHP is: /usr/local/etc/php/conf.d/docker-php-ext-sodium.ini
    Now trying to download from source
```


Run this before re-running `php composer.phar require ...`:

```bash
$ apt update
$ apt install zip unzip
```
