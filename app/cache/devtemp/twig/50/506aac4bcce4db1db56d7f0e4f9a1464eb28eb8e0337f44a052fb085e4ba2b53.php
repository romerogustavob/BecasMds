<?php

/* ::menulogin.html.twig */
class __TwigTemplate_93c661b7656e6cf96f5aeaba4e361a96c00a26d6c2c3f0ae0db26e02581cf0ea extends Twig_Template
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
                </strong></span>
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
        return array (  49 => 11,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
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
/*                 </strong></span>*/
/*         </div>*/
/*     </div>*/
/* </div> */
