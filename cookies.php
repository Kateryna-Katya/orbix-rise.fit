<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — AI-инструменты для реальных задач
    </title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2245%22 fill=%22none%22 stroke=%22url(%23g)%22 stroke-width=%228%22/><defs><linearGradient id=%22g%22 x1=%220%22 y1=%220%22 x2=%221%22 y2=%221%22><stop offset=%220%25%22 stop-color=%22%23a855f7%22/><stop offset=%22100%25%22 stop-color=%22%233b82f6%22/></linearGradient></defs><path d=%22M30 50 Q50 20 70 50 T30 50%22 fill=%22url(%23g)%22 opacity=%220.8%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="./#hero" class="logo">
                    <span class="logo-dot"></span>
                    <?= $domainTitle ?>
                </a>

                <ul class="nav-list">
                    <li><a href="./#hero" class="nav-link">Главная</a></li>
                    <li><a href="./#features" class="nav-link">Возможности</a></li>
                    <li><a href="./#how-it-works" class="nav-link">Как это работает</a></li>
                    <li><a href="./#benefits" class="nav-link">Преимущества</a></li>
                    <li><a href="./#faq" class="nav-link">Вопросы</a></li>
                </ul>

                <a href="./#contact" class="btn btn-primary">Связаться</a>

<button class="burger" id="burger-menu" aria-label="Menu">
    <span></span>
    <span></span>
    <span></span>
</button>
            </nav>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1>Политика использования файлов cookie</h1>

            <p>
                Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашей платформой, обеспечить корректную работу AI-инструментов и
                анализировать активность пользователей, мы используем файлы cookie и
                схожие технологии. Настоящая политика объясняет, какие технологии мы применяем, 
                для каких целей и как вы можете ими управлять.
            </p>

            <h2>Что такое файлы cookie?</h2>
            <p>
                Файл cookie — это небольшой фрагмент данных, который веб-сайт сохраняет на вашем устройстве, 
                когда вы его посещаете. Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" 
                ваши действия и предпочтения (например, язык, настройки региона и параметры сессии) 
                в течение определенного времени, чтобы вам не приходилось вводить их повторно.
            </p>

            <h2>Какие типы файлов cookie мы используем?</h2>
            <p>
                Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                следующим категориям:
            </p>
            <ul>
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Критически важны для функционирования 
                    интерфейса. Они позволяют вам перемещаться по разделам <strong><?= $domainTitle ?></strong> 
                    и использовать безопасный доступ к функциям платформы.
                </li>
                <li>
                    <strong>Аналитические файлы cookie:</strong> Собирают анонимную информацию о том, как 
                    пользователи взаимодействуют с нашими AI-решениями, помогая нам оптимизировать 
                    цифровую инфраструктуру.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Позволяют сайту запоминать ваш выбор 
                    для предоставления более персонализированного опыта в рамках стратегии роста.
                </li>
                <li>
                    <strong>Маркетинговые файлы cookie:</strong> Используются для доставки материалов, 
                    соответствующих вашим интересам в сфере инноваций.
                </li>
            </ul>

            <h2>Зачем мы используем файлы cookie?</h2>
            <p>Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
            <ul>
                <li>Обеспечение стабильной работы передовых алгоритмов сайта.</li>
                <li>Анализ поведения для улучшения пользовательского пути, понятного каждому.</li>
                <li>Персонализация настроек для удобства пользователей в Великобритании и Европе.</li>
                <li>Защита данных и предотвращение несанкционированного доступа.</li>
            </ul>

            <h2>Ваш выбор и управление файлами cookie</h2>
            <p>
                Вы имеете полный контроль над файлами cookie. Вы можете в любой момент изменить настройки 
                в своем браузере или через наш баннер. Обратите внимание: отключение строго необходимых 
                cookie может привести к некорректной работе некоторых AI-функций нашего сайта.
            </p>

            <h2>Файлы cookie третьих сторон</h2>
            <p>
                На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы 
                сторонних партнеров для аналитики или отображения интерактивных элементов. 
                Мы рекомендуем ознакомиться с их политиками конфиденциальности (например, Google Analytics).
            </p>

            <h2>Контактная информация</h2>
            <p>
                Если у вас возникли вопросы касательно политики использования файлов cookie на 
                <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нашей службой поддержки:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+442011870189">+44 20 1187 0189</a><br>
                Адрес: 85 Great Portland St, London W1W 7LT, United Kingdom
            </p>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col info">
                    <a href="./#hero" class="logo footer-logo">
                        <span class="logo-dot"></span>
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer-desc">Технологии нового поколения, которые меняют правила игры и делают AI
                        доступным для каждого.</p>
                </div>

                <div class="footer-col">
                    <h4>Навигация</h4>
                    <ul class="footer-links">
                        <li><a href="./#features">Возможности</a></li>
                        <li><a href="./#how-it-works">Инструкции</a></li>
                        <li><a href="./#benefits">Выгоды</a></li>
                        <li><a href="./#faq">Помощь</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Документы</h4>
                    <ul class="footer-links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Контакты</h4>
                    <ul class="footer-contacts">
                        <li><i data-lucide="phone" size="18"></i> +44 20 1187 0189</li>
                        <li><i data-lucide="mail" size="18"></i> hello@
                            <?= $fullDomain ?>
                        </li>
                        <li><i data-lucide="map-pin" size="18"></i> 85 Great Portland St, London, UK</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026
                    <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
                </p>
            </div>
        </div>
    </footer>
<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-content">
        <i data-lucide="cookie"></i>
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn-primary">Принять</button>
    </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>