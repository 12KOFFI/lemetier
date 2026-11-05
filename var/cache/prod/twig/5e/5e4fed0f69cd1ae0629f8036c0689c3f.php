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

/* partials/_offres_metiers_cards.html.twig */
class __TwigTemplate_442abb8573ec1cfe87fe663952f0a2cf extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_offres_metiers_cards.html.twig"));

        // line 2
        yield "<div class=\"grid gap-4 mt-8 sm:gap-5 sm:grid-cols-2 lg:grid-cols-4\" data-reveal-list>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["offresMetiers"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 4
            yield "        <article data-metier data-reveal-item data-total=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nbrplace", [], "any", false, false, false, 4), "html", null, true);
            yield "\" data-places=\"";
            yield (string) $this->escaper->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "parLycee", [], "any", false, false, false, 4)), "html", null, true);
            yield "\"
                 class=\"overflow-hidden text-slate-900 bg-white rounded-[18px] card-lift\">
            <button type=\"button\" data-open-dialog=\"metier-";
            // line 6
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 6), "html", null, true);
            yield "\"
                    onclick=\"document.getElementById(\x27metier-";
            // line 7
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 7), "html", null, true);
            yield "\x27).showModal()\"
                    aria-haspopup=\"dialog\" aria-controls=\"metier-";
            // line 8
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 8), "html", null, true);
            yield "\"
                    class=\"flex w-full h-full text-left sm:flex-col focus:outline-none focus-visible:ring-4 focus-visible:ring-orange-300\">
                ";
            // line 11
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 12
                yield "                    <img src=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/metiers/" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 12))), "html", null, true);
                yield "\" alt=\"\" width=\"640\" height=\"480\" loading=\"lazy\" decoding=\"async\"
                         class=\"block flex-shrink-0 object-cover object-top w-28 min-h-[7rem] self-stretch sm:w-full sm:min-h-0 sm:self-auto sm:aspect-[4/3] bg-slate-200\">
                ";
            } else {
                // line 15
                yield "                    <span class=\"flex items-center justify-center flex-shrink-0 text-4xl text-indigo-200 bg-indigo-900 w-28 sm:w-full aspect-square sm:aspect-[4/3]\" aria-hidden=\"true\"><i class=\"fas fa-briefcase\"></i></span>
                ";
            }
            // line 17
            yield "                <span class=\"flex flex-col flex-1 min-w-0 gap-2 px-4 pt-3.5 pb-3.5 sm:gap-2.5 sm:pt-4 sm:pb-4\">
                    <span class=\"text-base font-extrabold leading-snug sm:text-lg\">";
            // line 18
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomMetier", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
                    <span class=\"flex items-center gap-2 text-[15px] text-slate-600\">
                        <i class=\"text-green-600 fas fa-user-group\" aria-hidden=\"true\"></i>
                        <strong class=\"text-slate-900 tabular-nums\" data-metier-total>";
            // line 21
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nbrplace", [], "any", false, false, false, 21), "html", null, true);
            yield "</strong> places
                    </span>
                    <span class=\"grid gap-1.5 pt-3 mt-auto text-sm border-t border-slate-200\">
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "etablissements", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                // line 25
                yield "                            <span data-lieu=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "code", [], "any", false, false, false, 25), "html", null, true);
                yield "\" class=\"flex justify-between gap-2\">
                                <span class=\"text-slate-700\"><span class=\"font-bold text-indigo-700\">";
                // line 26
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "code", [], "any", false, false, false, 26), "html", null, true);
                yield "</span> · ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "localite", [], "any", false, false, false, 26), "html", null, true);
                yield "</span>
                                <span class=\"font-bold tabular-nums\">";
                // line 27
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nbrplace", [], "any", false, false, false, 27), "html", null, true);
                yield "</span>
                            </span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 30
            yield "                    </span>
                    <span class=\"text-xs font-semibold text-indigo-600\">Voir la fiche du métier <i class=\"ml-1 fas fa-arrow-right\" aria-hidden=\"true\"></i></span>
                </span>
            </button>
        </article>

        ";
            // line 37
            yield "        <dialog id=\"metier-";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "\" aria-labelledby=\"metier-";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "-titre\" data-lenis-prevent
                class=\"metier-dialog w-[calc(100%-2rem)] max-w-xl max-h-[calc(100dvh-2rem)] p-0 bg-white shadow-2xl rounded-2xl text-slate-900 open:flex open:flex-col\">
            <div class=\"flex items-start justify-between flex-shrink-0 gap-4 p-5 border-b border-slate-200\">
                <h3 id=\"metier-";
            // line 40
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "-titre\" class=\"text-2xl font-extrabold\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomMetier", [], "any", false, false, false, 40), "html", null, true);
            yield "</h3>
                <button type=\"button\" onclick=\"this.closest(\x27dialog\x27).close()\" aria-label=\"Fermer\"
                        class=\"flex items-center justify-center rounded-full w-11 h-11 text-slate-500 hover:bg-slate-100\">
                    <i class=\"fas fa-xmark\" aria-hidden=\"true\"></i>
                </button>
            </div>
            <div class=\"flex-1 min-h-0 p-5 space-y-5 overflow-y-auto overscroll-contain\">
                ";
            // line 47
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                    <img src=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/metiers/" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 48))), "html", null, true);
                yield "\" alt=\"\" width=\"640\" height=\"480\" loading=\"lazy\"
                         class=\"object-cover object-top w-full h-36 sm:h-48 rounded-xl\">
                ";
            }
            // line 51
            yield "                <p class=\"leading-relaxed text-slate-700\">";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 51), "html", null, true)) : ("La description de ce métier sera bientôt disponible."));
            yield "</p>
                <div>
                    <h4 class=\"text-sm font-bold\">Où se former ?</h4>
                    <ul class=\"mt-2 space-y-2\">
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "etablissements", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                // line 56
                yield "                            <li class=\"flex items-center justify-between gap-3 p-3 border rounded-xl border-slate-200\">
                                <span><strong>";
                // line 57
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 57), "html", null, true);
                yield " (";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "code", [], "any", false, false, false, 57), "html", null, true);
                yield ")</strong><span class=\"block text-sm text-slate-600\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "localite", [], "any", false, false, false, 57), "html", null, true);
                yield "</span></span>
                                <span class=\"font-bold text-indigo-700 tabular-nums whitespace-nowrap\">";
                // line 58
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nbrplace", [], "any", false, false, false, 58), "html", null, true);
                yield " places</span>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 61
            yield "                    </ul>
                </div>
            </div>
            <div class=\"flex flex-col flex-shrink-0 gap-3 p-5 border-t sm:flex-row sm:justify-end border-slate-200\">
                <button type=\"button\" onclick=\"this.closest(\x27dialog\x27).close()\"
                        class=\"px-4 py-2.5 font-medium border rounded-xl text-slate-700 border-slate-300 hover:bg-slate-50\">Fermer</button>
                <a href=\"#ou-sinscrire\" onclick=\"this.closest(\x27dialog\x27).close()\"
                   class=\"inline-flex items-center justify-center gap-2 px-5 py-2.5 text-lg font-bold text-white rounded-xl bg-gradient-to-r from-orange-300 to-orange-500 transition hover:from-orange-400 hover:to-orange-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-300\">
                    <i class=\"fas fa-location-dot\" aria-hidden=\"true\"></i> Où m’inscrire ?
                </a>
            </div>
        </dialog>
    ";
            $context['_iterated'] = true;
        }
        // line 73
        if (!$context['_iterated']) {
            // line 74
            yield "        <p class=\"py-10 text-center col-span-full text-white/80\">Aucune offre de formation n’est disponible pour le moment.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 76
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_offres_metiers_cards.html.twig";
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
        return array (  230 => 76,  222 => 74,  220 => 73,  204 => 61,  194 => 58,  186 => 57,  183 => 56,  179 => 55,  171 => 51,  164 => 48,  162 => 47,  150 => 40,  141 => 37,  133 => 30,  123 => 27,  117 => 26,  112 => 25,  108 => 24,  102 => 21,  96 => 18,  93 => 17,  89 => 15,  82 => 12,  79 => 11,  74 => 8,  70 => 7,  66 => 6,  58 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/_offres_metiers_cards.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\partials\\_offres_metiers_cards.html.twig");
    }
}
