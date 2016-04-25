<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_6bcdea86936cb17a10dfa1aba48dbfe15aadaf48e76af188b43d7907f7152ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 196
        echo "
";
        // line 197
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 316
        echo "
";
        // line 317
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 345
        echo "
";
        // line 346
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 363
        echo "
";
        // line 364
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 486
        echo "
";
        // line 487
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 654
        echo "
";
        // line 655
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("genemu_base64");
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 33
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        // line 34
        ob_start();
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("script_url" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(            // line 57
(isset($context["configs"]) ? $context["configs"] : null), "script_url", array()))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("mode" => "exact", "elements" =>             // line 62
(isset($context["id"]) ? $context["id"] : null)));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ";";
        // line 70
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            var \$textarea = jQuery('#";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 80
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 84
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 93
        if (((isset($context["widget"]) ? $context["widget"] : null) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
        
        ";
        // line 95
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 126
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 95
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        // line 96
        echo "
        ";
        // line 97
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 98
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("buttonImage" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(            // line 99
(isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array()))));
            // line 101
            echo "        ";
        }
        // line 102
        echo "
        ";
        // line 103
        if (((isset($context["culture"]) ? $context["culture"] : null) == "en")) {
            // line 104
            echo "            ";
            $context["culture"] = "en-GB";
            // line 105
            echo "        ";
        }
        // line 106
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : null), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : null), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : null), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

        ";
        // line 112
        if (((isset($context["widget"]) ? $context["widget"] : null) != "single_text")) {
            // line 113
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 123
        echo "
            \$field.datepicker(\$configs);
        ";
    }

    // line 131
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        // line 132
        ob_start();
        // line 133
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 136
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ", {
                value: ";
        // line 137
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : null)) ? ((isset($context["value"]) ? $context["value"] : null)) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 149
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        // line 150
        ob_start();
        // line 151
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 159
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

        ";
        // line 161
        if (((isset($context["widget"]) ? $context["widget"] : null) == "image")) {
            // line 162
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 174
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 182
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 187
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        // line 188
        ob_start();
        // line 189
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 197
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        // line 198
        ob_start();
        // line 199
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            ";
        // line 206
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : null))) {
            // line 207
            echo "                for (first in \$val) break;
                \$val = \$val[first];
            ";
        }
        // line 210
        echo "
                \$field.val(JSON.stringify(\$val));
            };

            ";
        // line 214
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 215
            echo "                ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : null))) {
                // line 216
                echo "                    ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : null)) . "]");
                // line 217
                echo "                ";
            } else {
                // line 218
                echo "                    ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : null);
                // line 219
                echo "                ";
            }
            // line 220
            echo "            ";
        }
        // line 221
        echo "
            var \$configs = \$.extend(";
        // line 222
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ", {
                prePopulate: ";
        // line 223
        echo (isset($context["prePopulate"]) ? $context["prePopulate"] : null);
        echo ",
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            ";
        // line 229
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 230
            echo "                '";
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "'
            ";
        } else {
            // line 232
            echo "                ";
            $context["sourceChoices"] = array();
            // line 233
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 234
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 235
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "                ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null));
            echo "
            ";
        }
        // line 237
        echo ",
                \$configs
            );
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 245
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        // line 246
        ob_start();
        // line 247
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 256
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 257
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 267
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 270
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 276
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 277
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 278
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 283
            echo "                ";
            $context["sourceChoices"] = array();
            // line 284
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 285
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 286
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : null));
            echo ";
            ";
        }
        // line 289
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 292
        if ((isset($context["free_values"]) ? $context["free_values"] : null)) {
            // line 293
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 302
        echo "
            ";
        // line 303
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 304
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 312
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 317
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        // line 318
        ob_start();
        // line 319
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            var \$configs = ";
        // line 322
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ";

            ";
        // line 324
        if ((isset($context["route_name"]) ? $context["route_name"] : null)) {
            // line 325
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 326
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : null));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 331
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : null));
            echo ";
            ";
        }
        // line 333
        echo "
            \$autocompleter.autocomplete(\$configs);
            
            ";
        // line 336
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array())))) {
            // line 337
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 341
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 346
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        // line 347
        ob_start();
        // line 348
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 350
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

            ";
        // line 352
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 359
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 352
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        // line 353
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 355
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : null)) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 356
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : null), "html", null, true);
        echo "
                });
            ";
    }

    // line 364
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        // line 365
        ob_start();
        // line 366
        echo "    ";
        // line 367
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 368
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : null)) . "_map")));
            // line 369
            echo "    ";
        }
        // line 370
        echo "
    ";
        // line 371
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 372
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array()), "vars", array()), "id", array()))));
            // line 373
            echo "    ";
        }
        // line 374
        echo "
    ";
        // line 375
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 376
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array()), "vars", array()), "id", array()))));
            // line 377
            echo "    ";
        }
        // line 378
        echo "
    ";
        // line 379
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 380
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array()), "vars", array()), "id", array()))));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 384
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), "vars", array()), "id", array()))));
            // line 385
            echo "    ";
        }
        // line 386
        echo "
    ";
        // line 388
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : null)) > 0)) {
            // line 389
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("elements" => (isset($context["elements"]) ? $context["elements"] : null)));
            // line 390
            echo "    ";
        }
        // line 391
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 394
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 396
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");

            ";
        // line 398
        if (((isset($context["map"]) ? $context["map"] : null) === true)) {
            // line 399
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 404
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 409
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        // line 410
        ob_start();
        // line 411
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload');
        ";
        // line 414
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 482
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 414
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        // line 415
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 416
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 419
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(        // line 420
(isset($context["configs"]) ? $context["configs"] : null), "swf", array())), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(        // line 421
(isset($context["configs"]) ? $context["configs"] : null), "cancelImg", array())), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute(        // line 422
(isset($context["configs"]) ? $context["configs"] : null), "script", array())), "queueID" => (        // line 423
(isset($context["id"]) ? $context["id"] : null) . "_queue"))));
        // line 424
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 429
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 430
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 436
            echo "                        var value = data.file;
                    ";
        }
        // line 438
        echo "
                    \$('#";
        // line 439
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 453
        if (( !$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array()) === false))) {
            // line 454
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 467
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 471
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
    }

    // line 487
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        // line 488
        ob_start();
        // line 489
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 491
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_upload');
        ";
        // line 492
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 650
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 492
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        // line 493
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 494
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "folder", array())), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 498
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "folder", array()), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 504
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(        // line 505
(isset($context["configs"]) ? $context["configs"] : null), "swf", array())), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(        // line 506
(isset($context["configs"]) ? $context["configs"] : null), "cancelImg", array())), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute(        // line 507
(isset($context["configs"]) ? $context["configs"] : null), "script", array())), "queueID" => (        // line 508
(isset($context["id"]) ? $context["id"] : null) . "_queue"))));
        // line 509
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 514
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 547
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array()), "width", array())) : (500));
        // line 548
        echo "
                \$ratio = data.image.width > ";
        // line 549
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : null), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : null), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 593
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 602
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : null));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 609
        echo $this->env->getExtension('routing')->getPath("genemu_form_image");
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 614
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 632
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 633
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 635
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "file", array())) : ((isset($context["value"]) ? $context["value"] : null))), "html", null, true);
            echo "',
                width: ";
            // line 636
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "width", array())) : ((isset($context["width"]) ? $context["width"] : null))), "html", null, true);
            echo ",
                height: ";
            // line 637
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "height", array())) : ((isset($context["height"]) ? $context["height"] : null))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 640
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
            echo ",
                height: ";
            // line 641
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 645
            echo "        \$options.hide();
    ";
        }
        // line 647
        echo "
        \$field.uploadify(\$configs);
        ";
    }

    // line 655
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 656
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 658
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');

        ";
        // line 660
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 663
        echo "    });
    </script>
