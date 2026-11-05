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

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_098505571aa2a20df7c5f48ec3216d2a extends Template
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
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        yield "<span class=\"label\">
    <span class=\"icon\">";
        // line 5
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/event.svg");
        yield "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 11
        yield "    <h2>Dispatched Events</h2>

    <div class=\"sf-tabs\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["dispatcherName"] => $context["dispatcherData"]) {
            // line 15
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">";
            // line 16
            yield (string) $this->escaper->escape($context["dispatcherName"], "html", null, true);
            yield "</h3>
                <div class=\"tab-content\">
                    ";
            // line 18
            if (Twig\Extension\CoreExtension::testEmpty((($_v0 = $context["dispatcherData"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["called_listeners"] ?? null) : null))) {
                // line 19
                yield "                        <div class=\"empty empty-panel\">
                            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 23
                yield "                        <div class=\"sf-tabs\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
                // line 25
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v1 = $context["dispatcherData"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["called_listeners"] ?? null) : null)), "html", null, true);
                yield "</span></h3>

                                <div class=\"tab-content\">
                                    ";
                // line 28
                yield (string) $this->getMacroNamespace()->call("render_table", [(($_v2 = $context["dispatcherData"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["called_listeners"] ?? null) : null)], $context, 28, $this->source);
                yield "
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
                // line 33
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v3 = $context["dispatcherData"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["not_called_listeners"] ?? null) : null)), "html", null, true);
                yield "</span></h3>
                                <div class=\"tab-content\">
                                    ";
                // line 35
                if (Twig\Extension\CoreExtension::testEmpty((($_v4 = $context["dispatcherData"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["not_called_listeners"] ?? null) : null))) {
                    // line 36
                    yield "                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no uncalled listeners</strong>.
                                            </p>
                                            <p>
                                                All listeners were called or an error occurred
                                                when trying to collect uncalled listeners (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 47
                    yield "                                        ";
                    yield (string) $this->getMacroNamespace()->call("render_table", [(($_v5 = $context["dispatcherData"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["not_called_listeners"] ?? null) : null)], $context, 47, $this->source);
                    yield "
                                    ";
                }
                // line 49
                yield "                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Orphaned Events <span class=\"badge\">";
                // line 53
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v6 = $context["dispatcherData"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["orphaned_events"] ?? null) : null)), "html", null, true);
                yield "</span></h3>
                                <div class=\"tab-content\">
                                    ";
                // line 55
                if (Twig\Extension\CoreExtension::testEmpty((($_v7 = $context["dispatcherData"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["orphaned_events"] ?? null) : null))) {
                    // line 56
                    yield "                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no orphaned events</strong>.
                                            </p>
                                            <p>
                                                All dispatched events were handled or an error occurred
                                                when trying to collect orphaned events (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 67
                    yield "                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v8 = $context["dispatcherData"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["orphaned_events"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 75
                        yield "                                                    <tr>
                                                        <td class=\"font-normal\">";
                        // line 76
                        yield (string) $this->escaper->escape($context["event"], "html", null, true);
                        yield "</td>
                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 79
                    yield "                                            </tbody>
                                        </table>
                                    ";
                }
                // line 82
                yield "                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 86
            yield "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['dispatcherName'], $context['dispatcherData'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 89
        yield "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "render_table" => new \Twig\TwigMacro("render_table", function ($listeners = null, ...$varargs): string|Markup {
                // line 92
                $macros = $this->macros;
                $context = [
                    "listeners" => $listeners,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

                    // line 93
                    yield "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
                    // line 101
                    $context["previous_event"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["listeners"] ?? null)), "event", [], "any", false, false, false, 101);
                    // line 102
                    yield "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["listeners"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                        // line 103
                        yield "            ";
                        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 103) != ($context["previous_event"] ?? null)))) {
                            // line 104
                            yield "                ";
                            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 105
                                yield "                    </tbody>
                ";
                            }
                            // line 107
                            yield "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                            // line 110
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 110), "html", null, true);
                            yield "</th>
                    </tr>

                ";
                            // line 113
                            $context["previous_event"] = CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 113);
                            // line 114
                            yield "            ";
                        }
                        // line 115
                        yield "
            <tr>
                <td class=\"text-right nowrap\">";
                        // line 117
                        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "priority", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "priority", [], "any", false, false, false, 117), "-")) : ("-")), "html", null, true);
                        yield "</td>
                <td class=\"font-normal\">";
                        // line 118
                        yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 118));
                        yield "</td>
            </tr>

            ";
                        // line 121
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 122
                            yield "                </tbody>
            ";
                        }
                        // line 124
                        yield "        ";
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
                    unset($context['_seq'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 125
                    yield "    </table>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["listeners" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/events.html.twig";
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
        return array (  356 => 125,  341 => 124,  337 => 122,  335 => 121,  329 => 118,  325 => 117,  321 => 115,  318 => 114,  316 => 113,  310 => 110,  305 => 107,  301 => 105,  298 => 104,  295 => 103,  277 => 102,  275 => 101,  265 => 93,  252 => 92,  239 => 89,  230 => 86,  224 => 82,  219 => 79,  209 => 76,  206 => 75,  202 => 74,  193 => 67,  180 => 56,  178 => 55,  173 => 53,  167 => 49,  161 => 47,  148 => 36,  146 => 35,  141 => 33,  133 => 28,  127 => 25,  123 => 23,  117 => 19,  115 => 18,  110 => 16,  107 => 15,  103 => 14,  98 => 11,  88 => 10,  76 => 5,  73 => 4,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Collector/events.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\events.html.twig");
    }
}
