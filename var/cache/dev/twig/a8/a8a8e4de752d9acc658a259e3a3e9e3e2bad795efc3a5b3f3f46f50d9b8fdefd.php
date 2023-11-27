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

/* @admin/Order/edit.twig */
class __TwigTemplate_8b777ef4dca1b98323757d72fc9e626627f45a9192c59a0a92d1f341cc84b41d extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/edit.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/edit.twig"));

        // line 13
        $context["menus"] = [0 => "order", 1 => "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchCustomerModalForm"]) || array_key_exists("searchCustomerModalForm", $context) ? $context["searchCustomerModalForm"] : (function () { throw new RuntimeError('Variable "searchCustomerModalForm" does not exist.', 19, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 20
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 20, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/edit.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 23
        echo "    <script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
    <script>
        \$(function() {
            // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
            \$('input').on('keydown', function(e) {
                if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                    return false;
                } else {
                    return true;
                }
            });

            // 会員検索
            \$('#searchCustomerModalButton').on('click', function() {
                var list = \$('#searchCustomerModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_customer_html");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {'search_word': \$('#admin_search_customer_multi').val()}
                }).done(function(data) {
                    \$('#searchCustomerModalList').html(data);
                }).fail(function(data) {
                    alert('search customer failed.');
                });
            });

            // 商品検索
            \$('#searchProductModalButton').on('click', function() {
                var list = \$('#searchProductModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_product");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'id': \$('#admin_search_product_id').val(),
                        'category_id': \$('#admin_search_product_category_id').val()
                    }
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // その他明細
            \$('#addOrderItemType').on('show.bs.modal', function(e) {
                var list = \$('#searchOrderItemTypeList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_order_item_type");
        echo "',
                    type: 'POST',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchOrderItemTypeList').html(data);
                }).fail(function(data) {
                    alert('search order item type failed.');
                });
            });

            // ページング処理
            \$(document).on('click', '#searchProductModalList ul.pagination li.page-item a.page-link', function(e) {
                e.preventDefault();
                var list = \$('#searchProductModalList');
                list.children().remove();
                var url = \$(this).attr('href');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // 商品追加
            \$collectionHolder = \$('#table-form-field');
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#order_OrderItems_';
            if (index > 0) {
                let row = '#' + \$collectionHolder.find('tbody > tr').last().data(\"row\");
                index = row.replace(formIdPrefix, '');
            }

            \$(document).on('click', '.delete', function(e) {
                // 商品削除
                \$(this).parents('tr').remove();
                index--;
                \$(\"#calculate\").trigger('click');
            });

            // 計算結果の更新が押されたらページ内リンクさせる
            \$('.btn').click(function() {
                var data = \$(this).data();
                if (data.link) {
                    \$('#form1').attr('action', '#' + data.link).submit();
                    return false;
                }
            });

            // 注文者情報をコピー
            \$('.copy-customer').on('click', function() {
                \$('#order_Shipping_name_name01').val(\$('#order_name_name01').val());
                \$('#order_Shipping_name_name02').val(\$('#order_name_name02').val());
                \$('#order_Shipping_kana_kana01').val(\$('#order_kana_kana01').val());
                \$('#order_Shipping_kana_kana02').val(\$('#order_kana_kana02').val());
                \$('#order_Shipping_postal_code').val(\$('#order_postal_code').val());
                \$('#order_Shipping_address_pref').val(\$('#order_address_pref').val());
                \$('#order_Shipping_address_addr01').val(\$('#order_address_addr01').val());
                \$('#order_Shipping_address_addr02').val(\$('#order_address_addr02').val());
                \$('#order_Shipping_email').val(\$('#order_email').val());
                \$('#order_Shipping_phone_number').val(\$('#order_phone_number').val());
                \$('#order_Shipping_company_name').val(\$('#order_company_name').val());
            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // お届け時間の初期表示
            \$('#order_Shipping_Delivery').change();

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    \$('#form1').append('<input type=\"hidden\" name=\"mode\" value=\"register\">');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))

            // 配送業者選択時にお届け時間を設定
            var times = ";
        // line 178
        echo (isset($context["shippingDeliveryTimes"]) || array_key_exists("shippingDeliveryTimes", $context) ? $context["shippingDeliveryTimes"] : (function () { throw new RuntimeError('Variable "shippingDeliveryTimes" does not exist.', 178, $this->source); })());
        echo ";
            \$('#order_Shipping_Delivery').change(function() {
                var deliveryId = \$(this).val();
                var \$shippingDeliveryTime = \$('#order_Shipping_DeliveryTime');
                \$shippingDeliveryTime.find('option').remove();
                \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));
                if (typeof(times[deliveryId]) !== 'undefined') {
                    for (var timeId in times[deliveryId]) {
                        timeValue = times[deliveryId][timeId];
                        \$shippingDeliveryTime.append(\$('<option></option>')
                            .val(timeId)
                            .text(timeValue));
                    }
                }
            });
        });

        ";
        // line 196
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 196, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 196) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 196, $this->source); })()), "Customer", [], "any", false, false, false, 196)))) {
            // line 197
            echo "            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = ";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 200, $this->source); })()), "point_conversion_rate", [], "any", false, false, false, 200), "html", null, true);
            echo ";
                // 利用ポイント
                var usePoint = \$('#order_use_point').val();

                // 利用ポイントが数値以外の時は割引金額を更新しない
                if (isNaN(usePoint)) return;

                // 割引金額を計算
                var discountPrice = (-1) * pointConversionRate * usePoint;

                // ポイント明細の金額の要素を取得
                var \$pointPrice = \$('.pointPrice');

                // ポイント明細の金額の要素がある場合はポイントの更新
                if (\$pointPrice.length) {
                    \$pointPrice.val(discountPrice);
                }
            }
        ";
        }
        // line 219
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 223
        echo "    ";
        // line 224
        echo "    ";
        $context["action_disabled"] = false;
        // line 225
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 225, $this->source); })()), "OrderStatus", [], "any", false, false, false, 225)) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 225, $this->source); })()), "OrderStatus", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225), [0 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PROCESSING"), 1 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PENDING")]))) {
            // line 227
            $context["action_disabled"] = true;
        }
        // line 229
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"";
        // line 254
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 254, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 254) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 254, $this->source); })()), "Customer", [], "any", false, false, false, 254)))) {
            echo " onsubmit=\"updatePointItem()\"";
        }
        echo ">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "_token", [], "any", false, false, false, 256), 'widget');
        echo "
        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "return_link", [], "any", false, false, false, 257), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_no"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                            <div class=\"col\">";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 276, $this->source); })()), "order_no", [], "any", false, false, false, 276), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                ";
        // line 281
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 281, $this->source); })()), "id", [], "any", false, false, false, 281))) {
            // line 282
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "OrderStatus", [], "any", false, false, false, 282), 'widget');
            echo "
                                                    ";
            // line 283
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "OrderStatus", [], "any", false, false, false, 283), 'errors');
            echo "
                                                ";
        }
        // line 285
        echo "                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "Payment", [], "any", false, false, false, 290), 'widget');
        echo "
                                                ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "Payment", [], "any", false, false, false, 291), 'errors');
        echo "
                                                <p class=\"form-text fw-bold text-danger mb-0\">";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.change_payment_method_message"), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 299
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 299, $this->source); })()), "order_date", [], "any", false, false, false, 299)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 299, $this->source); })()), "order_date", [], "any", false, false, false, 299)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 303
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 303, $this->source); })()), "payment_date", [], "any", false, false, false, 303)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 303, $this->source); })()), "payment_date", [], "any", false, false, false, 303)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        ";
        // line 305
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 305, $this->source); })()), "isMultiple", [], "any", false, false, false, 305)) {
            // line 306
            echo "                                            <div class=\"row mb-3\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 307
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_date"), "html", null, true);
            echo "</div>
                                                <div class=\"col\">
                                                    ";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 309, $this->source); })()), "Shippings", [], "any", false, false, false, 309), 0, [], "array", false, false, false, 309), "shipping_date", [], "any", false, false, false, 309)), "html", null, true);
            echo "
                                                </div>
                                            </div>
                                        ";
        }
        // line 313
        echo "                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 315
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 315, $this->source); })()), "update_date", [], "any", false, false, false, 315)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 315, $this->source); })()), "update_date", [], "any", false, false, false, 315)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.device_type"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 319
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 319, $this->source); })()), "device_type", [], "any", false, false, false, 319), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-commenting fa-fw me-1\" aria-hidden=\"true\"></i>";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 323
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 323, $this->source); })()), "message", [], "any", false, false, false, 323)) ? (twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 323, $this->source); })()), "message", [], "any", false, false, false, 323), "html", null, true))) : (""));
        echo "</div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 329
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 329), "eccube_form_options", [], "any", false, false, false, 329), "auto_render", [], "any", false, false, false, 329); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 330
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 330), "eccube_form_options", [], "any", false, false, false, 330), "form_theme", [], "any", false, false, false, 330)) {
                // line 331
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 331), "eccube_form_options", [], "any", false, false, false, 331), "form_theme", [], "any", false, false, false, 331)], true);
                // line 332
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            } else {
                // line 334
                echo "                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-3\">
                                                        <span>";
                // line 338
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 338), "label", [], "any", false, false, false, 338)), "html", null, true);
                echo "</span>
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
                // line 341
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                        ";
                // line 342
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 348
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                                </div>
                                <div class=\"col\">";
        // line 359
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 359, $this->source); })())) {
            echo "<span class=\"me-5\">";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), "Customer", [], "any", false, false, false, 359), "vars", [], "any", false, false, false, 359), "value", [], "any", false, false, false, 359))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), "Customer", [], "any", false, false, false, 359), "vars", [], "any", false, false, false, 359), "value", [], "any", false, false, false, 359)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), "Customer", [], "any", false, false, false, 359), "vars", [], "any", false, false, false, 359), "value", [], "any", false, false, false, 359), "html", null, true);
                echo "</a>";
            }
            echo "</span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 359, $this->source); })()), "full_name", [], "any", false, false, false, 359), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 359, $this->source); })()), "full_name_kana", [], "any", false, false, false, 359), "html", null, true);
            echo ") 〒";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 359, $this->source); })()), "postal_code", [], "any", false, false, false, 359), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 359, $this->source); })()), "pref", [], "any", false, false, false, 359), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 359, $this->source); })()), "addr01", [], "any", false, false, false, 359), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 359, $this->source); })()), "addr02", [], "any", false, false, false, 359), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 359, $this->source); })()), "email", [], "any", false, false, false, 359), "html", null, true);
        }
        echo "</div>
                                <div class=\"col-1 text-end\"><a class=\"d-block\" data-bs-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa ";
        // line 360
        echo (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 360, $this->source); })())) ? ("fa-angle-down") : ("fa-angle-up"));
        echo " fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse ";
        // line 363
        echo (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 363, $this->source); })())) ? ("") : ("show"));
        echo " ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                ";
        // line 366
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 366, $this->source); })()), "id", [], "any", false, false, false, 366))) {
            // line 367
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-ec-regular px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCustomerModal\">";
            // line 369
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_from_customer"), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                    <!-- 会員検索モーダル -->
                                    <div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCustomerModal\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title fw-bold\">";
            // line 377
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_customer_title"), "html", null, true);
            echo "</h5>
                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    ";
            // line 381
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchCustomerModalForm"]) || array_key_exists("searchCustomerModalForm", $context) ? $context["searchCustomerModalForm"] : (function () { throw new RuntimeError('Variable "searchCustomerModalForm" does not exist.', 381, $this->source); })()), "multi", [], "any", false, false, false, 381), 'widget', ["attr" => ["class" => "mb-2searchCustomerModal", "placeholder" => "admin.customer.multi_search_label"]]);
            echo "
                                                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 382
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                    <div class=\"mb-3\" id=\"searchCustomerModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 389
        echo "                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.customer_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">";
        // line 394
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "Customer", [], "any", false, false, false, 394), "vars", [], "any", false, false, false, 394), "value", [], "any", false, false, false, 394))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "Customer", [], "any", false, false, false, 394), "vars", [], "any", false, false, false, 394), "value", [], "any", false, false, false, 394)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "Customer", [], "any", false, false, false, 394), "vars", [], "any", false, false, false, 394), "value", [], "any", false, false, false, 394), "html", null, true);
            echo "</a>";
        }
        echo "</p>
                                                ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "Customer", [], "any", false, false, false, 395), 'widget');
        echo "
                                                ";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "Customer", [], "any", false, false, false, 396), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "name", [], "any", false, false, false, 404), "name01", [], "any", false, false, false, 404), 'widget');
        echo "
                                                        ";
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "name", [], "any", false, false, false, 405), "name01", [], "any", false, false, false, 405), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 408, $this->source); })()), "name", [], "any", false, false, false, 408), "name02", [], "any", false, false, false, 408), 'widget');
        echo "
                                                        ";
        // line 409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), "name", [], "any", false, false, false, 409), "name02", [], "any", false, false, false, 409), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "kana", [], "any", false, false, false, 419), "kana01", [], "any", false, false, false, 419), 'widget');
        echo "
                                                        ";
        // line 420
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "kana", [], "any", false, false, false, 420), "kana01", [], "any", false, false, false, 420), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 423
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 423, $this->source); })()), "kana", [], "any", false, false, false, 423), "kana02", [], "any", false, false, false, 423), 'widget');
        echo "
                                                        ";
        // line 424
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "kana", [], "any", false, false, false, 424), "kana02", [], "any", false, false, false, 424), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col row align-items-center\">
                                                        <span class=\"col-auto\">";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span>
                                                        <span class=\"col-auto ps-0\">";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "postal_code", [], "any", false, false, false, 435), 'widget');
        echo "</span>
                                                        ";
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 436, $this->source); })()), "postal_code", [], "any", false, false, false, 436), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 441
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "address", [], "any", false, false, false, 441), "pref", [], "any", false, false, false, 441), 'widget');
        echo "
                                                        ";
        // line 442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 442, $this->source); })()), "address", [], "any", false, false, false, 442), "pref", [], "any", false, false, false, 442), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 447, $this->source); })()), "address", [], "any", false, false, false, 447), "addr01", [], "any", false, false, false, 447), 'widget');
        echo "
                                                        ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), "address", [], "any", false, false, false, 448), "addr01", [], "any", false, false, false, 448), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "address", [], "any", false, false, false, 453), "addr02", [], "any", false, false, false, 453), 'widget');
        echo "
                                                        ";
        // line 454
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 454, $this->source); })()), "address", [], "any", false, false, false, 454), "addr02", [], "any", false, false, false, 454), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "email", [], "any", false, false, false, 465), 'widget');
        echo "
                                                ";
        // line 466
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 466, $this->source); })()), "email", [], "any", false, false, false, 466), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "<span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 472
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 472, $this->source); })()), "phone_number", [], "any", false, false, false, 472), 'widget');
        echo "
                                                ";
        // line 473
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 473, $this->source); })()), "phone_number", [], "any", false, false, false, 473), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), "company_name", [], "any", false, false, false, 479), 'widget');
        echo "
                                                ";
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 480, $this->source); })()), "company_name", [], "any", false, false, false, 480), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 486
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 486, $this->source); })()), "message", [], "any", false, false, false, 486), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                                ";
        // line 487
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 487, $this->source); })()), "message", [], "any", false, false, false, 487), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                ";
        // line 507
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 507, $this->source); })()), "isMultiple", [], "any", false, false, false, 507)) {
            // line 508
            echo "                                    ";
            // line 509
            echo "                                    <div class=\"mb-3\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 510
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
            // line 511
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 511, $this->source); })()), "id", [], "any", false, false, false, 511)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping"), "html", null, true);
            echo "</a>
                                        <span class=\"ml-3\">";
            // line 512
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping_description"), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 514
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 514, $this->source); })()), "Shippings", [], "any", false, false, false, 514));
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
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 515
                echo "                                        <div class=\"col\">
                                            <span class=\"me-5\">";
                // line 516
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 516), "html", null, true);
                echo ")</span>
                                            ";
                // line 517
                $context["shipping_name"] = ((((twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name", [], "any", false, false, false, 517) . "(") . twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name_kana", [], "any", false, false, false, 517)) . ")") . (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, false, 517))) ? ((" " . twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, false, 517))) : ("")));
                // line 518
                echo "                                            ";
                $context["shipping_addr"] = ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 518)) . " ") . twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 518)) . twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 518)) . twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 518));
                // line 519
                echo "                                            ";
                $context["shipping_date"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, false, 519))) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, false, 519))) : (""));
                // line 520
                echo "                                            ";
                echo twig_escape_filter($this->env, (isset($context["shipping_name"]) || array_key_exists("shipping_name", $context) ? $context["shipping_name"] : (function () { throw new RuntimeError('Variable "shipping_name" does not exist.', 520, $this->source); })()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["shipping_addr"]) || array_key_exists("shipping_addr", $context) ? $context["shipping_addr"] : (function () { throw new RuntimeError('Variable "shipping_addr" does not exist.', 520, $this->source); })()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 520), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["shipping_date"]) || array_key_exists("shipping_date", $context) ? $context["shipping_date"] : (function () { throw new RuntimeError('Variable "shipping_date" does not exist.', 520, $this->source); })()), "html", null, true);
                echo "
                                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            echo "                                ";
        } else {
            // line 524
            echo "                                    ";
            // line 525
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <button type=\"button\" class=\"btn btn-ec-regular copy-customer\">";
            // line 527
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.copy_orderer"), "html", null, true);
            echo "</button>
                                            ";
            // line 528
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 528, $this->source); })()), "id", [], "any", false, false, false, 528))) {
                // line 529
                echo "                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_export_pdf");
                echo "?ids[]=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 529, $this->source); })()), "Shippings", [], "any", false, false, false, 529), 0, [], "array", false, false, false, 529), "id", [], "any", false, false, false, 529), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 531
            echo "                                        </div>
                                        ";
            // line 532
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 532, $this->source); })()), "id", [], "any", false, false, false, 532))) {
                // line 533
                echo "                                            <div class=\"col-6 text-end\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"";
                // line 534
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
                // line 535
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 535, $this->source); })()), "id", [], "any", false, false, false, 535)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_shipping"), "html", null, true);
                echo "</a>
                                            </div>
                                        ";
            }
            // line 538
            echo "                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 543
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 547
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "Shipping", [], "any", false, false, false, 547), "name", [], "any", false, false, false, 547), "name01", [], "any", false, false, false, 547), 'widget');
            echo "
                                                            ";
            // line 548
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 548, $this->source); })()), "Shipping", [], "any", false, false, false, 548), "name", [], "any", false, false, false, 548), "name01", [], "any", false, false, false, 548), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 551
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 551, $this->source); })()), "Shipping", [], "any", false, false, false, 551), "name", [], "any", false, false, false, 551), "name02", [], "any", false, false, false, 551), 'widget');
            echo "
                                                            ";
            // line 552
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 552, $this->source); })()), "Shipping", [], "any", false, false, false, 552), "name", [], "any", false, false, false, 552), "name02", [], "any", false, false, false, 552), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 558
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 562
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "Shipping", [], "any", false, false, false, 562), "kana", [], "any", false, false, false, 562), "kana01", [], "any", false, false, false, 562), 'widget');
            echo "
                                                            ";
            // line 563
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 563, $this->source); })()), "Shipping", [], "any", false, false, false, 563), "kana", [], "any", false, false, false, 563), "kana01", [], "any", false, false, false, 563), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 566
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "Shipping", [], "any", false, false, false, 566), "kana", [], "any", false, false, false, 566), "kana02", [], "any", false, false, false, 566), 'widget');
            echo "
                                                            ";
            // line 567
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), "Shipping", [], "any", false, false, false, 567), "kana", [], "any", false, false, false, 567), "kana02", [], "any", false, false, false, 567), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 573
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">";
            // line 577
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "</span>
                                                            <span class=\"col-auto ps-0\">";
            // line 578
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 578, $this->source); })()), "Shipping", [], "any", false, false, false, 578), "postal_code", [], "any", false, false, false, 578), 'widget');
            echo "</span>
                                                            ";
            // line 579
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 579, $this->source); })()), "Shipping", [], "any", false, false, false, 579), "postal_code", [], "any", false, false, false, 579), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 584
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "Shipping", [], "any", false, false, false, 584), "address", [], "any", false, false, false, 584), "pref", [], "any", false, false, false, 584), 'widget');
            echo "
                                                            ";
            // line 585
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 585, $this->source); })()), "Shipping", [], "any", false, false, false, 585), "address", [], "any", false, false, false, 585), "pref", [], "any", false, false, false, 585), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 590
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "Shipping", [], "any", false, false, false, 590), "address", [], "any", false, false, false, 590), "addr01", [], "any", false, false, false, 590), 'widget');
            echo "
                                                            ";
            // line 591
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 591, $this->source); })()), "Shipping", [], "any", false, false, false, 591), "address", [], "any", false, false, false, 591), "addr01", [], "any", false, false, false, 591), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 596
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 596, $this->source); })()), "Shipping", [], "any", false, false, false, 596), "address", [], "any", false, false, false, 596), "addr02", [], "any", false, false, false, 596), 'widget');
            echo "
                                                            ";
            // line 597
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 597, $this->source); })()), "Shipping", [], "any", false, false, false, 597), "address", [], "any", false, false, false, 597), "addr02", [], "any", false, false, false, 597), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 605
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    ";
            // line 607
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 607, $this->source); })()), "Shipping", [], "any", false, false, false, 607), "phone_number", [], "any", false, false, false, 607), 'widget');
            echo "
                                                    ";
            // line 608
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 608, $this->source); })()), "Shipping", [], "any", false, false, false, 608), "phone_number", [], "any", false, false, false, 608), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">";
            // line 613
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 615
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })()), "Shipping", [], "any", false, false, false, 615), "company_name", [], "any", false, false, false, 615), 'widget');
            echo "
                                                    ";
            // line 616
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 616, $this->source); })()), "Shipping", [], "any", false, false, false, 616), "company_name", [], "any", false, false, false, 616), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12\">
                                            <hr>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 625
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.tracking_number"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 627
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 627, $this->source); })()), "Shipping", [], "any", false, false, false, 627), "tracking_number", [], "any", false, false, false, 627), 'widget');
            echo "
                                                    ";
            // line 628
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 628, $this->source); })()), "Shipping", [], "any", false, false, false, 628), "tracking_number", [], "any", false, false, false, 628), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 632
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.delivery_provider"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_provider"), "html", null, true);
            echo "<span class=\"badge bg-primary ms-1\"></span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 634
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 634, $this->source); })()), "Shipping", [], "any", false, false, false, 634), "Delivery", [], "any", false, false, false, 634), 'widget');
            echo "
                                                    ";
            // line 635
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 635, $this->source); })()), "Shipping", [], "any", false, false, false, 635), "Delivery", [], "any", false, false, false, 635), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 639
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.shop_memo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shop_memo_for_shipped"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 641
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 641, $this->source); })()), "Shipping", [], "any", false, false, false, 641), "note", [], "any", false, false, false, 641), 'widget');
            echo "
                                                    ";
            // line 642
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 642, $this->source); })()), "Shipping", [], "any", false, false, false, 642), "note", [], "any", false, false, false, 642), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 648
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 650
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 650, $this->source); })()), "Shipping", [], "any", false, false, false, 650), "shipping_delivery_date", [], "any", false, false, false, 650), 'widget');
            echo "
                                                    ";
            // line 651
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 651, $this->source); })()), "Shipping", [], "any", false, false, false, 651), "shipping_delivery_date", [], "any", false, false, false, 651), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>";
            // line 655
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_time"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 657
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 657, $this->source); })()), "Shipping", [], "any", false, false, false, 657), "DeliveryTime", [], "any", false, false, false, 657), 'widget');
            echo "
                                                    ";
            // line 658
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 658, $this->source); })()), "Shipping", [], "any", false, false, false, 658), "DeliveryTime", [], "any", false, false, false, 658), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 664
        echo "                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.product_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.product_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        ";
        // line 681
        echo "                                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 681, $this->source); })()), "isMultiple", [], "any", false, false, false, 681)) {
            // line 682
            echo "                                            <a class=\"btn btn-ec-regular me-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#addProduct\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">";
            // line 687
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            ";
            // line 691
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 691, $this->source); })()), "id", [], "any", false, false, false, 691), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
            echo "
                                                            ";
            // line 692
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 692, $this->source); })()), "category_id", [], "any", false, false, false, 692), 'widget');
            echo "
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 693
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 700
        echo "                                        <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</h5>
                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <div id=\"searchOrderItemTypeList\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 714
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 714, $this->source); })()), "OrderItemsErrors", [], "any", false, false, false, 714), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-5 text-end\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular me-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"";
        // line 717
        echo (((isset($context["action_disabled"]) || array_key_exists("action_disabled", $context) ? $context["action_disabled"] : (function () { throw new RuntimeError('Variable "action_disabled" does not exist.', 717, $this->source); })())) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.update_calculation_results"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"";
        // line 721
        ob_start();
        echo twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 721, $this->source); })()), "OrderItems", [], "any", false, false, false, 721), "vars", [], "any", false, false, false, 721), "prototype", [], "any", false, false, false, 721)]);
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_parse_0_);
        echo "\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 ps-3\">";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 726
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pe-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 744, $this->source); })()), "OrderItems", [], "any", false, false, false, 744));
        foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
            // line 745
            echo "                                        ";
            $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 745), "data", [], "any", false, false, false, 745);
            // line 746
            echo "                                        <tr data-row=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746), "html", null, true);
            echo "\">
                                            ";
            // line 748
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, false, 748), 'widget');
            echo "
                                            ";
            // line 749
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, false, 749), 'widget');
            echo "
                                            ";
            // line 750
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "point_rate", [], "any", false, false, false, 750), 'widget');
            echo "
                                            ";
            // line 751
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, false, 751), 'widget');
            echo "
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 ps-3\">
                                                <p class=\"mb-0 fw-bold\">
                                                    ";
            // line 756
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 756, $this->source); })()), "isProduct", [], "any", false, false, false, 756) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 756, $this->source); })()), "isPoint", [], "any", false, false, false, 756))) {
                // line 757
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 757, $this->source); })()), "isProduct", [], "any", false, false, false, 757)) {
                    // line 758
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 758, $this->source); })()), "ProductClass", [], "any", false, false, false, 758), "Product", [], "any", false, false, false, 758), "id", [], "any", false, false, false, 758)]), "html", null, true);
                    echo "\" target=\"_blank\">
                                                                ";
                    // line 759
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 759, $this->source); })()), "product_name", [], "any", false, false, false, 759), "html", null, true);
                    echo "
                                                            </a>
                                                        ";
                } else {
                    // line 762
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 762, $this->source); })()), "product_name", [], "any", false, false, false, 762), "html", null, true);
                    echo "
                                                        ";
                }
                // line 764
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 764), 'widget', ["type" => "hidden"]);
                echo "
                                                    ";
            } else {
                // line 766
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 766), 'widget');
                echo "
                                                    ";
            }
            // line 768
            echo "                                                </p>
                                                <span>
                                                    ";
            // line 770
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 770, $this->source); })()), "product_code", [], "any", false, false, false, 770), "html", null, true);
            echo "
                                                    ";
            // line 771
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 771, $this->source); })()), "class_category_name1", [], "any", false, false, false, 771))) {
                // line 772
                echo "                                                        / (
                                                        ";
                // line 773
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 773, $this->source); })()), "class_name1", [], "any", false, false, false, 773), "html", null, true);
                echo "：
                                                        ";
                // line 774
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 774, $this->source); })()), "class_category_name1", [], "any", false, false, false, 774), "html", null, true);
                echo "
                                                        ";
                // line 775
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 775, $this->source); })()), "class_category_name2", [], "any", false, false, false, 775))) {
                    // line 776
                    echo "                                                            /
                                                            ";
                    // line 777
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 777, $this->source); })()), "class_name2", [], "any", false, false, false, 777), "html", null, true);
                    echo "：
                                                            ";
                    // line 778
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 778, $this->source); })()), "class_category_name2", [], "any", false, false, false, 778), "html", null, true);
                    echo "
                                                        ";
                }
                // line 780
                echo "                                                        )
                                                    ";
            }
            // line 782
            echo "                                                </span>
                                                ";
            // line 783
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 783), 'errors');
            echo "
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    ";
            // line 789
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 789, $this->source); })()), "isPoint", [], "any", false, false, false, 789)) {
                // line 790
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 790), 'widget', ["attr" => ["readonly" => "readonly", "class" => "pointPrice"]]);
                echo "
                                                    ";
            } else {
                // line 792
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 792), 'widget');
                echo "
                                                    ";
            }
            // line 794
            echo "                                                    <div class=\"text-end small\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 794, $this->source); })()), "TaxDisplayType", [], "any", false, false, false, 794), "html", null, true);
            echo ")</div>
                                                    ";
            // line 795
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 795), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 802
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 802, $this->source); })()), "isMultiple", [], "any", false, false, false, 802) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 802, $this->source); })()), "isProduct", [], "any", false, false, false, 802)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 802, $this->source); })()), "isPoint", [], "any", false, false, false, 802))) {
                // line 803
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 803), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 805
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 805), 'widget');
                echo "
                                                    ";
            }
            // line 807
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 807), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 814
            echo "                                                    ";
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 814, $this->source); })()), "isMultiple", [], "any", false, false, false, 814) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 814, $this->source); })()), "isProduct", [], "any", false, false, false, 814)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 814, $this->source); })()), "isPoint", [], "any", false, false, false, 814)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 814, $this->source); })()), "TaxType", [], "any", false, false, false, 814), "id", [], "any", false, false, false, 814) == twig_constant("Eccube\\Entity\\Master\\TaxType::NON_TAXABLE")))) {
                // line 815
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 815), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 817
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 817), 'widget');
                echo "
                                                    ";
            }
            // line 819
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 819), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    ";
            // line 825
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 825, $this->source); })()), "tax_type", [], "any", false, false, false, 825), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>";
            // line 831
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 831, $this->source); })()), "total_price", [], "any", false, false, false, 831)), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-end pe-3\">
                                                <div class=\"row justify-content-end\">
                                                    ";
            // line 837
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 837, $this->source); })()), "isMultiple", [], "any", false, false, false, 837) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 837, $this->source); })()), "isProduct", [], "any", false, false, false, 837)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 837, $this->source); })()), "isPoint", [], "any", false, false, false, 837))) {
                // line 838
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"";
                // line 840
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    ";
            } else {
                // line 847
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"";
                // line 849
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_";
                // line 850
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 850), "id", [], "any", false, false, false, 850), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_";
                // line 855
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 855), "id", [], "any", false, false, false, 855), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 855), "id", [], "any", false, false, false, 855), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">";
                // line 859
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start\">";
                // line 865
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 865, $this->source); })()), "product_name", [], "any", false, false, false, 865)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 868
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">";
                // line 869
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 876
            echo "                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 880
        echo "                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 886
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 886, $this->source); })()), "subtotal", [], "any", false, false, false, 886)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 890
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_fee"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 891
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 891, $this->source); })()), "delivery_fee_total", [], "any", false, false, false, 891)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 895
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 896
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 896, $this->source); })()), "charge", [], "any", false, false, false, 896)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 900
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.discount"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">";
        // line 901
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 901, $this->source); })()), "taxable_discount", [], "any", false, false, false, 901)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 906
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 907
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 907, $this->source); })()), "taxable_total", [], "any", false, false, false, 907)), "html", null, true);
        echo "</span></div>
                                </div>
                                ";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 909, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 909));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 910
            echo "                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 911
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 911), "html", null, true);
            echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">";
            // line 912
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 912)), "html", null, true);
            echo "</span></div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 915
        echo "                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 917
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">";
        // line 918
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 918, $this->source); })()), "payment_total", [], "any", false, false, false, 918)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 消費税額 -->
                                ";
        // line 922
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 922, $this->source); })()), "total_by_tax_rate", [], "any", false, false, false, 922));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 923
            echo "                                    <div class=\"row justify-content-end mb-3\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 924
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-2 text-end\"><span class=\"align-middle fw-normal\">";
            // line 925
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</span>(";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_amount"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 925, $this->source); })()), "tax_by_tax_rate", [], "any", false, false, false, 925), $context["rate"], [], "array", false, false, false, 925)), "html", null, true);
            echo ")</div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 928
        echo "                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 931
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            ";
        // line 934
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 934, $this->source); })()), "vars", [], "any", false, false, false, 934), "value", [], "any", false, false, false, 934), "addpoint", [], "any", false, false, false, 934)), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 940
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.use_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            ";
        // line 944
        echo "                                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 944, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 944) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 944, $this->source); })()), "Customer", [], "any", false, false, false, 944)))) {
            // line 945
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 945, $this->source); })()), "use_point", [], "any", false, false, false, 945), 'widget');
            echo "
                                            ";
        } else {
            // line 947
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 947, $this->source); })()), "use_point", [], "any", false, false, false, 947), 'widget', ["attr" => ["readonly" => "readonly"]]);
            echo "
                                            ";
        }
        // line 949
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 949, $this->source); })()), "use_point", [], "any", false, false, false, 949), 'errors');
        echo "
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 961
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shop_memo"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                ";
        // line 968
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 968, $this->source); })()), "note", [], "any", false, false, false, 968), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- メール送信履歴 -->
                    ";
        // line 973
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 973, $this->source); })()))) {
            // line 974
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 978
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.mail_history"), "html", null, true);
            echo "\"><span class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_history"), "html", null, true);
            echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    </div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailHistory\" aria-expanded=\"false\" aria-controls=\"mailHistory\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"mailHistory\">
                                <div class=\"card-body\">
                                    <table class=\"table table-striped\">
                                        <thead class=\"table-active\">
                                        <tr>
                                            <th class=\"pt-2 pb-2 ps-3\">";
            // line 988
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send_date"), "html", null, true);
            echo "</th>
                                            <th class=\"pt-2 pb-2 pe-3\">";
            // line 989
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
            echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 993
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 993, $this->source); })()), "MailHistories", [], "any", false, false, false, 993));
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
            foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
                // line 994
                echo "                                            <tr>
                                                <td class=\"ps-3\">";
                // line 995
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, false, 995)), "html", null, true);
                echo "</td>
                                                <td class=\"pe-3\">
                                                    <a class=\"text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#mail2-";
                // line 997
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 997), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 997), "html", null, true);
                echo "</a>
                                                    <div class=\"modal fade\" id=\"mail2-";
                // line 998
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 998), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 998), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">";
                // line 1002
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 1002), "html", null, true);
                echo "</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        ";
                // line 1007
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, false, 1007)) > 0)) {
                    // line 1008
                    echo "                                                                            ";
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, false, 1008));
                    echo "
                                                                        ";
                } else {
                    // line 1010
                    echo "                                                                            ";
                    echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, false, 1010), "html", null, true));
                    echo "
                                                                        ";
                }
                // line 1012
                echo "                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 1015
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
                echo "</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1023
            echo "                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 1026
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail")]), "html", null, true);
            // line 1028
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 1028, $this->source); })()), "id", [], "any", false, false, false, 1028)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_create"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    ";
        }
        // line 1034
        echo "                </div>
            </div>
        </div>
        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 1043
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"";
        // line 1049
        echo (((isset($context["action_disabled"]) || array_key_exists("action_disabled", $context) ? $context["action_disabled"] : (function () { throw new RuntimeError('Variable "action_disabled" does not exist.', 1049, $this->source); })())) ? (" disabled=\"disabled\"") : (""));
        echo ">";
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
        return "@admin/Order/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2146 => 1049,  2135 => 1043,  2124 => 1034,  2112 => 1028,  2110 => 1026,  2105 => 1023,  2083 => 1015,  2078 => 1012,  2072 => 1010,  2066 => 1008,  2064 => 1007,  2056 => 1002,  2047 => 998,  2041 => 997,  2036 => 995,  2033 => 994,  2016 => 993,  2009 => 989,  2005 => 988,  1990 => 978,  1984 => 974,  1982 => 973,  1974 => 968,  1962 => 961,  1946 => 949,  1940 => 947,  1934 => 945,  1931 => 944,  1925 => 940,  1916 => 934,  1910 => 931,  1905 => 928,  1892 => 925,  1888 => 924,  1885 => 923,  1881 => 922,  1874 => 918,  1870 => 917,  1866 => 915,  1857 => 912,  1853 => 911,  1850 => 910,  1846 => 909,  1841 => 907,  1837 => 906,  1829 => 901,  1825 => 900,  1818 => 896,  1814 => 895,  1807 => 891,  1803 => 890,  1796 => 886,  1792 => 885,  1785 => 880,  1776 => 876,  1766 => 869,  1762 => 868,  1756 => 865,  1747 => 859,  1738 => 855,  1730 => 850,  1726 => 849,  1722 => 847,  1712 => 840,  1708 => 838,  1705 => 837,  1697 => 831,  1688 => 825,  1678 => 819,  1672 => 817,  1666 => 815,  1663 => 814,  1653 => 807,  1647 => 805,  1641 => 803,  1638 => 802,  1629 => 795,  1624 => 794,  1618 => 792,  1612 => 790,  1609 => 789,  1601 => 783,  1598 => 782,  1594 => 780,  1589 => 778,  1585 => 777,  1582 => 776,  1580 => 775,  1576 => 774,  1572 => 773,  1569 => 772,  1567 => 771,  1563 => 770,  1559 => 768,  1553 => 766,  1547 => 764,  1541 => 762,  1535 => 759,  1530 => 758,  1527 => 757,  1524 => 756,  1517 => 751,  1513 => 750,  1509 => 749,  1504 => 748,  1499 => 746,  1496 => 745,  1492 => 744,  1483 => 738,  1477 => 735,  1471 => 732,  1465 => 729,  1459 => 726,  1454 => 724,  1445 => 721,  1436 => 717,  1430 => 714,  1418 => 705,  1409 => 700,  1399 => 693,  1395 => 692,  1391 => 691,  1384 => 687,  1375 => 682,  1372 => 681,  1358 => 671,  1349 => 664,  1340 => 658,  1336 => 657,  1331 => 655,  1324 => 651,  1320 => 650,  1315 => 648,  1306 => 642,  1302 => 641,  1295 => 639,  1288 => 635,  1284 => 634,  1277 => 632,  1270 => 628,  1266 => 627,  1259 => 625,  1247 => 616,  1243 => 615,  1238 => 613,  1230 => 608,  1226 => 607,  1219 => 605,  1208 => 597,  1204 => 596,  1196 => 591,  1192 => 590,  1184 => 585,  1180 => 584,  1172 => 579,  1168 => 578,  1164 => 577,  1155 => 573,  1146 => 567,  1142 => 566,  1136 => 563,  1132 => 562,  1123 => 558,  1114 => 552,  1110 => 551,  1104 => 548,  1100 => 547,  1091 => 543,  1084 => 538,  1075 => 535,  1073 => 534,  1070 => 533,  1068 => 532,  1065 => 531,  1055 => 529,  1053 => 528,  1049 => 527,  1045 => 525,  1043 => 524,  1040 => 523,  1016 => 520,  1013 => 519,  1010 => 518,  1008 => 517,  1002 => 516,  999 => 515,  982 => 514,  977 => 512,  970 => 511,  968 => 510,  965 => 509,  963 => 508,  961 => 507,  949 => 500,  933 => 487,  929 => 486,  924 => 484,  917 => 480,  913 => 479,  908 => 477,  901 => 473,  897 => 472,  890 => 470,  883 => 466,  879 => 465,  872 => 463,  860 => 454,  856 => 453,  848 => 448,  844 => 447,  836 => 442,  832 => 441,  824 => 436,  820 => 435,  816 => 434,  807 => 430,  798 => 424,  794 => 423,  788 => 420,  784 => 419,  775 => 415,  766 => 409,  762 => 408,  756 => 405,  752 => 404,  743 => 400,  736 => 396,  732 => 395,  720 => 394,  713 => 392,  708 => 389,  698 => 382,  694 => 381,  687 => 377,  676 => 369,  672 => 367,  670 => 366,  664 => 363,  658 => 360,  631 => 359,  626 => 357,  616 => 349,  610 => 348,  601 => 342,  597 => 341,  591 => 338,  585 => 334,  579 => 332,  576 => 331,  573 => 330,  568 => 329,  560 => 323,  556 => 322,  550 => 319,  546 => 318,  540 => 315,  536 => 314,  533 => 313,  526 => 309,  521 => 307,  518 => 306,  516 => 305,  511 => 303,  507 => 302,  501 => 299,  497 => 298,  488 => 292,  484 => 291,  480 => 290,  475 => 288,  470 => 285,  465 => 283,  460 => 282,  458 => 281,  451 => 279,  445 => 276,  439 => 275,  424 => 265,  413 => 257,  409 => 256,  402 => 254,  393 => 248,  387 => 245,  374 => 235,  366 => 229,  363 => 227,  360 => 225,  357 => 224,  355 => 223,  345 => 222,  334 => 219,  312 => 200,  307 => 197,  304 => 196,  284 => 178,  181 => 78,  158 => 58,  138 => 41,  118 => 23,  108 => 22,  89 => 16,  70 => 15,  59 => 11,  57 => 20,  55 => 19,  53 => 18,  51 => 13,  38 => 11,);
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

