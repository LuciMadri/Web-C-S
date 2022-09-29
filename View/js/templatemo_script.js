$(document).ready( function() {        

	$('.templatemo-sidebar-menu li.sub a').click(function(){
		if($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
	});

});

function Saludar() {
	//document.getElementById("txtIdentificacion").value = "118850825";
	//$("#txtIdentificacion").val("118850825");
	let prueba = $("#txtIdentificacion").val(); 
}