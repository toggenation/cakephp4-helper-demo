<?php

declare(strict_types=1);

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Helper helper
 */
class HelperHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected $_defaultConfig = [];

    public function addSIfNeeded($number)
    {
        return $number > 1 || $number === 0 ? 's' : '';
    }
}
