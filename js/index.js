/**
 * Created by Eason on 5/8/16.
 */
$(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('php, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });

    $(window).scroll(function() {
        $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });

    $("#power").click(function() {
        $("#services").fadeOut(function(){
            $("#target-10twitter").fadeIn(1000);
        });
    });

    $(".return").click(function() {
        $(".target-detail").fadeOut(function() {
            $("#services").fadeIn(1000);
        })
    });

    $("#search").click(function() {
        //hotPeriod.php?q=1120182512
        $.get("hotPeriod.php?q="+$("#searchTxt").val(), function(data, status){
            //alert(data);
            $("#userhottime").html(data);
        });
    });

    $("#love").click(function() {
        $("#services").fadeOut(function() {
            $("#userhotperiod").fadeIn(1000);
        });
    });

    $("#job").click(function() {
        $("#services").fadeOut(function() {
            $("#avglength").fadeIn(1000);
        });
    });

    $("#green").click(function() {
        $("#services").fadeOut(function() {
            $("#bestcreative").fadeIn(1000);
        });
    });



    $("#CERTIFIED").click(function() {
        $("#services").fadeOut(function() {
            $("#hottesthashtags").fadeIn(1000);
        })
    });


    $("#HARD").click(function() {
        $("#services").fadeOut(function() {
            $("#hotusers").fadeIn(1000);
        });
    });

    $("#OK").click(function() {
        $("#services").fadeOut(function() {
            $("#hotusers").fadeIn(1000);
        });
    });

    $("#VEDIO").click(function() {
        $("#services").fadeOut(function() {
            $("#mostfollowers").fadeIn(1000);
        });
    });

    $("#FILE").click(function() {
        $("#services").fadeOut(function() {
            $("#mostretweets").fadeIn(1000);
        });
    });

});