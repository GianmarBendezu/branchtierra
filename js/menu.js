var btnMenu=document.getElementById("btn-menu");
var nav=document.getElementById("nav");
btnMenu.addEventListener('click',function(){
    nav.classList.toggle('mostrar');
});


$('#navegacion li a').on('click', function(){
    $('li a.select').removeClass('select');
    $(this).addClass('select');
    
});




$('#li__info').on('click',function(){
    document.getElementById("img__info__nav").src="images/info_white.png";
    document.getElementById("img__inicio__nav").src="images/house_orange.png";
    
    document.getElementById("img__producto__nav").src="images/rural_orange.png";
    document.getElementById("img__ubicanos__nav").src="images/placeholder_orange.png";
     document.getElementById("img__certificacion__nav").src="images/quality_orange.png";
 
});

$('#li__producto').on('click',function(){
   document.getElementById("img__producto__nav").src="images/rural_white.png";
    
    document.getElementById("img__info__nav").src="images/info_orange.png";
    document.getElementById("img__inicio__nav").src="images/house_orange.png";
    
     document.getElementById("img__ubicanos__nav").src="images/placeholder_orange.png";
     document.getElementById("img__certificacion__nav").src="images/quality_orange.png";
    
});


$('#li__ubicanos').on('click',function(){
   document.getElementById("img__ubicanos__nav").src="images/placeholder_white.png";
    
    document.getElementById("img__info__nav").src="images/info_orange.png";
    document.getElementById("img__inicio__nav").src="images/house_orange.png";
     
    document.getElementById("img__producto__nav").src="images/rural_orange.png";
     document.getElementById("img__certificacion__nav").src="images/quality_orange.png";
    
});


$('#li__certificaciones').on('click',function(){
   
    
    document.getElementById("img__certificacion__nav").src="images/quality_white.png";
    document.getElementById("img__ubicanos__nav").src="images/placeholder_orange.png";
    
    document.getElementById("img__info__nav").src="images/info_orange.png";
    document.getElementById("img__inicio__nav").src="images/house_orange.png";
     
    document.getElementById("img__producto__nav").src="images/rural_orange.png";
    
});


/*-----------*/

/*
$('.aside__li').on('click', function(){
        
    $('.block__productos li ul').removeClass('aside__block__productos');
    $('.block__productos li ul').addClass('visible__productos');
    
});

*/



$(document).ready(function(){
    
    $('.block__productos li:has(ul)').click(function(e){
        e.preventDefault();
        
        if ($(this).hasClass('activado')){
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        }
        else
            {
                $('.block__productos li ul').slideUp();
                $('.block__productos li').removeClass('activado');
                $(this).addClass('activado');
                $(this).children('ul').slideDown(); 
            } 
    }); 
});

$(window).scroll(function()
            {
                if ($(this).scrollTop() > 250){
					 $('.header').addClass("fixed").fadeIn();
					 $('.nav').addClass("margen").fadeIn();
                     $('.logoxd').addClass("logoxdsmaller").fadeIn();
                   $('.img__menu__link').addClass("imgsmaller").fadeIn();  
				}
                else {
					$('.header').removeClass("fixed");
					$('.contenedor').removeClass("margen");
                    $('.logoxd').removeClass("logoxdsmaller");
                $('.img__menu__link').removeClass("imgsmaller");
				}
            });

