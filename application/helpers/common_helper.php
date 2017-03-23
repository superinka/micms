<?php 
	function public_url($url=''){
		return base_url('public/'.$url);
	}

	function admin_theme($url=''){
		return base_url('public/temp/admin/gentelella-master'.$url);
	}
	
	function fe_url($url=''){
		return base_url('public/temp/site/corlate'.$url);
	}

	function pre($list,$exit=true){
		echo "<pre>";
		print_r($list);
		
		if($exit){
			die();
		}
	}

	function action_gioitinh($gioitinh) {
		if ($gioitinh == 1) {
			$gt = 'Nam';
		}

		else if ($gioitinh == 2) {
			$gt = 'Nữ';
		}

		return $gt;

	}



	function networkdays($s, $e, $holidays = array()) {
	    // If the start and end dates are given in the wrong order, flip them.    
	    if ($s > $e)
	        return networkdays($e, $s, $holidays);

	    // Find the ISO-8601 day of the week for the two dates.
	    $sd = date("N", $s);
	    $ed = date("N", $e);

	    // Find the number of weeks between the dates.
	    $w = floor(($e - $s)/(86400*7));    # Divide the difference in the two times by seven days to get the number of weeks.
	    if ($ed >= $sd) { $w--; }        # If the end date falls on the same day of the week or a later day of the week than the start date, subtract a week.

	    // Calculate net working days.
	    $nwd = max(6 - $sd, 0);    # If the start day is Saturday or Sunday, add zero, otherewise add six minus the weekday number.
	    $nwd += min($ed, 5);    # If the end day is Saturday or Sunday, add five, otherwise add the weekday number.
	    $nwd += $w * 5;        # Add five days for each week in between.

	    // Iterate through the array of holidays. For each holiday between the start and end dates that isn't a Saturday or a Sunday, remove one day.
	    foreach ($holidays as $h) {
	        $h = strtotime($h);
	        if ($h > $s && $h < $e && date("N", $h) < 6)
	            $nwd--;
	    }

	    return $nwd;
	}

	function percent_day($a, $b){

		if($a>$b) {
			return $rs = 100;
		}

		else {
			$rs = ($a/$b)*100;
		}

		return $rs;

	}



	function identical_values( $arrayA , $arrayB ) { 

    sort( $arrayA ); 
    sort( $arrayB ); 

    return $arrayA == $arrayB; 
	}

	function time_elapsed_string($eventTime){
	    $etime = time() - $eventTime;

	    if ($etime < 1)
	    {
	        return 'Vừa xong';
	    }

	    $a = array( 365 * 24 * 60 * 60  =>  'năm',
	                 30 * 24 * 60 * 60  =>  'tháng',
	                      24 * 60 * 60  =>  'ngày',
	                           60 * 60  =>  'giờ',
	                                60  =>  'phút',
	                                 1  =>  'giây'
	                );
	    $a_plural = array( 'năm'    => 'năm',
	                       'tháng'  => 'tháng',
	                       'ngày'   => 'ngày',
	                       'giờ'    => 'giờ',
	                       'phút'   => 'phút',
	                       'giây'   => 'giây'
	                );

	    foreach ($a as $secs => $str)
	    {
	        $d = $etime / $secs;
	        if ($d >= 1)
	        {
	            $r = round($d);
	            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' trước';
	        }
	    }
	}



	function generateRandomString($length = 10) {
    	return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}

	function cmp($a, $b)
	{
		return strcmp($a["account_type"], $b["account_type"]);
	}

	function to_slug($str) {
		$str = trim(mb_strtolower($str));
		$str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
		$str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
		$str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
		$str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
		$str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
		$str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
		$str = preg_replace('/(đ)/', 'd', $str);
		$str = preg_replace('/[^a-z0-9-\s]/', '', $str);
		$str = preg_replace('/([\s]+)/', '-', $str);
		return $str;
	}


?>
