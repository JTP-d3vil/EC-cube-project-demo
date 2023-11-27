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

/* @admin/Product/category.twig */
class __TwigTemplate_20352cade4d52f446d53b39d863154a9e8d6c8ad7261fb5ba61cb0ec9d5bd4af extends \Eccube\Twig\Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/category.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/category.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "class_category"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/category.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
        
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
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.action-up').removeClass('disabled');
                items.find('a.action-down').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            var groupItem = \$('.list-group-item');
            groupItem.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            groupItem.on('click', 'button.action-edit-cancel', function(e) {
                location.href = \"";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        } elseif ((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 97, $this->source); })())) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        }
        echo "\";
            });

            groupItem.find('.is-invalid').each(function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 121
        echo "    ";
        // line 122
        echo "    <style>
        .c-directoryTree ul > li > ul li:not(:last-of-type) > label:before,
        .c-directoryTree ul > li > ul li:last-of-type > label:before {
            margin-right: 1.6em;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 131
        echo "    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb mb-2 p-0\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        echo "\">
                                    ";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_all"), "html", null, true);
        echo "
                                </a>
                            </li>
                            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 142, $this->source); })()), "path", [], "any", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["ParentCategory"]) {
            // line 143
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 143))) {
                // line 144
                echo "                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 145)]), "html", null, true);
                echo "\">
                                            ";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "name", [], "any", false, false, false, 146), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            // line 150
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ParentCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                        </ol>
                    </nav>
                </div>
                <div class=\"col-6 text-end\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_export");
        echo "\">
                            <i class=\"fa fa-cloud-download me-1 text-secondary\"></i>
                            <span>";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
        echo "</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY")]), "html", null, true);
        echo "\">
                            <i class=\"fa fa-cog me-1 text-secondary\"></i>
                            <span>";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div id=\"ex-primaryCol\" class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\"
                                          action=\"";
        // line 178
        if (twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178)]), "html", null, true);
        } elseif ((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 178, $this->source); })())) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178)]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        }
        echo "\"
                                          enctype=\"multipart/form-data\">
                                        ";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 180, $this->source); })()), "hierarchy", [], "any", false, false, false, 180) <= twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 180, $this->source); })()), "eccube_category_nest_level", [], "any", false, false, false, 180))) {
            // line 181
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "_token", [], "any", false, false, false, 181), 'widget');
            echo "
                                            <div class=\"row mb-3\">
                                                <div class=\"col-auto\">
                                                    ";
            // line 184
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "name", [], "any", false, false, false, 184), 'widget');
            echo "
                                                    ";
            // line 185
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "name", [], "any", false, false, false, 185), 'errors');
            echo "
                                                </div>
                                                <div class=\"col-auto\">
                                                    <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                        ";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
            echo "
                                                    </button>
                                                </div>
                                            </div>
                                            ";
            // line 194
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 194), "eccube_form_options", [], "any", false, false, false, 194), "auto_render", [], "any", false, false, false, 194); }));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 195
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 195), "eccube_form_options", [], "any", false, false, false, 195), "form_theme", [], "any", false, false, false, 195)) {
                    // line 196
                    echo "                                                    ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 196), "eccube_form_options", [], "any", false, false, false, 196), "form_theme", [], "any", false, false, false, 196)], true);
                    // line 197
                    echo "                                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                                ";
                } else {
                    // line 199
                    echo "                                                    <div class=\"row mb-3\">
                                                        <div class=\"col-3\">
                                                            <span>";
                    // line 201
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 201), "label", [], "any", false, false, false, 201)), "html", null, true);
                    echo "</span>
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
                    // line 204
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                            ";
                    // line 205
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 209
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                                        ";
        }
        // line 211
        echo "                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                        <div class=\"col-2\"><strong>";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category"), "html", null, true);
        echo "</strong></div>
                                    </div>
                                </li>
                                ";
        // line 220
        if ((twig_length_filter($this->env, (isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 220, $this->source); })())) > 0)) {
            // line 221
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 221, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 222
                echo "                                        <li id=\"ex-category-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 222), "html", null, true);
                echo "\" class=\"list-group-item sortable-item\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 222), "html", null, true);
                echo "\" data-sort-no=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "sort_no", [], "any", false, false, false, 222), "html", null, true);
                echo "\">
                                            ";
                // line 223
                if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 223) != twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 223, $this->source); })()), "id", [], "any", false, false, false, 223))) {
                    // line 224
                    echo "                                                <div class=\"row justify-content-around mode-view ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["error_forms"]) || array_key_exists("error_forms", $context) ? $context["error_forms"] : (function () { throw new RuntimeError('Variable "error_forms" does not exist.', 224, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 224), [], "array", false, false, false, 224), "count", [], "any", false, false, false, 224)) {
                        echo " d-none ";
                    }
                    echo "\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">";
                    // line 226
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 226), "html", null, true);
                    echo "</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"";
                    // line 228
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 228)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 228), "html", null, true);
                    echo "</a>
                                                    </div>
                                                    <div class=\"col-auto text-end\">
                                                        <a class=\"btn btn-ec-actionIcon action-up me-2 ";
                    // line 231
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 231)) {
                        echo " disabled ";
                    }
                    echo "\" href=\"\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"";
                    // line 233
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon action-down me-2 ";
                    // line 236
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 236)) {
                        echo " disabled ";
                    }
                    echo "\" href=\"\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon me-2 action-edit\"
                                                           href=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 242)]), "html", null, true);
                    echo "\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"";
                    // line 244
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                             title=\"";
                    // line 248
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon";
                    // line 249
                    if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "Children", [], "any", false, false, false, 249)) > 0) || twig_get_attribute($this->env, $this->source, $context["Category"], "hasProductCategories", [], "any", false, false, false, 249))) {
                        echo " disabled";
                    }
                    echo "\"
                                                               data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                               data-url=\"";
                    // line 251
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 251)]), "html", null, true);
                    echo "\"
                                                               data-message=\"";
                    // line 252
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 252)]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class=\"row  ";
                    // line 258
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["error_forms"]) || array_key_exists("error_forms", $context) ? $context["error_forms"] : (function () { throw new RuntimeError('Variable "error_forms" does not exist.', 258, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 258), [], "array", false, false, false, 258), "count", [], "any", false, false, false, 258) == 0)) {
                        echo " d-none ";
                    }
                    echo " mode-edit\" method=\"POST\" action=\"";
                    ((((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 258, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 258, $this->source); })()), "id", [], "any", false, false, false, 258))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 258, $this->source); })()), "id", [], "any", false, false, false, 258)]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category"))));
                    echo "\" enctype=\"multipart/form-data\">
                                                    ";
                    // line 259
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 259, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 259), [], "array", false, false, false, 259), "_token", [], "any", false, false, false, 259), 'widget');
                    echo "
                                                    <div class=\"col-auto align-items-center\">
                                                        ";
                    // line 261
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 261, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 261), [], "array", false, false, false, 261), "name", [], "any", false, false, false, 261), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 261, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 261), [], "array", false, false, false, 261), "name", [], "any", false, false, false, 261), "vars", [], "any", false, false, false, 261), "value", [], "any", false, false, false, 261)]]);
                    echo "
                                                        ";
                    // line 262
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 262, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 262), [], "array", false, false, false, 262), "name", [], "any", false, false, false, 262), 'errors');
                    echo "
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">";
                    // line 265
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
                    echo "</button>
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
                    // line 268
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                    </div>
                                                    ";
                    // line 271
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 271, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 271), [], "array", false, false, false, 271), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 271), "eccube_form_options", [], "any", false, false, false, 271), "auto_render", [], "any", false, false, false, 271); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 272
                        echo "                                                    <div class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>";
                        // line 275
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 275), "label", [], "any", false, false, false, 275)), "html", null, true);
                        echo "</span>
                                                            </div>
                                                            <div class=\"col-9\">
                                                                ";
                        // line 278
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                                ";
                        // line 279
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 284
                    echo "                                                </form>
                                            ";
                }
                // line 286
                echo "                                        </li>
                                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                                ";
        }
        // line 289
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title fw-bold\">
                                                ";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                            </h5>
                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                            </button>
                                        </div>
                                        <div class=\"modal-body text-start\">
                                            <p class=\"text-start modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                ";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 310
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 347
        echo "
        <div class=\"c-contentsArea__secondaryCol\">
            <div id=\"ex-secondaryCol\" class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\"><a
                                    href=\"";
        // line 353
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_all"), "html", null, true);
        echo "</a></span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"c-directoryTree mb-3\">
                            ";
        // line 357
        $macros["renderMacro"] = $this;
        // line 358
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 358, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 359
            echo "                                <ul class=\"list-unstyled\">
                                    ";
            // line 360
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [$context["TopCategory"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 360), "id", [], "any", true, true, false, 360)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 360), "id", [], "any", false, false, false, 360), null)) : (null)), 0, (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 360, $this->source); })())], 360, $context, $this->getSourceContext());
            echo "
                                </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 325
    public function macro_tree($__Category__ = null, $__TargetId__ = null, $__level__ = null, $__Ids__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "TargetId" => $__TargetId__,
            "level" => $__level__,
            "Ids" => $__Ids__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 326
            echo "            ";
            $macros["selfMacro"] = $this;
            // line 327
            echo "            ";
            $context["level"] = ((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 327, $this->source); })()) + 1);
            // line 328
            echo "            <li>
                <label ";
            // line 329
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 329, $this->source); })()), "children", [], "any", false, false, false, 329)) > 0) && !twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 329, $this->source); })()), "id", [], "any", false, false, false, 329), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 329, $this->source); })())))) {
                echo "class=\"collapsed\"
                       ";
            }
            // line 330
            echo "data-bs-toggle=\"collapse\"
                       href=\"#directory_category";
            // line 331
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 331, $this->source); })()), "id", [], "any", false, false, false, 331), "html", null, true);
            echo "\"
                       aria-expanded=\"";
            // line 332
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 332, $this->source); })()), "id", [], "any", false, false, false, 332), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 332, $this->source); })()))) {
                echo "true";
            }
            echo "\"
                       aria-controls=\"directory_category";
            // line 333
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 333, $this->source); })()), "id", [], "any", false, false, false, 333), "html", null, true);
            echo "\"></label>
                <span>
                    <a href=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 335, $this->source); })()), "id", [], "any", false, false, false, 335)]), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 335, $this->source); })()), "id", [], "any", false, false, false, 335) == (isset($context["TargetId"]) || array_key_exists("TargetId", $context) ? $context["TargetId"] : (function () { throw new RuntimeError('Variable "TargetId" does not exist.', 335, $this->source); })()))) {
                echo " class=\"fw-bold\"";
            }
            echo ">ID:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 335, $this->source); })()), "id", [], "any", false, false, false, 335), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 335, $this->source); })()), "name", [], "any", false, false, false, 335), "html", null, true);
            echo "
                        (";
            // line 336
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 336, $this->source); })()), "children", [], "any", false, false, false, 336)), "html", null, true);
            echo ")</a></span>
                ";
            // line 337
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 337, $this->source); })()), "children", [], "any", false, false, false, 337)) > 0)) {
                // line 338
                echo "                    <ul class=\"collapse list-unstyled ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 338, $this->source); })()), "id", [], "any", false, false, false, 338), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 338, $this->source); })()))) {
                    echo "show";
                }
                echo "\"
                        id=\"directory_category";
                // line 339
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 339, $this->source); })()), "id", [], "any", false, false, false, 339), "html", null, true);
                echo "\">
                        ";
                // line 340
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 340, $this->source); })()), "children", [], "any", false, false, false, 340));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 341
                    echo "                            ";
                    echo twig_call_macro($macros["selfMacro"], "macro_tree", [$context["ChildCategory"], (isset($context["TargetId"]) || array_key_exists("TargetId", $context) ? $context["TargetId"] : (function () { throw new RuntimeError('Variable "TargetId" does not exist.', 341, $this->source); })()), (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 341, $this->source); })()), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 341, $this->source); })())], 341, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 343
                echo "                    </ul>
                ";
            }
            // line 345
            echo "            </li>
        ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@admin/Product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  868 => 345,  864 => 343,  855 => 341,  851 => 340,  847 => 339,  840 => 338,  838 => 337,  834 => 336,  822 => 335,  817 => 333,  811 => 332,  807 => 331,  804 => 330,  799 => 329,  796 => 328,  793 => 327,  790 => 326,  768 => 325,  752 => 363,  743 => 360,  740 => 359,  735 => 358,  733 => 357,  724 => 353,  716 => 347,  709 => 321,  697 => 312,  692 => 310,  687 => 308,  673 => 297,  663 => 289,  660 => 288,  645 => 286,  641 => 284,  630 => 279,  626 => 278,  620 => 275,  615 => 272,  610 => 271,  605 => 268,  599 => 265,  593 => 262,  589 => 261,  584 => 259,  576 => 258,  567 => 252,  563 => 251,  556 => 249,  552 => 248,  545 => 244,  540 => 242,  533 => 238,  526 => 236,  520 => 233,  513 => 231,  505 => 228,  500 => 226,  492 => 224,  490 => 223,  481 => 222,  463 => 221,  461 => 220,  455 => 217,  451 => 216,  444 => 211,  441 => 210,  435 => 209,  428 => 205,  424 => 204,  418 => 201,  414 => 199,  408 => 197,  405 => 196,  402 => 195,  397 => 194,  390 => 189,  383 => 185,  379 => 184,  372 => 181,  370 => 180,  359 => 178,  340 => 162,  335 => 160,  330 => 158,  325 => 156,  318 => 151,  312 => 150,  305 => 146,  301 => 145,  298 => 144,  295 => 143,  291 => 142,  285 => 139,  281 => 138,  272 => 131,  262 => 130,  246 => 122,  244 => 121,  234 => 120,  196 => 97,  136 => 40,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['product', 'class_category'] %}

