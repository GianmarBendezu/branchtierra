var peticionHTTP;

function inicializar_XHR()
{
    if (window.XMLHttpRequest)
        {
            peticionHTTP=new XMLHttpRequest();

        }
    else
        {
            peticionHTTP=new ActiveXObject("Microsoft.XMLHTTP");
        }
}

function realizarPeticion(url,metodo,funcion)
{
    peticionHTTP.onreadystatechange=funcion;
    peticionHTTP.open(metodo,url,true);
    peticionHTTP.send(null);
}

