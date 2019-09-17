document.addEventListener("DOMContentLoaded", function(){

//Button Menu

var BtnMenu = document.getElementById('BtnMenu');

BtnMenu.addEventListener('click', () => {

  AnimatedIcon.classList.toggle('AnimationCruz');
  menu.classList.toggle('MenuActive');
  BcgMobile.classList.toggle('BcgMobileActive');

});


//Fixed Header

window.addEventListener( 'scroll' , () => {

    if(window.scrollY >= 60){

       document.getElementById('menu').classList.add('fixed-bar-active');
       faqs.classList.add('centroActiveScroll');
       faqs.classList.remove('centroActiveScrollBack');

    }else{

        document.getElementById('menu').classList.remove('fixed-bar-active');
        faqs.classList.add('centroActiveScrollBack');
        faqs.classList.remove('centroActiveScroll');
    }

});

//Botones Activos (fondo violeta)
prestamos.addEventListener('click' , () => {

  prestamos.classList.toggle('card-icon-active');
  pagos.classList.remove('card-icon-active');
  nosotros.classList.remove('card-icon-active');
  
});

pagos.addEventListener('click' , () => {

  prestamos.classList.remove('card-icon-active');
  pagos.classList.toggle('card-icon-active');
  nosotros.classList.remove('card-icon-active');
  
});

nosotros.addEventListener('click' , () => {

  prestamos.classList.remove('card-icon-active');
  pagos.classList.remove('card-icon-active');
  nosotros.classList.toggle('card-icon-active');
  
});


//Show and Hide distintos contenedores de preguntas
var BtnPrestamos = document.getElementById('prestamos');
    BtnPagos = document.getElementById('pagos');
    BtnNosotros = document.getElementById('nosotros');

     BtnPrestamos.addEventListener('click', () => {
     PreguntasPrestamos.classList.toggle('PregActive');
     PreguntasNosotros.classList.remove('PregActive');
     PreguntasPagos.classList.remove('PregActive');

    });

    BtnPagos.addEventListener('click', () => {  

      PreguntasNosotros.classList.remove('PregActive');
      PreguntasPagos.classList.toggle('PregActive');
      PreguntasPrestamos.classList.remove('PregActive');
     
    });

    BtnNosotros.addEventListener('click', () => {
      PreguntasNosotros.classList.toggle('PregActive');
      PreguntasPagos.classList.remove('PregActive');
      PreguntasPrestamos.classList.remove('PregActive');

      
    });
  

//Preguntas Nosotros 
var TituloPregunta = document.querySelectorAll("#PreguntasNosotros h3");

    function toggleAccordion(){

      //primer elemento al lado de mi var Item
      this.classList.toggle('ActiveContent');
      //segundo elemento al lado de mi var Item
      this.nextElementSibling.classList.toggle('ActiveContent');

    }
    TituloPregunta.forEach(TituloPregunta => TituloPregunta.addEventListener('click', toggleAccordion));

//Preguntas Prestamos
var PrestamosPregunta = document.querySelectorAll("#PreguntasPrestamos h3");

    function toggleAccordion(){

      this.classList.toggle('ActiveContent');
      this.nextElementSibling.classList.toggle('ActiveContent');

    }
    PrestamosPregunta.forEach(PrestamosPregunta => PrestamosPregunta.addEventListener('click', toggleAccordion));


//Preguntas Pagos
var PrestamosPagos = document.querySelectorAll("#PreguntasPagos h3");

    function toggleAccordion(){

      this.classList.toggle('ActiveContent');
      this.nextElementSibling.classList.toggle('ActiveContent');

    }
    PrestamosPagos.forEach(PrestamosPagos => PrestamosPagos.addEventListener('click', toggleAccordion));



//Ventanas Modales

//BtnSolicitud de prestamo    
Btnsolicitud.addEventListener( 'click', () => {
    SolicitudModal.classList.add('BoxModalActive');
    BcgMobile.classList.add('BcgMobileActive');
  });

  closeModalSolicitud.addEventListener( 'click', () => {
    SolicitudModal.classList.remove('BoxModalActive');
    BcgMobile.classList.remove('BcgMobileActive');
  });

  BcgMobile.addEventListener( 'click', () => {
    SolicitudModal.classList.remove('BoxModalActive');
    BcgMobile.classList.remove('BcgMobileActive');
  });

//BtnPago de prestamo
  BtnPagoPrestamo.addEventListener( 'click', () => {
    PagoModal.classList.add('BoxModalActive');
    BcgMobile.classList.add('BcgMobileActive');
  });

  closeModalPago.addEventListener( 'click', () => {
    PagoModal.classList.remove('BoxModalActive');
    BcgMobile.classList.remove('BcgMobileActive');
  });

  BcgMobile.addEventListener( 'click', () => {
    PagoModal.classList.remove('BoxModalActive');
    BcgMobile.classList.remove('BcgMobileActive');
  });


//Modal Footer

Tasas.addEventListener('click', () => {
  event.preventDefault();
  ModalDetallesTasas.classList.add('ModalOpen');
  BcgMobile.classList.add('BcgMobileActive');
});

closeimgtasa.addEventListener('click', () => {
 event.preventDefault();
 ModalDetallesTasas.classList.remove('ModalOpen');
 BcgMobile.classList.remove('BcgMobileActive');
});

TermCondiciones.addEventListener('click', () => {
  event.preventDefault();
  ModalTermCondiciones.classList.add('ModalOpen');
  BcgMobile.classList.add('BcgMobileActive');
});

CerrarTerm.addEventListener('click', () => {
 event.preventDefault();
 ModalTermCondiciones.classList.remove('ModalOpen');
 BcgMobile.classList.remove('BcgMobileActive');
});




});