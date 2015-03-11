<?php

    class FindAndReplace
    {
        function replace($user_string, $thing_to_replace, $what_to_replace_with)
        {
            // $user_string = strtolower($user_string);
            // $thing_to_replace = strtolower()

            if(strtolower($user_string) == strtolower($thing_to_replace)){
                $user_string = $what_to_replace_with;
            }
            return $user_string;
        }
    }

?>
