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

/* @admin/Setting/Shop/csv.twig */
class __TwigTemplate_483822e7b8114827752144ab324c6ecc55d896f9c3f4de8dded8ac2d77fe5c4d extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/csv.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/csv.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_csv"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/csv.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "    <script>
        \$(function() {

            \$(window).on('pageshow', function() {
                var tmp_select =  \$('#csv-type[name=\"form[csv_type]\"] option[selected]').val();
                \$('#csv-type[name=\"form[csv_type]\"]').val(tmp_select);
            });

            function add(event) {
                \$('#' + event.data.from + ' option:selected')
                    .appendTo(\$('#' + event.data.to))
                    .prop('selected', false);
            }

            function addAll(event) {
                \$('#' + event.data.from + ' option').each(function() {
                    \$(this).appendTo(\$('#' + event.data.to));
                    \$(this).prop('selected', false);// 選択状態の解除
                });
            }

            \$('#add').on('click', {from: 'csv-not-output', to: 'csv-output'}, add);
            \$('#add-all').on('click', {from: 'csv-not-output', to: 'csv-output'}, addAll);
            \$('#remove').on('click', {from: 'csv-output', to: 'csv-not-output'}, add);
            \$('#remove-all').on('click', {from: 'csv-output', to: 'csv-not-output'}, addAll);

            \$('.move').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'up' ? \$op.first().prev().before(\$op) : \$op.last().next().after(\$op);
                }
            });

            \$('.move-most').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'top' ? \$op.prependTo('#csv-output') : \$op.appendTo('#csv-output');
                }
            });

            \$('#csv-type').on('change', function() {
                var id = \$(this).val();
                var href = '";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv");
        echo "' + '/' + id;
                location.href = href;
                return false;
            });

            \$('#csv-form').submit(function() {
                \$('#csv-not-output').children().prop('selected', true);
                \$('#csv-output').children().prop('selected', true);
            })
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 79
        echo "    <form id=\"csv-form\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 79, $this->source); })())]), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
        echo "\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.csv.csv_columns"), "html", null, true);
        echo "\">
                                <span>";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.csv_columns"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row mb-4 justify-content-between\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.csv.csv_type"), "html", null, true);
        echo "\">
                                        <span>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.csv_type"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "csv_type", [], "any", false, false, false, 99), 'widget', ["id" => "csv-type"]);
        echo "
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-4\">
                                    <div class=\"mb-3\">
                                        <label for=\"FormControlSelect1\">";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.non_output_colmuns"), "html", null, true);
        echo "</label>
                                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "csv_not_output", [], "any", false, false, false, 107), 'widget', ["id" => "csv-not-output", "attr" => ["size" => "30"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation"), "html", null, true);
        echo "</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100\" id=\"add\"><i class=\"fa fa-arrow-right\"
                                                                                                  aria-hidden=\"true\"></i><span>&nbsp;";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__output"), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100\" id=\"remove\"><i class=\"fa fa-arrow-left\"
                                                                                                     aria-hidden=\"true\"><span>&nbsp;";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__release"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100\" id=\"add-all\"><i
                                                        class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"><span>&nbsp;";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__all_output"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100\" id=\"remove-all\"><i class=\"fa fa-arrow-circle-left\"
                                                                                                         aria-hidden=\"true\"><span>&nbsp;";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__all_release"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"mb-3\">
                                        <label for=\"FormControlSelect2\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.output_colmuns"), "html", null, true);
        echo "</label>
                                        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "csv_output", [], "any", false, false, false, 146), 'widget', ["id" => "csv-output", "attr" => ["size" => "30"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order"), "html", null, true);
        echo "</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100 move\" data-value=\"up\"><i class=\"fa fa-arrow-up\"
                                                                                                              aria-hidden=\"true\"><span>&nbsp;";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__up"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100 move\" data-value=\"down\"><i class=\"fa fa-arrow-down\"
                                                                                                                aria-hidden=\"true\"><span>&nbsp;";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__down"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100 move-most\" data-value=\"top\"><i class=\"fa fa-arrow-circle-up\"
                                                                                                                    aria-hidden=\"true\"><span>&nbsp;";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__top"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100 move-most\" data-value=\"bottom\"><i class=\"fa fa-arrow-circle-down\"
                                                                                                                       aria-hidden=\"true\"><span>&nbsp;";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__bottom"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            ";
        // line 184
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.how_to_use"), "html", null, true));
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/csv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 200,  361 => 184,  351 => 177,  341 => 170,  331 => 163,  321 => 156,  313 => 151,  305 => 146,  301 => 145,  291 => 138,  281 => 131,  271 => 124,  261 => 117,  253 => 112,  245 => 107,  241 => 106,  231 => 99,  223 => 94,  219 => 93,  210 => 87,  206 => 86,  197 => 80,  192 => 79,  182 => 78,  160 => 65,  114 => 21,  104 => 20,  85 => 16,  66 => 15,  55 => 11,  53 => 18,  51 => 13,  38 => 11,);
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
{% extends '@admin/default_frame.twig' %}

{% set menus = ['setting', 'shop', 'shop_csv'] %}

{% block title %}{{ 'admin.setting.shop.csv_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(function() {

            \$(window).on('pageshow', function() {
                var tmp_select =  \$('#csv-type[name=\"form[csv_type]\"] option[selected]').val();
                \$('#csv-type[name=\"form[csv_type]\"]').val(tmp_select);
            });

            function add(event) {
                \$('#' + event.data.from + ' option:selected')
                    .appendTo(\$('#' + event.data.to))
                    .prop('selected', false);
            }

            function addAll(event) {
                \$('#' + event.data.from + ' option').each(function() {
                    \$(this).appendTo(\$('#' + event.data.to));
                    \$(this).prop('selected', false);// 選択状態の解除
                });
            }

            \$('#add').on('click', {from: 'csv-not-output', to: 'csv-output'}, add);
            \$('#add-all').on('click', {from: 'csv-not-output', to: 'csv-output'}, addAll);
            \$('#remove').on('click', {from: 'csv-output', to: 'csv-not-output'}, add);
            \$('#remove-all').on('click', {from: 'csv-output', to: 'csv-not-output'}, addAll);

            \$('.move').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'up' ? \$op.first().prev().before(\$op) : \$op.last().next().after(\$op);
                }
            });

            \$('.move-most').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'top' ? \$op.prependTo('#csv-output') : \$op.appendTo('#csv-output');
                }
            });

            \$('#csv-type').on('change', function() {
                var id = \$(this).val();
                var href = '{{ url('admin_setting_shop_csv') }}' + '/' + id;
                location.href = href;
                return false;
            });

            \$('#csv-form').submit(function() {
                \$('#csv-not-output').children().prop('selected', true);
                \$('#csv-output').children().prop('selected', true);
            })
        });
    </script>
{% endblock javascript %}

