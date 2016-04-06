<?php

/* PersonaBundle:Form:macro.formacion.html.twig */
class __TwigTemplate_58164e5ab776ca74fd9c045c71ec97c6627929a69b2b9fb23318e710a98af55a extends Twig_Template
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
        // line 81
        echo "<a href=\"../../../../../../../.gitignore\"></a>";
    }

    // line 1
    public function getformacion($__formac__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "formac" => $__formac__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <style>
        .negrita{
            font-weight: bold;
        }
        .tablafondo{
            background: #D3D3D3;
            border-top: 1px solid #000;
           
        }
        .bordediv{
            padding-left: 10px;
             
        }
        .bordehidden{
            border-bottom: 1px solid #000; 
            display: none;
        }
    </style>
    <div class=\"row-fluid bordediv\">
        <table class=\"tablafondo\">
            <thead>
                <tr>
                    <th></th><th></th><th></th>
                    <th></th><th></th><th></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "institucion", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Institución"));
            echo "
                            ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "institucion", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "nivelEducativo", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Nivel Educativo"));
            echo "
                            ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "nivelEducativo", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "profesion", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Profesión"));
            echo "
                            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "profesion", array()), 'widget');
            echo "
                        </div>                        
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "oficio", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Oficio"));
            echo "
                            ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "oficio", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "perfil", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Perfil"));
            echo "
                            ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "perfil", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "descripcion", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Descripción"));
            echo "
                            ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "descripcion", array()), 'widget');
            echo "
                        </div>
                    </td>
                </tr>

        </tbody>
            
        </table>

        <div class=\"span2\">
            <a class='delete-form btn btn-mini btn-danger' href='#'><i class='icon-remove-circle'></i>Quitar Formación </a>
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
        return "PersonaBundle:Form:macro.formacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 67,  131 => 66,  123 => 61,  119 => 60,  111 => 55,  107 => 54,  96 => 46,  92 => 45,  84 => 40,  80 => 39,  72 => 34,  68 => 33,  35 => 2,  23 => 1,  19 => 81,);
    }
}
/* {% macro formacion(formac) %}*/
/*     <style>*/
/*         .negrita{*/
/*             font-weight: bold;*/
/*         }*/
/*         .tablafondo{*/
/*             background: #D3D3D3;*/
/*             border-top: 1px solid #000;*/
/*            */
/*         }*/
/*         .bordediv{*/
/*             padding-left: 10px;*/
/*              */
/*         }*/
/*         .bordehidden{*/
/*             border-bottom: 1px solid #000; */
/*             display: none;*/
/*         }*/
/*     </style>*/
/*     <div class="row-fluid bordediv">*/
/*         <table class="tablafondo">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th></th><th></th><th></th>*/
/*                     <th></th><th></th><th></th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*                 <tr>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(formac.institucion, 'Institución', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(formac.institucion) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(formac.nivelEducativo, 'Nivel Educativo', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(formac.nivelEducativo) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(formac.profesion, 'Profesión', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(formac.profesion) }}*/
/*                         </div>                        */
/*                     </td>*/
/*                     */
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(formac.oficio, 'Oficio', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(formac.oficio) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(formac.perfil, 'Perfil', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(formac.perfil) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(formac.descripcion, 'Descripción', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(formac.descripcion) }}*/
/*                         </div>*/
/*                     </td>*/
/*                 </tr>*/
/* */
/*         </tbody>*/
/*             */
/*         </table>*/
/* */
/*         <div class="span2">*/
/*             <a class='delete-form btn btn-mini btn-danger' href='#'><i class='icon-remove-circle'></i>Quitar Formación </a>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* <a href="../../../../../../../.gitignore"></a>*/
