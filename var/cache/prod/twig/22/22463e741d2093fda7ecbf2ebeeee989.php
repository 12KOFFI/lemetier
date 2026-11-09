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

/* candidature/form.html.twig */
class __TwigTemplate_8e7a035b5d118ba3202aaf694d34c638 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/form.html.twig"));

        // line 6
        $context["input_class"] = "w-full px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition";
        // line 7
        $context["is_edit_page"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", ["_route"], "method", false, false, false, 7) == "app_candidature_edit");
        // line 1
        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Nouvelle candidature | GROUPE LEMETIER";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "        <div class=\"mb-4 p-4 rounded-lg border
            ";
                // line 15
                if (($context["label"] == "error")) {
                    // line 16
                    yield "                bg-red-50 border-red-200 text-red-800
            ";
                } elseif ((                // line 17
$context["label"] == "success")) {
                    // line 18
                    yield "                bg-green-50 border-green-200 text-green-800
            ";
                } else {
                    // line 20
                    yield "                bg-blue-50 border-blue-200 text-blue-800
            ";
                }
                // line 22
                yield "        \">
            ";
                // line 23
                yield (string) $this->escaper->escape($context["message"], "html", null, true);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 27
        yield "
<div class=\"p-8 mb-8 text-white bg-gradient-to-r from-indigo-600 to-purple-600\">
    <div class=\"flex items-center gap-4 mb-4\">
        <div class=\"flex items-center justify-center w-16 h-16 rounded-full bg-white/20\">
            <i class=\"text-3xl fas fa-file-alt\"></i>
        </div>
        <div>
            <h1 class=\"text-2xl font-bold\">
                ";
        // line 35
        if ((($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modification de candidature";
        } else {
            yield "Nouvelle candidature";
        }
        // line 36
        yield "            </h1>
            <p class=\"text-white/80\">
                ";
        // line 38
        if ((($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Mettez a jour les informations de la candidature de facon claire et complete.";
        } else {
            yield "Vous etes sur le point de postuler a une formation";
        }
        // line 39
        yield "            </p>
        </div>
    </div>
    
    <!-- Informations du candidat -->
    ";
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "        ";
            if (((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && array_key_exists("candidature", $context))) {
                // line 46
                yield "            <div class=\"grid grid-cols-1 gap-4 mt-4 lg:grid-cols-2\">
                <div class=\"p-4 border bg-white/10 backdrop-blur-sm rounded-xl border-white/20\">
                    <p class=\"flex items-center mb-3 text-sm font-semibold text-white/80\">
                        <i class=\"mr-2 fas fa-user-graduate\"></i>
                        Informations du candidat
                    </p>
                    <div class=\"space-y-3\">
                        <div class=\"px-3 py-2 rounded-lg bg-white/10\">
                            <p class=\"text-xs tracking-wide uppercase text-white/70\">Nom du candidat</p>
                            <p class=\"mt-1 text-sm font-semibold text-white\">";
                // line 55
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 55), "nom", [], "any", false, false, false, 55) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 55), "prenoms", [], "any", false, false, false, 55))), "html", null, true)) : ("Non renseigne"));
                yield "</p>
                        </div>
                        <div class=\"px-3 py-2 rounded-lg bg-white/10\">
                            <p class=\"text-xs tracking-wide uppercase text-white/70\">Numero de candidature</p>
                            <p class=\"mt-1 text-sm font-semibold text-white\">";
                // line 59
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 59), "Non attribue")) : ("Non attribue")), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>

                <div class=\"p-4 border bg-white/10 backdrop-blur-sm rounded-xl border-white/20\">
                    <p class=\"flex items-center mb-3 text-sm font-semibold text-white/80\">
                        <i class=\"mr-2 fas fa-file-signature\"></i>
                        Informations de la candidature
                    </p>
                    <div class=\"space-y-3\">
                        <div class=\"px-3 py-2 rounded-lg bg-white/10\">
                            <p class=\"text-xs tracking-wide uppercase text-white/70\">Etablissement choisi</p>
                            <p class=\"mt-1 text-sm font-semibold text-white\">";
                // line 72
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 72), "nom", [], "any", false, false, false, 72), "html", null, true)) : ("Non renseigne"));
                yield "</p>
                        </div>
                        <div class=\"px-3 py-2 rounded-lg bg-white/10\">
                            <p class=\"text-xs tracking-wide uppercase text-white/70\">Metier choisi</p>
                            <p class=\"mt-1 text-sm font-semibold text-white\">";
                // line 76
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76), "html", null, true)) : ("Non renseigne"));
                yield "</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 82
                yield "            <div class=\"p-4 mt-4 bg-white/10 backdrop-blur-sm rounded-xl\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"flex items-center justify-center w-10 h-10 rounded-full bg-white/20\">
                        <i class=\"fas fa-user\"></i>
                    </div>
                    <div>
                        <p class=\"text-sm text-white/80\">Candidat</p>
                        <p class=\"font-semibold\">";
                // line 89
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 89), "prenoms", [], "any", false, false, false, 89), "html", null, true);
                yield "</p>
                    </div>

                    ";
                // line 93
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 93), "datenaissance", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 94
                    yield "                        ";
                    $context["age"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 94), "datenaissance", [], "any", false, false, false, 94))], "method", false, false, false, 94), "y", [], "any", false, false, false, 94);
                    // line 95
                    yield "                        <div class=\"px-3 py-1 ml-4 rounded-full bg-white/20\">
                            <span class=\"text-sm\">
                                <i class=\"mr-1 fas fa-birthday-cake\"></i>
                                ";
                    // line 98
                    yield (string) $this->escaper->escape(($context["age"] ?? null), "html", null, true);
                    yield " ans
                            </span>
                            </div>
                    ";
                }
                // line 102
                yield "
                    <div class=\"ml-auto\">
                        <span class=\"px-3 py-1 text-sm rounded-full bg-white/20\">";
                // line 104
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 104), "email", [], "any", false, false, false, 104), "html", null, true);
                yield "</span>
                        <span class=\"px-3 py-1 ml-2 text-xs bg-indigo-500 rounded-full\">
                            ";
                // line 106
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "ADMIN
                            ";
                } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 107
                    yield "ENT
                            ";
                } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 108
                    yield "JURY
                            ";
                } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "CANDIDAT
                            ";
                }
                // line 111
                yield "                        </span>
                    </div>
                </div>
            </div>
        ";
            }
            // line 116
            yield "    ";
        }
        // line 117
        yield "    
    ";
        // line 119
        yield "    ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 119), "datenaissance", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 120
            yield "        ";
            $context["age"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 120), "datenaissance", [], "any", false, false, false, 120))], "method", false, false, false, 120), "y", [], "any", false, false, false, 120);
            // line 121
            yield "        ";
            if (((($context["age"] ?? null) < 18) || (($context["age"] ?? null) > 45))) {
                // line 122
                yield "            <div class=\"p-4 mt-4 border bg-red-500/20 backdrop-blur-sm border-red-500/30 rounded-xl\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"flex items-center justify-center w-10 h-10 rounded-full bg-red-500/30\">
                        <i class=\"text-red-300 fas fa-exclamation-triangle\"></i>
                    </div>
                    <div>
                        <p class=\"font-semibold text-white\">Âge non conforme</p>
                        <p class=\"text-sm text-white/80\">
                            ";
                // line 130
                if ((($context["age"] ?? null) < 18)) {
                    // line 131
                    yield "                                Vous avez ";
                    yield (string) $this->escaper->escape(($context["age"] ?? null), "html", null, true);
                    yield " ans. L\x27âge minimum requis pour candidater est de 18 ans.
                            ";
                } elseif ((                // line 132
($context["age"] ?? null) > 45)) {
                    // line 133
                    yield "                                Vous avez ";
                    yield (string) $this->escaper->escape(($context["age"] ?? null), "html", null, true);
                    yield " ans. L\x27âge maximum autorisé pour candidater est de 45 ans.
                            ";
                }
                // line 135
                yield "                        </p>
                    </div>
                </div>
            </div>
        ";
            }
            // line 140
            yield "    ";
        }
        // line 141
        yield "</div>

