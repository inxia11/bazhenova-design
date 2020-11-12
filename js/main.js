document.addEventListener("DOMContentLoaded", () => {

    

    if (window.location.pathname == '/index.php') {
      $("#comeback").hide();
      $(".footerWrap")[0].style.justifyContent = "start";
      $(".footerIndicator")[0].style.marginTop = "237px";
    } else if (window.location.pathname == '/contacts.php') {
        $("#linkContact")[0].style.color = "rgba(255, 255, 255, 0.4)";
        $("#dotContact")[0].style.backgroundColor = "#fff";
    } else if (window.location.pathname == '/designers.php') {
        $("#linkDesigners")[0].style.color = "rgba(255, 255, 255, 0.4)";
        $("#dotDesigners")[0].style.backgroundColor = "#fff";
    } else if (window.location.pathname == '/about.php') {
        $("#linkAbout")[0].style.color = "rgba(255, 255, 255, 0.4)";
        $("#dotAbout")[0].style.backgroundColor = "#fff";
    } else if (window.location.pathname == '/portfolio.php') {
        $("#linkPort")[0].style.color = "rgba(255, 255, 255, 0.4)";
        $("#dotPort")[0].style.backgroundColor = "#fff";
    } 
    

    $("section").css("display", "none");

    $("section").fadeIn(1000);
    

	$("a.menuLink").click(function(event){
		event.preventDefault();
        linkLocation = this.href;
		$("section").fadeOut(1000, redirectPage);
	});

	function redirectPage() {
		window.location = linkLocation;
    }
    

    new Splide( '.splide', {
        direction: 'ttb',
        heightRatio: 0.6,
        rewind: true,
        width: '400px',
        height: '400px',
        pagination: false,
        
    }).mount();
    


});
    




