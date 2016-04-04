<?php

/* PersonaBundle:Form:becado.theming.html.twig */
class __TwigTemplate_d1e68edaf7e5fc9a84021cbd962df67b5011db2e8a85fee5dd1bea574372775c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'becasmds_personabundle_becado_widget' => array($this, 'block_becasmds_personabundle_becado_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('becasmds_personabundle_becado_widget', $context, $blocks);
    }

    public function block_becasmds_personabundle_becado_widget($context, array $blocks = array())
    {
        // line 3
        $context["macrosFormacion"] = $this->loadTemplate("PersonaBundle:Form:macro.formacion.html.twig", "PersonaBundle:Form:becado.theming.html.twig", 3);
        // line 4
        echo "<div class=\"row\">
    <div class=\"span6\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()), 'row');
        echo "
    </div>
    <div class=\"span6\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'row');
        echo "
    </div>
    <div class=\"span6\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombres", array()), 'row');
        echo "
    </div>
    <div class=\"span6\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'row');
        echo "
    </div>
    <div class=\"span6\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
    </div>
    <div class=\"span6\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "movimientoSocial", array()), 'row');
        echo "
    </div>
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), "institucion", array()), 'row');
        echo "
</div>
<div class=\"row-fluid\">
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), 'label');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), 'errors');
        echo "
    <div data-prototype=\"";
        // line 28
        echo twig_escape_filter($this->env, $context["macrosFormacion"]->getformacion($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()), "vars", array()), "prototype", array())));
        echo "\" class=\"row-fluid formacion\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formacion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["formac"]) {
            // line 30
            echo "            ";
            echo $context["macrosFormacion"]->getformacion($context["formac"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
    <a href='#' class='btn add-formacion-form'>
        <i class='icon-plus'></i> Agregar Formación
    </a>
</div>
<div class=\"row\">
    <div class=\"span3\">
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row');
        echo "
    </div>
    <div class=\"span3\">
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "saveAndAdd", array()), 'row');
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Form:becado.theming.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  107 => 39,  98 => 32,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  67 => 23,  62 => 21,  56 => 18,  50 => 15,  44 => 12,  38 => 9,  32 => 6,  28 => 4,  26 => 3,  20 => 2,);
    }
}
/* {# El nombre del widget es el que devuelve el método getName() del form #}*/
/* {% block becasmds_personabundle_becado_widget %}*/
/* {% import "PersonaBundle:Form:macro.formacion.html.twig" as macrosFormacion %}*/
/* <div class="row">*/
/*     <div class="span6">*/
/*         {{ form_row(form.dni) }}*/
/*     </div>*/
/*     <div class="span6">*/
/*         {{ form_row(form.apellidos) }}*/
/*     </div>*/
/*     <div class="span6">*/
/*         {{ form_row(form.nombres) }}*/
/*     </div>*/
/*     <div class="span6">*/
/*         {{ form_row(form.telefono) }}*/
/*     </div>*/
/*     <div class="span6">*/
/*         {{ form_row(form.email) }}*/
/*     </div>*/
/*     <div class="span6">*/
/*         {{ form_row(form.movimientoSocial) }}*/
/*     </div>*/
/*     {{ form_row(form.formacion.institucion) }}*/
/* </div>*/
/* <div class="row-fluid">*/
/*     {{ form_label(form.formacion) }}*/
/*     {{ form_errors(form.formacion) }}*/
/*     <div data-prototype="{{ macrosFormacion.formacion(form.formacion.vars.prototype)|e }}" class="row-fluid formacion">*/
/*         {% for formac in form.formacion %}*/
/*             {{ macrosFormacion.formacion(formac) }}*/
/*         {% endfor %}*/
/*     </div>*/
/*     <a href='#' class='btn add-formacion-form'>*/
/*         <i class='icon-plus'></i> Agregar Formación*/
/*     </a>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="span3">*/
/*         {{ form_row(form.save) }}*/
/*     </div>*/
/*     <div class="span3">*/
/*         {{ form_row(form.saveAndAdd) }}*/
/*     </div>*/
/* </div>*/
/* {#{{ form_row(form._token) }}#}*/
/* {% endblock %}*/
/* */
