$(document).ready(function(){
	function show(){	
			$.ajax({
			url: 'buscarCargo.php',
			type: 'POST',
			data:"json" ,
			success: function(data){
				let row = JSON.parse(data);
				console.log(row);
			}
		})
	}

	show();

});