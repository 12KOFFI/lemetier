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

/* programmation_entretien/_planifiques_table_body.html.twig */
class __TwigTemplate_269b5cb34512d1f607272490b96a60f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmation_entretien/_planifiques_table_body.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["planifies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            yield "<tr class=\"hover:bg-slate-50 transition\">
    <td class=\"py-2.5 px-2 font-medium text-slate-700 whitespace-nowrap\">
        ";
            // line 4
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 4), "numero", [], "any", false, false, false, 4), "html", null, true);
            yield "
        ";
            // line 5
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "reprogramme", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "        <span class=\"ml-1 inline-flex items-center px-1.5 py-0.5 rounded text-[0.65rem] font-semibold bg-blue-100 text-blue-700\">Reprogrammé</span>
        ";
            }
            // line 8
            yield "    </td>
    <td class=\"py-2.5 px-2\">
        <div class=\"flex items-center gap-2.5\">
            <div class=\"w-7 h-7 shrink-0 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center text-[0.65rem] font-bold uppercase\">
                ";
            // line 12
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12), "nom", [], "any", false, false, false, 12), 0, 1) . Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12), "prenoms", [], "any", false, false, false, 12), 0, 1)), "html", null, true)) : ("?"));
            yield "
            </div>
            <span class=\"text-slate-700\">
                ";
            // line 15
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 15), "user", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 15), "user", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 15), "user", [], "any", false, false, false, 15), "prenoms", [], "any", false, false, false, 15))), "html", null, true)) : ("-"));
            yield "
            </span>
        </div>
    </td>
    <td class=\"py-2.5 px-2 text-slate-600 whitespace-nowrap\">";
            // line 19
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            yield "</td>
    <td class=\"py-2.5 px-2 whitespace-nowrap\">
        <span class=\"inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-purple-50 text-purple-700 border border-purple-100\">
            Vague ";
            // line 22
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vague", [], "any", false, false, false, 22), "html", null, true);
            yield " · ";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vague", [], "any", false, false, false, 22) == 1)) ? ("08h-12h") : ("13h-15h"));
            yield "
        </span>
    </td>
    <td class=\"py-2.5 px-2 whitespace-nowrap\">
        <span class=\"inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600\">
            Jury ";
            // line 27
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "jury", [], "any", false, false, false, 27), "html", null, true);
            yield "
        </span>
    </td>
    <td class=\"py-2.5 px-2 text-right\">
        <a href=\"";
            // line 31
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_imprimer_convocation", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "candidature", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "programmation_entretien/_planifiques_table_body.html.twig";
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
        return array (  110 => 31,  103 => 27,  93 => 22,  87 => 19,  80 => 15,  74 => 12,  68 => 8,  64 => 6,  62 => 5,  58 => 4,  54 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "programmation_entretien/_planifiques_table_body.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\programmation_entretien\\_planifiques_table_body.html.twig");
    }
}