<div class=\"max-w-7xl mx-auto px-4 pb-16 ";
        // line 143
        yield (string) (((($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pt-2") : (""));
        yield "\">
    ";
        // line 144
        yield from $this->load("partials/_flash_messages.html.twig", 144)->unwrap()->yield($context);
        // line 145
        yield "
    ";
        // line 146
        if ((((($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && array_key_exists("candidature", $context)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 147
            yield "
        ";
            // line 149
            yield "        <div class=\"mb-8 overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
            <div class=\"p-6 md:p-8\">
                <div class=\"p-4 mb-8 border border-indigo-200 rounded-xl bg-indigo-50 md:p-5\">
                    <div class=\"flex flex-col gap-2 md:flex-row md:items-center md:justify-between\">
                        <div>
                            <p class=\"flex items-center text-sm font-semibold text-indigo-800\">
                                <i class=\"mr-2 fas fa-edit\"></i> Partie 1 — Mise à jour des informations
                            </p>
                            <p class=\"mt-1 text-sm text-indigo-700\">Modifiez les informations du candidat, le métier et les documents.</p>
                        </div>
                        <span class=\"inline-flex items-center px-3 py-1 text-sm font-semibold text-indigo-700 bg-white border border-indigo-200 rounded-full\">
                            N° ";
            // line 160
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 160), "Non attribué")) : ("Non attribué")), "html", null, true);
            yield "
                        </span>
                    </div>
                </div>

                <form id=\"form-update-info\" action=\"";
            // line 165
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_update_info", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"space-y-10\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 166
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("candidature_update_info_" . CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 166))), "html", null, true);
            yield "\">

                    ";
            // line 169
            yield "                    ";
            if (((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 170
                yield "                        <div class=\"p-5 border border-orange-200 rounded-xl bg-orange-50\">
                            <h3 class=\"flex items-center mb-4 text-base font-semibold text-orange-800\">
                                <div class=\"flex items-center justify-center mr-2 bg-orange-200 rounded-lg w-7 h-7\">
                                    <i class=\"text-sm text-orange-700 fas fa-user-edit\"></i>
                                </div>
                                Identité du candidat
                            </h3>
                            <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                                <div>
                                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">Nom <span class=\"text-red-500\">*</span></label>
                                    <input type=\"text\" name=\"nom\" value=\"";
                // line 180
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 180), "nom", [], "any", false, false, false, 180), "html", null, true)) : (""));
                yield "\" class=\"";
                yield (string) $this->escaper->escape(($context["input_class"] ?? null), "html", null, true);
                yield "\" placeholder=\"Nom de famille\">
                                </div>
                                <div>
                                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">Prénom(s) <span class=\"text-red-500\">*</span></label>
                                    <input type=\"text\" name=\"prenoms\" value=\"";
                // line 184
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 184), "prenoms", [], "any", false, false, false, 184), "html", null, true)) : (""));
                yield "\" class=\"";
                yield (string) $this->escaper->escape(($context["input_class"] ?? null), "html", null, true);
                yield "\" placeholder=\"Prénom(s)\">
                                </div>
                                <div>
                                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">Email</label>
                                    <input type=\"email\" name=\"email\" value=\"";
                // line 188
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 188), "email", [], "any", false, false, false, 188), "html", null, true)) : (""));
                yield "\" class=\"";
                yield (string) $this->escaper->escape(($context["input_class"] ?? null), "html", null, true);
                yield "\" placeholder=\"exemple@domaine.com\">
                                </div>
                                <div>
                                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">Contact (téléphone)</label>
                                    <input type=\"text\" name=\"contact\" value=\"";
                // line 192
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 192), "contact", [], "any", false, false, false, 192), "html", null, true)) : (""));
                yield "\" class=\"";
                yield (string) $this->escaper->escape(($context["input_class"] ?? null), "html", null, true);
                yield "\" placeholder=\"Ex: 0102030405\">
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 197
            yield "
                    ";
            // line 199
            yield "                    <h3 class=\"flex items-center pb-3 mb-5 text-lg font-semibold text-indigo-800 border-b\">
                        <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-indigo-200 rounded-lg\">
                            <i class=\"text-indigo-700 fas fa-graduation-cap\"></i>
                        </div>
                        Formation souhaitée
                    </h3>

                    <div class=\"grid grid-cols-1 gap-6 md:grid-cols-2\">
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Établissement <span class=\"text-red-500\">*</span></label>
                            <div class=\"";
            // line 209
            yield (string) $this->escaper->escape(($context["input_class"] ?? null), "html", null, true);
            yield " bg-slate-100 text-slate-600 cursor-default flex items-center gap-2\">
                                <i class=\"text-xs fas fa-lock text-slate-400\"></i>
                                ";
            // line 211
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 211), "nom", [], "any", false, false, false, 211), "html", null, true)) : ("Non renseigné"));
            yield "
                            </div>
                            <input type=\"hidden\" id=\"candidature_etablissement\" value=\"";
            // line 213
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213), "html", null, true)) : (""));
            yield "\">
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Métier <span class=\"text-red-500\">*</span></label>
                            <select name=\"metier_id\" id=\"candidature_metier\" required class=\"";
            // line 217
            yield (string) $this->escaper->escape(($context["input_class"] ?? null), "html", null, true);
            yield "\">
                                ";
            // line 218
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 219
                yield "                                    <option value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 219), "id", [], "any", false, false, false, 219), "html", null, true);
                yield "\" selected>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 219), "nom", [], "any", false, false, false, 219), "html", null, true);
                yield "</option>
                                ";
            } else {
                // line 221
                yield "                                    <option value=\"\">-- Sélectionnez un métier --</option>
                                ";
            }
            // line 223
            yield "                            </select>
                            <div id=\"metier-loading\" class=\"hidden mt-1 text-sm text-indigo-600\">
                                <i class=\"mr-1 fas fa-spinner fa-spin\"></i> Chargement...
                            </div>
                        </div>
                    </div>

                    ";
            // line 231
            yield "                    <div id=\"metier-info\" class=\"hidden mt-6\">
                        <div class=\"grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3\">
                            <div class=\"flex items-center gap-3 p-2 bg-purple-100 rounded-lg\">
                                <i class=\"text-purple-600 fas fa-users\"></i>
                                <div>
                                    <p class=\"text-xs text-purple-600\">Places</p>
                                    <p id=\"metier-nbrplace\" class=\"text-sm font-medium\">-</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-2 bg-green-100 rounded-lg\">
                                <i class=\"text-green-600 fas fa-graduation-cap\"></i>
                                <div>
                                    <p class=\"text-xs text-green-600\">Niveau</p>
                                    <p id=\"metier-niveau\" class=\"text-sm font-medium\">-</p>
                                </div>
                            </div>
                            <div class=\"flex items-center gap-3 p-2 rounded-lg bg-amber-100\">
                                <i class=\"fas fa-clock text-amber-600\"></i>
                                <div>
                                    <p class=\"text-xs text-amber-600\">Durée de formation</p>
                                    <p id=\"metier-duree\" class=\"text-sm font-medium\">-</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
            // line 258
            yield "                    <h3 class=\"flex items-center pb-3 mb-5 text-lg font-semibold text-purple-800 border-b\">
                        <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-purple-200 rounded-lg\">
                            <i class=\"text-purple-700 fas fa-cloud-upload-alt\"></i>
                        </div>
                        Documents à télécharger
                    </h3>

                    ";
            // line 265
            yield from $this->load("partials/_document_upload_plain.html.twig", 265)->unwrap()->yield(CoreExtension::merge($context, ["candidature" =>             // line 266
($context["candidature"] ?? null), "document_labels" =>             // line 267
($context["document_labels"] ?? null), "input_class" =>             // line 268
($context["input_class"] ?? null)]));
            // line 270
            yield "
                    ";
            // line 272
            yield "                    <div class=\"flex flex-col items-center justify-between gap-4 pt-6 border-t md:flex-row border-slate-200\">
                        <div class=\"text-sm text-slate-500\">
                            <i class=\"mr-1 fas fa-info-circle\"></i>
                            Les champs marqués d\x27une <span class=\"text-red-500\">*</span> sont obligatoires
                        </div>
                        <button type=\"submit\" class=\"flex items-center px-8 py-2 font-semibold text-white transition transform rounded-lg shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 hover:scale-105\">
                            <i class=\"mr-2 fas fa-save\"></i>
                            Mise à jour des informations
                        </button>
                    </div>
                </form>
            </div>
        </div>

        ";
            // line 287
            yield "        ";
            if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 288
                yield "        <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
            <div class=\"p-6 md:p-8\">
                ";
                // line 290
                yield (string)                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-10", "id" => "candidature-form"]]);
                yield "

                    <div class=\"p-4 mb-4 border rounded-xl border-amber-200 bg-amber-50 md:p-5\">
                        <p class=\"flex items-center text-sm font-semibold text-amber-800\">
                            <i class=\"mr-2 fas fa-clipboard-list\"></i>
                            Partie 2 — Analyse du dossier
                        </p>
                        <p class=\"mt-1 text-sm text-amber-700\">Étudiez le dossier, évaluez le candidat et enregistrez le résultat.</p>
                    </div>

                    ";
                // line 300
                yield from $this->load("partials/_candidature_evaluation_sections.html.twig", 300)->unwrap()->yield($context);
                // line 301
                yield "
                    <div class=\"flex flex-col items-center justify-between gap-4 pt-6 border-t md:flex-row border-slate-200\">
                        <div class=\"text-sm text-slate-500\">
                            <i class=\"mr-1 fas fa-info-circle\"></i>
                            Les champs marqués d\x27une <span class=\"text-red-500\">*</span> sont obligatoires
                        </div>
                        <button type=\"submit\" class=\"flex items-center px-8 py-2 font-semibold text-white transition transform rounded-lg shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 hover:scale-105\">
                            <i class=\"mr-2 fas fa-paper-plane\"></i>
                            Enregistrer l\x27évaluation
                        </button>
                    </div>

                ";
                // line 313
                yield (string)                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
                yield "
            </div>
        </div>
        ";
            }
            // line 317
            yield "
    ";
        } else {
            // line 319
            yield "
    <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
        <div class=\"p-6 md:p-8\">
            ";
            // line 322
            yield (string)             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-10", "enctype" => "multipart/form-data", "id" => "candidature-form"]]);
            yield "

            ";
            // line 324
            if (((($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && array_key_exists("candidature", $context))) {
                // line 325
                yield "                <div class=\"p-4 border border-indigo-200 rounded-xl bg-indigo-50 md:p-5\">
                    <div class=\"flex flex-col gap-2 md:flex-row md:items-center md:justify-between\">
                        <div>
                            <p class=\"text-sm font-semibold text-indigo-800\">Edition de candidature</p>
                            <p class=\"mt-1 text-sm text-indigo-700\">Verifiez les informations puis mettez a jour les documents si necessaire.</p>
                        </div>
                        <span class=\"inline-flex items-center px-3 py-1 text-sm font-semibold text-indigo-700 bg-white border border-indigo-200 rounded-full\">
                            N° ";
                // line 332
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", true, true, false, 332)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 332), "Non attribue")) : ("Non attribue")), "html", null, true);
                yield "
                        </span>
                    </div>
                </div>
            ";
            }
            // line 337
            yield "
            ";
            // line 339
            yield "            ";
            if ((((($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", true, true, false, 339))) {
                // line 340
                yield "                <div class=\"p-5 border border-orange-200 rounded-xl bg-orange-50\">
                    <h3 class=\"flex items-center mb-4 text-base font-semibold text-orange-800\">
                        <div class=\"flex items-center justify-center mr-2 bg-orange-200 rounded-lg w-7 h-7\">
                            <i class=\"text-sm text-orange-700 fas fa-user-edit\"></i>
                        </div>
                        Identité du candidat
                    </h3>
                    <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Nom <span class=\"text-red-500\">*</span>
                            </label>
                            ";
                // line 352
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 352), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Nom de famille"]]);
                yield "
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Prénom(s) <span class=\"text-red-500\">*</span>
                            </label>
                            ";
                // line 358
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenoms", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Prénom(s)"]]);
                yield "
                        </div>
                    </div>
                </div>
            ";
            }
            // line 363
            yield "
            ";
            // line 364
            if ( !(($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 365
                yield "                <section class=\"p-5 border border-orange-200 rounded-xl bg-orange-50\">
                    <h3 class=\"flex items-center mb-4 text-base font-semibold text-orange-800\">
                        <i class=\"mr-2 fas fa-user-edit\"></i>
                        Informations personnelles
                    </h3>
                    <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Nom <span class=\"text-red-500\">*</span></label>
                            ";
                // line 373
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 373), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Nom de famille"]]);
                yield "
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Prénom(s) <span class=\"text-red-500\">*</span></label>
                            ";
                // line 377
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenoms", [], "any", false, false, false, 377), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Prénom(s)"]]);
                yield "
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Adresse e-mail <span class=\"text-red-500\">*</span></label>
                            ";
                // line 381
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 381), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "exemple@domaine.com"]]);
                yield "
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Téléphone / WhatsApp <span class=\"text-red-500\">*</span></label>
                            ";
                // line 385
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 385), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Numéro de téléphone"]]);
                yield "
                        </div>
                        <div class=\"md:col-span-2\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Statut professionnel <span class=\"text-red-500\">*</span></label>
                            ";
                // line 389
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etucom", [], "any", false, false, false, 389), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex. Sans emploi, étudiant(e), salarié(e)..."]]);
                yield "
                        </div>
                    </div>

                    <div class=\"pt-8 mt-6 border-t border-orange-200\">
                        <h4 class=\"flex items-center mb-4 text-sm font-semibold text-orange-800\">
                            <i class=\"mr-2 fas fa-map-marker-alt\"></i>
                            Résidence actuelle
                        </h4>
                        <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                            <div>
                                <label class=\"block mb-1 text-sm font-medium text-slate-700\">Ville de résidence <span class=\"text-red-500\">*</span></label>
                                ";
                // line 401
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "villeResidence", [], "any", false, false, false, 401), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
                            </div>
                            <div>
                                <label class=\"block mb-1 text-sm font-medium text-slate-700\">Quartier / Adresse précise <span class=\"text-red-500\">*</span></label>
                                ";
                // line 405
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quartierAdresse", [], "any", false, false, false, 405), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex. Quartier Commerce, Rue des Lys..."]]);
                yield "
                            </div>
                        </div>
                    </div>
                </section>
            ";
            }
            // line 411
            yield "
            <!-- SECTION 1: TOUS LES UTILISATEURS - Formation souhaitée -->
            <h3 class=\"flex items-center pb-3 mb-5 text-lg font-semibold text-indigo-800 border-b\">
                <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-indigo-200 rounded-lg\">
                    <i class=\"text-indigo-700 fas fa-graduation-cap\"></i>
                </div>
                Formation souhaitée
            </h3>
            
            <div class=\"grid grid-cols-1 gap-6 md:grid-cols-2\">
                <div>
                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                        Établissement <span class=\"text-red-500\">*</span>
                    </label>
                    ";
            // line 425
            if ((((($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && array_key_exists("candidature", $context)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 425)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 426
                yield "                        ";
                // line 427
                yield "                        <div class=\"";
                yield (string) $this->escaper->escape(($context["input_class"] ?? null), "html", null, true);
                yield " bg-slate-100 text-slate-600 cursor-default flex items-center gap-2\">
                            <i class=\"text-xs fas fa-lock text-slate-400\"></i>
                            ";
                // line 429
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 429), "nom", [], "any", false, false, false, 429), "html", null, true);
                yield "
                        </div>
                        ";
                // line 432
                yield "                        ";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etablissement", [], "any", false, false, false, 432), 'widget', ["attr" => ["class" => "hidden", "id" => "candidature_etablissement"]]);
                yield "
                    ";
            } else {
                // line 434
                yield "                        ";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etablissement", [], "any", false, false, false, 434), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "id" => "candidature_etablissement"]]);
                yield "
                    ";
            }
            // line 436
            yield "                    <div id=\"etablissement-loading\" class=\"hidden mt-1 text-sm text-indigo-600\">
                        <i class=\"mr-1 fas fa-spinner fa-spin\"></i> Chargement...
                    </div>
                </div>
                
                <div>
                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                        Métier <span class=\"text-red-500\">*</span>
                    </label>
                    ";
            // line 445
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "metier", [], "any", false, false, false, 445), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "id" => "candidature_metier"]]);
            yield "
                    <div id=\"metier-loading\" class=\"hidden mt-1 text-sm text-indigo-600\">
                        <i class=\"mr-1 fas fa-spinner fa-spin\"></i> Chargement...
                    </div>
                </div>
            </div>

            <!-- Informations détaillées du métier -->
            <div id=\"metier-info\" class=\"hidden mt-6\">
                <div class=\"grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3\">
                    <div class=\"flex items-center gap-3 p-2 bg-purple-100 rounded-lg\">
                        <i class=\"text-purple-600 fas fa-users\"></i>
                        <div>
                            <p class=\"text-xs text-purple-600\">Places</p>
                            <p id=\"metier-nbrplace\" class=\"text-sm font-medium\">-</p>
                        </div>
                    </div>
                    <div class=\"flex items-center gap-3 p-2 bg-green-100 rounded-lg\">
                        <i class=\"text-green-600 fas fa-graduation-cap\"></i>
                        <div>
                            <p class=\"text-xs text-green-600\">Niveau</p>
                            <p id=\"metier-niveau\" class=\"text-sm font-medium\">-</p>
                        </div>
                    </div>
                    <div class=\"flex items-center gap-3 p-2 rounded-lg bg-amber-100\">
                        <i class=\"fas fa-clock text-amber-600\"></i>
                        <div>
                            <p class=\"text-xs text-amber-600\">Durée de formation</p>
                            <p id=\"metier-duree\" class=\"text-sm font-medium\">-</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: DOCUMENTS -->
            <h3 class=\"flex items-center pb-3 mt-8 mb-5 text-lg font-semibold text-purple-800 border-b\">
                <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-purple-200 rounded-lg\">
                    <i class=\"text-purple-700 fas fa-cloud-upload-alt\"></i>
                </div>
                Documents à télécharger
            </h3>
            
            ";
            // line 487
            yield from $this->load("partials/_document_upload.html.twig", 487)->unwrap()->yield(CoreExtension::merge($context, ["form" =>             // line 488
($context["form"] ?? null), "document_labels" =>             // line 489
($context["document_labels"] ?? null), "input_class" =>             // line 490
($context["input_class"] ?? null)]));
            // line 492
            yield "
            <!-- SECTION 3: POUR ENT ET ADMIN - Étude de dossier -->
            ";
            // line 494
            if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 495
                yield "                <h3 class=\"flex items-center pb-3 mb-5 text-lg font-semibold border-b text-amber-800\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 rounded-lg bg-amber-200\">
                        <i class=\"fas fa-clipboard-check text-amber-700\"></i>
                    </div>
                    Étude de dossier (ENT)
                </h3>
                
                <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">Statut dossier</label>
                        ";
                // line 505
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etustatut", [], "any", false, false, false, 505), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
                    </div>
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">Commentaire</label>
                        ";
                // line 509
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etucom", [], "any", false, false, false, 509), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Commentaire sur le dossier..."]]);
                yield "
                    </div>
                </div>
            ";
            }
            // line 513
            yield "
            <!-- SECTION 4: POUR JURY, ENT ET ADMIN - Évaluation entretien -->
            ";
            // line 515
            if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 516
                yield "                <h3 class=\"flex items-center pb-3 mb-5 text-lg font-semibold text-blue-800 border-b\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-blue-200 rounded-lg\">
                        <i class=\"text-blue-700 fas fa-microphone-alt\"></i>
                    </div>
                    Évaluation entretien
                </h3>
                
                <div class=\"grid grid-cols-1 gap-4 mb-4 md:grid-cols-2\">
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">Date entretien</label>
                        ";
                // line 526
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entdate", [], "any", false, false, false, 526), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
                    </div>
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">Lieu entretien</label>
                        ";
                // line 530
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entlieu", [], "any", false, false, false, 530), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex: Salle 101"]]);
                yield "
                    </div>
                </div>

                <div class=\"grid grid-cols-1 gap-4 mb-4 md:grid-cols-3\">
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">Numéro du jury</label>
                        ";
                // line 537
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "jury", [], "any", false, false, false, 537), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "min" => 1, "max" => 20]]);
                yield "
                    </div>
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">Vague</label>
                        ";
                // line 541
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vague", [], "any", false, false, false, 541), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "min" => 1]]);
                yield "
                    </div>
                    <div>
                        <label class=\"block mb-1 text-sm font-medium text-slate-700\">Présence à l\x27entretien</label>
                        ";
                // line 545
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entstatut", [], "any", false, false, false, 545), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
                        <p class=\"mt-1 text-xs text-slate-400\">1 = présent, vide = absent</p>
                    </div>
                </div>

                ";
                // line 550
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note1", [], "any", true, true, false, 550)) {
                    // line 551
                    yield "                <div class=\"grid grid-cols-1 gap-4 mb-6 md:grid-cols-2 lg:grid-cols-3\">
                    ";
                    // line 552
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 13));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 553
                        yield "                        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), ("note" . $context["i"]), [], "any", true, true, false, 553)) {
                            // line 554
                            yield "                            <div>
                                <label class=\"block mb-1 text-sm font-bold text-slate-700\">
                                    ";
                            // line 556
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), ("note" . $context["i"]), [], "any", false, false, false, 556), "vars", [], "any", false, false, false, 556), "label", [], "any", false, false, false, 556), "html", null, true);
                            yield "
                                    <span class=\"text-xs font-normal text-slate-400\">(Max: ";
                            // line 557
                            yield (string) $this->escaper->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), ("note" . $context["i"]), [], "any", false, false, false, 557), "vars", [], "any", false, false, false, 557), "attr", [], "any", false, false, false, 557)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["data-max"] ?? null) : null), "html", null, true);
                            yield ")</span>
                                </label>
                                ";
                            // line 559
                            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), ("note" . $context["i"]), [], "any", false, false, false, 559), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " note-input")]]);
                            yield "
                            </div>
                        ";
                        }
                        // line 562
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 563
                    yield "                </div>

                ";
                    // line 566
                    yield "                <div class=\"grid grid-cols-1 gap-4 p-4 mb-6 border md:grid-cols-2 bg-slate-50 rounded-xl border-slate-200\">
                    <div class=\"text-center\">
                        <p class=\"text-sm font-semibold text-slate-600\">TOTAL</p>
                        <p id=\"total-display\" class=\"text-2xl font-bold text-indigo-700\">0 / 40</p>
                    </div>
                    <div class=\"text-center\">
                        <p class=\"text-sm font-semibold text-slate-600\">MOYENNE</p>
                        <p id=\"moyenne-display\" class=\"text-2xl font-bold text-purple-700\">0 / 4</p>
                    </div>
                </div>

                ";
                    // line 578
                    yield "                <div class=\"flex justify-center mb-6\">
                    <div class=\"w-full max-w-md p-5 border border-blue-200 shadow-sm bg-blue-50 rounded-xl\">
                        <label class=\"block mb-2 text-sm font-bold text-center text-blue-800\">
                            <i class=\"mr-1 fas fa-gavel\"></i> Décision du jury
                        </label>
                        ";
                    // line 583
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "decisionJury", [], "any", false, false, false, 583), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " text-center font-semibold text-blue-800")]]);
                    yield "
                        <p class=\"mt-2 text-xs text-center text-slate-500\">
                            À saisir manuellement par le jury (voir moyenne calculée ci-dessus)
                        </p>
                    </div>
                </div>
                ";
                }
                // line 590
                yield "
                <div class=\"mt-4 mb-6\">
                    <label class=\"block mb-1 text-sm font-medium text-slate-700\">Commentaire entretien</label>
                    ";
                // line 593
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entcom", [], "any", false, false, false, 593), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "rows" => 3, "placeholder" => "Observations sur l\x27entretien..."]]);
                yield "
                </div>
            ";
            }
            // line 596
            yield "

            <!-- SECTION 5: Visite médicale et résultat final -->
            ";
            // line 599
            if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 600
                yield "                <div class=\"p-6 border bg-emerald-50 rounded-2xl border-emerald-200\">
                    <h3 class=\"flex items-center pb-3 mb-5 text-lg font-semibold border-b text-emerald-800 border-emerald-200\">
                        <div class=\"flex items-center justify-center w-8 h-8 mr-3 rounded-lg bg-emerald-200\">
                            <i class=\"fas fa-hospital text-emerald-700\"></i>
                        </div>
                        VISITE MÉDICALE & Résultat final
                    </h3>
                    
                    <div class=\"grid grid-cols-1 gap-4 mb-4 md:grid-cols-2\">
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Date visite</label>
                            ";
                // line 611
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visdate", [], "any", false, false, false, 611), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Lieu visite</label>
                            ";
                // line 615
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vislieu", [], "any", false, false, false, 615), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex: Centre médical"]]);
                yield "
                        </div>
                    </div>

                    <div class=\"grid grid-cols-1 gap-4 md:grid-cols-3\">
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Statut visite</label>
                            ";
                // line 622
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visstatut", [], "any", false, false, false, 622), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Résultat final</label>
                            ";
                // line 626
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "resultat", [], "any", false, false, false, 626), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
                        </div>
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">Commentaire</label>
                            ";
                // line 630
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "viscom", [], "any", false, false, false, 630), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Commentaire visite..."]]);
                yield "
                        </div>
                    </div>
                </div>
            ";
            }
            // line 635
            yield "
            ";
            // line 636
            if ( !(($tmp = ($context["is_edit_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 637
                yield "                <div class=\"p-5 border border-indigo-200 rounded-xl bg-indigo-50\">
                    <label class=\"flex items-start gap-3 mt-4 text-sm text-slate-700\">
                        ";
                // line 639
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 639), 'widget', ["attr" => ["class" => "mt-1 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"]]);
                yield "
                        <span>";
                // line 640
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 640), 'label');
                yield "</span>
                    </label>
                    ";
                // line 642
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declarationHonneur", [], "any", false, false, false, 642), 'errors');
                yield "
                </div>
            ";
            }
            // line 645
            yield "
            ";
            // line 646
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            yield "

            <!-- Boutons d\x27action -->
            <div class=\"flex flex-col items-center justify-between gap-4 pt-6 border-t md:flex-row border-slate-200\">
                <div class=\"text-sm text-slate-500\">
                    <i class=\"mr-1 fas fa-info-circle\"></i>
                    Les champs marqués d\x27une <span class=\"text-red-500\">*</span> sont obligatoires
                </div>
                
                <div class=\"flex gap-3\">
                    ";
            // line 656
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 656)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 657
                yield "                        ";
                // line 658
                yield "                        ";
                $context["age"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 658), "datenaissance", [], "any", false, false, false, 658)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 658), "datenaissance", [], "any", false, false, false, 658))], "method", false, false, false, 658), "y", [], "any", false, false, false, 658)) : (null));
                // line 659
                yield "                        
                        ";
                // line 660
                if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 661
                    yield "                            ";
                    // line 662
                    yield "                            <button type=\"submit\" class=\"flex items-center px-8 py-2 font-semibold text-white transition transform rounded-lg shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 hover:scale-105\">
                                <i class=\"mr-2 fas fa-paper-plane\"></i>
                                Enregistrer l\x27évaluation
                            </button>
                        ";
                } elseif (((                // line 666
($context["age"] ?? null) >= 18) && (($context["age"] ?? null) <= 45))) {
                    // line 667
                    yield "                            ";
                    // line 668
                    yield "                            <button type=\"submit\" class=\"flex items-center px-8 py-2 font-semibold text-white transition transform rounded-lg shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 hover:scale-105\">
                                <i class=\"mr-2 fas fa-paper-plane\"></i>
                                Soumettre ma candidature
                            </button>
                        ";
                } else {
                    // line 673
                    yield "                            ";
                    // line 674
                    yield "                            <button type=\"button\" disabled class=\"flex items-center px-8 py-2 font-semibold text-white bg-gray-400 rounded-lg opacity-50 cursor-not-allowed\" title=\"Vous ne remplissez pas les conditions d\x27âge\">
                                <i class=\"mr-2 fas fa-ban\"></i>
                                Soumission impossible
                            </button>
                        ";
                }
                // line 679
                yield "                    ";
            } else {
                // line 680
                yield "                        ";
                $context["redirectUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_new", ["etablissement" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 681
($context["app"] ?? null), "request", [], "any", false, false, false, 681), "get", ["etablissement"], "method", false, false, false, 681), "metier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 682
($context["app"] ?? null), "request", [], "any", false, false, false, 682), "get", ["metier"], "method", false, false, false, 682)]);
                // line 684
                yield "                        
                        <a href=\"";
                // line 685
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => ($context["redirectUrl"] ?? null)]), "html", null, true);
                yield "\" 
                           class=\"flex items-center px-8 py-2 font-semibold text-white transition transform rounded-lg shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 hover:scale-105\">
                            <i class=\"mr-2 fas fa-sign-in-alt\"></i>
                            Se connecter pour postuler
                        </a>
                    ";
            }
            // line 691
            yield "                </div>
            </div>

            ";
            // line 694
            yield (string)             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
            yield "
        </div>
    </div>

    ";
        }
        // line 699
        yield "</div>

