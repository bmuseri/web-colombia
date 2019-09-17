<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/jquery.min.js" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Solventa Centro de Ayuda</title>
</head>
<body>
        <div class="bcg-mobile" id="BcgMobile"></div>

<?php
include "header.php";
?>

       <section class="centro-ayuda" id="centro">
            <div class="container">

                <h2 class="h2-purple">Centro de ayuda</h2>
                <p class="text-align-center subt-h2">¿Con qué te podemos ayudar? <br> Elegí una categoría y un medio de contacto</p>

                <div class="container-centro-ayuda">
                        <div class="box-cards d-flex" id="BoxCardsContainer">

                                <div class="card-icon" id="BtnSolicitarPrestamo">
                                        <div>
                                            <!--img id="SolicitarIcon" class="cel-icon" src="assets/img/cobranza-icon.svg" alt="celular icon"-->
                                        </div>
                                        <p class="purple-title" id="TitleSolicitar">Solicitar Préstamo</p>
                                        <p class="grey-txt">Estás acompañado en cada etapa del proceso de tu solicitud.</p>
                                </div>
                            

                                <div class="card-icon" id="BtnPago" onclick="setTimeout(myFunction, 3000);">
                                        <div>
                                            <!--img id="ReclamosIcon" class="cel-icon" src="assets/img/reclamos-icon.svg" alt="celular icon"-->
                                        </div>
                                        <p class="purple-title" id="TitlePrestamos">Pago del Préstamo</p>
                                        <p class="grey-txt">Si tenés dudas sobre el pago del préstamo podés contactarnos.</p>
                                </div>
                                      
                                <!--Buttons de Solicitar Prestamo-->
                                <div class="ContainerBtn" id="ContainerBtn">
                                    <div class="solicitar btn-ayuda Btnconsultas" id="BtnSolicitarConsultas">
                                            <button id="btnconsultas1">Consultas</button>
                                    </div>
                                    <div class="solicitar btn-ayuda btn-ayuda BtnReclamos" id="BtnSolicitarReclamos">
                                            <button>Reclamos</button>
                                    </div> 
                                </div>
                                <!--Buttons de Pago Prestamo-->
                                <div id="ContainerBtn2">
                                    <div class="btn-ayuda Btnconsultas" id="BtnPagoConsultas">
                                            <button>Consultas</button>
                                    </div>
                                    <div class="btn-ayuda BtnReclamos" id="BtnPagoReclamos">
                                            <button>Reclamos</button>
                                    </div> 
                                </div>

                                <!--Solicitar Prestamo / Numeros de Contacto Consulta -->
                                <div class="ContainerBtns3-" id="ContainerContactoCons">
                                    <div class="solicitar-box box-help cursor-pointer">
                                            <div><img src="assets/img/chat-icon-violeta.svg" alt="icono chat"></div>
                                            <p>Chateá con nosotros</p>
                                    </div>
                                    <div class="solicitar-box box-help cursor-pointer">
                                            <div><img src="assets/img/ws-icon-violeta.svg" alt="icono whatsapp"></div>
                                            <p>whastapp</p>
                                    </div>
                                    <div class="solicitar-box box-help cursor-pointer">
                                            <div><img src="assets/img/llamanos-icon.svg" alt="icono llamar"></div>
                                            <p>LLamanos <br> (011) 5276-2310 </p>
                                    </div>
                                </div>
                                <!--Solicitar Prestamo / Numeros de Contacto Reclamo -->
                                <div class="ContainerBtns3-" id="ContainerContactoCons2">
                                    <div class="box-help cursor-pointer">
                                            <div><img src="assets/img/chat-icon-violeta.svg" alt="icono chat"></div>
                                            <p>Chateá con nosotros</p>
                                    </div>
                                    <div class="box-help cursor-pointer">
                                            <div><img src="assets/img/ws-icon-violeta.svg" alt="icono whatsapp"></div>
                                            <p>whastapp</p>
                                    </div>
                                    <div class="box-help cursor-pointer">
                                            <div><img src="assets/img/llamanos-icon.svg" alt="icono llamar"></div>
                                            <p>LLamanos <br> (011) 5276-2310</p>
                                    </div>
                                </div>

                                <!--Pago Prestamo / Numeros de Contacto Consulta -->
                                <div class="ContainerBtns3" id="ContainerContactoPago">
                                    <div class="box-help cursor-pointer" >
                                            <div><img src="assets/img/chat-icon-violeta.svg" alt="icono chat"></div>
                                            <p>Chateá con nosotros</p>
                                    </div>
                                    <div class="box-help cursor-pointer">
                                            <div><img src="assets/img/ws-icon-violeta.svg" alt="icono whatsapp"></div>
                                            <p>whastapp</p>
                                    </div>
                                    <div class="box-help cursor-pointer">
                                            <div><img src="assets/img/llamanos-icon.svg" alt="icono llamar"></div>
                                            <p>LLamanos <br> (011) 5276-2310</p>
                                    </div>
                                </div>
                                <!--Pago Prestamo / Numeros de Contacto Reclamo -->
                                <div class="ContainerBtns3" id="ContainerContactoPago2">
                                    <div class="box-help cursor-pointer" >
                                            <div><img src="assets/img/chat-icon-violeta.svg" alt="icono chat"></div>
                                            <p>Chateá con nosotros</p>
                                    </div>
                                    <div class="box-help cursor-pointer">
                                            <div><img src="assets/img/ws-icon-violeta.svg" alt="icono whatsapp"></div>
                                            <p>whastapp</p>
                                    </div>
                                    <div class="box-help cursor-pointer">
                                            <div><img src="assets/img/llamanos-icon.svg" alt="icono llamar"></div>
                                            <p>LLamanos <br> (011) 5276-2310</p>
                                    </div>
                                </div>
                                
                            </div>

                </div>

            </div>

       </section>

        <section class="prestamo-celular-faqs">
                <div class="container d-flex">
                    <div class="img-cel-mock-faqs">
                        <img class="celu-app celu-app-faqs" src="assets/img/celu-app.png" alt="mockup celular">
                    </div>
                    <div class="content content-left">
                            <h2 class="h2-white"> <span class="h2-bold"> Pedí tu préstamo</span> desde tu celular</h2>
                            <p class="p-white sub-text">Con Solventa disfrutá de pedir el dinero que necesitas estés donde estés. <span class="bold-extra">Solicitud 100% online</span> </p>
                            <button class="btn-descarga btn-descarga-txt-purple btn-bcg-img" >Descargar APP</button>
                    </div>
                </div>
        </section>



    <?php include "footer.php"; ?>    

    <!--Modal Tasas y Terminos y Condiciones-->        
    <div class="modal-footer modal-detalles-tasas" id="ModalDetallesTasas">
        <div> <img id="closeimgtasa" class="closeimg" src="assets/img/close.svg" alt="icono cerrar"> </div>
        <h4>Detalles y Tasas</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed in dicta, voluptatum id, excepturi rem mollitia odio libero illum magnam eaque adipisci voluptate? Assumenda perferendis, doloribus iure corporis libero excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed in dicta, voluptatum id, excepturi rem mollitia odio libero illum magnam eaque adipisci voluptate? Assumenda perferendis, doloribus iure corporis libero excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed in dicta, voluptatum id, excepturi rem mollitia odio libero illum magnam eaque adipisci voluptate? Assumenda perferendis, doloribus iure corporis libero excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed in dicta, voluptatum id, excepturi rem mollitia odio libero illum magnam eaque adipisci voluptate? Assumenda perferendis, doloribus iure corporis libero excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed in dicta, voluptatum id, excepturi rem mollitia odio libero illum magnam eaque adipisci voluptate? Assumenda perferendis, doloribus iure corporis libero excepturi.</p>
    </div>
    <div class="modal-footer modal-term-condiciones" id="ModalTermCondiciones" >
            <div class="modal-footer-container">
                <div> <img class="closeimg" src="assets/img/close.svg" alt="icono cerrar" id="CerrarTerm"> </div>
                <h4>Términos y condiciones</h4>
                <p> <a href="http://www.solventa.co">www.solventa.co</a> (en adelante, "Página web") es de propiedad de Solventa SAS (en adelante, "Solventa") cuyo propósito es el de suministrar a los usuarios la información concerniente a créditos personales de manera online, la forma de adquirirlos, sus beneficios, costos y requerimientos.</p>
                <p>
                    Solventa recuerda que al visitar nuestro sitio, participa en nuestro “Servicio” y acepta los siguientes términos y condiciones, incluidos todos los términos y condiciones adicionales y las políticas a las que se hace referencia en el presente documento y/o disponible a través de hipervínculos. Estas Condiciones de Servicio se aplican a todos los usuarios del sitio, incluyendo su limitación a usuarios que sean navegadores, proveedores, clientes, comerciantes, y/o colaboradores de contenido (En adelante “Usuario”) por lo que recomendamos lea estos Términos de Servicio cuidadosamente antes de acceder o utilizar nuestro sitio web. Al acceder o utilizar cualquier parte del sitio, está aceptando los Términos de Servicio. 
                </p>
                <p>
                    Cualquier función nueva o herramienta que se añadan al portal actual, también estarán sujetas a los Términos de Servicio. Puede revisar la versión actualizada de los Términos de Servicio, en cualquier momento en esta página. Nos reservamos el derecho de actualizar, cambiar o reemplazar cualquier parte de los Términos de Servicio mediante la publicación de actualizaciones y/o cambios en nuestro sitio web.
                </p>
                <p>Su uso continuó o el acceso al sitio web después de la publicación de cualquier cambio constituye la aceptación de dichos cambios.</p>
                <p class="bold">Uso de la página web, sus contenidos y sus servicios</p>
                <p>El ingreso a la página web constituye su consentimiento como usuario a utilizarla, junto con sus servicios y contenidos, sin contravenir la legislación vigente, la buena fe, los usos generalmente aceptados y el orden público, la moral y las buenas costumbres. Asimismo, queda prohibido el uso de la página web con fines ilícitos o lesivos, contra Solventa o contra cualquier tercero que, de cualquier forma, puedan resultar perjudicados directamente o por impedir el normal funcionamiento de la página web.</p>
                <p>
                    Los contenidos incluidos en la página web son de propiedad exclusiva de Solventa.
                    Está prohibida su reproducción total o parcial, su traducción, inclusión, transmisión, almacenamiento o acceso a través de medios digitales o de cualquier otro sistema sin autorización previa y escrita de Solventa. No obstante, es posible descargar material de la página web para tu uso personal y no comercial, siempre y cuando hagas expresa mención de la propiedad en cabeza de Solventa. </p>
                
                <p>Los enlaces (links) a otras páginas o portales de Internet, distintas de aquellas de las cuales Solventa es propietaria, son ofrecidos como un servicio a ti como usuario. Solventano estuvo involucrada en la producción y por lo tanto no es responsable por el contenido de dichas páginas de Internet.</p>
                <p class="bold">Información entregada a Solventa</p>
                <p>Al subir contenido correspondiente a imágenes, comentarios, fotografías, videos etc. a la página web, o entregarlo por otros medios a Solventa, autorizas expresamente a Solventa para publicarlo en esta página web, Facebook u otros medios de comunicación y utilizarlos como parte de campañas comerciales o de mercadeo dirigidas al público en general a través de distintos medios de comunicación.</p>
                <p>En el enlace políticas de privacidad se encuentra la política de privacidad de Solventa, en la que es establecida la forma en que es tratada la información personal que compartes con nosotros así como la recopilada a través de cualquier otro canal de comunicación, tanto de sus usuarios y clientes, como de sus funcionarios, los derechos con los que cuentan los titulares de la información, así como la forma de ejercerlos, adicionalmente al momento de entregarnos brindarnos cualquier tipo de información es necesario que previamente aceptes nuestra autorización para el tratamiento de manera que no tengas ningún tipo de duda en cuanto a la forma en que daremos uso a tus datos personales.
                </p>
                <p class="bold">Sobre la página web</p>
                <p>Cualquier usuario podrá ingresar a la página web a través del uso de un navegador disponible. Para poder realizar una solicitud de crédito deberás registrarte en la página web, autorizando previamente el tratamiento de tus datos personales. Si no te encuentras registrado en la página web podrás navegar por las diferentes secciones del sitio pero no podrás acceder a realizar una solicitud de cupo de crédito, para este debes estar registrado y haber diligenciado el formulario de solicitud.</p>
                <p class="bold">1- Sobre el registro</p>
                <p>Podrás realizar una solicitud de crédito en la página web, registrándote, diligenciando el formulario de solicitud y autorizando de manera previa el tratamiento de tus datos personales.
                    De no registrarte, podrás navegar por la página web pero no podrás solicitar un cupo de crédito.
                    </p>
                <p class="bold">2- Usuario y Contraseña</p>
                <p>Cada una de las cuentas registradas en la página web tendrá tanto un usuario que constituye tu identificación en el sistema como una clave de ingreso. Al registrarte serás el responsable por la confidencialidad y el uso que se haga de tu usuario y/o contraseña.
                Te comprometes a informar inmediatamente a Solventa sobre cualquier actividad anormal, uso no autorizado de tu usuario y/o contraseña, correo electrónico, o número de identificación.
                De igual forma para tu registro como Usuario te comprometes a proveer a Solventa de información precisa y completa, así como a informarle sobre cualquier cambio o variación.
                El usuario y/o contraseña deben ser utilizados únicamente por ti, por lo cual Solventa te solicita no compartir esta información con terceras personas.
                De igual forma te obligas a abstenerte de compartir o transferir Tu cuenta a otra persona.   
                </p>                
                <p class="bold">3- Usuario y Contraseña</p>
                <p>En la parte superior de la página web, y en el menú de la versión móvil de ésta encontrarás el enlace “Mi cuenta”. Al ingresar podrás ver el formulario para ingresar con tu usuario y contraseña.
                    Una vez la validación se lleve a cabo con éxito, observarás la zona de Usuario en donde, podrás encontrar toda la información vinculada con tu perfil de registro del usuario y tendrás, si así lo deseas, la posibilidad de editar algunos de los campos del formulario.
                    Así mismo podrás ver el estado tus solicitudes, estado de créditos, cupones de descuento y acceder a certificaciones de paz y salvo.
                    </p>
                <p class="bold">4- Restablecer contraseña</p>
                <p>En caso de ya tener una cuenta en la página web pero no recordar tu la contraseña, podrás ir a la opción “Mi cuenta”, en la parte inferior del formulario dando clic en “¿Olvidaste tu contraseña?”, y allí podrás solicitar que se te envíe un mensaje con instrucciones para restablecerla.</p>
                <p class="bold">5- Versión móvil</p>
                <p>Desde tu dispositivo móvil o tableta ingresa a la dirección <a href="http://www.solventa.com" >www.solventa.com</a>, donde podrás encontrar toda la información de la página web en una versión completa, pensada para la experiencia de los usuarios en diferentes dispositivos.
                    A este sistema podrás acceder a través de red WIFI o a través de cualquier red de internet disponible por los operadores de telefonía celular.
                    </p>
                <p class="bold">Información y sitios web de terceros</p>
                <p>La página web puede ofrecer hipervínculos o acceso a páginas web y contenidos de otras personas o entidades. <br>
                Solventa no controla, refrenda ni garantiza el contenido incluido en dichos sitios, tampoco se responsabiliza del funcionamiento o accesibilidad de las páginas web vinculadas, ni sugiere, invita o recomienda la visita a las mismas, por lo que tampoco será responsable del resultado obtenido. <br>
                Como El usuario aceptas que Solventa no es responsable de ningún contenido, enlace asociado o servicio relacionado con el sitio de un tercero. Así mismo, el usuario aceptas que Solventa no será responsable de ninguna perdida o daño de cualquier tipo que se derive del uso que el usuario realices de los contenidos de un tercero.
                </p>
                <p class="bold">Información y sitios web de terceros </p>
                <p>La página web puede ofrecer hipervínculos o acceso a páginas web y contenidos de otras personas o entidades. <br>
                Solventa no controla, refrenda ni garantiza el contenido incluido en dichos sitios, tampoco se responsabiliza del funcionamiento o accesibilidad de las páginas web vinculadas, ni sugiere, invita o recomienda la visita a las mismas, por lo que tampoco será responsable del resultado obtenido. <br>
                Como El usuario aceptas que Solventa no es responsable de ningún contenido, enlace asociado o servicio relacionado con el sitio de un tercero. Así mismo, el usuario aceptas que Solventa no será responsable de ninguna perdida o daño de cualquier tipo que se derive del uso que el usuario realices de los contenidos de un tercero.
                </p>
                <p class="bold">Reglas para la participación del usuario </p>
                <p>Por el hecho de ingresar a la página web, y para garantizar el buen y adecuado uso de esta, te comprometes a cumplir con lo siguiente:</p>
                <p>
                1.	Observar los Términos y Condiciones, Política de privacidad y Seguridad en Internet y cualquier otra condición establecida en Solventa. <br>
                2.	Usar los contenidos de forma diligente, correcta y lícita. <br>
                3.	Ser responsable por cualquier actividad que se lleve a cabo bajo tu registro. <br>
                4.	Ser responsable de la seguridad de tu contraseña. <br>
                5.	No usar la página web como medio para desarrollar actividades ilegales o no autorizadas tanto en Colombia, como en cualquier otro país. <br>
                6.	No emplear los contenidos, y en particular la información obtenida a través de la página web, para emitir publicidad. <br>
                7.	Utilizar el Portal única y exclusivamente para uso personal. Cualquier uso para beneficio corporativo o colectivo está prohibido. <br>
                8.	Abstenerse de enviar correos electrónicos no deseados (SPAM) a otros Usuarios de esta página, así como también transmitir virus o cualquier código de naturaleza destructiva. <br>
                9.	No alterar, bloquear o realizar cualquier acto que impida mostrar o acceder a cualquier contenido, información o servicio de la página web. <br>
                10.	No incurrir en actuaciones ilícitas como daños o ataques informáticos, interceptación de comunicaciones, usurpación de identidad o falsedad de documentos. <br>
                11.	Canalizar tus quejas, reclamos y denuncias a través de la sección de los canales de contacto establecidos tanto en la política de privacidad como en los presentes términos y condiciones.
                </p>
                <p class="bold">Responsabilidad del usuario por daños y perjuicios </p>
                <p>El uso de la página web se realizará bajo tu responsabilidad. Esta responsabilidad se extenderá al uso, por tu parte o de cualquier tercero, de los usuarios y contraseñas de registro.
                Sin perjuicio de lo anterior, Solventa se reserva el derecho a denegar en cualquier momento, y sin necesidad de previo aviso, el acceso a la página web a aquellos usuarios que incumplan estas condiciones. <br>
                Deberás mantener indemne a Solventa por todo concepto en caso de presentarse alguna situación de incumplimiento relacionada directamente con estos términos y condiciones.
                </p>
                <p class="bold">Derechos y responsabilidades de Solventa </p>
                <p>Derechos y responsabilidades de Solventa </p>
                <p>Por el hecho de ingresar a la página web, y para garantizar el buen y adecuado uso de esta, Solventa tiene los siguientes derechos y deberes: </p>
                <p>
                    1.	Modificar unilateralmente, en cualquier tiempo y por cualquier razón, sin previo aviso, siempre que lo considere oportuno, la estructura y diseño de la página web, así como los presentes Términos y Condiciones. <br>
                    2.	Negar el registro a cualquier persona, en cualquier momento y por cualquier razón. incluir o no en la página web, el material recibido de los usuarios a su criterio. En el caso de incluirlo, podrá mantener en la página web dicho material por el lapso de tiempo que lo considere necesario. <br>
                    3.	Remover contenidos, que a juicio de Solventa sean ilegales, ofensivos, difamatorios o que de cualquier otra forma violen estos Términos y Condiciones. Así mismo, podrán ser retirados los contenidos que violen derechos intelectuales, ya sean de Solventa o de un tercero, a solicitud de éste. <br>
                    4.	Utilizar la información personal y/o contenidos suministrados por los Usuarios de acuerdo con las autorizaciones impartidas por ellos.
                </p>
                <p>Exclusión de garantías y responsabilidades </p>
                <p>Solventa no otorga ninguna garantía ni se hace responsable, en ningún caso, de los daños y perjuicios de cualquier naturaleza que pudieren traer derivados de los siguientes hechos:</p>
                <p>
                    •	La falta de disponibilidad, mantenimiento y continuidad del funcionamiento de la página web. Cuando ello sea razonablemente posible, Solventa advertirá previamente las interrupciones en el funcionamiento de la página web. <br>
                    •	La falta de utilidad, adecuación o validez de la página web y/o de sus servicios o contenidos para satisfacer necesidades, actividades o resultados concretos o expectativas del usuario. <br>
                    •	El uso ilícito, negligente, fraudulento o contrario a los presentes términos y condiciones por parte del usuario. <br>
                    •	El incumplimiento por parte de terceros de sus obligaciones o compromisos en relación con los servicios prestados al usuario a través de la página web.
                    
                </p>
                <p class="bold">Seguridad en internet </p>
                <p>Solventa no controla ni garantiza, y por lo tanto no se hace responsable por la presencia de virus ni de otros elementos en los contenidos de la página web y que hagan su aparición a pesar del cumplimiento de sus deberes y debida diligencia, de manera que puedan producir alteraciones en el sistema informático (software y hardware) del Usuario o en los documentos electrónicos y ficheros almacenados en el sistema informático del Usuario. <br>
                Se entiende por código malicioso el nombre que se le da a cualquier programa que ingresa a un computador sin el conocimiento y la autorización explícita del responsable del mismo, dentro de los cuales se encuentran, los denominados VIRUS; TROYANOS; GUSANOS; PHISHING; PHARMING; ROOTKITS; BACKDOOR (PUERTAS TRASERAS), KEYLOGGERS (CAPTURADORES DE TECLADO), SCREEN LOGGERS, BOOTNETS, SNIFFERS (HUSMEADORES DE TRÁFICO DE LA RED), entre otros. <br>
                Teniendo en consideración la anterior definición, te obligas incondicional e irrevocablemente a garantizar que la información y documentación (incluidas imágenes, fotografías, animación, vídeo, audio, música, texto y otros elementos que forman parte del portal) que entregues a Solventa, se encuentran libres de Código Malicioso. Así mismo, te comprometes a tomar las medidas necesarias para efectuar el control del Código Malicioso.
                </p>
                <p class="bold">Preguntas y ayuda</p>
                <p>Puede recibir ayuda personalizada a través de los siguientes medios:</p>
                <p>
                    Sección de ayuda <a href="www.solventa.com/ayuda">www.solventa.com/ayuda</a>
                    Comunicándote con nuestro asesor del chat en línea.
                    Llamando al (1) 639 8384 en Bogotá
                    Horario de atención Lunes a Viernes de 9:00 am - 6:00pm y los sábados de 8:00am - 12:00pm.
                </p>
                <p class="bold">Ley aplicable y jurisdicción  </p>
                <p>Estos términos y condiciones han sido dispuestas de conformidad con las leyes colombianas. Si cualquier disposición de estos términos y condiciones pierde validez, por cualquier razón, todas las demás disposiciones conservarán su fuerza obligatoria, carácter vinculante y mantendrán todos sus efectos. <br>
                Cualquier acción o reclamación, el lugar de los presentes términos y condiciones es la ciudad de Bogotá, y cualquier controversia que surja de su interpretación o aplicación, se someterá a los jueces de la República de Colombia.
                </p>

            </div>
        
        </div>







<?php
include "popup-centro-ayuda.php";
?>


<script>

$(document).ready(function (){

     $('button').click(function(){
           var message = $('textarea').val();
           var oldmessages = $('#content').html();

          // content.style.display = 'block' ;

           $('#content').html(oldmessages + "<p class='mensaje'>" + message + "</p>");

           //Eliminar texto escrito en textarea
           var clear = $('textarea').val('');
           $('#textarea').html(clear);
     });
     
     $('#textarea').keydown(function(e) {
        if (e.keyCode == 13) {
            //e.preventDefault();
            
           var message = $('textarea').val();
           var oldmessages = $('#content').html();

           $('#content').html(oldmessages + "<p class='mensaje'>" + message + '</p>');

           //Eliminar texto escrito en textarea
           var clear = $('textarea').val('');
           $('#textarea').html(clear);
           
        }
        
});



});

</script>

       <link rel="stylesheet" href="assets/fonts/fonts.css">
       <script src="assets/js/main-centro-ayuda.js"></script>
       <script src="assets/js/ventana-centro-ayuda.js"></script>

</body>
</html>