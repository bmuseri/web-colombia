<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js" ></script>

    <!-- Start of  Zendesk Widget script -->
    <!--script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=3b237cb2-bff6-4c77-bfc2-7b7892881972"> </script-->
    <!-- End of  Zendesk Widget script -->
    <title>Solventa</title>

</head>
<body id='body' >
    <div class="bcg-mobile" id="BcgMobile"></div>

    <section class="home" style="background: #2D3244 url(assets/img/bcg-home.jpg) no-repeat center;" >
        
        <div class="FixedTopContainer FixedTopContainerBlack" id="FixedTopContainer">
            <div class="fixed-top" >
                <div class="top-bar d-flex contact-bar" id="TopBar">
                    <div class="numbers d-flex contact-home">
                        <div class="solv-mobile">
                            <img id="SolventaMob" src="assets/img/solventa-white.svg" alt="solventa">
                        </div>

                        <button id="BtnMenu">
                        <div class="Menu-Icon" id="AnimatedIcon">
                            <div class="Line1" id="LineOne"></div>
                            <div class="Line2" id="LineTwo"></div>
                            <div class="Line3" id="LineThree"></div>
                        </div>
                        </button>                                 

                        <div class="d-flex box-contact">
                            <img class="phone-icon" src="assets/img/phone-white.svg" alt="icono telefono">
                            <a href="" class="phone-number phone-number-home">(1) 639 8384</a>
                        </div>                
                    </div>
                    <div class="flags">
                        <a href="http://www.solventa.co"><img src="assets/img/colombia.png" alt="bandera colombia"></a>
                        <a href="https://www.solventa.com.ar/"><img class="arg-flag" src="assets/img/argentina.png" alt="bandera argentina"></a> 
                    </div>
                </div>
            
                <div class="menu d-flex fixed-bar" id="menu">
                    <div class="d-flex">
                            <div class="d-flex top-bar-menu">
                            <div class="solventa-box" >
                                <img class="solventa solv-desktop" src="assets/img/solventa-white.svg" id="SolvDesktop" alt="SOLVENTA">
                            </div>
                            </div>
                            <div class="menu-list menu-list-faqs d-flex">
                                <ul class="d-flex" id="ContainerMenu">
                                    <li><a class="menu-lnks BtnLinksMenu" id="inicio" href="/">Inicio</a></li>
                                    <li><a class="menu-lnks BtnLinksMenu" href="preguntas-frecuentes">Preguntas Frecuentes</a></li>
                                    <!--li><a class="menu-lnks BtnLinksMenu" href="" id="">Blog</a></li-->
                                    <li><a class="menu-lnks BtnLinksMenu" href="centro-de-ayuda">Ayuda</a></li>
                                </ul>
                                <div class="box-mi-cuenta">
                                    <button class="white-border-btn" id="BtnCuenta">Mi Cuenta</button>
                                    <!--button class="green-btn">PEDIR PRÉSTAMO</button-->
                                </div>
                            </div>
                            <div class="top-bar d-flex top-bar-mobile">
                                <div class="numbers d-flex contact-home">
                                    <div class="d-flex box-contact box-contact-mobile">
                                        <img class="phone-icon" src="assets/img/phone-gris.svg" alt="icono telefono">
                                        <span class="num-tel">000 0000 0000</span>
                                    </div>           
                                </div>
                                <div class="flags flags-mobile">
                                    <a href="http://www.solventa.co"><img src="assets/img/colombia.png" alt="bandera colombia"></a>
                                    <a href="http://www.solventa.com.ar"><img class="arg-flag" src="assets/img/argentina.png" alt="bandera argentina"></a> 
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" id="home">
                                
                   <div class="main-home">
           
                       <h1>Préstamos rápidos <span>100% online</span> </h1>
                       <p class="subt-h1" > <img src="assets/img/check.svg" class="check-icono" alt="check icon"> Retire su dinero por cajero en menos de 24hs.</p>
           
                       <div class="white-box margin-auto" id="boxwhite">
           
                           <div class="container-white-box" >
                                   <div class="header-white-box" ><p class="purple-txt bold" >Solicitá tu préstamo</p></div>
                                   <div class="d-flex box-white-box">
                                       <div class="elegi">
                                               <div>
                                                    <p class="title-barra">Elije tu dinero</p>
                                                    <div class="barra-dinero">
                                                        
                                                        <div>
                                                            <input type="range" step="50000" min="200000" max="2200000" id='pesos' >
                                                                
                                                        </div>
                                                    </div>
                                               </div>
                                               <div>
                                                   <p class="title-barra">Elije cuando pagarlo</p>
                                                   <div class="barra-dinero">
                                                
                                                    <input type="range" id='dias' max="32" >
                                                    
                                                    <div>

                                                    </div>
                                                </div>                                                   
                                               </div>
                                       </div>
                                       <div class="datos">
                                           <div class="box-1"><p class="bold">Fecha de Pago: <span class="fecha">10 de julio</span> </p></div>
                                           <div class="box-2">
                                               <p class="bold">DETALLE DE CUOTAS</p>
                                               <div class="datos-box">
                                                   <div class="d-flex">
                                                       <p class="bold">Cantidad</p>
                                                       <p class="bold datos-txt">7</p>
                                                   </div>
                                                   <div class="d-flex">
                                                       <p class="bold">Valor</p>
                                                       <p class="bold datos-txt" id="ValueBoxPesosDos">$00.000</p>
                                                   </div>
                                                   <div class="d-flex">
                                                       <p class="bold">Primer pago</p>
                                                       <p class="bold datos-txt">10/07/2019</p>
                                                   </div>
                                               </div>
                                            </div>
                                           <button class="green-btn" id="BtnPedirPrestamo" >Pedir Préstamo</button>
                                       </div>
                                   </div>

                           </div>

                       </div>
           
                   </div>
 
        </div>
        
        <div class="scroll-down-container"><img src="assets/img/down-arrow.svg" alt="down arrow" id="BtnScrollDown"></div>

        <?php include "formulario.html"; ?>    

    </section>

    <section class="requisitos" id="SectionOne">

            <div class="container">
                    <h2 class="h2-purple">Lo que nos diferencia</h2>
                    <p style="text-align: center; padding-top: 0.5em">Siempre buscamos ayudarte</p>
                    <div class="d-flex box-icon-container p-5 box-desktop">
                            <div class="box-icons">
                                <div class="AnimationContainer">
                                    <div id="AnimationCelLoop"></div>
                                    <div id="AnimationCel"></div>
                                    
                                </div>
                                <p class="bold">Somos 100% digital</p>
                                <p class="txt-icons">Pida un prestamo desde su computadora o celular sin trámites ni papeleos.</p>
                                <button class="btn-purple">Saber más</button>
                            </div>
                            <div class="box-icons">
                                <div id="dos"></div>
                                <p class="bold">Cumple y gana dinero</p>
                                <p class="txt-icons">LLeve al día las cuotas de su préstamo y obtendrá beneficios extras.</p>
                                <button class="btn-purple">Saber más</button>
                            </div>
                            <div class="box-icons">
                                <div id="tres"></div>
                                <p class="bold">Refiere y gana dinero</p>
                                <p class="txt-icons">Por cada referido por usted, que obtenga un préstamo Solventa puede ganar desde $6.000</p>
                                <button class="btn-purple">Saber más</button>
                            </div>
                    </div> 
                    <!-- Swiper -->
                    <div class="swiper-mobile-animaciones swiper-container">
                            <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box-icons">
                                            <div class="AnimationContainer">
                                                <div id="AnimationCelM"></div>
                                            </div>
                                            <p class="bold">Somos 100% digital</p>
                                            <p class="txt-icons">Pida un prestamo desde su computadora o celular sin trámites ni pappeleos.</p>
                                            <button class="btn-purple">Saber más</button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-icons">
                                            <div id="dosM"></div>
                                            <p class="bold">Cumple y gana dinero</p>
                                            <p class="txt-icons">LLeve al día las cuotas de su préstamo y obtendrá beneficios extras.</p>
                                            <button class="btn-purple">Saber más</button>
                                        </div>                                    
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-icons">
                                            <div id="tresM"></div>
                                            <p class="bold">Refiere y gana dinero</p>
                                            <p class="txt-icons">Por cada referido por usted, que obtenga un préstamo Solventa puede ganar desde $6.000</p>
                                            <button class="btn-purple">Saber más</button>
                                        </div>
                                    </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>

                    </div> 
            </div>

    </section>

    <section class="beneficios">

        <div class="container">
                <h2 class="text-align-center">Conoce nuestros beneficios</h2>
                <p class="sub-text text-align-center"> <img class="check-icono" src="assets/img/check.svg" alt="check icon"> Compartí lo bueno con amigos</p>
        
                <div class="box-white margin-auto">
                    <p class="text-align-center p-h2 beneficios-txt">Solventa premia tu confianza y cumplimiento con el servicio. Disfrutá de los beneficios.</p>
        
                    <div class="d-flex justify-content-around medalla-box">
                        <div class="first-box">
                            <p class="purple-txt title-purple">REFIERE Y GANA DINERO</p>
                            <P>Tu fidelidad tiene su recompensa. Por cada referido tuyo, que obtenga un préstamo Solventa puede ganar desde $6.000.</P>
                        </div>
                        <div class="middle-box" >
                            <img class="medalla-icon" src="assets/img/ico-medalla.svg" alt="medalla icon">
                        </div>
                        <div class="third-box">
                            <p class="purple-txt title-purple">CUMPLE Y GANA DINERO</p>
                            <P>Lleve al día las cuotas de tu préstamo y obtendrás beneficios extras en tu próxima solicitud.</P>
                        </div>    
                    </div>

                    <!--p class="lee-mas" > <span><img class="btn-plus" src="assets/img/check.png" alt="icono mas"></span> Lee más como funciona </p-->
        
                </div>
        </div>
    </section>

    <section class="prestamo-rapido">

        <div class="container">
            <h2>Sacar tu Préstamo es muy fácil</h2>
            <p class="p-txt sub-text sub-text-prest"> <span><img class="check-icon check-icon-black" src="assets/img/check-black.svg" alt="check icon"></span> En sólo 4 simples pasos puede tener depositado el dinero que necesita</p>

            <div class="d-flex mockups">
                <div class="phone-mockup">
                    <div>
                        <img class="img-phone-mockup" src="assets/img/cel-1.png" alt="mockup phone">
                    </div>
                    <div class="d-flex numbers-box datos-img">
                        <img class="numbers-iconos"  src="assets/img/uno.svg" alt="">
                        <p> <span class="bold">Ingrese </span>tus datos</p>
                    </div>
                </div>
                <div class="phone-mockup">
                    <div>
                        <img class="img-phone-mockup" src="assets/img/cel-2.png" alt="mockup phone">
                    </div>
                    <div class="d-flex numbers-box datos-img selecciona">
                        <img class="numbers-iconos"  src="assets/img/dos.svg" alt="">
                        <p> <span class="bold">Seleccione </span> el dinero</p>
                    </div>
                </div>  
                <div class="phone-mockup">
                    <div>
                        <img class="img-phone-mockup" src="assets/img/cel-3.png" alt="mockup phone">
                    </div>
                    <div class="d-flex numbers-box datos-img">
                        <img  class="numbers-iconos" src="assets/img/tres.svg" alt="">
                        <p> <span class="bold">Valide</span> su identidad</p>
                    </div>
                </div>
                <div class="phone-mockup">
                    <div>
                        <img class="img-phone-mockup" src="assets/img/cel-4.png" alt="mockup phone">
                    </div>
                    <div class="d-flex numbers-box datos-img">
                        <img class="numbers-iconos" src="assets/img/cuatro.svg" alt="">
                        <p> <span class="bold">Retire</span> el dinero</p>
                    </div>
                </div>                        
            </div>
            <!-- Swiper -->
            <div class="swiper-container swiper-mobile swiper-container-mockup">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                            <div class="phone-mockup">
                                    <div>
                                        <img class="img-phone-mockup" src="assets/img/cel-1.png" alt="mockup phone">
                                    </div>
                                    <div class="d-flex numbers-box datos-img">
                                        <img class="numbers-iconos"  src="assets/img/uno.svg" alt="">
                                        <p> <span class="bold">Ingresá </span>tus datos</p>
                                    </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                            <div class="phone-mockup">
                                    <div>
                                        <img class="img-phone-mockup" src="assets/img/cel-2.png" alt="mockup phone">
                                    </div>
                                    <div class="d-flex numbers-box datos-img selecciona">
                                        <img class="numbers-iconos"  src="assets/img/dos.svg" alt="">
                                        <p> <span class="bold">Seleccioná</span>  el dinero</p>
                                    </div>
                                </div>  

                    </div>
                    <div class="swiper-slide">
                            <div class="phone-mockup">
                                    <div>
                                        <img class="img-phone-mockup" src="assets/img/cel-3.png" alt="mockup phone">
                                    </div>
                                    <div class="d-flex numbers-box datos-img">
                                        <img  class="numbers-iconos" src="assets/img/tres.svg" alt="">
                                        <p> <span class="bold">Validá</span> tu identidad</p>
                                    </div>
                                </div>


                    </div>
                    <div class="swiper-slide">
                            <div class="phone-mockup">
                                    <div>
                                        <img class="img-phone-mockup" src="assets/img/cel-4.png" alt="mockup phone">
                                    </div>
                                    <div class="d-flex numbers-box datos-img">
                                        <img class="numbers-iconos" src="assets/img/cuatro.svg" alt="">
                                        <p> <span class="bold">Retirá</span> el dinero</p>
                                    </div>
                                </div> 

                    </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
            </div>
            <div class="btn-container">
                <button class="green-btn">Pedir Préstamo</button>
            </div>

        </div>

    </section>

    <section class="pagar-prestamo">

        <div class="container">
                <h2 class="h2-purple">Page su préstamo como quieras</h2>
                <p class="p-txt sub-text"> <img src="assets/img/check-black.svg" class="check-icon check-icon-black" alt="check icon"> Trabajamos con diversas entidades y sistemas de pago</p>
                <!--div class="img-brands">
                    <img src="assets/img/logos-grises.png" alt="" class="marcas logos">
                </div-->
        </div>

    </section>

    <section class="prestamo-celular">
        <div class="container d-flex">
            <div class="img-cel">
                <img class="celu-app" src="assets/img/celu-app.png" alt="mockup celular">
            </div>
            <div class="content content-left">
                    <h2 class="h2-white">Pida su préstamo desde su celular</h2>
                    <!--p class="p-white sub-text">Con <span class="bold">Solventa</span> disfrutá de pedir el Dinero que necesitas estés donde estés SOLICITUD 100% ONLINE</p-->
                    <button class="btn-descarga" >Descargá la app</button>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>    


