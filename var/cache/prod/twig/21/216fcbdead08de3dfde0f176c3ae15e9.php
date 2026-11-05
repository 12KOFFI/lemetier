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

/* base_dashboard.html.twig */
class __TwigTemplate_5ec42456cb04c88f8d5e708cc192d6f3 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'datatables_js' => [$this, 'block_datatables_js'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_dashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"GROUPE LEMETIER - Dashboard\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Preconnect pour accélérer les CDN -->
    <link rel=\"preconnect\" href=\"https://cdnjs.cloudflare.com\" crossorigin>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" crossorigin>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    
    <!-- Tailwind CSS -->
    <script src=\"";
        // line 15
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tailwind-play.js"), "html", null, true);
        yield "\"></script>
    
    <!-- Configuration du thème -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: \x27#eef2ff\x27,
                            100: \x27#e0e7ff\x27,
                            200: \x27#c7d2fe\x27,
                            300: \x27#a5b4fc\x27,
                            400: \x27#818cf8\x27,
                            500: \x27#6366f1\x27,
                            600: \x27#4f46e5\x27,
                            700: \x27#4338ca\x27,
                            800: \x27#3730a3\x27,
                            900: \x27#312e81\x27,
                        },
                        secondary: {
                            50: \x27#f5f3ff\x27,
                            100: \x27#ede9fe\x27,
                            200: \x27#ddd6fe\x27,
                            300: \x27#c4b5fd\x27,
                            400: \x27#a78bfa\x27,
                            500: \x27#8b5cf6\x27,
                            600: \x27#7c3aed\x27,
                            700: \x27#6d28d9\x27,
                            800: \x27#5b21b6\x27,
                            900: \x27#4c1d95\x27,
                        }
                    },
                    animation: {
                        \x27fade-in\x27: \x27fadeIn 0.5s ease-in-out\x27,
                    },
                    keyframes: {
                        fadeIn: {
                            \x270%\x27: { opacity: \x270\x27, transform: \x27translateY(10px)\x27 },
                            \x27100%\x27: { opacity: \x271\x27, transform: \x27translateY(0)\x27 }
                        }
                    }
                }
            }
        }
    </script>
    <style>
    .bg-gradient-to-r {
    transition: all 0.3s ease;
}
.bg-gradient-to-r:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
}
select:required, input:required {
    border-left-width: 3px;
    border-left-color: #4f46e5;
}
input:disabled, select:disabled {
    background-color: #f8fafc;
    cursor: not-allowed;
}
optgroup {
    font-weight: 600;
    color: #4f46e5;
}

/* Style personnalisé pour DataTables */
.dataTables_wrapper {
    padding: 1rem;
}

.dataTables_length {
    margin-bottom: 1rem;
}

.dataTables_length select {
    @apply w-auto px-3 py-1.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition;
    margin: 0 0.5rem;
}

.dataTables_filter {
    margin-bottom: 1rem;
}

.dataTables_filter input {
    @apply px-3 py-1.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition;
    margin-left: 0.5rem;
    width: 250px;
}

.dataTables_info {
    @apply text-sm text-slate-600;
    padding-top: 1rem !important;
}

.dataTables_paginate {
    @apply flex justify-end gap-1;
    padding-top: 1rem !important;
}

.dataTables_paginate .paginate_button {
    @apply px-3 py-1.5 rounded-lg border border-slate-200 text-slate-600 hover:bg-indigo-50 hover:border-indigo-300 transition cursor-pointer;
    margin: 0 2px;
}

.dataTables_paginate .paginate_button.current {
    @apply bg-gradient-to-r from-indigo-600 to-purple-600 text-white border-transparent;
}

.dataTables_paginate .paginate_button.disabled {
    @apply opacity-50 cursor-not-allowed hover:bg-transparent;
}

.dataTables_paginate .paginate_button:hover:not(.disabled):not(.current) {
    @apply bg-indigo-50 border-indigo-300;
}

table.dataTable {
    @apply w-full;
}

table.dataTable thead th {
    @apply px-6 py-4 text-left text-sm font-semibold text-slate-600 bg-slate-50 border-b border-slate-200;
}

