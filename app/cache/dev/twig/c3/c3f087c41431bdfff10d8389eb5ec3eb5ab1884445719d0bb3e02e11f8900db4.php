<?php

/* PersonaBundle:Form:macro.domicilio.html.twig */
class __TwigTemplate_3058ae8aa290de2c1beb9c365ea5600846512c11bde57755eeb10a982e1682c1 extends Twig_Template
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
        // line 144
        echo "<a href=\"../../../../../../../.gitignore\"></a>";
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "localidad", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Localidad"));
            echo "
                            ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "localidad", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "barrio", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Barrio"));
            echo "
                            ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "barrio", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "calle", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Calle"));
            echo "
                            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "calle", array()), 'widget');
            echo "
                        </div>                        
                    </td>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "numero", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Nº/Altura"));
            echo "
                            ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "numero", array()), 'widget');
            echo "
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "dpto", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Dpto."));
            echo "
                            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "dpto", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "piso", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Piso"));
            echo "
                            ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "piso", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "edificio", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Edificio"));
            echo "
                            ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "edificio", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "manzana", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Manzana"));
            echo "
                            ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "manzana", array()), 'widget');
            echo "
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"span4\">

                            ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "tira", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Tira"));
            echo "
                            ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "tira", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "parcela", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Parcela"));
            echo "
                            ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "parcela", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "quinta", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Quinta"));
            echo "
                            ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "quinta", array()), 'widget');
            echo "
                        </div>
                    </td>
                    <td>
                        <div class=\"span4\">
                            ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "unidadFuncional", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "UF/Casa"));
            echo "
                            ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "unidadFuncional", array()), 'widget');
            echo "
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class=\"span7\">
                            ";
            // line 113
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "referencias", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Referencias"));
            echo "
                            ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "referencias", array()), 'widget');
            echo "
                        </div>
                    </td>

                </tr>
                <tr>
                    ";
            // line 121
            echo "                    <td><div class=\"bordehidden\">
                            ";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "latitude", array()), 'row');
            echo "
                        </div></td>
                    <td><div class=\"bordehidden\">
                            ";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["domi"]) ? $context["domi"] : null), "longitude", array()), 'row');
            echo "
                        </div></td>
                        ";
            // line 132
            echo "                </tr>


            </tbody>

        </table>
        ";
            // line 139
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
        return array (  255 => 139,  247 => 132,  242 => 125,  236 => 122,  233 => 121,  224 => 114,  220 => 113,  209 => 105,  205 => 104,  197 => 99,  193 => 98,  185 => 93,  181 => 92,  173 => 87,  169 => 86,  158 => 78,  154 => 77,  146 => 72,  142 => 71,  134 => 66,  130 => 65,  122 => 60,  118 => 59,  108 => 52,  104 => 51,  96 => 46,  92 => 45,  84 => 40,  80 => 39,  72 => 34,  68 => 33,  35 => 2,  23 => 1,  19 => 144,);
    }
}
/* {% macro domicilio(domi) %}*/
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
/*                     <td>*/
/*                         <div class="span7">*/
/*                             {{ form_label(domi.referencias, 'Referencias', {'label_attr': {'class': 'negrita'}}) }}*/
/*                             {{ form_widget(domi.referencias) }}*/
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
