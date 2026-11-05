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

/* partials/_candidature_evaluation_sections.html.twig */
class __TwigTemplate_80b2e4dff43581abb007670ffbc66219 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_candidature_evaluation_sections.html.twig"));

        // line 1
        $context["input_class"] = ((array_key_exists("input_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["input_class"] ?? null), "w-full px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition")) : ("w-full px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"));
        // line 2
        yield "
<!-- SECTION 3: POUR ENT ET ADMIN - Étude de dossier -->
";
        // line 4
        if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 5
            yield "    <h3 class=\"text-lg font-semibold text-amber-800 mb-5 flex items-center border-b pb-3\">
        <div class=\"w-8 h-8 bg-amber-200 rounded-lg flex items-center justify-center mr-3\">
            <i class=\"fas fa-clipboard-check text-amber-700\"></i>
        </div>
        Étude de dossier (ENT)
    </h3>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            <label class=\"block text-sm font-medium text-slate-700 mb-1\">Statut dossier</label>
            ";
            // line 15
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etustatut", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
            yield "
        </div>
        <div>
            <label class=\"block text-sm font-medium text-slate-700 mb-1\">Commentaire</label>
            ";
            // line 19
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etucom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Commentaire sur le dossier..."]]);
            yield "
        </div>
    </div>
";
        }
        // line 23
        yield "
<!-- SECTION 4: POUR JURY, ENT ET ADMIN - Évaluation entretien -->
";
        // line 25
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 26
            yield "    <h3 class=\"text-lg font-semibold text-blue-800 mb-5 flex items-center border-b pb-3\">
        <div class=\"w-8 h-8 bg-blue-200 rounded-lg flex items-center justify-center mr-3\">
            <i class=\"fas fa-microphone-alt text-blue-700\"></i>
        </div>
        Évaluation entretien
    </h3>

    ";
            // line 34
            yield "    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mb-4\">
        <div>
            <label class=\"block text-sm font-medium text-slate-700 mb-1\">Date entretien</label>
            ";
            // line 37
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entdate", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
            yield "
        </div>
        <div>
            <label class=\"block text-sm font-medium text-slate-700 mb-1\">Lieu entretien</label>
            ";
            // line 41
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entlieu", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex: Salle 101"]]);
            yield "
        </div>
    </div>

    ";
            // line 46
            yield "    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4 mb-4\">
        <div>
            <label class=\"block text-sm font-medium text-slate-700 mb-1\">Numéro du jury</label>
            ";
            // line 49
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "jury", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "min" => 1, "max" => 20]]);
            yield "
        </div>
        <div>
            <label class=\"block text-sm font-medium text-slate-700 mb-1\">Vague</label>
            ";
            // line 53
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vague", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "min" => 1]]);
            yield "
        </div>
        <div>
            <label class=\"block text-sm font-medium text-slate-700 mb-1\">Présence à l\x27entretien</label>
            ";
            // line 57
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entstatut", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
            yield "
            <p class=\"text-xs text-slate-400 mt-1\">1 = présent, vide = absent</p>
        </div>
    </div>

    ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note1", [], "any", true, true, false, 62)) {
                // line 63
                yield "    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6\">
        ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 65
                    yield "            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), ("note" . $context["i"]), [], "any", true, true, false, 65)) {
                        // line 66
                        yield "                <div>
                    <label class=\"block text-sm font-bold text-slate-700 mb-1\">
                        ";
                        // line 68
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), ("note" . $context["i"]), [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "label", [], "any", false, false, false, 68), "html", null, true);
                        yield "
                        <span class=\"text-xs text-slate-400 font-normal\">(Max: ";
                        // line 69
                        yield (string) $this->escaper->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), ("note" . $context["i"]), [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "attr", [], "any", false, false, false, 69)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["data-max"] ?? null) : null), "html", null, true);
                        yield ")</span>
                    </label>
                    ";
                        // line 71
                        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), ("note" . $context["i"]), [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " note-input")]]);
                        yield "
                </div>
            ";
                    }
                    // line 74
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 75
                yield "    </div>

    ";
                // line 78
                yield "    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 bg-slate-50 p-4 rounded-xl border border-slate-200\">
        <div class=\"text-center\">
            <p class=\"text-sm font-semibold text-slate-600\">TOTAL</p>
            <p id=\"total-display\" class=\"text-2xl font-bold text-indigo-700\">0 / 40</p>
        </div>
        <div class=\"text-center\">
            <p class=\"text-sm font-semibold text-slate-600\">MOYENNE</p>
            <p id=\"moyenne-display\" class=\"text-2xl font-bold text-purple-700\">0 / 4</p>
        </div>
    </div>

    ";
                // line 90
                yield "    <div class=\"flex justify-center mb-6\">
        <div class=\"w-full max-w-md bg-blue-50 p-5 rounded-xl border border-blue-200 shadow-sm\">
            <label class=\"block text-sm font-bold text-blue-800 mb-2 text-center\">
                <i class=\"fas fa-gavel mr-1\"></i> Décision du jury
            </label>
            ";
                // line 95
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "decisionJury", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => (($context["input_class"] ?? null) . " text-center font-semibold text-blue-800")]]);
                yield "
            <p class=\"text-xs text-slate-500 mt-2 text-center\">
                À saisir manuellement par le jury (voir moyenne calculée ci-dessus)
            </p>
        </div>
    </div>
    ";
            }
            // line 102
            yield "
    <div class=\"mt-4 mb-6\">
        <label class=\"block text-sm font-medium text-slate-700 mb-1\">Commentaire entretien</label>
        ";
            // line 105
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "entcom", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "rows" => 3, "placeholder" => "Observations sur l\x27entretien..."]]);
            yield "
    </div>
