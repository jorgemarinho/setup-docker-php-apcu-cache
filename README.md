# setup-docker-php-apcu-cache

# Setup Docker PHP APCu Cache

## Instruções

1. Baixe o repositório:

    ```shell
    git clone https://github.com/jorgemarinho/setup-docker-php-apcu-cache
    ```

2. Inicie o serviço Docker, caso ainda não esteja iniciado:

    ```shell
    service docker start
    ```

3. Na primeira vez, faça um build:

    ```shell
    docker-compose up --build
    ```

4. Nas vezes seguintes, execute:

    ```shell
    docker-compose up -d
    ```

5. O serviço estará disponível na porta:

    [http://localhost:8000](http://localhost:8000)

6. Os testes estão na seguinte URL:

    [http://localhost:8000/example.php](http://localhost:8000/example.php)

7. Documentação Apcu cache

    [https://www.php.net/manual/en/book.apcu.php](https://www.php.net/manual/en/book.apcu.php)

## Instalação sem o Docker

1. Atualize os pacotes do sistema:

    ```shell
    sudo apt-get update
    ```

2. Instale as dependências necessárias:

    ```shell
    sudo apt-get install -y php-dev php-pear
    ```

3. Instale a extensão APCu usando PECL:

    ```shell
    sudo pecl install apcu
    ```

4. Habilite a extensão APCu no PHP:

    ```shell
    echo "extension=apcu.so" | sudo tee /etc/php/$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')/cli/conf.d/20-apcu.ini
    echo "extension=apcu.so" | sudo tee /etc/php/$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')/fpm/conf.d/20-apcu.ini
    ```

5. Reinicie o servidor web (se estiver usando PHP-FPM):

    ```shell
    sudo systemctl restart php$(php -r 'echo PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;')-fpm
    ```

