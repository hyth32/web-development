<?php
    header("Content-Type: text/plain");
    $text = trim($_GET['identifier']);
    $arrayText = str_split($text);
    $answer = 'Не введен ключ или не присвоено значение';

    if($text = trim($_GET['identifier']))
    {
        if(ctype_alpha($text))
        {
            $answer = 'Yes';
            echo 'Идентификатор состоит из буквенных символов: ';
        }
        else
        {
            if(is_numeric($arrayText[0]))
            {
                $answer = 'No';
                echo 'Идентификатор начинается с цифры: ';
            }
            else
            {
                $answer = 'Yes';
                echo 'Идентификатор содержит цифру, но не начинается с нее: ';
            }
        }
    }

    echo $answer . '.';
?>
