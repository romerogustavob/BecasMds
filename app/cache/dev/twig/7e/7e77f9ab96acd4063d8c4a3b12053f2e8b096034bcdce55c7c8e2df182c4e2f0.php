<?php

/* CertificacionBundle:Certificacion:new.html.twig */
class __TwigTemplate_584fdf384921e301dd219eadd5c6fb65d1daee77e015d123c401558248a5492c extends Twig_Template
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
    <h3 style=\"color: #0044cc\">Nueva Certificación de: </h3><h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()), "becado", array()), "apellidos", array()), "html", null, true);
        echo ", 
        Nombres: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()), "becado", array()), "nombres", array()), "html", null, true);
        echo " - 
        Dni: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()), "becado", array()), "dni", array()), "html", null, true);
        echo "</h4>

    <form class=\"well\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("certificacion_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        <table>
            <tbody>
            <div class=\"form-row\">
                <tr>
                    <td>
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becatipo", array()), 'label', array("label" => "Tipo de Beca"));
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becatipo", array()), 'widget');
        echo "
                    </td>
                    <td>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becafuncion", array()), 'label', array("label" => "Función"));
        echo "
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becafuncion", array()), 'widget');
        echo "
                    </td>
                    <td>
                        <div style=\"display:none\"
                             ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "becadobeca", array()), 'row');
        echo "
                        </div>
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mesCertificacion", array()), 'label', array("label" => "Mes Certificación"));
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mesCertificacion", array()), 'widget');
        echo "                        
                    </td>
                    <td>
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "monto", array()), 'label', array("label" => "Monto Beca"));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "monto", array()), 'widget');
        echo "
                    </td>
                </tr>                
            </div>
            <div class=\"form-row\">
                <tr>
                    <td>
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descuentoDias", array()), 'label', array("label" => "Días de Descuento"));
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descuentoDias", array()), 'widget');
        echo "                       
                    </td>
                    <td>
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalPagar", array()), 'label', array("label" => "Total a Pagar (Clic Aquí)"));
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalPagar", array()), 'widget', array("attr" => array("onfocus" => "totalPagar();")));
        echo "
                    </td>
                    <td></td>
                    <td style=\"alignment-adjust: middle\">
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "certificado", array()), 'row');
        echo "
                    </td>
                </tr>
            </div>
        </tbody>
    </table>
    <div style=\"margin-bottom: 10px\">
        <p>
            <button type=\"submit\" class=\"btn btn-success\">
                ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.create", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </button>
        </p>
    </div>
    ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </form>

<div>
    <div class=\"float-left\">
        <a class=\"btn\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("certificacion", array("toexcel" => "false"));
        echo "\">
            ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
</div>
    ";
        // line 75
        $this->displayBlock('javascript', $context, $blocks);
        // line 80
        echo "
";
    }

    // line 75
    public function block_javascript($context, array $blocks = array())
    {
        echo "                
    ";
        // line 76
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0d77cf1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d77cf1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0d77cf1_part_1_funcionescertificacionbundle_1.js");
            // line 77
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
        return array (  201 => 77,  197 => 76,  192 => 75,  187 => 80,  185 => 75,  178 => 71,  174 => 70,  166 => 65,  159 => 61,  147 => 52,  140 => 48,  136 => 47,  130 => 44,  126 => 43,  116 => 36,  112 => 35,  106 => 32,  102 => 31,  97 => 29,  90 => 25,  86 => 24,  80 => 21,  76 => 20,  67 => 14,  61 => 13,  56 => 11,  52 => 10,  48 => 9,  45 => 8,  42 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/*     <h3 style="color: #0044cc">Nueva Certificación de: </h3><h4>{{ entity.becadobeca.becado.apellidos }}, */
/*         Nombres: {{ entity.becadobeca.becado.nombres }} - */
/*         Dni: {{ entity.becadobeca.becado.dni }}</h4>*/
/* */
/*     <form class="well" action="{{ path('certificacion_create') }}" method="post" {{ form_enctype(form) }}>*/
/*         {{ form_start(form) }}*/
/*         <table>*/
/*             <tbody>*/
/*             <div class="form-row">*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_label(form.becatipo, 'Tipo de Beca') }}*/
/*                         {{ form_widget(form.becatipo) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_label(form.becafuncion, 'Función') }}*/
/*                         {{ form_widget(form.becafuncion) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         <div style="display:none"*/
/*                              {{ form_row(form.becadobeca) }}*/
/*                         </div>*/
/*                         {{ form_label(form.mesCertificacion, 'Mes Certificación') }}*/
/*                         {{ form_widget(form.mesCertificacion) }}                        */
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_label(form.monto, 'Monto Beca') }}*/
/*                         {{ form_widget(form.monto) }}*/
/*                     </td>*/
/*                 </tr>                */
/*             </div>*/
/*             <div class="form-row">*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_label(form.descuentoDias, 'Días de Descuento') }}*/
/*                         {{ form_widget(form.descuentoDias) }}                       */
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_label(form.totalPagar, 'Total a Pagar (Clic Aquí)') }}*/
/*                         {{ form_widget(form.totalPagar, {'attr': {'onfocus':'totalPagar();'}}) }}*/
/*                     </td>*/
/*                     <td></td>*/
/*                     <td style="alignment-adjust: middle">*/
/*                         {{ form_row(form.certificado) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             </div>*/
/*         </tbody>*/
/*     </table>*/
/*     <div style="margin-bottom: 10px">*/
/*         <p>*/
/*             <button type="submit" class="btn btn-success">*/
/*                 {{ 'views.new.create'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </button>*/
/*         </p>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/*     </form>*/
/* */
/* <div>*/
/*     <div class="float-left">*/
/*         <a class="btn" href="{{ path('certificacion', {'toexcel':'false'}) }}">*/
/*             {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/*     {% block javascript %}                */
/*     {% javascripts '@CertificacionBundle/Resources/public/js/*' %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
