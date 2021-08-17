var $main_loader = document.querySelector('.main_loader')
var $loading = document.querySelector('#loading')
var $header = document.querySelector('#header')

window.onload = function() {
    $main_loader.classList.add('main_loader--active');
    // $loading.style('opacity','0')
}
window.setTimeout(function () {
    $main_loader.classList.remove('main_loader--active');
    
    // $loading.classList.remove('start');
    // section1 제목 
    $('.strip').each(function(){
        var $t = $(this),
            rows = $.trim($t.html()).split('<br>');

        $t.html('');

        $.each(rows, function(i, val){
        $('<span class="row"></span>').appendTo($t);

        var letters = $.trim(val).split('');

        $.each(letters, function(j, v){
            v = (v == ' ') ? '&nbsp;' : v;
            $('<span>' + $.trim(v) + '</span>').appendTo($('.row:last', $t));
        });

        });
        for (i = 0; i < $('.strip span').length; i++) {
            (function(ind) {
            setTimeout(function(){
                $('.strip span:not(".row")').eq(ind).toggleClass('animate');
            }, ind * 15);
            })(i);
        }
    });


}, 4000)
// })


