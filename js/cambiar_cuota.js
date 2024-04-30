function cambiar_cuota(id){
    if (confirm("¿Esta seguro de cambiar el estado de cuota?")) {
        $.ajax({
            url     :'./funciones/cambiar_cuota.php',
            type    :'post',
            dataType:'text',
            data    : {"id": id},
            success : (res) => {
                window.location.replace("./usuarios_lista.php");
            }
        });
    }
    return false;
}