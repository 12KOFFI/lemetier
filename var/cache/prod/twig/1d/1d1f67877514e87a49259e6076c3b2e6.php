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

/* user/change_password.html.twig */
class __TwigTemplate_2c611ecc6b80553a07b9ecbde609534b extends Template
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
        return $this->parent ??= $this->load("base_dashboard.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/change_password.html.twig"));

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

        yield "Changer le mot de passe | ";
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
        yield "<div class=\"max-w-2xl mx-auto pb-10\">

";
        // line 9
        yield "<div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-6 md:p-8 mb-8 text-white relative overflow-hidden\">
    <div class=\"absolute -top-14 -right-14 w-52 h-52 rounded-full bg-white/5 pointer-events-none\"></div>
    <div class=\"absolute -bottom-16 left-1/3 w-64 h-64 rounded-full bg-white/[0.04] pointer-events-none\"></div>

    <div class=\"relative z-10 flex items-center gap-4\">
        <div class=\"w-14 h-14 rounded-2xl bg-white/15 backdrop-blur border border-white/20 flex items-center justify-center text-2xl shrink-0\">
            <i class=\"fas fa-key\"></i>
        </div>
        <div>
            <h1 class=\"text-xl md:text-2xl font-bold tracking-tight\">Changer le mot de passe</h1>
            <p class=\"text-white/60 text-sm mt-0.5\">Modifiez votre mot de passe de connexion</p>
        </div>
    </div>
</div>

