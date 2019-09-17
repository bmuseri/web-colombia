document.addEventListener('DOMContentLoaded', function() {
    

    var BtnMenu = document.getElementById('BtnMenu');

    BtnMenu.addEventListener('click', () => {
    
        AnimatedIcon.classList.toggle('AnimationCruz');
        menu.classList.toggle('MenuActive');
        BcgMobile.classList.toggle('BcgMobileActive');
    
    });

    BcgMobile.addEventListener('click', () => {

        AnimatedIcon.classList.remove('AnimationCruz');
        menu.classList.remove('MenuActive');
        BcgMobile.classList.remove('BcgMobileActive');
    
    });


//Fixed Header
    window.addEventListener( 'scroll' , () => {

        if(window.scrollY >= 60){

           document.getElementById('menu').classList.add('fixed-bar-active');
           centro.classList.add('centroActiveScroll');
           centro.classList.remove('centroActiveScrollBack');

        }else{

            document.getElementById('menu').classList.remove('fixed-bar-active');
            centro.classList.add('centroActiveScrollBack');
            centro.classList.remove('centroActiveScroll');
        }
    
    });
    

// Botones 1 - Solicitar Prestamo 

BtnSolicitarPrestamo.addEventListener('click' , () => {


    BtnSolicitarPrestamo.classList.toggle('card-icon-active');
    BtnPago.classList.remove('card-icon-active');

    ContainerBtn.classList.toggle('ContainerActive');
    ContainerBtn2.classList.remove('ContainerActive');

    ContainerContactoCons.classList.remove('ContainerActive');
    ContainerContactoCons2.classList.remove('ContainerActive');

    ContainerContactoPago.classList.remove('ContainerActive');
    ContainerContactoPago2.classList.remove('ContainerActive');

    document.querySelector('#BtnSolicitarConsultas button').classList.remove('card-icon-active');
    document.querySelector('#BtnSolicitarReclamos button').classList.remove('card-icon-active');

});

BtnPago.addEventListener('click' , () => {
    BtnSolicitarPrestamo.classList.remove('card-icon-active');
    BtnPago.classList.toggle('card-icon-active');

    ContainerBtn.classList.remove('ContainerActive');
    ContainerBtn2.classList.toggle('ContainerActive');
   
    ContainerContactoCons.classList.remove('ContainerActive');
    ContainerContactoCons2.classList.remove('ContainerActive');

    document.querySelector('#BtnPagoConsultas button').classList.remove('card-icon-active');
    document.querySelector('#BtnPagoReclamos button').classList.remove('card-icon-active');

    ContainerContactoPago.classList.remove('ContainerActive');
    ContainerContactoPago2.classList.remove('ContainerActive');
    

});

// Botones 2 - Botones Consultas y Reclamos

BtnSolicitarConsultas.addEventListener('click', () => {

    document.querySelector('#BtnSolicitarConsultas button').classList.toggle('card-icon-active');
    document.querySelector('#BtnSolicitarReclamos button').classList.remove('card-icon-active');

    ContainerContactoCons.classList.toggle('ContainerActive');
    ContainerContactoCons2.classList.remove('ContainerActive');
});
BtnSolicitarReclamos.addEventListener('click', () => {

    ContainerContactoCons2.classList.toggle('ContainerActive');
    ContainerContactoCons.classList.remove('ContainerActive');

    document.querySelector('#BtnSolicitarConsultas button').classList.remove('card-icon-active');
    document.querySelector('#BtnSolicitarReclamos button').classList.toggle('card-icon-active');
});


// Botones 1 - Pago Prestamo 

BtnPagoConsultas.addEventListener('click' , () => {
    ContainerContactoPago.classList.toggle('ContainerActive');
    ContainerContactoPago2.classList.remove('ContainerActive');

    document.querySelector('#BtnPagoConsultas button').classList.toggle('card-icon-active');
    document.querySelector('#BtnPagoReclamos button').classList.remove('card-icon-active');

});

BtnPagoReclamos.addEventListener('click' , () => {
    ContainerContactoPago.classList.remove('ContainerActive');
    ContainerContactoPago2.classList.toggle('ContainerActive');

    document.querySelector('#BtnPagoConsultas button').classList.remove('card-icon-active');
    document.querySelector('#BtnPagoReclamos button').classList.toggle('card-icon-active');
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

//



 }, false);