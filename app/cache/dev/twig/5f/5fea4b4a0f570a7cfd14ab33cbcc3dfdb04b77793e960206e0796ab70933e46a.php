<?php

/* CertificacionBundle:Certificacion:individualCertificacionPrint.html.twig */
class __TwigTemplate_2c44bdffaaa62a96b99a76fff441bcfa2f4c33f7b7accc62d0a7a7c1681dce8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
    table {
        border-collapse: collapse
    }
    .formatoCabecera{
        font-weight: bold;
    }
</style>

";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('page', $context, $blocks);
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo " 
    <table>
        <tbody>
            <tr>
                <td>
                    ";
        // line 16
        echo "                   
                </td>
                <td>                    
                   ";
        // line 23
        echo "                </td>
            </tr>
        </tbody>
    </table>
";
    }

    // line 29
    public function block_page($context, array $blocks = array())
    {
        // line 30
        echo "    <div class=\"row\">
        <div class=\"span8\">
            <h2 style=\"color: #0044cc\">Certificaciones de 
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["entities"]) ? $context["entities"] : null), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                    DNI: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "dni", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "apellidos", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "nombres", array()), "html", null, true);
            echo "               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </h2>
        </div>

        <div class=\"span12\">
            <table class=\"table table-striped table-bordered table-condensed\" border=\"1\"  >
                <thead>
                    <tr>
                        <th class=\"formatoCabecera\">Tipo Beca</th>
                        <th style=\"font-weight: bold;\">Tipo Función</th>
                        <th style=\"font-weight: bold;\">Monto</th>
                        <th style=\"font-weight: bold;\">Mes/Año</th> 
                        <th style=\"font-weight: bold;\">Descuento (Días)</th>
                        <th style=\"font-weight: bold;\">Monto a Pagar</th>                       
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 53
            echo "                        <tr>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "beca", array()), "tipoBeca", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "beca", array()), "tipoFuncion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "monto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            if ($this->getAttribute($context["entity"], "mesCertificacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "mesCertificacion", array()), "m-Y"), "html", null, true);
                echo " ";
            } else {
                echo " NO REGISTRADO";
            }
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descuentoDias", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "totalPagar", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CertificacionBundle:Certificacion:individualCertificacionPrint.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 62,  138 => 59,  134 => 58,  125 => 57,  121 => 56,  117 => 55,  113 => 54,  110 => 53,  106 => 52,  88 => 36,  75 => 34,  71 => 33,  66 => 30,  63 => 29,  55 => 23,  50 => 16,  41 => 10,  37 => 29,  34 => 28,  32 => 10,  21 => 1,);
    }
}
/* <style>*/
/*     table {*/
/*         border-collapse: collapse*/
/*     }*/
/*     .formatoCabecera{*/
/*         font-weight: bold;*/
/*     }*/
/* </style>*/
/* */
/* {% block title %} */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>*/
/*                     {#<img src="http://becasmds.chaco.gov.ar:86{{ baseUrl }}/images/7ecfac4_logoDesarrolloSocial-medium_1.jpg" */
/*                          alt="Imagen" width="288" height="83" border="0"/> #}                   */
/*                 </td>*/
/*                 <td>                    */
/*                    {# <span style="vertical-align: middle; font-family: serif; font-size: 20px; float: right; margin-left: 20px; ">*/
/*                         <strong><br>                      GESTIÓN DE BECAS - MDS*/
/*                         </strong>*/
/*                     </span>#}*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/*     <div class="row">*/
/*         <div class="span8">*/
/*             <h2 style="color: #0044cc">Certificaciones de */
/*                 {% for entity in entities | slice(0,1) %}*/
/*                     DNI: {{ entity.becadobeca.becado.dni }} - {{ entity.becadobeca.becado.apellidos }}, {{ entity.becadobeca.becado.nombres }}               */
/*                 {% endfor %}*/
/*             </h2>*/
/*         </div>*/
/* */
/*         <div class="span12">*/
/*             <table class="table table-striped table-bordered table-condensed" border="1"  >*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th class="formatoCabecera">Tipo Beca</th>*/
/*                         <th style="font-weight: bold;">Tipo Función</th>*/
/*                         <th style="font-weight: bold;">Monto</th>*/
/*                         <th style="font-weight: bold;">Mes/Año</th> */
/*                         <th style="font-weight: bold;">Descuento (Días)</th>*/
/*                         <th style="font-weight: bold;">Monto a Pagar</th>                       */
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td>{{ entity.becadobeca.beca.tipoBeca }}</td>*/
/*                             <td>{{ entity.becadobeca.beca.tipoFuncion }}</td>*/
/*                             <td>{{ entity.monto }}</td>*/
/*                             <td>{% if entity.mesCertificacion %}{{ entity.mesCertificacion|date('m-Y') }} {% else %} NO REGISTRADO{% endif %}</td>*/
/*                             <td>{{ entity.descuentoDias }}</td>*/
/*                             <td>{{ entity.totalPagar }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
