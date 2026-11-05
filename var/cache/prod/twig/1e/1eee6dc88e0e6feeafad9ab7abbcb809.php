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

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_3fd4274b4d94350ca409ce0661cf2eb5 extends Template
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
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none; color: inherit; }
        .message-item .icon svg { height: 24px; width: 24px; }
        .message-item .icon-close svg { transform: rotate(180deg); }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }

        #collector-content .message-bus .trace {
            border: var(--border);
            background: var(--base-0);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .message-bus .trace {
            font-size: 12px;
        }
        #collector-content .message-bus .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .message-bus .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 43
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "        ";
            $context["status_color"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
            // line 45
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 46
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/messenger.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 47
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 47)), "html", null, true);
                yield "</span>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            yield "
        ";
            // line 50
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 51
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "buses", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                    // line 52
                    yield "                ";
                    $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [$context["bus"]], "method", false, false, false, 52);
                    // line 53
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                    // line 54
                    yield (string) $this->escaper->escape($context["bus"], "html", null, true);
                    yield "</b>
                    <span
                        title=\"";
                    // line 56
                    yield (string) $this->escaper->escape(($context["exceptionsCount"] ?? null), "html", null, true);
                    yield " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 57
                    yield (string) (((($tmp = ($context["exceptionsCount"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
                    yield "\"
                    >
                        ";
                    // line 59
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["bus"]], "method", false, false, false, 59)), "html", null, true);
                    yield "
                    </span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['bus'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 63
                yield "        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            yield "
        ";
            // line 65
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => ($context["status_color"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 70
        yield "    <span class=\"label";
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" label-status-error") : (""));
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 70))) ? (" disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 71
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/messenger.svg");
        yield "</span>
        <strong>Messages</strong>
        ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 73) > 0)) {
            // line 74
            yield "            <span class=\"count\">
                <span>";
            // line 75
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 78
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 82
        yield "    <h2>Messages</h2>

    ";
        // line 84
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 84))) {
            // line 85
            yield "        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } elseif ((1 == Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 88
($context["collector"] ?? null), "buses", [], "any", false, false, false, 88)))) {
            // line 89
            yield "        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        ";
            // line 90
            yield (string) $this->getMacroNamespace()->call("render_bus_messages", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 90), true], $context, 90, $this->source);
            yield "
    ";
        } else {
            // line 92
            yield "        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                ";
            // line 94
            $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 94);
            // line 95
            yield "                ";
            $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 95);
            // line 96
            yield "                <h3 class=\"tab-title\">All<span class=\"badge ";
            yield (string) (((($tmp = ($context["exceptionsCount"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["exceptionsCount"] ?? null) == Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
            yield "\">";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)), "html", null, true);
            yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    ";
            // line 100
            yield (string) $this->getMacroNamespace()->call("render_bus_messages", [($context["messages"] ?? null), true], $context, 100, $this->source);
            yield "
                </div>
            </div>

            ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "buses", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 105
                yield "                <div class=\"tab message-bus\">
                    ";
                // line 106
                $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["bus"]], "method", false, false, false, 106);
                // line 107
                yield "                    ";
                $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [$context["bus"]], "method", false, false, false, 107);
                // line 108
                yield "                    <h3 class=\"tab-title\">";
                yield (string) $this->escaper->escape($context["bus"], "html", null, true);
                yield "<span class=\"badge ";
                yield (string) (((($tmp = ($context["exceptionsCount"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["exceptionsCount"] ?? null) == Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
                yield "\">";
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)), "html", null, true);
                yield "</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 111
                yield (string) $this->escaper->escape($context["bus"], "html", null, true);
                yield "</code> bus</p>
                        ";
                // line 112
                yield (string) $this->getMacroNamespace()->call("render_bus_messages", [($context["messages"] ?? null)], $context, 112, $this->source);
                yield "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bus'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 116
            yield "        </div>
    ";
        }
        // line 118
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "render_bus_messages" => new \Twig\TwigMacro("render_bus_messages", function ($messages = null, $showBus = false, ...$varargs): string|Markup {
                // line 121
                $macros = $this->macros;
                $context = [
                    "messages" => $messages,
                    "showBus" => $showBus,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

                    // line 122
                    yield "    ";
                    $context["discr"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                    // line 123
                    yield "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                        // line 124
                        yield "    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-";
                        // line 128
                        yield (string) $this->escaper->escape(($context["discr"] ?? null), "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 128), "html", null, true);
                        yield "-details\"
                    data-toggle-initial=\"";
                        // line 129
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("display") : (""));
                        yield "\"
                >
                    <span class=\"dump-inline\">";
                        // line 131
                        yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 131), "type", [], "any", false, false, false, 131));
                        yield "</span>
                    ";
                        // line 132
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 132)) {
                            // line 133
                            yield "                        <span class=\"label status-error\">exception</span>
                    ";
                        }
                        // line 135
                        yield "                    <button class=\"btn btn-link toggle-button\" type=\"button\">
                        <span class=\"icon icon-close\">";
                        // line 136
                        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                        yield "</span>
                        <span class=\"icon icon-open\">";
                        // line 137
                        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                        yield "</span>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-";
                        // line 142
                        yield (string) $this->escaper->escape(($context["discr"] ?? null), "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 142), "html", null, true);
                        yield "-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    ";
                        // line 147
                        $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "caller", [], "any", false, false, false, 147);
                        // line 148
                        yield "                    ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 149
                            yield "                        ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 149), CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 149));
                            // line 150
                            yield "                        ";
                            if ((($tmp = ($context["link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 151
                                yield "                            <a href=\"";
                                yield (string) $this->escaper->escape(($context["link"] ?? null), "html", null, true);
                                yield "\" title=\"";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 151), "html", null, true);
                                yield "\">";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 151), "html", null, true);
                                yield "</a>
                        ";
                            } else {
                                // line 153
                                yield "                            <abbr title=\"";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 153), "html", null, true);
                                yield "\">";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 153), "html", null, true);
                                yield "</abbr>
                        ";
                            }
                            // line 155
                            yield "                    ";
                        } else {
                            // line 156
                            yield "                        ";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 156), "html", null, true);
                            yield "
                    ";
                        }
                        // line 158
                        yield "                    line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                        yield (string) $this->escaper->escape(($context["discr"] ?? null), "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 158), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 158), "html", null, true);
                        yield "</button>

                    <div class=\"hidden\" id=\"sf-trace-";
                        // line 160
                        yield (string) $this->escaper->escape(($context["discr"] ?? null), "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 160), "html", null, true);
                        yield "\">
                        <div class=\"trace\">
                            ";
                        // line 162
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 163
                            yield "                                ";
                            yield (string) Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 163), CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 163)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                            // line 168
                            yield "
                            ";
                        }
                        // line 170
                        yield "                        </div>
                    </div>
                </td>
            </tr>
            ";
                        // line 174
                        if ((($tmp = ($context["showBus"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 175
                            yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>";
                            // line 177
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 177), "html", null, true);
                            yield "</td>
                </tr>
            ";
                        }
                        // line 180
                        yield "            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>";
                        // line 182
                        yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 182), "value", [], "any", false, false, false, 182), 2);
                        yield "</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    ";
                        // line 187
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps", [], "any", false, false, false, 187));
                        $context['_iterated'] = false;
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 188
                            yield "                        ";
                            yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                            yield "
                    ";
                            $context['_iterated'] = true;
                        }
                        // line 189
                        if (!$context['_iterated']) {
                            // line 190
                            yield "                        <span class=\"text-muted font-normal\">No items</span>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 192
                        yield "                </td>
            </tr>
            ";
                        // line 194
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", true, true, false, 194)) {
                            // line 195
                            yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        ";
                            // line 198
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", false, false, false, 198));
                            $context['_iterated'] = false;
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 199
                                yield "                            ";
                                yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                                yield "
                        ";
                                $context['_iterated'] = true;
                            }
                            // line 200
                            if (!$context['_iterated']) {
                                // line 201
                                yield "                            <span class=\"text-muted\">No items</span>
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
                            $context = array_intersect_key($context, $_parent);
                            $context += $_parent;
                            // line 203
                            yield "                    </td>
                </tr>
            ";
                        }
                        // line 206
                        yield "            ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 206)) {
                            // line 207
                            yield "                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        ";
                            // line 210
                            yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", false, false, false, 210), "value", [], "any", false, false, false, 210), 1);
                            yield "
                    </td>
                </tr>
            ";
                        }
                        // line 214
                        yield "        </tbody>
    </table>
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
                    unset($context['_seq'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["messages" => false, "showBus" => true], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/messenger.html.twig";
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
        return array (  619 => 214,  612 => 210,  607 => 207,  604 => 206,  599 => 203,  591 => 201,  589 => 200,  582 => 199,  577 => 198,  572 => 195,  570 => 194,  566 => 192,  558 => 190,  556 => 189,  549 => 188,  544 => 187,  536 => 182,  532 => 180,  526 => 177,  522 => 175,  520 => 174,  514 => 170,  510 => 168,  507 => 163,  505 => 162,  498 => 160,  488 => 158,  482 => 156,  479 => 155,  471 => 153,  461 => 151,  458 => 150,  455 => 149,  452 => 148,  450 => 147,  440 => 142,  432 => 137,  428 => 136,  425 => 135,  421 => 133,  419 => 132,  415 => 131,  410 => 129,  404 => 128,  398 => 124,  380 => 123,  377 => 122,  363 => 121,  350 => 118,  346 => 116,  335 => 112,  331 => 111,  320 => 108,  317 => 107,  315 => 106,  312 => 105,  308 => 104,  301 => 100,  291 => 96,  288 => 95,  286 => 94,  282 => 92,  277 => 90,  274 => 89,  272 => 88,  267 => 85,  265 => 84,  261 => 82,  251 => 81,  242 => 78,  236 => 75,  233 => 74,  231 => 73,  226 => 71,  220 => 70,  210 => 69,  199 => 65,  196 => 64,  192 => 63,  181 => 59,  176 => 57,  172 => 56,  167 => 54,  164 => 53,  161 => 52,  156 => 51,  154 => 50,  151 => 49,  145 => 47,  140 => 46,  137 => 45,  134 => 44,  131 => 43,  121 => 42,  75 => 4,  65 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Collector/messenger.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\messenger.html.twig");
    }
}
