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

/* candidature/show.html.twig */
class __TwigTemplate_2d5958f77b591b15eaa83fba5ddf607d extends Template
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
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Candidature ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 3), "html", null, true);
        yield " | GROUPE LEMETIER";
        
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
        yield "
";
        // line 7
        yield from $this->load("partials/_flash_messages.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 p-8 mb-8 text-white\">
    <div class=\"flex flex-col md:flex-row md:items-center md:justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 bg-white/20 rounded-full flex items-center justify-center\">
                <i class=\"fas fa-id-card text-3xl\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl font-bold\">Candidature ";
        // line 16
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 16), "Non attribué")) : ("Non attribué")), "html", null, true);
        yield "</h1>
                <p class=\"text-white/80\">
                    ";
        // line 18
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 18), "prenoms", [], "any", false, false, false, 18))), "html", null, true)) : ("Candidat inconnu"));
        yield "
                </p>
            </div>
        </div>

        ";
        // line 24
        yield "        <div>
            ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "resultat", [], "any", false, false, false, 25) == 2)) {
            // line 26
            yield "                <span class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold bg-green-50 text-green-700 border border-green-200\">
                    <span class=\"w-2 h-2 rounded-full bg-green-500\"></span> Admis
                </span>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["candidature"] ?? null), "resultat", [], "any", false, false, false, 29) == 1)) {
            // line 30
            yield "                <span class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold bg-red-50 text-red-700 border border-red-200\">
                    <span class=\"w-2 h-2 rounded-full bg-red-500\"></span> Rejeté
                </span>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["candidature"] ?? null), "entstatut", [], "any", false, false, false, 33) == 2)) {
            // line 34
            yield "                <span class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold bg-blue-50 text-blue-700 border border-blue-200\">
                    <span class=\"w-2 h-2 rounded-full bg-blue-500\"></span> Admissible
                </span>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["candidature"] ?? null), "etustatut", [], "any", false, false, false, 37) == 2)) {
            // line 38
            yield "                <span class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold bg-amber-50 text-amber-700 border border-amber-200\">
                    <span class=\"w-2 h-2 rounded-full bg-amber-500\"></span> Dossier OK
                </span>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["candidature"] ?? null), "etustatut", [], "any", false, false, false, 41) == 1)) {
            // line 42
            yield "                <span class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold bg-red-50 text-red-700 border border-red-200\">
                    <span class=\"w-2 h-2 rounded-full bg-red-500\"></span> Dossier rejeté
                </span>
            ";
        } else {
            // line 46
            yield "                <span class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold bg-slate-100 text-slate-600 border border-slate-200\">
                    <span class=\"w-2 h-2 rounded-full bg-slate-400\"></span> En attente
                </span>
            ";
        }
        // line 50
        yield "        </div>
    </div>
</div>

