<?php

/* menulogin.html.twig */
class __TwigTemplate_b585fe35062e39c3202c87052847f6df3b400e8c7c37e7a38bbada10b86eca10 extends Twig_Template
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
        echo "
<div class=\"navbar\" style=\"color: #040404;\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\" style=\"vertical-align: middle !important  ;
               font-family: serif; font-size: 20px;
               float: left;\">
                ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7ecfac4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ecfac4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/7ecfac4_logoDesarrolloSocial-medium_1.jpg");
            // line 9
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        } else {
            // asset "7ecfac4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ecfac4") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/7ecfac4.jpg");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Example\" />
                ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "            </a>

            <span style=\"vertical-align: middle; font-family: serif; font-size: 26px; float: right;\">
                <strong> <br><br><br>GESTIÓN DE BECAS - MDS
                </strong>
                <br>
                ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseUrl", array()) == "/app_dev.php")) {
            // line 18
            echo "                    <span style=\"background-color: red; color: white; font-size: 18px; border: 3px; border-color: #040404;\"><strong>ENTORNO DE PRUEBAS</strong></span>
                ";
        }
        // line 20
        echo "            </span>
        </div>
    </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "menulogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  59 => 18,  57 => 17,  49 => 11,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* */
/* <div class="navbar" style="color: #040404;">*/
/*     <div class="navbar-inner">*/
/*         <div class="container">*/
/*             <a class="brand" href="{{ path('becado') }}" style="vertical-align: middle !important  ;*/
/*                font-family: serif; font-size: 20px;*/
/*                float: left;">*/
/*                 {% image '@BecaBundle/Resources/public/images/logoDesarrolloSocial-medium.jpg' %}*/
/*                 <img src="{{ asset_url }}" alt="Example" />*/
/*                 {% endimage %}*/
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
