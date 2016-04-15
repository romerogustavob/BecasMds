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
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
        // line 25
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
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Becados"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"span2\">
            ";
        // line 48
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 49
            echo "                <div class=\"alert alert-block alert-error fade in form-errors\">
                    ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 53
        echo "            &nbsp;
        </div>
        <div class=\"span2\">
            <div class=\"filters-right\">
                <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                    <span class=\"caret\"></span>
                </a>
            </div>
        </div>

        <div class=\"row-fluid span12\">
            <div id=\"filters\" class=\"collapse table-responsive\">

                <form class=\"well\" action=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                    <table class=\"table table-condensed\">
                        <tbody>
                            <tr style=\"display:none\">
                                <td colspan=\"4\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "</td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "dni", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "apellidos", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "nombres", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "telefono", array()), 'row');
        echo " 
                                </td>
                            </tr>
                            <tr  class=\"blancoDatePicker\">
                                <td>
                                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "presentaCertificacion", array()), 'row');
        echo " 
                                </td>
                                <td>
                                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "activo", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'label', array("label" => "Fecha Alta Desde"));
        echo "
                                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'widget');
        echo "    

                                </td>
                                <td>
                                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'label', array("label" => "Fecha Alta Hasta"));
        echo "
                                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'widget');
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'label', array("label" => "Fecha Baja Desde"));
        echo "
                                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'widget');
        echo "
                                    
                                </td>
                                <td>
                                    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'label', array("label" => "Fecha Baja Hasta"));
        echo "
                                    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'widget');
        echo "
                                </td>
                                <td colspan=\"2\">
                                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "referente", array()), 'label');
        echo "
                                    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "referente", array()), 'widget');
        echo "
                                    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                        <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.reset", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                        </p>
                </form>
            </div>
        </div>


        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-condensed\">

                <thead>
                    <tr style=\"color: #000; background-color: #46a546; border-style: solid; \">
                        ";
        // line 137
        echo "            <th style=\"vertical-align: top\">Nº Doc.</th>
                        <th style=\"vertical-align: top\">Apellidos</th>
                        <th style=\"vertical-align: top\">Nombres</th>";
        // line 142
        echo "                        <th style=\"vertical-align: top\">Domicilio</th>
                        <th style=\"vertical-align: top\">Becas</th>
                        <th style=\"vertical-align: top\">Mov. Social/ Referente</th>
                        <th style=\"vertical-align: top\">Lugar Afectación</th>            
                        <th style=\"vertical-align: top\">Dependencia</th>
                        <th style=\"vertical-align: top\">Presenta Certificación</th>
                        <th style=\"vertical-align: top\">Formación</th>            
                        ";
        // line 151
        echo "                        <th style=\"vertical-align: top\">Activo</th>
                        <th>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 157
            echo "                        <tr>
                            ";
            // line 159
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dni", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellidos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombres", array()), "html", null, true);
            echo "</td>
                            ";
            // line 164
            echo "                            <td>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 165
                echo "                                <b>Loc.:</b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "localidad", array()), "html", null, true);
                echo "<br/><b>Barrio:</b>
                                ";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "barrio", array()), "html", null, true);
                echo "<br/><b>Calle:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "calle", array()), "html", null, true);
                echo "
                                :";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "numero", array()), "html", null, true);
                echo "<br/><b>Refs:</b>  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "referencias", array()), "html", null, true);
                echo " 

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                        </td>
                        <td>
                            ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "becadobeca", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
                // line 173
                echo "                                ";
                if ($this->getAttribute($context["becadobeca"], "activo", array())) {
                    echo "                        
                                    <b>Tipo Beca:</b>";
                    // line 174
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoBeca", array()), "html", null, true);
                    echo "
                                    <br/><b>Tipo Función:</b>";
                    // line 175
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoFuncion", array()), "html", null, true);
                    echo "
                                    <br/><b>Monto:</b>";
                    // line 176
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "monto", array()), "html", null, true);
                    echo "
                                    <br/>

                                ";
                }
                // line 180
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                        </td>

                        <td>
                            ";
            // line 184
            echo $this->getAttribute($context["entity"], "referente", array());
            echo "
                        </td>
                        <td>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lugarAfectacion", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 188
            echo $this->getAttribute($context["entity"], "dependencia", array());
            echo "</td>
                        <td>";
            // line 189
            if ($this->getAttribute($context["entity"], "presentaCertificacion", array())) {
                echo "Sí";
            } else {
                echo " No ";
            }
            echo "</td>
                        <td>";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 191
                echo "                            <b>Institución: </b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "institucion", array()), "html", null, true);
                echo " <br/> <b>Niv. Educ.:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "nivelEducativo", array()), "html", null, true);
                echo "
                            <br/><b>Profesión:</b>";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "profesion", array()), "html", null, true);
                echo " <br/><b>Perfil:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "perfil", array()), "html", null, true);
                echo "
                            <br/><b>Oficio:</b> ";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "oficio", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                            </td>
                            ";
            // line 198
            echo "                            <td>";
            if ($this->getAttribute($context["entity"], "activo", array())) {
                echo "Sí";
            } else {
                echo " No ";
            }
            echo "</td>
                            <td>
                                <a class=\"btn btn-mini\" href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
                                </a>
                                <a class=\"btn btn-mini btn-primary\" href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 204
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
        // line 210
        echo "                        </tbody>
                    </table>
                </div>

                <div class=\"span4\">
                    ";
        // line 215
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
                </div>

                <div class=\"span8\">
                    <a class=\"btn btn-success likepaginator\" href=\"";
        // line 219
        echo $this->env->getExtension('routing')->getPath("becado_new");
        echo "\">
                        ";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " Becado
                    </a>
                </div>
            </div>
                  
    

