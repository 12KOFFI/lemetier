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

/* candidature/saisie.html.twig */
class __TwigTemplate_f8edd371319e5ab5585dba773651b859 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base_dashboard.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/saisie.html.twig"));

        // line 5
        $context["input_class"] = "w-full px-4 py-2.5 rounded-lg border border-slate-300 bg-white text-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition";
        // line 1
        $this->parent = $this->load("base_dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nouvelle candidature | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 61
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .notification-erreurs { transform: translateX(-50%); animation: notification-entree .3s ease-out; }
        @keyframes notification-entree {
            from { transform: translate(-50%, -1rem); opacity: 0; }
            to { transform: translate(-50%, 0); opacity: 1; }
        }
        .fichier-case { transition: border-color .2s ease, background-color .2s ease; }
        .fichier-nom { display: flex; align-items: center; gap: .4rem; }
        .fichier-coche { display: none; flex-shrink: 0; font-size: 1.05rem; }
        .fichier-case.is-recu { border-color: #10b981; background-color: #ecfdf5; }
        .fichier-case.is-recu .fichier-nom { color: #047857; font-weight: 600; }
        .fichier-case.is-recu .fichier-coche { display: inline-block; color: #059669; }
        .fichier-case.is-refuse { border-color: #dc2626; background-color: #fef2f2; }
        .fichier-case.is-refuse .fichier-nom { color: #b91c1c; font-weight: 600; }
        .fichier-case.is-anime { animation: fichier-halo .7s ease-out; }
        .fichier-case.is-anime .fichier-coche { animation: fichier-coche .45s cubic-bezier(.34, 1.56, .64, 1); }
        @keyframes fichier-halo {
            from { box-shadow: 0 0 0 0 rgba(16, 185, 129, .5); }
            to { box-shadow: 0 0 0 10px rgba(16, 185, 129, 0); }
        }
        @keyframes fichier-coche {
            from { transform: scale(0) rotate(-45deg); opacity: 0; }
            to { transform: scale(1) rotate(0); opacity: 1; }
        }
        @media (prefers-reduced-motion: reduce) {
            .notification-erreurs, .fichier-case, .fichier-case.is-anime, .fichier-case.is-anime .fichier-coche { animation: none; transition: none; }
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 93
        $macros["ui"] = $this->getMacroNamespace();
        // line 94
        if ((($tmp = ($context["erreurs_saisie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "    ";
            // line 96
            yield "    <div id=\"notification-erreurs\" role=\"alert\" class=\"notification-erreurs fixed top-4 left-1/2 w-[calc(100%-2rem)] max-w-xl overflow-hidden bg-white border border-red-300 shadow-2xl rounded-xl\" style=\"z-index: 70\">
        <div class=\"flex items-start gap-3 p-4 border-b border-red-200 bg-red-50\">
            <i class=\"mt-0.5 text-xl text-red-600 fas fa-circle-exclamation\" aria-hidden=\"true\"></i>
            <div class=\"flex-1 min-w-0\">
                <p class=\"font-bold text-red-800\">Candidature non enregistrée</p>
                <p class=\"text-sm text-red-700\">";
            // line 101
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["erreurs_saisie"] ?? null)), "html", null, true);
            yield " ";
            yield (string) (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["erreurs_saisie"] ?? null)) > 1)) ? ("champs à corriger") : ("champ à corriger"));
            yield " : cliquez pour y aller.</p>
            </div>
            <button type=\"button\" data-fermer-notification class=\"p-1 text-red-500 rounded hover:text-red-800\" aria-label=\"Fermer la notification\">
                <i class=\"fas fa-times\" aria-hidden=\"true\"></i>
            </button>
        </div>
        <ul class=\"overflow-y-auto divide-y max-h-64 divide-slate-100\">
            ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["erreurs_saisie"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
                // line 109
                yield "                <li>
                    <button type=\"button\" data-aller-champ=\"";
                // line 110
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["erreur"], "id", [], "any", false, false, false, 110), "html", null, true);
                yield "\" class=\"w-full px-4 py-2.5 text-sm text-left hover:bg-red-50\">
                        <span class=\"font-semibold text-slate-800\">";
                // line 111
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["erreur"], "champ", [], "any", false, false, false, 111), "html", null, true);
                yield "</span>
                        <span class=\"block text-red-700\">";
                // line 112
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["erreur"], "message", [], "any", false, false, false, 112), "html", null, true);
                yield "</span>
                    </button>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['erreur'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 116
            yield "        </ul>
    </div>
";
        }
        // line 119
        yield "<div class=\"max-w-5xl mx-auto\">
    <div class=\"p-8 mb-8 text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl\">
        <h1 class=\"text-2xl font-bold\">Nouvelle candidature</h1>
        <p class=\"mt-1 text-white/85\">
            ";
        // line 123
        if ((($tmp = ($context["etablissement_impose"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "                ";
            yield (string) $this->escaper->escape(($context["etablissement_impose"] ?? null), "html", null, true);
            yield " · ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "nom", [], "any", false, false, false, 124), "html", null, true);
            yield "
            ";
        } else {
            // line 126
            yield "                Saisie administrateur · ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "nom", [], "any", false, false, false, 126), "html", null, true);
            yield "
            ";
        }
        // line 128
        yield "        </p>
        <p class=\"mt-3 text-sm text-white/80\">Remplissez la fiche avec le candidat présent et ses pièces originales. Son compte de connexion est créé en même temps que la candidature.</p>
    </div>

    <p class=\"mb-4 text-sm text-slate-600\">Les champs marqués d\x27un <span class=\"font-semibold text-red-600\">*</span> sont obligatoires.</p>

    ";
        // line 134
        yield from $this->load("partials/_flash_messages.html.twig", 134)->unwrap()->yield($context);
        // line 135
        yield "
    ";
        // line 136
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-8", "novalidate" => "novalidate"]]);
        yield "

    ";
        // line 138
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "        <div class=\"px-5 py-4 text-sm text-red-700 border border-red-300 rounded-xl bg-red-50\">";
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            yield "</div>
    ";
        }
        // line 141
        yield "
    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 143
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(143))->call("carte", ["school", "Formation"], $context, 143, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 145
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etablissement", [], "any", true, true, false, 145)) {
            // line 146
            yield "                ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(146))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etablissement", [], "any", false, false, false, 146), ($context["input_class"] ?? null)], $context, 146, $this->source);
            yield "
            ";
        } else {
            // line 148
            yield "                <div>
                    <p class=\"block mb-1.5 text-sm font-semibold text-slate-700\">Établissement</p>
                    <p class=\"px-4 py-2.5 rounded-lg bg-slate-100 text-slate-800\">";
            // line 150
            yield (string) $this->escaper->escape(($context["etablissement_impose"] ?? null), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 153
        yield "            ";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(153))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "metier", [], "any", false, false, false, 153), ($context["input_class"] ?? null)], $context, 153, $this->source);
        yield "
        </div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 158
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(158))->call("carte", ["user", "Identité du candidat"], $context, 158, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 160
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(160))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 160), "nom", [], "any", false, false, false, 160), ($context["input_class"] ?? null), ["autocomplete" => "off"]], $context, 160, $this->source);
        yield "
            ";
        // line 161
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(161))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 161), "prenoms", [], "any", false, false, false, 161), ($context["input_class"] ?? null), ["autocomplete" => "off"]], $context, 161, $this->source);
        yield "
            ";
        // line 162
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(162))->call("choix", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 162), "sexe", [], "any", false, false, false, 162)], $context, 162, $this->source);
        yield "
            ";
        // line 163
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(163))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 163), "datenaissance", [], "any", false, false, false, 163), ($context["input_class"] ?? null)], $context, 163, $this->source);
        yield "
            ";
        // line 164
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(164))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 164), "lieunaissance", [], "any", false, false, false, 164), ($context["input_class"] ?? null)], $context, 164, $this->source);
        yield "
            ";
        // line 165
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(165))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 165), "nationalite", [], "any", false, false, false, 165), ($context["input_class"] ?? null)], $context, 165, $this->source);
        yield "
            ";
        // line 166
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(166))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 166), "situationmat", [], "any", false, false, false, 166), ($context["input_class"] ?? null)], $context, 166, $this->source);
        yield "
            ";
        // line 167
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(167))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 167), "numextrait", [], "any", false, false, false, 167), ($context["input_class"] ?? null)], $context, 167, $this->source);
        yield "
            ";
        // line 168
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(168))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 168), "nompere", [], "any", false, false, false, 168), ($context["input_class"] ?? null)], $context, 168, $this->source);
        yield "
            ";
        // line 169
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(169))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 169), "nommere", [], "any", false, false, false, 169), ($context["input_class"] ?? null)], $context, 169, $this->source);
        yield "
        </div>
        <div class=\"mt-1 text-sm text-red-600\">";
        // line 171
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 171), 'errors');
        yield "</div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 175
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(175))->call("carte", ["id-card", "Pièce d\x27identité"], $context, 175, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 177
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(177))->call("choix", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "piece", [], "any", false, false, false, 177)], $context, 177, $this->source);
        yield "
            ";
        // line 178
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(178))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numpiece", [], "any", false, false, false, 178), ($context["input_class"] ?? null)], $context, 178, $this->source);
        yield "
        </div>
        <p class=\"mt-4 text-xs text-slate-500\">Le numéro est vérifié sur toutes les candidatures de la session, dans tous les établissements : un candidat ne peut s\x27inscrire qu\x27une fois.</p>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 184
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(184))->call("carte", ["key", "Compte de connexion du candidat"], $context, 184, $this->source);
        yield "
        <div class=\"px-4 py-3 mb-5 text-sm border rounded-lg border-amber-200 bg-amber-50 text-amber-900\">
            Le candidat se connectera avec son <strong>numéro de téléphone</strong> ou son <strong>e-mail</strong> et le mot de passe choisi ici.
            Notez ces identifiants et remettez-les-lui à la fin de l\x27inscription.
        </div>
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 190
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(190))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 190), "contact", [], "any", false, false, false, 190), ($context["input_class"] ?? null)], $context, 190, $this->source);
        yield "
            ";
        // line 191
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(191))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 191), "email", [], "any", false, false, false, 191), ($context["input_class"] ?? null)], $context, 191, $this->source);
        yield "
            ";
        // line 192
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(192))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 192), "first", [], "any", false, false, false, 192), ($context["input_class"] ?? null)], $context, 192, $this->source);
        yield "
            ";
        // line 193
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(193))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 193), "second", [], "any", false, false, false, 193), ($context["input_class"] ?? null)], $context, 193, $this->source);
        yield "
        </div>
        <div class=\"mt-1 text-sm text-red-600\">";
        // line 195
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 195), 'errors');
        yield "</div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 199
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(199))->call("carte", ["house", "Résidence et situation"], $context, 199, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-3\">
            ";
        // line 201
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(201))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "villeResidence", [], "any", false, false, false, 201), ($context["input_class"] ?? null)], $context, 201, $this->source);
        yield "
            ";
        // line 202
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(202))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quartierAdresse", [], "any", false, false, false, 202), ($context["input_class"] ?? null)], $context, 202, $this->source);
        yield "
            ";
        // line 203
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(203))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etucom", [], "any", false, false, false, 203), ($context["input_class"] ?? null)], $context, 203, $this->source);
        yield "
        </div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 208
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(208))->call("carte", ["paperclip", "Pièces du dossier"], $context, 208, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["fextrait", "fpiece", "fphoto", "fautre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 211
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["champ"], [], "any", true, true, false, 211)) {
                // line 212
                yield "                    ";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(212))->call("fichier", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["champ"], [], "any", false, false, false, 212), (((CoreExtension::getAttribute($this->env, $this->source, ($context["deja_recus"] ?? null), $context["champ"], [], "array", true, true, false, 212) &&  !(null === (($_v0 = ($context["deja_recus"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = $context["champ"]) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)))) ? ((($_v2 = ($context["deja_recus"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = $context["champ"]) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) : (null))], $context, 212, $this->source);
                yield "
                ";
            }
            // line 214
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['champ'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 215
        yield "        </div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        <label class=\"flex items-start gap-3 cursor-pointer\">
            ";
        // line 220
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" => "mt-1 w-4 h-4 text-indigo-600 border-slate-300 rounded focus:ring-indigo-500"]]);
        yield "
            <span class=\"text-sm text-slate-800\">";
        // line 221
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 221), "vars", [], "any", false, false, false, 221), "label", [], "any", false, false, false, 221), "html", null, true);
        yield "<span class=\"ml-0.5 text-red-600\" aria-hidden=\"true\">*</span></span>
        </label>
        <div class=\"mt-1 text-sm text-red-600\">";
        // line 223
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 223), 'errors');
        yield "</div>

        <div class=\"flex flex-wrap justify-end gap-3 pt-6 mt-6 border-t border-slate-200\">
            <a href=\"";
        // line 226
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" class=\"inline-flex items-center px-6 py-2.5 border rounded-lg border-slate-300 text-slate-700 hover:bg-slate-50\">Annuler</a>
            <button type=\"submit\" class=\"inline-flex items-center px-6 py-2.5 font-semibold text-white bg-indigo-600 rounded-lg shadow hover:bg-indigo-700\">
                <i class=\"mr-2 fas fa-save\" aria-hidden=\"true\"></i> Enregistrer la candidature
            </button>
        </div>
    </section>

    ";
        // line 233
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 233), 'widget');
        yield "
    <input type=\"hidden\" name=\"_depot\" value=\"";
        // line 234
        yield (string) $this->escaper->escape(($context["depot"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 235
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 240
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Notification d\x27erreurs : fermeture, et accès direct au champ concerné.
        document.querySelector(\x27[data-fermer-notification]\x27)?.addEventListener(\x27click\x27, function () {
            document.getElementById(\x27notification-erreurs\x27).remove();
        });
        document.querySelectorAll(\x27[data-aller-champ]\x27).forEach(function (bouton) {
            bouton.addEventListener(\x27click\x27, function () {
                var id = bouton.dataset.allerChamp;
                var champ = document.getElementById(id) || document.querySelector(\x27[id^=\"\x27 + id + \x27_\"]\x27);
                if (champ) {
                    (champ.closest(\x27div, fieldset\x27) || champ).scrollIntoView({ block: \x27center\x27 });
                    champ.focus({ preventScroll: true });
                }
            });
        });

        // Téléphone : uniquement des chiffres, 10 au maximum. Un numéro collé avec espaces ou +225 est nettoyé.
        document.querySelectorAll(\x27[data-telephone]\x27).forEach(function (input) {
            input.addEventListener(\x27input\x27, function () {
                var chiffres = input.value.replace(/\\D/g, \x27\x27);
                if (chiffres.length === 13 && chiffres.indexOf(\x27225\x27) === 0) {
                    chiffres = chiffres.slice(3);
                }
                chiffres = chiffres.slice(0, 10);
                if (input.value !== chiffres) {
                    input.value = chiffres;
                }
            });
        });

        // Fichier récupéré : la case passe au vert avec une coche animée. Trop lourd : en rouge, le fichier est retiré.
        var TAILLE_MAX = 2 * 1024 * 1024;
        document.querySelectorAll(\x27[data-fichier]\x27).forEach(function (input) {
            var cadre = input.closest(\x27[data-fichier-case]\x27);
            var nom = cadre.querySelector(\x27[data-fichier-nom]\x27);
            var texte = cadre.querySelector(\x27[data-fichier-texte]\x27);

            input.addEventListener(\x27change\x27, function () {
                var fichier = input.files && input.files[0];
                var tropLourd = !!fichier && fichier.size > TAILLE_MAX;
                if (tropLourd) {
                    input.value = \x27\x27;
                }
                var recu = !!fichier && !tropLourd;
                var dejaRecu = nom.dataset.dejaRecu;

                texte.textContent = tropLourd
                    ? \x27Fichier trop lourd : 2 Mo maximum\x27
                    : (recu ? fichier.name : (dejaRecu || \x27Aucun fichier choisi\x27));

                cadre.classList.remove(\x27is-recu\x27, \x27is-refuse\x27, \x27is-anime\x27);
                if (recu || (!tropLourd && dejaRecu)) {
                    cadre.classList.add(\x27is-recu\x27);
                }
                if (tropLourd) {
                    cadre.classList.add(\x27is-refuse\x27);
                }
                if (recu) {
                    void cadre.offsetWidth; // relance l\x27animation si on remplace le fichier
                    cadre.classList.add(\x27is-anime\x27);
                }
            });
        });
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "champ" => new \Twig\TwigMacro("champ", function ($field = null, $input_class = null, $extra_attr = [], ...$varargs): string|Markup {
                // line 7
                $macros = $this->macros;
                $context = [
                    "field" => $field,
                    "input_class" => $input_class,
                    "extra_attr" => $extra_attr,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "champ"));

                    // line 8
                    yield "    <div>
        <label for=\"";
                    // line 9
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "html", null, true);
                    yield "\" class=\"block mb-1.5 text-sm font-semibold text-slate-700\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), "html", null, true);
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 9), "required", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<span class=\"ml-0.5 text-red-600\" aria-hidden=\"true\">*</span>";
                    }
                    yield "</label>
        ";
                    // line 10
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'widget', ["attr" => Twig\Extension\CoreExtension::merge(["class" => ($context["input_class"] ?? null)], ($context["extra_attr"] ?? null))]);
                    yield "
        ";
                    // line 11
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'help', ["help_attr" => ["class" => "mt-1 text-xs text-slate-500"]]);
                    yield "
        <div class=\"mt-1 text-sm text-red-600\">";
                    // line 12
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'errors');
                    yield "</div>
    </div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["field" => false, "input_class" => false, "extra_attr" => true], false),
            "choix" => new \Twig\TwigMacro("choix", function ($field = null, ...$varargs): string|Markup {
                // line 16
                $macros = $this->macros;
                $context = [
                    "field" => $field,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "choix"));

                    // line 17
                    yield "    <fieldset>
        <legend class=\"block mb-1.5 text-sm font-semibold text-slate-700\">";
                    // line 18
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 18), "label", [], "any", false, false, false, 18), "html", null, true);
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 18), "required", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<span class=\"ml-0.5 text-red-600\" aria-hidden=\"true\">*</span>";
                    }
                    yield "</legend>
        <div class=\"flex flex-wrap gap-3\">
            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["field"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 21
                        yield "                <label class=\"inline-flex items-center gap-2 px-4 py-2.5 border rounded-lg cursor-pointer border-slate-300 has-[:checked]:border-indigo-600 has-[:checked]:bg-indigo-50\">
                    ";
                        // line 22
                        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'widget', ["attr" => ["class" => "w-4 h-4 text-indigo-600 border-slate-300 focus:ring-indigo-500"]]);
                        yield "
                    <span class=\"text-sm text-slate-800\">";
                        // line 23
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "vars", [], "any", false, false, false, 23), "label", [], "any", false, false, false, 23), "html", null, true);
                        yield "</span>
                </label>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 26
                    yield "        </div>
        <div class=\"mt-1 text-sm text-red-600\">";
                    // line 27
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'errors');
                    yield "</div>
    </fieldset>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["field" => false], false),
            "fichier" => new \Twig\TwigMacro("fichier", function ($field = null, $deja_recu = null, ...$varargs): string|Markup {
                // line 31
                $macros = $this->macros;
                $context = [
                    "field" => $field,
                    "deja_recu" => $deja_recu,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "fichier"));

                    // line 32
                    yield "    ";
                    // line 34
                    yield "    <div>
        <label for=\"";
                    // line 35
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true);
                    yield "\" class=\"block mb-1.5 text-sm font-semibold text-slate-700\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 35), "label", [], "any", false, false, false, 35), "html", null, true);
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 35), "required", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<span class=\"ml-0.5 text-red-600\" aria-hidden=\"true\">*</span>";
                    }
                    yield "</label>
        ";
                    // line 38
                    yield "        <div class=\"fichier-case relative flex items-center gap-3 p-1.5 bg-white border rounded-lg border-slate-300 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:border-transparent";
                    yield (string) (((($tmp = ($context["deja_recu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-recu") : (""));
                    yield "\" data-fichier-case>
            ";
                    // line 39
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'widget', ["attr" => ["class" => "sr-only", "data-fichier" => ""]]);
                    yield "
            <label for=\"";
                    // line 40
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
                    yield "\" class=\"inline-flex items-center shrink-0 gap-2 px-4 py-2 text-sm font-semibold text-indigo-700 rounded-md cursor-pointer bg-indigo-50 hover:bg-indigo-100\">
                <i class=\"fas fa-upload\" aria-hidden=\"true\"></i> Choisir un fichier
            </label>
            <span class=\"fichier-nom min-w-0 text-sm text-slate-500\" data-fichier-nom";
                    // line 43
                    if ((($tmp = ($context["deja_recu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " data-deja-recu=\"Déjà reçu : ";
                        yield (string) $this->escaper->escape(($context["deja_recu"] ?? null), "html", null, true);
                        yield "\"";
                    }
                    yield " aria-live=\"polite\">
                <i class=\"fas fa-circle-check fichier-coche\" aria-hidden=\"true\"></i>
                <span class=\"truncate\" data-fichier-texte>";
                    // line 45
                    yield (string) (((($tmp = ($context["deja_recu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(("Déjà reçu : " . ($context["deja_recu"] ?? null)), "html", null, true)) : ("Aucun fichier choisi"));
                    yield "</span>
            </span>
        </div>
        ";
                    // line 48
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'help', ["help_attr" => ["class" => "mt-1 text-xs text-slate-500"]]);
                    yield "
        <div class=\"mt-1 text-sm text-red-600\">";
                    // line 49
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'errors');
                    yield "</div>
    </div>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["field" => false, "deja_recu" => true], false),
            "carte" => new \Twig\TwigMacro("carte", function ($icone = null, $titre = null, ...$varargs): string|Markup {
                // line 53
                $macros = $this->macros;
                $context = [
                    "icone" => $icone,
                    "titre" => $titre,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "carte"));

                    // line 54
                    yield "    <h2 class=\"flex items-center pb-3 mb-5 text-lg font-semibold border-b text-indigo-800\">
        <span class=\"flex items-center justify-center w-8 h-8 mr-3 bg-indigo-100 rounded-lg\" aria-hidden=\"true\"><i class=\"fas fa-";
                    // line 55
                    yield (string) $this->escaper->escape(($context["icone"] ?? null), "html", null, true);
                    yield " text-indigo-700\"></i></span>
        ";
                    // line 56
                    yield (string) $this->escaper->escape(($context["titre"] ?? null), "html", null, true);
                    yield "
    </h2>
";
                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["icone" => false, "titre" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "candidature/saisie.html.twig";
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
        return array (  777 => 56,  773 => 55,  770 => 54,  756 => 53,  744 => 49,  740 => 48,  734 => 45,  725 => 43,  719 => 40,  715 => 39,  710 => 38,  701 => 35,  698 => 34,  696 => 32,  682 => 31,  670 => 27,  667 => 26,  657 => 23,  653 => 22,  650 => 21,  646 => 20,  638 => 18,  635 => 17,  622 => 16,  610 => 12,  606 => 11,  602 => 10,  593 => 9,  590 => 8,  575 => 7,  496 => 240,  486 => 239,  475 => 235,  471 => 234,  467 => 233,  457 => 226,  451 => 223,  446 => 221,  442 => 220,  435 => 215,  428 => 214,  422 => 212,  419 => 211,  415 => 210,  410 => 208,  402 => 203,  398 => 202,  394 => 201,  389 => 199,  382 => 195,  377 => 193,  373 => 192,  369 => 191,  365 => 190,  356 => 184,  347 => 178,  343 => 177,  338 => 175,  331 => 171,  326 => 169,  322 => 168,  318 => 167,  314 => 166,  310 => 165,  306 => 164,  302 => 163,  298 => 162,  294 => 161,  290 => 160,  285 => 158,  276 => 153,  270 => 150,  266 => 148,  260 => 146,  258 => 145,  253 => 143,  249 => 141,  243 => 139,  241 => 138,  236 => 136,  233 => 135,  231 => 134,  223 => 128,  217 => 126,  209 => 124,  207 => 123,  201 => 119,  196 => 116,  185 => 112,  181 => 111,  177 => 110,  174 => 109,  170 => 108,  158 => 101,  151 => 96,  149 => 95,  147 => 94,  145 => 93,  135 => 92,  96 => 61,  86 => 60,  68 => 3,  60 => 1,  58 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/saisie.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\saisie.html.twig");
    }
}
