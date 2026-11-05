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

/* partials/_flash_messages.html.twig */
class __TwigTemplate_4052dc21238d29f3762f53862e9820ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_flash_messages.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                yield "        <div class=\"flash-message bg-";
                yield (string) ((($context["type"] == "success")) ? ("green") : (((($context["type"] == "error")) ? ("red") : (((($context["type"] == "warning")) ? ("amber") : ("blue"))))));
                yield "-50 border-l-4 border-";
                yield (string) ((($context["type"] == "success")) ? ("green") : (((($context["type"] == "error")) ? ("red") : (((($context["type"] == "warning")) ? ("amber") : ("blue"))))));
                yield "-500 p-4 rounded-r-lg mb-4 relative animate-slide-in\" data-autodismiss=\"";
                yield (string) ((($context["type"] == "success")) ? ("3000") : ("5000"));
                yield "\">
            <button type=\"button\" class=\"absolute right-2 top-1/2 -translate-y-1/2 p-1 text-";
                // line 6
                yield (string) ((($context["type"] == "success")) ? ("green") : (((($context["type"] == "error")) ? ("red") : (((($context["type"] == "warning")) ? ("amber") : ("blue"))))));
                yield "-500 hover:text-";
                yield (string) ((($context["type"] == "success")) ? ("green") : (((($context["type"] == "error")) ? ("red") : (((($context["type"] == "warning")) ? ("amber") : ("blue"))))));
                yield "-700 transition-colors\" onclick=\"this.closest(\x27.flash-message\x27).remove()\">
                <i class=\"fas fa-times\"></i>
            </button>
            <div class=\"flex items-center\">
                <i class=\"fas fa-";
                // line 10
                yield (string) ((($context["type"] == "success")) ? ("check-circle") : (((($context["type"] == "error")) ? ("exclamation-circle") : (((($context["type"] == "warning")) ? ("exclamation-triangle") : ("info-circle"))))));
                yield " text-";
                yield (string) ((($context["type"] == "success")) ? ("green") : (((($context["type"] == "error")) ? ("red") : (((($context["type"] == "warning")) ? ("amber") : ("blue"))))));
                yield "-500 mr-3\"></i>
                <p class=\"text-";
                // line 11
                yield (string) ((($context["type"] == "success")) ? ("green") : (((($context["type"] == "error")) ? ("red") : (((($context["type"] == "warning")) ? ("amber") : ("blue"))))));
                yield "-700 pr-6\">";
                yield (string) $this->escaper->escape($context["message"], "html", null, true);
                yield "</p>
            </div>
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
        // line 16
        yield "
";
        // line 17
        if ((array_key_exists("error", $context) && (($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 18
            yield "    <div class=\"bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg mb-4 animate-shake relative\">
        <button type=\"button\" class=\"absolute right-2 top-1/2 -translate-y-1/2 p-1 text-red-500 hover:text-red-700 transition-colors\" onclick=\"this.closest(\x27[class*=\\\x27bg-red-50\\\x27]\x27).remove()\">
            <i class=\"fas fa-times\"></i>
        </button>
        <div class=\"flex items-center\">
            <i class=\"fas fa-exclamation-circle text-red-500 mr-3\"></i>
            <p class=\"text-red-700 pr-6\">";
            // line 24
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            yield "</p>
        </div>
    </div>
";
        }
        // line 28
        yield "
<style>
@keyframes slideIn {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
.animate-slide-in {
    animation: slideIn 0.3s ease-out;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
    20%, 40%, 60%, 80% { transform: translateX(5px); }
}
.animate-shake {
    animation: shake 0.6s ease-in-out;
}

@keyframes fadeOut {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    to {
        opacity: 0;
        transform: translateY(-10px);
    }
}
.flash-message.fade-out {
    animation: fadeOut 0.3s ease-out forwards;
}
</style>

<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
    document.querySelectorAll(\x27.flash-message[data-autodismiss]\x27).forEach(function(message) {
        var delay = parseInt(message.dataset.autodismiss, 10);
        setTimeout(function() {
            message.classList.add(\x27fade-out\x27);
            setTimeout(function() {
                message.remove();
            }, 300);
        }, delay);
    });
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_flash_messages.html.twig";
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
        return array (  124 => 28,  117 => 24,  109 => 18,  107 => 17,  104 => 16,  86 => 11,  80 => 10,  71 => 6,  62 => 5,  57 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/_flash_messages.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\partials\\_flash_messages.html.twig");
    }
}
