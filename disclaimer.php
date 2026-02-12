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
            <h1>Отказ от ответственности (Дисклеймер)</h1>

            <p>
                <strong>Общая информация:</strong> Все материалы, обучающие модули и сведения,
                опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                информационно-ознакомительный характер. Они не являются и не должны
                рассматриваться как персональная инвестиционная рекомендация,
                профессиональный юридический или финансовый совет. Представленные AI-инструменты 
                предназначены для оптимизации рабочих процессов и не гарантируют автоматического извлечения прибыли.
            </p>

            <p>
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                относительно абсолютной точности или актуальности результатов, генерируемых нейросетями. 
                Любые упоминания стратегий роста, программ пассивного дохода или прошлых
                результатов наших пользователей не являются обещанием аналогичных итогов в будущем. 
                Индивидуальные результаты зависят от ваших навыков, рыночных условий в Англии и ЕС, 
                а также корректности применения предложенных методологий.
            </p>

            <p>
                <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                его владельцы и аффилированные лица не несут ответственности за
                любые прямые или косвенные убытки, решения или действия,
                предпринятые вами на основе данных с этого ресурса. Вся
                ответственность за использование передовой цифровой инфраструктуры и возможные последствия
                лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> 
                базируется на текущих технологических стандартах 2026 года.
            </p>

            <p>
                <strong>Предупреждение о рисках:</strong> Любое внедрение инновационных технологий в 
                бизнес-процессы или финансовое планирование сопряжено с определенным уровнем риска. 
                Перед принятием важных стратегических решений мы настоятельно рекомендуем провести
                собственное исследование и, при необходимости, проконсультироваться с квалифицированным
                независимым специалистом в соответствующей области.
            </p>

            <p>
                <strong>Подтверждение пользователя:</strong> Продолжая использовать
                сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что полностью осознаете 
                и принимаете все упомянутые условия данного отказа от ответственности. Доступ к платформе 
                предоставляется лицам, достигшим 18 лет, на условиях «как есть».
            </p>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Февраль 2026</p>
            </div>
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