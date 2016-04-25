<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c91b8e8017954b3923f4f2d5fe9c1dd459440b306559dcfdb19349c8399e2c81 extends Twig_Template
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
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
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
        return array (  38 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout_interno.html.twig" %}*/
/* {% block page %}*/
/* {% block fos_user_content %}*/
/* {% include 'FOSUserBundle:Registration:register_content.html.twig' %}*/
/* {% endblock fos_user_content %}*/
/* {% endblock page %}*/
/* */
