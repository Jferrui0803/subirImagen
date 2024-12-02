# Upload File App

Esta es una aplicación Laravel para subir y gestionar imágenes.

## Características

- Subir imágenes
- Ver lista de imágenes subidas
- Ver detalles de una imagen específica

## Requisitos

- PHP ^8.2
- Composer
- Node.js

## Instalación

1. Clona el repositorio:
    ```sh
    git clone https://github.com/tu-usuario/upload-file-app.git
    cd upload-file-app
    ```

2. Instala las dependencias de PHP:
    ```sh
    composer install
    ```

3. Instala las dependencias de Node.js:
    ```sh
    npm install
    ```

4. Configura el archivo `.env`:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

5. Ejecuta las migraciones:
    ```sh
    php artisan migrate
    ```

6. Inicia el servidor de desarrollo:
    ```sh
    php artisan serve
    ```

## Uso

### Subir una Imagen

1. Navega a la página de subir imagen: `/subir/create`
2. Selecciona una imagen y haz clic en "Subir".

![Subir Imagen](/img/captura1.png)

### Ver Lista de Imágenes

1. Navega a la página principal: `/`
2. Verás una lista de todas las imágenes subidas.

![Lista de Imágenes](/img/captura2.png)

### Ver Detalles de una Imagen

1. Haz clic en el nombre de una imagen en la lista.
2. Verás los detalles de la imagen seleccionada.

![Detalles de la Imagen](/img/captura3.png)

## Contribuir

¡Las contribuciones son bienvenidas! Por favor, abre un issue o un pull request.

## Licencia

Este proyecto está licenciado bajo la [MIT License](LICENSE).