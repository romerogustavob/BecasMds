<?php

/* PersonaBundle:Domicilio:show.html.twig */
class __TwigTemplate_a15a6c2c8d6670cc65f49e0cb1515db9eacdff6d603e62ec211333a424e2ab48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Domicilio:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.show.show", array("%entity%" => "Domicilio"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
<h2 style=\"color: #0044cc\">Domicilio</h2>

<form class=\"form-horizontal\">
    <fieldset>        <div class=\"control-group\">
            <label class=\"control-label\">Id</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Numero</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numero", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Dpto</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dpto", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Piso</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "piso", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Edificio</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "edificio", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Manzana</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "manzana", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Tira</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tira", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Parcela</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "parcela", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Quinta</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "quinta", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Unidadfuncional</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "unidadFuncional", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Latitude</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "latitude", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Longitude</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "longitude", array()), "html", null, true);
        echo "</span>            </div>
        </div>        <div class=\"control-group\">
            <label class=\"control-label\">Referencias</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referencias", array()), "html", null, true);
        echo "</span>            </div>
        </div>    </fieldset>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("domicilio");
        echo "\">
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <a class=\"btn btn-primary\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domicilio_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domicilio_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 69
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
        return "PersonaBundle:Domicilio:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 69,  159 => 68,  154 => 66,  147 => 62,  143 => 61,  136 => 57,  132 => 56,  123 => 50,  117 => 47,  111 => 44,  105 => 41,  99 => 38,  93 => 35,  87 => 32,  81 => 29,  75 => 26,  69 => 23,  63 => 20,  57 => 17,  51 => 14,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.show.show'|trans({'%entity%': 'Domicilio'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h2 style="color: #0044cc">Domicilio</h2>*/
/* */
/* <form class="form-horizontal">*/
/*     <fieldset>        <div class="control-group">*/
/*             <label class="control-label">Id</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.id }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Numero</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.numero }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Dpto</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.dpto }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Piso</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.piso }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Edificio</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.edificio }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Manzana</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.manzana }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Tira</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.tira }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Parcela</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.parcela }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Quinta</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.quinta }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Unidadfuncional</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.unidadFuncional }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Latitude</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.latitude }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Longitude</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.longitude }}</span>            </div>*/
/*         </div>        <div class="control-group">*/
/*             <label class="control-label">Referencias</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.referencias }}</span>            </div>*/
/*         </div>    </fieldset>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('domicilio') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <a class="btn btn-primary" href="{{ path('domicilio_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.recordactions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <form action="{{ path('domicilio_delete', { 'id': entity.id }) }}" method="post">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