<?php include "popup-centro-ayuda.php"; ?>

<link rel="stylesheet" href="assets/css/swiper.min.css">
<link rel="stylesheet" href="assets/fonts/fonts.css">
<script src="assets/js/rangeslider.min.js"></script>
<script src="assets/js/main.js" ></script>
<script src="assets/js/swiper.min.js" ></script>
<script src="assets/js/ventana-centro-ayuda.js"></script>
<script src="assets/js//lottie.js"></script>



<script>
    
    /*Slider*/
    var swiper = new Swiper('.swiper-container-mockup', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
     
    });
    /*Slider Mobile Iconos*/
    var swiper = new Swiper('.swiper-mobile-animaciones', {
      slidesPerView: 1,
      centeredSlides: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
     
    });    
</script>


<script>


let animationDiv = document.getElementById('SectionOne');

    let AnimationCelM = bodymovin.loadAnimation({

        container: document.getElementById('AnimationCelM'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: 'assets/lottie/data.json'
    });

    var animationDosM = bodymovin.loadAnimation({

        container: document.getElementById('dosM'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: 'assets/lottie/dataDos.json'

    });

    var animationTresM = bodymovin.loadAnimation({

        container: document.getElementById('tresM'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: 'assets/lottie/dataTres.json'

    });



function loader(div, pathLocation) {

    var AnimationCel = bodymovin.loadAnimation({

            container: document.getElementById('AnimationCel'),
            renderer: 'svg',
            loop: true,
            autoplay: false,
            autoloadSegments: false,
            path: 'assets/lottie/data.json'
        });
        AnimationCel.playSegments([[0,264],[56,264]], true);

        var animationDos = bodymovin.loadAnimation({

            container: document.getElementById('dos'),
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: 'assets/lottie/dataDos.json'

        });

        var animationTres = bodymovin.loadAnimation({

            container: document.getElementById('tres'),
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: 'assets/lottie/dataTres.json'
        });

        setTimeout(function(){ 
           AnimationCel.playSegments([[0,264],[56,264]], true);
        }, 1000);

        setTimeout(function(){ 
            animationDos.playSegments([[0,170],[55,170]], true);
        }, 1800);

        setTimeout(function(){ 
            animationTres.playSegments([[0,140],[65,140]], true);
        }, 3000);

}

window.addEventListener('scroll', () => {
   
    let scrollHeightPercent = document.documentElement.scrollHeight * 0.08
    let currentPOS = document.documentElement.scrollTop || document.body.scrollTop

    if (currentPOS >= scrollHeightPercent) {
            
            let bodyMotion1 = document.getElementById('AnimationCel');
            loader(bodyMotion1, "assets/lottie/data.json")
      
    };
});



//Animaciones Mobile
    setTimeout(function(){ 
        //AnimationCelM.play();
        AnimationCelM.playSegments([[0,264],[56,264]], true);
    }, 1000);

    setTimeout(function(){ 
        //animationDosM.playSegments();
        animationDosM.playSegments([[0,170],[55,170]], true);
    }, 1800);

    setTimeout(function(){ 
        //animationTresM.play();
        animationTresM.playSegments([[0,149],[60,147]], true);
    }, 3000);


//Imagen Scroll 
BtnPedirPrestamo.addEventListener('click', () => {
    BtnScrollDown.style.display = 'none';
});

</script>



</body>
</html>