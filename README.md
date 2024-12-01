<h3>RU</h3>

// Выведет случайный текст из 8 символов
echo RandomStringHade(8); // Пример вывода: "aBcDeFgH"

// Выведет 6 случайных букв из английского алфавита
echo RandomStringHade(6, 'letters_en'); // Пример вывода: "AbCdEf"

// Выведет 6 случайных букв из русского алфавита
echo RandomStringHade(6, 'letters_ru'); // Пример вывода: "жзийкл"

// Выведет 5 случайных чисел, которые не будут повторяться
echo RandomStringHade(5, 'num'); // Пример вывода: "12345"

// Выведет 5 случайных символов со всякими решётками и собаками
echo RandomStringHade(5, 'trash'); // Пример вывода: "@#%$&"

// Выведет реально случайный текст с обозначенным числом символов
echo RandomStringHade(5, 'real_random'); // Пример вывода: "aB3$d"

// Выведет рандомный текст из своих символов и букв
echo RandomStringHade(5, 'custom', '@135790absUSB@'); // Пример вывода: "1@5aU"

// Выведет рандомную уникальную строку
echo RandomStringHade(false, 'uniqid'); // Пример вывода: "f47ac10b-58cc-4372-a567-0e02b2c3d479"

// Выведет рандомную короткую уникальную строку
echo RandomStringHade(false, 'uniqid_short'); // Пример вывода: "605c2e1b4f1d2"

// Генерация читаемой случайной строки длиной 12 символов, исключая некоторые символы
echo RandomStringHade(12, 'all', false, '0O1l5S', true); // Пример вывода: "aBcdeFgHjk"

// Генерация строки по шаблону (буква, цифра, буква, буква, цифра)
echo RandomStringHade(5, 'all', false, '', false, 'LNLNL'); // Пример вывода: "a1Bc2"

<h3>EN</h3>

// Outputs a random text of 8 characters
echo RandomStringHade(8); // Example output: "aBcDeFgH"

// Outputs 6 random letters from the English alphabet
echo RandomStringHade(6, 'letters_en'); // Example output: "AbCdEf"

// Outputs 6 random letters from the Russian alphabet
echo RandomStringHade(6, 'letters_ru'); // Example output: "жзийкл"

// Outputs 5 random numbers that will not repeat
echo RandomStringHade(5, 'num'); // Example output: "12345"

// Outputs 5 random symbols including various hash and at signs
echo RandomStringHade(5, 'trash'); // Example output: "@#%{{input}}"

// Outputs a truly random text with the specified number of characters
echo RandomStringHade(5, 'real_random'); // Example output: "aB3$d"

// Outputs random text from its own symbols and letters
echo RandomStringHade(5, 'custom', '@135790absUSB@'); // Example output: "1@5aU"

// Outputs a random unique string
echo RandomStringHade(false, 'uniqid'); // Example output: "f47ac10b-58cc-4372-a567-0e02b2c3d479"

// Outputs a random short unique string
echo RandomStringHade(false, 'uniqid_short'); // Example output: "605c2e1b4f1d2"

// Generates a readable random string of length 12, excluding certain characters
echo RandomStringHade(12, 'all', false, '0O1l5S', true); // Example output: "aBcdeFgHjk"

// Generates a string based on a template (letter, number, letter, letter, number)
echo RandomStringHade(5, 'all', false, '', false, 'LNLNL'); // Example output: "a1Bc2"
