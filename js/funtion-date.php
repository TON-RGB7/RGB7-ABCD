<?php
function DateThai($today)
{
	$strYear		=		date("Y",strtotime($today))+543;
	$strMonth=		date("n",strtotime($today));
	$strDay=		date("j",strtotime($today));
	//$strHour=		date("H",strtotime($strDate));
	//$strMinute=		date("i",strtotime($strDate));
	//$strSeconds=	date("s",strtotime($strDate));
	$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	$strMonthThai=$strMonthCut[$strMonth];				
	return "$strDay $strMonthThai $strYear";
}

?>