{% block title %}{{ 'admin.product.category_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '{{ url('admin_product_category_sort_no_move') }}',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.action-up').removeClass('disabled');
                items.find('a.action-down').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            var groupItem = \$('.list-group-item');
            groupItem.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            groupItem.on('click', 'button.action-edit-cancel', function(e) {
                location.href = \"{% if TargetCategory.id %}{{ url('admin_product_category_edit', {id: TargetCategory.id}) }}{% elseif Parent %}{{ url('admin_product_category_show', {'parent_id': Parent.id}) }}{% else %}{{ url('admin_product_category') }}{% endif %}\";
            });

            groupItem.find('.is-invalid').each(function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
{% endblock %}

{% block stylesheet %}
    {#TODO: Move to css file#}
    <style>
        .c-directoryTree ul > li > ul li:not(:last-of-type) > label:before,
        .c-directoryTree ul > li > ul li:last-of-type > label:before {
            margin-right: 1.6em;
        }
    </style>
{% endblock %}

{% block main %}
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb mb-2 p-0\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ url('admin_product_category') }}\">
                                    {{ 'admin.product.category_all'|trans }}
                                </a>
                            </li>
                            {% for ParentCategory in TargetCategory.path %}
                                {% if ParentCategory.id is not null %}
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"{{ url('admin_product_category_show', { parent_id : ParentCategory.id }) }}\">
                                            {{ ParentCategory.name }}
                                        </a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ol>
                    </nav>
                </div>
                <div class=\"col-6 text-end\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_category_export') }}\">
                            <i class=\"fa fa-cloud-download me-1 text-secondary\"></i>
                            <span>{{ 'admin.common.csv_download'|trans }}</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CATEGORY') }) }}\">
                            <i class=\"fa fa-cog me-1 text-secondary\"></i>
                            <span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div id=\"ex-primaryCol\" class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\"
                                          action=\"{% if TargetCategory.id %}{{ path('admin_product_category_edit', {id: TargetCategory.id}) }}{% elseif Parent %}{{ url('admin_product_category_show', {'parent_id': Parent.id}) }}{% else %}{{ url('admin_product_category') }}{% endif %}\"
                                          enctype=\"multipart/form-data\">
                                        {% if TargetCategory.hierarchy <= eccube_config.eccube_category_nest_level %}
                                            {{ form_widget(form._token) }}
                                            <div class=\"row mb-3\">
                                                <div class=\"col-auto\">
                                                    {{ form_widget(form.name) }}
                                                    {{ form_errors(form.name) }}
                                                </div>
                                                <div class=\"col-auto\">
                                                    <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                        {{ 'admin.common.create__new'|trans }}
                                                    </button>
                                                </div>
                                            </div>
                                            {# エンティティ拡張の自動出力 #}
                                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                                {% if f.vars.eccube_form_options.form_theme %}
                                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                                    {{ form_row(f) }}
                                                {% else %}
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col-3\">
                                                            <span>{{ f.vars.label|trans }}</span>
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(f) }}
                                                            {{ form_errors(f) }}
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>{{ 'admin.common.id'|trans }}</strong></div>
                                        <div class=\"col-2\"><strong>{{ 'admin.product.category'|trans }}</strong></div>
                                    </div>
                                </li>
                                {% if Categories|length > 0 %}
                                    {% for Category in Categories %}
                                        <li id=\"ex-category-{{ Category.id }}\" class=\"list-group-item sortable-item\" data-id=\"{{ Category.id }}\" data-sort-no=\"{{ Category.sort_no }}\">
                                            {% if Category.id != TargetCategory.id %}
                                                <div class=\"row justify-content-around mode-view {% if error_forms[Category.id].count %} d-none {% endif %}\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">{{ Category.id }}</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"{{ url('admin_product_category_show',  { parent_id : Category.id }) }}\">{{ Category.name }}</a>
                                                    </div>
                                                    <div class=\"col-auto text-end\">
                                                        <a class=\"btn btn-ec-actionIcon action-up me-2 {% if loop.first %} disabled {% endif %}\" href=\"\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"{{ 'admin.common.up'|trans }}\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon action-down me-2 {% if loop.last %} disabled {% endif %}\" href=\"\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"{{ 'admin.common.down'|trans }}\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon me-2 action-edit\"
                                                           href=\"{{ url('admin_product_category_edit', {id: Category.id}) }}\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                           title=\"{{ 'admin.common.edit'|trans }}\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                             title=\"{{ 'admin.common.delete'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon{% if Category.Children|length > 0 or Category.hasProductCategories %} disabled{% endif %}\"
                                                               data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                               data-url=\"{{ url('admin_product_category_delete', {id: Category.id}) }}\"
                                                               data-message=\"{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : Category.name }) }}\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class=\"row  {% if error_forms[Category.id].count == 0 %} d-none {% endif %} mode-edit\" method=\"POST\" action=\"{{ (Parent and Parent.id) ? url('admin_product_category_show', {'parent_id': Parent.id}) : url('admin_product_category') }}\" enctype=\"multipart/form-data\">
                                                    {{ form_widget(forms[Category.id]._token) }}
                                                    <div class=\"col-auto align-items-center\">
                                                        {{ form_widget(forms[Category.id].name, {'attr': {'data-origin-value': forms[Category.id].name.vars.value}}) }}
                                                        {{ form_errors(forms[Category.id].name) }}
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">{{ 'admin.common.decision'|trans }}</button>
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">{{ 'admin.common.cancel'|trans }}</button>
                                                    </div>
                                                    {# エンティティ拡張の自動出力 #}
                                                    {% for f in forms[Category.id]|filter(f => f.vars.eccube_form_options.auto_render) %}
                                                    <div class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>{{ f.vars.label|trans }}</span>
                                                            </div>
                                                            <div class=\"col-9\">
                                                                {{ form_widget(f) }}
                                                                {{ form_errors(f) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {% endfor %}
                                                </form>
                                            {% endif %}
                                        </li>
                                    {% endfor %}
                                {% endif %}
                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title fw-bold\">
                                                {{ 'admin.common.delete_modal__title'|trans }}
                                            </h5>
                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                            </button>
                                        </div>
                                        <div class=\"modal-body text-start\">
                                            <p class=\"text-start modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                {{ 'admin.common.cancel'|trans }}
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" {{ csrf_token_for_anchor() }}
                                               data-method=\"delete\" data-confirm=\"false\">
                                                {{ 'admin.common.delete'|trans }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>{{ 'admin.common.drag_and_drop_description'|trans }}</p>
            </div>
        </div>

        {% macro tree(Category, TargetId, level, Ids) %}
            {% import _self as selfMacro %}
            {% set level = level + 1 %}
            <li>
                <label {% if (Category.children|length > 0) and (Category.id not in Ids) %}class=\"collapsed\"
                       {% endif %}data-bs-toggle=\"collapse\"
                       href=\"#directory_category{{ Category.id }}\"
                       aria-expanded=\"{% if Category.id in Ids %}true{% endif %}\"
                       aria-controls=\"directory_category{{ Category.id }}\"></label>
                <span>
                    <a href=\"{{ url('admin_product_category_show', { parent_id : Category.id }) }}\"{%if (Category.id == TargetId) %} class=\"fw-bold\"{% endif %}>ID:{{ Category.id }} {{ Category.name }}
                        ({{ Category.children|length }})</a></span>
                {% if Category.children|length > 0 %}
                    <ul class=\"collapse list-unstyled {% if Category.id in Ids %}show{% endif %}\"
                        id=\"directory_category{{ Category.id }}\">
                        {% for ChildCategory in Category.children %}
                            {{ selfMacro.tree(ChildCategory, TargetId, level, Ids) }}
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endmacro %}

        <div class=\"c-contentsArea__secondaryCol\">
            <div id=\"ex-secondaryCol\" class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\"><a
                                    href=\"{{ url('admin_product_category') }}\">{{ 'admin.product.category_all'|trans }}</a></span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"c-directoryTree mb-3\">
                            {% import _self as renderMacro %}
                            {% for TopCategory in TopCategories %}
                                <ul class=\"list-unstyled\">
                                    {{ renderMacro.tree(TopCategory, TargetCategory.Parent.id | default(null), 0, Ids) }}
                                </ul>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Product/category.twig", "C:\\xampp\\htdocs\\coolShoes\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\Product\\category.twig");
    }
}