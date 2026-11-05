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

/* admis/search.html.twig */
class __TwigTemplate_360fd3c8f5ffbd20908ea434f5e0b9f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/search.html.twig"));

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

        yield "Inscription Définitive — Recherche";
        
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
        yield "<div class=\"max-w-4xl mx-auto pb-12\">

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
                <h1 class=\"text-xl md:text-2xl font-bold tracking-tight\">Inscription Définitive</h1>
                <p class=\"text-white/60 text-sm mt-0.5\">Recherchez et inscrivez un candidat admis</p>
            </div>
        </div>
        <a href=\"";
        // line 23
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index");
        yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-sm font-medium transition-all hover:-translate-y-0.5 w-full md:w-auto justify-center\">
            <i class=\"fas fa-arrow-left text-xs\"></i> Retour à la liste
        </a>
    </div>
</div>

";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 32
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "        ";
                $context["bg"] = ((($context["type"] == "success")) ? ("bg-green-50 border-green-200 text-green-700") : ((((($context["type"] == "error") || ($context["type"] == "danger"))) ? ("bg-red-50 border-red-200 text-red-700") : ("bg-blue-50 border-blue-200 text-blue-700"))));
                // line 34
                yield "        ";
                $context["ico"] = ((($context["type"] == "success")) ? ("check-circle") : ((((($context["type"] == "error") || ($context["type"] == "danger"))) ? ("exclamation-circle") : ("info-circle"))));
                // line 35
                yield "        <div class=\"flex items-center gap-3 px-5 py-3.5 rounded-xl border mb-5 text-sm font-medium ";
                yield (string) $this->escaper->escape(($context["bg"] ?? null), "html", null, true);
                yield "\">
            <i class=\"fas fa-";
                // line 36
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
        // line 40
        yield "
";
        // line 42
        yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-5\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center text-indigo-600\">
            <i class=\"fas fa-search text-sm\"></i>
        </div>
        <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Rechercher un candidat admis</h2>
    </div>
    <div class=\"p-6\">
        <p class=\"text-sm text-slate-500 mb-5\">
            Saisissez le numéro d\x27inscription, le nom, les prénoms, le contact ou l\x27email du candidat. La recherche se lance automatiquement à partir de 2 caractères.
        </p>
        <div class=\"flex flex-col sm:flex-row gap-3\">
            <div class=\"relative flex-1\">
                <div class=\"absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none\">
                    <i class=\"fas fa-search text-slate-400 text-sm\"></i>
                </div>
                <input type=\"text\" id=\"searchInput\"
                       placeholder=\"N° inscription, nom, contact, email…\"
                       autocomplete=\"off\"
                       class=\"w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 text-sm text-slate-700 placeholder-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition-all\">
            </div>
            <button type=\"button\" id=\"searchBtn\"
                    class=\"inline-flex items-center justify-center gap-2 px-5 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-semibold rounded-xl shadow-md shadow-indigo-200/50 hover:from-indigo-700 hover:to-purple-700 hover:-translate-y-0.5 transition-all whitespace-nowrap\">
                <i class=\"fas fa-search\"></i> Rechercher
            </button>
            <button type=\"button\" id=\"clearBtn\"
                    class=\"inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl border border-slate-200 bg-white text-slate-500 text-sm font-medium hover:bg-slate-50 transition whitespace-nowrap\">
                <i class=\"fas fa-times text-xs\"></i> Effacer
            </button>
        </div>
    </div>
</div>

";
        // line 76
        yield "<div id=\"searchResults\" class=\"hidden mb-5\">
    <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
        <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center justify-between\">
            <div class=\"flex items-center gap-3\">
                <div class=\"w-8 h-8 rounded-lg bg-purple-100 flex items-center justify-center text-purple-600\">
                    <i class=\"fas fa-list text-sm\"></i>
                </div>
                <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Résultats</h2>
            </div>
            <span id=\"resultsCount\" class=\"text-xs text-slate-400 font-medium\"></span>
        </div>
        <div id=\"resultsList\" class=\"p-4 space-y-3\"></div>
    </div>
</div>