{% set menus = ['order', 'order_edit'] %}

{% block title %}{{ 'admin.order.order_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.order.order_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme searchCustomerModalForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme searchProductModalForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
    <script>
        \$(function() {
            // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
            \$('input').on('keydown', function(e) {
                if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                    return false;
                } else {
                    return true;
                }
            });

            // 会員検索
            \$('#searchCustomerModalButton').on('click', function() {
                var list = \$('#searchCustomerModalList');
                list.children().remove();

                \$.ajax({
                    url: '{{ url('admin_order_search_customer_html') }}',
                    type: 'POST',
                    dataType: 'html',
                    data: {'search_word': \$('#admin_search_customer_multi').val()}
                }).done(function(data) {
                    \$('#searchCustomerModalList').html(data);
                }).fail(function(data) {
                    alert('search customer failed.');
                });
            });

            // 商品検索
            \$('#searchProductModalButton').on('click', function() {
                var list = \$('#searchProductModalList');
                list.children().remove();

                \$.ajax({
                    url: '{{ url('admin_order_search_product') }}',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'id': \$('#admin_search_product_id').val(),
                        'category_id': \$('#admin_search_product_category_id').val()
                    }
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // その他明細
            \$('#addOrderItemType').on('show.bs.modal', function(e) {
                var list = \$('#searchOrderItemTypeList');
                list.children().remove();

                \$.ajax({
                    url: '{{ url('admin_order_search_order_item_type') }}',
                    type: 'POST',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchOrderItemTypeList').html(data);
                }).fail(function(data) {
                    alert('search order item type failed.');
                });
            });

            // ページング処理
            \$(document).on('click', '#searchProductModalList ul.pagination li.page-item a.page-link', function(e) {
                e.preventDefault();
                var list = \$('#searchProductModalList');
                list.children().remove();
                var url = \$(this).attr('href');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // 商品追加
            \$collectionHolder = \$('#table-form-field');
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#order_OrderItems_';
            if (index > 0) {
                let row = '#' + \$collectionHolder.find('tbody > tr').last().data(\"row\");
                index = row.replace(formIdPrefix, '');
            }

            \$(document).on('click', '.delete', function(e) {
                // 商品削除
                \$(this).parents('tr').remove();
                index--;
                \$(\"#calculate\").trigger('click');
            });

            // 計算結果の更新が押されたらページ内リンクさせる
            \$('.btn').click(function() {
                var data = \$(this).data();
                if (data.link) {
                    \$('#form1').attr('action', '#' + data.link).submit();
                    return false;
                }
            });

            // 注文者情報をコピー
            \$('.copy-customer').on('click', function() {
                \$('#order_Shipping_name_name01').val(\$('#order_name_name01').val());
                \$('#order_Shipping_name_name02').val(\$('#order_name_name02').val());
                \$('#order_Shipping_kana_kana01').val(\$('#order_kana_kana01').val());
                \$('#order_Shipping_kana_kana02').val(\$('#order_kana_kana02').val());
                \$('#order_Shipping_postal_code').val(\$('#order_postal_code').val());
                \$('#order_Shipping_address_pref').val(\$('#order_address_pref').val());
                \$('#order_Shipping_address_addr01').val(\$('#order_address_addr01').val());
                \$('#order_Shipping_address_addr02').val(\$('#order_address_addr02').val());
                \$('#order_Shipping_email').val(\$('#order_email').val());
                \$('#order_Shipping_phone_number').val(\$('#order_phone_number').val());
                \$('#order_Shipping_company_name').val(\$('#order_company_name').val());
            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // お届け時間の初期表示
            \$('#order_Shipping_Delivery').change();

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    \$('#form1').append('<input type=\"hidden\" name=\"mode\" value=\"register\">');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))

            // 配送業者選択時にお届け時間を設定
            var times = {{ shippingDeliveryTimes|raw }};
            \$('#order_Shipping_Delivery').change(function() {
                var deliveryId = \$(this).val();
                var \$shippingDeliveryTime = \$('#order_Shipping_DeliveryTime');
                \$shippingDeliveryTime.find('option').remove();
                \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));
                if (typeof(times[deliveryId]) !== 'undefined') {
                    for (var timeId in times[deliveryId]) {
                        timeValue = times[deliveryId][timeId];
                        \$shippingDeliveryTime.append(\$('<option></option>')
                            .val(timeId)
                            .text(timeValue));
                    }
                }
            });
        });

        {# ポイント機能が有効かつ会員の場合のみポイントの割引金額を変更する #}
        {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = {{ BaseInfo.point_conversion_rate }};
                // 利用ポイント
                var usePoint = \$('#order_use_point').val();

                // 利用ポイントが数値以外の時は割引金額を更新しない
                if (isNaN(usePoint)) return;

                // 割引金額を計算
                var discountPrice = (-1) * pointConversionRate * usePoint;

                // ポイント明細の金額の要素を取得
                var \$pointPrice = \$('.pointPrice');

                // ポイント明細の金額の要素がある場合はポイントの更新
                if (\$pointPrice.length) {
                    \$pointPrice.val(discountPrice);
                }
            }
        {% endif %}
    </script>
{% endblock javascript %}

{% block main %}
    {# 決済処理中/購入処理中ステータスは登録・更新等の操作を無効にする #}
    {% set action_disabled = false %}
    {% if Order.OrderStatus is not empty and Order.OrderStatus.id in [
        constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::PROCESSING'), constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::PENDING')] -%}
        {% set action_disabled = true %}
    {%- endif %}
    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ 'admin.common.move_to_confirm_title'|trans }}</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_save_and_move'|trans }}
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_move_only'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"{% if BaseInfo.isOptionPoint and Order.Customer is not null %} onsubmit=\"updatePointItem()\"{% endif %}>
        <input type=\"hidden\" name=\"mode\" value=\"\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.return_link) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.order_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.order_info'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.order_no'|trans }}\">{{ 'admin.order.order_no'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                            <div class=\"col\">{{ Order.order_no }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.order_status'|trans }}\">{{ 'admin.order.order_status'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                {% if Order.id is not empty %}
                                                    {{ form_widget(form.OrderStatus) }}
                                                    {{ form_errors(form.OrderStatus) }}
                                                {% endif %}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.payment_method'|trans }}</label>
                                            <div class=\"col\">
                                                {{ form_widget(form.Payment) }}
                                                {{ form_errors(form.Payment) }}
                                                <p class=\"form-text fw-bold text-danger mb-0\">{{ 'admin.order.change_payment_method_message'|trans }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.order_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.order_date ? Order.order_date|date_sec : '' }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.payment_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.payment_date ? Order.payment_date|date_sec : '' }}</div>
                                        </div>
                                        {% if not Order.isMultiple %}
                                            <div class=\"row mb-3\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.shipping_date'|trans }}</div>
                                                <div class=\"col\">
                                                    {{ Order.Shippings[0].shipping_date|date_sec }}
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.common.update_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.update_date ? Order.update_date|date_sec : '' }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.common.device_type'|trans }}</div>
                                            <div class=\"col\">{{ Order.device_type }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-commenting fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.message'|trans }}</div>
                                            <div class=\"col\">{{ Order.message ? Order.message|nl2br : '' }}</div>
                                        </div>
                                    </div>
                                </div>

                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-3\">
                                                        <span>{{ f.vars.label|trans }}</span>
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(f) }}
                                                        {{ form_errors(f) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">{{ 'admin.order.orderer'|trans }}</span></div>
                                </div>
                                <div class=\"col\">{% if id %}<span class=\"me-5\">{% if form.Customer.vars.value is empty %}{{ 'admin.order.non_member'|trans }}{% else %}<a href=\"{{ url('admin_customer_edit', {'id': form.Customer.vars.value}) }}\">{{ form.Customer.vars.value }}</a>{% endif %}</span>{{ Order.full_name }} ({{ Order.full_name_kana }}) 〒{{ Order.postal_code }} {{ Order.pref }}{{ Order.addr01 }}{{ Order.addr02 }} {{ Order.email }}{% endif %}</div>
                                <div class=\"col-1 text-end\"><a class=\"d-block\" data-bs-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa {{ id ? 'fa-angle-down' : 'fa-angle-up' }} fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse {{ id ? '' : 'show' }} ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                {% if Order.id is empty %}
                                    <div class=\"row mb-3\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-ec-regular px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchCustomerModal\">{{ 'admin.order.search_from_customer'|trans }}</a>
                                        </div>
                                    </div>
                                    <!-- 会員検索モーダル -->
                                    <div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCustomerModal\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title fw-bold\">{{ 'admin.order.search_customer_title'|trans }}</h5>
                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    {{ form_widget(searchCustomerModalForm.multi, { attr : {'class': 'mb-2searchCustomerModal', placeholder : 'admin.customer.multi_search_label' }}) }}
                                                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">{{ 'admin.common.search'|trans }}</button>
                                                    <div class=\"mb-3\" id=\"searchCustomerModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row\">
                                            <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.customer_id'|trans }}\">{{ 'admin.customer.customer_id'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">{% if form.Customer.vars.value is empty %}{{ 'admin.order.non_member'|trans }}{% else %}<a href=\"{{ url('admin_customer_edit', {'id': form.Customer.vars.value}) }}\">{{ form.Customer.vars.value }}</a>{% endif %}</p>
                                                {{ form_widget(form.Customer) }}
                                                {{ form_errors(form.Customer) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.name'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.name.name01) }}
                                                        {{ form_errors(form.name.name01) }}
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(form.name.name02) }}
                                                        {{ form_errors(form.name.name02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.kana'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.kana.kana01) }}
                                                        {{ form_errors(form.kana.kana01) }}
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(form.kana.kana02) }}
                                                        {{ form_errors(form.kana.kana02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.address'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col row align-items-center\">
                                                        <span class=\"col-auto\">{{ 'admin.common.postal_symbol'|trans }}</span>
                                                        <span class=\"col-auto ps-0\">{{ form_widget(form.postal_code) }}</span>
                                                        {{ form_errors(form.postal_code) }}
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.pref) }}
                                                        {{ form_errors(form.address.pref) }}
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.addr01) }}
                                                        {{ form_errors(form.address.addr01) }}
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.addr02) }}
                                                        {{ form_errors(form.address.addr02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.mail_address'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                {{ form_widget(form.email) }}
                                                {{ form_errors(form.email) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.phone_number'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                {{ form_widget(form.phone_number) }}
                                                {{ form_errors(form.phone_number) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.company_name'|trans }}</label>
                                            <div class=\"col\">
                                                {{ form_widget(form.company_name) }}
                                                {{ form_errors(form.company_name) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.order.message'|trans }}</label>
                                            <div class=\"col\">
                                                {{ form_widget(form.message, { attr : {'rows': 8 }}) }}
                                                {{ form_errors(form.message) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.shipping_info'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                {% if Order.isMultiple %}
                                    {# 複数配送の場合は配送先の表示のみ #}
                                    <div class=\"mb-3\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.order.shipping_registration'|trans
                                           }) }}\" href=\"{{ path(\"admin_shipping_edit\", {id: Order.id}) }}\">{{ 'admin.order.edit_multiple_shipping'|trans }}</a>
                                        <span class=\"ml-3\">{{ 'admin.order.edit_multiple_shipping_description'|trans }}</span>
                                    </div>
                                    {% for shipping in Order.Shippings %}
                                        <div class=\"col\">
                                            <span class=\"me-5\">{{ 'admin.order.delivery'|trans }}({{ loop.index }})</span>
                                            {% set shipping_name = shipping.full_name ~ '(' ~ shipping.full_name_kana ~ ')' ~ (shipping.company_name is not null ? ' ' ~ shipping.company_name : '') %}
                                            {% set shipping_addr = 'admin.common.postal_symbol'|trans ~ shipping.postal_code ~ ' ' ~ shipping.pref ~ shipping.addr01 ~ shipping.addr02 %}
                                            {% set shipping_date = shipping.shipping_date is not null ? shipping.shipping_date|date_day : '' %}
                                            {{ shipping_name }} {{ shipping_addr }} {{ shipping.phone_number }} {{ shipping_date }}
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    {# 単数配送の場合は配送先の編集が可能 #}
                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <button type=\"button\" class=\"btn btn-ec-regular copy-customer\">{{ 'admin.order.copy_orderer'|trans }}</button>
                                            {% if Order.id is not empty %}
                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"{{ url('admin_order_export_pdf') }}?ids[]={{ Order.Shippings[0].id }}\">{{ 'admin.order.output_delivery_note'|trans }}</a>
                                            {% endif %}
                                        </div>
                                        {% if Order.id is not empty %}
                                            <div class=\"col-6 text-end\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.order.shipping_registration'|trans
                                           }) }}\" href=\"{{ path(\"admin_shipping_edit\", {id: Order.id}) }}\">{{ 'admin.order.add_shipping'|trans }}</a>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.name'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.name.name01) }}
                                                            {{ form_errors(form.Shipping.name.name01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.name.name02) }}
                                                            {{ form_errors(form.Shipping.name.name02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.kana'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.kana.kana01) }}
                                                            {{ form_errors(form.Shipping.kana.kana01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.kana.kana02) }}
                                                            {{ form_errors(form.Shipping.kana.kana02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.address'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">{{ 'admin.common.postal_symbol'|trans }}</span>
                                                            <span class=\"col-auto ps-0\">{{ form_widget(form.Shipping.postal_code) }}</span>
                                                            {{ form_errors(form.Shipping.postal_code) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.pref) }}
                                                            {{ form_errors(form.Shipping.address.pref) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.addr01) }}
                                                            {{ form_errors(form.Shipping.address.addr01) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.addr02) }}
                                                            {{ form_errors(form.Shipping.address.addr02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.phone_number'|trans }}<span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.phone_number) }}
                                                    {{ form_errors(form.Shipping.phone_number) }}
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.company_name'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.company_name) }}
                                                    {{ form_errors(form.Shipping.company_name) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12\">
                                            <hr>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.tracking_number'|trans }}\">{{ 'admin.order.tracking_number'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.tracking_number) }}
                                                    {{ form_errors(form.Shipping.tracking_number) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.delivery_provider'|trans }}\">{{ 'admin.order.delivery_provider'|trans }}<span class=\"badge bg-primary ms-1\"></span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.Delivery) }}
                                                    {{ form_errors(form.Shipping.Delivery) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.shop_memo'|trans }}\">{{ 'admin.order.shop_memo_for_shipped'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.note) }}
                                                    {{ form_errors(form.Shipping.note) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.delivery_date'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.shipping_delivery_date) }}
                                                    {{ form_errors(form.Shipping.shipping_delivery_date) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>{{ 'admin.order.delivery_time'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.DeliveryTime) }}
                                                    {{ form_errors(form.Shipping.DeliveryTime) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.product_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.product_info'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        {# 複数配送の場合は商品追加できない #}
                                        {% if not Order.isMultiple %}
                                            <a class=\"btn btn-ec-regular me-2 add\" data-bs-toggle=\"modal\" data-bs-target=\"#addProduct\">{{ 'admin.order.add_product_item'|trans }}</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">{{ 'admin.order.add_product_item'|trans }}</h5>
                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            {{ form_widget(searchProductModalForm.id, { attr : {'class': 'mb-3', 'placeholder': 'admin.product.multi_search_label' }}) }}
                                                            {{ form_widget(searchProductModalForm.category_id) }}
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">{{ 'admin.common.search'|trans }}</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                        <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\">{{ 'admin.order.add_other_item'|trans }}</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">{{ 'admin.order.add_other_item'|trans }}</h5>
                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <div id=\"searchOrderItemTypeList\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{ form_errors(form.OrderItemsErrors) }}
                                    </div>
                                    <div class=\"col-5 text-end\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular me-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"{{ action_disabled ? ' disabled=\"disabled\"' }}>{{ 'admin.order.update_calculation_results'|trans }}</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"{% apply escape %}{{ include('@admin/Order/order_item_prototype.twig', {'orderItemForm': form.OrderItems.vars.prototype}) }}{% endapply %}\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 ps-3\">{{ 'admin.product.product_name_and_code'|trans }}</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.amount'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.quantity'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.tax_rate'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.tax_type'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.subtotal'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pe-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for orderItemForm in form.OrderItems %}
                                        {% set OrderItem = orderItemForm.vars.data %}
                                        <tr data-row=\"{{ orderItemForm.vars.id }}\">
                                            {# hidden values #}
                                            {{ form_widget(orderItemForm.ProductClass) }}
                                            {{ form_widget(orderItemForm.order_item_type) }}
                                            {{ form_widget(orderItemForm.point_rate) }}
                                            {{ form_widget(orderItemForm.tax_type) }}
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 ps-3\">
                                                <p class=\"mb-0 fw-bold\">
                                                    {# 商品とポイント値引きは名前変更できない #}
                                                    {% if OrderItem.isProduct or OrderItem.isPoint %}
                                                        {% if OrderItem.isProduct %}
                                                            <a href=\"{{ url('admin_product_product_edit', {id: OrderItem.ProductClass.Product.id}) }}\" target=\"_blank\">
                                                                {{ OrderItem.product_name }}
                                                            </a>
                                                        {% else %}
                                                            {{ OrderItem.product_name }}
                                                        {% endif %}
                                                        {{ form_widget(orderItemForm.product_name, { 'type': 'hidden' }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.product_name) }}
                                                    {% endif %}
                                                </p>
                                                <span>
                                                    {{ OrderItem.product_code }}
                                                    {% if OrderItem.class_category_name1 is not empty %}
                                                        / (
                                                        {{ OrderItem.class_name1 }}：
                                                        {{ OrderItem.class_category_name1 }}
                                                        {% if OrderItem.class_category_name2 is not empty %}
                                                            /
                                                            {{ OrderItem.class_name2 }}：
                                                            {{ OrderItem.class_category_name2 }}
                                                        {% endif %}
                                                        )
                                                    {% endif %}
                                                </span>
                                                {{ form_errors(orderItemForm.product_name) }}
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    {# ポイント値引きは価格変更できない #}
                                                    {% if OrderItem.isPoint %}
                                                        {{ form_widget(orderItemForm.price, {'attr': { 'readonly': 'readonly', 'class': 'pointPrice' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.price) }}
                                                    {% endif %}
                                                    <div class=\"text-end small\">({{ OrderItem.TaxDisplayType }})</div>
                                                    {{ form_errors(orderItemForm.price) }}
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    {# 複数配送の場合は商品の個数を変更できない、ポイントの場合も個数を変更できない #}
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint %}
                                                        {{ form_widget(orderItemForm.quantity, { 'attr': { 'readonly': 'readonly' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.quantity) }}
                                                    {% endif %}
                                                    {{ form_errors(orderItemForm.quantity) }}
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    {# 複数配送・ポイント明細・不課税明細は商品の税率を変更できない #}
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint or OrderItem.TaxType.id == constant('Eccube\\\\Entity\\\\Master\\\\TaxType::NON_TAXABLE') %}
                                                        {{ form_widget(orderItemForm.tax_rate, { 'attr': { 'readonly': 'readonly' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.tax_rate) }}
                                                    {% endif %}
                                                    {{ form_errors(orderItemForm.tax_rate) }}
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    {{ OrderItem.tax_type }}
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>{{ OrderItem.total_price|price }}</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-end pe-3\">
                                                <div class=\"row justify-content-end\">
                                                    {# 複数配送の場合は商品を削除できない #}
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint %}
                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    {% else %}
                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                 data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_{{ orderItemForm.vars.id }}\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_{{ orderItemForm.vars.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_{{ orderItemForm.vars.id }}\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start\">{{ 'admin.order.delete_item__confirm_message'|trans({ '%name%' : OrderItem.product_name }) }}</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">{{ 'admin.common.delete'|trans }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.subtotal'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.subtotal|price }}</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.delivery_fee'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.delivery_fee_total|price }}</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.common.charge'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.charge|price }}</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.discount'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">{{ Order.taxable_discount|price }}</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.total'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.taxable_total|price }}</span></div>
                                </div>
                                {% for item in Order.tax_free_discount_items %}
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ item.product_name }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle text-danger fw-normal\">{{ item.total_price|price }}</span></div>
                                </div>
                                {% endfor %}
                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.payment_total'|trans }}</span></div>
                                    <div class=\"col-2 text-end\"><span class=\"h4 align-middle fw-normal\">{{ Order.payment_total|price }}</span></div>
                                </div>
                                <hr>
                                <!-- 消費税額 -->
                                {% for rate, total in Order.total_by_tax_rate %}
                                    <div class=\"row justify-content-end mb-3\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">{{ 'common.tax_rate_target'|trans({ '%rate%': rate }) }}</span></div>
                                        <div class=\"col-2 text-end\"><span class=\"align-middle fw-normal\">{{ total|price }}</span>({{ 'common.tax_amount'|trans }} {{ Order.tax_by_tax_rate[rate]|price }})</div>
                                    </div>
                                {% endfor %}
                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.add_point'|trans }}</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            {{ form.vars.value.addpoint|number_format }}
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.use_point'|trans }}</span></div>
                                    <div class=\"col-2 text-end\">
                                        <span class=\"h4 align-middle fw-normal\">
                                            {# ポイント機能が有効かつ会員の場合のみポイントを編集可能とする #}
                                            {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                                                {{ form_widget(form.use_point) }}
                                            {% else %}
                                                {{ form_widget(form.use_point, {'attr': { 'readonly': 'readonly' } }) }}
                                            {% endif %}
                                            {{ form_errors(form.use_point) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.shop_memo'|trans }}\"><span class=\"card-title\">{{ 'admin.common.shop_memo'|trans }}<i class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                {{ form_widget(form.note, {'attr': {'rows': 8}}) }}
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- メール送信履歴 -->
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.order.mail_history'|trans }}\"><span class=\"card-title\">{{ 'admin.order.mail_history'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                    </div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#mailHistory\" aria-expanded=\"false\" aria-controls=\"mailHistory\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"mailHistory\">
                                <div class=\"card-body\">
                                    <table class=\"table table-striped\">
                                        <thead class=\"table-active\">
                                        <tr>
                                            <th class=\"pt-2 pb-2 ps-3\">{{ 'admin.order.mail_send_date'|trans }}</th>
                                            <th class=\"pt-2 pb-2 pe-3\">{{ 'admin.order.mail_subject'|trans }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for MailHistory in Order.MailHistories %}
                                            <tr>
                                                <td class=\"ps-3\">{{ MailHistory.send_date|date_min }}</td>
                                                <td class=\"pe-3\">
                                                    <a class=\"text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#mail2-{{ loop.index }}\">{{ MailHistory.mail_subject }}</a>
                                                    <div class=\"modal fade\" id=\"mail2-{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-{{ loop.index }}\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">{{ MailHistory.mail_subject }}</h5>
                                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        {% if MailHistory.mail_html_body|length > 0 %}
                                                                            {{ MailHistory.mail_html_body|raw|purify }}
                                                                        {% else %}
                                                                            {{ MailHistory.mail_body|nl2br }}
                                                                        {% endif %}
                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.close'|trans }}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                               '%name%' : 'admin.order.mail'|trans
                                           }) }}\" href=\"{{ path('admin_order_mail', { id : Order.id }) }}\">{{ 'admin.order.mail_create'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    {% endif %}
                </div>
            </div>
        </div>
        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_order', { 'resume': 1 }) }}\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.order.order_list'|trans }}</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"{{ action_disabled ? ' disabled=\"disabled\"' }}>{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Order/edit.twig", "C:\\xampp\\htdocs\\coolShoes\\ec-cube\\src\\Eccube\\Resource\\template\\admin\\Order\\edit.twig");
    }
}
