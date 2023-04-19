<?php
include_once 'config/head.php';

?>

<header id="header" class="flat-menu clean-top"> 
  
  <nav class="navbar navbar-expand-lg bg-green navbar-menutop" id="menu-principal">
  <div class="container" id="topbar-container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item buildSelect">
          <a class="nav-link" href="https://www.uaem.mx" title="Inicio"><span>Inicio</span></a>
        </li>
        <li class="nav-item buildSelect">
          <a class="nav-link" href="https://www.uaem.mx/directorio/" title="/directorio/"><span>Directorio</span> </a>
        </li>
        <li class="nav-item buildSelect">
          <a class="nav-link" href="https://www.uaem.mx/calendario/" title="/calendario/"><span>Calendario</span></a>
        </li>
        <li class="nav-item buildSelect">
         <a class="nav-link" href="http://www.biblioteca.uaem.mx" title="Biblioteca" target="_blank"><span>Biblioteca</span> </a>
       </li>
       <li class="nav-item buildSelect">
        <a class="nav-link " href="https://transparencia.uaem.mx/" title="Transparencia" target="_blank">
          <span>Transparencia</span>
        </a>
      </li>
      <li class="nav-item buildSelect">
        <a class="nav-link" href="http://infomexmorelos.mx/" title="Solicitud de información" target="_blank"><span>Solicitud de información</span></a>
      </li>
      <li class="nav-item buildSelect">
        <a class="nav-link" href="http://mail.google.com/a/uaem.mx/" title="e-Mail" target="_blank"><span>E-mail</span></a>
      </li>
      <li class="nav-item buildSelect">
        <a class="nav-link" href="https://radio.uaem.mx/" title="Radio" target="_blank"><span>Radio</span></a>
      </li>
      <li class="nav-item buildSelect">
        <a class="nav-link" href="https://cocodi.uaem.mx/" title="COCODI" target="_blank"><span>COCODI</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Servicios
        </a>
        <ul class="dropdown-menu" id="dropdownServicios" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item"><strong>Estudiantes</strong></a></li>
          <li><a class="dropdown-item" href="https://kardex.uaem.mx/" target="_blank">Kardex</a></li>
          <li><a class="dropdown-item" href="https://pagos.uaem.mx/" target="_blank">Pagos</a></li>
          <li><a class="dropdown-item" href="https://correos.uaem.mx/#!/loginAlumno" target="_blank">Tramitar Correo</a></li>
          <li><a class="dropdown-item" href="https://correos.uaem.mx/#!/recuperar" target="_blank">Recuperar Contraseña Correo</a></li>
          <li><a class="dropdown-item" href="https://www.office.com/" target="_blank">Office 365</a></li>
          <li><a class="dropdown-item" href="https://titulos.uaem.mx/pre-registro" target="_blank">e-Título - Pre registro</a></li>
          <li><a class="dropdown-item" href="https://titulos.uaem.mx/titulos-por-entregar" target="_blank">e-Título - Por entregar</a></li>
          <li><a class="dropdown-item" href="https://ser.uaem.mx/herramientas-digitales/" target="_blank">Herramientas Digitales</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item"><strong>Docentes</strong></a></li>
          <li><a class="dropdown-item" href="https://docentes.uaem.mx/" target="_blank">Actas</a></li>
          <li><a class="dropdown-item" href="https://correos.uaem.mx/#!/loginProfesor" target="_blank">Tramitar Correo</a></li>
          <li><a class="dropdown-item" href="https://correos.uaem.mx/#!/recuperar" target="_blank">Recuperar Contraseña Correo</a></li>
          <li><a class="dropdown-item" href="https://ser.uaem.mx/herramientas-digitales/" target="_blank">Herramientas Digitales</a></li>
          <li><a class="dropdown-item" href="https://docentes.uaem.mx/" target="_blank">Acta de Calificaciones</a></li>
        </ul>
      </li>
    </ul>
    <div class="float-right topbar-social">
      <a href="https://www.facebook.com/uaem.mx" target="_blank"><i class="fab fa-facebook-square"></i></a>
      <a href="https://twitter.com/UAEMorelos" target="_blank"><i class="fab fa-twitter-square"></i></a>
      <a href="https://www.youtube.com/user/UAEMor" target="_blank"><i class="fab fa-youtube-square"></i></a>
    </div>
  </div>
