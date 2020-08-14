$(document).ready(function () {
	$("#recuperarForm").on("submit", function (e) {
		e.preventDefault();
		let mail = document.getElementById("email");
            console.log('Funciona')
			const data = {
				email: mail.value
			};
			alert('Por favor espere mientras le enviamos un correo.')
			$.post("Backend/envioCorreo.php", data, function (response) {
				alert(response);
				console.log(response);
			});
		
	});

	$('#recuperarByUser').on('submit', function(e){
		e.preventDefault();
		let user = document.getElementById('username');
		const data = {
			username : user.value
		}
		alert('Por favor espere mientras le enviamos un correo.')
		$.post("Backend/envioCorreoUsuario.php", data, function(response){
			alert(response);
		})
	})
});
