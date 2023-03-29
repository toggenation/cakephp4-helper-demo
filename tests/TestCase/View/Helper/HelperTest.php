<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\Helper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\Helper Test Case
 */
class HelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\Helper
     */
    protected $Helper;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Helper = new Helper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Helper);

        parent::tearDown();
    }
}
