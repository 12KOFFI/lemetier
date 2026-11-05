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

/* programmation_entretien/index.html.twig */
class __TwigTemplate_c4ea5e110b7f268a7683d5be768bc39f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmation_entretien/index.html.twig"));

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

        yield "Programmation des entretiens | GROUPE LEMETIER";
        
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
        // line 7
        yield from $this->load("partials/_flash_messages.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
";
        // line 10
        yield "<div class=\"relative p-8 mb-8 overflow-hidden text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl\">
    <div class=\"absolute w-56 h-56 rounded-full -right-10 -top-10 bg-white/10\"></div>
    <div class=\"absolute rounded-full -right-24 -bottom-24 w-72 h-72 bg-white/5\"></div>
    <div class=\"relative flex flex-col gap-4 md:flex-row md:items-center md:gap-6\">
        <div class=\"flex items-center justify-center shadow-inner w-14 h-14 shrink-0 bg-white/20 rounded-2xl\">
            <i class=\"text-2xl fas fa-calendar-check\"></i>
        </div>
        <div class=\"flex-1\">
            <h1 class=\"text-2xl font-bold\">Programmation des entretiens</h1>
            <p class=\"max-w-2xl mt-1 text-white/80\">Importez un seul fichier contenant les candidats de tous les établissements et métiers. Vérifiez l’aperçu avant d’enregistrer le planning.</p>
        </div>
        <div class=\"items-center hidden gap-2 text-xs font-medium md:flex text-white/90\">
            <span class=\"flex items-center gap-1.5 bg-white/15 rounded-full px-3 py-1.5\">
                <span class=\"w-5 h-5 rounded-full bg-white/25 flex items-center justify-center text-[0.65rem]\">1</span> Importer
            </span>
            <i class=\"fas fa-chevron-right text-white/50 text-[0.6rem]\"></i>
            <span class=\"flex items-center gap-1.5 bg-white/15 rounded-full px-3 py-1.5\">
                <span class=\"w-5 h-5 rounded-full bg-white/25 flex items-center justify-center text-[0.65rem]\">2</span> Paramétrer
            </span>
            <i class=\"fas fa-chevron-right text-white/50 text-[0.6rem]\"></i>
            <span class=\"flex items-center gap-1.5 bg-white/15 rounded-full px-3 py-1.5\">
                <span class=\"w-5 h-5 rounded-full bg-white/25 flex items-center justify-center text-[0.65rem]\">3</span> Répartir
            </span>
        </div>
    </div>
</div>

<div class=\"max-w-5xl px-4 pb-16 mx-auto space-y-8\">

    ";
        // line 40
        yield "    <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
        <div class=\"p-6 md:p-8\">
            <h3 class=\"flex items-center pb-4 mb-6 text-lg font-semibold text-indigo-800 border-b border-slate-100\">
                <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-indigo-100 rounded-lg\">
                    <i class=\"text-indigo-600 fas fa-file-excel\"></i>
                </div>
                Import et paramètres de répartition
            </h3>

            <form method=\"post\" action=\"";
        // line 49
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_entretien");
        yield "\" enctype=\"multipart/form-data\" class=\"space-y-8\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 50
        yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("programmation_entretiens"), "html", null, true);
        yield "\">

                ";
        // line 53
        yield "                <div>
                    <p class=\"mb-3 text-xs font-semibold tracking-wide uppercase text-slate-400\">Fichier source</p>
                    <p class=\"mb-3 text-sm text-slate-600\">
                        Une ligne par candidat. Le numéro de candidature est obligatoire; l’établissement et le métier du fichier, s’ils sont renseignés, sont vérifiés avec le dossier.
                        <a href=\"";
        // line 57
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_entretien_modele");
        yield "\" class=\"ml-1 font-semibold text-indigo-600 hover:text-indigo-800\">
                            Télécharger le modèle Excel
                        </a>
                    </p>
                    <label for=\"fichier_excel\" id=\"drop-zone\"
                           class=\"flex items-center gap-4 p-5 transition border-2 border-dashed cursor-pointer group rounded-xl border-slate-300 hover:border-indigo-400 bg-slate-50 hover:bg-indigo-50/50\">
                        <div id=\"file-icon-container\" class=\"flex items-center justify-center bg-white border rounded-full w-11 h-11 shrink-0 border-slate-200 group-hover:border-indigo-300\">
                            <i id=\"file-icon\" class=\"transition fas fa-file-arrow-up text-slate-400 group-hover:text-indigo-500\"></i>
                        </div>
                        <div class=\"flex-1\">
                            <span id=\"file-name\" class=\"block text-sm font-medium text-slate-700\">
                                Fichier Excel des candidats éligibles <span class=\"text-red-500\">*</span>
                            </span>
                            <span id=\"file-status\" class=\"block text-xs text-slate-400 mt-0.5\">Formats acceptés : .xlsx, .xls, .csv</span>
                        </div>
                        <span id=\"file-btn-text\" class=\"hidden sm:inline-flex items-center px-3 py-1.5 rounded-lg bg-white border border-slate-300 text-xs font-semibold text-slate-600 group-hover:border-indigo-300 group-hover:text-indigo-600 transition\">
                            Parcourir
                        </span>
                    </label>
                    <input id=\"fichier_excel\" type=\"file\" name=\"fichier_excel\" accept=\".xlsx,.xls,.csv\" required class=\"sr-only\">
                </div>

                ";
        // line 80
        yield "                <div>
                    <p class=\"mb-3 text-xs font-semibold tracking-wide uppercase text-slate-400\">Portée de l’importation</p>
                    <div class=\"p-4 text-sm text-indigo-800 border border-indigo-100 rounded-xl bg-indigo-50\">
                        <i class=\"mr-2 fas fa-layer-group\"></i>
                        Le système retrouve l’établissement et le métier à partir de chaque candidature. Les groupes sont présentés séparément et les jurys sont répartis dans un planning commun sans créneau simultané.
                        ";
        // line 85
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                            L’import est limité à votre établissement : <strong>";
            yield (string) (((($tmp = ($context["etablissementConnecte"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementConnecte"] ?? null), "nom", [], "any", false, false, false, 86), "html", null, true)) : ("aucun établissement rattaché"));
            yield "</strong>.
                        ";
        }
        // line 88
        yield "                    </div>
                </div>

                ";
        // line 92
        yield "                <div>
                    <p class=\"mb-3 text-xs font-semibold tracking-wide uppercase text-slate-400\">Répartition des jurys</p>
                    <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Nombre de jurys <span class=\"text-red-500\">*</span>
                            </label>
                            <div class=\"flex items-center gap-2.5 w-full border border-slate-300 rounded-lg px-3.5 py-2.5 bg-white focus-within:ring-2 focus-within:ring-indigo-500 focus-within:border-indigo-500 transition\">
                                <i class=\"fas fa-users text-slate-400\"></i>
                                <input type=\"number\" name=\"nb_jury\" min=\"1\" required placeholder=\"Ex: 3\"
                                       class=\"w-full p-0 bg-transparent border-0 focus:ring-0 focus:outline-none\">
                            </div>
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Capacité par jury et par jour <span class=\"text-red-500\">*</span>
                            </label>
                            <div class=\"flex items-center gap-2.5 w-full border border-slate-300 rounded-lg px-3.5 py-2.5 bg-white focus-within:ring-2 focus-within:ring-indigo-500 focus-within:border-indigo-500 transition\">
                                <i class=\"fas fa-gauge-high text-slate-400\"></i>
                                <input type=\"number\" name=\"capacite_jury_jour\" min=\"1\" required placeholder=\"Ex: 40\"
                                       class=\"w-full p-0 bg-transparent border-0 focus:ring-0 focus:outline-none\">
                            </div>
                        </div>
                    </div>
                    ";
        // line 123
        yield "                </div>

                ";
        // line 126
        yield "                <div>
                    <p class=\"mb-3 text-xs font-semibold tracking-wide uppercase text-slate-400\">Période des entretiens</p>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Date de début <span class=\"text-red-500\">*</span>
                            </label>
                            <div class=\"flex items-center gap-2.5 w-full border border-slate-300 rounded-lg px-3.5 py-2.5 bg-white focus-within:ring-2 focus-within:ring-indigo-500 focus-within:border-indigo-500 transition\">
                                <i class=\"fas fa-calendar-day text-slate-400\"></i>
                                <input type=\"date\" name=\"date_debut\" required
                                       class=\"w-full p-0 bg-transparent border-0 focus:ring-0 focus:outline-none\">
                            </div>
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Date de fin <span class=\"text-red-500\">*</span>
                            </label>
                            <div class=\"flex items-center gap-2.5 w-full border border-slate-300 rounded-lg px-3.5 py-2.5 bg-white focus-within:ring-2 focus-within:ring-indigo-500 focus-within:border-indigo-500 transition\">
                                <i class=\"fas fa-calendar-check text-slate-400\"></i>
                                <input type=\"date\" name=\"date_fin\" required
                                       class=\"w-full p-0 bg-transparent border-0 focus:ring-0 focus:outline-none\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"flex justify-end pt-2 border-t border-slate-100\">
                    <button type=\"submit\"
                            class=\"inline-flex items-center gap-2 px-8 py-2.5 bg-indigo-600 text-white font-semibold rounded-lg shadow-sm hover:bg-indigo-700 hover:shadow-md active:scale-[0.98] transition\">
                        <i class=\"fas fa-shuffle\"></i>
                        Lancer la répartition
                    </button>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 163
        if ((array_key_exists("previsualisation", $context) && (($tmp = ($context["previsualisation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 164
            yield "    <div class=\"space-y-6\">
        <div class=\"p-5 border rounded-2xl border-amber-200 bg-amber-50 text-amber-900\">
            <h2 class=\"text-lg font-bold\"><i class=\"mr-2 fas fa-eye\"></i>Aperçu — rien n’a encore été enregistré</h2>
            <p class=\"mt-1 text-sm\">Vérifiez la répartition par établissement et métier. Les candidats déjà programmés ne seront pas modifiés; les lignes en erreur et les candidats sans créneau resteront non traités.</p>
        </div>

        <div class=\"grid grid-cols-2 gap-3 md:grid-cols-5\">
            <div class=\"p-4 text-center bg-white border rounded-xl\"><strong class=\"block text-2xl\">";
            // line 171
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "total_excel", [], "any", false, false, false, 171), "html", null, true);
            yield "</strong><span class=\"text-xs text-slate-500\">Lignes analysées</span></div>
            <div class=\"p-4 text-center bg-white border rounded-xl\"><strong class=\"block text-2xl\">";
            // line 172
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "planifies", [], "any", false, false, false, 172)), "html", null, true);
            yield "</strong><span class=\"text-xs text-slate-500\">À programmer</span></div>
            <div class=\"p-4 text-center bg-white border rounded-xl\"><strong class=\"block text-2xl text-red-600\">";
            // line 173
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "erreurs", [], "any", false, false, false, 173)), "html", null, true);
            yield "</strong><span class=\"text-xs text-slate-500\">Lignes en erreur</span></div>
            <div class=\"p-4 text-center bg-white border rounded-xl\"><strong class=\"block text-2xl text-blue-600\">";
            // line 174
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "deja_programmes", [], "any", false, false, false, 174)), "html", null, true);
            yield "</strong><span class=\"text-xs text-slate-500\">Déjà programmés</span></div>
            <div class=\"p-4 text-center bg-white border rounded-xl\"><strong class=\"block text-2xl text-amber-600\">";
            // line 175
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "sans_creneau", [], "any", false, false, false, 175)), "html", null, true);
            yield "</strong><span class=\"text-xs text-slate-500\">Sans créneau</span></div>
        </div>

        <div class=\"overflow-hidden bg-white border shadow-sm rounded-2xl border-slate-200\">
            <div class=\"px-5 py-4 border-b border-slate-100\">
                <h3 class=\"font-semibold text-slate-800\">Effectifs par établissement et métier</h3>
            </div>
            <div class=\"overflow-x-auto\">
                <table class=\"w-full text-sm\">
                    <thead class=\"text-xs text-left uppercase bg-slate-50 text-slate-500\">
                        <tr><th class=\"px-4 py-3\">Établissement</th><th class=\"px-4 py-3\">Métier</th><th class=\"px-4 py-3 text-right\">Candidats</th></tr>
                    </thead>
                    <tbody class=\"divide-y divide-slate-100\">
                        ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "groupes", [], "any", false, false, false, 188));
            foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                // line 189
                yield "                        <tr><td class=\"px-4 py-3\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "etablissement", [], "any", false, false, false, 189), "html", null, true);
                yield "</td><td class=\"px-4 py-3\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "metier", [], "any", false, false, false, 189), "html", null, true);
                yield "</td><td class=\"px-4 py-3 font-semibold text-right\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "effectif", [], "any", false, false, false, 189), "html", null, true);
                yield "</td></tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 191
            yield "                    </tbody>
                </table>
            </div>
        </div>

        ";
            // line 196
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "erreurs", [], "any", false, false, false, 196)) > 0)) {
                // line 197
                yield "        <div class=\"p-4 border border-red-200 rounded-xl bg-red-50\">
            <h3 class=\"mb-2 font-semibold text-red-800\">Lignes à corriger ou vérifier</h3>
            <ul class=\"space-y-1 overflow-y-auto text-sm text-red-700 list-disc list-inside max-h-40\">
                ";
                // line 200
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "erreurs", [], "any", false, false, false, 200));
                foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
                    yield "<li>";
                    yield (string) $this->escaper->escape($context["erreur"], "html", null, true);
                    yield "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['erreur'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 201
                yield "            </ul>
        </div>
        ";
            }
            // line 204
            yield "
        ";
            // line 205
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "deja_programmes", [], "any", false, false, false, 205)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "sans_creneau", [], "any", false, false, false, 205)) > 0))) {
                // line 206
                yield "        <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
            ";
                // line 207
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "deja_programmes", [], "any", false, false, false, 207)) > 0)) {
                    // line 208
                    yield "            <div class=\"p-4 border border-blue-200 rounded-xl bg-blue-50\">
                <h3 class=\"mb-2 font-semibold text-blue-800\">Déjà programmés — conservés sans modification</h3>
                <ul class=\"space-y-1 overflow-y-auto text-sm text-blue-700 list-disc list-inside max-h-32\">
                    ";
                    // line 211
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "deja_programmes", [], "any", false, false, false, 211));
                    foreach ($context['_seq'] as $context["_key"] => $context["numero"]) {
                        yield "<li>";
                        yield (string) $this->escaper->escape($context["numero"], "html", null, true);
                        yield "</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['numero'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 212
                    yield "                </ul>
            </div>
            ";
                }
                // line 215
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "sans_creneau", [], "any", false, false, false, 215)) > 0)) {
                    // line 216
                    yield "            <div class=\"p-4 border rounded-xl border-amber-200 bg-amber-50\">
                <h3 class=\"mb-2 font-semibold text-amber-800\">Sans créneau disponible</h3>
                <ul class=\"space-y-1 overflow-y-auto text-sm list-disc list-inside max-h-32 text-amber-700\">
                    ";
                    // line 219
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "sans_creneau", [], "any", false, false, false, 219));
                    foreach ($context['_seq'] as $context["_key"] => $context["numero"]) {
                        yield "<li>";
                        yield (string) $this->escaper->escape($context["numero"], "html", null, true);
                        yield "</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['numero'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 220
                    yield "                </ul>
            </div>
            ";
                }
                // line 223
                yield "        </div>
        ";
            }
            // line 225
            yield "
        ";
            // line 226
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "planifies", [], "any", false, false, false, 226)) > 0)) {
                // line 227
                yield "        <div class=\"overflow-hidden bg-white border shadow-sm rounded-2xl border-slate-200\">
            <div class=\"px-5 py-4 border-b border-slate-100\">
                <h3 class=\"font-semibold text-slate-800\">Créneaux proposés</h3>
            </div>
            <div class=\"overflow-auto max-h-96\">
                <table class=\"w-full text-sm\">
                    <thead class=\"sticky top-0 text-xs text-left uppercase bg-slate-50 text-slate-500\">
                        <tr><th class=\"px-4 py-3\">Candidature</th><th class=\"px-4 py-3\">Établissement / métier</th><th class=\"px-4 py-3\">Date et vague</th><th class=\"px-4 py-3\">Jury</th></tr>
                    </thead>
                    <tbody class=\"divide-y divide-slate-100\">
                        ";
                // line 237
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "planifies", [], "any", false, false, false, 237));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 238
                    yield "                        <tr>
                            <td class=\"px-4 py-3 font-medium\">";
                    // line 239
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 239), "numero", [], "any", false, false, false, 239), "html", null, true);
                    yield " — ";
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 239), "user", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 239), "user", [], "any", false, false, false, 239), "nom", [], "any", false, false, false, 239) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 239), "user", [], "any", false, false, false, 239), "prenoms", [], "any", false, false, false, 239))), "html", null, true)) : ("-"));
                    yield "</td>
                            <td class=\"px-4 py-3\">";
                    // line 240
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "etablissement", [], "any", false, false, false, 240), "html", null, true);
                    yield "<br><span class=\"text-xs text-slate-500\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 240), "html", null, true);
                    yield "</span></td>
                            <td class=\"px-4 py-3\">";
                    // line 241
                    yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 241), "d/m/Y"), "html", null, true);
                    yield " · Vague ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vague", [], "any", false, false, false, 241), "html", null, true);
                    yield " à ";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "heure", [], "any", false, false, false, 241)), "html", null, true);
                    yield "h00</td>
                            <td class=\"px-4 py-3\">Jury ";
                    // line 242
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "jury", [], "any", false, false, false, 242), "html", null, true);
                    yield "</td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 245
                yield "                    </tbody>
                </table>
            </div>
        </div>

        <form method=\"post\" action=\"";
                // line 250
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_entretien");
                yield "\" class=\"flex flex-wrap justify-end gap-3\">
            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 251
                yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("programmation_entretiens_" . CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "id", [], "any", false, false, false, 251))), "html", null, true);
                yield "\">
            <input type=\"hidden\" name=\"action\" value=\"confirm\">
            <input type=\"hidden\" name=\"preview_id\" value=\"";
                // line 253
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["previsualisation"] ?? null), "id", [], "any", false, false, false, 253), "html", null, true);
                yield "\">
            <a href=\"";
                // line 254
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_entretien");
                yield "\" class=\"inline-flex items-center rounded-lg border border-slate-300 bg-white px-5 py-2.5 font-semibold text-slate-700 hover:bg-slate-50\">Annuler</a>
            <button type=\"submit\" class=\"inline-flex items-center gap-2 rounded-lg bg-green-600 px-6 py-2.5 font-semibold text-white hover:bg-green-700\">
                <i class=\"fas fa-check\"></i>Confirmer et enregistrer
            </button>
        </form>
        ";
            }
            // line 260
            yield "    </div>
    ";
        }
        // line 262
        yield "
    ";
        // line 264
        yield "    ";
        if ((array_key_exists("resultats", $context) &&  !(null === ($context["resultats"] ?? null)))) {
            // line 265
            yield "    <div class=\"space-y-6\">

        <div class=\"flex flex-wrap items-center justify-between gap-3\">
            <div class=\"flex items-center gap-3 flex-1 min-w-[200px]\">
                <div class=\"flex-1 h-px bg-slate-200\"></div>
                <span class=\"text-xs font-semibold tracking-wide uppercase text-slate-400 whitespace-nowrap\">Résultat de la répartition</span>
                <div class=\"flex-1 h-px bg-slate-200\"></div>
            </div>
            <a href=\"";
            // line 273
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_entretien_export", ["date_debut" => CoreExtension::getAttribute($this->env, $this->source,             // line 274
($context["resultats"] ?? null), "date_debut", [], "any", false, false, false, 274), "date_fin" => CoreExtension::getAttribute($this->env, $this->source,             // line 275
($context["resultats"] ?? null), "date_fin", [], "any", false, false, false, 275)]), "html", null, true);
            // line 276
            yield "\"
               class=\"inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-green-600 text-white text-sm font-semibold shadow-sm hover:bg-green-700 hover:shadow-md active:scale-[0.98] transition\">
                <i class=\"fas fa-file-excel\"></i>
                Exporter le planning par jury (Excel)
            </a>
        </div>

        ";
            // line 284
            yield "        <div class=\"flex flex-wrap p-4 text-sm text-indigo-800 border border-indigo-100 rounded-xl bg-indigo-50 gap-x-8 gap-y-2\">
            <span><i class=\"fas fa-calendar-days mr-1.5\"></i> <strong>";
            // line 285
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "nb_jours", [], "any", false, false, false, 285), "html", null, true);
            yield "</strong> jour(s) programmé(s)</span>
            <span><i class=\"fas fa-gauge-high mr-1.5\"></i> <strong>";
            // line 286
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "capacite_jury_jour", [], "any", false, false, false, 286), "html", null, true);
            yield "</strong> candidats / jury / jour</span>
            <span><i class=\"fas fa-sun mr-1.5\"></i> Vague 1 (08h-12h) : <strong>";
            // line 287
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "capacite_vague1", [], "any", false, false, false, 287), "html", null, true);
            yield "</strong></span>
            <span><i class=\"fas fa-cloud-sun mr-1.5\"></i> Vague 2 (13h-15h) : <strong>";
            // line 288
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "capacite_vague2", [], "any", false, false, false, 288), "html", null, true);
            yield "</strong></span>
        </div>

        ";
            // line 292
            yield "        <div class=\"grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-5\">
            <div class=\"p-4 text-center transition bg-white border shadow-sm rounded-xl border-slate-200 hover:shadow-md\">
                <div class=\"flex items-center justify-center mx-auto mb-2 rounded-full w-9 h-9 bg-slate-100\">
                    <i class=\"text-sm fas fa-file-import text-slate-500\"></i>
                </div>
                <p class=\"text-2xl font-bold text-slate-800\">";
            // line 297
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "total_excel", [], "any", false, false, false, 297), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-slate-500\">Dans le fichier</p>
            </div>
            <div class=\"p-4 text-center transition bg-white border border-green-200 shadow-sm rounded-xl hover:shadow-md\">
                <div class=\"flex items-center justify-center mx-auto mb-2 bg-green-100 rounded-full w-9 h-9\">
                    <i class=\"text-sm text-green-600 fas fa-user-plus\"></i>
                </div>
                <p class=\"text-2xl font-bold text-green-700\">";
            // line 304
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "nb_nouveaux", [], "any", false, false, false, 304), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-green-700\">Nouveaux</p>
            </div>
            <div class=\"p-4 text-center transition bg-white border border-blue-200 shadow-sm rounded-xl hover:shadow-md\">
                <div class=\"flex items-center justify-center mx-auto mb-2 bg-blue-100 rounded-full w-9 h-9\">
                    <i class=\"text-sm text-blue-600 fas fa-rotate\"></i>
                </div>
                <p class=\"text-2xl font-bold text-blue-700\">";
            // line 311
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "deja_programmes", [], "any", false, false, false, 311)), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-blue-700\">Déjà programmés</p>
            </div>
            <div class=\"p-4 text-center transition bg-white border border-red-200 shadow-sm rounded-xl hover:shadow-md\">
                <div class=\"flex items-center justify-center mx-auto mb-2 bg-red-100 rounded-full w-9 h-9\">
                    <i class=\"text-sm text-red-600 fas fa-circle-question\"></i>
                </div>
                <p class=\"text-2xl font-bold text-red-700\">";
            // line 318
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 318)), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-red-700\">Lignes à vérifier</p>
            </div>
            <div class=\"p-4 text-center transition bg-white border shadow-sm rounded-xl border-slate-200 hover:shadow-md\">
                <div class=\"flex items-center justify-center mx-auto mb-2 rounded-full w-9 h-9 bg-slate-100\">
                    <i class=\"text-sm fas fa-hourglass-half text-slate-500\"></i>
                </div>
                <p class=\"text-2xl font-bold text-slate-700\">";
            // line 325
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 325)), "html", null, true);
            yield "</p>
                <p class=\"mt-1 text-xs text-slate-600\">Sans créneau</p>
            </div>
        </div>

        ";
            // line 330
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 330)) > 0)) {
                // line 331
                yield "        <div class=\"flex items-start gap-3 p-4 text-sm text-red-700 border border-red-200 rounded-xl bg-red-50\">
            <div class=\"flex items-center justify-center w-8 h-8 bg-red-100 rounded-full shrink-0\">
                <i class=\"text-red-600 fas fa-exclamation-triangle\"></i>
            </div>
            <p class=\"pt-1\">
                ";
                // line 336
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 336)), "html", null, true);
                yield " candidat(s) n\x27ont pas pu être programmés faute de créneaux disponibles
                (";
                // line 337
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "creneaux_disponibles", [], "any", false, false, false, 337), "html", null, true);
                yield " créneaux générés pour cette période). Élargissez la période, augmentez le nombre de jurys
                ou la capacité par jour, puis relancez l\x27import avec les numéros restants.
            </p>
        </div>
        ";
            }
            // line 342
            yield "
        ";
            // line 344
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "planifies", [], "any", false, false, false, 344)) > 0)) {
                // line 345
                yield "        <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
            <div class=\"p-6 md:p-8\">
                <h3 class=\"flex items-center pb-4 mb-5 text-lg font-semibold border-b text-slate-800 border-slate-100\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-green-100 rounded-lg\">
                        <i class=\"text-green-600 fas fa-check\"></i>
                    </div>
                    Candidats programmés
                    <span class=\"ml-auto text-sm font-normal text-slate-400\">
                        <i class=\"mr-1 fas fa-location-dot\"></i>";
                // line 353
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "lieu", [], "any", false, false, false, 353), "html", null, true);
                yield "
                    </span>
                </h3>
                <div class=\"-mx-2 overflow-x-auto\">
                    <table class=\"w-full text-sm\">
                        <thead>
                            <tr class=\"text-xs text-left uppercase border-b text-slate-400 border-slate-100\">
                                <th class=\"py-2.5 px-2\">N° Candidature</th>
                                <th class=\"py-2.5 px-2\">Candidat</th>
                                <th class=\"py-2.5 px-2\">Établissement / métier</th>
                                <th class=\"py-2.5 px-2\">Date</th>
                                <th class=\"py-2.5 px-2\">Vague</th>
                                <th class=\"py-2.5 px-2\">Jury</th>
                                <th class=\"py-2.5 px-2 text-right\">Convocation</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-slate-100\">
                            ";
                // line 370
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "planifies", [], "any", false, false, false, 370));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 371
                    yield "                            <tr class=\"transition hover:bg-slate-50\">
                                <td class=\"py-2.5 px-2 font-medium text-slate-700 whitespace-nowrap\">
                                    ";
                    // line 373
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 373), "numero", [], "any", false, false, false, 373), "html", null, true);
                    yield "
                                    ";
                    // line 374
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "reprogramme", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 375
                        yield "                                    <span class=\"ml-1 inline-flex items-center px-1.5 py-0.5 rounded text-[0.65rem] font-semibold bg-blue-100 text-blue-700\">Reprogrammé</span>
                                    ";
                    }
                    // line 377
                    yield "                                </td>
                                <td class=\"py-2.5 px-2\">
                                    <div class=\"flex items-center gap-2.5\">
                                        <div class=\"w-7 h-7 shrink-0 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center text-[0.65rem] font-bold uppercase\">
                                            ";
                    // line 381
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 381), "user", [], "any", false, false, false, 381)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 381), "user", [], "any", false, false, false, 381), "nom", [], "any", false, false, false, 381), 0, 1) . Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 381), "user", [], "any", false, false, false, 381), "prenoms", [], "any", false, false, false, 381), 0, 1)), "html", null, true)) : ("?"));
                    yield "
                                        </div>
                                        <span class=\"text-slate-700\">
                                            ";
                    // line 384
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 384), "user", [], "any", false, false, false, 384)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 384), "user", [], "any", false, false, false, 384), "nom", [], "any", false, false, false, 384) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 384), "user", [], "any", false, false, false, 384), "prenoms", [], "any", false, false, false, 384))), "html", null, true)) : ("-"));
                    yield "
                                        </span>
                                    </div>
                                </td>
                                <td class=\"py-2.5 px-2 text-slate-600\">
                                    ";
                    // line 389
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 389), "etablissement", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 389), "etablissement", [], "any", false, false, false, 389), "nom", [], "any", false, false, false, 389), "html", null, true)) : ("-"));
                    yield "<br>
                                    <span class=\"text-xs text-slate-400\">";
                    // line 390
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 390), "metier", [], "any", false, false, false, 390)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 390), "metier", [], "any", false, false, false, 390), "nom", [], "any", false, false, false, 390), "html", null, true)) : ("-"));
                    yield "</span>
                                </td>
                                <td class=\"py-2.5 px-2 text-slate-600 whitespace-nowrap\">";
                    // line 392
                    yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 392), "d/m/Y"), "html", null, true);
                    yield "</td>
                                <td class=\"py-2.5 px-2 whitespace-nowrap\">
                                    <span class=\"inline-flex items-center px-2 py-1 text-xs font-semibold text-purple-700 border border-purple-100 rounded-full bg-purple-50\">
                                        Vague ";
                    // line 395
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vague", [], "any", false, false, false, 395), "html", null, true);
                    yield " · ";
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vague", [], "any", false, false, false, 395) == 1)) ? ("08h-12h") : ("13h-15h"));
                    yield "
                                    </span>
                                </td>
                                <td class=\"py-2.5 px-2 whitespace-nowrap\">
                                    <span class=\"inline-flex items-center px-2 py-1 text-xs font-semibold rounded-full bg-slate-100 text-slate-600\">
                                        Jury ";
                    // line 400
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "jury", [], "any", false, false, false, 400), "html", null, true);
                    yield "
                                    </span>
                                </td>
                                <td class=\"py-2.5 px-2 text-right\">
                                    <a href=\"";
                    // line 404
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_imprimer_convocation", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 404), "id", [], "any", false, false, false, 404)]), "html", null, true);
                    yield "\" target=\"_blank\"
                                       class=\"inline-flex items-center px-3 py-1.5 rounded-lg bg-indigo-600 text-white text-xs font-semibold hover:bg-indigo-700 transition\">
                                        <i class=\"fas fa-print mr-1.5\"></i> Imprimer
                                    </a>
                                </td>
                            </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 411
                yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";
            }
            // line 417
            yield "
        ";
            // line 419
            yield "        ";
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 419)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_admissibles", [], "any", false, false, false, 419)) > 0)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 419)) > 0))) {
                // line 420
                yield "        <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
            <div class=\"p-6 md:p-8\">
                <h3 class=\"mb-5 text-sm font-semibold tracking-wide uppercase text-slate-400\">Rapport des candidats non traités</h3>
                <div class=\"grid grid-cols-1 gap-6 md:grid-cols-3\">
                    ";
                // line 424
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 424)) > 0)) {
                    // line 425
                    yield "                    <div class=\"p-4 border border-red-100 rounded-xl bg-red-50/50\">
                        <p class=\"flex items-center justify-between mb-3 text-sm font-semibold text-red-700\">
                            <span><i class=\"fas fa-times-circle mr-1.5\"></i> Erreurs / lignes non traitées</span>
                            <span class=\"text-xs font-bold bg-red-100 text-red-700 rounded-full px-2 py-0.5\">";
                    // line 428
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 428)), "html", null, true);
                    yield "</span>
                        </p>
                        <ul class=\"text-xs text-slate-600 space-y-1.5 max-h-40 overflow-y-auto pr-1\">
                            ";
                    // line 431
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "introuvables", [], "any", false, false, false, 431));
                    foreach ($context['_seq'] as $context["_key"] => $context["numero"]) {
                        // line 432
                        yield "                            <li class=\"px-2 py-1 font-mono border border-red-100 rounded bg-white/70\">";
                        yield (string) $this->escaper->escape($context["numero"], "html", null, true);
                        yield "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['numero'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 434
                    yield "                        </ul>
                    </div>
                    ";
                }
                // line 437
                yield "                    ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_admissibles", [], "any", false, false, false, 437)) > 0)) {
                    // line 438
                    yield "                    <div class=\"p-4 border rounded-xl border-amber-100 bg-amber-50/50\">
                        <p class=\"flex items-center justify-between mb-3 text-sm font-semibold text-amber-700\">
                            <span><i class=\"fas fa-ban mr-1.5\"></i> Non admissibles</span>
                            <span class=\"text-xs font-bold bg-amber-100 text-amber-700 rounded-full px-2 py-0.5\">";
                    // line 441
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_admissibles", [], "any", false, false, false, 441)), "html", null, true);
                    yield "</span>
                        </p>
                        <ul class=\"text-xs text-slate-600 space-y-1.5 max-h-40 overflow-y-auto pr-1\">
                            ";
                    // line 444
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "non_admissibles", [], "any", false, false, false, 444));
                    foreach ($context['_seq'] as $context["_key"] => $context["numero"]) {
                        // line 445
                        yield "                            <li class=\"px-2 py-1 font-mono border rounded bg-white/70 border-amber-100\">";
                        yield (string) $this->escaper->escape($context["numero"], "html", null, true);
                        yield "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['numero'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 447
                    yield "                        </ul>
                    </div>
                    ";
                }
                // line 450
                yield "                    ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 450)) > 0)) {
                    // line 451
                    yield "                    <div class=\"p-4 border rounded-xl border-slate-200 bg-slate-50\">
                        <p class=\"flex items-center justify-between mb-3 text-sm font-semibold text-slate-700\">
                            <span><i class=\"fas fa-hourglass-half mr-1.5\"></i> Sans créneau</span>
                            <span class=\"text-xs font-bold bg-slate-200 text-slate-700 rounded-full px-2 py-0.5\">";
                    // line 454
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 454)), "html", null, true);
                    yield "</span>
                        </p>
                        <ul class=\"text-xs text-slate-600 space-y-1.5 max-h-40 overflow-y-auto pr-1\">
                            ";
                    // line 457
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["resultats"] ?? null), "sans_creneau", [], "any", false, false, false, 457));
                    foreach ($context['_seq'] as $context["_key"] => $context["numero"]) {
                        // line 458
                        yield "                            <li class=\"px-2 py-1 font-mono bg-white border rounded border-slate-200\">";
                        yield (string) $this->escaper->escape($context["numero"], "html", null, true);
                        yield "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['numero'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 460
                    yield "                        </ul>
                    </div>
                    ";
                }
                // line 463
                yield "                </div>
            </div>
        </div>
        ";
            }
            // line 467
            yield "
    </div>
    ";
        }
        // line 470
        yield "
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 475
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 476
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, function () {
            // --- Dynamisme du champ de fichier Excel ---
            const fileInput = document.getElementById(\x27fichier_excel\x27);
            const fileNameSpan = document.getElementById(\x27file-name\x27);
            const fileStatusSpan = document.getElementById(\x27file-status\x27);
            const fileIconContainer = document.getElementById(\x27file-icon-container\x27);
            const fileIcon = document.getElementById(\x27file-icon\x27);
            const dropZone = document.getElementById(\x27drop-zone\x27);
            const fileBtnText = document.getElementById(\x27file-btn-text\x27);

            if (fileInput) {
                fileInput.addEventListener(\x27change\x27, function (e) {
                    const file = e.target.files[0];

                    if (file) {
                        const fileSize = (file.size / (1024 * 1024)).toFixed(2);
                        fileNameSpan.textContent = file.name;
                        fileNameSpan.classList.add(\x27text-indigo-700\x27, \x27font-semibold\x27);

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
                    } else {
                        fileNameSpan.innerHTML = \x27Fichier Excel des candidats éligibles <span class=\"text-red-500\">*</span>\x27;
                        fileNameSpan.classList.remove(\x27text-indigo-700\x27, \x27font-semibold\x27);

                        fileStatusSpan.textContent = \x27Formats acceptés : .xlsx, .xls, .csv\x27;
                        fileStatusSpan.classList.remove(\x27text-green-600\x27, \x27font-medium\x27);
                        fileStatusSpan.classList.add(\x27text-slate-400\x27);

                        fileIcon.className = \x27fas fa-file-arrow-up text-slate-400 group-hover:text-indigo-500 transition\x27;
                        fileIconContainer.className = \x27w-11 h-11 shrink-0 rounded-full bg-white border border-slate-200 group-hover:border-indigo-300 flex items-center justify-center\x27;
                        dropZone.className = \x27group flex items-center gap-4 rounded-xl border-2 border-dashed border-slate-300 hover:border-indigo-400 bg-slate-50 hover:bg-indigo-50/50 transition cursor-pointer p-5\x27;

                        if (fileBtnText) {
                            fileBtnText.textContent = \x27Parcourir\x27;
                            fileBtnText.className = \x27hidden sm:inline-flex items-center px-3 py-1.5 rounded-lg bg-white border border-slate-300 text-xs font-semibold text-slate-600 group-hover:border-indigo-300 group-hover:text-indigo-600 transition\x27;
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
        return "programmation_entretien/index.html.twig";
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
        return array (  906 => 476,  896 => 475,  885 => 470,  880 => 467,  874 => 463,  869 => 460,  859 => 458,  855 => 457,  849 => 454,  844 => 451,  841 => 450,  836 => 447,  826 => 445,  822 => 444,  816 => 441,  811 => 438,  808 => 437,  803 => 434,  793 => 432,  789 => 431,  783 => 428,  778 => 425,  776 => 424,  770 => 420,  767 => 419,  764 => 417,  756 => 411,  742 => 404,  735 => 400,  725 => 395,  719 => 392,  714 => 390,  710 => 389,  702 => 384,  696 => 381,  690 => 377,  686 => 375,  684 => 374,  680 => 373,  676 => 371,  672 => 370,  652 => 353,  642 => 345,  639 => 344,  636 => 342,  628 => 337,  624 => 336,  617 => 331,  615 => 330,  607 => 325,  597 => 318,  587 => 311,  577 => 304,  567 => 297,  560 => 292,  554 => 288,  550 => 287,  546 => 286,  542 => 285,  539 => 284,  530 => 276,  528 => 275,  527 => 274,  526 => 273,  516 => 265,  513 => 264,  510 => 262,  506 => 260,  497 => 254,  493 => 253,  488 => 251,  484 => 250,  477 => 245,  467 => 242,  459 => 241,  453 => 240,  447 => 239,  444 => 238,  440 => 237,  428 => 227,  426 => 226,  423 => 225,  419 => 223,  414 => 220,  402 => 219,  397 => 216,  394 => 215,  389 => 212,  377 => 211,  372 => 208,  370 => 207,  367 => 206,  365 => 205,  362 => 204,  357 => 201,  345 => 200,  340 => 197,  338 => 196,  331 => 191,  317 => 189,  313 => 188,  297 => 175,  293 => 174,  289 => 173,  285 => 172,  281 => 171,  272 => 164,  270 => 163,  231 => 126,  227 => 123,  201 => 92,  196 => 88,  190 => 86,  188 => 85,  181 => 80,  156 => 57,  150 => 53,  145 => 50,  141 => 49,  130 => 40,  99 => 10,  96 => 8,  94 => 7,  91 => 6,  81 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "programmation_entretien/index.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\programmation_entretien\\index.html.twig");
    }
}
