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

/* candidature/success.html.twig */
class __TwigTemplate_1acd60b39ce0fcd9d5cb8eebbffc306b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/success.html.twig"));

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

        yield "Candidature enregistrée | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $context["candidat"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 6);
        // line 7
        yield "<div class=\"max-w-3xl mx-auto\">
    <div class=\"p-8 mb-6 text-white bg-gradient-to-r from-emerald-600 to-teal-600 rounded-2xl\">
        <div class=\"flex items-center gap-4\">
            <span class=\"flex items-center justify-center w-12 h-12 text-2xl rounded-full shrink-0 bg-white/20\" aria-hidden=\"true\">
                <i class=\"fas fa-check\"></i>
            </span>
            <div class=\"min-w-0\">
                <h1 class=\"text-2xl font-bold\">Candidature enregistrée</h1>
                <p class=\"mt-1 text-white/90\">";
        // line 15
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidat"] ?? null), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidat"] ?? null), "prenoms", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
            </div>
        </div>
    </div>

    <section class=\"p-6 mb-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        <p class=\"text-sm font-semibold text-slate-500\">Numéro d\x27inscription</p>
        <p class=\"mt-1 text-3xl font-bold tracking-wide text-indigo-800\">";
        // line 22
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
        <dl class=\"grid grid-cols-1 gap-4 pt-5 mt-5 border-t sm:grid-cols-2 border-slate-200\">
            <div>
                <dt class=\"text-sm text-slate-500\">Métier</dt>
                <dd class=\"font-semibold text-slate-800\">";
        // line 26
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true)) : ("—"));
        yield "</dd>
            </div>
            <div>
                <dt class=\"text-sm text-slate-500\">Établissement</dt>
                <dd class=\"font-semibold text-slate-800\">";
        // line 30
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 30)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 30), "html", null, true)) : ("—"));
        yield "</dd>
            </div>
        </dl>
    </section>

    <section class=\"p-6 mb-6 border md:p-8 rounded-2xl border-amber-200 bg-amber-50\">
        <h2 class=\"flex items-center gap-2 text-lg font-semibold text-amber-900\">
            <i class=\"fas fa-key\" aria-hidden=\"true\"></i> À remettre au candidat
        </h2>
        <p class=\"mt-1 text-sm text-amber-900\">Il se connecte avec son téléphone ou son e-mail, et le mot de passe choisi lors de la saisie.</p>
        <dl class=\"grid grid-cols-1 gap-4 mt-4 sm:grid-cols-2\">
            <div class=\"min-w-0\">
                <dt class=\"text-sm text-amber-800\">Téléphone</dt>
                <dd class=\"text-lg font-bold text-slate-900\">";
        // line 43
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidat"] ?? null), "contact", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["candidat"] ?? null), "contact", [], "any", false, false, false, 43), "", 2), " "), "html", null, true)) : ("—"));
        yield "</dd>
            </div>
            <div class=\"min-w-0\">
                <dt class=\"text-sm text-amber-800\">E-mail</dt>
                <dd class=\"text-lg font-bold break-words text-slate-900\">";
        // line 47
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidat"] ?? null), "email", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidat"] ?? null), "email", [], "any", false, false, false, 47), "html", null, true)) : ("—"));
        yield "</dd>
            </div>
        </dl>
        <p class=\"mt-4 text-sm text-amber-900\">Le mot de passe n\x27est pas affiché ici. En cas d\x27oubli, réinitialisez-le depuis le dossier du candidat.</p>
    </section>

    <section class=\"p-6 mb-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        <h2 class=\"text-lg font-semibold text-indigo-800\">À dire au candidat</h2>
        <ul class=\"mt-3 space-y-2 text-slate-700\">
            <li class=\"flex gap-3\"><i class=\"mt-1 text-indigo-500 fas fa-circle-check\" aria-hidden=\"true\"></i> Son dossier sera examiné par nos équipes.</li>
            <li class=\"flex gap-3\"><i class=\"mt-1 text-indigo-500 fas fa-circle-check\" aria-hidden=\"true\"></i> Il sera informé de la date de son entretien.</li>
            <li class=\"flex gap-3\"><i class=\"mt-1 text-indigo-500 fas fa-circle-check\" aria-hidden=\"true\"></i> Il doit préparer ses documents originaux pour l\x27entretien.</li>
        </ul>
    </section>

    <div class=\"flex flex-wrap justify-end gap-3\">
        <a href=\"";
        // line 63
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_imprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 63)]), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\"
           class=\"inline-flex items-center px-6 py-2.5 border rounded-lg border-slate-300 bg-white text-slate-700 hover:bg-slate-50\">
            <i class=\"mr-2 fas fa-print\" aria-hidden=\"true\"></i> Imprimer la fiche
        </a>
        <a href=\"";
        // line 67
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_voir", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 67)]), "html", null, true);
        yield "\"
           class=\"inline-flex items-center px-6 py-2.5 border rounded-lg border-slate-300 bg-white text-slate-700 hover:bg-slate-50\">
            <i class=\"mr-2 fas fa-folder-open\" aria-hidden=\"true\"></i> Voir le dossier
        </a>
        <a href=\"";
        // line 71
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_saisie");
        yield "\"
           class=\"inline-flex items-center px-6 py-2.5 font-semibold text-white bg-indigo-600 rounded-lg shadow hover:bg-indigo-700\">
            <i class=\"mr-2 fas fa-plus\" aria-hidden=\"true\"></i> Nouvelle candidature
        </a>
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
        return "candidature/success.html.twig";
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
        return array (  185 => 71,  178 => 67,  171 => 63,  152 => 47,  145 => 43,  129 => 30,  122 => 26,  115 => 22,  103 => 15,  93 => 7,  91 => 6,  81 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/success.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\success.html.twig");
    }
}
