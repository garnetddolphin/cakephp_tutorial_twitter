<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StaticPages Controller
 *
 *
 * @method \App\Model\Entity\StaticPage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaticPagesController extends AppController
{
    public function home()
    {
        $this->set('title', 'Home');
    }
    public function help()
    {
        $this->set('title', 'Help');
    }
    public function about()
    {
        $this->set('title', 'About');
    }
    public function contact()
    {
        $this->set('title', 'Contact');
    }
}