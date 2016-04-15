<?php

/* menu.html.twig */
class __TwigTemplate_82a32f59bc2c76dfe60019b7c1d9700012cd6da7a1cce1ec8603a1c600d142ab extends Twig_Template
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
        echo "
<div class=\"navbar\" style=\"color: #040404\">
    <div class=\"navbar-inner\">

        <div class=\"container\">
            <a data-target=\".navbar-responsive-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\">

            </a>

            <a class=\"brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\" style=\"vertical-align: middle !important  ;
               font-family: serif; font-size: 20px;
               float: left;\">
                ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7ecfac4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ecfac4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/7ecfac4_logoDesarrolloSocial-medium_1.jpg");
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        } else {
            // asset "7ecfac4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ecfac4") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/7ecfac4.jpg");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "

            </a>

            <span style=\"vertical-align: middle; font-family: serif; font-size: 26px; float: right;\">
                <strong> <br><br><br>GESTIÓN DE BECAS - MDS
                </strong></span>

        </div>
    </div><!-- /navbar-inner -->
    <div class=\"navbar-inner\" >
        <div class=\"nav-collapse collapse navbar-responsive-collapse\">
            <ul class=\"nav\">
                <li class=\"divider-vertical\"></li>    


                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"icon-pencil\"></i>  
                        Entradas <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("becado_new");
        echo "\">Agregar Becado</a></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("certificacion");
        echo "\">Certifaciones</a></li>           
                        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\"> Listado de Becados  </a></li>
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
                        Administración General <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"nav-header\">Departamentos/Localidad/Barrio/Calle</li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Administrar Datos</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("departamento");
        echo "\"> Departamentos  </a></li>
                                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("localidad");
        echo "\"> Localidades  </a></li>
                                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("barrio");
        echo "\"> Barrios  </a></li>
                                <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("calle");
        echo "\"> Calles  </a></li>
                            </ul>
                        </li>  
                        <li class=\"divider\"></li>
                        <li class=\"nav-header\">Gestión Becas</li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Administrar Becas</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("tipobeca");
        echo "\">Tipo Beca</a></li>
                                <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("tipofuncion");
        echo "\">Tipo Función</a></li>
                                <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("beca");
        echo "\">Becas</a></li>
                            </ul>
                        </li>
                        <li class=\"divider\"></li>
                        <li class=\"nav-header\">Movimientos Sociales</li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Administrar Movimientos Sociales</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("referente");
        echo "\"> Referente</a></li>
                                <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("movimientosocial");
        echo "\"> Movimiento Social</a></li>
                            </ul>
                        </li>

                        <li class=\"nav-header\"></li>
                        <li class=\"nav-header\">Dependencias/Organismo-Insitución</li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Administrar Dependencias</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("responsable");
        echo "\">Responsable </a></li>
                                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("dependencia");
        echo "\">Dependencia</a></li>

                                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("lugarafectacion");
        echo "\">Lugar Afectación</a></li>
                            </ul></li>           
                        <li class=\"divider\"></li>                                  
                        <li class=\"nav-header\">Formación</li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Administrar datos Formación</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("profesion");
        echo "\"> Profesión </a></li>
                                <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("niveleducativo");
        echo "\">Nivel Educativo</a></li>
                                <li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("institucion");
        echo "\">Institución</a></li>
                                <li><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("perfil");
        echo "\">Perfil</a></li>
                                <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("oficio");
        echo "\">Oficio</a></li>
                            </ul>
                        </li>
                        <li class=\"divider\"></li>
                        <li class=\"nav-header\">GRUPOS</li>
                        <li><a href=\"/ppa_ved.php/group/new\">Nuevo Grupo</a></li>


                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"icon-wrench\"></i>  
                        Usuarios <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\" >
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
                        <li class=\"nav-header\">Becados</li>
                        <li><a href=\"/ppa_ved.php/reportes/motivos/rptMotivosLocalidades\">
                                <i class=\"icon-calendar\"></i> Becados Activos  </a>
                        </li>                      
                        <li><a href=\"/ppa_ved.php/reportes/tipoDocumentacion/rptTipoDocLocalidades\">
                                <i class=\"icon-calendar\"></i> Becas Activas  </a>
                        </li>                      
                        <li><a href=\"/ppa_ved.php/reportes/oficina/rptOficinaLocalidad\">
                                <i class=\"icon-calendar\"></i> Certificación Mensual - Activos  </a>
                        </li>                      
                        <li><a href=\"/ppa_ved.php/reportes/oficina/rptOficinaLocalidad\">
                                <i class=\"icon-calendar\"></i> Certificación Mensual - No Activos  </a>
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



                ";
        // line 189
        echo "
                ";
        // line 215
        echo "
            </ul>
        </div><!-- /.nav-collapse -->
    </div>

</div> ";
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
        return array (  280 => 215,  277 => 189,  200 => 103,  196 => 102,  192 => 101,  188 => 100,  184 => 99,  174 => 92,  169 => 90,  165 => 89,  153 => 80,  149 => 79,  138 => 71,  134 => 70,  130 => 69,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  85 => 39,  81 => 38,  77 => 37,  54 => 16,  40 => 14,  36 => 13,  30 => 10,  19 => 1,);
    }
}
/* */
/* <div class="navbar" style="color: #040404">*/
/*     <div class="navbar-inner">*/
/* */
/*         <div class="container">*/
/*             <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">*/
/* */
/*             </a>*/
/* */
/*             <a class="brand" href="{{ path('becado') }}" style="vertical-align: middle !important  ;*/
/*                font-family: serif; font-size: 20px;*/
/*                float: left;">*/
/*                 {% image '@BecaBundle/Resources/public/images/logoDesarrolloSocial-medium.jpg' %}*/
/*                 <img src="{{ asset_url }}" alt="Example" />*/
/*                 {% endimage %}*/
/* */
/* */
/*             </a>*/
/* */
/*             <span style="vertical-align: middle; font-family: serif; font-size: 26px; float: right;">*/
/*                 <strong> <br><br><br>GESTIÓN DE BECAS - MDS*/
/*                 </strong></span>*/
/* */
/*         </div>*/
/*     </div><!-- /navbar-inner -->*/
/*     <div class="navbar-inner" >*/
/*         <div class="nav-collapse collapse navbar-responsive-collapse">*/
/*             <ul class="nav">*/
/*                 <li class="divider-vertical"></li>    */
/* */
/* */
/*                 <li class="dropdown">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         <i class="icon-pencil"></i>  */
/*                         Entradas <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('becado_new') }}">Agregar Becado</a></li>*/
/*                         <li><a href="{{ path('certificacion') }}">Certifaciones</a></li>           */
/*                         <li><a href="{{ path('becado') }}"> Listado de Becados  </a></li>*/
/*                         <li><a href="/ppa_ved.php/denuncia_espontanea/new"></a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li class="nav-header">LISTADOS</li>            */
/*                         <li><a href="/ppa_ved.php/llamado/">Agregar algo</a></li>*/
/*                         <li><a href="/ppa_ved.php/denuncia_espontanea/">Agregar si hace falta</a></li> */
/*                     </ul>*/
/*                 </li>*/
/* */
/* */
/*                 <li class="dropdown">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         <i class="icon-wrench"></i>  */
/*                         Administración General <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li class="nav-header">Departamentos/Localidad/Barrio/Calle</li>*/
/*                         <li class="dropdown-submenu">*/
/*                             <a tabindex="-1" href="#">Administrar Datos</a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('departamento') }}"> Departamentos  </a></li>*/
/*                                 <li><a href="{{ path('localidad') }}"> Localidades  </a></li>*/
/*                                 <li><a href="{{ path('barrio') }}"> Barrios  </a></li>*/
/*                                 <li><a href="{{ path('calle') }}"> Calles  </a></li>*/
/*                             </ul>*/
/*                         </li>  */
/*                         <li class="divider"></li>*/
/*                         <li class="nav-header">Gestión Becas</li>*/
/*                         <li class="dropdown-submenu">*/
/*                             <a tabindex="-1" href="#">Administrar Becas</a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('tipobeca') }}">Tipo Beca</a></li>*/
/*                                 <li><a href="{{ path('tipofuncion') }}">Tipo Función</a></li>*/
/*                                 <li><a href="{{ path('beca') }}">Becas</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li class="nav-header">Movimientos Sociales</li>*/
/*                         <li class="dropdown-submenu">*/
/*                             <a tabindex="-1" href="#">Administrar Movimientos Sociales</a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('referente') }}"> Referente</a></li>*/
/*                                 <li><a href="{{ path('movimientosocial') }}"> Movimiento Social</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li class="nav-header"></li>*/
/*                         <li class="nav-header">Dependencias/Organismo-Insitución</li>*/
/*                         <li class="dropdown-submenu">*/
/*                             <a tabindex="-1" href="#">Administrar Dependencias</a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('responsable') }}">Responsable </a></li>*/
/*                                 <li><a href="{{ path('dependencia') }}">Dependencia</a></li>*/
/* */
/*                                 <li><a href="{{ path('lugarafectacion') }}">Lugar Afectación</a></li>*/
/*                             </ul></li>           */
/*                         <li class="divider"></li>                                  */
/*                         <li class="nav-header">Formación</li>*/
/*                         <li class="dropdown-submenu">*/
/*                             <a tabindex="-1" href="#">Administrar datos Formación</a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('profesion') }}"> Profesión </a></li>*/
/*                                 <li><a href="{{ path('niveleducativo') }}">Nivel Educativo</a></li>*/
/*                                 <li><a href="{{ path('institucion') }}">Institución</a></li>*/
/*                                 <li><a href="{{ path('perfil') }}">Perfil</a></li>*/
/*                                 <li><a href="{{ path('oficio') }}">Oficio</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li class="nav-header">GRUPOS</li>*/
/*                         <li><a href="/ppa_ved.php/group/new">Nuevo Grupo</a></li>*/
/* */
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/*                 <li class="dropdown">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         <i class="icon-wrench"></i>  */
/*                         Usuarios <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu" >*/
/*                         <li class="divider"></li>                                  */
/*                         <li class="nav-header">USUARIOS</li>*/
/*                         <li><a href="/ppa_ved.php/usuario/new"> Nuevo Usuario </a></li>*/
/*                         <li><a href="/ppa_ved.php/usuario/index">Usuarios</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li class="nav-header">GRUPOS</li>*/
/*                         <li><a href="/ppa_ved.php/group/new">Nuevo Grupo</a></li>*/
/*                         <li><a href="/ppa_ved.php/admin/grupo/">Listado Grupos</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         <i class="icon-signal"></i>  */
/*                         Reportes <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li class="nav-header">Becados</li>*/
/*                         <li><a href="/ppa_ved.php/reportes/motivos/rptMotivosLocalidades">*/
/*                                 <i class="icon-calendar"></i> Becados Activos  </a>*/
/*                         </li>                      */
/*                         <li><a href="/ppa_ved.php/reportes/tipoDocumentacion/rptTipoDocLocalidades">*/
/*                                 <i class="icon-calendar"></i> Becas Activas  </a>*/
/*                         </li>                      */
/*                         <li><a href="/ppa_ved.php/reportes/oficina/rptOficinaLocalidad">*/
/*                                 <i class="icon-calendar"></i> Certificación Mensual - Activos  </a>*/
/*                         </li>                      */
/*                         <li><a href="/ppa_ved.php/reportes/oficina/rptOficinaLocalidad">*/
/*                                 <i class="icon-calendar"></i> Certificación Mensual - No Activos  </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/* */
/* */
/* */
/* */
/*                 <ul class="nav"> */
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="icon-user"></i>  */
/* */
/*                             <b class="caret"></b>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <a>                      HERNAN, ROMERO                           */
/* */
/*                                 </a>*/
/*                             </li>*/
/*                             <li><a href="/ppa_ved.php/usuario/perfil">Mi Perfil</a></li>              */
/*                             <li class="divider"></li>*/
/*                             <li><a href="/ppa_ved.php/logout"><i class="icon-off"></i> Cerrar Sesión</a></li>*/
/*                         </ul>*/
/* */
/* */
/*                     </li>*/
/*                 </ul>*/
/* */
/* */
/* */
/*                 {#<li id="buscarBlock" class="pull-right">       */
/*                     <form id="formSearch" class="form-search pull-right" action="/ppa_ved.php/search/buscar/global" method="post">*/
/*                         <select name="busqueda[data]" id="cmbBuscarGlobal" style="width: 180px;" class="tipoBusqueda">*/
/*                             <option value="persona">Personas/Otros Datos</option>             */
/*                             <option value="legajo">N° de Legajo</option>        */
/*                         </select>*/
/*                         <div class="input-append">*/
/*                             <input id="busquedaValores" name="busquedaValores" placeholder="Ingrese Apellido y Nombres" type="text" class="span2 search-query">*/
/*                             <button type="submit" class="btn"><i class="icon-search"></i> Buscar</button>*/
/*                         </div>          */
/*                     </form>     */
/*                 </li>#}*/
/* */
/*                 {#<script>*/
/*                     $(function () {*/
/*                         $('#busquedaValores').focus();*/
/*                         //$.mask.definitions['x']='^[0-9]*$';*/
/*                     });*/
/* */
/*                     jQuery(document).ready(function ()*/
/*                     {*/
/* */
/*                     });*/
/* */
/*                     $("body").delegate(".tipoBusquedaXXXXXX", "change", function (e) {*/
/*                         var tipo = $(this).val();*/
/*                         console.log(tipo);*/
/*                         $("#busquedaValores").val('');*/
/*                         if (tipo === 'persona') {*/
/*                             $("#busquedaValores").mask("aaaa");*/
/* */
/*                         } else {*/
/*                             $("#busquedaValores").mask("99999/99");*/
/* */
/*                         }*/
/*                     });*/
/* */
/*                 </script> #}*/
/* */
/*             </ul>*/
/*         </div><!-- /.nav-collapse -->*/
/*     </div>*/
/* */
/* </div> */
