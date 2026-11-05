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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_57dd48c792fa61f1ea45ad72369ec1dd extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23e5e5e5\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23737373\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        window.addEventListener(\x27DOMContentLoaded\x27, () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll(\x27.mailer-email-summary-table-row\x27);

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener(\x27click\x27, () => {
                        emailRows.forEach((row) => row.classList.remove(\x27active\x27));
                        emailRow.classList.add(\x27active\x27);

                        document.querySelectorAll(\x27.mailer-email-details\x27).forEach((emailDetails) => emailDetails.style.display = \x27none\x27);
                        document.querySelector(emailRow.getAttribute(\x27data-target\x27)).style.display = \x27block\x27;
                    });
                });
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 192
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 192);
        // line 193
        yield "
    ";
        // line 194
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 194))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 196
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 197
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 197)), "html", null, true);
                yield "</span>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 199
            yield "
        ";
            // line 200
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 201
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 203
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 203), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 203); })), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 207
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 207), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp); })), "html", null, true);
                yield "</span>
            </div>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 210
            yield "
        ";
            // line 211
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 216
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 216);
        // line 217
        yield "
    <span class=\"label ";
        // line 218
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 218))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 219
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
        yield "</span>

        <strong>Emails</strong>
        ";
        // line 222
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 222)) > 0)) {
            // line 223
            yield "            <span class=\"count\">
                <span>";
            // line 224
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 224)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 227
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 231
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 231);
        // line 232
        yield "    <h2>Emails</h2>

    ";
        // line 234
        if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 234))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 239
            yield "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 242
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 242), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 242); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 247
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 247), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 253
        yield "
    ";
        // line 254
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 254)) > 1)) {
            // line 255
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 255));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 256
                yield "            <h2><code>";
                yield (string) $this->escaper->escape($context["transport"], "html", null, true);
                yield "</code> transport</h2>
            ";
                // line 257
                yield (string) $this->getMacroNamespace()->call("render_transport_details", [($context["collector"] ?? null), $context["transport"]], $context, 257, $this->source);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 259
            yield "    ";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 259))) {
            // line 260
            yield "        ";
            yield (string) $this->getMacroNamespace()->call("render_transport_details", [($context["collector"] ?? null), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 260)), true], $context, 260, $this->source);
            yield "
    ";
        }
        // line 262
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "render_transport_details" => new \Twig\TwigMacro("render_transport_details", function ($collector = null, $transport = null, $show_transport_name = false, ...$varargs): string|Markup {
                // line 265
                $macros = $this->macros;
                $context = [
                    "collector" => $collector,
                    "transport" => $transport,
                    "show_transport_name" => $show_transport_name,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

                    // line 266
                    yield "    <div class=\"card\">
        ";
                    // line 267
                    $context["num_emails"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 267), "events", [($context["transport"] ?? null)], "method", false, false, false, 267));
                    // line 268
                    yield "        ";
                    if ((($context["num_emails"] ?? null) > 1)) {
                        // line 269
                        yield "            <div class=\"mailer-email-summary-table-wrapper\">
                <table class=\"mailer-email-summary-table\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>To</th>
                            <th class=\"visually-hidden\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                        // line 280
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 280), "events", [($context["transport"] ?? null)], "method", false, false, false, 280));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                            // line 281
                            yield "                            <tr class=\"mailer-email-summary-table-row ";
                            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                            yield "\" data-target=\"#email-";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 281), "html", null, true);
                            yield "\">
                                <td>";
                            // line 282
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 282), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 283
                            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "headers", [], "any", false, true, false, 283), "get", ["subject"], "method", false, true, false, 283), "bodyAsString", [], "method", true, true, false, 283)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 283), "headers", [], "any", false, false, false, 283), "get", ["subject"], "method", false, false, false, 283), "bodyAsString", [], "method", false, false, false, 283), "(No subject)")) : ("(No subject)")), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 284
                            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 284), "headers", [], "any", false, true, false, 284), "get", ["to"], "method", false, true, false, 284), "bodyAsString", [], "method", true, true, false, 284)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 284), "headers", [], "any", false, false, false, 284), "get", ["to"], "method", false, false, false, 284), "bodyAsString", [], "method", false, false, false, 284), Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "envelope", [], "any", false, false, false, 284), "recipients", [], "any", false, false, false, 284), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 284); }), ", "))) : (Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "envelope", [], "any", false, false, false, 284), "recipients", [], "any", false, false, false, 284), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 284); }), ", "))), "html", null, true);
                            yield "</td>
                                <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                            // line 285
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 285), "html", null, true);
                            yield "\">View email details</button></td>
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
                        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 288
                        yield "                    </tbody>
                </table>
            </div>

            ";
                        // line 292
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 292), "events", [($context["transport"] ?? null)], "method", false, false, false, 292));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                            // line 293
                            yield "                <div class=\"mailer-email-details ";
                            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 293)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                            yield "\" id=\"email-";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 293), "html", null, true);
                            yield "\">
                    ";
                            // line 294
                            yield (string) $this->getMacroNamespace()->call("render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 294), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, false, 294), ($context["show_transport_name"] ?? null)], $context, 294, $this->source);
                            yield "
                </div>
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
                        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 297
                        yield "        ";
                    } else {
                        // line 298
                        yield "            ";
                        $context["event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 298), "events", [($context["transport"] ?? null)], "method", false, false, false, 298));
                        // line 299
                        yield "            ";
                        yield (string) $this->getMacroNamespace()->call("render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "message", [], "any", false, false, false, 299), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isQueued", [], "any", false, false, false, 299), ($context["show_transport_name"] ?? null)], $context, 299, $this->source);
                        yield "
        ";
                    }
                    // line 301
                    yield "    </div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["collector" => false, "transport" => false, "show_transport_name" => true], false),
            "render_email_details" => new \Twig\TwigMacro("render_email_details", function ($collector = null, $transport = null, $message = null, $message_is_queued = null, $show_transport_name = false, ...$varargs): string|Markup {
                // line 304
                $macros = $this->macros;
                $context = [
                    "collector" => $collector,
                    "transport" => $transport,
                    "message" => $message,
                    "message_is_queued" => $message_is_queued,
                    "show_transport_name" => $show_transport_name,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

                    // line 305
                    yield "    ";
                    if ((($tmp = ($context["show_transport_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 306
                        yield "        <p class=\"mailer-transport-information\">
            <strong>Status:</strong> <span class=\"badge badge-";
                        // line 307
                        yield (string) (((($tmp = ($context["message_is_queued"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
                        yield "\">";
                        yield (string) (((($tmp = ($context["message_is_queued"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Queued") : ("Sent"));
                        yield "</span>
            &bull;
            <strong>Transport:</strong> <code>";
                        // line 309
                        yield (string) $this->escaper->escape(($context["transport"] ?? null), "html", null, true);
                        yield "</code>
        </p>
    ";
                    }
                    // line 312
                    yield "
    ";
                    // line 313
                    if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 313)) {
                        // line 314
                        yield "        ";
                        // line 315
                        yield "        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 315)], "method", false, false, false, 315), "html", null, true);
                        yield "\" download=\"email.eml\">
            ";
                        // line 316
                        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                        yield "
            Download as EML file
        </a>

        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                        // line 320
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 320), "html", null, true);
                        yield "</pre>
    ";
                    } else {
                        // line 322
                        yield "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Email contents</h3>
                <div class=\"tab-content\">
                    <div class=\"card-block\">
                        <p class=\"mailer-message-subject\">
                            ";
                        // line 328
                        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 328), "get", ["subject"], "method", false, true, false, 328), "bodyAsString", [], "method", true, true, false, 328)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, false, 328), "get", ["subject"], "method", false, false, false, 328), "bodyAsString", [], "method", false, false, false, 328), "(No subject)")) : ("(No subject)")), "html", null, true);
                        yield "
                        </p>
                        <div class=\"mailer-message-headers\">
                            <p>
                                <strong>From:</strong>
                                ";
                        // line 333
                        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 333), "get", ["from"], "method", false, true, false, 333), "bodyAsString", [], "method", true, true, false, 333)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, false, 333), "get", ["from"], "method", false, false, false, 333), "bodyAsString", [], "method", false, false, false, 333), "(empty)")) : ("(empty)")), "html", null, true);
                        yield "
                            </p>
                            <p>
                                <strong>To:</strong>
                                ";
                        // line 337
                        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 337), "get", ["to"], "method", false, true, false, 337), "bodyAsString", [], "method", true, true, false, 337)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, false, 337), "get", ["to"], "method", false, false, false, 337), "bodyAsString", [], "method", false, false, false, 337), "(empty)")) : ("(empty)")), "html", null, true);
                        yield "
                            </p>
                            ";
                        // line 339
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, false, 339), "all", [], "any", false, false, false, 339));
                        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                            // line 340
                            yield "                                ";
                            if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 340) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 340)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 340)) : (""))), ["subject", "from", "to"])) {
                                // line 341
                                yield "                                    <p class=\"mailer-message-header-secondary\">";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 341), "html", null, true);
                                yield "</p>
                                ";
                            }
                            // line 343
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 344
                        yield "                        </div>
                    </div>

                    ";
                        // line 347
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", true, true, false, 347) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 348
                            yield "                        <div class=\"card-block\">
                            ";
                            // line 349
                            $context["num_of_attachments"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 349));
                            // line 350
                            yield "                            ";
                            $context["total_attachments_size_in_bytes"] = Twig\Extension\CoreExtension::reduce($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 350), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return (($context["total_size"] ?? null) + Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->mailerBody(($context["attachment"] ?? null)))); }, 0);
                            // line 351
                            yield "                            <p class=\"mailer-message-attachments-title\">
                                ";
                            // line 352
                            yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/attachment.svg");
                            yield "
                                Attachments <span>(";
                            // line 353
                            yield (string) $this->escaper->escape(($context["num_of_attachments"] ?? null), "html", null, true);
                            yield " file";
                            yield (string) (((($context["num_of_attachments"] ?? null) > 1)) ? ("s") : (""));
                            yield " / ";
                            yield (string) $this->getMacroNamespace()->call("render_file_size_humanized", [($context["total_attachments_size_in_bytes"] ?? null)], $context, 353, $this->source);
                            yield ")</span>
                            </p>

                            <ul class=\"mailer-message-attachments-list\">
                                ";
                            // line 357
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 357));
                            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                                // line 358
                                yield "                                    ";
                                $context["attachment_body"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->mailerBody($context["attachment"]);
                                // line 359
                                yield "                                    <li>
                                        ";
                                // line 360
                                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/file.svg");
                                yield "

                                        ";
                                // line 362
                                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 362)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 362))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 363
                                    yield "                                            ";
                                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 363), "html", null, true);
                                    yield "
                                        ";
                                } else {
                                    // line 365
                                    yield "                                            <em>(no filename)</em>
                                        ";
                                }
                                // line 367
                                yield "
                                        ";
                                // line 368
                                if ((null === ($context["attachment_body"] ?? null))) {
                                    // line 369
                                    yield "                                            <em>(the file is not readable anymore)</em>
                                        ";
                                } else {
                                    // line 371
                                    yield "                                            (";
                                    yield (string) $this->getMacroNamespace()->call("render_file_size_humanized", [Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["attachment_body"] ?? null))], $context, 371, $this->source);
                                    yield ")

                                            <a href=\"data:";
                                    // line 373
                                    yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 373)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 373), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                                    yield ";base64,";
                                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [($context["attachment_body"] ?? null)], "method", false, false, false, 373), "html", null, true);
                                    yield "\" download=\"";
                                    yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 373)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 373), "attachment")) : ("attachment")), "html", null, true);
                                    yield "\">Download</a>
                                        ";
                                }
                                // line 375
                                yield "                                    </li>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent);
                            $context += $_parent;
                            // line 377
                            yield "                            </ul>
                        </div>
                    ";
                        }
                        // line 380
                        yield "
                    <div class=\"card-block\">
                        <div class=\"sf-tabs sf-tabs-sm\">
                        ";
                        // line 383
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 383)) {
                            // line 384
                            yield "                            ";
                            $context["textBody"] = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textBody", [], "any", false, false, false, 384);
                            // line 385
                            yield "                            ";
                            $context["htmlBody"] = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", false, false, false, 385);
                            // line 386
                            yield "                            <div class=\"tab ";
                            yield (string) (( !(($tmp = ($context["textBody"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                            yield " ";
                            yield (string) (((($tmp = ($context["textBody"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                            yield "\">
                                <h3 class=\"tab-title\">Text content</h3>
                                <div class=\"tab-content\">
                                    ";
                            // line 389
                            if ((($tmp = ($context["textBody"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 390
                                yield "                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                                // line 391
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 391)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 392
                                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::convertEncoding(($context["textBody"] ?? null), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 392)), "html", null, true);
                                } else {
                                    // line 394
                                    yield (string) $this->escaper->escape(($context["textBody"] ?? null), "html", null, true);
                                }
                                // line 396
                                yield "</pre>
                                    ";
                            } else {
                                // line 398
                                yield "                                        <div class=\"mailer-empty-email-body\">
                                            <p>The text body is empty.</p>
                                        </div>
                                    ";
                            }
                            // line 402
                            yield "                                </div>
                            </div>

                            ";
                            // line 405
                            if ((($tmp = ($context["htmlBody"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 406
                                yield "                                <div class=\"tab\">
                                    <h3 class=\"tab-title\">HTML preview</h3>
                                    <div class=\"tab-content\">
                                        <pre class=\"prewrap\" style=\"max-height: 600px\"><iframe src=\"data:text/html;charset=utf-8;base64,";
                                // line 409
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [($context["htmlBody"] ?? null)], "method", false, false, false, 409), "html", null, true);
                                yield "\" style=\"height: 80vh;width: 100%;\"></iframe>
                                        </pre>
                                    </div>
                                </div>
                            ";
                            }
                            // line 414
                            yield "
                            <div class=\"tab ";
                            // line 415
                            yield (string) (( !(($tmp = ($context["htmlBody"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                            yield " ";
                            yield (string) ((( !(($tmp = ($context["textBody"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["htmlBody"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("active") : (""));
                            yield "\">
                                <h3 class=\"tab-title\">HTML content</h3>
                                <div class=\"tab-content\">
                                    ";
                            // line 418
                            if ((($tmp = ($context["htmlBody"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 419
                                yield "                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                                // line 420
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 420)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 421
                                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::convertEncoding(($context["htmlBody"] ?? null), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 421)), "html", null, true);
                                } else {
                                    // line 423
                                    yield (string) $this->escaper->escape(($context["htmlBody"] ?? null), "html", null, true);
                                }
                                // line 425
                                yield "</pre>
                                    ";
                            } else {
                                // line 427
                                yield "                                        <div class=\"mailer-empty-email-body\">
                                            <p>The HTML body is empty.</p>
                                        </div>
                                    ";
                            }
                            // line 431
                            yield "                                </div>
                            </div>
                        ";
                        } else {
                            // line 434
                            yield "                            ";
                            $context["body"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "any", false, false, false, 434)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->mailerAsString(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "any", false, false, false, 434))) : (null));
                            // line 435
                            yield "                            <div class=\"tab ";
                            yield (string) (( !(($tmp = ($context["body"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                            yield " ";
                            yield (string) (((($tmp = ($context["body"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                            yield "\">
                                <h3 class=\"tab-title\">Content</h3>
                                <div class=\"tab-content\">
                                    ";
                            // line 438
                            if ((($tmp = ($context["body"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 439
                                yield "                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                                // line 440
                                yield (string) $this->escaper->escape(($context["body"] ?? null), "html", null, true);
                                yield "
                                        </pre>
                                    ";
                            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 442
($context["message"] ?? null), "body", [], "any", false, false, false, 442)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 443
                                yield "                                        <div class=\"mailer-empty-email-body\">
                                            <p>The body is not readable anymore.</p>
                                        </div>
                                    ";
                            } else {
                                // line 447
                                yield "                                        <div class=\"mailer-empty-email-body\">
                                            <p>The body is empty.</p>
                                        </div>
                                    ";
                            }
                            // line 451
                            yield "                                </div>
                            </div>
                        ";
                        }
                        // line 454
                        yield "                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">MIME parts</h3>
                <div class=\"tab-content\">
                    <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                        // line 462
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "method", false, false, false, 462), "asDebugString", [], "method", false, false, false, 462), "html", null, true);
                        yield "</pre>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Raw Message</h3>
                <div class=\"tab-content\">
                    ";
                        // line 469
                        $context["raw_message"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->mailerAsString(($context["message"] ?? null));
                        // line 470
                        yield "                    ";
                        if ((null === ($context["raw_message"] ?? null))) {
                            // line 471
                            yield "                        <div class=\"mailer-empty-email-body\">
                            <p>The raw message is not readable anymore.</p>
                        </div>
                    ";
                        } else {
                            // line 475
                            yield "                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [($context["raw_message"] ?? null)], "method", false, false, false, 475), "html", null, true);
                            yield "\" download=\"email.eml\">
                            ";
                            // line 476
                            yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                            yield "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                            // line 480
                            yield (string) $this->escaper->escape(($context["raw_message"] ?? null), "html", null, true);
                            yield "</pre>
                    ";
                        }
                        // line 482
                        yield "                </div>
            </div>
        </div>
    ";
                    }
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["collector" => false, "transport" => false, "message" => false, "message_is_queued" => false, "show_transport_name" => true], false),
            "render_file_size_humanized" => new \Twig\TwigMacro("render_file_size_humanized", function ($bytes = null, ...$varargs): string|Markup {
                // line 488
                $macros = $this->macros;
                $context = [
                    "bytes" => $bytes,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

                    // line 489
                    if ((($context["bytes"] ?? null) < 1000)) {
                        // line 490
                        yield (string) $this->escaper->escape((($context["bytes"] ?? null) . " bytes"), "html", null, true);
                    } elseif ((                    // line 491
($context["bytes"] ?? null) < (1000 ** 2))) {
                        // line 492
                        yield (string) $this->escaper->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["bytes"] ?? null) / 1000), 2) . " kB"), "html", null, true);
                    } else {
                        // line 494
                        yield (string) $this->escaper->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["bytes"] ?? null) / (1000 ** 2)), 2) . " MB"), "html", null, true);
                    }
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["bytes" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  1086 => 494,  1083 => 492,  1081 => 491,  1079 => 490,  1077 => 489,  1064 => 488,  1051 => 482,  1046 => 480,  1039 => 476,  1034 => 475,  1028 => 471,  1025 => 470,  1023 => 469,  1013 => 462,  1003 => 454,  998 => 451,  992 => 447,  986 => 443,  984 => 442,  979 => 440,  977 => 439,  975 => 438,  966 => 435,  963 => 434,  958 => 431,  952 => 427,  948 => 425,  945 => 423,  942 => 421,  940 => 420,  938 => 419,  936 => 418,  928 => 415,  925 => 414,  917 => 409,  912 => 406,  910 => 405,  905 => 402,  899 => 398,  895 => 396,  892 => 394,  889 => 392,  887 => 391,  885 => 390,  883 => 389,  874 => 386,  871 => 385,  868 => 384,  866 => 383,  861 => 380,  856 => 377,  848 => 375,  839 => 373,  833 => 371,  829 => 369,  827 => 368,  824 => 367,  820 => 365,  814 => 363,  812 => 362,  807 => 360,  804 => 359,  801 => 358,  797 => 357,  786 => 353,  782 => 352,  779 => 351,  776 => 350,  774 => 349,  771 => 348,  769 => 347,  764 => 344,  757 => 343,  751 => 341,  748 => 340,  744 => 339,  739 => 337,  732 => 333,  724 => 328,  716 => 322,  711 => 320,  704 => 316,  699 => 315,  697 => 314,  695 => 313,  692 => 312,  686 => 309,  679 => 307,  676 => 306,  673 => 305,  656 => 304,  646 => 301,  640 => 299,  637 => 298,  634 => 297,  616 => 294,  609 => 293,  592 => 292,  586 => 288,  568 => 285,  564 => 284,  560 => 283,  556 => 282,  549 => 281,  532 => 280,  519 => 269,  516 => 268,  514 => 267,  511 => 266,  496 => 265,  483 => 262,  477 => 260,  474 => 259,  465 => 257,  460 => 256,  455 => 255,  453 => 254,  450 => 253,  441 => 247,  433 => 242,  428 => 239,  422 => 235,  420 => 234,  416 => 232,  413 => 231,  403 => 230,  394 => 227,  388 => 224,  385 => 223,  383 => 222,  377 => 219,  373 => 218,  370 => 217,  367 => 216,  357 => 215,  346 => 211,  343 => 210,  336 => 207,  329 => 203,  325 => 201,  323 => 200,  320 => 199,  314 => 197,  309 => 196,  306 => 195,  304 => 194,  301 => 193,  298 => 192,  288 => 191,  251 => 162,  241 => 161,  76 => 4,  66 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Collector/mailer.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\mailer.html.twig");
    }
}
