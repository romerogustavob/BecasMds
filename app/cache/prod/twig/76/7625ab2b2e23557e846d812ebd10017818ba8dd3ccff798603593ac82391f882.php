<?php

/* CertificacionBundle:Certificacion:edit.html.twig */
class __TwigTemplate_505112395fe57da87de65fbe58a4dc169ed325765fbc0600c95be8cbfb5a38c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "CertificacionBundle:Certificacion:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JordiLlonchCrudGeneratorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Certificacion"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
    <h3 style=\"color: #0044cc\">Modificar Certificación de: </h3><h4>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()), "becado", array()), "apellidos", array()), "html", null, true);
        echo ", 
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()), "becado", array()), "nombres", array()), "html", null, true);
        echo " 
        Dni: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()), "becado", array()), "dni", array()), "html", null, true);
        echo "</h4>

<form class=\"well\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        <table>
            <tbody>
            <div class=\"form-row\">
                <tr>
                    <td>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becatipo", array()), 'label', array("label" => "Tipo de Beca"));
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becatipo", array()), 'widget');
        echo "
                    </td>
                    <td>
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becafuncion", array()), 'label', array("label" => "Función"));
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becafuncion", array()), 'widget');
        echo "
                        ";
        // line 29
        echo "                    </td>
                    <td>
                        <div style=\"display:none\"
                             ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "becadobeca", array()), 'row');
        echo "
                        </div>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "mesCertificacion", array()), 'label', array("label" => "Mes Certificación"));
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "mesCertificacion", array()), 'widget');
        echo "

                </td>
                <td>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "monto", array()), 'label', array("label" => "Monto Beca"));
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "monto", array()), 'widget');
        echo "
                </td>
                <td>
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descuentoDias", array()), 'label', array("label" => "Días de Descuento"));
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descuentoDias", array()), 'widget');
        echo "

                </td>
            </tr>                
        </div>
        <div class=\"form-row\">
            <tr>

                <td>
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "totalPagar", array()), 'label', array("label" => "Total a Pagar"));
        echo "
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "totalPagar", array()), 'widget', array("attr" => array("onfocus" => "totalPagar();")));
        echo "
                </td>
                <td colspan=\"2\" style=\"alignment-adjust: middle\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "certificado", array()), 'row');
        echo "

                </td>
            </tr>

        </div>

        </tbody>
    </table>
    
    <p>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
    </p>
    ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("certificacion", array("toexcel" => "false"));
        echo "\">
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"float-left\">
        <form action=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 83
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>
";
        // line 87
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        echo "                
    ";
        // line 88
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0d77cf1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d77cf1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d77cf1_part_1_funcionescertificacionbundle_1.js");
            // line 89
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "0d77cf1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d77cf1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d77cf1.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "CertificacionBundle:Certificacion:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 89,  216 => 88,  208 => 87,  199 => 83,  195 => 82,  190 => 80,  183 => 76,  179 => 75,  171 => 70,  166 => 68,  152 => 57,  146 => 54,  142 => 53,  130 => 44,  126 => 43,  120 => 40,  116 => 39,  109 => 35,  105 => 34,  100 => 32,  95 => 29,  91 => 27,  87 => 26,  81 => 23,  77 => 22,  68 => 16,  61 => 14,  56 => 12,  52 => 11,  48 => 10,  44 => 8,  41 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} -  {{ 'views.edit.edit'|trans({'%entity%': 'Certificacion'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     <h3 style="color: #0044cc">Modificar Certificación de: </h3><h4>*/
/*         {{ entity.becadobeca.becado.apellidos }}, */
/*         {{ entity.becadobeca.becado.nombres }} */
/*         Dni: {{ entity.becadobeca.becado.dni }}</h4>*/
/* */
/* <form class="well" action="{{ path('certificacion_update', { 'id': entity.id }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*     <input type="hidden" name="_method" value="PUT" />*/
/*     {{ form_start(edit_form) }}*/
/*         <table>*/
/*             <tbody>*/
/*             <div class="form-row">*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_label(edit_form.becatipo, 'Tipo de Beca') }}*/
/*                         {{ form_widget(edit_form.becatipo) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_label(edit_form.becafuncion, 'Función') }}*/
/*                         {{ form_widget(edit_form.becafuncion) }}*/
/*                         {#{{ form_widget(edit_form.becafuncion, { 'attr': {'readonly': 'readonly'} }) }}#}*/
/*                     </td>*/
/*                     <td>*/
/*                         <div style="display:none"*/
/*                              {{ form_row(edit_form.becadobeca) }}*/
/*                         </div>*/
/*                     {{ form_label(edit_form.mesCertificacion, 'Mes Certificación') }}*/
/*                     {{ form_widget(edit_form.mesCertificacion) }}*/
/* */
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_label(edit_form.monto, 'Monto Beca') }}*/
/*                     {{ form_widget(edit_form.monto) }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_label(edit_form.descuentoDias, 'Días de Descuento') }}*/
/*                     {{ form_widget(edit_form.descuentoDias) }}*/
/* */
/*                 </td>*/
/*             </tr>                */
/*         </div>*/
/*         <div class="form-row">*/
/*             <tr>*/
/* */
/*                 <td>*/
/*                     {{ form_label(edit_form.totalPagar, 'Total a Pagar') }}*/
/*                     {{ form_widget(edit_form.totalPagar, {'attr': {'onfocus':'totalPagar();'}}) }}*/
/*                 </td>*/
/*                 <td colspan="2" style="alignment-adjust: middle">*/
/*                     {{ form_row(edit_form.certificado) }}*/
/* */
/*                 </td>*/
/*             </tr>*/
/* */
/*         </div>*/
/* */
/*         </tbody>*/
/*     </table>*/
/*     */
/*     <p>*/
/*         <button type="submit" class="btn btn-success">{{ 'views.edit.editbutton'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*     </p>*/
/*     {{ form_end(edit_form) }}*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('certificacion', {'toexcel':'false'}) }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/*     <div class="float-left">*/
/*         <form action="{{ path('certificacion_delete', { 'id': entity.id }) }}" method="post">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* {% block javascript %}                */
/*     {% javascripts '@CertificacionBundle/Resources/public/js/*' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* {% endblock %}*/
