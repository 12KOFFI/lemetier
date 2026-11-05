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

/* admis/export.html.twig */
class __TwigTemplate_47b444bde2d878e8c4056c6877e904c5 extends Template
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
        return $this->parent ??= $this->load("base_dashboard.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admis/export.html.twig"));

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

        yield "Exports Inscriptions Définitives";
        
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
            <h1 class=\"h3 mb-0 text-gray-800\">Exports - Inscriptions Définitives</h1>
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
        <!-- Statistiques globales -->
        <div class=\"row mb-4\">
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Total Inscrits
                                </div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 35
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 35), 0)) : (0)), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-users fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-success shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                    Confirmés
                                </div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 53
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "confirmes", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "confirmes", [], "any", false, false, false, 53), 0)) : (0)), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-user-check fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                    Établissements
                                </div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 71
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "etablissements", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "etablissements", [], "any", false, false, false, 71), 0)) : (0)), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-school fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-warning shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                    Métiers
                                </div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 89
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "metiers", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "metiers", [], "any", false, false, false, 89), 0)) : (0)), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-briefcase fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres et exports -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Exports et Filtres</h6>
            </div>
            <div class=\"card-body\">
                <form method=\"get\" action=\"";
        // line 106
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_export");
        yield "\" class=\"mb-4\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label for=\"etablissement\" class=\"form-label\">Établissement</label>
                                <select name=\"etablissement\" id=\"etablissement\" class=\"form-select\">
                                    <option value=\"\">Tous les établissements</option>
                                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["etablissements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 114
            yield "                                        <option value=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "id", [], "any", false, false, false, 114), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etablissement"], "nom", [], "any", false, false, false, 114), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['etablissement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 116
        yield "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label for=\"metier\" class=\"form-label\">Métier</label>
                                <select name=\"metier\" id=\"metier\" class=\"form-select\">
                                    <option value=\"\">Tous les métiers</option>
                                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["metiers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            // line 125
            yield "                                        <option value=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "id", [], "any", false, false, false, 125), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["metier"], "nom", [], "any", false, false, false, 125), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['metier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 127
        yield "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label class=\"form-label\">&nbsp;</label><br>
                                <button type=\"submit\" class=\"btn btn-success\">
                                    <i class=\"fas fa-download\"></i> Exporter Excel
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Résumé par établissement -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h5 class=\"mb-3\">Résumé par Établissement et Métier</h5>
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th>Établissement</th>
                                        <th>Métier</th>
                                        <th>Total Inscrits</th>
                                        <th>Confirmés</th>
                                        <th>Non Confirmés</th>
                                        <th>% Confirmation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["resume"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 159
            yield "                                        <tr>
                                            <td>";
            // line 160
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "etablissement_nom", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
                                            <td>";
            // line 161
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "metier_nom", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>
                                            <td class=\"text-center\">";
            // line 162
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, false, 162), "html", null, true);
            yield "</td>
                                            <td class=\"text-center\">
                                                <span class=\"badge badge-success\">";
            // line 164
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "confirmes", [], "any", false, false, false, 164), "html", null, true);
            yield "</span>
                                            </td>
                                            <td class=\"text-center\">
                                                <span class=\"badge badge-warning\">";
            // line 167
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "non_confirmes", [], "any", false, false, false, 167), "html", null, true);
            yield "</span>
                                            </td>
                                            <td class=\"text-center\">
                                                ";
            // line 170
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, false, 170) > 0)) {
                // line 171
                yield "                                                    ";
                $context["pourcentage"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "confirmes", [], "any", false, false, false, 171) / CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, false, 171)) * 100), 1);
                // line 172
                yield "                                                    <div class=\"progress\" style=\"height: 20px;\">
                                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" 
                                                             style=\"width: ";
                // line 174
                yield (string) $this->escaper->escape(($context["pourcentage"] ?? null), "html", null, true);
                yield "%\" 
                                                             aria-valuenow=\"";
                // line 175
                yield (string) $this->escaper->escape(($context["pourcentage"] ?? null), "html", null, true);
                yield "\" 
                                                             aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            ";
                // line 177
                yield (string) $this->escaper->escape(($context["pourcentage"] ?? null), "html", null, true);
                yield "%
                                                        </div>
                                                    </div>
                                                ";
            } else {
                // line 181
                yield "                                                    -
                                                ";
            }
            // line 183
            yield "                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 185
        if (!$context['_iterated']) {
            // line 186
            yield "                                        <tr>
                                            <td colspan=\"6\" class=\"text-center text-muted\">
                                                Aucune inscription définitive trouvée
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 192
        yield "                                </tbody>
                                <tfoot>
                                    <tr class=\"font-weight-bold\">
                                        <td colspan=\"2\">TOTAL</td>
                                        <td class=\"text-center\">";
        // line 196
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 196), 0)) : (0)), "html", null, true);
        yield "</td>
                                        <td class=\"text-center\">";
        // line 197
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "confirmes", [], "any", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "confirmes", [], "any", false, false, false, 197), 0)) : (0)), "html", null, true);
        yield "</td>
                                        <td class=\"text-center\">";
        // line 198
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "non_confirmes", [], "any", true, true, false, 198)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "non_confirmes", [], "any", false, false, false, 198), 0)) : (0)), "html", null, true);
        yield "</td>
                                        <td class=\"text-center\">
                                            ";
        // line 200
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 200) > 0)) {
            // line 201
            yield "                                                ";
            $context["pourcentage_global"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "confirmes", [], "any", false, false, false, 201) / CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 201)) * 100), 1);
            // line 202
            yield "                                                <div class=\"progress\" style=\"height: 20px;\">
                                                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" 
                                                         style=\"width: ";
            // line 204
            yield (string) $this->escaper->escape(($context["pourcentage_global"] ?? null), "html", null, true);
            yield "%\" 
                                                         aria-valuenow=\"";
            // line 205
            yield (string) $this->escaper->escape(($context["pourcentage_global"] ?? null), "html", null, true);
            yield "\" 
                                                         aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        ";
            // line 207
            yield (string) $this->escaper->escape(($context["pourcentage_global"] ?? null), "html", null, true);
            yield "%
                                                    </div>
                                                </div>
                                            ";
        } else {
            // line 211
            yield "                                                -
                                            ";
        }
        // line 213
        yield "                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions rapides -->
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"text-center\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Export Complet</h6>
                            <p class=\"text-xs text-gray-500 mb-3\">Toutes les inscriptions</p>
                            <a href=\"";
        // line 231
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_export");
        yield "\" class=\"btn btn-primary btn-sm\">
                                <i class=\"fas fa-file-excel\"></i> Télécharger
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-3\">
                <div class=\"card border-left-success shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"text-center\">
                            <h6 class=\"m-0 font-weight-bold text-success\">Export Confirmés</h6>
                            <p class=\"text-xs text-gray-500 mb-3\">Seulement les confirmés</p>
                            <button class=\"btn btn-success btn-sm\" onclick=\"exportConfirmes()\">
                                <i class=\"fas fa-check-circle\"></i> Télécharger
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-3\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"text-center\">
                            <h6 class=\"m-0 font-weight-bold text-info\">Stats par Établissement</h6>
                            <p class=\"text-xs text-gray-500 mb-3\">Résumé détaillé</p>
                            <button class=\"btn btn-info btn-sm\" onclick=\"exportStatsEtablissement()\">
                                <i class=\"fas fa-chart-bar\"></i> Télécharger
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-3\">
                <div class=\"card border-left-warning shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"text-center\">
                            <h6 class=\"m-0 font-weight-bold text-warning\">Contacts</h6>
                            <p class=\"text-xs text-gray-500 mb-3\">Liste des contacts</p>
                            <button class=\"btn btn-warning btn-sm\" onclick=\"exportContacts()\">
                                <i class=\"fas fa-address-book\"></i> Télécharger
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 285
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function exportConfirmes() {
            const url = new URL(\x27";
        // line 288
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_export");
        yield "\x27, window.location.origin);
            url.searchParams.set(\x27confirmes\x27, \x271\x27);
            window.open(url.toString());
        }

        function exportStatsEtablissement() {
            const url = new URL(\x27";
        // line 294
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_export");
        yield "\x27, window.location.origin);
            url.searchParams.set(\x27stats\x27, \x271\x27);
            window.open(url.toString());
        }

        function exportContacts() {
            const url = new URL(\x27";
        // line 300
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admis_export");
        yield "\x27, window.location.origin);
            url.searchParams.set(\x27contacts\x27, \x271\x27);
            window.open(url.toString());
        }

        // Filtrer les métiers en fonction de l\x27établissement sélectionné
        document.getElementById(\x27etablissement\x27).addEventListener(\x27change\x27, function() {
            const etablissementId = this.value;
            const metierSelect = document.getElementById(\x27metier\x27);
            
            // Réinitialiser la liste des métiers
            metierSelect.innerHTML = \x27<option value=\"\">Tous les métiers</option>\x27;
            
            if (etablissementId) {
                // Requête AJAX pour charger les métiers de l\x27établissement
                fetch(`/stat/etablissement/\${etablissementId}/metiers`)
                    .then(response => response.json())
                    .then(metiers => {
                        metiers.forEach(metier => {
                            const option = document.createElement(\x27option\x27);
                            option.value = metier.id;
                            option.textContent = metier.nom;
                            metierSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error(\x27Erreur:\x27, error));
            }
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
        return "admis/export.html.twig";
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
        return array (  568 => 300,  559 => 294,  550 => 288,  543 => 285,  533 => 284,  473 => 231,  453 => 213,  449 => 211,  442 => 207,  437 => 205,  433 => 204,  429 => 202,  426 => 201,  424 => 200,  419 => 198,  415 => 197,  411 => 196,  405 => 192,  393 => 186,  391 => 185,  385 => 183,  381 => 181,  374 => 177,  369 => 175,  365 => 174,  361 => 172,  358 => 171,  356 => 170,  350 => 167,  344 => 164,  339 => 162,  335 => 161,  331 => 160,  328 => 159,  323 => 158,  290 => 127,  278 => 125,  274 => 124,  264 => 116,  252 => 114,  248 => 113,  238 => 106,  218 => 89,  197 => 71,  176 => 53,  155 => 35,  142 => 24,  139 => 23,  132 => 22,  121 => 18,  116 => 17,  111 => 16,  106 => 15,  104 => 14,  96 => 9,  91 => 6,  81 => 5,  64 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admis/export.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\admis\\export.html.twig");
    }
}
