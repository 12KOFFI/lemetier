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

/* admis/index.html.twig */
class __TwigTemplate_fb15224892a3db65f14bd8156b7a0933 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/index.html.twig"));

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

        yield "Inscriptions Définitives";
        
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
        yield "<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
    <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
    <div class=\"absolute -bottom-16 left-1/3 w-64 h-64 rounded-full bg-white/[0.04] pointer-events-none\"></div>

    <div class=\"relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border border-white/20 flex items-center justify-center text-2xl shrink-0\">
                <i class=\"fas fa-user-graduate\"></i>
            </div>
            <div>
                <h1 class=\"text-xl md:text-2xl font-bold tracking-tight\">Inscriptions Définitives</h1>
                <p class=\"text-white/60 text-sm mt-0.5\">
                    ";
        // line 21
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 21), "html", null, true);
        yield " apprenti(s) inscrit(s) définitivement
                </p>
            </div>
        </div>
        ";
        // line 25
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white text-indigo-600 hover:bg-indigo-50 border border-white text-sm font-semibold transition-all hover:-translate-y-0.5 w-full md:w-auto justify-center\">
            <i class=\"fas fa-arrow-left text-xs\"></i> Tableau de bord
        </a>
        ";
        }
        // line 31
        yield "    </div>

    ";
        // line 34
        yield "    ";
        $context["total_inscrits"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 34);
        // line 35
        yield "    ";
        $context["total_hommes_count"] = ((array_key_exists("total_hommes", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_hommes"] ?? null), 0)) : (0));
        // line 36
        yield "    ";
        $context["total_femmes_count"] = ((array_key_exists("total_femmes", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_femmes"] ?? null), 0)) : (0));
        // line 37
        yield "    ";
        $context["pct_hommes"] = (((($context["total_inscrits"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["total_hommes_count"] ?? null) / ($context["total_inscrits"] ?? null)) * 100), 1)) : (0));
        // line 38
        yield "    ";
        $context["pct_femmes"] = (((($context["total_inscrits"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["total_femmes_count"] ?? null) / ($context["total_inscrits"] ?? null)) * 100), 1)) : (0));
        // line 39
        yield "
    ";
        // line 40
        $context["total_non_inscrits"] = ((array_key_exists("total_admis_non_inscrits", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_admis_non_inscrits"] ?? null), 0)) : (0));
        // line 41
        yield "    ";
        $context["total_provisoires_pool"] = (($context["total_inscrits"] ?? null) + ($context["total_non_inscrits"] ?? null));
        // line 42
        yield "    ";
        $context["pct_non_inscrits"] = (((($context["total_provisoires_pool"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["total_non_inscrits"] ?? null) / ($context["total_provisoires_pool"] ?? null)) * 100), 1)) : (0));
        // line 43
        yield "
    <div class=\"relative z-10 mt-6 grid grid-cols-1 md:grid-cols-3 gap-4\">
        ";
        // line 46
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-5 border border-white/20 flex flex-col justify-between shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"flex items-center justify-between gap-3 mb-3\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-11 h-11 rounded-xl bg-emerald-400/20 text-emerald-200 border border-emerald-300/30 flex items-center justify-center text-xl shrink-0\">
                        <i class=\"fas fa-user-graduate\"></i>
                    </div>
                    <div>
                        <p class=\"text-white/70 text-xs uppercase tracking-wider font-semibold\">Inscrits Définitifs</p>
                        <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white mt-0.5\">";
        // line 54
        yield (string) $this->escaper->escape(($context["total_inscrits"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <span class=\"inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-200 border border-emerald-400/30\">
                    <i class=\"fas fa-check-circle text-[10px]\"></i> Validés
                </span>
            </div>
            ";
        // line 62
        yield "            <div class=\"pt-3 border-t border-white/10 flex items-center justify-between gap-2 text-xs\">
                <div class=\"flex items-center gap-1.5 bg-sky-500/20 text-sky-100 px-2.5 py-1 rounded-lg border border-sky-400/30\">
                    <i class=\"fas fa-mars text-sky-200\"></i>
                    <span class=\"font-bold\">";
        // line 65
        yield (string) $this->escaper->escape(($context["total_hommes_count"] ?? null), "html", null, true);
        yield "</span>
                    <span class=\"text-sky-200/90 text-[11px]\">(";
        // line 66
        yield (string) $this->escaper->escape(($context["pct_hommes"] ?? null), "html", null, true);
        yield "%)</span>
                </div>
                <div class=\"flex items-center gap-1.5 bg-pink-500/20 text-pink-100 px-2.5 py-1 rounded-lg border border-pink-400/30\">
                    <i class=\"fas fa-venus text-pink-200\"></i>
                    <span class=\"font-bold\">";
        // line 70
        yield (string) $this->escaper->escape(($context["total_femmes_count"] ?? null), "html", null, true);
        yield "</span>
                    <span class=\"text-pink-200/90 text-[11px]\">(";
        // line 71
        yield (string) $this->escaper->escape(($context["pct_femmes"] ?? null), "html", null, true);
        yield "%)</span>
                </div>
            </div>
        </div>

        ";
        // line 77
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-5 border border-white/20 flex flex-col justify-between shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"flex items-center justify-between gap-3 mb-3\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-11 h-11 rounded-xl bg-amber-400/20 text-amber-200 border border-amber-300/30 flex items-center justify-center text-xl shrink-0\">
                        <i class=\"fas fa-user-clock\"></i>
                    </div>
                    <div>
                        <p class=\"text-white/70 text-xs uppercase tracking-wider font-semibold\">Admis Provisoires Non Inscrits</p>
                        <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white mt-0.5\">";
        // line 85
        yield (string) $this->escaper->escape(($context["total_non_inscrits"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
                ";
        // line 88
        if ((($context["total_non_inscrits"] ?? null) > 0)) {
            // line 89
            yield "                <span class=\"inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-bold bg-amber-500/20 text-amber-200 border border-amber-400/30\">
                    <i class=\"fas fa-hourglass-half text-[10px]\"></i> En attente
                </span>
                ";
        }
        // line 93
        yield "            </div>
            <div class=\"pt-3 border-t border-white/10 flex items-center justify-between text-xs text-amber-100/90\">
                <span>Reste à inscrire :</span>
                <span class=\"font-bold text-amber-200 bg-amber-500/20 px-2 py-0.5 rounded border border-amber-400/30\">
                    ";
        // line 97
        yield (string) $this->escaper->escape(($context["pct_non_inscrits"] ?? null), "html", null, true);
        yield "% des admis prov.
                </span>
            </div>
        </div>

        ";
        // line 103
        yield "        <div class=\"bg-white/15 backdrop-blur-md rounded-2xl p-5 border border-white/20 flex flex-col justify-between shadow-sm hover:bg-white/20 transition-all\">
            <div class=\"flex items-center justify-between gap-3 mb-3\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-11 h-11 rounded-xl bg-rose-400/20 text-rose-200 border border-rose-300/30 flex items-center justify-center text-xl shrink-0\">
                        <i class=\"fas fa-user-slash\"></i>
                    </div>
                    <div>
                        <p class=\"text-white/70 text-xs uppercase tracking-wider font-semibold\">Abandons Signalés</p>
                        <p class=\"text-2xl lg:text-3xl font-extrabold tracking-tight leading-none text-white mt-0.5\">";
        // line 111
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
        // line 127
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "<div class=\"bg-white rounded-xl shadow-sm border border-slate-200 p-4 mb-6\">
    <form method=\"get\" action=\"";
            // line 129
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index");
            yield "\" class=\"flex flex-wrap gap-4 items-end\">
        <div class=\"flex-1 min-w-[200px]\">
            <label class=\"block text-sm font-medium text-slate-600 mb-1\">Établissement</label>
            <select name=\"etablissement\" class=\"w-full px-3 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm\">
                <option value=\"\">Tous</option>
                ";
            // line 134
            if (array_key_exists("etablissements", $context)) {
                // line 135
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etab"]) {
                    // line 136
                    yield "                        <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etab"], "id", [], "any", false, false, false, 136), "html", null, true);
                    yield "\" ";
                    yield (string) ((((array_key_exists("etablissement_filtre", $context) && (($tmp = ($context["etablissement_filtre"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement_filtre"] ?? null), "id", [], "any", false, false, false, 136) == CoreExtension::getAttribute($this->env, $this->source, $context["etab"], "id", [], "any", false, false, false, 136)))) ? ("selected") : (""));
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etab"], "nom", [], "any", false, false, false, 136), "html", null, true);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['etab'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 138
                yield "                ";
            }
            // line 139
            yield "            </select>
        </div>
        <div class=\"flex-1 min-w-[200px]\">
            <label class=\"block text-sm font-medium text-slate-600 mb-1\">Métier</label>
            <select name=\"metier\" class=\"w-full px-3 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm\">
                <option value=\"\">Tous</option>
                ";
            // line 145
            if (array_key_exists("metiers", $context)) {
                // line 146
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                    // line 147
                    yield "                        <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 147), "html", null, true);
                    yield "\" ";
                    yield (string) ((((array_key_exists("metier_filtre", $context) && (($tmp = ($context["metier_filtre"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["metier_filtre"] ?? null), "id", [], "any", false, false, false, 147) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 147)))) ? ("selected") : (""));
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 147), "html", null, true);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 149
                yield "                ";
            }
            // line 150
            yield "            </select>
        </div>
        <div class=\"flex-1 min-w-[200px]\">
            <label class=\"block text-sm font-medium text-slate-600 mb-1\">Possède un contrat</label>
            <select name=\"contrat\" class=\"w-full px-3 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm\">
                <option value=\"\">Tous</option>
                <option value=\"oui\" ";
            // line 156
            yield (string) (((array_key_exists("contrat_filtre", $context) && (($context["contrat_filtre"] ?? null) == "oui"))) ? ("selected") : (""));
            yield ">Oui (Contrat signé/téléversé)</option>
                <option value=\"non\" ";
            // line 157
            yield (string) (((array_key_exists("contrat_filtre", $context) && (($context["contrat_filtre"] ?? null) == "non"))) ? ("selected") : (""));
            yield ">Non (En attente)</option>
            </select>
        </div>
        <div class=\"flex gap-2\">
            <button type=\"submit\" class=\"px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition text-sm font-medium\">
                <i class=\"fas fa-filter mr-1\"></i> Filtrer
            </button>
            <a href=\"";
            // line 164
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index");
            yield "\" class=\"px-4 py-2 bg-slate-100 text-slate-600 rounded-lg hover:bg-slate-200 transition text-sm font-medium\">
                <i class=\"fas fa-undo mr-1\"></i> Réinitialiser
            </a>
        </div>
    </form>
</div>
";
        }
        // line 171
        yield "
";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 173));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 174
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 175
                yield "        ";
                $context["bg"] = ((($context["type"] == "success")) ? ("bg-green-50 border-green-200 text-green-700") : (((CoreExtension::inFilter($context["type"], ["error", "danger"])) ? ("bg-red-50 border-red-200 text-red-700") : ("bg-blue-50 border-blue-200 text-blue-700"))));
                // line 176
                yield "        ";
                $context["ico"] = ((($context["type"] == "success")) ? ("check-circle") : (((CoreExtension::inFilter($context["type"], ["error", "danger"])) ? ("exclamation-circle") : ("info-circle"))));
                // line 177
                yield "        <div class=\"flex items-center gap-3 px-5 py-3.5 rounded-xl border mb-5 text-sm font-medium ";
                yield (string) $this->escaper->escape(($context["bg"] ?? null), "html", null, true);
                yield "\">
            <i class=\"fas fa-";
                // line 178
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
        // line 182
        yield "
";
        // line 184
        yield "<div id=\"admis-index-container\">

<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">

    ";
        // line 189
        yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-b border-slate-100 bg-slate-50/60\">
        <form method=\"get\" id=\"filterForm\" class=\"flex flex-wrap items-center w-full justify-between gap-3\">
            <div class=\"flex items-center gap-2 text-sm text-slate-500 font-medium\">
                <span>Afficher</span>
                <select name=\"limit\" id=\"pageSizeSelect\" onchange=\"document.getElementById(\x27filterForm\x27).submit();\" class=\"border border-slate-200 rounded-lg px-2 py-1 text-sm text-slate-700 bg-white cursor-pointer outline-none focus:border-indigo-400 font-medium\">
                    <option value=\"10\" ";
        // line 194
        if ((($context["limit"] ?? null) == 10)) {
            yield "selected";
        }
        yield ">10</option>
                    <option value=\"25\" ";
        // line 195
        if ((($context["limit"] ?? null) == 25)) {
            yield "selected";
        }
        yield ">25</option>
                    <option value=\"50\" ";
        // line 196
        if ((($context["limit"] ?? null) == 50)) {
            yield "selected";
        }
        yield ">50</option>
                    <option value=\"100\" ";
        // line 197
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
        // line 203
        yield (string) $this->escaper->escape(($context["searchTerm"] ?? null), "html", null, true);
        yield "\" placeholder=\"Rechercher…\" class=\"outline-none text-sm text-slate-700 placeholder-slate-300 w-44 bg-transparent\">
            </div>
            ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 205), "query", [], "any", false, false, false, 205), "all", [], "any", false, false, false, 205));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 206
            yield "                ";
            if (((($context["key"] != "limit") && ($context["key"] != "q")) && ($context["key"] != "page"))) {
                // line 207
                yield "                    <input type=\"hidden\" name=\"";
                yield (string) $this->escaper->escape($context["key"], "html", null, true);
                yield "\" value=\"";
                yield (string) $this->escaper->escape($context["val"], "html", null, true);
                yield "\">
                ";
            }
            // line 209
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 210
        yield "        </form>
    </div>

";
        // line 213
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 213) > 0)) {
            // line 214
            yield "
    ";
            // line 216
            yield "    <div class=\"overflow-x-auto\">
        <table class=\"w-full min-w-[850px]\">
            <thead>
                <tr class=\"bg-slate-50 border-b border-slate-100\">
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">N°</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">N° Inscription</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Apprenti</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Contact</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Métier</th>
                    ";
            // line 225
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 226
                yield "                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Établissement</th>
                    ";
            }
            // line 228
            yield "                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Date</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Statut</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Contrat</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Livret</th>
                    <th class=\"px-5 py-3 text-right text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-slate-50\">
                ";
            // line 236
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
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 237
                yield "                <tr class=\"hover:bg-slate-50/70 transition-colors duration-100\">
                    <td class=\"px-5 py-4 text-sm text-slate-400 font-medium\">";
                // line 238
                yield (string) $this->escaper->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "currentPageNumber", [], "any", false, false, false, 238) - 1) * CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 238)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 238)), "html", null, true);
                yield "</td>

                    ";
                // line 241
                yield "                    <td class=\"px-5 py-4\">
                        <span class=\"font-mono text-xs bg-emerald-50 text-emerald-700 border border-emerald-100 px-2.5 py-1 rounded-lg font-medium inline-block\">
                            ";
                // line 243
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "numeroInscription", [], "any", false, false, false, 243), "html", null, true);
                yield "
                        </span>
                    </td>                    

                    ";
                // line 248
                yield "                    <td class=\"px-5 py-4\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0\">
                                <i class=\"fas fa-user text-emerald-600 text-xs\"></i>
                            </div>
                            <div>
                                <p class=\"text-sm font-semibold text-slate-800 leading-tight\">
                                    ";
                // line 255
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 255), "nom", [], "any", false, false, false, 255)), "html", null, true);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 255), "prenoms", [], "any", false, false, false, 255), "html", null, true);
                yield "
                                </p>
                                ";
                // line 257
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 257), "datenaissance", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 258
                    yield "                                <p class=\"text-xs text-slate-400 mt-0.5 font-mono\">
                                    ";
                    // line 259
                    yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 259), "datenaissance", [], "any", false, false, false, 259), "d/m/Y"), "html", null, true);
                    yield "
                                </p>
                                ";
                }
                // line 262
                yield "                            </div>
                        </div>
                    </td>

                    ";
                // line 267
                yield "                    <td class=\"px-5 py-4 text-sm font-mono text-slate-500\">";
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "user", [], "any", false, true, false, 267), "contact", [], "any", true, true, false, 267) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 267), "contact", [], "any", false, false, false, 267)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 267), "contact", [], "any", false, false, false, 267), "html", null, true)) : ("—"));
                yield "</td>

                    ";
                // line 270
                yield "                    <td class=\"px-5 py-4\">
                        <span class=\"inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[0.68rem] font-semibold bg-blue-50 text-blue-700 border border-blue-200\">
                            ";
                // line 272
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "metier", [], "any", false, false, false, 272), "nom", [], "any", false, false, false, 272), "html", null, true);
                yield "
                        </span>
                    </td>

                    ";
                // line 277
                yield "                    ";
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 278
                    yield "                    <td class=\"px-5 py-4 text-sm text-slate-500\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etablissement", [], "any", false, false, false, 278), "nom", [], "any", false, false, false, 278), "html", null, true);
                    yield "</td>
                    ";
                }
                // line 280
                yield "
                    ";
                // line 282
                yield "                    <td class=\"px-5 py-4\">
                        <p class=\"text-xs font-mono text-slate-600\">";
                // line 283
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateInscription", [], "any", false, false, false, 283), "d/m/Y"), "html", null, true);
                yield "</p>
                        <p class=\"text-xs text-slate-400 font-mono\">";
                // line 284
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dateInscription", [], "any", false, false, false, 284), "H:i"), "html", null, true);
                yield "</p>
                    </td>

                    ";
                // line 288
                yield "                    <td class=\"px-5 py-4\">
                        ";
                // line 289
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "confirme", [], "any", false, false, false, 289)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 290
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.7rem] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-emerald-500 shrink-0\"></span>Confirmé
                            </span>
                        ";
                } else {
                    // line 294
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.7rem] font-semibold bg-amber-50 text-amber-700 border border-amber-200\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-amber-500 shrink-0\"></span>En attente
                            </span>
                        ";
                }
                // line 298
                yield "                    </td>

                    ";
                // line 301
                yield "                    <td class=\"px-5 py-4\">
                        ";
                // line 302
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "fichierContrat", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 303
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/contrats/" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "fichierContrat", [], "any", false, false, false, 303))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[0.7rem] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 hover:bg-emerald-100 transition\">
                                <i class=\"fas fa-file-pdf\"></i> Signé
                            </a>
                        ";
                } else {
                    // line 307
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[0.7rem] font-medium bg-slate-50 text-slate-400 border border-slate-200\">
                                <i class=\"fas fa-minus-circle\"></i> —
                            </span>
                        ";
                }
                // line 311
                yield "                    </td>

                    ";
                // line 314
                yield "                    <td class=\"px-5 py-4\">
                        ";
                // line 315
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "fichierLivret", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 316
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/livrets/" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "fichierLivret", [], "any", false, false, false, 316))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[0.7rem] font-semibold bg-blue-50 text-blue-700 border border-blue-200 hover:bg-blue-100 transition\">
                                <i class=\"fas fa-book-reader\"></i> Livret
                            </a>
                        ";
                } else {
                    // line 320
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[0.7rem] font-medium bg-slate-50 text-slate-400 border border-slate-200\">
                                <i class=\"fas fa-minus-circle\"></i> —
                            </span>
                        ";
                }
                // line 324
                yield "                    </td>

                    ";
                // line 327
                yield "                    <td class=\"px-5 py-4\">
                        <div class=\"flex items-center justify-end gap-1.5\">
                            ";
                // line 329
                if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "confirme", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["a"], "fichierContrat", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 330
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/contrats/" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "fichierContrat", [], "any", false, false, false, 330))), "html", null, true);
                    yield "\"
                               target=\"_blank\"
                               title=\"Consulter le contrat\"
                               class=\"w-8 h-8 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-500 hover:text-white transition-all duration-150 hover:-translate-y-px text-sm\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            ";
                }
                // line 337
                yield "                            ";
                if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etablissement", [], "any", false, false, false, 337), "user", [], "any", false, false, false, 337) == CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 337))))) {
                    // line 338
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 338)]), "html", null, true);
                    yield "\"
                               title=\"Modifier\"
                               class=\"w-8 h-8 flex items-center justify-center rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-500 hover:text-white transition-all duration-150 hover:-translate-y-px text-sm\">
                                <i class=\"fas fa-pen\"></i>
                            </a>
                            ";
                }
                // line 344
                yield "                            ";
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 345
                    yield "                            <form method=\"post\" action=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 345)]), "html", null, true);
                    yield "\"
                                  onsubmit=\"return confirm(\x27Supprimer cette inscription ? Cette action est irréversible.\x27);\"
                                  class=\"inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 348
                    yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 348))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" title=\"Supprimer\"
                                        class=\"w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition-all duration-150 hover:-translate-y-px text-sm\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                            ";
                }
                // line 355
                yield "                        </div>
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
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 359
            yield "            </tbody>
        </table>
    </div>

    <!-- Contrôles de pagination -->
    <div class=\"flex flex-col sm:flex-row items-center justify-between gap-4 px-6 py-4 border-t border-slate-100 bg-slate-50/60\">
        <div class=\"text-sm text-slate-500 font-medium\">
            Affichage de <strong class=\"text-slate-600\">";
            // line 366
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 366) * (CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "currentPageNumber", [], "any", false, false, false, 366) - 1)) + 1), "html", null, true);
            yield "</strong> 
            à <strong class=\"text-slate-600\">";
            // line 367
            yield (string) $this->escaper->escape(min((CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 367) * CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "currentPageNumber", [], "any", false, false, false, 367)), CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 367)), "html", null, true);
            yield "</strong> 
            sur <strong class=\"text-slate-600\">";
            // line 368
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "getTotalItemCount", [], "any", false, false, false, 368), "html", null, true);
            yield "</strong> élément(s)
        </div>
        <div class=\"knp-pagination\">
            ";
            // line 371
            yield (string) $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["admis"] ?? null));
            yield "
        </div>
    </div>
