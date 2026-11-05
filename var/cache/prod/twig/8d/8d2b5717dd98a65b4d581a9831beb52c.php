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

/* security/forgot_password.html.twig */
class __TwigTemplate_9492e6e5dc87e516f8c92ac407b9aabb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgot_password.html.twig"));

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

        yield "Mot de passe oublié | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
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
        yield "<div class=\"container max-w-md px-4 py-16 mx-auto\">
    <div class=\"p-8 bg-white border shadow-sm rounded-2xl border-slate-200\">
        <h1 class=\"text-2xl font-bold text-slate-900\">Mot de passe oublié</h1>
        <p class=\"mt-3 text-slate-600\">Pour protéger les dossiers, le mot de passe ne se réinitialise pas en ligne.</p>

        <ul class=\"mt-5 space-y-3 text-slate-700\">
            <li class=\"flex gap-3\">
                <i class=\"mt-1 text-indigo-500 fas fa-user-graduate\" aria-hidden=\"true\"></i>
                <span><strong>Candidat :</strong> adresse-toi à ton lycée, avec ta pièce d\x27identité. L\x27agent te remettra un nouveau mot de passe.</span>
            </li>
            <li class=\"flex gap-3\">
                <i class=\"mt-1 text-indigo-500 fas fa-school\" aria-hidden=\"true\"></i>
                <span><strong>Agent d\x27établissement :</strong> contactez l\x27administrateur de la plateforme.</span>
            </li>
        </ul>

        <p class=\"pt-5 mt-6 text-sm border-t text-slate-600 border-slate-200\">
            Infoline DAIP :
            <a href=\"tel:+2250708114259\" class=\"font-semibold text-slate-900\">07 08 11 42 59</a> ·
            <a href=\"tel:+2250708417779\" class=\"font-semibold text-slate-900\">07 08 41 77 79</a>
        </p>

        <a href=\"";
        // line 28
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"inline-flex items-center gap-2 mt-6 font-semibold text-indigo-700 hover:text-indigo-900\">
            <i class=\"fas fa-arrow-left\" aria-hidden=\"true\"></i> Retour à la connexion
        </a>
    </div>
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
        return "security/forgot_password.html.twig";
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
        return array (  112 => 28,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/forgot_password.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\security\\forgot_password.html.twig");
    }
}
