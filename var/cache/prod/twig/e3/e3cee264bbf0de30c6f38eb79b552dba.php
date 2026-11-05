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

/* etablissement/show.html.twig */
class __TwigTemplate_bff7f83fd9190693f4c641bcc406b161 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissement/show.html.twig"));

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

        yield "Mon Établissement";
        
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
        yield "<div class=\"max-w-8xl mx-auto pb-12\">

";
        // line 9
        yield "<div class=\"bg-gradient-to-r from-amber-600 to-orange-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
    <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
    <div class=\"absolute -bottom-16 left-1/3 w-64 h-64 rounded-full bg-white/[0.04] pointer-events-none\"></div>

    <div class=\"relative z-10\">
        <div class=\"flex items-center gap-4 mb-6\">
            <div class=\"w-16 h-16 rounded-2xl bg-white/15 backdrop-blur border border-white/20 flex items-center justify-center text-2xl shrink-0\">
                <i class=\"fas fa-building\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl md:text-3xl font-bold tracking-tight\">";
        // line 19
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield "</h1>
                <p class=\"text-white/70 text-base mt-1\">Informations et statistiques de votre établissement</p>
            </div>
        </div>
        <a href=\"";
        // line 23
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-base font-medium transition-all hover:-translate-y-0.5\">
            <i class=\"fas fa-arrow-left text-sm\"></i> Tableau de bord
        </a>
    </div>
</div>

