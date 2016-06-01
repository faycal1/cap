$(function(){
	$('.addDiploma').click(function(event) {	
		event.preventDefault() ;	
		var _clone = $( ".diplomaClonnable" ).clone().removeClass('diplomaClonnable')

		_clone.children('td').children('a.addDiploma').remove()

		_clone.children('td').children('a.removeDiploma').removeClass('hide')

		_clone.appendTo( "#diplomaBody" );
		
	});

	$('#diplomaBody').on(  'click'  , '.removeDiploma'  , function(event) {
		console.log('rr');
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
		        },
		submitHandler:function(){
			console.log('hh')
		}
	})

	
});