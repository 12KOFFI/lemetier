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

/* index.html.twig */
class __TwigTemplate_2507bbd18b8247c0e384f23f41d6d150 extends Template
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
            'meta' => [$this, 'block_meta'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 5
        $context["mois"] = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
        // line 6
        if ((((($tmp = ($context["session"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateOuverture", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateCloture", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 7
            yield "    ";
            $context["debut"] = CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateOuverture", [], "any", false, false, false, 7);
            // line 8
            yield "    ";
            $context["fin"] = CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "dateCloture", [], "any", false, false, false, 8);
            // line 9
            yield "    ";
            $context["periode"] = ((((((($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["debut"] ?? null), "d") . ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["debut"] ?? null), "n") != $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["fin"] ?? null), "n"))) ? ((" " . (($_v0 = ($context["mois"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["debut"] ?? null), "n") - 1)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null))) : (""))) . " au ") . $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["fin"] ?? null), "d")) . " ") . (($_v2 = ($context["mois"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = ($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["fin"] ?? null), "n") - 1)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) . " ") . $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["fin"] ?? null), "Y"));
        } else {
            // line 11
            yield "    ";
            $context["periode"] = null;
        }
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

        yield "Recrutement LEMETIER 2026 - Formation et insertion professionnelle";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 15
        yield from $this->yieldParentBlock("meta", $context, $blocks);
        yield "
<meta name=\"keywords\" content=\"recrutement, formation, insertion professionnelle, LEMETIER, DAIP, E2C, CQP, Yamoussoukro, Bouaké, 2026\">
<meta name=\"description\" content=\"Formation gratuite de ";
        // line 17
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "places", [], "any", false, false, false, 17), "html", null, true);
        yield " jeunes aux métiers des services d’aide à la personne, à Yamoussoukro et Bouaké.";
        if ((($tmp = ($context["periode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " Inscriptions au lycée du ";
            yield (string) $this->escaper->escape(($context["periode"] ?? null), "html", null, true);
            yield ".";
        }
        yield "\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        yield "<script>
    // Animations autorisées : on masque ce que GSAP révélera. Filet de sécurité : tout réapparaît si le script ne se charge pas.
    if (!window.matchMedia(\x27(prefers-reduced-motion: reduce)\x27).matches) {
        document.documentElement.classList.add(\x27motion\x27);
        setTimeout(function () { if (!window.__homeMotion) document.documentElement.classList.remove(\x27motion\x27); }, 3000);
    }
</script>
";
        // line 28
        yield (string) $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        yield "<div class=\"home text-slate-900\">

";
        // line 36
        yield "<section data-hero class=\"relative overflow-hidden text-white bg-gradient-to-br from-indigo-700 via-purple-700 to-blue-700\">
    <div aria-hidden=\"true\" data-blob=\"a\" class=\"absolute -top-40 -right-32 w-[26rem] h-[26rem] rounded-full bg-purple-400 opacity-25 blur-[70px]\"></div>
    <div aria-hidden=\"true\" data-blob=\"b\" class=\"absolute -bottom-44 -left-36 w-[28rem] h-[28rem] rounded-full bg-indigo-400 opacity-25 blur-[80px]\"></div>

    <div class=\"relative max-w-5xl px-5 pt-12 mx-auto text-center pb-14 sm:pt-20 sm:pb-20\">
        <h1 data-hero-title class=\"text-[2.35rem] font-extrabold leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl text-balance\">
            Formation de ";
        // line 42
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "places", [], "any", false, false, false, 42), "html", null, true);
        yield " jeunes
            <span class=\"block text-violet-200\">aux métiers des services d’aide à la personne</span>
        </h1>

        <p data-hero-fade class=\"max-w-2xl mx-auto mt-6 text-lg text-indigo-100 sm:text-xl\">
            Une formation gratuite de 3 mois au Certificat de Qualification Professionnelle (CQP), puis un placement en entreprise. 
        </p>

        <div data-hero-fade class=\"flex flex-wrap justify-center gap-3.5 mt-9\">
            <a href=\"#ou-sinscrire\" class=\"inline-flex items-center justify-center w-full max-w-[20rem] sm:w-auto sm:max-w-none gap-2.5 min-h-[56px] px-7 text-xl font-bold text-white rounded-2xl bg-gradient-to-r from-orange-300 to-orange-500 shadow-[0_14px_28px_-12px_rgba(194,65,12,0.7)] transition hover:from-orange-400 hover:to-orange-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-orange-300\">
                <i class=\"fas fa-location-dot\" aria-hidden=\"true\"></i>
                Où m’inscrire ?
            </a>
            <a href=\"";
        // line 55
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/COMMUNIQUE DE RECRUTEMENT.pdf"), "html", null, true);
        yield "\" download=\"communique-recrutement-lemetier-2026.pdf\"
               class=\"inline-flex items-center justify-center w-full max-w-[20rem] sm:w-auto sm:max-w-none gap-2.5 min-h-[56px] px-6 font-semibold text-white border-[1.5px] border-white/40 rounded-2xl bg-white/10 transition hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-orange-300\">
                <i class=\"fas fa-download\" aria-hidden=\"true\"></i>
                Télécharger le communiqué
            </a>
        </div>

        <dl data-hero-fade class=\"grid max-w-xl grid-cols-3 gap-3 mx-auto mt-10 sm:mt-12\">
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["valeur" => CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["stats"] ?? null), "metiers", [], "any", false, false, false, 64), "label" => "Métiers"], ["valeur" => CoreExtension::getAttribute($this->env, $this->source,         // line 65
($context["stats"] ?? null), "etablissements", [], "any", false, false, false, 65), "label" => "Établissements"], ["valeur" => CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["stats"] ?? null), "places", [], "any", false, false, false, 66), "label" => "Places"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["compteur"]) {
            // line 68
            yield "                <div class=\"flex flex-col-reverse px-2 py-4 border rounded-2xl bg-white/[0.08] border-white/15\">
                    <dt class=\"mt-1.5 text-[13px] text-indigo-200\">";
            // line 69
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compteur"], "label", [], "any", false, false, false, 69), "html", null, true);
            yield "</dt>
                    <dd class=\"text-3xl font-extrabold leading-none tabular-nums sm:text-4xl\" data-count=\"";
            // line 70
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compteur"], "valeur", [], "any", false, false, false, 70), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compteur"], "valeur", [], "any", false, false, false, 70), "html", null, true);
            yield "</dd>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['compteur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 73
        yield "        </dl>
    </div>
