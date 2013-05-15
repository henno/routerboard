$(function(){
	$('#product_spec_select').bind('change', function(event){
		var selected = $('#product_spec_select option:selected').val();
		$('#product_spec tr').each(function(){
			alert($('#product_spec').find('tr').attr('id'));
			if (selected == $('#product_spec').find('tr').attr('id')){
				alert('dacxw');
			}
		});

		var html = '<input id="'+selected+'" type="text">'
		$('#product_spec').append('<tr><th>'+selected+'</th><td>'+html+'</td></tr>')
	})
});
