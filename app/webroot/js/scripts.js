function showMessage(msg, type){
    $(document).ready(function(){
      switch(type){
        case 'success': $.gritter.add({ title: '¡Muy Bien!', text: msg, image: 'assets/alert_icons/approval-green.png', class_name: 'gritter-success gritter-light' });; break;
        case 'notice': $.gritter.add({ title: '¡Información!', text: msg, image: 'assets/alert_icons/notice-blue.png', class_name: 'gritter-info gritter-light' });; break;
        case 'warning': $.gritter.add({ title: '¡Advertencia!', text: msg, image: 'assets/alert_icons/warning-red.png', class_name: 'gritter-warning gritter-light' });; break;
        case 'error': $.gritter.add({ title: '¡Error!', text: msg, image: 'assets/alert_icons/error-red.png', class_name: 'gritter-error gritter-light' });; break;
        default: $.gritter.add({ title: '¡Muy bien!', text: msg, image: 'assets/avatars/avatar.png', class_name: 'gritter-success' });; break;
        //case 'error': $().toastmessage('showErrorToast', msg); break;
        //default: $().toastmessage('showSuccessToast', msg); break;
      }
    });
}
function jsRemoveWindowLoad() {
     // eliminamos el div que bloquea pantalla
    $("#WindowLoad").remove();
 
}
 
function jsShowWindowLoad(mensaje) {
     //eliminamos si existe un div ya bloqueando
    jsRemoveWindowLoad();
 
    //si no enviamos mensaje se pondra este por defecto
    if (mensaje === undefined) mensaje = "Por favor, espere...";
 
    //centrar imagen gif
    height = 20;//El div del titulo, para que se vea mas arriba (H)
    var ancho = 0;
    var alto = 0;
 
     //obtenemos el ancho y alto de la ventana de nuestro navegador, compatible con todos los navegadores
    if (window.innerWidth == undefined) ancho = window.screen.width;
    else ancho = window.innerWidth;
    if (window.innerHeight == undefined) alto = window.screen.height;
    else alto = window.innerHeight;
 
     //operación necesaria para centrar el div que muestra el mensaje
    var heightdivsito = alto/2 - parseInt(height)/2;//Se utiliza en el margen superior, para centrar
 
   //imagen que aparece mientras nuestro div es mostrado y da apariencia de cargando
    imgCentro = "<div style='text-align:center;height:" + alto + "px;'><div  style='color:#000;margin-top:" + heightdivsito + "px; font-size:20px;font-weight:bold'><h4>" + mensaje + "</h4></div><img  src='app/webroot/img/377.png'></div>";
 
        //creamos el div que bloquea grande------------------------------------------
        div = document.createElement("div");
        div.id = "WindowLoad"
        div.style.width = ancho + "px";
        div.style.height = alto + "px";
        $("body").append(div);
 
        //creamos un input text para que el foco se plasme en este y el usuario no pueda escribir en nada de atras
        input = document.createElement("input");
        input.id = "focusInput";
        input.type = "text"
 
          //asignamos el div que bloquea
        $("#WindowLoad").append(input);
 
          //asignamos el foco y ocultamos el input text
        $("#focusInput").focus();
        $("#focusInput").hide();
 
          //centramos el div del texto
        $("#WindowLoad").html(imgCentro);
 
}


function CargarContenido(target,page){ 
       $(function(){
        var response = $.ajax({
            statusCode: { 403: function() { window.location.replace("login"); showMessage('<strong>¡Advertencia!</strong>, Su sesión ha expirado!.', 'error'); },
                            0: function() { response.abort(); }
            },
            type: 'GET',
            url: page,
            dataType: 'html',
            data: '',
            beforeSend: function(objeto){ jsShowWindowLoad(); }
        }).done( function(data){
            $('#'+target).html(data);
            
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            response.abort();
            
            if (jqXHR.status === 0) {
                showMessage('Not connect: Verify Network', 'error');
            } else if (jqXHR.status == 404) {
                
                showMessage('Page not Found', 'error');
            } else if (jqXHR.status == 500) {
                showMessage('Internal Server Error [500]', 'error');
            } else if (textStatus === 'parsererror') {
                showMessage('Requested JSON parse failed', 'error');
            } else if (textStatus === 'timeout') {
                showMessage('Time out error', 'error');
            } else if (textStatus === 'abort') {
                showMessage('Ajax request aborted', 'error');
            } else {
                showMessage('Uncaught Error '+jqXHR.responseText, 'error');
            }
        }).always(function(){
            jsRemoveWindowLoad();
        });
    });
}


function EnviarFormulario(target, url, idform){   
    
         $.ajax({

                type: 'POST',
                url: url,
                dataType: 'html',
                data: $('#'+idform).serialize(),
                beforeSend: function(objeto){ jsShowWindowLoad(); }
            }).done( function(data){
                $('#'+target).html(data);
                
            }).fail( function( jqXHR, textStatus, errorThrown ) {
                response.abort();
                if (jqXHR.status === 0) {
                    showMessage('Not connect: Verify Network', 'error');
                } else if (jqXHR.status == 404) {
                    showMessage('Page not Found', 'error');
                } else if (jqXHR.status == 500) {
                    showMessage('Internal Server Error [500]', 'error');
                } else if (textStatus === 'parsererror') {
                    showMessage('Requested JSON parse failed', 'error');
                } else if (textStatus === 'timeout') {
                    showMessage('Time out error', 'error');
                } else if (textStatus === 'abort') {
                    showMessage('Ajax request aborted', 'error');
                } else {
                    showMessage('Uncaught Error '+jqXHR.responseText, 'error');
                }
            }).always(function(){
                jsRemoveWindowLoad();
            });
            
 return false;       
}

