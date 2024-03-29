<?php

class WSASoap {
	const WSANS = 'http://schemas.xmlsoap.org/ws/2004/08/addressing';
	const WSAPFX = 'wsa';
	private $soapNS, $soapPFX;
	private $soapDoc = NULL;
	private $envelope = NULL;
	private $SOAPXPath = NULL;
	private $header = NULL;
	private $messageID = NULL;
	
	private function locateHeader() {
		if ($this->header == NULL) {
			$headers = $this->SOAPXPath->query('//wssoap:Envelope/wssoap:Header');
			$header = $headers->item(0);
			if (! $header) {
				$header = $this->soapDoc->createElementNS($this->soapNS, $this->soapPFX.':Header');
				$this->envelope->insertBefore($header, $this->envelope->firstChild);
			}
			$this->header = $header;
		}
		return $this->header;
	}

	public function __construct($doc) {
		$this->soapDoc = $doc;
		$this->envelope = $doc->documentElement;
		$this->soapNS = $this->envelope->namespaceURI;
		$this->soapPFX = $this->envelope->prefix;
		$this->SOAPXPath = new DOMXPath($doc);
		$this->SOAPXPath->registerNamespace('wssoap', $this->soapNS);
		$this->SOAPXPath->registerNamespace('wswsa', WSASoap::WSANS);
		
		$this->envelope->setAttributeNS("http://www.w3.org/2000/xmlns/", 'xmlns:'.WSASoap::WSAPFX, WSASoap::WSANS);
		$this->locateHeader();
	}

	public function addAction($action) {
		/* Add the WSA Action */
		$header = $this->locateHeader();

		$nodeAction = $this->soapDoc->createElementNS(WSASoap::WSANS, WSASoap::WSAPFX.':Action', $action);
		$header->appendChild($nodeAction);
	}

	public function addTo($location) {
		/* Add the WSA To */
		$header = $this->locateHeader();

		$nodeTo = $this->soapDoc->createElementNS(WSASoap::WSANS, WSASoap::WSAPFX.':To', $location);
		$header->appendChild($nodeTo);
	}

	private function createID() {
		$uuid = md5(uniqid(rand(), true));
		$guid =  'uudi:'.substr($uuid,0,8)."-".
				substr($uuid,8,4)."-".
				substr($uuid,12,4)."-".
				substr($uuid,16,4)."-".
				substr($uuid,20,12);
		return $guid;
	}

	public function addMessageID($id=NULL) {
		/* Add the WSA MessageID or return existing ID */
		if (! is_null($this->messageID)) {
			return $this->messageID;
		}

		if (empty($id)) {
			$id = $this->createID();
		}

		$header = $this->locateHeader();

		$nodeID = $this->soapDoc->createElementNS(WSASoap::WSANS, WSASoap::WSAPFX.':MessageID', $id);
		$header->appendChild($nodeID);
		$this->messageID = $id;
	}

	public function addReplyTo($address = NULL) {
			/* Create Message ID is not already added - required for ReplyTo */
			if (is_null($this->messageID)) {
				$this->addMessageID();
			}
			/* Add the WSA ReplyTo */
			$header = $this->locateHeader();
	
			$nodeReply = $this->soapDoc->createElementNS(WSASoap::WSANS, WSASoap::WSAPFX.':ReplyTo');
			$header->appendChild($nodeReply);
			
			if (empty($address)) {
				$address = 'http://schemas.xmlsoap.org/ws/2004/08/addressing/role/anonymous';
			}
			$nodeAddress = $this->soapDoc->createElementNS(WSASoap::WSANS, WSASoap::WSAPFX.':Address', $address);
			$nodeReply->appendChild($nodeAddress);
	}

	public function getDoc() {
		return $this->soapDoc;
	}
	
	public function saveXML() {
		return $this->soapDoc->saveXML();
	}

	public function save($file) {
		return $this->soapDoc->save($file);
	}
}

?>
