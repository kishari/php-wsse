<?php

class IdGenerator {
    private $soapNS, $soapPFX;
    private $soapDoc = NULL;
    private $envelope = NULL;
    private $SOAPXPath = NULL;
    private $counter = 0;

    public function __construct($doc) {
            $this->soapDoc = $doc;
            $this->envelope = $doc->documentElement;
            $this->soapNS = $this->envelope->namespaceURI;
            $this->soapPFX = $this->envelope->prefix;
            $this->SOAPXPath = new DOMXPath($doc);
            $this->SOAPXPath->registerNamespace('wssoap', $this->soapNS);            
	}

   private function setIdAttribute($children) {
        foreach($children as $i) {
            if (! $i instanceof DOMText) {                
                if ($i->tagName == "ns1:header") continue;
                
                $i->setAttribute('id', $this->counter++);
            }
            
            if ($i->hasChildNodes()) {
                $ch = $i->childNodes;
                $this->setIdAttribute($ch);
            }
        }
   }

   public function generate() {
        $bodies = $this->SOAPXPath->query('//wssoap:Envelope/wssoap:Body');       
        $body = $bodies->item(0);
        //$items = $this->soapDoc->documentElement;

        foreach($body->childNodes as $item) {
            if ($item->hasChildNodes()) {
                $children = $item->childNodes;
                $this->setIdAttribute($children);
            }
        }        
   }

}

?>
