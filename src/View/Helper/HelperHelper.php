<?php

declare(strict_types=1);

namespace App\View\Helper;

use Cake\Utility\Inflector;
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

    public function pluralizeIfNeeded($slug, $count)
    {
        return $count > 1 || $count === 0 ?
            Inflector::pluralize($slug) :
            Inflector::singularize($slug);
    }

    public function addSIfNeeded($count)
    {
        return $count > 1 || $count === 0 ?
            's' :
            '';
    }
}
