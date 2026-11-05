<?php

namespace App\Twig;

use chillerlan\QRCode\Output\QRGdImagePNG;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/** QR code généré sur le serveur : le numéro du candidat n'est plus envoyé à un service externe. */
class QrCodeExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [new TwigFunction('qr_code', [$this, 'dataUri'])];
    }

    public function dataUri(string $texte): string
    {
        $options = new QROptions([
            'outputInterface' => QRGdImagePNG::class,
            'outputBase64' => true,
            'scale' => 4,
            'quietzoneSize' => 1,
        ]);

        return (new QRCode($options))->render($texte);
    }
}
