$(document).ready(function(){
	let $cargo= document.querySelector('#cargo'); 
	function mostrarCargo(){	
			$.ajax({
			url: 'buscarCargo.php',
			type: 'GET',
			data:"json" ,
			success: function(data){
				let row = JSON.parse(data);
				let tem= '<option class="form-control"selected disabled>Seleccione su Cargo</option>'

				row.forEach(cargo =>{
					tem += `<option value="${cargo.CARNOMBRE}">${cargo.CARNOMBRE}</option>`
				})
				$('#cargo').html(tem);
			}
		})
	}

	mostrarCargo();


	document.getElementById('registro').addEventListener('click', e =>{
	e.preventDefault();
	let form= document.getElementById('formImagen');
	let formData= new FormData(form);

	$.ajax({
		method: 'post',
		url: 'insert.php',
		data: formData,
		cache: false,
		processData: false,
		contentType: false,
		success(e)=>
	})
})

});
