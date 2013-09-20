<!doctype html>

<html lang="en">
  <head>
       <meta charset="utf-8">
       <title>Custom Intranet- IIIT-BH</title>
       <link href="style.css" rel="stylesheet">
       <link href="style_common.css" rel="stylesheet">
	<link href="style3.css" rel="stylesheet">
	<link href="demo.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
    
       
  </head>
  
  
 <body>
 
 <?php
include_once('simple_html_dom.php');
$target_url = 'http://172.16.1.30/Hibiscus/Pub/nbDocList.php?client=iiit';
$html = new simple_html_dom();
$html->load_file($target_url);
echo '<div class="container">';
$url='http://172.16.1.30/Hibiscus/Pub/';
foreach($html->find("tr[class=LOV]") as $post){

	$author=$post->find("td[width=20%]",0)->find("font[color=red]",0)->innertext;
	$title= $post->find("font[color=blue]",0)->innertext;
	
	//$attention=$post->find("font[color=blue]",0)->innertext;
	$post->find("td[width=20%]",0)->find("font[color=red]",0)->innertext='';
	$post->find("font[color=blue]",0)->color='#8D8D8D';
	$post->find("font[color=blue]",0)->outertext='';
	$post->find("font[color=red]",0)->tag='font color="black" ';
	$post->find("td[width=80]",0)->outertext='';
	$url_2=$post->find("a[rel=prettyPhoto[pp_gal]]",0)->href;
	$link_url= $url.''. $url_2;
	$post->find("a[rel=prettyPhoto[pp_gal]]",0)->href=$link_url;
	$post->find("a[rel=prettyPhoto[pp_gal]]",0)->target='_blank';
	$post->find("a[href=*]",0)->outertext='';
	
	/********************************************************************************************************************************/
	/********************************************* CODE FOR RSS ********************************************************************/
	/********************************************************************************************************************************/
	
	$desc_url = $link_url;
	$html_desc = new simple_html_dom();
	$html_desc->load_file($desc_url);
	
	/*************************************** Code for cleaning url to get post num ****************************/
	$url_clean_iframe=explode('&iframe=true', $link_url); //removes iframe
	$url_clean_ques=explode('&', $url_clean_iframe[0]); //removes strings after ?
	$url_clean_post_num=explode('http://172.16.1.30/Hibiscus/Pub/nbDocDet.php?docid=', $url_clean_ques[0]); //gets post number
	$post_num=$url_clean_post_num[1];
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	
	$deanoff= "Dean&#039;s Office";
	$naps=" News &amp; Publications Secretary";
	
	if($author=="Mr. Ajaya Kumar Dash"){
		$img = "http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP050.jpg";
		}
	elseif(($author=="Placement Secretary") or ($author==" Cultural Secretary") or ($author=="Sports Secretary") or ($author=="Mess Committee Secretary") or ($author==" News &amp; Publications Secretary") or ($author=="Secretary, Technology Club")){
		$img= "images/iiit.jpg";
	}
	elseif($author=="Prof. Ajit Kumar Das"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP002.jpg";
	}
	elseif($author=="Dr. Anjali Mohapatra"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP003.jpg";
	}
	elseif($author=="Mr. Asutosh Kar"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP003.jpg";
	}
	elseif($author=="Prof. Bamadev Sahoo"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP016.jpg";
	}
	elseif($author=="Ms. Bharati Mishra"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP033.jpg";
	}
	elseif($author=="Mr. Bijayananda Patnaik"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP046.jpg";
	}
	elseif($author=="Dr. Biranchi Narayan Padhi"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP024.jpg";
	}
	elseif($author=="Dr. Biswajit Pradhan"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP008.jpg";
	}
	elseif($author=="Mr. Debani Prasad Mishra"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP034.jpg";
	}
	elseif($author=="Dr. Debasish Jena"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP020.jpg";
	}
	elseif($author=="Dr. Gopal Krishna Nayak"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP001.jpg";
	}
	elseif($author=="Mr. Harish Kumar Sahoo"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP023.jpg";
	}
	elseif($author=="Dr. Hemanta Kumar Pati"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP022.jpg";
	}
	elseif($author=="Ms. Jolly Dey"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP049.jpg";
	}
	elseif($author=="Mr. Kshirod Kumar Rout"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP035.jpg";
	}
	elseif($author=="Prof. Lipika Das"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP014.jpg";
	}
	elseif($author=="Mr. Mukesh Tiwari"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP057.jpg";
	}
	elseif($author=="Prof. Muktikanta Sahu"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP013.jpg";
	}
	elseif($author=="Dr. Pradyut Kumar Biswal"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP044.jpg";
	}
	elseif($author=="Dr. Prakash Kumar Ray"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP047.jpg";
	}
	elseif($author=="Dr. Prasanta Kumar Ray"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP036.jpg";
	}
	elseif($author=="Prof. Puspanjali Mohapatra"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP012.jpg";
	}
	elseif($author=="Mr. Rajat Kumar Giri"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP037.jpg";
	}
	elseif($author=="Dr. Rakesh Chandra Balabantaray"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP004.jpg";
	}
	elseif($author=="Mr. Rakesh Kumar Lenka"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP051.jpg";
	}
	elseif($author=="Mr. Sabyasachi Patra"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP038.jpg";
	}
	elseif($author=="Mr. Sachidananda Sahoo"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP058.jpg";
	}
	elseif($author=="Dr. Sanjaya Kumar Parhi"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP039.jpg";
	}
	elseif($author=="Mr. Saroj Kumar Mishra"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP040.jpg";
	}
	elseif($author=="Dr. Satyanarayan Pal"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP009.jpg";
	}
	elseif($author=="Mr. Soumen Bag"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP053.jpg";
	}
	elseif($author=="Mr. Srinivasarao Chintagunta"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP054.jpg";
	}
	elseif($author=="Mr. Suraj Sharma"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP055.jpg";
	}
	elseif($author=="Mr. Suvendu Rup"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP029.jpg";
	}
	elseif($author=="Ms. Swati Vipsita"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP056.jpg";
	}
	elseif($author=="Dr. Tanutrushna Panigrahi"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP017.jpg";
	}
	elseif($author=="Mr. Tapas Kumar Panigrahi"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP025.jpg";
	}
	elseif($author=="Mr. Tushar Ranjan Sahoo"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP042.jpg";
	}
	elseif($author=="Ms. Umamani Subudhi"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP030.jpg";
	}
	elseif($author==" Office of the Dean" or $author==" Admission Office" or $author=="Office of the Director"){
		$img="images/iiit.jpg";
	}
	elseif($author=="Ms. Umamani Subudhi"){
		$img="http://hib.ximb.ac.in/Hibiscus/docs/iiit/Photos/FP030.jpg";
	}
	elseif($author==""){
		$img="images/anon.jpg";
	}
	else{
		$img="images/bronte.jpg";
	}
	
	
	echo '<section class="main">
				
		<div class="mb-wrap mb-style-3">
		<div class="notice">
		<p>'.$post.'</p>';
			
		
		foreach($html_desc->find("td[valign=top]") as $desc){
			
		echo '<p>'.$desc.'</p>
		';
		break;
		}
		
		echo '</div>
		<div class="mb-attribution">
		<p class="mb-author"></p>
		<p class="mb-author">'.$author.'</p>
		<div class="mb-thumb"><img src="'.$img.'" height="60px" width="60px"></img></div>
		</div>
		</div>
					
	</section>';
	/*********************************************Inserting into the database***********************************/
	mysql_connect("localhost","root","") or die("connection error");
	mysql_select_db("newintranet") or die("no such db");
	
	
	$check_last_post=mysql_query("SELECT `Post_num` from `intranet` ORDER BY `Post_num` DESC LIMIT 0,1") or die("Error in checking last post");
	$last_post_num=mysql_fetch_array($check_last_post);
	//echo $last_post_num[0];
	$check_for_duplicate=mysql_query("SELECT `Post_num` from `intranet` WHERE `Post_num`='$post_num'") or die("Error in post duplicate");
	if(mysql_num_rows($check_for_duplicate)>0){
		$post_duplicate=1;
	}
	else $post_duplicate=0;
	if($post_num > $last_post_num[0] && $post_duplicate==0){
		$insert_query=mysql_query("INSERT into intranet (Post_num, Title) values('$post_num', '$title')");
		
	}
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	

}
echo '</div>';
 
?>
	
  <!--end container-->
 
 </body> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39326656-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	
</html>

