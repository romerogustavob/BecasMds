<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_188582a7f1fef16bf645d65070c922e9b3fce4da2b8cac3a1214175ee3d97a01 extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <div class=\"control-group\">
        <label class=\"control-label\">DNI</label>
        <div class=\"controls\">                
            <span class=\"input-xlarge uneditable-input\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "dni", array()), "html", null, true);
        echo "</span> 
        </div>
    </div>
    <div class=\"control-group\">
        <label class=\"control-label\">Apellidos</label>
        <div class=\"controls\">                
            <span class=\"input-xlarge uneditable-input\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "apellidos", array()), "html", null, true);
        echo "</span> 
        </div>
    </div> 
    <div class=\"control-group\">
        <label class=\"control-label\">Nombres</label>
        <div class=\"controls\">                
            <span class=\"input-xlarge uneditable-input\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nombres", array()), "html", null, true);
        echo "</span> 
        </div>
    </div> 
    <div class=\"control-group\">
        <label class=\"control-label\">Nombre Usuario</label>
        <div class=\"controls\">                
            <span class=\"input-xlarge uneditable-input\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</span> 
        </div>
    </div>
    <div class=\"control-group\">
        <label class=\"control-label\">Email</label>
        <div class=\"controls\">                
            <span class=\"input-xlarge uneditable-input\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</span> 
        </div>
    </div> 
    <div class=\"control-group\">
        <label class=\"control-label\">Roles</label>
        <div class=\"controls\">                
            <span class=\"input-xlarge uneditable-input\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
            // line 39
            echo "                    ";
            echo twig_escape_filter($this->env, $context["roles"], "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </span> 
        </div>
    </div>
    <div>
        <a class=\"btn btn-warning\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">
            <i class=\"icon-edit\"></i>Cambiar Password
        </a>
    </div>
    ";
        // line 51
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 51,  91 => 45,  85 => 41,  76 => 39,  72 => 38,  62 => 31,  53 => 25,  44 => 19,  35 => 13,  26 => 7,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <div class="control-group">*/
/*         <label class="control-label">DNI</label>*/
/*         <div class="controls">                */
/*             <span class="input-xlarge uneditable-input">{{ user.dni }}</span> */
/*         </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*         <label class="control-label">Apellidos</label>*/
/*         <div class="controls">                */
/*             <span class="input-xlarge uneditable-input">{{ user.apellidos }}</span> */
/*         </div>*/
/*     </div> */
/*     <div class="control-group">*/
/*         <label class="control-label">Nombres</label>*/
/*         <div class="controls">                */
/*             <span class="input-xlarge uneditable-input">{{ user.nombres }}</span> */
/*         </div>*/
/*     </div> */
/*     <div class="control-group">*/
/*         <label class="control-label">Nombre Usuario</label>*/
/*         <div class="controls">                */
/*             <span class="input-xlarge uneditable-input">{{ user.username }}</span> */
/*         </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*         <label class="control-label">Email</label>*/
/*         <div class="controls">                */
/*             <span class="input-xlarge uneditable-input">{{ user.email }}</span> */
/*         </div>*/
/*     </div> */
/*     <div class="control-group">*/
/*         <label class="control-label">Roles</label>*/
/*         <div class="controls">                */
/*             <span class="input-xlarge uneditable-input">*/
/*                 {% for roles in app.user.roles %}*/
/*                     {{ roles }}*/
/*                 {% endfor %}*/
/*                 </span> */
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a class="btn btn-warning" href="{{ path('fos_user_change_password') }}">*/
/*             <i class="icon-edit"></i>Cambiar Password*/
/*         </a>*/
/*     </div>*/
/*     {#<p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>#}*/
/* */
/* </div>*/
/* */
