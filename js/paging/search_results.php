<!-- include style -->
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<?php
//open database
include 'config_open_db.php';
//include our awesome pagination
//class (library)
include 'libs/ps_pagination2.php';

//query all data anyway you want
$sql = "select * from tb_item ORDER BY id DESC";

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
$pager = new PS_Pagination( $conn, $sql, 5, 10, null );

//our pagination class will render new
//recordset (search results now are limited
//for pagination)
$rs = $pager->paginate(); 

//get retrieved rows to check if
//there are retrieved data
$num = mysql_num_rows( $rs );

if($num >= 1 ){     
	//creating our table header
	echo "<table id='my-tbl'>";
	echo "<tr>";
		echo "<th>Firstname</th>";
		echo "<th>Lastname</th>";
		echo "<th>Email</th>";
	echo "</tr>";
	
	//looping through the records retrieved
	while($row = mysql_fetch_array( $rs )){
		$id=$row['id'];
		
	
		echo "<tr class='data-tr' align='center'>";
		echo "<td>{$row[0]}</td>";
		echo "<td>{$row[4]}</td>";
		echo "</tr>";
	}       
	
	echo "</table>";
}else{
	//if no records found
	echo "No records found!";
}
//page-nav class to control
//the appearance of our page 
//number navigation
echo "<div class='page-nav'>";
	//display our page number navigation
	echo $pager->renderFullNav();
echo "</div>";

?>