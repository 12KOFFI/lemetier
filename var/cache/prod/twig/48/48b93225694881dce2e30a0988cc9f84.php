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

/* session_recrutement/index.html.twig */
class __TwigTemplate_df358abfebc377b88fc2c5742716aa53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session_recrutement/index.html.twig"));

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

        yield "Sessions de recrutement | ";
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
        yield "<div class=\"max-w-7xl mx-auto px-4 py-8\">
    <div class=\"flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8\">
        <div>
            <h1 class=\"text-2xl font-bold text-slate-900\">Sessions de recrutement</h1>
            <p class=\"text-slate-500 mt-1\">Gérez les campagnes de recrutement du GROUPE LEMETIER.</p>
        </div>
        <a href=\"";
        // line 12
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_recrutement_new");
        yield "\" class=\"inline-flex items-center justify-center gap-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700\">
            <i class=\"fas fa-plus\"></i> Nouvelle session
        </a>
    </div>

    <div class=\"overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm\">
        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full divide-y divide-slate-200\">
                <thead class=\"bg-slate-50\">
                    <tr>
                        <th class=\"px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500\">Session</th>
                        <th class=\"px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500\">Période</th>
                        <th class=\"px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500\">Statut</th>
                        <th class=\"px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500\">Candidatures</th>
                        <th class=\"px-5 py-3 text-right text-xs font-semibold uppercase tracking-wide text-slate-500\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-100\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sessions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 31
            yield "                    <tr>
                        <td class=\"px-5 py-4\">
                            <div class=\"font-semibold text-slate-800\">";
            // line 33
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "</div>
                            <div class=\"text-sm text-slate-500\">";
            // line 34
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "annee", [], "any", false, false, false, 34), "html", null, true);
            yield " · Vague ";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%02d", CoreExtension::getAttribute($this->env, $this->source, $context["session"], "numeroVague", [], "any", false, false, false, 34)), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"px-5 py-4 text-sm text-slate-600\">
                            ";
            // line 37
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateOuverture", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateOuverture", [], "any", false, false, false, 37), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
            yield "
                            <span class=\"text-slate-400\">→</span>
                            ";
            // line 39
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateCloture", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateCloture", [], "any", false, false, false, 39), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
            yield "
                        </td>
                        <td class=\"px-5 py-4\">
                            <span class=\"rounded-full px-2.5 py-1 text-xs font-semibold ";
            // line 42
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "active", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-emerald-100 text-emerald-700") : ("bg-slate-100 text-slate-600"));
            yield "\">";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 42), ["_" => " "]), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"px-5 py-4 text-sm\">
                            <a href=\"";
            // line 45
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index", ["session" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"text-indigo-600 hover:text-indigo-800 hover:underline font-medium\">
                                ";
            // line 46
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["session"], "candidatures", [], "any", false, false, false, 46)), "html", null, true);
            yield " candidature(s)
                            </a>
                        </td>
                        <td class=\"px-5 py-4 text-right\">
                            <a href=\"";
            // line 50
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_recrutement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"text-indigo-600 hover:text-indigo-800\" title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                            <form method=\"post\" action=\"";
            // line 51
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_recrutement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"inline ml-3\" onsubmit=\"return confirm(\x27Supprimer cette session ?\x27);\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 52
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_session_" . CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 52))), "html", null, true);
            yield "\">
                                <button class=\"text-red-600 hover:text-red-800\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 57
        if (!$context['_iterated']) {
            // line 58
            yield "                    <tr><td colspan=\"5\" class=\"px-5 py-12 text-center text-slate-500\">Aucune session de recrutement.</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 60
        yield "                </tbody>
            </table>
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
        return "session_recrutement/index.html.twig";
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
        return array (  199 => 60,  191 => 58,  189 => 57,  179 => 52,  175 => 51,  171 => 50,  164 => 46,  160 => 45,  152 => 42,  146 => 39,  141 => 37,  133 => 34,  129 => 33,  125 => 31,  120 => 30,  99 => 12,  91 => 6,  81 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "session_recrutement/index.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\session_recrutement\\index.html.twig");
    }
}
