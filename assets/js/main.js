//Menu Mobile
var BtnMenu = document.getElementById('BtnMenu');

BtnMenu.addEventListener('click', () => {
  AnimatedIcon.classList.toggle('AnimationCruz');
  menu.classList.toggle('MenuActive');
  BcgMobile.classList.toggle('BcgMobileActive');
});

//Cerrar Menu Mobile
BcgMobile.addEventListener('click', () => {
    AnimatedIcon.classList.remove('AnimationCruz');
    menu.classList.remove('MenuActive');
    BcgMobile.classList.remove('BcgMobileActive');
});

//Slider de Prestamos Home 
 var valueBubble = '<div class="Range_Value_Bubble" id="value-box"></div>';
 var valueBubbleDos = '<div class="Range_Value_Bubble" id="ValueBoxDos"></div>';
 

 function updateValueBubble(pos, value, context) {
   pos = pos || context.position;
   value = value || context.value;
   var $valueBubble = $('#value-box', context.$range);
   var tempPosition = pos + context.grabPos;
   var position = (tempPosition <= context.handleDimension) ? context.handleDimension : (tempPosition >= context.maxHandlePos) ? context.maxHandlePos : tempPosition;
 
   if ($valueBubble.length) {
     $valueBubble[0].style.left = Math.ceil(position) + 'px';
     $valueBubble[0].innerHTML = '$' + value ;
   } 
 }
 
 function updateValueBubbleDos(pos, value, context) {
   pos = pos || context.position;
   value = value || context.value;
   var $valueBubbleDos = $('#ValueBoxDos', context.$range);
   var tempPosition = pos + context.grabPos;
   var position = (tempPosition <= context.handleDimension) ? context.handleDimension : (tempPosition >= context.maxHandlePos) ? context.maxHandlePos : tempPosition;
 
   if ($valueBubbleDos.length) {
     $valueBubbleDos[0].style.left = Math.ceil(position) + 'px';
     $valueBubbleDos[0].innerHTML = 'Días ' + value;
   }
 }
 

 $('#pesos').rangeslider({
   polyfill: false,
   onInit: function() {
     this.$range.append($(valueBubble));
     updateValueBubble(null, null, this);
   },
   onSlide: function(pos, value) {
     updateValueBubble(pos, value, this);
   }
 });
 
$('#dias').rangeslider({
   polyfill: false,
   onInit: function() {
     this.$range.append($(valueBubbleDos));
     updateValueBubbleDos(null, null, this);
   },
   onSlide: function(pos, value) {
     updateValueBubbleDos(pos, value, this);
   }
 });
 
 
 var slider = document.getElementById('pesos');
 var val = document.getElementById('ValueBoxPesosDos');
     
 val.innerHTML = slider.value;
 
 slider.oninput = function(){
     val.innerHTML = '$' + this.value; 
 }


/*Button de Scroll*/
window.smoothScroll = function(target) {
  var scrollContainer = target;
  do { //find scroll container
      scrollContainer = scrollContainer.parentNode;
      if (!scrollContainer) return;
      scrollContainer.scrollTop += 1;
  } while (scrollContainer.scrollTop == 0);
  
  var targetY = 0;
  do { //find the top of target relatively to the container
      if (target == scrollContainer) break;
      targetY += target.offsetTop;
  } while (target = target.offsetParent);
  
  scroll = function(c, a, b, i) {
      i++; if (i > 60) return;
      c.scrollTop = a + (b - a) / 60 * i;
      setTimeout(function(){ 
        scroll(c, a, b, i);
      }, 20);
  }
  // start scrolling
  scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

document.getElementById('BtnScrollDown').onclick = function(){
  smoothScroll(document.getElementById('SectionOne')); //seccion a la q quiero ir al hacer click
};


//Fixed Header

var ColorLinks = document.querySelectorAll('.menu-lnks');
var barraHome = document.getElementById('home');

window.addEventListener( 'scroll' , () => {

  if(window.scrollY >= 60){
  
     document.getElementById('menu').classList.add('fixed-bar-active');
     barraHome.classList.add('centroActiveScroll');
     barraHome.classList.remove('centroActiveScrollBack');
     
     //Colores links del menu
     for (i = 0; i < ColorLinks.length; i++) {
      ColorLinks[i].classList.add('menu-lnks-black');
    } 
      SolvDesktop.src = 'assets/img/solventa-violeta.svg';
      BtnCuenta.classList.add('white-border-btn-scroll');
    
  }else{

      document.getElementById('menu').classList.remove('fixed-bar-active');
      barraHome.classList.add('centroActiveScrollBack');
      barraHome.classList.remove('centroActiveScroll');

      //Colores links del menu
      for (i = 0; i < ColorLinks.length; i++) {
        ColorLinks[i].classList.remove('menu-lnks-black');
      } 

      SolvDesktop.src = 'assets/img/solventa-white.svg';
      BtnCuenta.classList.remove('white-border-btn-scroll') 
  }

});

//Styles al abrir Form en Home

  var lines = document.querySelectorAll('#AnimatedIcon div'), i;

  BtnPedirPrestamo.addEventListener('click', function() {

  for (i = 0; i < lines.length; ++i) {
    lines[i].classList.add('FormActive');
  }
  SolventaMob.src = "assets/img/solventa-black.svg";
  FixedTopContainer.classList.add('FormActive');
});

//AL ABRIR FORM SCROLLEAR 60PX HACIA ABAJO

function myFunction(mediaQuery) {  
    if (mediaQuery.matches) { 
      $("#BtnPedirPrestamo").click(function(event){
        $('html, body').animate({scrollTop: '+=72px'}, 600);
      });
  } 
 }
 
 var mediaQuery = window.matchMedia("(max-width: 1000px)")
 myFunction(mediaQuery) 
 mediaQuery.addListener(myFunction) //



//Modal Footer / Term y Condiciones

/*
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

*/


