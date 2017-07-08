(function(){
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.mobile-menu');
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }
}());