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

/* user/form.html.twig */
class __TwigTemplate_1b4da949cddcc0865249eaba0cf425d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/form.html.twig"));

        // line 5
        $context["input_class"] = "w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition placeholder-slate-300";
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

        yield (string) (((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier mon profil") : ("Créer un compte"));
        yield " | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<div class=\"max-w-7xl mx-auto pb-10\">

";
        // line 11
        yield "<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
    <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
    <div class=\"absolute -bottom-16 left-1/3 w-64 h-64 rounded-full bg-white/[0.04] pointer-events-none\"></div>

    <div class=\"relative z-10 flex items-center gap-4\">
        <div class=\"w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border border-white/20 flex items-center justify-center text-2xl shrink-0\">
            <i class=\"fas ";
        // line 17
        yield (string) (((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-user-edit") : ("fa-user-plus"));
        yield "\"></i>
        </div>
        <div>
            <h1 class=\"text-xl md:text-2xl font-bold tracking-tight\">
                ";
        // line 21
        yield (string) (((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier mon profil") : ("Créer un compte utilisateur"));
        yield "
            </h1>
            <p class=\"text-white/60 text-sm mt-0.5\">
                ";
        // line 24
        yield (string) (((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettez à jour vos informations personnelles") : ("Remplissez vos informations pour créer votre espace personnel"));
        yield "
            </p>
        </div>
    </div>
</div>

";
        // line 30
        yield from $this->load("partials/_flash_messages.html.twig", 30)->unwrap()->yield($context);
        // line 31
        yield "
";
        // line 32
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-5", "novalidate" => "novalidate"]]);
        yield "

";
        // line 35
        yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center text-indigo-600\">
            <i class=\"fas fa-user text-sm\"></i>
        </div>
        <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Identité</h2>
    </div>
    <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-5\">
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Nom";
        // line 45
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 46
        yield "            </label>
            ";
        // line 47
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " uppercase"), "placeholder" => "Votre nom de famille"]]);
        yield "
            ";
        // line 48
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 48), 'errors');
        yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Prénoms";
        // line 52
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 53
        yield "            </label>
            ";
        // line 54
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenoms", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Vos prénoms"]]);
        yield "
            ";
        // line 55
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenoms", [], "any", false, false, false, 55), 'errors');
        yield "
        </div>
        ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "role", [], "any", true, true, false, 57)) {
            // line 58
            yield "        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">Rôle</label>
            ";
            // line 60
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "role", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " bg-white")]]);
            yield "
            ";
            // line 61
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "role", [], "any", false, false, false, 61), 'errors');
            yield "
        </div>
        ";
        }
        // line 64
        yield "        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">Nom de jeune fille</label>
            ";
        // line 66
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nomjeunefille", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Si applicable"]]);
        yield "
            ";
        // line 67
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nomjeunefille", [], "any", false, false, false, 67), 'errors');
        yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Sexe";
        // line 71
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 72
        yield "            </label>
            ";
        // line 73
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sexe", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " bg-white")]]);
        yield "
            ";
        // line 74
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sexe", [], "any", false, false, false, 74), 'errors');
        yield "
        </div>
        <div class=\"md:col-span-2\">
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Email";
        // line 78
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 79
        yield "            </label>
            ";
        // line 80
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => (((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($context["input_class"] ?? null) . " bg-slate-50")) : (($context["input_class"] ?? null))), "placeholder" => "exemple@email.com"]]);
        yield "
            ";
        // line 81
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 81), 'errors');
        yield "
        </div>
    </div>
</div>

";
        // line 87
        yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-purple-100 flex items-center justify-center text-purple-600\">
            <i class=\"fas fa-calendar-alt text-sm\"></i>
        </div>
        <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Naissance & Nationalité</h2>
    </div>
    <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-5\">
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Date de naissance";
        // line 97
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 98
        yield "            </label>
            ";
        // line 99
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "datenaissance", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
        yield "
            ";
        // line 100
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "datenaissance", [], "any", false, false, false, 100), 'errors');
        yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Lieu de naissance";
        // line 104
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 105
        yield "            </label>
            ";
        // line 106
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lieunaissance", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ville de naissance"]]);
        yield "
            ";
        // line 107
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lieunaissance", [], "any", false, false, false, 107), 'errors');
        yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Nationalité";
        // line 111
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 112
        yield "            </label>
            ";
        // line 113
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nationalite", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex: Ivoirienne"]]);
        yield "
            ";
        // line 114
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nationalite", [], "any", false, false, false, 114), 'errors');
        yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">N° extrait de naissance</label>
            ";
        // line 118
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numextrait", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Numéro d\x27extrait"]]);
        yield "
            ";
        // line 119
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numextrait", [], "any", false, false, false, 119), 'errors');
        yield "
        </div>
    </div>
