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

/* admis/inscription.html.twig */
class __TwigTemplate_854531d223bf5a426c97afe2af7690af extends Template
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
        return $this->parent ??= $this->load("base_dashboard.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/inscription.html.twig"));

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

        yield "Inscription Définitive";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"max-w-7xl mx-auto pb-12\">

";
        // line 9
        yield "<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
    <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
    <div class=\"absolute -bottom-16 left-1/3 w-64 h-64 rounded-full bg-white/[0.04] pointer-events-none\"></div>

    <div class=\"relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border border-white/20 flex items-center justify-center text-2xl shrink-0\">
                <i class=\"fas fa-user-graduate\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl md:text-3xl font-bold tracking-tight\">Inscription Définitive</h1>
                <p class=\"text-white/70 text-base mt-1\">
                    ";
        // line 21
        if ((($context["step"] ?? null) == 1)) {
            yield "Recherchez un candidat admis pour finaliser son inscription
                    ";
        } elseif ((        // line 22
array_key_exists("is_deja_admis_definitif", $context) && (($tmp = ($context["is_deja_admis_definitif"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "Candidat déjà inscrit — mise à jour de la fiche d\x27engagement
                    ";
        } else {
            // line 23
            yield "Vérifiez les informations et confirmez l\x27inscription
                    ";
        }
        // line 25
        yield "                </p>
            </div>
        </div>
        <a href=\"";
        // line 28
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-base font-medium transition-all hover:-translate-y-0.5 w-full md:w-auto justify-center\">
            <i class=\"fas fa-arrow-left text-sm\"></i> Tableau de bord
        </a>
    </div>

    ";
        // line 35
        yield "    <div class=\"relative z-10 flex items-center gap-3\">
        <div class=\"flex items-center gap-2\">
            <div class=\"w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold
                ";
        // line 38
        yield (string) (((($context["step"] ?? null) == 1)) ? ("bg-white text-indigo-600") : ("bg-white/20 text-white"));
        yield "\">1</div>
            <span class=\"text-base font-medium ";
        // line 39
        yield (string) (((($context["step"] ?? null) == 1)) ? ("text-white") : ("text-white/50"));
        yield "\">Recherche</span>
        </div>
        <div class=\"flex-1 h-px bg-white/20 max-w-12\"></div>
        <div class=\"flex items-center gap-2\">
            <div class=\"w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold
                ";
        // line 44
        yield (string) (((($context["step"] ?? null) == 2)) ? ("bg-white text-indigo-600") : ("bg-white/20 text-white"));
        yield "\">2</div>
            <span class=\"text-base font-medium ";
        // line 45
        yield (string) (((($context["step"] ?? null) == 2)) ? ("text-white") : ("text-white/50"));
        yield "\">Confirmation</span>
        </div>
    </div>
</div>

";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 52
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 53
                yield "        ";
                $context["bg"] = ((($context["type"] == "success")) ? ("bg-green-50 border-green-200 text-green-700") : ((((                // line 54
$context["type"] == "error")) ? ("bg-red-50 border-red-200 text-red-700") : ((((                // line 55
$context["type"] == "warning")) ? ("bg-amber-50 border-amber-200 text-amber-700") : ("bg-blue-50 border-blue-200 text-blue-700"))))));
                // line 57
                yield "        ";
                $context["ico"] = ((($context["type"] == "success")) ? ("check-circle") : ((((                // line 58
$context["type"] == "error")) ? ("exclamation-circle") : ((((                // line 59
$context["type"] == "warning")) ? ("exclamation-triangle") : ("info-circle"))))));
                // line 60
                yield "        <div class=\"flex items-center gap-3 px-5 py-3.5 rounded-xl border mb-5 text-sm font-medium ";
                yield (string) $this->escaper->escape(($context["bg"] ?? null), "html", null, true);
                yield "\">
            <i class=\"fas fa-";
                // line 61
                yield (string) $this->escaper->escape(($context["ico"] ?? null), "html", null, true);
                yield "\"></i> ";
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
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 65
        yield "
";
        // line 67
        if ((($context["step"] ?? null) == 1)) {
            // line 68
            yield "
<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-5\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center text-indigo-600\">
            <i class=\"fas fa-search text-sm\"></i>
        </div>
        <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">Rechercher un candidat admis</h2>
    </div>
    <div class=\"p-6\">
        <p class=\"text-base text-slate-500 mb-5 leading-relaxed\">
            Saisissez le numéro de candidature, l\x27adresse email ou le numéro de téléphone.
            <br><span class=\"text-slate-400 text-sm\">Seuls les candidats admis de votre établissement s\x27afficheront.</span>
        </p>

        <form method=\"GET\" action=\"";
            // line 82
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_inscription");
            yield "\">
            <div class=\"flex flex-col sm:flex-row gap-3\">
                <div class=\"relative flex-1\">
                    <div class=\"absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none\">
                        <i class=\"fas fa-search text-slate-400 text-sm\"></i>
                    </div>
                    <input type=\"text\" name=\"q\" id=\"search\" value=\"";
            // line 88
            yield (string) $this->escaper->escape(($context["searchQuery"] ?? null), "html", null, true);
            yield "\" required
                           placeholder=\"N° candidature  •  email@exemple.com  •  0102030405\"
                           class=\"w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 text-base text-slate-700 placeholder-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition-all\">
                </div>
                <button type=\"submit\"
                        class=\"inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-base font-bold rounded-xl shadow-md shadow-indigo-200/50 hover:from-indigo-700 hover:to-purple-700 hover:-translate-y-0.5 transition-all whitespace-nowrap\">
                    <i class=\"fas fa-search\"></i> Rechercher
                </button>
            </div>

            ";
            // line 98
            if ((($tmp = ($context["searchQuery"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 99
                yield "            <p class=\"mt-3 text-sm text-slate-400\">
                <i class=\"fas fa-clock mr-1\"></i>
                Résultats pour : <span class=\"font-semibold text-slate-600\">« ";
                // line 101
                yield (string) $this->escaper->escape(($context["searchQuery"] ?? null), "html", null, true);
                yield " »</span>
            </p>
            ";
            }
            // line 104
            yield "
            ";
            // line 105
            if ((array_key_exists("notFound", $context) && (($tmp = ($context["notFound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 106
                yield "            <div class=\"mt-4 flex items-start gap-3 px-5 py-4 rounded-xl border border-red-200 bg-red-50 text-sm\">
                <i class=\"fas fa-user-times text-red-400 text-base mt-0.5 shrink-0\"></i>
                <div class=\"text-red-700\">
                    <p class=\"font-bold mb-0.5\">Candidat introuvable</p>
                    <p>Aucun candidat admis ne correspond à <strong>« ";
                // line 110
                yield (string) $this->escaper->escape(($context["searchQuery"] ?? null), "html", null, true);
                yield " »</strong>. Vérifiez le numéro, l\x27email ou le téléphone saisi.</p>
                </div>
            </div>
            ";
            }
            // line 114
            yield "        </form>
    </div>
</div>

";
            // line 119
            yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600\">
            <i class=\"fas fa-lightbulb text-sm\"></i>
        </div>
        <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">Comment ça fonctionne ?</h2>
    </div>
    <div class=\"p-6 grid grid-cols-1 sm:grid-cols-3 gap-4\">
        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable([["n" => "1", "icon" => "search", "color" => "indigo", "title" => "Rechercher", "desc" => "Retrouvez le candidat par son numéro, email ou téléphone"], ["n" => "2", "icon" => "file-upload", "color" => "emerald", "title" => "Fiche d\x27engagement", "desc" => "Joignez la fiche d\x27engagement scannée et signée"], ["n" => "3", "icon" => "check-circle", "color" => "purple", "title" => "Confirmer", "desc" => "Validez l\x27inscription définitive du candidat"]]);
            foreach ($context['_seq'] as $context["_key"] => $context["step_item"]) {
                // line 132
                yield "        <div class=\"flex flex-col items-center text-center p-5 rounded-xl bg-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step_item"], "color", [], "any", false, false, false, 132), "html", null, true);
                yield "-50 border border-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step_item"], "color", [], "any", false, false, false, 132), "html", null, true);
                yield "-100 gap-3\">
            <div class=\"w-12 h-12 rounded-xl bg-";
                // line 133
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step_item"], "color", [], "any", false, false, false, 133), "html", null, true);
                yield "-100 flex items-center justify-center text-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step_item"], "color", [], "any", false, false, false, 133), "html", null, true);
                yield "-600\">
                <i class=\"fas fa-";
                // line 134
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step_item"], "icon", [], "any", false, false, false, 134), "html", null, true);
                yield " text-lg\"></i>
            </div>
            <div>
                <p class=\"text-base font-bold text-slate-800\">";
                // line 137
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step_item"], "n", [], "any", false, false, false, 137), "html", null, true);
                yield ". ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step_item"], "title", [], "any", false, false, false, 137), "html", null, true);
                yield "</p>
                <p class=\"text-sm text-slate-500 mt-1\">";
                // line 138
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step_item"], "desc", [], "any", false, false, false, 138), "html", null, true);
                yield "</p>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['step_item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 142
            yield "    </div>
</div>

";
        } elseif ((((        // line 146
($context["step"] ?? null) == 2) && array_key_exists("is_deja_admis_definitif", $context)) && (($tmp = ($context["is_deja_admis_definitif"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 147
            yield "
<form method=\"POST\" action=\"";
            // line 148
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_inscription", ["candidature_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\" id=\"engagement-form\">

    <div class=\"bg-blue-50 border border-blue-200 rounded-2xl px-5 py-4 mb-5 flex items-start gap-4\">
        <div class=\"w-10 h-10 rounded-xl bg-blue-500 flex items-center justify-center shrink-0 mt-0.5\">
            <i class=\"fas fa-info-circle text-white\"></i>
        </div>
        <div>
            <p class=\"text-base font-bold text-blue-800\">Ce candidat est déjà inscrit définitivement</p>
            <p class=\"text-sm text-blue-600 mt-1\">
                <strong>";
            // line 157
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 157), "nom", [], "any", false, false, false, 157)), "html", null, true);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 157), "prenoms", [], "any", false, false, false, 157), "html", null, true);
            yield "</strong>
                — N° <span class=\"font-mono\">";
            // line 158
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 158), "html", null, true);
            yield "</span><br>
                Vous pouvez uniquement joindre ou remplacer la fiche d\x27engagement scannée.
            </p>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-5\">
        <div class=\"px-6 py-4 border-b border-slate-100 bg-amber-50/60 flex items-center gap-3\">
            <div class=\"w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600\">
                <i class=\"fas fa-file-upload text-sm\"></i>
            </div>
            <h2 class=\"text-sm font-semibold text-amber-700 uppercase tracking-wider\">Fiche d\x27engagement</h2>
        </div>
        <div class=\"p-6\">
            ";
            // line 172
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "ficheEngagement", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 173
                yield "            <div class=\"mb-5 flex items-center gap-3 px-4 py-3 bg-green-50 border border-green-200 rounded-xl text-sm text-green-700\">
                <i class=\"fas fa-check-circle text-green-500 shrink-0\"></i>
                <span class=\"font-medium\">Fiche déjà uploadée : <strong>";
                // line 175
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "ficheEngagement", [], "any", false, false, false, 175), "html", null, true);
                yield "</strong></span>
            <a href=\"";
                // line 176
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_media_file", ["candidatureNumero" => CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 176), "filename" => CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "ficheEngagement", [], "any", false, false, false, 176)]), "html", null, true);
                yield "\"
               target=\"_blank\"
               class=\"ml-auto inline-flex items-center gap-1 text-green-600 hover:text-green-800 font-bold text-xs transition\">
                <i class=\"fas fa-eye\"></i> Voir 
            </a>
            </div>
            ";
            }
            // line 183
            yield "
            <label class=\"block text-sm font-bold text-slate-500 uppercase tracking-wider mb-2\">
                ";
            // line 185
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "ficheEngagement", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Remplacer la fiche") : ("Uploader la fiche"));
            yield "
                <span class=\"font-normal text-slate-400 ml-1\">(PDF, JPG, PNG — max 2 Mo)</span>
            </label>
            <input type=\"file\" id=\"fiche_engagement_input\" accept=\".pdf,.jpg,.jpeg,.png\"
                   class=\"block w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-5 file:rounded-xl file:border-0 file:font-bold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 file:transition-all file:cursor-pointer border border-slate-200 rounded-xl px-3 py-2\">
            <input type=\"hidden\" name=\"fiche_engagement_base64\" id=\"fiche_engagement_base64\">
            <input type=\"hidden\" name=\"fiche_engagement_name\" id=\"fiche_engagement_name\">
        </div>
    </div>

    ";
            // line 196
            yield "    <div class=\"flex justify-end\">
        <button type=\"submit\"
                class=\"inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-gradient-to-r from-indigo-500 to-purple-500 text-white text-base font-bold rounded-xl shadow-md shadow-amber-200/60 hover:from-amber-600 hover:to-orange-600 hover:-translate-y-0.5 transition-all\">
            <i class=\"fas fa-save\"></i> Enregistrer la fiche d\x27engagement
        </button>
    </div>
