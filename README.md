<h3>RU</h3>

# Выведет случайный текст из 8 символов
# Пример вывода: "aBcDeFgH"
echo RandomStringHade(8);

# Выведет 6 случайных букв из английского алфавита
# Пример вывода: "AbCdEf"
echo RandomStringHade(6, 'letters_en');

# Выведет 6 случайных букв из русского алфавита
# Пример вывода: "жзийкл"
echo RandomStringHade(6, 'letters_ru');

# Выведет 5 случайных чисел, которые не будут повторяться
# Пример вывода: "12345"
echo RandomStringHade(5, 'num');

# Выведет 5 случайных символов со всякими решётками и собаками
# Пример вывода: "@#%$&"
echo RandomStringHade(5, 'trash');

# Выведет реально случайный текст с обозначенным числом символов
# Пример вывода: "aB3$d"
echo RandomStringHade(5, 'real_random');

# Выведет рандомный текст из своих символов и букв
# Пример вывода: "1@5aU"
echo RandomStringHade(5, 'custom', '@135790absUSB@');

# Выведет рандомную уникальную строку
# Пример вывода: "f47ac10b-58cc-4372-a567-0e02b2c3d479"
echo RandomStringHade(false, 'uniqid');

# Выведет рандомную короткую уникальную строку
# Пример вывода: "605c2e1b4f1d2"
echo RandomStringHade(false, 'uniqid_short');

# Генерация читаемой случайной строки длиной 12 символов, исключая некоторые символы
# Пример вывода: "aBcdeFgHjk"
echo RandomStringHade(12, 'all', false, '0O1l5S', true);

# Генерация строки по шаблону (буква, цифра, буква, буква, цифра)
# Пример вывода: "a1Bc2"
echo RandomStringHade(5, 'all', false, '', false, 'LNLNL');

<h3>EN</h3>

# Outputs a random text of 8 characters
# Example output: "aBcDeFgH"
echo RandomStringHade(8);

# Outputs 6 random letters from the English alphabet
# Example output: "AbCdEf"
echo RandomStringHade(6, 'letters_en');

# Outputs 6 random letters from the Russian alphabet
# Example output: "жзийкл"
echo RandomStringHade(6, 'letters_ru');

# Outputs 5 random numbers that will not repeat
# Example output: "12345"
echo RandomStringHade(5, 'num');

# Outputs 5 random symbols including various hash and at signs
# Example output: "@#%{{input}}"
echo RandomStringHade(5, 'trash');

# Outputs a truly random text with the specified number of characters
# Example output: "aB3$d"
echo RandomStringHade(5, 'real_random');

# Outputs random text from its own symbols and letters
# Example output: "1@5aU"
echo RandomStringHade(5, 'custom', '@135790absUSB@');

# Outputs a random unique string
# Example output: "f47ac10b-58cc-4372-a567-0e02b2c3d479"
echo RandomStringHade(false, 'uniqid');

# Outputs a random short unique string
# Example output: "605c2e1b4f1d2"
echo RandomStringHade(false, 'uniqid_short');

# Generates a readable random string of length 12, excluding certain characters
# Example output: "aBcdeFgHjk"
echo RandomStringHade(12, 'all', false, '0O1l5S', true);

# Generates a string based on a template (letter, number, letter, letter, number)
# Example output: "a1Bc2"
echo RandomStringHade(5, 'all', false, '', false, 'LNLNL');
