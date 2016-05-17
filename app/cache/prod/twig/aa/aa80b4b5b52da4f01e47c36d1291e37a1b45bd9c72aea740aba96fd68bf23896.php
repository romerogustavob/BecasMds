<?php

/* BecaBundle:TipoFuncion:index.html.twig */
class __TwigTemplate_ae41c66d7352d77aca01a9ee43ec7a4b36cdea7aa14aaca0b2f14bb60ea2ded8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "BecaBundle:TipoFuncion:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "TipoFuncion"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
    <div class=\"span8\">
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "TipoFuncion"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"span2\">
        ";
        // line 13
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 14
            echo "        <div class=\"alert alert-block alert-error fade in form-errors\">
            ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
        </div>
        ";
        }
        // line 18
        echo "        &nbsp;
    </div>
    <div class=\"span2\">
        <div class=\"filters-right\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                <span class=\"caret\"></span>
            </a>
        </div>
    </div>

    <div class=\"span12\">
        <div id=\"filters\" class=\"collapse\">
            <form class=\"well\" action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("tipofuncion");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "descripcion", array()), 'row');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "activo", array()), 'row');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "

                <p>
                    <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 39
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
            <th>Descripcion</th>
            <th>Activo</th>
            <th>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 58
            echo "        <tr>
            <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipofuncion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 61
            if ($this->getAttribute($context["entity"], "activo", array())) {
                echo " Sí ";
            } else {
                echo " No ";
            }
            echo "</td>
            <td>
        <a class=\"btn btn-mini\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipofuncion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>
        <a class=\"btn btn-mini\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipofuncion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </tbody>
</table>
    </div>

    <div class=\"span4\">
    ";
        // line 76
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
    </div>

        <div class=\"span8\">
    <a class=\"btn btn-primary likepaginator\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("tipofuncion_new");
        echo "\">
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " TipoFuncion
        </a>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "BecaBundle:TipoFuncion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 81,  197 => 80,  190 => 76,  183 => 71,  173 => 67,  169 => 66,  164 => 64,  160 => 63,  151 => 61,  147 => 60,  141 => 59,  138 => 58,  134 => 57,  127 => 53,  110 => 39,  106 => 38,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  82 => 31,  71 => 23,  64 => 18,  58 => 15,  55 => 14,  53 => 13,  47 => 10,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'TipoFuncion'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* <div class="row">*/
/*     <div class="span8">*/
/*         <h1>{{ 'views.index.list'|trans({'%entity%': 'TipoFuncion'}, 'JordiLlonchCrudGeneratorBundle') }}</h1>*/
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
/*             <form class="well" action="{{ path('tipofuncion') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                 {{ form_row(filterForm.id) }}*/
/*                 {{ form_row(filterForm.descripcion) }}*/
/*                 {{ form_row(filterForm.activo) }}*/
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
/*             <th>Descripcion</th>*/
/*             <th>Activo</th>*/
/*             <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for entity in entities %}*/
/*         <tr>*/
/*             <td><a href="{{ path('tipofuncion_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*             <td>{{ entity.descripcion }}</td>*/
/*             <td>{% if entity.activo %} Sí {% else %} No {% endif %}</td>*/
/*             <td>*/
/*         <a class="btn btn-mini" href="{{ path('tipofuncion_show', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*         <a class="btn btn-mini" href="{{ path('tipofuncion_edit', { 'id': entity.id }) }}">*/
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
/*     <a class="btn btn-primary likepaginator" href="{{ path('tipofuncion_new') }}">*/
/*             {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} TipoFuncion*/
/*         </a>*/
/*     </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
