$(document).ready(function(){ 
});
//----------------------------------Validar formulario botones-------------------------------

//***************************************botones***********************************************
//**********************************************************************************************

$("#enviar").on("click", function(e)
{
    e.preventDefault();
    validarFormularios();       
});

        //--------------------------------------

$('input[name=nombre]').change(function(){
   funcionValidarNombre();
});
 

        //--------------------------------------

$('input[name=cc]').change(function(){
    var tipo = "cedula";
    funcionAutenticar(tipo);
    funcionValidarCc();
});


        //--------------------------------------

$('input[name=email]').change(function(){
    var tipo = "email";
    funcionAutenticarEmail(tipo);
    funcionValidarEmail();
});

        //--------------------------------------

$('input[name=mobile]').change(function(){
    funcionValidarCelular();
});


        //--------------------------------------

$('input[name=pass]').change(function(){
    funcionValidarPass();
});


       //--------------------------------------

$('#reclave, input[name=pass]').change(function(){
    funcionValidarreclave();
});

        //--------------------------------------

$('input[name=fecha]').change(function(){
    funcionValidarFecha();
});

//**********************************function de validacion********************************
//***************************************************************************************
function  funcionValidarNombre()
 {
    if(validarNombre()==2){
        $('#result-nombre').html('<b class="text-success">Completado</b>'); 
   }else{
        $('#result-nombre').html('<b class="text-danger">Debe Ingresar un nombre</b>');
   }
 }

                //--------------------------------------
 function funcionValidarCc()
{
    if(validarcc()== 0){
        $('#result-cc').html('<b class="text-danger">Falta el Numero de la Documento</b>'); 
   }else if(validarcc() == 1){
        $('#result-cc').html( '<b class="text-warning">Debe de ingresar solo numeros</b>'); 
   }else if(validarcc() == 2){
        $('#result-cc').html('<b class="text-success">Completado</b>');
   }
}
                //-------------------------------------

function funcionAutenticar(tipo)
{
            var url = "php/autentica_cc.php";
            var datos =  $('input[name=cc]').val();
            $.ajax({
                url: url,
                type: "POST",
                data: {datos:datos, proceso:tipo},//('datos='+datos, 'proceso='+proceso),
                success: function(data)
                {
                    if(data > 0){
                        mostrarMensajeErrrorAutenticacion();
                        $('input[name=cc]').removeAttr("disabled");  
                        $('#mensaje-autenticacion').show('low').text('Cedula Ya registrada: en caso de no acordarse contactenos por correo');
                    }else{
                        mostrarmensajeAutenticacion();
                    }
                }
            });
}

function funcionAutenticarEmail(tipo)
{
            var url = "php/autentica_cc.php";
            var datos =  $('input[name=email]').val();
            $.ajax({
                url: url,
                type: "POST",
                data: {datos:datos, proceso:tipo},//('datos='+datos, 'proceso='+proceso),
                success: function(data)
                {
                    if(data > 2){
                        mostrarMensajeErrrorAutenticacion();
                        $('input[name=email]').removeAttr("disabled");  
                        $('#mensaje-autenticacion').show('low').text('Correo Ya registrado con la cedula '+data+' : en caso de no acordarse contactenos por correo');
                    }else if(data == 0){
                        mostrarmensajeAutenticacion();
                    }
                }
            });
}

function mostrarMensajeErrrorAutenticacion()
{
    $("select, input, #enviar").attr('disabled','disabled'); 
}
function mostrarmensajeAutenticacion()
{
    $("select,  input, #enviar").removeAttr("disabled");
    $('#mensaje-autenticacion').hide('low');
}


                 //-------------------------------------
function funcionValidarEmail()
{
    if(validarEmail()== 0){
        $('#result-email').html('<b class="text-danger">Debe ingresar un correo electronico</b>'); 
   }else if(validarEmail() == 1){
        $('#result-email').html( '<b class="text-warning">No tiene Formato de Correo:(Ejemplo@cualquiera.com)</b>'); 
   }else if(validarEmail() == 2){
        $('#result-email').html('<b class="text-success">Completado</b>');
   }
}
                //-------------------------------------
function funcionValidarCelular()
{
       if(validarCelular()== 0){
        $('#result-celular').html('<b class="text-danger">Debe ingresar un numero de Celular</b>'); 
   }else if(validarCelular() == 1){
        $('#result-celular').html( '<b class="text-warning">No tiene un Numero de 10 digitos</b>'); 
   }else if(validarCelular() == 2){
        $('#result-celular').html('<b class="text-success">Completado</b>');
   }
}
                //-------------------------------------
