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
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
        // line 23
        echo "<h2 style=\"color: #0044cc\">Añadir Beca";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becado", array()), "html", null, true);
        echo "</h2>

<form class=\"well\" action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("becadobeca_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    <table>
        <thead>
            
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class=\"control-group\" style=\"display: none\">
                        
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becado", array()), 'label');
        echo "                        
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becado", array()), 'widget');
        echo "
                        
                    </div>
                    <div class=\"control-group\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "beca", array()), 'row');
        echo "
                    </div>
                        
                </td>
                <td>
                    <div class=\"control-group\">
                     ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaAlta", array()), 'row');
        echo "
                    </div>
                    </td>
            </tr>
            <tr>
                <td>
                     <div class=\"control-group\">
                     ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaBaja", array()), 'row');
        echo "
                    </div>
                   
                </td>
                <td>                    
                    <div class=\"control-group\">
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activo", array()), 'row');
        echo "
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class=\"control-group\">
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "detalles", array()), 'row');
        echo "
                    </div>
                    
                </td>
                <td> 
                    </td>
            </tr>
        </tbody>
    </table>
                    
    <p>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
    </p>
    ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</form>

";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    ";
    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e604a14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_jquery-1.9.0_1.js");
            // line 20
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e604a14_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e604a14_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2Becado_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "e604a14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "    ";
    }

    public function getTemplateName()
    {
        return "BecaBundle:BecadoBeca:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 22,  162 => 20,  157 => 15,  154 => 14,  147 => 10,  142 => 9,  139 => 8,  131 => 80,  126 => 78,  112 => 67,  102 => 60,  93 => 54,  83 => 47,  74 => 41,  67 => 37,  63 => 36,  50 => 26,  44 => 25,  38 => 23,  36 => 14,  33 => 13,  31 => 8,  25 => 7,  22 => 6,);
    }
}
/* {#{% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* #}*/
/* {#{% block title %}*/
/* {{ parent() }} - {{ 'views.new.creation'|trans({'%entity%': 'BecadoBeca'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}#}*/
/* */
/* {% block page %}*/
/* {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*       */
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Becado.js'*/
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/* <h2 style="color: #0044cc">Añadir Beca{{ entity.becado }}</h2>*/
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
/*                     <div class="control-group" style="display: none">*/
/*                         */
/*                         {{ form_label(form.becado) }}                        */
/*                         {{ form_widget(form.becado) }}*/
/*                         */
/*                     </div>*/
/*                     <div class="control-group">*/
/*                     {{ form_row(form.beca) }}*/
/*                     </div>*/
/*                         */
/*                 </td>*/
/*                 <td>*/
/*                     <div class="control-group">*/
/*                      {{ form_row(form.fechaAlta) }}*/
/*                     </div>*/
/*                     </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                      <div class="control-group">*/
/*                      {{ form_row(form.fechaBaja) }}*/
/*                     </div>*/
/*                    */
/*                 </td>*/
/*                 <td>                    */
/*                     <div class="control-group">*/
/*                     {{ form_row(form.activo) }}*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <div class="control-group">*/
/*                     {{ form_row(form.detalles) }}*/
/*                     </div>*/
/*                     */
/*                 </td>*/
/*                 <td> */
/*                     </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*                     */
/*     <p>*/
/*         <button type="submit" class="btn btn-success">{{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*     </p>*/
/*     {{ form_end(form) }}*/
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
