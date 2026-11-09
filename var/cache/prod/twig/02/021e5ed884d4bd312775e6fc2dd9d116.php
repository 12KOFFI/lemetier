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

/* admis/liste_admis.html.twig */
class __TwigTemplate_57f4f1c75e9481e8ca3ea17bc4cab51a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/liste_admis.html.twig"));

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

        yield "Liste des Candidats Admis Provisoires";
        
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
        yield "<div class=\"max-w-7xl mx-auto pb-10\">

";
        // line 9
        yield "<div class=\"bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
    <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
    <div class=\"absolute -bottom-16 left-1/3 w-64 h-64 rounded-full bg-white/[0.04] pointer-events-none\"></div>

    <div class=\"relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border border-white/20 flex items-center justify-center text-2xl shrink-0\">
                <i class=\"fas fa-user-check\"></i>
            </div>
            <div>
                <h1 class=\"text-xl md:text-2xl font-bold tracking-tight\">Candidats Admis Provisoires</h1>
                ";
        // line 20
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                    <p class=\"text-white/60 text-sm mt-0.5\">Tous les établissements</p>
                ";
        } else {
            // line 23
            yield "                    <p class=\"text-white/60 text-sm mt-0.5\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
                ";
        }
        // line 25
        yield "            </div>
        </div>
        <a href=\"";
        // line 27
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-sm font-medium transition-all hover:-translate-y-0.5 w-full md:w-auto justify-center\">
            <i class=\"fas fa-arrow-left text-xs\"></i> Tableau de bord
        </a>
    </div>

    ";
        // line 34
        yield "    ";
        $context["total_admis"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 34);
        // line 35
        yield "    ";
        $context["count_h"] = ((array_key_exists("total_hommes", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_hommes"] ?? null), 0)) : (0));
        // line 36
        yield "    ";
        $context["count_f"] = ((array_key_exists("total_femmes", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_femmes"] ?? null), 0)) : (0));
        // line 37
        yield "    ";
        $context["pct_hommes"] = (((($context["total_admis"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["count_h"] ?? null) / ($context["total_admis"] ?? null)) * 100), 1)) : (0));
        // line 38
        yield "    ";
        $context["pct_femmes"] = (((($context["total_admis"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["count_f"] ?? null) / ($context["total_admis"] ?? null)) * 100), 1)) : (0));
        // line 39
        yield "
    <div class=\"relative z-10 mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-4xl mx-auto\">
        ";
        // line 42
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-4 border border-white/20 flex items-center gap-4 shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center text-2xl text-white shrink-0\">
                <i class=\"fas fa-users\"></i>
            </div>
            <div>
                <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white\">";
        // line 47
        yield (string) $this->escaper->escape(($context["total_admis"] ?? null), "html", null, true);
        yield "</p>
                <p class=\"text-blue-100 text-xs uppercase tracking-wider font-semibold mt-1\">Total Admis Provisoires</p>
            </div>
        </div>

        ";
        // line 53
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-4 border border-white/20 flex items-center gap-4 shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"w-12 h-12 rounded-xl bg-sky-400/20 text-sky-200 border border-sky-300/30 flex items-center justify-center text-2xl shrink-0\">
                <i class=\"fas fa-mars\"></i>
            </div>
            <div>
                <div class=\"flex items-baseline gap-2\">
                    <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white\">";
        // line 59
        yield (string) $this->escaper->escape(($context["count_h"] ?? null), "html", null, true);
        yield "</p>
                    <span class=\"text-[11px] font-bold text-sky-100 bg-sky-500/30 px-2 py-0.5 rounded-full border border-sky-300/30\">";
        // line 60
        yield (string) $this->escaper->escape(($context["pct_hommes"] ?? null), "html", null, true);
        yield "%</span>
                </div>
                <p class=\"text-blue-100 text-xs uppercase tracking-wider font-semibold mt-1\">Hommes</p>
            </div>
        </div>

        ";
        // line 67
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-4 border border-white/20 flex items-center gap-4 shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"w-12 h-12 rounded-xl bg-pink-400/20 text-pink-200 border border-pink-300/30 flex items-center justify-center text-2xl shrink-0\">
                <i class=\"fas fa-venus\"></i>
            </div>
            <div>
                <div class=\"flex items-baseline gap-2\">
                    <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white\">";
        // line 73
        yield (string) $this->escaper->escape(($context["count_f"] ?? null), "html", null, true);
        yield "</p>
                    <span class=\"text-[11px] font-bold text-pink-100 bg-pink-500/30 px-2 py-0.5 rounded-full border border-pink-300/30\">";
        // line 74
        yield (string) $this->escaper->escape(($context["pct_femmes"] ?? null), "html", null, true);
        yield "%</span>
                </div>
                <p class=\"text-blue-100 text-xs uppercase tracking-wider font-semibold mt-1\">Femmes</p>
            </div>
        </div>
    </div>
</div>

";
        // line 83
        yield "<div id=\"admis-container\">
";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 84) > 0)) {
            // line 85
            yield "
<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">

    ";
            // line 89
            yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-b border-slate-100 bg-slate-50/60\">
        <form method=\"get\" id=\"filterForm\" class=\"flex flex-wrap items-center w-full justify-between gap-3\">
            <div class=\"flex items-center gap-2 text-sm text-slate-500 font-medium\">
                <span>Afficher</span>
                <select name=\"limit\" id=\"pageSizeSelect\" onchange=\"document.getElementById(\x27filterForm\x27).submit();\"
                        class=\"border border-slate-200 rounded-lg px-2 py-1 text-sm text-slate-700 bg-white cursor-pointer outline-none focus:border-indigo-400 font-medium\">
                    <option value=\"10\" ";
            // line 95
            if ((($context["limit"] ?? null) == 10)) {
                yield "selected";
            }
            yield ">10</option>
                    <option value=\"25\" ";
            // line 96
            if ((($context["limit"] ?? null) == 25)) {
                yield "selected";
            }
            yield ">25</option>
                    <option value=\"50\" ";
            // line 97
            if ((($context["limit"] ?? null) == 50)) {
                yield "selected";
            }
            yield ">50</option>
                    <option value=\"100\" ";
            // line 98
            if ((($context["limit"] ?? null) == 100)) {
                yield "selected";
            }
            yield ">100</option>
                </select>
                <span>éléments</span>
            </div>
            <div class=\"flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-3 py-2 focus-within:border-indigo-400 focus-within:ring-2 focus-within:ring-indigo-100 transition-all\">
                <i class=\"fas fa-search text-slate-400 text-xs\"></i>
                <input type=\"text\" name=\"q\" value=\"";
            // line 104
            yield (string) $this->escaper->escape(($context["searchTerm"] ?? null), "html", null, true);
            yield "\" placeholder=\"Rechercher…\"
                       class=\"outline-none text-sm text-slate-700 placeholder-slate-300 w-44 bg-transparent\">
            </div>
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 107), "query", [], "any", false, false, false, 107), "all", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 108
                yield "                ";
                if (((($context["key"] != "limit") && ($context["key"] != "q")) && ($context["key"] != "page"))) {
                    // line 109
                    yield "                    <input type=\"hidden\" name=\"";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "\" value=\"";
                    yield (string) $this->escaper->escape($context["val"], "html", null, true);
                    yield "\">
                ";
                }
                // line 111
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 112
            yield "        </form>
    </div>

            ";
            // line 116
            yield "            <div class=\"overflow-x-auto\">
                <table class=\"w-full min-w-[850px]\">
                    <thead>
                        <tr class=\"bg-slate-50 border-b border-slate-100\">
                            <th class=\"px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">N°</th>
                            <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Numéro </br>d\x27inscription</th>
                            <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Candidat</th>
                            <th class=\"px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Contact</th>
                            <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Métier</th>
                            ";
            // line 125
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "                            <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Établissement</th>
                            ";
            }
            // line 128
            yield "                            <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Date admission</th>
                            <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"tableBody\" class=\"divide-y divide-slate-50\">
                        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["candidatures"] ?? null));
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
                // line 134
                yield "                        <tr class=\"hover:bg-slate-50/70 transition-colors duration-100\">
                            <td class=\"px-3 py-4 text-sm text-slate-400 font-medium\">";
                // line 135
                yield (string) $this->escaper->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "currentPageNumber", [], "any", false, false, false, 135) - 1) * CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 135)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 135)), "html", null, true);
                yield "</td>
                            <td class=\"px-5 py-4\">
                                <span class=\"font-bold text-xs bg-blue-50 text-blue-600 border border-blue-500 px-2.5 py-1 rounded-lg font-medium hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-150 inline-block\">
                                    ";
                // line 138
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "numero", [], "any", false, false, false, 138), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td class=\"px-5 py-4\">
                                <div class=\"flex items-center gap-3\">
                                    <div class=\"w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0\">
                                        <i class=\"fas fa-user text-blue-600 text-xs\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm font-semibold text-slate-800\">";
                // line 147
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 147), "nom", [], "any", false, false, false, 147)), "html", null, true);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 147), "prenoms", [], "any", false, false, false, 147), "html", null, true);
                yield "</p>
                                        <p class=\"text-xs text-slate-400 mt-0.5\">";
                // line 148
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 148), "email", [], "any", false, false, false, 148), "html", null, true);
                yield "</p>
                                    </div>
                                </div>
                            </td>
                            <td class=\"px-3 py-4 text-sm font-mono text-slate-500\">
    ";
                // line 153
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 153), "contact", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 154
                    yield "        ";
                    $context["contact"] = Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 154), "contact", [], "any", false, false, false, 154), [" " => ""]);
                    // line 155
                    yield "        ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["contact"] ?? null)) == 8)) {
                        // line 156
                        yield "            ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 0, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 2, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 4, 2), "html", null, true);
                        yield " ";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["contact"] ?? null), 6, 2), "html", null, true);
                        yield "
        ";
                    } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),                     // line 157
