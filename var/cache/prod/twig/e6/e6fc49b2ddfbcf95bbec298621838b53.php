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

/* candidature/etude_dossier.html.twig */
class __TwigTemplate_aa048da4cfc62bad105e2f1a64ea735a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/etude_dossier.html.twig"));

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

        yield "Étude de dossier | ";
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
    <div class=\"relative z-10 flex items-center justify-between\">
        <div class=\"flex items-center gap-4\">
            <div class=\"flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border-white/20 shrink-0\">
                <i class=\"fas fa-folder-open\"></i>
            </div>
            <div>
                <h1 class=\"text-xl font-bold tracking-tight md:text-2xl\">Étude de dossier</h1>
                <p class=\"mt-0.5 text-sm text-white/80\">Vue d\x27ensemble et suivi rapide des candidatures</p>
            </div>
        </div>

        ";
        // line 22
        yield "        ";
        // line 29
        yield "    </div>
</div>

";
        // line 33
        yield "<div class=\"grid grid-cols-1 gap-4 mb-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6\">
    <!-- En attente -->
    <div class=\"p-4 bg-white border shadow-sm border-slate-200 rounded-xl\">
        <div class=\"flex items-center justify-between mb-2\">
            <span class=\"text-xs font-semibold uppercase text-slate-400\">En attente d\x27étude</span>
            <div class=\"flex items-center justify-center w-8 h-8 text-sm rounded-lg bg-amber-50 text-amber-600\">
                <i class=\"fas fa-clock\"></i>
            </div>
        </div>
        <div class=\"text-2xl font-bold text-slate-800\">";
        // line 42
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "attente", [], "any", false, false, false, 42), "html", null, true);
        yield "</div>
    </div>

    <!-- Admissibles -->
    <div class=\"p-4 bg-white border shadow-sm border-slate-200 rounded-xl\">
        <div class=\"flex items-center justify-between mb-2\">
            <span class=\"text-xs font-semibold uppercase text-slate-400\">Admissibles</span>
            <div class=\"flex items-center justify-center w-8 h-8 text-sm text-blue-600 rounded-lg bg-blue-50\">
                <i class=\"fas fa-user-check\"></i>
            </div>
        </div>
        <div class=\"text-2xl font-bold text-slate-800\">";
        // line 53
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "admissible", [], "any", false, false, false, 53), "html", null, true);
        yield "</div>
    </div>

    <!-- Admis -->
    <div class=\"p-4 bg-white border shadow-sm border-slate-200 rounded-xl\">
        <div class=\"flex items-center justify-between mb-2\">
            <span class=\"text-xs font-semibold uppercase text-slate-400\">Admis</span>
            <div class=\"flex items-center justify-center w-8 h-8 text-sm rounded-lg bg-emerald-50 text-emerald-600\">
                <i class=\"fas fa-award\"></i>
            </div>
        </div>
        <div class=\"text-2xl font-bold text-slate-800\">";
        // line 64
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "admis", [], "any", false, false, false, 64), "html", null, true);
        yield "</div>
    </div>

    <!-- Visite Médicale -->
    <div class=\"p-4 bg-white border shadow-sm border-slate-200 rounded-xl\">
        <div class=\"flex items-center justify-between mb-2\">
            <span class=\"text-xs font-semibold uppercase text-slate-400\">Visite Médicale</span>
            <div class=\"flex items-center justify-center w-8 h-8 text-sm text-teal-600 rounded-lg bg-teal-50\">
                <i class=\"fas fa-notes-medical\"></i>
            </div>
        </div>
        <div class=\"text-2xl font-bold text-slate-800\">";
        // line 75
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "visite", [], "any", false, false, false, 75), "html", null, true);
        yield "</div>
    </div>

    <!-- Entretien Effectué -->
    <div class=\"p-4 bg-white border shadow-sm border-slate-200 rounded-xl\">
        <div class=\"flex items-center justify-between mb-2\">
            <span class=\"text-xs font-semibold uppercase text-slate-400\">Entretien éffectué</span>
            <div class=\"flex items-center justify-center w-8 h-8 text-sm text-purple-600 rounded-lg bg-purple-50\">
                <i class=\"fas fa-comments\"></i>
            </div>
        </div>
        <div class=\"text-2xl font-bold text-slate-800\">";
        // line 86
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "entretien_effectue", [], "any", false, false, false, 86), "html", null, true);
        yield "</div>
    </div>

    <!-- Entretien Non Effectué -->
    <div class=\"p-4 bg-white border shadow-sm border-slate-200 rounded-xl\">
        <div class=\"flex items-center justify-between mb-2\">
            <span class=\"text-xs font-semibold uppercase text-slate-400\">Entretien Non Fait</span>
            <div class=\"flex items-center justify-center w-8 h-8 text-sm rounded-lg bg-rose-50 text-rose-600\">
                <i class=\"fas fa-comment-slash\"></i>
            </div>
        </div>
        <div class=\"text-2xl font-bold text-slate-800\">";
        // line 97
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "entretien_non_effectue", [], "any", false, false, false, 97), "html", null, true);
        yield "</div>
    </div>
