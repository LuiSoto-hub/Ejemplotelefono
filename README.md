# Ejemplo MVC en PHP

Este es un proyecto de ejemplo que implementa el patrón Modelo-Vista-Controlador (MVC) en PHP. Permite gestionar una base de datos simple con operaciones CRUD (Crear, Leer, Actualizar, Eliminar).

## 📌 Tecnologías Utilizadas
- PHP
- MySQL
- HTML

## 📂 Estructura del Proyecto
```
jemploMvc/
│── index.php               # Punto de entrada de la aplicación
│── config.php              # Configuración de la conexión a la base de datos
│
├── controller/
│   ├── LibroController.php # Controlador que maneja la lógica de los libros
│
├── model/
│   ├── Libro.php           # Modelo que interactúa con la base de datos
│
├── view/
│   ├── libros.php          # Vista para mostrar los libros en una tabla
```

## 🚀 Instalación
1. Clona el repositorio:
   ```bash
   git clone <URL_DEL_REPO>
   ```
2. Importa la base de datos `mvc_biblioteca` con la siguiente estructura:
   ```sql
   CREATE DATABASE mvc_biblioteca;
   USE mvc_biblioteca;
   CREATE TABLE libros (
       id INT AUTO_INCREMENT PRIMARY KEY,
       titulo VARCHAR(255) NOT NULL,
       autor VARCHAR(255) NOT NULL,
       anio INT NOT NULL
   );
   ```
3. Configura la conexión en `config.php`:
   ```php
   $host = 'localhost';
   $dbname = 'mvc_biblioteca';
   $username = 'root';
   $password = '';
   ```
4. Inicia el servidor local con PHP:
   ```bash
   php -S localhost:8000
   ```
5. Abre `http://localhost:8000/index.php` en tu navegador.

## 🔥 Funcionalidades
- Listar todos los libros almacenados en la base de datos.
- Agregar nuevos libros mediante un formulario.
- Editar información de un libro existente.
- Eliminar libros de la base de datos.


## 📌 Autor
luisoto


