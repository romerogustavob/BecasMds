<?php

/* PersonaBundle:Becado:index.html.twig */
class __TwigTemplate_ab89def103fd05f66e11b7aeb516bd76c0e16f0ea5e450010224bd93482dd8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Becado:index.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Becados"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    
    ";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
        // line 19
        echo " 
    <div class=\"row\">
        <style>
            .negrita{
                font-weight: bold;
            }

            .colorverde{
                color: #46a546; 
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
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
        
        <div class=\"span8\">
            <h2 style=\"color: #0044cc\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Becados"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>
        </div>
        
        <div class=\"span2\">
            ";
        // line 56
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 57
            echo "                <div class=\"alert alert-block alert-error fade in form-errors\">
                    ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 61
        echo "            &nbsp;
        </div>
            
        <div class=\"span2\">
            <div class=\"filters-right\">
                <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                    <span class=\"caret\"></span>
                </a>
            </div>
        </div>
                    
        <div class=\"row-fluid span12\">
            <div id=\"filters\" class=\"collapse table-responsive\">
                <form class=\"well\" action=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                    ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'form_start');
        echo "
                    <table class=\"table table-condensed\">
                        <tbody>
                            <tr style=\"display:none\">
                                <td colspan=\"4\">
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "telefono", array()), 'row');
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "dni", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "apellidos", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "nombres", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "presentaCertificacion", array()), 'row');
        echo " 
                                </td>
                                <td>
                                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "activo", array()), 'row');
        echo "
                                </td>
                            </tr>
                            <tr  class=\"blancoDatePicker\">
                                <td>
                                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'label', array("label" => "Fecha Alta Desde"));
        echo "
                                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'widget');
        echo "
                                </td>
                                <td>
                                    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'label', array("label" => "Fecha Alta Hasta"));
        echo "
                                    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'widget');
        echo "
                                </td>
                                <td>
                                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'label', array("label" => "Fecha Baja Desde"));
        echo "
                                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'widget');
        echo "
                                </td>
                                <td>
                                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'label', array("label" => "Fecha Baja Hasta"));
        echo "
                                    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'widget');
        echo "
                                </td>
                                <td></td>
                            </tr>

                            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "referente", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["referente"]) {
            // line 125
            echo "                                <tr> 
                                    <td>
                                        ";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["referente"], "dni", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Nº Doc. Referente"));
            // line 128
            echo "
                                        ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["referente"], "dni", array()), 'widget');
            echo "</td>
                                    <td>
                                        ";
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["referente"], "apellidos", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Apellidos Referente"));
            // line 132
            echo "
                                        ";
            // line 133
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["referente"], "apellidos", array()), 'widget');
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 136
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["referente"], "nombres", array()), 'label', array("label_attr" => array("class" => "negrita"), "label" => "Nombres Referente"));
            // line 137
            echo "
                                        ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["referente"], "nombres", array()), 'widget');
            echo "
                                    </td>                                                                                      
                                    ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["referente"], "movimientoSocial", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
                // line 141
                echo "                                        <td>
                                            ";
                // line 142
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "nombre", array()), 'label', array("label_attr" => array("class" => "negrita colorverde"), "label" => "Nombre Mov. Social"));
                // line 143
                echo "
                                            ";
                // line 144
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "nombre", array()), 'widget');
                echo "</td>
                                        <td>
                                            ";
                // line 146
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "activo", array()), 'label', array("label_attr" => array("class" => "negrita colorverde"), "label" => "Mov. Social Activo?"));
                // line 147
                echo "
                                            ";
                // line 148
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "activo", array()), 'widget');
                echo "
                                            <div style=\"display:none\">
                                                ";
                // line 150
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "observaciones", array()), 'row');
                echo "
                                            </div>
                                        </td>                            
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                        <div style=\"display:none;\"> 
                            ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "referente", array()), 'row');
        echo "
                        </div>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "
                    <p>
                        <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                        <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.reset", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    </p>
                </form>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-condensed\">
                <thead>
                    <tr style=\"color: #FFFFFF; background-color: #0077b3; border-style: solid;\">
                        ";
        // line 183
        echo "            
                        <th style=\"vertical-align: top\">Nº Doc.</th>
                        <th style=\"vertical-align: top\">Apellidos</th>
                        <th style=\"vertical-align: top\">Nombres</th>";
        // line 189
        echo "                        <th style=\"vertical-align: top\">Domicilio</th>
                        <th style=\"vertical-align: top\">Becas</th>
                        <th style=\"vertical-align: top\">Mov. Social/ Referente</th>
                        <th style=\"vertical-align: top\">Lugar Afectación</th>            
                        <th style=\"vertical-align: top\">Dependencia</th>";
        // line 195
        echo "                        <th style=\"vertical-align: top\">Formación</th>            
                            ";
        // line 198
        echo "                        <th style=\"vertical-align: top\">Activo</th>
                        <th>";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 204
            echo "                        <tr>
                            ";
            // line 207
            echo "            
                            <td>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dni", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellidos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombres", array()), "html", null, true);
            echo "</td>
                            ";
            // line 213
            echo "                            <td>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 214
                echo "                                    <b>Loc.:</b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "localidad", array()), "html", null, true);
                echo "<br/><b>Barrio:</b>
                                    ";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "barrio", array()), "html", null, true);
                echo "<br/><b>Calle:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "calle", array()), "html", null, true);
                echo "
                                    :";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "numero", array()), "html", null, true);
                echo "<br/><b>Refs:</b>  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "referencias", array()), "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                            </td>
                            <td>
                                ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "becadobeca", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
                // line 221
                echo "                                    ";
                if ($this->getAttribute($context["becadobeca"], "activo", array())) {
                    echo "                        
                                        <b>Tipo Beca:</b>";
                    // line 222
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoBeca", array()), "html", null, true);
                    echo "
                                        <br/><b>Tipo Función:</b>";
                    // line 223
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoFuncion", array()), "html", null, true);
                    echo "
                                        <br/><b>Monto:</b>";
                    // line 224
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "monto", array()), "html", null, true);
                    echo "
                                        <br/>
                                    ";
                }
                // line 227
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                            </td>
                            <td>
                                ";
            // line 230
            echo $this->getAttribute($context["entity"], "referente", array());
            echo "
                            </td>
                            <td>";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lugarAfectacion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 233
            echo $this->getAttribute($context["entity"], "dependencia", array());
            echo "</td>";
            // line 235
            echo "                            <td>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 236
                echo "                            <b>Institución: </b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "institucion", array()), "html", null, true);
                echo " <br/> <b>Niv. Educ.:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "nivelEducativo", array()), "html", null, true);
                echo "
                            <br/><b>Profesión:</b>";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "profesion", array()), "html", null, true);
                echo " <br/><b>Perfil:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "perfil", array()), "html", null, true);
                echo "
                            <br/><b>Oficio:</b> ";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "oficio", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "                            </td>
                            ";
            // line 243
            echo "                            <td>";
            if ($this->getAttribute($context["entity"], "activo", array())) {
                echo "Sí";
            } else {
                echo " No ";
            }
            echo "</td>
                            <td>
                                <a class=\"btn btn-mini\" href=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
                                </a>                                
                                <a class=\"btn btn-mini btn-primary\" href=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 249
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
                                </a>                               
                                <a class=\"btn btn-mini btn-info\" id=\"page-help-";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" 
                                   href=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_individual", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" 
                                   onclick=\"window.open(this.href, 'popupwindow', 'top=125,left=175,width=900,height=300'); return false;\">
                                    Certificaciones
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "                </tbody>
            </table>
        </div>
        <div class=\"span4\">
            ";
        // line 263
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
        </div>
        <div class=\"span8\">
            <a class=\"btn btn-success likepaginator\" href=\"";
        // line 266
        echo $this->env->getExtension('routing')->getPath("becado_new");
        echo "\">
                ";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " Becado
            </a>
        </div>
    </div>
                     
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.structure.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    
    ";
    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        echo "       
        ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7e8cb1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7e8cb1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e7e8cb1_part_1.js");
            // line 16
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" ></script>
        ";
        } else {
            // asset "e7e8cb1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7e8cb1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e7e8cb1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" ></script>
        ";
        }
        unset($context["asset_url"]);
        // line 18
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
        return array (  613 => 18,  599 => 16,  595 => 15,  590 => 14,  584 => 11,  580 => 10,  575 => 9,  572 => 8,  562 => 267,  558 => 266,  552 => 263,  546 => 259,  533 => 252,  529 => 251,  524 => 249,  520 => 248,  515 => 246,  511 => 245,  501 => 243,  498 => 240,  490 => 238,  484 => 237,  477 => 236,  472 => 235,  469 => 233,  465 => 232,  460 => 230,  456 => 228,  450 => 227,  444 => 224,  440 => 223,  436 => 222,  431 => 221,  427 => 220,  423 => 218,  413 => 216,  407 => 215,  402 => 214,  397 => 213,  393 => 210,  389 => 209,  385 => 208,  382 => 207,  379 => 204,  375 => 203,  368 => 199,  365 => 198,  362 => 195,  356 => 189,  351 => 183,  338 => 172,  334 => 171,  329 => 169,  315 => 158,  312 => 157,  304 => 154,  294 => 150,  289 => 148,  286 => 147,  284 => 146,  279 => 144,  276 => 143,  274 => 142,  271 => 141,  267 => 140,  262 => 138,  259 => 137,  257 => 136,  251 => 133,  248 => 132,  246 => 131,  241 => 129,  238 => 128,  236 => 127,  232 => 125,  228 => 124,  220 => 119,  216 => 118,  210 => 115,  206 => 114,  200 => 111,  196 => 110,  190 => 107,  186 => 106,  178 => 101,  172 => 98,  166 => 95,  160 => 92,  154 => 89,  146 => 84,  140 => 81,  132 => 76,  126 => 75,  115 => 67,  107 => 61,  101 => 58,  98 => 57,  96 => 56,  89 => 52,  54 => 19,  52 => 14,  49 => 13,  46 => 8,  43 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'Becados'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.structure.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.theme.css') }}" rel="stylesheet" />    */
/*     {% endblock %}*/
/*     */
/*     {% block javascript %}       */
/*         {% javascripts '@persona_jquery_ui' %}*/
/*         <script src="{{ asset_url }}" type="text/javascript" ></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*  */
/*     <div class="row">*/
/*         <style>*/
/*             .negrita{*/
/*                 font-weight: bold;*/
/*             }*/
/* */
/*             .colorverde{*/
/*                 color: #46a546; */
/*             }*/
/* */
/*             table {*/
/*                 border-collapse: collapse;*/
/*                 width: 100%;*/
/*             }*/
/* */
/*             th, td {*/
/*                 text-align: left;*/
/*                 padding: 8px;*/
/*             }*/
/* */
/*             tr .blancoDatePicker{*/
/*                 tr:nth-child(even){*/
/*                     background-color: #FFFFFF */
/*                 }*/
/*             }*/
/* */
/*             tr:nth-child(even){*/
/*                 background-color: #f2f2f2 */
/*             }*/
/*         </style>*/
/*         */
/*         <div class="span8">*/
/*             <h2 style="color: #0044cc">{{ 'views.index.list'|trans({'%entity%': 'Becados'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/*         </div>*/
/*         */
/*         <div class="span2">*/
/*             {% if form_errors(filterForm) %}*/
/*                 <div class="alert alert-block alert-error fade in form-errors">*/
/*                     {{ form_errors(filterForm) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             &nbsp;*/
/*         </div>*/
/*             */
/*         <div class="span2">*/
/*             <div class="filters-right">*/
/*                 <a class="btn dropdown-toggle" data-toggle="collapse" data-target="#filters">*/
/*                     {{ 'views.index.filters'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                     <span class="caret"></span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*                     */
/*         <div class="row-fluid span12">*/
/*             <div id="filters" class="collapse table-responsive">*/
/*                 <form class="well" action="{{ path('becado') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                     {{ form_start(filterForm) }}*/
/*                     <table class="table table-condensed">*/
/*                         <tbody>*/
/*                             <tr style="display:none">*/
/*                                 <td colspan="4">*/
/*                                     {{ form_row(filterForm.id) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_row(filterForm.telefono) }}*/
/*                                 </td>*/
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
/*                                     {{ form_row(filterForm.presentaCertificacion) }} */
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_row(filterForm.activo) }}*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr  class="blancoDatePicker">*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.fechaAlta.left_date, 'Fecha Alta Desde') }}*/
/*                                     {{ form_widget(filterForm.fechaAlta.left_date) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.fechaAlta.right_date, 'Fecha Alta Hasta') }}*/
/*                                     {{ form_widget(filterForm.fechaAlta.right_date) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.fechaBaja.left_date, 'Fecha Baja Desde') }}*/
/*                                     {{ form_widget(filterForm.fechaBaja.left_date) }}*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     {{ form_label(filterForm.fechaBaja.right_date, 'Fecha Baja Hasta') }}*/
/*                                     {{ form_widget(filterForm.fechaBaja.right_date) }}*/
/*                                 </td>*/
/*                                 <td></td>*/
/*                             </tr>*/
/* */
/*                             {% for referente in filterForm.referente %}*/
/*                                 <tr> */
/*                                     <td>*/
/*                                         {{ form_label(referente.dni, 'Nº Doc. Referente', */
/*                                                                 {'label_attr':{'class':'negrita'}}) }}*/
/*                                         {{ form_widget(referente.dni)}}</td>*/
/*                                     <td>*/
/*                                         {{ form_label(referente.apellidos, 'Apellidos Referente', */
/*                                                                 {'label_attr':{'class':'negrita'}}) }}*/
/*                                         {{ form_widget(referente.apellidos)}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         {{ form_label(referente.nombres, 'Nombres Referente', */
/*                                                                 {'label_attr':{'class':'negrita'}}) }}*/
/*                                         {{ form_widget(referente.nombres)}}*/
/*                                     </td>                                                                                      */
/*                                     {% for movimiento in referente.movimientoSocial %}*/
/*                                         <td>*/
/*                                             {{ form_label(movimiento.nombre, 'Nombre Mov. Social', */
/*                                                                     {'label_attr':{'class':'negrita colorverde'}}) }}*/
/*                                             {{ form_widget(movimiento.nombre)}}</td>*/
/*                                         <td>*/
/*                                             {{ form_label(movimiento.activo, 'Mov. Social Activo?', */
/*                                                                     {'label_attr':{'class':'negrita colorverde'}}) }}*/
/*                                             {{ form_widget(movimiento.activo)}}*/
/*                                             <div style="display:none">*/
/*                                                 {{ form_row(movimiento.observaciones) }}*/
/*                                             </div>*/
/*                                         </td>                            */
/*                                     {% endfor %}*/
/* */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         <div style="display:none;"> */
/*                             {{ form_row(filterForm.referente) }}*/
/*                         </div>*/
/*                         <tr>*/
/*                             <td></td>*/
/*                             <td></td>*/
/*                             <td></td>*/
/*                             <td></td>*/
/*                             <td></td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                     {{ form_rest(filterForm) }}*/
/*                     <p>*/
/*                         <button type="submit" name="filter_action" value="filter">{{ 'views.index.filter'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                         <button type="submit" name="filter_action" value="reset">{{ 'views.index.reset'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                     </p>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="table-responsive">*/
/*             <table class="table table-striped table-bordered table-condensed">*/
/*                 <thead>*/
/*                     <tr style="color: #FFFFFF; background-color: #0077b3; border-style: solid;">*/
/*                         {#            <th style="vertical-align: top">Id</th>*/
/*                         #}            */
/*                         <th style="vertical-align: top">Nº Doc.</th>*/
/*                         <th style="vertical-align: top">Apellidos</th>*/
/*                         <th style="vertical-align: top">Nombres</th>{#*/
/*                         <th style="vertical-align: top">Teléfono</th>*/
/*                         <th style="vertical-align: top">Email</th>#}*/
/*                         <th style="vertical-align: top">Domicilio</th>*/
/*                         <th style="vertical-align: top">Becas</th>*/
/*                         <th style="vertical-align: top">Mov. Social/ Referente</th>*/
/*                         <th style="vertical-align: top">Lugar Afectación</th>            */
/*                         <th style="vertical-align: top">Dependencia</th>{#*/
/*                         <th style="vertical-align: top">Presenta Certificación</th>#}*/
/*                         <th style="vertical-align: top">Formación</th>            */
/*                             {#<th style="vertical-align: top">Fecha Alta</th>*/
/*                             <th style="vertical-align: top">Fecha Baja</th>#}*/
/*                         <th style="vertical-align: top">Activo</th>*/
/*                         <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             {#            */
/*                             <td><a href="{{ path('becado_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             #}            */
/*                             <td>{{ entity.dni }}</td>*/
/*                             <td>{{ entity.apellidos }}</td>*/
/*                             <td>{{ entity.nombres }}</td>*/
/*                             {#<td>{{ entity.telefono }}</td>*/
/*                             <td>{{ entity.email }}</td>#}*/
/*                             <td>{% for domicilio in entity.domicilio %}*/
/*                                     <b>Loc.:</b>{{ domicilio.localidad }}<br/><b>Barrio:</b>*/
/*                                     {{ domicilio.barrio }}<br/><b>Calle:</b> {{ domicilio.calle }}*/
/*                                     :{{ domicilio.numero }}<br/><b>Refs:</b>  {{ domicilio.referencias }}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% for becadobeca in entity.becadobeca %}*/
/*                                     {% if becadobeca.activo %}                        */
/*                                         <b>Tipo Beca:</b>{{ becadobeca.beca.tipoBeca }}*/
/*                                         <br/><b>Tipo Función:</b>{{ becadobeca.beca.tipoFuncion }}*/
/*                                         <br/><b>Monto:</b>{{ becadobeca.beca.monto }}*/
/*                                         <br/>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {{ entity.referente | raw }}*/
/*                             </td>*/
/*                             <td>{{ entity.lugarAfectacion }}</td>*/
/*                             <td>{{ entity.dependencia | raw }}</td>{#*/
/*                             <td>{% if entity.presentaCertificacion %}Sí{% else %} No {% endif %}</td>#}*/
/*                             <td>{% for formacion in entity.formacion %}*/
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
/*                                 </a>                                */
/*                                 <a class="btn btn-mini btn-primary" href="{{ path('becado_edit', { 'id': entity.id }) }}">*/
/*                                     {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                                 </a>                               */
/*                                 <a class="btn btn-mini btn-info" id="page-help-{{ entity.id }}" */
/*                                    href="{{ path('certificacion_individual', { 'id': entity.id }) }}" */
/*                                    onclick="window.open(this.href, 'popupwindow', 'top=125,left=175,width=900,height=300'); return false;">*/
/*                                     Certificaciones*/
/*                                 </a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <div class="span4">*/
/*             {{ pagerHtml|raw }}*/
/*         </div>*/
/*         <div class="span8">*/
/*             <a class="btn btn-success likepaginator" href="{{ path('becado_new') }}">*/
/*                 {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} Becado*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*                      */
/* {% endblock %}*/
