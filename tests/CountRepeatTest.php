<?php

    require_once "src/repeatcounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        //CASE 1 finding a matching word and counting it as 1.
        function test_count_repeats_1()
        {
            //Arrange
            $test_CountRepeats = new RepeatCounter;
            $phrase = "a";
            $word = "a";

            //Act
            $result = $test_CountRepeats->countRepeats($phrase, $word);

            //Assert
            $this->assertEquals(1, $result);
        }

        //CASE  Finds no matching words for a count of 0.
        function test_count_repeats_2()
        {
            //Arrange
            $test_CountRepeats = new RepeatCounter;
            $phrase = "a";
            $word = "b";

            //Act
            $result = $test_CountRepeats->countRepeats($phrase, $word);

            //Assert
            $this->assertEquals(0, $result);
        }

        //CASE 3 finds two matches and shows count of 2.
        function test_count_repeats_3()
        {
            //Arrange
            $test_CountRepeats = new RepeatCounter;
            $phrase = "be be";
            $word = "be";

            //Act
            $result = $test_CountRepeats->countRepeats($phrase, $word);

            //Assert
            $this->assertEquals(2, $result);
        }

        //CASE 4 finds matches with in mixed words, finds two, counts 2.
        function test_count_repeats_4()
        {
            //Arrange
            $test_CountRepeats = new RepeatCounter;
            $phrase = "be a be";
            $word = "be";

            //Act
            $result = $test_CountRepeats->countRepeats($phrase, $word);

            //Assert
            $this->assertEquals(2, $result);
        }

        //CASE 5 Finds words in the phrase but only counts words of exact length.
        function test_count_repeats_5()
        {
            //Arrange
            $test_CountRepeats = new RepeatCounter;
            $phrase = "be b be bee";
            $word = "be";

            //Act
            $result = $test_CountRepeats->countRepeats($phrase, $word);

            //Assert
            $this->assertEquals(2, $result);
        }

        //CASE 6 Finds matches within a phrase of mixedcaps. Returns a count of 3.
        function test_count_repeats_6()
        {
            //Arrange
            $test_CountRepeats = new RepeatCounter;
            $phrase = "Be A BE bE";
            $word = "be";

            //Act
            $result = $test_CountRepeats->countRepeats($phrase, $word);

            //Assert
            $this->assertEquals(3, $result);
        }
    }
?>
