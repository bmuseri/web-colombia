document.addEventListener('DOMContentLoaded', function() {
    

  //Boton Solicitud Prestamo
Boton1.addEventListener('click', () => {

    ventana1.classList.add('hide');
    ventana2.classList.add('show');
    Consultas1.classList.add('show');
});

Back1.addEventListener('click', () => {

  /*
  ventana1.classList.add('show');
  ventana1.classList.remove('hide');
  ventana2.classList.add('hide');
  */
  
}); 
  

//Cerrar ventana
var cerrar = document.querySelectorAll('.closeimg');

for (i = 0; i < cerrar.length; i++) {
  cerrar[i].addEventListener('click', function() {
    ventana.classList.remove('ActiveVentana');
  });
}  

CloseVent2.addEventListener('click', () => {
  ventana1.classList.add('hide');
});
CloseVent3.addEventListener('click', () => {
  ventana1.classList.add('hide');
  
});
CloseChat.addEventListener('click', () => {
  ventana1.classList.add('hide');
});
//Abrir ventana
buble.addEventListener('click', () => {
 
  ventana.classList.toggle('ActiveVentana');
  ventana1.style.display = 'block';
 // ventana1.classList.toggle('show');
}); 


//
Boton2.addEventListener('click', () => {

    ventana2.classList.add('show');
    ventana1.style.display = 'none';
    
    Consultas1.style.display = 'none';
    Consultas2.classList.add('show');
  
});

Btnconsulta1.addEventListener('click', () => {

    ventana2.classList.remove('show');
    ventana3.style.display = 'block';
    Contacto1.style.display = 'block';
    Contacto2.style.display = 'none';

}); 
Btnreclamos1.addEventListener('click', () => {

    ventana2.classList.remove('show');
    ventana3.style.display = 'block';
    Contacto2.style.display = 'block';//
    Contacto1.style.display = 'none';//

}); 
 

Back2.addEventListener('click', () => {

  ventana3.classList.add('hide');
  ventana2.style.display = 'block';
});

Btnconsulta2.addEventListener('click', () => {
    ventana2.classList.remove('show');
    ventana3.style.display = 'block';
    Contacto2.style.display = 'block';
    Contacto1.style.display = 'none';

});  

Btnreclamos2.addEventListener('click', () => {

    ContactoR2.classList.add('block');
    ContactoR1.style.display = 'none';
    ventana3.classList.add('show');
    ventana2.classList.add('hide');
    Contacto1.classList.add('hide');
});  


//Open chat
BtnChat1.addEventListener('click', () => {

  ventana3.classList.add('hide');
  ventana2.classList.add('hide');
  VentanaChat.classList.add('OpenChat');
  
}); 

BackChat.addEventListener('click', () => {

 // ventana3.classList.add('show');
  ventana3.classList.add('show');
  ventana3.classList.remove('hide');
  VentanaChat.classList.remove('OpenChat');
  
}); 

BtnChat2.addEventListener('click', () => {

  VentanaChat.classList.add('OpenChat');
  ventana3.classList.add('hide');

});


 }, false);