</section>

";
        // line 78
        yield "<section id=\"presentation\" class=\"bg-white overflow-clip\" data-loops>
    <div class=\"flex flex-wrap items-center max-w-6xl px-6 py-20 mx-auto gap-x-[72px] gap-y-16 sm:py-28\">
        <div class=\"flex-[1_1_28rem] min-w-0\" data-reveal=\"left\">
            <h2 class=\"text-3xl font-extrabold leading-tight tracking-tight sm:text-4xl\">Une formation-insertion gratuite, portée par l’État</h2>
            <p class=\"max-w-prose mt-5 text-lg text-slate-700\">
                Le Ministère délégué chargé de l’Enseignement Technique, à travers la Direction de l’Apprentissage et de l’Insertion Professionnelle (DAIP) et l’École de la 2ème Chance (E2C), recrute avec le Groupe LEMETIER ";
        // line 83
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "places", [], "any", false, false, false, 83), "html", null, true);
        yield " jeunes pour une formation au CQP dans les métiers des services d’aide à la personne et aux entreprises.
            </p>
            <p class=\"mt-6 mb-3 font-bold\">Pour t’inscrire, tu dois :</p>
            <ul class=\"grid gap-3\" data-reveal-stagger>
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["icone" => "fa-user", "ton" => "bg-purple-100 text-purple-700", "texte" => "Avoir de 18 à 40 ans"], ["icone" => "fa-book-open", "ton" => "bg-indigo-100 text-indigo-700", "texte" => "Savoir lire et écrire"], ["icone" => "fa-flag", "ton" => "bg-pink-100 text-pink-700", "texte" => "Être de nationalité ivoirienne"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 92
            yield "                    <li class=\"flex items-center gap-3.5 req-item\">
                        <span class=\"flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl ";
            // line 93
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "ton", [], "any", false, false, false, 93), "html", null, true);
            yield "\" aria-hidden=\"true\"><i class=\"fas ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "icone", [], "any", false, false, false, 93), "html", null, true);
            yield "\"></i></span>
                        <span class=\"text-lg font-bold\">";
            // line 94
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "texte", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['condition'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 97
        yield "            </ul>
        </div>

        <div class=\"relative isolate flex-[1_1_22rem] min-w-0\" data-reveal=\"right\">
            <div aria-hidden=\"true\" class=\"deco-blob absolute -z-10 top-7 -right-7 -bottom-7 left-7 opacity-90 bg-[linear-gradient(135deg,#4338CA_0%,#7E22CE_60%,#EA580C_130%)]\"></div>
            <div aria-hidden=\"true\" class=\"deco-dots absolute -z-10 -top-10 -left-10 w-[168px] h-[168px] bg-[radial-gradient(#A5B4FC_2px,transparent_2.5px)] [background-size:18px_18px]\"></div>
            <div aria-hidden=\"true\" class=\"deco-spin absolute -z-10 -top-12 -right-11 w-[132px] h-[132px] rounded-full border-2 border-dashed border-orange-500\"></div>
            <div aria-hidden=\"true\" class=\"deco-float-b absolute z-[3] -right-3.5 bottom-12 w-[22px] h-[22px] rounded-full bg-orange-500 shadow-[0_0_0_6px_rgba(249,115,22,0.2)]\"></div>

            <div class=\"relative overflow-hidden img-zoom rounded-3xl shadow-[0_34px_64px_-30px_rgba(30,27,75,0.6)]\">
                <img src=\"";
        // line 107
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/image-presentation.webp"), "html", null, true);
        yield "\" width=\"1280\" height=\"720\" loading=\"lazy\" decoding=\"async\"
                     alt=\"Jeunes professionnels en tenue de travail\"
                     class=\"block object-cover w-full aspect-[4/3]\">
            </div>

            <div class=\"absolute z-[2] -top-5 -left-5\" data-reveal=\"pop\">
                <p class=\"deco-float-b flex items-center gap-2.5 px-4 py-2.5 bg-white rounded-[14px] shadow-[0_16px_32px_-16px_rgba(15,23,42,0.35)]\">
                    <strong class=\"text-2xl leading-none text-indigo-700 tabular-nums\">";
        // line 114
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "places", [], "any", false, false, false, 114), "html", null, true);
        yield "</strong>
                    <span class=\"text-[13px] font-semibold leading-tight text-slate-600\">jeunes<br>à former</span>
                </p>
            </div>
            <div class=\"absolute z-[2] -left-3 -bottom-[22px]\" data-reveal=\"pop\">
                <div class=\"deco-float-a flex items-center gap-3 px-[18px] py-3 bg-white rounded-2xl shadow-[0_16px_32px_-16px_rgba(15,23,42,0.35)]\">
                    <span class=\"flex items-center justify-center w-10 h-10 text-green-700 bg-green-100 rounded-full\" aria-hidden=\"true\"><i class=\"fas fa-check\"></i></span>
                    <span><strong class=\"block text-lg text-green-700\">Gratuit</strong><span class=\"text-[13px] text-slate-600\">inscription et formation</span></span>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 129
        yield "<section class=\"bg-[#faf8f3]\">
    <div class=\"max-w-6xl px-5 py-16 mx-auto sm:py-24\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl font-extrabold leading-tight tracking-tight sm:text-5xl text-slate-900\">Des parcours de formation <span class=\"text-orange-600\">pour toi</span></h2>
            <p class=\"max-w-xl mx-auto mt-3 text-lg text-slate-600\">Tu te reconnais dans l’un de ces profils ? Cette formation est faite pour toi.</p>
        </div>

        <ul class=\"grid gap-5 mt-11 md:grid-cols-3\" data-reveal-list>
            ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["icone" => "fa-star", "ton" => "bg-orange-100 text-orange-700", "texte" => "Tu as un talent"], ["icone" => "fa-heart", "ton" => "bg-pink-100 text-pink-700", "texte" => "Tu as une passion"], ["icone" => "fa-briefcase", "ton" => "bg-indigo-100 text-indigo-700", "texte" => "Tu veux te former et travailler dans les services d’aide à la personne"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
            // line 142
            yield "                <li data-reveal-item class=\"flex flex-col gap-[18px] p-7 bg-white border rounded-[20px] border-[#F1E7D8] shadow-[0_14px_30px_-24px_rgba(15,23,42,0.35)]\">
                    <span class=\"flex items-center justify-center w-14 h-14 text-2xl rounded-2xl ";
            // line 143
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profil"], "ton", [], "any", false, false, false, 143), "html", null, true);
            yield "\" aria-hidden=\"true\"><i class=\"fas ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profil"], "icone", [], "any", false, false, false, 143), "html", null, true);
            yield "\"></i></span>
                    <span class=\"text-[22px] font-extrabold leading-snug\">";
            // line 144
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profil"], "texte", [], "any", false, false, false, 144), "html", null, true);
            yield "</span>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['profil'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 147
        yield "        </ul>

        <div class=\"flex flex-wrap items-center justify-between gap-x-10 gap-y-6 p-6 mt-7 text-white rounded-3xl sm:p-9 bg-gradient-to-br from-indigo-700 to-purple-700\" data-reveal=\"up\">
            <div class=\"flex-[1_1_26rem] min-w-0\">
                <p class=\"text-xl font-bold leading-snug sm:text-2xl\"><strong class=\"font-extrabold\">Le Groupe LEMETIER</strong> t’aide à te former, à décrocher un contrat et à construire ton avenir professionnel.</p>
                <ul class=\"flex flex-wrap gap-2 mt-[18px]\" aria-label=\"Types de contrat\">
                    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Stage", "Intérim", "CDI"]);
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 154
            yield "                        <li class=\"px-3.5 py-1.5 text-[15px] font-bold rounded-full bg-white/[0.16]\">";
            yield (string) $this->escaper->escape($context["contrat"], "html", null, true);
            yield "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 156
        yield "                    <li class=\"px-3.5 py-1.5 text-[15px] font-bold rounded-full bg-white/[0.16]\"><span aria-hidden=\"true\">…</span><span class=\"sr-only\">et d’autres contrats</span></li>
                </ul>
            </div>
            <p class=\"flex items-center flex-shrink-0 gap-3 px-5 py-3.5 bg-white rounded-2xl text-slate-900\">
                <span class=\"flex items-center justify-center w-10 h-10 text-green-700 bg-green-100 rounded-full\" aria-hidden=\"true\"><i class=\"fas fa-check\"></i></span>
                <span><strong class=\"block text-lg text-green-700\">100 % gratuit</strong><span class=\"text-sm text-slate-600\">inscription et formation</span></span>
            </p>
        </div>
    </div>