";
        } else {
            // line 375
            yield "    ";
            // line 376
            yield "    <div class=\"py-16 px-8 text-center\">
        <div class=\"w-16 h-16 rounded-2xl bg-indigo-50 flex items-center justify-center mx-auto mb-5 text-3xl text-indigo-400\">
            <i class=\"fas fa-user-graduate\"></i>
        </div>
        <h3 class=\"text-lg font-bold text-slate-800 mb-2\">Aucun résultat trouvé</h3>
    <p class=\"text-sm text-slate-500 mb-6\">
        ";
            // line 382
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 383
                yield "            Les inscriptions définitives apparaîtront ici une fois enregistrées par les apprentis.
        ";
            } else {
                // line 385
                yield "            Les inscriptions définitives apparaîtront ici une fois enregistrées par les apprentis.
        ";
            }
            // line 387
            yield "    </p>
    ";
            // line 388
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 389
                yield "    <!--<a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_new");
                yield "\"
       class=\"inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-semibold rounded-xl shadow-lg shadow-indigo-200 hover:shadow-indigo-300 hover:-translate-y-0.5 transition-all\">
        <i class=\"fas fa-plus-circle\"></i> Nouvelle inscription
    </a>!-->
    ";
            }
            // line 394
            yield "    </div>
";
        }
        // line 396
        yield "
