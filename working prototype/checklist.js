/**

*@author satindersidhu <sidh0050@algonquincollege.com>
*Copyright 2012-2013 sattisidhu
*@licence APACHE https://github.com/sidh0050/web-app
*@package web-app
*@version 1.0.0
*/

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