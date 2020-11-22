$(document).ready(function(){

    $("label.control input").click(function() {
    	jQuery(this).parent().find("label.control").toggleCLass("yellow");

    });
    

	
    $(".link1").on("click",function(){
        $("#friends, #regional, #national").removeClass("stat-active");
        $("#friends").addClass("stat-active");
        $("#regional, #national").addClass("stat-disabled");

        $("li#link1").addClass("link-active");
        $("li#link2, li#link3").removeClass("link-active");
    });

    $(".link2").on("click",function(){
        $("#friends, #regional, #national").removeClass("stat-active");
        $("#regional").removeClass("stat-disabled");
        $("#regional").addClass("stat-active");
        $("#national").addClass("stat-disabled");

        $("li#link2").addClass("link-active");
        $("li#link1, li#link3").removeClass("link-active");
    });

    $(".link3").on("click",function(){
        $("#friends, #regional, #national").removeClass("stat-active");
        $("#regional").addClass("stat-disabled");
        $("#national").removeClass("stat-disabled");
        $("#national").addClass("stat-active");

        $("li#link3").addClass("link-active");
        $("li#link1, li#link2").removeClass("link-active");
    });





    $(".popup-active").click(function(){
    	var popupID = $(this).data("popup");
    	$.magnificPopup.open({
		  items: {
		    src: popupID,		  },
		  type: 'inline',
          closeBtnInside: false,
		});
    });




	$('.open-popup-link').magnificPopup({
	  type:'inline',
	  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});




    $('.custom-close').click(function(){
        //This will close popup dialog opened using $.magnificPopup.open()
        
        var time = $(this).parent().parent();
        var dataTime = $(time).attr('data-time');
        
        $('#your-time').show();
        $(dataTime).show();
        var minutes = $(time).find('.minutes').val();

        console.log(time);
        console.log(dataTime);
        console.log(minutes);

        $(dataTime).find('.minutes-added').text(minutes);
        $(dataTime).find('.minutes-added').val(minutes);
        $.magnificPopup.close();
    });





	$('input[name="activity-time"]').keypress(function() {
    if (this.value.length >= 4) {
        return false;
    }
    });




    $('#mintues').bind('keyup change', function(){
        if(!$(this).val())
            $("#your-time").css('display', 'none');
        else
            $("#your-time").css('display', '');
        });

    
    function resizeInput() {
    $(this).attr('size', $(this).val().length);
    }

    

    $('.minutes-added')
        // event handler
        .keyup(resizeInput)
        // resize on page load
        .each(resizeInput);


    $('select').selectBox({
        mobile: true,
        menuSpeed: 'fast'
    });


});









