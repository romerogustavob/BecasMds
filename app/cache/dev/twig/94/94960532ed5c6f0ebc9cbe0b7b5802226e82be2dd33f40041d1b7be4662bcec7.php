<?php

/* layout.html.twig */
class __TwigTemplate_3c0c8b405b60efd461164e0213c7e25fad87b4c2f8a96c6ce19346887131f79c extends Twig_Template
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
        $this->displayBlock('menu', $context, $blocks);
        // line 9
        echo "
";
        // line 10
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/boostrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->loadTemplate("menulogin.html.twig", "layout.html.twig", 7)->display($context);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        echo "   
    ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo " 
";
    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  73 => 11,  68 => 13,  66 => 11,  61 => 10,  56 => 7,  53 => 6,  47 => 4,  43 => 3,  39 => 2,  34 => 1,  30 => 10,  27 => 9,  25 => 6,  23 => 1,);
    }
}
/* {% block stylesheets %}    */
/*     <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/usuario/css/loginUser.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/persona/css/boostrap-datepicker.css') }}" rel="stylesheet" />*/
/* {% endblock %}*/
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
