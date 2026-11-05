<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* localite/form.html.twig */
class __TwigTemplate_6a675fd16d8f0ebe3723cba9046e68d6 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'datatables_js' => [$this, 'block_datatables_js'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base_dashboard.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/form.html.twig"));

        $this->parent = $this->load("base_dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["localite"] ?? null), "id", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        Modifier la localité | ";
            yield from $this->yieldParentBlock("title", $context, $blocks);
            yield "
    ";
        } else {
            // line 7
            yield "        Nouvelle localité | ";
            yield from $this->yieldParentBlock("title", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        yield "<div class=\"mx-auto\">
    <div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 mb-8 text-white\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 bg-white/20 rounded-full flex items-center justify-center\">
                <i class=\"fas fa-map-marker-alt text-3xl\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl font-bold\">
                    ";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["localite"] ?? null), "id", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                        Modifier la localité
                    ";
        } else {
            // line 32
            yield "                        Nouvelle localité
                    ";
        }
        // line 34
        yield "                </h1>
                <p class=\"text-white/80\">
                    ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["localite"] ?? null), "id", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                        ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["localite"] ?? null), "nom", [], "any", false, false, false, 37), "html", null, true);
            yield "
                    ";
        } else {
            // line 39
            yield "                        Renseignez les informations de la localité
                    ";
        }
        // line 41
        yield "                </p>
            </div>
        </div>
    </div>

    ";
        // line 46
        yield from $this->load("partials/_flash_messages.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "
    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden p-6\">
        ";
        // line 49
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
        
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <!-- Nom -->
            <div class=\"col-span-2 md:col-span-1\">
                ";
        // line 54
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 mb-2"], "label" => "Nom de la localité"]);
        yield "
                ";
        // line 55
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition text-uppercase", "placeholder" => "Ex: ABIDJAN"]]);
        // line 58
        yield "
                ";
        // line 59
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 59), 'errors');
        yield "
            </div>

            <!-- Type -->
            <div class=\"col-span-2 md:col-span-1\">
                ";
        // line 64
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 mb-2"], "label" => "Type de localité"]);
        yield "
                ";
        // line 65
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"]]);
        // line 67
        yield "
                ";
        // line 68
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 68), 'errors');
        yield "
            </div>

            <!-- Localité parente -->
            <div class=\"col-span-2 md:col-span-1\">
                ";
        // line 73
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 mb-2"], "label" => "Localité parente"]);
        yield "
                ";
        // line 74
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 74), 'widget', ["id" => "localite_parent", "attr" => ["class" => "w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition select2", "data-placeholder" => "-- AUCUN --"]]);
        // line 80
        yield "
                ";
        // line 81
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 81), 'errors');
        yield "
            </div>
        </div>

        <div class=\"flex items-center justify-end gap-3 pt-6 border-t border-slate-200\">
            <a href=\"";
        // line 86
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_index");
        yield "\" 
               class=\"px-6 py-2 border border-slate-300 rounded-lg text-slate-700 hover:bg-slate-50 transition\">
                Annuler
            </a>
            <button type=\"submit\" 
                    class=\"px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition transform hover:scale-105 shadow-lg\">
                ";
        // line 92
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["localite"] ?? null), "id", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                    <i class=\"fas fa-save mr-2\"></i>Mettre à jour
                ";
        } else {
            // line 95
            yield "                    <i class=\"fas fa-plus-circle mr-2\"></i>Créer
                ";
        }
        // line 97
        yield "            </button>
        </div>

        ";
        // line 100
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatables_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatables_js"));

        // line 106
        yield "    <script src=\"";
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        if (typeof \$.fn.select2 !== \x27undefined\x27) {
            \$(\x27.select2\x27).select2({
                width: \x27100%\x27,
                allowClear: true
            });
        }
    });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "localite/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  308 => 110,  298 => 109,  287 => 106,  277 => 105,  265 => 100,  260 => 97,  256 => 95,  252 => 93,  250 => 92,  241 => 86,  233 => 81,  230 => 80,  228 => 74,  224 => 73,  216 => 68,  213 => 67,  211 => 65,  207 => 64,  199 => 59,  196 => 58,  194 => 55,  190 => 54,  182 => 49,  178 => 47,  176 => 46,  169 => 41,  165 => 39,  159 => 37,  157 => 36,  153 => 34,  149 => 32,  145 => 30,  143 => 29,  133 => 21,  123 => 20,  107 => 12,  97 => 11,  85 => 7,  79 => 5,  76 => 4,  66 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "localite/form.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\localite\\form.html.twig");
    }
}
