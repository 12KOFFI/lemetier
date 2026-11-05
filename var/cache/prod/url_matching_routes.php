<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admis/etablissement/admis' => [[['_route' => 'app_admis_liste', '_controller' => 'App\\Controller\\AdmisController::listeAdmis'], null, ['GET' => 0], null, false, false, null]],
        '/admis/admin/admis' => [[['_route' => 'app_admis_admin_liste', '_controller' => 'App\\Controller\\AdmisController::listeAdmisAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admis/etablissement' => [[['_route' => 'app_admis_etablissement', '_controller' => 'App\\Controller\\AdmisController::indexEtablissement'], null, ['GET' => 0], null, false, false, null]],
        '/admis' => [[['_route' => 'app_admis_index', '_controller' => 'App\\Controller\\AdmisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admis/upload-fiche-chunk' => [[['_route' => 'app_admis_upload_chunk', '_controller' => 'App\\Controller\\AdmisController::uploadFicheChunk'], null, ['POST' => 0], null, false, false, null]],
        '/admis/inscription' => [[['_route' => 'app_admis_inscription', '_controller' => 'App\\Controller\\AdmisController::inscription'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admis/inscription/refus' => [[['_route' => 'app_admis_inscription_refus', '_controller' => 'App\\Controller\\AdmisController::inscriptionRefus'], null, ['GET' => 0], null, false, false, null]],
        '/admis/inscription/success' => [[['_route' => 'app_admis_inscription_success', '_controller' => 'App\\Controller\\AdmisController::inscriptionSuccess'], null, ['GET' => 0], null, false, false, null]],
        '/admis/search' => [[['_route' => 'app_admis_search', '_controller' => 'App\\Controller\\AdmisController::searchPage'], null, ['GET' => 0], null, false, false, null]],
        '/admis/search/api' => [[['_route' => 'app_admis_search_api', '_controller' => 'App\\Controller\\AdmisController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admis/new' => [[['_route' => 'app_admis_new', '_controller' => 'App\\Controller\\AdmisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidature' => [[['_route' => 'app_candidature_index', '_controller' => 'App\\Controller\\CandidatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidature/new' => [[['_route' => 'app_candidature_new', '_controller' => 'App\\Controller\\CandidatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidature/saisie' => [[['_route' => 'app_candidature_saisie', '_controller' => 'App\\Controller\\CandidatureController::saisie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidature/print' => [[['_route' => 'app_candidature_print', '_controller' => 'App\\Controller\\CandidatureController::print'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/statistiques' => [[['_route' => 'app_candidature_stat', '_controller' => 'App\\Controller\\CandidatureController::statistiques'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/export/stats' => [[['_route' => 'app_candidature_export_stats', '_controller' => 'App\\Controller\\CandidatureController::exportStats'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/etude-dossier' => [[['_route' => 'app_candidature_etude_dossier', '_controller' => 'App\\Controller\\CandidatureController::etudeDossier'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/etude-dossier/en-attente' => [[['_route' => 'app_candidature_en_attente', '_controller' => 'App\\Controller\\CandidatureController::listAttente'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/etude-dossier/entretien-non-effectue' => [[['_route' => 'app_candidature_entretien_non_effectue', '_controller' => 'App\\Controller\\CandidatureController::listEntretienNonEffectue'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/etude-dossier/visite-medicale-non-effectuee' => [[['_route' => 'app_candidature_visite_non_effectuee', '_controller' => 'App\\Controller\\CandidatureController::listVisiteMedicaleNonEffectuee'], null, ['GET' => 0], null, false, false, null]],
        '/candidature/impressions' => [[['_route' => 'app_candidature_impressions', '_controller' => 'App\\Controller\\CandidatureController::impressions'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, true, false, null]],
        '/etablissement' => [[['_route' => 'app_etablissement_index', '_controller' => 'App\\Controller\\EtablissementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etablissement/new' => [[['_route' => 'app_etablissement_new', '_controller' => 'App\\Controller\\EtablissementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etablissement-metier' => [[['_route' => 'app_etablissement_metier_index', '_controller' => 'App\\Controller\\EtablissementMetierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etablissement-metier/new' => [[['_route' => 'app_etablissement_metier_new', '_controller' => 'App\\Controller\\EtablissementMetierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/etablissements' => [[['_route' => 'app_etablissements_list', '_controller' => 'App\\Controller\\HomeController::etablissementsList'], null, null, null, false, false, null]],
        '/metiers' => [[['_route' => 'app_metiers_list', '_controller' => 'App\\Controller\\HomeController::metiersList'], null, null, null, false, false, null]],
        '/localite' => [[['_route' => 'app_localite_index', '_controller' => 'App\\Controller\\LocaliteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/localite/new' => [[['_route' => 'app_localite_new', '_controller' => 'App\\Controller\\LocaliteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metier' => [[['_route' => 'app_metier_index', '_controller' => 'App\\Controller\\MetierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/metier/new' => [[['_route' => 'app_metier_new', '_controller' => 'App\\Controller\\MetierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/programmation-entretien/programmer' => [
            [['_route' => 'app_programmation_entretien_post', '_controller' => 'App\\Controller\\ProgrammationEntretienController::programmerPost'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_programmation_entretien', '_controller' => 'App\\Controller\\ProgrammationEntretienController::programmer'], null, ['GET' => 0], null, false, false, null],
        ],
        '/programmation-entretien/modele-import' => [[['_route' => 'app_programmation_entretien_modele', '_controller' => 'App\\Controller\\ProgrammationEntretienController::modeleImport'], null, ['GET' => 0], null, false, false, null]],
        '/programmation-entretien/export-planning' => [[['_route' => 'app_programmation_entretien_export', '_controller' => 'App\\Controller\\ProgrammationEntretienController::exportPlanning'], null, ['GET' => 0], null, false, false, null]],
        '/programmation-visite-medicale' => [[['_route' => 'app_programmation_visite', '_controller' => 'App\\Controller\\ProgrammationVisiteMedicaleController::gerer'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/programmation-visite-medicale/export-planning' => [[['_route' => 'app_programmation_visite_export', '_controller' => 'App\\Controller\\ProgrammationVisiteMedicaleController::exportPlanning'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/session-recrutement' => [[['_route' => 'app_session_recrutement_index', '_controller' => 'App\\Controller\\SessionRecrutementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/session-recrutement/new' => [[['_route' => 'app_session_recrutement_new', '_controller' => 'App\\Controller\\SessionRecrutementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verifier-statut' => [[['_route' => 'app_verifier_statut', '_controller' => 'App\\Controller\\StatutController::verifier'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/mon-compte/change-password' => [[['_route' => 'app_user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:65)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:101)'
                                .'|router(*:115)'
                                .'|exception(?'
                                    .'|(*:135)'
                                    .'|\\.css(*:148)'
                                .')'
                            .')'
                            .'|(*:158)'
                        .')'
                    .')'
                .')'
                .'|/admis/(?'
                    .'|([^/]++)(?'
                        .'|/edit(*:195)'
                        .'|(*:203)'
                    .')'
                    .'|export(?'
                        .'|(*:221)'
                        .'|s(*:230)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|valider(*:258)'
                        .'|refuser(*:273)'
                    .')'
                .')'
                .'|/candidature/(?'
                    .'|success/(\\d+)(*:312)'
                    .'|(\\d+)/edit(*:330)'
                    .'|(\\d+)/update\\-info(*:356)'
                    .'|(\\d+)(*:369)'
                    .'|(\\d+)/voir(*:387)'
                    .'|(\\d+)/reinitialiser\\-mdp(*:419)'
                    .'|imprimer(?'
                        .'|/(\\d+)(*:444)'
                        .'|\\-convocation(?'
                            .'|/(\\d+)(*:474)'
                            .'|\\-visite/(\\d+)(*:496)'
                        .')'
                    .')'
                    .'|etablissement/([^/]++)/metiers(*:536)'
                .')'
                .'|/etablissement(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:582)'
                            .'|show(*:594)'
                        .')'
                        .'|(*:603)'
                    .')'
                    .'|\\-metier/([^/]++)(?'
                        .'|/edit(*:637)'
                        .'|(*:645)'
                    .')'
                .')'
                .'|/localite/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:687)'
                            .'|details(*:702)'
                        .')'
                        .'|(*:711)'
                    .')'
                    .'|search(*:726)'
                .')'
                .'|/me(?'
                    .'|dia/([^/]++)/([A-Za-z0-9._-]+)(*:771)'
                    .'|tier/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:803)'
                            .'|(*:811)'
                        .')'
                        .'|by\\-(?'
                            .'|secteur/([^/]++)(*:843)'
                            .'|etablissement/([^/]++)(*:873)'
                        .')'
                    .')'
                .')'
                .'|/u(?'
                    .'|ploads/(contrats|livrets)/(etablissement_\\d+)/([A-Za-z0-9._-]+)(*:952)'
                    .'|ser/([^/]++)(?'
                        .'|/edit(*:980)'
                        .'|(*:988)'
                    .')'
                .')'
                .'|/session\\-recrutement/([^/]++)/(?'
                    .'|edit(*:1036)'
                    .'|delete(*:1051)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        65 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        115 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        135 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        158 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'app_admis_edit', '_controller' => 'App\\Controller\\AdmisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        203 => [[['_route' => 'app_admis_delete', '_controller' => 'App\\Controller\\AdmisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        221 => [[['_route' => 'app_admis_export', '_controller' => 'App\\Controller\\AdmisController::export'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        230 => [[['_route' => 'app_admis_exports', '_controller' => 'App\\Controller\\AdmisController::exports'], [], ['GET' => 0], null, false, false, null]],
        258 => [[['_route' => 'app_admis_valider', '_controller' => 'App\\Controller\\AdmisController::valider'], ['id'], ['POST' => 0], null, false, false, null]],
        273 => [[['_route' => 'app_admis_refuser', '_controller' => 'App\\Controller\\AdmisController::refuser'], ['id'], ['POST' => 0], null, false, false, null]],
        312 => [[['_route' => 'app_candidature_success', '_controller' => 'App\\Controller\\CandidatureController::success'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'app_candidature_edit', '_controller' => 'App\\Controller\\CandidatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        356 => [[['_route' => 'app_candidature_update_info', '_controller' => 'App\\Controller\\CandidatureController::updateInfo'], ['id'], ['POST' => 0], null, false, false, null]],
        369 => [[['_route' => 'app_candidature_delete', '_controller' => 'App\\Controller\\CandidatureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        387 => [[['_route' => 'app_candidature_voir', '_controller' => 'App\\Controller\\CandidatureController::voir'], ['id'], ['GET' => 0], null, false, false, null]],
        419 => [[['_route' => 'app_candidature_reinitialiser_mdp', '_controller' => 'App\\Controller\\CandidatureController::reinitialiserMdp'], ['id'], ['POST' => 0], null, false, false, null]],
        444 => [[['_route' => 'app_candidature_imprimer', '_controller' => 'App\\Controller\\CandidatureController::imprimer'], ['id'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'app_candidature_imprimer_convocation', '_controller' => 'App\\Controller\\CandidatureController::imprimerConvocation'], ['id'], ['GET' => 0], null, false, true, null]],
        496 => [[['_route' => 'app_candidature_imprimer_convocation_visite', '_controller' => 'App\\Controller\\CandidatureController::imprimerConvocationVisite'], ['id'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'app_candidature_etablissement_metiers', '_controller' => 'App\\Controller\\CandidatureController::getMetiersParEtablissement'], ['id'], ['GET' => 0], null, false, false, null]],
        582 => [[['_route' => 'app_etablissement_edit', '_controller' => 'App\\Controller\\EtablissementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'app_etablissement_show', '_controller' => 'App\\Controller\\EtablissementController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        603 => [[['_route' => 'app_etablissement_delete', '_controller' => 'App\\Controller\\EtablissementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        637 => [[['_route' => 'app_etablissement_metier_edit', '_controller' => 'App\\Controller\\EtablissementMetierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        645 => [[['_route' => 'app_etablissement_metier_delete', '_controller' => 'App\\Controller\\EtablissementMetierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        687 => [[['_route' => 'app_localite_edit', '_controller' => 'App\\Controller\\LocaliteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        702 => [[['_route' => 'app_localite_details', '_controller' => 'App\\Controller\\LocaliteController::getLocaliteDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        711 => [[['_route' => 'app_localite_delete', '_controller' => 'App\\Controller\\LocaliteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        726 => [[['_route' => 'app_localites_search', '_controller' => 'App\\Controller\\LocaliteController::searchLocalites'], [], ['GET' => 0], null, false, false, null]],
        771 => [[['_route' => 'app_media_file', '_controller' => 'App\\Controller\\MediaController::show'], ['candidatureNumero', 'filename'], ['GET' => 0], null, false, true, null]],
        803 => [[['_route' => 'app_metier_edit', '_controller' => 'App\\Controller\\MetierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        811 => [[['_route' => 'app_metier_delete', '_controller' => 'App\\Controller\\MetierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        843 => [[['_route' => 'app_metier_by_secteur', '_controller' => 'App\\Controller\\MetierController::getBySecteur'], ['secteurId'], ['GET' => 0], null, false, true, null]],
        873 => [[['_route' => 'app_etablissement_by_metier', '_controller' => 'App\\Controller\\MetierController::getEtablissementsByMetier'], ['metierId'], ['GET' => 0], null, false, true, null]],
        952 => [[['_route' => 'app_admis_document', '_controller' => 'App\\Controller\\MediaController::admisDocument'], ['type', 'dossier', 'filename'], ['GET' => 0], null, false, true, null]],
        980 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        988 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1036 => [[['_route' => 'app_session_recrutement_edit', '_controller' => 'App\\Controller\\SessionRecrutementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1051 => [
            [['_route' => 'app_session_recrutement_delete', '_controller' => 'App\\Controller\\SessionRecrutementController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