";
        // line 92
        yield "<div id=\"inscriptionForm\" class=\"hidden space-y-5\">

    ";
        // line 95
        yield "    <div class=\"bg-emerald-50 border border-emerald-200 rounded-2xl px-5 py-4 flex items-start gap-4\">
        <div class=\"w-10 h-10 rounded-xl bg-emerald-500 flex items-center justify-center shrink-0 mt-0.5\">
            <i class=\"fas fa-user-check text-white\"></i>
        </div>
        <div id=\"selectedCandidateInfo\" class=\"flex-1 min-w-0\"></div>
        <button type=\"button\" id=\"cancelBtn\"
                class=\"inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-emerald-200 bg-white text-emerald-700 text-xs font-semibold hover:bg-emerald-50 transition shrink-0\">
            <i class=\"fas fa-exchange-alt text-[10px]\"></i> Changer
        </button>
    </div>

    ";
        // line 107
        yield "    <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
        <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
            <div class=\"w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600\">
                <i class=\"fas fa-id-card text-sm\"></i>
            </div>
            <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Confirmation des informations</h2>
        </div>
        <div class=\"p-6\">
            <input type=\"hidden\" id=\"selectedCandidatureId\">

            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-5\">
                ";
        // line 119
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">
                        Nom <span class=\"text-red-500\">*</span>
                    </label>
                    <input type=\"text\" id=\"confirmNom\" required
                           class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition\">
                </div>
                ";
        // line 127
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">
                        Prénoms <span class=\"text-red-500\">*</span>
                    </label>
                    <input type=\"text\" id=\"confirmPrenoms\" required
                           class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition\">
                </div>
                ";
        // line 135
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">
                        Contact <span class=\"text-red-500\">*</span>
                    </label>
                    <input type=\"text\" id=\"confirmContact\" required
                           placeholder=\"Numéro de téléphone ou WhatsApp\"
                           class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm font-mono text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition\">
                </div>
                ";
        // line 144
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">Date de naissance</label>
                    <input type=\"date\" id=\"confirmDateNaissance\"
                           class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition\">
                </div>
                ";
        // line 150
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">Lieu de naissance</label>
                    <input type=\"text\" id=\"confirmLieuNaissance\"
                           class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition\">
                </div>
                ";
        // line 156
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">Type de pièce d\x27identité</label>
                    <select id=\"confirmPieceIdentite\"
                            class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition bg-white\">
                        <option value=\"\">Sélectionner…</option>
                        <option value=\"CNI\">Carte nationale d\x27identité</option>
                        <option value=\"PASSEPORT\">Passeport</option>
                        <option value=\"PERMIS\">Permis de conduire</option>
                        <option value=\"AUTRE\">Autre</option>
                    </select>
                </div>
                ";
        // line 168
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">N° de la pièce</label>
                    <input type=\"text\" id=\"confirmNumeroPiece\"
                           class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm font-mono text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition\">
                </div>
                ";
        // line 174
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">Dernier diplôme</label>
                    <input type=\"text\" id=\"confirmDiplome\"
                           class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition\">
                </div>
                ";
        // line 180
        yield "                <div>
                    <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2\">Niveau d\x27étude</label>
                    <select id=\"confirmNiveauEtude\"
                            class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition bg-white\">
                        <option value=\"\">Sélectionner…</option>
                        <option value=\"PRIMAIRE\">Primaire</option>
                        <option value=\"SECONDAIRE\">Secondaire</option>
                        <option value=\"SUPERIEUR\">Supérieur</option>
                        <option value=\"PROFESSIONNEL\">Professionnel</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 196
        yield "    <div class=\"bg-white rounded-2xl shadow-sm border border-amber-200 overflow-hidden\">
        <div class=\"px-6 py-4 border-b border-amber-100 bg-amber-50/60 flex items-center gap-3\">
            <div class=\"w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600\">
                <i class=\"fas fa-handshake text-sm\"></i>
            </div>
            <h2 class=\"text-sm font-semibold text-amber-800 uppercase tracking-wider\">Engagement du candidat</h2>
        </div>
        <div class=\"p-6\">
            <label class=\"flex items-start gap-3 cursor-pointer group\">
                <div class=\"relative mt-0.5 shrink-0\">
                    <input type=\"checkbox\" id=\"confirmEngagement\" required class=\"peer sr-only\">
                    <div class=\"w-5 h-5 rounded-md border-2 border-slate-300 bg-white group-hover:border-amber-400 peer-checked:bg-amber-500 peer-checked:border-amber-500 transition-all flex items-center justify-center\">
                        <i class=\"fas fa-check text-white text-[9px]\"></i>
                    </div>
                </div>
                <div>
                    <p class=\"text-sm font-semibold text-slate-800 leading-snug\">
                        Le candidat confirme vouloir poursuivre la formation jusqu\x27au bout <span class=\"text-red-500\">*</span>
                    </p>
                    <p class=\"text-xs text-slate-500 mt-1 leading-relaxed\">
                        En cochant cette case, le candidat s\x27engage à suivre assidûment la formation et à respecter le règlement intérieur de l\x27établissement.
                    </p>
                </div>
            </label>
        </div>
    </div>

    ";
        // line 224
        yield "    <div class=\"flex flex-col sm:flex-row items-center justify-between gap-3 py-2\">
        <button type=\"button\" id=\"cancelBtn2\"
                class=\"inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-500 text-sm font-medium hover:bg-slate-50 transition w-full sm:w-auto justify-center\">
            <i class=\"fas fa-arrow-left text-xs\"></i> Nouvelle recherche
        </button>
        <button type=\"button\" id=\"submitInscription\"
                class=\"inline-flex items-center gap-2 px-8 py-2.5 bg-gradient-to-r from-emerald-500 to-green-500 text-white text-sm font-bold rounded-xl shadow-md shadow-emerald-200/60 hover:from-emerald-600 hover:to-green-600 hover:-translate-y-0.5 transition-all w-full sm:w-auto justify-center\">
            <i class=\"fas fa-user-graduate\"></i> Inscrire définitivement
        </button>
    </div>