table.dataTable thead th.sorting_asc:after,
table.dataTable thead th.sorting_desc:after {
    @apply ml-1 text-indigo-600;
}

table.dataTable tbody td {
    @apply px-6 py-4 text-sm border-b border-slate-200;
}

table.dataTable tbody tr:hover {
    @apply bg-slate-50;
}

.dataTables_processing {
    @apply bg-white/80 backdrop-blur-sm;
}
</style>
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" media=\"print\" onload=\"this.media=\x27all\x27\">
    <noscript><link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\"></noscript>
    
    <!-- Google Fonts (poids réduits) -->
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <style>
        [x-cloak] { display: none !important; }
        body { font-family: \x27Plus Jakarta Sans\x27, sans-serif; }
        .sidebar-transition {
            transition: width 0.3s ease-in-out;
        }
        .sidebar-transition * {
            transition: opacity 0.2s ease-in-out;
        }
        .scrollbar-thin::-webkit-scrollbar { width: 4px; }
        .scrollbar-thin::-webkit-scrollbar-track { background: transparent; }
        .scrollbar-thin::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 4px; }
        .scrollbar-thin::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.4); }
        .scrollbar-thin { scrollbar-width: thin; scrollbar-color: rgba(255,255,255,0.2) transparent; }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(79, 70, 229, 0.2), 0 10px 10px -5px rgba(79, 70, 229, 0.1);
        }
    </style>
    
    ";
        // line 189
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 190
        yield "</head>
