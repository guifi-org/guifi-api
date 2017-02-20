<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class ZoneController extends FOSRestController
{
    // ...

    public function getZonesAction()
    {
        $data = $this->getDoctrine()->getRepository('AppBundle:Zone')->findAll();
        $view = $this->view($data, 200);

        return $this->handleView($view);
        
    } // "get_users"     [GET] /users

    public function newAction()
    {} // "new_users"     [GET] /users/new

    public function getAction($slug)
    {} // "get_user"      [GET] /users/{slug}

    // ...
    public function getCommentsAction($slug)
    {} // "get_user_comments"    [GET] /users/{slug}/comments

    // ...
}