{% block main %}
    <form id=\"csv-form\" method=\"post\" action=\"{{ url('admin_setting_shop_csv', {'id': id}) }}\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('_token') }}\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.csv.csv_columns'|trans }}\">
                                <span>{{ 'admin.setting.shop.csv.csv_columns'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row mb-4 justify-content-between\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.csv.csv_type'|trans }}\">
                                        <span>{{ 'admin.setting.shop.csv.csv_type'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    {{ form_widget(form.csv_type, {'id': 'csv-type'}) }}
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-4\">
                                    <div class=\"mb-3\">
                                        <label for=\"FormControlSelect1\">{{ 'admin.setting.shop.csv.non_output_colmuns'|trans }}</label>
                                        {{ form_widget(form.csv_not_output, {'id': 'csv-not-output', 'attr': {'size': '30'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>{{ 'admin.setting.shop.csv.operation'|trans }}</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100\" id=\"add\"><i class=\"fa fa-arrow-right\"
                                                                                                  aria-hidden=\"true\"></i><span>&nbsp;{{ 'admin.setting.shop.csv.operation__output'|trans }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100\" id=\"remove\"><i class=\"fa fa-arrow-left\"
                                                                                                     aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.operation__release'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100\" id=\"add-all\"><i
                                                        class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.operation__all_output'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100\" id=\"remove-all\"><i class=\"fa fa-arrow-circle-left\"
                                                                                                         aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.operation__all_release'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"mb-3\">
                                        <label for=\"FormControlSelect2\">{{ 'admin.setting.shop.csv.output_colmuns'|trans }}</label>
                                        {{ form_widget(form.csv_output, {'id': 'csv-output', 'attr': {'size': '30'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>{{ 'admin.setting.shop.csv.order'|trans }}</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100 move\" data-value=\"up\"><i class=\"fa fa-arrow-up\"
                                                                                                              aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.order__up'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100 move\" data-value=\"down\"><i class=\"fa fa-arrow-down\"
                                                                                                                aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.order__down'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100 move-most\" data-value=\"top\"><i class=\"fa fa-arrow-circle-up\"
                                                                                                                    aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.order__top'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular w-100 move-most\" data-value=\"bottom\"><i class=\"fa fa-arrow-circle-down\"
                                                                                                                       aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.order__bottom'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            {{ 'admin.setting.shop.csv.how_to_use'|trans|nl2br }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Setting/Shop/csv.twig", "C:\\xampp\\htdocs\\coolShoes\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\csv.twig");
    }
}
