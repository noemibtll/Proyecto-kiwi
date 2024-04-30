function verificar_colono() {
    let colono = document.login_colono.colono.value;
    let nip = document.login_colono.nip.value;
//si el colono es diferente de nada entonces se valida y si se encuentra en la base de datos, entonce
//puede pasar
    if (colono != "" && nip != "") {
        $.ajax({
            url: "./funciones/validar_colono.php",
            type: "post",
            dataType: "text",
            data: { "colono": colono, "nip": nip },
            success: (res) => {
                if (res == 1) {
                    window.location.replace("./spinner.html");
                    setTimeout(function () {
                        $("bienvenido_usuario").fadeOut();
                    }, 5000);
                    $("#bienvenido_usuario").html("Bienvenido");
                    $("#bienvenido_usuario").fadeIn();
                    setTimeout(function () {
                        $("#bienvenido_usuario").fadeOut();
                    }, 5000);
                }
                else {
                    $("#error_usuario").html("El colono no ha pagado cuota mensual o no se encuentra registrado");
                    $("#error_usuario").fadeIn();
                    setTimeout(function () {
                        $("#error_usuario").fadeOut();
                    }, 5000);
                }
            }
        });
    }
    else {
        $("#error_usuario").html("Faltan campos por llenar!");
        $("#error_usuario").fadeIn();
        setTimeout(function () {
            $("#error_usuario").fadeOut();
        }, 2000);
    }
    return false;
}