# Pinnacle Speaking 🎙️
### Premier Public Speaking & English Communication Institute Web Application

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)

---

## 📌 About The Project

**Pinnacle Speaking** is a modern, responsive, and SEO-optimized web application developed for an elite public speaking and English communication coaching institute based in **Virar (West), Palghar, Maharashtra**.

The platform is designed to convert visitors into enrolled students through clear course pathways, real-time lead capture, direct WhatsApp interaction, and high local search ranking.

---

## ✨ Key Features

- **🎓 Comprehensive Course Catalog:** Detailed syllabus, target audience, and level-by-level breakdowns for career professionals, students, and young authors.
- **💬 Lead Capture & WhatsApp Integration:**
  - Phone and WhatsApp number collection in contact forms.
  - Floating WhatsApp chat widget across the site with pre-filled inquiries.
  - One-click call (`tel:`) and email (`mailto:`) triggers.
- **📍 Local SEO & Rich Schemas:**
  - Pre-configured Geo-tags targeting Virar West, Palghar.
  - JSON-LD `EducationalOrganization` structured data for Google Rich snippets.
  - Dynamic XML Sitemap (`/sitemap.xml`) indexing courses and blog posts.
- **🛡️ Secure Admin Control Panel:**
  - Protected admin dashboard (`/admin/login`).
  - Student inquiries/leads management with search, filter, and 1-click WhatsApp reply.
- **🎨 Modern & Responsive UI:**
  - Lightweight Tailwind CSS layout with custom brand tokens.
  - Scroll-reveal animations and mobile hamburger navigation.
  - Interactive Google Maps embed for the institute's physical location.

---

## 🛠️ Tech Stack

- **Backend:** Laravel 12.x (PHP 8.2+)
- **Database:** MySQL
- **Frontend:** Blade Templates, Tailwind CSS CDN, Vanilla JavaScript (IntersectionObserver)
- **Architecture:** MVC (Model-View-Controller)
- **Deployment Ready:** Apache (`.htaccess`) / Nginx configurations

---

## 🚀 Getting Started

Follow these steps to set up and run the project locally on your machine:

### 1. Prerequisites
Ensure you have the following installed:
- PHP >= 8.2
- Composer
- MySQL Server (e.g. via XAMPP, Laragon, or standalone)
- Git

### 2. Clone the Repository
```bash
git clone https://github.com/Saurabh63-op/pinnacle-speaking.git
cd pinnacle-speaking
```

### 3. Install Dependencies
```bash
composer install
```

### 4. Environment Configuration
Copy `.env.example` to `.env`:
```bash
cp .env.example .env
```
Generate your application key:
```bash
php artisan key:generate
```

Configure your MySQL database credentials in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pinnacle_speaking
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Run Migrations & Seeders
Create the database in MySQL and run:
```bash
php artisan migrate --seed
```

### 6. Start the Local Development Server
```bash
php artisan serve
```
Open your browser and visit: `http://127.0.0.1:8000`

---

## 🔐 Admin Panel Access

- **URL:** `http://127.0.0.1:8000/admin/login`
- **Default Email:** `admin@pinnacle.in`
- **Default Password:** `admin123`

---

## 📂 Project Structure Overview

```
├── app/
│   ├── Http/Controllers/     # Page, Course, Blog, Contact & Admin Controllers
│   └── Models/               # Course, Post, Location, ContactSubmission, User
├── database/
│   ├── migrations/           # Database schema definitions
│   └── seeders/              # Initial course, blog, and admin seeders
├── public/
│   ├── css/                  # Custom design tokens & animations
│   ├── images/               # High-res photography & assets
│   ├── js/                   # Scroll-reveal & interactivity
│   └── favicon.svg           # Brand favicon
├── resources/
│   └── views/
│       ├── admin/            # Admin dashboard & lead management views
│       ├── blog/             # Article list and details
│       ├── courses/          # Course catalog & detailed landing pages
│       ├── layouts/          # Base HTML layout with SEO schemas
│       └── partials/         # Header & Footer components
└── routes/
    └── web.php               # Public & protected web routes
```

---

## 👤 Author

Developed with care by **[Saurabh](https://github.com/Saurabh63-op)**.

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).
