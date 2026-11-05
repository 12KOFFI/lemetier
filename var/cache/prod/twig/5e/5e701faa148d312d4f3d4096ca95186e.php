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

/* programmation_visite/index.html.twig */
class __TwigTemplate_6c728c3e5473ed5d2bc4004487ba1d44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmation_visite/index.html.twig"));

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

        yield "Visites médicales — Délibération & Programmation | GROUPE LEMETIER";
        
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
        yield from $this->load("partials/_flash_messages.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
";
        // line 9
        yield "<div class=\"relative p-8 mb-8 overflow-hidden text-white bg-gradient-to-r from-teal-600 to-emerald-600 rounded-2xl\">
    <div class=\"absolute w-56 h-56 rounded-full -right-10 -top-10 bg-white/10\"></div>
    <div class=\"relative flex flex-col gap-4 md:flex-row md:items-center md:gap-6\">
        <div class=\"flex items-center justify-center shadow-inner w-14 h-14 shrink-0 bg-white/20 rounded-2xl\">
            <i class=\"text-2xl fas fa-heartbeat\"></i>
        </div>
        <div class=\"flex-1\">
            <h1 class=\"text-2xl font-bold\">Visites médicales</h1>
            <p class=\"max-w-3xl mt-1 text-white/80\">
                Importez la liste des candidats retenus par les jurys après délibération et la programmation des visites médicales se fera en une seule étape.
            </p>
        </div>
        <div class=\"hidden px-4 py-3 border md:block bg-white/15 rounded-xl backdrop-blur border-white/20\">
            <p class=\"text-xs tracking-wide uppercase text-white/70\">Admissibles actuels</p>
            <p class=\"text-4xl font-extrabold text-center text-white\">";
        // line 23
        yield (string) $this->escaper->escape(($context["nombre_admissibles"] ?? null), "html", null, true);
        yield "</p>
        </div>
    </div>
</div>

<div class=\"max-w-5xl px-4 pb-16 mx-auto space-y-8\">

    ";
        // line 31
        yield "    <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\"
         x-data=\"visiteProgrammationForm()\">
        <div class=\"p-6 md:p-8\">
            <h3 class=\"flex items-center pb-4 mb-6 text-lg font-semibold text-teal-800 border-b border-slate-100\">
                <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-teal-100 rounded-lg\">
                    <i class=\"text-teal-600 fas fa-calendar-check\"></i>
                </div>
                Délibération &amp; paramètres de programmation
            </h3>

            <form method=\"post\" action=\"";
        // line 41
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_visite");
        yield "\"
                  enctype=\"multipart/form-data\" class=\"space-y-8\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 43
        yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("programmation_visite"), "html", null, true);
        yield "\">

                ";
        // line 46
        yield "                <div>
                    <p class=\"mb-3 text-xs font-semibold tracking-wide uppercase text-slate-400\">Liste des admissibles (fichier du jury)</p>
                    <label for=\"fichier_excel\" id=\"drop-zone-visite\"
                           class=\"flex items-center gap-4 p-5 transition border-2 border-dashed cursor-pointer group rounded-xl border-slate-300 hover:border-teal-400 bg-slate-50 hover:bg-teal-50/50\">
                        <div id=\"file-icon-container-visite\"
                             class=\"flex items-center justify-center bg-white border rounded-full w-11 h-11 shrink-0 border-slate-200 group-hover:border-teal-300\">
                            <i id=\"file-icon-visite\" class=\"transition fas fa-file-arrow-up text-slate-400 group-hover:text-teal-500\"></i>
                        </div>
                        <div class=\"flex-1\">
                            <span id=\"file-name-visite\" class=\"block text-sm font-medium text-slate-700\">
                                Fichier Excel des candidats admissibles <span class=\"text-red-500\">*</span>
                            </span>
                            <span id=\"file-status-visite\" class=\"block text-xs text-slate-400 mt-0.5\">
                                Formats acceptés : .xlsx, .xls, .csv — la 1ʳᵉ ligne (en-tête) est ignorée
                            </span>
                        </div>
                        <span id=\"file-btn-text-visite\"
                              class=\"hidden sm:inline-flex items-center px-3 py-1.5 rounded-lg bg-white border border-slate-300 text-xs font-semibold text-slate-600 group-hover:border-teal-300 group-hover:text-teal-600 transition\">
                            Parcourir
                        </span>
                    </label>
                    <input id=\"fichier_excel\" type=\"file\" name=\"fichier_excel\"
                           accept=\".xlsx,.xls,.csv\" required class=\"sr-only\">
                </div>

                <div class=\"p-4 text-sm border rounded-xl border-amber-200 bg-amber-50 text-amber-800\">
                    <i class=\"mr-1 fas fa-info-circle\"></i>
                    <strong>Délibération :</strong> les candidats présents dans ce fichier seront déclarés
                    <strong>admissibles</strong> puis <strong>programmés</strong> pour la visite médicale. </br> A contrario, Les candidats déjà évalués
                    (entretien effectué + notes saisies) mais <strong>absents</strong> de ce fichier seront déclarés
                    <strong>non admissibles</strong>.
                </div>

                ";
        // line 80
        yield "                <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                            Lieu de la visite médicale <span class=\"text-red-500\">*</span>
                        </label>
                        <div class=\"flex items-center gap-2.5 w-full border border-slate-300 rounded-lg px-3.5 py-2.5 bg-white focus-within:ring-2 focus-within:ring-teal-500 focus-within:border-teal-500 transition\">
                            <i class=\"fas fa-hospital text-slate-400\"></i>
                            <input type=\"text\" name=\"lieu\" required placeholder=\"Ex: CHU Cocody\"
                                   class=\"w-full p-0 bg-transparent border-0 focus:ring-0 focus:outline-none text-slate-700\">
                        </div>
                    </div>
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                            Heure de début <span class=\"text-red-500\">*</span>
                        </label>
                        <div class=\"flex items-center gap-2.5 w-full border border-slate-300 rounded-lg px-3.5 py-2.5 bg-white focus-within:ring-2 focus-within:ring-teal-500 focus-within:border-teal-500 transition\">
                            <i class=\"fas fa-clock text-slate-400\"></i>
                            <input type=\"time\" name=\"heure_debut\" value=\"08:00\" required
                                   class=\"w-full p-0 bg-transparent border-0 focus:ring-0 focus:outline-none text-slate-700\">
                        </div>
                    </div>
                </div>

                ";
        // line 104
        yield "                <div>
                    <p class=\"mb-3 text-xs font-semibold tracking-wide uppercase text-slate-400\">Jours de visite</p>

                    <template x-for=\"(jour, index) in jours\" :key=\"index\">
                        <div class=\"flex items-center gap-3 mb-3\">
                            <div class=\"flex-1\">
                                <div class=\"flex items-center gap-2.5 w-full border border-slate-300 rounded-lg px-3.5 py-2.5 bg-white focus-within:ring-2 focus-within:ring-teal-500 focus-within:border-teal-500 transition\">
                                    <i class=\"fas fa-calendar-day text-slate-400\"></i>
                                    <input type=\"date\" :name=\"`jours[\${index}][date]`\" x-model=\"jour.date\" required
                                           class=\"w-full p-0 bg-transparent border-0 focus:ring-0 focus:outline-none text-slate-700\">
                                </div>
                            </div>
                            <div class=\"w-40\">
                                <div class=\"flex items-center gap-2.5 w-full border border-slate-300 rounded-lg px-3.5 py-2.5 bg-white focus-within:ring-2 focus-within:ring-teal-500 focus-within:border-teal-500 transition\">
                                    <i class=\"fas fa-users text-slate-400\"></i>
                                    <input type=\"number\" :name=\"`jours[\${index}][capacite]`\" x-model=\"jour.capacite\"
                                           min=\"1\" required placeholder=\"Capacité\"
                                           class=\"w-full p-0 bg-transparent border-0 focus:ring-0 focus:outline-none text-slate-700\">
                                </div>
                            </div>
                            <button type=\"button\" @click=\"removeJour(index)\" x-show=\"jours.length > 1\"
                                    class=\"flex items-center justify-center w-10 h-10 text-red-500 transition rounded-lg bg-red-50 hover:bg-red-100 shrink-0\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </div>
                    </template>

                    <button type=\"button\" @click=\"addJour()\"
                            class=\"inline-flex items-center gap-2 px-4 py-2 mt-2 text-sm font-medium text-teal-700 transition border border-teal-200 rounded-lg bg-teal-50 hover:bg-teal-100\">
                        <i class=\"fas fa-plus-circle\"></i> Ajouter un jour
                    </button>

                    <div class=\"flex flex-wrap justify-center p-4 mt-4 text-sm text-teal-800 border border-teal-100 rounded-xl bg-teal-50 gap-x-8 gap-y-2\">
                        <span><i class=\"fas fa-calculator mr-1.5\"></i> Total planifiable : <strong x-text=\"totalCapacite()\"></strong></span>
                        <span><i class=\"fas fa-users mr-1.5\"></i> Admissibles actuels : <strong>";
        // line 138
        yield (string) $this->escaper->escape(($context["nombre_admissibles"] ?? null), "html", null, true);
        yield "</strong></span>
                    </div>
                </div>

                <div class=\"flex justify-end pt-2 border-t border-slate-100\">
                    <button type=\"submit\"
                            class=\"inline-flex items-center gap-2 px-8 py-2.5 bg-teal-600 text-white font-semibold rounded-lg shadow-sm hover:bg-teal-700 hover:shadow-md active:scale-[0.98] transition\">
                        <i class=\"fas fa-gavel\"></i>
                        Appliquer la délibération &amp; programmer
                    </button>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 154
        yield "    ";
        if ((array_key_exists("resultats", $context) &&  !(null === ($context["resultats"] ?? null)))) {
            // line 155
            yield "
    ";
            // line 157
            yield "    <div class=\"space-y-6\">
        <div class=\"flex items-center gap-3\">
            <div class=\"flex-1 h-px bg-slate-200\"></div>
            <span class=\"text-xs font-semibold tracking-wide uppercase text-slate-400 whitespace-nowrap\">1. Résultat de la délibération</span>
            <div class=\"flex-1 h-px bg-slate-200\"></div>
        </div>

        <div class=\"grid grid-cols-2 gap-4 md:grid-cols-4\">
            <div class=\"p-4 text-center bg-white border shadow-sm rounded-xl border-slate-200\">
                <p class=\"text-2xl font-bold text-slate-800\">";
            // line 166
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "total_fichier", [], "any", false, false, false, 166), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-slate-500\">Numéros dans le fichier</p>
            </div>
            <div class=\"p-4 text-center border border-teal-200 shadow-sm bg-teal-50 rounded-xl\">
                <p class=\"text-2xl font-bold text-teal-700\">";
            // line 170
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "admissibles", [], "any", false, false, false, 170)), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-teal-700\">Admissibles</p>
            </div>
            <div class=\"p-4 text-center border border-red-200 shadow-sm bg-red-50 rounded-xl\">
                <p class=\"text-2xl font-bold text-red-700\">";
            // line 174
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_admissibles", [], "any", false, false, false, 174)), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-red-700\">Non admissibles</p>
            </div>
            <div class=\"p-4 text-center border shadow-sm bg-amber-50 rounded-xl border-amber-200\">
                <p class=\"text-2xl font-bold text-amber-700\">";
            // line 178
            yield (string) $this->escaper->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 178)) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_eligibles_dossier", [], "any", false, false, false, 178))), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-amber-700\">Numéros à vérifier</p>
            </div>
        </div>

        ";
            // line 183
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 183)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_eligibles_dossier", [], "any", false, false, false, 183)) > 0))) {
                // line 184
                yield "        <div class=\"p-4 space-y-2 text-sm border rounded-xl border-amber-200 bg-amber-50 text-amber-800\">
            <p><i class=\"mr-1 fas fa-exclamation-triangle\"></i> Certains numéros n\x27ont pas pu être appliqués :</p>
            ";
                // line 186
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 186)) > 0)) {
                    // line 187
                    yield "            <p class=\"text-xs\"><strong>Introuvables :</strong> ";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 187), ", "), "html", null, true);
                    yield "</p>
            ";
                }
                // line 189
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_eligibles_dossier", [], "any", false, false, false, 189)) > 0)) {
                    // line 190
                    yield "            <p class=\"text-xs\"><strong>Non éligibles (etustatut ≠ 2) :</strong> ";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_eligibles_dossier", [], "any", false, false, false, 190), ", "), "html", null, true);
                    yield "</p>
            ";
                }
                // line 192
                yield "        </div>
        ";
            }
            // line 194
            yield "    </div>

    ";
            // line 197
            yield "    <div class=\"space-y-6\">
        <div class=\"flex flex-wrap items-center justify-between gap-3\">
            <div class=\"flex items-center flex-1 min-w-[200px] gap-3\">
                <div class=\"flex-1 h-px bg-slate-200\"></div>
                <span class=\"text-xs font-semibold tracking-wide uppercase text-slate-400 whitespace-nowrap\">2. Résultat de la programmation</span>
                <div class=\"flex-1 h-px bg-slate-200\"></div>
            </div>
            <a href=\"";
            // line 204
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_visite_export", ["lieu" => CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "lieu", [], "any", false, false, false, 204)]), "html", null, true);
            yield "\"
               class=\"inline-flex items-center gap-2 px-4 py-2 text-sm font-semibold text-white transition bg-green-600 rounded-lg shadow-sm hover:bg-green-700\">
                <i class=\"fas fa-file-excel\"></i> Exporter le planning
            </a>
        </div>

        <div class=\"grid grid-cols-2 gap-4 md:grid-cols-4\">
            <div class=\"p-4 text-center bg-white border shadow-sm rounded-xl border-slate-200\">
                <p class=\"text-2xl font-bold text-slate-800\">";
            // line 212
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "total_candidats", [], "any", false, false, false, 212), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-slate-500\">À programmer</p>
            </div>
            <div class=\"p-4 text-center border border-teal-200 shadow-sm bg-teal-50 rounded-xl\">
                <p class=\"text-2xl font-bold text-teal-700\">";
            // line 216
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "planifies", [], "any", false, false, false, 216)), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-teal-700\">Programmés</p>
            </div>
            <div class=\"p-4 text-center bg-white border shadow-sm rounded-xl border-slate-200\">
                <p class=\"text-2xl font-bold text-slate-700\">";
            // line 220
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "jours", [], "any", false, false, false, 220)), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-slate-600\">Jour(s)</p>
            </div>
            <div class=\"p-4 text-center border border-red-200 shadow-sm bg-red-50 rounded-xl\">
                <p class=\"text-2xl font-bold text-red-700\">";
            // line 224
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 224)), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-red-700\">Sans créneau</p>
            </div>
        </div>

        ";
            // line 229
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 229)) > 0)) {
                // line 230
                yield "        <div class=\"flex items-start gap-3 p-4 text-sm border rounded-xl border-amber-200 bg-amber-50 text-amber-800\">
            <i class=\"fas fa-exclamation-triangle mt-0.5\"></i>
            <div>
                <p class=\"font-semibold\">";
                // line 233
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 233)), "html", null, true);
                yield " candidat(s) sans créneau :</p>
                <p class=\"mt-1 text-xs\">";
                // line 234
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 234), ", "), "html", null, true);
                yield "</p>
            </div>
        </div>
        ";
            }
            // line 238
            yield "
        ";
            // line 240
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "jours", [], "any", false, false, false, 240));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 241
                yield "            ";
                $context["candidatsJour"] = [];
                // line 242
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "planifies", [], "any", false, false, false, 242));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 243
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 243) == CoreExtension::getAttribute($this->env, $this->source, $context["jour"], "date", [], "any", false, false, false, 243))) {
                        // line 244
                        yield "                    ";
                        $context["candidatsJour"] = Twig\Extension\CoreExtension::merge(($context["candidatsJour"] ?? null), [$context["item"]]);
                        // line 245
                        yield "                ";
                    }
                    // line 246
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 247
                yield "
            <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
                <div class=\"flex flex-wrap items-center justify-between gap-2 px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-teal-50 to-emerald-50\">
                    <h3 class=\"flex items-center text-base font-semibold text-teal-800\">
                        <i class=\"mr-3 text-teal-600 fas fa-calendar-day\"></i>
                        ";
                // line 252
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["jour"], "date", [], "any", false, false, false, 252), "d/m/Y"), "html", null, true);
                yield "
                        <span class=\"ml-3 text-sm font-normal text-teal-600\">";
                // line 253
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["candidatsJour"] ?? null)), "html", null, true);
                yield " candidat(s)</span>
                    </h3>
                    <span class=\"text-xs text-slate-500\"><i class=\"mr-1 fas fa-location-dot\"></i>";
                // line 255
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "lieu", [], "any", false, false, false, 255), "html", null, true);
                yield "</span>
                </div>

                ";
                // line 258
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["candidatsJour"] ?? null)) > 0)) {
                    // line 259
                    yield "                <div class=\"overflow-x-auto\">
                    <table class=\"w-full text-sm\">
                        <thead>
                            <tr class=\"text-xs text-left uppercase border-b text-slate-400 border-slate-100 bg-slate-50\">
                                <th class=\"py-2.5 px-4\">N°</th>
                                <th class=\"py-2.5 px-4\">N° Candidature</th>
                                <th class=\"py-2.5 px-4\">Candidat</th>
                                <th class=\"py-2.5 px-4\">Métier</th>
                                <th class=\"py-2.5 px-4\">Heure</th>
                                <th class=\"py-2.5 px-4 text-right\">Convocation</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-slate-100\">
                            ";
                    // line 272
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["candidatsJour"] ?? null));
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
                        // line 273
                        yield "                            <tr class=\"transition hover:bg-slate-50\">
                                <td class=\"py-2.5 px-4 text-slate-400\">";
                        // line 274
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 274), "html", null, true);
                        yield "</td>
                                <td class=\"py-2.5 px-4 font-mono font-semibold text-indigo-600\">
                                    ";
                        // line 276
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 276), "numero", [], "any", false, false, false, 276), "html", null, true);
                        yield "
                                    ";
                        // line 277
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "reprogramme", [], "any", false, false, false, 277)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 278
                            yield "                                    <span class=\"ml-1 inline-flex items-center px-1.5 py-0.5 rounded text-[0.65rem] font-semibold bg-blue-100 text-blue-700\">Reprogrammé</span>
                                    ";
                        }
                        // line 280
                        yield "                                </td>
                                <td class=\"py-2.5 px-4 text-slate-700\">
                                    ";
                        // line 282
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 282), "user", [], "any", false, false, false, 282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 282), "user", [], "any", false, false, false, 282), "nom", [], "any", false, false, false, 282) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 282), "user", [], "any", false, false, false, 282), "prenoms", [], "any", false, false, false, 282))), "html", null, true)) : ("-"));
                        yield "
                                </td>
                                <td class=\"py-2.5 px-4 text-xs text-slate-500\">";
                        // line 284
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 284), "metier", [], "any", false, false, false, 284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 284), "metier", [], "any", false, false, false, 284), "nom", [], "any", false, false, false, 284), "html", null, true)) : ("-"));
                        yield "</td>
                                <td class=\"py-2.5 px-4\">
                                    <span class=\"inline-flex items-center px-2 py-1 text-xs font-semibold text-teal-700 border border-teal-100 rounded-full bg-teal-50\">
                                        <i class=\"mr-1 fas fa-clock\"></i>";
                        // line 287
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "heure", [], "any", false, false, false, 287), "html", null, true);
                        yield "
                                    </span>
                                </td>
                                <td class=\"py-2.5 px-4 text-right\">
                                    <a href=\"";
                        // line 291
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_imprimer_convocation_visite", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 291), "id", [], "any", false, false, false, 291)]), "html", null, true);
                        yield "\"
                                       target=\"_blank\"
                                       class=\"inline-flex items-center px-3 py-1.5 rounded-lg bg-teal-600 text-white text-xs font-semibold hover:bg-teal-700 transition\">
                                        <i class=\"fas fa-print mr-1.5\"></i> Imprimer
                                    </a>
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
                    // line 299
                    yield "                        </tbody>
                    </table>
                </div>
                ";
                } else {
                    // line 303
                    yield "                <div class=\"p-8 text-center text-slate-500\">
                    <i class=\"mb-2 text-3xl fas fa-inbox opacity-40\"></i>
                    <p class=\"text-sm\">Aucun candidat programmé ce jour.</p>
                </div>
                ";
                }
                // line 308
                yield "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jour'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 310
            yield "    </div>

    ";
        }
        // line 313
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 317
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 318
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function visiteProgrammationForm() {
            return {
                jours: [{ date: \x27\x27, capacite: 50 }],
                addJour() { this.jours.push({ date: \x27\x27, capacite: 0 }); },
                removeJour(index) { if (this.jours.length > 1) this.jours.splice(index, 1); },
                totalCapacite() { return this.jours.reduce((s, j) => s + (parseInt(j.capacite) || 0), 0); }
            }
        }

        document.addEventListener(\x27DOMContentLoaded\x27, function () {
            const fileInput = document.getElementById(\x27fichier_excel\x27);
            const fileNameSpan = document.getElementById(\x27file-name-visite\x27);
            const fileStatusSpan = document.getElementById(\x27file-status-visite\x27);
            const fileIconContainer = document.getElementById(\x27file-icon-container-visite\x27);
            const fileIcon = document.getElementById(\x27file-icon-visite\x27);
            const dropZone = document.getElementById(\x27drop-zone-visite\x27);
            const fileBtnText = document.getElementById(\x27file-btn-text-visite\x27);

            if (fileInput) {
                fileInput.addEventListener(\x27change\x27, function (e) {
                    const file = e.target.files[0];
                    if (file) {
                        const fileSize = (file.size / (1024 * 1024)).toFixed(2);
                        fileNameSpan.textContent = file.name;
                        fileNameSpan.classList.add(\x27text-teal-700\x27, \x27font-semibold\x27);
                        fileStatusSpan.textContent = `Fichier sélectionné (\${fileSize} Mo)`;
                        fileStatusSpan.classList.remove(\x27text-slate-400\x27);
                        fileStatusSpan.classList.add(\x27text-green-600\x27, \x27font-medium\x27);
                        fileIcon.className = \x27fas fa-file-excel text-green-600 text-xl\x27;
                        fileIconContainer.className = \x27w-11 h-11 shrink-0 rounded-full bg-green-50 border border-green-200 flex items-center justify-center\x27;
                        dropZone.className = \x27group flex items-center gap-4 rounded-xl border-2 border-solid border-green-400 bg-green-50/30 transition cursor-pointer p-5\x27;
                        if (fileBtnText) {
                            fileBtnText.textContent = \x27Changer\x27;
                            fileBtnText.className = \x27hidden sm:inline-flex items-center px-3 py-1.5 rounded-lg bg-green-100 border border-green-300 text-xs font-semibold text-green-700 transition\x27;
                        }
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
        return "programmation_visite/index.html.twig";
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
        return array (  599 => 318,  589 => 317,  579 => 313,  574 => 310,  566 => 308,  559 => 303,  553 => 299,  530 => 291,  523 => 287,  517 => 284,  512 => 282,  508 => 280,  504 => 278,  502 => 277,  498 => 276,  493 => 274,  490 => 273,  473 => 272,  458 => 259,  456 => 258,  450 => 255,  445 => 253,  441 => 252,  434 => 247,  427 => 246,  424 => 245,  421 => 244,  418 => 243,  413 => 242,  410 => 241,  405 => 240,  402 => 238,  395 => 234,  391 => 233,  386 => 230,  384 => 229,  376 => 224,  369 => 220,  362 => 216,  355 => 212,  344 => 204,  335 => 197,  331 => 194,  327 => 192,  321 => 190,  318 => 189,  312 => 187,  310 => 186,  306 => 184,  304 => 183,  296 => 178,  289 => 174,  282 => 170,  275 => 166,  264 => 157,  261 => 155,  258 => 154,  240 => 138,  204 => 104,  179 => 80,  144 => 46,  139 => 43,  134 => 41,  122 => 31,  112 => 23,  96 => 9,  93 => 7,  91 => 6,  81 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "programmation_visite/index.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\programmation_visite\\index.html.twig");
    }
}
