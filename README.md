# Contenedor para CLA

## Tecnologías usadas:

    * App:          Wordpress
    * Database:     MySQL

## Versiones

    * Docker (Apéndice):    Docker version 20.10.9

## Iniciar

La aplicación consta de dos partes.

    * Base de datos (en la carpeta database).
    * Aplicación web (en la carpeta app).

Se deben iniciar las dos partes por separado.

Para iniciar la base de datos hay que ingresar al directorio _database_ y seguir
las instrucciones del README.md que se encuentra en ese directorio.
```bash
$ cd database
$ # Configurar la base de datos siguiendo las instrucciones del README.md
$ docker compose up -d prod
```

Para iniciar la aplicación web hay que ingresar al directorio _app_ y seguir
las instrucciones del README.md que se encuentra en ese directorio.
```bash
$ cd app
$ # Configurar la aplicación siguiendo las instrucciones del README.md
$ docker compose up -d prod
```

# Apéndice

## Instalación de docker en ubuntu 18.04/20.04/22.04

Fuente: [Instalación docker ubuntu](https://docs.docker.com/engine/install/ubuntu).

```bash
$ sudo apt-get update
$ sudo apt-get install \
    ca-certificates \
    curl \
    gnupg \
    lsb-release

$ sudo mkdir -p /etc/apt/keyrings
$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg

$  echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

$ sudo apt-get update
$ sudo apt-get install docker-ce docker-ce-cli containerd.io docker-compose-plugin

```
