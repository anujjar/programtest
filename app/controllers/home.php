<?php
class Home extends Controller {


	public function index(){
	
	}

	public function date(){
		function dateDifference($date_1 , $date_2 , $differenceFormat = '%R%a' )
		{
		    $datetime1 = date_create($date_1);
		    $datetime2 = date_create($date_2);
		    
		    $interval = date_diff($datetime1, $datetime2);
		    
		    return $interval->format($differenceFormat);
		    
		}

		$today_date=date('Y-m-d H:i:s');
		$check_date='2017-07-20 11:22:59';
		var_dump(dateDifference($today_date,$check_date));

		$date="0000-00-00 00:00:00";
		if(empty($date)){
			echo "Yes";
		}else{
			echo "No";
		}
	}


}

?>