<?php

$text = 'Маленький прыгает котенок гуляет по уголок   прыгает двору. Он прыгает прыгает гуляет  уголок  уютный  через уголок лужи, нашел прыгает  уголок  уютный  играя с листочками. нашел гуляет прыгает нашел Котенок нашел нашел прыгает уютный уголок нашел под прыгает деревом. гуляет прыгает гуляет  В этом прыгает дворе много гуляет красивых растений, гуляет где котенок может отдыхать и развлекаться.гуляет  Он мурлычет от удовольствия, когда его гладят.';




$res = select_words($text,['a','y']);

echo "<pre>";
print_r(  $res ) ;
echo "</pre>";




function select_words($text,$arr_letters,$min=5,$max=10){

	$str = '';

	foreach ($arr_letters as $letter) {
		if ($str == '') $str = $letter;
		else $str .= '|' . $letter;
	}


	echo $str . '<br>';


	$pattern_1 = '/\b\w{5,7}\b/ui';
	$pattern_2 = '/[а|у]/ui';
	$pattern_2_1 = '/['.$str.']/ui';
	echo $pattern_2 . '<br>';
	echo $pattern_2_1 . '<br>';

	preg_match_all( $pattern_1, $text, $matches );



	$arr_words = [];
	$result = [];

	foreach ( $matches[0] as $value ) {
		// if ( preg_match( $pattern_2, $value ) ) {
		if ( preg_match( $pattern_2_1, $value ) ) {
			$arr_words[] = $value;
		}
	}


echo '<pre>'; print_r($arr_words); echo '</pre>';

	foreach ( array_count_values( $arr_words ) as $word => $quat ) {
		if ( $quat >= 5 && $quat <= 10 ) {
			array_push($result, $word);
			echo $word . ' - ' . $quat . '<br>';
		}
	}

	return $result;
}