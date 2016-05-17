<?php

/* BecaBundle:Beca:indexPrint.html.twig */
class __TwigTemplate_add69890fab2cd7fdb7a866769f4f70c264395f86cf06d5d4327f79b2b3ba789 extends Twig_Template
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
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('page', $context, $blocks);
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        // line 11
        echo "
    <table>
        <tbody>
            <tr>
                <td>
                    ";
        // line 18
        echo "                    
                </td>
                <td>
                    
                    ";
        // line 25
        echo "                </td>
            </tr>
        </tbody>
    </table>




";
    }

    // line 35
    public function block_page($context, array $blocks = array())
    {
        // line 36
        echo "
    <div class=\"row\">

        <div class=\"span8\">
            <h2 style=\"color: #0044cc\">PRUEBA DE IMPRESIÓN BECAS</h2>
        </div>


        <div class=\"span12\">

            <table class=\"table table-striped table-bordered table-condensed\" border=\"1\"  >
                <thead>
                    <tr>
                        <th class=\"formatoCabecera\">Tipo Beca</th>
                        <th style=\"font-weight: bold;\">Tipo Función</th>
                        <th style=\"font-weight: bold;\">Monto</th>
                        <th style=\"font-weight: bold;\">Fechaalta</th>
                        <th style=\"font-weight: bold;\">Fechabaja</th>
                        <th style=\"font-weight: bold;\">Activo</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 59
            echo "                        <tr>

                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoBeca", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoFuncion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "monto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            if ($this->getAttribute($context["entity"], "fechaAlta", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAlta", array()), "Y-m-d"), "html", null, true);
                echo " ";
            } else {
                echo " NO REGISTRADO";
            }
            echo "</td>
                            <td>";
            // line 65
            if ($this->getAttribute($context["entity"], "fechaBaja", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaBaja", array()), "Y-m-d"), "html", null, true);
                echo " ";
            } else {
                echo " NO REGISTRADO";
            }
            echo "</td>
                            <td>
                                ";
            // line 67
            if ($this->getAttribute($context["entity"], "activo", array())) {
                // line 68
                echo "                                    Sí
                                ";
            } else {
                // line 70
                echo "                                    No
                                ";
            }
            // line 72
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </tbody>
            </table>
        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "BecaBundle:Beca:indexPrint.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 75,  145 => 72,  141 => 70,  137 => 68,  135 => 67,  125 => 65,  116 => 64,  112 => 63,  108 => 62,  104 => 61,  100 => 59,  96 => 58,  72 => 36,  69 => 35,  57 => 25,  51 => 18,  44 => 11,  41 => 10,  37 => 35,  34 => 34,  32 => 10,  21 => 1,);
    }
}
/* <style>*/
/*     table {*/
/*         border-collapse: collapse*/
/*     }*/
/*     .formatoCabecera{*/
/*         font-weight: bold;*/
/*     }*/
/* */
/* </style>*/
/* {% block title %}*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>*/
/*                     {#<img src="http://becasmds.chaco.gov.ar:86{{ baseUrl }}/images/7ecfac4_logoDesarrolloSocial-medium_1.jpg" */
/*                          alt="Imagen" width="288" height="83" border="0"/>#}*/
/*                     */
/*                 </td>*/
/*                 <td>*/
/*                     */
/*                     {#<span style="vertical-align: middle; font-family: serif; font-size: 20px; float: right; margin-left: 20px; ">*/
/*                         <strong><br>                      GESTIÓN DE BECAS - MDS*/
/*                         </strong></span>#}*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="span8">*/
/*             <h2 style="color: #0044cc">PRUEBA DE IMPRESIÓN BECAS</h2>*/
/*         </div>*/
/* */
/* */
/*         <div class="span12">*/
/* */
/*             <table class="table table-striped table-bordered table-condensed" border="1"  >*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th class="formatoCabecera">Tipo Beca</th>*/
/*                         <th style="font-weight: bold;">Tipo Función</th>*/
/*                         <th style="font-weight: bold;">Monto</th>*/
/*                         <th style="font-weight: bold;">Fechaalta</th>*/
/*                         <th style="font-weight: bold;">Fechabaja</th>*/
/*                         <th style="font-weight: bold;">Activo</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/* */
/*                             <td>{{ entity.tipoBeca }}</td>*/
/*                             <td>{{ entity.tipoFuncion }}</td>*/
/*                             <td>{{ entity.monto }}</td>*/
/*                             <td>{% if entity.fechaAlta %}{{ entity.fechaAlta|date('Y-m-d') }} {% else %} NO REGISTRADO{% endif %}</td>*/
/*                             <td>{% if entity.fechaBaja %}{{ entity.fechaBaja|date('Y-m-d') }} {% else %} NO REGISTRADO{% endif %}</td>*/
/*                             <td>*/
/*                                 {% if entity.activo %}*/
/*                                     Sí*/
/*                                 {% else %}*/
/*                                     No*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
