<div class="team-gallery__item">
    <div class="team__image">
        <a class="team-gallery__link">
            <?php
                echo "<img src='images/personImages/$person_image'";
            ?>
        </a>
    </div>
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
                        <a href="<?php echo $link_facebook ?>" class="employee-socials__link" target="_blank">
                            <svg class="employee-socials__icon employee-socials__icon--facebook">
                                <use xlink:href="images/socials-sprite.svg#facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="employee-socials__item">
                        <a href="<?php echo $link_twitter ?>" class="employee-socials__link" target="_blank">
                            <svg class="employee-socials__icon employee-socials__icon--twitter">
                                <use xlink:href="images/socials-sprite.svg#twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="employee-socials__item">
                        <a href="<?php echo $link_git ?>" class="employee-socials__link" target="_blank">
                            <svg class="employee-socials__icon employee-socials__icon--dribble">
                                <use xlink:href="images/socials-sprite.svg#dribble"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="employee-socials__item">
                        <a href="<?php echo $link_email ?>" class="employee-socials__link" target="_blank">
                            <svg class="employee-socials__icon employee-socials__icon--gmail">
                                <use xlink:href="images/socials-sprite.svg#gmail"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>