";
        }
        // line 108
        yield "
<!-- SECTION 5: Visite médicale et résultat final -->
";
        // line 110
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 111
            yield "    <div class=\"bg-emerald-50 rounded-2xl border border-emerald-200 p-6\">
        <h3 class=\"text-lg font-semibold text-emerald-800 mb-5 flex items-center border-b border-emerald-200 pb-3\">
            <div class=\"w-8 h-8 bg-emerald-200 rounded-lg flex items-center justify-center mr-3\">
                <i class=\"fas fa-hospital text-emerald-700\"></i>
            </div>
            VISITE MÉDICALE & Résultat final
        </h3>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mb-4\">
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">Date visite</label>
                ";
            // line 122
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visdate", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
            yield "
            </div>
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">Lieu visite</label>
                ";
            // line 126
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vislieu", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Ex: Centre médical"]]);
            yield "
            </div>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">Statut visite</label>
                ";
            // line 133
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visstatut", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
            yield "
            </div>
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">Résultat final</label>
                ";
            // line 137
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "resultat", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null)]]);
            yield "
            </div>
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-1\">Commentaire</label>
                ";
            // line 141
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "viscom", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => ($context["input_class"] ?? null), "placeholder" => "Commentaire visite..."]]);
            yield "
            </div>
        </div>
    </div>
";
        }
        // line 146
        yield "
<!-- Javascript : calcul du total et de la moyenne (affichage uniquement) -->
<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
    const noteInputs = document.querySelectorAll(\x27.note-input\x27);
    const totalDisplay = document.getElementById(\x27total-display\x27);
    const moyenneDisplay = document.getElementById(\x27moyenne-display\x27);

    // Fonction de calcul (affichage uniquement, pas de modification de la décision)
    function calculerNotes() {
        let total = 0;

        noteInputs.forEach(input => {
            const val = parseFloat(input.value) || 0;
            total += val;
        });

        const totalMax = 40;
        const moyenne = (total / totalMax) * 4;

        if (totalDisplay) totalDisplay.textContent = total.toFixed(2).replace(/\\.00\$/, \x27\x27) + \x27 / \x27 + totalMax;
        if (moyenneDisplay) moyenneDisplay.textContent = moyenne.toFixed(2).replace(/\\.00\$/, \x27\x27) + \x27 / 4\x27;
    }

    noteInputs.forEach(input => {
        input.addEventListener(\x27input\x27, calculerNotes);
        input.addEventListener(\x27change\x27, calculerNotes);
    });

    if (noteInputs.length > 0) {
        calculerNotes();
    }
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
        return "partials/_candidature_evaluation_sections.html.twig";
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
        return array (  286 => 146,  278 => 141,  271 => 137,  264 => 133,  254 => 126,  247 => 122,  234 => 111,  232 => 110,  228 => 108,  222 => 105,  217 => 102,  207 => 95,  200 => 90,  187 => 78,  183 => 75,  176 => 74,  170 => 71,  165 => 69,  161 => 68,  157 => 66,  154 => 65,  150 => 64,  147 => 63,  145 => 62,  137 => 57,  130 => 53,  123 => 49,  118 => 46,  111 => 41,  104 => 37,  99 => 34,  90 => 26,  88 => 25,  84 => 23,  77 => 19,  70 => 15,  58 => 5,  56 => 4,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/_candidature_evaluation_sections.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\partials\\_candidature_evaluation_sections.html.twig");
    }
}
