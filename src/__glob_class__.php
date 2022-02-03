<?PHP
class Main
{	
	public static function bio ($mysqli, $keygen, $args=null) {
		$tb = 'user';
		$row = sql_select_one($mysqli, $tb, 'keygen', $keygen);
		$arr = array();

		$arr['title'] = '('.$keygen.')';
		$arr['keygen'] = $keygen;
		if (is_array($row)) {
			$df = 'F jS, Y';

			$s_title = enum_f(Lists::TITLE, $row['s_title']);
			$s_bio = $row['s_title'] > 0? $s_title.' ': '';
			$s_bio .= $row['s_names'];
			$s_date = date_t($row['s_date'],$df);

			$r_title = enum_f(Lists::TITLE, $row['r_title']);
			$r_bio = $row['r_title'] > 0? $r_title.' ': '';
			$r_bio .= $row['r_names'];
			$r_date = date_t($row['r_date'],$df);

			$arr['status'] = enum_f($args[0], $row['STATUS']);
			$arr['location'] = $row['location'];
			$arr['summary'] = 'Parcel sent by '.$s_bio.' ('.$row['s_city'].') on '.$s_date.', to be received by '.$r_bio.' ('.$row['r_city'].') on  '.$r_date.'...';

			$arr['s_bio'] = $s_bio;
			$arr['s_city'] = $row['s_city'];
			$arr['s_phone'] = null_f($row['s_phone']);
			$arr['s_email'] = null_f(strtolower($row['s_email']));
			$arr['s_date'] = $s_date;

			$arr['r_bio'] = $r_bio;
			$arr['r_city'] = $row['r_city'];
			$arr['r_phone'] = null_f($row['r_phone']);
			$arr['r_email'] = null_f(strtolower($row['r_email']));
			$arr['r_date'] = $r_date;			
		}
		else {
			$arr['status'] = 'N/A';
			$arr['location'] = 'N/A';
			$arr['summary'] = 'N/A';

			$arr['s_bio'] = 'N/A';
			$arr['s_city'] = 'N/A';
			$arr['s_phone'] = 'N/A';
			$arr['s_email'] = 'N/A';
			$arr['s_date'] = 'N/A';

			$arr['r_bio'] = 'N/A';
			$arr['r_city'] = 'N/A';
			$arr['r_phone'] = 'N/A';
			$arr['r_email'] = 'N/A';
			$arr['r_date'] = 'N/A';
		}
		return $arr;
	}
}
$new_main = new Main();
?>