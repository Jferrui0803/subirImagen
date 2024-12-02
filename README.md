# Upload File App

Esta es una aplicación Laravel para subir y gestionar imágenes.

## Características

- Subir imágenes
- Ver lista de imágenes subidas
- Ver detalles de una imagen específica

## Requisitos

- PHP 
- Composer
- Laravel

## Instalación

1. Clona el repositorio:
    ```sh
    git clone https://github.com/Jferrui0803/subirImagen.git
    cd subirImagen
    ```

2. Instala las dependencias de PHP:
    ```sh
    composer install
    ```


3. Configura el archivo `.env`:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. Ejecuta las migraciones:
    ```sh
    php artisan migrate
    ```

## Uso

### Subir una Imagen

1. Navega a la página de subir imagen: `/subir/create`
2. Selecciona una imagen y haz clic en "Subir".

![Subir Imagen](/img/segundacap.png)

### Ver Lista de Imágenes

1. Navega a la página principal: `/`
2. Verás una lista de todas las imágenes subidas.

![Lista de Imágenes](/img/primercap.png)

### Ver Detalles de una Imagen

1. Haz clic en el nombre de una imagen en la lista.
2. Verás los detalles de la imagen seleccionada.

![Detalles de la Imagen](/img/terceracap.png)

## Contribuir


## Licencia

Este proyecto está licenciado bajo la [MIT License](LICENSE).