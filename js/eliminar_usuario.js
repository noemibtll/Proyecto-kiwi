function eliminar_usuario(eliminado){
    if (confirm("¿Esta seguro de eliminar?")) {
        $.ajax({
            url     :'./funciones/usuarios_elimina.php',
            type    :'post',
            dataType:'text',
            data    : {"id": eliminado},
            success : (res) => {
                console.log(res);
                if(res == 1) {
                    $("#"+eliminado).hide();
                } 
            },error : () => {
                $('#mensaje').html('Cancelado');
            }
        });
    }
    return false;
}