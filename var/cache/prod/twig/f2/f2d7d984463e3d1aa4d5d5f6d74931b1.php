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

/* admis/admis_definitifs.html.twig */
class __TwigTemplate_832a9b96f39c9d92ea34361de7a05ad8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/admis_definitifs.html.twig"));

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
        yield "    ";
        $context["total_inscrits"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 30);
        // line 31
        yield "    ";
        $context["total_hommes_count"] = ((array_key_exists("total_hommes", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_hommes"] ?? null), 0)) : (0));
        // line 32
        yield "    ";
        $context["total_femmes_count"] = ((array_key_exists("total_femmes", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_femmes"] ?? null), 0)) : (0));
        // line 33
        yield "    ";
        $context["pct_hommes"] = (((($context["total_inscrits"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["total_hommes_count"] ?? null) / ($context["total_inscrits"] ?? null)) * 100), 1)) : (0));
        // line 34
        yield "    ";
        $context["pct_femmes"] = (((($context["total_inscrits"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["total_femmes_count"] ?? null) / ($context["total_inscrits"] ?? null)) * 100), 1)) : (0));
        // line 35
        yield "
    ";
        // line 36
        $context["total_non_inscrits"] = ((array_key_exists("total_admis_non_inscrits", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_admis_non_inscrits"] ?? null), 0)) : (0));
        // line 37
        yield "    ";
        $context["total_provisoires_pool"] = (($context["total_inscrits"] ?? null) + ($context["total_non_inscrits"] ?? null));
        // line 38
        yield "    ";
        $context["pct_non_inscrits"] = (((($context["total_provisoires_pool"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["total_non_inscrits"] ?? null) / ($context["total_provisoires_pool"] ?? null)) * 100), 1)) : (0));
        // line 39
        yield "
    <div class=\"relative z-10 mt-6 grid grid-cols-1 md:grid-cols-3 gap-4\">
        ";
        // line 42
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-5 border border-white/20 flex flex-col justify-between shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"flex items-center justify-between gap-3 mb-3\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-11 h-11 rounded-xl bg-emerald-400/20 text-emerald-200 border border-emerald-300/30 flex items-center justify-center text-xl shrink-0\">
                        <i class=\"fas fa-user-graduate\"></i>
                    </div>
                    <div>
                        <p class=\"text-white/70 text-xs uppercase tracking-wider font-semibold\">Inscrits Définitifs</p>
                        <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white mt-0.5\">";
        // line 50
        yield (string) $this->escaper->escape(($context["total_inscrits"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <span class=\"inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-200 border border-emerald-400/30\">
                    <i class=\"fas fa-check-circle text-[10px]\"></i> Validés
                </span>
            </div>
            ";
        // line 58
        yield "            <div class=\"pt-3 border-t border-white/10 flex items-center justify-between gap-2 text-xs\">
                <div class=\"flex items-center gap-1.5 bg-sky-500/20 text-sky-100 px-2.5 py-1 rounded-lg border border-sky-400/30\">
                    <i class=\"fas fa-mars text-sky-200\"></i>
                    <span class=\"font-bold\">";
        // line 61
        yield (string) $this->escaper->escape(($context["total_hommes_count"] ?? null), "html", null, true);
        yield "</span>
                    <span class=\"text-sky-200/90 text-[11px]\">(";
        // line 62
        yield (string) $this->escaper->escape(($context["pct_hommes"] ?? null), "html", null, true);
        yield "%)</span>
                </div>
                <div class=\"flex items-center gap-1.5 bg-pink-500/20 text-pink-100 px-2.5 py-1 rounded-lg border border-pink-400/30\">
                    <i class=\"fas fa-venus text-pink-200\"></i>
                    <span class=\"font-bold\">";
        // line 66
        yield (string) $this->escaper->escape(($context["total_femmes_count"] ?? null), "html", null, true);
        yield "</span>
                    <span class=\"text-pink-200/90 text-[11px]\">(";
        // line 67
        yield (string) $this->escaper->escape(($context["pct_femmes"] ?? null), "html", null, true);
        yield "%)</span>
                </div>
            </div>
        </div>

        ";
        // line 73
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-5 border border-white/20 flex flex-col justify-between shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"flex items-center justify-between gap-3 mb-3\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-11 h-11 rounded-xl bg-amber-400/20 text-amber-200 border border-amber-300/30 flex items-center justify-center text-xl shrink-0\">
                        <i class=\"fas fa-user-clock\"></i>
                    </div>
                    <div>
                        <p class=\"text-white/70 text-xs uppercase tracking-wider font-semibold\">Admis Provisoires Non Inscrits</p>
                        <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white mt-0.5\">";
        // line 81
        yield (string) $this->escaper->escape(($context["total_non_inscrits"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
                ";
        // line 84
        if ((($context["total_non_inscrits"] ?? null) > 0)) {
            // line 85
            yield "                <span class=\"inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-bold bg-amber-500/20 text-amber-200 border border-amber-400/30\">
                    <i class=\"fas fa-hourglass-half text-[10px]\"></i> En attente
                </span>
                ";
        }
        // line 89
        yield "            </div>
            <div class=\"pt-3 border-t border-white/10 flex items-center justify-between text-xs text-amber-100/90\">
                <span>Reste à inscrire :</span>
                <span class=\"font-bold text-amber-200 bg-amber-500/20 px-2 py-0.5 rounded border border-amber-400/30\">
                    ";
        // line 93
        yield (string) $this->escaper->escape(($context["pct_non_inscrits"] ?? null), "html", null, true);
        yield "% des admis prov.
                </span>
            </div>
        </div>

        ";
        // line 99
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-5 border border-white/20 flex flex-col justify-between shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"flex items-center justify-between gap-3 mb-3\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-11 h-11 rounded-xl bg-rose-400/20 text-rose-200 border border-rose-300/30 flex items-center justify-center text-xl shrink-0\">
                        <i class=\"fas fa-user-slash\"></i>
                    </div>
                    <div>
                        <p class=\"text-white/70 text-xs uppercase tracking-wider font-semibold\">Abandons Signalés</p>
                        <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white mt-0.5\">";
        // line 107
        yield (string) $this->escaper->escape(((array_key_exists("total_abandons", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_abandons"] ?? null), 0)) : (0)), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <span class=\"inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-bold bg-rose-500/20 text-rose-200 border border-rose-400/30\">
                    <i class=\"fas fa-info-circle text-[10px]\"></i> Retirés
                </span>
            </div>
            <div class=\"pt-3 border-t border-white/10 flex items-center justify-between text-xs text-rose-100/90\">
                <span>Statut :</span>
                <span class=\"font-medium text-rose-200\">Exclus des effectifs actifs</span>
            </div>
        </div>
    </div>
</div>

";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 123));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 124
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 125
                yield "        ";
                $context["bg"] = ((($context["type"] == "success")) ? ("bg-green-50 border-green-200 text-green-700") : (((CoreExtension::inFilter($context["type"], ["error", "danger"])) ? ("bg-red-50 border-red-200 text-red-700") : ("bg-blue-50 border-blue-200 text-blue-700"))));
                // line 126
                yield "        ";
                $context["ico"] = ((($context["type"] == "success")) ? ("check-circle") : (((CoreExtension::inFilter($context["type"], ["error", "danger"])) ? ("exclamation-circle") : ("info-circle"))));
                // line 127
                yield "        <div class=\"flex items-center gap-3 px-5 py-3.5 rounded-xl border mb-5 text-sm font-medium ";
                yield (string) $this->escaper->escape(($context["bg"] ?? null), "html", null, true);
                yield "\">
            <i class=\"fas fa-";
                // line 128
                yield (string) $this->escaper->escape(($context["ico"] ?? null), "html", null, true);
                yield "\"></i> ";
                yield (string) $this->escaper->escape($context["message"], "html", null, true);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 132
        yield "
";
        // line 134
        yield "<div id=\"admis-definitifs-container\">

<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">

    ";
        // line 139
        yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-b border-slate-100 bg-slate-50/60\">
        <form method=\"get\" id=\"filterForm\" class=\"flex flex-wrap items-center w-full justify-between gap-3\">
            <div class=\"flex items-center gap-3\">
                <div class=\"flex items-center gap-2 text-sm text-slate-500 font-medium\">
                    <span>Afficher</span>
                    <select name=\"limit\" id=\"pageSizeSelect\" onchange=\"document.getElementById(\x27filterForm\x27).submit();\"
                            class=\"border border-slate-200 rounded-lg px-2 py-1 text-sm text-slate-700 bg-white cursor-pointer outline-none focus:border-indigo-400 font-medium\">
                        <option value=\"10\" ";
        // line 146
        if ((($context["limit"] ?? null) == 10)) {
            yield "selected";
        }
        yield ">10</option>
                        <option value=\"25\" ";
        // line 147
        if ((($context["limit"] ?? null) == 25)) {
            yield "selected";
        }
        yield ">25</option>
                        <option value=\"50\" ";
        // line 148
        if ((($context["limit"] ?? null) == 50)) {
            yield "selected";
        }
        yield ">50</option>
                        <option value=\"100\" ";
        // line 149
        if ((($context["limit"] ?? null) == 100)) {
            yield "selected";
        }
        yield ">100</option>
                    </select>
                    <span>éléments</span>
                </div>
            </div>
            <div class=\"flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-3 py-2 focus-within:border-indigo-400 focus-within:ring-2 focus-within:ring-indigo-100 transition-all\">
                <i class=\"fas fa-search text-slate-400 text-xs\"></i>
                <input type=\"text\" name=\"q\" value=\"";
        // line 156
        yield (string) $this->escaper->escape(($context["searchTerm"] ?? null), "html", null, true);
        yield "\" placeholder=\"Rechercher...\"
                       class=\"outline-none text-sm text-slate-700 placeholder-slate-300 w-44 bg-transparent\">
            </div>
            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 159), "query", [], "any", false, false, false, 159), "all", [], "any", false, false, false, 159));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 160
            yield "                ";
            if (((($context["key"] != "limit") && ($context["key"] != "q")) && ($context["key"] != "page"))) {
                // line 161
                yield "                    <input type=\"hidden\" name=\"";
                yield (string) $this->escaper->escape($context["key"], "html", null, true);
                yield "\" value=\"";
                yield (string) $this->escaper->escape($context["val"], "html", null, true);
                yield "\">
                ";
            }
            // line 163
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 164
        yield "        </form>
    </div>

";
        // line 167
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 167) > 0)) {
            // line 168
            yield "
    ";
            // line 170
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
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Contrat</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Livret</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Statut</th>
                    <th class=\"px-5 py-3 text-center text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-slate-50\">
                ";
            // line 187
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
                // line 188
                yield "                <tr class=\"hover:bg-slate-50/70 transition-colors duration-100\">
                    <td class=\"px-5 py-4 text-sm text-slate-400 font-medium\">";
                // line 189
                yield (string) $this->escaper->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "currentPageNumber", [], "any", false, false, false, 189) - 1) * CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 189)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 189)), "html", null, true);
                yield "</td>
                    <td class=\"px-5 py-4\">
                        <span class=\"font-mono text-xs bg-indigo-50 text-indigo-600 border border-indigo-500 px-2.5 py-1 rounded-lg font-medium\">
                            ";
                // line 192
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "numeroInscription", [], "any", false, false, false, 192), "html", null, true);
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
                // line 201
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 201), "nom", [], "any", false, false, false, 201)), "html", null, true);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 201), "prenoms", [], "any", false, false, false, 201), "html", null, true);
                yield "</p>
                                <p class=\"text-xs text-slate-400 mt-0.5\">";
                // line 202
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 202), "email", [], "any", false, false, false, 202), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    </td>
                    <td class=\"px-5 py-4 text-sm font-mono text-slate-500\">
                        ";
                // line 207
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 207), "contact", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 208
                    yield "                            ";
                    $context["contact"] = Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 208), "contact", [], "any", false, false, false, 208), [" " => ""]);
                    // line 209
                    yield "                            ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["contact"] ?? null)) == 8)) {
                        // line 210
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
                    } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),                     // line 211