";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      
    ";
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e604a14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_jquery-1.9.0_1.js");
            // line 22
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e604a14_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e604a14_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2Becado_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "e604a14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    ";
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
        return array (  520 => 24,  494 => 22,  489 => 17,  486 => 16,  479 => 12,  474 => 11,  471 => 10,  459 => 220,  455 => 219,  448 => 215,  441 => 210,  429 => 204,  425 => 203,  420 => 201,  416 => 200,  406 => 198,  403 => 195,  395 => 193,  389 => 192,  382 => 191,  378 => 190,  370 => 189,  366 => 188,  361 => 186,  356 => 184,  351 => 181,  345 => 180,  338 => 176,  334 => 175,  330 => 174,  325 => 173,  321 => 172,  317 => 170,  306 => 167,  300 => 166,  295 => 165,  290 => 164,  286 => 161,  282 => 160,  277 => 159,  274 => 157,  270 => 156,  263 => 152,  260 => 151,  251 => 142,  247 => 137,  232 => 124,  228 => 123,  219 => 117,  215 => 116,  211 => 115,  205 => 112,  201 => 111,  194 => 107,  190 => 106,  182 => 101,  178 => 100,  171 => 96,  167 => 95,  161 => 92,  155 => 89,  147 => 84,  141 => 81,  135 => 78,  129 => 75,  122 => 71,  113 => 67,  101 => 58,  94 => 53,  88 => 50,  85 => 49,  83 => 48,  77 => 45,  55 => 25,  53 => 16,  50 => 15,  47 => 10,  44 => 9,  34 => 5,  31 => 4,  11 => 2,);
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
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />*/
/*       */
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Becado.js'*/
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
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
/*             <div id="filters" class="collapse table-responsive">*/
/* */
/*                 <form class="well" action="{{ path('becado') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                     <table class="table table-condensed">*/
/*                         <tbody>*/
/*                             <tr style="display:none">*/
/*                                 <td colspan="4">{{ form_row(filterForm.id) }}</td>*/
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
/*                                 <td colspan="2">*/
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
/*                         </p>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="table-responsive">*/
/*             <table class="table table-striped table-bordered table-condensed">*/
/* */
/*                 <thead>*/
/*                     <tr style="color: #000; background-color: #46a546; border-style: solid; ">*/
/*                         {#            <th style="vertical-align: top">Id</th>*/
/*                         #}            <th style="vertical-align: top">Nº Doc.</th>*/
/*                         <th style="vertical-align: top">Apellidos</th>*/
/*                         <th style="vertical-align: top">Nombres</th>{#*/
/*                         <th style="vertical-align: top">Teléfono</th>*/
/*                         <th style="vertical-align: top">Email</th>#}*/
/*                         <th style="vertical-align: top">Domicilio</th>*/
/*                         <th style="vertical-align: top">Becas</th>*/
/*                         <th style="vertical-align: top">Mov. Social/ Referente</th>*/
/*                         <th style="vertical-align: top">Lugar Afectación</th>            */
/*                         <th style="vertical-align: top">Dependencia</th>*/
/*                         <th style="vertical-align: top">Presenta Certificación</th>*/
/*                         <th style="vertical-align: top">Formación</th>            */
/*                         {#<th style="vertical-align: top">Fecha Alta</th>*/
/*                         <th style="vertical-align: top">Fecha Baja</th>#}*/
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
/*                             {#<td>{% if entity.fechaAlta %}{{ entity.fechaAlta|date('Y-m-d') }}{% endif %}</td>*/
/*                             <td>{% if entity.fechaBaja %}{{ entity.fechaBaja|date('Y-m-d') }}{% endif %}</td>#}*/
/*                             <td>{% if entity.activo %}Sí{% else %} No {% endif %}</td>*/
/*                             <td>*/
/*                                 <a class="btn btn-mini" href="{{ path('becado_show', { 'id': entity.id }) }}">*/
/*                                     {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                                 </a>*/
/*                                 <a class="btn btn-mini btn-primary" href="{{ path('becado_edit', { 'id': entity.id }) }}">*/
/*                                     {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                                 </a>            */
/*                                  */
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
/*                   */
/*     */
/* */
/* {% endblock %}*/
