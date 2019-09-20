//
// ───────────────────────────────────────────────────── SOLICITA TU PRESTAMO ─────
//


var slider = document.getElementById("pesos");
var ValorMonto = document.getElementById("MontoDinero");
var ValorMontoDos = document.getElementById("ValorMontoDos");

ValorMonto.innerHTML = slider.value;

slider.oninput = function() {
  ValorMonto.innerHTML = '$' + this.value;
  ValorMontoDos.innerHTML = '$' + this.value;
}

var slider = document.getElementById("dias");
var ValCantDias = document.getElementById("MontoCuota");

ValCantDias.innerHTML = slider.value;

slider.oninput = function() {
  ValCantDias.innerHTML = '$' + this.value;
}

//Aparicion Boton Prestamo Destacado
var slider = document.getElementById("pesos");
var BtnCircle = document.getElementById('BtnCircle');

      slider.addEventListener("input", function() {
        BtnCircle.classList.add('BtnCircleTransform');
        BilleteraIcon.classList.add('BtnCircleTransformImg'); 

        if(slider.value > 600000){
            PrimerPrestamo.style.display = 'flex';
/*            PrimerPrestamo.classList.add('AcitvePrestamo');
            TitleBarra.style.display = 'none';
            MontoDinero.style.display = 'none';

*/            
        }   

      }); 