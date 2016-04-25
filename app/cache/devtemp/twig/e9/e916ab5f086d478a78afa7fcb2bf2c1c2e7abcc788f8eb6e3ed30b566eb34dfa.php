<?php

/* UsuarioBundle:Default:index.html.twig */
class __TwigTemplate_a8c225b98664d7e46da00524cb4f6871a79fdaabcd434c043db1cea101fac232 extends Twig_Template
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
        // line 5
        $this->displayBlock('menu', $context, $blocks);
        // line 8
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
";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("menulogin.html.twig", "UsuarioBundle:Default:index.html.twig", 6)->display($context);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "        <div class=\"login\">  
            <h2 class=\"login-header\">BecasMds</h2>

            <form class=\"login-container\">
                <p><input type=\"email\" placeholder=\"Email\"></p>
                <p><input type=\"password\" placeholder=\"Password\"></p>
                <p><input type=\"submit\" value=\"Acceder\"></p>
            </form>
            <div class=\"login-container\">
                <a href=\"#\"><strong>Olvidé mi contraseña</strong></a>
            </div>

        </div>
    ";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  57 => 9,  54 => 8,  49 => 6,  46 => 5,  40 => 3,  36 => 2,  31 => 1,  27 => 8,  25 => 5,  23 => 1,);
    }
}
/* {% block stylesheets %}    */
/*     <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('bundles/usuario/css/loginUser.css') }}" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
/* {% block menu %}*/
/*     {% include 'menulogin.html.twig' %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     {% block fos_user_content %}*/
/*         <div class="login">  */
/*             <h2 class="login-header">BecasMds</h2>*/
/* */
/*             <form class="login-container">*/
/*                 <p><input type="email" placeholder="Email"></p>*/
/*                 <p><input type="password" placeholder="Password"></p>*/
/*                 <p><input type="submit" value="Acceder"></p>*/
/*             </form>*/
/*             <div class="login-container">*/
/*                 <a href="#"><strong>Olvidé mi contraseña</strong></a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     {% endblock %}*/
/* {% endblock %}*/