($context["contact"] ?? null)) == 10)) {
                        // line 158
                        yield "            ";
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
                        // line 160
                        yield "            ";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 160), "contact", [], "any", false, false, false, 160), "html", null, true);
                        yield "
        ";
                    }
                    // line 162
                    yield "    ";
                } else {
                    // line 163
                    yield "        -
    ";
                }
                // line 165
                yield "</td>
                            <td class=\"px-5 py-4\">
                                <span class=\"inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[0.68rem] font-semibold bg-blue-50 text-blue-700 border border-blue-400\">
                                    ";
                // line 168
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 168), "nom", [], "any", false, false, false, 168), "html", null, true);
                yield "
                                </span>
                            </td>
                            ";
                // line 171
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 172
                    yield "                            <td class=\"px-5 py-4\">
                                <span class=\"inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[0.68rem] font-semibold bg-purple-50 text-purple-700 border border-purple-400\">
                                    ";
                    // line 174
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "etablissement", [], "any", false, false, false, 174), "nom", [], "any", false, false, false, 174), "html", null, true);
                    yield "
                                </span>
                            </td>
                            ";
                }
                // line 178
                yield "                            <td class=\"px-5 py-4 text-xs text-slate-400 font-bold\">
                                ";
                // line 179
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "modification", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "modification", [], "any", false, false, false, 179), "d/m/Y"), "html", null, true)) : ("-"));
                yield "
                                <span class=\"block text-slate-300\">";
                // line 180
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "modification", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "modification", [], "any", false, false, false, 180), "H:i"), "html", null, true)) : (""));
                yield "</span>
                            </td>
                    <td class=\"px-5 py-4\">
                        <div class=\"flex items-center gap-2\">
                            ";
                // line 184
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "admis", [], "any", false, false, false, 184))) {
                    // line 185
                    yield "                                ";
                    if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 186
                        yield "                                    <a href=\"";
                        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_inscription");
                        yield "?candidature=";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 186), "html", null, true);
                        yield "\"
                                       class=\"inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-red-50 text-red-600 border border-red-500 text-xs font-bold hover:bg-red-600 hover:text-white transition-all\">
                                        <i class=\"fas fa-user-plus text-[10px]\"></i> Inscrire définitivement
                                    </a>
                                ";
                    } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 191
                        yield "                                    <span class=\"inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-600 border border-amber-500 text-xs font-bold\">
                                        <i class=\"fas fa-clock text-[10px]\"></i> Pas encore inscrit
                                    </span>
                                ";
                    }
                    // line 195
                    yield "                            ";
                } else {
                    // line 196
                    yield "                                <span class=\"inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-500 text-xs font-bold\">
                                    <i class=\"fas fa-check text-[10px]\"></i> Déjà inscrit
                                </span>
                            ";
                }
                // line 200
                yield "                            <a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 200)]), "html", null, true);
                yield "\"
                               class=\"inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-600 border border-indigo-500 text-xs font-bold hover:bg-indigo-600 hover:text-white transition-all\">
                                <i class=\"fas fa-eye text-[10px]\"></i> Voir
                            </a>
                        </div>
                    </td>
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
            // line 208
            yield "            </tbody>
        </table>
    </div>

    ";
            // line 213
            yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-t border-slate-100 bg-slate-50/60\">
        <p class=\"text-xs text-slate-400 font-medium\">
            Affichage de <strong class=\"text-slate-600\">";
            // line 215
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 215) * (CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "currentPageNumber", [], "any", false, false, false, 215) - 1)) + 1), "html", null, true);
            yield "</strong> 
            à <strong class=\"text-slate-600\">";
            // line 216
            yield (string) $this->escaper->escape(min((CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 216) * CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "currentPageNumber", [], "any", false, false, false, 216)), CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 216)), "html", null, true);
            yield "</strong> 
            sur <strong class=\"text-slate-600\">";
            // line 217
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 217), "html", null, true);
            yield "</strong> élément(s)
        </p>
        <div class=\"knp-pagination\">
            ";
            // line 220
            yield (string) $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["candidatures"] ?? null));
            yield "
        </div>
    </div>
