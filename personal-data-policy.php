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
            <h1>Политика обработки персональных данных</h1>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных.
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, включая защиту прав на
                неприкосновенность частной жизни и личную тайну.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, обеспечивающих их доступность в сети интернет по адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к Пользователю веб-сайта.
                </li>
                <li>
                    <strong>Обработка данных</strong> — любое действие, совершаемое с
                    использованием средств автоматизации или без них с персональными данными.
                </li>
                <li>
                    <strong>Безопасность</strong> — защищенность
                    персональных данных от неправомерного доступа, уничтожения или изменения.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li>
                    <strong>Данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номер телефона (валидация по стандартам UK/EU).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            На сайте происходит сбор обезличенных данных
                            о посетителях (файлы «cookie») для анализа активности. Эти данные включают 
                            IP-адрес, тип устройства и параметры сессии.
                        </li>
                    </ul>
                </li>
            </ul>
            <p>
                Вышеперечисленные данные в рамках Политики <strong><?= $domainTitle ?></strong> объединены общим
                понятием Персональные данные.
            </p>

            <h2>4. Цели обработки персональных данных</h2>
            <ul>
                <li>
                    Предоставление доступа к AI-инструментам и сервисам платформы.
                </li>
                <li>
                    Установление обратной связи, включая направление
                    уведомлений и обработку заявок на консультации.
                </li>
                <li>
                    Обеспечение экспертной поддержки на всех этапах работы в странах ЕС и Великобритании.
                </li>
                <li>
                    Информирование Пользователя посредством Email. 
                    Вы всегда можете отказаться от рассылок, направив письмо на 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    с пометкой «Unsubscribe».
                </li>
                <li>
                    Улучшение качества работы интерфейса и аналитика пользовательского пути.
                </li>
            </ul>

            <h2>5. Правовые основания</h2>
            <p>
                Оператор обрабатывает данные только при наличии:
            </p>
            <ul>
                <li>
                    Добровольного согласия, выраженного 
                    путем заполнения форм на сайте <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Разрешения на использование файлов «cookie» в настройках вашего браузера.
                </li>
            </ul>

            <h2>6. Безопасность и сроки хранения</h2>
            <ul>
                <li>
                    Оператор принимает технические меры защиты данных в соответствии с нормами GDPR.
                </li>
                <li>
                    Данные никогда не передаются третьим лицам без законных на то оснований.
                </li>
                <li>
                    Срок обработки является неограниченным до момента отзыва согласия Пользователем 
                    через письмо на email <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>7. Заключительные положения</h2>
            <ul>
                <li>
                    Пользователь может получить разъяснения, обратившись к 
                    Оператору по адресу <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> всегда доступна в 
                    нижней части сайта <strong><?= $fullDomain ?></strong>.
                </li>
            </ul>
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