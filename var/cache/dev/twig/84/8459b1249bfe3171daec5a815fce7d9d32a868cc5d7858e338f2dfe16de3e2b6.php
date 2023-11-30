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

/* @admin/pager.twig */
class __TwigTemplate_bb8f7f2b6e9539c23bbd8c5c832fc6316e2196c44dc6590fb3a8fc02e29d4100 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/pager.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/pager.twig"));

        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 11, $this->source); })()), "pageCount", [], "any", false, false, false, 11) > 1)) {
            // line 12
            echo "    <ul class=\"pagination col-auto\">

        <!-- 最初へ -->
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 15, $this->source); })()), "firstPageInRange", [], "any", false, false, false, 15) != 1)) {
                // line 16
                echo "            <li class=\"page-item\">
                ";
                // line 18
                echo "                ";
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "all", [], "any", false, false, false, 18), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 18, $this->source); })()), "first", [], "any", false, false, false, 18)]);
                // line 19
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 19, $this->source); })()), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 19, $this->source); })())));
                // line 20
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 21, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 21, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", [0 => "_route"], "method", false, false, false, 21))), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 21, $this->source); })())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 24
            echo "
        <!-- 前へ -->
        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, false, 26)) {
                // line 27
                echo "            <li class=\"page-item\">
                ";
                // line 29
                echo "                ";
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "query", [], "any", false, false, false, 29), "all", [], "any", false, false, false, 29), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 29, $this->source); })()), "previous", [], "any", false, false, false, 29)]);
                // line 30
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 30, $this->source); })()), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 30, $this->source); })())));
                // line 31
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 32, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 32, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32))), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 32, $this->source); })())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.prev"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 35
            echo "
        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 37, $this->source); })()), "firstPageInRange", [], "any", false, false, false, 37) != 1)) {
                // line 38
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 40
            echo "
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 41, $this->source); })()), "pagesInRange", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 42, $this->source); })()), "current", [], "any", false, false, false, 42))) {
                    echo " active";
                }
                echo "\">
                ";
                // line 44
                echo "                ";
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "all", [], "any", false, false, false, 44), ["page_no" => $context["page"]]);
                // line 45
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 45, $this->source); })()), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 45, $this->source); })())));
                // line 46
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 47, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 47, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", [0 => "_route"], "method", false, false, false, 47))), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 47, $this->source); })())), "html", null, true);
                echo "\">
                    ";
                // line 48
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 54, $this->source); })()), "last", [], "any", false, false, false, 54) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 54, $this->source); })()), "lastPageInRange", [], "any", false, false, false, 54))) {
                // line 55
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 57
            echo "
        <!-- 次へ -->
        ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, false, 59)) {
                // line 60
                echo "            <li class=\"page-item\">
                ";
                // line 62
                echo "                ";
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "query", [], "any", false, false, false, 62), "all", [], "any", false, false, false, 62), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 62, $this->source); })()), "next", [], "any", false, false, false, 62)]);
                // line 63
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 63, $this->source); })()), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 63, $this->source); })())));
                // line 64
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 65, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 65, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", [0 => "_route"], "method", false, false, false, 65))), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 65, $this->source); })())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.next"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 68
            echo "
        <!-- 最後へ -->
        ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 70, $this->source); })()), "last", [], "any", false, false, false, 70) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 70, $this->source); })()), "lastPageInRange", [], "any", false, false, false, 70))) {
                // line 71
                echo "            <li class=\"page-item\">
                ";
                // line 73
                echo "                ";
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "query", [], "any", false, false, false, 73), "all", [], "any", false, false, false, 73), ["page_no" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 73, $this->source); })()), "last", [], "any", false, false, false, 73)]);
                // line 74
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 74, $this->source); })()), ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 74, $this->source); })())])) : ((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 74, $this->source); })())));
                // line 75
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 76, $this->source); })())) ? ((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 76, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", [0 => "_route"], "method", false, false, false, 76))), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 76, $this->source); })())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 78
            echo "
    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 78,  199 => 76,  196 => 75,  193 => 74,  190 => 73,  187 => 71,  185 => 70,  181 => 68,  173 => 65,  170 => 64,  167 => 63,  164 => 62,  161 => 60,  159 => 59,  155 => 57,  151 => 55,  149 => 54,  145 => 52,  135 => 48,  131 => 47,  128 => 46,  125 => 45,  122 => 44,  115 => 42,  111 => 41,  108 => 40,  104 => 38,  102 => 37,  98 => 35,  90 => 32,  87 => 31,  84 => 30,  81 => 29,  78 => 27,  76 => 26,  72 => 24,  64 => 21,  61 => 20,  58 => 19,  55 => 18,  52 => 16,  50 => 15,  45 => 12,  43 => 11,);
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
{% if pages.pageCount > 1 %}
    <ul class=\"pagination col-auto\">

        <!-- 最初へ -->
        {% if pages.firstPageInRange != 1 %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': pages.first}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">{{ 'admin.common.first'|trans }}</a></li>

        {% endif %}

        <!-- 前へ -->
        {% if pages.previous is defined %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': pages.previous}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">{{ 'admin.common.prev'|trans }}</a>
            </li>
        {% endif %}

        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        {% if pages.firstPageInRange != 1 %}
            <li class=\"page-item\">...</li>
        {% endif %}

        {% for page in pages.pagesInRange %}
            <li class=\"page-item{% if page == pages.current %} active{% endif %}\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': page}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">
                    {{ page }}
                </a>
            </li>
        {% endfor %}

        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"page-item\">...</li>
        {% endif %}

        <!-- 次へ -->
        {% if pages.next is defined %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': pages.next}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">{{ 'admin.common.next'|trans }}</a>
            </li>
        {% endif %}

        <!-- 最後へ -->
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"page-item\">
                {# FIXME: Need check pass routes before use default _route from request #}
                {% set request = app.request.query.all|merge({'page_no': pages.last}) %}
                {% set request = id is defined ? request|merge({'id': id}) : request %}
                <a class=\"page-link\"
                   href=\"{{ path(routes ? routes : app.request.attributes.get('_route'), request) }}\">{{ 'admin.common.last'|trans }}</a></li>
        {% endif %}

    </ul>
{% endif %}
", "@admin/pager.twig", "C:\\xampp\\htdocs\\coolShoes\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\pager.twig");
    }
}
