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

/* Entry/confirm.twig */
class __TwigTemplate_cbb337faebad226877f942c9a43a4d01367ffc3e11f30fc1ddc96110f4839814 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Entry/confirm.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Entry/confirm.twig"));

        // line 13
        $context["body_class"] = "registration_page";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Entry/confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録(確認)"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
        echo "\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "_token", [], "any", false, false, false, 25), 'widget');
        echo "
                    <p>";
        // line 26
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("下記の内容で登録してもよろしいでしょうか？
よろしければ、一番下の「会員登録をする」ボタンをクリックしてください。
"), "html", null, true));
        // line 28
        echo "</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "ec-label "], "label" => "お名前"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "name01", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "data", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        // line 36
        echo "                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "name02", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "data", [], "any", false, false, false, 36), "html", null, true);
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "name01", [], "any", false, false, false, 37), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "name02", [], "any", false, false, false, 38), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "kana", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "kana", [], "any", false, false, false, 46), "kana01", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "data", [], "any", false, false, false, 46), "html", null, true);
        echo "
                                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "kana", [], "any", false, false, false, 47), "kana02", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47), "html", null, true);
        echo "
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "kana", [], "any", false, false, false, 48), "kana01", [], "any", false, false, false, 48), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "kana", [], "any", false, false, false, 49), "kana02", [], "any", false, false, false, 49), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "ctype", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "Customer Type"]);
        echo "
                            </dt>
                            <dd>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "ctype", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "data", [], "any", false, false, false, 56), "html", null, true);
        echo "
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "ctype", [], "any", false, false, false, 57), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "company_name", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "company_name", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "data", [], "any", false, false, false, 65), "html", null, true);
        echo "
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "company_name", [], "any", false, false, false, 66), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "address", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 75
        echo "                                <span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "postal_code", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "data", [], "any", false, false, false, 75), "html", null, true);
        echo "
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "postal_code", [], "any", false, false, false, 76), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 78
        echo "                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "address", [], "any", false, false, false, 78), "pref", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "data", [], "any", false, false, false, 78), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "address", [], "any", false, false, false, 78), "addr01", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "data", [], "any", false, false, false, 78), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "address", [], "any", false, false, false, 78), "addr02", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "data", [], "any", false, false, false, 78), "html", null, true);
        echo "
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "address", [], "any", false, false, false, 79), "pref", [], "any", false, false, false, 79), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "address", [], "any", false, false, false, 80), "addr01", [], "any", false, false, false, 80), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "address", [], "any", false, false, false, 81), "addr02", [], "any", false, false, false, 81), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "phone_number", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                            </dt>
                            <dd>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "phone_number", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "data", [], "any", false, false, false, 88), "html", null, true);
        echo "
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "phone_number", [], "any", false, false, false, 89), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "data", [], "any", false, false, false, 97), "html", null, true);
        echo "
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), "first", [], "any", false, false, false, 98), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), "second", [], "any", false, false, false, 99), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "plain_password", [], "any", false, false, false, 104), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "パスワード"]);
        echo "
                            </dt>
                            <dd>
                                ********
                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "plain_password", [], "any", false, false, false, 108), "first", [], "any", false, false, false, 108), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "plain_password", [], "any", false, false, false, 109), "second", [], "any", false, false, false, 109), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "birth", [], "any", false, false, false, 114), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "生年月日"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 117
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "birth", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "data", [], "any", false, false, false, 117)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "birth", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "data", [], "any", false, false, false, 117)), "html", null, true))) : (print ("")));
        echo "
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "birth", [], "any", false, false, false, 118), "year", [], "any", false, false, false, 118), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "birth", [], "any", false, false, false, 119), "month", [], "any", false, false, false, 119), 'widget', ["type" => "hidden"]);
        echo "
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "birth", [], "any", false, false, false, 120), "day", [], "any", false, false, false, 120), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "sex", [], "any", false, false, false, 125), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "性別"]);
        echo "
                            </dt>
                            <dd>
                                ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "sex", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "data", [], "any", false, false, false, 128), "html", null, true);
        echo "
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "sex", [], "any", false, false, false, 129), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "job", [], "any", false, false, false, 134), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "職業"]);
        echo "
                            </dt>
                            <dd>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "job", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "data", [], "any", false, false, false, 136), "html", null, true);
        echo "
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "job", [], "any", false, false, false, 137), 'widget', ["type" => "hidden"]);
        echo "
                            </dd>
                        </dl>

                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "user_policy_check", [], "any", false, false, false, 141), 'widget', ["type" => "hidden"]);
        echo "

                        ";
        // line 144
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 144), "eccube_form_options", [], "any", false, false, false, 144), "auto_render", [], "any", false, false, false, 144); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 145
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 145), "eccube_form_options", [], "any", false, false, false, 145), "form_theme", [], "any", false, false, false, 145)) {
                // line 146
                echo "                                ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 146), "eccube_form_options", [], "any", false, false, false, 146), "form_theme", [], "any", false, false, false, 146)], true);
                // line 147
                echo "                                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            } else {
                // line 149
                echo "                                <dl>
                                    <dt>
                                        ";
                // line 151
                $context["label_class"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, true, false, 151), "label_attr", [], "any", false, true, false, 151), "class", [], "any", true, true, false, 151)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 151), "label_attr", [], "any", false, false, false, 151), "class", [], "any", false, false, false, 151)) : (""));
                // line 152
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'label', ["label_attr" => ["class" => ((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 152, $this->source); })()) . " ec-label")]] + (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 152), "label", [], "any", false, false, false, 152)) ? [] : ["label" => $_label_]));
                echo "
                                    </dt>
                                    <dd>
                                        <div class=\"";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 155), "eccube_form_options", [], "any", false, false, false, 155), "style_class", [], "any", false, false, false, 155), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($context["f"])) ? (" error") : (""));
                echo "\">
                                            ";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 156), "data", [], "any", false, false, false, 156), "html", null, true);
                echo "
                                            ";
                // line 157
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget', ["type" => "hidden"]);
                echo "
                                        </div>
                                    </dd>
                                </dl>
                            ";
            }
            // line 162
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\" value=\"complete\">";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録をする"), "html", null, true);
        echo "</button>
                                <button class=\"ec-blockBtn--cancel\" type=\"submit\" name=\"mode\" value=\"back\">";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Entry/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 168,  413 => 167,  407 => 163,  401 => 162,  393 => 157,  389 => 156,  384 => 155,  377 => 152,  375 => 151,  371 => 149,  365 => 147,  362 => 146,  359 => 145,  354 => 144,  349 => 141,  342 => 137,  338 => 136,  333 => 134,  325 => 129,  321 => 128,  315 => 125,  307 => 120,  303 => 119,  299 => 118,  295 => 117,  289 => 114,  281 => 109,  277 => 108,  270 => 104,  262 => 99,  258 => 98,  254 => 97,  248 => 94,  240 => 89,  236 => 88,  231 => 86,  223 => 81,  219 => 80,  215 => 79,  206 => 78,  202 => 76,  195 => 75,  189 => 71,  181 => 66,  177 => 65,  171 => 62,  163 => 57,  159 => 56,  154 => 54,  146 => 49,  142 => 48,  138 => 47,  134 => 46,  128 => 43,  120 => 38,  116 => 37,  111 => 36,  108 => 35,  102 => 32,  96 => 28,  92 => 26,  88 => 25,  84 => 24,  77 => 20,  73 => 18,  63 => 17,  52 => 11,  50 => 15,  48 => 13,  35 => 11,);
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
{% extends 'default_frame.twig' %}

