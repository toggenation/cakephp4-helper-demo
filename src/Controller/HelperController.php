<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Helper Controller
 *
 * @method \App\Model\Entity\Helper[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HelperController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $helper = [
            0,
            1,
            15,
            33,
            1,
            0
        ];

        $this->set(compact('helper'));
    }
}
