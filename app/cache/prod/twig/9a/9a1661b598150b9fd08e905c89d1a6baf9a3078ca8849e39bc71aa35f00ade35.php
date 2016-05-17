<?php

/* PersonaBundle:Becado:new.html.twig */
class __TwigTemplate_5330d8878b95a0404326d053eb6fe2ea71c584ec8eee9d8293f50b35a4578364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Becado:new.html.twig", 1);
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
        $context["macrosFormacion"] = $this->loadTemplate("PersonaBundle:Form:macro.formacion.html.twig", "PersonaBundle:Becado:new.html.twig", 2);
        // line 3
        $context["macrosDomicilio"] = $this->loadTemplate("PersonaBundle:Form:macro.domicilio.html.twig", "PersonaBundle:Becado:new.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_page($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    
    ";
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
        // line 34
        echo "    <h2 style=\"color: #0044cc\">Nuevo Becado</h2>

    <form class=\"well\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("becado_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 38
        echo "        ";
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <table>
            <tbody>
            <fieldset style=\"border:1px solid; background-color: #3a8104; color: #000;\"><h4>Datos Personales</h4>
                <tr class=\"form-horizontal\">            
                    <td>
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()), 'label');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()), 'widget', array("attr" => array("style" => "width:100px", "placeholder" => "documento")));
        echo "   
                        <a class=\"btn btn-primary\" onclick=\"ajaxDni();\" href=\"#\">Buscar</a>
                    </td>                    
                    <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'row');
        echo "</td>
                    <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombres", array()), 'row');
        echo "</td>
                    <td>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'label', array("label" => "Teléfono"));
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'widget');
        echo "
                    </td>                    
                </tr>
                <tr>
                    <td colspan=\"4\">
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
                    </td>
                </tr>
            </fieldset>
            </tbody>
        </table>
        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <fieldset style=\"border:1px solid; background-color: #9fda58 \">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#domicilioCollapse\" style=\"color: #000\">
                                Domicilio
                            </a>
                        </h4>
                    </fieldset>
                </div>
                <div id=\"domicilioCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"row-fluid\">
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), 'errors');
        echo "
                        <div data-prototype=\"";
        // line 80
        echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
        echo "\" class=\"row-fluid domicilio\">
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
            // line 82
            echo "                                ";
            echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                        </div>
                        <a href='#' class='btn add-domicilio-form'>
                            <i class='icon-pencil'></i> Agregar Domicilio 
                        </a>
                    </div> 
                </div>
            </div>
        </div>
        ";
        // line 92
        echo " 
        <fieldset style=\"border:1px solid; background-color: #3a8104; color: #000;\">
            <h4>Movimiento/Afectación/Dependencia</h4>
        </fieldset>
        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "referente", array()), 'row');
        echo "
        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lugarAfectacion", array()), 'row');
        echo "
        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dependencia", array()), 'row');
        echo "
        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <fieldset style=\"border:1px solid; background-color: #9fda58; color: #000;\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#formacionCollapse\" style=\"color: #000\">
                                Formación
                            </a>
                        </h4>
                    </fieldset>
                </div>
                <div id=\"formacionCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">
                        <div class=\"row-fluid\">
                            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), 'errors');
        echo "
                            <div data-prototype=\"";
        // line 114
        echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
        echo "\" class=\"row-fluid formacion\">
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
            // line 116
            echo "                                    ";
            echo $context["macrosFormacion"]->getformacion($context["formac"]);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            </div>
                        </div> 
                        <a href='#' class='btn add-formacion-form'>
                            <i class='icon-pencil'></i> Agregar Formación
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <h4>Otros Datos</h4>
        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentaCertificacion", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaAlta", array()), 'row');
        echo "
        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaBaja", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'row');
        echo "
        ";
        // line 132
        echo "        <div style=\"display: none\">
            ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becadobeca", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\">
            <span class=\"divider-vertical\">
                <button type=\"submit\" class=\"btn btn-success\">
                    ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                </button>
            </span>
        </div>
        ";
        // line 148
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </form>
    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'stylesheet');
        echo "
    ";
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c2447d5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_jquery-ui_1.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
            // asset "c2447d5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_agregarDomicilio_2.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
            // asset "c2447d5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_agregarFormacion_3.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
            // asset "c2447d5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_addForm_4.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
            // asset "c2447d5_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_deleteRow_5.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
            // asset "c2447d5_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_select2_6.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
            // asset "c2447d5_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_select2Becado_7.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
            // asset "c2447d5_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_dalert.jquery.min_8.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
            // asset "c2447d5_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5_ajax-functions_9.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
        } else {
            // asset "c2447d5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c2447d5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c2447d5.js");
            // line 28
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
        ";
            // line 30
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>   
        ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Becado:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 33,  510 => 31,  506 => 30,  502 => 29,  497 => 28,  490 => 31,  486 => 30,  482 => 29,  477 => 28,  471 => 31,  467 => 30,  463 => 29,  458 => 28,  452 => 31,  448 => 30,  444 => 29,  439 => 28,  433 => 31,  429 => 30,  425 => 29,  420 => 28,  414 => 31,  410 => 30,  406 => 29,  401 => 28,  395 => 31,  391 => 30,  387 => 29,  382 => 28,  376 => 31,  372 => 30,  368 => 29,  363 => 28,  357 => 31,  353 => 30,  349 => 29,  344 => 28,  338 => 31,  334 => 30,  330 => 29,  325 => 28,  320 => 17,  317 => 16,  311 => 13,  307 => 12,  303 => 11,  298 => 10,  295 => 9,  286 => 153,  282 => 152,  275 => 148,  268 => 144,  260 => 139,  254 => 136,  248 => 133,  245 => 132,  239 => 130,  233 => 129,  220 => 118,  211 => 116,  207 => 115,  203 => 114,  199 => 113,  181 => 98,  177 => 97,  173 => 96,  167 => 92,  157 => 84,  148 => 82,  144 => 81,  140 => 80,  136 => 79,  114 => 60,  106 => 55,  102 => 54,  97 => 52,  93 => 51,  87 => 48,  83 => 47,  73 => 41,  71 => 40,  69 => 38,  63 => 36,  59 => 34,  57 => 16,  54 => 15,  51 => 9,  48 => 8,  39 => 5,  36 => 4,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* {% import "PersonaBundle:Form:macro.formacion.html.twig" as macrosFormacion %}*/
/* {% import "PersonaBundle:Form:macro.domicilio.html.twig" as macrosDomicilio %}*/
/* {% block title %}*/
/*     {{ parent() }} - {{ 'views.new.creation'|trans({'%entity%': 'Becado'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/*     {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         {{ form_stylesheet(form) }}*/
/*     {% endblock %}*/
/*     */
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
/*         {{ form_javascript(form) }}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>   */
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*     <h2 style="color: #0044cc">Nuevo Becado</h2>*/
/* */
/*     <form class="well" action="{{ path('becado_create') }}" method="post" {{ form_enctype(form) }}>*/
/*         {# Aplicando theming al formulario alumno #}*/
/*         {#{% form_theme form 'PersonaBundle:Form:becado.theming.html.twig' %}*/
/*         {{ form(form) }}#}*/
/*         {#{{ form_widget(form) }}#}*/
/*         {{ form_start(form) }}*/
/*         <table>*/
/*             <tbody>*/
/*             <fieldset style="border:1px solid; background-color: #3a8104; color: #000;"><h4>Datos Personales</h4>*/
/*                 <tr class="form-horizontal">            */
/*                     <td>*/
/*                         {{ form_label(form.dni) }}*/
/*                         {{ form_widget(form.dni, { 'attr':{ 'style': 'width:100px', 'placeholder':'documento'} }) }}   */
/*                         <a class="btn btn-primary" onclick="ajaxDni();" href="#">Buscar</a>*/
/*                     </td>                    */
/*                     <td>{{ form_row(form.apellidos) }}</td>*/
/*                     <td>{{ form_row(form.nombres) }}</td>*/
/*                     <td>*/
/*                         {{ form_label(form.telefono, 'Teléfono') }}*/
/*                         {{ form_widget(form.telefono) }}*/
/*                     </td>                    */
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4">*/
/*                         {{ form_row(form.email) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             </fieldset>*/
/*             </tbody>*/
/*         </table>*/
/*         <div class="panel-group" id="accordion">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <fieldset style="border:1px solid; background-color: #9fda58 ">*/
/*                         <h4 class="panel-title">*/
/*                             <a data-toggle="collapse" data-parent="#accordion" href="#domicilioCollapse" style="color: #000">*/
/*                                 Domicilio*/
/*                             </a>*/
/*                         </h4>*/
/*                     </fieldset>*/
/*                 </div>*/
/*                 <div id="domicilioCollapse" class="panel-collapse collapse in">*/
/*                     <div class="row-fluid">*/
/*                         {{ form_errors(form.domicilio) }}*/
/*                         <div data-prototype="{{ macrosDomicilio.domicilio(form.domicilio.vars.prototype)|e }}" class="row-fluid domicilio">*/
/*                             {% for domi in form.domicilio %}*/
/*                                 {{ macrosDomicilio.domicilio(domi) }}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                         <a href='#' class='btn add-domicilio-form'>*/
/*                             <i class='icon-pencil'></i> Agregar Domicilio */
/*                         </a>*/
/*                     </div> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#{{ form_row(form.becadobeca) }}#} */
/*         <fieldset style="border:1px solid; background-color: #3a8104; color: #000;">*/
/*             <h4>Movimiento/Afectación/Dependencia</h4>*/
/*         </fieldset>*/
/*         {{ form_row(form.referente) }}*/
/*         {{ form_row(form.lugarAfectacion) }}*/
/*         {{ form_row(form.dependencia) }}*/
/*         <div class="panel-group" id="accordion">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <fieldset style="border:1px solid; background-color: #9fda58; color: #000;">*/
/*                         <h4 class="panel-title">*/
/*                             <a data-toggle="collapse" data-parent="#accordion" href="#formacionCollapse" style="color: #000">*/
/*                                 Formación*/
/*                             </a>*/
/*                         </h4>*/
/*                     </fieldset>*/
/*                 </div>*/
/*                 <div id="formacionCollapse" class="panel-collapse collapse in">*/
/*                     <div class="panel-body">*/
/*                         <div class="row-fluid">*/
/*                             {{ form_errors(form.formacion) }}*/
/*                             <div data-prototype="{{ macrosFormacion.formacion(form.formacion.vars.prototype)|e }}" class="row-fluid formacion">*/
/*                                 {% for formac in form.formacion %}*/
/*                                     {{ macrosFormacion.formacion(formac) }}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div> */
/*                         <a href='#' class='btn add-formacion-form'>*/
/*                             <i class='icon-pencil'></i> Agregar Formación*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <h4>Otros Datos</h4>*/
/*         {{ form_row(form.presentaCertificacion) }} {{ form_row(form.fechaAlta) }}*/
/*         {{ form_row(form.fechaBaja) }} {{ form_row(form.activo) }}*/
/*         {#PONGO ESTOS CAMPOS A HIDDEN YA QUE SI USO FORM_REST EN FORM END, BORRA TAMBIÉN LAS ENTITY#}*/
/*         <div style="display: none">*/
/*             {{ form_widget(form.formacion) }}*/
/*         </div>*/
/*         <div style="display: none">*/
/*             {{ form_widget(form.domicilio) }}*/
/*         </div>*/
/*         <div style="display: none">*/
/*             {{ form_widget(form.becadobeca) }}*/
/*         </div>*/
/*         <div style="padding-top: 15px;">*/
/*             <span class="divider-vertical">*/
/*                 <button type="submit" class="btn btn-success">*/
/*                     {{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                 </button>*/
/*             </span>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </form>*/
/*     <div>*/
/*         <div class="float-left">*/
/*             <a class="btn" href="{{ path('becado') }}">*/
/*                 {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