";
    }

    // line 660
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        // line 661
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null));
        echo ");
        ";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1324 => 661,  1321 => 660,  1315 => 663,  1313 => 660,  1308 => 658,  1304 => 656,  1301 => 655,  1295 => 647,  1291 => 645,  1284 => 641,  1280 => 640,  1274 => 637,  1270 => 636,  1266 => 635,  1262 => 633,  1260 => 632,  1239 => 614,  1231 => 609,  1221 => 602,  1209 => 593,  1160 => 549,  1157 => 548,  1155 => 547,  1119 => 514,  1112 => 509,  1110 => 508,  1109 => 507,  1108 => 506,  1107 => 505,  1106 => 504,  1097 => 498,  1093 => 497,  1088 => 495,  1084 => 494,  1081 => 493,  1078 => 492,  1071 => 650,  1069 => 492,  1065 => 491,  1061 => 489,  1059 => 488,  1056 => 487,  1042 => 471,  1036 => 467,  1021 => 454,  1019 => 453,  1002 => 439,  999 => 438,  995 => 436,  985 => 430,  983 => 429,  976 => 424,  974 => 423,  973 => 422,  972 => 421,  971 => 420,  970 => 419,  964 => 416,  961 => 415,  958 => 414,  951 => 482,  949 => 414,  945 => 413,  941 => 411,  939 => 410,  936 => 409,  929 => 404,  922 => 399,  920 => 398,  915 => 396,  910 => 394,  905 => 391,  902 => 390,  899 => 389,  896 => 388,  893 => 386,  890 => 385,  887 => 384,  885 => 383,  882 => 382,  879 => 381,  876 => 380,  874 => 379,  871 => 378,  868 => 377,  865 => 376,  863 => 375,  860 => 374,  857 => 373,  854 => 372,  852 => 371,  849 => 370,  846 => 369,  843 => 368,  840 => 367,  838 => 366,  836 => 365,  833 => 364,  826 => 356,  822 => 355,  818 => 354,  815 => 353,  812 => 352,  805 => 359,  803 => 352,  798 => 350,  794 => 348,  792 => 347,  789 => 346,  782 => 341,  776 => 337,  774 => 336,  769 => 333,  763 => 331,  755 => 326,  752 => 325,  750 => 324,  745 => 322,  741 => 321,  737 => 319,  735 => 318,  732 => 317,  725 => 312,  715 => 304,  713 => 303,  710 => 302,  699 => 293,  697 => 292,  692 => 289,  686 => 287,  680 => 286,  677 => 285,  672 => 284,  669 => 283,  661 => 278,  658 => 277,  656 => 276,  648 => 270,  643 => 267,  631 => 257,  629 => 256,  620 => 250,  616 => 249,  612 => 247,  610 => 246,  607 => 245,  597 => 237,  591 => 236,  585 => 235,  582 => 234,  577 => 233,  574 => 232,  568 => 230,  566 => 229,  557 => 223,  553 => 222,  550 => 221,  547 => 220,  544 => 219,  541 => 218,  538 => 217,  535 => 216,  532 => 215,  530 => 214,  524 => 210,  519 => 207,  517 => 206,  510 => 202,  506 => 201,  502 => 199,  500 => 198,  497 => 197,  486 => 191,  482 => 189,  480 => 188,  477 => 187,  470 => 182,  460 => 174,  444 => 162,  442 => 161,  437 => 159,  428 => 153,  424 => 151,  422 => 150,  419 => 149,  410 => 143,  401 => 137,  397 => 136,  393 => 135,  389 => 133,  387 => 132,  384 => 131,  378 => 123,  367 => 115,  363 => 114,  358 => 113,  356 => 112,  349 => 110,  345 => 109,  341 => 108,  337 => 106,  334 => 105,  331 => 104,  329 => 103,  326 => 102,  323 => 101,  321 => 99,  319 => 98,  317 => 97,  314 => 96,  311 => 95,  304 => 126,  302 => 95,  294 => 93,  290 => 91,  288 => 90,  285 => 89,  278 => 84,  273 => 80,  262 => 72,  259 => 71,  257 => 70,  254 => 68,  249 => 65,  246 => 64,  244 => 62,  242 => 60,  239 => 59,  237 => 57,  235 => 56,  232 => 55,  230 => 54,  227 => 53,  206 => 39,  198 => 35,  196 => 34,  193 => 33,  175 => 18,  170 => 15,  168 => 14,  165 => 13,  159 => 11,  153 => 9,  141 => 4,  136 => 3,  134 => 2,  131 => 1,  127 => 655,  124 => 654,  122 => 487,  119 => 486,  117 => 409,  114 => 408,  112 => 364,  109 => 363,  107 => 346,  104 => 345,  102 => 317,  99 => 316,  97 => 245,  94 => 244,  92 => 197,  89 => 196,  87 => 187,  84 => 186,  82 => 149,  79 => 148,  77 => 131,  74 => 130,  72 => 89,  69 => 88,  67 => 53,  64 => 52,  62 => 33,  59 => 32,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  47 => 9,  44 => 8,  42 => 1,);
    }
}
/* {% block form_javascript %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*         {{ form_javascript(child) }}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_javascript %}*/
/* */
/* {% block field_javascript "" %}*/
/* */
/* {% block button_javascript "" %}*/
/* */
/* {% block genemu_captcha_javascript %}*/
/* {% spaceless %}*/
/*     <!--[if lte IE 7]>*/
/*     <script type="text/javascript">*/
/*         $(function () {*/
/*             var pathBase64 = "{{ path('genemu_base64')}}";*/
/* */
/*             $(document.images).each(function(){*/
/*                 var src = $(this).attr("src");*/
/*                 if (/^data:.*;base64/i.test(src)) {*/
/*                     src = src.slice(5);*/
/*                     $(this).attr("src",pathBase64+"?"+src);*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/*     <![endif]-->*/
/* {% endspaceless %}*/
/* {% endblock genemu_captcha_javascript %}*/
/* */
/* {% block genemu_recaptcha_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript" src="{{ asset("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js") }}"></script>*/
/*     <script type="text/javascript">*/
/*         function genemu_recaptcha_load()*/
/*         {*/
/*             Recaptcha.create('{{ public_key }}', '{{ id }}_div', {{ configs|json_encode|raw }});*/
/*         }*/
/* */
/*         if (window.addEventListener) {*/
/*             window.addEventListener('load', genemu_recaptcha_load, false);*/
/*         } else if (window.attachEvent) {*/
/*             window.attachEvent('onload', genemu_recaptcha_load);*/
/*         } else {*/
/*             window.onload = genemu_recaptcha_load;*/
/*         }*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_recaptcha_javascript %}*/
/* */
/* {% block genemu_tinymce_javascript %}*/
/* {% spaceless %}*/
/*     {% if configs.script_url is defined %}*/
/*         {% set configs = configs|merge({*/
/*             "script_url": asset(configs.script_url)*/
/*         }) %}*/
/*     {% else %}*/
/*         {% set configs = configs|merge({*/
/*             "mode": "exact",*/
/*             "elements": id*/
/*         }) %}*/
/*     {% endif %}*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $configs = {{ configs|json_encode|raw }};*/
/* */
/*         {%- if configs.script_url is defined %}*/
/* */
/*             var $textarea = jQuery('#{{ id }}');*/
/*             if($textarea.is('[required]')) {*/
/*                 $configs.oninit = function(editor) {*/
/*                     editor.onChange.add(function(ed, l) { ed.save(); });*/
/*                 };*/
/*             }*/
/*             $textarea.tinymce($configs);*/
/*         {% else %}*/
/* */
/*             tinyMCE.init($configs);*/
/*         {% endif -%}*/
/* */
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_tinymce_javascript %}*/
/* */
/* {% block genemu_jquerydate_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{% if widget != "single_text" %}datepicker_{% endif %}{{ id }}');*/
/*         */
/*         {% block genemu_jquerydate_javascript_prototype %}*/
/* */
/*         {% if configs.buttonImage is defined %}*/
/*             {% set configs = configs|merge({*/
/*                 "buttonImage": asset(configs.buttonImage)*/
/*             }) %}*/
/*         {% endif %}*/
/* */
/*         {% if culture == "en" %}*/
/*             {% set culture = "en-GB" %}*/
/*         {% endif %}*/
/* */
/*             var $configs = $.extend({*/
/*                 minDate: new Date({{ min_year }}, 0, 1),*/
/*                 maxDate: new Date({{ max_year }}, 11, 31)*/
/*             }, $.datepicker.regional['{{ culture }}'] ,{{ configs|json_encode|raw }});*/
/* */
/*         {% if widget != "single_text" %}*/
/*             var $year = $('#{{ form.year.vars.id }}');*/
/*             var $month = $('#{{ form.month.vars.id }}');*/
/*             var $day = $('#{{ form.day.vars.id }}');*/
/* */
/*             $configs.onSelect = function(date) {*/
/*                 $year.val(parseInt(date.substring(0, 4), 10));*/
/*                 $month.val(parseInt(date.substring(5, 7), 10));*/
/*                 $day.val(parseInt(date.substring(8), 10));*/
/*             }*/
/*         {% endif %}*/
/* */
/*             $field.datepicker($configs);*/
/*         {% endblock %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryslider_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $configs = $.extend({{ configs|json_encode|raw }}, {*/
/*                 value: {{ value ? value : 0 }},*/
/*                 slide: function(event, ui) {*/
/*                     $field.val(ui.value);*/
/*                 }*/
/*             });*/
/* */
/*             $('#{{ id }}_slider').slider($configs);*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryslider_javascript %}*/
/* */
/* {% block genemu_jquerycolor_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $configs = $.extend({*/
/*                 color: '#' + $field.val(),*/
/*                 onBeforeShow: function() {*/
/*                     $(this).ColorPickerSetColor($field.val());*/
/*                 }*/
/*             }, {{ configs|json_encode|raw }});*/
/* */
/*         {% if widget == "image" %}*/
/*             $picker = $('#{{ id }}_color');*/
/* */
/*             $picker.ColorPicker($.extend({*/
/*                 onChange: function(hsb, hex, rgb) {*/
/*                     $field.val(hex);*/
/* */
/*                     $('div', $picker).css({*/
/*                         backgroundColor: '#' + hex*/
/*                     });*/
/*                 }*/
/*             }, $configs));*/
/*         {% else %}*/
/*             $field.ColorPicker($.extend({*/
/*                 onChange: function(hsb, hex, rgb) {*/
/*                     $field.val(hex).css({*/
/*                         backgroundColor: '#' + hex*/
/*                     });*/
/*                 }*/
/*             }, $configs));*/
/*         {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerycolor_javascript %}*/
/* */
/* {% block genemu_jqueryrating_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $('[name="{{ full_name }}"]').rating({{ configs|json_encode|raw }});*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryrating_javascript %}*/
/* */
/* {% block genemu_jquerytokeninput_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $tokeninput = $('#tokeninput_{{ id }}');*/
/* */
/*             var update_hidden_sourceinput = function(item) {*/
/*                 var $val = $tokeninput.tokenInput('get');*/
/*             {% if multiple is empty %}*/
/*                 for (first in $val) break;*/
/*                 $val = $val[first];*/
/*             {% endif %}*/
/* */
/*                 $field.val(JSON.stringify($val));*/
/*             };*/
/* */
/*             {% if value is not empty %}*/
/*                 {% if multiple is empty %}*/
/*                     {% set prePopulate = '[' ~ value ~ ']' %}*/
/*                 {% else %}*/
/*                     {% set prePopulate = value %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             var $configs = $.extend({{ configs|json_encode|raw }}, {*/
/*                 prePopulate: {{ prePopulate|raw }},*/
/*                 onAdd: update_hidden_sourceinput,*/
/*                 onDelete: update_hidden_sourceinput*/
/*             });*/
/* */
/*             $tokeninput.tokenInput(*/
/*             {% if route_name %}*/
/*                 '{{ path(route_name) }}'*/
/*             {% else %}*/
/*                 {% set sourceChoices = [] %}*/
/*                 {% for choice in choices %}*/
/*                     {% set sourceChoices = sourceChoices|merge([{'value': choice.value, 'label': choice.label}]) %}*/
/*                 {% endfor %}*/
/*                 {{ sourceChoices|json_encode|raw }}*/
/*             {% endif %},*/
/*                 $configs*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerytokeninput_javascript %}*/
/* */
/* {% block genemu_jqueryautocompleter_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $autocompleter = $('#autocompleter_{{ id }}');*/
/*             var $configs = {*/
/*                 focus: function(event, ui) {*/
/*                     return false;*/
/*                 },*/
/*                 select: function(event, ui) {*/
/*                 {% if multiple %}*/
/*                     terms = this.value.split(/,\s*//* );*/
/*                     terms.pop();*/
/*                     terms.push(ui.item.label);*/
/*                     terms.push('');*/
/*                     this.value = terms.join(', ');*/
/* */
/*                     terms = $field.val();*/
/*                     terms = !terms?[]:JSON.parse(terms);*/
/*                     terms.push(ui.item);*/
/*                 {% else %}*/
/*                     this.value = ui.item.label;*/
/*                     terms = ui.item;*/
/*                 {% endif %}*/
/*                     $field.val(JSON.stringify(terms));*/
/* */
/*                     return false;*/
/*                 }*/
/*             };*/
/* */
/*             {% if route_name %}*/
/*                 $configs.source = function(request, response) {*/
/*                     $.getJSON('{{ path(route_name) }}', {*/
/*                         term: request.term*/
/*                     }, response);*/
/*                 };*/
/*             {% else %}*/
/*                 {% set sourceChoices = [] %}*/
/*                 {% for choice in choices %}*/
/*                     {% set sourceChoices = sourceChoices|merge([{'value': choice.value, 'label': choice.label}]) %}*/
/*                 {% endfor %}*/
/*                 $configs.source = {{ sourceChoices|json_encode|raw }};*/
/*             {% endif %}*/
/* */
/*                 $autocompleter.autocomplete($configs);*/
/* */
/*             {% if free_values %}*/
/*                 $autocompleter.keyup(function(){*/
/*                     var val ={}*/
/*                     var fieldval = $(this).val();*/
/*                     val['value'] = fieldval;*/
/*                     val['label'] = fieldval;*/
/* */
/*                     $field.val(JSON.stringify(val));*/
/*                 });*/
/*             {% endif %}*/
/* */
/*             {% if multiple %}*/
/*                 var $source = $autocompleter.data('autocomplete').source;*/
/* */
/*                 $autocompleter.autocomplete('option', 'source', function(request, response) {*/
/*                     request.term = request.term.split(/,\s*//* ).pop();*/
/* */
/*                     $source(request, response);*/
/*                 });*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryautocompleter_javascript %}*/
/* */
/* {% block genemu_jqueryautocomplete_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $autocompleter = $('#{{ id }}');*/
/*             var $configs = {{ configs|json_encode|raw }};*/
/* */
/*             {% if route_name %}*/
/*                 $configs.source = function(request, response) {*/
/*                     $.getJSON('{{ path(route_name) }}', {*/
/*                         term: request.term*/
/*                     }, response);*/
/*                 };*/
/*             {% else %}*/
/*                 $configs.source = {{ suggestions|json_encode|raw }};*/
/*             {% endif %}*/
/* */
/*             $autocompleter.autocomplete($configs);*/
/*             */
/*             {% if configs.minLength is defined and 0 == configs.minLength %}*/
/*                 $autocompleter.focus(function() {*/
/*                     $(this).autocomplete("search", "");*/
/*                 });*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jquerychosen_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{{ id }}');*/
/* */
/*             {% block genemu_jquerychosen_javascript_prototype %}*/
/*                 $field.chosen({*/
/*                     no_results_text: "{{ no_results_text|trans({}, translation_domain) }}",*/
/*                     allow_single_deselect: {{ allow_single_deselect ? 'true' : 'false' }},*/
/*                     disable_search_threshold: {{ disable_search_threshold }}*/
/*                 });*/
/*             {% endblock %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jquerygeolocation_javascript %}*/
/* {% spaceless %}*/
/*     {# Elements generation #}*/
/*     {% if map is sameas(true) %}*/
/*         {% set elements = elements|merge({"map": "#" ~ id ~ "_map"}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.latitude is defined %}*/
/*         {% set elements = elements|merge({"lat": "#" ~ form.latitude.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.longitude is defined %}*/
/*         {% set elements = elements|merge({"lng": "#" ~ form.longitude.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.locality is defined %}*/
/*         {% set elements = elements|merge({"locality": "#" ~ form.locality.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.country is defined %}*/
/*         {% set elements = elements|merge({"country": "#" ~ form.country.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {# Configs generation #}*/
/*     {% if elements | length > 0 %}*/
/*         {% set configs = configs|merge({"elements": elements}) %}*/
/*     {% endif %}*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{{ form.address.vars.id }}');*/
/* */
/*             $field.addresspicker({{ configs|json_encode|raw }});*/
/* */
/*             {% if map is sameas(true) %}*/
/*                 var gmarker = $field.addresspicker('marker');*/
/*                 gmarker.setVisible(true);*/
/* */
/*                 $field.addresspicker('updatePosition');*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerygeolocation_javascript %}*/
/* */
/* {% block genemu_jqueryfile_javascript %}*/
/* {% spaceless %}*/
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         var $field = $('#{{ id }}_upload');*/
/*         {% block genemu_jqueryfile_javascript_prototype %}*/
/*         var $form = $field.closest('form');*/
/*         var $queue = $('#{{ id }}_queue');*/
/*         var $nbQueue = 0;*/
/* */
/*         var $configs = $.extend({{ configs|merge({*/
/*             'swf':       asset(configs.swf),*/
/*             'cancelImg': asset(configs.cancelImg),*/
/*             'uploader':  path(configs.script),*/
/*             'queueID':   id ~ '_queue'*/
/*         })|json_encode|raw }}, {*/
/*             onUploadSuccess: function(file, data, response) {*/
/*                 data = jQuery.parseJSON(data);*/
/* */
/*                 if (data.result == '1') {*/
/*                     {% if multiple %}*/
/*                         var value = $('#{{ id }}').val();*/
/*                         if (value != '') {*/
/*                             value += ",";*/
/*                         }*/
/*                         value += data.file;*/
/*                     {% else %}*/
/*                         var value = data.file;*/
/*                     {% endif %}*/
/* */
/*                     $('#{{ id }}').val(value);*/
/*                     $nbQueue--;*/
/*                 } else {*/
/*                     alert('Error');*/
/*                 }*/
/*             },*/
/*             onSelect: function(file) {*/
/*                 $nbQueue++;*/
/*             },*/
/*             onUploadError: function(file, errorCode, errorMsg, errorString) {*/
/*                 alert('error');*/
/*             }*/
/*         });*/
/* */
/*     {% if configs.auto is not defined or configs.auto is sameas(false) %}*/
/*         $configs.onAllComplete = function(event, data) {*/
/*             $form.submit();*/
/*         };*/
/* */
/*         $form.submit(function(event) {*/
/*             if (0 === $nbQueue) {*/
/*                 return $joinFiles();*/
/*             } else {*/
/*                 $field.uploadifyUpload();*/
/*                 event.preventDefault();*/
/*             }*/
/*         });*/
/*     {% else %}*/
/*         $form.submit(function(event) {*/
/*             return $joinFiles();*/
/*         });*/
/*     {% endif %}*/
/* */
/*         var $joinFiles = function() {*/
/*             if ($files = $field.data('files')) {*/
/*                 $field.val($files.join(','));*/
/*             }*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         $field.uploadify($configs);*/
/*         {% endblock %}*/
/*     });*/
/* </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryimage_javascript %}*/
/* {% spaceless %}*/
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         var $field   = $('#{{ id }}_upload');*/
/*         {% block genemu_jqueryimage_javascript_prototype %}*/
/*         var $form    = $field.closest('form');*/
/*         var $preview = $('#{{ id }}_img_preview');*/
/*         var $options = $('#{{ id }}_options');*/
/*         // Base path for apps not on DocumentRoot*/
/*         var $basePath = '{{ asset(configs.folder) }}';*/
/*         $basePath = $basePath.substr(0, $basePath.length - '{{ configs.folder }}'.length);*/
/* */
/*         var $coords = {};*/
/*         var $crop = null;*/
/*         var $ratio = 1;*/
/* */
/*         var $configs = $.extend({{ configs|merge({*/
/*             'swf':       asset(configs.swf),*/
/*             'cancelImg': asset(configs.cancelImg),*/
/*             'uploader':  path(configs.script),*/
/*             'queueID':   id ~ '_queue'*/
/*         })|json_encode|raw }}, {*/
/*             onUploadSuccess: function(file, data, response) {*/
/*                 data = jQuery.parseJSON(data);*/
/* */
/*                 if (data.result == '1') {*/
/*                     $('#{{ id }}').val(data.file);*/
/* */
/*                     // add if and only if path is relative*/
/*                     if (data.thumbnail.file.search(/^[/\\]/) < 0) {*/
/*                         data.thumbnail.file = $basePath + data.thumbnail.file;*/
/*                     }*/
/* */
/*                     createCrop({*/
/*                         image:      data.image,*/
/*                         thumbnail:  data.thumbnail*/
/*                     });*/
/*                 } else {*/
/*                     alert('Error');*/
/*                 }*/
/*             },*/
/*             onUploadError: function(file, errorCode, errorMsg, errorString) {*/
/*                 alert('error');*/
/*             }*/
/*         });*/
/* */
/*         var createCrop = function (data) {*/
/*             if ($crop) {*/
/*                 $crop.destroy();*/
/*             }*/
/* */
/*             // add if and only if path is relative*/
/*             if (data.thumbnail.file.search(/^[/\\]/) < 0) {*/
/*                 data.thumbnail.file = $basePath + data.thumbnail.file;*/
/*             }*/
/*             var $img = new Image();*/
/* */
/*             console.log(data);*/
/*             $($img).load(function() {*/
/*                 {% set widthMax = data.thumbnail is defined ? data.thumbnail.width : 500 %}*/
/* */
/*                 $ratio = data.image.width > {{ widthMax }} ? data.image.width / {{ widthMax }} : 1;*/
/*                 $('.crop', $options).hide();*/
/* */
/*                 $preview*/
/*                     .width(Math.round(data.image.width / $ratio))*/
/*                     .height(Math.round(data.image.height / $ratio))*/
/*                     .attr('src', this.src);*/
/* */
/*                 if (!$crop) {*/
/*                     $options.fadeIn();*/
/*                 }*/
/* */
/*                 $preview.Jcrop({*/
/*                     onSelect: checkCoords,*/
/*                     onChange: checkCoords*/
/*                 }, function() {*/
/*                     $crop = this;*/
/*                 });*/
/*             }).attr('src', data.thumbnail.file);*/
/*         }*/
/* */
/*         var checkCoords = function(coords) {*/
/* */
/*             if (coords.w > 0 && coords.h > 0) {*/
/*                 $('.crop', $options).fadeIn();*/
/* */
/*                 $coords = {*/
/*                     x: coords.x * $ratio,*/
/*                     y: coords.y * $ratio,*/
/*                     w: coords.w * $ratio,*/
/*                     h: coords.h * $ratio*/
/*                 };*/
/*             } else {*/
/*                 $('.crop', $options).fadeOut();*/
/*             }*/
/*         }*/
/* */
/*         $('.change', $options).click(function() {*/
/*             var $this = $(this);*/
/*             var $regex = new RegExp('^\\b(.*?) (.*)\\b', 'g');*/
/*             var $filter = $this.attr('class').replace($regex, '$1');*/
/* */
/*             var $data = {*/
/*                 filter: $filter,*/
/*                 image: $('#{{ id }}').val(),*/
/*                 opacity: 0.5*/
/*             };*/
/* */
/*             if ('crop' === $filter && !$.isEmptyObject($coords)) {*/
/*                 $data = $.extend($data, $coords);*/
/*             }*/
/* */
/*             if (*/
/*                 $.inArray($filter, {{ filters|json_encode|raw }}) !== -1 ||*/
/*                 ( 'crop' === $filter && !$.isEmptyObject($coords) )*/
/*             ) {*/
/*                 $this.addClass('loading');*/
/* */
/*                 $.ajax({*/
/*                     type: 'POST',*/
/*                     url: '{{ path('genemu_form_image') }}',*/
/*                     data: $data,*/
/*                     dataType: 'json',*/
/*                     success: function(data) {*/
/*                         if (data.result == '1') {*/
/*                             $('#{{ id }}').val(data.file);*/
/* */
/*                             createCrop({*/
/*                                 image: data.image,*/
/*                                 thumbnail: $.isEmptyObject(data.thumbnail) ? $.extend(data.image, {*/
/*                                     file: data.file*/
/*                                 }) : data.thumbnail*/
/*                             });*/
/*                         } else {*/
/*                             alert('Error');*/
/*                         }*/
/* */
/*                         $this.removeClass('loading');*/
/*                     }*/
/*                 });*/
/*             }*/
/*         });*/
/* */
/*     {% if value %}*/
/*         createCrop({*/
/*             thumbnail: {*/
/*                 file: '{{ thumbnail is defined ? thumbnail.file : value }}',*/
/*                 width: {{ thumbnail is defined ? thumbnail.width : width }},*/
/*                 height: {{ thumbnail is defined ? thumbnail.height : height }},*/
/*             },*/
/*             image: {*/
/*                 width: {{ width }},*/
/*                 height: {{ height }}*/
/*             }*/
/*         });*/
/*     {% else %}*/
/*         $options.hide();*/
/*     {% endif %}*/
/* */
/*         $field.uploadify($configs);*/
/*         {% endblock %}*/
/*     });*/
/* </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_javascript %}*/
/*     <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         $field = $('#{{ id }}');*/
/* */
/*         {% block genemu_jqueryselect2_javascript_prototype %}*/
/*             $field.select2({{ configs|json_encode|raw }});*/
/*         {% endblock %}*/
/*     });*/
/*     </script>*/
/* {% endblock %}*/
/* */
