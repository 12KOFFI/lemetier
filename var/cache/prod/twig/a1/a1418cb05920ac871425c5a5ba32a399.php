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

/* candidature/index.html.twig */
class __TwigTemplate_75f1b355772cc6044e254683c19a5971 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

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

        yield (string) (((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Gestion des candidatures") : ("Mes candidatures"));
        yield " | ";
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
        yield "
";
        // line 8
        yield "<div class=\"relative p-6 mb-8 overflow-hidden text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl md:p-8\">
    <div class=\"absolute rounded-full pointer-events-none -top-14 -right-14 w-52 h-52 bg-white/5\"></div>
    <div class=\"absolute -bottom-20 left-1/3 w-72 h-72 rounded-full bg-white/[0.03] pointer-events-none\"></div>

    <div class=\"relative z-10 flex flex-col gap-4 md:flex-row md:items-center md:justify-between\">
        <div class=\"flex items-center gap-4\">
            <div class=\"flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border-white/20 shrink-0\">
                <i class=\"fas fa-";
        // line 15
        yield (string) (((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("users") : ("file-alt"));
        yield "\"></i>
            </div>
            <div>
                <h1 class=\"text-xl font-bold tracking-tight md:text-2xl\">
                    ";
        // line 19
        yield (string) (((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Gestion des candidatures") : ("Mes candidatures"));
        yield "
                </h1>
                <p class=\"text-white/70 text-sm mt-0.5\">
                    ";
        // line 22
        if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 22), "html", null, true);
            yield " candidature(s) au total
                    ";
        } else {
            // line 23
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 23), "html", null, true);
            yield " candidature(s) soumise(s)";
        }
        // line 24
        yield "                </p>
            </div>
        </div>

        ";
        // line 28
        if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "            <div class=\"flex flex-wrap gap-2\">
                ";
            // line 30
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CANDIDATURE_CREATE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "                <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_saisie");
                yield "\"
                   class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white text-indigo-600 hover:bg-indigo-50 border border-white text-sm font-semibold transition-all duration-200 hover:-translate-y-0.5\">
                    <i class=\"fas fa-plus-circle\"></i> Nouvelle candidature
                </a>
                ";
            }
            // line 36
            yield "                <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\"
                   class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-sm font-medium transition-all duration-200 hover:-translate-y-0.5\">
                    <i class=\"fas fa-download\"></i> Exports
                </a>
                <a href=\"";
            // line 40
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_stat");
            yield "\"
                   class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-sm font-medium transition-all duration-200 hover:-translate-y-0.5\">
                    <i class=\"fas fa-chart-bar\"></i> Statistiques
                </a>
            </div>
        ";
        } elseif ((($tmp =         // line 45
($context["candidature_publique"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "            <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_new");
            yield "\"
               class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white text-indigo-600 hover:bg-indigo-50 border border-white text-sm font-semibold transition-all duration-200 hover:-translate-y-0.5 w-full md:w-auto justify-center\">
                <i class=\"fas fa-plus-circle\"></i> Nouvelle candidature
            </a>
        ";
        }
        // line 51
        yield "    </div>
</div>

";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 56
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 57
                yield "        ";
                $context["colors"] = ((($context["type"] == "success")) ? ("bg-green-50 border-green-300 text-green-700") : (((($context["type"] == "error")) ? ("bg-red-50 border-red-300 text-red-700") : ("bg-blue-50 border-blue-300 text-blue-700"))));
                // line 58
                yield "        ";
                $context["icon"] = ((($context["type"] == "success")) ? ("check-circle") : (((($context["type"] == "error")) ? ("exclamation-circle") : ("info-circle"))));
                // line 59
                yield "        <div class=\"flex items-center gap-3 px-5 py-4 rounded-xl border mb-4 text-sm font-medium ";
                yield (string) $this->escaper->escape(($context["colors"] ?? null), "html", null, true);
                yield "\">
            <i class=\"fas fa-";
                // line 60
                yield (string) $this->escaper->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
            ";
                // line 61
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
        // line 65
        yield "
";
        // line 67
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "<div class=\"p-4 mb-6 bg-white border shadow-sm rounded-xl border-slate-200\">
    <form method=\"get\" action=\"";
            // line 69
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\" class=\"flex flex-wrap items-end gap-4\">
        <div class=\"flex-1 min-w-[200px]\">
            <label class=\"block mb-1 text-sm font-medium text-slate-600\">Établissement</label>
            <select name=\"etablissement\" class=\"w-full px-3 py-2 text-sm border rounded-lg border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                <option value=\"\">Tous</option>
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["etab"]) {
                // line 75
                yield "                    <option value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etab"], "id", [], "any", false, false, false, 75), "html", null, true);
                yield "\" ";
                yield (string) ((((($tmp = ($context["etablissement_filtre"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement_filtre"] ?? null), "id", [], "any", false, false, false, 75) == CoreExtension::getAttribute($this->env, $this->source, $context["etab"], "id", [], "any", false, false, false, 75)))) ? ("selected") : (""));
                yield ">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etab"], "nom", [], "any", false, false, false, 75), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['etab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 77
            yield "            </select>
        </div>
        <div class=\"flex-1 min-w-[200px]\">
            <label class=\"block mb-1 text-sm font-medium text-slate-600\">Métier</label>
            <select name=\"metier\" class=\"w-full px-3 py-2 text-sm border rounded-lg border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                <option value=\"\">Tous</option>
                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 84
                yield "                    <option value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 84), "html", null, true);
                yield "\" ";
                yield (string) ((((($tmp = ($context["metier_filtre"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["metier_filtre"] ?? null), "id", [], "any", false, false, false, 84) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 84)))) ? ("selected") : (""));
                yield ">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 84), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 86
            yield "            </select>
        </div>
        <div class=\"flex gap-2\">
            <button type=\"submit\" class=\"px-4 py-2 text-sm font-medium text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700\">
                <i class=\"mr-1 fas fa-filter\"></i> Filtrer
            </button>
            <a href=\"";
            // line 92
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\" class=\"px-4 py-2 text-sm font-medium transition rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200\">
                <i class=\"mr-1 fas fa-undo\"></i> Réinitialiser
            </a>
        </div>
    </form>
</div>
";
        }
        // line 99
        yield "
";
        // line 101
        if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 102
            yield "<div class=\"p-4 mb-6 bg-white border shadow-sm rounded-xl border-slate-200\">
    <form method=\"get\" action=\"";
            // line 103
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\" class=\"flex flex-wrap items-end gap-4\">
        <div class=\"flex-1 min-w-[200px]\">
            <label class=\"block mb-1 text-sm font-medium text-slate-600\">Métier</label>
            <select name=\"metier\" class=\"w-full px-3 py-2 text-sm border rounded-lg border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                <option value=\"\">Tous les métiers</option>
                ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 109
                yield "                    <option value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 109), "html", null, true);
                yield "\" ";
                yield (string) ((((($tmp = ($context["metier_filtre"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["metier_filtre"] ?? null), "id", [], "any", false, false, false, 109) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 109)))) ? ("selected") : (""));
                yield ">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 109), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 111
            yield "            </select>
        </div>
        <div class=\"flex-1 min-w-[140px]\">
            <label class=\"block mb-1 text-sm font-medium text-slate-600\">Du (Inclus)</label>
            <input type=\"date\" name=\"date_debut\" value=\"";
            // line 115
            yield (string) $this->escaper->escape(((array_key_exists("date_debut", $context)) ? (Twig\Extension\CoreExtension::default(($context["date_debut"] ?? null), "")) : ("")), "html", null, true);
            yield "\" class=\"w-full px-3 py-2 text-sm border rounded-lg border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
        </div>
        <div class=\"flex-1 min-w-[140px]\">
            <label class=\"block mb-1 text-sm font-medium text-slate-600\">Au (Inclus)</label>
            <input type=\"date\" name=\"date_fin\" value=\"";
            // line 119
            yield (string) $this->escaper->escape(((array_key_exists("date_fin", $context)) ? (Twig\Extension\CoreExtension::default(($context["date_fin"] ?? null), "")) : ("")), "html", null, true);
            yield "\" class=\"w-full px-3 py-2 text-sm border rounded-lg border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
        </div>
        <div class=\"flex gap-2\">
            <button type=\"submit\" class=\"px-4 py-2 text-sm font-medium text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700\">
                <i class=\"mr-1 fas fa-filter\"></i> Filtrer
            </button>
            <a href=\"";
            // line 125
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\" class=\"px-4 py-2 text-sm font-medium transition rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200\">
                <i class=\"mr-1 fas fa-undo\"></i> Réinitialiser
            </a>
        </div>
    </form>
</div>
";
        }
        // line 132
        yield "
";
        // line 134
        yield "<div id=\"candidatures-container\">
";
        // line 135
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 135) > 0)) {
            // line 136
            yield "<div class=\"overflow-hidden bg-white border shadow-sm rounded-2xl border-slate-200\">

    ";
            // line 139
            yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-b border-slate-100 bg-slate-50/60\">
        <form method=\"get\" id=\"filterForm\" class=\"flex flex-wrap items-center justify-between w-full gap-3\">
            <div class=\"flex items-center gap-2 text-sm font-medium text-slate-500\">
                <span>Afficher</span>
                <select name=\"limit\" id=\"pageSizeSelect\" onchange=\"document.getElementById(\x27filterForm\x27).submit();\"
                        class=\"px-2 py-1 text-sm font-medium bg-white border rounded-lg outline-none cursor-pointer border-slate-200 text-slate-700 focus:border-indigo-400\">
                    <option value=\"10\" ";
            // line 145
            if ((($context["limit"] ?? null) == 10)) {
                yield "selected";
            }
            yield ">10</option>
                    <option value=\"25\" ";
            // line 146
            if ((($context["limit"] ?? null) == 25)) {
                yield "selected";
            }
            yield ">25</option>
                    <option value=\"50\" ";
            // line 147
            if ((($context["limit"] ?? null) == 50)) {
                yield "selected";
            }
            yield ">50</option>
                    <option value=\"100\" ";
            // line 148
            if ((($context["limit"] ?? null) == 100)) {
                yield "selected";
            }
            yield ">100</option>
                </select>
                <span>éléments</span>
            </div>
            <div class=\"flex items-center gap-2 px-3 py-2 transition-all bg-white border border-slate-200 rounded-xl focus-within:border-indigo-400 focus-within:ring-2 focus-within:ring-indigo-100\">
                <i class=\"text-xs fas fa-search text-slate-400\"></i>
                <input type=\"text\" name=\"q\" value=\"";
            // line 154
            yield (string) $this->escaper->escape(($context["searchTerm"] ?? null), "html", null, true);
            yield "\" placeholder=\"Rechercher…\"
                       class=\"text-sm bg-transparent outline-none text-slate-700 placeholder-slate-300 w-44\">
            </div>
            <!-- Keep other query parameters if any -->
            ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 158), "query", [], "any", false, false, false, 158), "all", [], "any", false, false, false, 158));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 159
                yield "                ";
                if (((($context["key"] != "limit") && ($context["key"] != "q")) && ($context["key"] != "page"))) {
                    // line 160
                    yield "                    <input type=\"hidden\" name=\"";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "\" value=\"";
                    yield (string) $this->escaper->escape($context["val"], "html", null, true);
                    yield "\">
                ";
                }
                // line 162
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 163
            yield "        </form>
    </div>

    ";
            // line 167
            yield "    <div class=\"overflow-x-auto\">
        <table class=\"w-full min-w-[850px]\">
            <thead>
                <tr class=\"border-b bg-slate-50 border-slate-100\">
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">N°</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">N° Candidature</th>
                    ";
            // line 173
            if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Candidat</th>";
            }
            // line 174
            yield "                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Métier</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Établissement</th>
                    ";
            // line 176
            if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Jury</th>";
            }
            // line 177
            yield "                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Statut</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Date</th>
                    <th class=\"px-5 py-3 text-right text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-slate-50\">
                ";
            // line 183
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
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 184
                yield "                <tr class=\"transition-colors duration-100 hover:bg-slate-50/70\">
                    <td class=\"px-5 py-4 text-sm font-medium text-slate-400\">";
                // line 185
                yield (string) $this->escaper->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "currentPageNumber", [], "any", false, false, false, 185) - 1) * CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 185)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 185)), "html", null, true);
                yield "</td>
                    <td class=\"px-5 py-4\">
                        <a href=\"";
                // line 187
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 187)]), "html", null, true);
                yield "\"
                           class=\"font-mono text-xs bg-indigo-50 text-indigo-600 border border-indigo-100 px-2.5 py-1 rounded-lg hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition-all duration-150 inline-block font-medium\">
                            ";
                // line 189
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "numero", [], "any", false, false, false, 189), "html", null, true);
                yield "
                        </a>
                    </td>

                    ";
                // line 193
                if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 194
                    yield "                    <td class=\"px-5 py-4\">
                        ";
                    // line 195
                    $context["fullName"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, true, false, 195), "nom", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 195), "nom", [], "any", false, false, false, 195), "")) : ("")) . " ") . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, true, false, 195), "prenoms", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 195), "prenoms", [], "any", false, false, false, 195), "")) : (""))))) : (""));
                    // line 196
                    yield "                        <div class=\"text-sm font-semibold text-slate-800\">";
                    yield (string) (((($tmp = ($context["fullName"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["fullName"], "html", null, true)) : ("Utilisateur indisponible"));
                    yield "</div>
                        <div class=\"text-xs text-slate-400 mt-0.5\">";
                    // line 197
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, true, false, 197), "contact", [], "any", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 197), "contact", [], "any", false, false, false, 197), "-")) : ("-")), "html", null, true)) : ("-"));
                    yield "</div>
                    </td>
                    ";
                }
                // line 200
                yield "
                    <td class=\"px-5 py-4 text-sm font-medium text-slate-700\">";
                // line 201
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "metier", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "metier", [], "any", false, false, false, 201), "nom", [], "any", false, false, false, 201), "html", null, true)) : ("-"));
                yield "</td>
                    <td class=\"px-5 py-4 text-sm text-slate-500\">";
                // line 202
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etablissement", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etablissement", [], "any", false, false, false, 202), "nom", [], "any", false, false, false, 202), "html", null, true)) : ("-"));
                yield "</td>

                    ";
                // line 204
                if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 205
                    yield "                    <td class=\"px-5 py-4 text-sm text-slate-400\">
                        ";
                    // line 206
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "entstatut", [], "any", false, false, false, 206) == 1) || (CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "entstatut", [], "any", false, false, false, 206) == 2))) {
                        // line 207
                        yield "                            <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20\">
                                Évalué
                            </span>
                        ";
                    } else {
                        // line 211
                        yield "                            <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-500/10 text-slate-400 border border-slate-500/20\">
                                Non évalué
                            </span>
                        ";
                    }
                    // line 215
                    yield "                    </td>
                    ";
                }
                // line 217
                yield "
                    <td class=\"px-2 py-4\">
                        ";
                // line 219
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 219) == 2)) {
                    // line 220
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.6rem] font-semibold bg-green-50 text-green-700 border border-green-200 hover:bg-green-500 hover:text-white transition-all duration-150\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-green-500 shrink-0\"></span>Admis
                            </span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 223
