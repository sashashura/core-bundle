<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\DependencyInjection\Attribute;

/**
 * An attribute class for page controllers.
 *
 * @see \Symfony\Component\Routing\Annotation\Route
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class AsPage
{
    public function __construct(public string|null $type = null, public bool|string|null $path = null, public array $requirements = [], public array $options = [], public array $defaults = [], public array $methods = [], string $locale = null, string $format = null, public bool $contentComposition = true, public string|null $urlSuffix = null)
    {
        if (null !== $locale) {
            $this->defaults['_locale'] = $locale;
        }

        if (null !== $format) {
            $this->defaults['_format'] = $format;
        }
    }
}
