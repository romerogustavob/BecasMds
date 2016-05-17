<?php

/* FormacionBundle:Formacion:show.html.twig */
class __TwigTemplate_d2d72347584467f7c84d1d07929255ba1ba8ea144797cd70dec58350f5525489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "FormacionBundle:Formacion:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.show.show", array("%entity%" => "Formación"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
<h2 style=\"color: #0044cc\">Formación</h2>

<form class=\"form-horizontal\">
    <fieldset>        <div class=\"control-group\">
            <label class=\"control-label\">Id</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</span>            </div>
        </div>    
        <div class=\"control-group\">
            <label class=\"control-label\">Institución</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "institucion", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\">Nivel Educativo</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nivelEducativo", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\">Profesión</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "profesion", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\">Oficio</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "oficio", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\">Perfil</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "perfil", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\">Descripción</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        
    </fieldset>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("formacion");
        echo "\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <a class=\"btn btn-primary\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formacion_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 59
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
        return "FormacionBundle:Formacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 59,  131 => 58,  126 => 56,  119 => 52,  115 => 51,  108 => 47,  104 => 46,  93 => 38,  86 => 34,  79 => 30,  72 => 26,  65 => 22,  58 => 18,  51 => 14,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.show.show'|trans({'%entity%': 'Formación'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h2 style="color: #0044cc">Formación</h2>*/
/* */
/* <form class="form-horizontal">*/
/*     <fieldset>        <div class="control-group">*/
/*             <label class="control-label">Id</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.id }}</span>            </div>*/
/*         </div>    */
/*         <div class="control-group">*/
/*             <label class="control-label">Institución</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.institucion }}</span>            </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             <label class="control-label">Nivel Educativo</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.nivelEducativo }}</span>            </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             <label class="control-label">Profesión</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.profesion }}</span>            </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             <label class="control-label">Oficio</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.oficio }}</span>            </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             <label class="control-label">Perfil</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.perfil }}</span>            </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             <label class="control-label">Descripción</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.descripcion }}</span>            </div>*/
/*         </div>*/
/*         */
/*     </fieldset>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('formacion') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <a class="btn btn-primary" href="{{ path('formacion_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.recordactions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <form action="{{ path('formacion_delete', { 'id': entity.id }) }}" method="post">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
