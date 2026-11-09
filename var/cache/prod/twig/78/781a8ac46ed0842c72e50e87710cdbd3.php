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

/* dashboard.html.twig */
class __TwigTemplate_b71629f963e3e697d88092c0c1d5bd94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

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

        yield "Tableau de bord | GROUPE LEMETIER";
        
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
        yield "<div class=\"mx-auto\">
    <!-- En-tête -->
    <div class=\"p-8 mb-8 text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl\">
        <div class=\"flex items-center gap-4\">
            <div class=\"flex items-center justify-center w-16 h-16 rounded-full bg-white/20\">
                <i class=\"text-3xl fas fa-chart-line\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl font-bold\">Tableau de bord</h1>
                <p class=\"text-white/80\">
                    ";
        // line 16
        if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "                        ";
            yield (string) (((($tmp = ($context["is_agent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Accompagnement des établissements") : ("Administration générale"));
            yield "
                    ";
        } elseif ((($tmp =         // line 18
($context["is_candidat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                        Ma candidature
                    ";
        } elseif ((($tmp =         // line 20
($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                        Gestion de l\x27établissement : ";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 21)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 21), "html", null, true)) : ("Non défini"));
            yield "
                    ";
        } elseif ((($tmp =         // line 22
($context["is_jury"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                        Évaluations
                    ";
        }
        // line 25
        yield "                </p>
            </div>
        </div>
        
        <!-- Statistiques rapides pour l\x27admin ET l\x27ENT -->
        ";
        // line 30
        if ((((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && array_key_exists("stats", $context))) {
            // line 31
            yield "        <div class=\"grid grid-cols-2 gap-4 mt-8 md:grid-cols-3 lg:grid-cols-7\">
            <div class=\"p-4 text-center bg-white/10 backdrop-blur-sm rounded-xl\">
                <div class=\"text-2xl font-bold\">";
            // line 33
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "candidatures", [], "any", false, false, false, 33), "html", null, true);
            yield "</div>
                <div class=\"text-xs text-white/70\">Candidatures</div>
            </div>
            <div class=\"p-4 text-center bg-white/10 backdrop-blur-sm rounded-xl\">
                <div class=\"text-2xl font-bold\">";
            // line 37
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "candidatures_aujourdhui", [], "any", false, false, false, 37), "html", null, true);
            yield "</div>
                <div class=\"text-xs text-white/70\">Aujourd\x27hui</div>
            </div>
            <div class=\"p-4 text-center bg-white/10 backdrop-blur-sm rounded-xl\">
                <div class=\"text-2xl font-bold\">";
            // line 41
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "metiers", [], "any", false, false, false, 41), "html", null, true);
            yield "</div>
                <div class=\"text-xs text-white/70\">Métiers</div>
            </div>
            
            ";
            // line 45
            if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "            <div class=\"p-4 text-center bg-white/10 backdrop-blur-sm rounded-xl\">
                <div class=\"text-2xl font-bold\">";
                // line 47
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "etablissements", [], "any", false, false, false, 47), "html", null, true);
                yield "</div>
                <div class=\"text-xs text-white/70\">Établissements</div>
            </div>
            ";
            }
            // line 51
            yield "            
            <!-- Statistiques des admis -->
            ";
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "admis", [], "any", true, true, false, 53)) {
                // line 54
                yield "            <div class=\"p-4 text-center border bg-gradient-to-r from-blue-500/20 to-indigo-500/20 backdrop-blur-sm rounded-xl border-blue-300/30\">
                <div class=\"text-2xl font-bold text-blue-100\">";
                // line 55
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "admis", [], "any", false, false, false, 55), "admis", [], "any", false, false, false, 55), "html", null, true);
                yield "</div>
                <div class=\"text-xs text-blue-200\">Admis</div>
            </div>
            <div class=\"p-4 text-center border bg-gradient-to-r from-emerald-500/20 to-green-500/20 backdrop-blur-sm rounded-xl border-emerald-300/30\">
                <div class=\"text-2xl font-bold text-emerald-100\">";
                // line 59
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "admis", [], "any", false, false, false, 59), "admis_definitifs", [], "any", false, false, false, 59), "html", null, true);
                yield "</div>
                <div class=\"text-xs text-emerald-200\">Admis Définitifs</div>
            </div>
            ";
            }
            // line 63
            yield "        </div>
        ";
        }
        // line 65
        yield "
        ";
        // line 67
        yield "        ";
        // line 79
        yield "    </div>

    ";
        // line 81
        yield from $this->load("partials/_flash_messages.html.twig", 81)->unwrap()->yield($context);
        // line 82
        yield "
    <!-- Contenu principal -->
    <div class=\"grid grid-cols-1 gap-8 lg:grid-cols-3\">
        <!-- Colonne principale (2/3) -->
        <div class=\"space-y-8 lg:col-span-2\">
            <!-- Dernières candidatures (pour admin ET ent) -->
            ";
        // line 88
        if ((((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && array_key_exists("dernieres_candidatures", $context))) {
            // line 89
            yield "            <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
                <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-indigo-50 to-purple-50\">
                    <h2 class=\"flex items-center text-lg font-semibold text-indigo-800\">
                        <i class=\"mr-2 fas fa-clock\"></i>
                        ";
            // line 93
            if ((($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "                            Candidatures de ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 94), "html", null, true);
                yield "
                        ";
            } else {
                // line 96
                yield "                            Dernières candidatures
                        ";
            }
            // line 98
            yield "                    </h2>
                </div>
                <div class=\"overflow-x-auto\">
                    <table class=\"w-full\">
                        <thead class=\"border-b bg-slate-50 border-slate-200\">
                            <tr>
                                <th class=\"px-3 py-3 text-xs font-medium text-left uppercase text-slate-600\">N°</th>
                                <th class=\"px-2 py-3 text-xs font-medium text-left uppercase text-slate-600\">Candidat</th>
                                <th class=\"px-1 py-3 text-xs font-medium text-left uppercase text-slate-600\">Métier</th>
                                <th class=\"px-2 py-3 text-xs font-medium text-left uppercase text-slate-600\">Statut</th>
                                <th class=\"px-3 py-3 text-xs font-medium text-right uppercase text-slate-600\">Date</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-slate-200\">
                            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["dernieres_candidatures"] ?? null), 0, 5));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 113
                yield "                            <tr class=\"transition hover:bg-slate-50\">
                                <td class=\"px-2 py-3 font-mono text-sm text-indigo-600\">";
                // line 114
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "numero", [], "any", false, false, false, 114), "html", null, true);
                yield "</td>
                                <td class=\"px-2 py-3 text-sm\">
                                    ";
                // line 116
                $context["user"] = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 116);
                // line 117
                yield "                                    ";
                if ((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 118
                    yield "                                        <div class=\"font-medium text-slate-800\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 118), "html", null, true);
                    yield "</div>
                                        <div class=\"text-sm text-slate-500\">";
                    // line 119
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenoms", [], "any", false, false, false, 119), "html", null, true);
                    yield "</div>
                                    ";
                } else {
                    // line 121
                    yield "                                        <span class=\"text-slate-400\">-</span>
                                    ";
                }
                // line 123
                yield "                                </td>
                                <td class=\"px-1 py-3 font-bold text-[12px]\">";
                // line 124
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "metier", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "metier", [], "any", false, false, false, 124), "nom", [], "any", false, false, false, 124), "html", null, true)) : ("-"));
                yield "</td>
                                <td class=\"px-2 py-3\">
                                    ";
                // line 126
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 126) == 2)) {
                    // line 127
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 border border-green-700 rounded-full border-1\">Admis</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 128
$context["candidature"], "entstatut", [], "any", false, false, false, 128) == 2)) {
                    // line 129
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold text-blue-700 bg-blue-100 border border-blue-700 rounded-full border-1\">Admissible</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 130
$context["candidature"], "etustatut", [], "any", false, false, false, 130) == 2)) {
                    // line 131
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 border border-yellow-700 rounded-full border-1\">Dossier OK</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 132
$context["candidature"], "etustatut", [], "any", false, false, false, 132) == 1)) {
                    // line 133
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold text-red-700 bg-red-100 border border-red-700 rounded-full border-1\">Rejeté</span>
                                    ";
                } else {
                    // line 135
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold border rounded-full border-1 border-slate-700 bg-slate-100 text-slate-600\">En attente</span>
                                    ";
                }
                // line 137
                yield "                                </td>
                                <td class=\"px-2 py-3 text-sm text-right text-slate-500\">";
                // line 138
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "creation", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true);
                yield "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            // line 140
            if (!$context['_iterated']) {
                // line 141
                yield "                            <tr>
                                <td colspan=\"5\" class=\"px-4 py-8 text-center text-slate-500\">
                                    <i class=\"mb-2 text-3xl opacity-50 fas fa-inbox\"></i>
                                    <p>Aucune candidature récente</p>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 148
            yield "                        </tbody>
                    </table>
                </div>
            </div>
            ";
        }
        // line 153
        yield "
            <!-- Inscriptions définitives (pour admin ET ent) -->
            ";
        // line 155
        if (((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 156
            yield "            <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
                <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-green-50 to-emerald-50\">
                    <h2 class=\"flex items-center text-lg font-semibold text-green-800\">
                        <i class=\"mr-2 fas fa-user-graduate\"></i>
                        ";
            // line 160
            if ((($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 161
                yield "                            Les admis définitifs - ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 161), "html", null, true);
                yield "
                        ";
            } else {
                // line 163
                yield "                            Les admis définitifs
                        ";
            }
            // line 165
            yield "                    </h2>
                </div>
                <div class=\"overflow-x-auto\">
                    <table class=\"w-full\">
                        <thead class=\"border-b bg-slate-50 border-slate-200\">
                            <tr>
                                <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">N° Inscription</th>
                                <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Candidat</th>
                                <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Métier</th>
                                <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Date</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-slate-200\">
                            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((array_key_exists("derniers_admis", $context)) ? (Twig\Extension\CoreExtension::default(($context["derniers_admis"] ?? null), [])) : ([])), 0, 5));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["admis"]) {
                // line 179
                yield "                            <tr class=\"transition hover:bg-slate-50\">
                                <td class=\"px-4 py-3 font-mono text-sm text-green-600\">";
                // line 180
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admis"], "numeroInscription", [], "any", false, false, false, 180), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-3 text-sm\">";
                // line 181
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["admis"], "user", [], "any", false, false, false, 181), "nom", [], "any", false, false, false, 181)), "html", null, true);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["admis"], "user", [], "any", false, false, false, 181), "prenoms", [], "any", false, false, false, 181), "html", null, true);
                yield "</td>
                                <td class=\"px-4 py-3 text-sm\">";
                // line 182
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["admis"], "metier", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["admis"], "metier", [], "any", false, false, false, 182), "nom", [], "any", false, false, false, 182), "html", null, true)) : ("-"));
                yield "</td>
                                <td class=\"px-4 py-3 text-sm text-slate-500\">";
                // line 183
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["admis"], "dateInscription", [], "any", false, false, false, 183), "d/m/Y"), "html", null, true);
                yield "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            // line 185
            if (!$context['_iterated']) {
                // line 186
                yield "                            <tr>
                                <td colspan=\"4\" class=\"px-4 py-8 text-center text-slate-500\">
                                    <i class=\"mb-2 text-3xl opacity-50 fas fa-user-graduate\"></i>
                                    <p>Aucune inscription définitive</p>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['admis'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 193
            yield "                        </tbody>
                    </table>
                </div>
                ";
            // line 196
            if ((($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 197
                yield "                <div class=\"px-6 py-3 border-t bg-green-50 border-slate-200\">
                    <a href=\"";
                // line 198
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_etablissement");
                yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-green-600 text-white text-sm rounded-lg hover:bg-green-700 transition\">
                        <i class=\"mr-1 fas fa-list\"></i>
                        Voir la liste complète
                    </a>
                </div>
                ";
            }
            // line 204
            yield "            </div>
            ";
        }
        // line 206
        yield "
            ";
        // line 207
        if (((($tmp = ($context["is_candidat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && array_key_exists("mes_candidatures", $context))) {
            // line 208
            yield "            <!-- Mes candidatures (Candidat) -->
            <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
                <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-indigo-50 to-purple-50\">
                    <h2 class=\"flex items-center text-lg font-semibold text-indigo-800\">
                        <i class=\"mr-2 fas fa-file-alt\"></i>
                        Ma candidature
                    </h2>
                </div>
                <div class=\"overflow-x-auto\">
                    <table class=\"w-full\">
                        <thead class=\"border-b bg-slate-50 border-slate-200\">
                            <tr>
                                <th class=\"px-2 py-3 text-xs font-medium text-left uppercase text-slate-600\">N°</th>
                                <th class=\"px-2 py-3 text-xs font-medium text-left uppercase text-slate-600\">Métier</th>
                                <th class=\"px-2 py-3 text-xs font-medium text-left uppercase text-slate-600\">Établissement</th>
                                <th class=\"px-2 py-3 text-xs font-medium text-left uppercase text-slate-600\">Statut</th>
                                <th class=\"px-2 py-3 text-xs font-medium text-right uppercase text-slate-600\">Date</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-slate-200\">
                            ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mes_candidatures"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 229
                yield "                            <tr class=\"transition hover:bg-slate-50\">
                                <td class=\"px-2 py-3 font-mono text-sm text-indigo-600\">";
                // line 230
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "numero", [], "any", false, false, false, 230), "html", null, true);
                yield "</td>
                                <td class=\"px-2 py-3 text-xs\">";
                // line 231
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "metier", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "metier", [], "any", false, false, false, 231), "nom", [], "any", false, false, false, 231), "html", null, true)) : ("-"));
                yield "</td>
                                <td class=\"px-2 py-3 text-xs\">";
                // line 232
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etablissement", [], "any", false, false, false, 232)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etablissement", [], "any", false, false, false, 232), "nom", [], "any", false, false, false, 232), "html", null, true)) : ("-"));
                yield "</td>
                                <td class=\"px-2 py-3\">
                                    ";
                // line 234
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 234) == 2)) {
                    // line 235
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full\">Admis</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 236
$context["candidature"], "entstatut", [], "any", false, false, false, 236) == 2)) {
                    // line 237
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded-full\">Admissible</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 238
$context["candidature"], "etustatut", [], "any", false, false, false, 238) == 2)) {
                    // line 239
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 rounded-full\">Dossier accepté</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 240
$context["candidature"], "etustatut", [], "any", false, false, false, 240) == 1)) {
                    // line 241
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full\">Rejeté</span>
                                    ";
                } else {
                    // line 243
                    yield "                                        <span class=\"px-2 py-1 text-xs font-semibold rounded-full bg-slate-100 text-slate-600\">En attente</span>
                                    ";
                }
                // line 245
                yield "                                </td>
                                <td class=\"px-4 py-3 text-sm text-right text-slate-500\">";
                // line 246
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "creation", [], "any", false, false, false, 246), "d/m/Y"), "html", null, true);
                yield "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            // line 248
            if (!$context['_iterated']) {
                // line 249
                yield "                            <tr>
                                <td colspan=\"5\" class=\"px-4 py-8 text-center text-slate-500\">
                                    <i class=\"mb-2 text-3xl opacity-50 fas fa-file-alt\"></i>
                                    <p class=\"mb-2\">Vous n\x27avez pas encore de candidature</p>
                                    ";
                // line 253
                if ((($tmp = ($context["candidature_publique"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 254
                    yield "                                    <a href=\"";
                    yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_new");
                    yield "\" class=\"inline-flex items-center px-3 py-1.5 bg-indigo-600 text-white text-sm rounded-lg hover:bg-indigo-700 transition\">
                                        <i class=\"mr-1 fas fa-plus-circle\"></i>
                                        Déposer une candidature
                                    </a>
                                    ";
                } else {
                    // line 259
                    yield "                                    <p class=\"text-sm\">Présentez-vous au LPH (Yamoussoukro) ou au LPMMS (Bouaké) : l\x27agent du lycée enregistre votre candidature.</p>
                                    ";
                }
                // line 261
                yield "                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 264
            yield "                        </tbody>
                    </table>
                </div>
            </div>
            ";
        }
        // line 269
        yield "        </div>

        <!-- Colonne latérale (1/3) -->
        <div class=\"space-y-8\">
            <!-- Derniers inscrits (pour admin ET ent) -->
            ";
        // line 274
        if ((((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && array_key_exists("derniers_inscrits", $context))) {
            // line 275
            yield "            <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
                <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-indigo-50 to-purple-50\">
                    <h2 class=\"flex items-center text-lg font-semibold text-indigo-800\">
                        <i class=\"mr-2 fas fa-user-plus\"></i>
                        ";
            // line 279
            if ((($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 280
                yield "                            Derniers candidats - ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 280), "html", null, true);
                yield "
                        ";
            } else {
                // line 282
                yield "                            Nouveaux inscrits
                        ";
            }
            // line 284
            yield "                    </h2>
                </div>
                <div class=\"divide-y divide-slate-200\">
                    ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["derniers_inscrits"] ?? null), 0, 5));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 288
                yield "                    <div class=\"px-6 py-3 transition hover:bg-slate-50\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"flex items-center justify-center flex-shrink-0 w-8 h-8 bg-indigo-100 rounded-full\">
                                <i class=\"text-xs text-indigo-600 fas fa-user\"></i>
                            </div>
                            <div class=\"flex-1 min-w-0\">
            <p class=\"text-sm font-medium truncate text-slate-800\">";
                // line 294
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 294), "html", null, true);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenoms", [], "any", false, false, false, 294), "html", null, true);
                yield "</p>
            <p class=\"text-xs truncate text-slate-500\">";
                // line 295
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 295), "html", null, true);
                yield "</p>
            
            ";
                // line 298
                yield "            ";
                $context["primaryRole"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 298));
                // line 299
                yield "            ";
                $context["roleConfig"] = ["ROLE_ADMIN" => ["Administrateur", "bg-red-500 text-white", "text-red-600"], "ROLE_ENT" => ["Etablissement", "bg-green-500 text-white", "text-green-600"], "ROLE_CANDIDAT" => ["Candidat", "bg-blue-500 text-white", "text-blue-600"], "ROLE_AGENT" => ["Agent", "bg-yellow-500 text-white", "text-yellow-600"], "ROLE_JURY" => ["Jury", "bg-purple-500 text-white", "text-purple-600"]];
                // line 306
                yield "            ";
                $context["mainRoleInfo"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["roleConfig"] ?? null), ($context["primaryRole"] ?? null), [], "array", true, true, false, 306) &&  !(null === (($_v0 = ($context["roleConfig"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["primaryRole"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)))) ? ((($_v2 = ($context["roleConfig"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = ($context["primaryRole"] ?? null)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) : ([Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["primaryRole"] ?? null), ["ROLE_" => ""])), "bg-gray-500 text-white", "text-gray-600"]));
                // line 307
                yield "
            <div class=\"flex flex-wrap gap-1 mt-1\">
                ";
                // line 309
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 309));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 310
                    yield "                ";
                    $context["roleInfo"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["roleConfig"] ?? null), $context["role"], [], "array", true, true, false, 310) &&  !(null === (($_v4 = ($context["roleConfig"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = $context["role"]) instanceof \Stringable && (is_array($_v4) || $_v4 instanceof \ArrayObject || $_v4 instanceof \ArrayIterator) ? (string) $_v5 : $_v5)] ?? null) : null)))) ? ((($_v6 = ($context["roleConfig"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = $context["role"]) instanceof \Stringable && (is_array($_v6) || $_v6 instanceof \ArrayObject || $_v6 instanceof \ArrayIterator) ? (string) $_v7 : $_v7)] ?? null) : null)) : ([Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""])), "bg-gray-500 text-white", "text-gray-600"]));
                    // line 311
                    yield "                <span class=\"px-2 py-0.5 rounded text-xs font-medium ";
                    yield (string) $this->escaper->escape((($_v8 = ($context["roleInfo"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[1] ?? null) : null), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape((($_v9 = ($context["roleInfo"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[0] ?? null) : null), "html", null, true);
                    yield "</span>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 313
                yield "            </div>
        </div>
        
        <div class=\"flex-shrink-0 text-right\">
            <span class=\"block text-xs font-medium text-slate-400\">Nouveau</span>
            <span class=\"block text-[11px] font-bold ";
                // line 318
                yield (string) $this->escaper->escape((($_v10 = ($context["mainRoleInfo"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[2] ?? null) : null), "html", null, true);
                yield " mt-0.5\">
                Inscrit le : ";
                // line 319
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 319), "d/m/Y"), "html", null, true)) : ("Non renseigné"));
                yield "
            </span>
        </div>
    </div>
</div>
                    ";
                $context['_iterated'] = true;
            }
            // line 324
            if (!$context['_iterated']) {
                // line 325
                yield "                    <div class=\"px-6 py-8 text-center text-slate-500\">
                        <i class=\"mb-2 text-3xl opacity-50 fas fa-users\"></i>
                        <p>Aucun candidat récent</p>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 330
            yield "                </div>
            </div>
            ";
        }
        // line 333
        yield "
            <!-- Actions rapides -->
            <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
                <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-indigo-50 to-purple-50\">
                    <h2 class=\"flex items-center text-lg font-semibold text-indigo-800\">
                        <i class=\"mr-2 fas fa-bolt\"></i>
                        Actions rapides
                    </h2>
                </div>
                <div class=\"p-6\">
                    <div class=\"grid grid-cols-2 gap-3\">
                        ";
        // line 344
        if ((($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 345
            yield "                            <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-indigo-50 hover:bg-indigo-100\">
                                <i class=\"mb-1 text-xl text-indigo-600 fas fa-list\"></i>
                                <span class=\"text-xs text-indigo-700\">Toutes les candidatures</span>
                            </a>
                            <a href=\"";
            // line 349
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_admin_liste");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-green-50 hover:bg-green-100\">
                                <i class=\"mb-1 text-xl text-green-600 fas fa-user-graduate\"></i>
                                <span class=\"text-xs text-green-700\">Liste des admis</span>
                            </a>
                            <a href=\"";
            // line 353
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-emerald-50 hover:bg-emerald-100\">
                                <i class=\"mb-1 text-xl fas fa-clipboard-check text-emerald-600\"></i>
                                <span class=\"text-xs text-emerald-700\">Admis définitifs</span>
                            </a>
                            <a href=\"";
            // line 357
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-blue-50 hover:bg-blue-100\">
                                <i class=\"mb-1 text-xl text-blue-600 fas fa-download\"></i>
                                <span class=\"text-xs text-blue-700\">Exports</span>
                            </a>
                            <a href=\"";
            // line 361
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_stat");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-purple-50 hover:bg-purple-100\">
                                 <i class=\"mb-1 text-xl text-purple-600 fas fa-chart-bar\"></i>
                                 <span class=\"text-xs text-purple-700\">Statistiques</span>
                            </a>
                            ";
            // line 365
            if ( !(($tmp = ($context["is_agent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 366
                yield "                            <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_new");
                yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-amber-50 hover:bg-amber-100\">
                                <i class=\"mb-1 text-xl fas fa-briefcase text-amber-600\"></i>
                                <span class=\"text-xs text-amber-700\">Nouveau métier</span>
                            </a>
                            ";
            }
            // line 371
            yield "                            ";
        } elseif (((($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 372
            yield "                            ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CANDIDATURE_CREATE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 373
                yield "                            <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_saisie");
                yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-indigo-50 hover:bg-indigo-100\">
                                <i class=\"mb-1 text-xl text-indigo-600 fas fa-plus-circle\"></i>
                                <span class=\"text-xs text-indigo-700\">Nouvelle candidature</span>
                            </a>
                            ";
            }
            // line 378
            yield "                            <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-indigo-50 hover:bg-indigo-100\">
                                <i class=\"mb-1 text-xl text-indigo-600 fas fa-clipboard-check\"></i>
                                <span class=\"text-xs text-indigo-700\">Gérer les candidatures</span>
                            </a>
                            <a href=\"";
            // line 382
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_liste");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-green-50 hover:bg-green-100\">
                                <i class=\"mb-1 text-xl text-green-600 fas fa-user-graduate\"></i>
                                <span class=\"text-xs text-green-700\">Liste des admis</span>
                            </a>
                            ";
            // line 392
            yield "                            <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_etablissement");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-emerald-50 hover:bg-emerald-100\">
                                <i class=\"mb-1 text-xl fas fa-list text-emerald-600\"></i>
                                <span class=\"text-xs text-emerald-700\">Liste des admis définitifs</span>
                            </a>
                            <a href=\"";
            // line 396
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-purple-50 hover:bg-purple-100\">
                                <i class=\"mb-1 text-xl text-purple-600 fas fa-print\"></i>
                                <span class=\"text-xs text-purple-700\">Impressions</span>
                            </a>
                            <a href=\"";
            // line 400
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_stat", ["etablissement" => CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 400)]), "html", null, true);
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-blue-50 hover:bg-blue-100\">
                                 <i class=\"mb-1 text-xl text-blue-600 fas fa-chart-bar\"></i>
                                 <span class=\"text-xs text-blue-700\">Statistiques</span>
                             </a>
                            <a href=\"";
            // line 404
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 404)]), "html", null, true);
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-amber-50 hover:bg-amber-100\">
                                <i class=\"mb-1 text-xl fas fa-building text-amber-600\"></i>
                                <span class=\"text-xs text-amber-700\">Mon établissement</span>
                            </a>
                        </div>
                        ";
        } elseif ((($tmp =         // line 409
($context["is_candidat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 410
            yield "                            ";
            if ((($tmp = ($context["candidature_publique"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 411
                yield "                            <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_new");
                yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-indigo-50 hover:bg-indigo-100\">
                                <i class=\"mb-1 text-xl text-indigo-600 fas fa-plus-circle\"></i>
                                <span class=\"text-xs text-indigo-700\">Nouvelle candidature</span>
                            </a>
                            ";
            }
            // line 416
            yield "                            <a href=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 416), "id", [], "any", false, false, false, 416)]), "html", null, true);
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-amber-50 hover:bg-amber-100\">
                                <i class=\"mb-1 text-xl fas fa-user-edit text-amber-600\"></i>
                                <span class=\"text-xs text-amber-700\">Mon profil</span>
                            </a>
                            <a href=\"";
            // line 420
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-purple-50 hover:bg-purple-100\">
                                <i class=\"mb-1 text-xl text-purple-600 fas fa-print\"></i>
                                <span class=\"text-xs text-purple-700\">Impressions</span>
                            </a>
                        ";
        }
        // line 425
        yield "                    </div>
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
        return "dashboard.html.twig";
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
        return array (  859 => 425,  851 => 420,  843 => 416,  834 => 411,  831 => 410,  829 => 409,  821 => 404,  814 => 400,  807 => 396,  799 => 392,  792 => 382,  784 => 378,  775 => 373,  772 => 372,  769 => 371,  760 => 366,  758 => 365,  751 => 361,  744 => 357,  737 => 353,  730 => 349,  722 => 345,  720 => 344,  707 => 333,  702 => 330,  691 => 325,  689 => 324,  679 => 319,  675 => 318,  668 => 313,  656 => 311,  653 => 310,  649 => 309,  645 => 307,  642 => 306,  639 => 299,  636 => 298,  631 => 295,  625 => 294,  617 => 288,  612 => 287,  607 => 284,  603 => 282,  597 => 280,  595 => 279,  589 => 275,  587 => 274,  580 => 269,  573 => 264,  564 => 261,  560 => 259,  551 => 254,  549 => 253,  543 => 249,  541 => 248,  534 => 246,  531 => 245,  527 => 243,  523 => 241,  521 => 240,  518 => 239,  516 => 238,  513 => 237,  511 => 236,  508 => 235,  506 => 234,  501 => 232,  497 => 231,  493 => 230,  490 => 229,  485 => 228,  463 => 208,  461 => 207,  458 => 206,  454 => 204,  445 => 198,  442 => 197,  440 => 196,  435 => 193,  422 => 186,  420 => 185,  413 => 183,  409 => 182,  403 => 181,  399 => 180,  396 => 179,  391 => 178,  376 => 165,  372 => 163,  366 => 161,  364 => 160,  358 => 156,  356 => 155,  352 => 153,  345 => 148,  332 => 141,  330 => 140,  323 => 138,  320 => 137,  316 => 135,  312 => 133,  310 => 132,  307 => 131,  305 => 130,  302 => 129,  300 => 128,  297 => 127,  295 => 126,  290 => 124,  287 => 123,  283 => 121,  278 => 119,  273 => 118,  270 => 117,  268 => 116,  263 => 114,  260 => 113,  255 => 112,  239 => 98,  235 => 96,  229 => 94,  227 => 93,  221 => 89,  219 => 88,  211 => 82,  209 => 81,  205 => 79,  203 => 67,  200 => 65,  196 => 63,  189 => 59,  182 => 55,  179 => 54,  177 => 53,  173 => 51,  166 => 47,  163 => 46,  161 => 45,  154 => 41,  147 => 37,  140 => 33,  136 => 31,  134 => 30,  127 => 25,  123 => 23,  121 => 22,  116 => 21,  114 => 20,  111 => 19,  109 => 18,  104 => 17,  102 => 16,  90 => 6,  80 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\dashboard.html.twig");
    }
}
