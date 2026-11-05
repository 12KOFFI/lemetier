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

/* security/register.html.twig */
class __TwigTemplate_1613646b86abb6d7e35269f7edb936b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        // line 11
        $context["input_class"] = "w-full px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition";
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

        yield "Inscription candidat | GROUPE LEMETIER";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        yield from $this->yieldParentBlock("meta", $context, $blocks);
        yield "
<meta name=\"description\" content=\"Créez votre compte candidat pour postuler au projet de formation du GROUPE LEMETIER.\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "<!-- ==================== MESSAGES ==================== -->
<div class=\"container max-w-4xl px-4 mx-auto mb-6\">
    ";
        // line 16
        yield from $this->load("partials/_flash_messages.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "</div>

<!-- ==================== FORMULAIRE D\x27INSCRIPTION (WIZARD) ==================== -->
<div class=\"container px-4 pb-16 mx-auto\">
    <div class=\"max-w-4xl mx-auto\">
        <!-- Barre de progression -->
        <div class=\"mb-8\">
            <div class=\"flex items-center justify-between mb-4\">
                <div class=\"flex items-center\">
                    <span class=\"text-sm font-semibold text-indigo-600\" id=\"step-indicator\">Étape 1/4</span>
                    <span class=\"ml-2 text-sm text-slate-500\" id=\"step-name\">Identité</span>
                </div>
                <span class=\"text-sm text-slate-500\" id=\"progress-percent\">25%</span>
            </div>
            <div class=\"w-full bg-slate-200 rounded-full h-2.5\">
                <div class=\"bg-gradient-to-r from-indigo-600 to-purple-600 h-2.5 rounded-full transition-all duration-300\" id=\"progress-bar\" style=\"width: 25%\"></div>
            </div>
        </div>

        <div class=\"overflow-hidden bg-white border shadow-xl rounded-2xl border-slate-200\">
            <div class=\"px-6 py-4 bg-gradient-to-r from-indigo-600 to-purple-600\">
                <h2 class=\"flex items-center text-xl font-semibold text-white\">
                    <i class=\"mr-3 fas fa-user-plus\"></i>
                    Inscription au projet GROUPE LEMETIER
                </h2>
                <p class=\"mt-1 text-sm text-white/80\">Tous les champs marqués d\x27une * sont obligatoires</p>
            </div>
        
            <div class=\"p-8\">
                ";
        // line 46
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-6", "novalidate" => "novalidate", "id" => "register-form"]]);
        yield "
        
                <!-- Champ caché pour la redirection -->
                ";
        // line 49
        if ((array_key_exists("redirect", $context) && (($tmp = ($context["redirect"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 50
            yield "                    <input type=\"hidden\" name=\"redirect\" value=\"";
            yield (string) $this->escaper->escape(($context["redirect"] ?? null), "html", null, true);
            yield "\">
                ";
        }
        // line 52
        yield "
                <!-- ÉTAPE 1 : Identité -->
                <div class=\"step\" id=\"step1\">
                    <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                        <!-- Nom -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Nom <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 61
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => (        // line 63
($context["input_class"] ?? null) . " text-uppercase"), "placeholder" => "Votre nom", "required" => true]]);
        // line 67
        yield "
                        </div>
                        
                        <!-- Prénoms -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Prénoms <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 75
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenoms", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" =>         // line 77
($context["input_class"] ?? null), "placeholder" => "Vos prénoms", "required" => true]]);
        // line 81
        yield "
                        </div>
                        
                        <!-- Nom de jeune fille -->
                        <div class=\"md:col-span-2\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Nom de jeune fille
                            </label>
                            ";
        // line 89
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nomjeunefille", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" =>         // line 91
($context["input_class"] ?? null), "placeholder" => "Si applicable"]]);
        // line 94
        yield "
                        </div>
                        
                        <!-- Sexe -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Sexe <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 102
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sexe", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" =>         // line 104
($context["input_class"] ?? null), "required" => true]]);
        // line 107
        yield "
                        </div>
                        
                        <!-- Situation matrimoniale -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Situation matrimoniale
                            </label>
                            ";
        // line 115
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "situationmat", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" =>         // line 117
($context["input_class"] ?? null)]]);
        // line 119
        yield "
                        </div>
                    </div>
                </div>
        
                <!-- ÉTAPE 2 : Naissance, nationalité et parents -->
                <div class=\"hidden step\" id=\"step2\">
                    <!-- Naissance et nationalité -->
                    <div class=\"grid grid-cols-1 gap-4 mb-6 md:grid-cols-2\">
                        <!-- Date de naissance -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Date de naissance <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 133
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "datenaissance", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" =>         // line 135
($context["input_class"] ?? null), "required" => true]]);
        // line 138
        yield "
                        </div>
                        
                        <!-- Lieu de naissance -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Lieu de naissance <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 146
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lieunaissance", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" =>         // line 148
($context["input_class"] ?? null), "placeholder" => "Ville de naissance", "required" => true]]);
        // line 152
        yield "
                        </div>
                        
                        <!-- Nationalité -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Nationalité <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 160
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nationalite", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" =>         // line 162
($context["input_class"] ?? null), "required" => true]]);
        // line 165
        yield "
                        </div>
                        
                        <!-- Numéro d\x27extrait -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Numéro d\x27extrait
                            </label>
                            ";
        // line 173
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numextrait", [], "any", false, false, false, 173), 'widget', ["attr" => ["class" =>         // line 175
($context["input_class"] ?? null), "placeholder" => "Numéro de l\x27extrait"]]);
        // line 178
        yield "
                        </div>
                    </div>
        
                    <!-- Informations sur les parents -->
                    <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                        <!-- Nom du père -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Nom du père
                            </label>
                            ";
        // line 189
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nompere", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" =>         // line 191
($context["input_class"] ?? null), "placeholder" => "Nom et prénoms du père"]]);
        // line 194
        yield "
                        </div>
                        
                        <!-- Nom de la mère -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Nom de la mère
                            </label>
                            ";
        // line 202
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nommere", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" =>         // line 204
($context["input_class"] ?? null), "placeholder" => "Nom et prénoms de la mère"]]);
        // line 207
        yield "
                        </div>
                    </div>
                </div>
        
                <!-- ÉTAPE 3 : Résidence et contact -->
                <div class=\"hidden step\" id=\"step3\">
                    <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                        <!-- Lieu de résidence -->
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Lieu de résidence <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 220
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "residence", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" =>         // line 222
($context["input_class"] ?? null), "placeholder" => "Votre ville de résidence", "required" => true]]);
        // line 226
        yield "
                        </div>
                        
                        <div class=\"md:col-span-1\">
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Contact <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 233
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 233), 'widget', ["attr" => ["class" =>         // line 235
($context["input_class"] ?? null), "placeholder" => "Ex: 0708091011", "required" => true, "pattern" => "[0-9]{10}", "title" => "Le numéro de téléphone doit contenir exactement 10 chiffres", "maxlength" => "10", "oninput" => "this.value = this.value.replace(/[^0-9]/g, \x27\x27)"]]);
        // line 243
        yield "
                            <div class=\"mt-1 text-xs text-slate-500\">10 chiffres maximum</div>
                        </div>
                    </div>
                </div>
        
                <!-- ÉTAPE 4 : Identifiants de connexion et validation -->
                <div class=\"hidden step\" id=\"step4\">
                    <!-- Identifiants -->
                    <div class=\"mb-6 space-y-4\">
                        <!-- Email (requis) -->
                        <div>
                            <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                Email <span class=\"text-red-500\">*</span>
                            </label>
                            ";
        // line 258
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" =>         // line 260
($context["input_class"] ?? null), "placeholder" => "exemple@email.com", "required" => true]]);
        // line 264
        yield "
                            <div id=\"email-error\" class=\"hidden mt-1 text-sm text-red-500\"></div>
                        </div>
                        
                        <!-- Mot de passe et confirmation (requis) -->
                        <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                            <div>
                                <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                    Mot de passe <span class=\"text-red-500\">*</span>
                                </label>
                                ";
        // line 274
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 274), "first", [], "any", false, false, false, 274), 'widget', ["attr" => ["class" =>         // line 276
($context["input_class"] ?? null), "placeholder" => "••••••••", "required" => true]]);
        // line 280
        yield "
                            </div>
                            
                            <div>
                                <label class=\"block mb-1 text-sm font-medium text-slate-700\">
                                    Confirmation <span class=\"text-red-500\">*</span>
                                </label>
                                ";
        // line 287
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 287), "second", [], "any", false, false, false, 287), 'widget', ["attr" => ["class" =>         // line 289
($context["input_class"] ?? null), "placeholder" => "••••••••", "required" => true]]);
        // line 293
        yield "
                            </div>
                        </div>
                    </div>
                
                    <!-- Case à cocher -->
                    <div class=\"p-4 rounded-lg bg-slate-50\">
                        <div class=\"flex items-start\">
                            <input type=\"checkbox\" id=\"accept\" class=\"mt-1 mr-3\" required>
                            <label for=\"accept\" class=\"text-sm text-slate-600\">
                                J\x27accepte que les informations fournies soient utilisées dans le cadre de ma candidature 
                                et j\x27atteste sur l\x27honneur leur exactitude. <span class=\"text-red-500\">*</span>
                            </label>
                        </div>
                    </div>
                </div>
        
                <!-- Boutons de navigation -->
                <div class=\"flex items-center justify-between pt-6 border-t border-slate-200\">
                    <button type=\"button\" id=\"prev-btn\" class=\"px-6 py-2 transition border rounded-lg border-slate-300 text-slate-700 hover:bg-slate-50 disabled:opacity-50 disabled:cursor-not-allowed\" disabled>
                        <i class=\"mr-2 fas fa-arrow-left\"></i>
                        Précédent
                    </button>
                    
                    <div class=\"flex gap-3\">
                        <button type=\"button\" id=\"next-btn\" class=\"px-6 py-2 text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700\">
                            Suivant
                            <i class=\"ml-2 fas fa-arrow-right\"></i>
                        </button>
                        
                        <button type=\"submit\" id=\"submit-btn\" class=\"hidden px-8 py-2 font-semibold text-white transition transform rounded-lg shadow-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 hover:scale-105\">
                            <span class=\"hidden mr-2 spinner-border spinner-border-sm\" id=\"spinner\"></span>
                            <i class=\"mr-2 fas fa-check-circle\"></i>
                            Finaliser l\x27inscription
                        </button>
                    </div>
                </div>
        
                ";
        // line 331
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <!-- Lien retour accueil et retour page précédente -->
    <div class=\"mt-4 space-y-2 text-center\">
        ";
        // line 338
        if ((array_key_exists("redirect", $context) && (($tmp = ($context["redirect"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 339
            yield "            <a href=\"";
            yield (string) $this->escaper->escape(($context["redirect"] ?? null), "html", null, true);
            yield "\" class=\"inline-flex items-center mr-4 text-sm transition text-slate-500 hover:text-indigo-600\">
                <i class=\"mr-1 fas fa-arrow-left\"></i>
                Retour à la page précédente
            </a>
        ";
        }
        // line 344
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
    const form = document.getElementById(\x27register-form\x27);
    const steps = document.querySelectorAll(\x27.step\x27);
    const prevBtn = document.getElementById(\x27prev-btn\x27);
    const nextBtn = document.getElementById(\x27next-btn\x27);
    const submitBtn = document.getElementById(\x27submit-btn\x27);
    const stepIndicator = document.getElementById(\x27step-indicator\x27);
    const stepName = document.getElementById(\x27step-name\x27);
    const progressBar = document.getElementById(\x27progress-bar\x27);
    const progressPercent = document.getElementById(\x27progress-percent\x27);
    const spinner = document.getElementById(\x27spinner\x27);
    const emailInput = document.getElementById(\x27";
        // line 364
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 364), "vars", [], "any", false, false, false, 364), "id", [], "any", false, false, false, 364), "html", null, true);
        yield "\x27);
    const emailError = document.getElementById(\x27email-error\x27);
    
    const stepNames = [\x27Identité\x27, \x27Naissance & Parents\x27, \x27Contact\x27, \x27Connexion\x27];
    let currentStep = 0;
    const totalSteps = steps.length;

    // Fonction pour mettre à jour l\x27affichage des étapes
    function updateSteps() {
        steps.forEach((step, index) => {
            if (index === currentStep) {
                step.classList.remove(\x27hidden\x27);
            } else {
                step.classList.add(\x27hidden\x27);
            }
        });

        prevBtn.disabled = currentStep === 0;
        
        if (currentStep === totalSteps - 1) {
            nextBtn.classList.add(\x27hidden\x27);
            submitBtn.classList.remove(\x27hidden\x27);
        } else {
            nextBtn.classList.remove(\x27hidden\x27);
            submitBtn.classList.add(\x27hidden\x27);
        }

        stepIndicator.textContent = `Étape \${currentStep + 1}/\${totalSteps}`;
        stepName.textContent = stepNames[currentStep];
        
        const progress = ((currentStep + 1) / totalSteps) * 100;
        progressBar.style.width = `\${progress}%`;
        progressPercent.textContent = `\${Math.round(progress)}%`;
    }

    // Validation de l\x27étape courante
    function validateStep(step) {
        const currentStepElement = steps[step];
        const requiredFields = currentStepElement.querySelectorAll(\x27input[required], select[required]\x27);
        let isValid = true;

        requiredFields.forEach(field => {
            const fieldIsValid = field.type === \x27checkbox\x27
                ? field.checked
                : field.checkValidity();

            if (!fieldIsValid) {
                field.classList.add(\x27border-red-500\x27, \x27focus:ring-red-500\x27);
                isValid = false;
            } else {
                field.classList.remove(\x27border-red-500\x27, \x27focus:ring-red-500\x27);
            }
        });

        // Validation spécifique pour l\x27étape 4 (email et mot de passe)
        if (step === 3) { // Dernière étape (index 3)
            const password = document.getElementById(\x27";
        // line 420
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 420), "first", [], "any", false, false, false, 420), "vars", [], "any", false, false, false, 420), "id", [], "any", false, false, false, 420), "html", null, true);
        yield "\x27);
            const confirm = document.getElementById(\x27";
        // line 421
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 421), "second", [], "any", false, false, false, 421), "vars", [], "any", false, false, false, 421), "id", [], "any", false, false, false, 421), "html", null, true);
        yield "\x27);
            
            if (password.value !== confirm.value) {
                alert(\x27Les mots de passe ne correspondent pas.\x27);
                password.classList.add(\x27border-red-500\x27, \x27focus:ring-red-500\x27);
                confirm.classList.add(\x27border-red-500\x27, \x27focus:ring-red-500\x27);
                isValid = false;
            }
            
            if (password.value.length < 6) {
                alert(\x27Le mot de passe doit contenir au moins 6 caractères.\x27);
                password.classList.add(\x27border-red-500\x27, \x27focus:ring-red-500\x27);
                isValid = false;
            }
        }

        if (!isValid) {
            alert(\x27Veuillez remplir tous les champs obligatoires.\x27);
        }

        return isValid;
    }

    nextBtn.addEventListener(\x27click\x27, function() {
        if (!validateStep(currentStep)) {
            return;
        }

        currentStep++;
        updateSteps();
    });

    // Navigation précédente
    prevBtn.addEventListener(\x27click\x27, function() {
        if (currentStep > 0) {
            currentStep--;
            updateSteps();
        }
    });

    // Animation du spinner au submit
    form.addEventListener(\x27submit\x27, function(e) {
        // Vérification finale avant soumission
        if (!validateStep(currentStep)) {
            e.preventDefault();
            return;
        }
        
        spinner.classList.remove(\x27hidden\x27);
        submitBtn.disabled = true;
    });

    // Animation des champs au focus
    const inputs = document.querySelectorAll(\x27input, select\x27);
    inputs.forEach(input => {
        input.addEventListener(\x27focus\x27, function() {
            this.classList.add(\x27ring-2\x27, \x27ring-indigo-300\x27);
        });
        input.addEventListener(\x27blur\x27, function() {
            this.classList.remove(\x27ring-2\x27, \x27ring-indigo-300\x27);
        });
    });

    // Initialisation
    updateSteps();
});
</script>

