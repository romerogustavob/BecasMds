<?php

/* PersonaBundle:Domicilio:new.html.twig */
class __TwigTemplate_d0ae74f2c398df987e621ab0767783112a330d2d48b43e1e241ecc6a957c54f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Domicilio:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "Domicilio"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('javascript', $context, $blocks);
        // line 26
        echo "<h2 style=\"color: #0044cc\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "Domicilio"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>

<form class=\"well\" role=\"form\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("domicilio_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localidad", array()), 'row');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'stylesheet');
        echo "
    ";
        // line 31
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    
        ";
        // line 37
        echo "    <p>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
    </p>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("domicilio");
        echo "\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'stylesheet');
        echo "

    ";
    }

    // line 15
    public function block_javascript($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
        ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3cf3039_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3cf3039_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3cf3039_select2_1.js");
            // line 21
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        
        ";
        } else {
            // asset "3cf3039"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3cf3039") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3cf3039.js");
            // line 21
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
        <script type=\"text/javascript\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        
        ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Domicilio:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 25,  156 => 22,  151 => 21,  143 => 22,  138 => 21,  134 => 17,  129 => 16,  126 => 15,  119 => 11,  115 => 10,  110 => 9,  107 => 8,  98 => 45,  94 => 44,  85 => 38,  82 => 37,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  59 => 28,  53 => 26,  51 => 15,  48 => 14,  45 => 8,  42 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.new.creation'|trans({'%entity%': 'Domicilio'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/*     {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         {{ form_stylesheet(form) }}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {{ parent() }}*/
/*         {% javascripts*/
/*                '@PersonaBundle/Resources/public/js/select2.js'*/
/*                       */
/*         %}*/
/*         {{ form_javascript(form) }}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         */
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/* <h2 style="color: #0044cc">{{ 'views.new.creation'|trans({'%entity%': 'Domicilio'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/* */
/* <form class="well" role="form" action="{{ path('domicilio_create') }}" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_row(form.localidad) }}*/
/*     {{ form_stylesheet(form) }}*/
/*     {{ form_javascript(form) }}*/
/*     {{ form_widget(form) }}*/
/*     */
/*         {#<div class="form-group">{{ form_widget(form.barrio, { 'attr': {'class': 'form-control' } }) }}</div>*/
/*         <div class="form-group">{{ form_widget(form.localidad, { 'attr': {'class': 'form-control' } }) }}</div>*/
/*         #}*/
/*     <p>*/
/*         <button type="submit" class="btn btn-success">{{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*     </p>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('domicilio') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
