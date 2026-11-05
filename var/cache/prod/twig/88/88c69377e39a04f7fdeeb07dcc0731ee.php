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

/* localite/index.html.twig */
class __TwigTemplate_b61e77e6a4132f29fa65d69abbf7d0a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localite/index.html.twig"));

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

        yield "Localités | ";
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
        yield "<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
    <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
    <div class=\"absolute -bottom-20 left-1/3 w-72 h-72 rounded-full bg-white/[0.03] pointer-events-none\"></div>

    <div class=\"relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border border-white/20 flex items-center justify-center text-2xl shrink-0\">
                <i class=\"fas fa-map-marker-alt\"></i>
            </div>
            <div>
                <h1 class=\"text-xl md:text-2xl font-bold tracking-tight\">Gestion des localités</h1>
                <p class=\"text-white/70 text-sm mt-0.5\">";
        // line 19
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["localites"] ?? null)), "html", null, true);
        yield " localité(s) enregistrée(s)</p>
            </div>
        </div>
        <a href=\"";
        // line 22
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_new");
        yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white text-indigo-600 hover:bg-indigo-50 border border-white text-sm font-semibold transition-all duration-200 hover:-translate-y-0.5 w-full md:w-auto justify-center\">
            <i class=\"fas fa-plus-circle\"></i> Nouvelle localité
        </a>
    </div>
</div>

