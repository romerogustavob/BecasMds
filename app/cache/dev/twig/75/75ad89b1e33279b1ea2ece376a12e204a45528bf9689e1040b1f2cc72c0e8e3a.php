<?php

/* PersonaBundle:Becado:edit.html.twig */
class __TwigTemplate_51ad271db552b3a538d21c9678551f346903b3d1b54cd3722b7bca921491f648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Becado:edit.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JordiLlonchCrudGeneratorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macrosFormacion"] = $this->loadTemplate("PersonaBundle:Form:macro.formacion.html.twig", "PersonaBundle:Becado:edit.html.twig", 3);
        // line 4
        $context["macrosDomicilio"] = $this->loadTemplate("PersonaBundle:Form:macro.domicilio.html.twig", "PersonaBundle:Becado:edit.html.twig", 4);
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_page($context, array $blocks = array())
    {
        // line 11
        echo "
    
    <h2 style=\"color: #0044cc\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>

    <form class=\"well\" action=\"";
        // line 15
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
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
                        ";
        // line 31
        echo "                        <div style=\"display: none;\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'row');
        echo "
                        </div>
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dni", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos", array()), 'row');
        echo "                        
                    </td>
                    <td>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombres", array()), 'row');
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 48
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
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'errors');
        echo "
                        ";
        // line 66
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()))) {
            // line 67
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 68
                echo "                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            ";
                // line 72
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "localidad", array()), 'label', array("label" => "Localidad"));
                echo "
                                            ";
                // line 73
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "localidad", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 76
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "barrio", array()), 'label', array("label" => "Barrio"));
                echo "
                                            ";
                // line 77
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "barrio", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 80
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "calle", array()), 'label', array("label" => "Calle"));
                echo "
                                            ";
                // line 81
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "calle", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 84
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "numero", array()), 'label', array("label" => "número"));
                echo "
                                            ";
                // line 85
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "numero", array()), 'widget');
                echo "
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
                // line 91
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'label', array("label" => "Departamento"));
                echo "
                                            ";
                // line 92
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "dpto", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 95
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'label', array("label" => "Piso"));
                echo "
                                            ";
                // line 96
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "piso", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'label', array("label" => "Edificio"));
                echo "
                                            ";
                // line 100
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "edificio", array()), 'widget');
                echo "
                                            
                                        </td>
                                        <td>
                                            ";
                // line 104
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'label', array("label" => "Manzana"));
                echo "
                                            ";
                // line 105
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "manzana", array()), 'widget');
                echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
                // line 110
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'label', array("label" => "Tira"));
                echo "
                                            ";
                // line 111
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "tira", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 114
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'label', array("label" => "Parcela"));
                echo "
                                            ";
                // line 115
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "parcela", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 118
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'label', array("label" => "Quinta"));
                echo "
                                            ";
                // line 119
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "quinta", array()), 'widget');
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 122
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'label', array("label" => "UF/Casa"));
                echo "
                                            ";
                // line 123
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "unidadFuncional", array()), 'widget');
                echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"3\">
                                            
                                            ";
                // line 129
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'label', array("label" => "Referencias"));
                echo "
                                            ";
                // line 130
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "referencias", array()), 'widget', array("attr" => array("class" => "span6")));
                echo "
                                            <div style=\"display: none;\">
                                            ";
                // line 132
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "departamento", array()), 'row');
                echo "
                                            </div>
                                            <div style=\"display: none;\">
                                                ";
                // line 135
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["domicilio"], "latitude", array()), 'row');
                echo "
                                            </div>
                                       
                                        </td>
                                        <td>
                                            
                                            <div style=\"display: none;\">
                                                ";
                // line 142
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
            // line 150
            echo "                        ";
        } else {
            // line 151
            echo "                            <div class=\"row-fluid\">
                                <div data-prototype=\"";
            // line 152
            echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid domicilio\">
                                    ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
                // line 154
                echo "                                        ";
                echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                </div>
                                <a href='#' class='btn add-domicilio-form'>
                                    <i class='icon-pencil'></i> Agregar Domicilio                                    
                                </a>
                            </div>
                            
                        ";
        }
        // line 163
        echo "                    </div> 
                </div>
            </div>
        </div>


        ";
        // line 169
        if ( !(null === $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()))) {
            // line 170
            echo "            <div >
                <div class=\"float-left\">
                    <a class=\"btn\" href=\"";
            // line 172
            echo $this->env->getExtension('routing')->getPath("becadobeca");
            echo "\">
                        Editar Beca
                    </a>
                </div>
            </div>
        ";
        }
        // line 178
        echo "        <h4>Movimiento/Afectación/Dependencia</h4>

        ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array()), 'label', array("label" => "Mov. Social/Referente"));
        echo "
        ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "referente", array())), 'widget');
        echo " 
        ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array()), 'label', array("label" => "Lugar de Afectación"));
        echo "
        ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lugarAfectacion", array())), 'widget');
        echo "
        ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'label', array("label" => "Dependencia"));
        echo "
        ";
        // line 185
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
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
        echo "
                        ";
        // line 198
        if ( !twig_test_empty($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()))) {
            // line 199
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 200
                echo "                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                ";
                // line 204
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "institucion", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 207
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "nivelEducativo", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 210
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "profesion", array()), 'row');
                echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ";
                // line 215
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "oficio", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 218
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["formacion"], "perfil", array()), 'row');
                echo "
                                            </td>
                                            <td>
                                                ";
                // line 221
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
            // line 228
            echo "                        ";
        } else {
            // line 229
            echo "                            <div class=\"row-fluid\">
                                ";
            // line 230
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'errors');
            echo "
                                <div data-prototype=\"";
            // line 231
            echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
            echo "\" class=\"row-fluid formacion\">
                                    ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
                // line 233
                echo "                                        ";
                echo $context["macrosFormacion"]->getformacion($context["formac"]);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                                </div>
                                <a href='#' class='btn add-formacion-form'>
                                    <i class='icon-pencil'></i> Agregar Formación
                                </a>
                            </div>  
                        ";
        }
        // line 241
        echo "                    </div>
                </div>
            </div>
        </div>
        <h4>Otros Datos</h4>
        ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "presentaCertificacion", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaAlta", array()), 'row');
        echo "
        ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaBaja", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "activo", array()), 'row');
        echo "

        ";
        // line 250
        echo "        <div style=\"display: none\">
            ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\"><span class=\"divider-vertical\">
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </span></div>

        ";
        // line 260
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 265
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"float-left\">
            <form action=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 273
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </form>
        </div>
    </div>

    ";
        // line 278
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 279
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        ";
        // line 280
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "532a43b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_532a43b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/532a43b_addForm_1.js");
            // line 288
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "532a43b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_532a43b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/532a43b_deleteRow_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "532a43b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_532a43b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/532a43b_select2_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "532a43b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_532a43b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/532a43b_select2Localidad_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "532a43b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_532a43b_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/532a43b_agregarFormacion_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "532a43b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_532a43b_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/532a43b_agregarDomicilio_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "532a43b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_532a43b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/532a43b.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 290
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
        return array (  650 => 290,  606 => 288,  602 => 280,  597 => 279,  591 => 278,  581 => 273,  577 => 272,  572 => 270,  565 => 266,  561 => 265,  553 => 260,  547 => 257,  541 => 254,  535 => 251,  532 => 250,  525 => 247,  519 => 246,  512 => 241,  504 => 235,  495 => 233,  491 => 232,  487 => 231,  483 => 230,  480 => 229,  477 => 228,  464 => 221,  458 => 218,  452 => 215,  444 => 210,  438 => 207,  432 => 204,  426 => 200,  421 => 199,  419 => 198,  415 => 197,  400 => 185,  396 => 184,  392 => 183,  388 => 182,  384 => 181,  380 => 180,  376 => 178,  367 => 172,  363 => 170,  361 => 169,  353 => 163,  344 => 156,  335 => 154,  331 => 153,  327 => 152,  324 => 151,  321 => 150,  307 => 142,  297 => 135,  291 => 132,  286 => 130,  282 => 129,  273 => 123,  269 => 122,  263 => 119,  259 => 118,  253 => 115,  249 => 114,  243 => 111,  239 => 110,  231 => 105,  227 => 104,  220 => 100,  216 => 99,  210 => 96,  206 => 95,  200 => 92,  196 => 91,  187 => 85,  183 => 84,  177 => 81,  173 => 80,  167 => 77,  163 => 76,  157 => 73,  153 => 72,  147 => 68,  142 => 67,  140 => 66,  136 => 65,  116 => 48,  110 => 45,  102 => 40,  96 => 37,  90 => 34,  85 => 32,  82 => 31,  78 => 29,  59 => 15,  54 => 13,  50 => 11,  47 => 10,  38 => 7,  35 => 6,  31 => 2,  29 => 4,  27 => 3,  11 => 2,);
    }
}
/* */
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
/*     */
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
/*     {% block javascript %}*/
/*         {{ parent() }}*/
/*         {% javascripts */
/*             '@PersonaBundle/Resources/public/js/addForm.js' */
/*             '@PersonaBundle/Resources/public/js/deleteRow.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Localidad.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarFormacion.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarDomicilio.js' */
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
