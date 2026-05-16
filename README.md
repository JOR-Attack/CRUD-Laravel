3# 📚 CRUD de Estudiantes - Laravel

Este proyecto es una aplicación web básica desarrollada con Laravel para la gestión de estudiantes. Permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre una base de datos.

---

## 🚀 Tecnologías utilizadas

- PHP
- Laravel
- MySQL
- Blade (motor de plantillas)
- Tailwind CSS
- Vite
- Composer
- npm

---

## 📦 Funcionalidades

✔ Listar estudiantes  
✔ Crear estudiantes  
✔ Editar estudiantes  
✔ Eliminar estudiantes  
✔ Validación básica de formularios  
✔ Interfaz moderna con Tailwind CSS  

---

## 🧱 Arquitectura del proyecto

Este proyecto sigue el patrón MVC (Model - View - Controller):

- Model: Student.php
- Controller: StudentController.php
- Views: Blade (index, create, edit)
- Routes: web.php (Route::resource)

---

## 📁 Estructura del proyecto
```
app/
 └── Models/
      └── Student.php

app/
 └── Http/
      └── Controllers/
           └── StudentController.php

resources/
 └── views/
      └── students/
           ├── index.blade.php
           ├── create.blade.php
           └── edit.blade.php

database/
 └── migrations/
```

---

## 🗄️ Base de datos

Tabla: students

Campos:
- id
- nombre
- apellido
- fecha_nacimiento
- correo_electronico
- telefono
- grado
- created_at
- updated_at

---

## ⚙️ Instalación

1. Clonar repo:
git clone https://github.com/usuario/crud-students.git

2. Instalar dependencias PHP:
composer install

3. Instalar dependencias frontend:
npm install

4. Configurar .env:
DB_DATABASE=nombre_base_datos
DB_USERNAME=root
DB_PASSWORD=

5. Generar key:
php artisan key:generate

6. Migraciones:
php artisan migrate

---

## ▶️ Ejecutar proyecto

Terminal 1:
php artisan serve

Terminal 2:
npm run dev

---

## 🌐 Rutas

GET /students
GET /students/create
POST /students
GET /students/{id}/edit
PUT /students/{id}
DELETE /students/{id}

---

## 🧠 Aprendizaje

- MVC en Laravel
- CRUD completo
- Migraciones
- Blade templates
- Tailwind CSS + Vite
- Resource routes

---

## 🧑‍💻 Autor

YorkDev.
