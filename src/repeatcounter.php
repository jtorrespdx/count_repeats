<?php

    class RepeatCounter
    {
        function countRepeats($phrase, $word) {
        //start our counter at 0
        $count = 0;
        //
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
