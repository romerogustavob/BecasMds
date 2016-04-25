<?php

/* PersonaBundle:Form:macro.domicilio.html.twig */
class __TwigTemplate_433ba6992adc44d0121e1db9995b87e310ffe06984882abe199e63ea05a7964a extends Twig_Template
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
        // line 140
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["domi"]) ? $context["domi"] : null), 'stylesheet');
        echo "
    ";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e604a14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_jquery-1.9.0_1.js");
            // line 13
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 14
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["domi"]) ? $context["domi"] : null));
            echo "
        ";
            // asset "e604a14_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2_2.js");
            // line 13
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 14
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["domi"]) ? $context["domi"] : null));
            echo "
        ";
            // asset "e604a14_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2Becado_3.js");
            // line 13
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 14
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["domi"]) ? $context["domi"] : null));
            echo "
        ";
        } else {
            // asset "e604a14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14.js");
            // line 13
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 14
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["domi"]) ? $context["domi"] : null));
            echo "
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    ";
    }

    // line 1
    public function getdomicilio($__domi__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "domi" => $__domi__,
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
                    <th></th><th></th>
                    <th></th><th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class=\"span6\">
                            ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "localidad", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Localidad"));
            echo "
                            ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "localidad", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span6\">
                            ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "barrio", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Barrio"));
            echo "
                            ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "barrio", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span6\">
                            ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "calle", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Calle"));
            echo "
                            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "calle", array()), 'widget');
            echo "
                        </div>                        
                    </td>
                    <td>
                        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "numero", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Nº/Altura"));
            echo "
                        ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "numero", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                    </td>
                </tr>
                <tr>
                    <td>
                            ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "dpto", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Dpto."));
            echo "
                            ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "dpto", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                    </td>
                    <td>
                            ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "piso", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Piso"));
            echo "
                            ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "piso", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                    </td>
                    <td>
                            ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "edificio", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Edificio"));
            echo "
                            ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "edificio", array()), 'widget');
            echo "
                    </td>
                    <td>
                            ";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "manzana", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Manzana"));
            echo "
                            ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "manzana", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                    </td>
                </tr>
                <tr>
                    <td>
                            ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "tira", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Tira"));
            echo "
                            ";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "tira", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                    </td>
                    <td>
                            ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "parcela", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Parcela"));
            echo "
                            ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "parcela", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                    </td>
                    <td>
                            ";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "quinta", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Quinta"));
            echo "
                            ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "quinta", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                    </td>
                    <td>
                            ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "unidadFuncional", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "UF/Casa"));
            echo "
                            ";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "unidadFuncional", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                    </td>

                </tr>
                <tr>
                    <td colspan=\"4\">

                        ";
            // line 108
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "referencias", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Referencias"));
            echo "
                        ";
            // line 109
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "referencias", array()), 'widget', array("attr" => array("class" => "span7")));
            echo "

                    </td>

                </tr>
                <tr>
                    ";
            // line 116
            echo "                    <td><div class=\"bordehidden\">
                            ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "latitude", array()), 'row');
            echo "
                        </div></td>
                    <td><div class=\"bordehidden\">
                            ";
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "longitude", array()), 'row');
            echo "
                        </div></td>
                        ";
            // line 127
            echo "                    <td></td><td></td>
                </tr>


            </tbody>

        </table>
        ";
            // line 135
            echo "        <div class=\"span2\">
            <a class='delete-form btn btn-mini btn-danger' href='#'><i class='icon-remove-circle'></i>Quitar Domicilio </a>
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
        return "PersonaBundle:Form:macro.domicilio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 135,  308 => 127,  303 => 120,  297 => 117,  294 => 116,  285 => 109,  281 => 108,  271 => 101,  267 => 100,  261 => 97,  257 => 96,  251 => 93,  247 => 92,  241 => 89,  237 => 88,  229 => 83,  225 => 82,  219 => 79,  215 => 78,  209 => 75,  205 => 74,  199 => 71,  195 => 70,  187 => 65,  183 => 64,  176 => 60,  172 => 59,  164 => 54,  160 => 53,  152 => 48,  148 => 47,  116 => 17,  114 => 7,  111 => 6,  108 => 2,  96 => 1,  92 => 16,  86 => 14,  81 => 13,  74 => 14,  69 => 13,  63 => 14,  58 => 13,  52 => 14,  47 => 13,  42 => 8,  39 => 7,  33 => 4,  28 => 3,  25 => 2,  21 => 140,);
    }
}
/* {% macro domicilio(domi) %}*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         {{ form_stylesheet(domi) }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Becado.js'            */
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {{ form_javascript(domi) }}*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*     <style>*/
/*         .negrita{*/
/*             font-weight: bold;*/
/*         }*/
/*         .tablafondo{*/
/*             background: #D3D3D3;*/
/*             border-top: 1px solid #000;*/
/* */
/*         }*/
/*         .bordediv{*/
/*             padding-left: 10px;*/
/* */
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
/*                     <th></th><th></th>*/
/*                     <th></th><th></th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <div class="span6">*/
/*                             {{ form_label(domi.localidad, 'Localidad', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.localidad) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span6">*/
/*                             {{ form_label(domi.barrio, 'Barrio', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.barrio) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span6">*/
/*                             {{ form_label(domi.calle, 'Calle', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.calle) }}*/
/*                         </div>                        */
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_label(domi.numero, 'Nº/Altura', {'label_attr': {'class': 'negrita'}}) }}*/
/*                         {{ form_widget(domi.numero, {'attr':{'class':'span5'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                             {{ form_label(domi.dpto, 'Dpto.', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.dpto, {'attr':{'class':'span5'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                             {{ form_label(domi.piso, 'Piso', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.piso, {'attr':{'class':'span5'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                             {{ form_label(domi.edificio, 'Edificio', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.edificio) }}*/
/*                     </td>*/
/*                     <td>*/
/*                             {{ form_label(domi.manzana, 'Manzana', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.manzana, {'attr':{'class':'span5'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                             {{ form_label(domi.tira, 'Tira', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.tira, {'attr':{'class':'span5'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                             {{ form_label(domi.parcela, 'Parcela', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.parcela, {'attr':{'class':'span5'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                             {{ form_label(domi.quinta, 'Quinta', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.quinta, {'attr':{'class':'span5'}}) }}*/
/*                     </td>*/
/*                     <td>*/
/*                             {{ form_label(domi.unidadFuncional, 'UF/Casa', { 'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.unidadFuncional, {'attr':{'class':'span5'}}) }}*/
/*                     </td>*/
/* */
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4">*/
/* */
/*                         {{ form_label(domi.referencias, 'Referencias', {'label_attr': {'class': 'negrita'}}) }}*/
/*                         {{ form_widget(domi.referencias, {'attr':{'class':'span7'}}) }}*/
/* */
/*                     </td>*/
/* */
/*                 </tr>*/
/*                 <tr>*/
/*                     {#PONGO ESTOS CAMPOS A HIDDEN YA QUE SI USO FORM_REST EN FORM END, BORRA TAMBIÉN LAS ENTITY#}*/
/*                     <td><div class="bordehidden">*/
/*                             {{ form_row(domi.latitude) }}*/
/*                         </div></td>*/
/*                     <td><div class="bordehidden">*/
/*                             {{ form_row(domi.longitude) }}*/
/*                         </div></td>*/
/*                         {# <td><div class="bordehidden">*/
/*                                          {{ form_row(domi.departamento) }}*/
/*                                      </div>*/
/*                          */
/*                          </td>#}*/
/*                     <td></td><td></td>*/
/*                 </tr>*/
/* */
/* */
/*             </tbody>*/
/* */
/*         </table>*/
/*         {#<span class="select2-container select2-container--default select2-container--open" style="position: absolute; top: 1809px; left: 120.5px;"><span class="select2-dropdown select2-dropdown--above" dir="ltr" style="width: 816px;"><span class="select2-search select2-search--dropdown"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox"></span><span class="select2-results"><ul class="select2-results__options" role="tree" id="select2-l4vw-results" aria-expanded="true" aria-hidden="false"><li class="select2-results__option select2-results__option--highlighted" role="treeitem" aria-selected="true">enhancement</li><li class="select2-results__option" role="treeitem" aria-selected="false">bug</li><li class="select2-results__option" role="treeitem" aria-selected="false">duplicate</li><li class="select2-results__option" role="treeitem" aria-selected="false">invalid</li><li class="select2-results__option" role="treeitem" aria-selected="false">wontfix</li></ul></span></span></span>#}*/
/*         <div class="span2">*/
/*             <a class='delete-form btn btn-mini btn-danger' href='#'><i class='icon-remove-circle'></i>Quitar Domicilio </a>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* <a href="../../../../../../../.gitignore"></a>*/
