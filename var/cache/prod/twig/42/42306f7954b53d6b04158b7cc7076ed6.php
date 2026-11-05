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

/* admis/edit.html.twig */
class __TwigTemplate_d27463c484db604dfe94d0166a87f599 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/edit.html.twig"));

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

        yield "Modifier Inscription Définitive";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"";
        // line 7
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tom-select-2.2.2.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<div class=\"max-w-4xl mx-auto pb-10\">

    ";
        // line 14
        yield "    <div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
        <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
        <div class=\"relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4\">
            <div class=\"flex items-center gap-4\">
                <a href=\"";
        // line 18
        yield (string) (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_etablissement")));
        yield "\" class=\"w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center hover:bg-white/25 transition\">
                    <i class=\"fas fa-arrow-left\"></i>
                </a>
                <div>
                    <h1 class=\"text-xl md:text-2xl font-bold tracking-tight\">Modifier Inscription</h1>
                    <p class=\"text-white/70 text-sm mt-0.5\">N° ";
        // line 23
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "numeroInscription", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 30
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 31
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                yield "            ";
                $context["colors"] = ((($context["type"] == "success")) ? ("bg-green-50 border-green-300 text-green-700") : (((($context["type"] == "error")) ? ("bg-red-50 border-red-300 text-red-700") : ("bg-blue-50 border-blue-300 text-blue-700"))));
                // line 33
                yield "            <div class=\"flex items-center gap-3 px-5 py-4 rounded-xl border mb-6 text-sm font-medium ";
                yield (string) $this->escaper->escape(($context["colors"] ?? null), "html", null, true);
                yield "\">
                <i class=\"fas fa-";
                // line 34
                yield (string) ((($context["type"] == "success")) ? ("check-circle") : ("exclamation-circle"));
                yield "\"></i>
                ";
                // line 35
                yield (string) $this->escaper->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 38
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 39
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-8\">
        ";
        // line 42
        yield "        <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
            <div class=\"px-6 py-4 bg-slate-50 border-b border-slate-200\">
                <h2 class=\"text-base font-semibold text-slate-800 flex items-center gap-2\">
                    <i class=\"fas fa-user text-indigo-500\"></i> Informations du candidat
                </h2>
            </div>
            <div class=\"p-6 space-y-3 text-sm\">
                <div class=\"flex justify-between border-b border-slate-50 pb-2\">
                    <span class=\"text-slate-500\">Nom complet</span>
                    <span class=\"font-bold text-slate-800\">";
        // line 51
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "user", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51)), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "user", [], "any", false, false, false, 51), "prenoms", [], "any", false, false, false, 51), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex justify-between border-b border-slate-50 pb-2\">
                    <span class=\"text-slate-500\">Contact</span>
                    <span class=\"font-medium text-slate-800\">";
        // line 55
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "user", [], "any", false, true, false, 55), "contact", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "user", [], "any", false, false, false, 55), "contact", [], "any", false, false, false, 55)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "user", [], "any", false, false, false, 55), "contact", [], "any", false, false, false, 55), "html", null, true)) : ("—"));
        yield "</span>
                </div>
                <div class=\"flex justify-between\">
                    <span class=\"text-slate-500\">Email</span>
                    <span class=\"font-medium text-slate-800\">";
        // line 59
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        ";
        // line 65
        yield "        <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
            <div class=\"px-6 py-4 bg-slate-50 border-b border-slate-200\">
                <h2 class=\"text-base font-semibold text-slate-800 flex items-center gap-2\">
                    <i class=\"fas fa-graduation-cap text-indigo-500\"></i> Informations de la formation
                </h2>
            </div>
            <div class=\"p-6 space-y-3 text-sm\">
                <div class=\"flex justify-between border-b border-slate-50 pb-2\">
                    <span class=\"text-slate-500\">N° inscription</span>
                    <span class=\"font-bold text-indigo-600\">";
        // line 74
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "numeroInscription", [], "any", false, false, false, 74), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex justify-between border-b border-slate-50 pb-2\">
                    <span class=\"text-slate-500\">Métier</span>
                    <span class=\"font-medium text-slate-800\">";
        // line 78
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "metier", [], "any", false, false, false, 78), "nom", [], "any", false, false, false, 78), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex justify-between\">
                    <span class=\"text-slate-500\">Date</span>
                    <span class=\"font-medium text-slate-800\">";
        // line 82
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "dateInscription", [], "any", false, false, false, 82), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 89
        yield "    <div class=\"flex flex-col gap-6\">

        ";
        // line 92
        yield "        ";
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "contents", "enctype" => "multipart/form-data"]]);
        yield "

        ";
        // line 95
        yield "        <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden order-1\" id=\"contrat\">
            <div class=\"px-6 py-4 bg-slate-50 border-b border-slate-200\">
                <h2 class=\"text-lg font-semibold text-slate-800 flex items-center gap-2\">
                    <i class=\"fas fa-file-contract text-emerald-500\"></i> Contrat d\x27apprentissage
                </h2>
            </div>
            <div class=\"p-6 space-y-5\">
                <div>
                    <label class=\"block text-sm font-medium text-slate-700 mb-2\">";
        // line 103
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entreprisePartenaire", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "label", [], "any", false, false, false, 103), "html", null, true);
        yield "</label>
                    ";
        // line 104
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entreprisePartenaire", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "w-full rounded-xl border-slate-200 text-sm focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"]]);
        yield "
                    ";
        // line 105
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entreprisePartenaire", [], "any", false, false, false, 105), 'errors');
        yield "
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-slate-700 mb-2\">";
        // line 108
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contratFile", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "label", [], "any", false, false, false, 108), "html", null, true);
        yield "</label>
                    ";
        // line 109
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contratFile", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "block w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"]]);
        yield "
                    ";
        // line 110
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contratFile", [], "any", false, false, false, 110), 'errors');
        yield "
                    
                    ";
        // line 112
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "fichierContrat", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "                        <div class=\"mt-4 pt-4 border-t border-slate-100\">
                            <a href=\"";
            // line 114
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/contrats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "fichierContrat", [], "any", false, false, false, 114))), "html", null, true);
            yield "\" target=\"_blank\" class=\"inline-flex items-center gap-2 text-sm text-emerald-600 hover:text-emerald-700 font-semibold bg-emerald-50 px-3 py-1.5 rounded-lg border border-emerald-200 transition\">
                                <i class=\"fas fa-file-pdf\"></i> Voir le contrat actuel
                            </a>
                        </div>
                    ";
        }
        // line 119
        yield "                </div>
            </div>
        </div>

        ";
        // line 124
        yield "        <div class=\"bg-amber-50 rounded-2xl border border-amber-200 p-6 flex items-start gap-4 order-3\">
            <div class=\"pt-0.5\">
                ";
        // line 126
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "confirme", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "w-5 h-5 rounded border-amber-300 text-amber-600 focus:ring-amber-500"]]);
        yield "
            </div>
            <div>
                ";
        // line 129
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "confirme", [], "any", false, false, false, 129), 'label', ["label_attr" => ["class" => "font-bold text-amber-900 cursor-pointer block mb-1"], "label" => "Le candidat confirme vouloir poursuivre la formation jusqu\x27au bout"]);
        yield "
                ";
        // line 130
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "confirme", [], "any", false, false, false, 130), 'errors');
        yield "
                <p class=\"text-xs text-amber-700/80\">Cette case indique si le candidat s\x27est engagé à suivre la formation jusqu\x27à son terme.</p>
            </div>
        </div>

        ";
        // line 136
        yield "        <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden order-2\" id=\"livret\">
            <div class=\"px-6 py-4 bg-slate-50 border-b border-slate-200\">
                <h2 class=\"text-lg font-semibold text-slate-800 flex items-center gap-2\">
                    <i class=\"fas fa-book-reader text-blue-500\"></i> Livret Apprenti
                </h2>
            </div>
            <div class=\"p-6\">
                ";
        // line 143
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "fichierLivret", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                    <div class=\"flex items-center gap-3 mb-4\">
                        <a href=\"";
            // line 145
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/livrets/" . CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "fichierLivret", [], "any", false, false, false, 145))), "html", null, true);
            yield "\" target=\"_blank\" class=\"inline-flex items-center gap-2 text-sm text-blue-600 hover:text-blue-700 font-semibold bg-blue-50 px-3 py-1.5 rounded-lg border border-blue-200 transition\">
                            <i class=\"fas fa-file-pdf\"></i> Voir le livret actuel
                        </a>
                        ";
            // line 148
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "dateLivret", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 149
                yield "                            <span class=\"text-xs text-slate-400\">Uploadé le ";
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["admis"] ?? null), "dateLivret", [], "any", false, false, false, 149), "d/m/Y"), "html", null, true);
                yield "</span>
                        ";
            }
            // line 151
            yield "                    </div>
                ";
        }
        // line 153
        yield "                <div>
                    <label class=\"block text-sm font-medium text-slate-700 mb-2\">Uploader ou remplacer le livret (PDF, JPG, PNG)</label>
                    ";
        // line 155
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "livretFile", [], "any", false, false, false, 155), 'widget', ["attr" => ["class" => "block w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"]]);
        yield "
                    ";
        // line 156
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "livretFile", [], "any", false, false, false, 156), 'errors');
        yield "
                </div>
            </div>
        </div>

        ";
        // line 162
        yield "        <div class=\"flex items-center justify-between order-4\">
            <a href=\"";
        // line 163
        yield (string) (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_etablissement")));
        yield "\" class=\"inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-slate-100 text-slate-600 hover:bg-slate-200 text-sm font-medium transition\">
                <i class=\"fas fa-times\"></i> Annuler
            </a>
            <button type=\"submit\" class=\"inline-flex items-center gap-2 px-6 py-2.5 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 text-sm font-semibold transition shadow-lg shadow-indigo-200\">
                <i class=\"fas fa-save\"></i> Enregistrer tout
            </button>
        </div>

        <div class=\"hidden\">
            ";
        // line 172
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
        </div>
        ";
        // line 174
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 180
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 181
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tom-select-2.2.2.complete.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, function() {
            // Initialisation de TomSelect pour un menu déroulant moderne avec recherche
            const selectEl = document.querySelector(\x27select[id\$=\"_entreprisePartenaire\"]\x27);
            if (selectEl) {
                new TomSelect(selectEl, {
                    placeholder: \x27Rechercher une entreprise...\x27,
                    searchField: [\x27text\x27],
                    maxOptions: 50,
                    controlClass: \x27ts-control w-full !rounded-xl !border-slate-200 text-sm focus:!border-indigo-500 focus:!ring-indigo-500 !shadow-sm !px-4 !py-2.5\x27,
                    dropdownClass: \x27ts-dropdown bg-white !rounded-xl !border-slate-200 !shadow-lg !mt-1 overflow-hidden\x27,
                    render: {
                        no_results: function(data, escape) {
                            return \x27<div class=\"no-results px-4 py-3 text-sm text-slate-500\"><i class=\"fas fa-search mr-2\"></i>Aucune entreprise trouvée pour \"\x27+escape(data.input)+\x27\"</div>\x27;
                        },
                        option: function(data, escape) {
                            return \x27<div class=\"!px-4 !py-2.5 text-sm text-slate-700 hover:bg-indigo-50 hover:text-indigo-700 transition-colors cursor-pointer\">\x27 + escape(data.text) + \x27</div>\x27;
                        },
                        item: function(data, escape) {
                            return \x27<div class=\"text-sm font-medium text-slate-800\">\x27 + escape(data.text) + \x27</div>\x27;
                        }
                    }
                });
            }

            const form = document.querySelector(\x27form\x27);
            if(form) {
                form.addEventListener(\x27submit\x27, function(e) {
                    const confirmCheckbox = document.getElementById(\x27admis_confirme\x27);
                    if (confirmCheckbox && !confirmCheckbox.checked) {
                        e.preventDefault();
                        alert(\x27Veuillez cocher la case de confirmation pour valider l\\\x27inscription.\x27);
                        confirmCheckbox.focus();
                        return false;
                    }
                    if (!confirm(\x27Êtes-vous sûr de vouloir mettre à jour cette inscription ?\x27)) {
                        e.preventDefault();
                        return false;
                    }
                });
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
        return "admis/edit.html.twig";
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
        return array (  439 => 181,  434 => 180,  424 => 179,  412 => 174,  407 => 172,  395 => 163,  392 => 162,  384 => 156,  380 => 155,  376 => 153,  372 => 151,  366 => 149,  364 => 148,  358 => 145,  355 => 144,  353 => 143,  344 => 136,  336 => 130,  332 => 129,  326 => 126,  322 => 124,  316 => 119,  308 => 114,  305 => 113,  303 => 112,  298 => 110,  294 => 109,  290 => 108,  284 => 105,  280 => 104,  276 => 103,  266 => 95,  260 => 92,  256 => 89,  247 => 82,  240 => 78,  233 => 74,  222 => 65,  214 => 59,  207 => 55,  198 => 51,  187 => 42,  183 => 39,  176 => 38,  166 => 35,  162 => 34,  157 => 33,  154 => 32,  149 => 31,  144 => 30,  135 => 23,  127 => 18,  121 => 14,  117 => 11,  107 => 10,  97 => 7,  92 => 6,  82 => 5,  65 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/edit.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\edit.html.twig");
    }
}
