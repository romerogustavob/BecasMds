<?php

/* PersonaBundle:Becado:index.html.twig */
class __TwigTemplate_54669723f299a8e7fd65a849a23f5c8d9f8ba6907bf3221d6471d78073fa1a85 extends Twig_Template
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
        echo "    
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
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
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Becados"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"span2\">
            ";
        // line 57
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 58
            echo "                <div class=\"alert alert-block alert-error fade in form-errors\">
                    ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 62
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
        // line 74
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                    ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'form_start');
        echo "
                    <table class=\"table table-condensed\">
                        <tbody>
                            <tr style=\"display:none\">
                                <td colspan=\"4\">
                                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "telefono", array()), 'row');
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "dni", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "apellidos", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "nombres", array()), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "presentaCertificacion", array()), 'row');
        echo " 
                                </td>
                                <td>
                                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "activo", array()), 'row');
        echo "
                                </td>
                            </tr>
                            <tr  class=\"blancoDatePicker\">
                                <td>
                                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'label', array("label" => "Fecha Alta Desde"));
        echo "
                                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'widget');
        echo "
                                </td>
                                <td>
                                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'label', array("label" => "Fecha Alta Hasta"));
        echo "
                                    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'widget');
        echo "
                                </td>
                                <td>
                                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'label', array("label" => "Fecha Baja Desde"));
        echo "
                                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'widget');
        echo "
                                </td>
                                <td>
                                    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'label', array("label" => "Fecha Baja Hasta"));
        echo "
                                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'widget');
        echo "
                                </td>
                                <td></td>
                            </tr>

                            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "referente", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["referente"]) {
            // line 124
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
                // line 143
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "nombre", array()), 'label', array("label_attr" => array("class" => "negrita colorverde"), "label" => "Nombre Mov. Social"));
                // line 144
                echo "
                                            ";
                // line 145
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "nombre", array()), 'widget');
                echo "</td>
                                        <td>
                                            ";
                // line 147
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "activo", array()), 'label', array("label_attr" => array("class" => "negrita colorverde"), "label" => "Mov. Social Activo?"));
                // line 148
                echo "
                                            ";
                // line 149
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "activo", array()), 'widget');
                echo "
                                            <div style=\"display:none\">
                                                ";
                // line 151
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["movimiento"], "observaciones", array()), 'row');
                echo "
                                            </div>
                                        </td>                            
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                                    
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                        <div style=\"display:none\"> 
                            ";
        // line 159
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
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "
                    <p>
                        <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                        <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 173
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
        // line 184
        echo "            
                        <th style=\"vertical-align: top\">Nº Doc.</th>
                        <th style=\"vertical-align: top\">Apellidos</th>
                        <th style=\"vertical-align: top\">Nombres</th>";
        // line 190
        echo "                        <th style=\"vertical-align: top\">Domicilio</th>
                        <th style=\"vertical-align: top\">Becas</th>
                        <th style=\"vertical-align: top\">Mov. Social/ Referente</th>
                        <th style=\"vertical-align: top\">Lugar Afectación</th>            
                        <th style=\"vertical-align: top\">Dependencia</th>";
        // line 196
        echo "                        <th style=\"vertical-align: top\">Formación</th>            
                            ";
        // line 199
        echo "                        <th style=\"vertical-align: top\">Activo</th>
                        <th>";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 205
            echo "                        <tr>
                            ";
            // line 208
            echo "            
                            <td>";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dni", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellidos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombres", array()), "html", null, true);
            echo "</td>
                            ";
            // line 214
            echo "                            <td>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "domicilio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
                // line 215
                echo "                                <b>Loc.:</b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "localidad", array()), "html", null, true);
                echo "<br/><b>Barrio:</b>
                                ";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "barrio", array()), "html", null, true);
                echo "<br/><b>Calle:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "calle", array()), "html", null, true);
                echo "
                                :";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "numero", array()), "html", null, true);
                echo "<br/><b>Refs:</b>  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "referencias", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                        </td>
                        <td>
                            ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "becadobeca", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
                // line 222
                echo "                                ";
                if ($this->getAttribute($context["becadobeca"], "activo", array())) {
                    echo "                        
                                    <b>Tipo Beca:</b>";
                    // line 223
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoBeca", array()), "html", null, true);
                    echo "
                                    <br/><b>Tipo Función:</b>";
                    // line 224
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoFuncion", array()), "html", null, true);
                    echo "
                                    <br/><b>Monto:</b>";
                    // line 225
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "monto", array()), "html", null, true);
                    echo "
                                    <br/>
                                ";
                }
                // line 228
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "                        </td>
                        <td>
                            ";
            // line 231
            echo $this->getAttribute($context["entity"], "referente", array());
            echo "
                        </td>
                        <td>";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lugarAfectacion", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 234
            echo $this->getAttribute($context["entity"], "dependencia", array());
            echo "</td>";
            // line 236
            echo "                        <td>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "formacion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formacion"]) {
                // line 237
                echo "                            <b>Institución: </b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "institucion", array()), "html", null, true);
                echo " <br/> <b>Niv. Educ.:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "nivelEducativo", array()), "html", null, true);
                echo "
                            <br/><b>Profesión:</b>";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "profesion", array()), "html", null, true);
                echo " <br/><b>Perfil:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "perfil", array()), "html", null, true);
                echo "
                            <br/><b>Oficio:</b> ";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["formacion"], "oficio", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                            </td>
                            ";
            // line 244
            echo "                            <td>";
            if ($this->getAttribute($context["entity"], "activo", array())) {
                echo "Sí";
            } else {
                echo " No ";
            }
            echo "</td>
                            <td>
                                <a class=\"btn btn-mini\" href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
                                </a>
                                <a class=\"btn btn-mini btn-primary\" href=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 250
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
        // line 255
        echo "                </tbody>
            </table>
        </div>
        <div class=\"span4\">
            ";
        // line 259
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
        </div>
        <div class=\"span8\">
            <a class=\"btn btn-success likepaginator\" href=\"";
        // line 262
        echo $this->env->getExtension('routing')->getPath("becado_new");
        echo "\">
                ";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " Becado
            </a>
        </div>
    </div>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/persona/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />      
    ";
    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e604a14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_jquery-1.9.0_1.js");
            // line 19
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e604a14_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "e604a14_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14_select2Becado_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "e604a14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e604a14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e604a14.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 21
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
        return array (  606 => 21,  580 => 19,  575 => 14,  572 => 13,  566 => 11,  561 => 10,  558 => 9,  549 => 263,  545 => 262,  539 => 259,  533 => 255,  522 => 250,  518 => 249,  513 => 247,  509 => 246,  499 => 244,  496 => 241,  488 => 239,  482 => 238,  475 => 237,  470 => 236,  467 => 234,  463 => 233,  458 => 231,  454 => 229,  448 => 228,  442 => 225,  438 => 224,  434 => 223,  429 => 222,  425 => 221,  421 => 219,  411 => 217,  405 => 216,  400 => 215,  395 => 214,  391 => 211,  387 => 210,  383 => 209,  380 => 208,  377 => 205,  373 => 204,  366 => 200,  363 => 199,  360 => 196,  354 => 190,  349 => 184,  336 => 173,  332 => 172,  327 => 170,  313 => 159,  310 => 158,  302 => 155,  292 => 151,  287 => 149,  284 => 148,  282 => 147,  277 => 145,  274 => 144,  272 => 143,  268 => 141,  264 => 140,  259 => 138,  256 => 137,  254 => 136,  248 => 133,  245 => 132,  243 => 131,  238 => 129,  235 => 128,  233 => 127,  228 => 124,  224 => 123,  216 => 118,  212 => 117,  206 => 114,  202 => 113,  196 => 110,  192 => 109,  186 => 106,  182 => 105,  174 => 100,  168 => 97,  162 => 94,  156 => 91,  150 => 88,  142 => 83,  136 => 80,  128 => 75,  122 => 74,  112 => 67,  105 => 62,  99 => 59,  96 => 58,  94 => 57,  88 => 54,  54 => 22,  51 => 13,  49 => 9,  46 => 8,  43 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'Becados'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/*     */
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/persona/css/jquery-ui.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/persona/css/select2.min.css') }}" rel="stylesheet" type="text/css" />      */
/*     {% endblock %}*/
/*     {% block javascript %}*/
/*         {% javascripts*/
/*             '@PersonaBundle/Resources/public/js/jquery-1.9.0.js'*/
/*             '@PersonaBundle/Resources/public/js/select2.js'*/
/*             '@PersonaBundle/Resources/public/js/select2Becado.js'*/
/*         %}*/
/*             <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/*    */
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
/*                                         */
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
/*                                             */
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
/*                                     */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         <div style="display:none"> */
/*                             {{ form_row(filterForm.referente) }}*/
/*                         </div>*/
/*                             <tr>*/
/*                                 <td></td>*/
/*                                 <td></td>*/
/*                                 <td></td>*/
/*                                 <td></td>*/
/*                                 <td></td>*/
/*                             </tr>*/
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
/*                     <tr style="color: #000; background-color: #46a546; border-style: solid; ">*/
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
/*                                 <b>Loc.:</b>{{ domicilio.localidad }}<br/><b>Barrio:</b>*/
/*                                 {{ domicilio.barrio }}<br/><b>Calle:</b> {{ domicilio.calle }}*/
/*                                 :{{ domicilio.numero }}<br/><b>Refs:</b>  {{ domicilio.referencias }}*/
/*                             {% endfor %}*/
/*                         </td>*/
/*                         <td>*/
/*                             {% for becadobeca in entity.becadobeca %}*/
/*                                 {% if becadobeca.activo %}                        */
/*                                     <b>Tipo Beca:</b>{{ becadobeca.beca.tipoBeca }}*/
/*                                     <br/><b>Tipo Función:</b>{{ becadobeca.beca.tipoFuncion }}*/
/*                                     <br/><b>Monto:</b>{{ becadobeca.beca.monto }}*/
/*                                     <br/>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ entity.referente | raw }}*/
/*                         </td>*/
/*                         <td>{{ entity.lugarAfectacion }}</td>*/
/*                         <td>{{ entity.dependencia | raw }}</td>{#*/
/*                         <td>{% if entity.presentaCertificacion %}Sí{% else %} No {% endif %}</td>#}*/
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
/* {% endblock %}*/
