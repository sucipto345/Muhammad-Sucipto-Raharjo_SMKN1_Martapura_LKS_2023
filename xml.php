<?php 
    $xmlString = '
    <?xml version="1.0" encoding="UTF-8"?>
    <CATALOG>
      <CD>
        <TITLE>Empire Burlesque</TITLE>
        <ARTIST>Bob Dylan</ARTIST>
        <COUNTRY>USA</COUNTRY>
        <COMPANY>Columbia</COMPANY>
        <PRICE>10.90</PRICE>
        <YEAR>1985</YEAR>
      </CD>

    </CATALOG>';

    $xml = simplexml_load_string($xmlString);
    $json = json_encode($xml);
    $jsonData = json_decode($json, true);

    echo json_encode($jsonData, JSON_PRETTY_PRINT);
?>
