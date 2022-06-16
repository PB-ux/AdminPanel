Admin Panel
==================

Использовал [Yii2](https://www.yiiframework.com/), openServer, phpmyadmin.

В папке sql находится база данных с таблицами: товары, категории, пользователи, группы пользователей.

Структура проекта:

assets/ - содержит подключения ресурсов (js, css)
 
commands/ - содержит консольные команды
 
config/ - содержит конфигурационные файлы
    console.php - конфигурация консольного приложения
    db.php - конфигурация подключения к базе данных
    params.php - дополнительные параметры
    web.php - конфигурация веб приложения
 
controllers/ - содержит классы контроллеров
    SiteController.php - контроллер главной страницы и страницы 404
 
mail/ - содержит файлы представлений для электронной почты
 
models/ - содержит классы моделей
 
runtime/ - содержит файлы, созданные во время работы сайта (логи, кэш)
 
tests/ - содержит тесты для основных приложений
 
vendor/ - содержит фреймворк Yii и сторонние библиотеки
 
views/ - содержит файлы вида
    layouts/ - содержит шаблоны
        main.php
    site/ - содержит отдельные файлы страниц
        error.php
        index.php
        login.php
 
web/ - основная папка сайта, содержит файлы стилей, скрипты, картинки и т.д.
    favicon.ico
    index.php - точка входа
    index-test.php
    robots.txt

Главный экран страницы

![alt text](imgGit/Main_screen.png)

Авторизация

![alt text](imgGit/Auth_screen.png)

Административная панель, содержащая страницы

![alt text](imgGit/Admin_panel.png)

CRUD товаров

![alt text](imgGit/Product_crud.png)

Создание товара

![alt_text](imgGit/Product_create.png)
