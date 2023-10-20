<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SFU Game Space</title>
    <!-- Здесь можно подключить ваши стили CSS и скрипты JavaScript -->

</head>
<body>
<header>
    <!-- Верхняя часть страницы, включая название сайта и навигацию -->
    <h1>SFU Game Space</h1>
    <nav>
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/games">Игры</a></li>
            <li><a href="/tournaments">Турниры</a></li>
            <li><a href="/login">Вход</a></li>
            <li><a href="/register">Регистрация</a></li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    <!-- Нижняя часть страницы, например, информация о копирайте и контактах -->
    <p>&copy; 2023 SFU Game Space. Все права защищены.</p>
    <p>Контакты: yzenfer@mail.ru</p>
</footer>
<style>
    /* Reset some default styles for margin and padding */
    body, h1, h2, ul, li {
        margin: 0;
        padding: 0;
    }

    /* Apply a background color to the body */
    body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    /* Style the header */
    header {
        background-color: #333;
        color: #FF1493;
        padding: 10px 0;
        text-align: center;
    }

    header h1 {
        font-size: 24px;
    }

    nav ul {
        list-style: none;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
    }

    /* Style the main content area */
    main {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    /* Style the footer */
    footer {
        background-color: #333;
        color: #FF1493;
        text-align: center;
        padding: 10px 0;
    }

    /* Adjust styles for links in the content */
    a {
        color: #007BFF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

</style>
</body>
</html>
