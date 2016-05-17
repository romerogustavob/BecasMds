<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a3056c96c2f85ba73f1fec454ec7615ff210a03a7c58e6f86d2271e144e38117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout_interno.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout_interno.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  39 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout_interno.html.twig" %}*/
/* {% block page %}*/
/*     {% block fos_user_content %}*/
/*         {% include 'FOSUserBundle:Registration:register_content.html.twig' %}*/
/*     {% endblock fos_user_content %}*/
/* {% endblock page %}*/
/* */
