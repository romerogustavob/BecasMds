<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_070a38193a75bf29815de3fff4253e0adcaa670e8b3b6a4f3044c756aea42e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout_interno.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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

    // line 3
    public function block_page($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 5)->display($context);
        // line 6
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout_interno.html.twig" %}*/
/* */
/* {% block page %}*/
/*     {% block fos_user_content %}*/
/*         {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/*     {% endblock fos_user_content %}*/
/* {% endblock page %}*/
