$(document).ready(function(){
	var ItemsAvailable = $('.Itemsavailable');
	var PriceReqs = 0;
	
	$('#Items').on('change', function(ev){
		var Items = $(this).val();
		
		Itemsavailable.attr('data-status', 'unchecked');
		
		if(Itemsavailable.length >= 3 && Itemsavailable.length <= 25){
			var ajax = $.post('check-checklists.php', {
				'Items' : Items
			});
			
			ajax.done(function (data){
				if(data == 'available'){
					Itemsavailable.attr('data-status', 'available').php('Available');
				}
				else{
					Itemsavailable.attr('data-status', 'unavailable').php('Unavailable');
				}
			});
		}
		else{
			Itemsavailable.attr('data-status', 'unavailable').php('Unavailable');
		}
	});
});