<?php

/**
 * RandomStringHade
 *
 * @author Djkohade
 * @version 2.0.0
 * @created 2017
 * @updated 2022, 2024
 *
 * Функция содержит в себе возможность генерировать как случайные числа, так и буквы, а также по заданному шаблону.
 *
 * Примеры использования:
 *
 * Выведет случайный текст из 8 символов:
 * echo RandomStringHade(8);
 *
 * Выведет 6 случайных букв из английского алфавита:
 * echo RandomStringHade(6, 'letters_en');
 *
 * Выведет 6 случайных букв из русского алфавита:
 * echo RandomStringHade(6, 'letters_ru');
 *
 * Выведет 5 случайных чисел, которые не будут повторяться:
 * echo RandomStringHade(5, 'num');
 *
 * Выведет 5 случайных символов со всякими решётками и собаками:
 * echo RandomStringHade(5, 'trash');
 *
 * Выведет реально случайный текст с обозначенным числом символов:
 * echo RandomStringHade(5, 'real_random');
 *
 * Выведет рандомный текст из своих символов и букв:
 * echo RandomStringHade(5, 'custom', '@135790absUSB@');
 *
 * Выведет рандомную уникальную строку:
 * echo RandomStringHade(false, 'uniqid');
 *
 * Выведет рандомную короткую уникальную строку:
 * echo RandomStringHade(false, 'uniqid_short');
 */

function RandomStringHade($num = 6, $type = 'all', $custom = false, $exclude = '') {
    // Проверка на корректность входных данных
    if (!is_int($num) || $num <= 0) {
        throw new InvalidArgumentException('Parameter $num must be a positive integer.');
    }

    $data = [
        'all' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#%$*()[];.^&',
        'letters_en' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'letters_ru' => 'абвгдежзийклмнопрстуфчцчшщыэюяАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЫЭЮЯ',
        'num' => '0123456789',
        'trash' => '@#%$*()[];.^&',
    ];

    // Установка набора символов
    $output = $type === 'custom' ? $custom : ($data[$type] ?? $data['all']);

    // Исключение нежелательных символов
    $output = str_replace(str_split($exclude), '', $output);

    // Генерация случайной строки
    if ($type === 'real_random') {
        $result = '';
        for ($i = 0; $i < $num; ++$i) {
            $result .= $output[random_int(0, strlen($output) - 1)];
        }
        return $result;
    } else {
        return substr(str_shuffle($output), 0, $num);
    }
	
    // Генерация уникальных значений
    if ($type === 'uniqid') {
        return sprintf('%04x%04x%04x%04x%04x%04x%04x%04x',
            random_int(0, 0xffff), random_int(0, 0xffff),
            random_int(0, 0xffff),
            random_int(0, 0x0fff) | 0x4000,
            random_int(0, 0x3fff) | 0x8000,
            random_int(0, 0xffff), random_int(0, 0xffff), random_int(0, 0xffff)
        );
    }

    if ($type === 'uniqid_short') {
        return uniqid();
    }

    return $output;
}

?>