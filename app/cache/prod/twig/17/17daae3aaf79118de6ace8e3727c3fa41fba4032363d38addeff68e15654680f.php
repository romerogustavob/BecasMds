<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a508b427e5fe0f4ef5fac299a674e00df913f0eae1616a40d1bedd9bda077c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "BecasMds";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "        <div class=\"login\">  
            <h2 class=\"login-header\">BecasMds</h2>

            ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 12
            echo "                <div style=\"color: red;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 14
        echo "
            <form class=\"login-container\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

                <label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                                
                <p style=\"display:inline-block\"><label for=\"remember_me\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                </label> 
                
                </p>

                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </form>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  87 => 25,  80 => 21,  75 => 19,  71 => 18,  66 => 16,  62 => 15,  59 => 14,  53 => 12,  51 => 11,  46 => 8,  39 => 7,  36 => 6,  30 => 4,  11 => 1,);
    }
}
/* {% extends 'FOSUserBundle::layout.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block title %}BecasMds{% endblock %}*/
/* */
/* {% block content %}*/
/*     {% block fos_user_content %}*/
/*         <div class="login">  */
/*             <h2 class="login-header">BecasMds</h2>*/
/* */
/*             {% if error %}*/
/*                 <div style="color: red;">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*             {% endif %}*/
/* */
/*             <form class="login-container" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                 <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                 <input type="password" id="password" name="_password" required="required" />*/
/*                                 */
/*                 <p style="display:inline-block"><label for="remember_me">*/
/*                     {{ 'security.login.remember_me'|trans }}*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                 </label> */
/*                 */
/*                 </p>*/
/* */
/*                 <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
