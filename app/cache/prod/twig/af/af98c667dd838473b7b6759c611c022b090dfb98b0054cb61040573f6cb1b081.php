<?php

/* BecaBundle:BecaVulnerable:show.html.twig */
class __TwigTemplate_635078327c3a57c162bc6f4ceba89dccdba4b6798ed9e9ebb7528c72ab25ed4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "BecaBundle:BecaVulnerable:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.show.show", array("%entity%" => "BecaVulnerable"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
<h1>BecaVulnerable</h1>

<form class=\"form-horizontal\">
    <fieldset>        <div class=\"control-group\">
            <label class=\"control-label\">Id</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Nombre</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombre", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Monto</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "monto", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Fechaalta</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaalta", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Fechabaja</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechabaja", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Activo</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activo", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Createdby</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdBy", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Updatedby</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedBy", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Createdat</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Updatedat</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
        </div>    </fieldset>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("becavulnerable");
        echo "\">
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <a class=\"btn btn-primary\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becavulnerable_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becavulnerable_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 60
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
        return "BecaBundle:BecaVulnerable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 60,  141 => 59,  136 => 57,  129 => 53,  125 => 52,  118 => 48,  114 => 47,  105 => 41,  99 => 38,  93 => 35,  87 => 32,  81 => 29,  75 => 26,  69 => 23,  63 => 20,  57 => 17,  51 => 14,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.show.show'|trans({'%entity%': 'BecaVulnerable'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h1>BecaVulnerable</h1>*/
/* */
/* <form class="form-horizontal">*/
/*     <fieldset>        <div class="control-group">*/
/*             <label class="control-label">Id</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.id }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Nombre</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.nombre }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Monto</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.monto }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Fechaalta</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.fechaalta|date('Y-m-d H:i:s') }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Fechabaja</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.fechabaja|date('Y-m-d H:i:s') }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Activo</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.activo }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Createdby</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.createdBy }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Updatedby</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.updatedBy }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Createdat</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.createdAt|date('Y-m-d H:i:s') }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Updatedat</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.updatedAt|date('Y-m-d H:i:s') }}</span>            </div>*/
/*         </div>    </fieldset>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('becavulnerable') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <a class="btn btn-primary" href="{{ path('becavulnerable_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.recordactions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <form action="{{ path('becavulnerable_delete', { 'id': entity.id }) }}" method="post">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