{% set body_class = 'registration_page' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% block main %}
    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ '新規会員登録(確認)'|trans }}</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"{{ url('entry') }}\">
                    {{ form_widget(form._token) }}
                    <p>{{ '下記の内容で登録してもよろしいでしょうか？
よろしければ、一番下の「会員登録をする」ボタンをクリックしてください。
'|trans|nl2br }}</p>
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                {{ form_label(form.name, 'お名前', { 'label_attr': { 'class': 'ec-label '}}) }}
                            </dt>
                            <dd>
                                {{ form.name.name01.vars.data }} {# form.vars.value = form.vars.data = Customer #}
                                {{ form.name.name02.vars.data }}
                                {{ form_widget(form.name.name01, { type : 'hidden' }) }}
                                {{ form_widget(form.name.name02, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.kana, 'お名前(カナ)', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                {{ form.kana.kana01.vars.data }}
                                {{ form.kana.kana02.vars.data }}
                                {{ form_widget(form.kana.kana01, { type : 'hidden' }) }}
                                {{ form_widget(form.kana.kana02, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.ctype, 'Customer Type', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>{{ form.ctype.vars.data }}
                                {{ form_widget(form.ctype, { type: 'hidden'}) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.company_name, '会社名', { 'label_attr': { 'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                {{ form.company_name.vars.data }}
                                {{ form_widget(form.company_name, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.address, '住所', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                {# 郵便番号 #}
                                <span>{{ '〒'|trans }}</span>{{ form.postal_code.vars.data }}
                                {{ form_widget(form.postal_code, { type : 'hidden' }) }}
                                {# 都道府県・住所 #}
                                {{ form.address.pref.vars.data }} {{ form.address.addr01.vars.data }} {{ form.address.addr02.vars.data }}
                                {{ form_widget(form.address.pref, { type : 'hidden' }) }}
                                {{ form_widget(form.address.addr01, { type : 'hidden' }) }}
                                {{ form_widget(form.address.addr02, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.phone_number, '電話番号', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>{{ form.phone_number.vars.data }}
                                {{ form_widget(form.phone_number, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.email, 'メールアドレス', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                {{ form.email.vars.data }}
                                {{ form_widget(form.email.first, { type : 'hidden' }) }}
                                {{ form_widget(form.email.second, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.plain_password, 'パスワード', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                ********
                                {{ form_widget(form.plain_password.first, { type : 'hidden' }) }}
                                {{ form_widget(form.plain_password.second, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.birth, '生年月日', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                {{ form.birth.vars.data ? form.birth.vars.data|date_day() }}
                                {{ form_widget(form.birth.year, { type : 'hidden' }) }}
                                {{ form_widget(form.birth.month, { type : 'hidden' }) }}
                                {{ form_widget(form.birth.day, { type : 'hidden' }) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.sex, '性別', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>
                                {{ form.sex.vars.data }}
                                {{ form_widget(form.sex, { type: 'hidden'}) }}
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.job, '職業', {'label_attr': {'class': 'ec-label'}}) }}
                            </dt>
                            <dd>{{ form.job.vars.data }}
                                {{ form_widget(form.job, { type: 'hidden'}) }}
                            </dd>
                        </dl>

                        {{ form_widget(form.user_policy_check, { type: 'hidden'}) }}

                        {# エンティティ拡張の自動出力 #}
                        {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                            {% if f.vars.eccube_form_options.form_theme %}
                                {% form_theme f f.vars.eccube_form_options.form_theme %}
                                {{ form_row(f) }}
                            {% else %}
                                <dl>
                                    <dt>
                                        {% set label_class =  f.vars.label_attr.class is defined ? f.vars.label_attr.class : '' %}
                                        {{ form_label(f, f.vars.label, { 'label_attr': {'class': label_class ~ ' ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div class=\"{{ f.vars.eccube_form_options.style_class }}{{ has_errors(f) ? ' error' }}\">
                                            {{ f.vars.data }}
                                            {{ form_widget(f, { type: 'hidden'}) }}
                                        </div>
                                    </dd>
                                </dl>
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\" value=\"complete\">{{ '会員登録をする'|trans }}</button>
                                <button class=\"ec-blockBtn--cancel\" type=\"submit\" name=\"mode\" value=\"back\">{{ '戻る'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "Entry/confirm.twig", "C:\\xampp\\htdocs\\coolShoes\\ec-cube\\src\\Eccube\\Resource\\template\\default\\Entry\\confirm.twig");
    }
}
