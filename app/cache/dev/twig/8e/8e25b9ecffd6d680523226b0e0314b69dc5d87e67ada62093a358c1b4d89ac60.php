<?php

/* :Registration:register_content.html.twig */
class __TwigTemplate_78b8dc96a9dcfc5c110b767cd49a920a252fbe43de3e349dfe5838b3b391997c extends Twig_Template
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
<div class=\"well\">
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
<div class=\"form-control\">
    <fieldset>
        <div>
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()), 'label');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'label');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombres", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombres", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
        </div>
        <div>
            
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "roles", array()), 'row');
        echo "
        </div>
       <div>
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'row');
        echo "
        </div> 
        <div>
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "created_at", array()), 'row');
        echo "
        </div>
        <div>
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "updated_at", array()), 'row');
        echo "
        </div>
        <div>
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'label', array("label" => "Habilitado"));
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'widget');
        echo "
        </div>
    </fieldset>
    <div>
        <input type=\"submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</div>
";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return ":Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  116 => 46,  109 => 42,  105 => 41,  99 => 38,  93 => 35,  87 => 32,  81 => 29,  74 => 25,  70 => 24,  64 => 21,  60 => 20,  54 => 17,  50 => 16,  44 => 13,  40 => 12,  34 => 9,  30 => 8,  23 => 4,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="well">*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* <div class="form-control">*/
/*     <fieldset>*/
/*         <div>*/
/*             {{ form_label(form.dni) }}*/
/*             {{ form_widget(form.dni) }}*/
/*         </div>*/
/*         <div>*/
/*             {{ form_label(form.apellidos) }}*/
/*             {{ form_widget(form.apellidos) }}*/
/*         </div>*/
/*         <div>*/
/*             {{ form_label(form.nombres) }}*/
/*             {{ form_widget(form.nombres) }}*/
/*         </div>*/
/*         <div>*/
/*             {{ form_label(form.username) }}*/
/*             {{ form_widget(form.username) }}*/
/*         </div>*/
/*         <div>*/
/*             {{ form_label(form.email) }}*/
/*             {{ form_widget(form.email) }}*/
/*         </div>*/
/*         <div>*/
/*             */
/*             {{ form_row(form.roles) }}*/
/*         </div>*/
/*        <div>*/
/*             {{ form_row(form.plainPassword) }}*/
/*         </div> */
/*         <div>*/
/*             {{ form_row(form.created_at) }}*/
/*         </div>*/
/*         <div>*/
/*             {{ form_row(form.updated_at) }}*/
/*         </div>*/
/*         <div>*/
/*             {{ form_label(form.enabled, 'Habilitado') }}*/
/*             {{ form_widget(form.enabled) }}*/
/*         </div>*/
/*     </fieldset>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* </div>*/
/* */
/* */