$context["candidature"], "entstatut", [], "any", false, false, false, 223) == 2)) {
                    // line 224
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.6rem] font-semibold bg-blue-50 text-blue-700 border border-blue-200 hover:bg-blue-500 hover:text-white transition-all duration-150\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-blue-500 shrink-0\"></span>Admissible
                            </span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 227
$context["candidature"], "etustatut", [], "any", false, false, false, 227) == 2)) {
                    // line 228
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.6rem] font-semibold bg-amber-50 text-amber-700 border border-amber-200 hover:bg-amber-500 hover:text-white transition-all duration-150\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-amber-500 shrink-0\"></span>Dossier OK
                            </span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 231
$context["candidature"], "etustatut", [], "any", false, false, false, 231) == 1)) {
                    // line 232
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.6rem] font-semibold bg-red-50 text-red-700 border border-red-200 hover:bg-red-500 hover:text-white transition-all duration-150\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-red-500 shrink-0\"></span>Rejeté
                            </span>
                        ";
                } else {
                    // line 236
                    yield "                            <span class=\"inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[0.6rem] font-semibold bg-slate-100 text-slate-500 border border-slate-200 hover:bg-slate-500 hover:text-white transition-all duration-150\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-slate-400 shrink-0\"></span>En attente
                            </span>
                        ";
                }
                // line 240
                yield "                    </td>

                    <td class=\"px-5 py-4 text-xs text-slate-400\">";
                // line 242
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "creation", [], "any", false, false, false, 242), "d/m/Y"), "html", null, true);
                yield "</td>

                    <td class=\"px-5 py-4\">
                        <div class=\"flex items-center justify-end gap-1.5\">
                            ";
                // line 246
                if (((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etustatut", [], "any", false, false, false, 246))))) {
                    // line 247
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 247), "redirect_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 247), "requestUri", [], "any", false, false, false, 247)]), "html", null, true);
                    yield "\"
                               title=\"Modifier\"
                               class=\"flex items-center justify-center w-8 h-8 text-sm transition-all duration-150 rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-500 hover:text-white hover:-translate-y-px\">
                                <i class=\"fas fa-pen\"></i>
                            </a>
                            ";
                }
                // line 253
                yield "                            <a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_imprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 253)]), "html", null, true);
                yield "\"
                               target=\"_blank\" title=\"Imprimer la fiche\"
                               class=\"flex items-center justify-center w-8 h-8 text-sm transition-all duration-150 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-500 hover:text-white hover:-translate-y-px\">
                                <i class=\"fas fa-print\"></i>
                            </a>
                            ";
                // line 258
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "entstatut", [], "any", false, false, false, 258) == 2) || (CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etustatut", [], "any", false, false, false, 258) == 2))) {
                    // line 259
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_imprimer_convocation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 259)]), "html", null, true);
                    yield "\"
                               target=\"_blank\" title=\"Imprimer la convocation\"
                               class=\"flex items-center justify-center w-8 h-8 text-sm text-purple-600 transition-all duration-150 rounded-lg bg-purple-50 hover:bg-purple-500 hover:text-white hover:-translate-y-px\">
                                <i class=\"fas fa-envelope-open-text\"></i>
                            </a>
                            ";
                }
                // line 265
                yield "
                            ";
                // line 267
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "decisionJury", [], "any", false, false, false, 267) == 2)) {
                    // line 268
                    yield "                            <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_imprimer_convocation_visite", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 268)]), "html", null, true);
                    yield "\"
                               target=\"_blank\" title=\"Imprimer la convocation visite médicale\"
                               class=\"flex items-center justify-center w-8 h-8 text-sm text-teal-600 transition-all duration-150 rounded-lg bg-teal-50 hover:bg-teal-500 hover:text-white hover:-translate-y-px\">
                                <i class=\"fas fa-heartbeat\"></i>
                            </a>
                            ";
                }
                // line 274
                yield "
                            ";
                // line 276
                yield "                            ";
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CANDIDATURE_DELETE", $context["candidature"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 277
                    yield "                            <form method=\"post\"
                                  action=\"";
                    // line 278
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 278)]), "html", null, true);
                    yield "\"
                                  onsubmit=\"return confirm(\x27Supprimer la candidature ";
                    // line 279
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "numero", [], "any", false, false, false, 279), "html", null, true);
                    yield " ? Cette action est irréversible.\x27);\"
                                  class=\"inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 281
                    yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 281))), "html", null, true);
                    yield "\">
                                <button type=\"submit\" title=\"Supprimer\"
                                        class=\"flex items-center justify-center w-8 h-8 text-sm text-red-500 transition-all duration-150 rounded-lg bg-red-50 hover:bg-red-500 hover:text-white hover:-translate-y-px\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                            ";
                }
                // line 288
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
            unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 292
            yield "            </tbody>
        </table>
    </div>

    ";
            // line 297
            yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-t border-slate-100 bg-slate-50/60\">
        <p class=\"text-xs font-medium text-slate-400\">
            Affichage de <strong class=\"text-slate-600\">";
            // line 299
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 299) * (CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "currentPageNumber", [], "any", false, false, false, 299) - 1)) + 1), "html", null, true);
            yield "</strong> 
            à <strong class=\"text-slate-600\">";
            // line 300
            yield (string) $this->escaper->escape(min((CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "itemNumberPerPage", [], "any", false, false, false, 300) * CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "currentPageNumber", [], "any", false, false, false, 300)), CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 300)), "html", null, true);
            yield "</strong> 
            sur <strong class=\"text-slate-600\">";
            // line 301
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 301), "html", null, true);
            yield "</strong> élément(s)
        </p>
        <div class=\"knp-pagination\">
            ";
            // line 304
            yield (string) $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["candidatures"] ?? null));
            yield "
        </div>
    </div>
