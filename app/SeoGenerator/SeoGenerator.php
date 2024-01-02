<?php

namespace App\SeoGenerator;

class SeoGenerator
{
    public static function generateKeywords($str): string
    {
        $min_word_length = 3;
        $avoid = ["этот", "эта", "это", "те", "тот", "та", "к", "в", "на", "для", "я", "есть", "есть", "является", "есть", "являются", "он", "она", "один", "одна", "один", "одна", "и", "здесь", "там", "может", "умеет", "мог", "мог бы", "были", "имеет", "имею", "иметь", "имел", "у него было", "был", "была", "было", "добро пожаловать", "приветствуем", "из", "от", "о", "домой", "дома", '&nbsp;', '&ldquo;', "слова", "в", "внутрь", "этот", "эта", "это", "там", 'у', 'неё', 'них', 'него'];
        $strip_arr = ["," ,"." ,";" ,":", "\"", "'", "“","”","(",")", "!","?"];

        $str_clean = str_replace( $strip_arr, "", $str);
        $str_arr = explode(' ', $str_clean);
        $clean_arr = [];
        foreach($str_arr as $word)
        {
            if(strlen($word) > $min_word_length)
            {
                $word = strtolower($word);
                if(!in_array($word, $avoid)) {
                    $clean_arr[] = $word;
                }
            }
        }

        return implode(',', $clean_arr);
    }
}
