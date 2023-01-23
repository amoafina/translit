# Библиотека для транслитерации русских букв в английские
## 1. Установка через Composer

    composer require kogarkov/translit 0.0.1

Или добавьте в файл composer.json в блок require

    {
        "kogarkov/translit": "0.0.1"
    }

## 2. Использование

    use Kogarkov\Translit as translit;


    $parser = new translit\Parser();
    $result = $parser->go('Привет, я Коля!'); // Privet, ya Kolya!