</div>

";
        } else {
            // line 311
            yield "<div class=\"px-8 py-16 text-center bg-white border shadow-sm rounded-2xl border-slate-200\">
    <div class=\"flex items-center justify-center w-16 h-16 mx-auto mb-5 text-3xl text-indigo-500 rounded-2xl bg-indigo-50\">
        <i class=\"fas fa-";
            // line 313
            yield (string) (((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("inbox") : ("file-alt"));
            yield "\"></i>
    </div>
    <h3 class=\"mb-2 text-lg font-bold text-slate-800\">Aucune candidature</h3>
    <p class=\"text-sm text-slate-500 mb-7\">
        ";
            // line 317
            if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Il n\x27y a pas encore de candidatures dans le système.
        ";
            } elseif ((($tmp =             // line 318
($context["candidature_publique"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Vous n\x27avez pas encore soumis de candidature.
        ";
            } else {
                // line 319
                yield "Votre lycée n\x27a pas encore enregistré de candidature pour vous. Présentez-vous au LPH (Yamoussoukro) ou au LPMMS (Bouaké) avec votre dossier.";
            }
            // line 320
            yield "    </p>
    ";
            // line 321
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CANDIDATURE_CREATE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 322
                yield "    <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_saisie");
                yield "\"
       class=\"inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-semibold rounded-xl shadow-lg shadow-indigo-200 hover:shadow-indigo-300 hover:-translate-y-0.5 transition-all duration-200\">
        <i class=\"fas fa-plus-circle\"></i> Enregistrer une candidature
    </a>
    ";
            } elseif (( !(($tmp =             // line 326
($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["candidature_publique"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 327
                yield "    <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_new");
                yield "\"
       class=\"inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-semibold rounded-xl shadow-lg shadow-indigo-200 hover:shadow-indigo-300 hover:-translate-y-0.5 transition-all duration-200\">
        <i class=\"fas fa-plus-circle\"></i> Déposer ma première candidature
    </a>
    ";
            }
            // line 332
            yield "</div>
";
        }
        // line 334
        yield "</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 338
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 339
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener(\x27DOMContentLoaded\x27, () => {
    const container = document.getElementById(\x27candidatures-container\x27);
    if (!container) return;

    let searchTimeout;

    // Delegate events to the container since its contents will be replaced
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
            }, 400); // 400ms debounce
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
        
        // Update URL in browser (History API)
        window.history.pushState({}, \x27\x27, url);

        // Add a loading state (e.g., slight opacity)
        container.style.opacity = \x270.5\x27;
        container.style.pointerEvents = \x27none\x27;

        fetch(url, {
            headers: {
                \x27X-Requested-With\x27: \x27XMLHttpRequest\x27
            }
        })
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, \x27text/html\x27);
            const newContainer = doc.getElementById(\x27candidatures-container\x27);
            
            if (newContainer) {
                container.innerHTML = newContainer.innerHTML;
            }
        })
        .catch(error => {
            console.error(\x27Error fetching data:\x27, error);
        })
        .finally(() => {
            container.style.opacity = \x271\x27;
            container.style.pointerEvents = \x27auto\x27;
            
            // Refocus search input if it was active to not lose cursor
            const searchInput = document.querySelector(\x27input[name=\"q\"]\x27);
            if (searchInput) {
                const val = searchInput.value;
                searchInput.focus();
                // Move cursor to end
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
        return "candidature/index.html.twig";
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
        return array (  815 => 339,  805 => 338,  795 => 334,  791 => 332,  782 => 327,  780 => 326,  772 => 322,  770 => 321,  767 => 320,  764 => 319,  759 => 318,  755 => 317,  748 => 313,  744 => 311,  735 => 304,  729 => 301,  725 => 300,  721 => 299,  717 => 297,  711 => 292,  693 => 288,  683 => 281,  678 => 279,  674 => 278,  671 => 277,  668 => 276,  665 => 274,  655 => 268,  652 => 267,  649 => 265,  639 => 259,  637 => 258,  628 => 253,  618 => 247,  616 => 246,  609 => 242,  605 => 240,  599 => 236,  593 => 232,  591 => 231,  586 => 228,  584 => 227,  579 => 224,  577 => 223,  572 => 220,  570 => 219,  566 => 217,  562 => 215,  556 => 211,  550 => 207,  548 => 206,  545 => 205,  543 => 204,  538 => 202,  534 => 201,  531 => 200,  525 => 197,  520 => 196,  518 => 195,  515 => 194,  513 => 193,  506 => 189,  501 => 187,  496 => 185,  493 => 184,  476 => 183,  468 => 177,  464 => 176,  460 => 174,  456 => 173,  448 => 167,  443 => 163,  436 => 162,  428 => 160,  425 => 159,  421 => 158,  414 => 154,  403 => 148,  397 => 147,  391 => 146,  385 => 145,  377 => 139,  373 => 136,  371 => 135,  368 => 134,  365 => 132,  355 => 125,  346 => 119,  339 => 115,  333 => 111,  319 => 109,  315 => 108,  307 => 103,  304 => 102,  302 => 101,  299 => 99,  289 => 92,  281 => 86,  267 => 84,  263 => 83,  255 => 77,  241 => 75,  237 => 74,  229 => 69,  226 => 68,  224 => 67,  221 => 65,  206 => 61,  202 => 60,  197 => 59,  194 => 58,  191 => 57,  186 => 56,  182 => 55,  177 => 51,  168 => 46,  166 => 45,  158 => 40,  150 => 36,  141 => 31,  139 => 30,  136 => 29,  134 => 28,  128 => 24,  124 => 23,  118 => 22,  112 => 19,  105 => 15,  96 => 8,  93 => 6,  83 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/index.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\index.html.twig");
    }
}