</div>

</div>

";
        // line 239
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 432
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 240
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
(function () {
    let searchTimeout = null;
    let selectedCandidate = null;

    const searchInput   = document.getElementById(\x27searchInput\x27);
    const searchBtn     = document.getElementById(\x27searchBtn\x27);
    const clearBtn      = document.getElementById(\x27clearBtn\x27);
    const cancelBtn     = document.getElementById(\x27cancelBtn\x27);
    const cancelBtn2    = document.getElementById(\x27cancelBtn2\x27);
    const submitBtn     = document.getElementById(\x27submitInscription\x27);
    const searchResults = document.getElementById(\x27searchResults\x27);
    const resultsList   = document.getElementById(\x27resultsList\x27);
    const resultsCount  = document.getElementById(\x27resultsCount\x27);
    const inscriptionForm = document.getElementById(\x27inscriptionForm\x27);
    const selectedInfo  = document.getElementById(\x27selectedCandidateInfo\x27);

    /* ---- Recherche ---- */
    searchInput.addEventListener(\x27input\x27, function () {
        clearTimeout(searchTimeout);
        const q = this.value.trim();
        if (q.length >= 2) searchTimeout = setTimeout(() => performSearch(q), 300);
        else searchResults.classList.add(\x27hidden\x27);
    });

    searchBtn.addEventListener(\x27click\x27, function () {
        const q = searchInput.value.trim();
        if (q.length >= 2) performSearch(q);
    });

    searchInput.addEventListener(\x27keydown\x27, function (e) {
        if (e.key === \x27Enter\x27) { e.preventDefault(); searchBtn.click(); }
    });

    clearBtn.addEventListener(\x27click\x27, resetAll);
    cancelBtn.addEventListener(\x27click\x27, resetAll);
    cancelBtn2.addEventListener(\x27click\x27, resetAll);

    function resetAll() {
        searchInput.value = \x27\x27;
        selectedCandidate = null;
        searchResults.classList.add(\x27hidden\x27);
        inscriptionForm.classList.add(\x27hidden\x27);
        resultsList.innerHTML = \x27\x27;
    }

    // Les données des candidats ne doivent jamais être interprétées comme du HTML.
    const esc = (v) => String(v ?? \x27\x27).replace(/[&<>\"\x27]/g, (ch) => ({\x27&\x27: \x27&amp;\x27, \x27<\x27: \x27&lt;\x27, \x27>\x27: \x27&gt;\x27, \x27\"\x27: \x27&quot;\x27, \"\x27\": \x27&#39;\x27}[ch]));

    function performSearch(q) {
        resultsList.innerHTML = `
            <div class=\"flex items-center gap-3 p-4 text-sm text-slate-400\">
                <i class=\"fas fa-spinner fa-spin text-indigo-500\"></i> Recherche en cours…
            </div>`;
        searchResults.classList.remove(\x27hidden\x27);

        fetch(\x27";
        // line 297
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_search_api");
        yield "?q=\x27 + encodeURIComponent(q))
            .then(r => r.json())
            .then(results => displayResults(results))
            .catch(() => {
                resultsList.innerHTML = `<p class=\"p-4 text-sm text-red-500\">Erreur lors de la recherche.</p>`;
            });
    }

    function displayResults(results) {
        resultsCount.textContent = results.length + \x27 résultat(s)\x27;

        if (results.length === 0) {
            resultsList.innerHTML = `
                <div class=\"flex flex-col items-center py-10 text-slate-400\">
                    <i class=\"fas fa-search text-3xl mb-3 opacity-40\"></i>
                    <p class=\"text-sm font-medium\">Aucun candidat trouvé</p>
                    <p class=\"text-xs mt-1\">Essayez avec un autre terme de recherche</p>
                </div>`;
            return;
        }

        resultsList.innerHTML = results.map((c, i) => `
            <div class=\"border border-slate-200 rounded-xl p-4 hover:border-indigo-300 hover:bg-indigo-50/30 transition-all cursor-pointer group\"
                 data-resultat=\"\${i}\">
                <div class=\"flex items-center justify-between gap-4\">
                    <div class=\"flex items-center gap-3 min-w-0\">
                        <div class=\"w-9 h-9 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0\">
                            <i class=\"fas fa-user text-emerald-600 text-xs\"></i>
                        </div>
                        <div class=\"min-w-0\">
                            <p class=\"text-sm font-bold text-slate-800 truncate\">
                                <span class=\"font-mono text-indigo-600 mr-2\">\${esc(c.numero)}</span>\${esc(c.nom)} \${esc(c.prenoms)}
                            </p>
                            <p class=\"text-xs text-slate-400 mt-0.5 truncate\">
                                <i class=\"fas fa-phone mr-1\"></i>\${esc(c.contact || \x27—\x27)} &nbsp;·&nbsp;
                                <i class=\"fas fa-briefcase mr-1\"></i>\${esc(c.metier)} &nbsp;·&nbsp;
                                <i class=\"fas fa-school mr-1\"></i>\${esc(c.etablissement)}
                            </p>
                        </div>
                    </div>
                    <button type=\"button\"
                            class=\"shrink-0 inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-600 border border-indigo-100 text-xs font-bold group-hover:bg-indigo-600 group-hover:text-white transition-all\">
                        <i class=\"fas fa-check text-[10px]\"></i> Sélectionner
                    </button>
                </div>
            </div>
        `).join(\x27\x27);
        resultsList.querySelectorAll(\x27[data-resultat]\x27).forEach((el) => {
            el.addEventListener(\x27click\x27, () => selectCandidate(results[Number(el.dataset.resultat)]));
        });

        searchResults.classList.remove(\x27hidden\x27);
    }

    function selectCandidate(c) {
        selectedCandidate = c;

        selectedInfo.innerHTML = `
            <div>
                <p class=\"text-sm font-bold text-emerald-800 mb-1\">
                    <span class=\"font-mono bg-emerald-100 px-2 py-0.5 rounded text-xs mr-2\">\${esc(c.numero)}</span>
                    \${esc(c.nom)} \${esc(c.prenoms)}
                </p>
                <p class=\"text-xs text-emerald-700\">
                    <i class=\"fas fa-phone mr-1\"></i>\${esc(c.contact || \x27—\x27)} &nbsp;·&nbsp;
                    <i class=\"fas fa-briefcase mr-1\"></i>\${esc(c.metier)} &nbsp;·&nbsp;
                    <i class=\"fas fa-school mr-1\"></i>\${esc(c.etablissement)}
                </p>
            </div>`;

        document.getElementById(\x27selectedCandidatureId\x27).value = c.id;
        document.getElementById(\x27confirmNom\x27).value = c.nom || \x27\x27;
        document.getElementById(\x27confirmPrenoms\x27).value = c.prenoms || \x27\x27;
        document.getElementById(\x27confirmContact\x27).value = c.contact || \x27\x27;

        searchResults.classList.add(\x27hidden\x27);
        inscriptionForm.classList.remove(\x27hidden\x27);
        inscriptionForm.scrollIntoView({ behavior: \x27smooth\x27, block: \x27start\x27 });
    }

    /* ---- Soumission ---- */
    submitBtn.addEventListener(\x27click\x27, function () {
        if (!selectedCandidate) { alert(\x27Veuillez sélectionner un candidat.\x27); return; }
        if (!document.getElementById(\x27confirmEngagement\x27).checked) {
            alert(\x27Veuillez cocher la case d\\\x27engagement.\x27); return;
        }
        if (!confirm(\x27Inscrire définitivement ce candidat ?\\n\\nCette action est irréversible.\x27)) return;

        const payload = {
            candidatureId:  selectedCandidate.id,
            nom:            document.getElementById(\x27confirmNom\x27).value,
            prenoms:        document.getElementById(\x27confirmPrenoms\x27).value,
            contact:        document.getElementById(\x27confirmContact\x27).value,
            dateNaissance:  document.getElementById(\x27confirmDateNaissance\x27).value,
            lieuNaissance:  document.getElementById(\x27confirmLieuNaissance\x27).value,
            pieceIdentite:  document.getElementById(\x27confirmPieceIdentite\x27).value,
            numeroPiece:    document.getElementById(\x27confirmNumeroPiece\x27).value,
            diplome:        document.getElementById(\x27confirmDiplome\x27).value,
            niveauEtude:    document.getElementById(\x27confirmNiveauEtude\x27).value,
            confirme:       true,
        };

        submitBtn.disabled = true;
        submitBtn.innerHTML = \x27<i class=\"fas fa-spinner fa-spin mr-2\"></i> Enregistrement…\x27;

        fetch(\x27";
        // line 402
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_inscription");
        yield "\x27, {
            method: \x27POST\x27,
            headers: { \x27Content-Type\x27: \x27application/json\x27, \x27X-Requested-With\x27: \x27XMLHttpRequest\x27 },
            body: JSON.stringify(payload),
        })
        .then(r => r.json())
        .then(data => {
            if (data.success) {
                alert(\x27Inscription enregistrée !\\nN° inscription : \x27 + data.numeroInscription);
                window.location.href = \x27";
        // line 411
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index");
        yield "\x27;
            } else {
                alert(\x27Erreur : \x27 + (data.message || \x27Erreur inconnue\x27));
                submitBtn.disabled = false;
                submitBtn.innerHTML = \x27<i class=\"fas fa-user-graduate mr-2\"></i> Inscrire définitivement\x27;
            }
        })
        .catch(() => {
            alert(\x27Erreur réseau, veuillez réessayer.\x27);
            submitBtn.disabled = false;
            submitBtn.innerHTML = \x27<i class=\"fas fa-user-graduate mr-2\"></i> Inscrire définitivement\x27;
        });
    });

    ";
        // line 426
        yield "    const urlParams = new URLSearchParams(window.location.search);
    const q = urlParams.get(\x27q\x27);
    if (q) { searchInput.value = q; performSearch(q); }
})();
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
        return "admis/search.html.twig";
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
        return array (  593 => 426,  576 => 411,  564 => 402,  456 => 297,  396 => 240,  386 => 239,  377 => 432,  375 => 239,  358 => 224,  329 => 196,  312 => 180,  305 => 174,  298 => 168,  285 => 156,  278 => 150,  271 => 144,  261 => 135,  252 => 127,  243 => 119,  230 => 107,  217 => 95,  213 => 92,  196 => 76,  161 => 42,  158 => 40,  141 => 36,  136 => 35,  133 => 34,  130 => 33,  125 => 32,  121 => 31,  111 => 23,  95 => 9,  91 => 6,  81 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/search.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\search.html.twig");
    }
}
