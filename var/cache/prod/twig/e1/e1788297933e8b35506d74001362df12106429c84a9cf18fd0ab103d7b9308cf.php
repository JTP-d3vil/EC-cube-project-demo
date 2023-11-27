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
class __TwigTemplate_3f9a8e049d2d974c8ef69706ff139c12c489c0571be70d622274638a98a87ebd extends \Eccube\Twig\Template
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
        // line 13
        $context["menus"] = [0 => "product", 1 => "class_category"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/category.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_sort_no_move");
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
        if (twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 97)) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 97)]), "html", null, true);
        } elseif (($context["Parent"] ?? null)) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, ($context["Parent"] ?? null), "id", [], "any", false, false, false, 97)]), "html", null, true);
        } else {
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category");
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
    }

    // line 120
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 130
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category");
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "path", [], "any", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["ParentCategory"]) {
            // line 143
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 143))) {
                // line 144
                echo "                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 145)]), "html", null, true);
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_export");
        echo "\">
                            <i class=\"fa fa-cloud-download me-1 text-secondary\"></i>
                            <span>";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
        echo "</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY")]), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 178)) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 178)]), "html", null, true);
        } elseif (($context["Parent"] ?? null)) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, ($context["Parent"] ?? null), "id", [], "any", false, false, false, 178)]), "html", null, true);
        } else {
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category");
        }
        echo "\"
                                          enctype=\"multipart/form-data\">
                                        ";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "hierarchy", [], "any", false, false, false, 180) <= twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_category_nest_level", [], "any", false, false, false, 180))) {
            // line 181
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 181), 'widget');
            echo "
                                            <div class=\"row mb-3\">
                                                <div class=\"col-auto\">
                                                    ";
            // line 184
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 184), 'widget');
            echo "
                                                    ";
            // line 185
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 185), 'errors');
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
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 194), "eccube_form_options", [], "any", false, false, false, 194), "auto_render", [], "any", false, false, false, 194); }));
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
        if ((twig_length_filter($this->env, ($context["Categories"] ?? null)) > 0)) {
            // line 221
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
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
                if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 223) != twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 223))) {
                    // line 224
                    echo "                                                <div class=\"row justify-content-around mode-view ";
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["error_forms"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 224)] ?? null) : null), "count", [], "any", false, false, false, 224)) {
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
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 228)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 242)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 251)]), "html", null, true);
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
                    if ((twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["error_forms"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 258)] ?? null) : null), "count", [], "any", false, false, false, 258) == 0)) {
                        echo " d-none ";
                    }
                    echo " mode-edit\" method=\"POST\" action=\"";
                    (((($context["Parent"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["Parent"] ?? null), "id", [], "any", false, false, false, 258))) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, ($context["Parent"] ?? null), "id", [], "any", false, false, false, 258)]), "html", null, true))) : (print ($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category"))));
                    echo "\" enctype=\"multipart/form-data\">
                                                    ";
                    // line 259
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["forms"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 259)] ?? null) : null), "_token", [], "any", false, false, false, 259), 'widget');
                    echo "
                                                    <div class=\"col-auto align-items-center\">
                                                        ";
                    // line 261
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["forms"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 261)] ?? null) : null), "name", [], "any", false, false, false, 261), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["forms"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 261)] ?? null) : null), "name", [], "any", false, false, false, 261), "vars", [], "any", false, false, false, 261), "value", [], "any", false, false, false, 261)]]);
                    echo "
                                                        ";
                    // line 262
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["forms"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 262)] ?? null) : null), "name", [], "any", false, false, false, 262), 'errors');
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
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (($__internal_compile_6 = ($context["forms"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 271)] ?? null) : null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 271), "eccube_form_options", [], "any", false, false, false, 271), "auto_render", [], "any", false, false, false, 271); }));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category");
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
        $context['_seq'] = twig_ensure_traversable(($context["TopCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 359
            echo "                                <ul class=\"list-unstyled\">
                                    ";
            // line 360
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [$context["TopCategory"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 360), "id", [], "any", true, true, false, 360)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 360), "id", [], "any", false, false, false, 360), null)) : (null)), 0, ($context["Ids"] ?? null)], 360, $context, $this->getSourceContext());
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

        ob_start(function () { return ''; });
        try {
            // line 326
            echo "            ";
            $macros["selfMacro"] = $this;
            // line 327
            echo "            ";
            $context["level"] = (($context["level"] ?? null) + 1);
            // line 328
            echo "            <li>
                <label ";
            // line 329
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 329)) > 0) && !twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 329), ($context["Ids"] ?? null)))) {
                echo "class=\"collapsed\"
                       ";
            }
            // line 330
            echo "data-bs-toggle=\"collapse\"
                       href=\"#directory_category";
            // line 331
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 331), "html", null, true);
            echo "\"
                       aria-expanded=\"";
            // line 332
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 332), ($context["Ids"] ?? null))) {
                echo "true";
            }
            echo "\"
                       aria-controls=\"directory_category";
            // line 333
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 333), "html", null, true);
            echo "\"></label>
                <span>
                    <a href=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 335)]), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 335) == ($context["TargetId"] ?? null))) {
                echo " class=\"fw-bold\"";
            }
            echo ">ID:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 335), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 335), "html", null, true);
            echo "
                        (";
            // line 336
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 336)), "html", null, true);
            echo ")</a></span>
                ";
            // line 337
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 337)) > 0)) {
                // line 338
                echo "                    <ul class=\"collapse list-unstyled ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 338), ($context["Ids"] ?? null))) {
                    echo "show";
                }
                echo "\"
                        id=\"directory_category";
                // line 339
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 339), "html", null, true);
                echo "\">
                        ";
                // line 340
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 340));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 341
                    echo "                            ";
                    echo twig_call_macro($macros["selfMacro"], "macro_tree", [$context["ChildCategory"], ($context["TargetId"] ?? null), ($context["level"] ?? null), ($context["Ids"] ?? null)], 341, $context, $this->getSourceContext());
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
        return array (  790 => 345,  786 => 343,  777 => 341,  773 => 340,  769 => 339,  762 => 338,  760 => 337,  756 => 336,  744 => 335,  739 => 333,  733 => 332,  729 => 331,  726 => 330,  721 => 329,  718 => 328,  715 => 327,  712 => 326,  696 => 325,  686 => 363,  677 => 360,  674 => 359,  669 => 358,  667 => 357,  658 => 353,  650 => 347,  643 => 321,  631 => 312,  626 => 310,  621 => 308,  607 => 297,  597 => 289,  594 => 288,  579 => 286,  575 => 284,  564 => 279,  560 => 278,  554 => 275,  549 => 272,  544 => 271,  539 => 268,  533 => 265,  527 => 262,  523 => 261,  518 => 259,  510 => 258,  501 => 252,  497 => 251,  490 => 249,  486 => 248,  479 => 244,  474 => 242,  467 => 238,  460 => 236,  454 => 233,  447 => 231,  439 => 228,  434 => 226,  426 => 224,  424 => 223,  415 => 222,  397 => 221,  395 => 220,  389 => 217,  385 => 216,  378 => 211,  375 => 210,  369 => 209,  362 => 205,  358 => 204,  352 => 201,  348 => 199,  342 => 197,  339 => 196,  336 => 195,  331 => 194,  324 => 189,  317 => 185,  313 => 184,  306 => 181,  304 => 180,  293 => 178,  274 => 162,  269 => 160,  264 => 158,  259 => 156,  252 => 151,  246 => 150,  239 => 146,  235 => 145,  232 => 144,  229 => 143,  225 => 142,  219 => 139,  215 => 138,  206 => 131,  202 => 130,  192 => 122,  190 => 121,  186 => 120,  154 => 97,  94 => 40,  73 => 21,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/category.twig", "C:\\xampp\\htdocs\\coolShoes\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\Product\\category.twig");
    }
}
