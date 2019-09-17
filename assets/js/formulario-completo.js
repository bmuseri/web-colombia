//formularios

    //BOTONES:
   //btnComenzar  btncomenzarDos  btnFinalizar  btnContinuar  btnContinuarDos btnContinuarTres btnContinuarCuatro 
   //btnContinuarCinco  btnContinuarSeis btnContinuarSiete btnContinuarOcho btnContinuarNueve btnContinuarDiez

    //SECCIONES:
    /*
        DatosPersonales
        DatosPersonalesDos
        DatosPersonalesTres
        DatosLocacion
        DatosLocacionDos
        DatosLocacionTres
        DatosLaborales
        DatosLaboralesDos
        ValidacionIdentidad
        ValidacionIdentidadDos
        MotivoSolicitud
        ResultadoAprobacion
        MensajeFinaizacion
    */

  //Animaciones
    /*animationTxt3.play();
    animationTxt4.play();
    animationTxt5.play();
    animationTxt6.play();
    animationTxt7.play();
    animationTxt8.play();
    animationTxt9.play();
    animationTxt10.play();
    animationTxt11.play();
    animationTxt12.play();
    animationTxt13.play();
    animationTxt14.play();
    */
  //

  var divs = ["DatosPersonales", "DatosPersonalesDos", "DatosPersonalesTres", "DatosLocacion", "DatosLocacionDos", "DatosLocacionTres", "DatosLaborales", "DatosLaboralesDos" , "ValidacionIdentidad" , "ValidacionIdentidadDos" , "MotivoSolicitud" , "ResultadoAprobacion" , "MensajeFinaizacion"];

  var VisibleSection = null;
  function toggleVisibility(Section) {
    if(VisibleSection === Section) {
      VisibleSection = null;
    } else {
      VisibleSection = Section;
    }
    hideNonVisibleDivs();
  }
  function hideNonVisibleDivs() {
    var i, Section, div;
    for(i = 0; i < divs.length; i++) {
      Section = divs[i];
      div = document.getElementById(Section);
      if(VisibleSection === Section) {

      div.style.display = "block";

      } else {

       div.style.display = "none";
       
     }
    }
  }


document.getElementById('btnComenzar').onclick = function(){
   toggleVisibility('DatosPersonalesDos');
   animationTxt2.play();
   event.preventDefault();
}
document.getElementById('btncomenzarDos').onclick = function(){ 
   toggleVisibility('DatosPersonalesTres');
   animationTxt3.play();
   event.preventDefault();
}
document.getElementById('btnFinalizar').onclick = function(){ 
   toggleVisibility('DatosLocacion');
   animationTxt4.play();
   event.preventDefault();
}
document.getElementById('btnContinuar').onclick = function(){ 
   toggleVisibility('DatosLocacionDos');
   animationTxt5.play();
   event.preventDefault();
}

document.getElementById('btnContinuarDos').onclick = function(){ 
 toggleVisibility('DatosLocacionTres');
 animationTxt6.play();
 event.preventDefault();
}
document.getElementById('btnContinuarTres').onclick = function(){ 
 toggleVisibility('DatosLaborales');
 animationTxt7.play();
 event.preventDefault();
}
document.getElementById('btnContinuarCuatro').onclick = function(){ 
 toggleVisibility('DatosLaboralesDos');
 animationTxt8.play();
 event.preventDefault();
}
document.getElementById('btnContinuarCinco').onclick = function(){ 
 toggleVisibility('ValidacionIdentidad');
 animationTxt9.play();
 event.preventDefault();
}
document.getElementById('btnContinuarSeis').onclick = function(){ 
 toggleVisibility('ValidacionIdentidadDos');
 animationTxt10.play();
 event.preventDefault();
}
document.getElementById('btnContinuarSiete').onclick = function(){ 
 toggleVisibility('MotivoSolicitud');
 animationTxt11.play();
 event.preventDefault();
}
document.getElementById('btnContinuarOcho').onclick = function(){ 
 toggleVisibility('ResultadoAprobacion');
 animationTxt12.play();
 event.preventDefault();
}
document.getElementById('btnContinuarNueve').onclick = function(){ 
 toggleVisibility('MensajeFinaizacion');
 animationTxt13.play();
 event.preventDefault();
}



