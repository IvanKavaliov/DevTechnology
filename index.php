<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SHOPNO</title>
    <link href="css/_zeroing.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cartonbox.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <img alt="logo" src="images/logo.png">
            </div>
            <h1 class="header__title">
                <span class="header__title-text">say hello to
                    <span class="header__title-text-color-blue">shopno!</span>
                </span>
                <br />
                <span class="header__title-text-next">
                    <span class="header__title-text-color-blue">agency</span>
                    corporate shopno theme
                </span>
            </h1>
            <div class="header__contact-us">
                <button class="header__contact-us-button" onclick="document.location='#contact_us'">contact us</button>
            </div>
            <div class="header__images">
                <img src="images/header_glass.png" alt="glass" class="header__image">
            </div>
        </div>
    </header>
    <main class="main">
        <div class="about__us">
            <div class="container">
                <section class="about__us-title">
                    <h2>about us</h2>
                    <h3>lorem ipsum dolor sit amet event landing template</h3>
                </section>
                <div class="about__us-flex">
                    <div class="about__us-flex-image">
                        <img src="images/workspace.png" alt="workspace">
                    </div>
                    <section class="about__us-flex-content">
                        <h4>we actually do amazing works</h4>
                        <p>A visual approach is an approach to a runway at an airport
                            conducted under instrument flight rules. The pilot must at all times have either the airport
                            or the preceding aircraft in approach correct sight. conducted under instrument flight
                            rules.
                            The pilot must at all times.
                        </p>
                        <p>
                            <br>Preceding aircraft in approach correct sight. conducted under instrument flight rules.
                        </p>
                        <h4><br>why we are the great?</h4>
                        <p>A visual approach is an approach to a runway at an airport
                            conducted under instrument flight rules. <br>
                            The preceding aircraft in approach correct sight.
                        </p>
                    </section>
                </div>
            </div>
        </div>
        <div class="works">
            <div class="container">
                <section class="works__title">
                    <h2>featured works</h2>
                    <h3>lorem ipsum dolor sit amet event landing template</h3>
                </section>
                <div id="works__images" class="works__images">
                    <div class="works__image">
                        <a href="images/work_1.png" class="cartonbox" data-cb-type="img" data-cb-group="gallery">
                            <img src="images/work_1.png" alt="">
                        </a>
                    </div>
                    <div class="works__image">
                        <a href="images/work_2.png" class="cartonbox" data-cb-type="img" data-cb-group="gallery">
                            <img src="images/work_2.png" alt="">
                        </a>
                    </div>
                    <div class="works__image">
                        <a href="images/work_3.png" class="cartonbox" data-cb-type="img" data-cb-group="gallery">
                            <img src="images/work_3.png" alt="">
                        </a>
                    </div>
                    <div class="works__image">
                        <a href="images/work_4.png" class="cartonbox" data-cb-type="img" data-cb-group="gallery">
                            <img src="images/work_4.png" alt="">
                        </a>
                    </div>
                    <div class="works__image">
                        <a href="images/work_5.png" class="cartonbox" data-cb-type="img" data-cb-group="gallery">
                            <img src="images/work_5.png" alt="">
                        </a>
                    </div>
                    <div class="works__image">
                        <a href="images/work_6.png" class="cartonbox" data-cb-type="img" data-cb-group="gallery">
                            <img src="images/work_6.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="team">
            <div class="container">
                <h2 class="team__title uppercase">small team</h2>
                <h3 class="team__subtitle uppercase">Lorem ipsum dolor sit amet event landing template</h3>
                <div class="team__gallery team-gallery">
                    <?php
                        $template = "View/team.php";
                        $pathDatabase = "model/connectionToDatabase.php";
                        $pathQuery = "model/queries.php";
                        require_once "controller/allDataTeam.php";
                    ?>
                </div>
            </div>
        </div>
        <div class="contacts" id="contact_us">
            <div class="container">
                <div class="contacts-section__form-wrapper">
                    <form class="contacts-section__form">
                        <fieldset class="contacts-section__form-fielset">
                            <input class="contacts-section__form-input input-block" type="text" name="name" id="name"
                                placeholder="Name*" autocomplete="off" required="required" />
                            <input class="contacts-section__form-input input-block" type="text" name="subject"
                                id="subject" placeholder="Subject*" autocomplete="off" required="required" />
                            <input class="contacts-section__form-input input-block" type="email" name="email" id="email"
                                placeholder="Email*" autocomplete="off" required="required" />
                            <textarea class="contacts-section__form-textarea textarea-block" name="textarea"
                                id="textarea" placeholder="Message*"></textarea>
                        </fieldset>
                        <button class="contacts-section__form-submit-btn btn" type="submit" name="submit"
                            id="submit">Send message</button>
                    </form>
                </div>
                <div class="contacts__info">
                    <div class="contacts__items">
                        <span class="contacts__item">Adress line 1</span>
                        <br />
                        <span class="contacts__item">Adress line 2</span>
                        <br />
                        <span class="contacts__item">Phone: +37544XXXXXXX</span>
                        <br />
                        <span class="contacts__item">Fax:
                            +37544XXXXXXX</span>
                        <br />
                        <br />
                        <span class="contacts__item">Web:
                            https://github.com/IvanKavaliov/Shopno</span>
                        <br />
                        <span class="contacts__item">E-mail: ivan.kavaliov@gmail.com</span>
                    </div>
                    <div class="contacts__map" id="YMapsID"></div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <h3 class="footer__title">folow us</h3>
        <ul class="socials__list">
            <li class="socials__item"><a class="socials__link">
                    <svg class="socials__icon socials__icon--pinterest">
                        <use xlink:href="images/socials-sprite.svg#pinterest"></use>
                    </svg></a></li>
            <li class="socials__item"><a class="socials__link">
                    <svg class="socials__icon socials__icon--twitter">
                        <use xlink:href="images/socials-sprite.svg#twitter"></use>
                    </svg></a></li>
            <li class="socials__item"><a class="socials__link">
                    <svg class="socials__icon socials__icon--facebook">
                        <use xlink:href="images/socials-sprite.svg#facebook"></use>
                    </svg></a></li>
            <li class="socials__item"><a class="socials__link">
                    <svg class="socials__icon socials__icon--dribble">
                        <use xlink:href="images/socials-sprite.svg#dribble"></use>
                    </svg></a></li>
        </ul>
    </footer>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=4f96ab7b-190d-4fb7-bea4-cae798eb8bce&lang=ru_RU"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/cartonbox.min.js"></script>
    <script src="js/popup.js"></script>
</body>
</html>