<?php

/* BecaBundle:Beca:edit.html.twig */
class __TwigTemplate_9f5dd3466d0a7b87ee2f0e7e98ef803bacfcf74f03803801b0b7acb89a033537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "BecaBundle:Beca:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
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
        echo " -  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Beca"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "
    <h2 style=\"color: #0044cc\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.edit", array("%entity%" => "Beca"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>

    <form class=\"well\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("beca_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        <table>
            <tbody>
                <tr>
                    <td>
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tipoBeca", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tipoFuncion", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "monto", array()), 'row');
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaAlta", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaBaja", array()), 'row');
        echo "
                    </td>
                    <td>
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "activo", array()), 'row');
        echo "
                    </td>
                </tr>
            <div class=\"control-group inline\">
                <tr>

                    <td>

                        <fieldset>
                            <label>Porcentaje (%):</label>
                            <input type=\"text\" id=\"porcentaje\" name=\"porcentaje\" placeholder=\"Ej. 10\" class=\"\"/>
                        </fieldset>

                    </td>
                    <td>

                        <fieldset>
                            <label>Monto Fijo:</label>
                            <input type=\"text\" id=\"montoFijo\" name=\"montoFijo\" placeholder=\"Ej. 150\" class=\"\"/>
                        </fieldset>

                    </td>
                    <td>
                        <input type=\"button\" name=\"Incrementar\" value=\"Incrementar monto\" onclick=\"sumar();\" class=\"btn btn-info\">
                    </td>
                </tr>
            </div>
            <tr>
                <td style=\"font-weight: bold\">
                    <span style=\"color:red; font-size: 8 \">*Ingrese solo una de las opciones de incremento.</span>
                </td>
            </tr>
            </tbody>
        </table>
        <div style=\"margin-bottom: 30px; padding-bottom: 30px;\">
            <p>
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.edit.editbutton", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </p>
        </div>
        ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
    </form>

    <div>
        <div class=\"float-left\">
            <a class=\"btn\" href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("beca");
        echo "\">
                ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"float-left\">
            <form action=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("beca_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('";
        // line 87
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.confirm", array(), "JordiLlonchCrudGeneratorBundle"), "js"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.delete", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
            </form>
        </div>
    </div>
            
    ";
        // line 92
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        echo "                
        <script type=\"text/javascript\">
            function sumar()
            {
                var porc = parseFloat(document.getElementById('porcentaje').value);
                var montoFijo = parseFloat(document.getElementById('montoFijo').value);
                var montoActual = parseFloat(document.getElementById('becasmds_becabundle_beca_monto').value);
                var incrementado = parseFloat(0);
                if (porc!==\"\" && porc>0) {
                    incrementado = ((porc * montoActual) / 100) + montoActual;
                    document.getElementById('becasmds_becabundle_beca_monto').value = incrementado;
                    alert(\"El nuevo monto de la beca es: \" + incrementado);
                }
                else if (montoFijo!==\"\" && montoFijo>0) {
                    incrementado = montoFijo + montoActual;
                    document.getElementById('becasmds_becabundle_beca_monto').value = incrementado;
                    alert(\"El nuevo monto de la beca es: \" + incrementado);
                }
                else {
                    alert('Los valores ingresados para el incremento no son válidos')
                }
                    
            }
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "BecaBundle:Beca:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 92,  173 => 87,  169 => 86,  164 => 84,  157 => 80,  153 => 79,  145 => 74,  139 => 71,  100 => 35,  94 => 32,  88 => 29,  80 => 24,  74 => 21,  68 => 18,  60 => 13,  53 => 11,  48 => 9,  45 => 8,  42 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} -  {{ 'views.edit.edit'|trans({'%entity%': 'Beca'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block page %}*/
/* */
/*     <h2 style="color: #0044cc">{{ 'views.edit.edit'|trans({'%entity%': 'Beca'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/* */
/*     <form class="well" action="{{ path('beca_update', { 'id': entity.id }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*         <input type="hidden" name="_method" value="PUT" />*/
/*         {{ form_start(edit_form) }}*/
/*         <table>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.tipoBeca) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.tipoFuncion) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.monto) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.fechaAlta) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.fechaBaja) }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_row(edit_form.activo) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             <div class="control-group inline">*/
/*                 <tr>*/
/* */
/*                     <td>*/
/* */
/*                         <fieldset>*/
/*                             <label>Porcentaje (%):</label>*/
/*                             <input type="text" id="porcentaje" name="porcentaje" placeholder="Ej. 10" class=""/>*/
/*                         </fieldset>*/
/* */
/*                     </td>*/
/*                     <td>*/
/* */
/*                         <fieldset>*/
/*                             <label>Monto Fijo:</label>*/
/*                             <input type="text" id="montoFijo" name="montoFijo" placeholder="Ej. 150" class=""/>*/
/*                         </fieldset>*/
/* */
/*                     </td>*/
/*                     <td>*/
/*                         <input type="button" name="Incrementar" value="Incrementar monto" onclick="sumar();" class="btn btn-info">*/
/*                     </td>*/
/*                 </tr>*/
/*             </div>*/
/*             <tr>*/
/*                 <td style="font-weight: bold">*/
/*                     <span style="color:red; font-size: 8 ">*Ingrese solo una de las opciones de incremento.</span>*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*         <div style="margin-bottom: 30px; padding-bottom: 30px;">*/
/*             <p>*/
/*                 <button type="submit" class="btn btn-success">{{ 'views.edit.editbutton'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*             </p>*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*     </form>*/
/* */
/*     <div>*/
/*         <div class="float-left">*/
/*             <a class="btn" href="{{ path('beca') }}">*/
/*                 {{ 'views.recordactions.backtothelist'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*             </a>*/
/*         </div>*/
/*         <div class="float-left">*/
/*             <form action="{{ path('beca_delete', { 'id': entity.id }) }}" method="post">*/
/*                 <input type="hidden" name="_method" value="DELETE" />*/
/*                 {{ form_widget(delete_form) }}*/
/*                 <button class="btn btn-danger" type="submit" onclick="return confirm('{{ 'views.recordactions.confirm'|trans({}, 'JordiLlonchCrudGeneratorBundle')|escape('js') }}');">{{ 'views.recordactions.delete'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*             */
/*     {% block javascript %}                */
/*         <script type="text/javascript">*/
/*             function sumar()*/
/*             {*/
/*                 var porc = parseFloat(document.getElementById('porcentaje').value);*/
/*                 var montoFijo = parseFloat(document.getElementById('montoFijo').value);*/
/*                 var montoActual = parseFloat(document.getElementById('becasmds_becabundle_beca_monto').value);*/
/*                 var incrementado = parseFloat(0);*/
/*                 if (porc!=="" && porc>0) {*/
/*                     incrementado = ((porc * montoActual) / 100) + montoActual;*/
/*                     document.getElementById('becasmds_becabundle_beca_monto').value = incrementado;*/
/*                     alert("El nuevo monto de la beca es: " + incrementado);*/
/*                 }*/
/*                 else if (montoFijo!=="" && montoFijo>0) {*/
/*                     incrementado = montoFijo + montoActual;*/
/*                     document.getElementById('becasmds_becabundle_beca_monto').value = incrementado;*/
/*                     alert("El nuevo monto de la beca es: " + incrementado);*/
/*                 }*/
/*                 else {*/
/*                     alert('Los valores ingresados para el incremento no son válidos')*/
/*                 }*/
/*                     */
/*             }*/
/*         </script>*/
/*     {% endblock %}*/
/* {% endblock %}*/
