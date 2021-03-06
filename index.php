<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dev technology</title>
    <link href="css/_zeroing.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cartonbox.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <img alt="logo" src="images/newLogo.png">
            </div>
            <h1 class="header__title">
                <span class="header__title-text">say hello to
                    <span class="header__title-text-color-blue">Dev Technology!</span>
                </span>
                <br />
                <span class="header__title-text-next">
                    <span class="header__title-text-color-blue">agency</span>
                    corporate dt theme
                </span>
            </h1>
            <div class="header__contact-us">
                <button class="header__contact-us-button" onclick="document.location='View/adminPanel.php'">Admin</button>
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
                    <form id="mailForm" class="contacts-section__form">
                        <fieldset class="contacts-section__form-fielset">
                            <input class="contacts-section__form-input input-block" type="text" name="name" id="name"
                                placeholder="Name*" autocomplete="on" required>
                            <input class="contacts-section__form-input input-block" type="tel" name="phone"
                                id="phone" placeholder="Phone: +375(xx)-xxx-xx-xx" autocomplete="on" required pattern="+375[0-9]{9}" minlength="13" maxlength="13">
                            <input class="contacts-section__form-input input-block" type="email" name="email" id="email"
                                placeholder="Email*" autocomplete="off" required>
                            <textarea class="contacts-section__form-textarea textarea-block" name="message"
                                id="message" placeholder="Message*" required minlength="10"></textarea>
                        </fieldset>
                        <button class="contacts-section__form-submit-btn btn" type="submit" name="submit"
                            id="submit">Send message</button>
                    </form>
                    <div id="errorMess"></div>
                </div>
                <div class="contacts__info">
                    <div class="contacts__items">
                        <span class="contacts__item">Main office: Independence Avenue, 177
Minsk, Belarus</span>
                        <br />
                        <span class="contacts__item">Office: Dzerzhinsky Avenue, 104k2
Minsk, Belarus</span>
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
    <script src="js/formProcessing.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=10896d34-48e2-4a7c-832b-0a3275afd454&lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(init);
        function init(){
        let myMap = new ymaps.Map("YMapsID", {
            center: [53.90, 27.56],
            zoom: 10,
            controls: ['smallMapDefaultSet', 'routeButtonControl']
        }, {
            searchControlProvider: 'yandex#search'
        });
   
        let myPlacemark2 = new ymaps.Placemark([53.86, 27.47], {
        balloonContentBody: [
            '<address>',
            '<strong>Office 2 DevTechnology in Minsk</strong>',
            '<br/>',
            'Adress: Office 2: Dzerzhinsky Avenue, 104k2, Minsk, Belarus',
            '<br/>',
            'More: <a href="http://m44736af.beget.tech/">https://DevTechnology.com</a>',
            '</address>'
        ].join('')
        }, {
        preset: 'islands#redDotIcon'
        });
        let myPlacemark = new ymaps.Placemark([53.95, 27.68], {
        balloonContentBody: [
            '<address>',
            '<strong>Main office: DevTechnology in Minsk</strong>',
            '<br/>',
            'Adress: Independence Avenue, 177, Minsk, Belarus',
            '<br/>',
            'More: <a href="http://m44736af.beget.tech/">https://DevTechnology.com</a>',
            '</address>'
        ].join('')
        }, {
            preset: 'islands#redDotIcon'
        });
        myMap.geoObjects
        .add(myPlacemark) 
        .add(myPlacemark2);
    }
    </script>
    <script src="js/cartonbox.min.js"></script>
    <script src="js/popup.js"></script>
</body>
</html>