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
            <h1>Политика возврата средств</h1>
            
            <h2>Условии для оформления возврата</h2>
            <p>
                Вы можете претендовать на полный или частичный возврат средств в
                следующих ситуациях:
            </p>
            <ul>
                <li>
                    <strong>Несоответствие AI-программы описанию:</strong> Если содержание
                    предоставленных инструментов, обучающих модулей или экспертных материалов существенно отличается от функционала,
                    заявленного на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При
                    возникновении критических технических проблем в цифровой инфраструктуре 
                    <strong><?= $fullDomain ?></strong>, которые делают доступ к платформе или сессиям невозможным и не были
                    устранены нашей командой в разумные сроки.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Если вы
                    решили отказаться от использования платформы в течение 14 (четырнадцати) календарных
                    дней с момента оплаты, при условии, что вы еще не получили доступ
                    к значительному объему материалов или ресурсов (см. раздел «Исключения»).
                </li>
            </ul>

            <h2>Процедура запроса на возврат</h2>
            <p>
                Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                следующие шаги:
            </p>
            <ol class="custom-list">
                <li>
                    Составьте запрос и отправьте его на наш официальный email:
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма обязательно укажите: «Запрос на возврат средств — <?= $domainTitle ?>».
                </li>
                <li>
                    В теле письма предоставьте полную информацию: ваше имя,
                    email, использованный при регистрации, и название приобретенного пакета услуг или программы.
                </li>
                <li>
                    Четко опишите причину, по которой вы запрашиваете
                    возврат, ссылаясь на один из пунктов наших условий.
                </li>
                <li>
                    Наша служба поддержки рассмотрит ваш запрос
                    и предоставит ответ в течение 3-х рабочих дней.
                </li>
            </ol>

            <h2>Сроки и способ возврата</h2>
            <p>
                После одобрения запроса возврат денежных средств будет
                произведен в течение 7–14 рабочих дней. Средства возвращаются
                тем же способом, которым была совершена транзакция. Обратите внимание, что фактический срок зачисления
                может зависеть от регламента работы вашего банка в <strong>Великобритании</strong>, странах ЕС или по месту вашего нахождения.
            </p>

            <h2>Исключения и ограничения</h2>
            <p>Возврат средств не может быть осуществлен, если:</p>
            <ul>
                <li>
                    Запрос подан по истечении 14 календарных дней с момента совершения покупки.
                </li>
                <li>
                    Вы получили доступ, изучили или скачали более 50% материалов программы или использовали более 50% лимитов AI-инструментов.
                </li>
                <li>
                    Невозможность использования платформы вызвана техническими
                    проблемами на стороне пользователя (отсутствие интернета, несовместимое ПО).
                </li>
                <li>
                    Были нарушены правила использования или Условия предоставления услуг <strong><?= $domainTitle ?></strong>.
                </li>
            </ul>

            <h2>Изменения в политике</h2>
            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять настоящую
                Политику возврата. Актуальная версия всегда находится в открытом доступе на
                странице <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>Свяжитесь с нами</h2>
            <p>
                По всем вопросам, связанным с возвратом средств или условиями доступа к AI-решениям, 
                пожалуйста, обращайтесь в нашу службу экспертной поддержки:
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