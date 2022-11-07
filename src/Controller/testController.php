<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\testService;
use App\Service\testServiceSecond;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class testController extends AbstractController
{
    /*
     * with bind $test in services.yml commented out/deleted, uncomment this for compile to fail
     */
//    public function __construct(
//        private testService $testService
//    ) { }

    /*
     * with bind $test in services.yml commented out/deleted, uncomment this for compile to pass
     */
    public function index(
        testService $testService
    ){
    }

    /*
     * with bind $test in services.yml commented out/deleted, uncomment this for compile to fail
     */
//    public function index(
//        testServiceSecond $testServiceSecond
//    ){
//    }
}
