<?php

/* BecaBundle:BecadoBeca:new.html.twig */
class __TwigTemplate_6a7ffc6d2053f0783566155fc86d0dfc5d2a103d08994f5f0589e8a22aa991b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page' => array($this, 'block_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('page', $context, $blocks);
    }

    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 10
        echo "
<form class=\"well\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("becadobeca_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    <table>
        <thead>
            
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class=\"control-group\">
                        
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becado", array()), 'label');
        echo "
                        
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becado", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "
                        
                    </div>
                </td>
                <td>
                    <div class=\"control-group\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "beca", array()), 'row');
        echo "
                    </div>
                    </td>
            </tr>
            <tr>
                <td>
                     <div class=\"control-group\">
                     ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaAlta", array()), 'row');
        echo "
                    </div>
                   
                </td>
                <td>
                    <div class=\"control-group\">
                     ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaBaja", array()), 'row');
        echo "
                    </div>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <div class=\"control-group\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'row');
        echo "
                    </div>
                    
                </td>
                <td> 
                    <div class=\"control-group\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "detalles", array()), 'row');
        echo "
                    </div></td>
            </tr>
        </tbody>
    </table>
    ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    <p>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
    </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "BecaBundle:BecadoBeca:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 64,  115 => 62,  107 => 57,  98 => 51,  87 => 43,  78 => 37,  68 => 30,  59 => 24,  54 => 22,  41 => 12,  35 => 11,  32 => 10,  29 => 8,  23 => 7,  20 => 6,);
    }
}
/* {#{% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* #}*/
/* {#{% block title %}*/
/* {{ parent() }} - {{ 'views.new.creation'|trans({'%entity%': 'BecadoBeca'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}#}*/
/* */
/* {% block page %}*/
/* */
/* {#<h2 style="color: #0044cc">Añadir Beca{{ 'views.new.creation'|trans({'%entity%': 'Becas'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>#}*/
/* */
/* <form class="well" action="{{ path('becadobeca_create') }}" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_start(form) }}*/
/*     <table>*/
/*         <thead>*/
/*             */
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>*/
/*                     <div class="control-group">*/
/*                         */
/*                         {{ form_label(form.becado) }}*/
/*                         */
/*                         {{ form_widget(form.becado, { 'attr': {'disabled': 'disabled'} }) }}*/
/*                         */
/*                     </div>*/
/*                 </td>*/
/*                 <td>*/
/*                     <div class="control-group">*/
/*                     {{ form_row(form.beca) }}*/
/*                     </div>*/
/*                     </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                      <div class="control-group">*/
/*                      {{ form_row(form.fechaAlta) }}*/
/*                     </div>*/
/*                    */
/*                 </td>*/
/*                 <td>*/
/*                     <div class="control-group">*/
/*                      {{ form_row(form.fechaBaja) }}*/
/*                     </div>*/
/*                     */
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <div class="control-group">*/
/*                     {{ form_row(form.activo) }}*/
/*                     </div>*/
/*                     */
/*                 </td>*/
/*                 <td> */
/*                     <div class="control-group">*/
/*                     {{ form_row(form.detalles) }}*/
/*                     </div></td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     {{ form_end(form) }}*/
/*     <p>*/
/*         <button type="submit" class="btn btn-success">{{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*     </p>*/
/* </form>*/
/* */
/* {#<div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('becadobeca') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/* </div>#}*/
/* {% endblock %}*/
