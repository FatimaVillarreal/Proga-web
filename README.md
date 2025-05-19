# Proga-web

Este es un proyecto de programación web desarrollado con el framework **Laravel**.

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel logo">
  </a>
</p>

## 🔧 Tecnologías utilizadas

- PHP 8+
- Laravel 10 o superior
- MySQL
- Composer
- Visual Studio Code
- XAMPP o similar

## 🚀 Funcionalidades del proyecto

- Autenticación de usuarios
- Roles (administrador, docente, alumno)
- CRUD de usuarios y exámenes
- Evaluación y calificación automática
- Diseño responsivo con Blade y TailwindCSS
- Componentes dinámicos con Livewire

## 📦 Instalación

```bash
git clone https://github.com/FatimaVillarreal/Proga-web.git
cd Proga-web
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
