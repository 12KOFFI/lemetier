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

/* candidature/print/stat.html.twig */
class __TwigTemplate_44d59d4f289a5b3063446f45408eca30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/print/stat.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>STATISTIQUES DES CANDIDATURES</title>
    <style>
        @page { size: A4 landscape; margin: 0.5cm; }
        body { font-family: Arial, sans-serif; font-size: 10pt; }
        .header { text-align: center; margin-bottom: 15px; }
        .header img { max-width: 100%; height: auto; }
        .title { font-size: 14pt; font-weight: bold; margin: 10px 0; text-align: center; }
        .subtitle { font-size: 11pt; margin: 5px 0 15px; text-align: center; color: #666; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th { background: #f0f0f0; font-weight: bold; text-align: center; padding: 6px; border: 1px solid #ddd; }
        td { padding: 4px 6px; border: 1px solid #ddd; }
        .text-end { text-align: right; }
        .text-primary { color: #6571ff; }
        .text-success { color: #05a34a; }
        .text-danger { color: #ff3366; }
        .text-secondary { color: #7987a1; }
        .fw-bold { font-weight: bold; }
        .footer { position: fixed; bottom: 10; width: 100%; text-align: center; font-size: 8pt; color: #999; }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"";
        // line 27
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", false, false, false, 27)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", false, false, false, 27), "html", null, true)) : (""));
        yield "\" style=\"max-width: 100%; height: 60px;\">
    </div>
    
    <div class=\"title\">STATISTIQUES DES CANDIDATURES</div>
    <div class=\"subtitle\">Généré le ";
        // line 31
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</div>
    
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Métier</th>
                <th class=\"text-primary\">Postes</th>
                <th>Hommes</th>
                <th>Femmes</th>
                <th>Total</th>
                <th>Évalués</th>
                <th class=\"text-danger\">Non évalués</th>
                <th class=\"text-secondary\">Admissibles</th>
                <th class=\"text-success\">Admis</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 49
        $context["totals"] = ["pl" => 0, "h" => 0, "f" => 0, "total" => 0, "eval" => 0, "non_eval" => 0, "adm" => 0, "admis" => 0];
        // line 50
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["results"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 51
            yield "                ";
            $context["reste"] = (CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum", [], "any", false, false, false, 51) - CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_evalue", [], "any", false, false, false, 51));
            // line 52
            yield "                <tr>
                    <td>";
            // line 53
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                    <td>";
            // line 54
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                    <td class=\"text-end text-primary\">";
            // line 55
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_pl", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                    <td class=\"text-end\">";
            // line 56
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_h", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                    <td class=\"text-end\">";
            // line 57
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_f", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                    <td class=\"text-end fw-bold\">";
            // line 58
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                    <td class=\"text-end\">";
            // line 59
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_evalue", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                    <td class=\"text-end text-danger\">";
            // line 60
            yield (string) $this->escaper->escape(($context["reste"] ?? null), "html", null, true);
            yield "</td>
                    <td class=\"text-end text-secondary\">";
            // line 61
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_admissible", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                    <td class=\"text-end text-success\">";
            // line 62
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_admis", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
                </tr>
                ";
            // line 64
            $context["totals"] = ["pl" => (CoreExtension::getAttribute($this->env, $this->source,             // line 65
($context["totals"] ?? null), "pl", [], "any", false, false, false, 65) + CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_pl", [], "any", false, false, false, 65)), "h" => (CoreExtension::getAttribute($this->env, $this->source,             // line 66
($context["totals"] ?? null), "h", [], "any", false, false, false, 66) + CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_h", [], "any", false, false, false, 66)), "f" => (CoreExtension::getAttribute($this->env, $this->source,             // line 67
($context["totals"] ?? null), "f", [], "any", false, false, false, 67) + CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_f", [], "any", false, false, false, 67)), "total" => (CoreExtension::getAttribute($this->env, $this->source,             // line 68
($context["totals"] ?? null), "total", [], "any", false, false, false, 68) + CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum", [], "any", false, false, false, 68)), "eval" => (CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["totals"] ?? null), "eval", [], "any", false, false, false, 69) + CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_evalue", [], "any", false, false, false, 69)), "non_eval" => (CoreExtension::getAttribute($this->env, $this->source,             // line 70
($context["totals"] ?? null), "non_eval", [], "any", false, false, false, 70) + ($context["reste"] ?? null)), "adm" => (CoreExtension::getAttribute($this->env, $this->source,             // line 71
($context["totals"] ?? null), "adm", [], "any", false, false, false, 71) + CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_admissible", [], "any", false, false, false, 71)), "admis" => (CoreExtension::getAttribute($this->env, $this->source,             // line 72
($context["totals"] ?? null), "admis", [], "any", false, false, false, 72) + CoreExtension::getAttribute($this->env, $this->source, $context["result"], "sum_admis", [], "any", false, false, false, 72))];
            // line 74
            yield "            ";
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
        unset($context['_seq'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 75
        yield "        </tbody>
        <tfoot>
            <tr class=\"fw-bold\">
                <td></td>
                <td>TOTAUX</td>
                <td class=\"text-end text-primary\">";
        // line 80
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "pl", [], "any", false, false, false, 80), "html", null, true);
        yield "</td>
                <td class=\"text-end\">";
        // line 81
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "h", [], "any", false, false, false, 81), "html", null, true);
        yield "</td>
                <td class=\"text-end\">";
        // line 82
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "f", [], "any", false, false, false, 82), "html", null, true);
        yield "</td>
                <td class=\"text-end\">";
        // line 83
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 83), "html", null, true);
        yield "</td>
                <td class=\"text-end\">";
        // line 84
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "eval", [], "any", false, false, false, 84), "html", null, true);
        yield "</td>
                <td class=\"text-end text-danger\">";
        // line 85
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "non_eval", [], "any", false, false, false, 85), "html", null, true);
        yield "</td>
                <td class=\"text-end text-secondary\">";
        // line 86
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "adm", [], "any", false, false, false, 86), "html", null, true);
        yield "</td>
                <td class=\"text-end text-success\">";
        // line 87
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "admis", [], "any", false, false, false, 87), "html", null, true);
        yield "</td>
            </tr>
        </tfoot>
    </table>
    
    <div class=\"footer\">
        Direction de l\x27Apprentissage et de l\x27Insertion Professionnelle - Tous droits réservés
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "candidature/print/stat.html.twig";
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
        return array (  233 => 87,  229 => 86,  225 => 85,  221 => 84,  217 => 83,  213 => 82,  209 => 81,  205 => 80,  198 => 75,  183 => 74,  181 => 72,  180 => 71,  179 => 70,  178 => 69,  177 => 68,  176 => 67,  175 => 66,  174 => 65,  173 => 64,  168 => 62,  164 => 61,  160 => 60,  156 => 59,  152 => 58,  148 => 57,  144 => 56,  140 => 55,  136 => 54,  132 => 53,  129 => 52,  126 => 51,  108 => 50,  106 => 49,  85 => 31,  78 => 27,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/print/stat.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\print\\stat.html.twig");
    }
}
