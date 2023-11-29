<body>
    <header>
        <a href="/" class="logo"><i class="ri-brain-line"></i>AI-Viever</a>
        <ul class="navlist">
            <li><a href="/">Главная</a></li>
            <li><a href="/about">О нас</a></li>
            <li><a href="/news">Контакты</a></li>
            <li><a href="/articles.php">База знаний</a></li>
            <?php
            if (!isset($_COOKIE['user'])) : ?>
                <li><a href="#loginModal">Регистрация / Вход</a></li>
            <?php else : ?>
                <li><a href="#"><?php echo getNameUser($_COOKIE['user'])?></a></li>
                <li><a href="/php/exit.php">Выход</a></li>
            <?php endif; ?>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <?php require_once("php/loginModal.php"); ?>