function funcionValidarPass()
{
    if(validarPass()== 0){
        $('#result-clave').html('<b class="text-danger">Debe ingresar una clave</b>'); 
   }else if(validarPass() == 1){
        $('#result-clave').html( '<b class="text-warning">la clave debe de tener numeros o letras o caracteres de 8 a 10 cifras</b>'); 
   }else if(validarPass() == 2){
        $('#result-clave').html('<b class="text-success">Completado</b>');
   }
}
                //-------------------------------------
function funcionValidarreclave()
{
    if(validarPass2()== 0){
        $('#result-reclave').html('<b class="text-danger">Debe de confirmar clave</b>'); 
   }else if(validarPass2() == 1){
        $('#result-reclave').html( '<b class="text-warning">Las claves no son iguales</b>'); 
   }else if(validarPass2() == 2){
        $('#result-reclave').html('<b class="text-success">Completado</b>');
   }
}
                //-------------------------------------
 function funcionValidarFecha()
 {
     if(validarFecha() == 0){
        $('#result-fecha').html('<b class="text-danger">Falta el Numero de la Documento</b>'); 
   }else if(validarFecha() == 2){
        $('#result-fecha').html('<b class="text-success">Completado</b>');
   }
 }
                //-------------------------------------
function validarFormularios()
{
     funcionValidarNombre();
     funcionValidarCc(); 
     funcionValidarEmail();
     funcionValidarCelular();
     funcionValidarPass();
     funcionValidarreclave();
     funcionValidarFecha(); 

  if(validarNombre() == 2 && validarcc() == 2 && validarEmail() == 2 && validarCelular() == 2 && validarPass() == 2 && validarFecha() == 2 && validarPass2() == 2){

        var url = "php/registrar_login.php";
            var datos =  $('#form_registro').serialize();
            $.ajax({
                url: url,
                type: "POST",
                data: datos,
                success: function(data)
                {
                    if (data == 1){
                        window.location.href = "../../";
                    }else if(data == 0){
                        mostrarMensajeError();
                    }
                }
            });
    }else{
        mostrarMensajeError();
        $('#mensaje').show('low').html('<span class="text-center">los datos estan incompletos o son incorrectos</span>');
    }
 }

//********************************function de procesos **********************************
//***************************************************************************************

 function mostrarMensajeError()
 {
    $('#mensaje').show('low');
    setTimeout(function()
    {
        $('#mensaje').hide('low');
    }, 4000);
 }

function validarNombre()
{
    var nombre = $('input[name=nombre]').val();   
    if(nombre=="")
    {
        return 0;   
    }else{
        return 2;
    }

}

function validarcc()
{
     var exprecc =/[0-9]+$/;
    var cc = $('input[name=cc]').val();   
    if(cc=="")
    {
        return  0;  
    }else if(!exprecc.test(cc)){
        return 1;  
    }else{
        return 2;  
        }
}

function validarEmail()
{
    var expremail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var email = $('input[name=email]').val();
    if(email=="")
    {
        return 0;  
    }else if(!expremail.test(email)){
        return 1;  
    }else{
        return 2;  
    }
}

function validarCelular()
{
    var expretel =/^[0-9]{10}$/i;
    var tel = $('input[name=mobile]').val();
    if(tel=="")
    {
        return 0;  
    }else if(!expretel.test(tel)){
        return 1;  
    }else{
        return 2;  
    }

}

function validarPass()
{
     var exprepass =/^[\w]{8,12}$/i;
    var pass = $('input[name=pass]').val();
    if(pass=="")
    {
        return 0;  
    }else if(!exprepass.test(pass)){
        return 1;  
    }else{ 
        return 2;  
    }
}

function validarPass2()
{
    var pass = $('input[name=pass]').val();
    var pass2 = $('#reclave').val();
    if(pass2 =="")
    {
        return 0;  
    }else if(pass2 != pass){
        return 1;  
    }else{ 
        return 2;  
    }
}

function validarFecha()
{
     var fecha = $('input[name=fecha]').val();
    if(fecha =="")
    {
        return 0;  
    }else{
        return 2;  
    }
}

/*----------------------------------fin-----------------------------------------*/
