# Proyecto_Calidad

Proyecto desarrollado como trabajo para el SENA para la calidad de un buen sofware.  
Se trata de una aplicación web para la gestión de productos y categorías de una joyeria, con control de estado y validaciones.

## Tecnologías utilizadas

- **Lenguaje de programación:** PHP 8.x  
- **Framework:** Laravel 12.x  
- **Base de datos:** MySQL  
- **Frontend:** HTML5, CSS3, Bootstrap 5  
- **Plantilla utilizada:** [DarkPan – Free Bootstrap 5 Admin Dashboard Template](https://www.themewagon.com/themes/free-bootstrap-5-admin-dashboard-template-darkpan/) de ThemeWagon, adaptada para el proyecto.  
- **Control de versiones:** Git & GitHub  
- **Herramientas de calidad:** SonarQube / Codacy (para análisis de código y corrección de errores)

## Funcionalidades principales

1. **Gestión de productos:**  
   - Crear, editar, eliminar (lógico) y listar productos.  
   - Asociación de productos con categorías.  
   - Validación de datos de entrada.

2. **Gestión de categorías:**  
   - Crear, editar, eliminar (lógico) y listar categorías.  
   - Manejo de estado activo/inactivo para controlar visibilidad en productos.

3. **Interfaz de usuario:**  
   - Login simulado.  
   - Dashboard con navegación entre productos y categorías.  
   - Formularios responsivos con Bootstrap y DarkPan.

## Estructura del proyecto
Proyecto_Calidad/
├── app/ # Código fuente de Laravel
├── database/ # Migraciones y seeders
├── public/ # Archivos públicos (CSS, JS, imágenes)
├── resources/ # Vistas Blade y assets (adaptados de DarkPan)
├── routes/ # Definición de rutas
├── tests/ # Pruebas (si aplica)
└── README.md # Documentación del proyecto

## Instrucciones para correr el proyecto

1. Clonar el repositorio:
   ```bash
   git clone <URL-del-repositorio>
2. Ubicacio del proyecto

cd proyecto_calidad_laravel

3. Instalar dependencias:

composer install

4. Configurar archivo .env con conexión a base de datos.

5. Ejecutar migraciones:

php artisan migrate --seed

6. Ejecutar servidor local:

php artisan serve


7. Abrir en el navegador:

http://127.0.0.1:8000

## Conclusión

Proyecto realizado para consolidar conocimientos de Laravel, PHP y buenas prácticas en desarrollo web. La integración de la plantilla DarkPan permitió agilizar la creación de vistas y mantener una interfaz moderna y responsiva.
