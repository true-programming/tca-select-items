<?php

declare(strict_types=1);

namespace Trueprogramming\TcaSelectItems\TCA;

/*
 * This file is part of TYPO3 CMS-based extension tca-select-items by mikeproduction.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

class TCASelectItem
{
    public function __construct(
        private readonly string $label,
        private readonly string $value,
        private readonly ?string $icon = null,
        private readonly ?string $group = null,
    ) {
    }

    public function toArray(): array
    {
        return array_filter(
            [
                'label' => $this->label,
                'value' => $this->value,
                'icon' => $this->icon,
                'group' => $this->group,
            ]
        );
    }
}
