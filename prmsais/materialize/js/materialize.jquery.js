$(document).ready(function(){


  $('.input-field').keypress(function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
        }
    });


    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();





    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();



//for collapsible
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });



    //for dropdown
    $('select').material_select();



    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year
      format: 'yyyy-mm-dd'
    });


    // Initialize collapse button
 $(".button-collapse").sideNav();
 // Initialize collapsible (uncomment the line below if you use the dropdown variation)
 //$('.collapsible').collapsible();

$('.tooltipped').tooltip({delay: 50});




 });
