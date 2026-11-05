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

/* candidature/selection_visite.html.twig */
class __TwigTemplate_413f07aafba89fe7f4f9416a51b4bea8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/selection_visite.html.twig"));

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

        yield "Sélection pour la visite médicale | ";
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
<div class=\"px-4 pb-16 mx-auto\">

    ";
        // line 10
        yield "    <div class=\"relative p-6 mb-8 overflow-hidden text-white bg-gradient-to-r from-teal-600 to-emerald-600 rounded-2xl md:p-8\">
        <div class=\"absolute rounded-full pointer-events-none -top-14 -right-14 w-52 h-52 bg-white/5\"></div>
        <div class=\"relative z-10 flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border-white/20 shrink-0\">
                    <i class=\"fas fa-filter\"></i>
                </div>
                <div>
                    <h1 class=\"text-xl font-bold tracking-tight md:text-2xl\">Sélection pour la visite médicale</h1>
                    <p class=\"mt-0.5 text-sm text-white/80\">
                        Classement des candidats admissibles par moyenne décroissante. Les ";
        // line 20
        yield (string) $this->escaper->escape(($context["nombrePlaces"] ?? null), "html", null, true);
        yield " premiers seront retenus.
                    </p>
                </div>
            </div>

            <div class=\"flex items-center justify-between mb-6\">
                <a href=\"";
        // line 26
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_etude_dossier");
        yield "\" class=\"inline-flex items-center px-4 py-2 text-sm font-medium transition shadow-sm text-slate-700 bg-white border border-slate-300 rounded-xl hover:bg-slate-50\">
                    <i class=\"mr-2 fas fa-arrow-left\"></i>
                    Retour à l\x27étude de dossier
                </a>
            </div>
        </div>
    </div>

    ";
        // line 35
        yield "    ";
        yield from $this->load("partials/_flash_messages.html.twig", 35)->unwrap()->yield($context);
        // line 36
        yield "
    ";
        // line 38
        yield "    <form method=\"post\" class=\"mb-6 flex justify-center items-center\" onsubmit=\"return confirm(\x27Confirmez-vous la sélection des ";
        yield (string) $this->escaper->escape(($context["nombrePlaces"] ?? null), "html", null, true);
        yield " premiers candidats ? Cela réinitialisera la sélection précédente.\x27);\">
        <button type=\"submit\"
                class=\"inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-teal-600 to-emerald-600 text-white font-semibold rounded-xl hover:from-teal-700 hover:to-emerald-700 transition transform hover:scale-[1.02] shadow-lg\">
                <i class=\"fas fa-check-circle\"></i>
                Lancer la sélection des ";
        // line 42
        yield (string) $this->escaper->escape(($context["nombrePlaces"] ?? null), "html", null, true);
        yield " premiers
        </button>
    </form>

    ";
        // line 47
        yield "    <div class=\"grid grid-cols-1 gap-4 mb-6 sm:grid-cols-3\">
        <div class=\"p-4 bg-white border border-slate-200 rounded-xl shadow-sm\">
            <div class=\"flex items-center justify-between mb-2\">
                <span class=\"text-xs font-semibold uppercase text-slate-400\">Total admissibles</span>
                <div class=\"flex items-center justify-center text-sm bg-blue-50 text-blue-600 rounded-lg w-8 h-8\">
                    <i class=\"fas fa-users\"></i>
                </div>
            </div>
            <div class=\"text-2xl font-bold text-slate-800\">";
        // line 55
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["candidats"] ?? null)), "html", null, true);
        yield "</div>
        </div>

        <div class=\"p-4 bg-white border border-slate-200 rounded-xl shadow-sm\">
            <div class=\"flex items-center justify-between mb-2\">
                <span class=\"text-xs font-semibold uppercase text-slate-400\">Places à pourvoir</span>
                <div class=\"flex items-center justify-center text-sm bg-teal-50 text-teal-600 rounded-lg w-8 h-8\">
                    <i class=\"fas fa-chair\"></i>
                </div>
            </div>
            <div class=\"text-2xl font-bold text-slate-800\">";
        // line 65
        yield (string) $this->escaper->escape(($context["nombrePlaces"] ?? null), "html", null, true);
        yield "</div>
        </div>

        <div class=\"p-4 bg-white border border-slate-200 rounded-xl shadow-sm\">
            <div class=\"flex items-center justify-between mb-2\">
                <span class=\"text-xs font-semibold uppercase text-slate-400\">Sélection actuelle</span>
                <div class=\"flex items-center justify-center text-sm bg-emerald-50 text-emerald-600 rounded-lg w-8 h-8\">
                    <i class=\"fas fa-check-double\"></i>
                </div>
            </div>
            <div class=\"text-2xl font-bold text-slate-800\">
                ";
        // line 76
        $context["nbSelectionnes"] = 0;
        // line 77
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["candidats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 78
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 78), "selectionnePourVisite", [], "any", false, false, false, 78) == true)) {
                // line 79
                yield "                        ";
                $context["nbSelectionnes"] = (($context["nbSelectionnes"] ?? null) + 1);
                // line 80
                yield "                    ";
            }
            // line 81
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 82
        yield "                ";
        yield (string) $this->escaper->escape(($context["nbSelectionnes"] ?? null), "html", null, true);
        yield "
            </div>
        </div>
    </div>

    ";
        // line 88
        yield "    <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
        <div class=\"overflow-x-auto\">
            <table class=\"w-full\">
                <thead class=\"border-b bg-slate-50 border-slate-200\">
                    <tr>
                        <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Rang</th>
                        <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">N° Candidature</th>
                        <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Candidat</th>
                        <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Métier</th>
                        <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Total</th>
                        <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Moyenne</th>
                        <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Statut</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-200\">
                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["candidats"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 104
            yield "                        ";
            $context["c"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 104);
            // line 105
            yield "                        <tr class=\"transition hover:bg-slate-50 ";
            if (($context["i"] < ($context["nombrePlaces"] ?? null))) {
                yield "bg-green-50/40";
            }
            yield "\">
                            <td class=\"px-4 py-3 text-sm font-bold text-slate-700\">";
            // line 106
            yield (string) $this->escaper->escape(($context["i"] + 1), "html", null, true);
            yield "</td>
                            <td class=\"px-4 py-3 font-mono text-sm font-semibold text-indigo-600\">";
            // line 107
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "numero", [], "any", false, false, false, 107), "html", null, true);
            yield "</td>
                            <td class=\"px-4 py-3 text-sm font-medium text-slate-800\">
                                ";
            // line 109
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "user", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "user", [], "any", false, false, false, 109), "nom", [], "any", false, false, false, 109)) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "user", [], "any", false, false, false, 109), "prenoms", [], "any", false, false, false, 109)), "html", null, true)) : ("N/A"));
            yield "
                            </td>
                            <td class=\"px-4 py-3 text-sm text-slate-600\">";
            // line 111
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "metier", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "metier", [], "any", false, false, false, 111), "nom", [], "any", false, false, false, 111), "html", null, true)) : ("-"));
            yield "</td>
                            <td class=\"px-4 py-3 text-sm font-semibold text-slate-800\">";
            // line 112
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 112), "html", null, true);
            yield " / 40</td>
                            <td class=\"px-4 py-3 text-sm font-bold text-indigo-700\">";
            // line 113
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "moyenne", [], "any", false, false, false, 113), "html", null, true);
            yield " / 4</td>
                            <td class=\"px-4 py-3 text-sm\">
                                ";
            // line 115
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "selectionnePourVisite", [], "any", false, false, false, 115) == true)) {
                // line 116
                yield "                                    <span class=\"px-2 py-1 text-xs font-bold text-green-700 bg-green-100 rounded-full\">
                                        <i class=\"fas fa-check mr-1\"></i> Retenu
                                    </span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["c"] ?? null), "selectionnePourVisite", [], "any", false, false, false, 119) == false)) {
                // line 120
                yield "                                    <span class=\"px-2 py-1 text-xs font-bold text-red-700 bg-red-100 rounded-full\">
                                        <i class=\"fas fa-times mr-1\"></i> Non retenu
                                    </span>
                                ";
            } else {
                // line 124
                yield "                                    <span class=\"px-2 py-1 text-xs font-medium text-slate-600 bg-slate-100 rounded-full\">
                                        En attente
                                    </span>
                                ";
            }
            // line 128
            yield "                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 130
        if (!$context['_iterated']) {
            // line 131
            yield "                        <tr>
                            <td colspan=\"7\" class=\"px-4 py-8 text-center text-slate-500\">
                                <i class=\"mb-2 text-3xl opacity-50 fas fa-users\"></i>
                                <p>Aucun candidat admissible pour le moment.</p>
                                <p class=\"text-xs mt-1\">Les candidats doivent d\x27abord passer l\x27entretien et obtenir une moyenne ≥ 2/4.</p>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 139
        yield "                </tbody>
            </table>
        </div>
    </div>

    ";
        // line 145
        yield "    <div class=\"mt-6 p-4 bg-slate-50 border border-slate-200 rounded-xl\">
        <p class=\"text-sm font-semibold text-slate-700 mb-2\">
            <i class=\"fas fa-info-circle mr-1\"></i> Comment ça marche ?
        </p>
        <ul class=\"text-sm text-slate-600 space-y-1 list-disc list-inside\">
            <li>Les candidats sont classés par <strong>total décroissant</strong> (les ex-aequo sont départagés par date de candidature).</li>
            <li>Cliquez sur <strong>\"Valider la sélection\"</strong> pour retenir les <strong>";
        // line 151
        yield (string) $this->escaper->escape(($context["nombrePlaces"] ?? null), "html", null, true);
        yield " premiers</strong>.</li>
            <li>Les candidats retenus apparaîtront dans la liste <strong>\"Visite médicale non effectuée\"</strong>.</li>
            <li>Vous pouvez relancer la sélection à tout moment : cela réinitialisera les choix précédents.</li>
        </ul>
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
        return "candidature/selection_visite.html.twig";
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
        return array (  335 => 151,  327 => 145,  320 => 139,  306 => 131,  304 => 130,  298 => 128,  292 => 124,  286 => 120,  284 => 119,  279 => 116,  277 => 115,  272 => 113,  268 => 112,  264 => 111,  259 => 109,  254 => 107,  250 => 106,  243 => 105,  240 => 104,  235 => 103,  218 => 88,  209 => 82,  202 => 81,  199 => 80,  196 => 79,  193 => 78,  188 => 77,  186 => 76,  172 => 65,  159 => 55,  149 => 47,  142 => 42,  134 => 38,  131 => 36,  128 => 35,  117 => 26,  108 => 20,  96 => 10,  91 => 6,  81 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/selection_visite.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\selection_visite.html.twig");
    }
}
