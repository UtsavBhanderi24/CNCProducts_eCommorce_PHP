# 🛒 CNC Products E-Commerce Web Application

A full-stack **PHP & MySQL based e-commerce web application** for purchasing CNC and industrial components such as **Automotive Components, Brass Forged Components, CNC Components, Copper Parts, VMC Components, and Milling Parts**.

This project was developed as a **BCA final-year academic project**, following **SDLC principles**, with a complete **Admin Panel** and **User Module**.

---

## 📌 Project Highlights

* User Registration & Login
* Product Listing by Categories
* Product Booking / Order Placement
* Admin Dashboard
* Admin CRUD Operations (Users, Products, Orders)
* MySQL Database Integration
* Responsive UI using HTML & CSS

---

## 🧑‍💻 Tech Stack

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Web Server:** Apache (XAMPP)
* **Architecture:** SDLC-based Design

---

## 📂 Improved Project Structure (Recommended)

```
CNCProducts_eCommerce_PHP/
│
├── Admin/
│   ├── DB-Pro-Img/          # Uploaded product images
│   ├── Images/              # Admin UI images
│   ├── Astyle.css           # Admin styles
│   ├── Login.php
│   ├── AIndex.php
│   ├── Manage-User.php
│   ├── Manage-Product.php
│   ├── Manage-Order.php
│   └── Header.html
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   └── images/
│
├── database/
│   └── cncproducts.sql      # Database file (recommended to add)
│
├── includes/
│   ├── DBConfig.php
│   ├── Header1.html
│   └── Footer.html
│
├── user/
│   ├── Register.php
│   ├── Login.php
│   ├── Index.php
│   ├── Categories.php
│   ├── Booking.php
│   ├── Automotive-Components.php
│   ├── Brass-Forged-Components.php
│   ├── CNC-Components.php
│   ├── Copper-Parts.php
│   ├── VMC-Components.php
│   └── Milling-Part.php
│
├── README.md
└── .gitignore
```

---

## ⚙️ Setup Instructions (Run Locally)

### 1️⃣ Install Required Software

* Download & install **XAMPP**
* Ensure **Apache** and **MySQL** services are running

---

### 2️⃣ Clone the Repository

```bash
git clone https://github.com/UtsavBhanderi24/CNCProducts_eCommorce_PHP.git
```

Move the project folder to:

```
C:/xampp/htdocs/
```

---

### 3️⃣ Create Database

1. Open browser → `http://localhost/phpmyadmin`
2. Create a database:

   ```
   cncproducts
   ```
3. Import the SQL file:

   * `database/cncproducts.sql`

---

### 4️⃣ Configure Database Connection

Edit the file:

```
/includes/DBConfig.php
```

```php
<?php
$con = mysqli_connect("localhost", "root", "", "cncproducts");
if (!$con) {
    die("Database Connection Failed");
}
?>
```

---

### 5️⃣ Run the Project

Open browser and visit:

```
http://localhost/CNCProducts_eCommorce_PHP/
```

---

## 🔐 Admin Login (Default)

```
Username: admin
Password: admin
```

*(Update credentials in database for security)*

---

## 📘 Academic Details

* **Course:** Bachelor of Computer Application (BCA)
* **University:** Saurashtra University, Rajkot
* **Year:** 2023–2024
* **Project Type:** Final Year Academic Project

---

## 📜 License

This project is created for **educational purposes only**.

---

## 👨‍💻 Author

**Utsav Bhanderi**
GitHub: [UtsavBhanderi24](https://github.com/UtsavBhanderi24)

---

⭐ *If you like this project, give it a star on GitHub!*
