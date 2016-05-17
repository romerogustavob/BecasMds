<?php

/* ::menulogin.html.twig */
class __TwigTemplate_9096ec5491f85f4c6d94e5a71a2acfb5c3e6aae28217db08674bce973c386a65 extends Twig_Template
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
        echo "<div class=\"navbar\" style=\"color: #040404;\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\" style=\"vertical-align: middle !important  ;
               font-family: serif; font-size: 20px;
               float: left;\">
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/beca/images/logoDesarrolloSocial-medium.jpg"), "html", null, true);
        echo "\" alt=\"Mds-Becas\" />
            </a>

            <span style=\"vertical-align: middle; font-family: serif; font-size: 26px; float: right;\">
                <strong> <br><br><br>GESTIÓN DE BECAS - MDS
                </strong>
                <br>
                ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseUrl", array()) == "/app_dev.php")) {
            // line 15
            echo "                    <span style=\"background-color: red; color: white; font-size: 18px; border: 3px; border-color: #040404;\"><strong>ENTORNO DE PRUEBAS</strong></span>
                ";
        }
        // line 17
        echo "            </span>
        </div>
    </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "::menulogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 15,  40 => 14,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="navbar" style="color: #040404;">*/
/*     <div class="navbar-inner">*/
/*         <div class="container">*/
/*             <a class="brand" href="{{ path('becado') }}" style="vertical-align: middle !important  ;*/
/*                font-family: serif; font-size: 20px;*/
/*                float: left;">*/
/*                 <img src="{{ asset('bundles/beca/images/logoDesarrolloSocial-medium.jpg') }}" alt="Mds-Becas" />*/
/*             </a>*/
/* */
/*             <span style="vertical-align: middle; font-family: serif; font-size: 26px; float: right;">*/
/*                 <strong> <br><br><br>GESTIÓN DE BECAS - MDS*/
/*                 </strong>*/
/*                 <br>*/
/*                 {% if app.request.getBaseUrl == "/app_dev.php" %}*/
/*                     <span style="background-color: red; color: white; font-size: 18px; border: 3px; border-color: #040404;"><strong>ENTORNO DE PRUEBAS</strong></span>*/
/*                 {% endif %}*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* </div> */
