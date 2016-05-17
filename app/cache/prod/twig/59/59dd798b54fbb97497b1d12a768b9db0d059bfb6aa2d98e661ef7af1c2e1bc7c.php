<?php

/* PersonaBundle:Becado:edit.html.twig */
class __TwigTemplate_8b76ae2aae29297e8b9db70aea1bf657b6f9ed29060ac8281b7e7270ba50dcad extends Twig_Template
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
        // line 36
        echo "    <h2 style=\"color: #0044cc\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>

    <form class=\"well\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 40
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
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dni", array()), 'label');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dni", array()), 'widget', array("attr" => array("style" => "width:100px")));
        echo "
                        <a class=\"btn btn-primary\" onclick=\"ajaxDniEdicion();\" href=\"#\">Buscar</a>
                    </td>
                    <td>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos", array()), 'row');
        echo "                        
                    </td>
                    <td>
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombres", array()), 'label');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombres", array()), 'widget');
        echo "
                    </td>
                    <td>
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'row');
        echo "
                        ";
        // line 66
        echo "                        <div style=\"display: none;\">
                            ";
        // line 67
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
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'errors');
        echo "
                        ";
        // line 89
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()))) {
            // line 90
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 91
                echo "                                <table>
                                    <tbody>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 95
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "localidad", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 98
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "barrio", array()), 'label', array("label" => "Barrio"));
                echo "
                                                ";
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "barrio", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 102
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "calle", array()), 'label', array("label" => "Calle"));
                echo "
                                                ";
                // line 103
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "calle", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 106
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "numero", array()), 'label', array("label" => "número"));
                echo "
                                                ";
                // line 107
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "numero", array()), 'widget');
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 112
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'label', array("label" => "Departamento"));
                echo "
                                                ";
                // line 113
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 116
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'label', array("label" => "Piso"));
                echo "
                                                ";
                // line 117
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 120
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'label', array("label" => "Edificio"));
                echo "
                                                ";
                // line 121
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 124
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'label', array("label" => "Manzana"));
                echo "
                                                ";
                // line 125
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'widget');
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 130
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'label', array("label" => "Tira"));
                echo "
                                                ";
                // line 131
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 134
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'label', array("label" => "Parcela"));
                echo "
                                                ";
                // line 135
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 138
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'label', array("label" => "Quinta"));
                echo "
                                                ";
                // line 139
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 142
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'label', array("label" => "UF/Casa"));
                echo "
                                                ";
                // line 143
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'widget');
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td colspan=\"3\">

                                                ";
                // line 149
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'label', array("label" => "Referencias"));
                echo "
                                                ";
                // line 150
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'widget', array("attr" => array("class" => "span6")));
                echo "
                                                <div style=\"display: none;\">
                                                    ";
                // line 152
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "departamento", array()), 'row');
                echo "
                                                </div>
                                                <div style=\"display: none;\">
                                                    ";
                // line 155
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "latitude", array()), 'row');
                echo "
                                                </div>

                                            </td>
                                            <td>

                                                <div style=\"display: none;\">
                                                    ";
                // line 162
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
            // line 170
            echo "                        ";
        } else {
            // line 171
            echo "                            <div class=\"row-fluid\">
                                <div data-prototype=\"";
            // line 172
            echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid domicilio\">
                                    ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
                // line 174
                echo "                                        ";
                echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                                </div>
                                <a href='#' class='btn add-domicilio-form'>
                                    <i class='icon-pencil'></i> Agregar Domicilio                                    
                                </a>
                            </div>

                        ";
        }
        // line 183
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
        // line 192
        $context["cont"] = 0;
        // line 193
        echo "        ";
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()))) {
            // line 194
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["becas"]) {
                // line 195
                echo "                ";
                $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : null) + 1);
                // line 196
                echo "                <span style=\"color: #387038\"><b>Beca Nro: ";
                echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : null), "html", null, true);
                echo "</b></span><br/>
                               
                ";
                // line 198
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "beca", array()), 'row');
                echo "
                ";
                // line 199
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "fechaAlta", array()), 'row');
                echo "
                ";
                // line 200
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "fechaBaja", array()), 'row');
                echo "
                ";
                // line 201
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "activo", array()), 'row');
                echo "
                ";
                // line 202
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "detalles", array()), 'row');
                echo "
                <div style=\"display:none\">
                    ";
                // line 204
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "becado", array()), 'row');
                echo "
                </div> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "        ";
        } else {
            // line 208
            echo "            <span style=\"color: #cc0000;\">(*)La persona no tiene Becas Asignadas, para poder modificar la ficha, agregue una Beca</span>
        ";
        }
        // line 210
        echo "        
        <fieldset style=\"border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;\">
            <h4 style=\"line-height: 12px;\">
                Movimiento/Afectación/Dependencia
            </h4>
        </fieldset>
        
        ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array()), 'label', array("label" => "Mov. Social/Referente"));
        echo "
        ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array())), 'widget');
        echo " 
        ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array()), 'label', array("label" => "Lugar de Afectación"));
        echo "
        ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array())), 'widget');
        echo "
        ";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'label', array("label" => "Dependencia"));
        echo "
        ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array())), 'widget');
        echo "

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
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
        echo "
                        ";
        // line 238
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()))) {
            // line 239
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 240
                echo "
                                ";
                // line 241
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["formacion"], 'stylesheet');
                echo "
                                ";
                // line 242
                echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["formacion"]);
                echo "
                                <table>
                                    <tbody>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 247
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "institucion", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 250
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "nivelEducativo", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 253
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "profesion", array()), 'row');
                echo "
                                            </td>
                                        </tr>
                                        <tr class=\"form-horizontal\">
                                            <td>
                                                ";
                // line 258
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "oficio", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 261
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "perfil", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 264
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "descripcion", array()), 'row');
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
            // line 271
            echo "                        ";
        } else {
            // line 272
            echo "                            <div class=\"row-fluid\">
                                ";
            // line 273
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
            echo "
                                <div data-prototype=\"";
            // line 274
            echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid formacion\">
                                    ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
                // line 276
                echo "                                        ";
                echo $context["macrosFormacion"]->getformacion($context["formac"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            echo "                                </div>
                                <a href='#' class='btn add-formacion-form'>
                                    <i class='icon-pencil'></i> Agregar Formación
                                </a>
                            </div>  
                        ";
        }
        // line 284
        echo "                    </div>
                </div>
            </div>
        </div>
        <fieldset style=\"border:1px solid; background-color: #3a8104; color:#D3D3D3; height: 30px;\">
            <h4 style=\"line-height: 12px;\">
                Otros Datos
            </h4>
        </fieldset>
        ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "presentaCertificacion", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaAlta", array()), 'row');
        echo "
        ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaBaja", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "activo", array()), 'row');
        echo "

        ";
        // line 297
        echo "        <div style=\"display: none\">
            ";
        // line 298
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 301
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\"><span class=\"divider-vertical\">
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </span></div>

        ";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 315
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"float-left\">
            <form action=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 322
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 323
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
        // line 340
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
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c2447d5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_jquery-ui_1.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_agregarDomicilio_2.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_agregarFormacion_3.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_addForm_4.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_deleteRow_5.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_select2_6.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_select2Becado_7.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_dalert.jquery.min_8.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "c2447d5_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_ajax-functions_9.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "c2447d5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5.js");
            // line 30
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 35
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
        return array (  923 => 35,  917 => 33,  913 => 32,  909 => 31,  904 => 30,  897 => 33,  893 => 32,  889 => 31,  884 => 30,  878 => 33,  874 => 32,  870 => 31,  865 => 30,  859 => 33,  855 => 32,  851 => 31,  846 => 30,  840 => 33,  836 => 32,  832 => 31,  827 => 30,  821 => 33,  817 => 32,  813 => 31,  808 => 30,  802 => 33,  798 => 32,  794 => 31,  789 => 30,  783 => 33,  779 => 32,  775 => 31,  770 => 30,  764 => 33,  760 => 32,  756 => 31,  751 => 30,  745 => 33,  741 => 32,  737 => 31,  732 => 30,  727 => 19,  724 => 18,  718 => 15,  714 => 14,  710 => 13,  705 => 12,  702 => 11,  682 => 340,  660 => 323,  656 => 322,  651 => 320,  644 => 316,  640 => 315,  632 => 310,  626 => 307,  620 => 304,  614 => 301,  608 => 298,  605 => 297,  598 => 294,  592 => 293,  581 => 284,  573 => 278,  564 => 276,  560 => 275,  556 => 274,  552 => 273,  549 => 272,  546 => 271,  533 => 264,  527 => 261,  521 => 258,  513 => 253,  507 => 250,  501 => 247,  493 => 242,  489 => 241,  486 => 240,  481 => 239,  479 => 238,  475 => 237,  457 => 222,  453 => 221,  449 => 220,  445 => 219,  441 => 218,  437 => 217,  428 => 210,  424 => 208,  421 => 207,  412 => 204,  407 => 202,  403 => 201,  399 => 200,  395 => 199,  391 => 198,  385 => 196,  382 => 195,  377 => 194,  374 => 193,  372 => 192,  361 => 183,  352 => 176,  343 => 174,  339 => 173,  335 => 172,  332 => 171,  329 => 170,  315 => 162,  305 => 155,  299 => 152,  294 => 150,  290 => 149,  281 => 143,  277 => 142,  271 => 139,  267 => 138,  261 => 135,  257 => 134,  251 => 131,  247 => 130,  239 => 125,  235 => 124,  229 => 121,  225 => 120,  219 => 117,  215 => 116,  209 => 113,  205 => 112,  197 => 107,  193 => 106,  187 => 103,  183 => 102,  177 => 99,  173 => 98,  167 => 95,  161 => 91,  156 => 90,  154 => 89,  150 => 88,  126 => 67,  123 => 66,  119 => 64,  113 => 61,  107 => 58,  103 => 57,  97 => 54,  90 => 50,  86 => 49,  74 => 40,  67 => 38,  61 => 36,  59 => 18,  56 => 17,  54 => 11,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
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
/*                         {{ form_label(edit_form.dni) }}*/
/*                         {{ form_widget(edit_form.dni, {'attr':{'style':'width:100px'}}) }}*/
/*                         <a class="btn btn-primary" onclick="ajaxDniEdicion();" href="#">Buscar</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.apellidos) }}                        */
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_label(edit_form.nombres) }}*/
/*                         {{ form_widget(edit_form.nombres) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.telefono) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.email) }}*/
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
/*                                                 {{ form_row(domicilio.localidad) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.barrio, 'Barrio') }}*/
/*                                                 {{ form_widget(domicilio.barrio) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.calle, 'Calle') }}*/
/*                                                 {{ form_widget(domicilio.calle) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.numero, 'número') }}*/
/*                                                 {{ form_widget(domicilio.numero) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.dpto, 'Departamento') }}*/
/*                                                 {{ form_widget(domicilio.dpto) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.piso, 'Piso') }}*/
/*                                                 {{ form_widget(domicilio.piso) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.edificio, 'Edificio') }}*/
/*                                                 {{ form_widget(domicilio.edificio) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.manzana, 'Manzana') }}*/
/*                                                 {{ form_widget(domicilio.manzana) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.tira, 'Tira') }}*/
/*                                                 {{ form_widget(domicilio.tira) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.parcela, 'Parcela') }}*/
/*                                                 {{ form_widget(domicilio.parcela) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.quinta, 'Quinta') }}*/
/*                                                 {{ form_widget(domicilio.quinta) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.unidadFuncional, 'UF/Casa') }}*/
/*                                                 {{ form_widget(domicilio.unidadFuncional) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td colspan="3">*/
/* */
/*                                                 {{ form_label(domicilio.referencias, 'Referencias') }}*/
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
/*         {% set cont=0 %}*/
/*         {% if edit_form.becadobeca is not empty %}*/
/*             {% for becas in edit_form.becadobeca %}*/
/*                 {% set cont=cont + 1 %}*/
/*                 <span style="color: #387038"><b>Beca Nro: {{ cont }}</b></span><br/>*/
/*                                */
/*                 {{ form_row(becas.beca) }}*/
/*                 {{ form_row(becas.fechaAlta) }}*/
/*                 {{ form_row(becas.fechaBaja) }}*/
/*                 {{ form_row(becas.activo) }}*/
/*                 {{ form_row(becas.detalles) }}*/
/*                 <div style="display:none">*/
/*                     {{ form_row(becas.becado) }}*/
/*                 </div> */
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
/*         */
/*         {{ form_label(edit_form.referente, 'Mov. Social/Referente') }}*/
/*         {{ form_widget(edit_form.referente | e) }} */
/*         {{ form_label(edit_form.lugarAfectacion, 'Lugar de Afectación') }}*/
/*         {{ form_widget(edit_form.lugarAfectacion | e) }}*/
/*         {{ form_label(edit_form.dependencia, 'Dependencia') }}*/
/*         {{ form_widget(edit_form.dependencia | e) }}*/
/* */
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
/* */
/*                                 {{ form_stylesheet(formacion) }}*/
/*                                 {{ form_javascript(formacion) }}*/
/*                                 <table>*/
/*                                     <tbody>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.institucion) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.nivelEducativo) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.profesion) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr class="form-horizontal">*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.oficio) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.perfil) }}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_row(formacion.descripcion) }}*/
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
/*         {{ form_row(edit_form.presentaCertificacion) }} {{ form_row(edit_form.fechaAlta) }}*/
/*         {{ form_row(edit_form.fechaBaja) }} {{ form_row(edit_form.activo) }}*/
/* */
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
/*     </div>*/
/* */
/*     */
/* */
/* */
/* {% endblock %}*/
