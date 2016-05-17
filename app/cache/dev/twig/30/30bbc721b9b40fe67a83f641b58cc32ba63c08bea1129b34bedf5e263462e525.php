<?php

/* CertificacionBundle:Certificacion:individualCertificacion.html.twig */
class __TwigTemplate_2f11247cb4f2c294eb10346afce037397a44918957e9bcd2342946d818de75b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('page', $context, $blocks);
    }

    public function block_page($context, array $blocks = array())
    {
        // line 2
        echo "
    ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    
    ";
        // line 9
        $this->displayBlock('javascript', $context, $blocks);
        // line 16
        echo "    
    <style>
        .negrita{
            font-weight: bold; 
        }

        .colorverde{
            color: #46a546; 
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }
        
        th{
            
        }

        th, td{
            text-align: left;
            padding: 8px;
            border: 1px solid #000;
        }

        tr .blancoDatePicker{
            tr:nth-child(even){
                background-color: #FFFFFF;
            }
        }

        tr:nth-child(even){
            background-color: #f2f2f2 
        }
    </style>
    ";
        // line 51
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : null))) {
            // line 52
            echo "        <span style=\"color:red;\">No existen Certificaciones para este becado</span>
    ";
        } else {
            // line 54
            echo "        <table class=\"table table-striped table-bordered table-condensed\">
            <thead>
                <tr style=\"color: #FFFFFF; background-color: #0077b3; border-style: solid;\">
                    ";
            // line 58
            echo "                    <th style=\"vertical-align: top\">Becado</th>
                    <th style=\"vertical-align: top\">Beca</th>
                    <th style=\"vertical-align: top\">Monto</th>
                    <th style=\"vertical-align: top\">Días Descuento</th>
                    <th style=\"vertical-align: top\">Total a Pagar</th>
                    <th style=\"vertical-align: top\">Certificación</th>
                    <th style=\"vertical-align: top\">Mes Certificación</th>
                    <th style=\"vertical-align: top\">";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 70
                echo "                    <tr>
                        ";
                // line 72
                echo "                        <td>
                            Dni: ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "dni", array()), "html", null, true);
                echo " - 
                            ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "apellidos", array()), "html", null, true);
                echo ", 
                            ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "nombres", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "beca", array()), "tipoBeca", array()), "html", null, true);
                echo " - 
                            ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "beca", array()), "tipoFuncion", array()), "html", null, true);
                echo "
                        </td>
                        <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "monto", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descuentoDias", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "totalPagar", array()), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 85
                if ($this->getAttribute($context["entity"], "certificado", array())) {
                    // line 86
                    echo "                                Sí 
                            ";
                } else {
                    // line 88
                    echo "                                No 
                            ";
                }
                // line 90
                echo "                        </td>
                        <td>
                            ";
                // line 92
                if ($this->getAttribute($context["entity"], "mesCertificacion", array())) {
                    // line 93
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "mesCertificacion", array()), "d-m-Y"), "html", null, true);
                    echo "
                            ";
                }
                // line 95
                echo "                        </td>
                        <td>
                            <a class=\"btn btn-mini\" href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
                echo "
                            </a>
                            <a class=\"btn btn-mini\" href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "    
            </tbody>
        </table>
        <a class=\"btn btn-mini btn-warning\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_individual_imprimir", array("id" => (isset($context["idBecado"]) ? $context["idBecado"] : null))), "html", null, true);
            echo "\">Imprimir</a>
        <a class=\"btn btn-mini btn-info\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_individual_excel", array("id" => (isset($context["idBecado"]) ? $context["idBecado"] : null))), "html", null, true);
            echo "\">Excel</a>
    ";
        }
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/crud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3aa7f8d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa7f8d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa7f8d_jquery-1.9.0_1.js");
            // line 13
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "3aa7f8d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa7f8d") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa7f8d.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CertificacionBundle:Certificacion:individualCertificacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 15,  240 => 13,  235 => 10,  232 => 9,  226 => 6,  222 => 5,  217 => 4,  214 => 3,  207 => 109,  203 => 108,  198 => 105,  187 => 101,  183 => 100,  178 => 98,  174 => 97,  170 => 95,  164 => 93,  162 => 92,  158 => 90,  154 => 88,  150 => 86,  148 => 85,  143 => 83,  139 => 82,  135 => 81,  130 => 79,  126 => 78,  120 => 75,  116 => 74,  112 => 73,  109 => 72,  106 => 70,  102 => 69,  95 => 65,  86 => 58,  81 => 54,  77 => 52,  75 => 51,  38 => 16,  36 => 9,  33 => 8,  31 => 3,  28 => 2,  22 => 1,);
    }
}
/* {% block page %}*/
/* */
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/jordillonchcrudgenerator/css/crud.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap.css') }}" rel="stylesheet">*/
/*     {% endblock %}*/
/*     */
/*     {% block javascript %}*/
/*         {% javascripts */
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js' */
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*     */
/*     <style>*/
/*         .negrita{*/
/*             font-weight: bold; */
/*         }*/
/* */
/*         .colorverde{*/
/*             color: #46a546; */
/*         }*/
/* */
/*         table{*/
/*             border-collapse: collapse;*/
/*             width: 100%;*/
/*         }*/
/*         */
/*         th{*/
/*             */
/*         }*/
/* */
/*         th, td{*/
/*             text-align: left;*/
/*             padding: 8px;*/
/*             border: 1px solid #000;*/
/*         }*/
/* */
/*         tr .blancoDatePicker{*/
/*             tr:nth-child(even){*/
/*                 background-color: #FFFFFF;*/
/*             }*/
/*         }*/
/* */
/*         tr:nth-child(even){*/
/*             background-color: #f2f2f2 */
/*         }*/
/*     </style>*/
/*     {% if entities is empty %}*/
/*         <span style="color:red;">No existen Certificaciones para este becado</span>*/
/*     {% else %}*/
/*         <table class="table table-striped table-bordered table-condensed">*/
/*             <thead>*/
/*                 <tr style="color: #FFFFFF; background-color: #0077b3; border-style: solid;">*/
/*                     {#<th style="vertical-align: top">Id</th>#}*/
/*                     <th style="vertical-align: top">Becado</th>*/
/*                     <th style="vertical-align: top">Beca</th>*/
/*                     <th style="vertical-align: top">Monto</th>*/
/*                     <th style="vertical-align: top">Días Descuento</th>*/
/*                     <th style="vertical-align: top">Total a Pagar</th>*/
/*                     <th style="vertical-align: top">Certificación</th>*/
/*                     <th style="vertical-align: top">Mes Certificación</th>*/
/*                     <th style="vertical-align: top">{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         {#<td><a href="{{ path('certificacion_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>#}*/
/*                         <td>*/
/*                             Dni: {{ entity.becadobeca.becado.dni }} - */
/*                             {{ entity.becadobeca.becado.apellidos }}, */
/*                             {{ entity.becadobeca.becado.nombres }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entity.becadobeca.beca.tipoBeca }} - */
/*                             {{ entity.becadobeca.beca.tipoFuncion }}*/
/*                         </td>*/
/*                         <td>{{ entity.monto }}</td>*/
/*                         <td>{{ entity.descuentoDias }}</td>*/
/*                         <td>{{ entity.totalPagar }}</td>*/
/*                         <td>*/
/*                             {% if entity.certificado %}*/
/*                                 Sí */
/*                             {% else %}*/
/*                                 No */
/*                             {% endif%}*/
/*                         </td>*/
/*                         <td>*/
/*                             {% if entity.mesCertificacion %}*/
/*                             {{ entity.mesCertificacion|date('d-m-Y') }}*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td>*/
/*                             <a class="btn btn-mini" href="{{ path('certificacion_show', { 'id': entity.id }) }}">*/
/*                             {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                             </a>*/
/*                             <a class="btn btn-mini" href="{{ path('certificacion_edit', { 'id': entity.id }) }}">*/
/*                             {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                             </a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}    */
/*             </tbody>*/
/*         </table>*/
/*         <a class="btn btn-mini btn-warning" href="{{ path('certificacion_individual_imprimir', { 'id': idBecado }) }}">Imprimir</a>*/
/*         <a class="btn btn-mini btn-info" href="{{ path('certificacion_individual_excel', { 'id': idBecado }) }}">Excel</a>*/
/*     {% endif %}*/
/* {% endblock page %}*/
/* */
