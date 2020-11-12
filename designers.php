<?php

    $websiteTitle = 'команда';
    require 'blocks/head.php';

?>
<?php
    require 'blocks/header.php';
?>
<section  class="sotrudnik">
    <div class="minGenVl genVl1"></div>
    <div class="splide">
        <div class="splide__arrows">
            <div class="splide__arrow splide__arrow--prev wrapVl Vldown Vldesign"> 
                <div class=""><i class="fas fa-chevron-up"></i></div>   
                <div class="commandVl"></div> 
            </div>
            <div class=" splide__arrow splide__arrow--next wrapVl Vlup">
                <div class="commandVl"></div>
                <div class=""><i class="fas fa-chevron-down"></i></div>
            </div>
        </div>
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide">
                    <div class="textComWrap">
                        <div class="name">Баженова Ирина</div>
                        <div class="age">24 года</div>
                        <ul class = "qual">
                            <li>Графический дизайнер</li>
                            <li>Иллюстартор</li>
                            <li>Предприниматель</li>
                        </ul>
                    </div>
                    <img  class = "irina" src="img/photosotr.png" alt="Irina">
                </div>
                <div class="splide__slide">
                    <div class="textComWrap">
                        <div class="name">Данченко Дмитрий</div>
                        <div class="age">23 года</div>
                        <ul class = "qual">
                            <li>Веб-разработчик</li>
                            <li>Программист</li>
                        </ul>
                    </div>
                    <img  class = "dmitry" src="img/photodmit.png" alt="dmitry">
                </div>
            </div>
        </div>
        
    </div>    
    
    <div class="minGenVl genVl2"></div>
</section>
<?php
    require 'blocks/footer.php'
?>
