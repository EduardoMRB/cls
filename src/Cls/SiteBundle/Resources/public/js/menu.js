$(document).ready(function(){
    var menu = $('ul.menu-ul li a');
    var pathName = window.location.pathname.split('/');
    var path = pathName[2];

    menu.each(function(){
        $(this).removeClass('active');

        if (this.rel == path) {
            $(this).addClass('active');
        } else {
            menu.find('.first').addClass('active');
        }
    });
});