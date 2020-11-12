<?php

    $websiteTitle = 'портфолио';
    require 'blocks/head.php';

?>
<?php
    require 'blocks/header.php';
?>
<section class="portfolio">
    <div class="portfolioWrap">
        <div class="portTitle">Ирина</div>
        <div class="previewWrap" id="wrap">
            <div class="prevBlock">
                <a class="prevPort" href="https://www.behance.net/gallery/107195817/2D-illjustracija-3D-modelirovanie"><img src="img/ramen.png" alt="раменная"></a>
                <div class="prevText">2D иллюстрация. Японская раменная</div>
            </div>
            <div class="prevBlock">
                <a class="prevPort" href="https://www.behance.net/gallery/51361003/Illustration-Graphic-drawing"><img src="img/pair.png" alt="иллюстрация"></a>
                <div class="prevText">Иллюстрация ручной работы</div>
            </div>
            <div class="prevBlock">
                <a class="prevPort" href="https://www.behance.net/gallery/107191419/razrabotka-personazha-dlja-igry-DnD-character-sreation"><img src="img/tief.png" alt="персонаж"></a>
                <div class="prevText">Разработка персонажа</div>
            </div>
            <div class="hidePrev" id="hide">
                <div class="prevBlock">
                    <a class="prevPort" href="https://www.behance.net/gallery/54246253/Journal-zhurnal-o-sovremennom-iskusstve"><img src="img/invers.png" alt="инверсия"></a>
                    <div class="prevText">Разработка журнала о современном искусстве</div>
                </div>
                <div class="prevBlock">
                    <a class="prevPort" href="https://www.behance.net/gallery/89730779/Building-company-Sarikul-House"><img src="img/sarikul.png" alt="бренд"></a>
                    <div class="prevText">Брендирование строительной компании Sarikul House</div>
                </div>
                <div class="prevBlock">
                    <a class="prevPort" href="https://www.behance.net/gallery/80817597/priglasitelnoe-na-korporativ-otkrytka-animacija"><img src="img/meet.png" alt="пригласительное"></a>
                    <div class="prevText">Верстка пригласительного</div>
                </div>
                <div class="prevBlock">
                    <a class="prevPort" href="https://www.behance.net/gallery/80771469/firmennyj-stil-brend-ajdentika-Corporate-identity"><img src="img/hibi.png" alt="электроника"></a>
                    <div class="prevText">Фирменный стиль для производителя электроники</div>
                </div>
                <div class="prevBlock">
                    <a class="prevPort" href="https://www.behance.net/gallery/80792685/Logotype-logotip-ajdentika-vizitka-Business-card"><img src="img/visit.png" alt="логотип"></a>
                    <div class="prevText">Разработка логотипа</div>
                </div>
                <div class="prevBlock">
                    <a class="prevPort" href="https://www.behance.net/gallery/80818899/novogodnie-art-obekty-art-object-installation"><img src="img/fontan.png" alt="артобъекты"></a>
                    <div class="prevText">Проектирование новогодних артобъектов</div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolioArrowWrap" id="portArrow">
        <div class="portGl"></div>
        <div class="portArrowDown"><i id="icoArr" class="fas fa-chevron-down"></i></div>
        <div class="portGl"></div>
    </div>
    <div class="portfolioWrap dmit" id="dmit">
        <div class="portTitle">Дмитрий</div>
        <div class="previewWrap">
            <div class="prevBlock">
                <a class="prevPort" href="https://www.behance.net/gallery/107129263/koncept-prilozhenija"><img src="img/pril.png" alt="банковское приложение"></a>
                <div class="prevText">Создание интерфейса банковского приложения</div>
            </div>
            <div class="prevBlock">
                <a class="prevPort" href="https://www.behance.net/gallery/107700425/lending-konditerskoj-kompanii-landing-page"><img src="img/sweet.png" alt="кондитерская"></a>
                <div class="prevText">Разработка лендинга кондитерской компании</div>
            </div>
            <div class="prevBlock">
                <a class="prevPort" href=""><img src="img/bazhenova.png" alt="студия"></a>
                <div class="prevText">Разработка сайта визитки</div>
            </div>
        </div>
    </div>
</section>
<?php
    require 'blocks/footer.php'
?>