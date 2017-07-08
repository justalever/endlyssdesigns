(function(){
  var burger = document.querySelector('.burger-container'),
      header = document.querySelector('.mobile-menu');
  
  burger.onclick = function() {
      header.classList.toggle('menu-opened');
  }



  var wow = new WOW(
	  {
	    boxClass:     'wow',     
	    animateClass: 'animated', 
	    offset:       1,          
	    mobile:       true,       
	    live:         true,       
	    scrollContainer: null 
	  }
	);
	wow.init();



}());


