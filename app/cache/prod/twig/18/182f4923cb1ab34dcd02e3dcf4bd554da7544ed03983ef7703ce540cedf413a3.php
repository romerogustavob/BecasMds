<?php

/* PersonaBundle:Domicilio:index.html.twig */
class __TwigTemplate_e92c4aaaf97ed32df4ceeeb74d468f860aad00e93fe9c4ce453f712962165a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Domicilio:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Domicilio"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"row\">

    <div class=\"span8\">
        <h2 style=\"color: #0044cc\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Domicilio"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"span2\">
        ";
        // line 15
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 16
            echo "        <div class=\"alert alert-block alert-error fade in form-errors\">
            ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
        </div>
        ";
        }
        // line 20
        echo "        &nbsp;
    </div>
    <div class=\"span2\">
        <div class=\"filters-right\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                <span class=\"caret\"></span>
            </a>
        </div>
    </div>

    <div class=\"span12\">
        <div id=\"filters\" class=\"collapse\">

            <form class=\"well\" action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("domicilio");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "numero", array()), 'row');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "dpto", array()), 'row');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "piso", array()), 'row');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "edificio", array()), 'row');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "manzana", array()), 'row');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "tira", array()), 'row');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "parcela", array()), 'row');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "quinta", array()), 'row');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "unidadFuncional", array()), 'row');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "latitude", array()), 'row');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "longitude", array()), 'row');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "referencias", array()), 'row');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "

                <p>
                    <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.reset", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                </p>
            </form>
        </div>
    </div>

    <div class=\"span12\">

    <table class=\"table table-striped table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Numero</th>
            <th>Dpto</th>
            <th>Piso</th>
            <th>Edificio</th>
            <th>Manzana</th>
            <th>Tira</th>
            <th>Parcela</th>
            <th>Quinta</th>
            <th>Unidadfuncional</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Referencias</th>
            <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 81
            echo "        <tr>
            <td><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domicilio_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numero", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dpto", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "piso", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "edificio", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "manzana", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tira", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "parcela", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quinta", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "unidadFuncional", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "latitude", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "longitude", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "referencias", array()), "html", null, true);
            echo "</td>
            <td>
        <a class=\"btn btn-mini\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domicilio_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>
        <a class=\"btn btn-mini\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domicilio_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </tbody>
</table>
    </div>

    <div class=\"span4\">
    ";
        // line 109
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
    </div>

        <div class=\"span8\">
    <a class=\"btn btn-primary likepaginator\" href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("domicilio_new");
        echo "\">
            ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " Domicilio
        </a>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Domicilio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 114,  286 => 113,  279 => 109,  272 => 104,  262 => 100,  258 => 99,  253 => 97,  249 => 96,  244 => 94,  240 => 93,  236 => 92,  232 => 91,  228 => 90,  224 => 89,  220 => 88,  216 => 87,  212 => 86,  208 => 85,  204 => 84,  200 => 83,  194 => 82,  191 => 81,  187 => 80,  180 => 76,  153 => 52,  149 => 51,  143 => 48,  139 => 47,  135 => 46,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  91 => 35,  85 => 34,  73 => 25,  66 => 20,  60 => 17,  57 => 16,  55 => 15,  49 => 12,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'Domicilio'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <div class="row">*/
/* */
/*     <div class="span8">*/
/*         <h2 style="color: #0044cc">{{ 'views.index.list'|trans({'%entity%': 'Domicilio'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/*     </div>*/
/*     <div class="span2">*/
/*         {% if form_errors(filterForm) %}*/
/*         <div class="alert alert-block alert-error fade in form-errors">*/
/*             {{ form_errors(filterForm) }}*/
/*         </div>*/
/*         {% endif %}*/
/*         &nbsp;*/
/*     </div>*/
/*     <div class="span2">*/
/*         <div class="filters-right">*/
/*             <a class="btn dropdown-toggle" data-toggle="collapse" data-target="#filters">*/
/*                 {{ 'views.index.filters'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                 <span class="caret"></span>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="span12">*/
/*         <div id="filters" class="collapse">*/
/* */
/*             <form class="well" action="{{ path('domicilio') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                 {{ form_row(filterForm.id) }}*/
/*                 {{ form_row(filterForm.numero) }}*/
/*                 {{ form_row(filterForm.dpto) }}*/
/*                 {{ form_row(filterForm.piso) }}*/
/*                 {{ form_row(filterForm.edificio) }}*/
/*                 {{ form_row(filterForm.manzana) }}*/
/*                 {{ form_row(filterForm.tira) }}*/
/*                 {{ form_row(filterForm.parcela) }}*/
/*                 {{ form_row(filterForm.quinta) }}*/
/*                 {{ form_row(filterForm.unidadFuncional) }}*/
/*                 {{ form_row(filterForm.latitude) }}*/
/*                 {{ form_row(filterForm.longitude) }}*/
/*                 {{ form_row(filterForm.referencias) }}*/
/*                 {{ form_rest(filterForm) }}*/
/* */
/*                 <p>*/
/*                     <button type="submit" name="filter_action" value="filter">{{ 'views.index.filter'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                     <button type="submit" name="filter_action" value="reset">{{ 'views.index.reset'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                 </p>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="span12">*/
/* */
/*     <table class="table table-striped table-bordered table-condensed">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Numero</th>*/
/*             <th>Dpto</th>*/
/*             <th>Piso</th>*/
/*             <th>Edificio</th>*/
/*             <th>Manzana</th>*/
/*             <th>Tira</th>*/
/*             <th>Parcela</th>*/
/*             <th>Quinta</th>*/
/*             <th>Unidadfuncional</th>*/
/*             <th>Latitude</th>*/
/*             <th>Longitude</th>*/
/*             <th>Referencias</th>*/
/*             <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for entity in entities %}*/
/*         <tr>*/
/*             <td><a href="{{ path('domicilio_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*             <td>{{ entity.numero }}</td>*/
/*             <td>{{ entity.dpto }}</td>*/
/*             <td>{{ entity.piso }}</td>*/
/*             <td>{{ entity.edificio }}</td>*/
/*             <td>{{ entity.manzana }}</td>*/
/*             <td>{{ entity.tira }}</td>*/
/*             <td>{{ entity.parcela }}</td>*/
/*             <td>{{ entity.quinta }}</td>*/
/*             <td>{{ entity.unidadFuncional }}</td>*/
/*             <td>{{ entity.latitude }}</td>*/
/*             <td>{{ entity.longitude }}</td>*/
/*             <td>{{ entity.referencias }}</td>*/
/*             <td>*/
/*         <a class="btn btn-mini" href="{{ path('domicilio_show', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*         <a class="btn btn-mini" href="{{ path('domicilio_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>            </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/*     </div>*/
/* */
/*     <div class="span4">*/
/*     {{ pagerHtml|raw }}*/
/*     </div>*/
/* */
/*         <div class="span8">*/
/*     <a class="btn btn-primary likepaginator" href="{{ path('domicilio_new') }}">*/
/*             {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} Domicilio*/
/*         </a>*/
/*     </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
