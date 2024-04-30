function verificar_datos_empleado() {
    let nombre = document.formulario.nombre.value;
    let apellidos = document.formulario.apellidos.value;
    let correo = document.formulario.correo.value;
    
    
    if(nombre=="" || apellidos==""|| telefono=="" || correo== "" ){
        console.log("aqui no");
        $("#error_campos").fadeIn();
        setTimeout(() => {$("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    else { alert("Usuario "+ nombre+ " registrado");
        return true;
       
        }
    }