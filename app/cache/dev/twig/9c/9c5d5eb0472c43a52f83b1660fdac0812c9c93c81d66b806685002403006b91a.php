<?php

/* BecaBundle:BecadoBeca:new.html.twig */
class __TwigTemplate_37f9549d90753498f9a0234257fc7911e4134475ac99a51c108127e8c482984c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('page', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Beca
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
<h1>Becado</h1>

<form class=\"well\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("becadobeca_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <p>
        <button type=\"submit\" class=\"btn btn-success\">Crear</button>
    </p>
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("becadobeca");
        echo "\">
            Volver a la lista
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BecaBundle:BecadoBeca:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  52 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  26 => 7,  23 => 6,  21 => 3,);
    }
}
/* {#{% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* #}*/
/* {% block title %}*/
/*     Beca*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/* <h1>Becado</h1>*/
/* */
/* <form class="well" action="{{ path('becadobeca_create') }}" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <button type="submit" class="btn btn-success">Crear</button>*/
/*     </p>*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('becadobeca') }}">*/
/*             Volver a la lista*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
