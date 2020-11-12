document.addEventListener("DOMContentLoaded", () => {

    document.querySelector('#portArrow').addEventListener('click', function() {
        const c = document.querySelector('#portArrow').classList;
        const hide = document.querySelector('#hide').classList;
        const wrap = document.querySelector('#wrap').classList;
        const dmit = document.querySelector('#dmit').classList;
        const ico = document.querySelector('#icoArr').classList;

        
        c.toggle('portdolioArrowWrap');
        c.toggle('portfolioArrowWrap--active');
        dmit.toggle('dmit');
        dmit.toggle('dmit--active');
        hide.toggle('hidePrev');
        hide.toggle('hidePrev--active');
        wrap.toggle('previewWrap');
        wrap.toggle('previewWrap--active');
        ico.toggle('fa-chevron-down');
        ico.toggle('fa-chevron-up');
    });


});