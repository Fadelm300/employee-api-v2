<p align="center">
  <a href="https://codeigniter.com" target="_blank">
    <img src="public/images/codeigniter-logo.png" width="300" alt="CodeIgniter Logo">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.1%2B-blue" />
  <img src="https://img.shields.io/badge/CodeIgniter-4.x-red" />
  <img src="https://img.shields.io/badge/JWT-Authentication-green" />
  <img src="https://img.shields.io/badge/License-MIT-lightgrey" />
</p>

# Employee Management API (CodeIgniter 4)

This project is a **RESTful API backend** built with **CodeIgniter 4** for managing employees.  
It includes **JWT authentication**, **CORS support**, and **protected CRUD endpoints**.




---

## 🛠 Prerequisites

Make sure you have the following installed:

- PHP 8.1+
- Composer
- MySQL
- CodeIgniter 4
- Postman (for testing)
- Node.js (if using React frontend)

---

## ⚡ Setup Instructions (CodeIgniter)

### 1️⃣ Clone the repository
```bash
git clone <your-repo-url>
cd employee-api
```
### 2️⃣ Install dependencies
```bash
composer install
```

### 3️⃣ Configure .env file

Copy the environment file:
```bash
cp env .env
```

Edit .env and update the following:
```bash
CI_ENVIRONMENT = development

JWT_SECRET=ThisIsAVeryLongSecretKeyAtLeast32Chars!!

database.default.hostname = localhost
database.default.database = employee_api
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```
### 4️⃣ Run migrations
```bash
php spark migrate
```
### 5️⃣ Seed sample data
```bash
php spark db:seed UserSeeder
php spark db:seed EmployeeSeeder
```
### 6️⃣ Start the development server
```bash
php spark serve
```
Server will run at :
```bash
http://localhost:8080
```
## 🌐 CORS Configuration

CORS is enabled to allow frontend access from:

http://127.0.0.1:5177

http://localhost:5177

Configured in:

```bash
app/Config/Cors.php
```
Allowed methods:
```bash
GET, POST, PUT, DELETE, OPTIONS
```



CORS filter is enabled globally in:
```bash
app/Config/Filters.php
```


---

## 📁 Project Structure
```bash
app/
├── Controllers/
│ └── Api/
│ ├── AuthController.php
│ └── EmployeesController.php
├── Models/
│ ├── UserModel.php
│ └── EmployeeModel.php
├── Filters/
│ ├── JwtAuthFilter.php
│ └── JCorsFilter.php
├── Database/
│ ├── Migrations/
│ └── Seeders/
└── Config/
├── Routes.php
├── Cors.php
└── Filters.php
```


## 🔐 Authentication Flow (JWT)
### 1️⃣ Login

- Endpoint: POST /api/login

- User sends email & password

- Backend validates credentials

- On success, JWT token is returned

```bash
POST /api/login
{
  "email": "admin@test.com",
  "password": "password"
}
```
```bash
{
    "status": "success",
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJlbXBsb3llZS1hcGkiLCJpYXQiOjE3NjgxMzEzNzYsImV4cCI6MTc2ODEzNDk3NiwidWlkIjoiMSIsImVtYWlsIjoiYWRtaW5AdGVzdC5jb20ifQ.xBK1TJ87unN9BOdPQihyKUa_9XjAHrzBPu_eH5jmNYk",
    "user": {
        "id": "1",
        "name": "Admin",
        "email": "admin@test.com"
    }
}
```

### 2️⃣ Use Token

- For all protected routes, include the token in headers:

- Authorization: Bearer <JWT_TOKEN>



## 🧾 Available API Endpoints

Base URL:


```bash
http://localhost:8080/api
```

| Endpoint          | Method | Description         | Auth |
| ----------------- | ------ | ------------------- | ---- |
| `/login`          | POST   | Login user          | ❌    |
| `/employees`      | GET    | Get all employees   | ✅    |
| `/employees`      | POST   | Create new employee | ✅    |
| `/employees/{id}` | GET    | Get employee by ID  | ✅    |
| `/employees/{id}` | PUT    | Update employee     | ✅    |
| `/employees/{id}` | DELETE | Delete employee     | ✅    |


## 🧪 Testing with Postman

### 1. Login → get JWT token

### 2. Add token to Authorization header

###  3. Test all /employees endpoints



## 🚀 Useful Commands

```bash
php spark serve                 # Start server
php spark migrate:fresh --seed  # Reset database
php spark routes                # Show all routes
```
## ✅ Status

✔ Authentication working  
✔ CORS enabled  
✔ JWT protected routes  
✔ Ready for frontend integration  

---

**Author:** Fadel  
**Framework:** CodeIgniter 4  
**Authentication:** JWT  

---





