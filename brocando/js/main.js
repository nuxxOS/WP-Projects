$(document).ready(function($) {




	$('#home-slider').flexslider({
      animation: "slide",
      animationSpeed: 2500,
      slideshowSpeed: 2500,
      controlNav: false,
      animationLoop: true,
      slideshow: false,
      directionNav: true,
      prevText: '<span class="icon-chevron-thin-left animate"></span>',
      nextText: '<span class="icon-chevron-thin-right animate"></span>',
      after: function(slider) {
          if (!slider.playing) {
          slider.play(); 
          }
          },
    
  });


  $('select').selectBox({
        mobile: true,
        menuSpeed: 'fast'
  });


  $('.selectbox-arrow-custom').appendTo($('a.selectBox.kranken-select') );



  $('.datetime-picker').datetimepicker();


  $('li.lang-item.arrow-item a').click(function() {
    $(this).find('ul.submenu-languages').show();
  });


  $('li.lang-item').on("click",function(){
      $('ul.submenu-languages').slideToggle();
  });











  $('a#active-person.kranken-person').on("click",function(){
    $(this).parent().find('.person-info-wrap').slideToggle(500);
  });


  // $('a#active-person.kranken-person').on("click",function(){
  //   $(this).parent().find('.current-person').slideToggle();
  // });


  // var counter = 1;
  // var person = '<div class="person-wrapper"><a id="active-person" class="kranken-person">Person 1</a><label for="jahrgang">Jahrgang</label>   <input id="jahrgang' +counter+ '" type="text"></input><label>Unfall</label> <div class="person-radio-button clearfix">    <input id="mit-unfall" type="radio" name="radio-group1" class="radio-checkbox" /><label for="mit-unfall" class="custom-checkbox"> Mit Unfall</label><input id="ohne-unfall" type="radio" name="radio-group1" class="radio-checkbox" /><label for="ohne-unfall" class="custom-checkbox"> Ohne Unfall</label></div><label for="franchise">Franchise</label><select name="modell" class="kranken-select"><option value="regin">2500</option><option value="regin">##</option><option value="regin">###</option><option value="regin">####</option><option value="regin">#####</option></select></div>';

  // $('a#add-person.kranken-person').on("click",function(){
  //   counter ++;
  //   var person = '<div class="person-wrapper"><a id="active-person'+counter+'" class="kranken-person">Person '+counter+'</a><label for="jahrgang '+counter+'">Jahrgang</label>   <input id="jahrgang' +counter+ '" type="text"></input><label>Unfall</label> <div class="person-radio-button clearfix">    <input id="mit-unfall" type="radio" name="radio-group1" class="radio-checkbox" /><label for="mit-unfall" class="custom-checkbox"> Mit Unfall</label><input id="ohne-unfall" type="radio" name="radio-group1" class="radio-checkbox" /><label for="ohne-unfall" class="custom-checkbox"> Ohne Unfall</label></div><label for="franchise">Franchise</label><select name="modell" class="kranken-select"><option value="regin">2500</option><option value="regin">##</option><option value="regin">###</option><option value="regin">####</option><option value="regin">#####</option></select></div>';
  //   $('.current-person').append(person);
  //   console.log(counter);
  // });







  // ===================== TAB SECTION ON KRANKENKASSENVERGKEICH PAGE ===================== //


  $('.tabs-wrap .tab-section input[type="radio"]').click(function() {
       if($(this).attr('id') == 'online-wechseln-formtab') {
            $('form#wechseln-form').show();
            $("#wechseln.form-tab").addClass("active-tab"); 
            $("#suisseid.form-tab, #telefonische.form-tab, #termin.form-tab").removeClass("active-tab");         
       }

       else {
            $('form#wechseln-form').hide();   
       }
    });



  $('.tabs-wrap .tab-section input[type="radio"]').click(function() {
       if($(this).attr('id') == 'suisseid-formtab') {
            $('form#suisseid-form').show(); 
            $("#suisseid.form-tab").addClass("active-tab");
            $("#wechseln.form-tab, #telefonische.form-tab, #termin.form-tab").removeClass("active-tab");         
       }

       else {
            $('form#suisseid-form').hide();   
       }
    });



  $('.tabs-wrap .tab-section input[type="radio"]').click(function() {
       if($(this).attr('id') == 'telefonische-beratung-formtab') {
            $('form#telefonische-form').show();
            $("#telefonische.form-tab").addClass("active-tab");
            $("#suisseid.form-tab, #wechseln.form-tab, #termin.form-tab").removeClass("active-tab");          
       }

       else {
            $('form#telefonische-form').hide();   
       }
    });



  $('.tabs-wrap .tab-section input[type="radio"]').click(function() {
       if($(this).attr('id') == 'termin-vereinbaren-formtab') {
            $('form#termin-form').show();
            $("#termin.form-tab").addClass("active-tab");
            $("#suisseid.form-tab, #telefonische.form-tab, #wechseln.form-tab").removeClass("active-tab");          
       }

       else {
            $('form#termin-form').hide();   
       }
    });




  // ========================================================================== //
  // ========================================================================== //


  // Inputs on final page for checkout options //


  $('form#offer-receive .tab-section input[type="radio"]').click(function() {
    if($(this).attr('id') == 'telefonische-beratung-finalpage') {
        $(".darf-wrapper #telefonische.form-tab").addClass("active-tab");
        $(".darf-wrapper #email.form-tab, .darf-wrapper #termin.form-tab").removeClass("active-tab");          
    }
  });


  $('form#offer-receive .tab-section input[type="radio"]').click(function() {
    if($(this).attr('id') == 'termin-vereinbaren-finalpage') {
        $('.additional-fields-wrap').show();
        $(".darf-wrapper #termin.form-tab").addClass("active-tab");
        $(".darf-wrapper #telefonische.form-tab, .darf-wrapper #email.form-tab").removeClass("active-tab");          
    }

    else {
            $('.additional-fields-wrap').hide();   
       }
  });


  $('form#offer-receive .tab-section input[type="radio"]').click(function() {
    if($(this).attr('id') == 'email-finalpage') {
        $(".darf-wrapper #email.form-tab").addClass("active-tab");
        $(".darf-wrapper #telefonische.form-tab, .darf-wrapper #termin.form-tab").removeClass("active-tab");          
    }
  });



  // ========================================================================== //
  // ========================================================================== //



  $('.aktionen-wrapper .aktionen-item .aktionen-description input[type=radio]').click(function() {
    if($(this).attr('id') == 'telefonische-aktionen1') {
        $(".aktionen-wrapper #telefonische.form-tab").addClass("active-tab");
        $(".aktionen-wrapper #email.form-tab, .aktionen-wrapper #termin.form-tab").removeClass("active-tab");          
    }
  });


  $('.aktionen-wrapper .aktionen-item .aktionen-description input[type=radio]').click(function() {
    if($(this).attr('id') == 'termin-aktionen1') {
        $('#aktionen-additional-fields').slideDown();
        $(".aktionen-wrapper #termin.form-tab").addClass("active-tab");
        $(".aktionen-wrapper #telefonische.form-tab, .aktionen-wrapper #email.form-tab").removeClass("active-tab");          
    }

    else {
            $('#aktionen-additional-fields').slideUp();   
       }
  });


  $('.aktionen-wrapper .aktionen-item .aktionen-description input[type=radio]').click(function() {
     if($(this).attr('id') == 'email-aktionen1') {
        $(".aktionen-wrapper #email").addClass("active-tab");
        $(".aktionen-wrapper #telefonische.form-tab, .aktionen-wrapper #termin.form-tab").removeClass("active-tab");          
    }
  });






  //================== END OF TAB SECTION ==================//







  // On checked input displaying extra form fields //

    $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'zeit-telefonische') {
            $('#extra-fields').show();           
       }

       else {
            $('#extra-fields').hide();   
       }
    });


    $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'zeit-termin') {
            $('.popup-item-wrap').show();           
       }

       else {
            $('.popup-item-wrap').hide();   
       }
    });


    $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'rasch-termin') {
            $('.popup-form-info').slideDown();           
       }

       else {
            $('.popup-form-info').slideUp();   
       }
    });


    $('form#offer-receive .additional-fields-wrap .form-row .form-item input[type="radio"]').click(function() {
       if($(this).attr('id') == 'zeit-vereinbaren1') {
            $('form#offer-receive .form-item.date-time-picker').slideDown();           
       }

       else {
            $('form#offer-receive .form-item.date-time-picker').slideUp();   
       }
    });


    $('#aktionen-additional-fields .form-row .form-item input[type="radio"]').click(function() {
       if($(this).attr('id') == 'zeit-vereinbaren2') {
            $('#aktionen-additional-fields .form-item.date-time-picker').slideDown();           
       }

       else {
            $('#aktionen-additional-fields .form-item.date-time-picker').slideUp();   
       }
    });



  // ============================================= //




  // Height for p tags in form on final page //


    $("#input-section1 label.custom-checkbox, #input-section2 label.custom-checkbox").each(function() {              // Računanje height-a za div sa slikom proizvoda
      var parentHeight = $(this).height();                    // Nađe height wrapera
      var pTag =  $(this).find('p').height();            // Pronađe height title diva
      var pHeight = (parentHeight - pTag) / 2;                // Oduzme ta dva height-a
      $(this).find('p').css({'margin-top':pHeight+'px'});     // dodjeli dobiveni iznos divu sa slikom
      console.log(pHeight);

      });




    $(".tab-section .form-tab").each(function() {                         // Računanje height-a za div sa slikom proizvoda
      var tabHeight = $(this).height();                                   // Nađe height wrapera
      var txtHeight =  $(this).find('.tab-description').height();    // Pronađe height title diva
      var newHeight = (tabHeight - txtHeight) / 2;                        // Oduzme ta dva height-a
      $(this).find('.tab-description').css({'margin-top':newHeight+'px'});                 // dodjeli dobiveni iznos divu sa slikom
      console.log(tabHeight);

      });



    $(".summary-breakdown ul li").each(function() {                         // Računanje height-a za div sa slikom proizvoda
      var cellHeight = $(this).height();                                   // Nađe height wrapera
      var textHeight =  $(this).find('p').height();    // Pronađe height title diva
      var newHeight2 = (cellHeight - textHeight) / 2;                        // Oduzme ta dva height-a
      $(this).find('p').css({'margin-top':newHeight2+'px'});                 // dodjeli dobiveni iznos divu sa slikom
      console.log(cellHeight);

      });


  // ============================================= //





  // Responsive menu initialization //


  $('.menutoggle').click (function() {

  $('.menumobile').toggleClass("menuoff");

  $('.menutoggle').toggleClass("buttonmove");

  });


  // ============================================= //

});
