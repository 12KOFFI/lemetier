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
            yield "                        Administration générale
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
                            <a href=\"";
            // line 365
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_new");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-amber-50 hover:bg-amber-100\">
                                <i class=\"mb-1 text-xl fas fa-briefcase text-amber-600\"></i>
                                <span class=\"text-xs text-amber-700\">Nouveau métier</span>
                            </a>
                            ";
        } elseif (((($tmp =         // line 369
($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 370
            yield "                            ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CANDIDATURE_CREATE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 371
                yield "                            <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_saisie");
                yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-indigo-50 hover:bg-indigo-100\">
                                <i class=\"mb-1 text-xl text-indigo-600 fas fa-plus-circle\"></i>
                                <span class=\"text-xs text-indigo-700\">Nouvelle candidature</span>
                            </a>
                            ";
            }
            // line 376
            yield "                            <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-indigo-50 hover:bg-indigo-100\">
                                <i class=\"mb-1 text-xl text-indigo-600 fas fa-clipboard-check\"></i>
                                <span class=\"text-xs text-indigo-700\">Gérer les candidatures</span>
                            </a>
                            <a href=\"";
            // line 380
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_liste");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-green-50 hover:bg-green-100\">
                                <i class=\"mb-1 text-xl text-green-600 fas fa-user-graduate\"></i>
                                <span class=\"text-xs text-green-700\">Liste des admis</span>
                            </a>
                            ";
            // line 390
            yield "                            <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_etablissement");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-emerald-50 hover:bg-emerald-100\">
                                <i class=\"mb-1 text-xl fas fa-list text-emerald-600\"></i>
                                <span class=\"text-xs text-emerald-700\">Liste des admis définitifs</span>
                            </a>
                            <a href=\"";
            // line 394
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-purple-50 hover:bg-purple-100\">
                                <i class=\"mb-1 text-xl text-purple-600 fas fa-print\"></i>
                                <span class=\"text-xs text-purple-700\">Impressions</span>
                            </a>
                            <a href=\"";
            // line 398
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_stat", ["etablissement" => CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 398)]), "html", null, true);
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-blue-50 hover:bg-blue-100\">
                                 <i class=\"mb-1 text-xl text-blue-600 fas fa-chart-bar\"></i>
                                 <span class=\"text-xs text-blue-700\">Statistiques</span>
                             </a>
                            <a href=\"";
            // line 402
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "id", [], "any", false, false, false, 402)]), "html", null, true);
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-amber-50 hover:bg-amber-100\">
                                <i class=\"mb-1 text-xl fas fa-building text-amber-600\"></i>
                                <span class=\"text-xs text-amber-700\">Mon établissement</span>
                            </a>
                        </div>
                        ";
        } elseif ((($tmp =         // line 407
($context["is_candidat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 408
            yield "                            ";
            if ((($tmp = ($context["candidature_publique"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 409
                yield "                            <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_new");
                yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-indigo-50 hover:bg-indigo-100\">
                                <i class=\"mb-1 text-xl text-indigo-600 fas fa-plus-circle\"></i>
                                <span class=\"text-xs text-indigo-700\">Nouvelle candidature</span>
                            </a>
                            ";
            }
            // line 414
            yield "                            <a href=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 414), "id", [], "any", false, false, false, 414)]), "html", null, true);
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-amber-50 hover:bg-amber-100\">
                                <i class=\"mb-1 text-xl fas fa-user-edit text-amber-600\"></i>
                                <span class=\"text-xs text-amber-700\">Mon profil</span>
                            </a>
                            <a href=\"";
            // line 418
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" class=\"flex flex-col items-center p-3 transition rounded-lg bg-purple-50 hover:bg-purple-100\">
                                <i class=\"mb-1 text-xl text-purple-600 fas fa-print\"></i>
                                <span class=\"text-xs text-purple-700\">Impressions</span>
                            </a>
                        ";
        }
        // line 423
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 429
        if (((($tmp = ($context["is_ent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 430
            yield "
<!-- Modal Nouvelles Fonctionnalités -->
<div id=\"featureModal\" class=\"fixed inset-0 z-50 flex items-end justify-center hidden pb-4 sm:items-center sm:pb-0\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
    <!-- Backdrop -->
    <div class=\"fixed inset-0 transition-opacity duration-300 opacity-0 bg-slate-900/60 backdrop-blur-sm\" id=\"featureModalBackdrop\"></div>

    <!-- Modal Panel -->
    <div class=\"relative bg-white rounded-3xl shadow-2xl w-full max-w-md mx-4 sm:mx-auto overflow-hidden transform opacity-0 translate-y-10 sm:translate-y-0 sm:scale-95 transition-all duration-300 flex flex-col max-h-[90vh]\" id=\"featureModalPanel\">
        
        <!-- Decoration Header -->
        <div class=\"h-1.5 sm:h-2 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500\"></div>

        <!-- Close Button -->
        <button type=\"button\" id=\"closeModalBtn\" class=\"absolute z-10 flex items-center justify-center w-8 h-8 transition-colors rounded-full top-3 right-3 sm:top-4 sm:right-4 bg-slate-50 text-slate-400 hover:text-slate-600 hover:bg-slate-200 focus:outline-none\">
            <i class=\"fas fa-times\"></i>
        </button>

        <div class=\"p-6 overflow-y-auto sm:p-8\">
            <!-- Icon -->
            <div class=\"flex items-center justify-center w-12 h-12 mb-4 rounded-full shadow-inner sm:w-16 sm:h-16 bg-gradient-to-br from-indigo-100 to-purple-100 sm:mb-6\">
                <i class=\"text-xl text-indigo-600 fas fa-rocket sm:text-2xl\"></i>
            </div>

            <!-- Content -->
            <h3 class=\"mb-2 text-xl font-bold sm:text-2xl text-slate-800 sm:mb-3\" id=\"modal-title\">
                Nouvelles fonctionnalités disponibles
            </h3>
            <p class=\"mb-6 text-sm leading-relaxed sm:text-base text-slate-600 sm:mb-8\">
                Vous pouvez désormais gérer et transmettre facilement les conventions avec vos entreprises partenaires ainsi que les contrats d’apprentissage de vos apprentis, directement depuis la plateforme.
            </p>

            <!-- Actions -->
            <div class=\"flex flex-col gap-3\">
                <a href=\"";
            // line 463
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_etablissement");
            yield "\" class=\"group relative w-full flex items-center justify-center py-2.5 sm:py-3 px-4 border border-transparent rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all shadow-md hover:shadow-lg text-sm sm:text-base text-center\">
                    <i class=\"mr-2 text-indigo-300 transition-colors fas fa-file-signature group-hover:text-indigo-200\"></i>
                    <span class=\"font-semibold\">Ajouter un contrat d’apprentissage</span>
                </a>
            
            </div>

            <!-- Footer Actions -->
            <div class=\"flex flex-col items-center justify-between gap-4 pt-4 mt-6 border-t sm:mt-8 sm:pt-5 border-slate-100 sm:flex-row\">
                <a href=\"";
            // line 472
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/guide_conventions_contrats.docx"), "html", null, true);
            yield "\" target=\"_blank\" class=\"w-full sm:w-auto group inline-flex justify-center items-center text-sm font-medium text-indigo-600 hover:text-indigo-700 transition-colors bg-indigo-50 hover:bg-indigo-100 px-4 py-2.5 rounded-xl\">
                    <i class=\"mr-2 text-indigo-400 transition-colors fas fa-file-word group-hover:text-indigo-600\"></i>
                    Consulter le guide d\x27utilisation
                </a>
                <button id=\"dismissModalBtn\" class=\"text-sm underline transition-colors text-slate-500 hover:text-slate-700 underline-offset-2 focus:outline-none\">
                    Ne plus afficher
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
    const modal = document.getElementById(\x27featureModal\x27);
    if (!modal) return;
    
    const backdrop = document.getElementById(\x27featureModalBackdrop\x27);
    const panel = document.getElementById(\x27featureModalPanel\x27);
    const closeBtn = document.getElementById(\x27closeModalBtn\x27);
    const dismissBtn = document.getElementById(\x27dismissModalBtn\x27);
    
    // Vérifier si le modal a déjà été masqué
    const modalDismissed = localStorage.getItem(\x27featureModalDismissed\x27);
    
    if (modalDismissed !== \x27true\x27) {
        // Afficher le modal avec animation
        modal.classList.remove(\x27hidden\x27);
        
        // Petit délai pour permettre au navigateur de rendre le display:block avant d\x27animer
        setTimeout(() => {
            backdrop.classList.remove(\x27opacity-0\x27);
            panel.classList.remove(\x27opacity-0\x27, \x27translate-y-10\x27, \x27sm:scale-95\x27);
            panel.classList.add(\x27opacity-100\x27, \x27translate-y-0\x27, \x27sm:scale-100\x27);
        }, 50);
    }
    
    function hideModal() {
        backdrop.classList.remove(\x27opacity-100\x27);
        backdrop.classList.add(\x27opacity-0\x27);
        
        panel.classList.remove(\x27opacity-100\x27, \x27translate-y-0\x27, \x27sm:scale-100\x27);
        panel.classList.add(\x27opacity-0\x27, \x27translate-y-10\x27, \x27sm:scale-95\x27);
        
        setTimeout(() => {
            modal.classList.add(\x27hidden\x27);
        }, 300); // Correspond à la durée de transition
    }
    
    function dismissModalForever() {
        localStorage.setItem(\x27featureModalDismissed\x27, \x27true\x27);
        hideModal();
    }
    
    closeBtn.addEventListener(\x27click\x27, hideModal);
    backdrop.addEventListener(\x27click\x27, hideModal);
    dismissBtn.addEventListener(\x27click\x27, dismissModalForever);
});
</script>
";
        }
        
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
        return array (  909 => 472,  897 => 463,  862 => 430,  860 => 429,  852 => 423,  844 => 418,  836 => 414,  827 => 409,  824 => 408,  822 => 407,  814 => 402,  807 => 398,  800 => 394,  792 => 390,  785 => 380,  777 => 376,  768 => 371,  765 => 370,  763 => 369,  756 => 365,  749 => 361,  742 => 357,  735 => 353,  728 => 349,  720 => 345,  718 => 344,  705 => 333,  700 => 330,  689 => 325,  687 => 324,  677 => 319,  673 => 318,  666 => 313,  654 => 311,  651 => 310,  647 => 309,  643 => 307,  640 => 306,  637 => 299,  634 => 298,  629 => 295,  623 => 294,  615 => 288,  610 => 287,  605 => 284,  601 => 282,  595 => 280,  593 => 279,  587 => 275,  585 => 274,  578 => 269,  571 => 264,  562 => 261,  558 => 259,  549 => 254,  547 => 253,  541 => 249,  539 => 248,  532 => 246,  529 => 245,  525 => 243,  521 => 241,  519 => 240,  516 => 239,  514 => 238,  511 => 237,  509 => 236,  506 => 235,  504 => 234,  499 => 232,  495 => 231,  491 => 230,  488 => 229,  483 => 228,  461 => 208,  459 => 207,  456 => 206,  452 => 204,  443 => 198,  440 => 197,  438 => 196,  433 => 193,  420 => 186,  418 => 185,  411 => 183,  407 => 182,  401 => 181,  397 => 180,  394 => 179,  389 => 178,  374 => 165,  370 => 163,  364 => 161,  362 => 160,  356 => 156,  354 => 155,  350 => 153,  343 => 148,  330 => 141,  328 => 140,  321 => 138,  318 => 137,  314 => 135,  310 => 133,  308 => 132,  305 => 131,  303 => 130,  300 => 129,  298 => 128,  295 => 127,  293 => 126,  288 => 124,  285 => 123,  281 => 121,  276 => 119,  271 => 118,  268 => 117,  266 => 116,  261 => 114,  258 => 113,  253 => 112,  237 => 98,  233 => 96,  227 => 94,  225 => 93,  219 => 89,  217 => 88,  209 => 82,  207 => 81,  203 => 79,  201 => 67,  198 => 65,  194 => 63,  187 => 59,  180 => 55,  177 => 54,  175 => 53,  171 => 51,  164 => 47,  161 => 46,  159 => 45,  152 => 41,  145 => 37,  138 => 33,  134 => 31,  132 => 30,  125 => 25,  121 => 23,  119 => 22,  114 => 21,  112 => 20,  109 => 19,  107 => 18,  104 => 17,  102 => 16,  90 => 6,  80 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\dashboard.html.twig");
    }
}
