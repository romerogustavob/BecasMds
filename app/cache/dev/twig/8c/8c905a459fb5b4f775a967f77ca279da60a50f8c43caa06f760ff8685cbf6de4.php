<?php

/* PersonaBundle:Becado:new.html.twig */
class __TwigTemplate_bc376ed086053217e49b2672c92084c7051493adf286fc0e9611e3f5be42b6c5 extends Twig_Template
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

    // line 9
    public function block_page($context, array $blocks = array())
    {
        // line 10
        echo "
    <h2 style=\"color: #0044cc\">Nuevo Becado";
        // line 11
        echo "</h2>

    <form class=\"well\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("becado_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 15
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        <h4>Datos Personales</h4>
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombres", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'row');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "

        <div class=\"panel-group\" id=\"accordion\">

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#domicilioCollapse\">
                            Domicilio</a>
                    </h4>
                </div>
                <div id=\"domicilioCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"row-fluid\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), 'errors');
        echo "
                        <div data-prototype=\"";
        // line 36
        echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
        echo "\" class=\"row-fluid domicilio\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
            // line 38
            echo "                                ";
            echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                        </div>

                        <a href='#' class='btn add-domicilio-form'>
                            <i class='icon-pencil'></i> Agregar Domicilio 
                        </a>

                    </div> 
                </div>
            </div>
        </div>



        ";
        // line 54
        echo " 
        <h4>Movimiento/Afectación/Dependencia</h4>
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "referente", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lugarAfectacion", array()), 'row');
        echo "
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dependencia", array()), 'row');
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

                        <div class=\"row-fluid\">

                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), 'errors');
        echo "
                            <div data-prototype=\"";
        // line 73
        echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
        echo "\" class=\"row-fluid formacion\">
                                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
            // line 75
            echo "                                    ";
            echo $context["macrosFormacion"]->getformacion($context["formac"]);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentaCertificacion", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaAlta", array()), 'row');
        echo "
        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaBaja", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'row');
        echo "
        ";
        // line 92
        echo "        <div style=\"display: none\">
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\"><span class=\"divider-vertical\">

                <button type=\"submit\" class=\"btn btn-success\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </span></div>   



        ";
        // line 105
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

    ";
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 157
        echo "
    ";
        // line 158
        $this->displayBlock('javascript', $context, $blocks);
        // line 175
        echo "