</section>

";
        // line 168
        yield "<section id=\"ou-sinscrire\" class=\"border-y border-indigo-100 bg-gradient-to-br from-indigo-50 to-purple-50 scroll-mt-24\">
    <div class=\"max-w-6xl px-5 py-16 mx-auto sm:py-24\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl font-extrabold leading-tight tracking-tight sm:text-4xl\">Présente-toi dans le lycée de ton métier</h2>
        </div>

        <div class=\"grid gap-6 mt-10 md:grid-cols-2 md:items-start\" data-reveal-list>
            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lycees"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lycee"]) {
            // line 176
            yield "                <article data-reveal-item class=\"flex flex-col overflow-hidden bg-white border border-indigo-100 rounded-[20px] shadow-[0_14px_32px_-22px_rgba(67,56,202,0.45)]\">
                    <div class=\"flex items-center justify-between gap-3.5 md:min-h-[112px] px-[22px] py-[18px] text-white ";
            // line 177
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 177) % 2 != 0)) ? ("bg-gradient-to-br from-indigo-700 to-violet-700") : ("bg-gradient-to-br from-purple-700 to-blue-700"));
            yield "\">
                        <div class=\"min-w-0\">
                            <h3 class=\"flex items-center gap-2 text-3xl font-extrabold leading-none tracking-tight\">
                                <i class=\"flex-shrink-0 text-xl fas fa-location-dot\" aria-hidden=\"true\"></i>";
            // line 180
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "ville", [], "any", false, false, false, 180), "html", null, true);
            yield "
                            </h3>
                            <p class=\"mt-1.5 text-sm font-semibold leading-snug text-white/90\">";
            // line 182
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "nom", [], "any", false, false, false, 182), "html", null, true);
            yield " (";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "code", [], "any", false, false, false, 182), "html", null, true);
            yield ")</p>
                        </div>
                        <p class=\"flex-shrink-0 px-3 py-2 text-center bg-white rounded-[14px]\">
                            <strong class=\"block text-2xl leading-none text-indigo-700 tabular-nums\">";
            // line 185
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "places", [], "any", false, false, false, 185), "html", null, true);
            yield "</strong>
                            <span class=\"text-xs font-bold text-slate-600\">places</span>
                        </p>
                    </div>
                    <ul class=\"flex flex-wrap gap-2 px-[22px] pt-4 pb-5\">
                        ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "metiers", [], "any", false, false, false, 190));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 191
                yield "                            <li class=\"inline-flex items-center gap-2 py-1.5 pl-3 pr-1.5 text-[15px] font-bold rounded-full bg-indigo-50 text-indigo-950\">
                                ";
                // line 192
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "nom", [], "any", false, false, false, 192), "html", null, true);
                yield "
                                <span class=\"px-2.5 text-sm bg-white rounded-full text-indigo-700 tabular-nums\">";
                // line 193
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "places", [], "any", false, false, false, 193), "html", null, true);
                yield "</span>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 196
            yield "                    </ul>
                </article>
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
        unset($context['_seq'], $context['_key'], $context['lycee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 199
        yield "        </div>
    </div>
</section>

";
        // line 204
        yield "<section id=\"metiers\" data-metiers class=\"text-white bg-gradient-to-br from-indigo-700 via-purple-700 to-blue-700\">
    <div class=\"max-w-6xl px-5 py-16 mx-auto sm:py-24\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl font-extrabold leading-tight tracking-tight sm:text-4xl\">Métiers et places disponibles</h2>
            ";
        // line 208
        $context["textes"] = ["tous" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "places", [], "any", false, false, false, 208) . " places dans ") . CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "metiers", [], "any", false, false, false, 208)) . " métiers, réparties entre Yamoussoukro et Bouaké.")];
        // line 209
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lycees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lycee"]) {
            // line 210
            yield "                ";
            $context["textes"] = Twig\Extension\CoreExtension::merge(($context["textes"] ?? null), [ (string)CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "code", [], "any", false, false, false, 210) => (((((((CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "nom", [], "any", false, false, false, 210) . " (") . CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "code", [], "any", false, false, false, 210)) . ") : ") . CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "places", [], "any", false, false, false, 210)) . " places dans ") . Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "metiers", [], "any", false, false, false, 210))) . " métiers.")]);
            // line 211
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lycee'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 212
        yield "            <p class=\"mt-3 text-indigo-100\" data-filtre-label data-textes=\"";
        yield (string) $this->escaper->escape(json_encode(($context["textes"] ?? null)), "html", null, true);
        yield "\" aria-live=\"polite\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["textes"] ?? null), "tous", [], "any", false, false, false, 212), "html", null, true);
        yield "</p>
        </div>

        ";
        // line 216
        yield "        ";
        $context["filtre_class"] = "flex flex-col items-center justify-center min-h-[52px] px-2 sm:px-4 sm:flex-row sm:gap-1.5 sm:min-h-[44px] rounded-xl text-sm sm:text-[15px] font-bold leading-tight transition-colors duration-200 text-white aria-pressed:bg-white aria-pressed:text-indigo-700 hover:bg-white/10 aria-pressed:hover:bg-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-300";
        // line 217
        yield "        <div data-filtre-group hidden role=\"group\" aria-label=\"Filtrer les métiers par lycée\"
             class=\"grid grid-cols-3 sm:flex sm:flex-wrap sm:justify-center w-full sm:w-fit max-w-md sm:max-w-full gap-1.5 sm:gap-2 p-1.5 mx-auto mt-7 rounded-2xl bg-slate-900/20\">
            <button type=\"button\" data-filtre=\"tous\" aria-pressed=\"true\" class=\"";
        // line 219
        yield (string) $this->escaper->escape(($context["filtre_class"] ?? null), "html", null, true);
        yield "\">
                <span><span class=\"sm:hidden\">Tous</span><span class=\"hidden sm:inline\">Tous les lycées</span></span>
                <span class=\"text-xs font-semibold opacity-75 sm:text-[15px] tabular-nums\">";
        // line 221
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "places", [], "any", false, false, false, 221), "html", null, true);
        yield "</span>
            </button>
            ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lycees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lycee"]) {
            // line 224
            yield "                <button type=\"button\" data-filtre=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "code", [], "any", false, false, false, 224), "html", null, true);
            yield "\" aria-pressed=\"false\" class=\"";
            yield (string) $this->escaper->escape(($context["filtre_class"] ?? null), "html", null, true);
            yield "\">
                    <span>";
            // line 225
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "ville", [], "any", false, false, false, 225), "html", null, true);
            yield "</span>
                    <span class=\"text-xs font-semibold opacity-75 sm:text-[15px] tabular-nums\">";
            // line 226
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lycee"], "places", [], "any", false, false, false, 226), "html", null, true);
            yield "</span>
                </button>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lycee'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 229
        yield "        </div>

        ";
        // line 231
        yield from $this->load("partials/_offres_metiers_cards.html.twig", 231)->unwrap()->yield(CoreExtension::merge($context, ["offresMetiers" => ($context["offresMetiers"] ?? null)]));
        // line 232
        yield "
        <p class=\"mt-8 text-xl font-extrabold text-center\">Total : ";
        // line 233
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "places", [], "any", false, false, false, 233), "html", null, true);
        yield " places</p>
    </div>
