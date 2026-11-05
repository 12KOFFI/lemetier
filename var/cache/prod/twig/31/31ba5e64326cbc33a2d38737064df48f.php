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

/* candidature/impressions.html.twig */
class __TwigTemplate_e7d4bb48a1acc007159720bcf7bb9a5c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("base_dashboard.html.twig") : ("base.html.twig")), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/impressions.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Impressions | ";
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
        yield "<div class=\"px-4 pb-16 mx-auto\">
    <!-- En-tête -->
    <div class=\"p-8 mb-8 text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl\">
        <div class=\"flex items-center gap-4\">
            <div class=\"flex items-center justify-center w-16 h-16 rounded-full bg-white/20\">
                <i class=\"text-3xl fas fa-print\"></i>
            </div>
            <div>
                <h1 class=\"text-2xl font-bold\">Impressions</h1>
                <p class=\"text-white/80\">Générez vos fiches, convocations et statistiques</p>
            </div>
        </div>
    </div>

    ";
        // line 20
        yield from $this->load("partials/_flash_messages.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "
    <!-- Blocs en ligne verticale -->
    <div class=\"flex flex-col space-y-6\">
        <!-- Fiche d\x27inscription -->
        <div
            class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
            <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-indigo-50 to-purple-50\">
                <h5 class=\"flex items-center text-lg font-semibold text-indigo-800\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-indigo-100 rounded-lg\">
                        <i class=\"text-indigo-600 fas fa-id-card\"></i>
                    </div>
                    Fiche d\x27inscription
                </h5>
            </div>
            <div class=\"p-6\">
                <form action=\"";
        // line 36
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_print");
        yield "\" method=\"get\" target=\"_blank\">
                    <input type=\"hidden\" name=\"type\" value=\"fiche\">

                    <div class=\"flex flex-col gap-3 md:flex-row\">
                        <div class=\"flex-1\">
                            <input type=\"text\" name=\"numero\" required
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition\"
                                placeholder=\"Numéro d\x27inscription\">
                        </div>

                        <button type=\"submit\"
                            class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium rounded-lg hover:from-indigo-700 hover:to-purple-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                            <i class=\"mr-2 fas fa-print\"></i>
                            Générer
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Convocation -->
        <div
            class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
            <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-green-50 to-emerald-50\">
                <h5 class=\"flex items-center text-lg font-semibold text-green-800\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-green-100 rounded-lg\">
                        <i class=\"text-green-600 fas fa-envelope-open-text\"></i>
                    </div>
                    Convocation
                </h5>
            </div>
            <div class=\"p-6\">
                <form action=\"";
        // line 68
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_print");
        yield "\" method=\"get\" target=\"_blank\">
                    <input type=\"hidden\" name=\"type\" value=\"convocation\">

                    <div class=\"flex flex-col gap-3 md:flex-row\">
                        <div class=\"flex-1\">
                            <input type=\"text\" name=\"numero\" required
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition\"
                                placeholder=\"Numéro d\x27inscription\">
                        </div>

                        <button type=\"submit\"
                            class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-medium rounded-lg hover:from-green-700 hover:to-emerald-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                            <i class=\"mr-2 fas fa-print\"></i>
                            Générer
                        </button>
                    </div>
                </form>
            </div>
        </div>

        ";
        // line 88
        if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 89
            yield "<!-- Statistiques -->
<div class=\"bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden hover:shadow-2xl transition-all duration-300\">
    <div class=\"border-b border-slate-200 bg-gradient-to-r from-blue-50 to-cyan-50 px-6 py-4\">
        <h5 class=\"text-lg font-semibold text-blue-800 flex items-center\">
            <div class=\"w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3\">
                <i class=\"fas fa-chart-bar text-blue-600\"></i>
            </div>
            Statistiques
        </h5>
    </div>
    <div class=\"p-6\">
        <form action=\"";
            // line 100
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_print");
            yield "\" method=\"get\" target=\"_blank\">
            <input type=\"hidden\" name=\"type\" value=\"stat\">
            
            <div class=\"flex flex-col md:flex-row gap-3\">
                <div class=\"flex-1\">
                    <select name=\"metier\" 
                            class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-white\">
                        <option value=\"\">Tous les métiers</option>
                        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                // line 109
                yield "                            <option value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 109), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 109), "html", null, true);
                yield "</option>
                        ";
                $context['_iterated'] = true;
            }
            // line 110
            if (!$context['_iterated']) {
                // line 111
                yield "                            ";
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 112
                    yield "                                <option value=\"\" disabled>Aucun métier associé</option>
                            ";
                }
                // line 114
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 115
            yield "                    </select>
                </div>
                
                <div class=\"md:w-48 w-full\">
                    <select name=\"stat_type\" 
                            class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-white\">
                        <option value=\"stat\">Tableau général</option>
                        <option value=\"centre\">Par centre</option>
                    </select>
                </div>
                
                <button type=\"submit\" 
                        class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-medium rounded-lg hover:from-blue-700 hover:to-cyan-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                    <i class=\"fas fa-chart-pie mr-2\"></i>
                    Générer
                </button>
            </div>
        </form>
        
        ";
            // line 135
            yield "        ";
            if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && Twig\Extension\CoreExtension::testEmpty(($context["metiers"] ?? null)))) {
                // line 136
                yield "        <div class=\"mt-4 p-3 bg-amber-50 rounded-lg text-sm text-amber-700\">
            <i class=\"fas fa-info-circle mr-2\"></i>
            Aucun métier n\x27est associé à votre établissement.
        </div>
        ";
            }
            // line 141
            yield "    </div>
