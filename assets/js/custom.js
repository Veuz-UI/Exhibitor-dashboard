
// next prev
var divs = $('.show-section section');
var now = 0; // currently shown div
divs.hide().first().show(); // hide all divs except first

function next()
{
    divs.eq(now).hide();
    now = (now + 1 < divs.length) ? now + 1 : 0;
    divs.eq(now).show(); // show next
}

$(".prev").click(function() {
    divs.eq(now).hide();
    now = (now > 0) ? now - 1 : divs.length - 1;
    divs.eq(now).show(); // show previous
});

$('.radio-field-2 input').on('change', function()
{
    $(".radio-field-2").removeClass('active');
    $(this).parent().addClass('active');
})

$('.radio-field-3 input').on('change', function()
{
    $(".radio-field-3-inner").removeClass('active');
    $(this).parent().find('.radio-field-3-inner').addClass('active');
})


const stars = document.querySelectorAll(".stars  i");
console.log(stars);

stars.forEach((star, index1) => {
    star.addEventListener("click", () => {
        stars.forEach((star, index2) => {
            index1 >= index2 ?
                star.classList.add("active") :
                star.classList.remove("active");
        });
    });
});




// quiz validation
var checkedradio = false;

function radiovalidate(stepnumber)
{
    var checkradio = $("#step"+stepnumber+" input").map(function()
    {
    if($(this).is(':checked'))
    {
        return true;
    }
    else
    {
        return false;
    }
    }).get();

    checkedradio = checkradio.some(Boolean);
}
$('.skip').on('click', function()
{
    next();
})



// disable on enter
$('form').on('keyup keypress', function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      return false;
    }
  });
  
  



// form validiation
$(document).ready(function()
   {
        // check step1
        $("#step1btn").on('click', function()
        {
            radiovalidate(1);

            if(checkedradio == false)
            {
                
            (function (el) {
                setTimeout(function () {
                    el.children().remove('.reveal');
                }, 3000);
                }($('#error').append('<div class="reveal alert alert-danger"><i class="fas fa-info-circle"></i>Choose an option !</div>')));
                
                radiovalidate(1);

            }

            else
            {
                next();
            }
        })

        // check step2
        $("#step2btn").on('click', function()
        {
            radiovalidate(2);

            if(checkedradio == false)
            {
                
            (function (el) {
                setTimeout(function () {
                    el.children().remove('.reveal');
                }, 3000);
                }($('#error').append('<div class="reveal alert alert-danger"><i class="fas fa-info-circle"></i>Choose an option !</div>')));
                
                radiovalidate(2);

            }

            else
            {
                next();
            }
        })

                // check step2
        $("#step3btn").on('click', function()
        {
            radiovalidate(3);

            if(checkedradio == false)
            {
                
            (function (el) {
                setTimeout(function () {
                    el.children().remove('.reveal');
                }, 3000);
                }($('#error').append('<div class="reveal alert alert-danger"><i class="fas fa-info-circle"></i>Choose an option !</div>')));
                
                radiovalidate(3);

            }

            else
            {
                next();
            }
        })

        // check last step
       $("#sub").on('click' , function()
       {
            
        


            // $("#sub").html("<img src='assets/images/loading.gif'>");

                            
            var dataString = new FormData(document.getElementById("steps"));


            // console.log(dataString);
            
            // send form to send.php
            $.ajax({
                        type: "POST",
                    url: "thanku.php",
                    data: dataString,
                        processData: false,
                        contentType: false,
                        success: function(data,status)
                        {

                        // $("#sub").html("<span>Success</span>");
                        
                        window.location = 'thanku.php';
                        
                        },
                        error: function(data, status)
                        {
                        $("#sub").html("<span>failed</span>");
                        }
                    });

        });
   });