<!-- JavaScript pour la gestion dynamique établissement/métier -->
<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
    const etablissementSelect = document.getElementById(\x27candidature_etablissement\x27);
    const metierSelect = document.getElementById(\x27candidature_metier\x27);
    const metierInfo = document.getElementById(\x27metier-info\x27);
    const metierNiveau = document.getElementById(\x27metier-niveau\x27);
    const metierNbrPlace = document.getElementById(\x27metier-nbrplace\x27);
    const metierDuree = document.getElementById(\x27metier-duree\x27);
    const etablissementLoading = document.getElementById(\x27etablissement-loading\x27);
    const metierLoading = document.getElementById(\x27metier-loading\x27);
    
    const currentMetierValue = metierSelect.value;

    function loadMetiers(etablissementId, callback) {
        if (!etablissementId) {
            metierSelect.innerHTML = \x27<option value=\"\">-- Choisissez d\\\x27abord un établissement --</option>\x27;
            metierSelect.disabled = true;
            metierInfo.classList.add(\x27hidden\x27);
            if (callback) callback();
            return;
        }

        metierLoading.classList.remove(\x27hidden\x27);
        metierSelect.disabled = true;

        const url = \"";
        // line 727
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_etablissement_metiers", ["id" => "PLACEHOLDER"]);
        yield "\".replace(\x27PLACEHOLDER\x27, etablissementId);
        fetch(url)
            .then(response => response.json())
            .then(data => {
                metierSelect.innerHTML = \x27<option value=\"\">-- Sélectionnez un métier --</option>\x27;
                
                // Tri par nom de métier
                data.sort((a, b) => a.nom.localeCompare(b.nom));

                data.forEach(metier => {
                    const option = document.createElement(\x27option\x27);
                    option.value = metier.id;
                    option.dataset.niveau = metier.niveau || \x27\x27;
                    option.dataset.duree = metier.duree || \x27\x27;
                    option.dataset.nbrplace = metier.nbrplace || \x27\x27;
                    
                    let label = metier.nom;
                    if (metier.nbrplace) {
                        label += \x27 (\x27 + metier.nbrplace + \x27 places)\x27;
                    }
                    option.textContent = label;
                    metierSelect.appendChild(option);
                });
                
                const metierToSelect = currentMetierValue || \x27";
        // line 751
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 751), "get", ["metier"], "method", true, true, false, 751)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 751), "get", ["metier"], "method", false, false, false, 751), "")) : ("")), "html", null, true);
        yield "\x27;
                
                if (metierToSelect) {
                    const options = metierSelect.options;
                    for (let i = 0; i < options.length; i++) {
                        if (options[i].value == metierToSelect) {
                            options[i].selected = true;
                            updateMetierInfo(options[i]);
                            break;
                        }
                    }
                }
                
                metierSelect.disabled = false;
                metierLoading.classList.add(\x27hidden\x27);
                
                if (callback) callback();
            })
            .catch(error => {
                console.error(\x27Erreur:\x27, error);
                metierSelect.disabled = false;
                metierLoading.classList.add(\x27hidden\x27);
                if (callback) callback();
            });
    }

    function updateMetierInfo(selectedOption) {
        if (!selectedOption || !selectedOption.value) {
            metierInfo.classList.add(\x27hidden\x27);
            return;
        }
        
        metierNiveau.textContent = selectedOption.dataset.niveau || \x27Non spécifié\x27;
        metierDuree.textContent = selectedOption.dataset.duree || \x27Non spécifié\x27;
        metierNbrPlace.textContent = selectedOption.dataset.nbrplace || \x27Non spécifié\x27;
        metierInfo.classList.remove(\x27hidden\x27);
    }

    ";
        // line 789
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 789), "get", ["etablissement"], "method", false, false, false, 789)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 790
            yield "        const etablissementId = \x27";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 790), "get", ["etablissement"], "method", false, false, false, 790), "html", null, true);
            yield "\x27;
        if (etablissementId) {
            setTimeout(function() {
                const options = etablissementSelect.options;
                for (let i = 0; i < options.length; i++) {
                    if (options[i].value == etablissementId) {
                        options[i].selected = true;
                        break;
                    }
                }
                loadMetiers(etablissementId);
            }, 100);
        }
    ";
        } else {
            // line 804
            yield "        if (etablissementSelect.value) {
            loadMetiers(etablissementSelect.value);
        } else {
            metierSelect.innerHTML = \x27<option value=\"\">-- Choisissez d\\\x27abord un établissement --</option>\x27;
            metierSelect.disabled = true;
        }
    ";
        }
        // line 811
        yield "
    etablissementSelect.addEventListener(\x27change\x27, function() {
        loadMetiers(this.value);
        metierInfo.classList.add(\x27hidden\x27);
    });

    metierSelect.addEventListener(\x27change\x27, function() {
        const selectedOption = this.options[this.selectedIndex];
        updateMetierInfo(selectedOption);
    });

    const form = document.getElementById(\x27candidature-form\x27);
    if (form) {
        form.addEventListener(\x27submit\x27, function(e) {
            ";
        // line 825
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 825)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 826
            yield "            e.preventDefault();
            alert(\x27Vous devez être connecté pour soumettre une candidature.\x27);
            const redirectUrl = \x27/candidature/new?etablissement=\x27 + etablissementSelect.value + \x27&metier=\x27 + metierSelect.value;
            window.location.href = \x27/login?redirect=\x27 + encodeURIComponent(redirectUrl);
            return false;
            ";
        }
        // line 832
        yield "
            ";
        // line 833
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 833)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 833), "datenaissance", [], "any", false, false, false, 833)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 834
            yield "                ";
            $context["age"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 834), "datenaissance", [], "any", false, false, false, 834))], "method", false, false, false, 834), "y", [], "any", false, false, false, 834);
            // line 835
            yield "                ";
            if (((($context["age"] ?? null) < 18) || (($context["age"] ?? null) > 45))) {
                // line 836
                yield "                    e.preventDefault();
                    alert(\x27Vous ne remplissez pas les conditions d\\\x27âge pour candidater (18 à 45 ans).\x27);
                    return false;
                ";
            }
            // line 840
            yield "            ";
        }
        // line 841
        yield "
            if (!etablissementSelect.value) {
                e.preventDefault();
                alert(\x27Veuillez sélectionner un établissement.\x27);
                return false;
            }
            
            if (!metierSelect.value) {
                e.preventDefault();
                alert(\x27Veuillez sélectionner un métier.\x27);
                return false;
            }
        });
    }
});
</script>

