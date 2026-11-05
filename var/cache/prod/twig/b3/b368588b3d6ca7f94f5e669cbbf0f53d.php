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

/* pagination/tailwind.html.twig */
class __TwigTemplate_89fbb61382e20fc3226c908e95a88c8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/tailwind.html.twig"));

        // line 1
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            yield "    <nav class=\"flex items-center gap-1\" aria-label=\"Pagination\">
        
        ";
            // line 5
            yield "        ";
            if (array_key_exists("previous", $context)) {
                // line 6
                yield "            <a rel=\"prev\" href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\" class=\"inline-flex items-center justify-center min-w-[34px] h-[34px] px-2 rounded-lg text-xs font-semibold border transition-colors duration-150 bg-white border-slate-200 text-slate-500 hover:bg-indigo-50 hover:text-indigo-600 hover:border-indigo-200\">
                <i class=\"fas fa-chevron-left\" style=\"font-size:0.6rem\"></i>
            </a>
        ";
            } else {
                // line 10
                yield "            <span class=\"inline-flex items-center justify-center min-w-[34px] h-[34px] px-2 rounded-lg text-xs font-semibold border transition-colors duration-150 bg-white border-slate-100 text-slate-300 cursor-not-allowed opacity-40\">
                <i class=\"fas fa-chevron-left\" style=\"font-size:0.6rem\"></i>
            </span>
        ";
            }
            // line 14
            yield "
        ";
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 18
                    yield "                <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\" class=\"inline-flex items-center justify-center min-w-[34px] h-[34px] px-2 rounded-lg text-xs font-semibold border transition-colors duration-150 bg-white border-slate-200 text-slate-500 hover:bg-indigo-50 hover:text-indigo-600 hover:border-indigo-200\">
                    ";
                    // line 19
                    yield (string) $this->escaper->escape($context["page"], "html", null, true);
                    yield "
                </a>
            ";
                } else {
                    // line 22
                    yield "                <span class=\"inline-flex items-center justify-center min-w-[34px] h-[34px] px-2 rounded-lg text-xs font-semibold border transition-colors duration-150 bg-indigo-600 border-indigo-600 text-white cursor-default\">
                    ";
                    // line 23
                    yield (string) $this->escaper->escape($context["page"], "html", null, true);
                    yield "
                </span>
            ";
                }
                // line 26
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 27
            yield "
        ";
            // line 29
            yield "        ";
            if (array_key_exists("next", $context)) {
                // line 30
                yield "            <a rel=\"next\" href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\" class=\"inline-flex items-center justify-center min-w-[34px] h-[34px] px-2 rounded-lg text-xs font-semibold border transition-colors duration-150 bg-white border-slate-200 text-slate-500 hover:bg-indigo-50 hover:text-indigo-600 hover:border-indigo-200\">
                <i class=\"fas fa-chevron-right\" style=\"font-size:0.6rem\"></i>
            </a>
        ";
            } else {
                // line 34
                yield "            <span class=\"inline-flex items-center justify-center min-w-[34px] h-[34px] px-2 rounded-lg text-xs font-semibold border transition-colors duration-150 bg-white border-slate-100 text-slate-300 cursor-not-allowed opacity-40\">
                <i class=\"fas fa-chevron-right\" style=\"font-size:0.6rem\"></i>
            </span>
        ";
            }
            // line 38
            yield "    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pagination/tailwind.html.twig";
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
        return array (  131 => 38,  125 => 34,  117 => 30,  114 => 29,  111 => 27,  104 => 26,  98 => 23,  95 => 22,  89 => 19,  84 => 18,  81 => 17,  76 => 16,  73 => 14,  67 => 10,  59 => 6,  56 => 5,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pagination/tailwind.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\pagination\\tailwind.html.twig");
    }
}
