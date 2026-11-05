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

/* metier/form.html.twig */
class __TwigTemplate_a9774c961052e527ef6d9cff981c011b extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metier/form.html.twig"));

        // line 6
        $context["input_class"] = "w-full px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition";
        // line 1
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

        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["metier"] ?? null), "id", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouveau"));
        yield " métier | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "<div class=\"mx-auto\">
    <!-- En-tête -->
    <div class=\"p-8 mb-8 text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl\">
        <div class=\"flex items-center gap-4\">
            <div class=\"flex items-center justify-center w-16 h-16 rounded-full bg-white/20\">
                <i class=\"text-3xl fas fa-briefcase\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl font-bold\">";
        // line 17
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["metier"] ?? null), "id", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouveau"));
        yield " métier</h1>
                <p class=\"text-white/80\">";
        // line 18
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["metier"] ?? null), "id", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifiez les informations du métier") : ("Créez un nouveau métier"));
        yield "</p>
            </div>
        </div>
    </div>

    ";
        // line 23
        yield from $this->load("partials/_flash_messages.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "
    <!-- Formulaire -->
    <div class=\"p-8 overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
            ";
        // line 27
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "

            <div class=\"grid grid-cols-1 gap-6 md:grid-cols-2\">
                <div>
                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                        Nom du métier <span class=\"text-red-500\">*</span>
                    </label>
                    ";
        // line 34
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " uppercase"), "placeholder" => "Ex: PLOMBIER"]]);
        yield "
                </div>
                <div>
                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                        Image d\x27illustration <span class=\"text-red-500\">*</span>
                    </label>
                    ";
        // line 40
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "w-full px-4 py-1.5 rounded-lg border border-slate-200 bg-white text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"]]);
        yield "
                </div>
            </div>

            <div>
                <label for=\"";
        // line 45
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
        yield "\" class=\"block mb-1 text-sm font-medium text-slate-700\">
                    Description du métier
                </label>
                ";
        // line 48
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "rows" => 5, "placeholder" => "Décrivez les principales missions de ce métier…"]]);
        yield "
                <p class=\"mt-1 text-xs text-slate-500\">Cette description sera affichée dans la fenêtre de détails du métier.</p>
                ";
        // line 50
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 50), 'errors');
        yield "
            </div>

            <!-- Boutons d\x27action -->
            <div class=\"flex justify-end gap-4 pt-6 border-t border-slate-200\">
                <a href=\"";
        // line 55
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_index");
        yield "\" 
                   class=\"inline-flex items-center px-6 py-2 transition border rounded-lg border-slate-300 text-slate-700 hover:bg-slate-50\">
                    <i class=\"mr-2 fas fa-times\"></i>
                    Annuler
                </a>
                <button type=\"submit\" 
                        class=\"inline-flex items-center px-6 py-2 font-semibold text-white transition transform rounded-lg shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 hover:scale-105\">
                    <i class=\"fas ";
        // line 62
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["metier"] ?? null), "id", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-save") : ("fa-plus-circle"));
        yield " mr-2\"></i>
                    ";
        // line 63
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["metier"] ?? null), "id", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Enregistrer"));
        yield "
                </button>
            </div>

            ";
        // line 67
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "metier/form.html.twig";
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
        return array (  191 => 67,  184 => 63,  180 => 62,  170 => 55,  162 => 50,  157 => 48,  151 => 45,  143 => 40,  134 => 34,  124 => 27,  119 => 24,  117 => 23,  109 => 18,  105 => 17,  95 => 9,  85 => 8,  66 => 3,  58 => 1,  56 => 6,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "metier/form.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\metier\\form.html.twig");
    }
}
