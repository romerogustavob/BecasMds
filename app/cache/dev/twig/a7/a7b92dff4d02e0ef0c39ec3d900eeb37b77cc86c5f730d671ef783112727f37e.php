<?php

/* PersonaBundle:Becado:show.html.twig */
class __TwigTemplate_2c9662aa1db4a708ead0fee44cd2cb1b28bc93f30e099e74e3c78d04210bed31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Becado:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JordiLlonchCrudGeneratorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.show.show", array("%entity%" => "Ficha Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
    <h3 style=\"color: #0044cc;\">Ver Ficha Becado</h3>

    <form class=\"form-horizontal\">
        <fieldset>        
            <div class=\"control-group\" style=\"display: none;\">
                <h4>Datos Personales</h4>
                <label class=\"control-label\">Id</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Nº Doc.</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dni", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Apellidos</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "apellidos", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Nombres</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombres", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Teléfono</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "telefono", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Email</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <h4>Domicilio</h4>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "domicilio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
            // line 40
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\">Departamento</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "departamento", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Localidad</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "localidad", array()), "html", null, true);
            echo "</span>            </div>
                </div>

                <div class=\"control-group\">
                    <label class=\"control-label\">Barrio</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "barrio", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Calle</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "calle", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Nro.</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "numero", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Dpto.</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "dpto", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Piso</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "piso", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Edificio</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "edificio", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Manzana</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "manzana", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Tira</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "tira", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Parcela</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "parcela", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Quinta</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "quinta", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Un. Funcional</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "unidadDuncional", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Referencias</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "referencias", array()), "html", null, true);
            echo "</span>            </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            <h4>Becas Asignadas</h4>
            ";
        // line 100
        $context["contBeca"] = 0;
        // line 101
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
            // line 102
            echo "                ";
            if ($this->getAttribute($context["becadobeca"], "activo", array())) {
                // line 103
                echo "                    ";
                $context["contBeca"] = ((isset($context["contBeca"]) ? $context["contBeca"] : null) + 1);
                // line 104
                echo "                    <div class=\"control-group\">
                        <label class=\"control-label\">Beca Nº ";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["contBeca"]) ? $context["contBeca"] : null), "html", null, true);
                echo ":</label>
                        <div class=\"controls\">                
                            <span class=\"input-xlarge uneditable-input span7\">                                               
                                ";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoBeca", array()), "html", null, true);
                echo "
                                Tipo Función:";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoFuncion", array()), "html", null, true);
                echo "
                                Monto:";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "monto", array()), "html", null, true);
                echo "
                            </span>            
                        </div>
                    </div> 
                    <div class=\"control-group\">
                        <label class=\"control-label\"></label>
                        <div class=\"controls\">                
                            <span class=\"input-xlarge\">                                               

                                <a class=\"btn btn-primary\" href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_edit", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                    Editar Beca
                                </a>

                            </span>            
                        </div>
                    </div> 
                    <div class=\"control-group\">
                        <label class=\"control-label\"></label>
                        <div class=\"controls\">                
                            <span class=\"input-xlarge\">                                               

                                <a class=\"btn btn-primary\" href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_new", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                    Certificar
                                </a>
                                    
                            </span>            
                        </div>
                    </div> 
                ";
            }
            // line 139
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "            <h4>Movimientos/Afectación/Dependencia</h4>
            <div class=\"control-group\">
                <label class=\"control-label\">Mov. Social/Referente</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">
                        ";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "movimientoSocial", array()), "html", null, true);
        echo " - Referente: 
                        ";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "apellidos", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "nombres", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Lugar Afectación</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lugarAfectacion", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Dependencia</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
        // line 153
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dependencia", array());
        echo "</span>            </div>
            </div>

            <h4>Formación</h4>
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formacion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["educacion"]) {
            // line 158
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\">Institución</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "institucion", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Nivel Educativo</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "nivelEducativo", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Profesión</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "profesion", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Perfil</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "perfil", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Oficio</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "oficio", array()), "html", null, true);
            echo "</span>            </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\">Descripción</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "descripcion", array()), "html", null, true);
            echo "</span>            </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['educacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "            <h4>Otros Datos</h4>
            <div class=\"control-group\">

                <label class=\"control-label\">Presenta certificacion</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 187
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "presentaCertificacion", array())) {
            echo "Sí";
        } else {
            echo "No";
        }
        echo "</span>            </div>
            </div>                
            <div class=\"control-group\">
                <label class=\"control-label\">Fecha Alta</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 191
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaAlta", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
            </div>        
            <div class=\"control-group\">
                <label class=\"control-label\">Fecha Baja</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 195
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaBaja", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
            </div>    
            <div class=\"control-group\">
                <label class=\"control-label\">Activo</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 199
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activo", array())) {
            echo "Sí";
        } else {
            echo "No";
        }
        echo "</span>            </div>
            </div>

        </fieldset>
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 207
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>

        <div class=\"float-left\">
            <a class=\"btn btn-primary\" href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                ";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>

        <div class=\"float-left\">
            <form action=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 222
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </form>
        </div>

        <!-- Trigger the modal with a button -->
        <button type=\"button\" class=\"float-left btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Añadir Beca</button>

        <!-- Modal -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Añadir Beca</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 240
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BecaBundle:BecadoBeca:new", array("id" => (isset($context["entity"]) ? $context["entity"] : null))));
        echo "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>

            </div>
        </div>
  
        ";
        // line 271
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Becado:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 271,  469 => 240,  446 => 222,  442 => 221,  437 => 219,  429 => 214,  425 => 213,  417 => 208,  413 => 207,  398 => 199,  391 => 195,  384 => 191,  373 => 187,  367 => 183,  358 => 180,  351 => 176,  344 => 172,  337 => 168,  330 => 164,  323 => 160,  319 => 158,  315 => 157,  308 => 153,  301 => 149,  292 => 145,  288 => 144,  282 => 140,  276 => 139,  265 => 131,  250 => 119,  238 => 110,  234 => 109,  230 => 108,  224 => 105,  221 => 104,  218 => 103,  215 => 102,  210 => 101,  208 => 100,  205 => 99,  195 => 95,  188 => 91,  181 => 87,  174 => 83,  167 => 79,  160 => 75,  153 => 71,  146 => 67,  139 => 63,  132 => 59,  125 => 55,  118 => 51,  110 => 46,  103 => 42,  99 => 40,  95 => 39,  89 => 36,  82 => 32,  75 => 28,  68 => 24,  61 => 20,  54 => 16,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - {{ 'views.show.show'|trans({'%entity%': 'Ficha Becado'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     <h3 style="color: #0044cc;">Ver Ficha Becado</h3>*/
/* */
/*     <form class="form-horizontal">*/
/*         <fieldset>        */
/*             <div class="control-group" style="display: none;">*/
/*                 <h4>Datos Personales</h4>*/
/*                 <label class="control-label">Id</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.id }}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Nº Doc.</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.dni }}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Apellidos</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.apellidos }}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Nombres</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.nombres }}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Teléfono</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.telefono }}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Email</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.email }}</span>            </div>*/
/*             </div>*/
/*             <h4>Domicilio</h4>*/
/*             {% for domicilio in entity.domicilio %}*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Departamento</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.departamento }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Localidad</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.localidad }}</span>            </div>*/
/*                 </div>*/
/* */
/*                 <div class="control-group">*/
/*                     <label class="control-label">Barrio</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.barrio }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Calle</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.calle }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Nro.</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.numero }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Dpto.</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.dpto }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Piso</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.piso }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Edificio</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.edificio }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Manzana</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.manzana }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Tira</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.tira }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Parcela</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.parcela }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Quinta</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.quinta }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Un. Funcional</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.unidadDuncional }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Referencias</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.referencias }}</span>            </div>*/
/*                 </div>*/
/* */
/*             {% endfor %}*/
/*             <h4>Becas Asignadas</h4>*/
/*             {% set contBeca=0 %}*/
/*             {% for becadobeca in entity.becadobeca %}*/
/*                 {% if becadobeca.activo %}*/
/*                     {% set contBeca=contBeca+1 %}*/
/*                     <div class="control-group">*/
/*                         <label class="control-label">Beca Nº {{ contBeca }}:</label>*/
/*                         <div class="controls">                */
/*                             <span class="input-xlarge uneditable-input span7">                                               */
/*                                 {{ becadobeca.beca.tipoBeca }}*/
/*                                 Tipo Función:{{ becadobeca.beca.tipoFuncion }}*/
/*                                 Monto:{{ becadobeca.beca.monto }}*/
/*                             </span>            */
/*                         </div>*/
/*                     </div> */
/*                     <div class="control-group">*/
/*                         <label class="control-label"></label>*/
/*                         <div class="controls">                */
/*                             <span class="input-xlarge">                                               */
/* */
/*                                 <a class="btn btn-primary" href="{{ path('becadobeca_edit', { 'id': becadobeca.id }) }}">*/
/*                                     Editar Beca*/
/*                                 </a>*/
/* */
/*                             </span>            */
/*                         </div>*/
/*                     </div> */
/*                     <div class="control-group">*/
/*                         <label class="control-label"></label>*/
/*                         <div class="controls">                */
/*                             <span class="input-xlarge">                                               */
/* */
/*                                 <a class="btn btn-primary" href="{{ path('certificacion_new', { 'id': becadobeca.id }) }}">*/
/*                                     Certificar*/
/*                                 </a>*/
/*                                     */
/*                             </span>            */
/*                         </div>*/
/*                     </div> */
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             <h4>Movimientos/Afectación/Dependencia</h4>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Mov. Social/Referente</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span5">*/
/*                         {{ entity.referente.movimientoSocial}} - Referente: */
/*                         {{ entity.referente.apellidos }}, {{ entity.referente.nombres}}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Lugar Afectación</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ entity.lugarAfectacion }}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Dependencia</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ entity.dependencia | raw}}</span>            </div>*/
/*             </div>*/
/* */
/*             <h4>Formación</h4>*/
/*             {% for educacion in entity.formacion %}*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Institución</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.institucion }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Nivel Educativo</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.nivelEducativo }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Profesión</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.profesion }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Perfil</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.perfil }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Oficio</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.oficio }}</span>            </div>*/
/*                 </div>*/
/*                 <div class="control-group">*/
/*                     <label class="control-label">Descripción</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.descripcion }}</span>            </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*             <h4>Otros Datos</h4>*/
/*             <div class="control-group">*/
/* */
/*                 <label class="control-label">Presenta certificacion</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{%if entity.presentaCertificacion %}Sí{% else %}No{% endif %}</span>            </div>*/
/*             </div>                */
/*             <div class="control-group">*/
/*                 <label class="control-label">Fecha Alta</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.fechaAlta|date('Y-m-d H:i:s') }}</span>            </div>*/
/*             </div>        */
/*             <div class="control-group">*/
/*                 <label class="control-label">Fecha Baja</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.fechaBaja|date('Y-m-d H:i:s') }}</span>            </div>*/
/*             </div>    */
/*             <div class="control-group">*/
/*                 <label class="control-label">Activo</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{%if entity.activo %}Sí{% else %}No{% endif %}</span>            </div>*/
/*             </div>*/
/* */
/*         </fieldset>*/
/*     </form>*/
/* */
/*     <div>*/
/*         <div class="float-left">*/
/*             <a class="btn" href="{{ path('becado') }}">*/
/*                 {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </a>*/
/*         </div>*/
/* */
/*         <div class="float-left">*/
/*             <a class="btn btn-primary" href="{{ path('becado_edit', { 'id': entity.id }) }}">*/
/*                 {{ 'views.recordactions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </a>*/
/*         </div>*/
/* */
/*         <div class="float-left">*/
/*             <form action="{{ path('becado_delete', { 'id': entity.id }) }}" method="post">*/
/*                 <input type="hidden" name="_method" value="DELETE" />*/
/*                 {{ form_widget(delete_form) }}*/
/*                 <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <!-- Trigger the modal with a button -->*/
/*         <button type="button" class="float-left btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Añadir Beca</button>*/
/* */
/*         <!-- Modal -->*/
/*         <div id="myModal" class="modal fade" role="dialog">*/
/*             <div class="modal-dialog">*/
/* */
/*                 <!-- Modal content-->*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                         <h4 class="modal-title">Añadir Beca</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {{ render( controller('BecaBundle:BecadoBeca:new', { 'id': entity })) }}*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*   */
/*         {#<!-- Modal -->*/
/*         <div id="editBecaModal" class="modal fade" role="dialog">*/
/*             <div class="modal-dialog">*/
/* */
/*                 <!-- Modal content-->*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                         <h4 class="modal-title">Añadir Beca</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {{ render( controller('BecaBundle:BecadoBeca:edit', {'id': entity.becacadobeca.id })) }}*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* #}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
