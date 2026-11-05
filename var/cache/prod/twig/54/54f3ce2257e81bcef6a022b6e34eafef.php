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

/* admis/index_etablissement.html.twig */
class __TwigTemplate_005d9261c892a5f0f362ff82fffdee74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/index_etablissement.html.twig"));

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

        yield "Liste des Candidats Inscrits";
        
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
        yield "<div class=\"max-w-8xl mx-auto pb-10\">

";
        // line 9
        yield "<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
    <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
    <div class=\"absolute -bottom-16 left-1/3 w-64 h-64 rounded-full bg-white/[0.04] pointer-events-none\"></div>

    <div class=\"relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border border-white/20 flex items-center justify-center text-2xl shrink-0\">
                <i class=\"fas fa-user-graduate\"></i>
            </div>
            <div>
                <h1 class=\"text-xl md:text-2xl font-bold tracking-tight\">Candidats admis définitivement</h1>
                <p class=\"text-white/60 text-sm mt-0.5\">";
        // line 20
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
            </div>
        </div>
        <a href=\"";
        // line 23
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-sm font-medium transition-all hover:-translate-y-0.5 w-full md:w-auto justify-center\">
            <i class=\"fas fa-arrow-left text-xs\"></i> Tableau de bord
        </a>
    </div>

    ";
        // line 30
        yield "    <div class=\"relative z-10 mt-5 grid grid-cols-3 gap-3\">
        <div class=\"bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 border border-white/10 text-center\">
            <p class=\"text-2xl font-bold\">";
        // line 32
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["admis"] ?? null)), "html", null, true);
        yield "</p>
            <p class=\"text-white/60 text-xs uppercase tracking-wider mt-0.5\">Total inscrits</p>
        </div>
        <div class=\"bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 border border-white/10 text-center\">
            <p class=\"text-2xl font-bold text-emerald-300\">";
        // line 36
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), ($context["admis"] ?? null), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "confirme", [], "any", false, false, false, 36); })), "html", null, true);
        yield "</p>
            <p class=\"text-white/60 text-xs uppercase tracking-wider mt-0.5\">Confirmés</p>
        </div>
        <div class=\"bg-white/10 backdrop-blur-sm rounded-xl px-4 py-3 border border-white/10 text-center relative\">
            <p class=\"text-2xl font-bold text-amber-300\">
                ";
        // line 41
        yield (string) $this->escaper->escape(($context["total_admis_non_inscrits"] ?? null), "html", null, true);
        if ((($context["total_admis_etablissement"] ?? null) > 0)) {
            yield " / ";
            yield (string) $this->escaper->escape(($context["total_admis_etablissement"] ?? null), "html", null, true);
            yield " Admis";
        }
        // line 42
        yield "            </p>
            ";
        // line 43
        if ((($context["total_admis_etablissement"] ?? null) > 0)) {
            // line 44
            yield "            <div class=\"mb-2 text-xs text-amber-200\">
                ";
            // line 45
            $context["pourcentage"] = Twig\Extension\CoreExtension::round(((($context["total_admis_non_inscrits"] ?? null) / ($context["total_admis_etablissement"] ?? null)) * 100), 1);
            // line 46
            yield "                soit ";
            yield (string) $this->escaper->escape(($context["pourcentage"] ?? null), "html", null, true);
            yield "% des admis
            </div>
            ";
        }
        // line 49
        yield "            <p class=\"text-white/60 text-xs uppercase tracking-wider mt-0.5\">En attente d\x27inscription</p>
            ";
        // line 50
        if ((($context["total_admis_non_inscrits"] ?? null) > 0)) {
            // line 51
            yield "            <div class=\"absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center animate-pulse\">
                <span class=\"text-white text-xs font-bold\">";
            // line 52
            yield (string) $this->escaper->escape(($context["total_admis_non_inscrits"] ?? null), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 54
        yield "            
        </div>
    </div>
</div>

";
        // line 60
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["admis"] ?? null)) > 0)) {
            // line 61
            yield "
<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">

    ";
            // line 65
            yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-b border-slate-100 bg-slate-50/60\">
        <div class=\"flex items-center gap-2 text-sm text-slate-500 font-medium\">
            <span>Afficher</span>
            <select id=\"pageSizeSelect\"
                    class=\"border border-slate-200 rounded-lg px-2 py-1 text-sm text-slate-700 bg-white cursor-pointer outline-none focus:border-indigo-400 font-medium\">
                <option value=\"10\">10</option>
                <option value=\"25\" selected>25</option>
                <option value=\"50\">50</option>
            </select>
            <span>éléments</span>
        </div>
        <div class=\"flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-3 py-2 focus-within:border-indigo-400 focus-within:ring-2 focus-within:ring-indigo-100 transition-all\">
            <i class=\"fas fa-search text-slate-400 text-xs\"></i>
            <input id=\"tableSearch\" type=\"text\" placeholder=\"Rechercher…\"
                   class=\"outline-none text-sm text-slate-700 placeholder-slate-300 w-44 bg-transparent\">
        </div>
    </div>

    ";
            // line 84
            yield "    <div class=\"overflow-x-auto\">
        <table class=\"w-full min-w-[750px]\">
            <thead>
                <tr class=\"bg-slate-50 border-b border-slate-100\">
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">N°</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">N° Inscription</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Candidat</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Contact</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Métier</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Date inscription</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Statut</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Contrat</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Livret</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-slate-50\">
                ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["admis"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 101
                yield "                <tr class=\"hover:bg-slate-50/70 transition-colors duration-100\">
                    <td class=\"px-5 py-4 text-sm text-slate-400 font-medium\">";
                // line 102
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102), "html", null, true);
                yield "</td>
                    <td class=\"px-5 py-4\">
                        <span class=\"font-mono text-xs bg-indigo-50 text-indigo-600 border border-indigo-500 px-2.5 py-1 rounded-lg font-medium\">
                            ";
                // line 105
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "numeroInscription", [], "any", false, false, false, 105), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td class=\"px-5 py-4\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0\">
                                <i class=\"fas fa-user text-emerald-600 text-xs\"></i>
                            </div>
                            <div>
                                <p class=\"text-sm font-semibold text-slate-800\">";
                // line 114
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 114), "nom", [], "any", false, false, false, 114)), "html", null, true);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 114), "prenoms", [], "any", false, false, false, 114), "html", null, true);
                yield "</p>
                                <p class=\"text-xs text-slate-400 mt-0.5\">";
                // line 115
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 115), "email", [], "any", false, false, false, 115), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    </td>
                    <td class=\"px-5 py-4 text-sm font-mono text-slate-500\">
                        ";
                // line 120
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 120), "contact", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 121
                    yield "                            ";
                    $context["contact"] = Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 121), "contact", [], "any", false, false, false, 121), [" " => ""]);
                    // line 122
                    yield "                            ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["contact"] ?? null)) == 8)) {
                        // line 123
                        yield "                                ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 0, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 2, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 4, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 6, 2), "html", null, true);
                        yield "
                            ";
                    } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),                     // line 124
