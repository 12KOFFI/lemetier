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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_525e634b05f51844e6150a6f621ceebb extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "isXmlHttpRequest", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this->getMacroNamespace();
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 6) > 0) || (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 6) > 0))) {
            // line 7
            yield "
        ";
            // line 8
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                $context["status"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 9) > 0)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 9) > 50)) ? ("yellow") : (""))));
                // line 10
                yield "
            ";
                // line 11
                if ((($context["profiler_markup_version"] ?? null) >= 3)) {
                    // line 12
                    yield "                ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/database.svg");
                    yield "
            ";
                } else {
                    // line 14
                    yield "                <span class=\"icon\">";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/icon.svg");
                    yield "</span>
            ";
                }
                // line 16
                yield "
            ";
                // line 17
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 17) == 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 17) > 0))) {
                    // line 18
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 18), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
                } else {
                    // line 21
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 21), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                    // line 24
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 24) * 1000)), "html", null, true);
                    yield "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
                }
                // line 28
                yield "        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            yield "
        ";
            // line 30
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 31
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
                // line 33
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 33) > 50)) ? ("sf-toolbar-status-yellow") : (""));
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
                // line 37
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, false, 37), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
                // line 41
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 41) * 1000)), "html", null, true);
                yield " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
                // line 45
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 45) > 0)) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 45), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Managed entities</b>
                <span class=\"sf-toolbar-status\">";
                // line 49
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managedEntityCount", [], "any", false, false, false, 49), "html", null, true);
                yield "</span>
            </div>
            ";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                    // line 54
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                    // line 58
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 58) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 58), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                    // line 62
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 62) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 62), "html", null, true);
                    yield "</span>
                </div>
            ";
                } else {
                    // line 65
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
                }
                // line 70
                yield "        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "
        ";
            // line 72
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default(($context["status"] ?? null), "")) : (""))]);
            yield "

    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 78
        yield "    <span class=\"label ";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 78) > 0)) ? ("label-status-error") : (""));
        yield " ";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 78) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 79
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, (("@Doctrine/Collector/" . (((($context["profiler_markup_version"] ?? null) < 3)) ? ("icon") : ("database"))) . ".svg"));
        yield "</span>
        <strong>Doctrine</strong>
        ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "            <span class=\"count\">
                <span>";
            // line 83
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 83), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 86
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 90
        yield "    ";
        if (("explain" == ($context["page"] ?? null))) {
            // line 91
            yield "        ";
            yield (string) $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 92
($context["token"] ?? null), "panel" => "db", "connectionName" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 94
($context["request"] ?? null), "query", [], "any", false, false, false, 94), "get", ["connection"], "method", false, false, false, 94), "query" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 95
($context["request"] ?? null), "query", [], "any", false, false, false, 95), "get", ["query"], "method", false, false, false, 95)]));
            // line 96
            yield "
    ";
        } else {
            // line 98
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("queries", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_queries(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 103
        yield "    <style>
        :root {
            --query-time-bar-color: var(--gray-200);
        }
        .theme-dark {
            --query-time-bar-color: var(--gray-700);
        }
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px var(--page-background); }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: var(--query-time-bar-color); }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
        ";
        // line 115
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 116
            yield "        .highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
        .highlight .word      { color: var(--color-text); }
        .highlight .variable  { color: var(--highlight-variable); }
        .highlight .symbol    { color: var(--color-text); }
        .highlight .comment   { color: var(--highlight-comment); }
        .highlight .string    { color: var(--highlight-string); }
        .highlight .number    { color: var(--highlight-constant); font-weight: bold; }
        .highlight .error     { color: var(--highlight-error); }
        ";
        }
        // line 125
        yield "    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 132
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", [], "any", false, false, false, 132), "html", null, true);
        yield "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 137
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueryCount", [], "any", false, false, false, 137), "html", null, true);
        yield "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 142
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 142) * 1000)), "html", null, true);
        yield " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 147
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", [], "any", false, false, false, 147), "html", null, true);
        yield "</span>
                <span class=\"label\">Invalid entities</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 152
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managedEntityCount", [], "any", false, false, false, 152), "html", null, true);
        yield "</span>
                <span class=\"label\">Managed entities</span>
            </div>
        </div>

        ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 160
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", [], "any", false, false, false, 160), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 164
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", [], "any", false, false, false, 164), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 168
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", [], "any", false, false, false, 168), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        ";
        }
        // line 173
        yield "    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab ";
        // line 176
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 176))) ? ("disabled") : (""));
        yield "\">
            ";
        // line 177
        $context["group_queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 177), "getBoolean", ["group"], "method", false, false, false, 177);
        // line 178
        yield "            <h3 class=\"tab-title\">
                ";
        // line 179
        if ((($tmp = ($context["group_queries"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 180
            yield "                    Grouped Statements
                ";
        } else {
            // line 182
            yield "                    Queries
                ";
        }
        // line 184
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 187
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 188
            yield "                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                ";
        } else {
            // line 192
            yield "                    ";
            if ((($tmp = ($context["group_queries"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 193
                yield "                        <p><a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null)]), "html", null, true);
                yield "\">Show all queries</a></p>
                    ";
            } else {
                // line 195
                yield "                        <p><a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "group" => true]), "html", null, true);
                yield "\">Group similar statements</a></p>
                    ";
            }
            // line 197
            yield "
                    ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "queries", [], "any", false, false, false, 198));
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
            foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
                // line 199
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 199)) > 1)) {
                    // line 200
                    yield "                            <h3>";
                    yield (string) $this->escaper->escape($context["connection"], "html", null, true);
                    yield " <small>connection</small></h3>
                        ";
                }
                // line 202
                yield "
                        ";
                // line 203
                if (Twig\Extension\CoreExtension::testEmpty($context["queries"])) {
                    // line 204
                    yield "                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        ";
                } else {
                    // line 208
                    yield "                            ";
                    if ((($tmp = ($context["group_queries"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 209
                        yield "                                ";
                        $context["queries"] = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "groupedQueries", [], "any", false, false, false, 209)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = $context["connection"]) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null);
                        // line 210
                        yield "                            ";
                    }
                    // line 211
                    yield "                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    ";
                    // line 214
                    if ((($tmp = ($context["group_queries"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 215
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, \x27queries-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 215), "html", null, true);
                        yield "\x27)\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, \x27queries-";
                        // line 216
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 216), "html", null, true);
                        yield "\x27)\" style=\"cursor: pointer;\">Count<span></span></th>
                                    ";
                    } else {
                        // line 218
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, \x27queries-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 218), "html", null, true);
                        yield "\x27)\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, \x27queries-";
                        // line 219
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 219), "html", null, true);
                        yield "\x27)\" style=\"cursor: pointer;\">Time<span></span></th>
                                    ";
                    }
                    // line 221
                    yield "                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-";
                    // line 224
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 224), "html", null, true);
                    yield "\">
                                ";
                    // line 225
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["queries"]);
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
                    foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                        // line 226
                        yield "                                    ";
                        $context["i"] = (((($tmp = ($context["group_queries"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 226)) : ($context["i"]));
                        // line 227
                        yield "                                    <tr id=\"queryNo-";
                        yield (string) $this->escaper->escape($context["i"], "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 227), "loop", [], "any", false, false, false, 227), "index", [], "any", false, false, false, 227), "html", null, true);
                        yield "\">
                                        ";
                        // line 228
                        if ((($tmp = ($context["group_queries"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 229
                            yield "                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:";
                            // line 230
                            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 230)), "html", null, true);
                            yield "%\"></span>
                                                <span class=\"nowrap\">";
                            // line 231
                            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 231) * 1000)), "html", null, true);
                            yield "&nbsp;ms<br />(";
                            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 231)), "html", null, true);
                            yield "%)</span>
                                            </td>
                                            <td class=\"nowrap\">";
                            // line 233
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 233), "html", null, true);
                            yield "</td>
                                        ";
                        } else {
                            // line 235
                            yield "                                            <td class=\"nowrap\">";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 235), "html", null, true);
                            yield "</td>
                                            <td class=\"nowrap\">";
                            // line 236
                            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 236) * 1000)), "html", null, true);
                            yield "&nbsp;ms</td>
                                        ";
                        }
                        // line 238
                        yield "                                        <td>
                                            ";
                        // line 239
                        yield (string) $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 239));
                        yield "

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                        // line 242
                        yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 242), 2);
                        yield "
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                        // line 246
                        yield (string) $this->escaper->escape($context["i"], "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 246), "loop", [], "any", false, false, false, 246), "index", [], "any", false, false, false, 246), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                ";
                        // line 248
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 249
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                            // line 250
                            yield (string) $this->escaper->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 250), "loop", [], "any", false, false, false, 250), "index", [], "any", false, false, false, 250), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                ";
                        }
                        // line 252
                        yield "
                                                ";
                        // line 253
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 254
                            yield "                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"";
                            // line 255
                            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => ($context["token"] ?? null), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                            yield "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                            yield (string) $this->escaper->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 255), "loop", [], "any", false, false, false, 255), "index", [], "any", false, false, false, 255), "html", null, true);
                            yield "\">Explain query</a>
                                                ";
                        }
                        // line 257
                        yield "
                                                ";
                        // line 258
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 258)) {
                            // line 259
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                            // line 260
                            yield (string) $this->escaper->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 260), "loop", [], "any", false, false, false, 260), "index", [], "any", false, false, false, 260), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                ";
                        }
                        // line 262
                        yield "                                            </div>

                                            <div id=\"formatted-query-";
                        // line 264
                        yield (string) $this->escaper->escape($context["i"], "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 264), "loop", [], "any", false, false, false, 264), "index", [], "any", false, false, false, 264), "html", null, true);
                        yield "\" class=\"sql-runnable hidden\">
                                                ";
                        // line 265
                        yield (string) $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 265), true);
                        yield "
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 266
                        yield (string) $this->escaper->escape($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 266), false), "html_attr");
                        yield "\">Copy</button>
                                            </div>

                                            ";
                        // line 269
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 270
                            yield "                                                <div id=\"original-query-";
                            yield (string) $this->escaper->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 270), "loop", [], "any", false, false, false, 270), "index", [], "any", false, false, false, 270), "html", null, true);
                            yield "\" class=\"sql-runnable hidden\">
                                                    ";
                            // line 271
                            $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 271) . ";"), CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 271));
                            // line 272
                            yield "                                                    ";
                            yield (string) $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(($context["runnable_sql"] ?? null));
                            yield "
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                            // line 273
                            yield (string) $this->escaper->escape(($context["runnable_sql"] ?? null), "html_attr");
                            yield "\">Copy</button>
                                                </div>
                                            ";
                        }
                        // line 276
                        yield "
                                            ";
                        // line 277
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 277)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 278
                            yield "                                                <div id=\"explain-";
                            yield (string) $this->escaper->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 278), "loop", [], "any", false, false, false, 278), "index", [], "any", false, false, false, 278), "html", null, true);
                            yield "\" class=\"sql-explain\"></div>
                                            ";
                        }
                        // line 280
                        yield "
                                            ";
                        // line 281
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 281)) {
                            // line 282
                            yield "                                                <div id=\"backtrace-";
                            yield (string) $this->escaper->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 282), "loop", [], "any", false, false, false, 282), "index", [], "any", false, false, false, 282), "html", null, true);
                            yield "\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
                            // line 291
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 291));
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
                                // line 292
                                yield "                                                            <tr>
                                                                <td>";
                                // line 293
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 293), "html", null, true);
                                yield "</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                ";
                                // line 296
                                $context["line_number"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 296)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 296), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 296), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 296), [], "array", false, true, false, 296), "line", [], "any", true, true, false, 296)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 296)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 296)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null), "line", [], "any", false, false, false, 296), 1)) : (1)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 296), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 296), [], "array", false, true, false, 296), "line", [], "any", true, true, false, 296)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 296)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 296)) instanceof \Stringable && (is_array($_v4) || $_v4 instanceof \ArrayObject || $_v4 instanceof \ArrayIterator) ? (string) $_v5 : $_v5)] ?? null) : null), "line", [], "any", false, false, false, 296), 1)) : (1))));
                                // line 297
                                yield "                                                                                ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 297)) {
                                    // line 298
                                    yield "                                                                                    <a href=\"";
                                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 298), ($context["line_number"] ?? null)), "html", null, true);
                                    yield "\">
                                                                                ";
                                }
                                // line 300
                                yield (string) $this->escaper->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 300), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 300), [], "array", false, true, false, 300), "class", [], "any", true, true, false, 300)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 300)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 300)) instanceof \Stringable && (is_array($_v6) || $_v6 instanceof \ArrayObject || $_v6 instanceof \ArrayIterator) ? (string) $_v7 : $_v7)] ?? null) : null), "class", [], "any", false, false, false, 300))) : ("")) . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 300), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 300), [], "array", false, true, false, 300), "class", [], "any", true, true, false, 300)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 300)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 300), "::")) : ("::"))) : (""))), "html", null, true);
                                // line 301
                                yield "<span class=\"status-warning\">";
                                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 301), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 301), [], "array", false, true, false, 301), "function", [], "any", true, true, false, 301)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (($_v8 = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 301)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[(($_v9 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 301)) instanceof \Stringable && (is_array($_v8) || $_v8 instanceof \ArrayObject || $_v8 instanceof \ArrayIterator) ? (string) $_v9 : $_v9)] ?? null) : null), "function", [], "any", false, false, false, 301), CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 301))) : (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 301))), "html", null, true);
                                yield "</span>
                                                                                ";
                                // line 302
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 302)) {
                                    // line 303
                                    yield "                                                                                    </a>
                                                                                ";
                                }
                                // line 305
                                yield "                                                                                (line ";
                                yield (string) $this->escaper->escape(($context["line_number"] ?? null), "html", null, true);
                                yield ")
                                                                            </span>
                                                                </td>
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
                            // line 310
                            yield "                                                        </tbody>
                                                    </table>
                                                </div>
                                            ";
                        }
                        // line 314
                        yield "                                        </td>
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
                    unset($context['_seq'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 317
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 320
                yield "                    ";
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
            unset($context['_seq'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 321
            yield "                ";
        }
        // line 322
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 325
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 325))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                ";
        // line 328
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 329
            yield "                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                ";
        } else {
            // line 333
            yield "                    ";
            yield (string) ($macros["helper"] ?? $this->throwUninitializedMacroNamespace(333))->call("render_simple_table", ["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "connections", [], "any", false, false, false, 333)], $context, 333, $this->source);
            yield "
                ";
        }
        // line 335
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 338
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 338))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                ";
        // line 342
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 343
            yield "                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                ";
        } else {
            // line 347
            yield "                    ";
            yield (string) ($macros["helper"] ?? $this->throwUninitializedMacroNamespace(347))->call("render_simple_table", ["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 347)], $context, 347, $this->source);
            yield "
                ";
        }
        // line 349
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 352
        yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                ";
        // line 356
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", [], "any", false, false, false, 356)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 357
            yield "                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                ";
        } else {
            // line 361
            yield "                    ";
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 361)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 362
                yield "                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    ";
            } else {
                // line 366
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 368
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 368), "hits", [], "any", false, false, false, 368), "html", null, true);
                yield "</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 373
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 373), "misses", [], "any", false, false, false, 373), "html", null, true);
                yield "</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 378
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", [], "any", false, false, false, 378), "puts", [], "any", false, false, false, 378), "html", null, true);
                yield "</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        ";
                // line 383
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 383), "hits", [], "any", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 384
                    yield "                            <h3>Number of cache hits</h3>
                            ";
                    // line 385
                    yield (string) ($macros["helper"] ?? $this->throwUninitializedMacroNamespace(385))->call("render_simple_table", ["Region", "Hits", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 385), "hits", [], "any", false, false, false, 385)], $context, 385, $this->source);
                    yield "
                        ";
                }
                // line 387
                yield "
                        ";
                // line 388
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 388), "misses", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 389
                    yield "                            <h3>Number of cache misses</h3>
                            ";
                    // line 390
                    yield (string) ($macros["helper"] ?? $this->throwUninitializedMacroNamespace(390))->call("render_simple_table", ["Region", "Misses", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 390), "misses", [], "any", false, false, false, 390)], $context, 390, $this->source);
                    yield "
                        ";
                }
                // line 392
                yield "
                        ";
                // line 393
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 393), "puts", [], "any", false, false, false, 393)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 394
                    yield "                            <h3>Number of cache puts</h3>
                            ";
                    // line 395
                    yield (string) ($macros["helper"] ?? $this->throwUninitializedMacroNamespace(395))->call("render_simple_table", ["Region", "Puts", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", [], "any", false, false, false, 395), "puts", [], "any", false, false, false, 395)], $context, 395, $this->source);
                    yield "
                        ";
                }
                // line 397
                yield "                    ";
            }
            // line 398
            yield "                ";
        }
        // line 399
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Managed Entities</h3>
            <div class=\"tab-content\">
                ";
        // line 405
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managedEntityCountByClass", [], "any", false, false, false, 405)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 406
            yield "                    <div class=\"empty\">
                        <p>No managed entities.</p>
                    </div>
                ";
        } else {
            // line 410
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managedEntityCountByClass", [], "any", false, false, false, 410));
            foreach ($context['_seq'] as $context["manager"] => $context["entityCounts"]) {
                // line 411
                yield "                        <h4>";
                yield (string) $this->escaper->escape($context["manager"], "html", null, true);
                yield " <small>entity manager</small></h4>
                        ";
                // line 412
                yield (string) ($macros["helper"] ?? $this->throwUninitializedMacroNamespace(412))->call("render_simple_table", ["Class", "Amount of managed objects", $context["entityCounts"]], $context, 412, $this->source);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['manager'], $context['entityCounts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 414
            yield "                ";
        }
        // line 415
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 418
        yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 418)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                ";
        // line 422
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 422)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 423
            yield "                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                ";
        } else {
            // line 427
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "entities", [], "any", false, false, false, 427));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 428
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "managers", [], "any", false, false, false, 428)) > 1)) {
                    // line 429
                    yield "                            <h4>";
                    yield (string) $this->escaper->escape($context["manager"], "html", null, true);
                    yield " <small>entity manager</small></h4>
                        ";
                }
                // line 431
                yield "
                        ";
                // line 432
                if (Twig\Extension\CoreExtension::testEmpty($context["classes"])) {
                    // line 433
                    yield "                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        ";
                } else {
                    // line 437
                    yield "                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 445
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 446
                        yield "                                    ";
                        $context["contains_errors"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 446), $context["manager"], [], "array", true, true, false, 446) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 446), $context["manager"], [], "array", false, true, false, 446), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 446), [], "array", true, true, false, 446));
                        // line 447
                        yield "                                    <tr class=\"";
                        yield (string) (((($tmp = ($context["contains_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-error") : (""));
                        yield "\">
                                        <td>
                                            <a href=\"";
                        // line 449
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "file", [], "any", false, false, false, 449), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "line", [], "any", false, false, false, 449)), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 449), "html", null, true);
                        yield "</a>
                                        </td>
                                        <td class=\"font-normal\">
                                            ";
                        // line 452
                        if ((($tmp = ($context["contains_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 453
                            yield "                                                <ul>
                                                    ";
                            // line 454
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((($_v10 = (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, false, false, 454)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[(($_v12 = $context["manager"]) instanceof \Stringable && (is_array($_v11) || $_v11 instanceof \ArrayObject || $_v11 instanceof \ArrayIterator) ? (string) $_v12 : $_v12)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[(($_v13 = CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 454)) instanceof \Stringable && (is_array($_v10) || $_v10 instanceof \ArrayObject || $_v10 instanceof \ArrayIterator) ? (string) $_v13 : $_v13)] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 455
                                yield "                                                        <li>";
                                yield (string) $this->escaper->escape($context["error"], "html", null, true);
                                yield "</li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent);
                            $context += $_parent;
                            // line 457
                            yield "                                                </ul>
                                            ";
                        } else {
                            // line 459
                            yield "                                                No errors.
                                            ";
                        }
                        // line 461
                        yield "                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['class'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 464
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 467
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['manager'], $context['classes'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 468
            yield "                ";
        }
        // line 469
        yield "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute(\x27data-target-id\x27);
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != \x27block\x27) {
                if (targetElement.getAttribute(\x27data-sfurl\x27) !== link.href) {
                    fetch(link.href, {
                        headers: {\x27X-Requested-With\x27: \x27XMLHttpRequest\x27}
                    }).then(async function (response) {
                        targetElement.innerHTML = await response.text()
                        targetElement.setAttribute(\x27data-sfurl\x27, link.href)
                    }, function () {
                        targetElement.innerHTML = \x27An error occurred while loading the query explanation.\x27;
                    })
                }

                targetElement.style.display = \x27block\x27;
                link.innerHTML = \x27Hide query explanation\x27;
            } else {
                targetElement.style.display = \x27none\x27;
                link.innerHTML = \x27Explain query\x27;
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute(\x27data-sort-direction\x27)) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute(\x27data-sort-direction\x27);
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = \x27\x27;
                }
            }

            header.setAttribute(\x27data-sort-direction\x27, (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? \x27<span class=\"text-muted\">&#9650;</span>\x27 : \x27<span class=\"text-muted\">&#9660;</span>\x27;

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll(\x27[data-clipboard-text]\x27).forEach(function(button) {
                button.classList.remove(\x27hidden\x27);
                button.addEventListener(\x27click\x27, function() {
                    navigator.clipboard.writeText(button.getAttribute(\x27data-clipboard-text\x27));
                })
            });
        }

        //]]></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "render_simple_table" => new \Twig\TwigMacro("render_simple_table", function ($label1 = null, $label2 = null, $data = null, ...$varargs): string|Markup {
                // line 547
                $macros = $this->macros;
                $context = [
                    "label1" => $label1,
                    "label2" => $label2,
                    "data" => $data,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

                    // line 548
                    yield "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
                    // line 551
                    yield (string) $this->escaper->escape(($context["label1"] ?? null), "html", null, true);
                    yield "</th>
            <th scope=\"col\">";
                    // line 552
                    yield (string) $this->escaper->escape(($context["label2"] ?? null), "html", null, true);
                    yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
                    // line 556
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 557
                        yield "            <tr>
                <th scope=\"row\">";
                        // line 558
                        yield (string) $this->escaper->escape($context["key"], "html", null, true);
                        yield "</th>
                <td>";
                        // line 559
                        yield (string) $this->escaper->escape($context["value"], "html", null, true);
                        yield "</td>
            </tr>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 562
                    yield "        </tbody>
    </table>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["label1" => false, "label2" => false, "data" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Doctrine/Collector/db.html.twig";
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
        return array (  1337 => 562,  1327 => 559,  1323 => 558,  1320 => 557,  1316 => 556,  1309 => 552,  1305 => 551,  1300 => 548,  1285 => 547,  1197 => 469,  1194 => 468,  1187 => 467,  1182 => 464,  1173 => 461,  1169 => 459,  1165 => 457,  1155 => 455,  1151 => 454,  1148 => 453,  1146 => 452,  1138 => 449,  1132 => 447,  1129 => 446,  1125 => 445,  1115 => 437,  1109 => 433,  1107 => 432,  1104 => 431,  1098 => 429,  1095 => 428,  1090 => 427,  1084 => 423,  1082 => 422,  1075 => 418,  1070 => 415,  1067 => 414,  1058 => 412,  1053 => 411,  1048 => 410,  1042 => 406,  1040 => 405,  1032 => 399,  1029 => 398,  1026 => 397,  1021 => 395,  1018 => 394,  1016 => 393,  1013 => 392,  1008 => 390,  1005 => 389,  1003 => 388,  1000 => 387,  995 => 385,  992 => 384,  990 => 383,  982 => 378,  974 => 373,  966 => 368,  962 => 366,  956 => 362,  953 => 361,  947 => 357,  945 => 356,  938 => 352,  933 => 349,  927 => 347,  921 => 343,  919 => 342,  912 => 338,  907 => 335,  901 => 333,  895 => 329,  893 => 328,  887 => 325,  882 => 322,  879 => 321,  864 => 320,  859 => 317,  842 => 314,  836 => 310,  815 => 305,  811 => 303,  809 => 302,  804 => 301,  802 => 300,  796 => 298,  793 => 297,  791 => 296,  785 => 293,  782 => 292,  765 => 291,  750 => 282,  748 => 281,  745 => 280,  737 => 278,  735 => 277,  732 => 276,  726 => 273,  721 => 272,  719 => 271,  712 => 270,  710 => 269,  704 => 266,  700 => 265,  694 => 264,  690 => 262,  683 => 260,  680 => 259,  678 => 258,  675 => 257,  666 => 255,  663 => 254,  661 => 253,  658 => 252,  651 => 250,  648 => 249,  646 => 248,  639 => 246,  632 => 242,  626 => 239,  623 => 238,  618 => 236,  613 => 235,  608 => 233,  601 => 231,  597 => 230,  594 => 229,  592 => 228,  585 => 227,  582 => 226,  565 => 225,  561 => 224,  556 => 221,  551 => 219,  546 => 218,  541 => 216,  536 => 215,  534 => 214,  529 => 211,  526 => 210,  523 => 209,  520 => 208,  514 => 204,  512 => 203,  509 => 202,  503 => 200,  500 => 199,  483 => 198,  480 => 197,  474 => 195,  468 => 193,  465 => 192,  459 => 188,  457 => 187,  452 => 184,  448 => 182,  444 => 180,  442 => 179,  439 => 178,  437 => 177,  433 => 176,  428 => 173,  420 => 168,  413 => 164,  406 => 160,  402 => 158,  400 => 157,  392 => 152,  384 => 147,  376 => 142,  368 => 137,  360 => 132,  351 => 125,  340 => 116,  338 => 115,  324 => 103,  314 => 102,  302 => 98,  298 => 96,  296 => 95,  295 => 94,  294 => 92,  292 => 91,  289 => 90,  279 => 89,  270 => 86,  264 => 83,  261 => 82,  259 => 81,  254 => 79,  247 => 78,  237 => 77,  225 => 72,  222 => 71,  218 => 70,  211 => 65,  203 => 62,  194 => 58,  187 => 54,  183 => 52,  181 => 51,  176 => 49,  167 => 45,  160 => 41,  153 => 37,  144 => 33,  140 => 31,  138 => 30,  135 => 29,  131 => 28,  124 => 24,  117 => 21,  110 => 18,  108 => 17,  105 => 16,  99 => 14,  93 => 12,  91 => 11,  88 => 10,  85 => 9,  83 => 8,  80 => 7,  77 => 6,  67 => 5,  60 => 1,  58 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Doctrine/Collector/db.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\vendor\\doctrine\\doctrine-bundle\\templates\\Collector\\db.html.twig");
    }
}
