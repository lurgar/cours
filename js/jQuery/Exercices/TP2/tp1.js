
$(document).ready(function () {

  $('.question').css({
  'border':'1px solid black',
  'background-color': 'skyblue',
  'font-size': '20px',
  'margin':'20px'
 

});

 });
//elements.css;
// $("p").css({"background-color":"yellow","display":"box"}); 
//  $('#reponse1').css({
// 'color':'yellow'
//  })

//display: flex;
//    margin: 20px;
 //   justify-content: space-between;
  //  align-items: center;

// -----------------------
$(".reponse").hide();

$('a').on({
    mouseenter : function() {
      // Question 1
        if( $('#r1').is(':checked')){
            $('#img1').attr("src",'./bon.png');
            $("#reponse1").show();
            $('#reponse1').css("color","green");
        } else {
            // if($('#r2,#r3').is(':checked')){
              $('#img1').attr("src",'./mauvais.png');
              $("#reponse1").show();
              $('#reponse1').css("color","red");
            // }
        }
        // Question 2
        if ( $('#r4').is(':checked')){
            $('#img2').attr("src",'./bon.png');
            $("#reponse2").show();
             $('#reponse2').css("color","green")
        } else {
            // if($('#r5,#r6').is(':checked')){
                $('#img2').attr("src",'./mauvais.png');
                $("#reponse2").show();
                $('#reponse2').css("color","red"); 
            // }
            
        }
        if ( $('#r8').is(':checked')){
            $('#img3').attr("src",'./bon.png');
            $("#reponse3").show();
             $('#reponse3').css("color","green")
        }else {
            // if($('#r5,#r6').is(':checked')){
                $('#img3').attr("src",'./mauvais.png');
                $("#reponse3").show();
                $('#reponse3').css("color","red"); 
        }
    }
    ,
    
    
    mouseleave: function(){
     $("#reponse1").hide();
     $('#img1').attr("src",'./question.png');
     $("#reponse2").hide();
     $('#img2').attr("src",'./question.png');
     $("#reponse1").hide();
     $('#img3').attr("src",'./question.png');
     $('div.question').css("align-items", "center", "space-between");

    }

});









