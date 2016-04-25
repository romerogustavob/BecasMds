<?php

/* JordiLlonchCrudGeneratorBundle::layout.html.twig */
class __TwigTemplate_1dd06628784a1f17d6a9db96fd52c92970c5412a7ea29047063dcb0e8faaf903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'page' => array($this, 'block_page'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <!-- Le styles -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style>
            body {
                padding-top: 1px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/crud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />   
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/images/favicon.ico"), "html", null, true);
        echo "\">
    </head>
    <body>
        <div class=\"container-fluid\" style=\"padding-left: 2px; margin-left: 0px;\">
            ";
        // line 29
        $this->displayBlock('menu', $context, $blocks);
        // line 32
        echo "        </div>

        <div class=\"container-fluid\" style=\"padding-left:22px; margin-left: 10px;\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 37
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        ";
        $this->displayBlock('page', $context, $blocks);
        // line 43
        echo "        </div>
        
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>   

        ";
        // line 49
        $this->displayBlock('javascript', $context, $blocks);
        // line 50
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.layout.bannersadmin", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        // line 30
        echo "                ";
        $this->loadTemplate("menu.html.twig", "JordiLlonchCrudGeneratorBundle::layout.html.twig", 30)->display($context);
        // line 31
        echo "            ";
    }

    // line 42
    public function block_page($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JordiLlonchCrudGeneratorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 49,  150 => 42,  146 => 31,  143 => 30,  140 => 29,  134 => 5,  129 => 50,  127 => 49,  122 => 47,  118 => 46,  114 => 45,  110 => 43,  107 => 42,  101 => 41,  92 => 38,  87 => 37,  82 => 36,  78 => 35,  73 => 32,  71 => 29,  64 => 25,  54 => 18,  50 => 17,  46 => 16,  37 => 10,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}{{ 'views.layout.bannersadmin'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}{% endblock %}</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <!-- Le styles -->*/
/*         <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap.css') }}" rel="stylesheet">*/
/*         <style>*/
/*             body {*/
/*                 padding-top: 1px; /* 60px to make the container go all the way to the bottom of the topbar *//* */
/*             }*/
/*         </style>*/
/*         <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/jordillonchcrudgenerator/css/crud.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/persona/css/bootstrap-datepicker.css') }}" rel="stylesheet" />   */
/*         <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <!-- Le fav and touch icons -->*/
/*         <link rel="shortcut icon" href="{{ asset('bundles/jordillonchcrudgenerator/images/favicon.ico') }}">*/
/*     </head>*/
/*     <body>*/
/*         <div class="container-fluid" style="padding-left: 2px; margin-left: 0px;">*/
/*             {% block menu %}*/
/*                 {% include 'menu.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <div class="container-fluid" style="padding-left:22px; margin-left: 10px;">*/
/*             {% for type, flashMessages in app.session.flashbag.all() %}*/
/*                 {% for flashMessage in flashMessages %}*/
/*                     <div class="alert alert-{{ type }}">*/
/*                         {{ flashMessage|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% block page %}{% endblock %}*/
/*         </div>*/
/*         */
/*         <script src="{{ asset('bundles/jordillonchcrudgenerator/js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/jordillonchcrudgenerator/js/bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('bundles/persona/js/bootstrap-datepicker.js') }}"></script>   */
/* */
/*         {% block javascript %}{% endblock %}*/
/*     </body>*/
/* </html>*/
