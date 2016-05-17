<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_fd7aca7f6413e70ee0ac128147216c92262584c668a66d175f0b481fb3ba9912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Registration\\register_content.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "Registration\\register_content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'Registration\\register_content.html.twig' %}*/
/* */
