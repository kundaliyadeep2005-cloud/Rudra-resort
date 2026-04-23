<div align="center">

# 🏨 Rudra Resort

### *Your Dream Resort Is Here*

A **full-stack hotel reservation web application** —  
featuring room browsing, booking simulation, star ratings, facilities showcase, and user profile management.

---

![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-MariaDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Font Awesome](https://img.shields.io/badge/Font_Awesome-6-528DD7?style=for-the-badge&logo=fontawesome&logoColor=white)
![License](https://img.shields.io/badge/License-Academic-green?style=for-the-badge)

</div>

---

## 📌 Table of Contents

- [About the Project](#-about-the-project)
- [Key Features](#-key-features)
- [Tech Stack](#-tech-stack)
- [Project Structure](#-project-structure)
- [Database Schema](#-database-schema)
- [Installation & Setup](#-installation--setup)
- [How It Works — User Flow](#-how-it-works--user-flow)
- [Security Implementations](#-security-implementations)
- [Screenshots](#-screenshots)
- [Known Limitations](#-known-limitations)
- [Developer](#-developer)

---

## 📖 About the Project

**Rudra Resort** is a full-stack hotel reservation website that allows guests to register, browse available rooms, simulate a room booking, submit star ratings and reviews, explore hotel facilities, and manage their profile.

The project uses a **dual-database architecture** — one database (`user_db`) handles user accounts and authentication, while another (`website`) stores the rooms inventory and facilities information. The entire site is dynamically driven from these two databases using PHP and MySQLi.

This project was developed as a **Semester 4 academic project** at **RK University, Rajkot** — applying core PHP web development skills including session management, file uploads, form validation, and database-driven content rendering.

---

## ✨ Key Features

### 👤 User Side
- **User Registration** — sign up with username, email, password, confirm password, and optional profile photo
- **User Login / Logout** — session-based authentication
- **Dynamic Navbar** — shows different links for logged-in vs. guest users, with active link highlighting
- **Room Browsing** — view all 16 rooms from the database with photos, names, descriptions, and star ratings
- **View Room Price** — collapsible price reveal per room card (Bootstrap collapse)
- **Room Booking Simulation** — fill a booking form with name, email, phone, guests, check-in/out dates, and room type; validated entirely with JavaScript
- **Star Rating & Review** — submit a 1–5 star rating and written review for any specific room
- **Our Facility Page** — DB-driven facility cards: Room Service, Room Cleaning, Order Meal, Any Help, Emergency, Any Issues
- **About Us Page** — Our Story, Founder, Investors, and Partners section
- **User Profile** — view username, email, account status, and profile photo
- **Update Profile** — change name, email, profile photo, and password (with old password verification)
- **Past Bookings** — table showing previous booking history with room photo, type, price, dates, services, and payment method
- **Account Status System** — `active` / `inactive` user statuses tracked in DB

### 🌐 General
- **Hero Carousel** — fullscreen 3-slide homepage carousel with captions and CTA buttons
- **Footer** — contact info (email, phone, address), quick links, and social media icons (Facebook, X, Instagram, LinkedIn)
- **PHPMailer Ready** — PHPMailer library included for email-based account verification flow

---

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| **Backend** | PHP 8.2 |
| **Databases** | MySQL / MariaDB 10.4 — two separate DBs (`user_db`, `website`) |
| **DB Access** | MySQLi (Object-oriented + Procedural mix) |
| **Frontend** | Bootstrap 5.3, custom CSS per page |
| **Icons** | Font Awesome 6 (via CDN kit) |
| **JavaScript** | Vanilla JS (booking form validation) |
| **Email** | PHPMailer (included, ready to configure) |
| **Local Dev** | XAMPP (Windows) |

---

## 📁 Project Structure

```
rudra-resort/  (sem-4 Rudra-resort/)
│
├── index.php                        # Landing page — hero carousel (3 slides)
│
├── php/                             # All user-facing pages
│   ├── home.php                     # User profile page (avatar, name, email, status)
│   ├── rooms.php                    # Room listing from DB with ratings + booking links
│   ├── booking.php                  # Booking form with JS validation (simulated)
│   ├── feedback.php                 # Star rating + review submission per room
│   ├── our-facility.php             # Facilities page (DB-driven: 6 service cards)
│   ├── about-us.php                 # About page (Our Story, Founder, Investors, Partners)
│   ├── past_booking.php             # Past bookings history table (static demo data)
│   └── update_profile.php           # Update name, email, photo, and password
│
├── auth/                            # Authentication pages
│   ├── register.php                 # User sign-up form with photo upload
│   ├── login.php                    # User login form
│   └── verify_account.php           # Email account activation handler
│
├── includes/                        # Shared PHP components
│   ├── config.php                   # DB connections (user_db + website), BASE_URL, session
│   ├── header.php                   # HTML head, Bootstrap, Font Awesome imports
│   ├── navbar.php                   # Dynamic navbar (logged-in vs. guest view)
│   └── footer.php                   # Footer (contact, quick links, social icons)
│
├── assets/
│   ├── css/                         # Page-specific stylesheets
│   │   ├── style.css                # Global / shared styles
│   │   ├── index.css                # Landing page + auth pages
│   │   ├── home.css                 # Profile page
│   │   ├── rooms.css                # Rooms listing page
│   │   ├── booking.css              # Booking form
│   │   ├── feedback.css             # Rating & feedback page
│   │   ├── our-facility.css         # Facilities page
│   │   ├── about-us.css             # About Us page
│   │   └── past_booking.css         # Past bookings table
│   │
│   ├── images/                      # All static resort images
│   │   ├── index1.jpg               # Hero carousel slide 1
│   │   ├── index2.jpg               # Hero carousel slide 2
│   │   ├── index3.jpg               # Hero carousel slide 3
│   │   ├── r19.jpg – r53.jpg        # Room photos (16 rooms)
│   │   ├── h1.jpg, h4.jpg           # Additional room photos
│   │   ├── logo.png                 # Site logo (small)
│   │   ├── main-logo.png            # Navbar logo
│   │   ├── founder2.jpeg            # About Us — founder photo
│   │   ├── investors.jpg            # About Us — investors photo
│   │   ├── partner2.jpg             # About Us — partners photo
│   │   └── default-avatar.png       # Default profile avatar
│   │
│   └── uploaded_img/                # User-uploaded profile photos (timestamped)
│
├── database/                        # SQL schema files
│   ├── user_db(3).sql               # user_db schema → user_form table
│   ├── website(2).sql               # website schema → rooms + our-facilities tables
│   ├── our-facilities.sql           # Standalone facilities table dump
│   └── mysql databse table.sql      # Basic user_form table definition
│
└── PHPMailer/                       # PHPMailer library (email support)
    ├── PHPMailer.php
    ├── SMTP.php
    └── Exception.php
```

---

## 🗄️ Database Schema

The project uses **two separate databases**:

### Database 1: `user_db`

| Table | Purpose |
|---|---|
| `user_form` | All registered users — stores credentials, profile image, account status |

#### `user_form` columns:
```sql
id        INT AUTO_INCREMENT PRIMARY KEY
name      VARCHAR(100) NOT NULL
email     VARCHAR(100) NOT NULL UNIQUE
password  VARCHAR(100) NOT NULL           -- MD5 hashed
image     VARCHAR(100)                   -- uploaded profile photo filename
status    VARCHAR(100)                   -- 'active' or 'inactive'
```

---

### Database 2: `website`

| Table | Purpose |
|---|---|
| `rooms` | All room listings — image, name, description, price per night, star rating, review text |
| `our-facilities` | Hotel service descriptions for the Facilities page |

#### `rooms` columns:
```sql
id          INT AUTO_INCREMENT PRIMARY KEY
images      VARCHAR(100)        -- image filename (relative path)
name        VARCHAR(50)         -- room type name (e.g. LUXURY CLASS)
description VARCHAR(50)         -- short room tagline
price       INT                 -- price per night in ₹
rating      INT                 -- 0 to 5 stars (updated via feedback form)
review      TEXT                -- latest review text
```

#### `our-facilities` columns:
```sql
our-facilities_id  INT AUTO_INCREMENT PRIMARY KEY
room_service       TEXT    -- Room service description
room_cleaning      TEXT    -- Housekeeping description
order_meal         TEXT    -- In-room dining description
any_help           TEXT    -- Concierge / assistance description
emergency          TEXT    -- Emergency services description
any_issues         TEXT    -- Issue resolution description
```

> The project seeds **16 rooms** by default — including Luxury Class, Sea Side View, Super Lative Class, Double Bed, Dream Class, Garden Side View, and more — all with individual prices ranging from ₹2,000 to ₹4,000 per night.

---

## ⚙️ Installation & Setup

### Prerequisites
- PHP 8.0 or higher
- MySQL / MariaDB
- Apache server
- **Recommended:** [XAMPP](https://www.apachefriends.org/) on Windows

---

### Step 1 — Clone the Repository
```bash
git clone https://github.com/YOUR_USERNAME/rudra-resort.git
cd rudra-resort
```

### Step 2 — Set Up the Databases

> This project requires **two databases** to be created separately.

1. Open **phpMyAdmin**.
2. Create the first database:
   ```sql
   CREATE DATABASE user_db;
   ```
3. Select `user_db` → **Import** → upload `database/user_db(3).sql`

4. Create the second database:
   ```sql
   CREATE DATABASE website;
   ```
5. Select `website` → **Import** → upload `database/website(2).sql`

   This will create and populate:
   - `rooms` table with 16 hotel rooms
   - `our-facilities` table with 6 service descriptions

### Step 3 — Configure Database Connection

Open `includes/config.php` and update credentials if needed:

```php
$conn = mysqli_connect('localhost', 'root', '', 'user_db');    // User accounts DB
$con  = mysqli_connect('localhost', 'root', '', 'website');    // Rooms & facilities DB
```

For XAMPP default setup (root with no password), no changes are needed.

> ⚠️ **Security Note:** Never commit real database credentials to GitHub. Use environment variables for any production deployment.

### Step 4 — Place the Project in Server Root

For **XAMPP**: Place inside `C:/xampp/htdocs/`

```
C:/xampp/htdocs/rudra-resort/
```

### Step 5 — Access the Application

| URL | Page |
|---|---|
| `http://localhost/rudra-resort/` | Homepage (hero carousel) |
| `http://localhost/rudra-resort/auth/register.php` | Register a new account |
| `http://localhost/rudra-resort/auth/login.php` | Login |
| `http://localhost/rudra-resort/php/rooms.php` | Browse all rooms |
| `http://localhost/rudra-resort/php/booking.php` | Book a room |
| `http://localhost/rudra-resort/php/our-facility.php` | Hotel facilities |
| `http://localhost/rudra-resort/php/home.php` | User profile |

---

## 🔄 How It Works — User Flow

```
[Guest visits site]
     │
     ▼
Homepage — Hero carousel (3 slides with CTA buttons)
     │
     ├── Not logged in → Navbar shows: HOME | SIGN-UP | LOG-IN | ABOUT-US
     └── Logged in    → Navbar shows: HOME | ROOMS | ABOUT US | OUR FACILITY | PROFILE | PAST BOOKINGS
     │
     ▼
[Register]
     │
     ├── Enter: Username, Email, Password, Confirm Password + optional Profile Photo
     ├── Check duplicate email (prepared statement)
     ├── Password match check → MD5 hash both → store in user_db
     └── Profile photo uploaded → /assets/uploaded_img/
     │
     ▼
[Login]
     │
     └── Email + MD5(password) → matched against user_form → Session started
     │
     ▼
[Rooms Page] — Login Required
     │
     ├── All 16 rooms fetched from `rooms` table (website DB)
     ├── Each card shows: photo, room name, description, star rating
     ├── "View Price" → Bootstrap collapse reveals ₹ per night
     ├── "Book Now"   → goes to booking.php?room_id=X
     └── "Rate & Review" → goes to feedback.php?room_id=X
     │
     ▼
[Booking Page] — Login Required
     │
     ├── Form: Full Name, Email, Phone, Guests (1–7), Check-In, Check-Out, Room Type
     ├── JavaScript Validation:
     │     - Name: required, min 2 chars, no numbers
     │     - Email: must contain '@' and end with '.'
     │     - Phone: exactly 10 digits
     │     - Dates: both required, checkout must be after checkin
     └── On success: alert "✅ Booking simulated!" → redirects to homepage
     │
     ▼
[Feedback Page] — Login Required
     │
     ├── Select star rating (1–5) + write review text
     └── On submit: UPDATE rooms SET rating=?, review=? WHERE id=?
     │
     ▼
[Our Facility Page] — Login Required
     │
     └── 6 DB-driven service cards: Room Service, Cleaning, Meals, Help, Emergency, Issues
     │
     ▼
[Profile Page]
     │
     ├── Shows: avatar, name, email, account status badge
     └── Links to Update Profile or Logout
     │
[Update Profile]
     │
     ├── Change name and/or email
     ├── Upload new profile photo
     └── Change password (requires old password → MD5 verify → MD5 store new)
```

---

## 🔐 Security Implementations

| Feature | Implementation |
|---|---|
| **Password Hashing** | MD5 used for password storage on registration and login |
| **Input Sanitization** | `htmlspecialchars()` with `ENT_QUOTES` on name/email in registration |
| **SQL Injection Prevention** | MySQLi prepared statements with `bind_param()` on login, register, feedback |
| **Session Management** | `session_start()` via `config.php` — all protected pages check `$_SESSION['user_id']` |
| **Auth Guards** | Every protected page redirects to `auth/login.php` if session is not set |
| **Duplicate Email Check** | Prepared statement check before inserting a new user |
| **File Size Limit** | Profile photo upload blocked if over 2MB |
| **File Type Restriction** | Only `jpg`, `jpeg`, `png` accepted for profile photos |
| **Old Password Verification** | Password change requires MD5 match of existing password before updating |
| **BASE_URL Auto-detection** | Dynamic base URL computed from `DOCUMENT_ROOT` — works in subdirectory setups |
| **XSS Output Escaping** | `htmlspecialchars()` used when rendering user names, emails, room data |

> ⚠️ **Note on MD5:** MD5 is not a secure hashing algorithm for passwords by modern standards. For any future production version, replace MD5 with `password_hash()` / `password_verify()` (bcrypt). This is a known academic-project limitation.

---

## ⚠️ Known Limitations

- **MD5 password hashing** is used — this is cryptographically weak. Replace with `password_hash()` (bcrypt) before any real deployment.
- **Booking form is simulated** — the form validates client-side only and shows a confirmation alert. No booking data is actually stored in the database.
- **Past Bookings page** shows static hardcoded demo data — not fetched from a bookings table.
- **Room reviews** store only the latest single review per room (the `review` column gets overwritten with each submission — not a list).
- **No admin panel** — there is no backend dashboard to manage rooms, bookings, or users.
- **verify_account.php** uses a raw (unsanitized) GET parameter in a SQL query — a SQL injection vulnerability. Sanitize before deploying.
- **Profile photo filename** is stored as-is (original filename) in the DB — no timestamping or uniqueness handling on registration. This can cause overwrites.
- **Two database architecture** adds setup complexity. A single database would simplify installation.
- Built for **academic/educational purposes** at Semester 4 level — not production-ready without security improvements.

---

## 👨‍💻 Developer

**Deep Kundaliya**  
Student — RK University, Rajkot, Gujarat 🇮🇳  
Semester 4 — Web Development Project

> *"Rudra Resort was my first complete PHP web application — where I learned how to connect PHP to MySQL, manage user sessions, handle file uploads, and build a multi-page dynamic website from scratch."*

---

## 📄 License

This project was created for academic purposes at **RK University**.  
Feel free to fork, learn from, and build upon it.  
Please give credit if you use it as a reference. 🙏

---

<div align="center">

**Welcome to Rudra Resort 🏨**

*Made with ❤️ for Hospitality & Learning*

</div>
