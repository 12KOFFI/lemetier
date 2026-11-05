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

/* security/login.html.twig */
class __TwigTemplate_be8d572916a76a708eeab241543d806a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Connexion | ";
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
        yield "<!-- ==================== MESSAGES ==================== -->
<div class=\"container max-w-md px-4 mx-auto mb-6\">
    ";
        // line 8
        yield from $this->load("partials/_flash_messages.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "</div>

<!-- ==================== FORMULAIRE DE CONNEXION ==================== -->
<div class=\"container px-4 pb-16 mx-auto\">
    <div class=\"max-w-md mx-auto\">
        <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
            
            <!-- Titre sans fond coloré -->
            <div class=\"px-6 pt-8 pb-2 text-center\">
                <h2 class=\"mb-1 text-2xl font-bold text-slate-800\">
                    Connexion
                </h2>
                <p class=\"text-sm text-slate-500\">Accédez à votre espace personnel</p>
            </div>

            <div class=\"p-6 pt-2 md:p-8\">
                <form method=\"post\" class=\"space-y-6\">
                    <!-- Champ caché pour la redirection - VÉRIFIER QUE C\x27EST BIEN PRÉSENT -->
                    ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "query", [], "any", false, false, false, 27), "get", ["redirect"], "method", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                        <input type=\"hidden\" name=\"_target_path\" value=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "query", [], "any", false, false, false, 28), "get", ["redirect"], "method", false, false, false, 28), "html", null, true);
            yield "\">
                    ";
        }
        // line 30
        yield "
                    <!-- Champ email/téléphone -->
                    <div>
                        <label for=\"inputEmail\" class=\"block mb-2 text-sm font-medium text-slate-700\">
                            E-mail ou numéro de téléphone
                        </label>
                        <input type=\"text\" 
                               value=\"";
        // line 37
        yield (string) $this->escaper->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" 
                               name=\"email\" 
                               id=\"inputEmail\" 
                               class=\"w-full px-4 py-3 transition border rounded-lg border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent\"
                               placeholder=\"exemple@email.com ou 0123456789\"
                               autocomplete=\"email\" 
                               required 
                               autofocus>
                    </div>

                    <!-- Champ mot de passe -->
                    <div>
                        <label for=\"inputPassword\" class=\"block mb-2 text-sm font-medium text-slate-700\">
                            Mot de passe
                        </label>
                        <div class=\"relative\">
                            <input type=\"password\" 
                                   name=\"password\" 
                                   id=\"inputPassword\" 
                                   class=\"w-full px-4 py-3 transition border rounded-lg border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent\"
                                   placeholder=\"••••••••\"
                                   autocomplete=\"current-password\" 
                                   required>
                            <button type=\"button\" 
                                    onclick=\"togglePassword()\" 
                                    class=\"absolute inset-y-0 right-0 flex items-center pr-4\">
                                <i class=\"transition fas fa-eye text-slate-400 hover:text-indigo-600\" id=\"toggleIcon\"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Options supplémentaires -->
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center\">
                            <input type=\"checkbox\" id=\"remember\" name=\"_remember_me\" class=\"w-4 h-4 text-indigo-600 rounded focus:ring-indigo-500 border-slate-300\">
                            <label for=\"remember\" class=\"block ml-2 text-sm text-slate-600\">
                                Se souvenir de moi
                            </label>
                        </div>
                        <a href=\"";
        // line 76
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" class=\"text-sm font-medium text-indigo-600 hover:text-indigo-800\">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <!-- Token CSRF -->
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 82
        yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <!-- Bouton de connexion -->
                    <button type=\"submit\" 
                            class=\"w-full py-3 px-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-lg hover:from-indigo-700 hover:to-purple-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center group\">
                        <span class=\"hidden mr-2 spinner-border spinner-border-sm\" id=\"spinner\"></span>
                        <i class=\"mr-2 transition fas fa-sign-in-alt group-hover:translate-x-1\"></i>
                        Se connecter
                    </button>
                </form>

                <!-- Lien d\x27inscription avec paramètre de redirection -->
                <div class=\"pt-6 mt-8 border-t border-slate-200\">
                    <p class=\"text-center text-slate-600\">
                        ";
        // line 96
        if ((($tmp = ($context["candidature_publique"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "                        Pas encore de compte ?
                        <a href=\"";
            // line 98
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register", ["redirect" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 98), "query", [], "any", false, false, false, 98), "get", ["redirect"], "method", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"inline-flex items-center font-semibold text-indigo-600 hover:text-indigo-800\">
                            Créer un compte
                            <i class=\"ml-1 text-sm fas fa-arrow-right\"></i>
                        </a>
                        ";
        } else {
            // line 103
            yield "                        Pas encore de compte ? Votre compte est créé par le lycée (LPH ou LPMMS) lors de votre inscription.
                        <a href=\"";
            // line 104
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "#ou-sinscrire\" class=\"font-semibold text-indigo-600 hover:text-indigo-800\">Où m\x27inscrire ?</a>
                        ";
        }
        // line 106
        yield "                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Lien retour accueil et retour page précédente -->
    <div class=\"mt-4 space-y-2 text-center\">
        ";
        // line 114
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 114), "query", [], "any", false, false, false, 114), "get", ["redirect"], "method", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "            <a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 115), "query", [], "any", false, false, false, 115), "get", ["redirect"], "method", false, false, false, 115), "html", null, true);
            yield "\" class=\"inline-flex items-center mr-4 text-sm transition text-slate-500 hover:text-indigo-600\">
                <i class=\"mr-1 fas fa-arrow-left\"></i>
                Retour à la page précédente
            </a>
        ";
        }
        // line 120
        yield "        <a href=\"";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"inline-flex items-center text-sm transition text-slate-500 hover:text-indigo-600\">
            <i class=\"mr-1 fas fa-home\"></i>
            Retour à l\x27accueil
        </a>
    </div>
</div>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        // Animation du spinner au submit
        const form = document.querySelector(\x27form\x27);
        const spinner = document.getElementById(\x27spinner\x27);
        const submitBtn = document.querySelector(\x27button[type=\"submit\"]\x27);
    
        form.addEventListener(\x27submit\x27, function() {
            spinner.classList.remove(\x27hidden\x27);
            submitBtn.disabled = true;
        });

        // Animation des champs au focus
        const inputs = document.querySelectorAll(\x27input\x27);
        inputs.forEach(input => {
            input.addEventListener(\x27focus\x27, function() {
                this.classList.add(\x27ring-2\x27, \x27ring-indigo-300\x27);
            });
            input.addEventListener(\x27blur\x27, function() {
                this.classList.remove(\x27ring-2\x27, \x27ring-indigo-300\x27);
            });
        });
    });

    // Fonction pour afficher/masquer le mot de passe
    function togglePassword() {
        const passwordInput = document.getElementById(\x27inputPassword\x27);
        const toggleIcon = document.getElementById(\x27toggleIcon\x27);
    
        if (passwordInput.type === \x27password\x27) {
            passwordInput.type = \x27text\x27;
            toggleIcon.classList.remove(\x27fa-eye\x27);
            toggleIcon.classList.add(\x27fa-eye-slash\x27);
        } else {
            passwordInput.type = \x27password\x27;
            toggleIcon.classList.remove(\x27fa-eye-slash\x27);
            toggleIcon.classList.add(\x27fa-eye\x27);
        }
    }
</script>

<style>
    /* Animation de pulsation pour le bouton */
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }

    button[type=\"submit\"]:disabled {
        animation: pulse 1.5s infinite;
        cursor: not-allowed;
    }

    /* Style pour les icônes */
    .fa-eye, .fa-eye-slash {
        transition: all 0.2s ease;
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  244 => 120,  235 => 115,  233 => 114,  223 => 106,  218 => 104,  215 => 103,  207 => 98,  204 => 97,  202 => 96,  185 => 82,  176 => 76,  134 => 37,  125 => 30,  119 => 28,  117 => 27,  97 => 9,  95 => 8,  91 => 6,  81 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\security\\login.html.twig");
    }
}
