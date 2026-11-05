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

/* @KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig */
class __TwigTemplate_42996709db4279653edfc296d6af93fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig"));

        // line 19
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 20
            yield "<div class=\"pagination\">
    <ul>

    ";
            // line 23
            if (array_key_exists("previous", $context)) {
                // line 24
                yield "        <li>
            <a rel=\"prev\" href=\"";
                // line 25
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">&laquo;&nbsp;";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        </li>
    ";
            } else {
                // line 28
                yield "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 29
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</span>
        </li>
    ";
            }
            // line 32
            yield "
    ";
            // line 33
            if ((($context["startPage"] ?? null) > 1)) {
                // line 34
                yield "        <li>
            <a href=\"";
                // line 35
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                yield "\">1</a>
        </li>
        ";
                // line 37
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 38
                    yield "            <li>
                <a href=\"";
                    // line 39
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    yield "\">2</a>
            </li>
        ";
                } elseif ((                // line 41
($context["startPage"] ?? null) != 2)) {
                    // line 42
                    yield "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 46
                yield "    ";
            }
            // line 47
            yield "
    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 49
                yield "        ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 50
                    yield "            <li>
                <a href=\"";
                    // line 51
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape($context["page"], "html", null, true);
                    yield "</a>
            </li>
        ";
                } else {
                    // line 54
                    yield "            <li class=\"active\">
                <span>";
                    // line 55
                    yield (string) $this->escaper->escape($context["page"], "html", null, true);
                    yield "</span>
            </li>
        ";
                }
                // line 58
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 60
            yield "
    ";
            // line 61
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 62
                yield "        ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 63
                    yield "            ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 64
                        yield "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 68
                        yield "                <li>
                    <a href=\"";
                        // line 69
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape((($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "</a>
                </li>
            ";
                    }
                    // line 72
                    yield "        ";
                }
                // line 73
                yield "        <li>
            <a href=\"";
                // line 74
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
        </li>
    ";
            }
            // line 77
            yield "
    ";
            // line 78
            if (array_key_exists("next", $context)) {
                // line 79
                yield "        <li>
            <a rel=\"next\" href=\"";
                // line 80
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 83
                yield "        <li class=\"disabled\">
            <span>";
                // line 84
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 87
            yield "    </ul>
</div>
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
        return "@KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig";
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
        return array (  218 => 87,  212 => 84,  209 => 83,  201 => 80,  198 => 79,  196 => 78,  193 => 77,  185 => 74,  182 => 73,  179 => 72,  171 => 69,  168 => 68,  162 => 64,  159 => 63,  156 => 62,  154 => 61,  151 => 60,  143 => 58,  137 => 55,  134 => 54,  126 => 51,  123 => 50,  120 => 49,  116 => 48,  113 => 47,  110 => 46,  104 => 42,  102 => 41,  97 => 39,  94 => 38,  92 => 37,  87 => 35,  84 => 34,  82 => 33,  79 => 32,  73 => 29,  70 => 28,  62 => 25,  59 => 24,  57 => 23,  52 => 20,  50 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\twitter_bootstrap_pagination.html.twig");
    }
}
