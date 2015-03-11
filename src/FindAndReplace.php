<?php

    class FindAndReplace
    {
        function replace($user_string, $thing_to_replace, $what_to_replace_with)
        {
            if($thing_to_replace == $user_string){
                $user_string = $what_to_replace_with;
            }
            return $user_string;
        }
    }

?>
