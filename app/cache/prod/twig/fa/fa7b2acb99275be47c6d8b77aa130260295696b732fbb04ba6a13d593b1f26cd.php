<?php

/* menu.html.twig */
class __TwigTemplate_f545232a725e2186dab33f02a1b0deed8db8551d92a3a6766a8669954a909b3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar\" style=\"color: #040404\">
        <div class=\"navbar-inner\">
           
            <div class=\"container\">
                <a data-target=\".navbar-responsive-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\">

                </a>
           
                <a class=\"brand\" href=\"/ppa_ved.php/beca\" style=\"vertical-align: middle !important  ;
                      font-family: serif; font-size: 20px;
                      float: left;\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/beca/images/logoDesarrolloSocial-medium.jpg"), "html", null, true);
        echo "\">
                    
                </a>

                <span style=\"vertical-align: middle !important;font-family: serif; font-size: 26px; float: right\">
                    <strong> <br><br><br>GESTIÓN DE BECAS - MDS
                    </strong></span>
                
            </div>
        </div><!-- /navbar-inner -->
        <div class=\"navbar-inner\">
            <div class=\"nav-collapse collapse navbar-responsive-collapse\">
                <ul class=\"nav\">
                    <li class=\"divider-vertical\"></li>    


                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-pencil\"></i>  
                            Entradas <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/ppa_ved.php/legajo/new\">Agregar Becado</a></li>
                            <li><a href=\"/ppa_ved.php/llamado/new\">Certifaciones</a></li>           
                            <li><a href=\"/ppa_ved.php/llamado/new-informacion\">Listado de Becados</a></li>           
                            <li><a href=\"/ppa_ved.php/denuncia_espontanea/new\"></a></li>
                            <li class=\"divider\"></li>
                            <li class=\"nav-header\">LISTADOS</li>            
                            <li><a href=\"/ppa_ved.php/llamado/\">Agregar algo</a></li>
                            <li><a href=\"/ppa_ved.php/denuncia_espontanea/\">Agregar si hace falta</a></li> 
                        </ul>
                    </li>

                   
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-wrench\"></i>  
                            Administración - Configuración <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("departamento");
        echo "\"> Departamentos  </a></li>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("localidad");
        echo "\"> Localidades  </a></li>
                            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("barrio");
        echo "\"> Barrios  </a></li>
                            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("calle");
        echo "\"> Calles  </a></li>  
                            <li class=\"divider\"></li>
                            <li class=\"nav-header\">Gestión Becas</li>
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("tipobeca");
        echo "\">Tipo Beca</a></li>
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("tipofuncion");
        echo "\">Tipo Función</a></li>
                            <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("beca");
        echo "\">Becas</a></li>
                            <li class=\"divider\"></li>
                            <li class=\"nav-header\">Movimientos Sociales</li>
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("referente");
        echo "\"> Referente</a></li>
                            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("movimientosocial");
        echo "\"> Movimiento Social</a></li>
                            <li class=\"nav-header\"></li>
                            <li class=\"nav-header\">Dependencias</li>
                            <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("responsable");
        echo "\">Responsable </a></li>
                            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("dependencia");
        echo "\">Dependencia</a></li>           
                            <li class=\"divider\"></li>                                  
                            <li class=\"nav-header\">USUARIOS</li>
                            <li><a href=\"/ppa_ved.php/usuario/new\"> Nuevo Usuario </a></li>
                            <li><a href=\"/ppa_ved.php/usuario/index\">Usuarios</a></li>
                            <li class=\"divider\"></li>
                            <li class=\"nav-header\">GRUPOS</li>
                            <li><a href=\"/ppa_ved.php/group/new\">Nuevo Grupo</a></li>
                            <li><a href=\"/ppa_ved.php/admin/grupo/\">Listado Grupos</a></li>

                        </ul>
                    </li>


                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-signal\"></i>  
                            Reportes <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"divider\"></li>
                            <li class=\"nav-header\">CARGA DE USUARIOS</li>
                            <li><a href=\"/ppa_ved.php/reportes/cargaUsuarios\"> Carga por usuario  </a></li>
                            <li><a href=\"/ppa_ved.php/reportes/cargaUsuariosXmes\"><i class=\"icon-user\"></i> Carga por usuario por mes  </a></li>                      
                            <li><a href=\"/ppa_ved.php/reportes/cargaXfecha\"><i class=\"icon-calendar\"></i> Carga por Fecha  </a></li>                      
                            <li class=\"divider\"></li>
                            <li class=\"nav-header\">DOCUMENTACIÓN</li>
                            <li><a href=\"/ppa_ved.php/reportes/motivos/rptMotivosLocalidades\">
                                    <i class=\"icon-calendar\"></i> Totales por Temática/Localidad  </a>
                            </li>                      
                            <li><a href=\"/ppa_ved.php/reportes/tipoDocumentacion/rptTipoDocLocalidades\">
                                    <i class=\"icon-calendar\"></i> Totales por Tipo de documentación/Localidad  </a>
                            </li>                      
                            <li><a href=\"/ppa_ved.php/reportes/oficina/rptOficinaLocalidad\">
                                    <i class=\"icon-calendar\"></i> Totales por Oficina Emisora/Localidad  </a>
                            </li>                      
                            <li><a href=\"/ppa_ved.php/reportes/personas/rptPersonasLegajoTipoDocumentacion\">
                                    <i class=\"icon-calendar\"></i> Cantidad de Destinatarios de Intervenciones
                                    (Asistencias Directas) </a>
                            </li>                      
                        </ul>
                    </li>




                    <ul class=\"nav\"> 
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"icon-user\"></i>  

                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a>                      HERNAN, ROMERO                           

                                    </a>
                                </li>
                                <li><a href=\"/ppa_ved.php/usuario/perfil\">Mi Perfil</a></li>              
                                <li class=\"divider\"></li>
                                <li><a href=\"/ppa_ved.php/logout\"><i class=\"icon-off\"></i> Cerrar Sesión</a></li>
                            </ul>


                        </li>
                    </ul>



                    <li id=\"buscarBlock\" class=\"pull-right\">       
                        <form id=\"formSearch\" class=\"form-search pull-right\" action=\"/ppa_ved.php/search/buscar/global\" method=\"post\">
                            <select name=\"busqueda[data]\" id=\"cmbBuscarGlobal\" style=\"width: 180px;\" class=\"tipoBusqueda\">
                                <option value=\"persona\">Personas/Otros Datos</option>             
                                <option value=\"legajo\">N° de Legajo</option>        
                            </select>
                            <div class=\"input-append\">
                                <input id=\"busquedaValores\" name=\"busquedaValores\" placeholder=\"Ingrese Apellido y Nombres\" type=\"text\" class=\"span2 search-query\">
                                <button type=\"submit\" class=\"btn\"><i class=\"icon-search\"></i> Buscar</button>
                            </div>          
                        </form>     
                    </li>

                    <script>
                        \$(function () {
                            \$('#busquedaValores').focus();
                            //\$.mask.definitions['x']='^[0-9]*\$';
                        });

                        jQuery(document).ready(function ()
                        {

                        });

                        \$(\"body\").delegate(\".tipoBusquedaXXXXXX\", \"change\", function (e) {
                            var tipo = \$(this).val();
                            console.log(tipo);
                            \$(\"#busquedaValores\").val('');
                            if (tipo === 'persona') {
                                \$(\"#busquedaValores\").mask(\"aaaa\");

                            } else {
                                \$(\"#busquedaValores\").mask(\"99999/99\");

                            }
                        });

                    </script> 

                </ul>
            </div><!-- /.nav-collapse -->
        </div>

    </div> 
    ";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 66,  115 => 65,  109 => 62,  105 => 61,  99 => 58,  95 => 57,  91 => 56,  85 => 53,  81 => 52,  77 => 51,  73 => 50,  32 => 12,  19 => 1,);
    }
}
/* <div class="navbar" style="color: #040404">*/
/*         <div class="navbar-inner">*/
/*            */
/*             <div class="container">*/
/*                 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">*/
/* */
/*                 </a>*/
/*            */
/*                 <a class="brand" href="/ppa_ved.php/beca" style="vertical-align: middle !important  ;*/
/*                       font-family: serif; font-size: 20px;*/
/*                       float: left;">*/
/*                     <img src="{{ asset('bundles/beca/images/logoDesarrolloSocial-medium.jpg') }}">*/
/*                     */
/*                 </a>*/
/* */
/*                 <span style="vertical-align: middle !important;font-family: serif; font-size: 26px; float: right">*/
/*                     <strong> <br><br><br>GESTIÓN DE BECAS - MDS*/
/*                     </strong></span>*/
/*                 */
/*             </div>*/
/*         </div><!-- /navbar-inner -->*/
/*         <div class="navbar-inner">*/
/*             <div class="nav-collapse collapse navbar-responsive-collapse">*/
/*                 <ul class="nav">*/
/*                     <li class="divider-vertical"></li>    */
/* */
/* */
/*                     <li class="dropdown">*/
/*                         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <i class="icon-pencil"></i>  */
/*                             Entradas <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/ppa_ved.php/legajo/new">Agregar Becado</a></li>*/
/*                             <li><a href="/ppa_ved.php/llamado/new">Certifaciones</a></li>           */
/*                             <li><a href="/ppa_ved.php/llamado/new-informacion">Listado de Becados</a></li>           */
/*                             <li><a href="/ppa_ved.php/denuncia_espontanea/new"></a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li class="nav-header">LISTADOS</li>            */
/*                             <li><a href="/ppa_ved.php/llamado/">Agregar algo</a></li>*/
/*                             <li><a href="/ppa_ved.php/denuncia_espontanea/">Agregar si hace falta</a></li> */
/*                         </ul>*/
/*                     </li>*/
/* */
/*                    */
/*                     <li class="dropdown">*/
/*                         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <i class="icon-wrench"></i>  */
/*                             Administración - Configuración <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('departamento') }}"> Departamentos  </a></li>*/
/*                             <li><a href="{{ path('localidad') }}"> Localidades  </a></li>*/
/*                             <li><a href="{{ path('barrio') }}"> Barrios  </a></li>*/
/*                             <li><a href="{{ path('calle') }}"> Calles  </a></li>  */
/*                             <li class="divider"></li>*/
/*                             <li class="nav-header">Gestión Becas</li>*/
/*                             <li><a href="{{ path('tipobeca') }}">Tipo Beca</a></li>*/
/*                             <li><a href="{{ path('tipofuncion') }}">Tipo Función</a></li>*/
/*                             <li><a href="{{ path('beca') }}">Becas</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li class="nav-header">Movimientos Sociales</li>*/
/*                             <li><a href="{{ path('referente') }}"> Referente</a></li>*/
/*                             <li><a href="{{ path('movimientosocial') }}"> Movimiento Social</a></li>*/
/*                             <li class="nav-header"></li>*/
/*                             <li class="nav-header">Dependencias</li>*/
/*                             <li><a href="{{ path('responsable') }}">Responsable </a></li>*/
/*                             <li><a href="{{ path('dependencia') }}">Dependencia</a></li>           */
/*                             <li class="divider"></li>                                  */
/*                             <li class="nav-header">USUARIOS</li>*/
/*                             <li><a href="/ppa_ved.php/usuario/new"> Nuevo Usuario </a></li>*/
/*                             <li><a href="/ppa_ved.php/usuario/index">Usuarios</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li class="nav-header">GRUPOS</li>*/
/*                             <li><a href="/ppa_ved.php/group/new">Nuevo Grupo</a></li>*/
/*                             <li><a href="/ppa_ved.php/admin/grupo/">Listado Grupos</a></li>*/
/* */
/*                         </ul>*/
/*                     </li>*/
/* */
/* */
/*                     <li class="dropdown">*/
/*                         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <i class="icon-signal"></i>  */
/*                             Reportes <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="divider"></li>*/
/*                             <li class="nav-header">CARGA DE USUARIOS</li>*/
/*                             <li><a href="/ppa_ved.php/reportes/cargaUsuarios"> Carga por usuario  </a></li>*/
/*                             <li><a href="/ppa_ved.php/reportes/cargaUsuariosXmes"><i class="icon-user"></i> Carga por usuario por mes  </a></li>                      */
/*                             <li><a href="/ppa_ved.php/reportes/cargaXfecha"><i class="icon-calendar"></i> Carga por Fecha  </a></li>                      */
/*                             <li class="divider"></li>*/
/*                             <li class="nav-header">DOCUMENTACIÓN</li>*/
/*                             <li><a href="/ppa_ved.php/reportes/motivos/rptMotivosLocalidades">*/
/*                                     <i class="icon-calendar"></i> Totales por Temática/Localidad  </a>*/
/*                             </li>                      */
/*                             <li><a href="/ppa_ved.php/reportes/tipoDocumentacion/rptTipoDocLocalidades">*/
/*                                     <i class="icon-calendar"></i> Totales por Tipo de documentación/Localidad  </a>*/
/*                             </li>                      */
/*                             <li><a href="/ppa_ved.php/reportes/oficina/rptOficinaLocalidad">*/
/*                                     <i class="icon-calendar"></i> Totales por Oficina Emisora/Localidad  </a>*/
/*                             </li>                      */
/*                             <li><a href="/ppa_ved.php/reportes/personas/rptPersonasLegajoTipoDocumentacion">*/
/*                                     <i class="icon-calendar"></i> Cantidad de Destinatarios de Intervenciones*/
/*                                     (Asistencias Directas) </a>*/
/*                             </li>                      */
/*                         </ul>*/
/*                     </li>*/
/* */
/* */
/* */
/* */
/*                     <ul class="nav"> */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                 <i class="icon-user"></i>  */
/* */
/*                                 <b class="caret"></b>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li>*/
/*                                     <a>                      HERNAN, ROMERO                           */
/* */
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li><a href="/ppa_ved.php/usuario/perfil">Mi Perfil</a></li>              */
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="/ppa_ved.php/logout"><i class="icon-off"></i> Cerrar Sesión</a></li>*/
/*                             </ul>*/
/* */
/* */
/*                         </li>*/
/*                     </ul>*/
/* */
/* */
/* */
/*                     <li id="buscarBlock" class="pull-right">       */
/*                         <form id="formSearch" class="form-search pull-right" action="/ppa_ved.php/search/buscar/global" method="post">*/
/*                             <select name="busqueda[data]" id="cmbBuscarGlobal" style="width: 180px;" class="tipoBusqueda">*/
/*                                 <option value="persona">Personas/Otros Datos</option>             */
/*                                 <option value="legajo">N° de Legajo</option>        */
/*                             </select>*/
/*                             <div class="input-append">*/
/*                                 <input id="busquedaValores" name="busquedaValores" placeholder="Ingrese Apellido y Nombres" type="text" class="span2 search-query">*/
/*                                 <button type="submit" class="btn"><i class="icon-search"></i> Buscar</button>*/
/*                             </div>          */
/*                         </form>     */
/*                     </li>*/
/* */
/*                     <script>*/
/*                         $(function () {*/
/*                             $('#busquedaValores').focus();*/
/*                             //$.mask.definitions['x']='^[0-9]*$';*/
/*                         });*/
/* */
/*                         jQuery(document).ready(function ()*/
/*                         {*/
/* */
/*                         });*/
/* */
/*                         $("body").delegate(".tipoBusquedaXXXXXX", "change", function (e) {*/
/*                             var tipo = $(this).val();*/
/*                             console.log(tipo);*/
/*                             $("#busquedaValores").val('');*/
/*                             if (tipo === 'persona') {*/
/*                                 $("#busquedaValores").mask("aaaa");*/
/* */
/*                             } else {*/
/*                                 $("#busquedaValores").mask("99999/99");*/
/* */
/*                             }*/
/*                         });*/
/* */
/*                     </script> */
/* */
/*                 </ul>*/
/*             </div><!-- /.nav-collapse -->*/
/*         </div>*/
/* */
/*     </div> */
/*     */