</div>
";
        }
        // line 144
        yield "
        ";
        // line 145
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 146
            yield "        ";
            $context["selectedEtablissement"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 146), "request", [], "any", false, false, false, 146), "get", ["etablissement_liste"], "method", false, false, false, 146);
            // line 147
            yield "        ";
            $context["selectedMetier"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 147), "request", [], "any", false, false, false, 147), "get", ["metier_liste"], "method", false, false, false, 147);
            // line 148
            yield "        <div
            class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
            <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-violet-50 to-fuchsia-50\">
                <h5 class=\"flex items-center text-lg font-semibold text-violet-800\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 rounded-lg bg-violet-100\">
                        <i class=\"fas fa-file-excel text-violet-600\"></i>
                    </div>
                    Liste des candidatures enregistrées
                </h5>
            </div>
            <div class=\"p-6\">
                <form action=\"";
            // line 159
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"action\" value=\"export_liste_candidats_inscrits\">

                    <div class=\"grid grid-cols-1 gap-3 md:grid-cols-3\">
                        ";
            // line 163
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 164
                yield "                        <div>
                            <select id=\"export-liste-etablissement\" name=\"etablissement_liste\" required
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-transparent transition bg-white\">
                                <option value=\"\">Sélectionner un établissement</option>
                                ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 169
                    yield "                                <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 169), "html", null, true);
                    yield "\"
                                    ";
                    // line 170
                    if ((($context["selectedEtablissement"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 170) . ""))) {
                        yield "selected";
                    }
                    yield ">
                                    ";
                    // line 171
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "nom", [], "any", false, false, false, 171), "html", null, true);
                    yield "
                                </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['etablissement'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 174
                yield "                            </select>
                        </div>
                        ";
            } else {
                // line 177
                yield "                        ";
                $context["etablissementLie"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["etablissements"] ?? null));
                // line 178
                yield "                        <input type=\"hidden\" name=\"etablissement_liste\"
                            value=\"";
                // line 179
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "id", [], "any", false, false, false, 179), "html", null, true)) : (""));
                yield "\">
                        <div>
                            <input type=\"text\"
                                value=\"";
                // line 182
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "nom", [], "any", false, false, false, 182), "html", null, true)) : ("Aucun établissement associé"));
                yield "\"
                                disabled
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-100 text-slate-600\">
                        </div>
                        ";
            }
            // line 187
            yield "
                        <div>
                            <select id=\"export-liste-metier\" name=\"metier_liste\"
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-transparent transition bg-white\"
                                ";
            // line 191
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield ">
                                <option value=\"TOUS\"
                                    ";
            // line 193
            if ((Twig\Extension\CoreExtension::testEmpty(($context["selectedMetier"] ?? null)) || (($context["selectedMetier"] ?? null) == "TOUS"))) {
                yield "selected";
            }
            yield ">Tous
                                    les métiers</option>
                                ";
            // line 195
            if ( !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 196
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                    // line 197
                    yield "                                <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 197), "html", null, true);
                    yield "\"
                                    ";
                    // line 198
                    if ((($context["selectedMetier"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 198) . ""))) {
                        yield "selected";
                    }
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 198), "html", null, true);
                    yield "
                                </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 201
                yield "                                ";
            }
            // line 202
            yield "                            </select>
                        </div>

                        <div class=\"grid grid-cols-1 gap-3 mt-1 md:col-span-3 md:grid-cols-2\">
                            <div>
                                <label class=\"block mb-1 text-xs font-medium text-slate-500\">Du (Inclus)</label>
                                <input type=\"date\" name=\"date_debut\"
                                    class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-transparent transition bg-white\">
                            </div>
                            <div>
                                <label class=\"block mb-1 text-xs font-medium text-slate-500\">Au (Inclus)</label>
                                <input type=\"date\" name=\"date_fin\"
                                    class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:border-transparent transition bg-white\">
                            </div>
                        </div>

                        <div class=\"flex justify-end mt-2 md:col-span-3\">
                            <button type=\"submit\"
                                class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white font-medium rounded-lg hover:from-violet-700 hover:to-fuchsia-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                                <i class=\"mr-2 fas fa-download\"></i>
                                Exporter Excel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        ";
        }
        // line 230
        yield "

        <!-- Exportation des candidats en attente (etustatut IS NULL) -->
        ";
        // line 233
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 234
            yield "        ";
            $context["selectedEtablissementAttente"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 234), "request", [], "any", false, false, false, 234), "get", ["etablissement_attente"], "method", false, false, false, 234);
            // line 235
            yield "        ";
            $context["selectedMetierAttente"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 235), "request", [], "any", false, false, false, 235), "get", ["metier_attente"], "method", false, false, false, 235);
            // line 236
            yield "        <div
            class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
            <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-yellow-50 to-amber-50\">
                <h5 class=\"flex items-center text-lg font-semibold text-amber-800\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-amber-100 rounded-lg\">
                        <i class=\"fas fa-clock text-amber-600\"></i>
                    </div>
                    Liste des candidats en attente d\x27étude de dossier
                </h5>
            </div>
            <div class=\"p-6\">
                <form action=\"";
            // line 247
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"action\" value=\"export_liste_attente\">

                    <div class=\"grid grid-cols-1 gap-3 md:grid-cols-3\">
                        ";
            // line 251
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 252
                yield "                        <div>
                            <select id=\"export-attente-etablissement\" name=\"etablissement_attente\" required
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition bg-white\">
                                <option value=\"\">Sélectionner un établissement</option>
                                ";
                // line 256
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 257
                    yield "                                <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 257), "html", null, true);
                    yield "\"
                                    ";
                    // line 258
                    if ((($context["selectedEtablissementAttente"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 258) . ""))) {
                        yield "selected";
                    }
                    yield ">
                                    ";
                    // line 259
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "nom", [], "any", false, false, false, 259), "html", null, true);
                    yield "
                                </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['etablissement'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 262
                yield "                            </select>
                        </div>
                        ";
            } else {
                // line 265
                yield "                        ";
                $context["etablissementLie"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["etablissements"] ?? null));
                // line 266
                yield "                        <input type=\"hidden\" name=\"etablissement_attente\"
                            value=\"";
                // line 267
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "id", [], "any", false, false, false, 267), "html", null, true)) : (""));
                yield "\">
                        <div>
                            <input type=\"text\"
                                value=\"";
                // line 270
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "nom", [], "any", false, false, false, 270), "html", null, true)) : ("Aucun établissement associé"));
                yield "\"
                                disabled
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-100 text-slate-600\">
                        </div>
                        ";
            }
            // line 275
            yield "
                        <div>
                            <select id=\"export-attente-metier\" name=\"metier_attente\"
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition bg-white\"
                                ";
            // line 279
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield ">
                                <option value=\"TOUS\"
                                    ";
            // line 281
            if ((Twig\Extension\CoreExtension::testEmpty(($context["selectedMetierAttente"] ?? null)) || (($context["selectedMetierAttente"] ?? null) == "TOUS"))) {
                yield "selected";
            }
            yield ">Tous
                                    les métiers</option>
                                ";
            // line 283
            if ( !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 284
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                    // line 285
                    yield "                                <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 285), "html", null, true);
                    yield "\"
                                    ";
                    // line 286
                    if ((($context["selectedMetierAttente"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 286) . ""))) {
                        yield "selected";
                    }
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 286), "html", null, true);
                    yield "
                                </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 289
                yield "                                ";
            }
            // line 290
            yield "                            </select>
                        </div>

                        <div class=\"grid grid-cols-1 gap-3 mt-1 md:col-span-3 md:grid-cols-2\">
                            <div>
                                <label class=\"block mb-1 text-xs font-medium text-slate-500\">Du (Inclus)</label>
                                <input type=\"date\" name=\"date_debut\"
                                    class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition bg-white\">
                            </div>
                            <div>
                                <label class=\"block mb-1 text-xs font-medium text-slate-500\">Au (Inclus)</label>
                                <input type=\"date\" name=\"date_fin\"
                                    class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition bg-white\">
                            </div>
                        </div>

                        <div class=\"flex justify-end mt-2 md:col-span-3\">
                            <button type=\"submit\"
                                class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-amber-600 to-yellow-600 text-white font-medium rounded-lg hover:from-amber-700 hover:to-yellow-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                                <i class=\"mr-2 fas fa-download\"></i>
                                Exporter Excel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        ";
        }
        // line 318
        yield "

        <!-- Exportation des candidats éligibles aux entretiens (etustatut = 2) -->
