<?php

/* PersonaBundle:Becado:edit.html.twig */
class __TwigTemplate_51ad271db552b3a538d21c9678551f346903b3d1b54cd3722b7bca921491f648 extends Twig_Template
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
        // line 19
        echo "
    ";
        // line 20
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
        <fieldset style=\"border:1px solid; background-color: #3a8104; color: #000;\"><h4>Datos Personales</h4></fieldset>

        <table>
            <tbody>
                <tr>
                    <td>                        
                        ";
        // line 48
        echo "                        <div style=\"display: none;\">
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'row');
        echo "
                        </div>
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dni", array()), 'row');
        echo "
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
                </tr>
                <tr>
                    
                    <td>
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'row');
        echo "
                    </td>
                    
                    <td>
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono", array()), 'row');
        echo "
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>      

        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#domicilioCollapse\">
                            Domicilio</a>
                    </h4>
                </div>
                <div id=\"domicilioCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">

                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'errors');
        echo "
                        ";
        // line 87
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()))) {
            // line 88
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 89
                echo "                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                ";
                // line 95
                echo "                                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "localidad", array()), 'row');
                echo "

                                            </td>
                                            <td>
                                                ";
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "barrio", array()), 'label', array("label" => "Barrio"));
                echo "
                                                ";
                // line 100
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "barrio", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 103
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "calle", array()), 'label', array("label" => "Calle"));
                echo "
                                                ";
                // line 104
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "calle", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 107
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "numero", array()), 'label', array("label" => "número"));
                echo "
                                                ";
                // line 108
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "numero", array()), 'widget');
                echo "

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ";
                // line 114
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'label', array("label" => "Departamento"));
                echo "
                                                ";
                // line 115
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 118
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'label', array("label" => "Piso"));
                echo "
                                                ";
                // line 119
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 122
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'label', array("label" => "Edificio"));
                echo "
                                                ";
                // line 123
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'widget');
                echo "

                                            </td>
                                            <td>
                                                ";
                // line 127
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'label', array("label" => "Manzana"));
                echo "
                                                ";
                // line 128
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'widget');
                echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ";
                // line 133
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'label', array("label" => "Tira"));
                echo "
                                                ";
                // line 134
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 137
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'label', array("label" => "Parcela"));
                echo "
                                                ";
                // line 138
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 141
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'label', array("label" => "Quinta"));
                echo "
                                                ";
                // line 142
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'widget');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 145
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'label', array("label" => "UF/Casa"));
                echo "
                                                ";
                // line 146
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'widget');
                echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">

                                                ";
                // line 152
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'label', array("label" => "Referencias"));
                echo "
                                                ";
                // line 153
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'widget', array("attr" => array("class" => "span6")));
                echo "
                                                <div style=\"display: none;\">
                                                    ";
                // line 155
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "departamento", array()), 'row');
                echo "
                                                </div>
                                                <div style=\"display: none;\">
                                                    ";
                // line 158
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "latitude", array()), 'row');
                echo "
                                                </div>

                                            </td>
                                            <td>

                                                <div style=\"display: none;\">
                                                    ";
                // line 165
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
            // line 173
            echo "                        ";
        } else {
            // line 174
            echo "                            <div class=\"row-fluid\">
                                <div data-prototype=\"";
            // line 175
            echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid domicilio\">
                                    ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
                // line 177
                echo "                                        ";
                echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "                                </div>
                                <a href='#' class='btn add-domicilio-form'>
                                    <i class='icon-pencil'></i> Agregar Domicilio                                    
                                </a>
                            </div>

                        ";
        }
        // line 186
        echo "                    </div> 
                </div>
            </div>
        </div>
        <h4>Becas Asignadas</h4>
        ";
        // line 191
        $context["cont"] = 0;
        // line 192
        echo "        ";
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()))) {
            // line 193
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["becas"]) {
                // line 194
                echo "                ";
                $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : null) + 1);
                // line 195
                echo "                <span style=\"color: #387038\"><b>Beca Nro: ";
                echo twig_escape_filter($this->env, (isset($context["cont"]) ? $context["cont"] : null), "html", null, true);
                echo "</b></span><br/>
                               
                ";
                // line 197
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "beca", array()), 'row');
                echo "
                ";
                // line 198
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "fechaAlta", array()), 'row');
                echo "
                ";
                // line 199
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "fechaBaja", array()), 'row');
                echo "
                ";
                // line 200
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "activo", array()), 'row');
                echo "
                ";
                // line 201
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "detalles", array()), 'row');
                echo "
                <div style=\"display:none\">
                    ";
                // line 203
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becas"], "becado", array()), 'row');
                echo "
                </div> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "        ";
        } else {
            // line 207
            echo "            <span style=\"color: #cc0000;\">(*)La persona no tiene Becas Asignadas, para poder modificar la ficha, agregue una Beca</span>
        ";
        }
        // line 209
        echo "

        <h4>Movimiento/Afectación/Dependencia</h4>

        ";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array()), 'label', array("label" => "Mov. Social/Referente"));
        echo "
        ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array())), 'widget');
        echo " 
        ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array()), 'label', array("label" => "Lugar de Afectación"));
        echo "
        ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array())), 'widget');
        echo "
        ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'label', array("label" => "Dependencia"));
        echo "
        ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array())), 'widget');
        echo "

        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#formacionCollapse\">
                            Formación</a>
                    </h4>
                </div>
                <div id=\"formacionCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">
                        ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
        echo "
                        ";
        // line 231
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()))) {
            // line 232
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 233
                echo "
                                ";
                // line 234
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["formacion"], 'stylesheet');
                echo "
                                ";
                // line 235
                echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["formacion"]);
                echo "
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                ";
                // line 240
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "institucion", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 243
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "nivelEducativo", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 246
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "profesion", array()), 'row');
                echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ";
                // line 251
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "oficio", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 254
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "perfil", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 257
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
            // line 264
            echo "                        ";
        } else {
            // line 265
            echo "                            <div class=\"row-fluid\">
                                ";
            // line 266
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
            echo "
                                <div data-prototype=\"";
            // line 267
            echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid formacion\">
                                    ";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
                // line 269
                echo "                                        ";
                echo $context["macrosFormacion"]->getformacion($context["formac"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "                                </div>
                                <a href='#' class='btn add-formacion-form'>
                                    <i class='icon-pencil'></i> Agregar Formación
                                </a>
                            </div>  
                        ";
        }
        // line 277
        echo "                    </div>
                </div>
            </div>
        </div>
        <h4>Otros Datos</h4>
        ";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "presentaCertificacion", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaAlta", array()), 'row');
        echo "
        ";
        // line 283
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaBaja", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "activo", array()), 'row');
        echo "

        ";
        // line 286
        echo "        <div style=\"display: none\">
            ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 290
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\"><span class=\"divider-vertical\">
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </span></div>

        ";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 301
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"float-left\">
            <form action=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 309
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
        // line 326
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
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/token-input.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'stylesheet');
        echo "

    ";
    }

    // line 20
    public function block_javascript($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6486516_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516_jquery-1.9.0_1.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "6486516_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516_select2_2.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "6486516_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516_select2Becado_3.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "6486516_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516_select2Formacion_4.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "6486516_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516_agregarDomicilio_5.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "6486516_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516_agregarFormacion_6.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "6486516_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516_addForm_7.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "6486516_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516_deleteRow_8.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
        } else {
            // asset "6486516"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6486516") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6486516.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 33
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
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
        return array (  816 => 35,  810 => 33,  805 => 32,  798 => 33,  793 => 32,  787 => 33,  782 => 32,  776 => 33,  771 => 32,  765 => 33,  760 => 32,  754 => 33,  749 => 32,  743 => 33,  738 => 32,  732 => 33,  727 => 32,  721 => 33,  716 => 32,  711 => 21,  708 => 20,  701 => 16,  697 => 15,  693 => 14,  689 => 13,  684 => 12,  681 => 11,  661 => 326,  639 => 309,  635 => 308,  630 => 306,  623 => 302,  619 => 301,  611 => 296,  605 => 293,  599 => 290,  593 => 287,  590 => 286,  583 => 283,  577 => 282,  570 => 277,  562 => 271,  553 => 269,  549 => 268,  545 => 267,  541 => 266,  538 => 265,  535 => 264,  522 => 257,  516 => 254,  510 => 251,  502 => 246,  496 => 243,  490 => 240,  482 => 235,  478 => 234,  475 => 233,  470 => 232,  468 => 231,  464 => 230,  449 => 218,  445 => 217,  441 => 216,  437 => 215,  433 => 214,  429 => 213,  423 => 209,  419 => 207,  416 => 206,  407 => 203,  402 => 201,  398 => 200,  394 => 199,  390 => 198,  386 => 197,  380 => 195,  377 => 194,  372 => 193,  369 => 192,  367 => 191,  360 => 186,  351 => 179,  342 => 177,  338 => 176,  334 => 175,  331 => 174,  328 => 173,  314 => 165,  304 => 158,  298 => 155,  293 => 153,  289 => 152,  280 => 146,  276 => 145,  270 => 142,  266 => 141,  260 => 138,  256 => 137,  250 => 134,  246 => 133,  238 => 128,  234 => 127,  227 => 123,  223 => 122,  217 => 119,  213 => 118,  207 => 115,  203 => 114,  194 => 108,  190 => 107,  184 => 104,  180 => 103,  174 => 100,  170 => 99,  162 => 95,  156 => 89,  151 => 88,  149 => 87,  145 => 86,  124 => 68,  117 => 64,  108 => 58,  104 => 57,  98 => 54,  92 => 51,  87 => 49,  84 => 48,  74 => 40,  67 => 38,  61 => 36,  59 => 20,  56 => 19,  54 => 11,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
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
/*         <link href="{{ asset('bundles/persona/css/token-input.css') }}" rel="stylesheet" />*/
/*         {{ form_stylesheet(edit_form) }}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Becado.js'*/
/*             '@FormacionBundle/Resources/public/js/select2Formacion.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarDomicilio.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarFormacion.js'*/
/*             '@PersonaBundle/Resources/public/js/addForm.js'  */
/*             '@PersonaBundle/Resources/public/js/deleteRow.js'*/
/* */
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {{ form_javascript(edit_form) }}*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*     <h2 style="color: #0044cc">{{ 'views.edit.edit'|trans({'%entity%': 'Becado'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/* */
/*     <form class="well" action="{{ path('becado_update', { 'id': entity.id  }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*         <input type="hidden" name="_method" value="PUT" />*/
/*         {{ form_start(edit_form) }}*/
/*         <fieldset style="border:1px solid; background-color: #3a8104; color: #000;"><h4>Datos Personales</h4></fieldset>*/
/* */
/*         <table>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td>                        */
/*                         {#PONGO ESTOS CAMPOS A HIDDEN YA QUE SI USO FORM_REST EN FORM END, BORRA TAMBIÉN LAS ENTITY#}*/
/*                         <div style="display: none;">*/
/*                             {{ form_row(edit_form.id) }}*/
/*                         </div>*/
/*                         {{ form_row(edit_form.dni) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.apellidos) }}                        */
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_label(edit_form.nombres) }}*/
/*                         {{ form_widget(edit_form.nombres) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     */
/*                     <td>*/
/*                         {{ form_row(edit_form.email) }}*/
/*                     </td>*/
/*                     */
/*                     <td>*/
/*                         {{ form_row(edit_form.telefono) }}*/
/*                     </td>*/
/*                     <td></td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>      */
/* */
/*         <div class="panel-group" id="accordion">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h4 class="panel-title">*/
/*                         <a data-toggle="collapse" data-parent="#accordion" href="#domicilioCollapse">*/
/*                             Domicilio</a>*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div id="domicilioCollapse" class="panel-collapse collapse in">*/
/*                     <div class="panel-body">*/
/* */
/*                         {{ form_errors(edit_form.domicilio) }}*/
/*                         {% if edit_form.domicilio is not empty %}*/
/*                             {% for domicilio in edit_form.domicilio %}*/
/*                                 <table>*/
/*                                     <tbody>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 {#{{ form_label(domicilio.localidad, 'Localidad') }}*/
/*                                                 {{ form_widget(domicilio.localidad) }}#}*/
/*                                                 {{ form_row(domicilio.localidad) }}*/
/* */
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
/* */
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
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
/* */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{ form_label(domicilio.manzana, 'Manzana') }}*/
/*                                                 {{ form_widget(domicilio.manzana) }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         <tr>*/
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
/*                                         <tr>*/
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
/*         <h4>Becas Asignadas</h4>*/
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
/* */
/* */
/*         <h4>Movimiento/Afectación/Dependencia</h4>*/
/* */
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
/*                     <h4 class="panel-title">*/
/*                         <a data-toggle="collapse" data-parent="#accordion" href="#formacionCollapse">*/
/*                             Formación</a>*/
/*                     </h4>*/
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
/*                                         <tr>*/
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
/*                                         <tr>*/
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
/*         <h4>Otros Datos</h4>*/
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
