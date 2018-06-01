<?php
require_once("private/src/php/func/connection.php");
$xml=' <?xml version="1.0" encoding="UTF_8"?>


	<url>
		<loc>http://ynovstage/list</loc>
	</url>
	<url>
		<loc>http://ynovstage/admin.php</loc>
	</url>
    ';

     $statement=$connection->queryGetData('
        SELECT id
        FROM osi_offer;
     ');

     foreach ($statement as $id) {
         $xml.=	'<url>
         		<loc>http://ynovstage/offer.php?id='.$id["id"].'</loc>
         	</url>';
     }
     $xml.='</urlset>';
     $file=fopen('../sitemap.xml','r+');
     ftruncate($file,0);
     fputs($file,$xml);
     header('sitemap.xml')
?>
