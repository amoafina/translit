# Библиотека для транслитерации русских букв в английские
## 1. Установка через Composer

    composer require kogarkov/translit ^1

Или добавьте в файл composer.json в блок require

    {
        "kogarkov/translit": "^1"
    }

## 2. Использование

    use kogarkov/translit;


    $parser = new Translit/Parser();
    $result = $parser->go('Привет, я Коля!'); // Privet, ya Kolya!