<?php

$artsy_fartsy = 'https://www.partner-ads.com/dk/feed_udlaes2.php?partnerid=28187&bannerid=82707&feedid=1995';
$baobabshop = 'https://www.partner-ads.com/dk/feed_udlaes2.php?partnerid=28187&bannerid=88356&feedid=2210';
$bysampedro = 'https://www.partner-ads.com/dk/feed_udlaes2.php?partnerid=28187&bannerid=67036&feedid=1364';
$citatplakat = 'https://www.partner-ads.com/dk/feed_udlaes2.php?partnerid=28187&bannerid=71238&feedid=1523';
$dialaegt = 'https://www.partner-ads.com/dk/feed_udlaes2.php?partnerid=28187&bannerid=71049&feedid=1519';

$search = '';

$file = './_data/posters.yml';
unlink($file);
fopen($file, 'a');

write_products($file, $citatplakat);
write_products($file, $dialaegt);

function remove_characters($string) {
    $string = str_replace('eÌ', 'è', $string);
    $string = str_replace('EÌ', 'È', $string);
    $string = str_replace('eÌ', 'è', $string);
    $string = str_replace('IÌ', 'î', $string);
    $string = str_replace('aÌ', 'à', $string);
    $string = str_replace('aÌ', 'à', $string);
    $string = str_replace('uÌ', 'ù', $string);
    $string = str_replace('oÃ', 'õ', $string);
    $string = str_replace('Ã', 'É', $string);
    $string = str_replace('Ãª', 'ê', $string);
    $string = str_replace('AÌ', 'Å', $string);
    $string = str_replace('â', '', $string);
    $string = str_replace('â', '', $string);
    $string = str_replace('Â ', '', $string);
    
    $string = str_replace('"', '', $string);
    return $string;
}

function write_products($file, $xml, $search = '') {

    $xmldata = simplexml_load_file($xml) or die("Failed to load");
    $i = 0;
    $product = array();
    $title_check = '';
    foreach($xmldata->children() as $p) {
        /*
        if ($p->lagerantal != 'in stock') {
            continue;
        }
        */
        if (!empty($search) && strpos(strtolower($p->produktnavn), $search) === false) {
            continue;
        }

        if (strtolower($title_check) == strtolower($p->produktnavn)) {
            continue;
        }
        $title_check = $p->produktnavn;
        
        $product[$i]['vendor'] = $p->forhandler;
        $product[$i]['brand'] = $p->brand;
        $product[$i]['category'] = $p->kategorinavn;
        $product[$i]['title'] = remove_characters($p->produktnavn);
        $product[$i]['excerpt'] = remove_characters($p->beskrivelse);
        $product[$i]['image_path'] = remove_characters($p->billedurl); 
        $product[$i]['url'] = $p->vareurl;
        $product[$i]['price'] = $p->nypris;
        $product[$i]['old_price'] = $p->glpris;        
        $product[$i]['in_stock'] = $p->lagerantal;
        $product[$i]['id'] = $p->produktid;
        
        if ($p->nypris < $p->glpris) {
            $product[$i]['discounted'] = 'true';
        } else {
            $product[$i]['discounted'] = 'false';
        }
    
        $i++;
    }

    $output = '';
    $title_check = '';
    
    foreach ($product as $p) {
        if (strtolower($title_check) == strtolower($p['title'])) {
            continue;
        }
        $title_check = $p['title'];
    
    $output .= '- image_path: "' . $p['image_path'] . '"
  url: "' . $p['url'] . '"
  title: "' . $p['title']. '"
  vendor: "' . $p['vendor']. '"
  category: "' . $p['category']. '"
  price: ' . $p['price']. '
  old_price: ' . $p['old_price']. '
  discounted: ' . $p['discounted'] . '
  id: "' . $p['id']. '"
  rel: sponsored nofollow noopener
';
//  excerpt: "' . $p['excerpt']. '"

    }
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $current .= $output;
    // Write the contents back to the file
    file_put_contents($file, $current);
}


/*
<produkt>
<forhandler>Wallstickerland</forhandler>
<kategorinavn>2334</kategorinavn>
<brand>Wallstickerland.dk</brand>
<produktnavn>Rengøringsdame - Banksy</produktnavn>
<produktid>10</produktid>
<beskrivelse>Værket "Maid" af gadekunstneren Banksy fås nu som wallsticker, hvor en rengøringsdame fejer skidt ind under tapetet. En anderledes og tankevækkende dekoration, som du kan få hjem til din egen væg.</beskrivelse>
<nypris>299.00</nypris>
<lagerantal>in stock</lagerantal>
<color>black</color>
<billedurl>https://www.wallstickerland.dk/media/catalog/product/b/a/banksy-stuepige.jpg</billedurl>
<vareurl>https://www.partner-ads.com/dk/klikbanner.php?bannerid=44221&partnerid=28187&htmlurl=https://www.wallstickerland.dk/rengoringsdame-banksy-wallsticker</vareurl>
</produkt>
*/