";
        // line 31
        yield "<div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8\">
    <div class=\"lg:col-span-2\">
        <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
            <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-4\">
                <div class=\"w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600\">
                    <i class=\"fas fa-info-circle text-lg\"></i>
                </div>
                <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">Informations générales</h2>
            </div>
            <div class=\"p-6\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <h3 class=\"text-sm font-bold text-slate-400 uppercase tracking-wider mb-2\">Nom de l\x27établissement</h3>
                        <p class=\"text-base text-slate-800 font-medium\">";
        // line 44
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                    </div>
                    ";
        // line 46
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "localite", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                    <div>
                        <h3 class=\"text-sm font-bold text-slate-400 uppercase tracking-wider mb-2\">Localité</h3>
                        <p class=\"text-base text-slate-800 font-medium\">";
            // line 49
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "localite", [], "any", false, true, false, 49), "nom", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "localite", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "localite", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true)) : ("Non défini"));
            yield "</p>
                    </div>
                    ";
        }
        // line 52
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "user", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                    <div>
                        <h3 class=\"text-sm font-bold text-slate-400 uppercase tracking-wider mb-2\">Email</h3>
                        <p class=\"text-base text-slate-800 font-medium\">";
            // line 55
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "user", [], "any", false, false, false, 55), "email", [], "any", false, false, false, 55), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 58
        yield "                </div>
                ";
        // line 59
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "definition", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                <div class=\"mt-6\">
                    <h3 class=\"text-sm font-bold text-slate-400 uppercase tracking-wider mb-2\">Description</h3>
                    <p class=\"text-base text-slate-700 leading-relaxed\">";
            // line 62
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "definition", [], "any", false, false, false, 62), "html", null, true);
            yield "</p>
                </div>
                ";
        }
        // line 65
        yield "            </div>
        </div>
    </div>
    
    <div>
        <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
            <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-4\">
                <div class=\"w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600\">
                    <i class=\"fas fa-chart-line text-lg\"></i>
                </div>
                <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">Résumé</h2>
            </div>
            <div class=\"p-6 space-y-4\">
                <div class=\"flex items-center justify-between\">
                    <span class=\"text-sm text-slate-500\">Total candidatures</span>
                    <span class=\"text-2xl font-bold text-slate-800\">";
        // line 80
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 80), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <span class=\"text-sm text-slate-500\">Aujourd\x27hui</span>
                    <span class=\"text-lg font-bold text-blue-600\">";
        // line 84
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "aujourdhui", [], "any", false, false, false, 84), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <span class=\"text-sm text-slate-500\">Cette semaine</span>
                    <span class=\"text-lg font-bold text-indigo-600\">";
        // line 88
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "cette_semaine", [], "any", false, false, false, 88), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <span class=\"text-sm text-slate-500\">Ce mois</span>
                    <span class=\"text-lg font-bold text-purple-600\">";
        // line 92
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "ce_mois", [], "any", false, false, false, 92), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 100
        yield "<div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8\">
    ";
        // line 102
        yield "    <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
        <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-4\">
            <div class=\"w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600\">
                <i class=\"fas fa-chart-pie text-lg\"></i>
            </div>
            <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">Statuts des candidatures</h2>
        </div>
        <div class=\"p-6\">
            <div class=\"space-y-3\">
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-3\">
                        <span class=\"w-3 h-3 rounded-full bg-slate-400\"></span>
                        <span class=\"text-sm text-slate-600\">En attente</span>
                    </div>
                    <span class=\"text-sm font-bold text-slate-800\">";
        // line 116
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_statut", [], "any", false, false, false, 116), "en_attente", [], "any", false, false, false, 116), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-3\">
                        <span class=\"w-3 h-3 rounded-full bg-yellow-500\"></span>
                        <span class=\"text-sm text-slate-600\">Dossier OK</span>
                    </div>
                    <span class=\"text-sm font-bold text-slate-800\">";
        // line 123
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_statut", [], "any", false, false, false, 123), "dossier_ok", [], "any", false, false, false, 123), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-3\">
                        <span class=\"w-3 h-3 rounded-full bg-blue-500\"></span>
                        <span class=\"text-sm text-slate-600\">Admissible</span>
                    </div>
                    <span class=\"text-sm font-bold text-slate-800\">";
        // line 130
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_statut", [], "any", false, false, false, 130), "admissible", [], "any", false, false, false, 130), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-3\">
                        <span class=\"w-3 h-3 rounded-full bg-green-500\"></span>
                        <span class=\"text-sm text-slate-600\">Admis</span>
                    </div>
                    <span class=\"text-sm font-bold text-slate-800\">";
        // line 137
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_statut", [], "any", false, false, false, 137), "admis", [], "any", false, false, false, 137), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-3\">
                        <span class=\"w-3 h-3 rounded-full bg-red-500\"></span>
                        <span class=\"text-sm text-slate-600\">Rejeté</span>
                    </div>
                    <span class=\"text-sm font-bold text-slate-800\">";
        // line 144
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_statut", [], "any", false, false, false, 144), "rejete", [], "any", false, false, false, 144), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-3\">
                        <span class=\"w-3 h-3 rounded-full bg-emerald-500\"></span>
                        <span class=\"text-sm text-slate-600\">Admis définitifs</span>
                    </div>
                    <span class=\"text-sm font-bold text-slate-800\">";
        // line 151
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_statut", [], "any", false, false, false, 151), "admis_definitifs", [], "any", false, false, false, 151), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 158
        yield "    <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
        <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-4\">
            <div class=\"w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600\">
                <i class=\"fas fa-briefcase text-lg\"></i>
            </div>
            <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">Candidatures par métier</h2>
        </div>
        <div class=\"p-6\">
            ";
        // line 166
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_metier", [], "any", false, false, false, 166)) > 0)) {
            // line 167
            yield "            <div class=\"space-y-4\">
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_metier", [], "any", false, false, false, 168), 0, 8));
            foreach ($context['_seq'] as $context["metier"] => $context["count"]) {
                // line 169
                yield "                <div class=\"border border-slate-200 rounded-lg p-3 bg-slate-50/30\">
                    <div class=\"flex items-center justify-between mb-2\">
                        <span class=\"text-sm font-semibold text-slate-700\">";
                // line 171
                yield (string) $this->escaper->escape($context["metier"], "html", null, true);
                yield "</span>
                        <span class=\"text-sm font-bold text-slate-800\">";
                // line 172
                yield (string) $this->escaper->escape($context["count"], "html", null, true);
                yield " candidature(s)</span>
                    </div>
                    
                    ";
                // line 175
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_metier_genre", [], "any", false, true, false, 175), $context["metier"], [], "array", true, true, false, 175)) {
                    // line 176
                    yield "                    <div class=\"space-y-2\">
                        ";
                    // line 177
                    $context["masculin"] = (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_metier_genre", [], "any", false, false, false, 177)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(($_v2 = $context["metier"]) instanceof \Stringable && (is_array($_v1) || $_v1 instanceof \ArrayObject || $_v1 instanceof \ArrayIterator) ? (string) $_v2 : $_v2)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["masculin"] ?? null) : null);
                    // line 178
                    yield "                        ";
                    $context["feminin"] = (($_v3 = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_metier_genre", [], "any", false, false, false, 178)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = $context["metier"]) instanceof \Stringable && (is_array($_v4) || $_v4 instanceof \ArrayObject || $_v4 instanceof \ArrayIterator) ? (string) $_v5 : $_v5)] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["feminin"] ?? null) : null);
                    // line 179
                    yield "                        ";
                    $context["total_genre"] = (($context["masculin"] ?? null) + ($context["feminin"] ?? null));
                    // line 180
                    yield "                        
                        ";
                    // line 181
                    if ((($context["total_genre"] ?? null) > 0)) {
                        // line 182
                        yield "                        <div class=\"flex items-center gap-2\">
                            <span class=\"text-xs text-slate-600 w-16\">Masculin</span>
                            <div class=\"flex-1 bg-blue-100 rounded-full h-2\">
                                <div class=\"bg-blue-500 h-2 rounded-full transition-all duration-500\" style=\"width: ";
                        // line 185
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::round(((($context["masculin"] ?? null) / ($context["total_genre"] ?? null)) * 100), 0), "html", null, true);
                        yield "%\"></div>
                            </div>
                            <span class=\"text-xs font-medium text-blue-600 w-8 text-right\">";
                        // line 187
                        yield (string) $this->escaper->escape(($context["masculin"] ?? null), "html", null, true);
                        yield "</span>
                        </div>
                        
                        <div class=\"flex items-center gap-2\">
                            <span class=\"text-xs text-slate-600 w-16\">Féminin</span>
                            <div class=\"flex-1 bg-pink-100 rounded-full h-2\">
                                <div class=\"bg-pink-500 h-2 rounded-full transition-all duration-500\" style=\"width: ";
                        // line 193
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::round(((($context["feminin"] ?? null) / ($context["total_genre"] ?? null)) * 100), 0), "html", null, true);
                        yield "%\"></div>
                            </div>
                            <span class=\"text-xs font-medium text-pink-600 w-8 text-right\">";
                        // line 195
                        yield (string) $this->escaper->escape(($context["feminin"] ?? null), "html", null, true);
                        yield "</span>
                        </div>
                        ";
                    } else {
                        // line 198
                        yield "                        <p class=\"text-xs text-slate-500 italic\">Genre non spécifié</p>
                        ";
                    }
                    // line 200
                    yield "                    </div>
                    ";
                }
                // line 202
                yield "                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['metier'], $context['count'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 204
            yield "            </div>
            ";
        } else {
            // line 206
            yield "            <p class=\"text-sm text-slate-500 text-center py-4\">Aucune candidature pour le moment</p>
            ";
        }
        // line 208
        yield "        </div>
    </div>
