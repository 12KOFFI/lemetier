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

/* session_recrutement/form.html.twig */
class __TwigTemplate_aac9f001ed6611b84c1745cb7c362e37 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session_recrutement/form.html.twig"));

        // line 5
        $context["input_class"] = "w-full px-4 py-2.5 rounded-lg border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition";
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

        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la session") : ("Nouvelle session"));
        yield " | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<div class=\"mx-auto\">
    <div class=\"p-8 mb-8 text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl\">
        <div class=\"flex items-center gap-4\">
            <div class=\"flex items-center justify-center w-16 h-16 rounded-full bg-white/20\">
                <i class=\"text-3xl fas fa-calendar-alt\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl font-bold\">";
        // line 15
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la session") : ("Nouvelle session de recrutement"));
        yield "</h1>
                <p class=\"text-white/80\">Configurez la campagne de recrutement du GROUPE LEMETIER</p>
            </div>
        </div>
    </div>

    ";
        // line 21
        yield from $this->load("partials/_flash_messages.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "
    <div class=\"p-8 overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
        ";
        // line 24
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
        <div class=\"grid grid-cols-1 gap-6 md:grid-cols-2\">
            <div class=\"md:col-span-2\">
                <label class=\"block mb-1 text-sm font-medium text-slate-700\">Nom de la session <span class=\"text-red-500\">*</span></label>
                ";
        // line 28
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex. Session 2026 - Vague 1"]]);
        yield "
                ";
        // line 29
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 29), 'errors');
        yield "
            </div>
            <div>
                <label class=\"block mb-1 text-sm font-medium text-slate-700\">Année <span class=\"text-red-500\">*</span></label>
                ";
        // line 33
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "annee", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
                ";
        // line 34
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "annee", [], "any", false, false, false, 34), 'errors');
        yield "
            </div>
            <div>
                <label class=\"block mb-1 text-sm font-medium text-slate-700\">N° de vague <span class=\"text-red-500\">*</span></label>
                ";
        // line 38
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroVague", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
                ";
        // line 39
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroVague", [], "any", false, false, false, 39), 'errors');
        yield "
                <p class=\"mt-1 text-xs text-slate-400\">
                    Sert à la gestion de la session ; ce numéro ne figure pas dans le numéro de candidature.
                </p>
            </div>
            <div>
                <label class=\"block mb-1 text-sm font-medium text-slate-700\">Statut <span class=\"text-red-500\">*</span></label>
                ";
        // line 46
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
                ";
        // line 47
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 47), 'errors');
        yield "
            </div>
            <div>
                <label class=\"block mb-1 text-sm font-medium text-slate-700\">Ouverture des inscriptions</label>
                ";
        // line 51
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateOuverture", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
                ";
        // line 52
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateOuverture", [], "any", false, false, false, 52), 'errors');
        yield "
            </div>
            <div>
                <label class=\"block mb-1 text-sm font-medium text-slate-700\">Clôture des inscriptions</label>
                ";
        // line 56
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateCloture", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
                ";
        // line 57
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateCloture", [], "any", false, false, false, 57), 'errors');
        yield "
            </div>
            <div class=\"p-4 border border-indigo-100 rounded-lg md:col-span-2 bg-indigo-50/50\">
                <label class=\"block mb-2 text-sm font-medium text-slate-700\">Session active</label>
                <div class=\"flex gap-6 text-sm text-slate-700\">";
        // line 61
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "active", [], "any", false, false, false, 61), 'widget');
        yield "</div>
                ";
        // line 62
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "active", [], "any", false, false, false, 62), 'errors');
        yield "
            </div>
            <div class=\"md:col-span-2\">
                <label class=\"block mb-1 text-sm font-medium text-slate-700\">Description</label>
                ";
        // line 66
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "rows" => 5, "placeholder" => "Présentez les objectifs et les modalités de la session."]]);
        yield "
                ";
        // line 67
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 67), 'errors');
        yield "
            </div>
        </div>

        <div class=\"flex justify-end gap-4 pt-6 border-t border-slate-200\">
            <a href=\"";
        // line 72
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_recrutement_index");
        yield "\" class=\"inline-flex items-center px-6 py-2 transition border rounded-lg border-slate-300 text-slate-700 hover:bg-slate-50\"><i class=\"mr-2 fas fa-times\"></i>Annuler</a>
            <button type=\"submit\" class=\"inline-flex items-center px-6 py-2 font-semibold text-white transition rounded-lg shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700\"><i class=\"mr-2 fas fa-save\"></i>";
        // line 73
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Enregistrer"));
        yield "</button>
        </div>
        ";
        // line 75
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
        return "session_recrutement/form.html.twig";
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
        return array (  224 => 75,  219 => 73,  215 => 72,  207 => 67,  203 => 66,  196 => 62,  192 => 61,  185 => 57,  181 => 56,  174 => 52,  170 => 51,  163 => 47,  159 => 46,  149 => 39,  145 => 38,  138 => 34,  134 => 33,  127 => 29,  123 => 28,  116 => 24,  112 => 22,  110 => 21,  101 => 15,  92 => 8,  82 => 7,  63 => 3,  55 => 1,  53 => 5,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "session_recrutement/form.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\session_recrutement\\form.html.twig");
    }
}
