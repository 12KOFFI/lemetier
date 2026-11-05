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

/* candidature/print/convocation_visite.html.twig */
class __TwigTemplate_59560d1d6358fd354817324ed8fbf14d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/print/convocation_visite.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\x27fr\x27>
<head>
    <meta charset=\x27UTF-8\x27>
    <meta name=\x27viewport\x27 content=\x27width=device-width, initial-scale=1.0\x27>
    <title>GROUPE LEMETIER - CONVOCATION VISITE MÉDICALE</title>
    <style>
        @page{
            size: A4;
            margin: 0cm;
        }
        * {
            box-sizing: border-box;
        }
        .container {
            margin: 0.4cm;
        }
        .row{
            display:flex;
            justify-content:flex-start;
            align-items:stretch;
            flex-wrap:nowrap;
            padding-bottom : 10px;
        }
        .row_large{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: stretch;
            align-content: stretch;
        }
        .cell{
            min-height: 21px;
            flex-grow: 1;
            flex-basis: 100%;
            padding: 1px;
        }
        .info{
            margin-left: 0px;
        }
        .title{
            text-align: center;
            font-size: 1em;
            margin-top: 10px;
        }
        .subtitle {
            padding: 3px;
            font-size: 1em;
            text-align: center;
            background: #a7f3d0;
        }
        .subtitle2 {
            padding: 2px;
            font-style: italic;
            text-decoration: none;
        }
        .subtitle3 {
            text-align:center;
            text-decoration: none;
            margin-bottom: 10px;
            font-style: italic;
        }
        .title2{
            flex-grow: 1;
            flex-basis: 100%;
            text-align: left;
            margin: 7px 20px 7px 0;
            border-bottom: 1px solid silver;
            border-width: thin;
            margin-left: 20px;
        }
        .label{
            font-size: 1em;
        }
        .result{
            font-weight: bold;
            font-size: .9em;
        }
        @media (max-width: 768px){
            .row{
                flex-wrap: wrap;
            }
        }
        .footer {
            position: fixed;
            bottom: 10;
            width: 100%;
            text-align: center;
        }
        .footer img {
            display: block;
            margin: 0 auto;
        }
        .table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid black;
            padding: 8px;
        }
        .badge {
            color: #ff0040;
        }
    </style>
</head>
<body>
    <div class=\x27container\x27>
        <img src=\x27";
        // line 111
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", true, true, false, 111) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", false, false, false, 111)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", false, false, false, 111), "html", null, true)) : (""));
        yield "\x27 style=\x27width: 100%\x27>

        <br><br>

        <section for=\x27title\x27>
            <div class=\x27row\x27>
                <div class=\x27cell\x27>
                    <div class=\x27subtitle\x27>
                        GROUPE LEMETIER <br>
                        CONVOCATION - VISITE MÉDICALE D\x27APTITUDE
                    </div>
                </div>
            </div>
        </section>

        <br>

        <section>
            ";
        // line 129
        $context["user"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 129);
        // line 130
        yield "            <table style=\"width: 100%; border: none; text-align: left\">
                <tr>
                    <td style=\"width: 25%; font-weight: bold\">Numéro d\x27inscription</td>
                    <td>: <span class=\"badge\">";
        // line 133
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 133), "html", null, true);
        yield "</span>
                        <small>(Ce numéro vous servira à consulter votre résultat)</small>
                    </td>
                </tr>
                <tr>
                    <td style=\"font-weight: bold\">Nom</td>
                    <td>: ";
        // line 139
        if ((((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "sexe", [], "any", false, false, false, 139) == "FEMININ")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "situationmat", [], "any", false, false, false, 139) == "MARIE(E)"))) {
            yield "Mme";
        } elseif ((((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "sexe", [], "any", false, false, false, 139) == "FEMININ")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "situationmat", [], "any", false, false, false, 139) == "CELIBATAIRE"))) {
            yield "Mlle";
        } else {
            yield "M.";
        }
        yield "&nbsp;";
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 139)), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr>
                    <td style=\"font-weight: bold\">Prénom(s)</td>
                    <td>: ";
        // line 143
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenoms", [], "any", false, false, false, 143)), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr>
                    <td style=\"font-weight: bold\">Date & lieu de naissance</td>
                    <td>: ";
        // line 147
        yield (string) ((((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "datenaissance", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "datenaissance", [], "any", false, false, false, 147), "d/m/Y"), "html", null, true)) : (""));
        yield " &nbsp; à &nbsp; ";
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lieunaissance", [], "any", false, false, false, 147)), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr>
                    <td style=\"font-weight: bold\">Métier</td>
                    <td>: ";
        // line 151
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 151), "nom", [], "any", false, false, false, 151), "html", null, true)) : (""));
        yield "</td>
                </tr>
            </table>

            <br><br>

            ";
        // line 158
        yield "            <table class=\x27table\x27 cellspacing=\"0\">
                <thead style=\x27background: #f1f1f1\x27>
                    <tr>
                        <th>LIEU DE LA VISITE MEDICALE</th>
                        <th>DATE</th>
                        <th>HEURE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            ";
        // line 169
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "vislieu", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "                                ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "vislieu", [], "any", false, false, false, 170), "html", null, true);
            yield "
                            ";
        } else {
            // line 172
            yield "                                À déterminer
                            ";
        }
        // line 174
        yield "                        </td>
                        <td>
                            ";
        // line 176
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "visdate", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                                ";
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "visdate", [], "any", false, false, false, 177), "d/m/Y"), "html", null, true);
            yield "
                            ";
        } else {
            // line 179
            yield "                                À déterminer
                            ";
        }
        // line 181
        yield "                        </td>
                        <td>
                            ";
        // line 183
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "visdate", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 184
            yield "                                ";
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "visdate", [], "any", false, false, false, 184), "H:i"), "html", null, true);
            yield "
                            ";
        } else {
            // line 186
            yield "                                À déterminer
                            ";
        }
        // line 188
        yield "                        </td>
                    </tr>
                </tbody>
            </table>

            <br><br>

            <b>N.B</b>
            <ul>
                <li>Une pièce d\x27identité et cette convocation sont exigées à l\x27entrée du centre médical ;</li>
                <li>Présentez-vous 30 minutes avant l\x27heure prévue ;</li>
                <li>Venez à jeun si un bilan sanguin est demandé ;</li>
                <li>Munissez-vous de votre carnet de vaccination si disponible.</li>
            </ul>
        </section>

        <section class=\x27footer\x27>
            <img src=\"";
        // line 205
        yield (string) $this->escaper->escape($this->extensions['App\Twig\QrCodeExtension']->dataUri(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 205)), "html", null, true);
        yield "\" width=\"70\" height=\"70\" alt=\"QR Code\"><br>
            <small>©";
        // line 206
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - GROUPE LEMETIER. Tous Droits Réservés</small>
        </section>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "candidature/print/convocation_visite.html.twig";
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
        return array (  319 => 206,  315 => 205,  296 => 188,  292 => 186,  286 => 184,  284 => 183,  280 => 181,  276 => 179,  270 => 177,  268 => 176,  264 => 174,  260 => 172,  254 => 170,  252 => 169,  239 => 158,  230 => 151,  221 => 147,  214 => 143,  199 => 139,  190 => 133,  185 => 130,  183 => 129,  162 => 111,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/print/convocation_visite.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\print\\convocation_visite.html.twig");
    }
}