<body class=\"bg-gray-50\">
    <div class=\"flex h-screen overflow-hidden\" x-data=\"{ sidebarOpen: false }\">
        ";
        // line 193
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 196
        yield "        
        <!-- Main Content -->
        <div class=\"flex flex-col flex-1 overflow-hidden\">
            <!-- Navbar -->
            <header class=\"sticky top-0 z-40 bg-white border-b border-gray-200 shadow-sm\">
                <div class=\"flex items-center justify-between gap-4 px-4 py-3 lg:px-6\">
                    <!-- Bouton hamburger mobile -->
                    <button @click=\"sidebarOpen = true\" class=\"p-2 -ml-1 text-gray-600 transition rounded-lg lg:hidden hover:bg-gray-100\">
                        <i class=\"text-lg fas fa-bars\"></i>
                    </button>
                    <!-- Message de bienvenue -->
                    <div class=\"flex items-center gap-2\">
                        <span class=\"text-sm text-gray-600\">Bienvenue,</span>
                        <span class=\"text-sm font-semibold text-gray-800\">";
        // line 209
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 209), "nom", [], "any", false, false, false, 209), "html", null, true);
        yield "</span>
                        <span class=\"hidden text-sm text-gray-500 sm:inline\">(";
        // line 210
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 210), "prenoms", [], "any", false, false, false, 210), "html", null, true);
        yield ")</span>
                    </div>
                    
                    <!-- Espace vide -->
                    <div class=\"flex-1 hidden lg:block\"></div>
                    
                    <!-- Profil utilisateur -->
                    <div class=\"flex items-center gap-3\">
                        ";
        // line 218
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 219
            yield "                        <div class=\"relative\" x-data=\"{ open: false }\">
                            <button @click=\"open = !open\" class=\"flex items-center gap-2 p-1.5 rounded-lg hover:bg-gray-100 transition focus:outline-none focus:ring-2 focus:ring-primary-500\" :class=\"{ \x27bg-gray-100\x27: open }\">
                                <!-- Avatar -->
                                <div class=\"flex items-center justify-center text-sm font-semibold text-white rounded-full w-9 h-9 bg-gradient-to-br from-primary-500 to-secondary-600\">
                                    ";
            // line 223
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 223), "nom", [], "any", false, false, false, 223))), "html", null, true);
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 223), "prenoms", [], "any", false, false, false, 223))), "html", null, true);
            yield "
                                </div>
                                
                                <!-- Info - caché sur mobile -->
                                <div class=\"flex-col items-start hidden xl:flex\">
                                    <span class=\"text-sm font-medium leading-tight text-gray-800\">";
            // line 228
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 228), "nom", [], "any", false, false, false, 228), "html", null, true);
            yield "</span>
                                    <span class=\"text-xs text-gray-500\">";
            // line 229
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Administrateur";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Agent DAIP";
            } elseif (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ETABLISSEMENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                yield "Établissement";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Jury";
            } else {
                yield "Candidat";
            }
            yield "</span>
                                </div>
                                
                                <i class=\"text-xs text-gray-400 transition-transform fas fa-chevron-down\" :class=\"{ \x27rotate-180\x27: open }\"></i>
                            </button>
                            
                            <!-- Dropdown menu -->
                            <div x-show=\"open\" x-cloak x-transition:enter=\"transition ease-out duration-200\" x-transition:enter-start=\"opacity-0 scale-95\" x-transition:enter-end=\"opacity-100 scale-100\" x-transition:leave=\"transition ease-in duration-150\" x-transition:leave-start=\"opacity-100 scale-100\" x-transition:leave-end=\"opacity-0 scale-95\" @click.outside=\"open = false\" class=\"absolute right-0 w-56 mt-2 overflow-hidden bg-white border border-gray-100 shadow-lg rounded-xl\">
                                <!-- En-tête -->
                                <div class=\"px-4 py-3 border-b border-gray-100 bg-gradient-to-r from-primary-50 to-secondary-50\">
                                    <p class=\"text-sm font-semibold text-gray-800\">";
            // line 239
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 239), "nom", [], "any", false, false, false, 239), "html", null, true);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 239), "prenoms", [], "any", false, false, false, 239), "html", null, true);
            yield "</p>
                                    <p class=\"text-xs text-gray-500 mt-0.5\">";
            // line 240
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 240), "email", [], "any", false, false, false, 240), "html", null, true);
            yield "</p>
                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium mt-2
                                        ";
            // line 242
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-red-100 text-red-700
                                        ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 243
                yield "bg-indigo-100 text-indigo-700
                                        ";
            } elseif (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ETABLISSEMENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 244
                yield "bg-amber-100 text-amber-700
                                        ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 245
                yield "bg-blue-100 text-blue-700
                                        ";
            } else {
                // line 246
                yield "bg-green-100 text-green-700";
            }
            yield "\">
                                        ";
            // line 247
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Administrateur";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Agent DAIP";
            } elseif (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ETABLISSEMENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                yield "Établissement";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Jury";
            } else {
                yield "Candidat";
            }
            // line 248
            yield "                                    </span>
                                </div>
                                
                                <!-- Links -->
                                <a href=\"";
            // line 252
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 252), "id", [], "any", false, false, false, 252)]), "html", null, true);
            yield "\" class=\"flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition\">
                                    <i class=\"w-4 text-gray-400 fas fa-user-circle\"></i>Mon profil
                                </a>
                                <a href=\"";
            // line 255
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_change_password");
            yield "\" class=\"flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition\">
                                    <i class=\"w-4 text-gray-400 fas fa-key\"></i>Changer le mot de passe
                                </a>
                                <div class=\"my-1 border-t border-gray-100\"></div>
                                <a href=\"";
            // line 259
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"flex items-center gap-3 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition\">
                                    <i class=\"w-4 fas fa-sign-out-alt\"></i>Déconnexion
                                </a>
                            </div>
                        </div>
                        ";
        }
        // line 265
        yield "                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class=\"flex-1 p-4 overflow-y-auto lg:p-8 bg-gray-50\">
                ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 271));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 272
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 273
                yield "                        <div class=\"flash-message mb-6 p-4 rounded-xl relative animate-fade-in ";
                if (($context["label"] == "success")) {
                    yield "bg-green-50 text-green-800 border border-green-200";
                } elseif (($context["label"] == "error")) {
                    yield "bg-red-50 text-red-800 border border-red-200";
                } elseif (($context["label"] == "warning")) {
                    yield "bg-amber-50 text-amber-800 border border-amber-200";
                } else {
                    yield "bg-blue-50 text-blue-800 border border-blue-200";
                }
                yield "\" data-autodismiss=\"";
                yield (string) ((($context["label"] == "success")) ? ("3000") : ("5000"));
                yield "\">
                            <button type=\"button\" class=\"absolute right-4 top-1/2 -translate-y-1/2 p-1 text-";
                // line 274
                if (($context["label"] == "success")) {
                    yield "green";
                } elseif (($context["label"] == "error")) {
                    yield "red";
                } elseif (($context["label"] == "warning")) {
                    yield "amber";
                } else {
                    yield "blue";
                }
                yield "-500 hover:text-";
                if (($context["label"] == "success")) {
                    yield "green";
                } elseif (($context["label"] == "error")) {
                    yield "red";
                } elseif (($context["label"] == "warning")) {
                    yield "amber";
                } else {
                    yield "blue";
                }
                yield "-700 transition-colors\" onclick=\"this.parentElement.remove()\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                            <div class=\"flex items-center pr-8\">
                                <i class=\"fas ";
                // line 278
                if (($context["label"] == "success")) {
                    yield "fa-check-circle text-green-500";
                } elseif (($context["label"] == "error")) {
                    yield "fa-exclamation-circle text-red-500";
                } elseif (($context["label"] == "warning")) {
                    yield "fa-exclamation-triangle text-amber-500";
                } else {
                    yield "fa-info-circle text-blue-500";
                }
                yield " mr-3 text-lg\"></i>
                                ";
                // line 279
                yield (string) $this->escaper->escape($context["message"], "html", null, true);
                yield "
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 283
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 284
        yield "                
                ";
        // line 285
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 286
        yield "            </main>
        </div>
    </div>
    
    <!-- Alpine.js -->
    <script defer src=\"";
        // line 291
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/alpine-3.13.10.min.js"), "html", null, true);
        yield "\"></script>
    
    ";
        // line 294
        yield "    ";
        yield from $this->unwrap()->yieldBlock('datatables_js', $context, $blocks);
        // line 295
        yield "    
    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, function() {
            const sidebar = document.querySelector(\x27aside\x27);
            
            // Gestion du responsive
            window.addEventListener(\x27resize\x27, function() {
                if (window.innerWidth >= 1024) {
                    // Desktop : always visible
                    if (sidebar && sidebar._x_) {
                        sidebar._x_.\$data.mobileOpen = false;
                    }
                }
            });
        });
    </script>
    

    
    <script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        document.querySelectorAll(\x27.flash-message[data-autodismiss]\x27).forEach(function(message) {
            var delay = parseInt(message.dataset.autodismiss, 10);
            setTimeout(function() {
                message.style.animation = \x27fadeOut 0.3s ease-out forwards\x27;
                setTimeout(function() {
                    message.remove();
                }, 300);
            }, delay);
        });
    });
    </script>
    
    <style>
    @keyframes fadeOut {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(-10px);
        }
    }
    </style>
    
    ";
        // line 341
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 342
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "GROUPE LEMETIER - Tableau de bord";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 194
        yield "            ";
        yield from $this->load("sidebar.html.twig", 194)->unwrap()->yield($context);
        // line 195
        yield "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 285
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 294
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatables_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datatables_js"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 341
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_dashboard.html.twig";
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
        return array (  661 => 341,  645 => 294,  629 => 285,  621 => 195,  618 => 194,  608 => 193,  592 => 189,  575 => 7,  565 => 342,  563 => 341,  515 => 295,  512 => 294,  507 => 291,  500 => 286,  498 => 285,  495 => 284,  488 => 283,  477 => 279,  465 => 278,  440 => 274,  425 => 273,  420 => 272,  416 => 271,  408 => 265,  399 => 259,  392 => 255,  386 => 252,  380 => 248,  368 => 247,  363 => 246,  359 => 245,  355 => 244,  351 => 243,  346 => 242,  341 => 240,  335 => 239,  312 => 229,  308 => 228,  299 => 223,  293 => 219,  291 => 218,  280 => 210,  276 => 209,  261 => 196,  259 => 193,  254 => 190,  252 => 189,  75 => 15,  64 => 7,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base_dashboard.html.twig", "C:\\Users\\slim3\\Downloads\\lemetier\\templates\\base_dashboard.html.twig");
    }
}
