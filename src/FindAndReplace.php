<?php

    class FindAndReplace
    {
        function replace($user_string, $thing_to_replace, $what_to_replace_with)
        {
            $explode_user_string = explode(" ", $user_string);

            $replacement = array();

            foreach ($explode_user_string as $word) {
                if(strtolower($word) == strtolower($thing_to_replace)){
                    array_push($replacement, $what_to_replace_with);
                }
                else {
                    array_push($replacement, $word);
                }
            }

            $output = implode(" ", $replacement);

            return $output;
        }
    }

?>