";
        // line 29
        yield from $this->load("partials/_flash_messages.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "
";
        // line 32
        yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">

    ";
        // line 35
        yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-b border-slate-100 bg-slate-50/60\">
        <div class=\"flex items-center gap-2 text-sm text-slate-500 font-medium\">
            <span>Afficher</span>
            <select id=\"pageSizeSelect\"
                    class=\"border border-slate-200 rounded-lg px-2 py-1 text-sm text-slate-700 bg-white cursor-pointer outline-none focus:border-indigo-400 font-medium\">
                <option value=\"10\">10</option>
                <option value=\"25\" selected>25</option>
                <option value=\"50\">50</option>
                <option value=\"100\">100</option>
            </select>
            <span>éléments</span>
        </div>
        <div class=\"flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-3 py-2 focus-within:border-indigo-400 focus-within:ring-2 focus-within:ring-indigo-100 transition-all\">
            <i class=\"fas fa-search text-slate-400 text-xs\"></i>
            <input id=\"tableSearch\" type=\"text\" placeholder=\"Rechercher…\"
                   class=\"outline-none text-sm text-slate-700 placeholder-slate-300 w-44 bg-transparent\">
        </div>
    </div>

    ";
        // line 55
        yield "    <div class=\"overflow-x-auto\">
        <table class=\"w-full min-w-[750px]\">
            <thead>
                <tr class=\"bg-slate-100 border-b border-slate-100\">
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400 w-14\">N°</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Nom</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Type</th>
                    <th class=\"px-5 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Localité parente</th>
                    <th class=\"px-5 py-3 text-right text-[0.7rem] font-semibold uppercase tracking-widest text-slate-400\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-slate-50\">
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["localites"] ?? null));
        $context['_iterated'] = false;
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
            // line 68
            yield "                <tr class=\"hover:bg-slate-100/70 hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:relative hover:z-10 transition-all duration-200 cursor-default\">
                    <td class=\"px-5 py-4 text-sm text-slate-400 font-medium\">";
            // line 69
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                    <td class=\"px-5 py-4 text-sm font-semibold text-slate-800\">";
            // line 70
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                    <td class=\"px-5 py-4\">
                        ";
            // line 72
            $context["typeColors"] = ["ville" => "bg-purple-50 text-purple-700 border-purple-200", "departement" => "bg-blue-50 text-blue-700 border-blue-200", "region" => "bg-emerald-50 text-emerald-700 border-emerald-200", "commune" => "bg-amber-50 text-amber-700 border-amber-200", "sous-prefecture" => "bg-orange-50 text-orange-700 border-orange-200", "village" => "bg-teal-50 text-teal-700 border-teal-200"];
            // line 80
            yield "                        ";
            $context["cls"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 80), [], "array", true, true, false, 80) &&  !(null === (($_v0 = ($context["typeColors"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 80)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)))) ? ((($_v2 = ($context["typeColors"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 80)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) : ("bg-slate-100 text-slate-600 border-slate-200"));
            // line 81
            yield "                        <span class=\"inline-flex items-center px-2.5 py-0.5 rounded-full text-[0.68rem] font-semibold border ";
            yield (string) $this->escaper->escape(($context["cls"] ?? null), "html", null, true);
            yield "\">
                            ";
            // line 82
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 82), ["-" => " "])), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td class=\"px-5 py-4 text-sm text-slate-500\">";
            // line 85
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "parent", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "parent", [], "any", false, false, false, 85), "nom", [], "any", false, false, false, 85), "html", null, true)) : ("–"));
            yield "</td>
                    <td class=\"px-5 py-4\">
                        <div class=\"flex items-center justify-end gap-1.5\">
                            <a href=\"";
            // line 88
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\"
                               title=\"Modifier\"
                               class=\"w-8 h-8 flex items-center justify-center rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-500 hover:text-white transition-all duration-150 hover:-translate-y-px text-sm\">
                                <i class=\"fas fa-pen\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 93
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\"
                                  onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer cette localité ?\x27);\"
                                  class=\"inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 96
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 96))), "html", null, true);
            yield "\">
                                <button type=\"submit\" title=\"Supprimer\"
                                        class=\"w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition-all duration-150 hover:-translate-y-px text-sm\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 105
        if (!$context['_iterated']) {
            // line 106
            yield "                <tr>
                    <td colspan=\"6\" class=\"px-6 py-16 text-center\">
                        <div class=\"w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center mx-auto mb-4 text-2xl text-indigo-400\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                        </div>
                        <p class=\"text-sm font-semibold text-slate-700 mb-1\">Aucune localité trouvée</p>
                        <p class=\"text-xs text-slate-400 mb-4\">Commencez par créer votre première localité</p>
                        <a href=\"";
            // line 113
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_new");
            yield "\"
                           class=\"inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-xl hover:bg-indigo-700 transition\">
                            <i class=\"fas fa-plus-circle\"></i> Créer une localité
                        </a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 120
        yield "            </tbody>
        </table>
    </div>

    ";
        // line 125
        yield "    <div class=\"flex flex-wrap items-center justify-between gap-3 px-6 py-4 border-t border-slate-100 bg-slate-50/60\">
        <p id=\"paginationInfo\" class=\"text-xs text-slate-400 font-medium\"></p>
        <nav id=\"paginationNav\" class=\"flex items-center gap-1\" aria-label=\"Pagination\"></nav>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
(function () {
    const tbody = document.getElementById(\x27tableBody\x27);
    if (!tbody) return;
    const allRows = Array.from(tbody.querySelectorAll(\x27tr\x27));
    const info = document.getElementById(\x27paginationInfo\x27);
    const nav = document.getElementById(\x27paginationNav\x27);
    const searchInput = document.getElementById(\x27tableSearch\x27);
    const pageSizeSelect = document.getElementById(\x27pageSizeSelect\x27);
    let pageSize = parseInt(pageSizeSelect.value), currentPage = 1, filtered = [...allRows];

    function applyFilter(q) {
        const term = q.toLowerCase().trim();
        filtered = allRows.filter(r => !term || r.textContent.toLowerCase().includes(term));
        currentPage = 1; render();
    }

    function render() {
        const total = filtered.length, pages = Math.max(1, Math.ceil(total / pageSize));
        currentPage = Math.min(currentPage, pages);
        const start = (currentPage - 1) * pageSize, end = Math.min(start + pageSize, total);
        allRows.forEach(r => r.style.display = \x27none\x27);
        filtered.slice(start, end).forEach(r => r.style.display = \x27\x27);
        info.innerHTML = total === 0 ? \x27Aucun résultat trouvé\x27
            : `Affichage de <strong class=\"text-slate-600\">\${start+1}</strong> à <strong class=\"text-slate-600\">\${end}</strong> sur <strong class=\"text-slate-600\">\${total}</strong> élément(s)`;
        buildPagination(pages);
    }

    function buildPagination(pages) {
        nav.innerHTML = \x27\x27;
        const base = \x27inline-flex items-center justify-center min-w-[34px] h-[34px] px-2 rounded-lg text-xs font-semibold border transition-colors duration-150 \x27;
        const idle = base + \x27bg-white border-slate-200 text-slate-500 hover:bg-indigo-50 hover:text-indigo-600 hover:border-indigo-200 cursor-pointer\x27;
        const active = base + \x27bg-indigo-600 border-indigo-600 text-white cursor-default pointer-events-none\x27;
        const disabled = base + \x27bg-white border-slate-100 text-slate-300 cursor-not-allowed pointer-events-none opacity-40\x27;
        const makeBtn = (label, page, cls) => {
            const el = document.createElement(\x27button\x27); el.innerHTML = label; el.className = cls;
            if (cls === idle) el.addEventListener(\x27click\x27, () => { currentPage = page; render(); });
            return el;
        };
        nav.appendChild(makeBtn(\x27<i class=\"fas fa-chevron-left\" style=\"font-size:0.6rem\"></i>\x27, currentPage - 1, currentPage === 1 ? disabled : idle));
        getPageRange(currentPage, pages).forEach(p => {
            if (p === \x27...\x27) { const el = document.createElement(\x27span\x27); el.textContent = \x27···\x27; el.className = \x27inline-flex items-center justify-center w-8 h-[34px] text-xs text-slate-300 font-bold tracking-wider select-none\x27; nav.appendChild(el); }
            else nav.appendChild(makeBtn(p, p, p === currentPage ? active : idle));
        });
        nav.appendChild(makeBtn(\x27<i class=\"fas fa-chevron-right\" style=\"font-size:0.6rem\"></i>\x27, currentPage + 1, currentPage === pages ? disabled : idle));
    }

    function getPageRange(cur, total) {
        if (total <= 7) return Array.from({ length: total }, (_, i) => i + 1);
        const set = new Set([1, total, cur, cur-1, cur+1].filter(p => p >= 1 && p <= total));
        const sorted = [...set].sort((a, b) => a - b), result = [];
        sorted.forEach((p, i) => { if (i > 0 && p - sorted[i-1] > 1) result.push(\x27...\x27); result.push(p); });
        return result;
    }

    searchInput.addEventListener(\x27input\x27, e => applyFilter(e.target.value));
    pageSizeSelect.addEventListener(\x27change\x27, e => { pageSize = parseInt(e.target.value); currentPage = 1; render(); });
    render();
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
        return "localite/index.html.twig";
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
        return array (  311 => 134,  301 => 133,  287 => 125,  281 => 120,  267 => 113,  258 => 106,  256 => 105,  234 => 96,  228 => 93,  220 => 88,  214 => 85,  208 => 82,  203 => 81,  200 => 80,  198 => 72,  193 => 70,  189 => 69,  186 => 68,  168 => 67,  154 => 55,  133 => 35,  129 => 32,  126 => 30,  124 => 29,  114 => 22,  108 => 19,  95 => 8,  92 => 6,  82 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "localite/index.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\localite\\index.html.twig");
    }
}
