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
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('javascript', $context, $blocks);
        // line 35
        echo "    <h2 style=\"color: #0044cc\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>

    <form class=\"well\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        <table>
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan=\"3\"><h4>Datos Personales</h4></td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
                        ";
        // line 53
        echo "                        <div style=\"display: none;\">
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'row');
        echo "
                        </div>
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dni", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos", array()), 'row');
        echo "                        
                    </td>
                    <td>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombres", array()), 'row');
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'row');
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
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'errors');
        echo "
                        ";
        // line 88
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()))) {
            // line 89
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 90
                echo "                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            ";
                // line 94
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "localidad", array()), 'label', array("label" => "Localidad"));
                echo "
                                            ";
                // line 95
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "localidad", array()), 'widget');
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
                                    <tr>
                                        <td>
                                            ";
                // line 113
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'label', array("label" => "Departamento"));
                echo "
                                            ";
                // line 114
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 117
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'label', array("label" => "Piso"));
                echo "
                                            ";
                // line 118
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 121
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'label', array("label" => "Edificio"));
                echo "
                                            ";
                // line 122
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'widget');
                echo "
                                            
                                        </td>
                                        <td>
                                            ";
                // line 126
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'label', array("label" => "Manzana"));
                echo "
                                            ";
                // line 127
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'widget');
                echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
                // line 132
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'label', array("label" => "Tira"));
                echo "
                                            ";
                // line 133
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 136
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'label', array("label" => "Parcela"));
                echo "
                                            ";
                // line 137
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 140
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'label', array("label" => "Quinta"));
                echo "
                                            ";
                // line 141
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 144
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'label', array("label" => "UF/Casa"));
                echo "
                                            ";
                // line 145
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'widget');
                echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"3\">
                                            
                                            ";
                // line 151
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'label', array("label" => "Referencias"));
                echo "
                                            ";
                // line 152
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'widget', array("attr" => array("class" => "span6")));
                echo "
                                            <div style=\"display: none;\">
                                            ";
                // line 154
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "departamento", array()), 'row');
                echo "
                                            </div>
                                            <div style=\"display: none;\">
                                                ";
                // line 157
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "latitude", array()), 'row');
                echo "
                                            </div>
                                       
                                        </td>
                                        <td>
                                            
                                            <div style=\"display: none;\">
                                                ";
                // line 164
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
            // line 172
            echo "                        ";
        } else {
            // line 173
            echo "                            <div class=\"row-fluid\">
                                <div data-prototype=\"";
            // line 174
            echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid domicilio\">
                                    ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
                // line 176
                echo "                                        ";
                echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                                </div>
                                <a href='#' class='btn add-domicilio-form'>
                                    <i class='icon-pencil'></i> Agregar Domicilio                                    
                                </a>
                            </div>
                            
                        ";
        }
        // line 185
        echo "                    </div> 
                </div>
            </div>
        </div>


        ";
        // line 191
        if ( !(null === $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()))) {
            // line 192
            echo "            <div >
                <div class=\"float-left\">
                    <a class=\"btn\" href=\"";
            // line 194
            echo $this->env->getExtension('routing')->getPath("becadobeca");
            echo "\">
                        Editar Beca
                    </a>
                </div>
            </div>
        ";
        }
        // line 200
        echo "        <h4>Movimiento/Afectación/Dependencia</h4>

        ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array()), 'label', array("label" => "Mov. Social/Referente"));
        echo "
        ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array())), 'widget');
        echo " 
        ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array()), 'label', array("label" => "Lugar de Afectación"));
        echo "
        ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array())), 'widget');
        echo "
        ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'label', array("label" => "Dependencia"));
        echo "
        ";
        // line 207
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
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
        echo "
                        ";
        // line 220
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()))) {
            // line 221
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 222
                echo "                                
                                            ";
                // line 223
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["formacion"], 'stylesheet');
                echo "
                                            ";
                // line 224
                echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["formacion"]);
                echo "
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                               
                                                ";
                // line 230
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "institucion", array()), 'row');
                echo "
                                                
                                            </td>
                                            <td>
                                                ";
                // line 234
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "nivelEducativo", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 237
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "profesion", array()), 'row');
                echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ";
                // line 242
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "oficio", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 245
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "perfil", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 248
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
            // line 255
            echo "                        ";
        } else {
            // line 256
            echo "                            <div class=\"row-fluid\">
                                ";
            // line 257
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
            echo "
                                <div data-prototype=\"";
            // line 258
            echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid formacion\">
                                    ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
                // line 260
                echo "                                        ";
                echo $context["macrosFormacion"]->getformacion($context["formac"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "                                </div>
                                <a href='#' class='btn add-formacion-form'>
                                    <i class='icon-pencil'></i> Agregar Formación
                                </a>
                            </div>  
                        ";
        }
        // line 268
        echo "                    </div>
                </div>
            </div>
        </div>
        <h4>Otros Datos</h4>
        ";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "presentaCertificacion", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaAlta", array()), 'row');
        echo "
        ";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaBaja", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "activo", array()), 'row');
        echo "

        ";
        // line 277
        echo "        <div style=\"display: none\">
            ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\"><span class=\"divider-vertical\">
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </span></div>

        ";
        // line 287
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 292
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"float-left\">
            <form action=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 300
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </form>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery.Jcrop.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/token-input-facebook.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/token-input.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'stylesheet');
        echo "
      
    ";
    }

    // line 22
    public function block_javascript($context, array $blocks = array())
    {
        // line 23
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "553c734_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_553c734_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/553c734_agregarDomicilio_1.js");
            // line 31
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "553c734_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_553c734_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/553c734_agregarFormacion_2.js");
            // line 31
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "553c734_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_553c734_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/553c734_addForm_3.js");
            // line 31
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "553c734_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_553c734_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/553c734_deleteRow_4.js");
            // line 31
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "553c734_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_553c734_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/553c734_select2_5.js");
            // line 31
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
        } else {
            // asset "553c734"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_553c734") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/553c734.js");
            // line 31
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 32
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
        }
        unset($context["asset_url"]);
        // line 34
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
        return array (  727 => 34,  721 => 32,  716 => 31,  709 => 32,  704 => 31,  698 => 32,  693 => 31,  687 => 32,  682 => 31,  676 => 32,  671 => 31,  665 => 32,  660 => 31,  656 => 24,  651 => 23,  648 => 22,  641 => 18,  637 => 17,  633 => 16,  629 => 15,  625 => 14,  621 => 13,  616 => 12,  613 => 11,  600 => 300,  596 => 299,  591 => 297,  584 => 293,  580 => 292,  572 => 287,  566 => 284,  560 => 281,  554 => 278,  551 => 277,  544 => 274,  538 => 273,  531 => 268,  523 => 262,  514 => 260,  510 => 259,  506 => 258,  502 => 257,  499 => 256,  496 => 255,  483 => 248,  477 => 245,  471 => 242,  463 => 237,  457 => 234,  450 => 230,  441 => 224,  437 => 223,  434 => 222,  429 => 221,  427 => 220,  423 => 219,  408 => 207,  404 => 206,  400 => 205,  396 => 204,  392 => 203,  388 => 202,  384 => 200,  375 => 194,  371 => 192,  369 => 191,  361 => 185,  352 => 178,  343 => 176,  339 => 175,  335 => 174,  332 => 173,  329 => 172,  315 => 164,  305 => 157,  299 => 154,  294 => 152,  290 => 151,  281 => 145,  277 => 144,  271 => 141,  267 => 140,  261 => 137,  257 => 136,  251 => 133,  247 => 132,  239 => 127,  235 => 126,  228 => 122,  224 => 121,  218 => 118,  214 => 117,  208 => 114,  204 => 113,  195 => 107,  191 => 106,  185 => 103,  181 => 102,  175 => 99,  171 => 98,  165 => 95,  161 => 94,  155 => 90,  150 => 89,  148 => 88,  144 => 87,  124 => 70,  118 => 67,  110 => 62,  104 => 59,  98 => 56,  93 => 54,  90 => 53,  86 => 51,  67 => 37,  61 => 35,  59 => 22,  56 => 21,  54 => 11,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
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
/*         <link href="{{ asset('bundles/persona/css/jquery.Jcrop.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/token-input-facebook.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/token-input.css') }}" rel="stylesheet" />*/
/*         {{ form_stylesheet(edit_form) }}*/
/*       */
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {{ parent() }}*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/agregarDomicilio.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarFormacion.js'*/
/*             '@PersonaBundle/Resources/public/js/addForm.js'  */
/*             '@PersonaBundle/Resources/public/js/deleteRow.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'                      */
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {{ form_javascript(edit_form) }}*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*     <h2 style="color: #0044cc">{{ 'views.edit.edit'|trans({'%entity%': 'Becado'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/* */
/*     <form class="well" action="{{ path('becado_update', { 'id': entity.id  }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*         <input type="hidden" name="_method" value="PUT" />*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th></th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td colspan="3"><h4>Datos Personales</h4></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_start(edit_form) }}*/
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
/*                         {{ form_row(edit_form.nombres) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.telefono) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.email) }}*/
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
/*                         {{ form_errors(edit_form.domicilio) }}*/
/*                         {% if edit_form.domicilio is not empty %}*/
/*                             {% for domicilio in edit_form.domicilio %}*/
/*                             <table>*/
/*                                 <tbody>*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.localidad, 'Localidad') }}*/
/*                                             {{ form_widget(domicilio.localidad) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.barrio, 'Barrio') }}*/
/*                                             {{ form_widget(domicilio.barrio) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.calle, 'Calle') }}*/
/*                                             {{ form_widget(domicilio.calle) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.numero, 'número') }}*/
/*                                             {{ form_widget(domicilio.numero) }}*/
/*                                             */
/*                                         </td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.dpto, 'Departamento') }}*/
/*                                             {{ form_widget(domicilio.dpto) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.piso, 'Piso') }}*/
/*                                             {{ form_widget(domicilio.piso) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.edificio, 'Edificio') }}*/
/*                                             {{ form_widget(domicilio.edificio) }}*/
/*                                             */
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.manzana, 'Manzana') }}*/
/*                                             {{ form_widget(domicilio.manzana) }}*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.tira, 'Tira') }}*/
/*                                             {{ form_widget(domicilio.tira) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.parcela, 'Parcela') }}*/
/*                                             {{ form_widget(domicilio.parcela) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.quinta, 'Quinta') }}*/
/*                                             {{ form_widget(domicilio.quinta) }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{ form_label(domicilio.unidadFuncional, 'UF/Casa') }}*/
/*                                             {{ form_widget(domicilio.unidadFuncional) }}*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td colspan="3">*/
/*                                             */
/*                                             {{ form_label(domicilio.referencias, 'Referencias') }}*/
/*                                             {{ form_widget(domicilio.referencias, {'attr':{'class':'span6'}}) }}*/
/*                                             <div style="display: none;">*/
/*                                             {{ form_row(domicilio.departamento) }}*/
/*                                             </div>*/
/*                                             <div style="display: none;">*/
/*                                                 {{ form_row(domicilio.latitude) }}*/
/*                                             </div>*/
/*                                        */
/*                                         </td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div style="display: none;">*/
/*                                                 {{ form_row(domicilio.longitude) }}*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                                 */
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
/*                             */
/*                         {% endif %}*/
/*                     </div> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         {% if edit_form.becadobeca is not null %}*/
/*             <div >*/
/*                 <div class="float-left">*/
/*                     <a class="btn" href="{{ path('becadobeca') }}">*/
/*                         Editar Beca*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
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
/*                                 */
/*                                             {{ form_stylesheet(formacion) }}*/
/*                                             {{ form_javascript(formacion) }}*/
/*                                 <table>*/
/*                                     <tbody>*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                */
/*                                                 {{ form_row(formacion.institucion) }}*/
/*                                                 */
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
/*                                 */
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
/*         {{ form_end(edit_form) }}*/
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
/*     </div>*/
/* */
/*     */
/* {% endblock %}*/
