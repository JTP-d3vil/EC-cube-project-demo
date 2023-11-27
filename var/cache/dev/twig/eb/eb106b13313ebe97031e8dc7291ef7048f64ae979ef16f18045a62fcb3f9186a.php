<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin/search_items.twig */
class __TwigTemplate_0aa5e4d06d1bc3b20a1b83f53878b300f97f2c6da7b12b5d647e37643880579e extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/search_items.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/search_items.twig"));

        // line 11
        echo "<ul class=\"list-inline\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "children", [], "any", false, false, false, 12), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12) != "_token") &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 13
            echo "        ";
            if ((false == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 13), "label", [], "any", false, false, false, 13) == "admin.list.sort.key") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 13), "label", [], "any", false, false, false, 13) == "admin.list.sort.type")))) {
                // line 14
                echo "        <li class=\"list-inline-item\"><span class=\"fw-bold\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 14), "label", [], "any", false, false, false, 14)), "html", null, true);
                echo ":&nbsp;</span>";
                // line 15
                if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 15), "data", [], "any", false, false, false, 15))) {
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 18), "choices", [], "any", false, false, false, 18));
                        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                            // line 19
                            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], $context["value"])) {
                                // line 20
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 20)), "html", null, true);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23)) ? (",&nbsp;") : (""));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 25
$context["child"], "vars", [], "any", false, true, false, 25), "data", [], "any", false, true, false, 25), "timestamp", [], "any", true, true, false, 25)) {
                    // line 27
                    echo "                ";
                    if (twig_in_filter("datetime", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27))) {
                        // line 28
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 28), "data", [], "any", false, false, false, 28)), "html", null, true);
                        echo "
                ";
                    } else {
                        // line 30
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 30), "data", [], "any", false, false, false, 30)), "html", null, true);
                        echo "
                ";
                    }
                } else {
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 34), "choices", [], "any", true, true, false, 34) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 34), "choices", [], "any", false, false, false, 34)))) {
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 35), "choices", [], "any", false, false, false, 35));
                        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                            // line 36
                            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36))) {
                                // line 37
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 37)), "html", null, true);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    } else {
                        // line 41
                        if ($this->env->getTest('integer')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 41), "data", [], "any", false, false, false, 41))) {
                            // line 42
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 42), "data", [], "any", false, false, false, 42)), "html", null, true);
                        } else {
                            // line 44
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 44), "data", [], "any", false, false, false, 44), "html", null, true);
                        }
                    }
                }
                // line 48
                echo "</li>
        ";
            }
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/search_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  151 => 50,  147 => 48,  142 => 44,  139 => 42,  137 => 41,  129 => 37,  127 => 36,  123 => 35,  121 => 34,  114 => 30,  108 => 28,  105 => 27,  103 => 25,  89 => 23,  82 => 20,  80 => 19,  76 => 18,  59 => 16,  57 => 15,  53 => 14,  50 => 13,  46 => 12,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<ul class=\"list-inline\">
    {% for child in form.children|filter(child => (child.vars.name != '_token' and child.vars.data is not empty)) %}
        {% if false == (child.vars.label == 'admin.list.sort.key' or child.vars.label == 'admin.list.sort.type') %}{# ソートの選択結果は表示しない #}
        <li class=\"list-inline-item\"><span class=\"fw-bold\">{{ child.vars.label|trans }}:&nbsp;</span>
            {%- if child.vars.data is iterable -%}
                {%- for value in child.vars.value -%}
                    {# ChoiceType -> multiple:true #}
                    {%- for choice in child.vars.choices -%}
                        {%- if choice is selectedchoice(value) -%}
                            {{ choice.label|trans }}
                        {%- endif %}
                    {%- endfor -%}
                    {{ not loop.last ? ',&nbsp;' }}
                {%- endfor -%}
            {%- elseif child.vars.data.timestamp is defined -%}
                {# DateTimeType の時は分まで表示 #}
                {% if 'datetime' in child.vars.id %}
                    {{ child.vars.data|date_sec }}
                {% else %}
                    {{ child.vars.data|date_day }}
                {% endif %}
            {%- else -%}
                {# ChoiceType -> multiple:false #}
                {%- if child.vars.choices is defined and child.vars.choices is not empty -%}
                    {%- for choice in child.vars.choices -%}
                        {%- if choice is selectedchoice(child.vars.value) -%}
                            {{ choice.label|trans }}
                        {%- endif %}
                    {%- endfor -%}
                {%- else -%}
                    {%- if child.vars.data is integer -%}
                        {{ child.vars.data|number_format }}
                    {%- else -%}
                        {{ child.vars.data }}
                    {%- endif -%}
                {%- endif-%}
            {%- endif -%}
        </li>
        {% endif %}
    {% endfor %}
</ul>
", "@admin/search_items.twig", "C:\\xampp\\htdocs\\coolShoes\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\search_items.twig");
    }
}
