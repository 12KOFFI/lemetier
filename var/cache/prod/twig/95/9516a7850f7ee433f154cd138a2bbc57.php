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

/* candidature/print/convocation.html.twig */
class __TwigTemplate_b25827567ddcd8914e8f234d7be009bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/print/convocation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\x27fr\x27>
<head>
    <meta charset=\x27UTF-8\x27>
    <meta name=\x27viewport\x27 content=\x27width=device-width, initial-scale=1.0\x27>
    <title>GROUPE LEMETIER - CONVOCATION CANDIDAT</title>
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
            background: lightgreen;
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
                    <div class=\x27subtitle\x27>GROUPE LEMETIER <br> CONVOCATION - ENTRETIEN DE SÉLECTION</div>
                </div>
            </div>
        </section>
        <br>
        <section>
            ";
        // line 124
        $context["user"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 124);
        // line 125
        yield "            <table style=\"width: 100%; border: none; text-align: left\">
                <tr><td style=\"width: 25%; font-weight: bold\">Numéro d\x27inscription</td><td>: <span class=\"badge\">";
        // line 126
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 126), "html", null, true);
        yield "</span> <small>(Ce numéro vous servira à consulter votre résultat)</small></td></tr>
                <tr><td style=\"font-weight: bold\">Nom</td><td>: ";
        // line 127
        if ((((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "sexe", [], "any", false, false, false, 127) == "FEMININ")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "situationmat", [], "any", false, false, false, 127) == "MARIE(E)"))) {
            yield "Mme";
        } elseif ((((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "sexe", [], "any", false, false, false, 127) == "FEMININ")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "situationmat", [], "any", false, false, false, 127) == "CELIBATAIRE"))) {
            yield "Mlle";
        } else {
            yield "M.";
        }
        yield "&nbsp;";
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 127)), "html", null, true)) : (""));
        yield "</td></tr>
                <tr><td style=\"font-weight: bold\">Prénom(s)</td><td>: ";
        // line 128
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenoms", [], "any", false, false, false, 128)), "html", null, true)) : (""));
        yield "</td></tr>
                <tr><td style=\"font-weight: bold\">Date & lieu de naissance</td><td>: ";
        // line 129
        yield (string) ((((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "datenaissance", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "datenaissance", [], "any", false, false, false, 129), "d/m/Y"), "html", null, true)) : (""));
        yield " &nbsp; à &nbsp; ";
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lieunaissance", [], "any", false, false, false, 129)), "html", null, true)) : (""));
        yield "</td></tr>
            </table>
            
            <br><br>
            
            ";
        // line 135
        yield "            <table class=\x27table\x27 cellspacing=\"0\">
                <thead style=\x27background: #f1f1f1\x27>
                    <tr>
                        <th>CENTRE</th>
                        <th>JURY</th>
                        <th>DATE</th>
                        <th>HEURE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        ";
        // line 147
        yield "                        <td>
                            ";
        // line 148
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entlieu", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 149
            yield "                                ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entlieu", [], "any", false, false, false, 149), "html", null, true);
            yield "
                ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 150
($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "                    ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 151), "nom", [], "any", false, false, false, 151), "html", null, true);
            yield "
                ";
        } else {
            // line 153
            yield "                    À déterminer
                ";
        }
        // line 155
        yield "            </td>

            ";
        // line 158
        yield "            <td>
                ";
        // line 159
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "jury", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 160
            yield "                    Jury ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "jury", [], "any", false, false, false, 160), "html", null, true);
            yield "
                ";
        } else {
            // line 162
            yield "                    À déterminer
                ";
        }
        // line 164
        yield "            </td>

            ";
        // line 167
        yield "            <td>
                ";
        // line 168
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entdate", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "                    ";
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entdate", [], "any", false, false, false, 169), "d/m/Y"), "html", null, true);
            yield "
                ";
        } else {
            // line 171
            yield "                    À déterminer
                ";
        }
        // line 173
        yield "            </td>

            ";
        // line 176
        yield "            <td>
                ";
        // line 177
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entdate", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "                    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "vague", [], "any", false, false, false, 178) == 2) || ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "entdate", [], "any", false, false, false, 178), "H") >= 13))) {
                // line 179
                yield "                        13h00 - 15h00 (Vague 2)
                    ";
            } else {
                // line 181
                yield "                        08h00 - 12h00 (Vague 1)
                    ";
            }
            // line 183
            yield "                ";
        } else {
            // line 184
            yield "                    À déterminer
                ";
        }
        // line 186
        yield "            </td>
        </tr>
        <tr>
            <td colspan=\x274\x27 style=\x27background: #fbfbfb; padding: 5px 0 5px 0\x27>
                <small>
                    <b>MÉTIER</b> : ";
        // line 191
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 191), "nom", [], "any", false, false, false, 191), "html", null, true)) : (""));
        yield "
                </small>
            </td>
        </tr>
    </tbody>
</table>
            
            <br><br>
            
            <b>N.B</b>
            <ul>
                <li>Une pièce d\x27identité et cette convocation sont exigées à l\x27entrée de la salle d\x27entretien ;</li>
                <li>Présentez-vous 30 minutes avant l\x27heure prévue.</li>
            </ul>
        </section>
        <section class=\x27footer\x27>
            <img src=\"";
        // line 207
        yield (string) $this->escaper->escape($this->extensions['App\Twig\QrCodeExtension']->dataUri(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 207)), "html", null, true);
        yield "\" width=\"70\" height=\"70\" alt=\"QR Code\"><br>
            <small>©";
        // line 208
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
        return "candidature/print/convocation.html.twig";
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
        return array (  343 => 208,  339 => 207,  320 => 191,  313 => 186,  309 => 184,  306 => 183,  302 => 181,  298 => 179,  295 => 178,  293 => 177,  290 => 176,  286 => 173,  282 => 171,  276 => 169,  274 => 168,  271 => 167,  267 => 164,  263 => 162,  257 => 160,  255 => 159,  252 => 158,  248 => 155,  244 => 153,  238 => 151,  236 => 150,  231 => 149,  229 => 148,  226 => 147,  213 => 135,  203 => 129,  199 => 128,  187 => 127,  183 => 126,  180 => 125,  178 => 124,  162 => 111,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/print/convocation.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\print\\convocation.html.twig");
    }
}