($context["contact"] ?? null)) == 10)) {
                        // line 212
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
                        // line 214
                        yield "                                ";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "user", [], "any", false, false, false, 214), "contact", [], "any", false, false, false, 214), "html", null, true);
                        yield "
                            ";
                    }
                    // line 216
                    yield "                        ";
                } else {
                    // line 217
                    yield "                            -
                        ";
                }
                // line 219
                yield "                    </td>
                    <td class=\"px-5 py-4\">
                        <span class=\"inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[0.68rem] font-semibold bg-blue-50 text-blue-700 border border-blue-400\">
                            ";
                // line 222
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 222), "nom", [], "any", false, false, false, 222), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td class=\"px-5 py-4 text-xs text-slate-400 font-mono\">
                        ";
                // line 226
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateInscription", [], "any", false, false, false, 226), "d/m/Y"), "html", null, true);
                yield "
                        <span class=\"block text-slate-300\">";
                // line 227
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateInscription", [], "any", false, false, false, 227), "H:i"), "html", null, true);
                yield "</span>
                    </td>
                    <td class=\"px-5 py-4\">
                        ";
                // line 230
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierContrat", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 231
                    yield "                            <div class=\"flex flex-col gap-1 items-start\">
                                <a href=\"";
                    // line 232
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/contrats/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierContrat", [], "any", false, false, false, 232))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.7rem] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-500 hover:bg-emerald-100 transition\" title=\"Voir le document\">
                                    <i class=\"fas fa-file-pdf\"></i> Contrat signé
                                </a>
                                ";
                    // line 235
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entreprisePartenaire", [], "any", false, false, false, 235)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 236
                        yield "                                    <span class=\"text-[0.65rem] text-slate-500 font-medium\"><i class=\"fas fa-building mr-1\"></i>";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entreprisePartenaire", [], "any", false, false, false, 236), "nomStructure", [], "any", false, false, false, 236), "html", null, true);
                        yield "</span>
                                ";
                    }
                    // line 238
                    yield "                            </div>
                        ";
                } else {
                    // line 240
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 240)]), "html", null, true);
                    yield "#contrat\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200 hover:bg-slate-200 transition\" title=\"Renseigner l\x27entreprise et joindre le PDF\">
                                <i class=\"fas fa-file-signature\"></i> Joindre PDF
                            </a>
                        ";
                }
                // line 244
                yield "                    </td>
                    <td class=\"px-5 py-4\">
                        ";
                // line 246
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierLivret", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 247
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/livrets/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierLivret", [], "any", false, false, false, 247))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.7rem] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-500 hover:bg-emerald-100 transition\" title=\"Voir le livret\">
                                <i class=\"fas fa-book-reader\"></i> Livret soumis
                            </a>
                        ";
                } else {
                    // line 251
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 251)]), "html", null, true);
                    yield "#livret\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200 hover:bg-slate-200 transition\" title=\"Joindre le livret apprenti\">
                                <i class=\"fas fa-book-reader\"></i> Joindre Livret
                            </a>
                        ";
                }
                // line 255
                yield "                    </td>
                    <td class=\"px-5 py-4\">
                        ";
                // line 257
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "confirme", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 258
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.7rem] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-500\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-emerald-500 shrink-0\"></span>Confirmé
                            </span>
                        ";
                } else {
                    // line 262
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.7rem] font-semibold bg-amber-50 text-amber-700 border border-amber-500\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-amber-500 shrink-0\"></span>En attente
                            </span>
                        ";
                }
                // line 266
                yield "                    </td>
                    <td class=\"px-5 py-4 text-center\">
                        ";
                // line 268
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fichierContrat", [], "any", false, false, false, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 269
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 269)]), "html", null, true);
                    yield "#contrat\" class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-lg text-xs font-medium bg-blue-50 text-blue-600 border border-blue-200 hover:bg-blue-100 transition\" title=\"Modifier le contrat\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                        ";
                }
                // line 273
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
            // line 276
            yield "            </tbody>
        </table>
    </div>

    ";
            // line 281
            yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-t border-slate-100 bg-slate-50/60\">
        <p class=\"text-xs text-slate-400 font-medium\">
            Affichage de <strong class=\"text-slate-600\">";
            // line 283
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 283) * (CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "currentPageNumber", [], "any", false, false, false, 283) - 1)) + 1), "html", null, true);
            yield "</strong> 
            à <strong class=\"text-slate-600\">";
            // line 284
            yield (string) $this->escaper->escape(min((CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 284) * CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "currentPageNumber", [], "any", false, false, false, 284)), CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 284)), "html", null, true);
            yield "</strong> 
            sur <strong class=\"text-slate-600\">";
            // line 285
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 285), "html", null, true);
            yield "</strong> élément(s)
        </p>
        <div class=\"knp-pagination\">
            ";
            // line 288
            yield (string) $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["admis"] ?? null));
            yield "
        </div>
    </div>
    </div>