($context["contact"] ?? null)) == 10)) {
                        // line 125
                        yield "                                ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 0, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 2, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 4, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 6, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 8, 2), "html", null, true);
                        yield "
                            ";
                    } else {
                        // line 127
                        yield "                                ";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 127), "contact", [], "any", false, false, false, 127), "html", null, true);
                        yield "
                            ";
                    }
                    // line 129
                    yield "                        ";
                } else {
                    // line 130
                    yield "                            -
                        ";
                }
                // line 132
                yield "                    </td>
                    <td class=\"px-5 py-4\">
                        <span class=\"inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[0.68rem] font-semibold bg-blue-50 text-blue-700 border border-blue-400\">
                            ";
                // line 135
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 135), "nom", [], "any", false, false, false, 135), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td class=\"px-5 py-4 text-xs text-slate-400 font-mono\">
                        ";
                // line 139
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateInscription", [], "any", false, false, false, 139), "d/m/Y"), "html", null, true);
                yield "
                        <span class=\"block text-slate-300\">";
                // line 140
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateInscription", [], "any", false, false, false, 140), "H:i"), "html", null, true);
                yield "</span>
                    </td>
                    <td class=\"px-5 py-4\">
                        ";
                // line 143
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "confirme", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 144
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.7rem] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-500\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-emerald-500 shrink-0\"></span>Confirmé
                            </span>
                        ";
                } else {
                    // line 148
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.7rem] font-semibold bg-amber-50 text-amber-700 border border-amber-500\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-amber-500 shrink-0\"></span>En attente
                            </span>
                        ";
                }
                // line 152
                yield "                    </td>
                    <td class=\"px-5 py-4\">
                        ";
                // line 154
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierContrat", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 155
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/contrats/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierContrat", [], "any", false, false, false, 155))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-200 hover:bg-indigo-100 transition\" title=\"Voir le contrat\">
                                <i class=\"fas fa-file-pdf text-red-500\"></i> Voir Contrat
                            </a>
                        ";
                } else {
                    // line 159
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                    yield "#contrat\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200 hover:bg-slate-200 transition\" title=\"Ajouter le contrat d\x27apprentissage\">
                                <i class=\"fas fa-file-signature\"></i> Ajouter Contrat
                            </a>
                        ";
                }
                // line 163
                yield "                    </td>
                    <td class=\"px-5 py-4\">
                        ";
                // line 165
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierLivret", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 166
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/livrets/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierLivret", [], "any", false, false, false, 166))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200 hover:bg-blue-100 transition\" title=\"Voir le livret\">
                                <i class=\"fas fa-book-reader\"></i> Voir Livret
                            </a>
                        ";
                } else {
                    // line 170
                    yield "                            <div x-data=\"{ open: false }\" class=\"relative\">
                                <button type=\"button\" @click=\"open = !open\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200 hover:bg-slate-200 transition\" title=\"Ajouter le livret apprenti\">
                                    <i class=\"fas fa-book-reader\"></i> Ajouter Livret
                                </button>
                                <div x-show=\"open\" x-cloak x-transition @click.outside=\"open = false\"
                                     class=\"absolute right-0 top-full mt-2 z-20 bg-white rounded-xl shadow-xl border border-slate-200 p-4 w-72\">
                                    <form action=\"";
                    // line 176
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_upload_livret", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 176)]), "html", null, true);
                    yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-3\">
                                        <input type=\"file\" name=\"livret_file\" required accept=\".pdf,.jpg,.jpeg,.png\"
                                               class=\"w-full text-xs file:mr-2 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100\">
                                        <button type=\"submit\" class=\"w-full px-3 py-1.5 rounded-lg bg-blue-600 text-white text-xs font-medium hover:bg-blue-700 transition\">
                                            <i class=\"fas fa-upload mr-1\"></i> Uploader
                                        </button>
                                    </form>
                                </div>
                            </div>
                        ";
                }
                // line 186
                yield "                    </td>
                </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 189
            yield "            </tbody>
        </table>
    </div>

    ";
            // line 194
            yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-t border-slate-100 bg-slate-50/60\">
        <p id=\"paginationInfo\" class=\"text-xs text-slate-400 font-medium\"></p>
        <nav id=\"paginationNav\" class=\"flex items-center gap-1\" aria-label=\"Pagination\"></nav>
    </div>
