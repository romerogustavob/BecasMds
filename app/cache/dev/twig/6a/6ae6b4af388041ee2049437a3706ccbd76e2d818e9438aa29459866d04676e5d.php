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
    <table>
        <tbody>
        <fieldset>
            <tr>
                <td>
                    <div class=\"control-group\">                
                        <label class=\"control-label\"> <b>Creado por:</b></label>
                        <div class=\"controls\">                
                            <span class=\"input-xlarge uneditable-input\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdBy", array()), "nombres", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdBy", array()), "apellidos", array()), "html", null, true);
        echo " 
                            </span>            
                        </div>                        
                    </div>
                    <div class=\"control-group\">                
                        <label class=\"control-label\"><b>Modificado por:</b> </label>
                        <div class=\"controls\">                
                            <span class=\"input-xlarge uneditable-input\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedBy", array()), "nombres", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedBy", array()), "apellidos", array()), "html", null, true);
        echo " 
                            </span>            
                        </div>                        
                    </div>
                </td>
                
                <td>                    
                    <div class=\"control-group\">                
                        <label class=\"control-label\"><b>Fecha de Carga:</b></label>
                        <div class=\"controls\">                
                            <span class=\"input-xlarge uneditable-input\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "
                            </span>            
                        </div>
                    </div>
                    <div class=\"control-group\">                
                        <label class=\"control-label\"><b>Fecha de Modificación:</b></label>
                        <div class=\"controls\">                
                            <span class=\"input-xlarge uneditable-input\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "
                            </span>            
                        </div>
                    </div>
                </td>
               
            </tr>
        </fieldset>
        </tbody>
    </table>
    
    <form class=\"form-inline\">
    
        <fieldset> 
            <h4>Datos Personales</h4>
            <div class=\"control-group\" style=\"display: none;\">                
                <label class=\"control-label\">Id</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td><div class=\"control-group\">
                                <label class=\"control-label\">Nº Doc.</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dni", array()), "html", null, true);
        echo "</span>            </div>
                            </div></td>
                        <td><div class=\"control-group\">
                                <label class=\"control-label\">Apellidos</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "apellidos", array()), "html", null, true);
        echo "</span>            </div>
                            </div></td>
                        <td>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nombres</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombres", array()), "html", null, true);
        echo "</span>            </div>
                            </div>
                        </td>
                        <td>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Teléfono</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
        // line 81
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
        // line 89
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
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "domicilio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["domicilio"]) {
            // line 100
            echo "                <div class=\"control-group\" style=\"display:none\">
                    <label class=\"control-label\">Departamento</label>
                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "departamento", array()), "html", null, true);
            echo "</span>            </div>
                </div>

                <table>
                    <tbody>
                        <tr>

                            <td><div class=\"control-group\">
                                    <label class=\"control-label\">Localidad</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "localidad", array()), "html", null, true);
            echo "</span>            </div>
                                </div></td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Barrio</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "barrio", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Calle</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "calle", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Nro.</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "numero", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                        </tr>
                        <tr>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Dpto.</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "dpto", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Piso</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "piso", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Edificio</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "edificio", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Manzana</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "manzana", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><div class=\"control-group\">
                                    <label class=\"control-label\">Tira</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "tira", array()), "html", null, true);
            echo "</span>            </div>
                                </div></td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Parcela</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "parcela", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Quinta</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "quinta", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Un. Funcional</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input\">";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["domicilio"], "unidadDuncional", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"4\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Referencias</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span9\">";
            // line 185
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
        // line 194
        echo "            <h4>Becas Activas</h4>
            <table style=\" border-collapse: collapse;\">
                <tbody style=\" border: 1px black solid; \">
                    ";
        // line 197
        $context["contBeca"] = 0;
        // line 198
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
            // line 199
            echo "                        ";
            if (($this->getAttribute($context["becadobeca"], "activo", array()) &&  !twig_test_empty($this->getAttribute($context["becadobeca"], "beca", array())))) {
                // line 200
                echo "                            ";
                $context["contBeca"] = ((isset($context["contBeca"]) ? $context["contBeca"] : null) + 1);
                // line 201
                echo "                            <tr style=\"background: #46a546; color: #ffffff;\" >
                                <td style=\" border: 1px black solid;\">
                                    <label class=\"control-label\"><b>Beca Nº ";
                // line 203
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
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoBeca", array()), "html", null, true);
                echo "
                                                Tipo Función:";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "tipoFuncion", array()), "html", null, true);
                echo "
                                                Monto:";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "beca", array()), "monto", array()), "html", null, true);
                echo "
                                                </b>
                                            </span>            
                                        </div>
                                    </div>
                                </td>
                                <td style=\" border: 1px black solid;\">
                                    <a class=\"btn btn-mini btn-info\" href=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_edit", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                        <b>Editar Beca</b>
                                    </a>
                                </td>
                                <td style=\" border: 1px black solid;\">
                                    <a class=\"btn btn-mini btn-primary\" href=\"";
                // line 228
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_new", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                        Certificar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            // line 234
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                </tbody>
            </table>
            <table style=\" border-collapse: collapse;\">
                <tbody style=\" border: 1px black solid;\">
                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "becadobeca", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["becadobeca"]) {
            // line 240
            echo "                        ";
            if (($this->getAttribute($context["becadobeca"], "activo", array()) &&  !twig_test_empty($this->getAttribute($context["becadobeca"], "becaVulnerable", array())))) {
                // line 241
                echo "                            ";
                $context["contBeca"] = ((isset($context["contBeca"]) ? $context["contBeca"] : null) + 1);
                // line 242
                echo "                            <tr style=\"background: #46a546; color: #ffffff;\" >
                                <td style=\" border: 1px black solid;\">
                                    <label class=\"control-label\"><b>Beca Nº ";
                // line 244
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
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "becaVulnerable", array()), "nombre", array()), "html", null, true);
                echo "
                                                Tipo Función:";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "becaVulnerable", array()), "tipoFuncion", array()), "html", null, true);
                echo "
                                                Monto:";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["becadobeca"], "becaVulnerable", array()), "monto", array()), "html", null, true);
                echo "
                                                </b>
                                            </span>            
                                        </div>
                                    </div>
                                </td>
                                <td style=\" border: 1px black solid;\">
                                    <a class=\"btn btn-mini btn-info\" href=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becadobeca_edit", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                        <b>Editar Beca</b>
                                    </a>
                                </td>
                                <td style=\" border: 1px black solid;\">
                                    <a class=\"btn btn-mini btn-primary\" href=\"";
                // line 269
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("certificacion_new", array("id" => $this->getAttribute($context["becadobeca"], "id", array()))), "html", null, true);
                echo "\">
                                        Certificar
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            // line 275
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['becadobeca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "                </tbody>
            </table>
            <h4>Movimientos/Afectación/Dependencia</h4>
            <div class=\"control-group\">
                <label class=\"control-label\">Mov. Social/Referente</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span6\">
                    ";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "movimientoSocial", array()), "html", null, true);
        echo " - Referente: 
                    ";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "apellidos", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "referente", array()), "nombres", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Lugar Afectación</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span6\">";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lugarAfectacion", array()), "html", null, true);
        echo "</span>            </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Dependencia</label>
                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span6\">";
        // line 291
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dependencia", array());
        echo "</span>            </div>
            </div>

            <h4>Formación</h4>
            ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "formacion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["educacion"]) {
            // line 296
            echo "                <table>
                    <tbody>
                        <tr>
                            <td colspan=\"2\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Institución</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span10\">";
            // line 302
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
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "nivelEducativo", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Profesión</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 316
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
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute($context["educacion"], "perfil", array()), "html", null, true);
            echo "</span>            </div>
                                </div>
                            </td>
                            <td>
                                <div class=\"control-group\">
                                    <label class=\"control-label\">Oficio</label>
                                    <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span5\">";
            // line 330
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
            // line 338
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
        // line 346
        echo "            <h4>Otros Datos</h4>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Presenta certificacion</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span2\">";
        // line 353
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
        // line 358
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaAlta", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
                            </div> 
                        </td>
                        <td>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Fecha Baja</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span2\">";
        // line 364
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaBaja", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>            </div>
                            </div>
                        </td>
                        <td colspan=\"3\">
                            <div class=\"control-group\">
                                <label class=\"control-label\">Activo</label>
                                <div class=\"controls\">                <span class=\"input-xlarge uneditable-input span2\">";
        // line 370
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
        // line 381
        echo $this->env->getExtension('routing')->getPath("becado");
        echo "\">
                ";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>

        <div class=\"float-left\">
            <a class=\"btn btn-primary\" href=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                ";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>

        <div class=\"float-left\">
            <form action=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("becado_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 395
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 396
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
        // line 403
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
        // line 418
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
        return array (  700 => 418,  682 => 403,  670 => 396,  666 => 395,  661 => 393,  653 => 388,  649 => 387,  641 => 382,  637 => 381,  619 => 370,  610 => 364,  601 => 358,  589 => 353,  580 => 346,  566 => 338,  555 => 330,  546 => 324,  535 => 316,  526 => 310,  515 => 302,  507 => 296,  503 => 295,  496 => 291,  489 => 287,  480 => 283,  476 => 282,  468 => 276,  462 => 275,  453 => 269,  445 => 264,  435 => 257,  431 => 256,  427 => 255,  413 => 244,  409 => 242,  406 => 241,  403 => 240,  399 => 239,  393 => 235,  387 => 234,  378 => 228,  370 => 223,  360 => 216,  356 => 215,  352 => 214,  338 => 203,  334 => 201,  331 => 200,  328 => 199,  323 => 198,  321 => 197,  316 => 194,  301 => 185,  290 => 177,  281 => 171,  272 => 165,  264 => 160,  254 => 153,  245 => 147,  236 => 141,  227 => 135,  217 => 128,  208 => 122,  199 => 116,  191 => 111,  179 => 102,  175 => 100,  171 => 99,  158 => 89,  147 => 81,  138 => 75,  130 => 70,  123 => 66,  113 => 59,  93 => 42,  83 => 35,  68 => 25,  56 => 18,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
/*     <table>*/
/*         <tbody>*/
/*         <fieldset>*/
/*             <tr>*/
/*                 <td>*/
/*                     <div class="control-group">                */
/*                         <label class="control-label"> <b>Creado por:</b></label>*/
/*                         <div class="controls">                */
/*                             <span class="input-xlarge uneditable-input">{{ entity.createdBy.nombres }}, {{ entity.createdBy.apellidos }} */
/*                             </span>            */
/*                         </div>                        */
/*                     </div>*/
/*                     <div class="control-group">                */
/*                         <label class="control-label"><b>Modificado por:</b> </label>*/
/*                         <div class="controls">                */
/*                             <span class="input-xlarge uneditable-input">{{ entity.updatedBy.nombres }}, {{ entity.updatedBy.apellidos }} */
/*                             </span>            */
/*                         </div>                        */
/*                     </div>*/
/*                 </td>*/
/*                 */
/*                 <td>                    */
/*                     <div class="control-group">                */
/*                         <label class="control-label"><b>Fecha de Carga:</b></label>*/
/*                         <div class="controls">                */
/*                             <span class="input-xlarge uneditable-input">{{ entity.createdAt|date('d/m/Y H:i:s') }}*/
/*                             </span>            */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">                */
/*                         <label class="control-label"><b>Fecha de Modificación:</b></label>*/
/*                         <div class="controls">                */
/*                             <span class="input-xlarge uneditable-input">{{ entity.updatedAt|date('d/m/Y H:i:s') }}*/
/*                             </span>            */
/*                         </div>*/
/*                     </div>*/
/*                 </td>*/
/*                */
/*             </tr>*/
/*         </fieldset>*/
/*         </tbody>*/
/*     </table>*/
/*     */
/*     <form class="form-inline">*/
/*     */
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
/*                                     <div class="controls">                <span class="input-xlarge uneditable-input span9">{{ domicilio.referencias }}</span>            </div>*/
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
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span6">*/
/*                     {{ entity.referente.movimientoSocial }} - Referente: */
/*                     {{ entity.referente.apellidos }}, {{ entity.referente.nombres}}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Lugar Afectación</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span6">{{ entity.lugarAfectacion }}</span>            </div>*/
/*             </div>*/
/*             <div class="control-group">*/
/*                 <label class="control-label">Dependencia</label>*/
/*                 <div class="controls">                <span class="input-xlarge uneditable-input span6">{{ entity.dependencia | raw}}</span>            </div>*/
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
/*                         <td>*/
/*                             <div class="control-group">*/
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
