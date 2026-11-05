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

/* etablissement_metier/index.html.twig */
class __TwigTemplate_bda073ad5cf0dcba0196e06e13d520a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etablissement_metier/index.html.twig"));

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

        yield "Affectations métiers | ";
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
        yield "<div class=\"mx-auto\">
    <!-- En-tête -->
    <div class=\"p-8 mb-8 text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"flex items-center justify-center w-16 h-16 rounded-full bg-white/20\">
                    <i class=\"text-3xl fas fa-link\"></i>
                </div>
                <div>
                    <h1 class=\"text-2xl font-bold\">Affectations métiers par établissement</h1>
                    <p class=\"text-white/80\">";
        // line 16
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["etablissementMetiers"] ?? null)), "html", null, true);
        yield " affectation(s) enregistrée(s)</p>
                </div>
            </div>
            <a href=\"";
        // line 19
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_metier_new");
        yield "\" 
               class=\"inline-flex items-center px-4 py-2 text-indigo-600 transition transform bg-white rounded-lg shadow-lg hover:bg-indigo-50 hover:scale-105 group\">
                <i class=\"mr-2 transition-transform duration-300 fas fa-plus-circle group-hover:rotate-90\"></i>
                Nouvelle affectation
            </a>
        </div>
    </div>

    ";
        // line 27
        yield from $this->load("partials/_flash_messages.html.twig", 27)->unwrap()->yield($context);
        // line 28
        yield "
    <!-- Tableau des affectations -->
    <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
        <div class=\"p-6 overflow-x-auto\">
            <table class=\"w-full display\">
                <thead class=\"border-b bg-slate-50 border-slate-200\">
                    <tr>
                        <th class=\"w-16 px-6 py-4 text-sm font-semibold text-left text-slate-600\">N°</th>
                        <th class=\"px-6 py-4 text-sm font-semibold text-left text-slate-600\">Établissement</th>
                        <th class=\"px-6 py-4 text-sm font-semibold text-left text-slate-600\">Métier</th>
                        <th class=\"px-6 py-4 text-sm font-semibold text-center text-slate-600\">Nombre de places</th>
                        <th class=\"px-6 py-4 text-sm font-semibold text-left text-slate-600\">Durée formation</th>
                        <th class=\"px-6 py-4 text-sm font-semibold text-left text-slate-600\">Niveau requis</th>
                        <th class=\"px-6 py-4 text-sm font-semibold text-right text-slate-600\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-slate-200\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissementMetiers"] ?? null));
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
            // line 46
            yield "                    <tr class=\"transition hover:bg-slate-50 group\">
                        <td class=\"px-6 py-4 text-sm text-slate-600\">";
            // line 47
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4\">
                            <div class=\"flex items-center\">
                                <div>
                                    <span class=\"font-medium text-slate-800\">";
            // line 51
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "etablissement", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "etablissement", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true)) : ("-"));
            yield "</span>
                                    ";
            // line 52
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "etablissement", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "etablissement", [], "any", false, false, false, 52), "definition", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 53
                yield "                                    <p class=\"text-xs text-slate-500\">";
                yield (string) $this->escaper->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "etablissement", [], "any", false, false, false, 53), "definition", [], "any", false, false, false, 53), 0, 50) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "etablissement", [], "any", false, false, false, 53), "definition", [], "any", false, false, false, 53)) > 50)) ? ("...") : (""))), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 55
            yield "                                </div>
                            </div>
                        </td>
                        <td class=\"px-6 py-4\">
                            <div class=\"flex items-center\">
                                <div>
                                    <span class=\"font-medium text-slate-800\">";
            // line 61
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true)) : ("-"));
            yield "</span>
                                    ";
            // line 62
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 63
                yield "                                    <p class=\"text-xs text-slate-500\">";
                yield (string) $this->escaper->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 63), "nom", [], "any", false, false, false, 63), 0, 50) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "metier", [], "any", false, false, false, 63), "nom", [], "any", false, false, false, 63)) > 50)) ? ("...") : (""))), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 65
            yield "                                </div>
                            </div>
                        <td class=\"px-6 py-4 text-center\">
                            ";
            // line 68
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nbrplace", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "                                <span class=\"inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200 shadow-sm\">
                                    <i class=\"fas fa-users mr-1.5 text-green-600\"></i>
                                    ";
                // line 71
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nbrplace", [], "any", false, false, false, 71), "html", null, true);
                yield " place";
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nbrplace", [], "any", false, false, false, 71) > 1)) ? ("s") : (""));
                yield "
                                </span>
                            ";
            } else {
                // line 74
                yield "                                <span class=\"inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200\">
                                    <i class=\"fas fa-minus-circle mr-1.5 text-slate-400\"></i>
                                    Non défini
                                </span>
                            ";
            }
            // line 79
            yield "                        </td>
                        <td class=\"px-6 py-4 text-sm text-slate-600\">";
            // line 80
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dureeFormation", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dureeFormation", [], "any", false, false, false, 80), "html", null, true)) : ("-"));
            yield "</td>
                        <td class=\"px-6 py-4 text-sm text-slate-600\">";
            // line 81
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "niveauRequis", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "niveauRequis", [], "any", false, false, false, 81), "html", null, true)) : ("-"));
            yield "</td>
                        <td class=\"px-6 py-4 text-right\">
                            <div class=\"flex items-center justify-end gap-2\">
                                <a href=\"";
            // line 84
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_metier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" 
                                   class=\"relative group/edit\">
                                    <div class=\"p-1.5 bg-indigo-50 text-indigo-600 rounded-lg hover:bg-indigo-600 hover:text-white\">
                                        <i class=\"fas fa-edit\"></i>
                                    </div>
                                </a>
                                <form method=\"post\" 
                                      action=\"";
            // line 91
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_metier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" 
                                      onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer cette affectation ?\x27);\" 
                                      class=\"relative inline group/delete\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 94
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" 
                                            class=\"p-1.5 bg-red-50 text-red-600 rounded-lg hover:bg-red-600 hover:text-white\">
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
        // line 103
        if (!$context['_iterated']) {
            // line 104
            yield "                    <tr>
                            <td colspan=\"7\" class=\"px-6 py-12 text-center text-slate-500\">
                            <div class=\"flex flex-col items-center justify-center animate-fade-in\">
                                <div class=\"flex items-center justify-center w-20 h-20 mb-4 rounded-full bg-slate-100\">
                                    <i class=\"text-4xl fas fa-link text-slate-400\"></i>
                                </div>
                                <p class=\"mb-2 text-lg font-medium\">Aucune affectation trouvée</p>
                                <p class=\"mb-6 text-sm\">Commencez par créer votre première affectation</p>
                                <a href=\"";
            // line 112
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_metier_new");
            yield "\" 
                                   class=\"inline-flex items-center px-6 py-3 text-white transition transform bg-indigo-600 rounded-lg shadow-lg hover:bg-indigo-700 hover:scale-105 group\">
                                    <i class=\"mr-2 transition-transform duration-300 fas fa-plus-circle group-hover:rotate-90\"></i>
                                    Créer une affectation
                                </a>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 121
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
        return "etablissement_metier/index.html.twig";
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
        return array (  306 => 121,  290 => 112,  280 => 104,  278 => 103,  256 => 94,  250 => 91,  240 => 84,  234 => 81,  230 => 80,  227 => 79,  220 => 74,  212 => 71,  208 => 69,  206 => 68,  201 => 65,  195 => 63,  193 => 62,  189 => 61,  181 => 55,  175 => 53,  173 => 52,  169 => 51,  162 => 47,  159 => 46,  141 => 45,  122 => 28,  120 => 27,  109 => 19,  103 => 16,  91 => 6,  81 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "etablissement_metier/index.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\etablissement_metier\\index.html.twig");
    }
}
