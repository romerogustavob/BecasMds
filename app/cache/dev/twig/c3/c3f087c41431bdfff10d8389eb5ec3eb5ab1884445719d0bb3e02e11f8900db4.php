<?php

/* PersonaBundle:Form:macro.domicilio.html.twig */
class __TwigTemplate_3058ae8aa290de2c1beb9c365ea5600846512c11bde57755eeb10a982e1682c1 extends Twig_Template
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
        // line 156
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
            // asset "3cf3039_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3cf3039_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3cf3039_select2_1.js");
            // line 9
            echo "        
        <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 11
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["domi"]) ? $context["domi"] : null));
            echo "
        ";
        } else {
            // asset "3cf3039"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3cf3039") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3cf3039.js");
            // line 9
            echo "        
        <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // line 11
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["domi"]) ? $context["domi"] : null));
            echo "
        ";
        }
        unset($context["asset_url"]);
        // line 13
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
            // line 14
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
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "localidad", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Localidad"));
            echo "
                            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "localidad", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "barrio", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Barrio"));
            echo "
                            ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "barrio", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "calle", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Calle"));
            echo "
                            ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "calle", array()), 'widget');
            echo "
                        </div>                        
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "numero", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Nº/Altura"));
            echo "
                            ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "numero", array()), 'widget');
            echo "
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "dpto", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Dpto."));
            echo "
                            ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "dpto", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "piso", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Piso"));
            echo "
                            ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "piso", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "edificio", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Edificio"));
            echo "
                            ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "edificio", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "manzana", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Manzana"));
            echo "
                            ";
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "manzana", array()), 'widget');
            echo "
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"span4\">

                            ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "tira", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Tira"));
            echo "
                            ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "tira", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "parcela", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Parcela"));
            echo "
                            ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "parcela", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 110
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "quinta", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Quinta"));
            echo "
                            ";
            // line 111
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "quinta", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "unidadFuncional", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "UF/Casa"));
            echo "
                            ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "unidadFuncional", array()), 'widget');
            echo "
                        </div>
                    </td>

                </tr>
                <tr>
                    <td colspan=\"4\">
                        <div class=\"span7\">
                            ";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "referencias", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Referencias"));
            echo "
                            ";
            // line 126
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "referencias", array()), 'widget', array("attr" => array("class" => "span5")));
            echo "
                        </div>
                    </td>

                </tr>
                <tr>
                    ";
            // line 133
            echo "                    <td><div class=\"bordehidden\">
                            ";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "latitude", array()), 'row');
            echo "
                        </div></td>
                    <td><div class=\"bordehidden\">
                            ";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "longitude", array()), 'row');
            echo "
                        </div></td>
                        ";
            // line 144
            echo "                </tr>


            </tbody>

        </table>
        ";
            // line 151
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
        return array (  318 => 151,  310 => 144,  305 => 137,  299 => 134,  296 => 133,  287 => 126,  283 => 125,  272 => 117,  268 => 116,  260 => 111,  256 => 110,  248 => 105,  244 => 104,  236 => 99,  232 => 98,  221 => 90,  217 => 89,  209 => 84,  205 => 83,  197 => 78,  193 => 77,  185 => 72,  181 => 71,  171 => 64,  167 => 63,  159 => 58,  155 => 57,  147 => 52,  143 => 51,  135 => 46,  131 => 45,  98 => 14,  96 => 7,  93 => 6,  90 => 2,  78 => 1,  74 => 13,  68 => 11,  64 => 10,  61 => 9,  54 => 11,  50 => 10,  47 => 9,  42 => 8,  39 => 7,  33 => 4,  28 => 3,  25 => 2,  21 => 156,);
    }
}
/* {% macro domicilio(domi) %}*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*         {{ form_stylesheet(domi) }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {% javascripts '@PersonaBundle/Resources/public/js/select2.js' %}*/
/*         */
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
/*                     <th></th><th></th><th></th>*/
/*                     <th></th><th></th><th></th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*                 <tr>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(domi.localidad, 'Localidad', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.localidad) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(domi.barrio, 'Barrio', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.barrio) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(domi.calle, 'Calle', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.calle) }}*/
/*                         </div>                        */
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(domi.numero, 'Nº/Altura', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.numero) }}*/
/*                         </div>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <div class="span4">*/
/*                             {{ form_label(domi.dpto, 'Dpto.', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.dpto) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span4">*/
/*                             {{ form_label(domi.piso, 'Piso', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.piso) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span4">*/
/*                             {{ form_label(domi.edificio, 'Edificio', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.edificio) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span4">*/
/*                             {{ form_label(domi.manzana, 'Manzana', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.manzana) }}*/
/*                         </div>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <div class="span4">*/
/* */
/*                             {{ form_label(domi.tira, 'Tira', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.tira) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span4">*/
/*                             {{ form_label(domi.parcela, 'Parcela', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.parcela) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span4">*/
/*                             {{ form_label(domi.quinta, 'Quinta', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.quinta) }}*/
/*                         </div>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="span4">*/
/*                             {{ form_label(domi.unidadFuncional, 'UF/Casa', { 'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.unidadFuncional) }}*/
/*                         </div>*/
/*                     </td>*/
/* */
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4">*/
/*                         <div class="span7">*/
/*                             {{ form_label(domi.referencias, 'Referencias', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.referencias, {'attr':{'class':'span5'}}) }}*/
/*                         </div>*/
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
