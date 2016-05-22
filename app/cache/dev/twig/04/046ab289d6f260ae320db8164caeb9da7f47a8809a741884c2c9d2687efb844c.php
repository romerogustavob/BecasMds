<?php

/* BecaBundle:BecadoBeca:edit.html.twig */
class __TwigTemplate_0f0b0ef1d5fdbba12d1ab41ceeacaa29b11410413df22d921dfe73ae77a5f46d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "BecaBundle:BecadoBeca:edit.html.twig", 1);
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
        echo " -  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "BecadoBeca"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "BecadoBeca"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h1>

<form class=\"well\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    <table>
        <tbody>
            <tr class=\"form-horizontal\">
                <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becado", array()), 'row', array("attr" => array("style" => "width:100%; cursor: not-allowed; length: 1;", "readonly" => "true")));
        echo "</td>
                ";
        // line 17
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "beca", array()), "vars", array()), "value", array()))) {
            // line 18
            echo "                    <td>
                    ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "beca", array()), 'row', array("attr" => array("style" => "width:90%;")));
            echo "
                    
                    <a class=\"btn btn-mini\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("beca_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "beca", array()), "vars", array()), "value", array()))), "html", null, true);
            echo "\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
                    </a>
                    ";
        } else {
            // line 25
            echo "                        <div style=\"display:none\">
                            ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "beca", array()), 'row', array("attr" => array("style" => "width:90%;")));
            echo "
                        </div>
                    </td>
                    ";
        }
        // line 30
        echo "                        
                
                <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becaVulnerable", array()), 'row', array("attr" => array("style" => "width:100%;")));
        echo "
                    <a class=\"btn btn-mini\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becavulnerable_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becaVulnerable", array()), "vars", array()), "value", array()))), "html", null, true);
        echo "\">
                        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                    </a>
                    ";
        // line 38
        echo "          
                </td>
            </tr>
            <tr>
                <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaAlta", array()), 'row');
        echo "</td>
                <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaBaja", array()), 'row');
        echo "</td>
                <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "activo", array()), 'row');
        echo "</td>
            </tr>
            <tr>
                <td colspan='3'>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "detalles", array()), 'row', array("attr" => array("style" => "width:100%;")));
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
    <p>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
    </p>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("becadobeca");
        echo "\">
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 67
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BecaBundle:BecadoBeca:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 67,  169 => 66,  164 => 64,  157 => 60,  153 => 59,  144 => 53,  139 => 51,  132 => 47,  126 => 44,  122 => 43,  118 => 42,  112 => 38,  107 => 34,  103 => 33,  99 => 32,  95 => 30,  88 => 26,  85 => 25,  79 => 22,  75 => 21,  70 => 19,  67 => 18,  65 => 17,  61 => 16,  51 => 11,  46 => 9,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} -  {{ 'views.edit.edit'|trans({'%entity%': 'BecadoBeca'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h1>{{ 'views.edit.edit'|trans({'%entity%': 'BecadoBeca'}, 'JordiLlonchCrudGeneratorBundle') }}</h1>*/
/* */
/* <form class="well" action="{{ path('becadobeca_update', { 'id': entity.id }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*     <input type="hidden" name="_method" value="PUT" />*/
/*     <table>*/
/*         <tbody>*/
/*             <tr class="form-horizontal">*/
/*                 <td>{{ form_row(edit_form.becado, {'attr':{'style':'width:100%; cursor: not-allowed; length: 1;', 'readonly':'true' }} ) }}</td>*/
/*                 {% if edit_form.beca.vars.value is not empty %}*/
/*                     <td>*/
/*                     {{ form_row(edit_form.beca, {'attr':{'style':'width:90%;'}}) }}*/
/*                     */
/*                     <a class="btn btn-mini" href="{{ path('beca_show', { 'id': edit_form.beca.vars.value  }) }}">*/
/*                         {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                     </a>*/
/*                     {% else %}*/
/*                         <div style="display:none">*/
/*                             {{ form_row(edit_form.beca, {'attr':{'style':'width:90%;'}}) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     {% endif %}*/
/*                         */
/*                 */
/*                 <td>{{ form_row(edit_form.becaVulnerable, {'attr':{'style':'width:100%;'}}) }}*/
/*                     <a class="btn btn-mini" href="{{ path('becavulnerable_show', { 'id': edit_form.becaVulnerable.vars.value  }) }}">*/
/*                         {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                     </a>*/
/*                     {#<a class="btn btn-mini" href="{{ path('becavulnerable_edit', { 'id': entity.id }) }}">*/
/*                         {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                     </a>  #}          */
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ form_row(edit_form.fechaAlta) }}</td>*/
/*                 <td>{{ form_row(edit_form.fechaBaja) }}</td>*/
/*                 <td>{{ form_row(edit_form.activo) }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan='3'>{{ form_row(edit_form.detalles, {'attr':{'style':'width:100%;'}}) }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     {{ form_widget(edit_form) }}*/
/*     <p>*/
/*         <button type="submit" class="btn btn-success">{{ 'views.edit.editbutton'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*     </p>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('becadobeca') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <form action="{{ path('becadobeca_delete', { 'id': entity.id }) }}" method="post">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
