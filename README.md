<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Statistics Hitsukaya
[![Hitsukaya](https://img.shields.io/badge/Hitsukaya-red)](https://hitsukaya.com) 
[![Status](https://img.shields.io/badge/Status-In%20Development-yellow)](https://statistics.hitsukaya.com) 
[![Demo](https://img.shields.io/badge/Demo-Online-green)](https://statistics.hitsukaya.com)
[![License](https://img.shields.io/badge/License-MIT-blue)](https://opensource.org/licenses/MIT)


**Status:** In Development  
**Demo:** [https://statistics.hitsukaya.com](https://statistics.hitsukaya.com)

---

## Description

Statistics Hitsukaya is a custom platform for monitoring web services and infrastructure, providing clear visualizations of system status and real-time indicators.

---

## Features

- **Web Services & API:** Online/offline status with visual indicators (green = online, red = offline)  
- **Databases:** MySQL, PostgreSQL, MongoDB – monitor uptime and response times  
- **Email Servers:** SMTP, IMAP, POP3 – connectivity and functionality checks  
- **Security:** Blocked IP list and SSL status  

---

## Current Status

- No functional backend yet  
- Demo shows the planned interface and features  

---

## Future Plans

- Automated real-time data collection  
- Notifications and alerts for critical events  
- Expanded monitoring of additional servers and external APIs  

---

## Technologies

- **Frontend:** HTML, CSS, JavaScript  
- **Backend (planned):** Laravel  
- **Databases:** MySQL, PostgreSQL, MongoDB  
- **Email Servers:** SMTP, IMAP, POP3

## Getting Started

Follow these steps to run the project locally:

```bash
# Clone the repository
git clone https://github.com/Hitsukaya/statistics-services-host.git
cd statistics-hitsukaya

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Compile frontend assets
npm run dev

# Copy .env example
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations (if needed)
php artisan migrate

# Serve the application
php artisan serve

