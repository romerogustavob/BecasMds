<?php

/* BecaBundle:BecadoBeca:index.html.twig */
class __TwigTemplate_1873d756fabd7b051b9e81ef1d57a12d9782a5a0507b2dd7b658d74fc0ce60e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "BecaBundle:BecadoBeca:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "BecadoBeca"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
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
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "BecadoBeca"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h1>
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
        echo $this->env->getExtension('routing')->getPath("becadobeca");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), 'row');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), 'row');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "activo", array()), 'row');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "detalles", array()), 'row');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "

                <p>
                    <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 44
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
            <th>Fechaalta</th>
            <th>Fechabaja</th>
            <th>Activo</th>
            <th>Detalles</th>
            <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 65
            echo "        <tr>
            <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 67
            if ($this->getAttribute($context["entity"], "fechaAlta", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAlta", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 68
            if ($this->getAttribute($context["entity"], "fechaBaja", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaBaja", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "activo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "detalles", array()), "html", null, true);
            echo "</td>
            <td>
        <a class=\"btn btn-mini\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>
        <a class=\"btn btn-mini\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </tbody>
</table>
    </div>

    <div class=\"span4\">
    ";
        // line 85
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
    </div>

        <div class=\"span8\">
    ";
        // line 92
        echo "    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "BecaBundle:BecadoBeca:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 92,  211 => 85,  204 => 80,  194 => 76,  190 => 75,  185 => 73,  181 => 72,  176 => 70,  172 => 69,  166 => 68,  160 => 67,  154 => 66,  151 => 65,  147 => 64,  140 => 60,  121 => 44,  117 => 43,  111 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  91 => 35,  85 => 34,  73 => 25,  66 => 20,  60 => 17,  57 => 16,  55 => 15,  49 => 12,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'BecadoBeca'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <div class="row">*/
/* */
/*     <div class="span8">*/
/*         <h1>{{ 'views.index.list'|trans({'%entity%': 'BecadoBeca'}, 'JordiLlonchCrudGeneratorBundle') }}</h1>*/
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
/*             <form class="well" action="{{ path('becadobeca') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                 {{ form_row(filterForm.id) }}*/
/*                 {{ form_row(filterForm.fechaAlta) }}*/
/*                 {{ form_row(filterForm.fechaBaja) }}*/
/*                 {{ form_row(filterForm.activo) }}*/
/*                 {{ form_row(filterForm.detalles) }}*/
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
/*             <th>Fechaalta</th>*/
/*             <th>Fechabaja</th>*/
/*             <th>Activo</th>*/
/*             <th>Detalles</th>*/
/*             <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for entity in entities %}*/
/*         <tr>*/
/*             <td><a href="{{ path('becadobeca_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*             <td>{% if entity.fechaAlta %}{{ entity.fechaAlta|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             <td>{% if entity.fechaBaja %}{{ entity.fechaBaja|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             <td>{{ entity.activo }}</td>*/
/*             <td>{{ entity.detalles }}</td>*/
/*             <td>*/
/*         <a class="btn btn-mini" href="{{ path('becadobeca_show', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*         <a class="btn btn-mini" href="{{ path('becadobeca_edit', { 'id': entity.id }) }}">*/
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
/*     {#<a class="btn btn-primary likepaginator" href="{{ path('becadobeca_new') }}">*/
/*             {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} BecadoBeca*/
/*         </a>#}*/
/*     </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