</section>

";
        // line 238
        $context["etapes"] = [["titre" => "Inscription au lycée", "texte" => (((($tmp =         // line 239
($context["periode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("Du " . ($context["periode"] ?? null)) . ", au LPH ou au LPMMS.")) : ("Au LPH ou au LPMMS, avec ton dossier complet."))], ["titre" => "Analyse des dossiers", "texte" => "Vérification des pièces et des conditions."], ["titre" => "Entretien de sélection", "texte" => "Convocation dans ton espace candidat."], ["titre" => "Visite médicale", "texte" => "Convocation dans ton espace candidat."], ["titre" => "Résultats", "texte" => "Publiés sur ce site, dans ton espace candidat."]];
        // line 245
        $context["progression"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["parcours"] ?? null), "en_cours", [], "any", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source,         // line 246
($context["parcours"] ?? null), "en_cours", [], "any", false, false, false, 246) - 1) + 0.5) / (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["etapes"] ?? null)) - 1))) : (((CoreExtension::getAttribute($this->env, $this->source,         // line 247
($context["parcours"] ?? null), "terminees", [], "any", false, false, false, 247) - 1) / (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["etapes"] ?? null)) - 1))));
        // line 248
        yield "<section class=\"border-y border-green-200 bg-gradient-to-br from-green-50 to-emerald-50\">
    <div class=\"max-w-6xl px-5 py-16 mx-auto sm:py-24\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl font-extrabold leading-tight tracking-tight sm:text-4xl\">Ton parcours, étape par étape</h2>
            <p class=\"max-w-2xl mx-auto mt-3 text-slate-600\">Après l’inscription, la sélection se fait en trois étapes. Tes convocations et tes résultats apparaissent dans ton espace candidat.</p>
        </div>

        <div class=\"relative mt-12\" data-parcours data-progress=\"";
        // line 255
        yield (string) $this->escaper->escape(($context["progression"] ?? null), "html", null, true);
        yield "\" style=\"--progress: ";
        yield (string) $this->escaper->escape(($context["progression"] ?? null), "html", null, true);
        yield "\">
            <div class=\"parcours-track\" aria-hidden=\"true\"></div>
            <div class=\"parcours-fill\" data-parcours-fill aria-hidden=\"true\"></div>
            <ol class=\"relative grid gap-8 md:grid-cols-5 md:gap-4\">
                ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["etapes"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 260
            yield "                    ";
            $context["courante"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 260) == CoreExtension::getAttribute($this->env, $this->source, ($context["parcours"] ?? null), "en_cours", [], "any", false, false, false, 260));
            // line 261
            yield "                    ";
            $context["terminee"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 261) <= CoreExtension::getAttribute($this->env, $this->source, ($context["parcours"] ?? null), "terminees", [], "any", false, false, false, 261));
            // line 262
            yield "                    <li class=\"flex gap-4 md:flex-col md:gap-2.5\">
                        <span data-parcours-dot ";
            // line 263
            if (((($tmp = ($context["terminee"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["courante"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                yield "data-current";
            }
            // line 264
            yield "                              class=\"parcours-dot flex items-center justify-center flex-shrink-0 w-[52px] h-[52px] text-lg font-extrabold bg-white border-2 border-green-100 rounded-full text-slate-600\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 264), "html", null, true);
            yield "</span>
                        <div class=\"md:mt-1\">
                            <h3 class=\"text-lg font-extrabold\">";
            // line 266
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "titre", [], "any", false, false, false, 266), "html", null, true);
            yield "</h3>
                            <p class=\"mt-1 text-[15px] text-slate-600\">";
            // line 267
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "texte", [], "any", false, false, false, 267), "html", null, true);
            yield "</p>
                            ";
            // line 268
            if ((($tmp = ($context["courante"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 269
                yield "                                <p class=\"inline-flex items-center gap-1.5 px-2.5 py-0.5 mt-2.5 text-[13px] font-bold text-green-800 bg-green-100 rounded-full\">
                                    <span class=\"block w-[7px] h-[7px] bg-green-500 rounded-full pulse-dot\" aria-hidden=\"true\"></span>En cours
                                </p>
                            ";
            } elseif ((($tmp =             // line 272
($context["terminee"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 273
                yield "                                <p class=\"inline-flex px-2.5 py-0.5 mt-2.5 text-[13px] font-bold rounded-full text-slate-600 bg-slate-100\">Terminée</p>
                            ";
            }
            // line 275
            yield "                        </div>
                    </li>
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
        unset($context['_seq'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 278
        yield "            </ol>
        </div>
    </div>
</section>

";
        // line 284
        yield "<section class=\"bg-white\">
    <div class=\"max-w-5xl px-5 py-16 mx-auto sm:py-24\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl font-extrabold leading-tight tracking-tight sm:text-4xl\">Les 4 pièces à apporter au lycée</h2>
            <p class=\"max-w-2xl mx-auto mt-3 text-slate-600\">L’agent du lycée les numérise et les joint à ta candidature.</p>
        </div>
        <ol class=\"grid gap-4 mx-auto mt-10 max-w-[902px] md:grid-cols-2\" data-reveal-list>
            ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["icone" => "fa-file-lines", "ton" => "bg-indigo-100 text-indigo-700", "texte" => "L’extrait d’acte de naissance ou le jugement supplétif"], ["icone" => "fa-id-card", "ton" => "bg-purple-100 text-purple-700", "texte" => "La photocopie de la CNI ou de l’attestation d’identité"], ["icone" => "fa-camera", "ton" => "bg-pink-100 text-pink-700", "texte" => "Une photo d’identité en couleur"], ["icone" => "fa-notes-medical", "ton" => "bg-green-100 text-green-700", "texte" => "Une copie de la carte CMU (Couverture Maladie Universelle)"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
            // line 297
            yield "                <li data-reveal-item class=\"flex items-center gap-4 p-5 border rounded-[18px] bg-slate-50 border-slate-200\">
                    <span class=\"flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl rounded-2xl ";
            // line 298
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["piece"], "ton", [], "any", false, false, false, 298), "html", null, true);
            yield "\" aria-hidden=\"true\"><i class=\"fas ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["piece"], "icone", [], "any", false, false, false, 298), "html", null, true);
            yield "\"></i></span>
                    <span class=\"text-[17px] font-bold leading-snug\">";
            // line 299
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["piece"], "texte", [], "any", false, false, false, 299), "html", null, true);
            yield "</span>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['piece'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 302
        yield "        </ol>
    </div>
</section>

";
        // line 307
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["partenaires"] ?? null))) {
            // line 308
            yield "<section class=\"border-t bg-slate-50 border-slate-200\">
    <div class=\"max-w-5xl px-5 py-14 mx-auto text-center\">
        <h2 class=\"text-2xl font-extrabold sm:text-3xl\">Nos partenaires institutionnels et techniques</h2>
        <p class=\"max-w-2xl mx-auto mt-2.5 text-slate-600\">Ils accompagnent le projet pendant toute la formation et l’insertion des jeunes.</p>
        <ul class=\"flex flex-wrap justify-center gap-5 mt-7\">
            ";
            // line 313
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partenaires"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
                // line 314
                yield "                <li>
                    <a href=\"";
                // line 315
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "lien", [], "any", false, false, false, 315), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\"
                       class=\"flex flex-col items-center gap-2.5 px-8 py-5 bg-white border rounded-[18px] border-slate-200 card-lift shadow-[0_10px_24px_-18px_rgba(15,23,42,0.4)] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-indigo-500\">
                        <img src=\"";
                // line 317
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "image", [], "any", false, false, false, 317)), "html", null, true);
                yield "\" alt=\"\" width=\"120\" height=\"120\" loading=\"lazy\" class=\"object-contain w-28 h-28\">
                        <span class=\"font-bold text-slate-900\">";
                // line 318
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partenaire"], "nom", [], "any", false, false, false, 318), "html", null, true);
                yield "</span>
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['partenaire'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 322
            yield "        </ul>
    </div>
</section>
";
        }
        // line 326
        yield "
";
        // line 328
        yield "<section class=\"text-white bg-gradient-to-r from-indigo-600 to-purple-600\">
    <div class=\"max-w-5xl px-5 py-14 mx-auto text-center\">
        <h2 class=\"text-2xl font-extrabold sm:text-3xl\">Une question sur le recrutement ?</h2>
        <p class=\"mt-2.5 text-indigo-100\">Infoline de la DAIP. L’inscription est gratuite : personne ne doit te demander d’argent.</p>
        <div class=\"flex flex-wrap justify-center gap-3 mt-6\">
            ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["href" => "tel:+2250708114259", "icone" => "fa-phone", "texte" => "07 08 11 42 59"], ["href" => "tel:+2250708417779", "icone" => "fa-phone", "texte" => "07 08 41 77 79"], ["href" => "https://www.daip.ci", "icone" => "fa-globe", "texte" => "www.daip.ci"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 338
            yield "                <a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lien"], "href", [], "any", false, false, false, 338), "html", null, true);
            yield "\" ";
            if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["lien"], "href", [], "any", false, false, false, 338)) && is_string($_v5 = "http") && str_starts_with($_v4, $_v5))) {
                yield "target=\"_blank\" rel=\"noopener noreferrer\"";
            }
            // line 339
            yield "                   class=\"inline-flex items-center gap-2.5 min-h-[52px] px-5 text-lg font-bold border rounded-2xl bg-white/[0.12] border-white/30 tabular-nums transition hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-orange-300\">
                    <i class=\"fas ";
            // line 340
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lien"], "icone", [], "any", false, false, false, 340), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lien"], "texte", [], "any", false, false, false, 340), "html", null, true);
            yield "
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lien'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 343
        yield "        </div>
    </div>
