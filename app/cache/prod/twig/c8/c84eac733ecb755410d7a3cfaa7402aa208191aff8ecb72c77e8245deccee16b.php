<?php

/* FormacionBundle:Form:macro.formacion.html.twig */
class __TwigTemplate_6de4a03f1fc134fb0e22acac96b969823dbaed0edba7dfd50565de6606cc4a78 extends Twig_Template
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
        // line 30
        echo "<a href=\"../../../../../../../.gitignore\"></a>";
    }

    // line 1
    public function getformacion($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"row-fluid\">
            <div class=\"span4\">
                ";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "institucion", array()), 'row');
            echo "
            </div>
            <div class=\"span4\">
                ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nivelEducativo", array()), 'row');
            echo "
            </div>
            
            <div class=\"span4\">
                ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profesion", array()), 'row');
            echo "
            </div>
            
            <div class=\"span4\">
                ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oficio", array()), 'row');
            echo "
            </div>
            
            <div class=\"span4\">
                ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "perfil", array()), 'row');
            echo "
            </div>
            
            <div class=\"span4\">
                ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'row');
            echo "
            </div>
            <div class=\"span2\">
                <a class='delete-form btn btn-mini btn-danger' href='#'><i class='icon-remove-circle'></i> </a>
            </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "FormacionBundle:Form:macro.formacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  66 => 19,  59 => 15,  52 => 11,  45 => 7,  39 => 4,  35 => 2,  23 => 1,  19 => 30,);
    }
}
/* {% macro formacion(form) %}*/
/*     <div class="row-fluid">*/
/*             <div class="span4">*/
/*                 {{ form_row(form.institucion) }}*/
/*             </div>*/
/*             <div class="span4">*/
/*                 {{ form_row(form.nivelEducativo) }}*/
/*             </div>*/
/*             */
/*             <div class="span4">*/
/*                 {{ form_row(form.profesion) }}*/
/*             </div>*/
/*             */
/*             <div class="span4">*/
/*                 {{ form_row(form.oficio) }}*/
/*             </div>*/
/*             */
/*             <div class="span4">*/
/*                 {{ form_row(form.perfil) }}*/
/*             </div>*/
/*             */
/*             <div class="span4">*/
/*                 {{ form_row(form.descripcion) }}*/
/*             </div>*/
/*             <div class="span2">*/
/*                 <a class='delete-form btn btn-mini btn-danger' href='#'><i class='icon-remove-circle'></i> </a>*/
/*             </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* <a href="../../../../../../../.gitignore"></a>*/
