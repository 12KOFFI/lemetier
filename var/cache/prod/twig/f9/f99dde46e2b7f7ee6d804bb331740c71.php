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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_f677a96ccc22b858261bc13cdd3e2895 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

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
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 32
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 32) > 0)) {
            // line 33
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 34
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 36
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 36), "html", null, true);
                yield "
            </span>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            yield "
        ";
            // line 40
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
                // line 43
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 43), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
                // line 48
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, false, 48) * 1000)), "html", null, true);
                yield " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 56
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 56), "serialize", [], "any", false, false, false, 56)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 60
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 60), "deserialize", [], "any", false, false, false, 60)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 66
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 66), "encode", [], "any", false, false, false, 66)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 70
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 70), "decode", [], "any", false, false, false, 70)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 76
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 76), "normalize", [], "any", false, false, false, 76)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 80
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 80), "denormalize", [], "any", false, false, false, 80)), "html", null, true);
                yield "</span>
                    </div>
                </div>
            </div>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            yield "
        ";
            // line 86
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 91
        yield "    <span class=\"label ";
        yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 92
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
        yield "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 98
        yield "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 100
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        ";
        } else {
            // line 105
            yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 107
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 107), "html", null, true);
            yield "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, false, 112) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 118
            yield (string) $this->getMacroNamespace()->call("render_serialize_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 118), true], $context, 118, $this->source);
            yield "
                ";
            // line 119
            yield (string) $this->getMacroNamespace()->call("render_serialize_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 119), false], $context, 119, $this->source);
            yield "

                ";
            // line 121
            yield (string) $this->getMacroNamespace()->call("render_normalize_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 121), true], $context, 121, $this->source);
            yield "
                ";
            // line 122
            yield (string) $this->getMacroNamespace()->call("render_normalize_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 122), false], $context, 122, $this->source);
            yield "

                ";
            // line 124
            yield (string) $this->getMacroNamespace()->call("render_encode_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 124), true], $context, 124, $this->source);
            yield "
                ";
            // line 125
            yield (string) $this->getMacroNamespace()->call("render_encode_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 125), false], $context, 125, $this->source);
            yield "
            </div>
        ";
        }
        // line 128
        yield "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "render_serialize_tab" => new \Twig\TwigMacro("render_serialize_tab", function ($collectorData = null, $serialize = null, ...$varargs): string|Markup {
                // line 131
                $macros = $this->macros;
                $context = [
                    "collectorData" => $collectorData,
                    "serialize" => $serialize,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

                    // line 132
                    yield "    ";
                    $context["data"] = (((($tmp = ($context["serialize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "serialize", [], "any", false, false, false, 132)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "deserialize", [], "any", false, false, false, 132)));
                    // line 133
                    yield "    ";
                    $context["cellPrefix"] = (((($tmp = ($context["serialize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
                    // line 134
                    yield "
    <div class=\"tab ";
                    // line 135
                    yield (string) (( !(($tmp = ($context["data"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "\">
        <h3 class=\"tab-title\">";
                    // line 136
                    yield (string) (((($tmp = ($context["serialize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
                    yield " <span class=\"badge\">";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null)), "html", null, true);
                    yield "</h3>
        <div class=\"tab-content\">
            ";
                    // line 138
                    if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 139
                        yield "                <div class=\"empty\">
                    <p>Nothing was ";
                        // line 140
                        yield (string) (((($tmp = ($context["serialize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialized") : ("deserialized"));
                        yield ".</p>
                </div>
            ";
                    } else {
                        // line 143
                        yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                        // line 155
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
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
                            // line 156
                            yield "                            <tr>
                                <td>";
                            // line 157
                            yield (string) $this->getMacroNamespace()->call("render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 157), ($context["cellPrefix"] ?? null)], $context, 157, $this->source);
                            yield "</td>
                                <td>";
                            // line 158
                            yield (string) $this->getMacroNamespace()->call("render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 158), ($context["cellPrefix"] ?? null)], $context, 158, $this->source);
                            yield "</td>
                                <td>";
                            // line 159
                            yield (string) $this->getMacroNamespace()->call("render_normalizer_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 159), ($context["cellPrefix"] ?? null)], $context, 159, $this->source);
                            yield "</td>
                                <td>";
                            // line 160
                            yield (string) $this->getMacroNamespace()->call("render_encoder_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160), ($context["cellPrefix"] ?? null)], $context, 160, $this->source);
                            yield "</td>
                                <td>";
                            // line 161
                            yield (string) $this->getMacroNamespace()->call("render_time_cell", [$context["item"]], $context, 161, $this->source);
                            yield "</td>
                                <td>";
                            // line 162
                            yield (string) $this->getMacroNamespace()->call("render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162), ($context["cellPrefix"] ?? null)], $context, 162, $this->source);
                            yield "</td>
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
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 165
                        yield "                    </tbody>
                </table>
            ";
                    }
                    // line 168
                    yield "        </div>
    </div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["collectorData" => false, "serialize" => false], false),
            "render_caller_cell" => new \Twig\TwigMacro("render_caller_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 172
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

                    // line 173
                    yield "    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, false, 173)) {
                        // line 174
                        yield "        <span class=\"metadata\">
            ";
                        // line 175
                        $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", false, false, false, 175);
                        // line 176
                        yield "            ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 177
                            yield "                ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 177), CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 177));
                            // line 178
                            yield "                ";
                            if ((($tmp = ($context["link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 179
                                yield "                    <a href=\"";
                                yield (string) $this->escaper->escape(($context["link"] ?? null), "html", null, true);
                                yield "\" title=\"";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 179), "html", null, true);
                                yield "\">";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 179), "html", null, true);
                                yield "</a>
                ";
                            } else {
                                // line 181
                                yield "                    <abbr title=\"";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 181), "html", null, true);
                                yield "\">";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 181), "html", null, true);
                                yield "</abbr>
                ";
                            }
                            // line 183
                            yield "            ";
                        } else {
                            // line 184
                            yield "                ";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 184), "html", null, true);
                            yield "
            ";
                        }
                        // line 186
                        yield "            line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                        yield (string) $this->escaper->escape(($context["method"] ?? null), "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(($context["index"] ?? null), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 186), "html", null, true);
                        yield "</button>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-";
                        // line 189
                        yield (string) $this->escaper->escape(($context["method"] ?? null), "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(($context["index"] ?? null), "html", null, true);
                        yield "\">
            <div class=\"trace\">
                ";
                        // line 191
                        yield (string) Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 191), CoreExtension::getAttribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 191)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                        // line 196
                        yield "
            </div>
        </div>
    ";
                    }
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_normalize_tab" => new \Twig\TwigMacro("render_normalize_tab", function ($collectorData = null, $normalize = null, ...$varargs): string|Markup {
                // line 202
                $macros = $this->macros;
                $context = [
                    "collectorData" => $collectorData,
                    "normalize" => $normalize,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

                    // line 203
                    yield "    ";
                    $context["data"] = (((($tmp = ($context["normalize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "normalize", [], "any", false, false, false, 203)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "denormalize", [], "any", false, false, false, 203)));
                    // line 204
                    yield "    ";
                    $context["cellPrefix"] = (((($tmp = ($context["normalize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
                    // line 205
                    yield "
    <div class=\"tab ";
                    // line 206
                    yield (string) (( !(($tmp = ($context["data"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "\">
        <h3 class=\"tab-title\">";
                    // line 207
                    yield (string) (((($tmp = ($context["normalize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
                    yield " <span class=\"badge\">";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null)), "html", null, true);
                    yield "</h3>
        <div class=\"tab-content\">
            ";
                    // line 209
                    if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 210
                        yield "                <div class=\"empty\">
                    <p>Nothing was ";
                        // line 211
                        yield (string) (((($tmp = ($context["normalize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalized") : ("denormalized"));
                        yield ".</p>
                </div>
            ";
                    } else {
                        // line 214
                        yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                        // line 225
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
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
                            // line 226
                            yield "                            <tr>
                                <td>";
                            // line 227
                            yield (string) $this->getMacroNamespace()->call("render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 227), ($context["cellPrefix"] ?? null)], $context, 227, $this->source);
                            yield "</td>
                                <td>";
                            // line 228
                            yield (string) $this->getMacroNamespace()->call("render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 228), ($context["cellPrefix"] ?? null)], $context, 228, $this->source);
                            yield "</td>
                                <td>";
                            // line 229
                            yield (string) $this->getMacroNamespace()->call("render_normalizer_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 229), ($context["cellPrefix"] ?? null)], $context, 229, $this->source);
                            yield "</td>
                                <td>";
                            // line 230
                            yield (string) $this->getMacroNamespace()->call("render_time_cell", [$context["item"]], $context, 230, $this->source);
                            yield "</td>
                                <td>";
                            // line 231
                            yield (string) $this->getMacroNamespace()->call("render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 231), ($context["cellPrefix"] ?? null)], $context, 231, $this->source);
                            yield "</td>
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
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 234
                        yield "                    </tbody>
                </table>
            ";
                    }
                    // line 237
                    yield "        </div>
    </div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["collectorData" => false, "normalize" => false], false),
            "render_encode_tab" => new \Twig\TwigMacro("render_encode_tab", function ($collectorData = null, $encode = null, ...$varargs): string|Markup {
                // line 241
                $macros = $this->macros;
                $context = [
                    "collectorData" => $collectorData,
                    "encode" => $encode,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

                    // line 242
                    yield "    ";
                    $context["data"] = (((($tmp = ($context["encode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "encode", [], "any", false, false, false, 242)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "decode", [], "any", false, false, false, 242)));
                    // line 243
                    yield "    ";
                    $context["cellPrefix"] = (((($tmp = ($context["encode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
                    // line 244
                    yield "
    <div class=\"tab ";
                    // line 245
                    yield (string) (( !(($tmp = ($context["data"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "\">
        <h3 class=\"tab-title\">";
                    // line 246
                    yield (string) (((($tmp = ($context["encode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
                    yield " <span class=\"badge\">";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null)), "html", null, true);
                    yield "</h3>
        <div class=\"tab-content\">
            ";
                    // line 248
                    if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 249
                        yield "                <div class=\"empty\">
                    <p>Nothing was ";
                        // line 250
                        yield (string) (((($tmp = ($context["encode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encoded") : ("decoded"));
                        yield ".</p>
                </div>
            ";
                    } else {
                        // line 253
                        yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                        // line 264
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
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
                            // line 265
                            yield "                            <tr>
                                <td>";
                            // line 266
                            yield (string) $this->getMacroNamespace()->call("render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 266), ($context["cellPrefix"] ?? null)], $context, 266, $this->source);
                            yield "</td>
                                <td>";
                            // line 267
                            yield (string) $this->getMacroNamespace()->call("render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 267), ($context["cellPrefix"] ?? null)], $context, 267, $this->source);
                            yield "</td>
                                <td>";
                            // line 268
                            yield (string) $this->getMacroNamespace()->call("render_encoder_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 268), ($context["cellPrefix"] ?? null)], $context, 268, $this->source);
                            yield "</td>
                                <td>";
                            // line 269
                            yield (string) $this->getMacroNamespace()->call("render_time_cell", [$context["item"]], $context, 269, $this->source);
                            yield "</td>
                                <td>";
                            // line 270
                            yield (string) $this->getMacroNamespace()->call("render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 270), ($context["cellPrefix"] ?? null)], $context, 270, $this->source);
                            yield "</td>
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
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 273
                        yield "                    </tbody>
                </table>
            ";
                    }
                    // line 276
                    yield "        </div>
    </div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["collectorData" => false, "encode" => false], false),
            "render_data_cell" => new \Twig\TwigMacro("render_data_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 280
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

                    // line 281
                    yield "    ";
                    $context["data_id"] = ((("data-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
                    // line 282
                    yield "
    <span class=\"nowrap\">";
                    // line 283
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "dataType", [], "any", false, false, false, 283), "html", null, true);
                    yield "</span>

    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    // line 286
                    yield (string) $this->escaper->escape(($context["data_id"] ?? null), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide contents\">Show contents</button>
        <div id=\"";
                    // line 287
                    yield (string) $this->escaper->escape(($context["data_id"] ?? null), "html", null, true);
                    yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
                    // line 288
                    yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "data", [], "any", false, false, false, 288));
                    yield "
        </div>
    </div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_context_cell" => new \Twig\TwigMacro("render_context_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 293
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

                    // line 294
                    yield "    ";
                    $context["context_id"] = ((("context-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
                    // line 295
                    yield "
    ";
                    // line 296
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 296)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 297
                        yield "        <span class=\"nowrap\">Type: ";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 297), "html", null, true);
                        yield "</span>
        <div class=\"nowrap\">Format: ";
                        // line 298
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 298), "html", null, true)) : ("none"));
                        yield "</div>
    ";
                    } else {
                        // line 300
                        yield "        <span class=\"nowrap\">Format: ";
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 300), "html", null, true)) : ("none"));
                        yield "</span>
    ";
                    }
                    // line 302
                    yield "
    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    // line 304
                    yield (string) $this->escaper->escape(($context["context_id"] ?? null), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide context\">Show context</button>
        <div id=\"";
                    // line 305
                    yield (string) $this->escaper->escape(($context["context_id"] ?? null), "html", null, true);
                    yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
                    // line 306
                    yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "context", [], "any", false, false, false, 306));
                    yield "
        </div>
    </div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_normalizer_cell" => new \Twig\TwigMacro("render_normalizer_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 311
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

                    // line 312
                    yield "    ";
                    $context["nested_normalizers_id"] = ((("nested-normalizers-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
                    // line 313
                    yield "
    ";
                    // line 314
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 314)) {
                        // line 315
                        yield "        <span class=\"nowrap\"><a href=\"";
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "file", [], "any", false, false, false, 315), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "line", [], "any", false, false, false, 315)), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "file", [], "any", false, false, false, 315), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "class", [], "any", false, false, false, 315), "html", null, true);
                        yield "</a> (";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "time", [], "any", false, false, false, 315) * 1000)), "html", null, true);
                        yield " ms)</span>
    ";
                    }
                    // line 317
                    yield "
    ";
                    // line 318
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 318)) > 1)) {
                        // line 319
                        yield "        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 320
                        yield (string) $this->escaper->escape(($context["nested_normalizers_id"] ?? null), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</button>
            <div id=\"";
                        // line 321
                        yield (string) $this->escaper->escape(($context["nested_normalizers_id"] ?? null), "html", null, true);
                        yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                        // line 323
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 323));
                        foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                            // line 324
                            yield "                        <li><span class=\"nowrap\">x";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 324), "html", null, true);
                            yield " <a href=\"";
                            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 324), CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 324)), "html", null, true);
                            yield "\" title=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 324), "html", null, true);
                            yield "\">";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 324), "html", null, true);
                            yield "</a> (";
                            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 324) * 1000)), "html", null, true);
                            yield " ms)</span></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['normalizer'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 326
                        yield "                </ul>
            </div>
        </div>
    ";
                    }
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_encoder_cell" => new \Twig\TwigMacro("render_encoder_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 332
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

                    // line 333
                    yield "    ";
                    $context["nested_encoders_id"] = ((("nested-encoders-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
                    // line 334
                    yield "
    ";
                    // line 335
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 335)) {
                        // line 336
                        yield "        <span class=\"nowrap\"><a href=\"";
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "file", [], "any", false, false, false, 336), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "line", [], "any", false, false, false, 336)), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "file", [], "any", false, false, false, 336), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "class", [], "any", false, false, false, 336), "html", null, true);
                        yield "</a> (";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "time", [], "any", false, false, false, 336) * 1000)), "html", null, true);
                        yield " ms)</span>
    ";
                    }
                    // line 338
                    yield "
    ";
                    // line 339
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 339)) > 1)) {
                        // line 340
                        yield "        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 341
                        yield (string) $this->escaper->escape(($context["nested_encoders_id"] ?? null), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</button>
            <div id=\"";
                        // line 342
                        yield (string) $this->escaper->escape(($context["nested_encoders_id"] ?? null), "html", null, true);
                        yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                        // line 344
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 344));
                        foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                            // line 345
                            yield "                        <li><span class=\"nowrap\">x";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 345), "html", null, true);
                            yield " <a href=\"";
                            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 345), CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 345)), "html", null, true);
                            yield "\" title=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 345), "html", null, true);
                            yield "\">";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 345), "html", null, true);
                            yield "</a> (";
                            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 345) * 1000)), "html", null, true);
                            yield " ms)</span></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['encoder'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 347
                        yield "                </ul>
            </div>
        </div>
    ";
                    }
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_time_cell" => new \Twig\TwigMacro("render_time_cell", function ($item = null, ...$varargs): string|Markup {
                // line 353
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

                    // line 354
                    yield "    <span class=\"nowrap\">";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "time", [], "any", false, false, false, 354) * 1000)), "html", null, true);
                    yield " ms</span>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/serializer.html.twig";
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
        return array (  1120 => 354,  1107 => 353,  1094 => 347,  1076 => 345,  1072 => 344,  1067 => 342,  1063 => 341,  1060 => 340,  1058 => 339,  1055 => 338,  1043 => 336,  1041 => 335,  1038 => 334,  1035 => 333,  1020 => 332,  1007 => 326,  989 => 324,  985 => 323,  980 => 321,  976 => 320,  973 => 319,  971 => 318,  968 => 317,  956 => 315,  954 => 314,  951 => 313,  948 => 312,  933 => 311,  920 => 306,  916 => 305,  912 => 304,  908 => 302,  902 => 300,  897 => 298,  892 => 297,  890 => 296,  887 => 295,  884 => 294,  869 => 293,  856 => 288,  852 => 287,  848 => 286,  842 => 283,  839 => 282,  836 => 281,  821 => 280,  810 => 276,  805 => 273,  787 => 270,  783 => 269,  779 => 268,  775 => 267,  771 => 266,  768 => 265,  751 => 264,  738 => 253,  732 => 250,  729 => 249,  727 => 248,  720 => 246,  716 => 245,  713 => 244,  710 => 243,  707 => 242,  693 => 241,  682 => 237,  677 => 234,  659 => 231,  655 => 230,  651 => 229,  647 => 228,  643 => 227,  640 => 226,  623 => 225,  610 => 214,  604 => 211,  601 => 210,  599 => 209,  592 => 207,  588 => 206,  585 => 205,  582 => 204,  579 => 203,  565 => 202,  552 => 196,  550 => 191,  543 => 189,  532 => 186,  526 => 184,  523 => 183,  515 => 181,  505 => 179,  502 => 178,  499 => 177,  496 => 176,  494 => 175,  491 => 174,  488 => 173,  473 => 172,  462 => 168,  457 => 165,  439 => 162,  435 => 161,  431 => 160,  427 => 159,  423 => 158,  419 => 157,  416 => 156,  399 => 155,  385 => 143,  379 => 140,  376 => 139,  374 => 138,  367 => 136,  363 => 135,  360 => 134,  357 => 133,  354 => 132,  340 => 131,  327 => 128,  321 => 125,  317 => 124,  312 => 122,  308 => 121,  303 => 119,  299 => 118,  290 => 112,  282 => 107,  278 => 105,  272 => 101,  270 => 100,  266 => 98,  256 => 97,  244 => 92,  239 => 91,  229 => 90,  218 => 86,  215 => 85,  206 => 80,  199 => 76,  190 => 70,  183 => 66,  174 => 60,  167 => 56,  156 => 48,  148 => 43,  144 => 41,  142 => 40,  139 => 39,  132 => 36,  126 => 34,  123 => 33,  120 => 32,  110 => 31,  75 => 4,  65 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Collector/serializer.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\serializer.html.twig");
    }
}
