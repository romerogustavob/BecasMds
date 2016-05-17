<?php

/* PersonaBundle:Responsable:new.html.twig */
class __TwigTemplate_22ddd45099cdeb76fe7eab7ab1329289063f2aa3e38f360ab486ccc11fc418d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Responsable:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'scripts' => array($this, 'block_scripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "Responsable"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_scripts($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
    ";
        // line 9
        if (array_key_exists("form", $context)) {
            // line 10
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/js/select2.min.js"), "html", null, true);
            echo "\"></script>
        ";
            // line 11
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
            echo "
    ";
        }
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 17
        if (array_key_exists("form", $context)) {
            // line 18
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/css/select2.min.css"), "html", null, true);
            echo "\">
        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'stylesheet');
            echo "
    ";
        }
    }

    // line 23
    public function block_page($context, array $blocks = array())
    {
        // line 24
        echo "
<h2 style=\"color: #0044cc\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "Responsable"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>

<form class=\"well\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("responsable_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <p>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
    </p>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("responsable");
        echo "\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Responsable:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  117 => 36,  108 => 30,  103 => 28,  97 => 27,  92 => 25,  89 => 24,  86 => 23,  79 => 19,  74 => 18,  72 => 17,  67 => 16,  64 => 15,  57 => 11,  52 => 10,  50 => 9,  45 => 8,  42 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.new.creation'|trans({'%entity%': 'Responsable'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/*     {{ parent() }}*/
/*     {% if form is defined %}*/
/*         <script src="{{ asset('bundles/genemuform/js/select2.min.js') }}"></script>*/
/*         {{ form_javascript(form) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% if form is defined %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/genemuform/css/select2.min.css') }}">*/
/*         {{ form_stylesheet(form) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h2 style="color: #0044cc">{{ 'views.new.creation'|trans({'%entity%': 'Responsable'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/* */
/* <form class="well" action="{{ path('responsable_create') }}" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <button type="submit" class="btn btn-success">{{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*     </p>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('responsable') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