</div>

";
        // line 125
        yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600\">
            <i class=\"fas fa-map-marker-alt text-sm\"></i>
        </div>
        <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Résidence & Contact</h2>
    </div>
    <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-5\">
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Lieu de résidence";
        // line 135
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 136
        yield "            </label>
            ";
        // line 137
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "residence", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Votre ville de résidence"]]);
        yield "
            ";
        // line 138
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "residence", [], "any", false, false, false, 138), 'errors');
        yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Contact";
        // line 142
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"text-red-500\">*</span>";
        }
        // line 143
        yield "            </label>
            ";
        // line 144
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " font-mono"), "placeholder" => "0708091011", "pattern" => "[0-9]{10}", "maxlength" => "10"]]);
        yield "
            ";
        // line 145
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 145), 'errors');
        yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">Situation matrimoniale</label>
            ";
        // line 149
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "situationmat", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " bg-white")]]);
        yield "
            ";
        // line 150
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "situationmat", [], "any", false, false, false, 150), 'errors');
        yield "
        </div>
    </div>
</div>

";
        // line 156
        yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600\">
            <i class=\"fas fa-users text-sm\"></i>
        </div>
        <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Informations sur les parents</h2>
    </div>
    <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-5\">
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">Nom du père</label>
            ";
        // line 166
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nompere", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Nom complet du père"]]);
        yield "
            ";
        // line 167
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nompere", [], "any", false, false, false, 167), 'errors');
        yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">Nom de la mère</label>
            ";
        // line 171
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nommere", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Nom complet de la mère"]]);
        yield "
            ";
        // line 172
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nommere", [], "any", false, false, false, 172), 'errors');
        yield "
        </div>
    </div>
</div>

";
        // line 178
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 179
            yield "<div class=\"bg-white rounded-2xl shadow-sm border border-indigo-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-indigo-100 bg-indigo-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center text-indigo-600\">
            <i class=\"fas fa-lock text-sm\"></i>
        </div>
        <h2 class=\"text-sm font-semibold text-indigo-700 uppercase tracking-wider\">Identifiants de connexion</h2>
    </div>
    <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-5\">
        ";
            // line 187
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", true, true, false, 187)) {
                // line 188
                yield "        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">Mot de passe <span class=\"text-red-500\">*</span></label>
            ";
                // line 190
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 190), "first", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
            ";
                // line 191
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 191), "first", [], "any", false, false, false, 191), 'errors');
                yield "
        </div>
        <div>
            <label class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">Confirmer <span class=\"text-red-500\">*</span></label>
            ";
                // line 195
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 195), "second", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
                yield "
            ";
                // line 196
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 196), "second", [], "any", false, false, false, 196), 'errors');
                yield "
        </div>
        ";
            }
            // line 199
            yield "    </div>
</div>

";
            // line 203
            yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"p-6\">
        <label class=\"flex items-start gap-3 cursor-pointer group\">
            <div class=\"relative mt-0.5 shrink-0\">
                <input type=\"checkbox\" id=\"accept\" required class=\"peer sr-only\">
                <div class=\"w-5 h-5 rounded-md border-2 border-slate-300 bg-white group-hover:border-indigo-400 peer-checked:bg-indigo-600 peer-checked:border-indigo-600 transition-all flex items-center justify-center\">
                    <i class=\"fas fa-check text-white text-[9px]\"></i>
                </div>
            </div>
            <p class=\"text-sm text-slate-600 leading-relaxed\">
                J\x27accepte que les informations fournies soient utilisées dans le cadre de ma candidature
                et j\x27atteste sur l\x27honneur leur exactitude.
            </p>
        </label>
    </div>
</div>
";
        }
        // line 220
        yield "
