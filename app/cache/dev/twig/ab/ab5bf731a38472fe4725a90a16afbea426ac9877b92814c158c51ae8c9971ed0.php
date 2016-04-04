<?php

/* PersonaBundle:Becado:index.html.twig */
class __TwigTemplate_54669723f299a8e7fd65a849a23f5c8d9f8ba6907bf3221d6471d78073fa1a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Becado:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Becados"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "

";
    }

    // line 9
    public function block_page($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"row\">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }
            
            tr .blancoDatePicker{
                tr:nth-child(even){background-color: #FFFFFF }
            }
            
            tr:nth-child(even){background-color: #f2f2f2 }
        </style>
        <div class=\"span8\">
            <h2 style=\"color: #0044cc\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Becados"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"span2\">
            ";
        // line 33
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 34
            echo "                <div class=\"alert alert-block alert-error fade in form-errors\">
                    ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 38
        echo "            &nbsp;
        </div>
        <div class=\"span2\">
            <div class=\"filters-right\">
                <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                    <span class=\"caret\"></span>
                </a>
            </div>
        </div>

        <div class=\"row-fluid span12\">
            <div id=\"filters\" class=\"collapse\">

                <form class=\"well\" action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                    <table>
                        <tbody>
                            <tr style=\"display:none\">
                                <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "</td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "dni", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "apellidos", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "nombres", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "telefono", array()), 'row');
        echo " 
                                </td>
                            </tr>
                            <tr  class=\"blancoDatePicker\">
                                <td>
                                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "presentaCertificacion", array()), 'row');
        echo " 
                                </td>
                                <td>
                                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "activo", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'label', array("label" => "Fecha Alta Desde"));
        echo "
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'widget');
        echo "    

                                </td>
                                <td>
                                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'label', array("label" => "Fecha Alta Hasta"));
        echo "
                                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'widget');
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'label', array("label" => "Fecha Baja Desde"));
        echo "
                                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'widget');
        echo "
                                    
                                </td>
                                <td>
                                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'label', array("label" => "Fecha Baja Hasta"));
        echo "
                                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'widget');
        echo "
                                </td>
                                <td>
                                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "referente", array()), 'label');
        echo "
                                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "referente", array()), 'widget');
        echo "
                                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                        <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.reset", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    </p>
                </form>
            </div>
        </div>


        <div class=\"span11\">
            <table class=\"table table-striped table-bordered table-condensed\">

                <thead>
                    <tr style=\"color: #000; background-color: #E6E6E6; border-style: solid; \">
                        ";
        // line 122
        echo "            <th style=\"vertical-align: top\">Nº Doc.</th>
                        <th style=\"vertical-align: top\">Apellidos</th>
                        <th style=\"vertical-align: top\">Nombres</th>";
        // line 127
        echo "                        <th style=\"vertical-align: top\">Domicilio</th>
                        <th style=\"vertical-align: top\">Becas</th>
                        <th style=\"vertical-align: top\">Mov. Social/Referente</th>
                        <th style=\"vertical-align: top\">Lugar Afectación</th>            
                        <th style=\"vertical-align: top\">Dependencia</th>
                        <th style=\"vertical-align: top\">Presenta Certificación</th>
                        <th style=\"vertical-align: top\">Formación</th>            
                        <th style=\"vertical-align: top\">Fecha Alta</th>
                        <th style=\"vertical-align: top\">Fecha Baja</th>
                        <th style=\"vertical-align: top\">Activo</th>
                        <th>";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 142
            echo "                        <tr>
                            ";
            // line 144
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dni", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellidos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombres", array()), "html", null, true);
            echo "</td>
                            ";
            // line 149
            echo "                            <td>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 150
                echo "                                <b>Loc.:</b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "localidad", array()), "html", null, true);
                echo "<br/><b>Barrio:</b>
                                ";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "barrio", array()), "html", null, true);
                echo "<br/><b>Calle:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "calle", array()), "html", null, true);
                echo "
                                :";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "numero", array()), "html", null, true);
                echo "<br/><b>Refs:</b>  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "referencias", array()), "html", null, true);
                echo " 

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                        </td>
                        <td>
                            ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "becadobeca", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
                // line 158
                echo "                                ";
                if ($this->getAttribute($context["becadobeca"], "activo", array())) {
                    echo "                        
                                    <b>Tipo Beca:</b>";
                    // line 159
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoBeca", array()), "html", null, true);
                    echo "
                                    <br/><b>Tipo Función:</b>";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoFuncion", array()), "html", null, true);
                    echo "
                                    <br/><b>Monto:</b>";
                    // line 161
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "monto", array()), "html", null, true);
                    echo "
                                    <br/>

                                ";
                }
                // line 165
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "                        </td>

                        <td>
                            ";
            // line 169
            echo $this->getAttribute($context["entity"], "referente", array());
            echo "
                        </td>
                        <td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lugarAfectacion", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 173
            echo $this->getAttribute($context["entity"], "dependencia", array());
            echo "</td>
                        <td>";
            // line 174
            if ($this->getAttribute($context["entity"], "presentaCertificacion", array())) {
                echo "Sí";
            } else {
                echo " No ";
            }
            echo "</td>
                        <td>";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 176
                echo "                            <b>Institución: </b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "institucion", array()), "html", null, true);
                echo " <br/> <b>Niv. Educ.:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "nivelEducativo", array()), "html", null, true);
                echo "
                            <br/><b>Profesión:</b>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "profesion", array()), "html", null, true);
                echo " <br/><b>Perfil:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "perfil", array()), "html", null, true);
                echo "
                            <br/><b>Oficio:</b> ";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "oficio", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                            </td>
                            <td>";
            // line 181
            if ($this->getAttribute($context["entity"], "fechaAlta", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAlta", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 182
            if ($this->getAttribute($context["entity"], "fechaBaja", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaBaja", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 183
            if ($this->getAttribute($context["entity"], "activo", array())) {
                echo "Sí";
            } else {
                echo " No ";
            }
            echo "</td>
                            <td>
                                <a class=\"btn btn-mini\" href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
                                </a>
                                <a class=\"btn btn-mini btn-primary\" href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 189
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
        // line 195
        echo "                        </tbody>
                    </table>
                </div>

                <div class=\"span4\">
                    ";
        // line 200
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
                </div>

                <div class=\"span8\">
                    <a class=\"btn btn-success likepaginator\" href=\"";
        // line 204
        echo $this->env->getExtension('routing')->getPath("becado_new");
        echo "\">
                        ";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " Becado
                    </a>
                </div>
            </div>

            ";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Becado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 205,  456 => 204,  449 => 200,  442 => 195,  430 => 189,  426 => 188,  421 => 186,  417 => 185,  408 => 183,  402 => 182,  396 => 181,  393 => 180,  385 => 178,  379 => 177,  372 => 176,  368 => 175,  360 => 174,  356 => 173,  351 => 171,  346 => 169,  341 => 166,  335 => 165,  328 => 161,  324 => 160,  320 => 159,  315 => 158,  311 => 157,  307 => 155,  296 => 152,  290 => 151,  285 => 150,  280 => 149,  276 => 146,  272 => 145,  267 => 144,  264 => 142,  260 => 141,  253 => 137,  241 => 127,  237 => 122,  222 => 109,  218 => 108,  209 => 102,  205 => 101,  201 => 100,  195 => 97,  191 => 96,  184 => 92,  180 => 91,  172 => 86,  168 => 85,  161 => 81,  157 => 80,  151 => 77,  145 => 74,  137 => 69,  131 => 66,  125 => 63,  119 => 60,  112 => 56,  103 => 52,  91 => 43,  84 => 38,  78 => 35,  75 => 34,  73 => 33,  67 => 30,  45 => 10,  42 => 9,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'Becados'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     <div class="row">*/
/*         <style>*/
/*             table {*/
/*                 border-collapse: collapse;*/
/*                 width: 100%;*/
/*             }*/
/* */
/*             th, td {*/
/*                 text-align: left;*/
/*                 padding: 8px;*/
/*             }*/
/*             */
/*             tr .blancoDatePicker{*/
/*                 tr:nth-child(even){background-color: #FFFFFF }*/
/*             }*/
/*             */
/*             tr:nth-child(even){background-color: #f2f2f2 }*/
/*         </style>*/
/*         <div class="span8">*/
/*             <h2 style="color: #0044cc">{{ 'views.index.list'|trans({'%entity%': 'Becados'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/*         </div>*/
/*         <div class="span2">*/
/*             {% if form_errors(filterForm) %}*/
/*                 <div class="alert alert-block alert-error fade in form-errors">*/
/*                     {{ form_errors(filterForm) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             &nbsp;*/
/*         </div>*/
/*         <div class="span2">*/
/*             <div class="filters-right">*/
/*                 <a class="btn dropdown-toggle" data-toggle="collapse" data-target="#filters">*/
/*                     {{ 'views.index.filters'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                     <span class="caret"></span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row-fluid span12">*/
/*             <div id="filters" class="collapse">*/
/* */
/*                 <form class="well" action="{{ path('becado') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                     <table>*/
/*                         <tbody>*/
/*                             <tr style="display:none">*/
/*                                 <td>{{ form_row(filterForm.id) }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     {{ form_row(filterForm.dni) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_row(filterForm.apellidos) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_row(filterForm.nombres) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_row(filterForm.telefono) }} */
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr  class="blancoDatePicker">*/
/*                                 <td>*/
/*                                     {{ form_row(filterForm.presentaCertificacion) }} */
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_row(filterForm.activo) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.fechaAlta.left_date, 'Fecha Alta Desde') }}*/
/*                                     {{ form_widget(filterForm.fechaAlta.left_date) }}    */
/* */
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.fechaAlta.right_date, 'Fecha Alta Hasta') }}*/
/*                                     {{ form_widget(filterForm.fechaAlta.right_date) }}*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.fechaBaja.left_date, 'Fecha Baja Desde') }}*/
/*                                     {{ form_widget(filterForm.fechaBaja.left_date) }}*/
/*                                     */
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.fechaBaja.right_date, 'Fecha Baja Hasta') }}*/
/*                                     {{ form_widget(filterForm.fechaBaja.right_date) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.referente) }}*/
/*                                     {{ form_widget(filterForm.referente) | raw }}*/
/*                                     {{ form_rest(filterForm) }}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                     <p>*/
/*                         <button type="submit" name="filter_action" value="filter">{{ 'views.index.filter'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                         <button type="submit" name="filter_action" value="reset">{{ 'views.index.reset'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                     </p>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="span11">*/
/*             <table class="table table-striped table-bordered table-condensed">*/
/* */
/*                 <thead>*/
/*                     <tr style="color: #000; background-color: #E6E6E6; border-style: solid; ">*/
/*                         {#            <th style="vertical-align: top">Id</th>*/
/*                         #}            <th style="vertical-align: top">Nº Doc.</th>*/
/*                         <th style="vertical-align: top">Apellidos</th>*/
/*                         <th style="vertical-align: top">Nombres</th>{#*/
/*                         <th style="vertical-align: top">Teléfono</th>*/
/*                         <th style="vertical-align: top">Email</th>#}*/
/*                         <th style="vertical-align: top">Domicilio</th>*/
/*                         <th style="vertical-align: top">Becas</th>*/
/*                         <th style="vertical-align: top">Mov. Social/Referente</th>*/
/*                         <th style="vertical-align: top">Lugar Afectación</th>            */
/*                         <th style="vertical-align: top">Dependencia</th>*/
/*                         <th style="vertical-align: top">Presenta Certificación</th>*/
/*                         <th style="vertical-align: top">Formación</th>            */
/*                         <th style="vertical-align: top">Fecha Alta</th>*/
/*                         <th style="vertical-align: top">Fecha Baja</th>*/
/*                         <th style="vertical-align: top">Activo</th>*/
/*                         <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             {#            <td><a href="{{ path('becado_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             #}            <td>{{ entity.dni }}</td>*/
/*                             <td>{{ entity.apellidos }}</td>*/
/*                             <td>{{ entity.nombres }}</td>*/
/*                             {#<td>{{ entity.telefono }}</td>*/
/*                             <td>{{ entity.email }}</td>#}*/
/*                             <td>{% for domicilio in entity.domicilio %}*/
/*                                 <b>Loc.:</b>{{ domicilio.localidad }}<br/><b>Barrio:</b>*/
/*                                 {{ domicilio.barrio }}<br/><b>Calle:</b> {{ domicilio.calle }}*/
/*                                 :{{ domicilio.numero }}<br/><b>Refs:</b>  {{ domicilio.referencias }} */
/* */
/*                             {% endfor %}*/
/*                         </td>*/
/*                         <td>*/
/*                             {% for becadobeca in entity.becadobeca %}*/
/*                                 {% if becadobeca.activo %}                        */
/*                                     <b>Tipo Beca:</b>{{ becadobeca.beca.tipoBeca }}*/
/*                                     <br/><b>Tipo Función:</b>{{ becadobeca.beca.tipoFuncion }}*/
/*                                     <br/><b>Monto:</b>{{ becadobeca.beca.monto }}*/
/*                                     <br/>*/
/* */
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </td>*/
/* */
/*                         <td>*/
/*                             {{ entity.referente | raw }}*/
/*                         </td>*/
/*                         <td>{{ entity.lugarAfectacion }}</td>*/
/* */
/*                         <td>{{ entity.dependencia | raw }}</td>*/
/*                         <td>{% if entity.presentaCertificacion %}Sí{% else %} No {% endif %}</td>*/
/*                         <td>{% for formacion in entity.formacion %}*/
/*                             <b>Institución: </b>{{ formacion.institucion }} <br/> <b>Niv. Educ.:</b> {{ formacion.nivelEducativo }}*/
/*                             <br/><b>Profesión:</b>{{ formacion.profesion }} <br/><b>Perfil:</b> {{ formacion.perfil }}*/
/*                             <br/><b>Oficio:</b> {{ formacion.oficio }}*/
/*                             {% endfor %}*/
/*                             </td>*/
/*                             <td>{% if entity.fechaAlta %}{{ entity.fechaAlta|date('Y-m-d') }}{% endif %}</td>*/
/*                             <td>{% if entity.fechaBaja %}{{ entity.fechaBaja|date('Y-m-d') }}{% endif %}</td>*/
/*                             <td>{% if entity.activo %}Sí{% else %} No {% endif %}</td>*/
/*                             <td>*/
/*                                 <a class="btn btn-mini" href="{{ path('becado_show', { 'id': entity.id }) }}">*/
/*                                     {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                                 </a>*/
/*                                 <a class="btn btn-mini btn-primary" href="{{ path('becado_edit', { 'id': entity.id }) }}">*/
/*                                     {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                                 </a>            */
/* */
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/* */
/*                 <div class="span4">*/
/*                     {{ pagerHtml|raw }}*/
/*                 </div>*/
/* */
/*                 <div class="span8">*/
/*                     <a class="btn btn-success likepaginator" href="{{ path('becado_new') }}">*/
/*                         {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} Becado*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% endblock %}*/