</div>
<div class="float-right topbar-social" style="display: none;" id="topbar-social-movil">
  <a href="https://www.facebook.com/uaem.mx" target="_blank"><i class="fab fa-facebook-square"></i></a>
  <a href="https://twitter.com/UAEMorelos" target="_blank"><i class="fab fa-twitter-square"></i></a>
  <a href="https://www.youtube.com/user/UAEMor" target="_blank"><i class="fab fa-youtube-square"></i></a>
</div>

<select id="selectEnlaces">
  <option selected="selected" value="">Servicios UAEM</option>
  <option>Estudiantes</option>
  <option value="https://kardex.uaem.mx/">Kardex</option>
  <option value="https://pagos.uaem.mx/">Pagos</option>
  <option value="https://correos.uaem.mx/#!/loginAlumno">Tramitar Correo</option>
  <option value="https://correos.uaem.mx/#!/recuperar">Recuperar Contraseña Correo</option>
  <option value="https://www.office.com/">Office 365</option>
  <option value="https://titulos.uaem.mx/pre-registro">e-Título - Pre registro</option>
  <option value="https://titulos.uaem.mx/titulos-por-entregar">e-Título - Por entregar</option>
  <option value="https://ser.uaem.mx/herramientas-digitales/">Herramientas Digitales</option>
  <option>Docentes</option>
  <option value="https://docentes.uaem.mx/">Actas</option>
  <option value="https://correos.uaem.mx/#!/loginProfesor">Tramitar Correo</option>
  <option value="https://correos.uaem.mx/#!/recuperar">Recuperar Contraseña Correo</option>
  <option value="https://ser.uaem.mx/herramientas-digitales/">Herramientas Digitales</option>
  <option value="https://docentes.uaem.mx/">Acta de Calificaciones</option>
</select>

</nav>
<div class="container-fluid" id="container-fluid-header">
  <div class="container">
    <div class="row">
      <div class="col-md-3 sm-text-center">
        <div class="logo-uaem"> <a href="/"> <img alt="uaem" src="/content/images/uaem_logo_.svg"> </a> </div>
      </div>
      <div class="col-md-3 sm-text-center px-0" id="div-semaforo">
        <!--<table class="table-semaforo sm-text-center">
          <tr>
            <td style="font-size: .85rem;"><strong style="font-weight: 800;">SEMÁFORO</strong> <span style="font-weight: 100;font-family: 'Open Sans';">COVID:</span></td>
            <td><span class="dot"></span></td>
          </tr>
        </table>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".mobile_nav" aria-expanded="false" aria-label="Toggle navigation" id="button-mobile" style="display: none;">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="col-md-3 sm-text-center" id="buscador-top">
        <table class="table-semaforo sm-text-center mx-auto" style="width: 80%;">
          <tr>
            <td>
              <form id="searchForm" action="/resultados" method="get">
                <div class="input-group">
                  <input class="form-control py-2 border-right-0 border input-new-search" type="text" name="q" id="q" placeholder="Buscar...">
                  <span class="input-group-append">
                    <button class="btn btn-new-search border-left-0 border" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </form>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <div class="logo-rectoria"> <img alt="uaem" src="/assets/2020/img/uaem-rectoria-2017-2023_.svg"> </div>
      </div>
    </div>
  </div>
