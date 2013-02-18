<?php
// Navigate through the Currency Exchange XML, getting the currency exchange for every day
// Need the config option allow_url_fopen=On (default)
// The files are updated daily between 2.15 p.m. and 3.00 p.m. CET

// Last 90 days
$xml=simplexml_load_file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-hist-90d.xml");
// Since 1999
//$xml=simplexml_load_file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-hist.xml");

foreach ($xml->Cube->Cube as $day) {
    echo "-------------- For day " . $day["time"] . "--------------\n";
    foreach($day->Cube as $rate){
        //echo '1&euro;='.$rate["rate"].' '.$rate["currency"].'<br/>';
        echo "1€ = " . $rate["rate"] . "" . $rate["currency"] . "\n";
    }
}
?>