</div>

";
        // line 213
        yield "<div class=\"bg-white rounded-2xl mb-8 shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center justify-between\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600\">
                <i class=\"fas fa-clock text-lg\"></i>
            </div>
            <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">5 dernières candidatures</h2>
        </div>
        <a href=\"";
        // line 221
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" 
           class=\"inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-indigo-200 border border-slate-400 text-indigo-600 text-sm font-medium hover:bg-indigo-500 hover:text-white transition\">
            <i class=\"fas fa-list text-xs\"></i> Voir tout
        </a>
    </div>
    <div class=\"overflow-x-auto\">
        <table class=\"w-full\">
            <thead class=\"bg-slate-50 border-b border-slate-200\">
                <tr>
                    <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">N°</th>
                    <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Candidat</th>
                    <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Métier</th>
                    <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Statut</th>
                    <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Date</th>
                </tr>
            </thead>
            <tbody class=\"divide-y divide-slate-200\">
                ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "recentes", [], "any", false, false, false, 238));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 239
            yield "                <tr class=\"hover:bg-slate-50 transition\">
                    <td class=\"px-4 py-3 text-sm font-mono text-indigo-600\">";
            // line 240
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "numero", [], "any", false, false, false, 240), "html", null, true);
            yield "</td>
                    <td class=\"px-4 py-3 text-sm\">
                        ";
            // line 242
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 242), "nom", [], "any", false, false, false, 242) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 242), "prenoms", [], "any", false, false, false, 242)), "html", null, true)) : ("-"));
            yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm\">";
            // line 244
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "metier", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "metier", [], "any", false, false, false, 244), "nom", [], "any", false, false, false, 244), "html", null, true)) : ("-"));
            yield "</td>
                    <td class=\"px-4 py-3\">
                        ";
            // line 246
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 246) == 2)) {
                // line 247
                yield "                            <span class=\"px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold\">Admis</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 248
$context["candidature"], "entstatut", [], "any", false, false, false, 248) == 2)) {
                // line 249
                yield "                            <span class=\"px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold\">Admissible</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 250
$context["candidature"], "etustatut", [], "any", false, false, false, 250) == 2)) {
                // line 251
                yield "                            <span class=\"px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold\">Dossier OK</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 252
$context["candidature"], "etustatut", [], "any", false, false, false, 252) == 1)) {
                // line 253
                yield "                            <span class=\"px-2 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold\">Rejeté</span>
                        ";
            } else {
                // line 255
                yield "                            <span class=\"px-2 py-1 bg-slate-100 text-slate-600 rounded-full text-xs font-semibold\">En attente</span>
                        ";
            }
            // line 257
            yield "                    </td>
                    <td class=\"px-4 py-3 text-sm text-slate-500\">";
            // line 258
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "creation", [], "any", false, false, false, 258), "d/m/Y"), "html", null, true);
            yield "</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 260
        if (!$context['_iterated']) {
            // line 261
            yield "                <tr>
                    <td colspan=\"5\" class=\"px-4 py-8 text-center text-slate-500\">
                        <i class=\"fas fa-inbox text-3xl mb-2 opacity-50\"></i>
                        <p>Aucune candidature récente</p>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 268
        yield "            </tbody>
        </table>
    </div>
</div>

";
        // line 274
        yield "<div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8\">
    <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
        <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center text-green-600\">
                    <i class=\"fas fa-user-graduate text-lg\"></i>
                </div>
                <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">5 derniers admis</h2>
            </div>
            <a href=\"";
        // line 283
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_liste");
        yield "\" 
               class=\"inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-green-200 border border-slate-400 text-green-600 text-sm font-medium hover:bg-green-500 hover:text-white transition\">
                <i class=\"fas fa-list text-xs\"></i> Voir tout
            </a>
        </div>
        <div class=\"overflow-x-auto\">
            <table class=\"w-full\">
                <thead class=\"bg-slate-50 border-b border-slate-200\">
                    <tr>
                        <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">N°</th>
                        <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Candidat</th>
                        <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Métier</th>
                        <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Date</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-200\">
                    ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["admis"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 300
            yield "                    <tr class=\"hover:bg-slate-50 transition\">
                        <td class=\"px-4 py-3 text-sm font-mono text-green-600\">";
            // line 301
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "numero", [], "any", false, false, false, 301), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-sm\">
                            ";
            // line 303
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "user", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "user", [], "any", false, false, false, 303), "nom", [], "any", false, false, false, 303) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "user", [], "any", false, false, false, 303), "prenoms", [], "any", false, false, false, 303)), "html", null, true)) : ("-"));
            yield "
                        </td>
                        <td class=\"px-4 py-3 text-sm\">";
            // line 305
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "metier", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "metier", [], "any", false, false, false, 305), "nom", [], "any", false, false, false, 305), "html", null, true)) : ("-"));
            yield "</td>
                        <td class=\"px-4 py-3 text-sm text-slate-500\">";
            // line 306
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "modification", [], "any", false, false, false, 306)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "modification", [], "any", false, false, false, 306), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 308
        if (!$context['_iterated']) {
            // line 309
            yield "                    <tr>
                        <td colspan=\"4\" class=\"px-4 py-8 text-center text-slate-500\">
                            <i class=\"fas fa-user-graduate text-3xl mb-2 opacity-50\"></i>
                            <p>Aucun admis pour le moment</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 316
        yield "                </tbody>
            </table>
        </div>
    </div>

    ";
        // line 322
        yield "    <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
        <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600\">
                    <i class=\"fas fa-check-circle text-lg\"></i>
                </div>
                <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">5 derniers admis définitifs</h2>
            </div>
            <a href=\"";
        // line 330
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_etablissement");
        yield "\" 
               class=\"inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-emerald-200 border border-slate-400 text-emerald-600 text-sm font-medium hover:bg-emerald-500 hover:text-white transition\">
                <i class=\"fas fa-list text-xs\"></i> Voir tout
            </a>
        </div>
        <div class=\"overflow-x-auto\">
            <table class=\"w-full\">
                <thead class=\"bg-slate-50 border-b border-slate-200\">
                    <tr>
                        <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">N° Inscription</th>
                        <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Candidat</th>
                        <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Métier</th>
                        <th class=\"px-4 py-3 text-left text-xs font-medium text-slate-600 uppercase\">Date</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-200\">
                    ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["admisDefinitifs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admisDefinitif"]) {
            // line 347
            yield "                    <tr class=\"hover:bg-slate-50 transition\">
                        <td class=\"px-4 py-3 text-sm font-mono text-emerald-600\">";
            // line 348
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admisDefinitif"], "numeroInscription", [], "any", false, false, false, 348), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-sm\">
                            ";
            // line 350
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["admisDefinitif"], "user", [], "any", false, false, false, 350), "nom", [], "any", false, false, false, 350)), "html", null, true);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["admisDefinitif"], "user", [], "any", false, false, false, 350), "prenoms", [], "any", false, false, false, 350), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-4 py-3 text-sm\">";
            // line 352
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["admisDefinitif"], "metier", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["admisDefinitif"], "metier", [], "any", false, false, false, 352), "nom", [], "any", false, false, false, 352), "html", null, true)) : ("-"));
            yield "</td>
                        <td class=\"px-4 py-3 text-sm text-slate-500\">";
            // line 353
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["admisDefinitif"], "dateInscription", [], "any", false, false, false, 353), "d/m/Y"), "html", null, true);
            yield "</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 355
        if (!$context['_iterated']) {
            // line 356
            yield "                    <tr>
                        <td colspan=\"4\" class=\"px-4 py-8 text-center text-slate-500\">
                            <i class=\"fas fa-check-circle text-3xl mb-2 opacity-50\"></i>
                            <p>Aucune inscription définitive pour le moment</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['admisDefinitif'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 363
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

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
        return "etablissement/show.html.twig";
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
        return array (  686 => 363,  673 => 356,  671 => 355,  664 => 353,  660 => 352,  653 => 350,  648 => 348,  645 => 347,  640 => 346,  621 => 330,  611 => 322,  604 => 316,  591 => 309,  589 => 308,  582 => 306,  578 => 305,  573 => 303,  568 => 301,  565 => 300,  560 => 299,  541 => 283,  530 => 274,  523 => 268,  510 => 261,  508 => 260,  501 => 258,  498 => 257,  494 => 255,  490 => 253,  488 => 252,  485 => 251,  483 => 250,  480 => 249,  478 => 248,  475 => 247,  473 => 246,  468 => 244,  463 => 242,  458 => 240,  455 => 239,  450 => 238,  430 => 221,  420 => 213,  414 => 208,  410 => 206,  406 => 204,  398 => 202,  394 => 200,  390 => 198,  384 => 195,  379 => 193,  370 => 187,  365 => 185,  360 => 182,  358 => 181,  355 => 180,  352 => 179,  349 => 178,  347 => 177,  344 => 176,  342 => 175,  336 => 172,  332 => 171,  328 => 169,  324 => 168,  321 => 167,  319 => 166,  309 => 158,  300 => 151,  290 => 144,  280 => 137,  270 => 130,  260 => 123,  250 => 116,  234 => 102,  231 => 100,  221 => 92,  214 => 88,  207 => 84,  200 => 80,  183 => 65,  177 => 62,  173 => 60,  171 => 59,  168 => 58,  162 => 55,  158 => 53,  155 => 52,  149 => 49,  145 => 47,  143 => 46,  138 => 44,  123 => 31,  113 => 23,  106 => 19,  94 => 9,  90 => 6,  80 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "etablissement/show.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\etablissement\\show.html.twig");
    }
}
