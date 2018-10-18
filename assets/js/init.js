(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
	$('.modal').modal();
	$('select').material_select();
	$('.collapsible').collapsible();
	  
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 50, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: true, // Close upon selecting a date,
	format: 'yyyy-mm-dd'
  	});
	
	$('.button-collapse').sideNav({
  	menuWidth: 230, // Default is 300
  	edge: 'left', // Choose the horizontal origin
  	closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
  	draggable: true, // Choose whether you can drag to open on touch screens,
    }
  	);

	  
	  
  }); // end of document ready
})(jQuery); // end of jQuery name space