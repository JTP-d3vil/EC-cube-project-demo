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
class __TwigTemplate_d0bc690b7c6ba0c88805aed58423129aa95e6de3373b0f7caf687e6599361951 extends \Eccube\Twig\Template
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
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pageCount", [], "any", false, false, false, 11) > 1)) {
            // line 12
            echo "    <ul class=\"pagination col-auto\">

        <!-- 最初へ -->
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, false, 15) != 1)) {
                // line 16
                echo "            <li class=\"page-item\">
                ";
                // line 18
                echo "                ";
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "all", [], "any", false, false, false, 18), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "first", [], "any", false, false, false, 18)]);
                // line 19
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge(($context["request"] ?? null), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 20
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", [0 => "_route"], "method", false, false, false, 21))), ($context["request"] ?? null)), "html", null, true);
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
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "query", [], "any", false, false, false, 29), "all", [], "any", false, false, false, 29), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", false, false, false, 29)]);
                // line 30
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge(($context["request"] ?? null), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 31
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32))), ($context["request"] ?? null)), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, false, 37) != 1)) {
                // line 38
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 40
            echo "
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pagesInRange", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "current", [], "any", false, false, false, 42))) {
                    echo " active";
                }
                echo "\">
                ";
                // line 44
                echo "                ";
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "all", [], "any", false, false, false, 44), ["page_no" => $context["page"]]);
                // line 45
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge(($context["request"] ?? null), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 46
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", [0 => "_route"], "method", false, false, false, 47))), ($context["request"] ?? null)), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, false, 54) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, false, 54))) {
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
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "query", [], "any", false, false, false, 62), "all", [], "any", false, false, false, 62), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", false, false, false, 62)]);
                // line 63
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge(($context["request"] ?? null), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 64
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", [0 => "_route"], "method", false, false, false, 65))), ($context["request"] ?? null)), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, false, 70) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, false, 70))) {
                // line 71
                echo "            <li class=\"page-item\">
                ";
                // line 73
                echo "                ";
                $context["request"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 73), "query", [], "any", false, false, false, 73), "all", [], "any", false, false, false, 73), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, false, 73)]);
                // line 74
                echo "                ";
                $context["request"] = ((array_key_exists("id", $context)) ? (twig_array_merge(($context["request"] ?? null), ["id" => ($context["id"] ?? null)])) : (($context["request"] ?? null)));
                // line 75
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", [0 => "_route"], "method", false, false, false, 76))), ($context["request"] ?? null)), "html", null, true);
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
        return array (  200 => 78,  193 => 76,  190 => 75,  187 => 74,  184 => 73,  181 => 71,  179 => 70,  175 => 68,  167 => 65,  164 => 64,  161 => 63,  158 => 62,  155 => 60,  153 => 59,  149 => 57,  145 => 55,  143 => 54,  139 => 52,  129 => 48,  125 => 47,  122 => 46,  119 => 45,  116 => 44,  109 => 42,  105 => 41,  102 => 40,  98 => 38,  96 => 37,  92 => 35,  84 => 32,  81 => 31,  78 => 30,  75 => 29,  72 => 27,  70 => 26,  66 => 24,  58 => 21,  55 => 20,  52 => 19,  49 => 18,  46 => 16,  44 => 15,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/pager.twig", "C:\\xampp\\htdocs\\coolShoes\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\pager.twig");
    }
}
