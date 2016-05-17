<?php

/* PersonaBundle:Becado:show.html.twig */
class __TwigTemplate_30adfda077f0c61cdb0b214da64c28e324eb17e490606c893ff4c71930830cde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "PersonaBundle:Becado:show.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.show.show", array("%entity%" => "Ficha Becado"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
    <h3 style=\"color: #0044cc;\">Ver Ficha Becado</h3>

    <form class=\"form-inline\">
        <fieldset> 
            <h4>Datos Personales</h4>
            <div class=\"control-group\" style=\"display: none;\">                
                <label class=\"control-label\">Id</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td><div class=\"control-group\">
                                <label class=\"control-label\">Nº Doc.</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dni", array()), "html", null, true);
        echo "</span>            </div>
                            </div></td>
                        <td><div class=\"control-group\">
                                <label class=\"control-label\">Apellidos</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "apellidos", array()), "html", null, true);
        echo "</span>            </div>
                            </div></td>
                        <td>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nombres</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombres", array()), "html", null, true);
        echo "</span>            </div>
                            </div>
                        </td>
                        <td>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Teléfono</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "telefono", array()), "html", null, true);
        echo "</span>            </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            <div class=\"control-group\">
                                <label class=\"control-label\">Email</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array()), "html", null, true);
        echo "</span>            </div>
                            </div>
                        </td>
                        <td colspan=\"2\">
                        </td>
                    </tr>
                </tbody>
            </table>   

            <h4>Domicilio</h4>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "domicilio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
            // line 57
            echo "                <div class=\"control-group\" style=\"display:none\">
                    <label class=\"control-label\">Departamento</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "departamento", array()), "html", null, true);
            echo "</span>            </div>
                </div>

                <table>
                    <tbody>
                        <tr>

                            <td><div class=\"control-group\">
                                    <label class=\"control-label\">Localidad</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "localidad", array()), "html", null, true);
            echo "</span>            </div>
                                </div></td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Barrio</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "barrio", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Calle</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "calle", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Nro.</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "numero", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                        </tr>
                        <tr>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Dpto.</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "dpto", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Piso</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "piso", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Edificio</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "edificio", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Manzana</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "manzana", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><div class=\"control-group\">
                                    <label class=\"control-label\">Tira</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "tira", array()), "html", null, true);
            echo "</span>            </div>
                                </div></td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Parcela</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "parcela", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Quinta</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "quinta", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Un. Funcional</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "unidadDuncional", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"4\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Referencias</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "referencias", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domicilio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "            <h4>Becas Activas</h4>
            <table style=\" border-collapse: collapse;\">
                <tbody style=\" border: 1px black solid; \">
                    ";
        // line 154
        $context["contBeca"] = 0;
        // line 155
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
            // line 156
            echo "                        ";
            if (($this->getAttribute($context["becadobeca"], "activo", array()) &&  !twig_test_empty($this->getAttribute($context["becadobeca"], "beca", array())))) {
                // line 157
                echo "                            ";
                $context["contBeca"] = ((isset($context["contBeca"]) ? $context["contBeca"] : null) + 1);
                // line 158
                echo "                            <tr style=\"background: #46a546; color: #ffffff;\" >
                                <td style=\" border: 1px black solid;\">
                                    <label class=\"control-label\"><b>Beca Nº ";
                // line 160
                echo twig_escape_filter($this->env, (isset($context["contBeca"]) ? $context["contBeca"] : null), "html", null, true);
                echo ":</b></label>
                                </td>
                                <td style=\" border: 1px black solid;\" colspan=\"2\" align=\"center\">
                                    <b>Acciones</b>
                                </td>
                            </tr>
                            <tr>
                                <td style=\" border: 1px black solid;\">
                                    <div class=\"control-group\">                                        
                                        <div class=\"controls\">                
                                            <span class=\"input-xlarge uneditable-input span6\">                                               
                                                <b>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoBeca", array()), "html", null, true);
                echo "
                                                Tipo Función:";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoFuncion", array()), "html", null, true);
                echo "
                                                Monto:";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "monto", array()), "html", null, true);
                echo "
                                                </b>
                                            </span>            
                                        </div>
                                    </div>
                                </td>
                                <td style=\" border: 1px black solid;\">
                                    <a class=\"btn btn-mini btn-info\" href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_edit", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                        <b>Editar Beca</b>
                                    </a>
                                </td>
                                <td style=\" border: 1px black solid;\">
                                    <a class=\"btn btn-mini btn-primary\" href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_new", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                        Certificar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            // line 191
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                </tbody>
            </table>
            <table style=\" border-collapse: collapse;\">
                <tbody style=\" border: 1px black solid;\">
                    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
            // line 197
            echo "                        ";
            if (($this->getAttribute($context["becadobeca"], "activo", array()) &&  !twig_test_empty($this->getAttribute($context["becadobeca"], "becaVulnerable", array())))) {
                // line 198
                echo "                            ";
                $context["contBeca"] = ((isset($context["contBeca"]) ? $context["contBeca"] : null) + 1);
                // line 199
                echo "                            <tr style=\"background: #46a546; color: #ffffff;\" >
                                <td style=\" border: 1px black solid;\">
                                    <label class=\"control-label\"><b>Beca Nº ";
                // line 201
                echo twig_escape_filter($this->env, (isset($context["contBeca"]) ? $context["contBeca"] : null), "html", null, true);
                echo ":</b></label>
                                </td>
                                <td style=\" border: 1px black solid;\" colspan=\"2\" align=\"center\">
                                    <b>Acciones</b>
                                </td>
                            </tr>
                            <tr>
                                <td style=\" border: 1px black solid;\">
                                    <div class=\"control-group\">                                        
                                        <div class=\"controls\">                
                                            <span class=\"input-xlarge uneditable-input span6\">                                               
                                                <b>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "becaVulnerable", array()), "nombre", array()), "html", null, true);
                echo "
                                                Tipo Función:";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "becaVulnerable", array()), "tipoFuncion", array()), "html", null, true);
                echo "
                                                Monto:";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "becaVulnerable", array()), "monto", array()), "html", null, true);
                echo "
                                                </b>
                                            </span>            
                                        </div>
                                    </div>
                                </td>
                                <td style=\" border: 1px black solid;\">
                                    <a class=\"btn btn-mini btn-info\" href=\"";
                // line 221
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_edit", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                        <b>Editar Beca</b>
                                    </a>
                                </td>
                                <td style=\" border: 1px black solid;\">
                                    <a class=\"btn btn-mini btn-primary\" href=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_new", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                        Certificar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            // line 232
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                </tbody>
            </table>
            <h4>Movimientos/Afectación/Dependencia</h4>
            <div class=\"control-group\">
                <label class=\"control-label\">Mov. Social/Referente</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">
                    ";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "movimientoSocial", array()), "html", null, true);
        echo " - Referente: 
                    ";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "apellidos", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "nombres", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Lugar Afectación</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lugarAfectacion", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Dependencia</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
        // line 248
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dependencia", array());
        echo "</span>            </div>
            </div>

            <h4>Formación</h4>
            ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formacion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["educacion"]) {
            // line 253
            echo "                <table>
                    <tbody>
                        <tr>
                            <td colspan=\"2\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Institución</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span10\">";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "institucion", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Nivel Educativo</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "nivelEducativo", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Profesión</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "profesion", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Perfil</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "perfil", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Oficio</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "oficio", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Descripción</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span10\">";
            // line 295
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "descripcion", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['educacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "            <h4>Otros Datos</h4>
            <table>
                <tbody>
                    <tr>
                        <td><div class=\"control-group\">

                                <label class=\"control-label\">Presenta certificacion</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span2\">";
        // line 310
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "presentaCertificacion", array())) {
            echo "Sí";
        } else {
            echo "No";
        }
        echo "</span>            </div>
                            </div></td>
                        <td>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Fecha Alta</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span2\">";
        // line 315
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaAlta", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
                            </div> 
                        </td>
                        <td>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Fecha Baja</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span2\">";
        // line 321
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaBaja", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
                            </div>
                        </td>
                        <td colspan=\"3\">
                            <div class=\"control-group\">
                                <label class=\"control-label\">Activo</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span2\">";
        // line 327
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activo", array())) {
            echo "Sí";
        } else {
            echo "No";
        }
        echo "</span>            </div>
                            </div> 
                        </td>
                </tbody>
            </table>

        </fieldset>
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 338
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>

        <div class=\"float-left\">
            <a class=\"btn btn-primary\" href=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                ";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>

        <div class=\"float-left\">
            <form action=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 353
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </form>
        </div>

        <!-- Trigger the modal with a button -->
        <button type=\"button\" class=\"float-left btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Añadir Beca</button>
        <a class=\"float-left btn btn-success\" id=\"page-help\" 
            href=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becavulnerable_new", array("becado" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" 
            onclick=\"window.open(this.href, 'popupwindow', 'top=125,left=175,width=900,height=300'); return false;\">
                Añadir Beca Vulnerable
        </a>
        <!-- Modal -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"display: none\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Añadir Beca</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 375
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BecaBundle:BecadoBeca:new", array("id" => (isset($context["entity"]) ? $context["entity"] : null))));
        echo "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "PersonaBundle:Becado:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 375,  623 => 360,  611 => 353,  607 => 352,  602 => 350,  594 => 345,  590 => 344,  582 => 339,  578 => 338,  560 => 327,  551 => 321,  542 => 315,  530 => 310,  521 => 303,  507 => 295,  496 => 287,  487 => 281,  476 => 273,  467 => 267,  456 => 259,  448 => 253,  444 => 252,  437 => 248,  430 => 244,  421 => 240,  417 => 239,  409 => 233,  403 => 232,  394 => 226,  386 => 221,  376 => 214,  372 => 213,  368 => 212,  354 => 201,  350 => 199,  347 => 198,  344 => 197,  340 => 196,  334 => 192,  328 => 191,  319 => 185,  311 => 180,  301 => 173,  297 => 172,  293 => 171,  279 => 160,  275 => 158,  272 => 157,  269 => 156,  264 => 155,  262 => 154,  257 => 151,  242 => 142,  231 => 134,  222 => 128,  213 => 122,  205 => 117,  195 => 110,  186 => 104,  177 => 98,  168 => 92,  158 => 85,  149 => 79,  140 => 73,  132 => 68,  120 => 59,  116 => 57,  112 => 56,  99 => 46,  88 => 38,  79 => 32,  71 => 27,  64 => 23,  54 => 16,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - {{ 'views.show.show'|trans({'%entity%': 'Ficha Becado'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     <h3 style="color: #0044cc;">Ver Ficha Becado</h3>*/
/* */
/*     <form class="form-inline">*/
/*         <fieldset> */
/*             <h4>Datos Personales</h4>*/
/*             <div class="control-group" style="display: none;">                */
/*                 <label class="control-label">Id</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.id }}</span>            </div>*/
/*             </div>*/
/*             <table>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td><div class="control-group">*/
/*                                 <label class="control-label">Nº Doc.</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.dni }}</span>            </div>*/
/*                             </div></td>*/
/*                         <td><div class="control-group">*/
/*                                 <label class="control-label">Apellidos</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.apellidos }}</span>            </div>*/
/*                             </div></td>*/
/*                         <td>*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label">Nombres</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.nombres }}</span>            </div>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td>*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label">Teléfono</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.telefono }}</span>            </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td colspan="2">*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label">Email</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input">{{ entity.email }}</span>            </div>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td colspan="2">*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>   */
/* */
/*             <h4>Domicilio</h4>*/
/*             {% for domicilio in entity.domicilio %}*/
/*                 <div class="control-group" style="display:none">*/
/*                     <label class="control-label">Departamento</label>*/
/*                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.departamento }}</span>            </div>*/
/*                 </div>*/
/* */
/*                 <table>*/
/*                     <tbody>*/
/*                         <tr>*/
/* */
/*                             <td><div class="control-group">*/
/*                                     <label class="control-label">Localidad</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.localidad }}</span>            </div>*/
/*                                 </div></td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Barrio</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.barrio }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Calle</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.calle }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Nro.</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.numero }}</span>            </div>*/
/*                                 </div>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Dpto.</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.dpto }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Piso</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.piso }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Edificio</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.edificio }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Manzana</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.manzana }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><div class="control-group">*/
/*                                     <label class="control-label">Tira</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.tira }}</span>            </div>*/
/*                                 </div></td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Parcela</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.parcela }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Quinta</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.quinta }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Un. Funcional</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.unidadDuncional }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td colspan="4">*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Referencias</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input">{{ domicilio.referencias }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </tbody>*/
/* */
/*                 </table>*/
/* */
/*             {% endfor %}*/
/*             <h4>Becas Activas</h4>*/
/*             <table style=" border-collapse: collapse;">*/
/*                 <tbody style=" border: 1px black solid; ">*/
/*                     {% set contBeca=0 %}*/
/*                     {% for becadobeca in entity.becadobeca %}*/
/*                         {% if becadobeca.activo and becadobeca.beca is not empty %}*/
/*                             {% set contBeca=contBeca+1 %}*/
/*                             <tr style="background: #46a546; color: #ffffff;" >*/
/*                                 <td style=" border: 1px black solid;">*/
/*                                     <label class="control-label"><b>Beca Nº {{ contBeca }}:</b></label>*/
/*                                 </td>*/
/*                                 <td style=" border: 1px black solid;" colspan="2" align="center">*/
/*                                     <b>Acciones</b>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td style=" border: 1px black solid;">*/
/*                                     <div class="control-group">                                        */
/*                                         <div class="controls">                */
/*                                             <span class="input-xlarge uneditable-input span6">                                               */
/*                                                 <b>{{ becadobeca.beca.tipoBeca }}*/
/*                                                 Tipo Función:{{ becadobeca.beca.tipoFuncion }}*/
/*                                                 Monto:{{ becadobeca.beca.monto }}*/
/*                                                 </b>*/
/*                                             </span>            */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td style=" border: 1px black solid;">*/
/*                                     <a class="btn btn-mini btn-info" href="{{ path('becadobeca_edit', { 'id': becadobeca.id }) }}">*/
/*                                         <b>Editar Beca</b>*/
/*                                     </a>*/
/*                                 </td>*/
/*                                 <td style=" border: 1px black solid;">*/
/*                                     <a class="btn btn-mini btn-primary" href="{{ path('certificacion_new', { 'id': becadobeca.id }) }}">*/
/*                                         Certificar*/
/*                                     </a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <table style=" border-collapse: collapse;">*/
/*                 <tbody style=" border: 1px black solid;">*/
/*                     {% for becadobeca in entity.becadobeca %}*/
/*                         {% if becadobeca.activo and becadobeca.becaVulnerable is not empty %}*/
/*                             {% set contBeca=contBeca+1 %}*/
/*                             <tr style="background: #46a546; color: #ffffff;" >*/
/*                                 <td style=" border: 1px black solid;">*/
/*                                     <label class="control-label"><b>Beca Nº {{ contBeca }}:</b></label>*/
/*                                 </td>*/
/*                                 <td style=" border: 1px black solid;" colspan="2" align="center">*/
/*                                     <b>Acciones</b>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td style=" border: 1px black solid;">*/
/*                                     <div class="control-group">                                        */
/*                                         <div class="controls">                */
/*                                             <span class="input-xlarge uneditable-input span6">                                               */
/*                                                 <b>{{ becadobeca.becaVulnerable.nombre }}*/
/*                                                 Tipo Función:{{ becadobeca.becaVulnerable.tipoFuncion }}*/
/*                                                 Monto:{{ becadobeca.becaVulnerable.monto }}*/
/*                                                 </b>*/
/*                                             </span>            */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td style=" border: 1px black solid;">*/
/*                                     <a class="btn btn-mini btn-info" href="{{ path('becadobeca_edit', { 'id': becadobeca.id }) }}">*/
/*                                         <b>Editar Beca</b>*/
/*                                     </a>*/
/*                                 </td>*/
/*                                 <td style=" border: 1px black solid;">*/
/*                                     <a class="btn btn-mini btn-primary" href="{{ path('certificacion_new', { 'id': becadobeca.id }) }}">*/
/*                                         Certificar*/
/*                                     </a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <h4>Movimientos/Afectación/Dependencia</h4>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Mov. Social/Referente</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span5">*/
/*                     {{ entity.referente.movimientoSocial }} - Referente: */
/*                     {{ entity.referente.apellidos }}, {{ entity.referente.nombres}}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Lugar Afectación</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ entity.lugarAfectacion }}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Dependencia</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ entity.dependencia | raw}}</span>            </div>*/
/*             </div>*/
/* */
/*             <h4>Formación</h4>*/
/*             {% for educacion in entity.formacion %}*/
/*                 <table>*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td colspan="2">*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Institución</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input span10">{{ educacion.institucion }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Nivel Educativo</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.nivelEducativo }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Profesión</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.profesion }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Perfil</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.perfil }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Oficio</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input span5">{{ educacion.oficio }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td colspan="2">*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label">Descripción</label>*/
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input span10">{{ educacion.descripcion }}</span>            </div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*             {% endfor %}*/
/*             <h4>Otros Datos</h4>*/
/*             <table>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td><div class="control-group">*/
/* */
/*                                 <label class="control-label">Presenta certificacion</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input span2">{%if entity.presentaCertificacion %}Sí{% else %}No{% endif %}</span>            </div>*/
/*                             </div></td>*/
/*                         <td>*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label">Fecha Alta</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input span2">{{ entity.fechaAlta|date('Y-m-d H:i:s') }}</span>            </div>*/
/*                             </div> */
/*                         </td>*/
/*                         <td>*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label">Fecha Baja</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input span2">{{ entity.fechaBaja|date('Y-m-d H:i:s') }}</span>            </div>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td colspan="3">*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label">Activo</label>*/
/*                                 <div class="controls">                <span class="input-xlarge uneditable-input span2">{%if entity.activo %}Sí{% else %}No{% endif %}</span>            </div>*/
/*                             </div> */
/*                         </td>*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </fieldset>*/
/*     </form>*/
/* */
/*     <div>*/
/*         <div class="float-left">*/
/*             <a class="btn" href="{{ path('becado') }}">*/
/*                 {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </a>*/
/*         </div>*/
/* */
/*         <div class="float-left">*/
/*             <a class="btn btn-primary" href="{{ path('becado_edit', { 'id': entity.id }) }}">*/
/*                 {{ 'views.recordactions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </a>*/
/*         </div>*/
/* */
/*         <div class="float-left">*/
/*             <form action="{{ path('becado_delete', { 'id': entity.id }) }}" method="post">*/
/*                 <input type="hidden" name="_method" value="DELETE" />*/
/*                 {{ form_widget(delete_form) }}*/
/*                 <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <!-- Trigger the modal with a button -->*/
/*         <button type="button" class="float-left btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Añadir Beca</button>*/
/*         <a class="float-left btn btn-success" id="page-help" */
/*             href="{{ path('becavulnerable_new', { 'becado': entity.id }) }}" */
/*             onclick="window.open(this.href, 'popupwindow', 'top=125,left=175,width=900,height=300'); return false;">*/
/*                 Añadir Beca Vulnerable*/
/*         </a>*/
/*         <!-- Modal -->*/
/*         <div id="myModal" class="modal fade" role="dialog" style="display: none">*/
/*             <div class="modal-dialog">*/
/* */
/*                 <!-- Modal content-->*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                         <h4 class="modal-title">Añadir Beca</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {{ render( controller('BecaBundle:BecadoBeca:new', { 'id': entity })) }}*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
