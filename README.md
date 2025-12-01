
# InteriorDecorWebApp

A full‑stack interior décor web application built using **HTML, CSS, JavaScript, PHP, MySQL (phpMyAdmin)** and served locally via **XAMPP**. This README describes all features of your actual project based on your description.

---

## ⭐ Features

### 👥 User Accounts
- User Registration using **unique email** (no duplicate email allowed)
- Secure Login using email + password
- Logout functionality
- Users can update their profile (optional future feature)

### 🎨 Custom Design Upload
- Logged‑in users can **upload their own custom interior designs**
- Images are stored in server directory
- Design details saved in MySQL database

### ⭐ Feedback System
- Users can submit feedback
- Feedback is stored in database and visible to Admin

### 🖼 Website Pages
- **Home Page** – Overview of website
- **Gallery Page** – Shows all interior designs
- **Contact Us Page** – Direct message/feedback form
- **Registration Page** – Create new user account
- **Login Page** – User authentication
- **Logout** – Session destroy

### 🛠 Admin Panel
- Admin Login (separate credentials)
- Manage users (view/delete)
- Approve or remove designs
- View all feedback submitted by users
- Upload new décor items or posts

---

## 🛠️ Tech Stack
| Layer | Technology |
|-------|------------|
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP (Core PHP) |
| Database | MySQL (phpMyAdmin) |
| Server | XAMPP / Apache |

---

## 📁 Project Structure (Sample)
```
InteriorDecorWebApp/
│
├── index.php              → Home Page
├── gallery.php            → Gallery Page
├── contact.php            → Contact Page
├── login.php              → User Login
├── register.php           → User Registration
├── logout.php             → Destroy Session
│
├── user/
│   ├── upload-design.php  → User uploads custom design
│   └── dashboard.php      → User dashboard
│
├── admin/
│   ├── admin-login.php
│   ├── admin-dashboard.php
│   ├── manage-users.php
│   ├── manage-designs.php
│   └── view-feedback.php
│
├── assets/
│   ├── css/
│   ├── js/
│   └── uploads/           → Design images uploaded by users
│
└── database/
    └── interior_db.sql    → MySQL Database Export
```

---

## 🧩 Database Structure (Recommended)

### **Users Table (users)**
| Field | Type | Description |
|-------|------|-------------|
| id | INT | Primary Key |
| name | VARCHAR | User name |
| email | VARCHAR | Unique email |
| password | VARCHAR | Encrypted password |

### **Designs Table (designs)**
| Field | Type |
|-------|------|
| id | INT |
| user_id | INT |
| image_path | VARCHAR |
| description | TEXT |
| created_at | TIMESTAMP |

### **Feedback Table (feedback)**
| Field | Type |
|-------|------|
| id | INT |
| user_id | INT |
| message | TEXT |
| created_at | TIMESTAMP |

---

## 🚀 Setup Instructions (XAMPP)
1. Install **XAMPP**
2. Copy project folder into:  
   `C:/xampp/htdocs/InteriorDecorWebApp`
3. Start **Apache** & **MySQL** from XAMPP
4. Open phpMyAdmin → Create database: `interior_db`
5. Import SQL file: `database/interior_db.sql`
6. Open project in browser:  
   `http://localhost/InteriorDecorWebApp/`

---

## 🎯 Next Improvements
- Email verification for registration
- Password reset using OTP
- Better admin dashboard (charts, analytics)
- Image optimization for faster loading
- Deployment on shared hosting / cPanel

---

## 👨‍💻 Developer
**Ayush Raushan**
GitHub: [@Ayushraushan](https://github.com/Ayushraushan)

---

## ⭐ Features
- **Home / Landing Page**
- **Product Catalog** with grid layout
- **Search** filter for products
- **Product Detail Modal**
- **Add to Cart** (stored in `localStorage`)
- **Admin Panel** to add new products (stored in `localStorage`)
- **Contact Form** (client‑side)
- **No Backend Required** for MVP

---

## 🛠️ Tech Stack
- **React** (Functional Components + Hooks)
- **Vite** for fast development
- **LocalStorage** for persistence
- **CSS** (minimal custom styling; Tailwind optional)

---

## 📁 Project Structure
```
InteriorDecorWebApp/
 ├── src/
 │   ├── App.jsx
 │   ├── main.jsx
 │   ├── index.css
 │   ├── components/
 │   │   └── ProductCard.jsx
 │   └── data/
 │       └── defaultProducts.json
 ├── package.json
 └── README.md
```

---

- To deploy quickly, use Vercel or Netlify.
- Want me to: create the GitHub repo and push these files? I can produce the exact git commands or a ZIP.
