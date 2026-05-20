# Blogy — PHP Blog System

Simple blog system built with pure PHP, MySQL, Smarty and Docker.

---

# 🚀 Stack

- PHP 8.2+
- MySQL 8
- Smarty
- Docker & Docker Compose
- Nginx
- PDO

---

# 🚀 Installation

git clone <https://github.com/passavlasso/project>

cd project

1. Start Docker containers
- docker-compose up -d --build
2. Install Composer dependencies
- docker exec -it project_app composer install
3. Run migrations
- docker exec -it project_app php database/migrate.php
4. Run seeders
- docker exec -it project_app php database/seed.php

---

# Available Services
Service	URL

Website	http://localhost:8000

Adminer http://localhost:8080

Adminer Access

-System:	MySQL

-Server:	mysql

-Username:	root

-Password:	root

-Database:	blog

---