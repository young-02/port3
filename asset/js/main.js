
const mainCont = $("#contents > article");
const $about = $('.about');


$(window).scroll(function(){
 
    const wScroll = $(this).scrollTop();
    let $offset = 300;
    
    // let $portfolioWrapScroll = $portfolioWrap.offset().top - $offset;
    let $portfolioWrapExcuted = false;

    if(!$portfolioWrapExcuted){
        if(wScroll >= mainCont.eq(2).offset().top - $offset){
            $about.addClass("active");   
        }
        $portfolioWrapExcuted = true;
      
    }
});


   //jQuery + GSAP
   const cursor = $(".cursor");

   //움직임 효과
   $(document).mousemove(function(e){
       gsap.to(cursor, 0.3, {left: e.pageX - 5, top: e.pageY - 5 });
   });

   //오버 효과
   $(".swiper-container").hover(function(){
       cursor.addClass("active");
   }, function(){
       cursor.removeClass("active");
   });

   //프로젝트 오버 효과
   $(".project-item").hover(function(){
       cursor.addClass("hover");
      
   }, function(){
       cursor.removeClass("hover");
   });

   //애니메이션 오버 효과
   $(".button").hover(function(){
       cursor.addClass("hover");
   }, function(){
       cursor.removeClass("hover");
   });


//about 이미지
const links = document.querySelectorAll('.about-text a');
const bg = document.querySelector('.about-img');
const showClass = 'bg-show'

for(const link of links){
    const img = new Image();
    img.src = link.dataset.bg;
  // console.log(img);
  
  link.addEventListener('mouseenter', function(){
    bg.style.backgroundImage=`url(${this.dataset.bg})`;
    document.body.classList.add(showClass);
  });
  link.addEventListener('mouseleave', function(){
     document.body.classList.remove(showClass);
  });
}


//버튼

$( ".button_su_inner" ).mouseenter(function(e) {
    var parentOffset = $(this).offset(); 
   
    var relX = e.pageX - parentOffset.left;
    var relY = e.pageY - parentOffset.top;
    $(this).prev(".su_button_circle").css({"left": relX, "top": relY });
    $(this).prev(".su_button_circle").removeClass("desplode-circle");
    $(this).prev(".su_button_circle").addClass("explode-circle");
 
 });
 
 $( ".button_su_inner" ).mouseleave(function(e) {
 
      var parentOffset = $(this).offset(); 
 
      var relX = e.pageX - parentOffset.left;
      var relY = e.pageY - parentOffset.top;
      $(this).prev(".su_button_circle").css({"left": relX, "top": relY });
      $(this).prev(".su_button_circle").removeClass("explode-circle");
      $(this).prev(".su_button_circle").addClass("desplode-circle");
 
 });


 $('.m-menu').click(function(e){
     e.preventDefault();
     $('#header nav').toggleClass('active');
 })