var animationTxt2 = new TimelineMax({paused:true, reversed:true});

animationTxt2.staggerFrom('.anim-txt2', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt2.staggerTo('.anim-txt2', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt3 = new TimelineMax({paused:true, reversed:true});

animationTxt3.staggerFrom('.anim-txt3', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt3.staggerTo('.anim-txt3', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');

var animationTxt4 = new TimelineMax({paused:true, reversed:true});

animationTxt4.staggerFrom('.anim-txt4', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt4.staggerTo('.anim-txt4', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');

var animationTxt5 = new TimelineMax({paused:true, reversed:true});

animationTxt5.staggerFrom('.anim-txt5', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt5.staggerTo('.anim-txt5', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt6 = new TimelineMax({paused:true, reversed:true});

animationTxt6.staggerFrom('.anim-txt6', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt6.staggerTo('.anim-txt6', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt7 = new TimelineMax({paused:true, reversed:true});

animationTxt7.staggerFrom('.anim-txt7', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt7.staggerTo('.anim-txt7', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt8 = new TimelineMax({paused:true, reversed:true});

animationTxt8.staggerFrom('.anim-txt8', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt8.staggerTo('.anim-txt8', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');

var animationTxt9 = new TimelineMax({paused:true, reversed:true});

animationTxt9.staggerFrom('.anim-txt9', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt9.staggerTo('.anim-txt9', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt10 = new TimelineMax({paused:true, reversed:true});

animationTxt10.staggerFrom('.anim-txt10', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt10.staggerTo('.anim-txt10', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt11 = new TimelineMax({paused:true, reversed:true});

animationTxt11.staggerFrom('.anim-txt11', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt11.staggerTo('.anim-txt11', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt12 = new TimelineMax({paused:true, reversed:true});

animationTxt12.staggerFrom('.anim-txt12', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt12.staggerTo('.anim-txt12', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt13 = new TimelineMax({paused:true, reversed:true});

animationTxt13.staggerFrom('.anim-txt13', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt13.staggerTo('.anim-txt13', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');


var animationTxt14 = new TimelineMax({paused:true, reversed:true});

animationTxt14.staggerFrom('.anim-txt14', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt14.staggerTo('.anim-txt14', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');



//show and hide home
var home = new TimelineMax({paused:true ,  reversed:true});
   home.to('#home', 1, { opacity:1 , width: '900px', ease: Elastic.easeOut.config(1, 1) });

//how and hide form    
var AnimatBoxForm = new TimelineMax({paused:true, reversed:true});

AnimatBoxForm.from('#ContainerFormularios', 0.5, { y: 10, opacity:0, display: 'none' , ease: Elastic.easeOut.config(1, 1) }, '#ContainerFormularios');
AnimatBoxForm.to('#ContainerFormularios',0.5, {y: '8%', visibility: 'visible', display: 'block', opacity:1 ,  ease: Elastic.easeOut.config(1, 1) }, '#ContainerFormularios');
AnimatBoxForm.to('#home', 0.3, {width: '650px', opacity:0 },'#ContainerFormularios' ,'-=3.1');

//Animation 1

var animationTxt = new TimelineMax({paused:true, reversed:true, delay:1});

animationTxt.staggerFrom('.anim-txt', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.anim-txt');
animationTxt.staggerTo('.anim-txt', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.anim-txt');



//ABRIR FORM
BtnPedirPrestamo.addEventListener('click', () => {
   AnimatBoxForm.reversed() ? AnimatBoxForm.play() : AnimatBoxForm.reverse(); 
   home.reverse();
   animationTxt.play();
   animationTxt.delay(1.4);
});

//CERRAR FORM
var cerrar = document.getElementById('btnCerrar');

cerrar.addEventListener('click', () => {
   home.play();
   AnimatBoxForm.reversed() ? AnimatBoxForm.play() : AnimatBoxForm.reverse();  
});