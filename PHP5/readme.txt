Ez ebben a formájában nem mûködõképes, mert
- kell hozzá a privát kulcs (formátumra minta mellékelve)
- a validálásra átadott adatok üresek (a struktúra viszont látható a példából).
 
A sample.php az alkalmazás, ami összerakja az adatokat és meghívja a webservice-t. A WSSoapClient.php tartalmazza konstansként a privát kulcsfájl nevét illetve a megnyitásához szükséges jelszót.