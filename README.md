# maeochat - Simple Web Chat

## The Repository

This repository is made by Mohammad Amin & Witchie, we develop this website
together to learn modern frameworks and packages to finish a complete project
that contains text chatting and some simple jobs like searching users by id
and also we are working on a great way to secure authentication process.

Yes, this is just words that coming at us in readme file we published on github
but what we want is more than this and we try our best. Thank You :)

### Requirements

In order to use this project, your os should have the requirements softwares and
libraries.

+ apache2 ( optional but not recommended for production use )
+ php
+ mysql ( sqlite, ...)
+ browser ( firefox, chrome, ...)

### Installation

1. First of all clone the repository in your computer.

```
git clone https://github.com/BlaxKnight/maeochat.git
```

2. Next go to repository folder then install dependencies packages with npm.

```
npm install
```

3. After that install vendor packages.

```
composer install
```

4. Config .env file to connect to your database.

5. If everything alright just make sure generate laravel key and also migrate it

```
php artisan key:generate
php artisan migrate
php artisan optimize
```

6. Finally run vite & laravel server or use apache2, etc as your web server

```
npm run dev
php artisan serve
```

> [!NOTE]
> It is better to use `npm run build` for better security of your css and js
> files then run `npm run dev`.
