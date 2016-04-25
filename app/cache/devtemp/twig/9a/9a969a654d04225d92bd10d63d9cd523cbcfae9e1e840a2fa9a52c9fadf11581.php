<?php

/* BecaBundle:Beca:index.html.twig */
class __TwigTemplate_c879205ef8d2f5fe1ac1234ded39cdc4b2a96d47beb1072e4158afcf9fc8f102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JordiLlonchCrudGeneratorBundle::layout.html.twig", "BecaBundle:Beca:index.html.twig", 1);
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
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Beca"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "

";
    }

    // line 8
    public function block_page($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("page", $context, $blocks);
        echo "
<div class=\"row\">
 
    <div class=\"span8\">
        <h2 style=\"color: #0044cc\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Beca"), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"span2\">
        ";
        // line 16
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 17
            echo "        <div class=\"alert alert-block alert-error fade in form-errors\">
            ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
        </div>
        ";
        }
        // line 21
        echo "        &nbsp;
    </div>
    <div class=\"span2\">
        <div class=\"filters-right\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "
                <span class=\"caret\"></span>
            </a>
        </div>
    </div>

    <div class=\"span12\">
        <div id=\"filters\" class=\"collapse\">

            <form class=\"well\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("beca");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'enctype');
        echo ">
                ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'form_start');
        echo "
                
                <table>
                    <tbody>
                        <tr>
                            <td colspan=\"4\">
                               ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo " 
                            </td>
                        </tr>
                    <tr>
                        <td>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "tipoBeca", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoBeca"]) {
            // line 48
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["tipoBeca"], "descripcion", array()), 'row');
            echo "
                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoBeca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " 
                        </td>
                        <td>
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "tipoFuncion", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoFuncion"]) {
            // line 54
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["tipoFuncion"], "descripcion", array()), 'row');
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoFuncion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </td>
                        <td>
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "monto", array()), 'row');
        echo "
                        </td>
                        <td>
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "activo", array()), 'row');
        echo "
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'label', array("label_attr" => array("class" => "strong"), "label" => "Fecha Creación Desde"));
        echo "
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "left_date", array()), 'widget');
        echo "
                        </td>
                        <td>
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'label', array("label" => "Fecha Creación Hasta"));
        echo "
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaAlta", array()), "right_date", array()), 'widget');
        echo "
                        </td>
                        <td>
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'label', array("label" => "Fecha Baja Desde"));
        echo "
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "left_date", array()), 'widget');
        echo "
                        </td>
                        <td>
                            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'label', array("label" => "Fecha Baja Hasta"));
        echo "
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "fechaBaja", array()), "right_date", array()), 'widget');
        echo "
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
                <p>
                    <button type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filter", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                    <button type=\"submit\" name=\"filter_action\" value=\"reset\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.reset", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</button>
                </p>
                 ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "_token", array()), 'row');
        echo "
                ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'form_end');
        echo "
                
            </form>
        </div>
    </div>

    <div class=\"span12\">

    <table class=\"table table-striped table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo Beca</th>
            <th>Tipo Función</th>
            <th>Monto</th>
            <th>Fechaalta</th>
            <th>Fechabaja</th>
            <th>Activo</th>
            
            <th>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 114
            echo "        <tr>
            <td><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("beca_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoBeca", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoFuncion", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "monto", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 119
            if ($this->getAttribute($context["entity"], "fechaAlta", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAlta", array()), "Y-m-d H:i:s"), "html", null, true);
                echo " ";
            } else {
                echo " NO REGISTRADO";
            }
            echo "</td>
            <td>";
            // line 120
            if ($this->getAttribute($context["entity"], "fechaBaja", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaBaja", array()), "Y-m-d H:i:s"), "html", null, true);
                echo " ";
            } else {
                echo " NO REGISTRADO";
            }
            echo "</td>
            <td>
                ";
            // line 122
            if ($this->getAttribute($context["entity"], "activo", array())) {
                // line 123
                echo "                    Sí
                ";
            } else {
                // line 125
                echo "                    No
                ";
            }
            // line 127
            echo "            </td>
            
            <td>
        <a class=\"btn btn-mini\" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("beca_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>
        <a class=\"btn btn-mini\" href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("beca_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
            echo "
        </a>            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "    </tbody>
</table>
    </div>

    <div class=\"span4\">
    ";
        // line 143
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo "
    </div>

        <div class=\"span8\">
    <a class=\"btn btn-primary likepaginator\" href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("beca_new");
        echo "\">
            ";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
        echo " Beca
        </a>
    </div>
        <div class=\"span8\">
    <a class=\"btn btn-primary likepaginator\" href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("beca_imprimir");
        echo "\">
            imprimir
        </a>
    </div>
    </div>
  
   
";
    }

    public function getTemplateName()
    {
        return "BecaBundle:Beca:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 152,  347 => 148,  343 => 147,  336 => 143,  329 => 138,  319 => 134,  315 => 133,  310 => 131,  306 => 130,  301 => 127,  297 => 125,  293 => 123,  291 => 122,  281 => 120,  272 => 119,  268 => 118,  264 => 117,  260 => 116,  254 => 115,  251 => 114,  247 => 113,  240 => 109,  218 => 90,  214 => 89,  209 => 87,  205 => 86,  195 => 79,  191 => 78,  185 => 75,  181 => 74,  175 => 71,  171 => 70,  165 => 67,  161 => 66,  153 => 61,  147 => 58,  143 => 56,  134 => 54,  130 => 53,  125 => 50,  115 => 48,  111 => 47,  103 => 42,  94 => 36,  88 => 35,  76 => 26,  69 => 21,  63 => 18,  60 => 17,  58 => 16,  52 => 13,  44 => 9,  41 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'JordiLlonchCrudGeneratorBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - {{ 'views.index.list'|trans({'%entity%': 'Beca'}, 'JordiLlonchCrudGeneratorBundle') }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block page %}*/
/*     {{ parent() }}*/
/* <div class="row">*/
/*  */
/*     <div class="span8">*/
/*         <h2 style="color: #0044cc">{{ 'views.index.list'|trans({'%entity%': 'Beca'}, 'JordiLlonchCrudGeneratorBundle') }}</h2>*/
/*     </div>*/
/*     <div class="span2">*/
/*         {% if form_errors(filterForm) %}*/
/*         <div class="alert alert-block alert-error fade in form-errors">*/
/*             {{ form_errors(filterForm) }}*/
/*         </div>*/
/*         {% endif %}*/
/*         &nbsp;*/
/*     </div>*/
/*     <div class="span2">*/
/*         <div class="filters-right">*/
/*             <a class="btn dropdown-toggle" data-toggle="collapse" data-target="#filters">*/
/*                 {{ 'views.index.filters'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*                 <span class="caret"></span>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="span12">*/
/*         <div id="filters" class="collapse">*/
/* */
/*             <form class="well" action="{{ path('beca') }}" method="get" {{ form_enctype(filterForm) }}>*/
/*                 {{ form_start(filterForm) }}*/
/*                 */
/*                 <table>*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td colspan="4">*/
/*                                {{ form_row(filterForm.id) }} */
/*                             </td>*/
/*                         </tr>*/
/*                     <tr>*/
/*                         <td>*/
/*                             {% for tipoBeca in filterForm.tipoBeca %}*/
/*                             {{ form_row(tipoBeca.descripcion) }}*/
/*                 */
/*                             {% endfor %} */
/*                         </td>*/
/*                         <td>*/
/*                             {% for tipoFuncion in filterForm.tipoFuncion %}*/
/*                             {{ form_row(tipoFuncion.descripcion) }}*/
/*                             {% endfor %}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ form_row(filterForm.monto) }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ form_row(filterForm.activo) }}*/
/*                         </td>*/
/*                     </tr>               */
/*                     <tr>*/
/*                         <td>*/
/*                             {{ form_label(filterForm.fechaAlta.left_date, 'Fecha Creación Desde', { 'label_attr': {'class':'strong'} }) }}*/
/*                             {{ form_widget(filterForm.fechaAlta.left_date) }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ form_label(filterForm.fechaAlta.right_date, 'Fecha Creación Hasta') }}*/
/*                             {{ form_widget(filterForm.fechaAlta.right_date) }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ form_label(filterForm.fechaBaja.left_date, 'Fecha Baja Desde') }}*/
/*                             {{ form_widget(filterForm.fechaBaja.left_date) }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ form_label(filterForm.fechaBaja.right_date, 'Fecha Baja Hasta') }}*/
/*                             {{ form_widget(filterForm.fechaBaja.right_date) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     */
/*                     </tbody>*/
/*                 </table>*/
/*                 <p>*/
/*                     <button type="submit" name="filter_action" value="filter">{{ 'views.index.filter'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                     <button type="submit" name="filter_action" value="reset">{{ 'views.index.reset'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</button>*/
/*                 </p>*/
/*                  {{ form_row(filterForm._token) }}*/
/*                 {{ form_end(filterForm) }}*/
/*                 */
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="span12">*/
/* */
/*     <table class="table table-striped table-bordered table-condensed">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Tipo Beca</th>*/
/*             <th>Tipo Función</th>*/
/*             <th>Monto</th>*/
/*             <th>Fechaalta</th>*/
/*             <th>Fechabaja</th>*/
/*             <th>Activo</th>*/
/*             */
/*             <th>{{ 'views.index.actions'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for entity in entities %}*/
/*         <tr>*/
/*             <td><a href="{{ path('beca_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*             <td>{{ entity.tipoBeca }}</td>*/
/*             <td>{{ entity.tipoFuncion }}</td>*/
/*             <td>{{ entity.monto }}</td>*/
/*             <td>{% if entity.fechaAlta %}{{ entity.fechaAlta|date('Y-m-d H:i:s') }} {% else %} NO REGISTRADO{% endif %}</td>*/
/*             <td>{% if entity.fechaBaja %}{{ entity.fechaBaja|date('Y-m-d H:i:s') }} {% else %} NO REGISTRADO{% endif %}</td>*/
/*             <td>*/
/*                 {% if entity.activo %}*/
/*                     Sí*/
/*                 {% else %}*/
/*                     No*/
/*                 {% endif %}*/
/*             </td>*/
/*             */
/*             <td>*/
/*         <a class="btn btn-mini" href="{{ path('beca_show', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.show'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>*/
/*         <a class="btn btn-mini" href="{{ path('beca_edit', { 'id': entity.id }) }}">*/
/*             {{ 'views.actions.edit'|trans({}, 'JordiLlonchCrudGeneratorBundle') }}*/
/*         </a>            </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/*     </div>*/
/* */
/*     <div class="span4">*/
/*     {{ pagerHtml|raw }}*/
/*     </div>*/
/* */
/*         <div class="span8">*/
/*     <a class="btn btn-primary likepaginator" href="{{ path('beca_new') }}">*/
/*             {{ 'views.index.createnew'|trans({}, 'JordiLlonchCrudGeneratorBundle') }} Beca*/
/*         </a>*/
/*     </div>*/
/*         <div class="span8">*/
/*     <a class="btn btn-primary likepaginator" href="{{ path('beca_imprimir') }}">*/
/*             imprimir*/
/*         </a>*/
/*     </div>*/
/*     </div>*/
/*   */
/*    */
/* {% endblock %}*/
