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

/* navbar.html.twig */
class __TwigTemplate_4d7f2ffb5fff28a3d4333b6fe7f4e909 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        yield "<nav class=\"fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-sm\"
     x-data=\"{ profileOpen: false }\">
  <div class=\"flex items-center justify-between h-16 px-4 lg:px-6\">

    <button id=\"sidebarToggle\"
            class=\"p-2 rounded-lg text-slate-500 hover:bg-slate-100 hover:text-indigo-600 transition focus:outline-none focus:ring-2 focus:ring-indigo-400\"
            aria-label=\"Toggle sidebar\">
      <i class=\"fas fa-bars text-base\"></i>
    </button>

    <div class=\"hidden md:flex items-center gap-2\">
      ";
        // line 12
        $context["route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12);
        // line 13
        yield "
      ";
        // line 14
        $context["routeMap"] = ["app_dashboard" => ["icon" => "chart-line", "label" => "Tableau de bord"], "app_candidature_index" => ["icon" => "file-alt", "label" => "Candidatures"], "app_candidature_new" => ["icon" => "plus-circle", "label" => "Nouvelle candidature"], "app_candidature_saisie" => ["icon" => "plus-circle", "label" => "Nouvelle candidature"], "app_candidature_edit" => ["icon" => "pen", "label" => "Modifier une candidature"], "app_candidature_stat" => ["icon" => "chart-bar", "label" => "Statistiques"], "app_candidature_impressions" => ["icon" => "download", "label" => "Exports & Impressions"], "app_user_index" => ["icon" => "users", "label" => "Utilisateurs"], "app_user_new" => ["icon" => "user-plus", "label" => "Nouvel utilisateur"], "app_user_edit" => ["icon" => "user-edit", "label" => "Mon profil"], "app_user_change_password" => ["icon" => "key", "label" => "Changer le mot de passe"], "app_etablissement_index" => ["icon" => "school", "label" => "Établissements"], "app_etablissement_new" => ["icon" => "plus-circle", "label" => "Nouvel établissement"], "app_etablissement_edit" => ["icon" => "building", "label" => "Mon établissement"], "app_metier_index" => ["icon" => "briefcase", "label" => "Métiers"], "app_metier_new" => ["icon" => "plus-circle", "label" => "Nouveau métier"], "app_localite_index" => ["icon" => "map-marker-alt", "label" => "Localités"], "app_admis_index" => ["icon" => "user-graduate", "label" => "Inscriptions définitives"], "app_admis_new" => ["icon" => "user-plus", "label" => "Nouvelle inscription"], "app_admis_etablissement" => ["icon" => "list", "label" => "Admis définitifs"], "app_admis_inscription" => ["icon" => "user-graduate", "label" => "Inscription définitive"], "app_admis_search" => ["icon" => "search", "label" => "Recherche candidat"]];
        // line 38
        yield "
      ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["routeMap"] ?? null), ($context["route"] ?? null), [], "array", true, true, false, 39)) {
            // line 40
            yield "        ";
            $context["page"] = (($_v0 = ($context["routeMap"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["route"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null);
            // line 41
            yield "        <div class=\"flex items-center gap-2 px-3 py-1.5 rounded-xl bg-slate-100/70 border border-slate-200/60\">
          <i class=\"fas fa-";
            // line 42
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "icon", [], "any", false, false, false, 42), "html", null, true);
            yield " text-indigo-500 text-xs\"></i>
          <span class=\"text-sm font-semibold text-slate-700\">";
            // line 43
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "label", [], "any", false, false, false, 43), "html", null, true);
            yield "</span>
        </div>
      ";
        } else {
            // line 46
            yield "        ";
            $context["fallback"] = Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["route"] ?? null), ["app_" => "", "_" => " "]));
            // line 47
            yield "        <div class=\"flex items-center gap-2 px-3 py-1.5 rounded-xl bg-slate-100/70 border border-slate-200/60\">
          <i class=\"fas fa-circle-dot text-indigo-400 text-xs\"></i>
          <span class=\"text-sm font-semibold text-slate-600\">";
            // line 49
            yield (string) $this->escaper->escape(($context["fallback"] ?? null), "html", null, true);
            yield "</span>
        </div>
      ";
        }
        // line 52
        yield "    </div>

    ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "    <div class=\"relative\">
      <button @click=\"profileOpen = !profileOpen\"
              class=\"flex items-center gap-2.5 pl-1.5 pr-2.5 py-1.5 rounded-xl hover:bg-slate-100 transition focus:outline-none focus:ring-2 focus:ring-indigo-400\"
              :class=\"{ \x27bg-slate-100\x27: profileOpen }\">

        <div class=\"w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-xs shrink-0 shadow-sm\">
          ";
            // line 61
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61))), "html", null, true);
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 61), "prenoms", [], "any", false, false, false, 61))), "html", null, true);
            yield "
        </div>

        <div class=\"hidden lg:flex flex-col items-start leading-tight\">
          <span class=\"text-sm font-semibold text-slate-800\">";
            // line 65
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65), "nom", [], "any", false, false, false, 65), "html", null, true);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65), "prenoms", [], "any", false, false, false, 65), "html", null, true);
            yield "</span>
          <span class=\"text-[10px] text-slate-400\">";
            // line 66
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
        </div>

        <span class=\"hidden lg:inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold tracking-wide
          ";
            // line 70
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-red-100 text-red-700
          ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "bg-amber-100 text-amber-700
          ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "bg-blue-100 text-blue-700
          ";
            } else {
                // line 73
                yield "bg-emerald-100 text-emerald-700";
            }
            yield "\">
          ";
            // line 74
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Admin
          ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "Agent
          ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "ENT
          ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "Jury
          ";
            } else {
                // line 78
                yield "Candidat";
            }
            // line 79
            yield "        </span>

        <i class=\"fas fa-chevron-down text-[10px] text-slate-400 transition-transform duration-200\"
           :class=\"{ \x27rotate-180\x27: profileOpen }\"></i>
      </button>

      <div x-show=\"profileOpen\"
           x-cloak
           x-transition:enter=\"transition ease-out duration-200\"
           x-transition:enter-start=\"opacity-0 translate-y-1 scale-95\"
           x-transition:enter-end=\"opacity-100 translate-y-0 scale-100\"
           x-transition:leave=\"transition ease-in duration-150\"
           x-transition:leave-start=\"opacity-100 translate-y-0 scale-100\"
           x-transition:leave-end=\"opacity-0 translate-y-1 scale-95\"
           @click.outside=\"profileOpen = false\"
           class=\"absolute right-0 mt-2 w-60 bg-white rounded-2xl shadow-xl border border-slate-200/80 overflow-hidden\">

        <div class=\"px-4 py-4 bg-gradient-to-r from-indigo-50 to-purple-50 border-b border-slate-100\">
          <div class=\"flex items-center gap-3\">
            <div class=\"w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm shadow-sm shrink-0\">
              ";
            // line 99
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99))), "html", null, true);
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 99), "prenoms", [], "any", false, false, false, 99))), "html", null, true);
            yield "
            </div>
            <div class=\"min-w-0\">
              <p class=\"text-sm font-bold text-slate-800 truncate\">";
            // line 102
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 102), "nom", [], "any", false, false, false, 102), "html", null, true);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 102), "prenoms", [], "any", false, false, false, 102), "html", null, true);
            yield "</p>
              <p class=\"text-xs text-slate-400 truncate mt-0.5\">";
            // line 103
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 103), "email", [], "any", false, false, false, 103), "html", null, true);
            yield "</p>
              <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold mt-1.5
                ";
            // line 105
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-red-100 text-red-700
                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 106
                yield "bg-amber-100 text-amber-700
                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 107
                yield "bg-blue-100 text-blue-700
                ";
            } else {
                // line 108
                yield "bg-emerald-100 text-emerald-700";
            }
            yield "\">
                ";
            // line 109
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Administrateur
                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "Agent DAIP
                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 111
                yield "Établissement
                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 112
                yield "Jury
                ";
            } else {
                // line 113
                yield "Candidat";
            }
            // line 114
            yield "              </span>
            </div>
          </div>
        </div>

        <div class=\"py-1\">
          <a href=\"";
            // line 120
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\"
             class=\"flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600 hover:bg-indigo-50 hover:text-indigo-700 transition group\">
            <div class=\"w-7 h-7 rounded-lg bg-slate-100 group-hover:bg-indigo-100 flex items-center justify-center transition\">
              <i class=\"fas fa-user-circle text-slate-400 group-hover:text-indigo-600 text-xs transition\"></i>
            </div>
            <span class=\"font-medium\">Mon profil</span>
          </a>

          <a href=\"";
            // line 128
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_change_password");
            yield "\"
             class=\"flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600 hover:bg-indigo-50 hover:text-indigo-700 transition group\">
            <div class=\"w-7 h-7 rounded-lg bg-slate-100 group-hover:bg-indigo-100 flex items-center justify-center transition\">
              <i class=\"fas fa-key text-slate-400 group-hover:text-indigo-600 text-xs transition\"></i>
            </div>
            <span class=\"font-medium\">Changer le mot de passe</span>
          </a>
        </div>

        <div class=\"border-t border-slate-100 mx-2\"></div>

        <div class=\"py-1\">
          <a href=\"";
            // line 140
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"
             class=\"flex items-center gap-3 px-4 py-2.5 text-sm text-red-500 hover:bg-red-50 hover:text-red-700 transition group\">
            <div class=\"w-7 h-7 rounded-lg bg-red-50 group-hover:bg-red-100 flex items-center justify-center transition\">
              <i class=\"fas fa-sign-out-alt text-red-400 text-xs\"></i>
            </div>
            <span class=\"font-medium\">Déconnexion</span>
          </a>
        </div>

      </div>
    </div>
    ";
        }
        // line 152
        yield "
  </div>
</nav>

<div class=\"h-16\"></div>
<style>[x-cloak]{display:none!important}</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navbar.html.twig";
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
        return array (  304 => 152,  289 => 140,  274 => 128,  263 => 120,  255 => 114,  252 => 113,  248 => 112,  244 => 111,  240 => 110,  235 => 109,  230 => 108,  226 => 107,  222 => 106,  217 => 105,  212 => 103,  206 => 102,  199 => 99,  177 => 79,  174 => 78,  170 => 77,  166 => 76,  162 => 75,  157 => 74,  152 => 73,  148 => 72,  144 => 71,  139 => 70,  132 => 66,  126 => 65,  118 => 61,  110 => 55,  108 => 54,  104 => 52,  98 => 49,  94 => 47,  91 => 46,  85 => 43,  81 => 42,  78 => 41,  75 => 40,  73 => 39,  70 => 38,  68 => 14,  65 => 13,  63 => 12,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navbar.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\navbar.html.twig");
    }
}