<!-- Javascript : calcul du total et de la moyenne (affichage uniquement) -->
<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
    const noteInputs = document.querySelectorAll(\x27.note-input\x27);
    const totalDisplay = document.getElementById(\x27total-display\x27);
    const moyenneDisplay = document.getElementById(\x27moyenne-display\x27);

    function calculerNotes() {
        let total = 0;

        noteInputs.forEach(input => {
            const val = parseFloat(input.value) || 0;
            total += val;
        });

        const totalMax = 40;
        const moyenne = (total / totalMax) * 4;

        if (totalDisplay) totalDisplay.textContent = total.toFixed(2).replace(/\\.00\$/, \x27\x27) + \x27 / \x27 + totalMax;
        if (moyenneDisplay) moyenneDisplay.textContent = moyenne.toFixed(2).replace(/\\.00\$/, \x27\x27) + \x27 / 4\x27;
    }

    noteInputs.forEach(input => {
        input.addEventListener(\x27input\x27, calculerNotes);
        input.addEventListener(\x27change\x27, calculerNotes);
    });

    if (noteInputs.length > 0) {
        calculerNotes();
    }
});
</script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "candidature/form.html.twig";
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
        return array (  1377 => 841,  1374 => 840,  1368 => 836,  1365 => 835,  1362 => 834,  1360 => 833,  1357 => 832,  1349 => 826,  1347 => 825,  1331 => 811,  1322 => 804,  1304 => 790,  1302 => 789,  1261 => 751,  1234 => 727,  1204 => 699,  1196 => 694,  1191 => 691,  1182 => 685,  1179 => 684,  1177 => 682,  1176 => 681,  1174 => 680,  1171 => 679,  1164 => 674,  1162 => 673,  1155 => 668,  1153 => 667,  1151 => 666,  1145 => 662,  1143 => 661,  1141 => 660,  1138 => 659,  1135 => 658,  1133 => 657,  1131 => 656,  1118 => 646,  1115 => 645,  1109 => 642,  1104 => 640,  1100 => 639,  1096 => 637,  1094 => 636,  1091 => 635,  1083 => 630,  1076 => 626,  1069 => 622,  1059 => 615,  1052 => 611,  1039 => 600,  1037 => 599,  1032 => 596,  1026 => 593,  1021 => 590,  1011 => 583,  1004 => 578,  991 => 566,  987 => 563,  980 => 562,  974 => 559,  969 => 557,  965 => 556,  961 => 554,  958 => 553,  954 => 552,  951 => 551,  949 => 550,  941 => 545,  934 => 541,  927 => 537,  917 => 530,  910 => 526,  898 => 516,  896 => 515,  892 => 513,  885 => 509,  878 => 505,  866 => 495,  864 => 494,  860 => 492,  858 => 490,  857 => 489,  856 => 488,  855 => 487,  810 => 445,  799 => 436,  793 => 434,  787 => 432,  782 => 429,  776 => 427,  774 => 426,  772 => 425,  756 => 411,  747 => 405,  740 => 401,  725 => 389,  718 => 385,  711 => 381,  704 => 377,  697 => 373,  687 => 365,  685 => 364,  682 => 363,  674 => 358,  665 => 352,  651 => 340,  648 => 339,  645 => 337,  637 => 332,  628 => 325,  626 => 324,  621 => 322,  616 => 319,  612 => 317,  605 => 313,  591 => 301,  589 => 300,  576 => 290,  572 => 288,  569 => 287,  553 => 272,  550 => 270,  548 => 268,  547 => 267,  546 => 266,  545 => 265,  536 => 258,  508 => 231,  499 => 223,  495 => 221,  487 => 219,  485 => 218,  481 => 217,  474 => 213,  469 => 211,  464 => 209,  452 => 199,  449 => 197,  439 => 192,  430 => 188,  421 => 184,  412 => 180,  400 => 170,  397 => 169,  392 => 166,  388 => 165,  380 => 160,  367 => 149,  364 => 147,  362 => 146,  359 => 145,  357 => 144,  353 => 143,  349 => 141,  346 => 140,  339 => 135,  333 => 133,  331 => 132,  326 => 131,  324 => 130,  314 => 122,  311 => 121,  308 => 120,  305 => 119,  302 => 117,  299 => 116,  292 => 111,  288 => 109,  284 => 108,  280 => 107,  275 => 106,  270 => 104,  266 => 102,  259 => 98,  254 => 95,  251 => 94,  248 => 93,  240 => 89,  231 => 82,  222 => 76,  215 => 72,  199 => 59,  192 => 55,  181 => 46,  178 => 45,  176 => 44,  169 => 39,  163 => 38,  159 => 36,  153 => 35,  143 => 27,  128 => 23,  125 => 22,  121 => 20,  117 => 18,  115 => 17,  112 => 16,  110 => 15,  107 => 14,  102 => 13,  98 => 12,  95 => 10,  85 => 9,  68 => 3,  60 => 1,  58 => 7,  56 => 6,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/form.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\form.html.twig");
    }
}