</div>

";
        // line 168
        yield "
";
        // line 169
        $macros["͜macros"] = $this->getMacroNamespace();
        // line 170
        yield "
";
        // line 172
        yield "
";
        // line 173
        yield (string) ($macros["͜macros"] ?? $this->throwUninitializedMacroNamespace(173))->call("candidate_card_table", ["Candidats en attente d\x27étude de dossier (5 derniers) ", "clock", "bg-gradient-to-r from-amber-50 to-orange-50", "text-amber-800", "bg-amber-600", "hover:bg-amber-700",         // line 180
($context["candidats_attente"] ?? null), "Aucun candidat en attente", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_en_attente")], $context, 173, $this->source);
        // line 183
        yield "

";
        // line 185
        yield (string) ($macros["͜macros"] ?? $this->throwUninitializedMacroNamespace(185))->call("candidate_card_table", ["Candidats admissibles (5 derniers) ", "user-check", "bg-gradient-to-r from-blue-50 to-indigo-50", "text-blue-800", "bg-blue-600", "hover:bg-blue-700",         // line 192
($context["candidats_admissibles"] ?? null), "Aucun candidat admissible"], $context, 185, $this->source);
        // line 194
        yield "

";
        // line 207
        yield "
";
        // line 208
        yield (string) ($macros["͜macros"] ?? $this->throwUninitializedMacroNamespace(208))->call("candidate_card_table", ["Candidats visite médicale non effectuée (5 derniers)", "user-clock", "bg-gradient-to-r from-amber-50 to-yellow-50", "text-amber-800", "bg-amber-600", "hover:bg-amber-700",         // line 215
($context["candidats_visite_non_effectuee"] ?? null), "Aucune visite médicale en attente", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_visite_non_effectuee")], $context, 208, $this->source);
        // line 218
        yield "

";
        // line 220
        yield (string) ($macros["͜macros"] ?? $this->throwUninitializedMacroNamespace(220))->call("candidate_card_table", ["Candidats visite médicale effectuée (5 derniers) ", "notes-medical", "bg-gradient-to-r from-teal-50 to-cyan-50", "text-teal-800", "bg-teal-600", "hover:bg-teal-700",         // line 227
($context["candidats_visite_medicale"] ?? null), "Aucune visite médicale enregistrée"], $context, 220, $this->source);
        // line 229
        yield "

";
        // line 243
        yield "
";
        // line 244
        yield (string) ($macros["͜macros"] ?? $this->throwUninitializedMacroNamespace(244))->call("candidate_card_table", ["Candidats entretien non effectué (5 derniers) ", "comment-slash", "bg-gradient-to-r from-rose-50 to-pink-50", "text-rose-800", "bg-rose-600", "hover:bg-rose-700",         // line 251
($context["candidats_entretien_non_effectue"] ?? null), "Aucun entretien en attente", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_entretien_non_effectue")], $context, 244, $this->source);
        // line 254
        yield "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "candidate_card_table" => new \Twig\TwigMacro("candidate_card_table", function ($title = null, $icon = null, $header_gradient = null, $title_color = null, $btn_bg = null, $btn_hover = null, $candidates = null, $empty_message = null, $target_path = null, ...$varargs): string|Markup {
                // line 102
                $macros = $this->macros;
                $context = [
                    "title" => $title,
                    "icon" => $icon,
                    "header_gradient" => $header_gradient,
                    "title_color" => $title_color,
                    "btn_bg" => $btn_bg,
                    "btn_hover" => $btn_hover,
                    "candidates" => $candidates,
                    "empty_message" => $empty_message,
                    "target_path" => $target_path,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "candidate_card_table"));

                    // line 103
                    $context["etablissement_name"] = ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["candidates"] ?? null)) > 0) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["candidates"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "etablissement", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["candidates"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "etablissement", [], "any", false, false, false, 103), "nom", [], "any", false, false, false, 103)) : (null));
                    // line 104
                    yield "
