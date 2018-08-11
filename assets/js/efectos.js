/* Efecto Logo Panineto */


$(document).ready(function(){
    
    if($(window).width() < 990) {
        console.log("Logo Estático");
        $('#logo-id').css({
            'width' :'58px',
            'left' : '155px',
            display:'block'
        });
    } 
});

$(window).resize(function(){ 

    if($(window).width() < 990) {
        console.log("Logo Estático < 990");
        $('#logo-id').css({
            'width' :'58px',
            'left' : '155px',
            display:'block'
        });
    }  else  {
        console.log("Logo Estático >= 990");
        $('#logo-id').css({
            'width' :'58px', 
            'left' : '48%',
            '-webkit-transition' : 'all 2s', /* Safari */
            'transition' : 'all 2s',
            display:'block'
        });
        
    }
    
    if( $(this).scrollTop() > 10 && $(window).width() >= 990) {
        console.log("Logo Adaptado");
        $('#logo-id').css({
            'width' :'58px', 
            'left' : '48%',
            '-webkit-transition' : 'all 2s', /* Safari */
            'transition' : 'all 2s',
            display:'block'
        });
    } 
    
    if( $(this).scrollTop() <= 10 && $(window).width() >= 990) {
        console.log("Logo Adaptado Minimizar");
        $('#logo-id').css({
            'width' :'130px', 
            'left' : '45%',
            '-webkit-transition' : 'all 2s', /* Safari */
            'transition' : 'all 2s',
            display:'block'
        });
    } 
    
});


$(document).scroll(function() {
    if( $(this).scrollTop() > 10 && $(window).width() >= 990) {
        console.log("Logo Adaptado");
        $('#logo-id').css({
            'width' :'58px', 
            'left' : '48%',
            '-webkit-transition' : 'all 2s', /* Safari */
            'transition' : 'all 2s',
            display:'block'
        });
    } 
      
    if( $(this).scrollTop() <= 10 && $(window).width() >= 990) {
        console.log("Logo Adaptado Minimizar");
        $('#logo-id').css({
            'width' :'130px',
            'left' : '45%',
            '-webkit-transition' : 'all 2s', /* Safari */
            'transition' : 'all 2s',
            display:'block'
        });
    } 
    
});


(function($, win) {
  $.fn.inViewport = function(cb) {
     return this.each(function(i,el) {
       function visPx(){
         var elH = $(el).outerHeight(),
             H = $(win).height(),
             r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
         return cb.call(el, Math.max(0, t>0? Math.min(elH, H-t) : Math.min(b, H)));  
       }
       visPx();
       $(win).on("resize scroll", visPx);
     });
  };
}(jQuery, window));


$(".animation-tracking-in-expand").inViewport(function(px){
    if(px) $(this).addClass("tracking-in-expand") ;
});