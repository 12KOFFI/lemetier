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

/* header.html.twig */
class __TwigTemplate_7a16ab3c092a01c2631d3300a0a349a0 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        yield "<header class=\"fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-gray-100 bg-white/80 backdrop-blur-lg\" 
        x-data=\"{ scrolled: false, mobileMenu: false }\" 
        x-init=\"() => { }\"
        @scroll.window=\"scrolled = window.scrollY > 50\">
    <div class=\"container px-4 mx-auto\">
        <div class=\"flex items-center justify-between h-20\">
            <!-- Logo -->
            <a href=\"";
        // line 8
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-2.5 group sm:gap-3\" aria-label=\"Accueil — DAIP et Groupe LEMETIER\">
                <span class=\"flex items-center h-14 px-2 py-1.5 bg-white border border-slate-200 rounded-xl shadow-sm transition-colors duration-200 group-hover:border-indigo-200\">
                    <img src=\"";
        // line 10
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo.png"), "html", null, true);
        yield "\" class=\"object-contain w-auto h-full min-w-0\" width=\"150\" height=\"43\" alt=\"DAIP\">
                </span>
                <span class=\"w-px h-8 bg-slate-200\" aria-hidden=\"true\"></span>
                <span class=\"flex items-center h-14 px-2 py-1.5 bg-white border border-slate-200 rounded-xl shadow-sm transition-colors duration-200 group-hover:border-indigo-200\">
                    <img src=\"";
        // line 14
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo-lemetier-nav.webp"), "html", null, true);
        yield "\" class=\"w-auto h-full\" width=\"250\" height=\"200\" alt=\"Groupe LEMETIER\">
                </span>
            </a>
            
            <!-- Navigation Desktop -->
            <nav class=\"items-center hidden space-x-8 lg:flex\">
                <a href=\"";
        // line 20
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-gray-700 hover:text-primary-600 font-medium transition ";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 20) == "app_home")) ? ("text-primary-600") : (""));
        yield "\">
                    Accueil
                </a>
                <a href=\"";
        // line 23
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#metiers\" class=\"text-gray-700 hover:text-primary-600 font-medium transition\">
                    Métiers
                </a>
                <a href=\"";
        // line 26
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" class=\"text-gray-700 hover:text-primary-600 font-medium transition ";
        yield (string) (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 26)) && is_string($_v1 = "app_candidature") && str_starts_with($_v0, $_v1))) ? ("text-primary-600") : (""));
        yield "\">
                    Candidatures
                </a>
                <a href=\"#contact\" class=\"font-medium text-gray-700 transition hover:text-primary-600\">
                    Contact
                </a>
                ";
        // line 38
        yield "            </nav>
            
            <!-- Actions -->
            <div class=\"flex items-center space-x-4\">
                ";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                    <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\" class=\"hidden md:flex items-center space-x-2 bg-gradient-to-r from-orange-300 to-orange-500 text-white px-6 py-2.5 rounded-xl hover:from-orange-400 hover:to-orange-600 transition shadow-lg\">
                        <i class=\"fas fa-tachometer-alt\"></i>
                        <span>Dashboard</span>
                    </a>
                ";
        } else {
            // line 48
            yield "                    <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"hidden md:flex items-center space-x-2 bg-gradient-to-r from-orange-300 to-orange-500 text-white px-6 py-2.5 rounded-xl hover:from-orange-400 hover:to-orange-600 transition shadow-lg\">
                        <i class=\"fas fa-sign-in-alt\"></i>
                        <span>Connexion</span>
                    </a>
                ";
        }
        // line 53
        yield "                
                <!-- Menu mobile button -->
                <button @click=\"mobileMenu = !mobileMenu;\" 
                        class=\"relative z-50 w-10 h-10 text-gray-700 transition bg-gray-100 rounded-lg lg:hidden hover:bg-primary-600 hover:text-white focus:outline-none\"
                        :aria-expanded=\"mobileMenu\">
                    <i class=\"fas fa-bars\" x-show=\"!mobileMenu\"></i>
                    <i class=\"fas fa-times\" x-show=\"mobileMenu\"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Menu mobile -->
    <div x-show=\"mobileMenu\" 
         x-cloak
         x-transition:enter=\"transition ease-out duration-300\"
         x-transition:enter-start=\"opacity-0 -translate-y-2\"
         x-transition:enter-end=\"opacity-100 translate-y-0\"
         x-transition:leave=\"transition ease-in duration-200\"
         x-transition:leave-start=\"opacity-100 translate-y-0\"
         x-transition:leave-end=\"opacity-0 -translate-y-2\"
         class=\"lg:hidden absolute top-20 left-0 right-0 bg-white border-t border-gray-100 shadow-xl z-40 max-h-[calc(100vh-5rem)] overflow-y-auto\">
        <div class=\"container px-4 py-6 mx-auto\">
            <nav class=\"flex flex-col space-y-3\">
                <a href=\"";
        // line 77
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" 
                   @click=\"mobileMenu = false\"
                   class=\"flex items-center px-4 py-3 font-medium text-gray-700 transition rounded-xl bg-gray-50 hover:bg-primary-50 hover:text-primary-600\">
                    <i class=\"w-6 mr-3 fas fa-home text-primary-500\"></i>
                    Accueil
                </a>
                <a href=\"";
        // line 83
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#metiers\"
                   @click=\"mobileMenu = false\"
                   class=\"flex items-center px-4 py-3 font-medium text-gray-700 transition rounded-xl bg-gray-50 hover:bg-primary-50 hover:text-primary-600\">
                    <i class=\"w-6 mr-3 fas fa-briefcase text-primary-500\"></i>
                    Métiers
                </a>
                <a href=\"";
        // line 89
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        yield "\" 
                   @click=\"mobileMenu = false\"
                   class=\"flex items-center px-4 py-3 font-medium text-gray-700 transition rounded-xl bg-gray-50 hover:bg-primary-50 hover:text-primary-600\">
                    <i class=\"w-6 mr-3 fas fa-file-alt text-primary-500\"></i>
                    Candidatures
                </a>
                <a href=\"#contact\" 
                   @click=\"mobileMenu = false\"
                   class=\"flex items-center px-4 py-3 font-medium text-gray-700 transition rounded-xl bg-gray-50 hover:bg-primary-50 hover:text-primary-600\">
                    <i class=\"w-6 mr-3 fas fa-envelope text-primary-500\"></i>
                    Contact
                </a>
                
                <div class=\"my-4 border-t border-gray-200\"></div>
                
                ";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                    <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\" 
                       @click=\"mobileMenu = false\"
                       class=\"flex items-center px-4 py-3 font-medium text-white rounded-xl bg-gradient-to-r from-orange-300 to-orange-500\">
                        <i class=\"w-6 mr-3 fas fa-tachometer-alt\"></i>
                        Dashboard
                    </a>
                    <a href=\"";
            // line 111
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" 
                       @click=\"mobileMenu = false\"
                       class=\"flex items-center px-4 py-3 font-medium text-red-600 transition rounded-xl bg-red-50 hover:bg-red-100\">
                        <i class=\"w-6 mr-3 fas fa-sign-out-alt\"></i>
                        Déconnexion
                    </a>
                ";
        } else {
            // line 118
            yield "                    <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" 
                       @click=\"mobileMenu = false\"
                       class=\"flex items-center px-4 py-3 font-medium text-white rounded-xl bg-gradient-to-r from-orange-300 to-orange-500\">
                        <i class=\"w-6 mr-3 fas fa-sign-in-alt\"></i>
                        Connexion
                    </a>
                    ";
            // line 124
            if ((($tmp = ($context["candidature_publique"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "                    <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                yield "\"
                       @click=\"mobileMenu = false\"
                       class=\"flex items-center px-4 py-3 font-medium text-green-600 transition rounded-xl bg-green-50 hover:bg-green-100\">
                        <i class=\"w-6 mr-3 fas fa-user-plus\"></i>
                        Créer mon compte
                    </a>
                    ";
            }
            // line 132
            yield "                ";
        }
        // line 133
        yield "            </nav>
        </div>
    </div>
</header>

<!-- Espace pour compenser le header fixe -->
<div class=\"h-20\"></div>

<style>
    [x-cloak] { display: none !important; }
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "header.html.twig";
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
        return array (  241 => 133,  238 => 132,  227 => 125,  225 => 124,  215 => 118,  205 => 111,  195 => 105,  193 => 104,  175 => 89,  166 => 83,  157 => 77,  131 => 53,  122 => 48,  113 => 43,  111 => 42,  105 => 38,  94 => 26,  88 => 23,  80 => 20,  71 => 14,  64 => 10,  59 => 8,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "header.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\header.html.twig");
    }
}
