<?php

/* ::layout.html.twig */
class __TwigTemplate_c3aac6c16c05393878d917b20244534ba14ef177c519ee35a7ac5355ee9711f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('menu', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "    
    <link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/usuario/css/loginUser.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("menulogin.html.twig", "::layout.html.twig", 8)->display($context);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo "   
    ";
        // line 12
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo " 
";
    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  76 => 12,  71 => 14,  69 => 12,  64 => 11,  59 => 8,  56 => 7,  50 => 4,  46 => 3,  42 => 2,  37 => 1,  33 => 11,  30 => 10,  28 => 7,  25 => 6,  23 => 1,);
    }
}
/* {% block stylesheets %}    */
/*     <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/usuario/css/loginUser.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/persona/css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     {% include 'menulogin.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block content %}   */
/*     {% block fos_user_content %}*/
/* */
/*     {% endblock fos_user_content %} */
/* {% endblock content %}*/
/* */
