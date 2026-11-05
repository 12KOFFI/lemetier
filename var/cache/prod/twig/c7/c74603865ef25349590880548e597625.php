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
            .fichier-case, .fichier-case.is-anime, .fichier-case.is-anime .fichier-coche { animation: none; transition: none; }
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 88
        $macros["ui"] = $this->getMacroNamespace();
        // line 89
        yield "<div class=\"max-w-5xl mx-auto\">
    <div class=\"p-8 mb-8 text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl\">
        <h1 class=\"text-2xl font-bold\">Nouvelle candidature</h1>
        <p class=\"mt-1 text-white/85\">
            ";
        // line 93
        if ((($tmp = ($context["etablissement_impose"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "                ";
            yield (string) $this->escaper->escape(($context["etablissement_impose"] ?? null), "html", null, true);
            yield " · ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "nom", [], "any", false, false, false, 94), "html", null, true);
            yield "
            ";
        } else {
            // line 96
            yield "                Saisie administrateur · ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "nom", [], "any", false, false, false, 96), "html", null, true);
            yield "
            ";
        }
        // line 98
        yield "        </p>
        <p class=\"mt-3 text-sm text-white/80\">Remplissez la fiche avec le candidat présent et ses pièces originales. Son compte de connexion est créé en même temps que la candidature.</p>
    </div>

    <p class=\"mb-4 text-sm text-slate-600\">Les champs marqués d\x27un <span class=\"font-semibold text-red-600\">*</span> sont obligatoires.</p>

    ";
        // line 104
        yield from $this->load("partials/_flash_messages.html.twig", 104)->unwrap()->yield($context);
        // line 105
        yield "
    ";
        // line 106
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-8", "novalidate" => "novalidate"]]);
        yield "

    ";
        // line 108
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "        <div class=\"px-5 py-4 text-sm text-red-700 border border-red-300 rounded-xl bg-red-50\">";
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            yield "</div>
    ";
        }
        // line 111
        yield "
    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 113
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(113))->call("carte", ["school", "Formation"], $context, 113, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 115
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etablissement", [], "any", true, true, false, 115)) {
            // line 116
            yield "                ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(116))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etablissement", [], "any", false, false, false, 116), ($context["input_class"] ?? null)], $context, 116, $this->source);
            yield "
            ";
        } else {
            // line 118
            yield "                <div>
                    <p class=\"block mb-1.5 text-sm font-semibold text-slate-700\">Établissement</p>
                    <p class=\"px-4 py-2.5 rounded-lg bg-slate-100 text-slate-800\">";
            // line 120
            yield (string) $this->escaper->escape(($context["etablissement_impose"] ?? null), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 123
        yield "            ";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(123))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "metier", [], "any", false, false, false, 123), ($context["input_class"] ?? null)], $context, 123, $this->source);
        yield "
        </div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 128
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(128))->call("carte", ["user", "Identité du candidat"], $context, 128, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 130
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(130))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 130), "nom", [], "any", false, false, false, 130), ($context["input_class"] ?? null), ["autocomplete" => "off"]], $context, 130, $this->source);
        yield "
            ";
        // line 131
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(131))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 131), "prenoms", [], "any", false, false, false, 131), ($context["input_class"] ?? null), ["autocomplete" => "off"]], $context, 131, $this->source);
        yield "
            ";
        // line 132
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(132))->call("choix", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 132), "sexe", [], "any", false, false, false, 132)], $context, 132, $this->source);
        yield "
            ";
        // line 133
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(133))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 133), "datenaissance", [], "any", false, false, false, 133), ($context["input_class"] ?? null)], $context, 133, $this->source);
        yield "
            ";
        // line 134
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(134))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 134), "lieunaissance", [], "any", false, false, false, 134), ($context["input_class"] ?? null)], $context, 134, $this->source);
        yield "
            ";
        // line 135
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(135))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 135), "nationalite", [], "any", false, false, false, 135), ($context["input_class"] ?? null)], $context, 135, $this->source);
        yield "
            ";
        // line 136
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(136))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 136), "situationmat", [], "any", false, false, false, 136), ($context["input_class"] ?? null)], $context, 136, $this->source);
        yield "
            ";
        // line 137
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(137))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 137), "numextrait", [], "any", false, false, false, 137), ($context["input_class"] ?? null)], $context, 137, $this->source);
        yield "
            ";
        // line 138
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(138))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 138), "nompere", [], "any", false, false, false, 138), ($context["input_class"] ?? null)], $context, 138, $this->source);
        yield "
            ";
        // line 139
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(139))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 139), "nommere", [], "any", false, false, false, 139), ($context["input_class"] ?? null)], $context, 139, $this->source);
        yield "
        </div>
        <div class=\"mt-1 text-sm text-red-600\">";
        // line 141
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 141), 'errors');
        yield "</div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 145
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(145))->call("carte", ["id-card", "Pièce d\x27identité"], $context, 145, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 147
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(147))->call("choix", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "piece", [], "any", false, false, false, 147)], $context, 147, $this->source);
        yield "
            ";
        // line 148
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(148))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numpiece", [], "any", false, false, false, 148), ($context["input_class"] ?? null)], $context, 148, $this->source);
        yield "
        </div>
        <p class=\"mt-4 text-xs text-slate-500\">Le numéro est vérifié sur toutes les candidatures de la session, dans tous les établissements : un candidat ne peut s\x27inscrire qu\x27une fois.</p>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 154
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(154))->call("carte", ["key", "Compte de connexion du candidat"], $context, 154, $this->source);
        yield "
        <div class=\"px-4 py-3 mb-5 text-sm border rounded-lg border-amber-200 bg-amber-50 text-amber-900\">
            Le candidat se connectera avec son <strong>numéro de téléphone</strong> ou son <strong>e-mail</strong> et le mot de passe choisi ici.
            Notez ces identifiants et remettez-les-lui à la fin de l\x27inscription.
        </div>
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 160
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(160))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 160), "contact", [], "any", false, false, false, 160), ($context["input_class"] ?? null)], $context, 160, $this->source);
        yield "
            ";
        // line 161
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(161))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidat", [], "any", false, false, false, 161), "email", [], "any", false, false, false, 161), ($context["input_class"] ?? null)], $context, 161, $this->source);
        yield "
            ";
        // line 162
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(162))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 162), "first", [], "any", false, false, false, 162), ($context["input_class"] ?? null)], $context, 162, $this->source);
        yield "
            ";
        // line 163
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(163))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 163), "second", [], "any", false, false, false, 163), ($context["input_class"] ?? null)], $context, 163, $this->source);
        yield "
        </div>
        <div class=\"mt-1 text-sm text-red-600\">";
        // line 165
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 165), 'errors');
        yield "</div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 169
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(169))->call("carte", ["house", "Résidence et situation"], $context, 169, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-3\">
            ";
        // line 171
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(171))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "villeResidence", [], "any", false, false, false, 171), ($context["input_class"] ?? null)], $context, 171, $this->source);
        yield "
            ";
        // line 172
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(172))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quartierAdresse", [], "any", false, false, false, 172), ($context["input_class"] ?? null)], $context, 172, $this->source);
        yield "
            ";
        // line 173
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(173))->call("champ", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etucom", [], "any", false, false, false, 173), ($context["input_class"] ?? null)], $context, 173, $this->source);
        yield "
        </div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        ";
        // line 178
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(178))->call("carte", ["paperclip", "Pièces du dossier"], $context, 178, $this->source);
        yield "
        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
            ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["fextrait", "fpiece", "fphoto", "fautre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 181
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["champ"], [], "any", true, true, false, 181)) {
                // line 182
                yield "                    ";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(182))->call("fichier", [CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["champ"], [], "any", false, false, false, 182), (((CoreExtension::getAttribute($this->env, $this->source, ($context["deja_recus"] ?? null), $context["champ"], [], "array", true, true, false, 182) &&  !(null === (($_v0 = ($context["deja_recus"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = $context["champ"]) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)))) ? ((($_v2 = ($context["deja_recus"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = $context["champ"]) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) : (null))], $context, 182, $this->source);
                yield "
                ";
            }
            // line 184
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['champ'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 185
        yield "        </div>
    </section>

    <section class=\"p-6 bg-white border shadow-sm md:p-8 rounded-2xl border-slate-200\">
        <label class=\"flex items-start gap-3 cursor-pointer\">
            ";
        // line 190
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "mt-1 w-4 h-4 text-indigo-600 border-slate-300 rounded focus:ring-indigo-500"]]);
        yield "
            <span class=\"text-sm text-slate-800\">";
        // line 191
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "label", [], "any", false, false, false, 191), "html", null, true);
        yield "<span class=\"ml-0.5 text-red-600\" aria-hidden=\"true\">*</span></span>
        </label>
        <div class=\"mt-1 text-sm text-red-600\">";
        // line 193
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 193), 'errors');
        yield "</div>

        <div class=\"flex flex-wrap justify-end gap-3 pt-6 mt-6 border-t border-slate-200\">
            <a href=\"";
        // line 196
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" class=\"inline-flex items-center px-6 py-2.5 border rounded-lg border-slate-300 text-slate-700 hover:bg-slate-50\">Annuler</a>
            <button type=\"submit\" class=\"inline-flex items-center px-6 py-2.5 font-semibold text-white bg-indigo-600 rounded-lg shadow hover:bg-indigo-700\">
                <i class=\"mr-2 fas fa-save\" aria-hidden=\"true\"></i> Enregistrer la candidature
            </button>
        </div>
    </section>

    ";
        // line 203
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 203), 'widget');
        yield "
    <input type=\"hidden\" name=\"_depot\" value=\"";
        // line 204
        yield (string) $this->escaper->escape(($context["depot"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 205
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 209
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
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
        var TAILLE_MAX = 5 * 1024 * 1024;
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
                    ? \x27Fichier trop lourd : 5 Mo maximum\x27
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
        return array (  703 => 56,  699 => 55,  696 => 54,  682 => 53,  670 => 49,  666 => 48,  660 => 45,  651 => 43,  645 => 40,  641 => 39,  636 => 38,  627 => 35,  624 => 34,  622 => 32,  608 => 31,  596 => 27,  593 => 26,  583 => 23,  579 => 22,  576 => 21,  572 => 20,  564 => 18,  561 => 17,  548 => 16,  536 => 12,  532 => 11,  528 => 10,  519 => 9,  516 => 8,  501 => 7,  437 => 210,  427 => 209,  416 => 205,  412 => 204,  408 => 203,  398 => 196,  392 => 193,  387 => 191,  383 => 190,  376 => 185,  369 => 184,  363 => 182,  360 => 181,  356 => 180,  351 => 178,  343 => 173,  339 => 172,  335 => 171,  330 => 169,  323 => 165,  318 => 163,  314 => 162,  310 => 161,  306 => 160,  297 => 154,  288 => 148,  284 => 147,  279 => 145,  272 => 141,  267 => 139,  263 => 138,  259 => 137,  255 => 136,  251 => 135,  247 => 134,  243 => 133,  239 => 132,  235 => 131,  231 => 130,  226 => 128,  217 => 123,  211 => 120,  207 => 118,  201 => 116,  199 => 115,  194 => 113,  190 => 111,  184 => 109,  182 => 108,  177 => 106,  174 => 105,  172 => 104,  164 => 98,  158 => 96,  150 => 94,  148 => 93,  142 => 89,  140 => 88,  130 => 87,  96 => 61,  86 => 60,  68 => 3,  60 => 1,  58 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/saisie.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\saisie.html.twig");
    }
}