<div class=\"mb-8 overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
    <!-- En-tête de carte -->
    <div class=\"px-6 py-4 border-b border-slate-200 ";
                    // line 107
                    yield (string) $this->escaper->escape(($context["header_gradient"] ?? null), "html", null, true);
                    yield "\">
        <h2 class=\"flex items-center text-lg font-semibold ";
                    // line 108
                    yield (string) $this->escaper->escape(($context["title_color"] ?? null), "html", null, true);
                    yield "\">
            <i class=\"mr-2 fas fa-";
                    // line 109
                    yield (string) $this->escaper->escape(($context["icon"] ?? null), "html", null, true);
                    yield "\"></i>
            ";
                    // line 110
                    yield (string) $this->escaper->escape(($context["title"] ?? null), "html", null, true);
                    if ((($tmp = ($context["etablissement_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " <span class=\"font-normal opacity-90\"> - ";
                        yield (string) $this->escaper->escape(($context["etablissement_name"] ?? null), "html", null, true);
                        yield "</span>";
                    }
                    // line 111
                    yield "        </h2>
    </div>

    <!-- Conteneur tableau -->
    <div class=\"overflow-x-auto\">
        <table class=\"w-full\">
            <thead class=\"border-b bg-slate-50 border-slate-200\">
                <tr>
                    <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">N° Candidature</th>
                    <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Candidat</th>
                    <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Métier</th>
                    <th class=\"px-4 py-3 text-xs font-medium text-left uppercase text-slate-600\">Date</th>
                    <th class=\"px-4 py-3 text-xs font-medium text-right uppercase text-slate-600\">Actions</th>
                </tr>
            </thead>
            <tbody class=\"divide-y divide-slate-200\">
                ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["candidates"] ?? null));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 128
                        yield "                <tr class=\"transition hover:bg-slate-50\">
                    <td class=\"px-4 py-3 font-mono text-sm font-semibold text-indigo-600\">
                        ";
                        // line 130
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "numero", [], "any", false, false, false, 130), "html", null, true);
                        yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm font-medium text-slate-800\">
                        ";
                        // line 133
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 133), "nom", [], "any", false, false, false, 133)) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 133), "prenoms", [], "any", false, false, false, 133)), "html", null, true)) : ("N/A"));
                        yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm text-slate-600\">
                        ";
                        // line 136
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "metier", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "metier", [], "any", false, false, false, 136), "nom", [], "any", false, false, false, 136), "html", null, true)) : ("-"));
                        yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm text-slate-500\">
                        ";
                        // line 139
                        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "creation", [], "any", false, false, false, 139), "d/m/Y"), "html", null, true);
                        yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm text-right\">
                        <a href=\"";
                        // line 142
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                        yield "\" class=\"px-3 py-1.5 text-xs font-medium bg-indigo-50 text-indigo-600 rounded-lg hover:bg-indigo-600 hover:text-white transition\">
                            <i class=\"mr-1 fas fa-edit\"></i> Traiter
                        </a>
                    </td>
                </tr>
                ";
                        $context['_iterated'] = true;
                    }
                    // line 147
                    if (!$context['_iterated']) {
                        // line 148
                        yield "                <tr>
                    <td colspan=\"5\" class=\"px-4 py-8 text-center text-slate-500\">
                        <i class=\"mb-2 text-3xl opacity-50 fas fa-";
                        // line 150
                        yield (string) $this->escaper->escape(($context["icon"] ?? null), "html", null, true);
                        yield "\"></i>
                        <p>";
                        // line 151
                        yield (string) $this->escaper->escape(($context["empty_message"] ?? null), "html", null, true);
                        yield "</p>
                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['_iterated']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 155
                    yield "            </tbody>
        </table>
    </div>

    <!-- Pied de carte avec bouton d\x27action -->
    <div class=\"px-6 py-3 border-t border-slate-200 bg-slate-50/50\">
        <a href=\"";
                    // line 161
                    yield (string) (((($tmp = ($context["target_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(($context["target_path"] ?? null), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index")));
                    yield "\" class=\"inline-flex items-center px-3 py-1.5 ";
                    yield (string) $this->escaper->escape(($context["btn_bg"] ?? null), "html", null, true);
                    yield " text-white text-sm rounded-lg ";
                    yield (string) $this->escaper->escape(($context["btn_hover"] ?? null), "html", null, true);
                    yield " transition\">
            <i class=\"mr-1.5 fas fa-list\"></i>
            Voir la liste complète
        </a>
    </div>
</div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["title" => false, "icon" => false, "header_gradient" => false, "title_color" => false, "btn_bg" => false, "btn_hover" => false, "candidates" => false, "empty_message" => false, "target_path" => true], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "candidature/etude_dossier.html.twig";
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
        return array (  403 => 161,  395 => 155,  384 => 151,  380 => 150,  376 => 148,  374 => 147,  364 => 142,  358 => 139,  352 => 136,  346 => 133,  340 => 130,  336 => 128,  331 => 127,  313 => 111,  306 => 110,  302 => 109,  298 => 108,  294 => 107,  289 => 104,  287 => 103,  266 => 102,  252 => 254,  250 => 251,  249 => 244,  246 => 243,  242 => 229,  240 => 227,  239 => 220,  235 => 218,  233 => 215,  232 => 208,  229 => 207,  225 => 194,  223 => 192,  222 => 185,  218 => 183,  216 => 180,  215 => 173,  212 => 172,  209 => 170,  207 => 169,  204 => 168,  197 => 97,  183 => 86,  169 => 75,  155 => 64,  141 => 53,  127 => 42,  116 => 33,  111 => 29,  109 => 22,  94 => 8,  91 => 6,  81 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/etude_dossier.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\etude_dossier.html.twig");
    }
}
