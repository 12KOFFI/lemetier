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

/* candidature/print/fiche.html.twig */
class __TwigTemplate_a0117da02c668ce4e0dd08733d88c089 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/print/fiche.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\x27fr\x27>
<head>
    <meta charset=\x27UTF-8\x27>
    <title>GROUPE LEMETIER - FICHE D\x27INSCRIPTION CANDIDAT</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 0.65cm 1cm 2.15cm 1cm;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: \x27Helvetica Neue\x27, Helvetica, Arial, sans-serif;
            font-size: 13px;
            color: #0f172a;
            line-height: 1.5;
            background: #fff;
        }

        /* ===== En-tête ===== */
        .header-section {
            text-align: center;
            margin-bottom: 18px;
        }
        .header-section img {
            max-width: 100%;
            height: auto;
            max-height: 85px;
        }

        /* ===== Titre ===== */
        .title-badge {
            text-align: center;
            background: #0055a4;
            color: #ffffff;
            font-weight: 700;
            font-size: 1.3em;
            letter-spacing: 0.8px;
            padding: 8px 12px;
            border-radius: 6px;
            margin-bottom: 22px;
            text-transform: uppercase;
        }

        /* ===== Cartes d\x27information ===== */
        .info-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-left: 4px solid #0055a4; /* Bande bleue d\x27accentuation */
            border-radius: 6px;
            padding: 14px 18px;
            margin-bottom: 18px; /* Espacement aéré entre les blocs */
            position: relative;
        }
        .card-title {
            font-weight: 700;
            color: #0055a4;
            font-size: 1.05em;
            border-bottom: 1.5px solid #cbd5e1;
            padding-bottom: 6px;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        /* ===== Lignes & Champs ===== */
        .row-table {
            width: 100%;
            border-collapse: collapse;
        }
        .row-table td {
            padding: 5px 0;
            vertical-align: top;
        }
        .label {
            font-weight: 700;
            color: #334155;
            width: 180px;
        }
        .colon {
            width: 15px;
            color: #64748b;
            font-weight: 700;
        }
        .value {
            font-weight: 600;
            color: #0f172a;
        }

        /* ===== QR Code ===== */
        .qr-code-box {
            position: absolute;
            top: 14px;
            right: 18px;
            text-align: center;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 5px;
        }
        .qr-code-box img {
            width: 75px;
            height: 75px;
            display: block;
        }
        .qr-code-box small {
            font-size: 8px;
            font-weight: 700;
            color: #0055a4;
            margin-top: 3px;
            display: block;
            text-transform: uppercase;
        }

        /* ===== Pied de page (Fixé en bas de la page A4) ===== */
        .footer-wrap {
            position: fixed;
            left: 1cm;
            right: 1cm;
            bottom: 0.35cm;
            height: 1.35cm;
            text-align: center;
            background: #ffffff;
            border-top: 1px solid #cbd9e7;
            padding-top: 3px;
        }

        .project-logo {
            display: block;
            width: auto;
            max-width: 180px;
            max-height: 35px;
            margin: 0 auto 2px auto;
        }

        .footer {
            color: #64748b;
            font-size: 8px;
            line-height: 1.25;
            font-weight: 500;
        }

        .footer-date {
            color: #0055a4;
            margin-bottom: 1px;
        }

        .footer-copyright {
            color: #64748b;
        }
    </style>
</head>
<body>

    <!-- En-tête -->
    <div class=\"header-section\">
        <img src=\x27";
        // line 161
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", true, true, false, 161) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", false, false, false, 161)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "entete", [], "any", false, false, false, 161), "html", null, true)) : (""));
        yield "\x27 alt=\x27En-tête\x27>
    </div>

    <!-- Titre principal -->
    <div class=\x27title-badge\x27>Fiche d\x27Inscription Candidat - Recrutement GROUPE LEMETIER</div>

    ";
        // line 167
        $context["user"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "user", [], "any", false, false, false, 167);
        // line 168
        yield "    ";
        $context["etablissement"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "etablissement", [], "any", false, false, false, 168);
        // line 169
        yield "    ";
        $context["localite"] = (((($tmp = ($context["etablissement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "localite", [], "any", false, false, false, 169)) : (null));
        // line 170
        yield "    ";
        $context["metier"] = CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "metier", [], "any", false, false, false, 170);
        // line 171
        yield "    ";
        $context["etablissementMetier"] = ((((($tmp = ($context["etablissement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["metier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "etablissementMetiers", [], "any", false, false, false, 171), function ($__em__) use ($context, $macros) { $context["em"] = $__em__; return ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["em"] ?? null), "metier", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["em"] ?? null), "metier", [], "any", false, false, false, 171), "id", [], "any", false, false, false, 171) == CoreExtension::getAttribute($this->env, $this->source, ($context["metier"] ?? null), "id", [], "any", false, false, false, 171))); }))) : (null));
        // line 172
        yield "
    <!-- Section 1 : Candidat -->
    <div class=\"info-card\">
        <div class=\"card-title\">1. Informations sur le Candidat</div>
        
        <div class=\"qr-code-box\">
            <img src=\"";
        // line 178
        yield (string) $this->escaper->escape($this->extensions['App\Twig\QrCodeExtension']->dataUri(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 178)), "html", null, true);
        yield "\" width=\"75\" height=\"75\" alt=\"QR Code\">
            <small>Scan vérification</small>
        </div>
        
        <div style=\"padding-right: 105px;\">
            <table class=\"row-table\">
                <tr>
                    <td class=\"label\">N° de Candidature</td>
                    <td class=\"colon\">:</td>
                    <td class=\"value\" style=\"color: #0055a4; font-weight: 800; font-size: 1.05em;\">";
        // line 187
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "numero", [], "any", false, false, false, 187), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td class=\"label\">Nom & Prénoms</td>
                    <td class=\"colon\">:</td>
                    <td class=\"value\">
                        ";
        // line 193
        $context["civilite"] = ((((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "sexe", [], "any", false, false, false, 193) == "MASCULIN"))) ? ("M.") : ("Mme"));
        // line 194
        yield "                        <strong>";
        yield (string) $this->escaper->escape(($context["civilite"] ?? null), "html", null, true);
        yield " ";
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 194)), "html", null, true)) : (""));
        yield " ";
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenoms", [], "any", false, false, false, 194)), "html", null, true)) : (""));
        yield "</strong>
                        ";
        // line 195
        if (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nomjeunefille", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 196
            yield "                            <span style=\"color:#64748b; font-weight:500;\"> (née ";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nomjeunefille", [], "any", false, false, false, 196)), "html", null, true);
            yield ")</span>
                        ";
        }
        // line 198
        yield "                    </td>
                </tr>
                <tr>
                    <td class=\"label\">Date & Lieu de naissance</td>
                    <td class=\"colon\">:</td>
                    <td class=\"value\">";
        // line 203
        yield (string) ((((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "datenaissance", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "datenaissance", [], "any", false, false, false, 203), "d/m/Y"), "html", null, true)) : ("-"));
        yield " à ";
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lieunaissance", [], "any", false, false, false, 203)), "html", null, true)) : ("-"));
        yield "</td>
                </tr>
                <tr>
                    <td class=\"label\">Contact</td>
                    <td class=\"colon\">:</td>
                    <td class=\"value\">";
        // line 208
        yield (string) (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "contact", [], "any", false, false, false, 208), "html", null, true)) : ("-"));
        yield "</td>
                </tr>
                <tr>
                    <td class=\"label\">Date d\x27inscription</td>
                    <td class=\"colon\">:</td>
                    <td class=\"value\">";
        // line 213
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["candidature"] ?? null), "creation", [], "any", false, false, false, 213), "d/m/Y à H:i", "Africa/Abidjan"), "html", null, true);
        yield "</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Section 2 : Centre de Formation -->
    <div class=\"info-card\">
        <div class=\"card-title\">2. Centre de Formation</div>
        <table class=\"row-table\">
            <tr>
                <td class=\"label\">Établissement</td>
                <td class=\"colon\">:</td>
                <td class=\"value\"><strong>";
        // line 226
        yield (string) (((($tmp = ($context["etablissement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissement"] ?? null), "nom", [], "any", false, false, false, 226), "html", null, true)) : ("-"));
        yield "</strong></td>
            </tr>
            ";
        // line 228
        if ((($tmp = ($context["localite"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 229
            yield "            <tr>
                <td class=\"label\">Localité</td>
                <td class=\"colon\">:</td>
                <td class=\"value\">";
            // line 232
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["localite"] ?? null), "nom", [], "any", false, false, false, 232)), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        // line 235
        yield "        </table>
    </div>

    <!-- Section 3 : Métier & Formation -->
    <div class=\"info-card\">
        <div class=\"card-title\">3. Métier et Formation</div>
        <table class=\"row-table\">
            <tr>
                <td class=\"label\">Métier choisi</td>
                <td class=\"colon\">:</td>
                <td class=\"value\"><strong>";
        // line 245
        yield (string) (((($tmp = ($context["metier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["metier"] ?? null), "nom", [], "any", false, false, false, 245)), "html", null, true)) : ("-"));
        yield "</strong></td>
            </tr>
            ";
        // line 247
        if ((($tmp = ($context["etablissementMetier"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 248
            yield "            <tr>
                <td class=\"label\">Niveau requis</td>
                <td class=\"colon\">:</td>
                <td class=\"value\">";
            // line 251
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "niveauRequis", [], "any", false, false, false, 251)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "niveauRequis", [], "any", false, false, false, 251), "html", null, true)) : ("-"));
            yield "</td>
            </tr>
            <tr>
                <td class=\"label\">Durée formation</td>
                <td class=\"colon\">:</td>
                <td class=\"value\">";
            // line 256
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "dureeFormation", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementMetier"] ?? null), "dureeFormation", [], "any", false, false, false, 256), "html", null, true)) : ("-"));
            yield "</td>
            </tr>
            ";
        }
        // line 259
        yield "        </table>
    </div>

    <!-- Zone Logo & Pied de page fixe -->
    <div class=\"footer-wrap\">
        ";
        // line 264
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "logo", [], "any", true, true, false, 264) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "logo", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 265
            yield "            <img src=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "logo", [], "any", false, false, false, 265), "html", null, true);
            yield "\" alt=\"Logo Projet\" class=\"project-logo\">
        ";
        }
        // line 267
        yield "        
        <div class=\"footer\">
            <div>Généré le ";
        // line 269
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(((array_key_exists("now", $context)) ? (Twig\Extension\CoreExtension::default(($context["now"] ?? null), "now")) : ("now")), "d/m/Y à H:i", "Africa/Abidjan"), "html", null, true);
        yield "</div>
            <div>© ";
        // line 270
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " GROUPE LEMETIER — Tous droits réservés</div>
        </div>
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
        return "candidature/print/fiche.html.twig";
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
        return array (  403 => 270,  399 => 269,  395 => 267,  389 => 265,  387 => 264,  380 => 259,  374 => 256,  366 => 251,  361 => 248,  359 => 247,  354 => 245,  342 => 235,  336 => 232,  331 => 229,  329 => 228,  324 => 226,  308 => 213,  300 => 208,  290 => 203,  283 => 198,  277 => 196,  275 => 195,  266 => 194,  264 => 193,  255 => 187,  243 => 178,  235 => 172,  232 => 171,  229 => 170,  226 => 169,  223 => 168,  221 => 167,  212 => 161,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/print/fiche.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\print\\fiche.html.twig");
    }
}
