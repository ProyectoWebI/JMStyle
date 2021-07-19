function formContato(){
    var nombre,correo,telefono,consulta, msj;

    nombre = document.getElementById("nombre").value;
    correo =  document.getElementById("email").value;
    telefono = document.getElementById("telefono").value;
    consulta = document.getElementById("consulta").value;

    defectoColor(document.getElementById("nombre"));
    defectoColor(document.getElementById("email"));
    defectoColor(document.getElementById("telefono"));
    defectoColor(document.getElementById("consulta"));



    if(nombre == ""){

        msj="Ingrese su nombre";
        document.getElementById("alerta").innerHTML=msj;
        alertaColor(document.getElementById("nombre"));

    }else if(correo ==""){
        msj="Ingrese un correo";
        document.getElementById("alerta").innerHTML=msj;
        alertaColor(document.getElementById("email"));
    }else if(telefono ==""){
        msj="Ingrese numero de telefono";
        document.getElementById("alerta").innerHTML=msj;
        alertaColor(document.getElementById("telefono"));
    }else if(consulta ==""){
        msj="Ingrese su consulta";
        document.getElementById("alerta").innerHTML=msj;
        alertaColor(document.getElementById("consulta"));
    }else{
        alert("Consulta enviada");

    }

}

function alertaColor(parametro){
    var elemt = parametro;
    elemt.style = "background-color: rgb(250, 235, 215);"
}

function defectoColor(parametro){
    var elemt = parametro;
    elemt.style = "background-color: white;"
}