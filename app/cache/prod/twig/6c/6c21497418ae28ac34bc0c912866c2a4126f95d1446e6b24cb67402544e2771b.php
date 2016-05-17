<?php

/* FormacionBundle:Terciario:show.html.twig */
class __TwigTemplate_f44a92f03c1ac922a655db845d39d265296343b9af411316aefc37679a48e82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "FormacionBundle:Terciario:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.show.show", array("%entity%" => "Terciario"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
<h2 style=\"color: #0044cc\">Terciario</h2>

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
            <label class=\"control-label\">Tipo Educación</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoeducacion", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\">Carrera</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "carrera", array()), "html", null, true);
        echo "</span>            </div>
        </div>        
            <div class=\"control-group\">
            <label class=\"control-label\">Título</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "titulo", array()), "html", null, true);
        echo "</span>            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\">Nivel</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nivel", array()), "html", null, true);
        echo "</span>            </div>
        </div>    
        <div class=\"control-group\">
            <label class=\"control-label\">Descripción</label>
            <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcon", array()), "html", null, true);
        echo "</span>            </div>
        </div>
    </fieldset>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("terciario");
        echo "\">
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terciario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terciario_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 58
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
        return "FormacionBundle:Terciario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 58,  130 => 57,  125 => 55,  118 => 51,  114 => 50,  107 => 46,  103 => 45,  93 => 38,  86 => 34,  79 => 30,  72 => 26,  65 => 22,  58 => 18,  51 => 14,  43 => 8,  40 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.show.show'|trans({'%entity%': 'Terciario'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h2 style="color: #0044cc">Terciario</h2>*/
/* */
/* <form class="form-horizontal">*/
/*     <fieldset>        <div class="control-group">*/
/*             <label class="control-label">Id</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.id }}</span>            </div>*/
/*         </div>        */
/*         <div class="control-group">*/
/*             <label class="control-label">Institución</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.institucion }}</span>            </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             <label class="control-label">Tipo Educación</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.tipoeducacion }}</span>            </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             <label class="control-label">Carrera</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.carrera }}</span>            </div>*/
/*         </div>        */
/*             <div class="control-group">*/
/*             <label class="control-label">Título</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.titulo }}</span>            </div>*/
/*         </div>*/
/*         <div class="control-group">*/
/*             <label class="control-label">Nivel</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.nivel }}</span>            </div>*/
/*         </div>    */
/*         <div class="control-group">*/
/*             <label class="control-label">Descripción</label>*/
/*             <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.descripcon }}</span>            </div>*/
/*         </div>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('terciario') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <a class="btn btn-primary" href="{{ path('terciario_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.recordactions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <form action="{{ path('terciario_delete', { 'id': entity.id }) }}" method="post">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