<div class=\"max-w-5xl mx-auto px-4 pb-16 space-y-8\">

    ";
        // line 57
        yield "    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden\">
        <div class=\"p-6 md:p-8\">
            <h3 class=\"text-lg font-semibold text-indigo-800 flex items-center border-b pb-3 mb-5\">
                <div class=\"w-8 h-8 bg-indigo-200 rounded-lg flex items-center justify-center mr-3\">
                    <i class=\"fas fa-user text-indigo-700\"></i>
                </div>
                Informations du candidat
            </h3>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4\">
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Nom</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 68
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 68), "nom", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Prénom(s)</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 72
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 72), "prenoms", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 72), "prenoms", [], "any", false, false, false, 72), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Email</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 76
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 76), "email", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 76), "email", [], "any", false, false, false, 76), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Contact</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 80
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 80), "contact", [], "any", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 80), "contact", [], "any", false, false, false, 80), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Sexe</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 84
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 84), "sexe", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 84), "sexe", [], "any", false, false, false, 84), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Date de naissance</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 88
        yield (string) ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 88), "datenaissance", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 88), "datenaissance", [], "any", false, false, false, 88), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Lieu de naissance</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 92
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 92), "lieunaissance", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 92), "lieunaissance", [], "any", false, false, false, 92), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Nationalité</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 96
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 96), "nationalite", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 96), "nationalite", [], "any", false, false, false, 96), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Résidence</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 100
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 100), "residence", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 100), "residence", [], "any", false, false, false, 100), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Situation matrimoniale</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 104
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 104), "situationmat", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 104), "situationmat", [], "any", false, false, false, 104), "-")) : ("-")), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                ";
        // line 106
        if ((($tmp = ($context["is_staff"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Nom du père</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 109
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 109), "nompere", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 109), "nompere", [], "any", false, false, false, 109), "-")) : ("-")), "html", null, true)) : ("-"));
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Nom de la mère</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 113
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 113), "nommere", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 113), "nommere", [], "any", false, false, false, 113), "-")) : ("-")), "html", null, true)) : ("-"));
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">N° extrait de naissance</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 117
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, true, false, 117), "numextrait", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 117), "numextrait", [], "any", false, false, false, 117), "-")) : ("-")), "html", null, true)) : ("-"));
            yield "</p>
                </div>
                ";
        }
        // line 120
        yield "            </div>
        </div>
    </div>

    ";
        // line 125
        yield "    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden\">
        <div class=\"p-6 md:p-8\">
            <h3 class=\"text-lg font-semibold text-purple-800 flex items-center border-b pb-3 mb-5\">
                <div class=\"w-8 h-8 bg-purple-200 rounded-lg flex items-center justify-center mr-3\">
                    <i class=\"fas fa-graduation-cap text-purple-700\"></i>
                </div>
                Formation souhaitée
            </h3>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4\">
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Établissement</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 136
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 136), "nom", [], "any", false, false, false, 136), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Métier</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 140
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 140), "nom", [], "any", false, false, false, 140), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Niveau</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 144
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "niveau", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "niveau", [], "any", false, false, false, 144), "-")) : ("-")), "html", null, true);
        yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Date de dépôt</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
        // line 148
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "creation", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "creation", [], "any", false, false, false, 148), "d/m/Y à H:i"), "html", null, true)) : ("-"));
        yield "</p>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 155
        yield "    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden\">
        <div class=\"p-6 md:p-8\">
            <h3 class=\"text-lg font-semibold text-slate-800 flex items-center border-b pb-3 mb-5\">
                <div class=\"w-8 h-8 bg-slate-200 rounded-lg flex items-center justify-center mr-3\">
                    <i class=\"fas fa-folder-open text-slate-700\"></i>
                </div>
                Documents déposés
            </h3>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["document_labels"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["config"]) {
            // line 165
            yield "                    ";
            $context["fileName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), $context["field"], [], "any", false, false, false, 165);
            // line 166
            yield "                    ";
            $context["fileExists"] = ( !(null === ($context["fileName"] ?? null)) && (($context["fileName"] ?? null) != ""));
            // line 167
            yield "                    ";
            $context["fileUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("media/" . CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 167)) . "/") . ($context["fileName"] ?? null)));
            // line 168
            yield "                    <div class=\"flex items-center justify-between p-4 rounded-xl border border-slate-200 ";
            yield (string) (((($tmp = ($context["fileExists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-slate-50") : ("bg-slate-50/50"));
            yield "\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"w-10 h-10 rounded-lg flex items-center justify-center ";
            // line 170
            yield (string) (((($tmp = ($context["fileExists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-indigo-100 text-indigo-600") : ("bg-slate-200 text-slate-400"));
            yield "\">
                                <i class=\"fas fa-";
            // line 171
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "icon", [], "any", false, false, false, 171), "html", null, true);
            yield "\"></i>
                            </div>
                            <div>
                                <p class=\"text-sm font-semibold text-slate-700\">";
            // line 174
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "text", [], "any", false, false, false, 174), "html", null, true);
            yield "</p>
                                <p class=\"text-xs text-slate-400\">";
            // line 175
            yield (string) (((($tmp = ($context["fileExists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Déposé") : ("Non déposé"));
            yield "</p>
                            </div>
                        </div>
                        ";
            // line 178
            if ((($tmp = ($context["fileExists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 179
                yield "                            <a href=\"";
                yield (string) $this->escaper->escape(($context["fileUrl"] ?? null), "html", null, true);
                yield "\" target=\"_blank\"
                               class=\"inline-flex items-center justify-center px-3 py-2 rounded-lg bg-indigo-600 text-white text-xs font-semibold hover:bg-indigo-700 transition\">
                                <i class=\"fas fa-eye mr-1.5\"></i> Voir
                            </a>
                        ";
            }
            // line 184
            yield "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['config'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 186
        yield "            </div>
        </div>
    </div>

    ";
        // line 191
        yield "    ";
        if ((($tmp = ($context["is_staff"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 192
            yield "    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden\">
        <div class=\"p-6 md:p-8\">
            <h3 class=\"text-lg font-semibold text-amber-800 flex items-center border-b pb-3 mb-5\">
                <div class=\"w-8 h-8 bg-amber-200 rounded-lg flex items-center justify-center mr-3\">
                    <i class=\"fas fa-clipboard-list text-amber-700\"></i>
                </div>
                Étude du dossier et évaluation
            </h3>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 mb-6\">
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Décision étude de dossier</p>
                    <p class=\"text-sm font-medium text-slate-800\">
                        ";
            // line 204
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etustatut", [], "any", false, false, false, 204) == 2)) {
                yield "Admissible
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 205
($context["candidature"] ?? null), "etustatut", [], "any", false, false, false, 205) == 1)) {
                yield "Non admissible
                        ";
            } else {
                // line 206
                yield "En attente";
            }
            // line 207
            yield "                    </p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Commentaire dossier</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 211
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etucom", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etucom", [], "any", false, false, false, 211), "-")) : ("-")), "html", null, true);
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Date d\x27entretien</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 215
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entdate", [], "any", false, false, false, 215)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entdate", [], "any", false, false, false, 215), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Lieu d\x27entretien</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 219
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entlieu", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entlieu", [], "any", false, false, false, 219), "-")) : ("-")), "html", null, true);
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Jury</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 223
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "jury", [], "any", true, true, false, 223)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "jury", [], "any", false, false, false, 223), "-")) : ("-")), "html", null, true);
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Commentaire entretien</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 227
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entcom", [], "any", true, true, false, 227)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entcom", [], "any", false, false, false, 227), "-")) : ("-")), "html", null, true);
            yield "</p>
                </div>
            </div>

            ";
            // line 232
            yield "            <div class=\"grid grid-cols-3 md:grid-cols-9 gap-2 mb-6\">
                ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 234
                yield "                    ";
                $context["note"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), ("note" . $context["i"]), [], "any", false, false, false, 234);
                // line 235
                yield "                    <div class=\"text-center p-2 rounded-lg border border-slate-200 bg-slate-50\">
                        <p class=\"text-[0.65rem] uppercase text-slate-400\">Note ";
                // line 236
                yield (string) $this->escaper->escape($context["i"], "html", null, true);
                yield "</p>
                        <p class=\"text-sm font-semibold text-slate-700\">";
                // line 237
                yield (string) (( !(null === ($context["note"] ?? null))) ? ($this->escaper->escape(($context["note"] ?? null), "html", null, true)) : ("-"));
                yield "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 240
            yield "            </div>

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4\">
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Date visite médicale</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 245
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "visdate", [], "any", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "visdate", [], "any", false, false, false, 245), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Lieu visite médicale</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 249
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "vislieu", [], "any", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "vislieu", [], "any", false, false, false, 249), "-")) : ("-")), "html", null, true);
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Statut visite médicale</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 253
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "visstatut", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "visstatut", [], "any", false, false, false, 253), "-")) : ("-")), "html", null, true);
            yield "</p>
                </div>
                <div>
                    <p class=\"text-xs uppercase tracking-wide text-slate-400\">Commentaire visite médicale</p>
                    <p class=\"text-sm font-medium text-slate-800\">";
            // line 257
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "viscom", [], "any", true, true, false, 257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "viscom", [], "any", false, false, false, 257), "-")) : ("-")), "html", null, true);
            yield "</p>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 263
        yield "
    ";
        // line 264
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CANDIDAT_RESET_PASSWORD", ($context["candidature"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 265
            yield "    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 p-6 md:p-8\">
        <h3 class=\"text-lg font-semibold text-indigo-800 flex items-center border-b pb-3 mb-5\">
            <div class=\"w-8 h-8 bg-indigo-200 rounded-lg flex items-center justify-center mr-3\">
                <i class=\"fas fa-key text-indigo-700\"></i>
            </div>
            Compte de connexion du candidat
        </h3>
        <p class=\"text-sm text-slate-600\">
            Identifiant : <strong class=\"text-slate-900\">";
            // line 273
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 273), "userIdentifier", [], "any", false, false, false, 273), "html", null, true);
            yield "</strong>
            ";
            // line 274
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 274), "email", [], "any", false, false, false, 274)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 274), "contact", [], "any", false, false, false, 274)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                yield "(ou ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 274), "contact", [], "any", false, false, false, 274), "html", null, true);
                yield ")";
            }
            // line 275
            yield "        </p>
        <form method=\"post\" action=\"";
            // line 276
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_reinitialiser_mdp", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 276)]), "html", null, true);
            yield "\" class=\"mt-4\"
              onsubmit=\"return confirm(\x27Générer un nouveau mot de passe pour ce candidat ? L\\\x27ancien ne fonctionnera plus.\x27);\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 278
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("candidature_reinitialiser_mdp_" . CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 278))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"inline-flex items-center px-5 py-2.5 rounded-lg bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition\">
                <i class=\"fas fa-rotate mr-2\"></i> Générer un nouveau mot de passe
            </button>
        </form>
    </div>
    ";
        }
        // line 285
        yield "
    <div class=\"flex justify-center\">
        <a href=\"";
        // line 287
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\"
           class=\"inline-flex items-center px-6 py-2.5 rounded-lg bg-slate-100 text-slate-700 text-sm font-semibold hover:bg-slate-200 transition\">
            <i class=\"fas fa-arrow-left mr-2\"></i> Retour à la liste
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
        return "candidature/show.html.twig";
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
        return array (  585 => 287,  581 => 285,  571 => 278,  566 => 276,  563 => 275,  557 => 274,  553 => 273,  543 => 265,  541 => 264,  538 => 263,  529 => 257,  522 => 253,  515 => 249,  508 => 245,  501 => 240,  491 => 237,  487 => 236,  484 => 235,  481 => 234,  477 => 233,  474 => 232,  467 => 227,  460 => 223,  453 => 219,  446 => 215,  439 => 211,  433 => 207,  430 => 206,  425 => 205,  421 => 204,  407 => 192,  404 => 191,  398 => 186,  390 => 184,  381 => 179,  379 => 178,  373 => 175,  369 => 174,  363 => 171,  359 => 170,  353 => 168,  350 => 167,  347 => 166,  344 => 165,  340 => 164,  329 => 155,  320 => 148,  313 => 144,  306 => 140,  299 => 136,  286 => 125,  280 => 120,  274 => 117,  267 => 113,  260 => 109,  256 => 107,  254 => 106,  249 => 104,  242 => 100,  235 => 96,  228 => 92,  221 => 88,  214 => 84,  207 => 80,  200 => 76,  193 => 72,  186 => 68,  173 => 57,  165 => 50,  159 => 46,  153 => 42,  151 => 41,  146 => 38,  144 => 37,  139 => 34,  137 => 33,  132 => 30,  130 => 29,  125 => 26,  123 => 25,  120 => 24,  112 => 18,  107 => 16,  97 => 8,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/show.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\show.html.twig");
    }
}
