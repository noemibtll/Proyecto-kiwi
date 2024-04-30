function validar_correo(){
    let valido = false;
    let correo = document.formulario.correo.value;

    if(correo!= ""){
        $.ajax({
            url     :'./funciones/validar_correo.php',
            type    :'post',
            dataType:'text',
            data    :'correo='+correo,
            success : function(res){
                if(res == 1){
                    $("#correo_error").html(correo + ' ya existe');
                    $("#correo_error").fadeIn(1500);
                    setTimeout(function() {
                        $("#correo_error").fadeOut(1500);
                    },5000);
                }
                else {
                    valido = true;
                }
            },error : function(){
                alert('Error archivo no encontrado...')
            }
        });
    }
    return valido;
}