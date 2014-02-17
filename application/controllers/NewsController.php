<?php
/**
 * Created by PhpStorm.
 * User: Vikranth
 * Date: 2/13/14
 * Time: 5:54 PM
 */
class NewsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        //$this->$model = new Application_Model_News();
    }

    public function indexAction()
    {
        $model = new Application_Model_News();
        echo 'Now:       '. date('Y-m-d h:m:s') ."\n";
        /*$model->createNews(
            array(
                'title' => 'Ishant got 6 wickets',
                'body' => 'Ishant 6 wickets gives India an upper edge in 2nd test'
            )
        );*/
        /*$data = $model->fetchLatest();
        print_r($data);*/
        // action body
    }
    public function listnewsAction() {
        //echo "testing it";
      /* $id = 1;
        if ($id == 0) {
            $this->_redirect('/');
            return;
        }

        $newsFinder = new Model_News();
        $news = $newsFinder->fetchRow('id='.$id);
        if ($news->id != $id) {
            $this->_redirect('/');
            return;
        }
        $this->view->place = $news;
        $this->view->title = $news->name;

       /* $reviewsFinder = new Reviews();
        $this->view->reviews = $reviewsFinder->fetchByPlaceId($id);*/

    }

}