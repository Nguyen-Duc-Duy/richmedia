$(function(){
	$('#searchCat').keyup(function(){
		var val = $(this).val().toLowerCase();
		$('#filterTable tr').filter(function(){
			$(this).toggle($(this).text().toLowerCase().indexOf(val) > -1);
		})
	});

});