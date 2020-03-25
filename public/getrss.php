<?php
//obtener el parámetro q de la URL
$q=$_GET["q"];
 
//se carga el canal seleccionado en el formulario
// if ($q=="herbalist") {
//     $xml=("http://www.herbalistgrow.es/modules/feeder/rss.php");
// } elseif ($q=="elpais") {
//     $xml=("http://ep00.epimg.net/rss/tags/ultimas_noticias.xml");
// } elseif ($q="eldiario") {
//     $xml=("http://www.eldiario.es/rss/");
// }
 
$xml= $q;
// Representa un documento HTML o XML en su totalidad; Sirve Como Raíz del Árbol de documento.
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);
 
//obtener elementos desde "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
$channel_url = $channel->getElementsByTagName('url')->item(0)->childNodes->item(0)->nodeValue;
 
//mostrar la salida de los elementos del "<channel>"
 
// echo("</p>");
// echo("<br>");
// echo("<p><a href='" . $channel_link  . "'>" . $channel_title . "</a>");
// echo("<br>");
// echo($channel_desc . "</p>");
// echo("<hr>");

// echo("<h3>" . $channel_title . "</h3>");
//obtener la entrada y salida de los elementos "<item>"
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=3; $i++) {
    $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
    $item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
    $item_desc=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
    echo("<p>" . $item_title . " <br> <a href='" . $item_link . "'target='_blank' class='btn btn-sm btn-outline-primary'>Ver artículo</a> <hr class='divider'> </p>");
    // echo("<br>");
    // echo($item_desc . "</p>");
}