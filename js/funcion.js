function verificar_colono() {
    let colono = document.login_colono.colono.value;
    let nip = document.login_colono.nip.value;

    if (colono != "" && nip != "") {
        $.ajax({
            url: "./funciones/validar_colono.php",
            type: "post",
            dataType: "text",
            data: { "colono": colono, "nip": nip },
            success: (res) => {
                if (res == 1) {
                    window.location.replace("./bienvenido_colono.php");
                }
                else {
                    $("#error_usuario").html("Usuario no valido");
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