";
        } else {
            // line 294
            yield "
    ";
            // line 296
            yield "    <div class=\"py-16 px-8 text-center\">
        <div class=\"w-16 h-16 rounded-2xl bg-indigo-50 flex items-center justify-center mx-auto mb-5 text-3xl text-indigo-400\">
            <i class=\"fas fa-user-graduate\"></i>
        </div>
        <h3 class=\"text-lg font-bold text-slate-800 mb-2\">Aucun candidat trouvé</h3>
        <p class=\"text-sm text-slate-500\">Aucun résultat ne correspond à votre recherche ou il n\x27y a pas de candidats inscrits.</p>
    </div>

";
        }
        // line 305
        yield "
</div>

</div>

";
        // line 310
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 384
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 310
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 311
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener(\x27DOMContentLoaded\x27, () => {
    const container = document.getElementById(\x27admis-definitifs-container\x27);
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
            const newContainer = doc.getElementById(\x27admis-definitifs-container\x27);
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
        return "admis/admis_definitifs.html.twig";
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
        return array (  708 => 311,  698 => 310,  689 => 384,  687 => 310,  680 => 305,  669 => 296,  666 => 294,  657 => 288,  651 => 285,  647 => 284,  643 => 283,  639 => 281,  633 => 276,  616 => 273,  608 => 269,  606 => 268,  602 => 266,  596 => 262,  590 => 258,  588 => 257,  584 => 255,  576 => 251,  568 => 247,  566 => 246,  562 => 244,  554 => 240,  550 => 238,  544 => 236,  542 => 235,  536 => 232,  533 => 231,  531 => 230,  525 => 227,  521 => 226,  514 => 222,  509 => 219,  505 => 217,  502 => 216,  496 => 214,  482 => 212,  480 => 211,  469 => 210,  466 => 209,  463 => 208,  461 => 207,  453 => 202,  447 => 201,  435 => 192,  429 => 189,  426 => 188,  409 => 187,  390 => 170,  387 => 168,  385 => 167,  380 => 164,  373 => 163,  365 => 161,  362 => 160,  358 => 159,  352 => 156,  340 => 149,  334 => 148,  328 => 147,  322 => 146,  313 => 139,  307 => 134,  304 => 132,  287 => 128,  282 => 127,  279 => 126,  276 => 125,  271 => 124,  267 => 123,  249 => 107,  239 => 99,  231 => 93,  225 => 89,  219 => 85,  217 => 84,  211 => 81,  201 => 73,  193 => 67,  189 => 66,  182 => 62,  178 => 61,  173 => 58,  163 => 50,  153 => 42,  149 => 39,  146 => 38,  143 => 37,  141 => 36,  138 => 35,  135 => 34,  132 => 33,  129 => 32,  126 => 31,  123 => 30,  114 => 23,  108 => 20,  95 => 9,  91 => 6,  81 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/admis_definitifs.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\admis_definitifs.html.twig");
    }
}