</div>

  <div class="container-fluid" id="fluid-megamenu">
    <div class="container">
        <nav class="navbar navbar-expand-lg" id="megamenu-principal">
            <!-- <div class="container"> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".mobile_nav" aria-expanded="false" aria-label="Toggle navigation" id="button-toggle1">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right">
                    </ul>
                    <ul class="navbar-nav navbar-light w-100 navbar-megapills justify-content-center">
                        <!-- VIDA UNIVERSITARIA -->
                        <li class="nav-item dropdown megamenu-li dmenu vida-universitaria" id="li-vida-universitaria">
                            <a class="nav-link link-with-jquery" href="/vida-universitaria/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VIDA UNIVERSITARIA</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01" style="display: none;margin-top: -2px;top: 37px;border-top: 8px solid rgb(1, 46, 52) !important;">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/vida-universitaria/unidad-para-la-inclusion-educativa-y-atencion-a-la-diversidad"> UNIDAD PARA LA INCLUSIÓN EDUCATIVA Y ATENCIÓN A LA DIVERSIDAD</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://sgc.uaem.mx/" target="_blank"> SISTEMA DE GESTIÓN DE LA CALIDAD</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://sga.uaem.mx/" target="_blank"> SISTEMA DE GESTIÓN AMBIENTAL</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="/sites/default/files/catalogo-agosto2022pdfQTaVNhmlBf.pdf" target="_blank">CATÁLOGO DE SERVICIOS</a></span>
                                        <!--<a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/sites/default/files/catalogo-26agosto2021pdfPgJOvJ44nS.pdf" target="_blank">Servicios Técnicos y Especializados</a>-->
                                    </div>
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/vida-universitaria/deportes"> DEPORTES</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/vida-universitaria/talleres-artisticos"> TALLERES ARTÍSTICOS</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/vida-universitaria/espacios-universitarios/">ESPACIOS UNIVERSITARIOS</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/espacios-universitarios/nivel-medio-superior.php">Espacios
                                        de nivel Medio Superior </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/espacios-universitarios/nivel-superior.php"> Espacios de nivel Superior</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/espacios-universitarios/deportivos.php">Espacios
                                        deportivos </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/espacios-universitarios/centro-de-lenguas.php">Centros
                                        de Lenguas</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/espacios-universitarios/bibliotecas.php">Bibliotecas</a> 
                                    </div>
                                    <div class="col-md-4 col-lg-4 mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/vida-universitaria/identidad-universitaria/">IDENTIDAD UNIVERSITARIA</a></span>
                                        <a class="dropdown-item mega-menu-link" href="/vida-universitaria/identidad-universitaria/mision.php" target="_blank">Misión, Visión y Valores Institucionales</a>
                                        <a class="dropdown-item mega-menu-link" href="http://pide.uaem.mx/assets/PIDE_2018-2023.pdf" target="_blank">Plan Institucional de Desarrollo 2018-2023 [.pdf]</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/identidad-universitaria/historia-de-la-uaem.php">Historia de la UAEM </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/identidad-universitaria/lema-y-logosimbolo-universitario.php">Lema y logosímbolo Universitario </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/identidad-universitaria/himno-universitario.php"> Himno universitario</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/identidad-universitaria/modelo-universitario.php">Modelo universitario </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/vida-universitaria/identidad-universitaria/manual-de-identidad.php">Manual de identidad gráfica</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--VIDA UNIVERSITARIA-->
                        <!-- ADMISIÓN Y OFERTA -->
                        <li class="nav-item dropdown megamenu-li dmenu admision-y-oferta" id="li-admision-y-oferta">
                            <a class="nav-link link-with-jquery" href="/admision-y-oferta/" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMISIÓN Y OFERTA</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown02" style="display: none;margin-top: -2px;top: 37px;border-top: 8px solid rgb(54, 96, 112) !important;">
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/admision-y-oferta/ingreso-admision-y-seleccion">INGRESO</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/ingreso-admision-y-seleccion/preguntas-frecuentes-nivel-medio-superior.php">Preguntas frecuentes de nivel Medio Superior</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/ingreso-admision-y-seleccion/preguntas-frecuentes-nivel-superior.php">Preguntas frecuentes de nivel Superior</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/ingreso-admision-y-seleccion/preguntas-frecuentes-redes-sociales.php">Preguntas frecuentes en redes sociales</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/ingreso-admision-y-seleccion/sedes-de-aplicacion-del-examen.php">Sedes de aplicación del examen</a>
                                    </div>
                                    <div class="col-md-2 col-lg-2 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/admision-y-oferta/nivel-medio-superior/">NIVEL MEDIO SUPERIOR</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-medio-superior#cuernavaca">Cuernavaca </a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-medio-superior#huitzilac">Huitzilac </a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-medio-superior#cuautla">Cuautla </a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-medio-superior#puente-de-ixtla">Puente de Ixtla </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-medio-superior#tlaltizapan">Tlaltizapán </a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-medio-superior#jojutla">Jojutla </a>
                                    </div>
                                    <div class="col-md-3 col-lg-3 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/admision-y-oferta/nivel-superior">NIVEL SUPERIOR</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-superior#agropecuarias">Ciencias Agropecuarias </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-superior#ciencias-naturales">Ciencias Naturales </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-superior#ciencias-exactas-e-ingenierias">Ciencias Exactas e Ingenierías </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-superior#ciencias-sociales-y-administrativas">Ciencias Sociales y Administrativas </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-superior#ciencias-de-la-salud-y-el-comportamiento">Ciencias de la Salud y el Comportamiento </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/nivel-superior#educacion-y-humanidades">Educación y Humanidades </a>
                                    </div>
                                    <div class="col-md-3 col-lg-3 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/admision-y-oferta/posgrado">POSGRADO</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/posgrado#ciencias-agropecuarias">Ciencias Agropecuarias </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/posgrado#ciencias-naturales">Ciencias Naturales </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/posgrado#ciencias-exactas-e-ingenierias">Ciencias Exactas e Ingenierías </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/posgrado#ciencias-sociales-y-administrativas">Ciencias Sociales y Administrativas </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/posgrado#ciencias-de-la-salud-y-el-comportamiento">Ciencias de la Salud y el Comportamiento </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/admision-y-oferta/posgrado#educacion-y-humanidades">Educación y Humanidades </a>
                                    </div>
                                    <div class="col-md-2 col-lg-2 mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/admision-y-oferta/idiomas" style="font-size: 12.5px;">IDIOMAS</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="http://portal.e-uaem.mx/" target="_blank" style="font-size: 12.5px;">e-UAEM</a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--ADMISIÓN Y OFERTA-->
                        <!-- ESTUDIANTES Y EGRESADOS -->
                        <li class="nav-item dropdown megamenu-li dmenu estudiantes-y-egresados" id="li-estudiantes-y-egresados">
                            <a class="nav-link link-with-jquery" href="/estudiantes-y-egresados/" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ESTUDIANTES Y EGRESADOS</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown03" style="display: none;margin-top: -2px;top: 37px;border-top: 8px solid rgb(11, 164, 158) !important;">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/estudiantes-y-egresados/servicios-escolares/">SERVICIOS ESCOLARES</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://orientacioneducativa.uaem.mx/" target="_blank">ORIENTACIÓN EDUCATIVA</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/estudiantes-y-egresados/servicios-a-estudiantes">SERVICIOS A ESTUDIANTES</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/servicios-a-estudiantes/constancias-no-adeudo/" target="_blank">Constancias de No Adeudo</a>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/vida-universitaria/actividades/guia-del-universitario-2022-2023">GUÍA DEL UNIVERSITARIO 2022-2023</a></span>
                                        <br>
                                        <a class="dropdown-item mega-menu-link text-center" href="https://titulos.uaem.mx/titulos-por-entregar" target="_blank">
                                            <img class="img-responsive w-75 m-auto" src="/assets/2020/img/titulos-por-entregar.png" alt="Títulos por entregar" >
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/estudiantes-y-egresados/servicio-social">SERVICIO SOCIAL</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/servicio-social/que-es-el-servicio-social">¿Qué es el servicio social? </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/servicio-social/requisitos">Procedimiento y requisitos de inscripción </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/servicio-social/files/reglamento-general-2018.pdf" target="_blank">Reglamento General del Servicio Social </a>
                                        <br>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/estudiantes-y-egresados/becas">BECAS</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/becas/becas-nivel-medio-superior.php">Becas para nivel Medio Superior</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/becas/becas-nivel-superior.php">Becas para nivel Superior</a>
                                    </div>
                                    <div class="col-md-4 col-lg-4 mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/estudiantes-y-egresados/organizacion-estudiantil">ORGANIZACIÓN ESTUDIANTIL</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/organizacion-estudiantil/feum.php">Federación de Estudiantes Universitarios de Morelos</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/organizacion-estudiantil/files/nuevaleyjuventud.pdf" target="_blank">Ley de las personas adolescentes y jóvenes en el estado de Morelos [.pdf]</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/organizacion-estudiantil/files/ipjmorelos_2014.pdf" target="_blank">Indice estatal de participación Juvenil Morelos [.pdf]</a>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/estudiantes-y-egresados/procuraduria-de-los-derechos-academicos">PROCURADURÍA DE LOS DERECHOS ACADÉMICOS</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/estudiantes-y-egresados/seguridad-estudiantil/">SEGURIDAD ESTUDIANTIL</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/seguridad-estudiantil/seguro-facultativo.php">Seguro Facultativo</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/estudiantes-y-egresados/seguridad-estudiantil/seguro-vida.php">Seguro de vida y accidentes personales</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--ESTUDIANTES Y EGRESADOS-->
                        <!-- GENERACION DE CONOCIMIENTO -->
                        <li class="nav-item dropdown megamenu-li dmenu generacion-de-conocimiento" id="li-generacion-de-conocimiento">
                            <a class="nav-link link-with-jquery" href="/generacion-de-conocimiento/" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GENERACIÓN DE CONOCIMIENTO</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown04" style="display: none;margin-top: -2px;top: 37px;border-top: 8px solid rgb(11, 165, 105) !important;">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 mb-4"></div>
                                    <div class="col-md-4 col-lg-4 mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/generacion-de-conocimiento/centros-de-investigacion/">CENTROS DE INVESTIGACIÓN</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/ceib" target="_blank"> <strong>CEIB</strong> - Centro de Investigación en Biotecnología</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/cib"> <strong>CIB</strong> - Centro de Investigaciones Biológicas</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/cibyc"> <strong>CIByC</strong> - Centro de Investigación en Biodiversidad y Conservación</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/cinc"> <strong>CInC</strong> - Centro de Investigación en Ciencias</a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.cienciascognitivas.org" target="_blank"> <strong>CINCCO</strong> - Centro de Investigación en Ciencias Cognitivas</a> 
                                        <a class="dropdown-item mega-menu-link" href="http://www.cidc.uaem.mx/" target="_blank"><strong>CIDC</strong> - Centro de Investigación en Dinámica Celular</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/ciicap"><strong>CIICAp</strong> - Centro de Investigación en Ingeniería y Ciencias Aplicadas</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/ciidu" target="_blank"> <strong>CIIDU</strong> - Centro de Investigación Interdisciplinar para el Desarrollo Universitario</a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/citpsi" target="_blank"> <strong>CITPsi</strong> - Centro de Investigación Transdisciplinar en Psicología</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/ciq"><strong>CIQ</strong> - Centro de Investigaciones Químicas</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/ciihu"><strong>CIIHu</strong> - Centro Interdisciplinario de Investigación en Humanidades </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/cicser"><strong>CICSER</strong> - Centro de Investigación en Ciencias Sociales y Estudios Regionales </a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/centros-de-investigacion/iicba"><strong>IICBA </strong>- Instituto de Investigación en Ciencias Básicas y Aplicadas</a>
                                    </div>
                                    <div class="col-md-4 col-lg-4 mb-4"></div>
                                </div>
                            </div>
                        </li>
                        <!--GENERACIÓN DE CONOCIMIENTO-->
                        <!-- ORGANIZACIÓN INSTITUCIONAL -->
                        <li class="nav-item dropdown megamenu-li dmenu organizacion-institucional" id="li-organizacion-institucional">
                            <a class="nav-link link-with-jquery" href="/organizacion-institucional/" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ORGANIZACIÓN INSTITUCIONAL</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown05" style="display: none;margin-top: -2px;top: 37px;border-top: 8px solid rgb(92, 134, 6) !important;">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/organizacion-institucional/estructura-organica/">ESTRUCTURA ORGANIZACIONAL</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/organizacion-institucional/rectoria/">RECTORÍA</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/rectoria/rector.php">Rector</a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/rectoria/discursos-del-rector.php">Discursos del rector</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/rectoria/documentos-rectoria">Documentos rectoría</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/rectoria/estructura">Estructura de la Oficina de la Rectoría</a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/informes-de-actividades/quinto-informe/">Quinto informe de actividades</a>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="/vida-universitaria/junta-de-gobierno/">JUNTA DE GOBIERNO</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="/vida-universitaria/consejo-universitario/">CONSEJO UNIVERSITARIO</a></span>
                                    </div>
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/organizacion-institucional/secretaria-general/">SECRETARÍA GENERAL</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/secretaria-general/legislacion-universitaria/">Legislación universitaria</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/secretaria-general/comite-de-etica">Comité de Ética de la UAEM</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/gestion-archivo/">Dirección de Gestión de Archivos</a>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="http://academica.uaem.mx/" target="_blank">SECRETARÍA ACADÉMICA</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/secretaria-academica/direccion-desarrollo-educativo/lineamientos-diseno-reestructuracion-curricular.pdf" target="_blank"> Lineamientos de diseño y reestructuración curricular </a>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="/organizacion-institucional/tesoreria-general/">TESORERÍA GENERAL</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="/organizacion-institucional/oficina-del-abogado-general/">OFICINA DEL ABOGADO GENERAL</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="/organizacion-institucional/rectoria/coordinacion-general-de-planeacion-y-administracion/">COORDINACIÓN GENERAL DE PLANEACIÓN Y ADMINISTRACIÓN</a></span>
                                    </div>
                                    <div class="col-md-4 col-lg-4 mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/organizacion-institucional/organo-informativo-universitario/">ÓRGANO  INFORMATIVO UNIVERSITARIO</a></span>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/organizacion-institucional/unidades-academicas/">UNIDADES ACADÉMICAS</a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--ORGANIZACIÓN INSTITUCIONAL-->
                        <!-- DIFUSION Y MEDIOS -->
                        <li class="nav-item dropdown megamenu-li dmenu difusion-y-medios" id="li-difusion-y-medios">
                            <a class="nav-link link-with-jquery" href="/difusion-y-medios/" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DIFUSIÓN Y MEDIOS</a>
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown06" style="display: none;margin-top: -2px;top: 37px;border-top: 8px solid rgb(141, 172, 42) !important;">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/difusion-y-medios/informacion-oficial">INFORMACIÓN OFICIAL</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/informacion-oficial/comunicados/">Comunicados</a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/informacion-oficial/circulares">Circulares</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/informacion-oficial/licitaciones">Licitaciones</a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/organizacion-institucional/organo-informativo-universitario/">Órgano informativo universitario</a>
                                        <br>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="http://sistemas.dti.uaem.mx/MIEG/index_mieg.php" target="_blank">MÓDULO DE INDICADORES EDUCATIVOS Y DE GESTIÓN</a></span>
                                    </div>
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/difusion-y-medios/publicaciones">PUBLICACIONES</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/informacion-oficial/sintesis">Síntesis Informativa</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/publicaciones/gaceta">Gaceta</a> 
                                        <a class="dropdown-item mega-menu-link" href="https://gacetavirtual.uaem.mx/" target="_blank">Gaceta virtual</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/publicaciones/boletines">Boletines</a> 
                                        <a class="dropdown-item mega-menu-link" href="http://libros.uaem.mx/" target="_blank">Libros UAEM</a> 
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/publicaciones/revistas-de-divulgacion">Revistas de divulgación</a>
                                        <a class="dropdown-item mega-menu-link" href="http://revistas.uaem.mx/" target="_blank">Revistas científicas</a>
                                        <a class="dropdown-item mega-menu-link" href="http://www.vozdelatribu.com" target="_blank">Clásicos de la resistencia civil</a>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/publicaciones/otros">Otros</a>
                                    </div>
                                    <div class="col-md-4 col-lg-4 border-right mb-4">
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/difusion-y-medios/medios">MEDIOS</a></span>
                                        <a class="dropdown-item mega-menu-link" href="https://www.uaem.mx/difusion-y-medios/medios/radio">Radio</a>
                                        <br>
                                        <span class="dropdown-item mega-menu-sub-title"><a href="https://www.uaem.mx/difusion-y-medios/solicitud-de-servicios-de-comunicacion/">SOLICITUD DE SERVICIOS DE COMUNICACIÓN</a> </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--DIFUSION Y MEDIOS-->



                    </ul>
                </div>
                <!-- </div> -->

                <!-- menu movil -->
                <div class="collapse mobile_nav">
                    <ul class="navbar-nav navbar-light w-100 navbar-megapills justify-content-center">
                        <!-- VIDA UNIVERSITARIA -->
                        <li class="nav-item dropdown megamenu-li dmenu vida-universitaria">
                            <a class="nav-link link-with-jquery" href="/vida-universitaria/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VIDA UNIVERSITARIA</a>
                        </li>
                        <!--VIDA UNIVERSITARIA-->
                        <!-- ADMISIÓN Y OFERTA -->
                        <li class="nav-item dropdown megamenu-li dmenu admision-y-oferta">
                            <a class="nav-link link-with-jquery" href="/admision-y-oferta/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMISIÓN Y OFERTA</a>
                        </li>
                        <!--ADMISIÓN Y OFERTA-->
                        <!-- ESTUDIANTES Y EGRESADOS -->
                        <li class="nav-item dropdown megamenu-li dmenu estudiantes-y-egresados">
                            <a class="nav-link link-with-jquery" href="/estudiantes-y-egresados/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ESTUDIANTES Y EGRESADOS</a>
                        </li>
                        <!--ESTUDIANTES Y EGRESADOS-->
                        <!-- GENERACION DE CONOCIMIENTO -->
                        <li class="nav-item dropdown megamenu-li dmenu generacion-de-conocimiento">
                            <a class="nav-link link-with-jquery" href="/generacion-de-conocimiento/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GENERACIÓN DE CONOCIMIENTO</a>
                        </li>
                        <!--GENERACIÓN DE CONOCIMIENTO-->
                        <!-- ORGANIZACIÓN INSTITUCIONAL -->
                        <li class="nav-item dropdown megamenu-li dmenu organizacion-institucional">
                            <a class="nav-link link-with-jquery" href="/organizacion-institucional/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ORGANIZACIÓN INSTITUCIONAL</a>
                        </li>
                        <!--ORGANIZACIÓN INSTITUCIONAL-->
                        <!-- DIFUSION Y MEDIOS -->
                        <li class="nav-item dropdown megamenu-li dmenu difusion-y-medios">
                            <a class="nav-link link-with-jquery" href="/difusion-y-medios/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DIFUSIÓN Y MEDIOS</a>
                        </li>
                        <!--DIFUSION Y MEDIOS-->
                    </ul>
                </div>
                <!-- menu movil -->
            </nav>
        </div>
    </div>
                
    