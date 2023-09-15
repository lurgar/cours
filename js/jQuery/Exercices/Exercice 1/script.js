// $('#start').click(function(){
//     var myVar = $('#myInput').val();
//     alert(myVar); // affiche Hello World !
// });


$('#btn').click(function(){
    let myVar = $('input').val();
    console.log(myVar);
    $('ul').append("<li>" + myVar + "</li>")
});

 $('#reset').click(function(){
        $('li').remove();
    });

$('#reset').click(function(){
   $('li').removeChild

   });