</div>

";
        } else {
            // line 201
            yield "
";
            // line 203
            yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 py-16 px-8 text-center\">
    <div class=\"w-16 h-16 rounded-2xl bg-indigo-50 flex items-center justify-center mx-auto mb-5 text-3xl text-indigo-400\">
        <i class=\"fas fa-user-graduate\"></i>
    </div>
    <h3 class=\"text-lg font-bold text-slate-800 mb-2\">Aucun candidat inscrit</h3>
    <p class=\"text-sm text-slate-500\">Les candidats admis n\x27ont pas encore procédé à leur inscription définitive.</p>
</div>

";
        }
        // line 212
        yield "
</div>

";
        // line 215
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 278
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 216
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
(function () {
    const tbody = document.getElementById(\x27tableBody\x27);
    if (!tbody) return;
    const allRows = Array.from(tbody.querySelectorAll(\x27tr\x27));
    const info = document.getElementById(\x27paginationInfo\x27);
    const nav = document.getElementById(\x27paginationNav\x27);
    const searchInput = document.getElementById(\x27tableSearch\x27);
    const pageSizeSelect = document.getElementById(\x27pageSizeSelect\x27);
    let pageSize = parseInt(pageSizeSelect.value), currentPage = 1, filtered = [...allRows];

    function applyFilter(q) {
        const term = q.toLowerCase().trim();
        filtered = allRows.filter(r => !term || r.textContent.toLowerCase().includes(term));
        currentPage = 1; render();
    }

    function render() {
        const total = filtered.length, pages = Math.max(1, Math.ceil(total / pageSize));
        currentPage = Math.min(currentPage, pages);
        const start = (currentPage - 1) * pageSize, end = Math.min(start + pageSize, total);
        allRows.forEach(r => r.style.display = \x27none\x27);
        filtered.slice(start, end).forEach(r => r.style.display = \x27\x27);
        info.innerHTML = total === 0 ? \x27Aucun résultat trouvé\x27
            : `Affichage de <strong class=\"text-slate-600\">\${start+1}</strong> à <strong class=\"text-slate-600\">\${end}</strong> sur <strong class=\"text-slate-600\">\${total}</strong> élément(s)`;
        buildPagination(pages);
    }

    function buildPagination(pages) {
        nav.innerHTML = \x27\x27;
        const base = \x27inline-flex items-center justify-center min-w-[34px] h-[34px] px-2 rounded-lg text-xs font-semibold border transition-colors duration-150 \x27;
        const idle = base + \x27bg-white border-slate-200 text-slate-500 hover:bg-indigo-50 hover:text-indigo-600 hover:border-indigo-200 cursor-pointer\x27;
        const active = base + \x27bg-indigo-600 border-indigo-600 text-white cursor-default pointer-events-none\x27;
        const disabled = base + \x27bg-white border-slate-100 text-slate-300 cursor-not-allowed pointer-events-none opacity-40\x27;
        const makeBtn = (label, page, cls) => {
            const el = document.createElement(\x27button\x27); el.innerHTML = label; el.className = cls;
            if (cls === idle) el.addEventListener(\x27click\x27, () => { currentPage = page; render(); });
            return el;
        };
        nav.appendChild(makeBtn(\x27<i class=\"fas fa-chevron-left\" style=\"font-size:0.6rem\"></i>\x27, currentPage - 1, currentPage === 1 ? disabled : idle));
        getPageRange(currentPage, pages).forEach(p => {
            if (p === \x27...\x27) { const el = document.createElement(\x27span\x27); el.textContent = \x27···\x27; el.className = \x27inline-flex items-center justify-center w-8 h-[34px] text-xs text-slate-300 font-bold tracking-wider select-none\x27; nav.appendChild(el); }
            else nav.appendChild(makeBtn(p, p, p === currentPage ? active : idle));
        });
        nav.appendChild(makeBtn(\x27<i class=\"fas fa-chevron-right\" style=\"font-size:0.6rem\"></i>\x27, currentPage + 1, currentPage === pages ? disabled : idle));
    }

    function getPageRange(cur, total) {
        if (total <= 7) return Array.from({ length: total }, (_, i) => i + 1);
        const set = new Set([1, total, cur, cur-1, cur+1].filter(p => p >= 1 && p <= total));
        const sorted = [...set].sort((a, b) => a - b), result = [];
        sorted.forEach((p, i) => { if (i > 0 && p - sorted[i-1] > 1) result.push(\x27...\x27); result.push(p); });
        return result;
    }

    searchInput.addEventListener(\x27input\x27, e => applyFilter(e.target.value));
    pageSizeSelect.addEventListener(\x27change\x27, e => { pageSize = parseInt(e.target.value); currentPage = 1; render(); });
    render();
})();
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
        return "admis/index_etablissement.html.twig";
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
        return array (  497 => 216,  487 => 215,  478 => 278,  476 => 215,  471 => 212,  460 => 203,  457 => 201,  448 => 194,  442 => 189,  425 => 186,  412 => 176,  404 => 170,  396 => 166,  394 => 165,  390 => 163,  382 => 159,  374 => 155,  372 => 154,  368 => 152,  362 => 148,  356 => 144,  354 => 143,  348 => 140,  344 => 139,  337 => 135,  332 => 132,  328 => 130,  325 => 129,  319 => 127,  305 => 125,  303 => 124,  292 => 123,  289 => 122,  286 => 121,  284 => 120,  276 => 115,  270 => 114,  258 => 105,  252 => 102,  249 => 101,  232 => 100,  214 => 84,  194 => 65,  189 => 61,  187 => 60,  180 => 54,  174 => 52,  171 => 51,  169 => 50,  166 => 49,  159 => 46,  157 => 45,  154 => 44,  152 => 43,  149 => 42,  142 => 41,  134 => 36,  127 => 32,  123 => 30,  114 => 23,  108 => 20,  95 => 9,  91 => 6,  81 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/index_etablissement.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\index_etablissement.html.twig");
    }
}
