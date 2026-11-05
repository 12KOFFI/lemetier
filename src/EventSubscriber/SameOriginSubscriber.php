<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Protection CSRF globale : toute requête d'écriture venant d'un autre site est refusée.
 * Complète les jetons CSRF des formulaires et couvre les actions qui n'en ont pas
 * (exports, imports Excel, envoi en morceaux, validation d'un admis...).
 */
class SameOriginSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [KernelEvents::REQUEST => ['onKernelRequest', 2048]];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        if ($request->isMethodSafe()) {
            return;
        }

        $origin = $request->headers->get('Origin');
        if ($origin !== null) {
            $hote = parse_url($origin, PHP_URL_HOST);
            $autorise = is_string($hote) && strcasecmp($hote, $request->getHost()) === 0;
        } else {
            // Navigateurs sans en-tête Origin : on se fie à Sec-Fetch-Site quand il est présent.
            $autorise = $request->headers->get('Sec-Fetch-Site') !== 'cross-site';
        }

        if (!$autorise) {
            $event->setResponse(new Response('Requête refusée : origine non autorisée.', Response::HTTP_FORBIDDEN));
        }
    }
}
