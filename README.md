# laravel-project-management-system
BIT Sprint 5. Task: create projects management system based on two relations based entities in MySQL database with authentication.

## Task
Create a betting system for potential bookmaker. System is based on two entities in SQL database with 1:M relationship.  

## Launch 

- Clone repository 

- Run these commands in repository folder on terminal:
```
composer install
npm install
cp .env.example .env
php artisan key:generate
```
- Create empty database and configure .env file to connect to database.
- Run this command on terminal:
```
php artisan migrate:refresh --seed 
```
- Login with one of the seeded users credentials

## Screenshots 
![image](https://user-images.githubusercontent.com/59610142/109554423-ddf2c200-7adc-11eb-9b97-a544000898fb.png)
![image](https://user-images.githubusercontent.com/59610142/109552759-dd592c00-7ada-11eb-9022-2d6fe8d0aedb.png)
![image](https://user-images.githubusercontent.com/59610142/109552823-f1049280-7ada-11eb-8c6b-72a8eabd9f39.png)
![image](https://user-images.githubusercontent.com/59610142/109553522-ccf58100-7adb-11eb-9edd-a463b460399f.png)
