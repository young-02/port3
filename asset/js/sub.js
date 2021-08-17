
  setTimeout(() => {
    let load = gsap.timeline();
    load.set("#loading", {className:"+=close"})
    .to("#loading", {duration:2.5, display:"none"})
    .from(".scorll", {duration: 0.3, x: -200, ease : "bounce"})
    .from(".login", {duration: 0.6, y: -300,  ease : "power4"})
    .from("#header", {duration: 0.5, x:-100, ease: "power4"})
    .from(".sub-top h5", {duration: 0.6, y: -800, ease: "power4"})
    .from(".intro-wrap .bg", {duration: 0.8, y:-1000, ease: "power4"})
    .from(".intro-content .back-title", {duration: 0.8, y:-1000, ease: "bounce"})
    .from(".contact .bg", {duration: 0.5, y:-1000, ease: "power4"})
    .from(".contact .sub-top h6", {duration: 0.8, y: -800, ease: "power4"})
    .from(".contact .sub-top p", {duration: 0.8, y: -800, ease: "bounce"})
},2000)

//javascript 스크롤

const cont = $(".sub > article");
const $projectWrap = $('.project-wrap');
const $animation = $('.animation');


$(window).scroll(function() {  
  
    //스크롤 애니메이션
    const wScroll = $(this).scrollTop();
    let $offset = 300;
    
    let $scrollFalse = false;
  
    if(!$scrollFalse){
   
        if(wScroll >= cont.eq(1).offset().top - $offset){  
          $projectWrap.addClass("active");
          $animation.addClass("active");
        }
        if(wScroll >= cont.eq(2).offset().top - $offset){
        //   $about.addClass("active");     
        }
        $portfolioWrapExcuted = true;
      
    }
   
  });

const section1 = $('#section1').offset().top;
const section2 = $('#section2').offset().top;
const section3 = $('#section3').offset().top;
const scrollOffset = 200;


$(window).scroll(function() {  
  
  var scroll = $(window).scrollTop() + scrollOffset;  
  if (matchMedia("screen and (min-width: 1100px)").matches) {
    if ( scroll < section1 ) {
        $('#section1 .grid-image').css('display', 'block');
        $('#section2 .grid-image').css('display', 'none');
        $('#section3 .grid-image').css('display', 'none');
    }
    if ( scroll > section2 ) {
        // $('.grid-image img').attr('src', '../asset/image/sub/javascript02@2x.jpg');
        $('#section1 .grid-image').css('display', 'none');
        $('#section2 .grid-image').css('display', 'block');
        $('#section3 .grid-image').css('display', 'none');
    }
    if ( scroll > section3 ) {
        $('#section1 .grid-image').css('display', 'none');
        $('#section2 .grid-image').css('display', 'none');
        $('#section3 .grid-image').css('display', 'block');
    }
}



  if (matchMedia("screen and (max-width: 1100px)").matches) {
    $('#section1 .grid-image').css('display', 'block');
    $('#section2 .grid-image').css('display', 'block');
    $('#section3 .grid-image').css('display', 'block');
 } 
   
  //스크롤 애니메이션
  const wScroll = $(this).scrollTop();
  let $offset = 300;
  
  let $scrollFalse = false;

  if(!$scrollFalse){
 
      if(wScroll >= cont.eq(2).offset().top - $offset){
        $about.addClass("active");     
      }
      if(wScroll >= cont.eq(2).offset().top - $offset){
          $portSkill.addClass("active");
      }
      $portfolioWrapExcuted = true;
  }
 
});


$(".project-item div").hover(
    function () {
    $(".project-item div").addClass('hover')
    }
);





// 자바스크립트 스크립트 시작

//section1 계산기
