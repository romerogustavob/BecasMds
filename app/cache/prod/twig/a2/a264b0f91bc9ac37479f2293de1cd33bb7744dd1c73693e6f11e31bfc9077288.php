<?php

/* :Security:login.html.twig */
class __TwigTemplate_c5d424b318966b8869642227bbda37558e8cc7507d22e11ffba233f7fcbb0ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"login\">  
        <h2 class=\"login-header\">BecasMds</h2>

        ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 6
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "
        <form class=\"login-container\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

            <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

            <label for=\"password\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" />
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  67 => 19,  60 => 15,  55 => 13,  51 => 12,  46 => 10,  42 => 9,  39 => 8,  33 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* <div class="login">  */
/*         <h2 class="login-header">BecasMds</h2>*/
/* */
/*         {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/* */
/*         <form class="login-container" action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*             <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*             <input type="password" id="password" name="_password" required="required" />*/
/* */
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*             <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*             <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*         </form>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