</div>

";
        } else {
            // line 226
            yield "
";
            // line 228
            yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 py-16 px-8 text-center\">
    <div class=\"w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center mx-auto mb-5 text-3xl text-blue-400\">
        <i class=\"fas fa-user-check\"></i>
    </div>
    <h3 class=\"text-lg font-bold text-slate-800 mb-2\">Aucun candidat admis</h3>
    <p class=\"text-sm text-slate-500\">Aucun candidat n\x27a encore été admis dans votre établissement.</p>
</div>

";
        }
        // line 237
        yield "</div>

</div>

";
        // line 241
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 242
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener(\x27DOMContentLoaded\x27, () => {
    const container = document.getElementById(\x27admis-container\x27);
    if (!container) return;

    let searchTimeout;

    container.addEventListener(\x27submit\x27, (e) => {
        if (e.target.id === \x27filterForm\x27) {
            e.preventDefault();
            fetchResults(new URLSearchParams(new FormData(e.target)).toString());
        }
    });

    container.addEventListener(\x27input\x27, (e) => {
        if (e.target.name === \x27q\x27) {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                const form = document.getElementById(\x27filterForm\x27);
                if (form) fetchResults(new URLSearchParams(new FormData(form)).toString());
            }, 400);
        }
    });

    container.addEventListener(\x27change\x27, (e) => {
        if (e.target.name === \x27limit\x27) {
            const form = document.getElementById(\x27filterForm\x27);
            if (form) fetchResults(new URLSearchParams(new FormData(form)).toString());
        }
    });

    container.addEventListener(\x27click\x27, (e) => {
        const link = e.target.closest(\x27.knp-pagination a\x27);
        if (link) {
            e.preventDefault();
            const url = new URL(link.href);
            fetchResults(url.search);
        }
    });

    function fetchResults(queryString) {
        const url = `\${window.location.pathname}?\${queryString}`;
        
        window.history.pushState({}, \x27\x27, url);

        container.style.opacity = \x270.5\x27;
        container.style.pointerEvents = \x27none\x27;

        fetch(url, { headers: { \x27X-Requested-With\x27: \x27XMLHttpRequest\x27 } })
        .then(response => response.text())
        .then(html => {
            const doc = new DOMParser().parseFromString(html, \x27text/html\x27);
            const newContainer = doc.getElementById(\x27admis-container\x27);
            if (newContainer) {
                container.innerHTML = newContainer.innerHTML;
            }
        })
        .finally(() => {
            container.style.opacity = \x271\x27;
            container.style.pointerEvents = \x27auto\x27;
            
            const searchInput = document.querySelector(\x27input[name=\"q\"]\x27);
            if (searchInput) {
                const val = searchInput.value;
                searchInput.focus();
                searchInput.setSelectionRange(val.length, val.length);
            }
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
        return "admis/liste_admis.html.twig";
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
        return array (  578 => 242,  561 => 241,  555 => 237,  544 => 228,  541 => 226,  532 => 220,  526 => 217,  522 => 216,  518 => 215,  514 => 213,  508 => 208,  484 => 200,  478 => 196,  475 => 195,  469 => 191,  458 => 186,  455 => 185,  453 => 184,  446 => 180,  442 => 179,  439 => 178,  432 => 174,  428 => 172,  426 => 171,  420 => 168,  415 => 165,  411 => 163,  408 => 162,  402 => 160,  388 => 158,  386 => 157,  375 => 156,  372 => 155,  369 => 154,  367 => 153,  359 => 148,  353 => 147,  341 => 138,  335 => 135,  332 => 134,  315 => 133,  308 => 128,  304 => 126,  302 => 125,  291 => 116,  286 => 112,  279 => 111,  271 => 109,  268 => 108,  264 => 107,  258 => 104,  247 => 98,  241 => 97,  235 => 96,  229 => 95,  221 => 89,  216 => 85,  214 => 84,  211 => 83,  200 => 74,  196 => 73,  188 => 67,  179 => 60,  175 => 59,  167 => 53,  159 => 47,  152 => 42,  148 => 39,  145 => 38,  142 => 37,  139 => 36,  136 => 35,  133 => 34,  124 => 27,  120 => 25,  114 => 23,  110 => 21,  108 => 20,  95 => 9,  91 => 6,  81 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/liste_admis.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\liste_admis.html.twig");
    }
}
