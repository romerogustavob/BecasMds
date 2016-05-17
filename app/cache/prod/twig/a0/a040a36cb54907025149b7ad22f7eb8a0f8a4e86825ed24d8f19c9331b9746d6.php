<?php

/* BecaBundle:Default:index.html.twig */
class __TwigTemplate_7423b8db804bb2a423a3a6b435a287b7e2427095226dcd610fda918c9cf00463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "BecaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