";
        // line 222
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", true, true, false, 222)) {
            // line 223
            yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60\">
        <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Accès du compte</h2>
    </div>
    <div class=\"p-6 grid grid-cols-1 md:grid-cols-2 gap-5\">
        <label class=\"md:col-span-2 flex items-center gap-3 text-sm text-slate-700\">
            ";
            // line 229
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 229), 'widget', ["attr" => ["class" => "w-4 h-4"]]);
            yield "
            ";
            // line 230
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 230), "vars", [], "any", false, false, false, 230), "label", [], "any", false, false, false, 230), "html", null, true);
            yield "
        </label>
        <div>
            <label for=\"";
            // line 233
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 233), "first", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "id", [], "any", false, false, false, 233), "html", null, true);
            yield "\" class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 233), "first", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "label", [], "any", false, false, false, 233), "html", null, true);
            yield "</label>
            ";
            // line 234
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 234), "first", [], "any", false, false, false, 234), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "autocomplete" => "new-password"]]);
            yield "
            ";
            // line 235
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 235), "first", [], "any", false, false, false, 235), 'errors');
            yield "
        </div>
        <div>
            <label for=\"";
            // line 238
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 238), "second", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "id", [], "any", false, false, false, 238), "html", null, true);
            yield "\" class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 238), "second", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "label", [], "any", false, false, false, 238), "html", null, true);
            yield "</label>
            ";
            // line 239
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 239), "second", [], "any", false, false, false, 239), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "autocomplete" => "new-password"]]);
            yield "
            ";
            // line 240
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 240), "second", [], "any", false, false, false, 240), 'errors');
            yield "
        </div>
    </div>
</div>
";
        }
        // line 245
        yield "
";
        // line 247
        yield "<div class=\"flex flex-col sm:flex-row items-center justify-between gap-3 py-2\">
    <div class=\"flex flex-wrap gap-2 w-full sm:w-auto\">
        <a href=\"";
        // line 249
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_change_password");
        yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-amber-200 bg-amber-50 text-amber-700 text-sm font-medium hover:bg-amber-100 transition\">
            <i class=\"fas fa-key text-xs\"></i> Changer le mot de passe
        </a>
        ";
        // line 253
        if ((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 254
            yield "        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\"
           class=\"inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-500 text-sm font-medium hover:bg-slate-50 transition\">
            <i class=\"fas fa-arrow-left text-xs\"></i> Annuler
        </a>
        ";
        }
        // line 259
        yield "    </div>
    <button type=\"submit\"
            class=\"inline-flex items-center gap-2 px-8 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-bold rounded-xl shadow-md shadow-indigo-200/60 hover:from-indigo-700 hover:to-purple-700 hover:-translate-y-0.5 transition-all w-full sm:w-auto justify-center\">
        <i class=\"fas ";
        // line 262
        yield (string) (((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-save") : ("fa-user-plus"));
        yield "\"></i>
        ";
        // line 263
        yield (string) (((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer mon compte"));
        yield "
    </button>
</div>

";
        // line 267
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

";
        // line 269
        if ( !(($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 270
            yield "<div class=\"text-center mt-4\">
    <p class=\"text-sm text-slate-500\">
        Déjà inscrit ?
        <a href=\"";
            // line 273
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-indigo-600 hover:text-indigo-800 font-semibold ml-1\">
            Connectez-vous <i class=\"fas fa-arrow-right text-xs\"></i>
        </a>
    </p>
</div>
";
        }
        // line 279
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/form.html.twig";
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
        return array (  608 => 279,  599 => 273,  594 => 270,  592 => 269,  587 => 267,  580 => 263,  576 => 262,  571 => 259,  562 => 254,  560 => 253,  553 => 249,  549 => 247,  546 => 245,  538 => 240,  534 => 239,  528 => 238,  522 => 235,  518 => 234,  512 => 233,  506 => 230,  502 => 229,  494 => 223,  492 => 222,  489 => 220,  470 => 203,  465 => 199,  459 => 196,  455 => 195,  448 => 191,  444 => 190,  440 => 188,  438 => 187,  428 => 179,  426 => 178,  418 => 172,  414 => 171,  407 => 167,  403 => 166,  391 => 156,  383 => 150,  379 => 149,  372 => 145,  368 => 144,  365 => 143,  361 => 142,  354 => 138,  350 => 137,  347 => 136,  343 => 135,  331 => 125,  323 => 119,  319 => 118,  312 => 114,  308 => 113,  305 => 112,  301 => 111,  294 => 107,  290 => 106,  287 => 105,  283 => 104,  276 => 100,  272 => 99,  269 => 98,  265 => 97,  253 => 87,  245 => 81,  241 => 80,  238 => 79,  234 => 78,  227 => 74,  223 => 73,  220 => 72,  216 => 71,  209 => 67,  205 => 66,  201 => 64,  195 => 61,  191 => 60,  187 => 58,  185 => 57,  180 => 55,  176 => 54,  173 => 53,  169 => 52,  162 => 48,  158 => 47,  155 => 46,  151 => 45,  139 => 35,  134 => 32,  131 => 31,  129 => 30,  120 => 24,  114 => 21,  107 => 17,  99 => 11,  95 => 8,  85 => 7,  66 => 3,  58 => 1,  56 => 5,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/form.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\user\\form.html.twig");
    }
}