</section>

</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 350
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 351
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        // line 352
        yield (string) $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("home");
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
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
        return array (  826 => 352,  822 => 351,  812 => 350,  799 => 343,  787 => 340,  784 => 339,  777 => 338,  773 => 333,  766 => 328,  763 => 326,  757 => 322,  746 => 318,  742 => 317,  737 => 315,  734 => 314,  730 => 313,  723 => 308,  721 => 307,  715 => 302,  705 => 299,  699 => 298,  696 => 297,  692 => 291,  683 => 284,  676 => 278,  659 => 275,  655 => 273,  653 => 272,  648 => 269,  646 => 268,  642 => 267,  638 => 266,  632 => 264,  628 => 263,  625 => 262,  622 => 261,  619 => 260,  602 => 259,  593 => 255,  584 => 248,  582 => 247,  581 => 246,  580 => 245,  578 => 239,  577 => 238,  570 => 233,  567 => 232,  565 => 231,  561 => 229,  551 => 226,  547 => 225,  540 => 224,  536 => 223,  531 => 221,  526 => 219,  522 => 217,  519 => 216,  510 => 212,  503 => 211,  500 => 210,  495 => 209,  493 => 208,  487 => 204,  481 => 199,  464 => 196,  454 => 193,  450 => 192,  447 => 191,  443 => 190,  435 => 185,  427 => 182,  422 => 180,  416 => 177,  413 => 176,  396 => 175,  387 => 168,  374 => 156,  364 => 154,  360 => 153,  352 => 147,  342 => 144,  336 => 143,  333 => 142,  329 => 137,  319 => 129,  302 => 114,  292 => 107,  280 => 97,  270 => 94,  264 => 93,  261 => 92,  257 => 87,  250 => 83,  243 => 78,  237 => 73,  225 => 70,  221 => 69,  218 => 68,  215 => 66,  214 => 65,  213 => 64,  211 => 63,  200 => 55,  184 => 42,  176 => 36,  172 => 32,  162 => 31,  152 => 28,  143 => 21,  133 => 20,  117 => 17,  112 => 15,  102 => 14,  85 => 3,  77 => 1,  73 => 11,  69 => 9,  66 => 8,  63 => 7,  61 => 6,  59 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\index.html.twig");
    }
}
