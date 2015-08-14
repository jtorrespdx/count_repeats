<?php

    class RepeatCounter
    {
        function countRepeats($phrase, $word) {

        //start our counter at 0
        $count = 0;

        //Because php code is read from top to bottom, this strtolower function will change all inputs to lowercase, hence "ignoring" any mixedcaps before being run through the method.
        $phrase = strtolower($phrase);
        $word  = strtolower($word);

        //finds matches of $word within the $phrase and adds 1 to the intitial count of 0.
        $exploded_phrase = explode(" ", $phrase);
            foreach ($exploded_phrase as $phrase_word) {
                if($phrase_word == $word){
                    ++$count;
                }
            }
            return $count;
        }
    }

?>
