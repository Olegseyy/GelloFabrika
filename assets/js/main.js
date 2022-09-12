$(document).ready(function(){
  $(".more1").click(function(){
    $("#div1").fadeToggle();
  });
});

$(document).ready(function(){
  $(".more2").click(function(){
    $("#div2").fadeToggle();
  });
});

$(document).ready(function(){
  $(".more3").click(function(){
    $("#div3").fadeToggle();
  });
});

$(document).ready(function(){
  $(".more4").click(function(){
    $("#div4").fadeToggle();
  });
});


$(document).ready(function(){
  $(".more5").click(function(){
    $("#div5").fadeToggle();
  });
});


$(document).ready(function(){
    // Плавная прокрутка
    $('.contact').click( function(){ 
        var scroll_el = $(this).attr('href'); 
        if ($(contact).length != 0) { 
            $('html, body').animate({ scrollTop: $(contact).offset().top }, 1200);
        }
        return false; 
    });
});


$(document).ready(function(){
    // Плавная прокрутка
    $('.more1').click( function(){ 
        var scroll_el = $(this).attr('href'); 
        if ($(div1).length != 0) { 
            $('html, body').animate({ scrollTop: $(div1).offset().top }, 1200);
        }
        return false; 
    });
});


   
$(document).ready(function(){
    // Плавная прокрутка
    $('.more2').click( function(){ 
        var scroll_el = $(this).attr('href'); 
        if ($(div2).length != 0) { 
            $('html, body').animate({ scrollTop: $(div2).offset().top }, 1200);
        }
        return false; 
    });
});
   


$(document).ready(function(){
    // Плавная прокрутка
    $('.baner__button').click( function(){ 
        var scroll_el = $(this).attr('href'); 
        if ($(all).length != 0) { 
            $('html, body').animate({ scrollTop: $(all).offset().top }, 1200);
        }
        return false; 
    });
});
   

$(document).ready(function(){
    // Плавная прокрутка кнопки TOP
    $('.some').click( function(){ 
        var scroll_el = $(this).attr('href'); 
        if ($(header).length != 0) { 
            $('html, body').animate({ scrollTop: $(header).offset().top }, 900);
        }
        return false; 
    });
});
   
$(window).scroll(function(){
if($(window).scrollTop()>450){
$('#btn_top').show()
}
})

var opened = false;
$(".but").click(function(){
  opened = !opened;
  if(opened) {
       document.getElementById('dddd').style.width = 100 + "%";
    } else {
    document.getElementById('dddd').style.width = 0 + "%";
    }
});

$(document).ready(function() {

    //E-mail Ajax Send
    $("form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {
            alert("Thank you!");
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

});