";
        // line 321
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 322
            $context["selectedEtablissementEligible"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 322), "request", [], "any", false, false, false, 322), "get", ["etablissement_eligible"], "method", false, false, false, 322);
            // line 323
            $context["selectedMetierEligible"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 323), "request", [], "any", false, false, false, 323), "get", ["metier_eligible"], "method", false, false, false, 323);
            // line 324
            yield "<div class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
    <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-amber-50 to-orange-50\">
        <h5 class=\"flex items-center text-lg font-semibold text-amber-800\">
            <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-amber-100 rounded-lg\">
                <i class=\"fas fa-user-check text-amber-600\"></i>
            </div>
            Liste des candidats éligibles pour les tests d\x27entretien
        </h5>
    </div>
    <div class=\"p-6\">
        <form action=\"";
            // line 334
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"action\" value=\"export_liste_eligibles\">

            <div class=\"grid grid-cols-1 gap-3 md:grid-cols-3\">
                ";
            // line 338
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 339
                yield "                <div>
                    <select id=\"export-eligible-etablissement\" name=\"etablissement_eligible\" required
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition bg-white\">
                        <option value=\"\">Sélectionner un établissement</option>
                        ";
                // line 343
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 344
                    yield "                        <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 344), "html", null, true);
                    yield "\"
                            ";
                    // line 345
                    if ((($context["selectedEtablissementEligible"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 345) . ""))) {
                        yield "selected";
                    }
                    yield ">
                            ";
                    // line 346
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "nom", [], "any", false, false, false, 346), "html", null, true);
                    yield "
                        </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['etablissement'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 349
                yield "                    </select>
                </div>
                ";
            } else {
                // line 352
                yield "                ";
                $context["etablissementLie"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["etablissements"] ?? null));
                // line 353
                yield "                <input type=\"hidden\" name=\"etablissement_eligible\"
                    value=\"";
                // line 354
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "id", [], "any", false, false, false, 354), "html", null, true)) : (""));
                yield "\">
                <div>
                    <input type=\"text\"
                        value=\"";
                // line 357
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "nom", [], "any", false, false, false, 357), "html", null, true)) : ("Aucun établissement associé"));
                yield "\"
                        disabled
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-100 text-slate-600\">
                </div>
                ";
            }
            // line 362
            yield "
                <div>
                    <select id=\"export-eligible-metier\" name=\"metier_eligible\"
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition bg-white\"
                        ";
            // line 366
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield ">
                        <option value=\"TOUS\"
                            ";
            // line 368
            if ((Twig\Extension\CoreExtension::testEmpty(($context["selectedMetierEligible"] ?? null)) || (($context["selectedMetierEligible"] ?? null) == "TOUS"))) {
                yield "selected";
            }
            yield ">Tous
                            les métiers</option>
                        ";
            // line 370
            if ( !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 371
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                    // line 372
                    yield "                        <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 372), "html", null, true);
                    yield "\"
                            ";
                    // line 373
                    if ((($context["selectedMetierEligible"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 373) . ""))) {
                        yield "selected";
                    }
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 373), "html", null, true);
                    yield "
                        </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 376
                yield "                        ";
            }
            // line 377
            yield "                    </select>
                </div>

                <div class=\"grid grid-cols-1 gap-3 mt-1 md:col-span-3 md:grid-cols-2\">
                    <div>
                        <label class=\"block mb-1 text-xs font-medium text-slate-500\">Du (Inclus)</label>
                        <input type=\"date\" name=\"date_debut\"
                            class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition bg-white\">
                    </div>
                    <div>
                        <label class=\"block mb-1 text-xs font-medium text-slate-500\">Au (Inclus)</label>
                        <input type=\"date\" name=\"date_fin\"
                            class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition bg-white\">
                    </div>
                </div>

                <div class=\"flex justify-end mt-2 md:col-span-3\">
                    <button type=\"submit\"
                        class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-amber-600 to-orange-600 text-white font-medium rounded-lg hover:from-amber-700 hover:to-orange-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                        <i class=\"mr-2 fas fa-download\"></i>
                        Exporter Excel
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
";
        }
        // line 405
        yield "
