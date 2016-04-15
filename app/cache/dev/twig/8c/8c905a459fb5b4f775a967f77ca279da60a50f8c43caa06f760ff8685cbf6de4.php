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
        echo "     ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('javascript', $context, $blocks);
        // line 36
        echo "
    <h2 style=\"color: #0044cc\">Nuevo Becado";
        // line 37
        echo "</h2>

    <form class=\"well\" action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("becado_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 41
        echo "        ";
        // line 43
        echo "        ";
        // line 44
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

        <table>
            <tbody>
                <fieldset style=\"border:1px solid; background-color: #3a8104; color: #000;\"><h4>Datos Personales</h4>
                <tr>            
                    <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()), 'row');
        echo "</td>
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
                            Domicilio</a>
                    </h4>
                    </fieldset>
                </div>
                <div id=\"domicilioCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"row-fluid\">
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), 'errors');
        echo "
                        <div data-prototype=\"";
        // line 79
        echo twig_escape_filter($this->env, $context["macrosDomicilio"]->getdomicilio($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), "vars", array()), "prototype", array())));
        echo "\" class=\"row-fluid domicilio\">
                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domi"]) {
            // line 81
            echo "                                ";
            echo $context["macrosDomicilio"]->getdomicilio($context["domi"]);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
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
        // line 96
        echo " 
        <fieldset style=\"border:1px solid; background-color: #3a8104; color: #000;\">
        <h4>Movimiento/Afectación/Dependencia</h4>
        </fieldset>
        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "referente", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lugarAfectacion", array()), 'row');
        echo "
        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dependencia", array()), 'row');
        echo " 

        <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <fieldset style=\"border:1px solid; background-color: #9fda58; color: #000;\">
                    <h4 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#formacionCollapse\" style=\"color: #000\">
                            Formación</a>
                    </h4>
                    </fieldset>
                </div>
                <div id=\"formacionCollapse\" class=\"panel-collapse collapse in\">
                    <div class=\"panel-body\">

                        <div class=\"row-fluid\">

                            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), 'errors');
        echo "
                            <div data-prototype=\"";
        // line 119
        echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
        echo "\" class=\"row-fluid formacion\">
                                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
            // line 121
            echo "                                    ";
            echo $context["macrosFormacion"]->getformacion($context["formac"]);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentaCertificacion", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaAlta", array()), 'row');
        echo "
        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaBaja", array()), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'row');
        echo "
        ";
        // line 138
        echo "        <div style=\"display: none\">
            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), 'widget');
        echo "
        </div>
        <div style=\"display: none\">
            ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domicilio", array()), 'widget');
        echo "
        </div>
        <div style=\"padding-top: 15px;\"><span class=\"divider-vertical\">

                <button type=\"submit\" class=\"btn btn-success\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </span></div>   



        ";
        // line 151
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
    </div>

   
    

";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery.Jcrop.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/token-input-facebook.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/token-input.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'stylesheet');
        echo "

    ";
    }

    // line 21
    public function block_javascript($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c5b44a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5b44a2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5b44a2_agregarDomicilio_1.js");
            // line 31
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "c5b44a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5b44a2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5b44a2_agregarFormacion_2.js");
            // line 31
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "c5b44a2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5b44a2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5b44a2_addForm_3.js");
            // line 31
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "c5b44a2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5b44a2_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5b44a2_deleteRow_4.js");
            // line 31
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "c5b44a2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5b44a2_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5b44a2_select2_5.js");
            // line 31
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "c5b44a2_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5b44a2_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5b44a2_select2Becado_6.js");
            // line 31
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        
        ";
        } else {
            // asset "c5b44a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5b44a2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5b44a2.js");
            // line 31
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 32
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
        return "PersonaBundle:Becado:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 35,  420 => 32,  415 => 31,  407 => 32,  402 => 31,  395 => 32,  390 => 31,  383 => 32,  378 => 31,  371 => 32,  366 => 31,  359 => 32,  354 => 31,  347 => 32,  342 => 31,  337 => 22,  334 => 21,  327 => 17,  323 => 16,  319 => 15,  315 => 14,  311 => 13,  307 => 12,  302 => 11,  299 => 10,  286 => 159,  282 => 158,  272 => 151,  264 => 146,  257 => 142,  251 => 139,  248 => 138,  242 => 136,  236 => 135,  222 => 123,  213 => 121,  209 => 120,  205 => 119,  201 => 118,  181 => 101,  175 => 100,  169 => 96,  154 => 83,  145 => 81,  141 => 80,  137 => 79,  133 => 78,  112 => 60,  104 => 55,  100 => 54,  95 => 52,  91 => 51,  87 => 50,  77 => 44,  75 => 43,  73 => 41,  67 => 39,  63 => 37,  60 => 36,  58 => 21,  55 => 20,  52 => 10,  49 => 9,  39 => 5,  36 => 4,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
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
/*      {% block stylesheets %}*/
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
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/agregarDomicilio.js'*/
/*             '@PersonaBundle/Resources/public/js/agregarFormacion.js'*/
/*             '@PersonaBundle/Resources/public/js/addForm.js'  */
/*             '@PersonaBundle/Resources/public/js/deleteRow.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Becado.js'*/
/*     */
/*         %}*/
/*         {{ form_javascript(form) }}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         */
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
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
/*         <table>*/
/*             <tbody>*/
/*                 <fieldset style="border:1px solid; background-color: #3a8104; color: #000;"><h4>Datos Personales</h4>*/
/*                 <tr>            */
/*                     <td>{{ form_row(form.dni) }}</td>*/
/*                     <td>{{ form_row(form.apellidos) }}</td>*/
/*                     <td>{{ form_row(form.nombres) }}</td>*/
/*                     <td>*/
/*                         {{ form_label(form.telefono, 'Teléfono') }}*/
/*                         {{ form_widget(form.telefono) }}*/
/*                     </td>            */
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4">*/
/*                         {{ form_row(form.email) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 </fieldset>*/
/*             </tbody>*/
/*         </table>*/
/*         <div class="panel-group" id="accordion">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <fieldset style="border:1px solid; background-color: #9fda58 ">*/
/*                     <h4 class="panel-title">*/
/*                         <a data-toggle="collapse" data-parent="#accordion" href="#domicilioCollapse" style="color: #000">*/
/*                             Domicilio</a>*/
/*                     </h4>*/
/*                     </fieldset>*/
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
/*         {#{{ form_row(form.becadobeca) }}#} */
/*         <fieldset style="border:1px solid; background-color: #3a8104; color: #000;">*/
/*         <h4>Movimiento/Afectación/Dependencia</h4>*/
/*         </fieldset>*/
/*         {{ form_row(form.referente) }} {{ form_row(form.lugarAfectacion) }}*/
/*         {{ form_row(form.dependencia) }} */
/* */
/*         <div class="panel-group" id="accordion">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <fieldset style="border:1px solid; background-color: #9fda58; color: #000;">*/
/*                     <h4 class="panel-title">*/
/*                         <a data-toggle="collapse" data-parent="#accordion" href="#formacionCollapse" style="color: #000">*/
/*                             Formación</a>*/
/*                     </h4>*/
/*                     </fieldset>*/
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
/*    */
/*     */
/* */
/* {% endblock %}*/
/* */