</div>
</div>

";
        // line 400
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 479
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 400
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 401
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener(\x27DOMContentLoaded\x27, () => {
    const container = document.getElementById(\x27admis-index-container\x27);
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
        // Retrieve current URL but merge with the new queryString
        const currentUrl = new URL(window.location.href);
        const newParams = new URLSearchParams(queryString);
        for(let [key, value] of newParams.entries()) {
            currentUrl.searchParams.set(key, value);
        }

        window.history.pushState({}, \x27\x27, currentUrl);

        container.style.opacity = \x270.5\x27;
        container.style.pointerEvents = \x27none\x27;

        fetch(currentUrl, { headers: { \x27X-Requested-With\x27: \x27XMLHttpRequest\x27 } })
        .then(response => response.text())
        .then(html => {
            const doc = new DOMParser().parseFromString(html, \x27text/html\x27);
            const newContainer = doc.getElementById(\x27admis-index-container\x27);
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
        return "admis/index.html.twig";
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
        return array (  866 => 401,  856 => 400,  847 => 479,  845 => 400,  839 => 396,  835 => 394,  826 => 389,  824 => 388,  821 => 387,  817 => 385,  813 => 383,  811 => 382,  803 => 376,  801 => 375,  794 => 371,  788 => 368,  784 => 367,  780 => 366,  771 => 359,  753 => 355,  743 => 348,  736 => 345,  733 => 344,  723 => 338,  720 => 337,  709 => 330,  707 => 329,  703 => 327,  699 => 324,  693 => 320,  685 => 316,  683 => 315,  680 => 314,  676 => 311,  670 => 307,  662 => 303,  660 => 302,  657 => 301,  653 => 298,  647 => 294,  641 => 290,  639 => 289,  636 => 288,  630 => 284,  626 => 283,  623 => 282,  620 => 280,  614 => 278,  611 => 277,  604 => 272,  600 => 270,  594 => 267,  588 => 262,  582 => 259,  579 => 258,  577 => 257,  570 => 255,  561 => 248,  554 => 243,  550 => 241,  545 => 238,  542 => 237,  525 => 236,  515 => 228,  511 => 226,  509 => 225,  498 => 216,  495 => 214,  493 => 213,  488 => 210,  481 => 209,  473 => 207,  470 => 206,  466 => 205,  461 => 203,  450 => 197,  444 => 196,  438 => 195,  432 => 194,  425 => 189,  419 => 184,  416 => 182,  399 => 178,  394 => 177,  391 => 176,  388 => 175,  383 => 174,  379 => 173,  376 => 171,  366 => 164,  356 => 157,  352 => 156,  344 => 150,  341 => 149,  327 => 147,  322 => 146,  320 => 145,  312 => 139,  309 => 138,  295 => 136,  290 => 135,  288 => 134,  280 => 129,  277 => 128,  275 => 127,  257 => 111,  247 => 103,  239 => 97,  233 => 93,  227 => 89,  225 => 88,  219 => 85,  209 => 77,  201 => 71,  197 => 70,  190 => 66,  186 => 65,  181 => 62,  171 => 54,  161 => 46,  157 => 43,  154 => 42,  151 => 41,  149 => 40,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  127 => 31,  118 => 26,  116 => 25,  109 => 21,  95 => 9,  91 => 6,  81 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/index.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\index.html.twig");
    }
}
