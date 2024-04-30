function verificar_datos_usuario() {
    let nombre = document.formulario.nombre.value;
    let apellidos = document.formulario.apellidos.value;
    let telefono = document.formulario.telefono.value;
    let domicilio = document.formulario.domicilio.value;
    let placa = document.formulario.placa.value;
    let pago = document.formulario.pago.value;
    let nip = document.formulario.nip.value;


    if (nombre == "" || apellidos == "" || telefono == "" || domicilio == "" || placa == "" || pago == "" || nip == "") {
        $("#error_campos").fadeIn();
        setTimeout(() => { $("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    else {
        if (validar_correo()) {
            alert("Bienvenido " + nombre);
            return true;
        }
    }
}