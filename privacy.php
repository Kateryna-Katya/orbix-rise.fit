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
            <h1>Политика конфиденциальности</h1>

            <p>
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами <strong><?= $domainTitle ?></strong> как для использования 
                AI-инструментов платформы, так и для других взаимодействий в электронном
                формате, включая участие в экспертных программах, получение технической поддержки 
                и информационного сопровождения.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц (например, сервисы визуализации или аналитики), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности сторонними компаниями. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2>Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p>
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных услуг: доступа к инновационной цифровой инфраструктуре,
                получения аналитических отчетов и внедрения AI-решений в повседневные задачи. Для
                предотвращения утечки данных мы используем комплекс мер информационной безопасности, включая современные протоколы шифрования и стандарты защиты данных Великобритании и ЕС.
            </p>

            <p>
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p>
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель сбора была достигнута или по запросу клиента.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2>Техническая информация:</h2>
            <ul>
                <li>время доступа и IP-адрес;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы, посещаемые пользователем;</li>
                <li>просмотры информационных и рекламных блоков;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
            </ul>

            <p>
                При регистрации или заполнении форм обратной связи мы собираем информацию, 
                необходимую для аутентификации и персонализации услуг в рамках вашей стратегии роста:
            </p>
            <ul>
                <li>имя пользователя;</li>
                <li>e-mail и номер телефона для оперативной связи;</li>
            </ul>

            <h2>Информация о действиях пользователя:</h2>
            <ul>
                <li>информация о соглашениях и использовании сервисов <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах, отправленных через формы обратной связи;</li>
                <li>сведения о полученных консультациях и пройденных этапах обучения;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная законодательством.</li>
            </ul>

            <h2>Цели обработки персональных данных клиентов:</h2>
            <ul>
                <li>предоставление доступа к AI-платформе и аналитическим инструментам;</li>
                <li>учет пожеланий при разработке новых технологических решений;</li>
                <li>информирование о новых возможностях, программах пассивного дохода и материалах через e-mail;</li>
                <li>обеспечение качественной экспертной поддержки на всех этапах.</li>
            </ul>

            <h2>
                <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:
            </h2>
            <ul>
                <li>получения прямого согласия пользователя на такую передачу;</li>
                <li>по требованию компетентных органов Великобритании в соответствии с законодательством;</li>
                <li>случаев стратегического слияния или поглощения компании.</li>
            </ul>

            <h2>Использование файлов cookie и точечных маркеров</h2>
            <p>
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным и понятным каждому. 
                Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2>Права пользователя в отношении персональных данных</h2>
            <p>
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами GDPR, 
                пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
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