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
        <fieldset style=\"border:1px solid; background-color: #3a8104; color: #D3D3D3; height: 30px;\">
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
                        ";
        // line 57
        echo "                        <a class=\"btn btn-primary\" onclick=\"ajaxDniEdicion();\" href=\"#\">Buscar</a>
                    </td>
                    <td>
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos", array()), 'row', array("label" => null, "label_attr" => array("style" => "font-weight:bold;")));
        // line 61
        echo "
                    </td>
                    <td>
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombres", array()), 'row', array("label" => null, "label_attr" => array("style" => "font-weight:bold;")));
        // line 65
        echo "
                    </td>
                    <td>
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono", array()), 'row', array("label" => "Teléfono", "label_attr" => array("style" => "font-weight:bold;")));
        // line 69
        echo "
                    </td>
                    <td>
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'row', array("label" => null, "label_attr" => array("style" => "font-weight:bold;")));
        // line 73
        echo "
                        ";
        // line 75
        echo "                        <div style=\"display: none;\">
                            ";
        // line 76
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
                    <fieldset style=\"border:1px solid; background-color: #3a8104; color: #000; height: 30px;\">
                        <h4 style=\"line-height: 12px;\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#domicilioCollapse\" style=\"color: #D3D3D3;\">
                                Domicilio
                            </a>
                        </h4>
                    </fieldset>
                </div>
                <div id=\"domicilioCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">

                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'errors');
        echo "
                        ";
        // line 98
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()))) {
            // line 99
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 100
                echo "                                <table>
                                    <tbody>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 104
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "localidad", array()), 'row', array("label" => null, "label_attr" => array("style" => "font-weight:bold;")));
                // line 105
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 108
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "barrio", array()), 'row', array("label" => "Barrio", "label_attr" => array("style" => "font-weight:bold;")));
                // line 109
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 112
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "calle", array()), 'row', array("label" => "Calle", "label_attr" => array("style" => "font-weight:bold;")));
                // line 113
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 116
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "numero", array()), 'row', array("label" => "Nº", "label_attr" => array("style" => "font-weight:bold;")));
                // line 117
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 122
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'row', array("label" => "Dpto", "label_attr" => array("style" => "font-weight:bold;")));
                // line 123
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 126
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'row', array("label" => "Piso", "label_attr" => array("style" => "font-weight:bold;")));
                // line 127
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 130
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'row', array("label" => "Edificio", "label_attr" => array("style" => "font-weight:bold;")));
                // line 131
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 134
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'row', array("label" => "Mzna", "label_attr" => array("style" => "font-weight:bold;")));
                // line 135
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 140
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'row', array("label" => "Tira", "label_attr" => array("style" => "font-weight:bold;")));
                // line 141
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 144
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'row', array("label" => "Parcela", "label_attr" => array("style" => "font-weight:bold;")));
                // line 145
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 148
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'row', array("label" => "Quinta", "label_attr" => array("style" => "font-weight:bold;")));
                // line 149
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 152
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "UF/Casa"));
                echo "
                                                ";
                // line 153
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'widget');
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td colspan=\"3\">

                                                ";
                // line 159
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Referencias"));
                echo "
                                                ";
                // line 160
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'widget', array("attr" => array("class" => "span6")));
                echo "
                                                <div style=\"display: none;\">
                                                    ";
                // line 162
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "departamento", array()), 'row');
                echo "
                                                </div>
                                                <div style=\"display: none;\">
                                                    ";
                // line 165
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "latitude", array()), 'row');
                echo "
                                                </div>

                                            </td>
                                            <td>

                                                <div style=\"display: none;\">
                                                    ";
                // line 172
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
            // line 180
            echo "                        ";
        } else {
            // line 181
            echo "                            <div class=\"row-fluid\">
                                <div data-prototype=\"";
            // line 182
            echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid domicilio\">
                                    ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
                // line 184
                echo "                                        ";
                echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                                </div>
                                <a href='#' class='btn add-domicilio-form'>
                                    <i class='icon-pencil'></i> Agregar Domicilio                                    
                                </a>
                            </div>

                        ";
        }
        // line 193
        echo "                    </div> 
                </div>
            </div>
        </div>
        <fieldset style=\"border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;\">
            <h4 style=\"line-height: 12px;\">
                Becas Asignadas
            </h4>
        </fieldset>
                    
        ";
        // line 203
        $context["cont"] = 0;
        // line 204
        echo "        ";
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()))) {
            // line 205
            echo "            
            ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["becas"]) {
                echo "                
                ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["becas"], "beca", array()), "vars", array()), "choices", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                    // line 208
                    echo "                    ";
                    if (($this->getAttribute($context["choice"], "value", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["becas"], "beca", array()), "vars", array()), "value", array()))) {
                        // line 209
                        echo "                        ";
                        $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : null) + 1);
                        // line 210
                        echo "                        <br/><span style=\"color: #387038\"><b>Beca Nro: ";
                        echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : null), "html", null, true);
                        echo "</b></span>
                        ";
                        // line 211
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "beca", array()), 'widget', array("attr" => array("style" => "width:50%;")));
                        echo "
                    ";
                    }
                    // line 213
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "   
                ";
                // line 214
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["becas"], "becaVulnerable", array()), "vars", array()), "choices", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                    // line 215
                    echo "                    ";
                    if (($this->getAttribute($context["choice"], "value", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["becas"], "becaVulnerable", array()), "vars", array()), "value", array()))) {
                        // line 216
                        echo "                        ";
                        $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : null) + 1);
                        // line 217
                        echo "                        <br/><span style=\"color: #387038\"><b>Beca Nro: ";
                        echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : null), "html", null, true);
                        echo "</b></span>
                        ";
                        // line 218
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "becaVulnerable", array()), 'widget', array("attr" => array("style" => "width:50%;")));
                        echo "
                    ";
                    }
                    // line 220
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "                
                
                <div style=\"display:none\">
                    ";
                // line 223
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "becado", array()), 'row');
                echo "
                </div>
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "        ";
        } else {
            // line 228
            echo "            <span style=\"color: #cc0000;\">(*)La persona no tiene Becas Asignadas, para poder modificar la ficha, agregue una Beca</span>
        ";
        }
        // line 230
        echo "        
        <fieldset style=\"border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;\">
            <h4 style=\"line-height: 12px;\">
                Movimiento/Afectación/Dependencia
            </h4>
        </fieldset>
        <table>
            <tbody>
                <tr class=\"form-horizontal\">
                    <td>
                        ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Mov. Social/Referente"));
        echo "
                        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array())), 'widget', array("attr" => array("style" => "width:100%;")));
        echo " 
                    </td>
                    <td>
                        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Lugar de Afectación"));
        echo "
                        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array())), 'widget', array("attr" => array("style" => "width:100%;")));
        echo "
                    </td>
                    <td>
                        ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'label', array("label_attr" => array("style" => "font-weight:bold;"), "label" => "Dependencia"));
        echo "
                        ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array())), 'widget', array("attr" => array("style" => "width:100%;")));
        echo "
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <fieldset style=\"border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;\">
                        <h4 class=\"panel-title\" style=\"line-height: 12px;\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#formacionCollapse\"  style=\"color:#D3D3D3;\">
                                Formación
                            </a>
                        </h4>
                    </fieldset>
                </div>
                <div id=\"formacionCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">
                        ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
        echo "
                        ";
        // line 269
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()))) {
            // line 270
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 271
                echo "                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["formacion"], 'stylesheet');
                echo "
                                ";
                // line 272
                echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["formacion"]);
                echo "
                                <table>
                                    <tbody>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 277
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "institucion", array()), 'row', array("label" => "Institución", "label_attr" => array("style" => "font-weight:bold;")));
                // line 278
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 281
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "nivelEducativo", array()), 'row', array("label" => "Nivel Educativo", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 283
                echo "
                                                                        
                                            </td>
                                            <td>
                                                ";
                // line 287
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "profesion", array()), 'row', array("label" => "Profesión", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 289
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 294
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "oficio", array()), 'row', array("label" => "Oficio", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 296
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 299
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "perfil", array()), 'row', array("label" => "Perfil", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 301
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 304
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "descripcion", array()), 'row', array("label" => "Descripción", "label_attr" => array("style" => "font-weight:bold;"), "attr" => array("style" => "width:100%;")));
                // line 306
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
            // line 313
            echo "                        ";
        } else {
            // line 314
            echo "                            <div class=\"row-fluid\">
                                ";
            // line 315
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
            echo "
                                <div data-prototype=\"";
            // line 316
            echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid formacion\">
                                    ";
            // line 317
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
                // line 318
                echo "                                        ";
                echo $context["macrosFormacion"]->getformacion($context["formac"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            echo "                                </div>
                                <a href='#' class='btn add-formacion-form'>
                                    <i class='icon-pencil'></i> Agregar Formación
                                </a>
                            </div>  
                        ";
        }
        // line 326
        echo "                    </div>
                </div>
            </div>
        </div>
        <fieldset style=\"border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;\">
            <h4 style=\"line-height: 12px;\">
                Otros Datos
            </h4>
        </fieldset>
        <table>
            <tbody>
                <tr>
                    <td>
                        ";
        // line 339
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaAlta", array()), 'row', array("label" => "Fecha Alta", "label_attr" => array("style" => "font-weight:bold;")));
        // line 340
        echo "
                    </td>
                    <td>
                        ";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaBaja", array()), 'row', array("label" => "Fecha Baja", "label_attr" => array("style" => "font-weight:bold;")));
        // line 344
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 349
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "presentaCertificacion", array()), 'row', array("label" => "¿Presenta Certificación?", "label_attr" => array("style" => "font-weight:bold;")));
        // line 350
        echo "                        
                    </td>
                    <td>
                        ";
        // line 353
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "activo", array()), 'row', array("label" => "¿Activo?", "label_attr" => array("style" => "font-weight:bold;")));
        // line 354
        echo "
                    </td>
                </tr>
            </tbody>                        
        </table>
        
        ";
        // line 361
        echo "        <div style=\"display: none\">
            ";
        // line 362
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 365
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\"><span class=\"divider-vertical\">
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </span></div>

        ";
        // line 374
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 379
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"float-left\">
            <form action=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 386
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 387
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
        // line 404
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
        return array (  978 => 38,  972 => 36,  968 => 35,  964 => 34,  959 => 33,  952 => 36,  948 => 35,  944 => 34,  939 => 33,  933 => 36,  929 => 35,  925 => 34,  920 => 33,  914 => 36,  910 => 35,  906 => 34,  901 => 33,  895 => 36,  891 => 35,  887 => 34,  882 => 33,  876 => 36,  872 => 35,  868 => 34,  863 => 33,  857 => 36,  853 => 35,  849 => 34,  844 => 33,  838 => 36,  834 => 35,  830 => 34,  825 => 33,  819 => 36,  815 => 35,  811 => 34,  806 => 33,  800 => 36,  796 => 35,  792 => 34,  787 => 33,  783 => 22,  779 => 21,  775 => 20,  770 => 19,  767 => 18,  761 => 15,  757 => 14,  753 => 13,  748 => 12,  745 => 11,  729 => 404,  707 => 387,  703 => 386,  698 => 384,  691 => 380,  687 => 379,  679 => 374,  673 => 371,  667 => 368,  661 => 365,  655 => 362,  652 => 361,  644 => 354,  642 => 353,  637 => 350,  635 => 349,  628 => 344,  626 => 343,  621 => 340,  619 => 339,  604 => 326,  596 => 320,  587 => 318,  583 => 317,  579 => 316,  575 => 315,  572 => 314,  569 => 313,  557 => 306,  555 => 304,  550 => 301,  548 => 299,  543 => 296,  541 => 294,  534 => 289,  532 => 287,  526 => 283,  524 => 281,  519 => 278,  517 => 277,  509 => 272,  504 => 271,  499 => 270,  497 => 269,  493 => 268,  471 => 249,  467 => 248,  461 => 245,  457 => 244,  451 => 241,  447 => 240,  435 => 230,  431 => 228,  428 => 227,  418 => 223,  408 => 220,  403 => 218,  398 => 217,  395 => 216,  392 => 215,  388 => 214,  380 => 213,  375 => 211,  370 => 210,  367 => 209,  364 => 208,  360 => 207,  354 => 206,  351 => 205,  348 => 204,  346 => 203,  334 => 193,  325 => 186,  316 => 184,  312 => 183,  308 => 182,  305 => 181,  302 => 180,  288 => 172,  278 => 165,  272 => 162,  267 => 160,  263 => 159,  254 => 153,  250 => 152,  245 => 149,  243 => 148,  238 => 145,  236 => 144,  231 => 141,  229 => 140,  222 => 135,  220 => 134,  215 => 131,  213 => 130,  208 => 127,  206 => 126,  201 => 123,  199 => 122,  192 => 117,  190 => 116,  185 => 113,  183 => 112,  178 => 109,  176 => 108,  171 => 105,  169 => 104,  163 => 100,  158 => 99,  156 => 98,  152 => 97,  128 => 76,  125 => 75,  122 => 73,  120 => 72,  115 => 69,  113 => 68,  108 => 65,  106 => 64,  101 => 61,  99 => 60,  94 => 57,  90 => 53,  86 => 52,  74 => 43,  67 => 41,  61 => 39,  59 => 18,  56 => 17,  54 => 11,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
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
/*         <fieldset style="border:1px solid; background-color: #3a8104; color: #D3D3D3; height: 30px;">*/
/*             <h4 style=" line-height: 12px;">Datos Personales</h4>*/
/*         </fieldset>*/
/* */
/*         <table>*/
/*             <tbody>*/
/*                 <tr class="form-horizontal">*/
/*                     <td>                        */
/*                         {{ form_label(edit_form.dni,'Dni',{'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                         {{ form_widget(edit_form.dni, {'attr':{'style':'width:100px'}}) }}*/
/*                         {#{{ form_row(edit_form.dni, {'label':'Dni', */
/*                                                      'label_attr':{'style':'font-weight:bold;'},*/
/*                                                      'attr':{'style':'width:100px;'}}) }}#}*/
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
/*                     <fieldset style="border:1px solid; background-color: #3a8104; color: #000; height: 30px;">*/
/*                         <h4 style="line-height: 12px;">*/
/*                             <a data-toggle="collapse" data-parent="#accordion" href="#domicilioCollapse" style="color: #D3D3D3;">*/
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
/*         <fieldset style="border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;">*/
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
/*         <fieldset style="border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;">*/
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
/*                     <td>*/
/*                         {{ form_label(edit_form.lugarAfectacion, 'Lugar de Afectación', {'label_attr':{'style':'font-weight:bold;'}}) }}*/
/*                         {{ form_widget(edit_form.lugarAfectacion | e, {'attr':{'style':'width:100%;'}}) }}*/
/*                     </td>*/
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
/*                     <fieldset style="border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;">*/
/*                         <h4 class="panel-title" style="line-height: 12px;">*/
/*                             <a data-toggle="collapse" data-parent="#accordion" href="#formacionCollapse"  style="color:#D3D3D3;">*/
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
/*         <fieldset style="border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;">*/
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
