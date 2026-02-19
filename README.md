# 🌐 Proyecto mi-perfil-laravel

## 📌 Nombre del proyecto
mi-perfil-laravel con Laravel y Blade

---

## 📝 Descripción breve
Este proyecto es una aplicación web construida con **Laravel** que muestra información personal a través de distintas vistas Blade.  
Cuenta con una vista principal de perfil y secciones complementarias como **intereses, habilidades y metas**, vinculadas mediante un menú de navegación y personalizadas con estilos CSS propios.

El proyecto tiene fines académicos y está enfocado en practicar:
- Creación y uso de vistas Blade
- Definición de rutas nombradas en Laravel
- Navegación entre distintas páginas
- Aplicación de estilos CSS personalizados

---

## ⚙️ Requisitos del sistema
Para ejecutar correctamente el proyecto se requiere:

- PHP >= 8.1
- Composer
- Laravel 10 o superior
- Servidor local (XAMPP, Laragon, WAMP o Laravel Sail)
- Navegador web moderno (Chrome, Edge, Firefox)

---

## 📦 Instrucciones de instalación

1. Clonar el repositorio o descargar el proyecto:
```bash
   git clone https://github.com/JulianLiz7/mi-perfil-laravel.git
```

2. Acceder a la carpeta del proyecto:
```bash
   cd mi-perfil-laravel
```

3. Instalar las dependencias de Laravel:
```bash
   composer install
```

---

## ▶️ Cómo ejecutar el proyecto

1. Iniciar el servidor de desarrollo:
```bash
   php artisan serve
```

2. Abrir el navegador y acceder a la siguiente URL:
```
   http://127.0.0.1:8000/perfil
```

Desde la vista principal se puede navegar a:
- Intereses
- Habilidades
- Metas

---

## 🧭 Estructura del proyecto
```
resources/
 └── views/
     ├── perfil.blade.php
     ├── intereses.blade.php
     ├── habilidades.blade.php
     └── metas.blade.php

public/
 └──estilos.css

routes/
 └── web.php
```

---

## 🎨 Estilos y diseño

El proyecto utiliza un archivo CSS personalizado ubicado en:
```
public/estilos.css
```

Características del diseño:
- Paleta de colores azul y blanco
- Tipografía legible y profesional
- Espaciado y márgenes consistentes
- Menú de navegación funcional entre páginas
- Diseño responsive básico para distintos tamaños de pantalla

---

## 👤 Autor y fecha

**Autor:** Julian Lizcano  
**Fecha:** 18 de Febrero de 2026