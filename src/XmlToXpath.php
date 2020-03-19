<?php

namespace Percasoft;

extension_loaded('libxml') || die('Must to install libxml extension') ;

class XmlToXpath{
    
    public function convert($xmlfile, $unique=false){
        if (!file_exists($xmlfile)){
            throw new \Exception("The file '$xmlfile' is not valid") ;
        }
      $sxi = new \SimpleXmlIterator($xmlfile, null, true);
      $out = $this->xiToXpath($sxi);
      if($unique){
          $out = array_unique($out);
      }
      
      return $out ;
    }

    public function xiToXpath($sxi, $key=null){
      $a = array();
      for( $sxi->rewind(); $sxi->valid(); $sxi->next() ) {
        if(!array_key_exists($sxi->key(), $a)){
        }
        if($sxi->hasChildren()){
            $a = array_merge($a , $this->xiToXpath($sxi->current(),
                    (  $key ).'/'.$sxi->key()) 
                    );
            //echo "has children, parent key: ". $key .", key:" . $sxi->key() . PHP_EOL;
        }
        else{
          $a[] = $key .'/'. $sxi->key() ;  
          //echo "NO children, parent key: ". $key .", key:" . $sxi->key() . PHP_EOL;
        }
        
      }
      return $a;
    }
}