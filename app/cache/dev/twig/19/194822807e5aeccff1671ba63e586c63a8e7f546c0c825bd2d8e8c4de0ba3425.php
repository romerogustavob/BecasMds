<?php

/* CertificacionBundle:Certificacion:new.html.twig */
class __TwigTemplate_8f4c10983bb7156fea4deb117358ff9ef0a7e2b9f85297bcfc204536ee65565e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "CertificacionBundle:Certificacion:new.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "Certificacion"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
    <h3 style=\"color: #0044cc\">Nueva Certificación de: </h3><h4>Dni: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()), "html", null, true);
        echo "</h4>

    <form class=\"well\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("certificacion_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <table>
            <tbody>
            <div class=\"form-row\">
                <tr>
                    <td>
                        <div style=\"display:none\"
                             ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becadobeca", array()), 'row');
        echo "
                    </div>
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mesCertificacion", array()), 'label', array("label" => "Mes Certificación"));
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mesCertificacion", array()), 'widget');
        echo "

                </td>
                <td>
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "monto", array()), 'label', array("label" => "Monto Beca"));
        echo "
                    ";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "monto", array()), 'widget'), 3), "html", null, true);
        echo "
                </td>
                <td>
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descuentoDias", array()), 'label', array("label" => "Días de Descuento"));
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descuentoDias", array()), 'widget');
        echo "

                </td>
            </tr>                
        </div>
        <div class=\"form-row\">
            <tr>

                <td>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalPagar", array()), 'label', array("label" => "Total a Pagar"));
        echo "
                    ";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalPagar", array()), 'widget', array("attr" => array("onfocus" => "totalPagar();"))), 3), "html", null, true);
        echo "
                </td>
                <td colspan=\"2\" style=\"alignment-adjust: middle\">
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "certificado", array()), 'row');
        echo "

                </td>
            </tr>

        </div>

        </tbody>
    </table>
    <div style=\"margin-bottom: 10px\">
        <p>
            <button type=\"submit\" class=\"btn btn-success\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
        </p>
    </div>
    ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("certificacion");
        echo "\">
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        // line 68
        $this->displayBlock('javascript', $context, $blocks);
        // line 73
        echo "
";
    }

    // line 68
    public function block_javascript($context, array $blocks = array())
    {
        echo "                
    ";
        // line 69
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0d77cf1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d77cf1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d77cf1_part_1_funcionescertificacionbundle_1.js");
            // line 70
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
        return "CertificacionBundle:Certificacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 70,  172 => 69,  167 => 68,  162 => 73,  160 => 68,  153 => 64,  149 => 63,  141 => 58,  135 => 55,  121 => 44,  115 => 41,  111 => 40,  99 => 31,  95 => 30,  89 => 27,  85 => 26,  78 => 22,  74 => 21,  69 => 19,  59 => 12,  53 => 11,  48 => 9,  45 => 8,  42 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - {{ 'views.new.creation'|trans({'%entity%': 'Certificacion'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     <h3 style="color: #0044cc">Nueva Certificación de: </h3><h4>Dni: {{ entity.becadobeca }}</h4>*/
/* */
/*     <form class="well" action="{{ path('certificacion_create') }}" method="post" {{ form_enctype(form) }}>*/
/*         {{ form_start(form) }}*/
/*         <table>*/
/*             <tbody>*/
/*             <div class="form-row">*/
/*                 <tr>*/
/*                     <td>*/
/*                         <div style="display:none"*/
/*                              {{ form_row(form.becadobeca) }}*/
/*                     </div>*/
/*                     {{ form_label(form.mesCertificacion, 'Mes Certificación') }}*/
/*                     {{ form_widget(form.mesCertificacion) }}*/
/* */
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_label(form.monto, 'Monto Beca') }}*/
/*                     {{ form_widget(form.monto)|number_format(3) }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_label(form.descuentoDias, 'Días de Descuento') }}*/
/*                     {{ form_widget(form.descuentoDias) }}*/
/* */
/*                 </td>*/
/*             </tr>                */
/*         </div>*/
/*         <div class="form-row">*/
/*             <tr>*/
/* */
/*                 <td>*/
/*                     {{ form_label(form.totalPagar, 'Total a Pagar') }}*/
/*                     {{ form_widget(form.totalPagar, {'attr': {'onfocus':'totalPagar();'}})|number_format(3) }}*/
/*                 </td>*/
/*                 <td colspan="2" style="alignment-adjust: middle">*/
/*                     {{ form_row(form.certificado) }}*/
/* */
/*                 </td>*/
/*             </tr>*/
/* */
/*         </div>*/
/* */
/*         </tbody>*/
/*     </table>*/
/*     <div style="margin-bottom: 10px">*/
/*         <p>*/
/*             <button type="submit" class="btn btn-success">{{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*         </p>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('certificacion') }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/* {% block javascript %}                */
/*     {% javascripts '@CertificacionBundle/Resources/public/js/*' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
