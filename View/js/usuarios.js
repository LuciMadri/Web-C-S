//Funciones de MantUsuarioEditar
function LimpiarDatos()
{
    document.getElementById("txtConfirmarContrasenna").value = "";
}

function CompararClaves()
{
    let claveOriginal = $("#txtContrasenna").val(); 
    let claveConfirmada = $("#txtConfirmarContrasenna").val();

    if(claveOriginal.trim() == claveConfirmada.trim())
        return true;
    else
    {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Sus credenciales no son correctas',
            showConfirmButton: false,
            timer: 2500
        })

        return false;
    }
}

//Funciones de MantUsuario
$(document).on("click", ".open-UserDialog", function () {
    var myUserId = $(this).data('id');
    $("#userId").val(myUserId);
});

function CambiarEstadoUsuario()
{
    $.ajax({
        url:"../Controller/UsuariosController.php",
        type:"POST",
        data: { 
                "CambiarEstadoUsuario" : "CambiarEstadoUsuario", 
                "Id" : document.getElementById("userId").value 
              },
        success:function(data){
            window.location.href = "mantUsuarios.php";
        },
        error:function(data){
            //Que pasa si algo sale mal??
        }
    });

}