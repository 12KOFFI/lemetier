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

/* etablissement_metier/form.html.twig */
class __TwigTemplate_8f6e1eda445b35b0509246d746d027af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissement_metier/form.html.twig"));

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

        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "id", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvelle"));
        yield " affectation | ";
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
    <div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 mb-8 text-white\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 bg-white/20 rounded-full flex items-center justify-center\">
                <i class=\"fas fa-link text-3xl\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl font-bold\">";
        // line 17
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "id", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvelle"));
        yield " affectation</h1>
                <p class=\"text-white/80\">";
        // line 18
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "id", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifiez les places disponibles") : ("Affectez un métier à un établissement"));
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
    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden p-8\">
        ";
        // line 27
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">
                    Établissement <span class=\"text-red-500\">*</span>
                </label>
                ";
        // line 34
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etablissement", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
            </div>

            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">
                    Métier <span class=\"text-red-500\">*</span>
                </label>
                ";
        // line 41
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "metier", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
            </div>

            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">
                    Nombre de places <span class=\"text-red-500\">*</span>
                </label>
                ";
        // line 48
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nbrplace", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex: 25", "min" => 0]]);
        yield "
            </div>

            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">
                    Durée de formation
                </label>
                ";
        // line 55
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dureeFormation", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
            </div>

            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">
                    Niveau requis
                </label>
                ";
        // line 62
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "niveauRequis", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
            </div>
        </div>

        <!-- Boutons d\x27action -->
        <div class=\"flex justify-end gap-4 pt-6 border-t border-slate-200\">
            <a href=\"";
        // line 68
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_metier_index");
        yield "\" 
               class=\"px-6 py-2 border border-slate-300 rounded-lg text-slate-700 hover:bg-slate-50 transition inline-flex items-center\">
                <i class=\"fas fa-times mr-2\"></i>
                Annuler
            </a>
            <button type=\"submit\" 
                    class=\"px-6 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-lg hover:from-indigo-700 hover:to-purple-700 transition transform hover:scale-105 shadow-lg inline-flex items-center\">
                <i class=\"fas ";
        // line 75
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "id", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-save") : ("fa-plus-circle"));
        yield " mr-2\"></i>
                ";
        // line 76
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "id", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Enregistrer"));
        yield "
            </button>
        </div>

        ";
        // line 80
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
        return "etablissement_metier/form.html.twig";
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
        return array (  201 => 80,  194 => 76,  190 => 75,  180 => 68,  171 => 62,  161 => 55,  151 => 48,  141 => 41,  131 => 34,  121 => 27,  116 => 24,  114 => 23,  106 => 18,  102 => 17,  92 => 9,  82 => 8,  63 => 3,  55 => 1,  53 => 6,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "etablissement_metier/form.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\etablissement_metier\\form.html.twig");
    }
}
