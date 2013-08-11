<!doctype html>

<html lang="en">
  <head>
       <meta charset="utf-8">
       <title>iNRANET</title>
       <link href="style.css" rel="stylesheet">
       <link href="style_common.css" rel="stylesheet">
	<link href="style3.css" rel="stylesheet">
	<link href="demo.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>

       
       
  </head>
  
  
 <body>
 
 <?php
include_once('simple_html_dom.php');
$target_url = 'http://hib.ximb.ac.in/Hibiscus/Pub/nbDocList.php?client=iiit';
$html = new simple_html_dom();
$html->load_file($target_url);
echo '<div class="container">';
$url='http://hib.ximb.ac.in/Hibiscus/Pub/';
foreach($html->find("tr[class=LOV]") as $post){

$author=$post->find("td[width=20%]",0)->find("font[color=red]",0)->innertext;
$post->find("td[width=20%]",0)->find("font[color=red]",0)->innertext='';
$post->find("font[color=blue]",0)->color='#8D8D8D';
$post->find("font[color=blue]",0)->outertext='';
$post->find("td[width=80]",0)->outertext='';
$url_2=$post->find("a[rel=prettyPhoto[pp_gal]]",0)->href;
$link_url= $url.''. $url_2;
$post->find("a[rel=prettyPhoto[pp_gal]]",0)->href=$link_url;
$post->find("a[rel=prettyPhoto[pp_gal]]",0)->target='_blank';
$post->find("a[href=*]",0)->outertext='';



echo '<section class="main">
			
				<div class="mb-wrap mb-style-3">
					<div class="notice">
						<p>'.$post.'</p>
					</div>
					<div class="mb-attribution">
					
						<p class="mb-author">'.$author.'</p>
						<div class="mb-thumb"></div>
					</div>
				</div>
				
			</section>';


}
echo '</div>';

?>
	
  <!--end container-->
	
 </body> 
	
</html>

