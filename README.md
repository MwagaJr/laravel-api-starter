# Laravel API Starter

A secure and scalable RESTful API built with Laravel for managing users authentications and roles management.

---

## 🚀 Features

✔ API Authentication (Sanctum / JWT)  
✔ User Registration & Login  
✔ Role-Based Access (Admin / User)  
✔ Protected Routes  
✔ API Documentation (Swagger)  
✔ Clean Architecture  
✔ API Rate Limiting  

---

## 🔐 Authentication

- JWT Authentication
- Laravel Sanctum Support
- Secure Token-Based Access

---

## 🛠️ Tech Stack

- Laravel (Sanctum / JWT)
- MySQL Database
- RESTful API Architecture
- Swagger for API Documentation

---

## 📌 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/MwagaJr/laravel-api-starter.git

2. Install Dependencies
cd laravel-api-starter
composer install

3. Configure Environment
cp .env.example .env
php artisan key:generate


Edit .env and set your database credentials.

4. Run Migrations
php artisan migrate

5. Start Server
php artisan serve


Server will run on:

http://127.0.0.1:8000
