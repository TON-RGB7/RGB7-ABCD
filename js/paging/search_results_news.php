<!-- include style -->
<!-- <link rel="stylesheet" type="text/css" href="styles/style.css" /> -->
<link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/docs.css" rel="stylesheet">
<?php
//open database
include 'config_open_db.php';
//include our awesome pagination
//class (library)
include 'libs/ps_pagination_news.php';

//query all data anyway you want
$sql = "select * from news ORDER BY news_id DESC";

//execute query and get and

$rs = mysql_query( $sql ) or die('Database Error: ' . mysql_error() . ' ' . $sql );

//now, where gonna use our pagination class
//this is a significant part of our pagination
//i will explain the PS_Pagination parameters
//$conn is a variable from our config_open_db.php
//$sql is our sql statement above
//3 is the number of records retrieved per page
//4 is the number of page numbers rendered below
//null - i used null since in dont have any other
//parameters to pass (i.e. param1=valu1&param2=value2)
//you can use this if you're gonna use this class for search
//results since you will have to pass search keywords
$pager = new PS_Pagination( $conn, $sql, 2, 4, null );

//our pagination class will render new
//recordset (search results now are limited
//for pagination)
$rs = $pager->paginate(); 

//get retrieved rows to check if
//there are retrieved data
$num = mysql_num_rows( $rs );

if($num >= 1 ){     
	//creating our table header
	/*
echo "<table id='my-tbl'>";
	echo "<tr>";
		echo "<th>Firstname</th>";
		echo "<th>Lastname</th>";
		echo "<th>Email</th>";
	echo "</tr>";
*/
	
	//looping through the records retrieved
	while($row = mysql_fetch_array( $rs )){
		$id_car=$row[0];
		
	/*
$car_img=mysql_query("select * from car_album where car_id=$id_car order by car_num asc limit 1");
		while($row1=mysql_fetch_array($car_img)){
			$img_car=$row1[1];
		}
*/
		?>
	<div class="row">

	<div class="span9">
	
	<div class="row">
	
	<div class="span3">
<div class="nailthumb-container small-thumb">    
					<a href="<?= "$site/news-detail/$row[1]";?>"> <img src="<?= "$site/libraries/img_news/$row[3]";?>" alt="<?= $rs[3];?>" border="0"></a>
				</div>
	</div>
	
	<div class="span6 ">
	<h3><?= $row[1];?></h3>
	                  <p><?= "$detail";?> ... <a href="<?= "$site/news-detail/$row[1]";?>">more >></a></p>
	</div>
	
	</div><!--end new item-->
	<br class="clearfix">
	
	</div>
    </div>
<?
/*
		echo "<tr class='data-tr' align='center'>";
		echo "<td>{$row[1]}</td>";
		echo "<td><img src=\"../libraries/img_car/_small/$img_car\"></td>";
		echo "<td>{$row[4]}</td>";
		echo "</tr>";
*/
	}       
	
	//echo "</table>";
}else{
	//if no records found
	echo "No records found!";
}
?>
 <!-- Page Load -->
 
<div class="row">

<div class="span9">

<div class="pagination">

 <ul>
 	   <li><? echo $pager->renderFullNav();;?> </li> 							   
 </ul>
 
</div>

</div>

</div>
<!--
<div class="row">

<div class="span9">

<div class="pagination">

 <ul>
 	   <li><a href='/news/1'> « </a></li><li><a> 1 </a> </li>  <li><a href='/news/2'>2</a> </li>  <li> <a href='/news/2'> › </a></li>   <li><a href='/news/2'> » </a> </li> 							   
 </ul>
 
</div>

</div>

</div>
-->

							
