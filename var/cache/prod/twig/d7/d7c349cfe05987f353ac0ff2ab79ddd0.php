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

/* sidebar.html.twig */
class __TwigTemplate_d23a9fd03b41b1699b8b11ee527ba8c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 2
        $context["nav_classes"] = ["base_link" => "flex items-center p-3 rounded-xl transition-all duration-200 group relative", "inactive_link" => "text-indigo-100 hover:bg-white/10 hover:text-white", "active_link" => "bg-white/20 text-white shadow-lg", "menu_button" => "w-full flex items-center p-3 rounded-xl text-indigo-100 hover:bg-white/10 hover:text-white transition-all duration-200 group"];
        // line 8
        yield "
";
        // line 10
        yield "<aside class=\"fixed inset-y-0 left-0 z-30 flex-shrink-0 w-64 text-white transition-all duration-300 transform -translate-x-full bg-gradient-to-b from-primary-900 to-secondary-900 sidebar-transition lg:translate-x-0 lg:relative\"
       x-data=\"{ isDesktop: window.innerWidth >= 1024, collapsed: false }\"
       @resize.window=\"isDesktop = window.innerWidth >= 1024; if (isDesktop) sidebarOpen = false\"
       :class=\"[sidebarOpen ? \x27translate-x-0\x27 : \x27-translate-x-full lg:translate-x-0\x27, collapsed ? \x27w-20\x27 : \x27w-64\x27]\">

    <div class=\"flex flex-col h-full overflow-hidden\">

        ";
        // line 18
        yield "        <div class=\"flex-shrink-0 p-3 border-b border-white/10\">
            <div class=\"flex items-center justify-between\">

                <div class=\"flex items-center gap-3 sidebar-logo-text\"
                     :class=\"collapsed ? \x27hidden\x27 : \x27flex\x27\">

                    <a href=\"";
        // line 24
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center px-2 bg-white rounded-lg shadow-lg h-9\">
                        <img src=\"";
        // line 25
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/logo.png"), "html", null, true);
        yield "\" class=\"w-auto h-7\" width=\"150\" height=\"43\" alt=\"DAIP\">
                    </a>

                </div>

                <div class=\"flex items-center gap-1 ml-auto\">

                    ";
        // line 33
        yield "                    <button x-show=\"isDesktop\"
                            @click=\"collapsed = !collapsed\"
                            class=\"p-2 text-white transition rounded-lg hover:bg-white/10\"
                            title=\"Réduire/Agrandir\">

                        <i class=\"text-lg fas\"
                           :class=\"collapsed ? \x27fa-angle-double-right\x27 : \x27fa-angle-double-left\x27\">
                        </i>

                    </button>

                    ";
        // line 45
        yield "                    <button x-show=\"!isDesktop\"
                            @click=\"sidebarOpen = false\"
                            class=\"p-2 text-white rounded-lg hover:bg-white/10 lg:hidden\">

                        <i class=\"text-lg fas fa-times\"></i>

                    </button>

                </div>

            </div>
        </div>


        ";
        // line 60
        yield "        <nav class=\"flex-1 min-h-0 p-3 space-y-1 overflow-y-auto scrollbar-thin\">


            ";
        // line 64
        yield "            <a href=\"";
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
               class=\"";
        // line 65
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "base_link", [], "any", false, false, false, 65), "html", null, true);
        yield " ";
        yield (string) (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 65)) && is_string($_v1 = "app_dashboard") && str_starts_with($_v0, $_v1))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 65), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 65), "html", null, true)));
        yield "\"
               :class=\"collapsed ? \x27justify-center\x27 : \x27gap-3\x27\"
               x-data=\"{ tooltip: false }\"
               @mouseenter=\"tooltip = true\"
               @mouseleave=\"tooltip = false\">

                <div class=\"flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-white/10\">
                    <i class=\"text-lg fas fa-tachometer-alt\"></i>
                </div>

                <span class=\"text-sm font-medium nav-text whitespace-nowrap\"
                      :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\">
                    Tableau de bord
                </span>

                <div x-show=\"collapsed && tooltip\"
                     x-cloak
                     class=\"absolute z-50 px-2 py-1 ml-2 text-xs text-white bg-gray-800 rounded left-full whitespace-nowrap\">
                    Tableau de bord
                </div>

            </a>


            ";
        // line 90
        yield "            ";
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 91
            yield "
                <div x-data=\"{ open: ";
            // line 92
            yield (string) ((((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 92)) && is_string($_v3 = "app_candidature") && str_starts_with($_v2, $_v3)) || (is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 92)) && is_string($_v5 = "app_admis") && str_starts_with($_v4, $_v5)))) ? ("true") : ("false"));
            yield ", tooltip: false }\">

                    <button @click=\"open = !open\"
                            class=\"";
            // line 95
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "menu_button", [], "any", false, false, false, 95), "html", null, true);
            yield " w-full\"
                            :class=\"collapsed ? \x27justify-center\x27 : \x27gap-3\x27\"
                            @mouseenter=\"tooltip = true\"
                            @mouseleave=\"tooltip = false\">

                        <div class=\"flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-white/10\">
                            <i class=\"text-lg fas fa-users\"></i>
                        </div>

                        <span class=\"text-sm font-medium nav-text whitespace-nowrap\"
                              :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\">
                            Recrutements
                        </span>

                        <i class=\"ml-auto text-xs transition-transform duration-200 fas fa-chevron-down\"
                           :class=\"[collapsed ? \x27hidden\x27 : \x27block\x27, open ? \x27rotate-180\x27 : \x27\x27]\"
                           x-show=\"!collapsed\">
                        </i>

                        <div x-show=\"collapsed && tooltip\"
                             x-cloak
                             class=\"absolute z-50 px-2 py-1 ml-2 text-xs text-white bg-gray-800 rounded left-full whitespace-nowrap\">
                            Recrutements
                        </div>

                    </button>


                    <div x-show=\"open\"
                         x-cloak
                         x-transition:enter=\"transition ease-out duration-200\"
                         x-transition:enter-start=\"opacity-0 -translate-y-2\"
                         x-transition:enter-end=\"opacity-100 translate-y-0\"
                         :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\"
                         class=\"mt-1 space-y-1\">

                        ";
            // line 132
            yield "                        ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CANDIDATURE_CREATE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "                        <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_saisie");
                yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
                // line 134
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 134) == "app_candidature_saisie")) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 134), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 134), "html", null, true)));
                yield " pl-12\">

                            <i class=\"w-4 fas fa-plus-circle\"></i>

                            <span class=\"nav-text\">
                                Nouvelle candidature
                            </span>

                        </a>
                        ";
            }
            // line 144
            yield "
                        ";
            // line 146
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 147
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 147) == "app_candidature_index")) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 147), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 147), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-list\"></i>

                            <span class=\"nav-text\">
                                Liste des candidatures
                            </span>

                        </a>


                        ";
            // line 159
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_stat");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 160
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 160) == "app_candidature_stat")) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 160), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 160), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-chart-bar\"></i>

                            <span class=\"nav-text\">
                                Indicateurs
                            </span>

                        </a>


                        ";
            // line 172
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_impressions");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 173
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 173) == "app_candidature_impressions")) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 173), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 173), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-print\"></i>

                            <span class=\"nav-text\">
                                Impressions
                            </span>

                        </a>


                        ";
            // line 184
            if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 185
                yield "
                            ";
                // line 187
                yield "                            <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_admis_admin_liste") : ("app_admis_liste")));
                yield "\"
                               class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
                // line 188
                yield (string) ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 188), ["app_admis_admin_liste", "app_admis_liste"])) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 188), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 188), "html", null, true)));
                yield " pl-12\">

                                <i class=\"w-4 fas fa-user-check\"></i>

                                <span class=\"nav-text\">
                                    Listes Admis
                                </span>

                            </a>


                            ";
                // line 200
                yield "                            <a href=\"";
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("app_admis_index") : ("app_admis_etablissement")));
                yield "\"
                               class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
                // line 201
                yield (string) ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 201), ["app_admis_index", "app_admis_etablissement"])) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 201), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 201), "html", null, true)));
                yield " pl-12\">

                                <i class=\"w-4 fas fa-medal\"></i>

                                <span class=\"nav-text\">
                                    Admis définitifs
                                </span>

                            </a>

                        ";
            }
            // line 212
            yield "
                    </div>

                </div>

            ";
        }
        // line 218
        yield "

            ";
        // line 221
        yield "            ";
        // line 250
        yield "

            ";
        // line 253
        yield "            ";
        if ((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 254
            yield "
                <a href=\"";
            // line 255
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_etude_dossier");
            yield "\"
                   class=\"";
            // line 256
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "base_link", [], "any", false, false, false, 256), "html", null, true);
            yield " ";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 256) == "app_candidature_etude_dossier")) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 256), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 256), "html", null, true)));
            yield "\"
                   :class=\"collapsed ? \x27justify-center\x27 : \x27gap-3\x27\"
                   x-data=\"{ tooltip: false }\"
                   @mouseenter=\"tooltip = true\"
                   @mouseleave=\"tooltip = false\">

                    <div class=\"flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-white/10\">
                        <i class=\"text-lg fas fa-folder-open\"></i>
                    </div>

                    <span class=\"text-sm font-medium nav-text whitespace-nowrap\"
                          :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\">
                        Étude de dossier
                    </span>

                    <div x-show=\"collapsed && tooltip\"
                         x-cloak
                         class=\"absolute z-50 px-2 py-1 ml-2 text-xs text-white bg-gray-800 rounded left-full whitespace-nowrap\">
                        Étude de dossier
                    </div>

                </a>


                ";
            // line 281
            yield "                <div x-data=\"{ open: ";
            yield (string) ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 281), ["app_programmation_entretien", "app_programmation_visite"])) ? ("true") : ("false"));
            yield ", tooltip: false }\">

                    <button @click=\"open = !open\"
                            class=\"";
            // line 284
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "menu_button", [], "any", false, false, false, 284), "html", null, true);
            yield " w-full\"
                            :class=\"collapsed ? \x27justify-center\x27 : \x27gap-3\x27\"
                            @mouseenter=\"tooltip = true\"
                            @mouseleave=\"tooltip = false\">

                        <div class=\"flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-white/10\">
                            <i class=\"text-lg fas fa-calendar-check\"></i>
                        </div>

                        <span class=\"text-sm font-medium nav-text whitespace-nowrap\"
                              :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\">
                            Programmation
                        </span>

                        <i class=\"ml-auto text-xs transition-transform duration-200 fas fa-chevron-down\"
                           :class=\"[collapsed ? \x27hidden\x27 : \x27block\x27, open ? \x27rotate-180\x27 : \x27\x27]\"
                           x-show=\"!collapsed\">
                        </i>

                        <div x-show=\"collapsed && tooltip\"
                             x-cloak
                             class=\"absolute z-50 px-2 py-1 ml-2 text-xs text-white bg-gray-800 rounded left-full whitespace-nowrap\">
                            Programmation
                        </div>

                    </button>

                    <div x-show=\"open\"
                         x-cloak
                         x-transition:enter=\"transition ease-out duration-200\"
                         x-transition:enter-start=\"opacity-0 -translate-y-2\"
                         x-transition:enter-end=\"opacity-100 translate-y-0\"
                         :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\"
                         class=\"mt-1 space-y-1\">

                        ";
            // line 320
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_entretien");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 321
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 321) == "app_programmation_entretien")) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 321), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 321), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-microphone-alt\"></i>

                            <span class=\"nav-text\">
                                Entretien de sélection
                            </span>

                        </a>

                        ";
            // line 332
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmation_visite");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 333
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 333) == "app_programmation_visite")) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 333), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 333), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-heartbeat\"></i>

                            <span class=\"nav-text\">
                                Visite médicale
                            </span>

                        </a>

                    </div>

                </div>


                ";
            // line 349
            yield "
                ";
            // line 375
            yield "
            ";
        }
        // line 377
        yield "

            ";
        // line 380
        yield "            ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 381
            yield "
                <div x-data=\"{ open: ";
            // line 382
            yield (string) ((((((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 382)) && is_string($_v7 = "app_user") && str_starts_with($_v6, $_v7)) || (is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 382)) && is_string($_v9 = "app_localite") && str_starts_with($_v8, $_v9))) || (is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 382)) && is_string($_v11 = "app_metier") && str_starts_with($_v10, $_v11))) || (is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 382)) && is_string($_v13 = "app_etablissement") && str_starts_with($_v12, $_v13)))) ? ("true") : ("false"));
            yield ", tooltip: false }\">

                    <button @click=\"open = !open\"
                            class=\"";
            // line 385
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "menu_button", [], "any", false, false, false, 385), "html", null, true);
            yield " w-full\"
                            :class=\"collapsed ? \x27justify-center\x27 : \x27gap-3\x27\"
                            @mouseenter=\"tooltip = true\"
                            @mouseleave=\"tooltip = false\">

                        <div class=\"flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-white/10\">
                            <i class=\"text-lg fas fa-cog\"></i>
                        </div>

                        <span class=\"text-sm font-medium nav-text whitespace-nowrap\"
                              :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\">
                            Paramètres
                        </span>

                        <i class=\"ml-auto text-xs transition-transform duration-200 fas fa-chevron-down\"
                           :class=\"[collapsed ? \x27hidden\x27 : \x27block\x27, open ? \x27rotate-180\x27 : \x27\x27]\"
                           x-show=\"!collapsed\">
                        </i>

                        <div x-show=\"collapsed && tooltip\"
                             x-cloak
                             class=\"absolute z-50 px-2 py-1 ml-2 text-xs text-white bg-gray-800 rounded left-full whitespace-nowrap\">
                            Paramètres
                        </div>

                    </button>


                    <div x-show=\"open\"
                         x-cloak
                         x-transition:enter=\"transition ease-out duration-200\"
                         x-transition:enter-start=\"opacity-0 -translate-y-2\"
                         x-transition:enter-end=\"opacity-100 translate-y-0\"
                         :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\"
                         class=\"mt-1 space-y-1\">

                        ";
            // line 422
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 423
            yield (string) (((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 423)) && is_string($_v15 = "app_user") && str_starts_with($_v14, $_v15))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 423), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 423), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-user\"></i>

                            <span class=\"nav-text\">
                                Utilisateurs
                            </span>

                        </a>


                        ";
            // line 435
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localite_index");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 436
            yield (string) (((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 436)) && is_string($_v17 = "app_localite") && str_starts_with($_v16, $_v17))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 436), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 436), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-map-marker-alt\"></i>

                            <span class=\"nav-text\">
                                Localités
                            </span>

                        </a>


                        ";
            // line 448
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_metier_index");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 449
            yield (string) (((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 449)) && is_string($_v19 = "app_metier") && str_starts_with($_v18, $_v19))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 449), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 449), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-briefcase\"></i>

                            <span class=\"nav-text\">
                                Métiers
                            </span>

                        </a>


                        ";
            // line 461
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_index");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 462
            yield (string) (((is_string($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 462)) && is_string($_v21 = "app_etablissement") && str_starts_with($_v20, $_v21))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 462), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 462), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-school\"></i>

                            <span class=\"nav-text\">
                                Établissements
                            </span>

                        </a>


                        ";
            // line 474
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etablissement_metier_index");
            yield "\"
                           class=\"flex items-center gap-3 p-2 rounded-lg text-sm transition ";
            // line 475
            yield (string) (((is_string($_v22 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 475)) && is_string($_v23 = "app_etablissement_metier") && str_starts_with($_v22, $_v23))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 475), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 475), "html", null, true)));
            yield " pl-12\">

                            <i class=\"w-4 fas fa-link\"></i>

                            <span class=\"nav-text\">
                                Affectations
                            </span>

                        </a>

                    </div>

                </div>

            ";
        }
        // line 490
        yield "

            ";
        // line 493
        yield "            ";
        if (((((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 497
            yield "
                <a href=\"";
            // line 498
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
            yield "\"
                   class=\"";
            // line 499
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "base_link", [], "any", false, false, false, 499), "html", null, true);
            yield " ";
            yield (string) (((is_string($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", false, false, false, 499)) && is_string($_v25 = "app_candidature") && str_starts_with($_v24, $_v25))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "active_link", [], "any", false, false, false, 499), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_classes"] ?? null), "inactive_link", [], "any", false, false, false, 499), "html", null, true)));
            yield "\"
                   :class=\"collapsed ? \x27justify-center\x27 : \x27gap-3\x27\">

                    <div class=\"flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-white/10\">
                        <i class=\"text-lg fas fa-file-alt\"></i>
                    </div>

                    <span class=\"text-sm font-medium nav-text whitespace-nowrap\"
                          :class=\"collapsed ? \x27hidden\x27 : \x27block\x27\">
                        Ma Candidature
                    </span>

                </a>

            ";
        }
        // line 514
        yield "
        </nav>


        ";
        // line 519
        yield "        <div class=\"flex-shrink-0 p-3 text-center border-t border-white/10\">

            <span class=\"text-xs text-indigo-300 sidebar-logo-text\"
                  :class=\"collapsed ? \x27hidden\x27 : \x27inline\x27\">
                Version 1.0.0
            </span>

        </div>

    </div>

