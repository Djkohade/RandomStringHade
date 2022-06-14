
/*
	* by Djkohade update 2022
	* Функция содержит в себе возможность ген. как случайных чисел, букв,  так и по заданному шаблону .
  
	* Выведет случайный текст из 8 символов
	* echo RandomStringHade(8);
	
	* Выведет 6 случайных буквы из анг. алфавита
	* echo RandomStringHade(6,'letters_en');
	
	* Выведет 6 случайных буквы из Русс. алфавита
	* echoRandomStringHade(6,'letters_ru');
	
	* Выведет 5 случайных чисел которые не будут повторяться
	* echo RandomStringHade(5,'num');
	
	* Выведет 5 случайных символов со всякими решётками и собаками
	* echo RandomStringHade(5,'trash');
	
	* Выведет реально случайный текст с обозначенным числом символов
	* echo RandomStringHade(5,'real_random');
	
	* Выведет рандомный текст из своих символов и букв
	* echo RandomStringHade(5, 'custom','@135790absUSB@');
	
	* Выведет рандомную уникальную строку
	* echo RandomStringHade(false, 'uniqid');	
	
	* Выведет рандомную короткую уникальную строку
	* echo RandomStringHade(false, 'uniqid_short');	
*/


function RandomStringHade($num = 6, $type = 'all' , $custom = false) {
	$output = false;
	
	$data = array(
		'all' => 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#%$*()[];.^&',
		'letters_en' => 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		'letters_ru' => 'абвгдежзийклмнопрстуфчцчшщыэюяАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЫЭЮЯ',
		'num' => '0123456789',
		'trash' => '@#%$*()[];.^&',
	);
	if ($type != 'custom' AND $type != 'real_random') {
		$output = $data[$type];
	}
	
	//Рандомный текст из своих символов и букв
	if ($type ==  'custom') {
		$output = $custom;
	}
	//Перемешиваем 
	$output = str_shuffle($output);
	$output = substr($output, 3, $num);
	
	//Реальный рандом текста
	if ($type == 'real_random') {
		for($s = null, $i = 0; $i < $num; ++$i) {
			$s .= $data['all'][rand(0, strlen($data['all']) - 1)];
		}
		$output = $s;
	}
	//Уникальные значения
	if ($type == 'uniqid') {
		$output = sprintf( '%04x%04x%04x%04x%04x%04x%04x%04x',
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
			mt_rand( 0, 0xffff ),
			mt_rand( 0, 0x0fff ) | 0x4000,
			mt_rand( 0, 0x3fff ) | 0x8000,
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
		);
	}
	if ($type == 'uniqid_short') {
		$output = uniqid();
	}
	//Выводим результат
	return $output;
}
