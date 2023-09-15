$(document).ready(function (){
    $("button").click(function(){
        $('div').animate({left:'600px'}, 3000);
        $('div').animate({opacity: 0.2}, 3000);
        $('div').animate({width: '200px'}, 3000);
        $('div').animate({height:'600px'}, 3000);
        $('div').animate({height:'200px'}, 3000);
    });
    $("#stop").click(function(){
        // $('div').stop();
        $('div').finish();
    });
});