<?php

/* GenemuFormBundle:Form:div_layout.html.twig */
class __TwigTemplate_bd4d9aaf7dfa94ab5c37ec495a31202ad8a9befafeddac5089ed05086eb9fc51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'genemu_captcha_widget' => array($this, 'block_genemu_captcha_widget'),
            'genemu_recaptcha_widget' => array($this, 'block_genemu_recaptcha_widget'),
            'genemu_jquerydate_widget' => array($this, 'block_genemu_jquerydate_widget'),
            'genemu_jqueryslider_widget' => array($this, 'block_genemu_jqueryslider_widget'),
            'genemu_jqueryautocompleter_widget' => array($this, 'block_genemu_jqueryautocompleter_widget'),
            'genemu_jquerychosen_widget' => array($this, 'block_genemu_jquerychosen_widget'),
            'genemu_jquerygeolocation_widget' => array($this, 'block_genemu_jquerygeolocation_widget'),
            'genemu_jqueryfile_widget' => array($this, 'block_genemu_jqueryfile_widget'),
            'genemu_jquerycolor_widget' => array($this, 'block_genemu_jquerycolor_widget'),
            'genemu_jqueryrating_widget' => array($this, 'block_genemu_jqueryrating_widget'),
            'genemu_jqueryimage_widget' => array($this, 'block_genemu_jqueryimage_widget'),
            'genemu_jquerytokeninput_widget' => array($this, 'block_genemu_jquerytokeninput_widget'),
            'genemu_plain_widget' => array($this, 'block_genemu_plain_widget'),
            'genemu_jqueryselect2_hidden_row' => array($this, 'block_genemu_jqueryselect2_hidden_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('genemu_captcha_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('genemu_recaptcha_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('genemu_jquerydate_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('genemu_jqueryslider_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryautocompleter_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('genemu_jquerychosen_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('genemu_jquerygeolocation_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('genemu_jqueryfile_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('genemu_jquerycolor_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('genemu_jqueryrating_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('genemu_jqueryimage_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('genemu_jquerytokeninput_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('genemu_plain_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('genemu_jqueryselect2_hidden_row', $context, $blocks);
    }

    // line 1
    public function block_genemu_captcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "\" />
    ";
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 8
    public function block_genemu_recaptcha_widget($context, array $blocks = array())
    {
        // line 9
        ob_start();
        // line 10
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"http://www.google.com/recaptcha/api/noscript?k=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : null), "html", null, true);
        echo "\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_genemu_jquerydate_widget($context, array $blocks = array())
    {
        // line 21
        ob_start();
        // line 22
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 23
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 25
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 26
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 27
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 28
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 29
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 30
            echo "

            ";
            // line 32
            $context["attr"] = twig_array_merge(array("size" => 10), (isset($context["attr"]) ? $context["attr"] : null));
            // line 33
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) ? $context["id"] : null));
            // line 34
            echo "            ";
            $context["value"] = "";
            // line 35
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : null));
            // line 36
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_genemu_jqueryslider_widget($context, array $blocks = array())
    {
        // line 43
        ob_start();
        // line 44
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_slider\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 49
    public function block_genemu_jqueryautocompleter_widget($context, array $blocks = array())
    {
        // line 50
        ob_start();
        // line 51
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

    ";
        // line 53
        $context["id"] = ("autocompleter_" . (isset($context["id"]) ? $context["id"] : null));
        // line 54
        echo "    ";
        $context["full_name"] = ("autocompleter_" . (isset($context["full_name"]) ? $context["full_name"] : null));
        // line 55
        echo "    ";
        $context["value"] = (isset($context["autocompleter_value"]) ? $context["autocompleter_value"] : null);
        // line 56
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_genemu_jquerychosen_widget($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-placeholder" =>         // line 63
(isset($context["empty_value"]) ? $context["empty_value"] : null), "class" => "chzn-select"),         // line 65
(isset($context["attr"]) ? $context["attr"] : null));
        // line 66
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_genemu_jquerygeolocation_widget($context, array $blocks = array())
    {
        // line 71
        ob_start();
        // line 72
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    ";
        // line 74
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 75
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_map\">&nbsp;</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 80
    public function block_genemu_jqueryfile_widget($context, array $blocks = array())
    {
        // line 81
        ob_start();
        // line 82
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload\"></div>
    <div class=\"queue\">
        <div id=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue\"></div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 90
    public function block_genemu_jquerycolor_widget($context, array $blocks = array())
    {
        // line 91
        ob_start();
        // line 92
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "image")) {
            // line 93
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_color\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div";
            // line 94
            if ((isset($context["value"]) ? $context["value"] : null)) {
                echo " style=\"background-color: #";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo ";\"";
            }
            echo ">&nbsp;</div>
            ";
            // line 95
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 98
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 103
    public function block_genemu_jqueryrating_widget($context, array $blocks = array())
    {
        // line 104
        ob_start();
        // line 105
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 107
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_genemu_jqueryimage_widget($context, array $blocks = array())
    {
        // line 114
        ob_start();
        // line 115
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_container\">
        <div class=\"left\">
            <div id=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_preview\">
                ";
        // line 118
        $context["type"] = "hidden";
        // line 119
        echo "                ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

                <a id=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_overlay\" href=\"#\">&nbsp;</a>

                ";
        // line 123
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 124
            echo "                    ";
            $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "width", array())) : (500));
            // line 125
            echo "                    ";
            $context["ratio"] = ((((isset($context["width"]) ? $context["width"] : null) > (isset($context["widthMax"]) ? $context["widthMax"] : null))) ? (((isset($context["width"]) ? $context["width"] : null) / (isset($context["widthMax"]) ? $context["widthMax"] : null))) : (1));
            // line 126
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl(((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "file", array())) : ((isset($context["value"]) ? $context["value"] : null))));
            // line 127
            echo "                    ";
            $context["width"] = ((isset($context["width"]) ? $context["width"] : null) / (isset($context["ratio"]) ? $context["ratio"] : null));
            // line 128
            echo "                    ";
            $context["height"] = ((isset($context["height"]) ? $context["height"] : null) / (isset($context["ratio"]) ? $context["ratio"] : null));
            // line 129
            echo "                ";
        } else {
            // line 130
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/default.png");
            // line 131
            echo "                    ";
            $context["width"] = 96;
            // line 132
            echo "                    ";
            $context["height"] = 96;
            // line 133
            echo "                ";
        }
        // line 134
        echo "
                <img id=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_img_preview\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : null), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "\" />
            </div>
            <ul id=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options\" class=\"options\">
                ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 139
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, $context["filter"], "html", null, true);
            echo " change\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </ul>
            <div id=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload\"></div>
            <div class=\"queue\">
                <div id=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue\"></div>
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 151
    public function block_genemu_jquerytokeninput_widget($context, array $blocks = array())
    {
        // line 152
        ob_start();
        // line 153
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

";
        // line 155
        $context["id"] = ("tokeninput_" . (isset($context["id"]) ? $context["id"] : null));
        // line 156
        $context["full_name"] = ("tokeninput_" . (isset($context["full_name"]) ? $context["full_name"] : null));
        // line 157
        $context["value"] = (isset($context["tokeninput_value"]) ? $context["tokeninput_value"] : null);
        // line 158
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 162
    public function block_genemu_plain_widget($context, array $blocks = array())
    {
        // line 163
        echo "    <div ";
        $this->displayBlock("container_attributes", $context, $blocks);
        echo ">
        <p ";
        // line 164
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null));
        echo "</p>
    </div>
";
    }

    // line 168
    public function block_genemu_jqueryselect2_hidden_row($context, array $blocks = array())
    {
        // line 169
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  524 => 169,  521 => 168,  512 => 164,  507 => 163,  504 => 162,  497 => 158,  495 => 157,  493 => 156,  491 => 155,  486 => 153,  484 => 152,  481 => 151,  471 => 144,  466 => 142,  463 => 141,  454 => 139,  450 => 138,  446 => 137,  435 => 135,  432 => 134,  429 => 133,  426 => 132,  423 => 131,  420 => 130,  417 => 129,  414 => 128,  411 => 127,  408 => 126,  405 => 125,  402 => 124,  400 => 123,  395 => 121,  389 => 119,  387 => 118,  383 => 117,  377 => 115,  375 => 114,  372 => 113,  366 => 109,  357 => 107,  353 => 106,  348 => 105,  346 => 104,  343 => 103,  334 => 98,  328 => 95,  320 => 94,  313 => 93,  310 => 92,  308 => 91,  305 => 90,  297 => 85,  292 => 83,  287 => 82,  285 => 81,  282 => 80,  273 => 75,  271 => 74,  265 => 72,  263 => 71,  260 => 70,  252 => 66,  250 => 65,  249 => 63,  247 => 62,  245 => 61,  242 => 60,  234 => 56,  231 => 55,  228 => 54,  226 => 53,  220 => 51,  218 => 50,  215 => 49,  208 => 45,  203 => 44,  201 => 43,  198 => 42,  188 => 36,  185 => 35,  182 => 34,  179 => 33,  177 => 32,  173 => 30,  171 => 29,  170 => 28,  169 => 27,  168 => 26,  163 => 25,  157 => 23,  154 => 22,  152 => 21,  149 => 20,  138 => 12,  132 => 10,  130 => 9,  127 => 8,  120 => 4,  107 => 3,  105 => 2,  102 => 1,  98 => 168,  95 => 167,  93 => 162,  90 => 161,  88 => 151,  85 => 150,  83 => 113,  80 => 112,  78 => 103,  75 => 102,  73 => 90,  70 => 89,  68 => 80,  65 => 79,  63 => 70,  60 => 69,  58 => 60,  55 => 59,  53 => 49,  50 => 48,  48 => 42,  45 => 41,  43 => 20,  40 => 19,  38 => 8,  35 => 7,  33 => 1,);
    }
}
/* {% block genemu_captcha_widget %}*/
/* {% spaceless %}*/
/*     <img src="{{ src }}" width="{{ width }}" height="{{ height }}" title="{{ name|trans }}" alt="{{ name|trans }}" />*/
/*     {{ block("form_widget_simple") }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_recaptcha_widget %}*/
/* {% spaceless %}*/
/*     <div id="{{ id }}_div" style="display: none;"></div>*/
/*     <noscript>*/
/*         <iframe src="http://www.google.com/recaptcha/api/noscript?k={{ public_key }}" width="500" height="300" frameborder="0"></iframe>*/
/*         <br />*/
/*         <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>*/
/*         <input type="hidden" name="recaptcha_response_field" value="manual_challenge" />*/
/*     </noscript>*/
/* {% endspaceless %}*/
/* {% endblock genemu_recaptcha_widget %}*/
/* */
/* {% block genemu_jquerydate_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == "single_text" %}*/
/*         {{ block("form_widget_simple") }}*/
/*     {% else %}*/
/*         <div {{ block("widget_container_attributes") }}>*/
/*             {{ date_pattern|replace({*/
/*                 "{{ year }}":  form_widget(form.year),*/
/*                 "{{ month }}": form_widget(form.month),*/
/*                 "{{ day }}":   form_widget(form.day),*/
/*             })|raw }}*/
/* */
/*             {% set attr = {"size": 10}|merge(attr) %}*/
/*             {% set id = "datepicker_" ~ id %}*/
/*             {% set value = '' %}*/
/*             {% set full_name = "datepicker_" ~ full_name %}*/
/*             {{ block("hidden_widget") }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerydate_widget %}*/
/* */
/* {% block genemu_jqueryslider_widget %}*/
/* {% spaceless %}*/
/*     {{ block("hidden_widget") }}*/
/*     <div id="{{ id }}_slider"></div>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryslider_widget %}*/
/* */
/* {% block genemu_jqueryautocompleter_widget %}*/
/* {% spaceless %}*/
/*     {{ block("hidden_widget") }}*/
/* */
/*     {% set id = "autocompleter_" ~ id %}*/
/*     {% set full_name = "autocompleter_" ~ full_name %}*/
/*     {% set value = autocompleter_value %}*/
/*     {{ block("form_widget_simple") }}*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryautocompleter_widget %}*/
/* */
/* {% block genemu_jquerychosen_widget %}*/
/* {% spaceless %}*/
/*     {% set attr = {*/
/*         "data-placeholder": empty_value,*/
/*         "class": "chzn-select"*/
/*     }|merge(attr) %}*/
/*     {{ block("choice_widget") }}*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerychosen_widget %}*/
/* */
/* {% block genemu_jquerygeolocation_widget %}*/
/* {% spaceless %}*/
/*     {{ form_rest(form) }}*/
/* */
/*     {% if map is sameas(true) %}*/
/*         <div id="{{ id }}_map">&nbsp;</div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerygeolocation_widget %}*/
/* */
/* {% block genemu_jqueryfile_widget %}*/
/* {% spaceless %}*/
/*     {{ block("hidden_widget") }}*/
/*     <div id="{{ id }}_upload"></div>*/
/*     <div class="queue">*/
/*         <div id="{{ id }}_queue"></div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryfile_widget %}*/
/* */
/* {% block genemu_jquerycolor_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == "image" %}*/
/*         <div id="{{ id }}_color" {{ block("widget_container_attributes") }}>*/
/*             <div{% if value %} style="background-color: #{{ value }};"{% endif %}>&nbsp;</div>*/
/*             {{ block("hidden_widget") }}*/
/*         </div>*/
/*     {% else %}*/
/*         {{ block("form_widget_simple") }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerycolor_widget %}*/
/* */
/* {% block genemu_jqueryrating_widget %}*/
/* {% spaceless %}*/
/*     <div {{ block("widget_container_attributes") }}>*/
/*     {% for child in form %}*/
/*         {{ form_widget(child) }}*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryrating_widget %}*/
/* */
/* {% block genemu_jqueryimage_widget %}*/
/* {% spaceless %}*/
/*     <div id="{{ id }}_container">*/
/*         <div class="left">*/
/*             <div id="{{ id }}_preview">*/
/*                 {% set type = "hidden" %}*/
/*                 {{ block("hidden_widget") }}*/
/* */
/*                 <a id="{{ id }}_overlay" href="#">&nbsp;</a>*/
/* */
/*                 {% if value %}*/
/*                     {% set widthMax = thumbnail is defined ? thumbnail.width : 500 %}*/
/*                     {% set ratio = width > widthMax ? width / widthMax : 1 %}*/
/*                     {% set asset = asset(thumbnail is defined ? thumbnail.file : value) %}*/
/*                     {% set width = width / ratio %}*/
/*                     {% set height = height / ratio %}*/
/*                 {% else %}*/
/*                     {% set asset = asset("bundles/genemuform/images/default.png") %}*/
/*                     {% set width = 96 %}*/
/*                     {% set height = 96 %}*/
/*                 {% endif %}*/
/* */
/*                 <img id="{{ id }}_img_preview" src="{{ asset }}" width="{{ width }}" height="{{ height }}" />*/
/*             </div>*/
/*             <ul id="{{ id }}_options" class="options">*/
/*                 {% for filter in filters %}*/
/*                     <li class="{{ filter }} change"></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <div id="{{ id }}_upload"></div>*/
/*             <div class="queue">*/
/*                 <div id="{{ id }}_queue"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryimage_widget %}*/
/* */
/* {% block genemu_jquerytokeninput_widget %}*/
/* {% spaceless %}*/
/* {{ block("hidden_widget") }}*/
/* */
/* {% set id = "tokeninput_" ~ id %}*/
/* {% set full_name = "tokeninput_" ~ full_name %}*/
/* {% set value = tokeninput_value %}*/
/* {{ block("form_widget_simple") }}*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerytokeninput_widget %}*/
/* */
/* {% block genemu_plain_widget %}*/
/*     <div {{ block('container_attributes') }}>*/
/*         <p {{ block('widget_attributes') }}>{{ value|escape }}</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_hidden_row %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
