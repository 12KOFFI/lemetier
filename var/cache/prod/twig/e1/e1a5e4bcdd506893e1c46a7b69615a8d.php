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

/* admis/inscription_success.html.twig */
class __TwigTemplate_a0d1594d24c14757844b70e2d732dac2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/inscription_success.html.twig"));

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

        yield "Inscription Définitive Réussie";
        
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
        yield "<div class=\"max-w-4xl mx-auto pb-12\">
        
        ";
        // line 9
        yield "        <div class=\"bg-white rounded-3xl shadow-2xl border border-emerald-100 overflow-hidden\">
            
            ";
        // line 12
        yield "            <div class=\"bg-gradient-to-r from-emerald-500 to-green-600 p-8 md:p-12 text-center relative overflow-hidden\">
                <div class=\"absolute -top-12 -right-12 w-32 h-32 rounded-full bg-white/10\"></div>
                <div class=\"absolute -bottom-8 -left-8 w-24 h-24 rounded-full bg-white/[0.08]\"></div>
                
                <div class=\"relative z-10\">
                    <div class=\"w-20 h-20 rounded-full bg-white/20 backdrop-blur border-2 border-white/30 flex items-center justify-center mx-auto mb-6\">
                        <i class=\"fas fa-check-circle text-white text-4xl\"></i>
                    </div>
                    <h1 class=\"text-3xl md:text-4xl font-bold text-white mb-4\">
                        Félicitations ! 
                    </h1>
                    <p class=\"text-emerald-100 text-lg\">
                        L\x27inscription définitive du candidat a été enregistrée avec succès
                    </p>
                </div>
            </div>

            ";
        // line 30
        yield "            <div class=\"p-8 md:p-12\">
                
                ";
        // line 33
        yield "                <div class=\"text-center mb-10\">
                    <div class=\"inline-flex items-center gap-3 px-6 py-3 bg-emerald-50 border border-emerald-200 rounded-full mb-6\">
                        <i class=\"fas fa-user-graduate text-emerald-600 text-xl\"></i>
                        <span class=\"text-emerald-800 font-semibold\">Candidat Admis Définitivement</span>
                    </div>
                    
                    <h2 class=\"text-2xl font-bold text-slate-800 mb-4\">
                        Inscription enregistrée avec succès !
                    </h2>
                    <p class=\"text-slate-600 text-lg leading-relaxed max-w-2xl mx-auto\">
                        L\x27engagement du candidat a été confirmé et son inscription définitive est maintenant validée. 
                        Vous pouvez procéder à l\x27inscription d\x27un autre candidat ou revenir au tableau de bord.
                    </p>
                </div>

                ";
        // line 49
        yield "                <div class=\"bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 mb-8 border border-blue-100\">
                    <h3 class=\"text-lg font-bold text-blue-800 mb-4 flex items-center gap-3\">
                        <i class=\"fas fa-info-circle text-blue-600\"></i>
                        Informations importantes
                    </h3>
                    
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                        <div class=\"bg-white rounded-xl p-4 border border-blue-100\">
                            <p class=\"text-sm font-semibold text-blue-700 mb-1\">Numéro d\x27inscription</p>
                            <p class=\"text-xl font-bold text-blue-900 font-mono\">";
        // line 58
        yield (string) $this->escaper->escape(($context["numero_inscription"] ?? null), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-blue-100\">
                            <p class=\"text-sm font-semibold text-blue-700 mb-1\">Formation</p>
                            <p class=\"text-lg font-bold text-blue-900\">";
        // line 62
        yield (string) $this->escaper->escape(($context["formation"] ?? null), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-blue-100\">
                            <p class=\"text-sm font-semibold text-blue-700 mb-1\">Établissement</p>
                            <p class=\"text-lg font-bold text-blue-900\">";
        // line 66
        yield (string) $this->escaper->escape(($context["etablissement"] ?? null), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"bg-white rounded-xl p-4 border border-blue-100\">
                            <p class=\"text-sm font-semibold text-blue-700 mb-1\">Date d\x27inscription</p>
                            <p class=\"text-lg font-bold text-blue-900\">";
        // line 70
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["date_inscription"] ?? null), "d/m/Y"), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>

                ";
        // line 76
        yield "                <div class=\"bg-amber-50 rounded-2xl p-6 mb-8 border border-amber-200\">
                    <h3 class=\"text-lg font-bold text-amber-800 mb-4 flex items-center gap-3\">
                        <i class=\"fas fa-calendar-check text-amber-600\"></i>
                        Prochaines étapes
                    </h3>
                    
                    <div class=\"space-y-3\">
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-6 h-6 rounded-full bg-amber-200 flex items-center justify-center shrink-0 mt-0.5\">
                                <span class=\"text-amber-700 text-xs font-bold\">1</span>
                            </div>
                            <div>
                                <p class=\"text-amber-800 font-semibold\">Informer le candidat</p>
                                <p class=\"text-amber-600 text-sm\">Contactez le candidat pour lui confirmer que son inscription définitive a été validée</p>
                            </div>
                        </div>
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-6 h-6 rounded-full bg-amber-200 flex items-center justify-center shrink-0 mt-0.5\">
                                <span class=\"text-amber-700 text-xs font-bold\">2</span>
                            </div>
                            <div>
                                <p class=\"text-amber-800 font-semibold\">Vérifier les documents</p>
                                <p class=\"text-amber-600 text-sm\">Assurez-vous que tous les documents nécessaires ont été collectés et archivés</p>
                            </div>
                        </div>
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-6 h-6 rounded-full bg-amber-200 flex items-center justify-center shrink-0 mt-0.5\">
                                <span class=\"text-amber-700 text-xs font-bold\">3</span>
                            </div>
                            <div>
                                <p class=\"text-amber-800 font-semibold\">Inscrire d\x27autres candidats</p>
                                <p class=\"text-amber-600 text-sm\">Poursuivez l\x27inscription des autres candidats admis de votre établissement</p>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 114
        yield "                <div class=\"flex flex-col sm:flex-row gap-4 justify-center\">
                    <a href=\"";
        // line 115
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
                       class=\"inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-emerald-500 to-green-600 text-white text-base font-bold rounded-xl shadow-lg hover:from-emerald-600 hover:to-green-700 hover:-translate-y-0.5 transition-all\">
                        <i class=\"fas fa-home\"></i>
                        Retour au tableau de bord
                    </a>
                    <a href=\"";
        // line 120
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_liste");
        yield "\"
                       class=\"inline-flex items-center justify-center gap-3 px-8 py-4 bg-white border-2 border-slate-200 text-slate-700 text-base font-bold rounded-xl hover:bg-slate-50 transition-all\">
                        <i class=\"fas fa-user-graduate\"></i>
                        Nouvelle inscription
                    </a>
                </div>

                ";
        // line 128
        yield "                <div class=\"mt-8 text-center\">
                    <p class=\"text-slate-500 text-sm\">
                        <i class=\"fas fa-question-circle mr-2\"></i>
                        Pour toute question, contactez la direction régionale
                    </p>
                </div>
            </div>
        </div>
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
        return "admis/inscription_success.html.twig";
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
        return array (  238 => 128,  228 => 120,  220 => 115,  217 => 114,  178 => 76,  170 => 70,  163 => 66,  156 => 62,  149 => 58,  138 => 49,  121 => 33,  117 => 30,  98 => 12,  94 => 9,  90 => 6,  80 => 5,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/inscription_success.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\inscription_success.html.twig");
    }
}