<!-- Exportation des candidats évalués (etustatut = 2 et au moins une note saisie) -->
";
        // line 407
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 408
            $context["selectedEtablissementEvalue"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 408), "request", [], "any", false, false, false, 408), "get", ["etablissement_evalue"], "method", false, false, false, 408);
            // line 409
            $context["selectedMetierEvalue"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 409), "request", [], "any", false, false, false, 409), "get", ["metier_evalue"], "method", false, false, false, 409);
            // line 410
            yield "<div class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
    <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-sky-50 to-blue-50\">
        <h5 class=\"flex items-center text-lg font-semibold text-sky-800\">
            <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-sky-100 rounded-lg\">
                <i class=\"fas fa-clipboard-check text-sky-600\"></i>
            </div>
            Liste des candidats évalués (entretien de sélection)
        </h5>
    </div>
    <div class=\"p-6\">
        <form action=\"";
            // line 420
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"action\" value=\"export_liste_evalues\">

            <div class=\"grid grid-cols-1 gap-3 md:grid-cols-3\">
                ";
            // line 424
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 425
                yield "                <div>
                    <select id=\"export-evalue-etablissement\" name=\"etablissement_evalue\" required
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition bg-white\">
                        <option value=\"\">Sélectionner un établissement</option>
                        ";
                // line 429
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 430
                    yield "                        <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 430), "html", null, true);
                    yield "\"
                            ";
                    // line 431
                    if ((($context["selectedEtablissementEvalue"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 431) . ""))) {
                        yield "selected";
                    }
                    yield ">
                            ";
                    // line 432
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "nom", [], "any", false, false, false, 432), "html", null, true);
                    yield "
                        </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['etablissement'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 435
                yield "                    </select>
                </div>
                ";
            } else {
                // line 438
                yield "                ";
                $context["etablissementLie"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["etablissements"] ?? null));
                // line 439
                yield "                <input type=\"hidden\" name=\"etablissement_evalue\"
                    value=\"";
                // line 440
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "id", [], "any", false, false, false, 440), "html", null, true)) : (""));
                yield "\">
                <div>
                    <input type=\"text\"
                        value=\"";
                // line 443
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "nom", [], "any", false, false, false, 443), "html", null, true)) : ("Aucun établissement associé"));
                yield "\"
                        disabled
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-100 text-slate-600\">
                </div>
                ";
            }
            // line 448
            yield "
                <div>
                    <select id=\"export-evalue-metier\" name=\"metier_evalue\"
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition bg-white\"
                        ";
            // line 452
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield ">
                        <option value=\"TOUS\"
                            ";
            // line 454
            if ((Twig\Extension\CoreExtension::testEmpty(($context["selectedMetierEvalue"] ?? null)) || (($context["selectedMetierEvalue"] ?? null) == "TOUS"))) {
                yield "selected";
            }
            yield ">Tous
                            les métiers</option>
                        ";
            // line 456
            if ( !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 457
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                    // line 458
                    yield "                        <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 458), "html", null, true);
                    yield "\"
                            ";
                    // line 459
                    if ((($context["selectedMetierEvalue"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 459) . ""))) {
                        yield "selected";
                    }
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 459), "html", null, true);
                    yield "
                        </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 462
                yield "                        ";
            }
            // line 463
            yield "                    </select>
                </div>

                <div class=\"grid grid-cols-1 gap-3 mt-1 md:col-span-3 md:grid-cols-2\">
                    <div>
                        <label class=\"block mb-1 text-xs font-medium text-slate-500\">Du (Inclus)</label>
                        <input type=\"date\" name=\"date_debut\"
                            class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition bg-white\">
                    </div>
                    <div>
                        <label class=\"block mb-1 text-xs font-medium text-slate-500\">Au (Inclus)</label>
                        <input type=\"date\" name=\"date_fin\"
                            class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition bg-white\">
                    </div>
                </div>

                <div class=\"flex justify-end mt-2 md:col-span-3\">
                    <button type=\"submit\"
                        class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-sky-600 to-blue-600 text-white font-medium rounded-lg hover:from-sky-700 hover:to-blue-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                        <i class=\"mr-2 fas fa-download\"></i>
                        Exporter Excel
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
";
        }
        // line 491
        yield "