</form>

";
        } elseif ((        // line 205
($context["step"] ?? null) == 2)) {
            // line 206
            yield "
<div class=\"bg-emerald-50 border border-emerald-200 rounded-2xl px-5 py-4 mb-5 flex items-center gap-4\">
    <div class=\"w-10 h-10 rounded-xl bg-emerald-500 flex items-center justify-center shrink-0\">
        <i class=\"fas fa-trophy text-white\"></i>
    </div>
    <div>
        <p class=\"text-base font-bold text-emerald-800\">Candidat admis !</p>
        <p class=\"text-sm text-emerald-600 mt-0.5\">
            <strong>";
            // line 214
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 214), "nom", [], "any", false, false, false, 214)), "html", null, true);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 214), "prenoms", [], "any", false, false, false, 214), "html", null, true);
            yield "</strong> a été admis(e).
            Vérifiez les infos, joignez la fiche d\x27engagement, puis confirmez.
        </p>
    </div>
</div>

<form method=\"POST\" action=\"";
            // line 220
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_inscription", ["candidature_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "id", [], "any", false, false, false, 220)]), "html", null, true);
            yield "\" id=\"engagement-form\">

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-5 mb-5\">

        ";
            // line 225
            yield "        <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
            <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center justify-between gap-3\">
                <div class=\"flex items-center gap-3\">
                    <div class=\"w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center text-indigo-600\">
                        <i class=\"fas fa-user-edit text-sm\"></i>
                    </div>
                    <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">Informations personnelles</h2>
                </div>
                <span class=\"text-xs font-bold px-2 py-1 rounded-full bg-indigo-100 text-indigo-600\">Modifiable</span>
            </div>
            <div class=\"p-6 space-y-4\">

                <div>
                    <p class=\"text-sm font-bold text-slate-400 uppercase tracking-wider mb-1\">N° candidature</p>
                    <p class=\"text-base font-bold text-slate-800 font-mono tracking-wider\">";
            // line 239
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 239), "html", null, true);
            yield "</p>
                </div>

                ";
            // line 242
            $context["fields"] = [["name" => "nom", "label" => "Nom", "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 243
($context["candidature"] ?? null), "user", [], "any", false, false, false, 243), "nom", [], "any", false, false, false, 243), "type" => "text", "class" => "uppercase"], ["name" => "prenoms", "label" => "Prénoms", "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 244
($context["candidature"] ?? null), "user", [], "any", false, false, false, 244), "prenoms", [], "any", false, false, false, 244), "type" => "text", "class" => ""], ["name" => "contact", "label" => "Contact", "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 245
($context["candidature"] ?? null), "user", [], "any", false, false, false, 245), "contact", [], "any", false, false, false, 245), "type" => "text", "class" => "font-mono"], ["name" => "datenaissance", "label" => "Date de naissance", "value" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 246
($context["candidature"] ?? null), "user", [], "any", false, false, false, 246), "datenaissance", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 246), "datenaissance", [], "any", false, false, false, 246), "Y-m-d")) : ("")), "type" => "date", "class" => ""], ["name" => "lieunaissance", "label" => "Lieu de naissance", "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 247
($context["candidature"] ?? null), "user", [], "any", false, false, false, 247), "lieunaissance", [], "any", false, false, false, 247), "type" => "text", "class" => ""]];
            // line 249
            yield "
                ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 251
                yield "                <div>
                    <label for=\"";
                // line 252
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 252), "html", null, true);
                yield "\" class=\"block text-sm font-bold text-slate-400 uppercase tracking-wider mb-1\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "label", [], "any", false, false, false, 252), "html", null, true);
                yield "</label>
                    <input type=\"";
                // line 253
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 253), "html", null, true);
                yield "\" name=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 253), "html", null, true);
                yield "\" id=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 253), "html", null, true);
                yield "\" value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "value", [], "any", false, false, false, 253), "html", null, true);
                yield "\"
                           class=\"w-full px-4 py-2.5 rounded-xl border border-slate-200 text-base text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition ";
                // line 254
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "class", [], "any", false, false, false, 254), "html", null, true);
                yield "\">
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 257
            yield "            </div>
        </div>

        ";
            // line 261
            yield "        <div class=\"flex flex-col gap-5\">

            ";
            // line 264
            yield "            <div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
                <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
                    <div class=\"w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600\">
                        <i class=\"fas fa-graduation-cap text-sm\"></i>
                    </div>
                    <h2 class=\"text-base font-semibold text-slate-700 uppercase tracking-wider\">Formation choisie</h2>
                </div>
                <div class=\"p-6 space-y-4\">
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center shrink-0\">
                            <i class=\"fas fa-school text-slate-400 text-xs\"></i>
                        </div>
                        <div>
                            <p class=\"text-sm font-bold text-slate-400 uppercase tracking-wider\">Établissement</p>
                            <p class=\"text-base font-bold text-slate-800 mt-0.5\">";
            // line 278
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 278), "nom", [], "any", false, false, false, 278), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center shrink-0\">
                            <i class=\"fas fa-briefcase text-slate-400 text-xs\"></i>
                        </div>
                        <div>
                            <p class=\"text-sm font-bold text-slate-400 uppercase tracking-wider\">Métier / Formation</p>
                            <span class=\"inline-flex items-center gap-1.5 mt-1.5 px-3 py-1 rounded-full text-sm font-bold bg-emerald-50 text-emerald-700 border border-emerald-200\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-emerald-500\"></span>
                                ";
            // line 289
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 289), "nom", [], "any", false, false, false, 289), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 297
            yield "            <div class=\"bg-white rounded-2xl shadow-sm border border-amber-200 overflow-hidden\">
                <div class=\"px-6 py-4 border-b border-amber-100 bg-amber-50/60 flex items-center gap-3\">
                    <div class=\"w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600\">
                        <i class=\"fas fa-file-upload text-sm\"></i>
                    </div>
                    <h2 class=\"text-base font-semibold text-amber-700 uppercase tracking-wider\">Fiche d\x27engagement</h2>
                </div>
                <div class=\"p-6\">
                    <p class=\"text-sm text-slate-500 mb-4 leading-relaxed\">
                        Scannez et joignez la fiche signée par le candidat (preuve qu\x27il s\x27engage à suivre la formation).
                    </p>
                    <input type=\"file\" id=\"fiche_engagement_input2\" accept=\".pdf,.jpg,.jpeg,.png\"
                           class=\"block w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-5 file:rounded-xl file:border-0 file:font-bold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 file:transition-all file:cursor-pointer border border-slate-200 rounded-xl px-3 py-2\">
                    <input type=\"hidden\" name=\"fiche_engagement_base64\" id=\"fiche_engagement_base64_2\">
                    <input type=\"hidden\" name=\"fiche_engagement_name\" id=\"fiche_engagement_name_2\">
                    <p class=\"text-xs text-slate-400 mt-2\"><i class=\"fas fa-info-circle mr-1\"></i> PDF, JPG, PNG — max 1 Mo</p>
                </div>
            </div>

            ";
            // line 317
            yield "            <div class=\"bg-white rounded-2xl shadow-sm border border-emerald-200 overflow-hidden\">
                <div class=\"px-6 py-4 border-b border-emerald-100 bg-emerald-50/60 flex items-center gap-3\">
                    <div class=\"w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600\">
                        <i class=\"fas fa-handshake text-sm\"></i>
                    </div>
                    <h2 class=\"text-base font-semibold text-emerald-700 uppercase tracking-wider\">Engagement</h2>
                </div>
                <div class=\"p-6\">
                    <label class=\"flex items-start gap-3 cursor-pointer group mb-5 p-4 rounded-xl border-2 border-dashed border-amber-200 bg-amber-50/50 hover:bg-amber-50 transition-all\">
                        <div class=\"relative mt-0.5 shrink-0\">
                            <input type=\"checkbox\" name=\"engagement\" id=\"engagement\" required class=\"peer sr-only\">
                            <div class=\"w-5 h-5 rounded-md border-2 border-slate-300 bg-white group-hover:border-emerald-400 peer-checked:bg-emerald-500 peer-checked:border-emerald-500 transition-all flex items-center justify-center\">
                                <i class=\"fas fa-check text-white text-[9px]\"></i>
                            </div>
                        </div>
                        <div>
                            <p class=\"text-base font-semibold text-slate-800 leading-snug\">
                                Le candidat confirme être prêt(e) à suivre la formation jusqu\x27au bout
                            </p>
                            <p class=\"text-sm text-slate-500 mt-1.5 leading-relaxed\">
                                L\x27établissement confirme que le candidat s\x27engage à respecter le règlement intérieur.
                            </p>
                            <p class=\"text-xs text-amber-600 mt-2 font-semibold\">
                                <i class=\"fas fa-exclamation-triangle mr-1\"></i>Obligatoire pour valider l\x27inscription
                            </p>
                        </div>
                    </label>

                    <div class=\"flex flex-col sm:flex-row gap-3\">
                        <a href=\"";
            // line 346
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_inscription");
            yield "\"
                           class=\"inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-500 text-base font-medium hover:bg-slate-50 transition w-full sm:w-auto\">
                            <i class=\"fas fa-arrow-left text-xs\"></i> Retour
                        </a>
                        <button type=\"submit\"
                                class=\"inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-gradient-to-r from-emerald-500 to-green-500 text-white text-base font-bold rounded-xl shadow-md shadow-emerald-200/60 hover:from-emerald-600 hover:to-green-600 hover:-translate-y-0.5 transition-all flex-1\">
                            <i class=\"fas fa-user-graduate\"></i> Inscrire définitivement
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>

