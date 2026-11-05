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

/* candidature/stat.html.twig */
class __TwigTemplate_787ac9f69da55ca26661bf1995e22a7d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/stat.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Statistiques détaillées | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .stat-card {
        transition: all 0.3s ease;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .chart-container {
        position: relative;
        height: 250px;
        width: 100%;
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        yield "<div class=\"mx-auto px-4 pb-16\">
        <div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 mb-8 text-white\">
            <form method=\"get\" action=\"";
        // line 26
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_stat");
        yield "\" class=\"flex flex-wrap gap-4 items-end\">
                <div class=\"flex-1 min-w-[200px] relative\"
                     x-data=\"{
                        open: false,
                        search: \x27";
        // line 30
        yield (string) (((($tmp = ($context["etablissement_selectionne"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement_selectionne"] ?? null), "nom", [], "any", false, false, false, 30), "js"), "html", null, true)) : (""));
        yield "\x27,
                        selectedValue: \x27";
        // line 31
        yield (string) (((($tmp = ($context["etablissement_selectionne"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement_selectionne"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true)) : (""));
        yield "\x27,
                        highlightIndex: -1,
                        items: [
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["etab"]) {
            // line 35
            yield "                            { id: \x27";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etab"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\x27, nom: \x27";
            yield (string) $this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etab"], "nom", [], "any", false, false, false, 35), "js"), "html", null, true);
            yield "\x27 }";
            yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (",") : (""));
            yield "
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
        unset($context['_seq'], $context['_key'], $context['etab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 37
        yield "                        ],
                        get filtered() {
                            if (!this.search) return this.items;
                            const s = this.search.toLowerCase();
                            return this.items.filter(i => i.nom.toLowerCase().includes(s));
                        },
                        select(item) {
                            this.selectedValue = item ? item.id : \x27\x27;
                            this.search = item ? item.nom : \x27\x27;
                            this.open = false;
                            this.highlightIndex = -1;
                            this.loadMetiers(this.selectedValue);
                        },
                        clear() {
                            this.selectedValue = \x27\x27;
                            this.search = \x27\x27;
                            this.open = false;
                            this.highlightIndex = -1;
                            this.loadMetiers(\x27\x27);
                        },
                        onArrowDown() {
                            if (!this.open) { this.open = true; return; }
                            if (this.highlightIndex < this.filtered.length - 1) this.highlightIndex++;
                            this.\$nextTick(() => {
                                const el = this.\$refs.listbox?.children[this.highlightIndex];
                                if (el) el.scrollIntoView({ block: \x27nearest\x27 });
                            });
                        },
                        onArrowUp() {
                            if (this.highlightIndex > 0) this.highlightIndex--;
                            this.\$nextTick(() => {
                                const el = this.\$refs.listbox?.children[this.highlightIndex];
                                if (el) el.scrollIntoView({ block: \x27nearest\x27 });
                            });
                        },
                        onEnter() {
                            if (this.highlightIndex >= 0 && this.highlightIndex < this.filtered.length) {
                                this.select(this.filtered[this.highlightIndex]);
                            }
                        },
                        loadMetiers(etabId) {
                            const metierFilter = document.getElementById(\x27metier-filter\x27);
                            if (!metierFilter) return;
                            if (etabId) {
                                metierFilter.disabled = false;
                                fetch(\x27/candidature/stat/etablissement/\x27 + etabId + \x27/metiers\x27)
                                    .then(r => r.json())
                                    .then(metiers => {
                                        metierFilter.innerHTML = \x27<option value=&quot;&quot;>Tous les m\\u00e9tiers</option>\x27;
                                        metiers.forEach(m => {
                                            const opt = document.createElement(\x27option\x27);
                                            opt.value = m.id;
                                            opt.textContent = m.nom;
                                            metierFilter.appendChild(opt);
                                        });
                                    });
                            } else {
                                metierFilter.disabled = true;
                                metierFilter.innerHTML = \x27<option value=&quot;&quot;>Tous les m\\u00e9tiers</option>\x27;
                            }
                        }
                     }\"
                     @click.outside=\"open = false\"
                     @keydown.escape=\"open = false\">
                    <label class=\"block text-sm font-medium text-white/80 mb-1\">Établissement</label>
                    
                    ";
        // line 104
        yield "                    <input type=\"hidden\" name=\"etablissement\" :value=\"selectedValue\">
                    
                    ";
        // line 107
        yield "                    <div class=\"relative\">
                        <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                            <i class=\"fas fa-search text-white/50 text-xs\"></i>
                        </div>
                        <input type=\"text\"
                               x-model=\"search\"
                               @focus=\"open = true\"
                               @input=\"open = true; highlightIndex = -1; if(!search) { selectedValue = \x27\x27; loadMetiers(\x27\x27); }\"
                               @keydown.arrow-down.prevent=\"onArrowDown()\"
                               @keydown.arrow-up.prevent=\"onArrowUp()\"
                               @keydown.enter.prevent=\"onEnter()\"
                               placeholder=\"Rechercher un établissement...\"
                               autocomplete=\"off\"
                               class=\"w-full pl-9 pr-8 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/60 text-sm transition\">
                        
                        ";
        // line 123
        yield "                        <button type=\"button\"
                                x-show=\"selectedValue || search\"
                                @click=\"clear()\"
                                class=\"absolute inset-y-0 right-0 pr-3 flex items-center text-white/50 hover:text-white transition\">
                            <i class=\"fas fa-times text-xs\"></i>
                        </button>
                    </div>
                    
                    ";
        // line 132
        yield "                    <div x-show=\"open && filtered.length > 0\"
                         x-transition:enter=\"transition ease-out duration-150\"
                         x-transition:enter-start=\"opacity-0 -translate-y-1\"
                         x-transition:enter-end=\"opacity-100 translate-y-0\"
                         x-transition:leave=\"transition ease-in duration-100\"
                         x-transition:leave-start=\"opacity-100 translate-y-0\"
                         x-transition:leave-end=\"opacity-0 -translate-y-1\"
                         class=\"absolute z-50 mt-1 w-full bg-white rounded-xl shadow-2xl border border-slate-200 max-h-60 overflow-y-auto\">
                        <ul x-ref=\"listbox\" class=\"py-1\">
                            ";
        // line 142
        yield "                            <li @click=\"clear(); \$event.stopPropagation();\"
                                class=\"px-4 py-2.5 text-sm text-slate-400 italic cursor-pointer hover:bg-indigo-50 hover:text-indigo-600 transition-colors\">
                                Tous les établissements
                            </li>
                            <template x-for=\"(item, index) in filtered\" :key=\"item.id\">
                                <li @click=\"select(item)\"
                                    :class=\"{
                                        \x27bg-indigo-50 text-indigo-700\x27: highlightIndex === index,
                                        \x27text-slate-700\x27: highlightIndex !== index
                                    }\"
                                    class=\"px-4 py-2.5 text-sm cursor-pointer hover:bg-indigo-50 hover:text-indigo-700 transition-colors\"
                                    x-text=\"item.nom\">
                                </li>
                            </template>
                        </ul>
                    </div>
                    
                    ";
        // line 160
        yield "                    <div x-show=\"open && search && filtered.length === 0\"
                         class=\"absolute z-50 mt-1 w-full bg-white rounded-xl shadow-2xl border border-slate-200 px-4 py-3\">
                        <p class=\"text-sm text-slate-400 flex items-center\">
                            <i class=\"fas fa-search mr-2\"></i>
                            Aucun établissement trouvé pour \"<span x-text=\"search\" class=\"font-medium text-slate-500\"></span>\"
                        </p>
                    </div>
                </div>
                
                <div class=\"flex-1 min-w-[200px]\">
                    <label class=\"block text-sm font-medium text-white/80 mb-1\">Métier</label>
                    <select name=\"metier\" id=\"metier-filter\" class=\"w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-white\" ";
        // line 171
        yield (string) (( !(($tmp = ($context["etablissement_selectionne"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield ">
                        <option value=\"\" class=\"text-slate-900\">Tous les métiers</option>
                        ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 174
            yield "                            <option value=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 174), "html", null, true);
            yield "\" class=\"text-slate-900\" 
                                ";
            // line 175
            yield (string) ((((($tmp = ($context["metier_selectionne"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["metier_selectionne"] ?? null), "id", [], "any", false, false, false, 175) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 175)))) ? ("selected") : (""));
            yield ">
                                ";
            // line 176
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 176), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 179
        yield "                    </select>
                </div>
                
                <div class=\"flex gap-2\">
                    <button type=\"submit\" class=\"px-6 py-2 bg-white text-indigo-600 rounded-lg hover:bg-indigo-50 transition font-medium\">
                        <i class=\"fas fa-filter mr-2\"></i>Filtrer
                    </button>
                    
                    <a href=\"";
        // line 187
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_stat", ["export" => "true", "etablissement" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement_selectionne"] ?? null), "id", [], "any", true, true, false, 187)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement_selectionne"] ?? null), "id", [], "any", false, false, false, 187))) : ("")), "metier" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["metier_selectionne"] ?? null), "id", [], "any", true, true, false, 187)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["metier_selectionne"] ?? null), "id", [], "any", false, false, false, 187))) : (""))]), "html", null, true);
        yield "\" 
                       class=\"px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-medium inline-flex items-center\">
                        <i class=\"fas fa-file-excel mr-2\"></i>Exporter
                    </a>
                    
                    <a href=\"";
        // line 192
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_stat");
        yield "\" class=\"px-6 py-2 bg-slate-600 text-white rounded-lg hover:bg-slate-700 transition font-medium inline-flex items-center\">
                        <i class=\"fas fa-undo mr-2\"></i>Réinitialiser
                    </a>
                </div>
            </form>
        </div>

    <!-- Cartes de résumé -->
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 mb-8\">
        <div class=\"bg-white rounded-xl shadow-lg p-6 border-l-4 border-indigo-500 stat-card\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-slate-500 mb-1\">Total candidatures</p>
                    <p class=\"text-3xl font-bold text-indigo-600\">";
        // line 205
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 205), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center\">
                    <i class=\"fas fa-users text-indigo-600 text-xl\"></i>
                </div>
            </div>
        </div>
        
        <div class=\"bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500 stat-card\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-slate-500 mb-1\">Éligibles</p>
                    <p class=\"text-3xl font-bold text-green-600\">";
        // line 217
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "eligible", [], "any", false, false, false, 217), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-slate-400\">";
        // line 218
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 218) > 0)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "eligible", [], "any", false, false, false, 218) / CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 218)) * 100), 1), "html", null, true)) : (0));
        yield "%</p>
                </div>
                <div class=\"w-12 h-12 bg-green-100 rounded-full flex items-center justify-center\">
                    <i class=\"fas fa-check-circle text-green-600 text-xl\"></i>
                </div>
            </div>
        </div>
        
        <div class=\"bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500 stat-card\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-slate-500 mb-1\">Évalués</p>
                    <p class=\"text-3xl font-bold text-blue-600\">";
        // line 230
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "evalue", [], "any", false, false, false, 230), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-slate-400\">";
        // line 231
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 231) > 0)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "evalue", [], "any", false, false, false, 231) / CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 231)) * 100), 1), "html", null, true)) : (0));
        yield "%</p>
                </div>
                <div class=\"w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center\">
                    <i class=\"fas fa-clipboard-check text-blue-600 text-xl\"></i>
                </div>
            </div>
        </div>
        
        <div class=\"bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-500 stat-card\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-slate-500 mb-1\">Admissibles</p>
                    <p class=\"text-3xl font-bold text-yellow-600\">";
        // line 243
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "admissible", [], "any", false, false, false, 243), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-slate-400\">";
        // line 244
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 244) > 0)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "admissible", [], "any", false, false, false, 244) / CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 244)) * 100), 1), "html", null, true)) : (0));
        yield "%</p>
                </div>
                <div class=\"w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center\">
                    <i class=\"fas fa-star text-yellow-600 text-xl\"></i>
                </div>
            </div>
        </div>
        
        <div class=\"bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500 stat-card\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-slate-500 mb-1\">Admis</p>
                    <p class=\"text-3xl font-bold text-purple-600\">";
        // line 256
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "admis", [], "any", false, false, false, 256), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-slate-400\">";
        // line 257
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 257) > 0)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "admis", [], "any", false, false, false, 257) / CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 257)) * 100), 1), "html", null, true)) : (0));
        yield "%</p>
                </div>
                <div class=\"w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center\">
                    <i class=\"fas fa-graduation-cap text-purple-600 text-xl\"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Cartes Prospection -->
    ";
        // line 267
        if (array_key_exists("prospection_totals", $context)) {
            // line 268
            yield "    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mb-8\">
        <div class=\"bg-white rounded-xl shadow-lg p-6 border-l-4 border-teal-500 stat-card\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-slate-500 mb-1\">Entreprises prospectées</p>
                    <p class=\"text-3xl font-bold text-teal-600\">";
            // line 273
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["prospection_totals"] ?? null), "nb_entreprises", [], "any", false, false, false, 273), "html", null, true);
            yield "</p>
                </div>
                <div class=\"w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center\">
                    <i class=\"fas fa-building text-teal-600 text-xl\"></i>
                </div>
            </div>
        </div>
        <div class=\"bg-white rounded-xl shadow-lg p-6 border-l-4 border-orange-500 stat-card\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-slate-500 mb-1\">Postes d\x27apprentissage trouvés</p>
                    <p class=\"text-3xl font-bold text-orange-600\">";
            // line 284
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["prospection_totals"] ?? null), "total_postes", [], "any", false, false, false, 284), "html", null, true);
            yield "</p>
                </div>
                <div class=\"w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center\">
                    <i class=\"fas fa-briefcase text-orange-600 text-xl\"></i>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 293
        yield "
    <!-- Graphiques circulaires -->
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-6 mb-8\">
        <!-- Répartition par sexe -->
        <div class=\"bg-white rounded-2xl shadow-xl p-6\">
            <h3 class=\"text-lg font-semibold text-slate-800 mb-4 flex items-center\">
                <div class=\"w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center mr-3\">
                    <i class=\"fas fa-venus-mars text-indigo-600\"></i>
                </div>
                Répartition par sexe
            </h3>
            <div class=\"chart-container\">
                <canvas id=\"genderChart\"></canvas>
            </div>
            <div class=\"flex justify-center gap-6 mt-4\">
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-blue-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Hommes: ";
        // line 310
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "hommes", [], "any", false, false, false, 310), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-pink-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Femmes: ";
        // line 314
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "femmes", [], "any", false, false, false, 314), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        <!-- Statut des dossiers -->
        <div class=\"bg-white rounded-2xl shadow-xl p-6\">
            <h3 class=\"text-lg font-semibold text-slate-800 mb-4 flex items-center\">
                <div class=\"w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3\">
                    <i class=\"fas fa-file-alt text-green-600\"></i>
                </div>
                Statut des dossiers
            </h3>
            <div class=\"chart-container\">
                <canvas id=\"dossierChart\"></canvas>
            </div>
            <div class=\"flex flex-wrap justify-center gap-4 mt-4\">
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-green-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Éligible: ";
        // line 333
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "eligible", [], "any", false, false, false, 333), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-red-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Non éligible: ";
        // line 337
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "non_eligible", [], "any", false, false, false, 337), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        <!-- État d\x27évaluation -->
        <div class=\"bg-white rounded-2xl shadow-xl p-6\">
            <h3 class=\"text-lg font-semibold text-slate-800 mb-4 flex items-center\">
                <div class=\"w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3\">
                    <i class=\"fas fa-clipboard-list text-blue-600\"></i>
                </div>
                État d\x27évaluation
            </h3>
            <div class=\"chart-container\">
                <canvas id=\"evaluationChart\"></canvas>
            </div>
            <div class=\"flex flex-wrap justify-center gap-4 mt-4\">
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-blue-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Évalué: ";
        // line 356
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "evalue", [], "any", false, false, false, 356), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-amber-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Non évalué: ";
        // line 360
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "non_evalue", [], "any", false, false, false, 360), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        <!-- Progression vers l\x27admission -->
        <div class=\"bg-white rounded-2xl shadow-xl p-6\">
            <h3 class=\"text-lg font-semibold text-slate-800 mb-4 flex items-center\">
                <div class=\"w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3\">
                    <i class=\"fas fa-chart-line text-purple-600\"></i>
                </div>
                Progression vers l\x27admission
            </h3>
            <div class=\"chart-container\">
                <canvas id=\"admissionChart\"></canvas>
            </div>
            <div class=\"flex flex-wrap justify-center gap-4 mt-4\">
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-green-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Admis: ";
        // line 379
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "admis", [], "any", false, false, false, 379), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-yellow-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Admissible: ";
        // line 383
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "admissible", [], "any", false, false, false, 383), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center\">
                    <span class=\"w-3 h-3 bg-red-500 rounded-full mr-2\"></span>
                    <span class=\"text-sm\">Autres: ";
        // line 387
        yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 387) - CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "admissible", [], "any", false, false, false, 387)), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Tableau détaillé -->
    <div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden mb-5 mx-4\">
        <div class=\"px-6 py-4 bg-slate-50 border-b border-slate-200 flex justify-between items-center\">
            <h3 class=\"text-lg font-semibold text-slate-800\">
                <i class=\"fas fa-list mr-2 text-indigo-600\"></i>
                Détail par établissement et métier
            </h3>
            <span class=\"text-sm text-slate-500\">";
        // line 401
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["stats"] ?? null)), "html", null, true);
        yield " ligne(s)</span>
        </div>
        
        <div class=\"overflow-x-auto\">
            <table class=\"w-full\">
                <thead class=\"bg-slate-50 border-b border-slate-200\">
                    <tr>
                        <th class=\"px-4 py-3 text-left text-xs font-semibold text-slate-600 uppercase\">Établissement</th>
                        <th class=\"px-4 py-3 text-left text-xs font-semibold text-slate-600 uppercase\">Métier</th>
                        <th class=\"px-4 py-3 text-center text-xs font-semibold text-slate-600 uppercase\">Total</th>
                        <th class=\"px-4 py-3 text-center text-xs font-semibold text-slate-600 uppercase\">H</th>
                        <th class=\"px-4 py-3 text-center text-xs font-semibold text-slate-600 uppercase\">F</th>
                        <th class=\"px-4 py-3 text-center text-xs font-semibold text-slate-600 uppercase\">Éligible</th>
                        <th class=\"px-4 py-3 text-center text-xs font-semibold text-slate-600 uppercase\">Évalué</th>
                        <th class=\"px-4 py-3 text-center text-xs font-semibold text-slate-600 uppercase\">Admissible</th>
                        <th class=\"px-4 py-3 text-center text-xs font-semibold text-slate-600 uppercase\">Admis</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-200\">
                    ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stats"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 421
            yield "                    <tr class=\"hover:bg-slate-50 transition\">
                        <td class=\"px-4 py-3 text-sm font-medium text-slate-800\">";
            // line 422
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "etablissement_nom", [], "any", false, false, false, 422), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-sm text-slate-600\">";
            // line 423
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "metier_nom", [], "any", false, false, false, 423), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-sm text-center font-semibold text-indigo-600\">";
            // line 424
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "total", [], "any", false, false, false, 424), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-sm text-center text-slate-600\">";
            // line 425
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "hommes", [], "any", false, false, false, 425), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-sm text-center text-slate-600\">";
            // line 426
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "femmes", [], "any", false, false, false, 426), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-sm text-center ";
            // line 427
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "eligible", [], "any", false, false, false, 427) > 0)) {
                yield "text-green-600 font-semibold";
            } else {
                yield "text-slate-600";
            }
            yield "\">
                            ";
            // line 428
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "eligible", [], "any", false, false, false, 428), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-4 py-3 text-sm text-center ";
            // line 430
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "evalue", [], "any", false, false, false, 430) > 0)) {
                yield "text-blue-600 font-semibold";
            } else {
                yield "text-slate-600";
            }
            yield "\">
                            ";
            // line 431
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "evalue", [], "any", false, false, false, 431), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-4 py-3 text-sm text-center ";
            // line 433
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "admissible", [], "any", false, false, false, 433) > 0)) {
                yield "text-yellow-600 font-semibold";
            } else {
                yield "text-slate-600";
            }
            yield "\">
                            ";
            // line 434
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "admissible", [], "any", false, false, false, 434), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-4 py-3 text-sm text-center ";
            // line 436
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "admis", [], "any", false, false, false, 436) > 0)) {
                yield "text-purple-600 font-semibold";
            } else {
                yield "text-slate-600";
            }
            yield "\">
                            ";
            // line 437
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "admis", [], "any", false, false, false, 437), "html", null, true);
            yield "
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 440
        if (!$context['_iterated']) {
            // line 441
            yield "                    <tr>
                        <td colspan=\"9\" class=\"px-4 py-8 text-center text-slate-500\">
                            <i class=\"fas fa-chart-bar text-4xl mb-3 opacity-50\"></i>
                            <p>Aucune donnée disponible</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 448
        yield "                </tbody>
            </table>
        </div>
    </div>



</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 458
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 459
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"";
        // line 460
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart-3.9.1.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 461
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tom-select-2.2.2.complete.min.js"), "html", null, true);
        yield "\"></script>
<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
    // Données pour les graphiques
    const totals = ";
        // line 465
        yield (string) json_encode(($context["totals"] ?? null));
        yield ";
    
    // Graphique 1: Répartition par sexe
    new Chart(document.getElementById(\x27genderChart\x27), {
        type: \x27pie\x27,
        data: {
            labels: [\x27Hommes\x27, \x27Femmes\x27],
            datasets: [{
                data: [totals.hommes, totals.femmes],
                backgroundColor: [\x27#3b82f6\x27, \x27#ec4899\x27],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            }
        }
    });
    
    // Graphique 2: Statut des dossiers (Éligible vs Non éligible)
    new Chart(document.getElementById(\x27dossierChart\x27), {
        type: \x27doughnut\x27,
        data: {
            labels: [\x27Éligible\x27, \x27Non éligible\x27],
            datasets: [{
                data: [totals.eligible, totals.non_eligible],
                backgroundColor: [\x27#10b981\x27, \x27#ef4444\x27],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            cutout: \x2760%\x27
        }
    });
    
    // Graphique 3: État d\x27évaluation
    new Chart(document.getElementById(\x27evaluationChart\x27), {
        type: \x27doughnut\x27,
        data: {
            labels: [\x27Évalué\x27, \x27Non évalué\x27],
            datasets: [{
                data: [totals.evalue, totals.non_evalue],
                backgroundColor: [\x27#3b82f6\x27, \x27#f59e0b\x27],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            cutout: \x2760%\x27
        }
    });
    
    // Graphique 4: Progression vers l\x27admission
    new Chart(document.getElementById(\x27admissionChart\x27), {
        type: \x27doughnut\x27,
        data: {
            labels: [\x27Admis\x27, \x27Admissible\x27, \x27Autres\x27],
            datasets: [{
                data: [totals.admis, totals.admissible, totals.total - totals.admissible],
                backgroundColor: [\x27#8b5cf6\x27, \x27#f59e0b\x27, \x27#94a3b8\x27],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            cutout: \x2760%\x27
        }
    });
    


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
        return "candidature/stat.html.twig";
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
        return array (  813 => 465,  806 => 461,  802 => 460,  798 => 459,  788 => 458,  772 => 448,  759 => 441,  757 => 440,  749 => 437,  741 => 436,  736 => 434,  728 => 433,  723 => 431,  715 => 430,  710 => 428,  702 => 427,  698 => 426,  694 => 425,  690 => 424,  686 => 423,  682 => 422,  679 => 421,  674 => 420,  652 => 401,  635 => 387,  628 => 383,  621 => 379,  599 => 360,  592 => 356,  570 => 337,  563 => 333,  541 => 314,  534 => 310,  515 => 293,  503 => 284,  489 => 273,  482 => 268,  480 => 267,  467 => 257,  463 => 256,  448 => 244,  444 => 243,  429 => 231,  425 => 230,  410 => 218,  406 => 217,  391 => 205,  375 => 192,  367 => 187,  357 => 179,  347 => 176,  343 => 175,  338 => 174,  334 => 173,  329 => 171,  316 => 160,  297 => 142,  286 => 132,  276 => 123,  259 => 107,  255 => 104,  187 => 37,  165 => 35,  148 => 34,  142 => 31,  138 => 30,  131 => 26,  127 => 24,  117 => 23,  93 => 6,  83 => 5,  65 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/stat.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\stat.html.twig");
    }
}
