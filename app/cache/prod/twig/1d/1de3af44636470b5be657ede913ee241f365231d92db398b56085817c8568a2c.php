<?php

/* CertificacionBundle:Certificacion:index.html.twig */
class __TwigTemplate_f33632a2b456e5bd7594ffc7ebd5b17cccd402df2feb86f975eff723fc44592d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "CertificacionBundle:Certificacion:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Certificacion"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
        echo "    <div class=\"row\">
        <div class=\"span8\">
            <h2 style=\"color: #0044cc\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Certificacion"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"span2\">
            ";
        // line 27
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 28
            echo "                <div class=\"alert alert-block alert-error fade in form-errors\">
                    ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 32
        echo "            &nbsp;
        </div>
        <div class=\"span2\">
            <div class=\"filters-right\">
                <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                    ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                    <span class=\"caret\"></span>
                </a>
            </div>
        </div>
        <div class=\"span12\">
            <div id=\"filters\" class=\"collapse\">
                <form class=\"well\" action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("certificacion", array("toexcel" => "false"));
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "               
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "monto", array()), 'row');
        echo "
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "descuentoDias", array()), 'row');
        echo "
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "totalPagar", array()), 'row');
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "certificado", array()), 'row');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "mesCertificacion", array()), 'row');
        echo "
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "becadobeca", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
            // line 52
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becadobeca"], "becado", array()), 'row');
            echo "
                        ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["becadobeca"], "beca", array()), 'row');
            echo "                        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                     
                    <p>
                        <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                        <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.reset", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    </p>  
                    ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'form_end');
        echo "                    
                </form>
            </div>
        </div>
        <div class=\"span12\">
            <table class=\"table table-striped table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Becado</th>
                        <th>Beca</th>
                        <th>Monto</th>
                        <th>Días Descuento</th>
                        <th>Total Pagar</th>
                        <th>Certificado</th>
                        <th>Mes Certificación</th>
                        <th>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 79
        $context["entidad"] = null;
        // line 80
        echo "                    ";
        $context["i"] = 0;
        // line 81
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 82
            echo "                        ";
            $context["entidad"] = $context["entity"];
            // line 83
            echo "                        ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 84
            echo "                        <tr>
                            <td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "apellidos", array()), "html", null, true);
            echo ", 
                                ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "nombres", array()), "html", null, true);
            echo " - 
                                Dni: ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "dni", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "becatipo", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "becafuncion", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "monto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descuentoDias", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "totalPagar", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 95
            if ($this->getAttribute($context["entity"], "certificado", array())) {
                echo "Sí ";
            } else {
                echo " No ";
            }
            echo "</td>
                            <td>";
            // line 96
            if ($this->getAttribute($context["entity"], "mesCertificacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "mesCertificacion", array()), "m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>
                                <a class=\"btn btn-mini\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
                                </a>
                                <a class=\"btn btn-mini\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                </tbody>
            </table>
            <a class=\"btn btn-mini btn-warning\" href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("certificacion", array("toexcel" => "true"));
        echo "\">Exportar a Excel</a>
        </div>
        <div class=\"span4\">
            ";
        // line 112
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
        </div>
            
        
        
    ";
        // line 122
        echo "    </div>
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    ";
    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e604a14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_jquery-1.9.0_1.js");
            // line 19
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e604a14_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e604a14_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2Becado_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "e604a14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CertificacionBundle:Certificacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 21,  317 => 19,  312 => 14,  309 => 13,  302 => 10,  297 => 9,  294 => 8,  289 => 122,  281 => 112,  275 => 109,  271 => 107,  260 => 102,  256 => 101,  251 => 99,  247 => 98,  240 => 96,  232 => 95,  228 => 94,  224 => 93,  220 => 92,  213 => 90,  208 => 88,  204 => 87,  200 => 86,  194 => 85,  191 => 84,  188 => 83,  185 => 82,  180 => 81,  177 => 80,  175 => 79,  168 => 75,  149 => 59,  144 => 57,  140 => 56,  136 => 54,  128 => 53,  123 => 52,  119 => 51,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  99 => 46,  95 => 45,  89 => 44,  79 => 37,  72 => 32,  66 => 29,  63 => 28,  61 => 27,  55 => 24,  51 => 22,  48 => 13,  45 => 8,  42 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'Certificacion'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*       */
/*     {% endblock %}*/
/*     {% block javascript %}*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Becado.js'*/
/*         %}*/
/*             <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*     <div class="row">*/
/*         <div class="span8">*/
/*             <h2 style="color: #0044cc">{{ 'views.index.list'|trans({'%entity%': 'Certificacion'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/*         </div>*/
/*         <div class="span2">*/
/*             {% if form_errors(filterForm) %}*/
/*                 <div class="alert alert-block alert-error fade in form-errors">*/
/*                     {{ form_errors(filterForm) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             &nbsp;*/
/*         </div>*/
/*         <div class="span2">*/
/*             <div class="filters-right">*/
/*                 <a class="btn dropdown-toggle" data-toggle="collapse" data-target="#filters">*/
/*                     {{ 'views.index.filters'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                     <span class="caret"></span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="span12">*/
/*             <div id="filters" class="collapse">*/
/*                 <form class="well" action="{{ path('certificacion', { 'toexcel': 'false' }) }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                     {{ form_row(filterForm.id) }}               */
/*                     {{ form_row(filterForm.monto) }}*/
/*                     {{ form_row(filterForm.descuentoDias) }}*/
/*                     {{ form_row(filterForm.totalPagar) }}*/
/*                     {{ form_row(filterForm.certificado) }}*/
/*                     {{ form_row(filterForm.mesCertificacion) }}*/
/*                     {% for becadobeca in filterForm.becadobeca %}*/
/*                         {{ form_row(becadobeca.becado) }}*/
/*                         {{ form_row(becadobeca.beca) }}                        */
/*                      {% endfor %}                     */
/*                     <p>*/
/*                         <button type="submit" name="filter_action" value="filter">{{ 'views.index.filter'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                         <button type="submit" name="filter_action" value="reset">{{ 'views.index.reset'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                     </p>  */
/*                     {{ form_end(filterForm) }}                    */
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <div class="span12">*/
/*             <table class="table table-striped table-bordered table-condensed">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Becado</th>*/
/*                         <th>Beca</th>*/
/*                         <th>Monto</th>*/
/*                         <th>Días Descuento</th>*/
/*                         <th>Total Pagar</th>*/
/*                         <th>Certificado</th>*/
/*                         <th>Mes Certificación</th>*/
/*                         <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% set entidad=null %}*/
/*                     {% set i=0  %}*/
/*                     {% for entity in entities %}*/
/*                         {% set entidad=entity %}*/
/*                         {% set i=i+1 %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('certificacion_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{{ entity.becadobeca.becado.apellidos }}, */
/*                                 {{ entity.becadobeca.becado.nombres }} - */
/*                                 Dni: {{ entity.becadobeca.becado.dni }}</td>*/
/*                             <td>*/
/*                                 {{ entity.becatipo }} - {{ entity.becafuncion }}*/
/*                             </td>*/
/*                             <td>{{ entity.monto }}</td>*/
/*                             <td>{{ entity.descuentoDias }}</td>*/
/*                             <td>{{ entity.totalPagar }}</td>*/
/*                             <td>{% if entity.certificado %}Sí {% else %} No {% endif%}</td>*/
/*                             <td>{% if entity.mesCertificacion %}{{ entity.mesCertificacion|date('m-Y') }}{% endif %}</td>*/
/*                             <td>*/
/*                                 <a class="btn btn-mini" href="{{ path('certificacion_show', { 'id': entity.id }) }}">*/
/*                                     {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                                 </a>*/
/*                                 <a class="btn btn-mini" href="{{ path('certificacion_edit', { 'id': entity.id }) }}">*/
/*                                     {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                                 </a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <a class="btn btn-mini btn-warning" href="{{ path('certificacion', { 'toexcel': 'true' }) }}">Exportar a Excel</a>*/
/*         </div>*/
/*         <div class="span4">*/
/*             {{ pagerHtml|raw }}*/
/*         </div>*/
/*             */
/*         */
/*         */
/*     {#<div class="span8">*/
/*         <a class="btn btn-primary likepaginator" href="{{ path('certificacion_new') }}">*/
/*             {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} Certificacion*/
/*         </a>*/
/*     </div>#}*/
/*     </div>*/
/* {% endblock %}*/
