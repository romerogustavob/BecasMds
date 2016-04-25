<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a3dfedc3e78c692208a4d5af04b1a066a21c53798d8c5cf458f2d49e544c63fc extends Twig_Template
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
