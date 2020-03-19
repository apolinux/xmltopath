<?php

use Percasoft\XmlToXpath;

class XmlToXpathTest extends \PHPUnit\Framework\TestCase{
    
    public function testXmlToXpathOk(){
        $xml = new XmlToXpath();
        
        $xmlfile = __DIR__ .'/fixtures/movies.xml' ;
        $list = $xml->convert($xmlfile);
        
        $this->assertTrue(is_array($list));
        $this->assertContains('/movie/rating',$list);
    }
}
