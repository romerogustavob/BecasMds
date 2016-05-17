<?php

/* PersonaBundle:Form:macro.formacion.html.twig */
class __TwigTemplate_575f14425622f4a6c23b6395b84bb6ece989620cc181261f4f3817176c91f109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 96
        echo "<a href=\"../../../../../../../.gitignore\"></a>";
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formac"]) ? $context["formac"] : null), 'stylesheet');
        echo "
    ";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "84b4787_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_84b4787_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/84b4787_select2_1.js");
            // line 12
            echo "        
        <script type=\"text/javascript\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 14
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["formac"]) ? $context["formac"] : null));
            echo "
        ";
            // asset "84b4787_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_84b4787_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/84b4787_select2Formacion_2.js");
            // line 12
            echo "        
        <script type=\"text/javascript\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 14
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["formac"]) ? $context["formac"] : null));
            echo "
        ";
        } else {
            // asset "84b4787"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_84b4787") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/84b4787.js");
            // line 12
            echo "        
        <script type=\"text/javascript\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 14
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["formac"]) ? $context["formac"] : null));
            echo "
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    ";
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
            echo "    ";
            $this->displayBlock('stylesheets', $context, $blocks);
            // line 6
            echo "
    ";
            // line 7
            $this->displayBlock('javascript', $context, $blocks);
            // line 17
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
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "institucion", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Institución"));
            echo "
                            ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "institucion", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "nivelEducativo", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Nivel Educativo"));
            echo "
                            ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "nivelEducativo", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "profesion", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Profesión"));
            echo "
                            ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "profesion", array()), 'widget');
            echo "
                        </div>                        
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "oficio", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Oficio"));
            echo "
                            ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "oficio", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "perfil", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Perfil"));
            echo "
                            ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "perfil", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formac"]) ? $context["formac"] : null), "descripcion", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Descripción"));
            echo "
                            ";
            // line 82
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
        return array (  211 => 82,  207 => 81,  199 => 76,  195 => 75,  187 => 70,  183 => 69,  172 => 61,  168 => 60,  160 => 55,  156 => 54,  148 => 49,  144 => 48,  111 => 17,  109 => 7,  106 => 6,  103 => 2,  91 => 1,  87 => 16,  81 => 14,  77 => 13,  74 => 12,  67 => 14,  63 => 13,  60 => 12,  54 => 14,  50 => 13,  47 => 12,  42 => 8,  39 => 7,  33 => 4,  28 => 3,  25 => 2,  21 => 96,);
    }
}
/* {% macro formacion(formac) %}*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         {{ form_stylesheet(formac) }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {% javascripts */
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@FormacionBundle/Resources/public/js/select2Formacion.js'*/
/*         %}*/
/*         */
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {{ form_javascript(formac) }}*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
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
