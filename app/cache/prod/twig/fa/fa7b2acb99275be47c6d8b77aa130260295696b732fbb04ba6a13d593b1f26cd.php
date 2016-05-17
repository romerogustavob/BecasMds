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
        echo "<div class=\"navbar\" style=\"color: #040404;\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a data-target=\".navbar-responsive-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\"></a>

            <a class=\"brand\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\" style=\"vertical-align: middle !important  ;
               font-family: serif; font-size: 20px;
               float: left;\">
               <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/beca/images/logoDesarrolloSocial-medium.jpg"), "html", null, true);
        echo "\" alt=\"Mds-Becas\" />
            </a>

            <span style=\"vertical-align: middle; font-family: serif; font-size: 26px; float: right;\">
                <strong> <br><br><br>GESTIÓN DE BECAS - MDS
                </strong>
                <br>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseUrl", array()) == "/app_dev.php")) {
            // line 17
            echo "                    <span style=\"background-color: red; color: white; font-size: 18px; border: 3px; border-color: #040404;\"><strong>ENTORNO DE PRUEBAS</strong></span>
                ";
        }
        // line 19
        echo "            </span>
        </div>
    </div><!-- /navbar-inner -->
    ";
        // line 22
        $context["falso"] = false;
        // line 23
        echo "    <div class=\"navbar-inner\" >
        <div class=\"nav-collapse collapse navbar-responsive-collapse\">
            <ul class=\"nav\">
                <li class=\"divider-vertical\"></li>
                
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"icon-pencil\"></i>  
                        Entradas <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("becado_new");
        echo "\">Agregar Becado</a></li>
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("certificacion", array("toexcel" => "false"));
        echo "\">Certifaciones</a></li>           
                        <li><a href=\"";
        // line 35
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
        // line 53
        echo $this->env->getExtension('routing')->getPath("departamento");
        echo "\"> Departamentos  </a></li>
                                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("localidad");
        echo "\"> Localidades  </a></li>
                                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("barrio");
        echo "\"> Barrios  </a></li>
                                <li><a href=\"";
        // line 56
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
        // line 64
        echo $this->env->getExtension('routing')->getPath("tipobeca");
        echo "\">Tipo Beca</a></li>
                                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("tipofuncion");
        echo "\">Tipo Función</a></li>
                                <li><a href=\"";
        // line 66
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
        // line 74
        echo $this->env->getExtension('routing')->getPath("referente");
        echo "\"> Referente</a></li>
                                <li><a href=\"";
        // line 75
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
        // line 84
        echo $this->env->getExtension('routing')->getPath("responsable");
        echo "\">Responsable </a></li>
                                <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("dependencia");
        echo "\">Dependencia</a></li>

                                <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("lugarafectacion");
        echo "\">Lugar Afectación</a></li>
                            </ul>
                        </li>           
                        <li class=\"divider\"></li>                                  
                        <li class=\"nav-header\">Formación</li>
                        <li class=\"dropdown-submenu\">
                            <a tabindex=\"-1\" href=\"#\">Administrar datos Formación</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("profesion");
        echo "\"> Profesión </a></li>
                                <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("niveleducativo");
        echo "\">Nivel Educativo</a></li>
                                <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("institucion");
        echo "\">Institución</a></li>
                                <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("perfil");
        echo "\">Perfil</a></li>
                                <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("oficio");
        echo "\">Oficio</a></li>
                            </ul>
                        </li>
                        <li class=\"divider\"></li>
                        <li class=\"nav-header\">GRUPOS</li>
                        <li><a href=\"/ppa_ved.php/group/new\">Nuevo Grupo</a></li>
                    </ul>
                </li>
                ";
        // line 107
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 108
            echo "                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"icon-wrench\"></i>  
                        Usuarios <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\" >
                        <li class=\"divider\"></li>                                  
                        <li class=\"nav-header\">USUARIOS</li>
                        <li><a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"> Nuevo Usuario </a></li>
                        <li><a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("user");
            echo "\">Usuarios</a></li>                        
                    </ul>
                </li>
                ";
        }
        // line 120
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 121
            echo "                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"icon-signal\"></i>  
                        Reportes <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"nav-header\">Becados</li>
                        <li>
                            <a href=\"/ppa_ved.php/reportes/motivos/rptMotivosLocalidades\">
                                <i class=\"icon-calendar\"></i> Becados Activos  
                            </a>
                        </li>                      
                        <li>
                            <a href=\"/ppa_ved.php/reportes/tipoDocumentacion/rptTipoDocLocalidades\">
                                <i class=\"icon-calendar\"></i> Becas Activas  
                            </a>
                        </li>                      
                        <li>
                            <a href=\"/ppa_ved.php/reportes/oficina/rptOficinaLocalidad\">
                                <i class=\"icon-calendar\"></i> Certificación Mensual - Activos  
                            </a>
                        </li>                      
                        <li>
                            <a href=\"/ppa_ved.php/reportes/oficina/rptOficinaLocalidad\">
                                <i class=\"icon-calendar\"></i> Certificación Mensual - No Activos  
                            </a>
                        </li>
                    </ul>
                </li>
                ";
        }
        // line 150
        echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-user\"></i>
                        <b class=\"caret\"></b>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a>                          
                                ";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombres", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "apellidos", array()), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"><b>Ver Perfil</b></a></li>              
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon-off\"></i> Salir</a></li>
                    </ul>
                </li>
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
        return array (  280 => 163,  275 => 161,  267 => 158,  257 => 150,  226 => 121,  223 => 120,  216 => 116,  212 => 115,  203 => 108,  201 => 107,  190 => 99,  186 => 98,  182 => 97,  178 => 96,  174 => 95,  163 => 87,  158 => 85,  154 => 84,  142 => 75,  138 => 74,  127 => 66,  123 => 65,  119 => 64,  108 => 56,  104 => 55,  100 => 54,  96 => 53,  75 => 35,  71 => 34,  67 => 33,  55 => 23,  53 => 22,  48 => 19,  44 => 17,  42 => 16,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* <div class="navbar" style="color: #040404;">*/
/*     <div class="navbar-inner">*/
/*         <div class="container">*/
/*             <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"></a>*/
/* */
/*             <a class="brand" href="{{ path('becado') }}" style="vertical-align: middle !important  ;*/
/*                font-family: serif; font-size: 20px;*/
/*                float: left;">*/
/*                <img src="{{ asset('bundles/beca/images/logoDesarrolloSocial-medium.jpg') }}" alt="Mds-Becas" />*/
/*             </a>*/
/* */
/*             <span style="vertical-align: middle; font-family: serif; font-size: 26px; float: right;">*/
/*                 <strong> <br><br><br>GESTIÓN DE BECAS - MDS*/
/*                 </strong>*/
/*                 <br>*/
/*                 {% if app.request.getBaseUrl == "/app_dev.php" %}*/
/*                     <span style="background-color: red; color: white; font-size: 18px; border: 3px; border-color: #040404;"><strong>ENTORNO DE PRUEBAS</strong></span>*/
/*                 {% endif %}*/
/*             </span>*/
/*         </div>*/
/*     </div><!-- /navbar-inner -->*/
/*     {% set falso=false %}*/
/*     <div class="navbar-inner" >*/
/*         <div class="nav-collapse collapse navbar-responsive-collapse">*/
/*             <ul class="nav">*/
/*                 <li class="divider-vertical"></li>*/
/*                 */
/*                 <li class="dropdown">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         <i class="icon-pencil"></i>  */
/*                         Entradas <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path('becado_new') }}">Agregar Becado</a></li>*/
/*                         <li><a href="{{ path('certificacion', { 'toexcel': 'false' }) }}">Certifaciones</a></li>           */
/*                         <li><a href="{{ path('becado') }}"> Listado de Becados  </a></li>*/
/*                         <li><a href="/ppa_ved.php/denuncia_espontanea/new"></a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li class="nav-header">LISTADOS</li>            */
/*                         <li><a href="/ppa_ved.php/llamado/">Agregar algo</a></li>*/
/*                         <li><a href="/ppa_ved.php/denuncia_espontanea/">Agregar si hace falta</a></li> */
/*                     </ul>*/
/*                 </li>*/
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
/*                             </ul>*/
/*                         </li>           */
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
/*                     </ul>*/
/*                 </li>*/
/*                 {% if is_granted("ROLE_ADMIN") %}*/
/*                 <li class="dropdown">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         <i class="icon-wrench"></i>  */
/*                         Usuarios <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu" >*/
/*                         <li class="divider"></li>                                  */
/*                         <li class="nav-header">USUARIOS</li>*/
/*                         <li><a href="{{ path('fos_user_registration_register') }}"> Nuevo Usuario </a></li>*/
/*                         <li><a href="{{ path('user') }}">Usuarios</a></li>                        */
/*                     </ul>*/
/*                 </li>*/
/*                 {% endif %}*/
/*                 {% if is_granted("ROLE_ADMIN") %}*/
/*                 <li class="dropdown">*/
/*                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                         <i class="icon-signal"></i>  */
/*                         Reportes <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li class="nav-header">Becados</li>*/
/*                         <li>*/
/*                             <a href="/ppa_ved.php/reportes/motivos/rptMotivosLocalidades">*/
/*                                 <i class="icon-calendar"></i> Becados Activos  */
/*                             </a>*/
/*                         </li>                      */
/*                         <li>*/
/*                             <a href="/ppa_ved.php/reportes/tipoDocumentacion/rptTipoDocLocalidades">*/
/*                                 <i class="icon-calendar"></i> Becas Activas  */
/*                             </a>*/
/*                         </li>                      */
/*                         <li>*/
/*                             <a href="/ppa_ved.php/reportes/oficina/rptOficinaLocalidad">*/
/*                                 <i class="icon-calendar"></i> Certificación Mensual - Activos  */
/*                             </a>*/
/*                         </li>                      */
/*                         <li>*/
/*                             <a href="/ppa_ved.php/reportes/oficina/rptOficinaLocalidad">*/
/*                                 <i class="icon-calendar"></i> Certificación Mensual - No Activos  */
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 {% endif %}*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                         <i class="icon-user"></i>*/
/*                         <b class="caret"></b>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a>                          */
/*                                 {{ app.user.nombres }}, {{ app.user.apellidos }}*/
/*                             </a>*/
/*                         </li>*/
/*                         <li><a href="{{ path('fos_user_profile_show') }}"><b>Ver Perfil</b></a></li>              */
/*                         <li class="divider"></li>*/
/*                         <li><a href="{{ path('fos_user_security_logout') }}"><i class="icon-off"></i> Salir</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.nav-collapse -->*/
/*     </div>*/
/* </div> */