<style>
/* Style pour le texte en majuscules */
.text-uppercase {
    text-transform: uppercase;
}

/* Transition fluide */
.step {
    transition: opacity 0.3s ease-in-out;
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
        return "security/register.html.twig";
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
        return array (  544 => 421,  540 => 420,  481 => 364,  457 => 344,  448 => 339,  446 => 338,  436 => 331,  396 => 293,  394 => 289,  393 => 287,  384 => 280,  382 => 276,  381 => 274,  369 => 264,  367 => 260,  366 => 258,  349 => 243,  347 => 235,  346 => 233,  337 => 226,  335 => 222,  334 => 220,  319 => 207,  317 => 204,  316 => 202,  306 => 194,  304 => 191,  303 => 189,  290 => 178,  288 => 175,  287 => 173,  277 => 165,  275 => 162,  274 => 160,  264 => 152,  262 => 148,  261 => 146,  251 => 138,  249 => 135,  248 => 133,  232 => 119,  230 => 117,  229 => 115,  219 => 107,  217 => 104,  216 => 102,  206 => 94,  204 => 91,  203 => 89,  193 => 81,  191 => 77,  190 => 75,  180 => 67,  178 => 63,  177 => 61,  166 => 52,  160 => 50,  158 => 49,  152 => 46,  121 => 17,  119 => 16,  115 => 14,  105 => 13,  94 => 6,  84 => 5,  67 => 3,  59 => 1,  57 => 11,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/register.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\security\\register.html.twig");
    }
}
