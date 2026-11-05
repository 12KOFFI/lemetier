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

/* admis/new.html.twig */
class __TwigTemplate_dad24254f728641c83810ddaa84bb235 extends Template
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
            'datatables_js' => [$this, 'block_datatables_js'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/new.html.twig"));

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

        yield "Nouvelle Inscription Définitive";
        
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
        yield "    <div class=\"container-fluid\">
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Nouvelle Inscription Définitive</h1>
            <a href=\"";
        // line 9
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
            </a>
        </div>

        ";
        // line 14
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 14))) {
            // line 15
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 16
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 17
                    yield "                    <div class=\"alert alert-";
                    yield (string) ((($context["type"] == "error")) ? ("danger") : ($this->escaper->escape($context["type"], "html", null, true)));
                    yield " alert-dismissible fade show\" role=\"alert\">
                        ";
                    // line 18
                    yield (string) $this->escaper->escape($context["message"], "html", null, true);
                    yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 22
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 23
            yield "        ";
        }
        // line 24
        yield "
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">
                    Inscription Définitive - ";
        // line 28
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "
                </h6>
            </div>
            <div class=\"card-body\">
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle\"></i>
                            <strong>Processus d\x27inscription :</strong><br>
                            1. Sélectionnez le candidat admis dans la liste déroulante<br>
                            2. Cochez la case de confirmation pour valider l\x27engagement<br>
                            3. Cliquez sur \"Enregistrer l\x27inscription\"
                        </div>
                    </div>
                </div>

                ";
        // line 44
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-3\">
                            ";
        // line 49
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidature", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Candidat Admis *"]);
        yield "
                            ";
        // line 50
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidature", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            ";
        // line 51
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "candidature", [], "any", false, false, false, 51), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Seuls les candidats admis (résultat = 2) et non encore inscrits apparaissent dans cette liste.</small>
                        </div>
                    </div>
                </div>

                <div class=\"card bg-warning bg-gradient mb-4\">
                    <div class=\"card-body\">
                        <div class=\"form-group mb-0\">
                            <div class=\"form-check\">
                                ";
        // line 61
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "confirme", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                ";
        // line 62
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "confirme", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-check-label fw-bold"], "label" => "Je confirme vouloir poursuivre la formation jusqu\x27au bout *"]);
        yield "
                                ";
        // line 63
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "confirme", [], "any", false, false, false, 63), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\">
                                En cochant cette case, le candidat s\x27engage à suivre la formation jusqu\x27à son terme.
                            </small>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"";
        // line 75
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_index");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\" id=\"submitBtn\">
                                <i class=\"fas fa-save\"></i> Enregistrer l\x27inscription
                            </button>
                        </div>
                    </div>
                </div>

                ";
        // line 85
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatables_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatables_js"));

        // line 92
        yield "    <script src=\"";
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function() {
            \$(\x27form\x27).on(\x27submit\x27, function(e) {
                var candidatureSelect = \$(\x27#admis_candidature\x27);
                var confirmCheckbox = \$(\x27#admis_confirme\x27);

                if (!candidatureSelect.val()) {
                    e.preventDefault();
                    alert(\x27Veuillez sélectionner un candidat admis.\x27);
                    candidatureSelect.focus();
                    return false;
                }

                if (!confirmCheckbox.is(\x27:checked\x27)) {
                    e.preventDefault();
                    alert(\x27Veuillez cocher la case de confirmation pour valider l\\\x27inscription.\x27);
                    confirmCheckbox.focus();
                    return false;
                }

                if (!confirm(\x27Êtes-vous sûr de vouloir inscrire définitivement ce candidat ?\x27)) {
                    e.preventDefault();
                    return false;
                }

                \$(\x27#submitBtn\x27).prop(\x27disabled\x27, true).html(\x27<i class=\"fas fa-spinner fa-spin\"></i> Enregistrement...\x27);
            });
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
        return "admis/new.html.twig";
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
        return array (  277 => 96,  267 => 95,  256 => 92,  246 => 91,  233 => 85,  220 => 75,  205 => 63,  201 => 62,  197 => 61,  184 => 51,  180 => 50,  176 => 49,  168 => 44,  149 => 28,  143 => 24,  140 => 23,  133 => 22,  122 => 18,  117 => 17,  112 => 16,  107 => 15,  105 => 14,  97 => 9,  92 => 6,  82 => 5,  65 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/new.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\new.html.twig");
    }
}
