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

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_b3af030a60fc167189c24f89cff7cb9a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        // line 1
        yield "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 5), "html", null, true)) : ("(none)"));
        yield "</span>
        <span class=\"label\">Matched route</span>
    </div>
</div>

";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "route", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    <h3>Route Parameters</h3>

    ";
            // line 13
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "routeParams", [], "any", false, false, false, 13))) {
                // line 14
                yield "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 18
                yield "        ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "routeParams", [], "any", false, false, false, 18), "labels" => ["Name", "Value"]], false);
                yield "
    ";
            }
        }
        // line 21
        yield "
";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["router"] ?? null), "redirect", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 27
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["router"] ?? null), "targetUrl", [], "any", false, false, false, 27), "html", null, true);
            yield "
        ";
            // line 28
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["router"] ?? null), "targetRoute", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"text-muted\">(route: \"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["router"] ?? null), "targetRoute", [], "any", false, false, false, 28), "html", null, true);
                yield "\")</span>";
            }
            // line 29
            yield "    </div>
";
        }
        // line 31
        yield "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 35
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "pathinfo", [], "any", false, false, false, 35), "html", null, true);
        yield "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["traces"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 49
            yield "        <tr class=\"";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 49) == 1)) ? ("status-warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 49) == 2)) ? ("status-success") : (""))));
            yield "\">
            <td class=\"font-normal text-muted nowrap\">";
            // line 50
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td class=\"break-long-words\">";
            // line 51
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "name", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
            <td class=\"break-long-words\">";
            // line 52
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "path", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
            <td class=\"break-long-words font-normal\">
                ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 54) == 1)) {
                // line 55
                yield "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 56
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 56), "html", null, true);
                yield "</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 57
$context["trace"], "level", [], "any", false, false, false, 57) == 2)) {
                // line 58
                yield "                    ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 58), "html", null, true);
                yield "
                ";
            } else {
                // line 60
                yield "                    Path does not match
                ";
            }
            // line 62
            yield "            </td>
        </tr>
    ";
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
        unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 65
        yield "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Router/panel.html.twig";
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
        return array (  205 => 65,  188 => 62,  184 => 60,  178 => 58,  176 => 57,  172 => 56,  169 => 55,  167 => 54,  162 => 52,  158 => 51,  154 => 50,  149 => 49,  132 => 48,  116 => 35,  110 => 31,  106 => 29,  100 => 28,  96 => 27,  90 => 23,  88 => 22,  85 => 21,  78 => 18,  72 => 14,  70 => 13,  66 => 11,  64 => 10,  56 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Router/panel.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Router\\panel.html.twig");
    }
}
