<h1 align="center"><img src="https://insight-ed.in/assets/logo%201200x1200-C15vqz6H.png" width="500"></h1>

## Welcome to Insight Ed - Your Trusted ERP Solution for Schools

<p>
Insight Ed is a comprehensive School Management and ERP software built to simplify school operations and enhance efficiency. Insight Ed Version 2.X is now live! 🎉
</p>

<p align="center">
Streamline your school management with an all-in-one solution tailored for schools and educational institutions.
</p>

[![Build Status](https://travis-ci.org/insight-ed/insight-ed.svg?branch=master)](https://travis-ci.org/insight-ed/insight-ed)
![Pricing](https://img.shields.io/badge/Pricing-Free-brightgreen)
[![Latest release](https://img.shields.io/github/release/insight-ed/insight-ed/all.svg)](https://github.com/insight-ed/insight-ed/releases)
[![MadeWithLaravel.com shield](https://madewithlaravel.com/storage/repo-shields/1362-shield.svg)](https://madewithlaravel.com/p/insight-ed/shield-link)
[![Discord](https://img.shields.io/discord/917848091107946556)](https://discord.gg/8sz6kpup99)
[![Contribute](https://img.shields.io/badge/Help%20Wanted-Contribute-blue)](https://github.com/insight-ed/insight-ed/issues?q=is%3Aissue+is%3Aopen+)

We aim to deliver intuitive, user-friendly, and innovative solutions for school management. Insight Ed provides an open-source, free-to-use platform that meets the highest quality standards. Our journey started with the vision to empower schools with cutting-edge tools for administration, finance, and learning management. Join us as we continue to innovate and improve.

## Framework Used

- [Laravel 10.X](https://laravel.com/docs/10.x)
- [Bootstrap 5.X](https://getbootstrap.com/docs/5.0/getting-started/introduction/)

<h1 align="center"><img src="public/docs/imgs/insight-ed/dashboard.png"></h1>

## Server Requirements

- PHP >= 8.1
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Features

Insight Ed is loaded with powerful features:

- Student and staff management
- Timetable and attendance tracking
- Integrated finance management
- Reporting and analytics
- Multi-language support
- Notifications and communication tools
- Role-based access controls

## What's New in Version 2.X

- Complete redesign of UI for an enhanced user experience.
- Improved workflows and efficiency.
- New features and modules added based on community feedback.

### Upcoming Features

We are continuously improving Insight Ed. The following features are planned for future updates:

- Library management system
- Certificate generation
- Advanced reporting tools
- Import/export for students and staff
- Multi-currency support for finance

## How to Start

### Using Docker Container


### Steps to install:
1. Clone or download the repository.
2. Create **purify** folder in `storage/app/` directory.
3. Run `cp .env.example .env`.
4. Run `docker-compose up -d`.
5. Run `docker exec -it db sh`. Inside the shell, run:

    ```sh
    :/# mysql -u root -p
    ```

    Mysql **Root password**: `your_mysql_root_password` in the `docker-compose.yml` file. Then run following commands:

    ```sql
    mysql> SHOW DATABASES;
    mysql> GRANT ALL ON unifiedtransform.* TO 'unifiedtransform'@'%' IDENTIFIED BY 'secret';
    mysql> FLUSH PRIVILEGES;
    mysql> EXIT;
    ```
6. Finally, exit the container by running `exit` in the container shell.
7. Run `docker exec -it app sh`. Inside the shell, run following commands:

    ```sh
    :/# composer install
    :/# php artisan key:generate
    :/# php artisan config:cache
    :/# php artisan migrate:fresh --seed
    ```

    Then exit from the container.
8. Visit **http://localhost:8080**. Admin login credentials:

    - Email: admin@ut.com
    - Password: password
