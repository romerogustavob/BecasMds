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
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "    
    ";
        // line 7
        $this->displayBlock('javascript', $context, $blocks);
        // line 14
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

        th, td{
                text-align: left;
                padding: 8px;
            }

        tr .blancoDatePicker{
                tr:nth-child(even){
                    background-color: #FFFFFF 
                }
            }

        tr:nth-child(even){
                background-color: #f2f2f2 
            }
    </style>
    ";
        // line 44
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : null))) {
            // line 45
            echo "        <span style=\"color:red;\">No existen Certificaciones para este becado</span>
    ";
        } else {
            // line 47
            echo "        <table class=\"table table-striped table-bordered table-condensed\">
            <thead class=\"colorverde\">
                <tr>
                    <th>Id</th>
                    <th>Becado</th>
                    <th>Beca</th>
                    <th>Monto</th>
                    <th>Descuentodias</th>
                    <th>Totalpagar</th>
                    <th>Certificado</th>
                    <th>Mescertificacion</th>
                    <th>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 63
                echo "                    <tr>
                        <td><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</a></td>
                        <td>Dni: ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "becado", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "becadobeca", array()), "beca", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "monto", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descuentoDias", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "totalPagar", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 70
                if ($this->getAttribute($context["entity"], "certificado", array())) {
                    echo "Sí ";
                } else {
                    echo " No ";
                }
                echo "</td>
                        <td>";
                // line 71
                if ($this->getAttribute($context["entity"], "mesCertificacion", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "mesCertificacion", array()), "d-m-Y"), "html", null, true);
                }
                echo "</td>
                        <td>
                            <a class=\"btn btn-mini\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
                echo "
                            </a>
                            <a class=\"btn btn-mini\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 77
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
            // line 81
            echo "    
            </tbody>
        </table>
        <a class=\"btn btn-mini\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_individual_imprimir", array("id" => (isset($context["idBecado"]) ? $context["idBecado"] : null))), "html", null, true);
            echo "\">Imprimir</a>
        <a class=\"btn btn-mini\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_individual_excel", array("id" => (isset($context["idBecado"]) ? $context["idBecado"] : null))), "html", null, true);
            echo "\">Excel</a>
    ";
        }
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/crud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3aa7f8d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa7f8d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa7f8d_jquery-1.9.0_1.js");
            // line 10
            echo "        
        <script type=\"text/javascript\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "3aa7f8d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa7f8d") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa7f8d.js");
            // line 10
            echo "        
        <script type=\"text/javascript\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CertificacionBundle:Certificacion:individualCertificacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  223 => 13,  217 => 11,  214 => 10,  207 => 11,  204 => 10,  199 => 8,  196 => 7,  190 => 4,  185 => 3,  182 => 2,  175 => 85,  171 => 84,  166 => 81,  155 => 77,  151 => 76,  146 => 74,  142 => 73,  135 => 71,  127 => 70,  123 => 69,  119 => 68,  115 => 67,  111 => 66,  107 => 65,  101 => 64,  98 => 63,  94 => 62,  87 => 58,  74 => 47,  70 => 45,  68 => 44,  36 => 14,  34 => 7,  31 => 6,  28 => 2,  22 => 1,);
    }
}
/* {% block page %}*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/jordillonchcrudgenerator/css/crud.css') }}" rel="stylesheet">*/
/*     {% endblock %}*/
/*     */
/*     {% block javascript %}*/
/*         {% javascripts */
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js' */
/*         %}        */
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*     */
/*     <style>*/
/*         .negrita{*/
/*                 font-weight: bold;*/
/*             }*/
/* */
/*         .colorverde{*/
/*                 color: #46a546; */
/*             }*/
/* */
/*         table{*/
/*                 border-collapse: collapse;*/
/*                 width: 100%;*/
/*             }*/
/* */
/*         th, td{*/
/*                 text-align: left;*/
/*                 padding: 8px;*/
/*             }*/
/* */
/*         tr .blancoDatePicker{*/
/*                 tr:nth-child(even){*/
/*                     background-color: #FFFFFF */
/*                 }*/
/*             }*/
/* */
/*         tr:nth-child(even){*/
/*                 background-color: #f2f2f2 */
/*             }*/
/*     </style>*/
/*     {% if entities is empty %}*/
/*         <span style="color:red;">No existen Certificaciones para este becado</span>*/
/*     {% else %}*/
/*         <table class="table table-striped table-bordered table-condensed">*/
/*             <thead class="colorverde">*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Becado</th>*/
/*                     <th>Beca</th>*/
/*                     <th>Monto</th>*/
/*                     <th>Descuentodias</th>*/
/*                     <th>Totalpagar</th>*/
/*                     <th>Certificado</th>*/
/*                     <th>Mescertificacion</th>*/
/*                     <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('certificacion_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                         <td>Dni: {{ entity.becadobeca.becado }}</td>*/
/*                         <td>{{ entity.becadobeca.beca }}</td>*/
/*                         <td>{{ entity.monto }}</td>*/
/*                         <td>{{ entity.descuentoDias }}</td>*/
/*                         <td>{{ entity.totalPagar }}</td>*/
/*                         <td>{% if entity.certificado %}Sí {% else %} No {% endif%}</td>*/
/*                         <td>{% if entity.mesCertificacion %}{{ entity.mesCertificacion|date('d-m-Y') }}{% endif %}</td>*/
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
/*         <a class="btn btn-mini" href="{{ path('certificacion_individual_imprimir', { 'id': idBecado }) }}">Imprimir</a>*/
/*         <a class="btn btn-mini" href="{{ path('certificacion_individual_excel', { 'id': idBecado }) }}">Excel</a>*/
/*     {% endif %}*/
/* {% endblock page %}*/
/* */
