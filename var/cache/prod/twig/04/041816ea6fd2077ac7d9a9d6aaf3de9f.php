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

/* candidature/entretien_non_effectue.html.twig */
class __TwigTemplate_bcb1f5535246f8a80c55b7494e05e4f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/entretien_non_effectue.html.twig"));

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

        yield "Candidats entretien non effectué | ";
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
        yield "<div class=\"flex items-center justify-between mb-6\">
    <a href=\"";
        // line 9
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_etude_dossier");
        yield "\" class=\"inline-flex items-center px-4 py-2 text-sm font-medium transition shadow-sm text-slate-700 bg-white border border-slate-300 rounded-xl hover:bg-slate-50\">
        <i class=\"mr-2 fas fa-arrow-left\"></i>
        Retour à l\x27étude de dossier
    </a>
</div>

";
        // line 16
        yield "<div class=\"relative p-6 mb-8 overflow-hidden text-white bg-gradient-to-r from-rose-500 to-pink-600 rounded-2xl md:p-8\">
    <div class=\"relative z-10 flex items-center justify-between\">
        <div class=\"flex items-center gap-4\">
            <div class=\"flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border-white/20 shrink-0\">
                <i class=\"fas fa-comment-slash\"></i>
            </div>
            <div>
                <h1 class=\"text-xl font-bold tracking-tight md:text-2xl\">Candidats entretien non effectué</h1>
                <p class=\"mt-0.5 text-sm text-white/80\">Liste complète des candidats éligibles en attente de réalisation d\x27entretien</p>
            </div>
        </div>

        <div class=\"hidden sm:flex flex-col items-end justify-center bg-white/10 backdrop-blur border border-white/20 px-5 py-2.5 rounded-2xl\">
            <span class=\"text-xs font-medium uppercase tracking-wider text-white/80\">Total</span>
            <span class=\"text-4xl font-extrabold text-white mx-auto\">";
        // line 30
        yield (string) $this->escaper->escape(((array_key_exists("total", $context)) ? (Twig\Extension\CoreExtension::default(($context["total"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 30))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["candidatures"] ?? null), "getTotalItemCount", [], "any", false, false, false, 30))), "html", null, true);
        yield "</span>
        </div>
    </div>
</div>

";
        // line 36
        yield "<div class=\"mb-6\">
    <form id=\"searchForm\" method=\"get\" class=\"flex items-center gap-2 max-w-md mx-auto\">
        <div class=\"relative w-full\">
            <input 
                type=\"text\" 
                id=\"searchInput\"
                name=\"q\" 
                value=\"";
        // line 43
        yield (string) $this->escaper->escape(($context["searchTerm"] ?? null), "html", null, true);
        yield "\" 
                placeholder=\"Rechercher par N°, nom, prénom, métier...\" 
                class=\"w-full pl-4 pr-10 py-2 text-sm border border-slate-300 rounded-xl focus:ring-2 focus:ring-rose-500 focus:outline-none\"
                autocomplete=\"off\"
            >
            <button type=\"submit\" class=\"absolute right-1 top-1 bottom-1 px-3 text-sm font-medium text-slate-400 hover:text-rose-600 transition\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </form>
</div>

";
        // line 56
        yield "<div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["candidatures"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 70
            yield "                <tr class=\"transition hover:bg-slate-50\">
                    <td class=\"px-4 py-3 font-mono text-sm font-semibold text-indigo-600\">
                        ";
            // line 72
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "numero", [], "any", false, false, false, 72), "html", null, true);
            yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm font-medium text-slate-800\">
                        ";
            // line 75
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75)) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 75), "prenoms", [], "any", false, false, false, 75)), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm text-slate-600\">
                        ";
            // line 78
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "metier", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "metier", [], "any", false, false, false, 78), "nom", [], "any", false, false, false, 78), "html", null, true)) : ("-"));
            yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm text-slate-500\">
                        ";
            // line 81
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "creation", [], "any", false, false, false, 81), "d/m/Y"), "html", null, true);
            yield "
                    </td>
                    <td class=\"px-4 py-3 text-sm text-right\">
                        <a href=\"";
            // line 84
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 84), "redirect_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 84), "requestUri", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\"
                           class=\"px-3 py-1.5 text-xs font-medium bg-indigo-50 text-indigo-600 rounded-lg hover:bg-indigo-600 hover:text-white transition\">
                            <i class=\"mr-1 fas fa-edit\"></i> Traiter
                        </a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                <tr>
                    <td colspan=\"5\" class=\"px-4 py-8 text-center text-slate-500\">
                        <i class=\"mb-2 text-3xl opacity-50 fas fa-comment-slash\"></i>
                        <p>Aucun candidat en attente d\x27entretien</p>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 98
        yield "            </tbody>
        </table>
    </div>
</div>

<div class=\"mt-4\">
    ";
        // line 104
        yield (string) $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["candidatures"] ?? null));
        yield "
</div>

<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
    const searchInput = document.getElementById(\x27searchInput\x27);
    const searchForm = document.getElementById(\x27searchForm\x27);
    let timeout = null;

    searchInput.addEventListener(\x27input\x27, function() {
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            searchForm.submit();
        }, 300);
    });

    if (searchInput.value.length > 0) {
        searchInput.focus();
        searchInput.setSelectionRange(searchInput.value.length, searchInput.value.length);
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
        return "candidature/entretien_non_effectue.html.twig";
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
        return array (  236 => 104,  228 => 98,  215 => 91,  213 => 90,  202 => 84,  196 => 81,  190 => 78,  184 => 75,  178 => 72,  174 => 70,  169 => 69,  154 => 56,  139 => 43,  130 => 36,  122 => 30,  106 => 16,  97 => 9,  94 => 8,  91 => 6,  81 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/entretien_non_effectue.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\entretien_non_effectue.html.twig");
    }
}
