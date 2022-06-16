<?php

declare(strict_types=1);


namespace App\Controller;



/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class TestController extends AppController
{
    public function index()
    {
        $test   = $this->getTableLocator('User');
        $c = [];
        if (!empty($_POST)) {
            $c = 'aaa';
            $d = 'bbb';
            echo '<pre>';
            print_r($this->request->getParsedBody());
            echo '</pre>';
            die;
        }

        $this->set(compact('test', 'c', 'd'));
    }
}