<!-- Exportation des candidats admissibles pour la visite médicale (entstatut = 2) -->
";
        // line 493
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 494
            $context["selectedEtablissementAdmissibleVisite"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 494), "request", [], "any", false, false, false, 494), "get", ["etablissement_admissible_visite"], "method", false, false, false, 494);
            // line 495
            $context["selectedMetierAdmissibleVisite"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 495), "request", [], "any", false, false, false, 495), "get", ["metier_admissible_visite"], "method", false, false, false, 495);
            // line 496
            yield "<div class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
    <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-teal-50 to-emerald-50\">
        <h5 class=\"flex items-center text-lg font-semibold text-teal-800\">
            <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-teal-100 rounded-lg\">
                <i class=\"fas fa-heartbeat text-teal-600\"></i>
            </div>
            Liste des candidats admissibles pour la visite médicale
        </h5>
    </div>
    <div class=\"p-6\">
        <form action=\"";
            // line 506
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"action\" value=\"export_liste_admissibles_visite\">

            <div class=\"grid grid-cols-1 gap-3 md:grid-cols-3\">
                ";
            // line 510
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 511
                yield "                <div>
                    <select id=\"export-admissible-visite-etablissement\" name=\"etablissement_admissible_visite\" required
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition bg-white\">
                        <option value=\"\">Sélectionner un établissement</option>
                        ";
                // line 515
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 516
                    yield "                        <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 516), "html", null, true);
                    yield "\"
                            ";
                    // line 517
                    if ((($context["selectedEtablissementAdmissibleVisite"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 517) . ""))) {
                        yield "selected";
                    }
                    yield ">
                            ";
                    // line 518
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "nom", [], "any", false, false, false, 518), "html", null, true);
                    yield "
                        </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['etablissement'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 521
                yield "                    </select>
                </div>
                ";
            } else {
                // line 524
                yield "                ";
                $context["etablissementLie"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["etablissements"] ?? null));
                // line 525
                yield "                <input type=\"hidden\" name=\"etablissement_admissible_visite\"
                    value=\"";
                // line 526
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "id", [], "any", false, false, false, 526), "html", null, true)) : (""));
                yield "\">
                <div>
                    <input type=\"text\"
                        value=\"";
                // line 529
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "nom", [], "any", false, false, false, 529), "html", null, true)) : ("Aucun établissement associé"));
                yield "\"
                        disabled
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-100 text-slate-600\">
                </div>
                ";
            }
            // line 534
            yield "
                <div>
                    <select id=\"export-admissible-visite-metier\" name=\"metier_admissible_visite\"
                        class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition bg-white\"
                        ";
            // line 538
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield ">
                        <option value=\"TOUS\"
                            ";
            // line 540
            if ((Twig\Extension\CoreExtension::testEmpty(($context["selectedMetierAdmissibleVisite"] ?? null)) || (($context["selectedMetierAdmissibleVisite"] ?? null) == "TOUS"))) {
                yield "selected";
            }
            yield ">
                            Tous les métiers</option>
                        ";
            // line 542
            if ( !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 543
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                    // line 544
                    yield "                        <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 544), "html", null, true);
                    yield "\"
                            ";
                    // line 545
                    if ((($context["selectedMetierAdmissibleVisite"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 545) . ""))) {
                        yield "selected";
                    }
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 545), "html", null, true);
                    yield "
                        </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 548
                yield "                        ";
            }
            // line 549
            yield "                    </select>
                </div>

                <div class=\"grid grid-cols-1 gap-3 mt-1 md:col-span-3 md:grid-cols-2\">
                    <div>
                        <label class=\"block mb-1 text-xs font-medium text-slate-500\">Du (Inclus)</label>
                        <input type=\"date\" name=\"date_debut\"
                            class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition bg-white\">
                    </div>
                    <div>
                        <label class=\"block mb-1 text-xs font-medium text-slate-500\">Au (Inclus)</label>
                        <input type=\"date\" name=\"date_fin\"
                            class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition bg-white\">
                    </div>
                </div>

                <div class=\"flex justify-end mt-2 md:col-span-3\">
                    <button type=\"submit\"
                        class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-teal-600 to-emerald-600 text-white font-medium rounded-lg hover:from-teal-700 hover:to-emerald-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                        <i class=\"mr-2 fas fa-download\"></i>
                        Exporter Excel
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
";
        }
        // line 577
        yield "
        <!-- Exportation des candidats admis -->
        ";
        // line 579
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 580
            yield "        ";
            $context["selectedEtablissementAdmis"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 580), "request", [], "any", false, false, false, 580), "get", ["etablissement_admis"], "method", false, false, false, 580);
            // line 581
            yield "        ";
            $context["selectedMetierAdmis"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 581), "request", [], "any", false, false, false, 581), "get", ["metier_admis"], "method", false, false, false, 581);
            // line 582
            yield "        <div
            class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
            <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-green-50 to-emerald-50\">
                <h5 class=\"flex items-center text-lg font-semibold text-green-800\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-green-100 rounded-lg\">
                        <i class=\"text-green-600 fas fa-user-check\"></i>
                    </div>
                    Liste des candidats admis
                </h5>
            </div>
            <div class=\"p-6\">
                <form action=\"";
            // line 593
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"action\" value=\"export_liste_admis\">

                    <div class=\"grid grid-cols-1 gap-3 md:grid-cols-3\">
                        ";
            // line 597
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 598
                yield "                        <div>
                            <select id=\"export-admis-etablissement\" name=\"etablissement_admis\" required
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition bg-white\">
                                <option value=\"\">Sélectionner un établissement</option>
                                ";
                // line 602
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 603
                    yield "                                <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 603), "html", null, true);
                    yield "\"
                                    ";
                    // line 604
                    if ((($context["selectedEtablissementAdmis"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 604) . ""))) {
                        yield "selected";
                    }
                    yield ">
                                    ";
                    // line 605
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "nom", [], "any", false, false, false, 605), "html", null, true);
                    yield "
                                </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['etablissement'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 608
                yield "                            </select>
                        </div>
                        ";
            } else {
                // line 611
                yield "                        ";
                $context["etablissementLie"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["etablissements"] ?? null));
                // line 612
                yield "                        <input type=\"hidden\" name=\"etablissement_admis\"
                            value=\"";
                // line 613
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "id", [], "any", false, false, false, 613), "html", null, true)) : (""));
                yield "\">
                        <div>
                            <input type=\"text\"
                                value=\"";
                // line 616
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "nom", [], "any", false, false, false, 616), "html", null, true)) : ("Aucun établissement associé"));
                yield "\"
                                disabled
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-100 text-slate-600\">
                        </div>
                        ";
            }
            // line 621
            yield "
                        <div>
                            <select id=\"export-admis-metier\" name=\"metier_admis\"
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition bg-white\"
                                ";
            // line 625
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield ">
                                <option value=\"TOUS\"
                                    ";
            // line 627
            if ((Twig\Extension\CoreExtension::testEmpty(($context["selectedMetierAdmis"] ?? null)) || (($context["selectedMetierAdmis"] ?? null) == "TOUS"))) {
                yield "selected";
            }
            yield ">
                                    Tous les métiers</option>
                                ";
            // line 629
            if ( !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 630
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                    // line 631
                    yield "                                <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 631), "html", null, true);
                    yield "\"
                                    ";
                    // line 632
                    if ((($context["selectedMetierAdmis"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 632) . ""))) {
                        yield "selected";
                    }
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 632), "html", null, true);
                    yield "
                                </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 635
                yield "                                ";
            }
            // line 636
            yield "                            </select>
                        </div>

                        <div class=\"grid grid-cols-1 gap-3 mt-1 md:col-span-3 md:grid-cols-2\">
                            <div>
                                <label class=\"block mb-1 text-xs font-medium text-slate-500\">Du (Inclus)</label>
                                <input type=\"date\" name=\"date_debut\"
                                    class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition bg-white\">
                            </div>
                            <div>
                                <label class=\"block mb-1 text-xs font-medium text-slate-500\">Au (Inclus)</label>
                                <input type=\"date\" name=\"date_fin\"
                                    class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition bg-white\">
                            </div>
                        </div>

                        <div class=\"flex justify-end mt-2 md:col-span-3\">
                            <button type=\"submit\"
                                class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-medium rounded-lg hover:from-green-700 hover:to-emerald-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                                <i class=\"mr-2 fas fa-download\"></i>
                                Exporter Excel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        ";
        }
        // line 664
        yield "
        <!-- Exportation des candidats admis définitifs -->
        ";
        // line 666
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 667
            yield "        ";
            $context["selectedEtablissementAdmisDef"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 667), "request", [], "any", false, false, false, 667), "get", ["etablissement_admis_def"], "method", false, false, false, 667);
            // line 668
            yield "        ";
            $context["selectedMetierAdmisDef"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 668), "request", [], "any", false, false, false, 668), "get", ["metier_admis_def"], "method", false, false, false, 668);
            // line 669
            yield "        <div
            class=\"overflow-hidden transition-all duration-300 bg-white border shadow-xl rounded-2xl border-slate-200 hover:shadow-2xl\">
            <div class=\"px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-blue-50 to-indigo-50\">
                <h5 class=\"flex items-center text-lg font-semibold text-blue-800\">
                    <div class=\"flex items-center justify-center w-8 h-8 mr-3 bg-blue-100 rounded-lg\">
                        <i class=\"text-blue-600 fas fa-graduation-cap\"></i>
                    </div>
                    Liste des candidats admis définitifs
                </h5>
            </div>
            <div class=\"p-6\">
                <form action=\"";
            // line 680
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"action\" value=\"export_liste_admis_definitifs\">

                    <div class=\"grid grid-cols-1 gap-3 md:grid-cols-3\">
                        ";
            // line 684
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 685
                yield "                        <div>
                            <select id=\"export-admis-def-etablissement\" name=\"etablissement_admis_def\" required
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-white\">
                                <option value=\"\">Sélectionner un établissement</option>
                                <option value=\"TOUS\"
                                    ";
                // line 690
                if ((($context["selectedEtablissementAdmisDef"] ?? null) == "TOUS")) {
                    yield "selected";
                }
                yield ">Tous les
                                    établissements</option>
                                ";
                // line 692
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
                    // line 693
                    yield "                                <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 693), "html", null, true);
                    yield "\"
                                    ";
                    // line 694
                    if ((($context["selectedEtablissementAdmisDef"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 694) . ""))) {
                        yield "selected";
                    }
                    yield ">
                                    ";
                    // line 695
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "nom", [], "any", false, false, false, 695), "html", null, true);
                    yield "
                                </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['etablissement'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 698
                yield "                            </select>
                        </div>
                        ";
            } else {
                // line 701
                yield "                        ";
                $context["etablissementLie"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["etablissements"] ?? null));
                // line 702
                yield "                        <input type=\"hidden\" name=\"etablissement_admis_def\"
                            value=\"";
                // line 703
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "id", [], "any", false, false, false, 703), "html", null, true)) : (""));
                yield "\">
                        <div>
                            <input type=\"text\"
                                value=\"";
                // line 706
                yield (string) (((($tmp = ($context["etablissementLie"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["etablissementLie"] ?? null), "nom", [], "any", false, false, false, 706), "html", null, true)) : ("Aucun établissement associé"));
                yield "\"
                                disabled
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-slate-100 text-slate-600\">
                        </div>
                        ";
            }
            // line 711
            yield "
                        <div>
                            <select id=\"export-admis-def-metier\" name=\"metier_admis_def\"
                                class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-white\"
                                ";
            // line 715
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield ">
                                <option value=\"TOUS\"
                                    ";
            // line 717
            if ((Twig\Extension\CoreExtension::testEmpty(($context["selectedMetierAdmisDef"] ?? null)) || (($context["selectedMetierAdmisDef"] ?? null) == "TOUS"))) {
                yield "selected";
            }
            yield ">
                                    Tous les métiers</option>
                                ";
            // line 719
            if ( !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 720
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
                    // line 721
                    yield "                                <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 721), "html", null, true);
                    yield "\"
                                    ";
                    // line 722
                    if ((($context["selectedMetierAdmisDef"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 722) . ""))) {
                        yield "selected";
                    }
                    yield ">
                                    ";
                    // line 723
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 723), "html", null, true);
                    yield "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 725
                yield "                                ";
            }
            // line 726
            yield "                            </select>
                        </div>

                        <div class=\"grid grid-cols-1 gap-3 mt-1 md:col-span-3 md:grid-cols-2\">
                            <div>
                                <label class=\"block mb-1 text-xs font-medium text-slate-500\">Du (Inclus)</label>
                                <input type=\"date\" name=\"date_debut\"
                                    class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-white\">
                            </div>
                            <div>
                                <label class=\"block mb-1 text-xs font-medium text-slate-500\">Au (Inclus)</label>
                                <input type=\"date\" name=\"date_fin\"
                                    class=\"w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-white\">
                            </div>
                        </div>

                        <div class=\"flex justify-end mt-2 md:col-span-3\">
                            <button type=\"submit\"
                                class=\"md:w-auto w-full px-6 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-lg hover:from-blue-700 hover:to-indigo-700 transition transform hover:scale-[1.02] shadow-lg flex items-center justify-center\">
                                <i class=\"mr-2 fas fa-download\"></i>
                                Exporter Excel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        ";
        }
        // line 754
        yield "
        <!-- Exportation ZIP Contrats -->
        ";
        // line 815
        yield "    </div>
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 818
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 819
        yield "      ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
      ";
        // line 820
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 821
            yield "  <script>
         document.addEventListener(\x27DOMContentLoaded\x27, function() {
             const metiersUrlTemplate = \"";
            // line 823
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_etablissement_metiers", ["id" => "__ID__"]);
            yield "\";
               /**
                * Initialise le chargement dynamique des métiers pour un couple établissement/métier
               */
              function initDynamicMetiers(etablissementId, metierId, preselectedMetierValue) {
                  const etablissementSelect = document.getElementById(etablissementId);
                  const metierSelect = document.getElementById(metierId);
                  if (!etablissementSelect || !metierSelect) {
                      return;
                  }
                const resetMetiers = function() {
                    metierSelect.innerHTML = \x27\x27;
                    const option = document.createElement(\x27option\x27);
                    option.value = \x27TOUS\x27;
                    option.textContent = \x27Tous les métiers\x27;
                    option.selected = true;
                    metierSelect.appendChild(option);
                    metierSelect.disabled = true;
                };
                const loadMetiers = function(etablissementIdValue, preselectedMetier) {
                    if (!etablissementIdValue || etablissementIdValue === \x27TOUS\x27) {
                        resetMetiers();
                        return;
                    }
                    metierSelect.disabled = true;
                    const url = metiersUrlTemplate.replace(\x27__ID__\x27, encodeURIComponent(
                        etablissementIdValue));
                    fetch(url)
                        .then(function(response) {
                            return response.ok ? response.json() : [];
                        })
                        .then(function(data) {
                            metierSelect.innerHTML = \x27\x27;
                            const allOption = document.createElement(\x27option\x27);
                            allOption.value = \x27TOUS\x27;
                            allOption.textContent = \x27Tous les métiers\x27;
                            metierSelect.appendChild(allOption);
                            data.forEach(function(metier) {
                                const option = document.createElement(\x27option\x27);
                                option.value = String(metier.id);
                                option.textContent = metier.nom;
                                if (String(preselectedMetier) === String(metier.id)) {
                                    option.selected = true;
                                }
                                metierSelect.appendChild(option);
                            });
                            if (String(preselectedMetier) === \x27TOUS\x27 || String(preselectedMetier) ===
                                \x27\x27) {
                                allOption.selected = true;
                            }
                            metierSelect.disabled = false;
                        })
                        .catch(function() {
                            resetMetiers();
                        });
                };
                etablissementSelect.addEventListener(\x27change\x27, function() {
                    loadMetiers(this.value, \x27TOUS\x27);
                });
                if (etablissementSelect.value) {
                    loadMetiers(etablissementSelect.value, preselectedMetierValue);
                } else {
                    resetMetiers();
                }
            }
            // Liste des candidatures enregistrées
            initDynamicMetiers(
                \x27export-liste-etablissement\x27,
                \x27export-liste-metier\x27,
                \x27";
            // line 892
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 892), "request", [], "any", false, true, false, 892), "get", ["metier_liste "], "method", true, true, false, 892)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 892), "request", [], "any", false, false, false, 892), "get", ["metier_liste "], "method", false, false, false, 892), "TOUS ")) : ("TOUS ")), "html", null, true);
            yield "\x27
            );
            // Liste des candidats éligibles
            initDynamicMetiers(
                \x27export-eligible-etablissement\x27,
                \x27export-eligible-metier\x27,
                \x27";
            // line 898
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 898), "request", [], "any", false, true, false, 898), "get", ["metier_eligible"], "method", true, true, false, 898)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 898), "request", [], "any", false, false, false, 898), "get", ["metier_eligible"], "method", false, false, false, 898), "TOUS")) : ("TOUS")), "html", null, true);
            yield "\x27
            );
            // Liste des candidats admissibles pour la visite médicale
            initDynamicMetiers(
                \x27export-admissible-visite-etablissement\x27,
                \x27export-admissible-visite-metier\x27,
                \x27";
            // line 904
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 904), "request", [], "any", false, true, false, 904), "get", ["metier_admissible_visite"], "method", true, true, false, 904)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 904), "request", [], "any", false, false, false, 904), "get", ["metier_admissible_visite"], "method", false, false, false, 904), "TOUS")) : ("TOUS")), "html", null, true);
            yield "\x27
            );
            // Liste des candidats admis
            initDynamicMetiers(
                \x27export-admis-etablissement\x27,
                \x27export-admis-metier\x27,
                \x27";
            // line 910
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 910), "request", [], "any", false, true, false, 910), "get", ["metier_admis "], "method", true, true, false, 910)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 910), "request", [], "any", false, false, false, 910), "get", ["metier_admis "], "method", false, false, false, 910), "TOUS ")) : ("TOUS ")), "html", null, true);
            yield "\x27
            );
            // Liste des candidats admis définitifs
            initDynamicMetiers(
                \x27export-admis-def-etablissement\x27,
                \x27export-admis-def-metier\x27,
                \x27";
            // line 916
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 916), "request", [], "any", false, true, false, 916), "get", ["metier_admis_def "], "method", true, true, false, 916)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 916), "request", [], "any", false, false, false, 916), "get", ["metier_admis_def "], "method", false, false, false, 916), "TOUS ")) : ("TOUS ")), "html", null, true);
            yield "\x27
            );
        });
    </script>
    ";
        }
        // line 921
        yield "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "candidature/impressions.html.twig";
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
        return array (  1610 => 921,  1602 => 916,  1593 => 910,  1584 => 904,  1575 => 898,  1566 => 892,  1494 => 823,  1490 => 821,  1488 => 820,  1483 => 819,  1473 => 818,  1464 => 815,  1460 => 754,  1430 => 726,  1427 => 725,  1418 => 723,  1412 => 722,  1407 => 721,  1402 => 720,  1400 => 719,  1393 => 717,  1386 => 715,  1380 => 711,  1372 => 706,  1366 => 703,  1363 => 702,  1360 => 701,  1355 => 698,  1345 => 695,  1339 => 694,  1334 => 693,  1330 => 692,  1323 => 690,  1316 => 685,  1314 => 684,  1307 => 680,  1294 => 669,  1291 => 668,  1288 => 667,  1286 => 666,  1282 => 664,  1252 => 636,  1249 => 635,  1235 => 632,  1230 => 631,  1225 => 630,  1223 => 629,  1216 => 627,  1209 => 625,  1203 => 621,  1195 => 616,  1189 => 613,  1186 => 612,  1183 => 611,  1178 => 608,  1168 => 605,  1162 => 604,  1157 => 603,  1153 => 602,  1147 => 598,  1145 => 597,  1138 => 593,  1125 => 582,  1122 => 581,  1119 => 580,  1117 => 579,  1113 => 577,  1083 => 549,  1080 => 548,  1066 => 545,  1061 => 544,  1056 => 543,  1054 => 542,  1047 => 540,  1040 => 538,  1034 => 534,  1026 => 529,  1020 => 526,  1017 => 525,  1014 => 524,  1009 => 521,  999 => 518,  993 => 517,  988 => 516,  984 => 515,  978 => 511,  976 => 510,  969 => 506,  957 => 496,  955 => 495,  953 => 494,  951 => 493,  947 => 491,  917 => 463,  914 => 462,  900 => 459,  895 => 458,  890 => 457,  888 => 456,  881 => 454,  874 => 452,  868 => 448,  860 => 443,  854 => 440,  851 => 439,  848 => 438,  843 => 435,  833 => 432,  827 => 431,  822 => 430,  818 => 429,  812 => 425,  810 => 424,  803 => 420,  791 => 410,  789 => 409,  787 => 408,  785 => 407,  781 => 405,  751 => 377,  748 => 376,  734 => 373,  729 => 372,  724 => 371,  722 => 370,  715 => 368,  708 => 366,  702 => 362,  694 => 357,  688 => 354,  685 => 353,  682 => 352,  677 => 349,  667 => 346,  661 => 345,  656 => 344,  652 => 343,  646 => 339,  644 => 338,  637 => 334,  625 => 324,  623 => 323,  621 => 322,  619 => 321,  614 => 318,  584 => 290,  581 => 289,  567 => 286,  562 => 285,  557 => 284,  555 => 283,  548 => 281,  541 => 279,  535 => 275,  527 => 270,  521 => 267,  518 => 266,  515 => 265,  510 => 262,  500 => 259,  494 => 258,  489 => 257,  485 => 256,  479 => 252,  477 => 251,  470 => 247,  457 => 236,  454 => 235,  451 => 234,  449 => 233,  444 => 230,  414 => 202,  411 => 201,  397 => 198,  392 => 197,  387 => 196,  385 => 195,  378 => 193,  371 => 191,  365 => 187,  357 => 182,  351 => 179,  348 => 178,  345 => 177,  340 => 174,  330 => 171,  324 => 170,  319 => 169,  315 => 168,  309 => 164,  307 => 163,  300 => 159,  287 => 148,  284 => 147,  281 => 146,  279 => 145,  276 => 144,  271 => 141,  264 => 136,  261 => 135,  240 => 115,  233 => 114,  229 => 112,  226 => 111,  224 => 110,  215 => 109,  210 => 108,  199 => 100,  186 => 89,  184 => 88,  161 => 68,  126 => 36,  109 => 21,  107 => 20,  91 => 6,  81 => 5,  63 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "candidature/impressions.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\candidature\\impressions.html.twig");
    }
}