</aside>


";
        // line 534
        yield "<div x-show=\"sidebarOpen\"
     x-cloak
     @click=\"sidebarOpen = false\"
     class=\"fixed inset-0 z-20 bg-black/50 lg:hidden\"
     x-transition:enter=\"transition ease-out duration-300\"
     x-transition:enter-start=\"opacity-0\"
     x-transition:enter-end=\"opacity-100\"
     x-transition:leave=\"transition ease-in duration-200\"
     x-transition:leave-start=\"opacity-100\"
     x-transition:leave-end=\"opacity-0\">
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
        return "sidebar.html.twig";
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
        return array (  689 => 534,  673 => 519,  667 => 514,  647 => 499,  643 => 498,  640 => 497,  637 => 493,  633 => 490,  615 => 475,  610 => 474,  596 => 462,  591 => 461,  577 => 449,  572 => 448,  558 => 436,  553 => 435,  539 => 423,  534 => 422,  495 => 385,  489 => 382,  486 => 381,  483 => 380,  479 => 377,  475 => 375,  472 => 349,  454 => 333,  449 => 332,  436 => 321,  431 => 320,  393 => 284,  386 => 281,  357 => 256,  353 => 255,  350 => 254,  347 => 253,  343 => 250,  341 => 221,  337 => 218,  329 => 212,  315 => 201,  310 => 200,  296 => 188,  291 => 187,  288 => 185,  286 => 184,  272 => 173,  267 => 172,  253 => 160,  248 => 159,  234 => 147,  229 => 146,  226 => 144,  213 => 134,  208 => 133,  205 => 132,  166 => 95,  160 => 92,  157 => 91,  154 => 90,  125 => 65,  120 => 64,  115 => 60,  99 => 45,  86 => 33,  76 => 25,  72 => 24,  64 => 18,  55 => 10,  52 => 8,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sidebar.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\sidebar.html.twig");
    }
}
