<?php

/* :Registration:register.html.twig */
class __TwigTemplate_b0c439767858d659c950457ed0f70fd3c5cda546fa96db7c5cccd384161c1545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":Registration:register.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/token-input.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'stylesheet');
        echo "

    ";
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "30d8e69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_30d8e69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/30d8e69_jquery-1.9.0_1.js");
            // line 15
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 16
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
            // asset "30d8e69_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_30d8e69_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/30d8e69_select2_2.js");
            // line 15
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 16
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
        } else {
            // asset "30d8e69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_30d8e69") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/30d8e69.js");
            // line 15
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 16
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["edit_form"]) ? $context["edit_form"] : null));
            echo "
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "    ";
    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 20
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", ":Registration:register.html.twig", 20)->display($context);
    }

    public function getTemplateName()
    {
        return ":Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  99 => 19,  95 => 18,  89 => 16,  84 => 15,  77 => 16,  72 => 15,  66 => 16,  61 => 15,  56 => 11,  53 => 10,  46 => 6,  42 => 5,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('bundles/persona/css/token-input.css') }}" rel="stylesheet" />*/
/*         {{ form_stylesheet(edit_form) }}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {{ form_javascript(edit_form) }}*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
