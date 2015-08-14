<?php

    require_once "src/repeatcounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        //CASE 1
        function test_count_repeats()
        {

            //Arrange
            $test_CountRepeats = new RepeatCounter;
            $phrase = "a";
            $word = "a";

            //Act
            $result = $test_CountRepeats->countRepeats($phrase, $word);

            //Assert
            $this->assertEquals("1", $result);
        }
    }
?>
