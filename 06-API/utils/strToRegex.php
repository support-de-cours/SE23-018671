<?php

if (!function_exists('strToRegex')) 
{
    function strToRegex(string $separator, string $string): string
    {
        $sections = explode($separator, $string);
        unset($sections[0]);
    
        foreach ($sections as $key => $term)
        {
            $sections[$key] = [
                'term' => $term,
                'isParam' => preg_match("/^{(.+)}$/", $term, $param),
                'param' => $param[1] ?? null,
            ];
        }

        $re = '';
        foreach ($sections as $key => $section)
        {
            if ($section['isParam'])
            {
                $re.= '/(.+)';
            }
            else 
            {
                $re.= '/'.$section['term'];
            }
        }

        return $re;
    }
}