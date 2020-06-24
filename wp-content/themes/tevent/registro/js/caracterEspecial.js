function pulsar(e) { 
    tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) return false;
}
function number(string) {//Solo numeros
    var out = '';
    var filtro = '1234567890';//Caracteres validos

    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos
    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
        //Se añaden a la salida los caracteres validos
            out += string.charAt(i);

    //Retornar valor filtrado
    return out;
}

function numberAlpha(string) {//Solo numeros
    var out = '';
    var filtro = '1234567890-';//Caracteres validos

    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos
    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
        //Se añaden a la salida los caracteres validos
            out += string.charAt(i);

    //Retornar valor filtrado
    return out;
}

function alpha(string) {//Solo letras
    var out = '';
    var filtro = 'abcdefghijklmnñopqrstuvwxyz0123456789áéíóúABCDEFGHIJKLMÑOPQRSTUVXYZÁÉÍÓÚ \s';//Caracteres validos

    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos
    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
        //Se añaden a la salida los caracteres validos
            out += string.charAt(i);

    //Retornar valor filtrado
    return out;
}

function letra(string) {//Solo letras
    var out = '';
    var filtro = 'abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMÑOPQRSTUVXYZÁÉÍÓÚ \s';//Caracteres validos

    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos
    for (var i = 0; i < string.length; i++)
        if (filtro.indexOf(string.charAt(i)) != -1)
        //Se añaden a la salida los caracteres validos
            out += string.charAt(i);

    //Retornar valor filtrado
    return out;
}

function letras(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-záéíóúñ\s]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validar(e) {

    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
    if (tecla==44) return true; //Coma ( En este caso para diferenciar los decimales )
    if (tecla==48) return true;
    if (tecla==49) return true;
    if (tecla==50) return true;
    if (tecla==51) return true;
    if (tecla==52) return true;
    if (tecla==53) return true;
    if (tecla==54) return true;
    if (tecla==55) return true;
    if (tecla==56) return true;
    patron = /1/; //ver nota
    te = String.fromCharCode(tecla);
    return patron.test(te);
}/* 
function pulsar(e) { 
    tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) return false;
} */
