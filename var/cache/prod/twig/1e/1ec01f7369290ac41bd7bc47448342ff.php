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

/* @KnpPaginator/Pagination/foundation_v5_pagination.html.twig */
class __TwigTemplate_61f24782446aac187a7ee4ef158db2db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig"));

        // line 20
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 21
            yield "    <ul class=\"pagination\">
        ";
            // line 22
            if (array_key_exists("previous", $context)) {
                // line 23
                yield "                 <li class=\"arrow\">
                     <a rel=\"prev\" href=\"";
                // line 24
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">&laquo; ";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
                 </li>
        ";
            } else {
                // line 27
                yield "            <li class=\"arrow unavailable\">
                <a>
                    &laquo; ";
                // line 29
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </a>
            </li>
        ";
            }
            // line 33
            yield "
        ";
            // line 34
            if ((($context["startPage"] ?? null) > 1)) {
                // line 35
                yield "            <li>
                <a href=\"";
                // line 36
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                yield "\">1</a>
            </li>
            ";
                // line 38
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 39
                    yield "                <li>
                    <a href=\"";
                    // line 40
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    yield "\">2</a>
                </li>
            ";
                } elseif ((                // line 42
($context["startPage"] ?? null) != 2)) {
                    // line 43
                    yield "                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            ";
                }
                // line 47
                yield "        ";
            }
            // line 48
            yield "
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 51
                    yield "                <li>
                    <a href=\"";
                    // line 52
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">
                        ";
                    // line 53
                    yield (string) $this->escaper->escape($context["page"], "html", null, true);
                    yield "
                    </a>
                </li>
            ";
                } else {
                    // line 57
                    yield "                <li class=\"current\">
                    <a>";
                    // line 58
                    yield (string) $this->escaper->escape($context["page"], "html", null, true);
                    yield "</a>
                </li>
            ";
                }
                // line 61
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 63
            yield "
        ";
            // line 64
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 65
                yield "            ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 66
                    yield "                ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 67
                        yield "                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 71
                        yield "                    <li>
                        <a href=\"";
                        // line 72
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        yield "\">
                            ";
                        // line 73
                        yield (string) $this->escaper->escape((($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "
                        </a>
                    </li>
                ";
                    }
                    // line 77
                    yield "            ";
                }
                // line 78
                yield "            <li>
                <a href=\"";
                // line 79
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
            </li>
        ";
            }
            // line 82
            yield "
        ";
            // line 83
            if (array_key_exists("next", $context)) {
                // line 84
                yield "            <li class=\"arrow\">
                <a rel=\"next\" href=\"";
                // line 85
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">
                    ";
                // line 86
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield " &nbsp;&raquo;
                </a>
            </li>
        ";
            } else {
                // line 90
                yield "            <li class=\"arrow unavailable\">
                <a>
                    ";
                // line 92
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield " &nbsp;&raquo;
                </a>
            </li>
        ";
            }
            // line 96
            yield "    </ul>
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
        return "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig";
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
        return array (  229 => 96,  222 => 92,  218 => 90,  211 => 86,  207 => 85,  204 => 84,  202 => 83,  199 => 82,  191 => 79,  188 => 78,  185 => 77,  178 => 73,  174 => 72,  171 => 71,  165 => 67,  162 => 66,  159 => 65,  157 => 64,  154 => 63,  146 => 61,  140 => 58,  137 => 57,  130 => 53,  126 => 52,  123 => 51,  120 => 50,  116 => 49,  113 => 48,  110 => 47,  104 => 43,  102 => 42,  97 => 40,  94 => 39,  92 => 38,  87 => 36,  84 => 35,  82 => 34,  79 => 33,  72 => 29,  68 => 27,  60 => 24,  57 => 23,  55 => 22,  52 => 21,  50 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\foundation_v5_pagination.html.twig");
    }
}
