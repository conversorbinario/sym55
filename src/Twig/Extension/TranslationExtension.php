<?php

namespace App\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TranslationExtension extends AbstractExtension
{


    public function getFilters()
    {
        return [
            new TwigFilter('urlremovelocale', [$this, 'removeLocale'],['is_safe' => ['html']]),
        ];
    }

    public function removeLocale($value)
    {
        // /locale/direcion/url/ --> direccion/url/"
        $rutaRelativaSinLocale=preg_replace('/^(\/[a-z]{0,}\/)/', '', $value);
        return $rutaRelativaSinLocale;
    }

    
}
