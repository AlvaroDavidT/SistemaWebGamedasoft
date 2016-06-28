<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of SecurityController
 *
 * @author ALVARO
 */
class DefaultController extends Controller
{
    /**
     * @Route("dmin")
     */
    public function admiAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
