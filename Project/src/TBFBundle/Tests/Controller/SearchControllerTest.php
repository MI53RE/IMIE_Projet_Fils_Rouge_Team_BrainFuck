<?php

namespace TBF\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use TBFBundle\Controller\SearchController;

class SearchControllerTest extends WebTestCase{
    
    public function setUp(){
        
    }

    public function testResultOfSearchIsNotEmpty(){
        $search = new SearchController();
        
        $result = $search->getRepo();
        
        $this->assertNotNull($result);
    }
}