";
        }
        // line 363
        yield "
</div>

<script>
document.addEventListener(\x27DOMContentLoaded\x27, function () {
    // Auto-submit si champ pré-rempli (depuis liste des admis)
    const searchInput = document.getElementById(\x27search\x27);
    if (searchInput?.value.trim()) {
        setTimeout(() => searchInput.closest(\x27form\x27)?.submit(), 400);
    }

    // === UPLOAD PAR CHUNKS AJAX ===
    const CHUNK_SIZE = 50 * 1024; // 50 Ko par chunk (sous la limite Apache)
    const UPLOAD_URL = \x27";
        // line 376
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_upload_chunk");
        yield "\x27;
    let uploadedFile = null; // Fichier prêt à être uploadé
    let uploadInProgress = false;
    let uploadDone = false;

    // Compresser une image via canvas
    function compressImage(file, maxW, maxH, quality) {
        return new Promise((resolve, reject) => {
            const img = new Image();
            const reader = new FileReader();
            reader.onload = e => {
                img.onload = () => {
                    let w = img.width, h = img.height;
                    if (w > maxW) { h = h * (maxW / w); w = maxW; }
                    if (h > maxH) { w = w * (maxH / h); h = maxH; }
                    const canvas = document.createElement(\x27canvas\x27);
                    canvas.width = w; canvas.height = h;
                    canvas.getContext(\x272d\x27).drawImage(img, 0, 0, w, h);
                    canvas.toBlob(blob => blob ? resolve(blob) : reject(\x27Compression échouée\x27), \x27image/jpeg\x27, quality);
                };
                img.onerror = reject;
                img.src = e.target.result;
            };
            reader.onerror = reject;
            reader.readAsDataURL(file);
        });
    }

    // Préparer le fichier quand l\x27utilisateur le sélectionne
    function setupFileInput(inputId) {
        const input = document.getElementById(inputId);
        if (!input) return;

        input.addEventListener(\x27change\x27, async function () {
            uploadDone = false;
            uploadedFile = null;
            const file = this.files[0];
            if (!file) return;

            // Vérifier taille max (2 Mo)
            if (file.size > 2 * 1024 * 1024) {
                alert(\x27Le fichier est trop volumineux (max 2 Mo).\x27);
                this.value = \x27\x27;
                return;
            }

            // Compresser les images automatiquement
            if (file.type.startsWith(\x27image/\x27)) {
                try {
                    const compressed = await compressImage(file, 1200, 1600, 0.6);
                    const baseName = file.name.replace(/\\.[^.]+\$/, \x27\x27);
                    uploadedFile = { blob: compressed, name: baseName + \x27.jpg\x27 };
                    showFileStatus(input, \x27✅ Image compressée (\x27 + Math.round(compressed.size / 1024) + \x27 Ko) — prête\x27);
                    return;
                } catch (err) {
                    console.error(\x27Erreur compression:\x27, err);
                }
            }

            // PDF / autres
            uploadedFile = { blob: file, name: file.name };
            showFileStatus(input, \x27✅ Fichier sélectionné (\x27 + Math.round(file.size / 1024) + \x27 Ko) — prêt\x27);
        });
    }

    function showFileStatus(input, message) {
        let status = input.parentElement.querySelector(\x27.upload-status\x27);
        if (!status) {
            status = document.createElement(\x27p\x27);
            status.className = \x27upload-status text-sm font-medium mt-2\x27;
            input.parentElement.appendChild(status);
        }
        status.textContent = message;
        status.className = \x27upload-status text-sm font-medium mt-2 text-emerald-600\x27;
    }

    function showFileError(input, message) {
        let status = input.parentElement.querySelector(\x27.upload-status\x27);
        if (!status) {
            status = document.createElement(\x27p\x27);
            status.className = \x27upload-status text-sm font-medium mt-2\x27;
            input.parentElement.appendChild(status);
        }
        status.textContent = message;
        status.className = \x27upload-status text-sm font-medium mt-2 text-red-600\x27;
    }

    // Envoyer le fichier par chunks
    async function uploadFileByChunks(candidatureId) {
        if (!uploadedFile) return true; // Pas de fichier = OK
        if (uploadDone) return true;    // Déjà uploadé

        const blob = uploadedFile.blob;
        const arrayBuffer = await blob.arrayBuffer();
        const bytes = new Uint8Array(arrayBuffer);
        const totalChunks = Math.ceil(bytes.length / CHUNK_SIZE);
        const tempId = Date.now().toString(36) + Math.random().toString(36).substr(2, 5);

        for (let i = 0; i < totalChunks; i++) {
            const start = i * CHUNK_SIZE;
            const end = Math.min(start + CHUNK_SIZE, bytes.length);
            const chunkBytes = bytes.slice(start, end);

            // Convertir ce petit chunk en base64
            let binary = \x27\x27;
            for (let j = 0; j < chunkBytes.length; j++) {
                binary += String.fromCharCode(chunkBytes[j]);
            }
            const chunkBase64 = btoa(binary);

            const params = new URLSearchParams();
            params.append(\x27candidature_id\x27, candidatureId);
            params.append(\x27chunk\x27, chunkBase64);
            params.append(\x27chunk_index\x27, i);
            params.append(\x27total_chunks\x27, totalChunks);
            params.append(\x27file_name\x27, uploadedFile.name);
            params.append(\x27temp_id\x27, tempId);

            const response = await fetch(UPLOAD_URL, {
                method: \x27POST\x27,
                headers: { \x27Content-Type\x27: \x27application/x-www-form-urlencoded\x27 },
                body: params.toString()
            });

            if (!response.ok) {
                const err = await response.json().catch(() => ({ error: \x27Erreur serveur\x27 }));
                throw new Error(err.error || \x27Erreur lors de l\\\x27envoi du chunk \x27 + (i + 1));
            }
        }

        uploadDone = true;
        return true;
    }

    // Initialiser les inputs fichier
    setupFileInput(\x27fiche_engagement_input\x27);
    setupFileInput(\x27fiche_engagement_input2\x27);

    // Intercepter la soumission du formulaire
    const form = document.getElementById(\x27engagement-form\x27);
    if (form) {
        form.addEventListener(\x27submit\x27, async function (e) {
            // Vérifier engagement
            const cb = document.getElementById(\x27engagement\x27);
            if (cb && !cb.checked) {
                e.preventDefault();
                cb.closest(\x27label\x27)?.scrollIntoView({ behavior: \x27smooth\x27, block: \x27center\x27 });
                cb.closest(\x27label\x27).classList.add(\x27ring-2\x27, \x27ring-red-400\x27);
                setTimeout(() => cb.closest(\x27label\x27).classList.remove(\x27ring-2\x27, \x27ring-red-400\x27), 2000);
                return;
            }

            // S\x27il y a un fichier à uploader, le faire avant de soumettre
            if (uploadedFile && !uploadDone) {
                e.preventDefault();

                if (uploadInProgress) return;
                uploadInProgress = true;

                const submitBtn = form.querySelector(\x27button[type=\"submit\"]\x27);
                const originalText = submitBtn?.innerHTML;
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = \x27<i class=\"fas fa-spinner fa-spin\"></i> Envoi du fichier en cours...\x27;
                }

                // Récupérer candidature_id depuis l\x27URL du form action
                const formUrl = new URL(form.action, window.location.origin);
                const candidatureId = formUrl.searchParams.get(\x27candidature_id\x27);

                try {
                    await uploadFileByChunks(candidatureId);
                    // Fichier uploadé ! Soumettre le formulaire normalement
                    if (submitBtn) {
                        submitBtn.innerHTML = \x27<i class=\"fas fa-check\"></i> Fichier envoyé ! Validation...\x27;
                    }
                    // Retirer les champs base64 du form pour ne pas dépasser la limite
                    form.querySelectorAll(\x27[name=\"fiche_engagement_base64\"]\x27).forEach(el => el.remove());
                    form.querySelectorAll(\x27[name=\"fiche_engagement_name\"]\x27).forEach(el => el.remove());
                    form.submit();
                } catch (err) {
                    uploadInProgress = false;
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }
                    // Trouver l\x27input fichier visible
                    const visibleInput = document.getElementById(\x27fiche_engagement_input\x27) || document.getElementById(\x27fiche_engagement_input2\x27);
                    if (visibleInput) showFileError(visibleInput, \x27❌ \x27 + err.message);
                    alert(\x27Erreur lors de l\\\x27envoi du fichier : \x27 + err.message);
                }
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
        return "admis/inscription.html.twig";
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
        return array (  657 => 376,  642 => 363,  622 => 346,  591 => 317,  570 => 297,  560 => 289,  546 => 278,  530 => 264,  526 => 261,  521 => 257,  511 => 254,  501 => 253,  495 => 252,  492 => 251,  488 => 250,  485 => 249,  483 => 247,  482 => 246,  481 => 245,  480 => 244,  479 => 243,  478 => 242,  472 => 239,  456 => 225,  449 => 220,  438 => 214,  428 => 206,  426 => 205,  416 => 196,  403 => 185,  399 => 183,  389 => 176,  385 => 175,  381 => 173,  379 => 172,  362 => 158,  356 => 157,  344 => 148,  341 => 147,  339 => 146,  334 => 142,  323 => 138,  317 => 137,  311 => 134,  305 => 133,  298 => 132,  294 => 127,  284 => 119,  278 => 114,  271 => 110,  265 => 106,  263 => 105,  260 => 104,  254 => 101,  250 => 99,  248 => 98,  235 => 88,  226 => 82,  210 => 68,  208 => 67,  205 => 65,  188 => 61,  183 => 60,  181 => 59,  180 => 58,  178 => 57,  176 => 55,  175 => 54,  173 => 53,  168 => 52,  164 => 51,  156 => 45,  152 => 44,  144 => 39,  140 => 38,  135 => 35,  126 => 28,  121 => 25,  117 => 23,  112 => 22,  108 => 21,  94 => 9,  90 => 6,  80 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/inscription.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\inscription.html.twig");
    }
}
