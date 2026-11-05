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

/* candidature/inscription_fermee.html.twig */
class __TwigTemplate_bc062125273694749df953849daa9731 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/inscription_fermee.html.twig"));

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

        yield "Inscription au lycée — Recrutement E2C LEMETIER 2026";
        
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
        yield from $this->load("partials/_communique_head.html.twig", 6)->unwrap()->yield($context);
        
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
        yield "<div class=\"communique bg-white text-ci-encre\">
    <div aria-hidden=\"true\" class=\"flex h-1.5\">
        <div class=\"flex-1 bg-ci-orange\"></div>
        <div class=\"flex-1 bg-white\"></div>
        <div class=\"flex-1 bg-ci-vert\"></div>
    </div>

    <section class=\"max-w-3xl px-6 py-16 mx-auto sm:py-20\">
        <h1 class=\"text-4xl font-extrabold leading-tight font-document sm:text-5xl\">Les inscriptions se font au lycée</h1>
        <p class=\"mt-6 text-lg leading-relaxed text-ci-ardoise\">
            Pour ce recrutement, tu ne crées pas ton compte toi-même. Présente-toi avec ton dossier complet
            au lycée qui forme au métier que tu veux : l\x27agent du lycée enregistre ta candidature en ligne
            et te remet tes identifiants pour suivre ton dossier.
        </p>

        <div class=\"grid gap-0 mt-10 border-t-[3px] border-b border-ci-encre sm:grid-cols-2\">
            <div class=\"py-5 pr-6 border-b sm:border-b-0 sm:border-r border-ci-filet\">
                <p class=\"text-xs font-bold tracking-wider uppercase text-ci-gris\">Yamoussoukro</p>
                <p class=\"mt-1 text-xl font-bold font-document\">Lycée Professionnel Hôtelier (LPH)</p>
            </div>
            <div class=\"py-5 sm:pl-6\">
                <p class=\"text-xs font-bold tracking-wider uppercase text-ci-gris\">Bouaké</p>
                <p class=\"mt-1 text-xl font-bold font-document\">Lycée Professionnel des Métiers de la Mode et du Social (LPMMS)</p>
            </div>
        </div>

        <div class=\"flex flex-wrap items-center gap-x-7 gap-y-4 mt-10\">
            <a href=\"";
        // line 37
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#ou-sinscrire\"
               class=\"inline-flex items-center gap-2.5 min-h-[52px] px-7 rounded-md bg-ci-orange text-ci-encre text-lg font-bold no-underline shadow-[0_6px_16px_-6px_rgba(247,127,0,0.55)] hover:brightness-95\">
                <i class=\"fas fa-location-dot\" aria-hidden=\"true\"></i>
                Où m\x27inscrire ?
            </a>
            <a href=\"";
        // line 42
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-semibold underline text-ci-foret underline-offset-4 hover:text-ci-foret-fonce\">
                Mon lycée m\x27a déjà inscrit : me connecter
            </a>
        </div>

        <p class=\"pt-6 mt-12 text-base border-t text-ci-ardoise border-ci-filet\">
            Une question ? Infoline DAIP :
            <a href=\"tel:+2250708114259\" class=\"font-semibold num text-ci-encre\">07 08 11 42 59</a> ·
            <a href=\"tel:+2250708417779\" class=\"font-semibold num text-ci-encre\">07 08 41 77 79</a>.
            L\x27inscription est gratuite : personne ne doit te demander d\x27argent.
        </p>
    </section>
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
        return "candidature/inscription_fermee.html.twig";
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
        return array (  144 => 42,  136 => 37,  107 => 10,  97 => 9,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/inscription_fermee.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\inscription_fermee.html.twig");
    }
}
