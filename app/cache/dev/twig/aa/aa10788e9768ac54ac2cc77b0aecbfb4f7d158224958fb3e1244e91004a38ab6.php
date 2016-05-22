<?php

/* PersonaBundle:Becado:edit.html.twig */
class __TwigTemplate_e3913e1ea3b866bddda4bcdfa9169b98c0babb614cce6ba8cd7c4ee59b6ce8a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Becado:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JordiLlonchCrudGeneratorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macrosFormacion"] = $this->loadTemplate("PersonaBundle:Form:macro.formacion.html.twig", "PersonaBundle:Becado:edit.html.twig", 2);
        // line 3
        $context["macrosDomicilio"] = $this->loadTemplate("PersonaBundle:Form:macro.domicilio.html.twig", "PersonaBundle:Becado:edit.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_page($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        // line 39
        echo "    <h2 style=\"color: #0044cc\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>

    <form class=\"well\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        <fieldset style=\"border:1px solid; background-color: #3a8104; color: #000; height: 30px;\">
            <h4 style=\" line-height: 12px;\">Datos Personales</h4>
        </fieldset>

        <table>
            <tbody>
                <tr class=\"form-horizontal\">
                    <td>                        
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dni", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Dni"));
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dni", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "
                        <a class=\"btn btn-primary\" onclick=\"ajaxDniEdicion();\" href=\"#\">Buscar</a>
                    </td>
                    <td>
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos", array()), 'row', array("label" => null, "label_attr" => array("style" => "font-weight:bold;")));
        // line 58
        echo "
                    </td>
                    <td>
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombres", array()), 'row', array("label" => null, "label_attr" => array("style" => "font-weight:bold;")));
        // line 62
        echo "
                    </td>
                    <td>
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono", array()), 'row', array("label" => "Teléfono", "label_attr" => array("style" => "font-weight:bold;")));
        // line 66
        echo "
                    </td>
                    <td>
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'row', array("label" => null, "label_attr" => array("style" => "font-weight:bold;")));
        // line 70
        echo "
                        ";
        // line 72
        echo "                        <div style=\"display: none;\">
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'row');
        echo "
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>      

        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <fieldset style=\"border:1px solid; background-color: #9fda58; color: #000; height: 30px;\">
                        <h4 style=\"line-height: 12px;\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#domicilioCollapse\" style=\"color: #000;\">
                                Domicilio
                            </a>
                        </h4>
                    </fieldset>
                </div>
                <div id=\"domicilioCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">

                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'errors');
        echo "
                        ";
        // line 95
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()))) {
            // line 96
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 97
                echo "                                <table>
                                    <tbody>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 101
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "localidad", array()), 'row', array("label" => null, "label_attr" => array("style" => "font-weight:bold;")));
                // line 102
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 105
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "barrio", array()), 'row', array("label" => "Barrio", "label_attr" => array("style" => "font-weight:bold;")));
                // line 106
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 109
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "calle", array()), 'row', array("label" => "Calle", "label_attr" => array("style" => "font-weight:bold;")));
                // line 110
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 113
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "numero", array()), 'row', array("label" => "Nº", "label_attr" => array("style" => "font-weight:bold;")));
                // line 114
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 119
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'row', array("label" => "Dpto", "label_attr" => array("style" => "font-weight:bold;")));
                // line 120
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 123
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'row', array("label" => "Piso", "label_attr" => array("style" => "font-weight:bold;")));
                // line 124
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 127
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'row', array("label" => "Edificio", "label_attr" => array("style" => "font-weight:bold;")));
                // line 128
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 131
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'row', array("label" => "Mzna", "label_attr" => array("style" => "font-weight:bold;")));
                // line 132
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 137
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'row', array("label" => "Tira", "label_attr" => array("style" => "font-weight:bold;")));
                // line 138
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 141
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'row', array("label" => "Parcela", "label_attr" => array("style" => "font-weight:bold;")));
                // line 142
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 145
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'row', array("label" => "Quinta", "label_attr" => array("style" => "font-weight:bold;")));
                // line 146
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 149
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "UF/Casa"));
                echo "
                                                ";
                // line 150
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'widget');
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td colspan=\"3\">

                                                ";
                // line 156
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Referencias"));
                echo "
                                                ";
                // line 157
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'widget', array("attr" => array("class" => "span6")));
                echo "
                                                <div style=\"display: none;\">
                                                    ";
                // line 159
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "departamento", array()), 'row');
                echo "
                                                </div>
                                                <div style=\"display: none;\">
                                                    ";
                // line 162
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "latitude", array()), 'row');
                echo "
                                                </div>

                                            </td>
                                            <td>

                                                <div style=\"display: none;\">
                                                    ";
                // line 169
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "longitude", array()), 'row');
                echo "
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                        ";
        } else {
            // line 178
            echo "                            <div class=\"row-fluid\">
                                <div data-prototype=\"";
            // line 179
            echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid domicilio\">
                                    ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
                // line 181
                echo "                                        ";
                echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                                </div>
                                <a href='#' class='btn add-domicilio-form'>
                                    <i class='icon-pencil'></i> Agregar Domicilio                                    
                                </a>
                            </div>

                        ";
        }
        // line 190
        echo "                    </div> 
                </div>
            </div>
        </div>
        <fieldset style=\"border:1px solid; background-color: #3a8104; color:#000; height: 30px;\">
            <h4 style=\"line-height: 12px;\">
                Becas Asignadas
            </h4>
        </fieldset>
                    
        ";
        // line 200
        $context["cont"] = 0;
        // line 201
        echo "        ";
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()))) {
            // line 202
            echo "            
            ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["becas"]) {
                echo "                
                ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["becas"], "beca", array()), "vars", array()), "choices", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                    // line 205
                    echo "                   ";
                    // line 207
                    echo "                    ";
                    if (($this->getAttribute($context["choice"], "value", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["becas"], "beca", array()), "vars", array()), "value", array()))) {
                        // line 208
                        echo "                        ";
                        $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : null) + 1);
                        // line 209
                        echo "                        <br/><span style=\"color: #387038\"><b>Beca Nro: ";
                        echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : null), "html", null, true);
                        echo "</b></span>
                        ";
                        // line 210
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "beca", array()), 'widget', array("attr" => array("style" => "width:50%;")));
                        echo "
                    ";
                    }
                    // line 212
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "   
                ";
                // line 213
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["becas"], "becaVulnerable", array()), "vars", array()), "choices", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                    // line 214
                    echo "                    ";
                    if (($this->getAttribute($context["choice"], "value", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["becas"], "becaVulnerable", array()), "vars", array()), "value", array()))) {
                        // line 215
                        echo "                        ";
                        $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : null) + 1);
                        // line 216
                        echo "                        <br/><span style=\"color: #387038\"><b>Beca Nro: ";
                        echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : null), "html", null, true);
                        echo "</b></span>
                        ";
                        // line 217
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "becaVulnerable", array()), 'widget', array("attr" => array("style" => "width:50%;")));
                        echo "
                    ";
                    }
                    // line 219
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "                
                
                <div style=\"display:none\">
                    ";
                // line 222
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "becado", array()), 'row');
                echo "
                </div>
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "        ";
        } else {
            // line 227
            echo "            <span style=\"color: #cc0000;\">(*)La persona no tiene Becas Asignadas, para poder modificar la ficha, agregue una Beca</span>
        ";
        }
        // line 229
        echo "        
        <fieldset style=\"border:1px solid; background-color: #9fda58; color:#000; height: 30px;\">
            <h4 style=\"line-height: 12px;\">
                Movimiento/Afectación/Dependencia
            </h4>
        </fieldset>
        <table>
            <tbody>
                <tr class=\"form-horizontal\">
                    <td>
                        ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Mov. Social/Referente"));
        echo "
                        ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array())), 'widget', array("attr" => array("style" => "width:100%;")));
        echo " 
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Lugar de Afectación"));
        echo "
                        ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array())), 'widget', array("attr" => array("style" => "width:100%;")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Dependencia"));
        echo "
                        ";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array())), 'widget', array("attr" => array("style" => "width:100%;")));
        echo "
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <fieldset style=\"border:1px solid; background-color: #3a8104; color:#000; height: 30px;\">
                        <h4 class=\"panel-title\" style=\"line-height: 12px;\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#formacionCollapse\"  style=\"color:#000;\">
                                Formación
                            </a>
                        </h4>
                    </fieldset>
                </div>
                <div id=\"formacionCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">
                        ";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
        echo "
                        ";
        // line 272
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()))) {
            // line 273
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 274
                echo "                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["formacion"], 'stylesheet');
                echo "
                                ";
                // line 275
                echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["formacion"]);
                echo "
                                <table>
                                    <tbody>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 280
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "institucion", array()), 'row', array("label" => "Institución", "label_attr" => array("style" => "font-weight:bold;")));
                // line 281
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 284
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "nivelEducativo", array()), 'row', array("label" => "Nivel Educativo", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 286
                echo "
                                                                        
                                            </td>
                                            <td>
                                                ";
                // line 290
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "profesion", array()), 'row', array("label" => "Profesión", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 292
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 297
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "oficio", array()), 'row', array("label" => "Oficio", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 299
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 302
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "perfil", array()), 'row', array("label" => "Perfil", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 304
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 307
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "descripcion", array()), 'row', array("label" => "Descripción", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 309
                echo "
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "                        ";
        } else {
            // line 317
            echo "                            <div class=\"row-fluid\">
                                ";
            // line 318
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
            echo "
                                <div data-prototype=\"";
            // line 319
            echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid formacion\">
                                    ";
            // line 320
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
                // line 321
                echo "                                        ";
                echo $context["macrosFormacion"]->getformacion($context["formac"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "                                </div>
                                <a href='#' class='btn add-formacion-form'>
                                    <i class='icon-pencil'></i> Agregar Formación
                                </a>
                            </div>  
                        ";
        }
        // line 329
        echo "                    </div>
                </div>
            </div>
        </div>
        <fieldset style=\"border:1px solid; background-color: #9fda58; color:#000; height: 30px;\">
            <h4 style=\"line-height: 12px;\">
                Otros Datos
            </h4>
        </fieldset>
        <table>
            <tbody>
                <tr>
                    <td>
                        ";
        // line 342
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaAlta", array()), 'row', array("label" => "Fecha Alta", "label_attr" => array("style" => "font-weight:bold;")));
        // line 343
        echo "
                    </td>
                    <td>
                        ";
        // line 346
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaBaja", array()), 'row', array("label" => "Fecha Baja", "label_attr" => array("style" => "font-weight:bold;")));
        // line 347
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "presentaCertificacion", array()), 'row', array("label" => "¿Presenta Certificación?", "label_attr" => array("style" => "font-weight:bold;")));
        // line 353
        echo "                        
                    </td>
                    <td>
                        ";
        // line 356
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "activo", array()), 'row', array("label" => "¿Activo?", "label_attr" => array("style" => "font-weight:bold;")));
        // line 357
        echo "
                    </td>
                </tr>
            </tbody>                        
        </table>
        
        ";
        // line 364
        echo "        <div style=\"display: none\">
            ";
        // line 365
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 371
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\"><span class=\"divider-vertical\">
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </span></div>

        ";
        // line 377
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 382
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"float-left\">
            <form action=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 389
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 390
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </form>
        </div>
            <!-- Trigger the modal with a button -->
    <button type=\"button\" class=\"float-left btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Añadir Beca</button>
    
    <!-- Modal -->
    <div id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"display: none\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Añadir Beca</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 407
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BecaBundle:BecadoBeca:new", array("id" => (isset($context["entity"]) ? $context["entity"] : null))));
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>
    
 </div>
