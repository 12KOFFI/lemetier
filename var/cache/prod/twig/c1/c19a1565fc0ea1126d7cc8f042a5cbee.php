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

/* etablissement/form.html.twig */
class __TwigTemplate_213aa71236293992b08e0fd9b9102d78 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return $this->parent ??= $this->load("base_dashboard.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissement/form.html.twig"));

        // line 7
        $context["input_class"] = "w-full px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition";
        // line 2
        $this->parent = $this->load("base_dashboard.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvel"));
        yield " établissement | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<div class=\"mx-auto\">
    <!-- En-tête -->
    <div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 mb-8 text-white\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 bg-white/20 rounded-full flex items-center justify-center\">
                <i class=\"fas fa-school text-3xl\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl font-bold\">";
        // line 18
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvel"));
        yield " établissement</h1>
                <p class=\"text-white/80\">";
        // line 19
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifiez les informations de l\x27établissement") : ("Créez un nouvel établissement de formation"));
        yield "</p>
            </div>
        </div>
    </div>

    ";
        // line 24
        yield from $this->load("partials/_flash_messages.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
    <!-- Formulaire -->
    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden p-8\">
        ";
        // line 28
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-6", "id" => "etablissement_form"]]);
        yield "

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">
                    Nom de l\x27établissement <span class=\"text-red-500\">*</span>
                </label>
                ";
        // line 35
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex: Centre de formation professionnelle"]]);
        yield "
                ";
        // line 36
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 36), 'errors');
        yield "
            </div>

            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">
                    Définition
                </label>
                ";
        // line 43
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "definition", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Brève description de l\x27établissement"]]);
        yield "
                ";
        // line 44
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "definition", [], "any", false, false, false, 44), 'errors');
        yield "
            </div>

            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">
                    Localité <span class=\"text-red-500\">*</span>
                </label>
                ";
        // line 51
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "localite", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
                ";
        // line 52
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "localite", [], "any", false, false, false, 52), 'errors');
        yield "
            </div>

            ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", true, true, false, 55)) {
            // line 56
            yield "                <div>
                    ";
            // line 57
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-slate-700 mb-1"]]);
            yield "
                    ";
            // line 58
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
            yield "
                    ";
            // line 59
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 59), 'help', ["help_attr" => ["class" => "mt-1 text-xs text-slate-500"]]);
            yield "
                    ";
            // line 60
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 60), 'errors');
            yield "
                </div>
            ";
        }
        // line 63
        yield "        </div>

        <!-- Boutons d\x27action -->
        <div class=\"flex justify-end gap-4 pt-6 border-t border-slate-200\">
            <a href=\"";
        // line 67
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_index");
        yield "\" 
               class=\"px-6 py-2 border border-slate-300 rounded-lg text-slate-700 hover:bg-slate-50 transition inline-flex items-center\">
                <i class=\"fas fa-times mr-2\"></i>
                Annuler
            </a>
            <button type=\"submit\" 
                    class=\"px-6 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-lg hover:from-indigo-700 hover:to-purple-700 transition transform hover:scale-105 shadow-lg inline-flex items-center\">
                <i class=\"fas ";
        // line 74
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-save") : ("fa-plus-circle"));
        yield " mr-2\"></i>
                ";
        // line 75
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Enregistrer"));
        yield "
            </button>
        </div>

        ";
        // line 79
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
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
        return "etablissement/form.html.twig";
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
        return array (  242 => 85,  232 => 84,  220 => 79,  213 => 75,  209 => 74,  199 => 67,  193 => 63,  187 => 60,  183 => 59,  179 => 58,  175 => 57,  172 => 56,  170 => 55,  164 => 52,  160 => 51,  150 => 44,  146 => 43,  136 => 36,  132 => 35,  122 => 28,  117 => 25,  115 => 24,  107 => 19,  103 => 18,  93 => 10,  83 => 9,  64 => 4,  56 => 2,  54 => 7,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "etablissement/form.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\etablissement\\form.html.twig");
    }
}
