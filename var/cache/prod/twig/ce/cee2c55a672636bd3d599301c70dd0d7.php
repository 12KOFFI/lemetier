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

/* partials/_document_upload.html.twig */
class __TwigTemplate_fb2871c9cc42da123d0cc913a0f1b4b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_document_upload.html.twig"));

        // line 1
        $context["input_class"] = ((array_key_exists("input_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["input_class"] ?? null), "w-full px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition")) : ("w-full px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"));
        // line 2
        yield "
<div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-8\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["document_labels"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["config"]) {
            // line 5
            yield "        ";
            // line 6
            yield "        ";
            $context["fileName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), $context["field"], [], "any", false, false, false, 6);
            // line 7
            yield "        ";
            $context["fileExists"] = ( !(null === ($context["fileName"] ?? null)) && (($context["fileName"] ?? null) != ""));
            // line 8
            yield "        ";
            $context["isImage"] = CoreExtension::matches("/\\.(jpg|jpeg|png|gif|webp|svg)\$/i", ($context["fileName"] ?? null));
            // line 9
            yield "        ";
            // line 10
            yield "        ";
            $context["fileUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("media/" . CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 10)) . "/") . ($context["fileName"] ?? null)));
            // line 11
            yield "        
        <div class=\"transform transition-all duration-300 hover:-translate-y-1\">
            <div class=\"bg-white rounded-xl p-5 border-2 border-dashed border-slate-200 hover:border-indigo-400 hover:bg-indigo-50/30 transition-all group cursor-pointer upload-area\" data-field=\"";
            // line 13
            yield (string) $this->escaper->escape($context["field"], "html", null, true);
            yield "\">
                <div class=\"flex flex-col items-center text-center\">
                    <!-- Cadre d\x27aperçu (toujours visible) -->
                    <div class=\"w-full mb-3 bg-slate-50 rounded-lg border border-slate-200 overflow-hidden\" style=\"height: 120px;\">
                        <div class=\"w-full h-full flex items-center justify-center preview-container\" id=\"preview-";
            // line 17
            yield (string) $this->escaper->escape($context["field"], "html", null, true);
            yield "\">
                            ";
            // line 18
            if (((($tmp = ($context["fileExists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["isImage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 19
                yield "                                <img src=\"";
                yield (string) $this->escaper->escape(($context["fileUrl"] ?? null), "html", null, true);
                yield "\" 
                                     alt=\"Aperçu ";
                // line 20
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "text", [], "any", false, false, false, 20), "html", null, true);
                yield "\" 
                                     class=\"w-full h-full object-contain p-1\"
                                     onerror=\"this.parentElement.innerHTML = \x27<i class=\\\x27fas fa-exclamation-triangle text-red-500 text-2xl\\\x27></i><span class=\\\x27text-xs text-red-500 ml-1\\\x27>Erreur</span>\x27\">
                            ";
            } elseif (((($tmp =             // line 23
($context["fileExists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["isImage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 24
                yield "                                ";
                // line 25
                yield "                                <div class=\"flex flex-col items-center justify-center text-slate-400\">
                                    <i class=\"fas fa-file-pdf text-4xl text-red-500 mb-1\"></i>
                                    <span class=\"text-xs\">PDF</span>
                                </div>
                            ";
            } else {
                // line 30
                yield "                                <div class=\"flex flex-col items-center justify-center text-slate-400\">
                                    <i class=\"fas fa-";
                // line 31
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "icon", [], "any", false, false, false, 31), "html", null, true);
                yield " text-3xl mb-1\"></i>
                                    <span class=\"text-xs\">Aucun fichier</span>
                                </div>
                            ";
            }
            // line 35
            yield "                        </div>
                    </div>
                    
                ";
            // line 38
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["field"], [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "hidden file-input", "data-field" =>             // line 40
$context["field"], "accept" => CoreExtension::getAttribute($this->env, $this->source,             // line 41
$context["config"], "accept", [], "any", false, false, false, 41), "data-max-size" => "10485760", "data-current-file" => (((            // line 43
array_key_exists("fileName", $context) &&  !(null === $context["fileName"]))) ? ($context["fileName"]) : (""))]]);
            // line 44
            yield "
                ";
            // line 46
            yield "                    
                    <label class=\"block text-sm font-semibold text-slate-700 mb-1\">
                        ";
            // line 48
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "text", [], "any", false, false, false, 48), "html", null, true);
            yield "
                        <span class=\"text-xs font-normal text-slate-500 ml-1\">(";
            // line 49
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "formats", [], "any", false, false, false, 49), "html", null, true);
            yield ")</span>
                    </label>

                    ";
            // line 53
            yield "                    ";
            if ((($tmp = ($context["fileExists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                        <div class=\"mt-4 w-full\">
                            <a href=\"";
                // line 55
                yield (string) $this->escaper->escape(($context["fileUrl"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" class=\"inline-flex items-center justify-center w-full sm:w-auto px-4 py-2.5 rounded-lg bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition shadow-sm hover:shadow focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                                <i class=\"fas fa-download mr-2\"></i> Télécharger
                            </a>
                        </div>
                    ";
            }
            // line 60
            yield "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['config'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 64
        yield "</div>

<script>
document.addEventListener(\x27DOMContentLoaded\x27, function() {
    // Gestion du clic sur la zone d\x27upload
    document.querySelectorAll(\x27.upload-area\x27).forEach(area => {
        area.addEventListener(\x27click\x27, function(e) {
            // Ne pas déclencher si on clique sur un lien (comme le téléchargement)
            if (e.target.tagName === \x27A\x27 || e.target.closest(\x27a\x27)) {
                return;
            }
            
            const field = this.dataset.field;
            const fileInput = document.querySelector(`.file-input[data-field=\"\${field}\"]`);
            if (fileInput) {
                fileInput.click();
            }
        });
    });

    // Gestion du changement de fichier
    document.querySelectorAll(\x27.file-input\x27).forEach(input => {
        input.addEventListener(\x27change\x27, function(e) {
            const field = this.dataset.field;
            const file = e.target.files[0];
            
            // Vérifier la taille du fichier
            if (file && file.size > parseInt(this.dataset.maxSize)) {
                alert(\x27Le fichier dépasse la limite de \x27 + (parseInt(this.dataset.maxSize) / 1048576) + \x27 Mo.\x27);
                this.value = \x27\x27;
                return;
            }
            
            if (file) {
                // Mettre à jour l\x27aperçu
                const previewContainer = document.getElementById(`preview-\${field}`);
                
                if (file.type.startsWith(\x27image/\x27)) {
                    const reader = new FileReader();
                    reader.onload = function(readerEvent) {
                        previewContainer.innerHTML = `<img src=\"\${readerEvent.target.result}\" alt=\"Aperçu\" class=\"w-full h-full object-contain p-1\">`;
                    }
                    reader.readAsDataURL(file);
                } else {
                    // Pour les PDF, afficher une icône PDF
                    previewContainer.innerHTML = `
                        <div class=\"flex flex-col items-center justify-center text-slate-400\">
                            <i class=\"fas fa-file-pdf text-4xl text-red-500 mb-1\"></i>
                            <span class=\"text-xs\">PDF sélectionné</span>
                        </div>
                    `;
                }
            }
        });
    });
});
</script>

<style>
.upload-area {
    transition: all 0.3s ease;
    cursor: pointer;
}

.upload-area:hover {
    box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.1);
}

.preview-container {
    transition: all 0.2s ease;
}

.upload-area:hover .preview-container {
    background-color: rgba(79, 70, 229, 0.05);
}

/* Style pour le cadre d\x27aperçu */
.bg-slate-50 {
    background-color: #f8fafc;
}

.object-contain {
    object-fit: contain;
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_document_upload.html.twig";
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
        return array (  176 => 64,  166 => 60,  158 => 55,  155 => 54,  152 => 53,  146 => 49,  142 => 48,  138 => 46,  135 => 44,  133 => 43,  132 => 41,  131 => 40,  130 => 38,  125 => 35,  118 => 31,  115 => 30,  108 => 25,  106 => 24,  104 => 23,  98 => 20,  93 => 19,  91 => 18,  87 => 17,  80 => 13,  76 => 11,  73 => 10,  71 => 9,  68 => 8,  65 => 7,  62 => 6,  60 => 5,  56 => 4,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/_document_upload.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\partials\\_document_upload.html.twig");
    }
}
