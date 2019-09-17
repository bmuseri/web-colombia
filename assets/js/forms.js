document.addEventListener("DOMContentLoaded", function(){

//var divs = document.getElementsByClassName("forms-container");

    //BOTONES:
    /*ingresar
    continuar
    finalizar*/

    //SECCIONES:
    /*
    login
    register
    registerDos
    */

    //Animation1
    var animation = new TimelineMax({paused:true});

    animation.staggerFrom('.go', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1) },0.1,  '.go');
    animation.staggerTo('.go', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1) },0.1, '.go');
 
    animation.play();


    //Animation2
    var animation2 = new TimelineMax({paused:true});
 
    animation2.to('#register', 0.7, {x:'-50%', opacity:1, ease: Back.easeOut.config(1.7)});
    animation2.staggerFrom('.go2', 1, {x:-50, opacity:0, ease: Elastic.easeOut.config(1, 1)}, 0.1, "-=0.6" );
    animation2.staggerTo('.go2', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1)}, 0.1, "-=0.6" );
   
     //Animation3
    var animation3 = new TimelineMax({paused:true});
    animation3.to('#registerDos', 0.3, {x:'-50%', opacity:1 });
    animation3.staggerFrom('.go3', 1, {x:-100, opacity:0, ease: Elastic.easeOut.config(1, 1)},0.1, '.go3', "-=0.6");
    animation3.staggerTo('.go3', 1, {x:0, opacity:1, ease: Elastic.easeOut.config(1, 1)},0.1, '.go3', "-=0.6");
 
 
   /*Animation Prox Form*/
   var animationA = new TimelineMax({paused:true});

   animationA.to('#login', 1, { display: 'none' });


    //Hide and Show Forms
 
     var divs = ["login", "register", "registerDos"];
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
          
         // animationA.play();
         // div.style.pointerEvents = "visible";

         } else {

          div.style.display = "none";

          //div.style.pointerEvents = "none";
          
         }
       }
     }
    
 document.getElementById('ingresar').onclick = function(){
    toggleVisibility('register');
    animation2.play();   
 }
 document.getElementById('continuar').onclick = function(){
     toggleVisibility('registerDos');
     animation3.play();
 }
 document.getElementById('VolverRegisterDos').onclick = function(){
     toggleVisibility('register');
     animation3.play();
 }
 

});