# dev-laravel-ninacode version 1.0

Siguiendo estas interacciones podrás trabajar con una copia de este proyecto desde tu maquina local con el propósito de pruebas o desarrollo


## Dependencias:
para poder trabajar de manera correcta con este proyecto es necesario contar con los siguientes requisitos:

1. Docker version 20.10.12
2. PHP version 8.1
3. Mariadb Version 10.7
4. nginx Version 1.21
5. Laravel version 9
6. Git version 2.35.1


## Clonacion
Para clonar el proyecto lo primero que debemos hacer es abrir nuestras terminal y acceder a la ruta de la carpeta donde se desea clonar el proyecto una vez ahí utilizamos en comando ¨git clone¨ seguido del link ejemplo:

git clone https://github.com/Deividisi26/devlaravelninacode.git

Utilizamos el URL ¨https¨ ya que con este cualquiera lo puede clonar en cambio si utilizamos el SSH nos solicitara una clave de administrador 

cuando termine de clonarse accederemos a la carpeta de nuestra app desde la linea de comando desde ahi instalaremos los paquetes de composer con ayuda del comando:
```
composer install
```
terminado el proceso seguiremos instalando las dependencias ahora nmp utilizando el comando:

```
npm install 
```
caundo termine de instalarse esas dependencias es necesario generar una llave para eso debemos ejecutar el siguiente comando:

```
php artisan key:generate
```

## Configuracion / Docker

Abrimos la terminal y accedemos a la carpeta de nuestro proyecto y editamos el archivo de configuración de nuestro contenedor el cual lleva el nombre de docker-compose.yml utilizando el comando vim  ejemplo:

```
Vim docker-compose.yml
```

Aqui tenemos que buscar en la sección de ¨db¨ y ¨nginx¨ en la parte de ports: debemos ver cuales son los puertos que utiliza podemos dejar los que vienen ya definidos si están libres en nuestro local de lo contrario los editamos para asegurarnos de que los puertos estén libres

``` 
db:
    image: mariadb:10.7
    ...
    ports:
      - 33306:3306
    ...

nginx:
    image: nginx:1.21-alpine
    ...
    ports:
      - 9000:80
    ..
```

ya que tengamos nuestro archivo configurado con nuestros puertos construimos el contenedor de docker utilizando el comando:

```
docker compose build
```

el comando anterior solo lo construira pero ahora lo levantamos con el comando:

```
docker compose up -d
```

validamos que los contenedores se ejuctaran con excito utilizanod el comando:

```
docker ps | grep devlaravelninacode
```

si estamos trabajando en el sistemas windows usaremos el sigiente comando:

```
docker ps | Select-String  devlaravelninacode
```

al ejecutar los comando anteriores nos debera mostrar los 3 contenedores ejecutandose:

```
devlaravelninacode-app
devlaravelninacode-db
devlaravelninacode-nginx
```

si todo sale bien el docker comenzara a trabajar

## Configurar / Laravel

al descargar el repositorio este ya vendra con laravel 9 instalado por lo que no se debara reintarlar lo que haremos es acceder a la carpeta ¨app¨ 

```
cd app
```

dentro de esta carpeta hay un archivo llamado .env.example el cual vamos a copiarlo y cambiarle el nombre a .env:

```
cp .env.example .env
```

ya que tengamos creado el documento lo abriremos utilizando el comando:

```
vim .env
```

El archivo ¨.env¨ contiene las sigientes variables que usara laravel editamos los parametros asegurándonos que coincidan con el documento de docker-compose.yml :

```
APP_NAME="Dev Laravel Ninacode"
APP_URL=http://localhost:9000

DB_HOST=db
DB_PORT=3306
DB_DATABASE=devlaravelninacode
DB_USERNAME=devlaravelninacode
DB_PASSWORD=devlaravelninacode
```

si haz usado un puerto diferente deberas cambiarlo para que concida con tu docuemtno docker-compose.yml

```
APP_NAME="Dev Laravel Ninacode"
APP_URL=http://localhost:<:puerto>

DB_HOST=db
DB_PORT=<:puerto>
DB_DATABASE=devlaravelninacode
DB_USERNAME=devlaravelninacode
DB_PASSWORD=devlaravelninacode
```

## Validar

Accedemos a nuestro localhost y deberíamos ver el laravel instalado 
```
http://localhost<:puerto>
```

#

