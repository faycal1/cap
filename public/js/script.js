$(function(){

	$.datepicker.formatDate( "yy-mm-dd" );
	
	$('.addDiploma').click(function(event) {	
		event.preventDefault() ;	
		var _clone = $( ".diplomaClonnable" ).clone(false,false).removeClass('diplomaClonnable')
		_clone.children('td').children('a.addDiploma').remove()
		_clone.children('td').children('a.removeDiploma').removeClass('hide')
		 _clone.children('td').children('.diplomastart').removeClass("hasDatepicker").removeAttr('id').datepicker({
		"changeMonth": true,
		"changeYear":true
	})
		_clone.children('td').children('.displomaend ').removeClass("hasDatepicker").removeAttr('id').datepicker({
		"changeMonth": true,
		"changeYear":true
	})
		// var d = new Date();
		// var _time =  d .getTime()
		// var _start = 'start_'+_time ;
		// var _end =   'end_'+_time  ;
		// _clone.children('td').children('input.diplomastart').attr("id",_start );
		// _clone.children('td').children('input.displomaend').attr("id",_end ) ;
		
		_clone.appendTo( "#diplomaBody" );
		
		
	});

	$('#diplomaBody').on(  'click'  , '.removeDiploma'  , function(event) {
		$(this).closest('tr').remove()
		return false ;
	});

	$('.addLang').click(function(event) {
		console.log('hh');
		var _clone = $( ".langClonnable" ).clone().removeClass('langClonnable')
		_clone.children('td').children('a.addLang').remove()
		_clone.children('td').children('a.removeLang').removeClass('hide')
		_clone.appendTo( "#langBody" );
		return false ;
	});

	$('#langBody').on(  'click'  , '.removeLang'  , function(event) {
		console.log('rr');
		$(this).closest('tr').remove()
		return false ;

	});

	$('.addExpirience').click(function(event) {
		console.log('hh');
		var _clone = $( ".expirienceClonnable" ).clone().removeClass('expirienceClonnable')
		_clone.children('td').children('a.addExpirience').remove()
		_clone.children('td').children('a.removeExpirience').removeClass('hide')
		 _clone.children('td').children('.expiriencestart').removeClass("hasDatepicker").removeAttr('id').datepicker({
		"changeMonth": true,
		"changeYear":true
	})
		_clone.children('td').children('.expirienceend ').removeClass("hasDatepicker").removeAttr('id').datepicker({
		"changeMonth": true,
		"changeYear":true
	})
		_clone.appendTo( "#expirienceBody" );
		return false ;
	});

	$('#expirienceBody').on(  'click'  , '.removeExpirience'  , function(event) {
		console.log('rr');
		$(this).closest('tr').remove()
		return false ;

	});


	$('.addMatrix').click(function(event) {
		console.log('hh');
		var _clone = $( ".matrixClonnable" ).clone().removeClass('matrixClonnable')
		_clone.children('td').children('a.addMatrix').remove()
		_clone.children('td').children('a.removeMatrix').removeClass('hide')
		_clone.appendTo( "#matrixBody" );
		return false ;
	});

	$('#matrixBody').on(  'click'  , '.removeMatrix'  , function(event) {

		console.log('rr');
		$(this).closest('tr').remove()
		return false ;

	});

	$('#formCv').validate({
		errorPlacement: function(error, element) {
		            return true;
		        }
	});

	$('input.diplomastart , input.displomaend , input.expiriencestart , input.expirienceend ' ).datepicker({
		"changeMonth": true,
		"changeYear":true,
		
	})

	$('#birthday ' ).datepicker({
		altFormat: "yy-mm-dd",
		altField: "#birthday",
		"changeMonth": true,
		"changeYear":true,
		
	})

	// $(".diplomastart").rules("add", { 
	//   required:true
	// });
});