";
        // line 24
        yield from $this->load("partials/_flash_messages.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
";
        // line 27
        yield "<div class=\"bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden\">
    <div class=\"px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center gap-3\">
        <div class=\"w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600\">
            <i class=\"fas fa-shield-alt text-sm\"></i>
        </div>
        <h2 class=\"text-sm font-semibold text-slate-700 uppercase tracking-wider\">Sécurité du compte</h2>
    </div>

    <form method=\"post\" class=\"p-6 space-y-5\">

        ";
        // line 38
        yield "        <div>
            <label for=\"currentPassword\" class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Mot de passe actuel <span class=\"text-red-500\">*</span>
            </label>
            <div class=\"relative\">
                <input type=\"password\" name=\"current_password\" id=\"currentPassword\" required
                       placeholder=\"••••••••\"
                       class=\"w-full pl-4 pr-11 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition placeholder-slate-300\">
                <button type=\"button\" onclick=\"togglePwd(\x27currentPassword\x27,\x27ico1\x27)\"
                        class=\"absolute inset-y-0 right-0 px-3.5 flex items-center text-slate-400 hover:text-indigo-500 transition\">
                    <i class=\"fas fa-eye text-sm\" id=\"ico1\"></i>
                </button>
            </div>
        </div>

        <div class=\"border-t border-slate-100\"></div>

        ";
        // line 56
        yield "        <div>
            <label for=\"newPassword\" class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Nouveau mot de passe <span class=\"text-red-500\">*</span>
            </label>
            <div class=\"relative\">
                <input type=\"password\" name=\"new_password\" id=\"newPassword\" required minlength=\"6\"
                       placeholder=\"••••••••\"
                       class=\"w-full pl-4 pr-11 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition placeholder-slate-300\">
                <button type=\"button\" onclick=\"togglePwd(\x27newPassword\x27,\x27ico2\x27)\"
                        class=\"absolute inset-y-0 right-0 px-3.5 flex items-center text-slate-400 hover:text-indigo-500 transition\">
                    <i class=\"fas fa-eye text-sm\" id=\"ico2\"></i>
                </button>
            </div>
            ";
        // line 70
        yield "            <div class=\"mt-2 h-1.5 rounded-full bg-slate-100 overflow-hidden\">
                <div id=\"strengthBar\" class=\"h-full rounded-full transition-all duration-300\" style=\"width:0%\"></div>
            </div>
            <p id=\"strengthLabel\" class=\"text-[10px] text-slate-400 mt-1\">Minimum 6 caractères</p>
        </div>

        ";
        // line 77
        yield "        <div>
            <label for=\"confirmPassword\" class=\"block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5\">
                Confirmer le mot de passe <span class=\"text-red-500\">*</span>
            </label>
            <div class=\"relative\">
                <input type=\"password\" name=\"confirm_password\" id=\"confirmPassword\" required minlength=\"6\"
                       placeholder=\"••••••••\"
                       class=\"w-full pl-4 pr-11 py-2.5 rounded-xl border border-slate-200 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition placeholder-slate-300\">
                <button type=\"button\" onclick=\"togglePwd(\x27confirmPassword\x27,\x27ico3\x27)\"
                        class=\"absolute inset-y-0 right-0 px-3.5 flex items-center text-slate-400 hover:text-indigo-500 transition\">
                    <i class=\"fas fa-eye text-sm\" id=\"ico3\"></i>
                </button>
            </div>
            <p id=\"matchLabel\" class=\"text-[10px] mt-1 hidden\"></p>
        </div>

        ";
        // line 94
        yield "        <div class=\"flex flex-col sm:flex-row items-center justify-between gap-3 pt-4 border-t border-slate-100\">
            <a href=\"";
        // line 95
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
               class=\"inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-500 text-sm font-medium hover:bg-slate-50 transition w-full sm:w-auto justify-center\">
                <i class=\"fas fa-arrow-left text-xs\"></i> Annuler
            </a>
            <button type=\"submit\"
                    class=\"inline-flex items-center gap-2 px-8 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-bold rounded-xl shadow-md shadow-indigo-200/60 hover:from-indigo-700 hover:to-purple-700 hover:-translate-y-0.5 transition-all w-full sm:w-auto justify-center\">
                <i class=\"fas fa-save\"></i> Enregistrer
            </button>
        </div>
    </form>
</div>

</div>

<script>
function togglePwd(id, icoId) {
    const inp = document.getElementById(id);
    const ico = document.getElementById(icoId);
    const show = inp.type === \x27password\x27;
    inp.type = show ? \x27text\x27 : \x27password\x27;
    ico.classList.toggle(\x27fa-eye\x27, !show);
    ico.classList.toggle(\x27fa-eye-slash\x27, show);
}

// Force du mot de passe
document.getElementById(\x27newPassword\x27).addEventListener(\x27input\x27, function () {
    const v = this.value;
    const bar = document.getElementById(\x27strengthBar\x27);
    const lbl = document.getElementById(\x27strengthLabel\x27);
    let score = 0;
    if (v.length >= 6) score++;
    if (v.length >= 10) score++;
    if (/[A-Z]/.test(v)) score++;
    if (/[0-9]/.test(v)) score++;
    if (/[^A-Za-z0-9]/.test(v)) score++;

    const levels = [
        { pct: \x270%\x27,   color: \x27bg-slate-200\x27, text: \x27Minimum 6 caractères\x27, cls: \x27text-slate-400\x27 },
        { pct: \x2725%\x27,  color: \x27bg-red-400\x27,   text: \x27Très faible\x27,          cls: \x27text-red-500\x27 },
        { pct: \x2750%\x27,  color: \x27bg-amber-400\x27, text: \x27Faible\x27,               cls: \x27text-amber-500\x27 },
        { pct: \x2775%\x27,  color: \x27bg-yellow-400\x27,text: \x27Moyen\x27,                cls: \x27text-yellow-600\x27 },
        { pct: \x2790%\x27,  color: \x27bg-emerald-400\x27,text: \x27Fort\x27,                cls: \x27text-emerald-600\x27 },
        { pct: \x27100%\x27, color: \x27bg-green-500\x27, text: \x27Très fort\x27,            cls: \x27text-green-600\x27 },
    ];
    const lvl = levels[Math.min(score, 5)];
    bar.style.width = v.length === 0 ? \x270%\x27 : lvl.pct;
    bar.className = `h-full rounded-full transition-all duration-300 \${lvl.color}`;
    lbl.textContent = v.length === 0 ? \x27Minimum 6 caractères\x27 : lvl.text;
    lbl.className = `text-[10px] mt-1 \${lvl.cls}`;
});

// Vérification correspondance
document.getElementById(\x27confirmPassword\x27).addEventListener(\x27input\x27, function () {
    const lbl = document.getElementById(\x27matchLabel\x27);
    const match = this.value === document.getElementById(\x27newPassword\x27).value;
    lbl.classList.remove(\x27hidden\x27);
    lbl.textContent = match ? \x27✓ Les mots de passe correspondent\x27 : \x27✗ Les mots de passe ne correspondent pas\x27;
    lbl.className = `text-[10px] mt-1 \${match ? \x27text-emerald-600\x27 : \x27text-red-500\x27}`;
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
        return "user/change_password.html.twig";
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
        return array (  189 => 95,  186 => 94,  168 => 77,  160 => 70,  145 => 56,  126 => 38,  114 => 27,  111 => 25,  109 => 24,  92 => 9,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/change_password.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\user\\change_password.html.twig");
    }
}
