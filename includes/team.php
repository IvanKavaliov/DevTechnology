<figure class="team-gallery__item">
    <a class="team-gallery__link">
        <?php
            echo "<img src='images/$person_image'";
        ?>
    </a>
    <div class="tooltip">
        <div class="tooltip__triangle"></div>
        <div class="employee">
            <header class="employee__header">
                <span class="employee__name uppercase">
                    <?php 
                        echo $name;
                    ?>
                </span>
                <span class="employee__position">
                    / 
                    <?php
                        echo $position;
                    ?>
                </span>
            </header>
            <p class="employee__info">
                <?php
                    echo $info;
                ?>
            </p>
            <div class="employee-socials">
                <ul class="employee-socials__list">
                    <li class="employee-socials__item">
                        <a class="employee-socials__link">
                            <svg class="employee-socials__icon employee-socials__icon--facebook">
                                <use xlink:href="images/socials-sprite.svg#facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="employee-socials__item">
                        <a class="employee-socials__link">
                            <svg class="employee-socials__icon employee-socials__icon--twitter">
                                <use xlink:href="images/socials-sprite.svg#twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="employee-socials__item">
                        <a class="employee-socials__link">
                            <svg class="employee-socials__icon employee-socials__icon--dribble">
                                <use xlink:href="images/socials-sprite.svg#dribble"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="employee-socials__item">
                        <a class="employee-socials__link">
                            <svg class="employee-socials__icon employee-socials__icon--gmail">
                                <use xlink:href="images/socials-sprite.svg#gmail"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</figure>