";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'stylesheet');
        echo "
    ";
    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        // line 19
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c2447d5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_jquery-ui_1.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_agregarDomicilio_2.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_agregarFormacion_3.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_addForm_4.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_deleteRow_5.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_select2_6.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_select2Becado_7.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_dalert.jquery.min_8.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_ajax-functions_9.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "c2447d5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5.js");
            // line 33
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 35
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 38
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Becado:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  982 => 38,  976 => 36,  972 => 35,  968 => 34,  963 => 33,  956 => 36,  952 => 35,  948 => 34,  943 => 33,  937 => 36,  933 => 35,  929 => 34,  924 => 33,  918 => 36,  914 => 35,  910 => 34,  905 => 33,  899 => 36,  895 => 35,  891 => 34,  886 => 33,  880 => 36,  876 => 35,  872 => 34,  867 => 33,  861 => 36,  857 => 35,  853 => 34,  848 => 33,  842 => 36,  838 => 35,  834 => 34,  829 => 33,  823 => 36,  819 => 35,  815 => 34,  810 => 33,  804 => 36,  800 => 35,  796 => 34,  791 => 33,  787 => 22,  783 => 21,  779 => 20,  774 => 19,  771 => 18,  765 => 15,  761 => 14,  757 => 13,  752 => 12,  749 => 11,  733 => 407,  711 => 390,  707 => 389,  702 => 387,  695 => 383,  691 => 382,  683 => 377,  677 => 374,  671 => 371,  665 => 368,  659 => 365,  656 => 364,  648 => 357,  646 => 356,  641 => 353,  639 => 352,  632 => 347,  630 => 346,  625 => 343,  623 => 342,  608 => 329,  600 => 323,  591 => 321,  587 => 320,  583 => 319,  579 => 318,  576 => 317,  573 => 316,  561 => 309,  559 => 307,  554 => 304,  552 => 302,  547 => 299,  545 => 297,  538 => 292,  536 => 290,  530 => 286,  528 => 284,  523 => 281,  521 => 280,  513 => 275,  508 => 274,  503 => 273,  501 => 272,  497 => 271,  475 => 252,  471 => 251,  463 => 246,  459 => 245,  451 => 240,  447 => 239,  435 => 229,  431 => 227,  428 => 226,  418 => 222,  408 => 219,  403 => 217,  398 => 216,  395 => 215,  392 => 214,  388 => 213,  380 => 212,  375 => 210,  370 => 209,  367 => 208,  364 => 207,  362 => 205,  358 => 204,  352 => 203,  349 => 202,  346 => 201,  344 => 200,  332 => 190,  323 => 183,  314 => 181,  310 => 180,  306 => 179,  303 => 178,  300 => 177,  286 => 169,  276 => 162,  270 => 159,  265 => 157,  261 => 156,  252 => 150,  248 => 149,  243 => 146,  241 => 145,  236 => 142,  234 => 141,  229 => 138,  227 => 137,  220 => 132,  218 => 131,  213 => 128,  211 => 127,  206 => 124,  204 => 123,  199 => 120,  197 => 119,  190 => 114,  188 => 113,  183 => 110,  181 => 109,  176 => 106,  174 => 105,  169 => 102,  167 => 101,  161 => 97,  156 => 96,  154 => 95,  150 => 94,  126 => 73,  123 => 72,  120 => 70,  118 => 69,  113 => 66,  111 => 65,  106 => 62,  104 => 61,  99 => 58,  97 => 57,  90 => 53,  86 => 52,  74 => 43,  67 => 41,  61 => 39,  59 => 18,  56 => 17,  54 => 11,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* {% import "PersonaBundle:Form:macro.formacion.html.twig" as macrosFormacion %}*/
/* {% import "PersonaBundle:Form:macro.domicilio.html.twig" as macrosDomicilio %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} -  {{ 'views.edit.edit'|trans({'%entity%': 'Becado'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         {{ form_stylesheet(edit_form) }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         <script src="{{ asset('bundles/jordillonchcrudgenerator/js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/jquery-ui.js'   */
/*             '@PersonaBundle/Resources/public/js/agregarDomicilio.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarFormacion.js'*/
/*             '@PersonaBundle/Resources/public/js/addForm.js'  */
/*             '@PersonaBundle/Resources/public/js/deleteRow.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Becado.js'   */
/*             '@PersonaBundle/Resources/public/js/dalert.jquery.min.js'*/
/*             '@PersonaBundle/Resources/public/js/ajax-functions.js'*/
/*         %}*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*         {{ form_javascript(edit_form) }}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*     <h2 style="color: #0044cc">{{ 'views.edit.edit'|trans({'%entity%': 'Becado'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/* */
/*     <form class="well" action="{{ path('becado_update', { 'id': entity.id  }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*         <input type="hidden" name="_method" value="PUT" />*/
/*         {{ form_start(edit_form) }}*/
/*         <fieldset style="border:1px solid; background-color: #3a8104; color: #000; height: 30px;">*/
/*             <h4 style=" line-height: 12px;">Datos Personales</h4>*/
/*         </fieldset>*/
/* */
/*         <table>*/
/*             <tbody>*/
/*                 <tr class="form-horizontal">*/
/*                     <td>                        */
/*                         {{ form_label(edit_form.dni,'Dni',{'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                         {{ form_widget(edit_form.dni, {'attr':{'style':'width:100px'}}) }}*/
/*                         <a class="btn btn-primary" onclick="ajaxDniEdicion();" href="#">Buscar</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.apellidos, {'label':null, */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.nombres, {'label':null, */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.telefono, {'label':'Teléfono', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.email, {'label':null, */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                         {#PONGO ESTOS CAMPOS A HIDDEN YA QUE SI USO FORM_REST EN FORM END, BORRA TAMBIÉN LAS ENTITY#}*/
/*                         <div style="display: none;">*/
/*                             {{ form_row(edit_form.id) }}*/
/*                         </div>*/
/*                     </td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>      */
/* */
/*         <div class="panel-group" id="accordion">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <fieldset style="border:1px solid; background-color: #9fda58; color: #000; height: 30px;">*/
/*                         <h4 style="line-height: 12px;">*/
/*                             <a data-toggle="collapse" data-parent="#accordion" href="#domicilioCollapse" style="color: #000;">*/
/*                                 Domicilio*/
/*                             </a>*/
/*                         </h4>*/
/*                     </fieldset>*/
/*                 </div>*/
/*                 <div id="domicilioCollapse" class="panel-collapse collapse in">*/
/*                     <div class="panel-body">*/
/* */
/*                         {{ form_errors(edit_form.domicilio) }}*/
/*                         {% if edit_form.domicilio is not empty %}*/
/*                             {% for domicilio in edit_form.domicilio %}*/
/*                                 <table>*/
/*                                     <tbody>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.localidad, {'label':null, */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.barrio, {'label':'Barrio', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.calle, {'label':'Calle', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.numero, {'label':'Nº', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.dpto, {'label':'Dpto', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.piso, {'label':'Piso', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.edificio, {'label':'Edificio', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.manzana, {'label':'Mzna', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.tira, {'label':'Tira', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.parcela, {'label':'Parcela', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(domicilio.quinta, {'label':'Quinta', */
/*                                                      'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.unidadFuncional, 'UF/Casa', {'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                                 {{ form_widget(domicilio.unidadFuncional) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td colspan="3">*/
/* */
/*                                                 {{ form_label(domicilio.referencias, 'Referencias', {'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                                                 {{ form_widget(domicilio.referencias, {'attr':{'class':'span6'}}) }}*/
/*                                                 <div style="display: none;">*/
/*                                                     {{ form_row(domicilio.departamento) }}*/
/*                                                 </div>*/
/*                                                 <div style="display: none;">*/
/*                                                     {{ form_row(domicilio.latitude) }}*/
/*                                                 </div>*/
/* */
/*                                             </td>*/
/*                                             <td>*/
/* */
/*                                                 <div style="display: none;">*/
/*                                                     {{ form_row(domicilio.longitude) }}*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/* */
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             <div class="row-fluid">*/
/*                                 <div data-prototype="{{ macrosDomicilio.domicilio(edit_form.domicilio.vars.prototype)|e }}" class="row-fluid domicilio">*/
/*                                     {% for domi in edit_form.domicilio %}*/
/*                                         {{ macrosDomicilio.domicilio(domi) }}*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                                 <a href='#' class='btn add-domicilio-form'>*/
/*                                     <i class='icon-pencil'></i> Agregar Domicilio                                    */
/*                                 </a>*/
/*                             </div>*/
/* */
/*                         {% endif %}*/
/*                     </div> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <fieldset style="border:1px solid; background-color: #3a8104; color:#000; height: 30px;">*/
/*             <h4 style="line-height: 12px;">*/
/*                 Becas Asignadas*/
/*             </h4>*/
/*         </fieldset>*/
/*                     */
/*         {% set cont=0 %}*/
/*         {% if edit_form.becadobeca is not empty %}*/
/*             */
/*             {% for becas in edit_form.becadobeca %}                */
/*                 {% for choice in becas.beca.vars.choices %}*/
/*                    {#  becas.beca.vars.value devuelve el value del option seleccionado, en este caso el que viene cargado */
/*                        desde el controller#}*/
/*                     {% if choice.value == becas.beca.vars.value %}*/
/*                         {% set cont=cont + 1 %}*/
/*                         <br/><span style="color: #387038"><b>Beca Nro: {{ cont }}</b></span>*/
/*                         {{ form_widget(becas.beca, {'attr':{'style':'width:50%;'} }) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}   */
/*                 {% for choice in becas.becaVulnerable.vars.choices %}*/
/*                     {% if choice.value== becas.becaVulnerable.vars.value %}*/
/*                         {% set cont=cont + 1 %}*/
/*                         <br/><span style="color: #387038"><b>Beca Nro: {{ cont }}</b></span>*/
/*                         {{ form_widget(becas.becaVulnerable, {'attr':{'style':'width:50%;'} }) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}                */
/*                 */
/*                 <div style="display:none">*/
/*                     {{ form_row(becas.becado) }}*/
/*                 </div>*/
/*                 */
/*             {% endfor %}*/
/*         {% else %}*/
/*             <span style="color: #cc0000;">(*)La persona no tiene Becas Asignadas, para poder modificar la ficha, agregue una Beca</span>*/
/*         {% endif %}*/
/*         */
/*         <fieldset style="border:1px solid; background-color: #9fda58; color:#000; height: 30px;">*/
/*             <h4 style="line-height: 12px;">*/
/*                 Movimiento/Afectación/Dependencia*/
/*             </h4>*/
/*         </fieldset>*/
/*         <table>*/
/*             <tbody>*/
/*                 <tr class="form-horizontal">*/
/*                     <td>*/
/*                         {{ form_label(edit_form.referente, 'Mov. Social/Referente', {'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                         {{ form_widget(edit_form.referente | e, {'attr':{'style':'width:100%;'}}) }} */
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_label(edit_form.lugarAfectacion, 'Lugar de Afectación', {'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                         {{ form_widget(edit_form.lugarAfectacion | e, {'attr':{'style':'width:100%;'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_label(edit_form.dependencia, 'Dependencia', {'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                         {{ form_widget(edit_form.dependencia | e, {'attr':{'style':'width:100%;'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*         */
/*         <div class="panel-group" id="accordion">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <fieldset style="border:1px solid; background-color: #3a8104; color:#000; height: 30px;">*/
/*                         <h4 class="panel-title" style="line-height: 12px;">*/
/*                             <a data-toggle="collapse" data-parent="#accordion" href="#formacionCollapse"  style="color:#000;">*/
/*                                 Formación*/
/*                             </a>*/
/*                         </h4>*/
/*                     </fieldset>*/
/*                 </div>*/
/*                 <div id="formacionCollapse" class="panel-collapse collapse in">*/
/*                     <div class="panel-body">*/
/*                         {{ form_errors(edit_form.formacion) }}*/
/*                         {% if edit_form.formacion is not empty %}*/
/*                             {% for formacion in edit_form.formacion %}*/
/*                                 {{ form_stylesheet(formacion) }}*/
/*                                 {{ form_javascript(formacion) }}*/
/*                                 <table>*/
/*                                     <tbody>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.institucion, {'label':'Institución',*/
/*                                                                         'label_attr':{'style':'font-weight:bold;'}})}}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.nivelEducativo, {'label':'Nivel Educativo',*/
/*                                                                         'label_attr':{'style':'font-weight:bold;'},*/
/*                                                                         'attr':{'style':'width:100%;'}}) }}*/
/*                                                                         */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.profesion, {'label':'Profesión',*/
/*                                                                         'label_attr':{'style':'font-weight:bold;'},*/
/*                                                                         'attr':{'style':'width:100%;'}}) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.oficio, {'label':'Oficio',*/
/*                                                                         'label_attr':{'style':'font-weight:bold;'},*/
/*                                                                         'attr':{'style':'width:100%;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.perfil, {'label':'Perfil',*/
/*                                                                         'label_attr':{'style':'font-weight:bold;'},*/
/*                                                                         'attr':{'style':'width:100%;'}}) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.descripcion, {'label':'Descripción',*/
/*                                                                         'label_attr':{'style':'font-weight:bold;'},*/
/*                                                                         'attr':{'style':'width:100%;'}}) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/* */
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             <div class="row-fluid">*/
/*                                 {{ form_errors(edit_form.formacion) }}*/
/*                                 <div data-prototype="{{ macrosFormacion.formacion(edit_form.formacion.vars.prototype)|e }}" class="row-fluid formacion">*/
/*                                     {% for formac in edit_form.formacion %}*/
/*                                         {{ macrosFormacion.formacion(formac) }}*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                                 <a href='#' class='btn add-formacion-form'>*/
/*                                     <i class='icon-pencil'></i> Agregar Formación*/
/*                                 </a>*/
/*                             </div>  */
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <fieldset style="border:1px solid; background-color: #9fda58; color:#000; height: 30px;">*/
/*             <h4 style="line-height: 12px;">*/
/*                 Otros Datos*/
/*             </h4>*/
/*         </fieldset>*/
/*         <table>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.fechaAlta, {'label':'Fecha Alta',*/
/*                                         'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.fechaBaja, {'label':'Fecha Baja',*/
/*                                         'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.presentaCertificacion, {'label':'¿Presenta Certificación?',*/
/*                                                     'label_attr':{'style':'font-weight:bold;'}}) }}                        */
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.activo, {'label':'¿Activo?',*/
/*                                       'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             </tbody>                        */
/*         </table>*/
/*         */
/*         {#PONGO ESTOS CAMPOS A HIDDEN YA QUE SI USO FORM_REST EN FORM END, BORRA TAMBIÉN LAS ENTITY#}*/
/*         <div style="display: none">*/
/*             {{ form_widget(edit_form.formacion) }}*/
/*         </div>*/
/*         <div style="display: none">*/
/*             {{ form_widget(edit_form.domicilio) }}*/
/*         </div>*/
/*         <div style="display: none">*/
/*             {{ form_widget(edit_form.becadobeca) }}*/
/*         </div>*/
/*         <div style="padding-top: 15px;"><span class="divider-vertical">*/
/*                 <button type="submit" class="btn btn-success">{{ 'views.edit.editbutton'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*             </span></div>*/
/* */
/*         {{ form_rest(edit_form) }}*/
/*     </form>*/
/* */
/*     <div>*/
/*         <div class="float-left">*/
/*             <a class="btn" href="{{ path('becado') }}">*/
/*                 {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </a>*/
/*         </div>*/
/*         <div class="float-left">*/
/*             <form action="{{ path('becado_delete', { 'id': entity.id }) }}" method="post">*/
/*                 <input type="hidden" name="_method" value="DELETE" />*/
/*                 {{ form_widget(delete_form) }}*/
/*                 <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*             </form>*/
/*         </div>*/
/*             <!-- Trigger the modal with a button -->*/
/*     <button type="button" class="float-left btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Añadir Beca</button>*/
/*     */
/*     <!-- Modal -->*/
/*     <div id="myModal" class="modal fade" role="dialog" style="display: none">*/
/*         <div class="modal-dialog">*/
/* */
/*             <!-- Modal content-->*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                     <h4 class="modal-title">Añadir Beca</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ render( controller('BecaBundle:BecadoBeca:new', { 'id': entity })) }}*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     */
/*  </div>*/
/* {% endblock %}*/