";
    }

    // line 147
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 148
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery.Jcrop.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/token-input-facebook.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/token-input.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'stylesheet');
        echo "

    ";
    }

    // line 158
    public function block_javascript($context, array $blocks = array())
    {
        // line 159
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bc53fdc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_select2Localidad_1.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_jquery-ui_2.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_jquery.Jcrop_3.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_jquery.color_4.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_jquery.tokeninput_5.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_select2_6.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_agregarDomicilio_7.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_agregarFormacion_8.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_addForm_9.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "bc53fdc_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc_deleteRow_10.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "bc53fdc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bc53fdc") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bc53fdc.js");
            // line 171
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 174
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
        return array (  439 => 174,  433 => 172,  428 => 171,  421 => 172,  416 => 171,  410 => 172,  405 => 171,  399 => 172,  394 => 171,  388 => 172,  383 => 171,  377 => 172,  372 => 171,  366 => 172,  361 => 171,  355 => 172,  350 => 171,  344 => 172,  339 => 171,  333 => 172,  328 => 171,  322 => 172,  317 => 171,  312 => 159,  309 => 158,  302 => 154,  298 => 153,  294 => 152,  290 => 151,  286 => 150,  282 => 149,  277 => 148,  274 => 147,  269 => 175,  267 => 158,  264 => 157,  262 => 147,  259 => 146,  251 => 113,  247 => 112,  237 => 105,  229 => 100,  222 => 96,  216 => 93,  213 => 92,  207 => 90,  201 => 89,  187 => 77,  178 => 75,  174 => 74,  170 => 73,  166 => 72,  148 => 57,  142 => 56,  138 => 54,  122 => 40,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  84 => 22,  76 => 21,  69 => 18,  67 => 17,  65 => 15,  59 => 13,  55 => 11,  52 => 10,  49 => 9,  39 => 5,  36 => 4,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* {% import "PersonaBundle:Form:macro.formacion.html.twig" as macrosFormacion %}*/
/* {% import "PersonaBundle:Form:macro.domicilio.html.twig" as macrosDomicilio %}*/
/* {% block title %}*/
/*     {{ parent() }} - {{ 'views.new.creation'|trans({'%entity%': 'Becado'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     <h2 style="color: #0044cc">Nuevo Becado{#{{ 'views.new.creation'|trans({'%entity%': 'Becado'}, 'JordiLlonchCrudGeneratorBundle') }}#}</h2>*/
/* */
/*     <form class="well" action="{{ path('becado_create') }}" method="post" {{ form_enctype(form) }}>*/
/*         {# Aplicando theming al formulario alumno #}*/
/*         {#{% form_theme form 'PersonaBundle:Form:becado.theming.html.twig' %}*/
/*         {{ form(form) }}#}*/
/*         {#{{ form_widget(form) }}#}*/
/*         {{ form_start(form) }}*/
/* */
/*         <h4>Datos Personales</h4>*/
/*         {{ form_row(form.dni) }} {{ form_row(form.apellidos) }} {{ form_row(form.nombres) }}*/
/*         {{ form_row(form.telefono) }}{{ form_row(form.email) }}*/
/* */
/*         <div class="panel-group" id="accordion">*/
/* */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h4 class="panel-title">*/
/*                         <a data-toggle="collapse" data-parent="#accordion" href="#domicilioCollapse">*/
/*                             Domicilio</a>*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div id="domicilioCollapse" class="panel-collapse collapse in">*/
/*                     <div class="row-fluid">*/
/*                         {{ form_errors(form.domicilio) }}*/
/*                         <div data-prototype="{{ macrosDomicilio.domicilio(form.domicilio.vars.prototype)|e }}" class="row-fluid domicilio">*/
/*                             {% for domi in form.domicilio %}*/
/*                                 {{ macrosDomicilio.domicilio(domi) }}*/
/*                             {% endfor %}*/
/* */
/*                         </div>*/
/* */
/*                         <a href='#' class='btn add-domicilio-form'>*/
/*                             <i class='icon-pencil'></i> Agregar Domicilio */
/*                         </a>*/
/* */
/*                     </div> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*         {#{{ form_row(form.becadobeca) }}#} */
/*         <h4>Movimiento/Afectación/Dependencia</h4>*/
/*         {{ form_row(form.referente) }} {{ form_row(form.lugarAfectacion) }}*/
/*         {{ form_row(form.dependencia) }} */
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
/* */
/*                         <div class="row-fluid">*/
/* */
/*                             {{ form_errors(form.formacion) }}*/
/*                             <div data-prototype="{{ macrosFormacion.formacion(form.formacion.vars.prototype)|e }}" class="row-fluid formacion">*/
/*                                 {% for formac in form.formacion %}*/
/*                                     {{ macrosFormacion.formacion(formac) }}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/* */
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
/*         <div style="padding-top: 15px;"><span class="divider-vertical">*/
/* */
/*                 <button type="submit" class="btn btn-success">{{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*             </span></div>   */
/* */
/* */
/* */
/*         {{ form_end(form) }}*/
/* */
/* */
/*     </form>*/
/* */
/*     <div>*/
/*         <div class="float-left">*/
/*             <a class="btn" href="{{ path('becado') }}">*/
/*                 {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {#{% form_theme form _self %}*/
/* */
/*     {% block genemu_jqueryselect2_hidden_javascript %}*/
/* */
/*         <script type="text/javascript">*/
/*             $field = $('#{{ id }}');*/
/* */
/*             var $configs = {{ configs|json_encode|raw }};*/
/*                     // custom configs*/
/*                     $configs = $.extend($configs, {*/
/*                         query: function (query) {*/
/*                             var data = {results: []}, i, j, s;*/
/*                             for (i = 1; i < 5; i++) {*/
/*                                 s = "";*/
/*                                 for (j = 0; j < i; j++) {*/
/*                                     s = s + query.term;*/
/*                                 }*/
/*                                 data.results.push({id: query.term + i, text: s});*/
/*                             }*/
/*                             query.callback(data);*/
/*                         }*/
/*                     });*/
/*             // end of custom configs*/
/* */
/*             $field.select2($configs);*/
/*         </script>*/
/* */
/*     {% endblock %}#}*/
/* */
/* {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('bundles/persona/css/jquery.Jcrop.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/token-input-facebook.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/token-input.css') }}" rel="stylesheet" />*/
/*         {{ form_stylesheet(form) }}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {% javascripts '@PersonaBundle/Resources/public/js/select2Localidad.js'*/
/*             '@PersonaBundle/Resources/public/js/jquery-ui.js'*/
/*             '@PersonaBundle/Resources/public/js/jquery.Jcrop.js'*/
/*             '@PersonaBundle/Resources/public/js/jquery.color.js'*/
/*             '@PersonaBundle/Resources/public/js/jquery.tokeninput.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarDomicilio.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarFormacion.js'*/
/*             '@PersonaBundle/Resources/public/js/addForm.js'  */
/*             '@PersonaBundle/Resources/public/js/deleteRow.js'*/
/*                       */
/*         %}*/
/*         {{ form_javascript(form) }}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
