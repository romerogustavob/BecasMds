<?php

/* BecaBundle:BecaVulnerable:index.html.twig */
class __TwigTemplate_5ef8f40e8a15e04f484284c7c25f7099917e67c4a105e023eae748915d353710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "BecaBundle:BecaVulnerable:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "BecaVulnerable"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "BecaVulnerable"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("becavulnerable");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "nombre", array()), 'row');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "monto", array()), 'row');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaalta", array()), 'row');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechabaja", array()), 'row');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "activo", array()), 'row');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "createdBy", array()), 'row');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "updatedBy", array()), 'row');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "createdAt", array()), 'row');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "updatedAt", array()), 'row');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "

                <p>
                    <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 49
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
            <th>Nombre</th>
            <th>Monto</th>
            <th>Fechaalta</th>
            <th>Fechabaja</th>
            <th>Activo</th>
            <th>Createdby</th>
            <th>Updatedby</th>
            <th>Createdat</th>
            <th>Updatedat</th>
            <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 75
            echo "        <tr>
            <td><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becavulnerable_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "monto", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 79
            if ($this->getAttribute($context["entity"], "fechaalta", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaalta", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 80
            if ($this->getAttribute($context["entity"], "fechabaja", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechabaja", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "activo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "createdBy", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "updatedBy", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 84
            if ($this->getAttribute($context["entity"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 85
            if ($this->getAttribute($context["entity"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
        <a class=\"btn btn-mini\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becavulnerable_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>
        <a class=\"btn btn-mini\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becavulnerable_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    </tbody>
</table>
    </div>

    <div class=\"span4\">
    ";
        // line 100
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
    </div>

        <div class=\"span8\">
    <a class=\"btn btn-primary likepaginator\" href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("becavulnerable_new");
        echo "\">
            ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " BecaVulnerable
        </a>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "BecaBundle:BecaVulnerable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 105,  267 => 104,  260 => 100,  253 => 95,  243 => 91,  239 => 90,  234 => 88,  230 => 87,  223 => 85,  217 => 84,  213 => 83,  209 => 82,  205 => 81,  199 => 80,  193 => 79,  189 => 78,  185 => 77,  179 => 76,  176 => 75,  172 => 74,  165 => 70,  141 => 49,  137 => 48,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  91 => 35,  85 => 34,  73 => 25,  66 => 20,  60 => 17,  57 => 16,  55 => 15,  49 => 12,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'BecaVulnerable'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <div class="row">*/
/* */
/*     <div class="span8">*/
/*         <h1>{{ 'views.index.list'|trans({'%entity%': 'BecaVulnerable'}, 'JordiLlonchCrudGeneratorBundle') }}</h1>*/
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
/*             <form class="well" action="{{ path('becavulnerable') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                 {{ form_row(filterForm.id) }}*/
/*                 {{ form_row(filterForm.nombre) }}*/
/*                 {{ form_row(filterForm.monto) }}*/
/*                 {{ form_row(filterForm.fechaalta) }}*/
/*                 {{ form_row(filterForm.fechabaja) }}*/
/*                 {{ form_row(filterForm.activo) }}*/
/*                 {{ form_row(filterForm.createdBy) }}*/
/*                 {{ form_row(filterForm.updatedBy) }}*/
/*                 {{ form_row(filterForm.createdAt) }}*/
/*                 {{ form_row(filterForm.updatedAt) }}*/
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
/*             <th>Nombre</th>*/
/*             <th>Monto</th>*/
/*             <th>Fechaalta</th>*/
/*             <th>Fechabaja</th>*/
/*             <th>Activo</th>*/
/*             <th>Createdby</th>*/
/*             <th>Updatedby</th>*/
/*             <th>Createdat</th>*/
/*             <th>Updatedat</th>*/
/*             <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for entity in entities %}*/
/*         <tr>*/
/*             <td><a href="{{ path('becavulnerable_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*             <td>{{ entity.nombre }}</td>*/
/*             <td>{{ entity.monto }}</td>*/
/*             <td>{% if entity.fechaalta %}{{ entity.fechaalta|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             <td>{% if entity.fechabaja %}{{ entity.fechabaja|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             <td>{{ entity.activo }}</td>*/
/*             <td>{{ entity.createdBy }}</td>*/
/*             <td>{{ entity.updatedBy }}</td>*/
/*             <td>{% if entity.createdAt %}{{ entity.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             <td>{% if entity.updatedAt %}{{ entity.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             <td>*/
/*         <a class="btn btn-mini" href="{{ path('becavulnerable_show', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*         <a class="btn btn-mini" href="{{ path('becavulnerable_edit', { 'id': entity.id }) }}">*/
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
/*     <a class="btn btn-primary likepaginator" href="{{ path('becavulnerable_new') }}">*/
/*             {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} BecaVulnerable*/
/*         </a>*/
/*     </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
