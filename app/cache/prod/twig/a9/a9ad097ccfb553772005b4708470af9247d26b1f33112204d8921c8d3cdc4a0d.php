<?php

/* PersonaBundle:Calle:show.html.twig */
class __TwigTemplate_c783399c8ca72949407956d111d3da79f0d88fda51853509564d19b17055e9ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Calle:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.show.show", array("%entity%" => "Calle"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
<h2 style=\"color: #0044cc\">Calle</h2>

<form class=\"form-horizontal\">
    <fieldset>        <div class=\"control-group\">
            <label class=\"control-label\">Id</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</span>            </div>
        </div>        
        <div class=\"control-group\">
            <label class=\"control-label\">Nombre</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombre", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        
        
        <div class=\"control-group\">
            <label class=\"control-label\">Descripcion</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true);
        echo "</span>            </div>
        </div>    </fieldset>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("calle");
        echo "\">
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <a class=\"btn btn-primary\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calle_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calle_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 43
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
        return "PersonaBundle:Calle:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  103 => 42,  98 => 40,  91 => 36,  87 => 35,  80 => 31,  76 => 30,  67 => 24,  58 => 18,  51 => 14,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.show.show'|trans({'%entity%': 'Calle'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h2 style="color: #0044cc">Calle</h2>*/
/* */
/* <form class="form-horizontal">*/
/*     <fieldset>        <div class="control-group">*/
/*             <label class="control-label">Id</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.id }}</span>            </div>*/
/*         </div>        */
/*         <div class="control-group">*/
/*             <label class="control-label">Nombre</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.nombre }}</span>            </div>*/
/*         </div>*/
/*         */
/*         */
/*         <div class="control-group">*/
/*             <label class="control-label">Descripcion</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.descripcion }}</span>            </div>*/
/*         </div>    </fieldset>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('calle') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <a class="btn btn-primary" href="{{ path('calle_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.recordactions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <form action="{{ path('calle_delete', { 'id': entity.id }) }}" method="post">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
