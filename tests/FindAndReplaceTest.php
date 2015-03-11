<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {
        function testReplaceWithSameLetter()
        {
            //Arrange
            $replace_with_same_letter = new FindAndReplace;
            $main_string = "a";
            $thing_to_find = "a";
            $replace_with = "a";

            //Act
            $result = $replace_with_same_letter->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("a", $result);
        }

        function testReplaceWithDifferentLetter()
        {
            //Arrange
            $replace_with_different_letter = new FindAndReplace;
            $main_string = "a";
            $thing_to_find = "a";
            $replace_with = "b";

            //Act
            $result = $replace_with_different_letter->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("b", $result);
        }

        function testCannotFindInString()
        {
            //Arrange
            $cannot_find_in_string = new FindAndReplace;
            $main_string = "a";
            $thing_to_find = "b";
            $replace_with = "c";

            //Act
            $result = $cannot_find_in_string->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("a", $result);
        }

        function testReplaceMultiLetterString()
        {
            //Arrange
            $replace_multiletter_string = new FindAndReplace;
            $main_string = "Hello";
            $thing_to_find = "Hello";
            $replace_with = "Hi";

            //Act
            $result = $replace_multiletter_string->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("Hi", $result);
        }

        function testReplaceCapitalizedMainString()
        {
            //Arrange
            $replace_capitalized_main_string = new FindAndReplace;
            $main_string = "Hello";
            $thing_to_find = "hello";
            $replace_with = "Hi";

            //Act
            $result  = $replace_capitalized_main_string->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("Hi", $result);
        }

        function testReplaceCaseInsensitiveAllStrings()
        {
            //Arrange
            $replace_caseinsensitive_all_strings = new FindAndReplace;
            $main_string = "hello";
            $thing_to_find = "HELLO";
            $replace_with = "hi";

            //Act
            $result = $replace_caseinsensitive_all_strings->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("hi", $result);
        }

        function testReplaceOneWordAtEndMultiwordString()
        {
            //Arrange
            $replace_one_word_multiword_string_end = new FindAndReplace;
            $main_string = "Hello world";
            $thing_to_find = "world";
            $replace_with = "cosmos";

            //Act
            $result = $replace_one_word_multiword_string_end->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("Hello cosmos", $result);
        }

        function testReplaceWordInMiddleOfString()
        {
            //Arrange
            $replace_word_in_middle_of_string = new FindAndReplace;
            $main_string = "Walk the dog";
            $thing_to_find = "the";
            $replace_with = "my";

            //Act
            $result = $replace_word_in_middle_of_string->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("Walk my dog", $result);
        }

        function testReplaceMultipleInstancesOfWordInString()
        {
            //Arrange
            $replace_multiple_instances_of_word_in_string = new FindAndReplace;
            $main_string = "The blackest blackest night";
            $thing_to_find = "blackest";
            $replace_with = "darkest";

            //Act
            $result = $replace_multiple_instances_of_word_in_string->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("The darkest darkest night", $result);
        }

        function testMultipleInstacesOfWordInRandomSpots()
        {
            //Arrange
            $replace_multiple_instances_of_word_in_random_spot = new FindAndReplace;
            $main_string = "How much wood would a wood chuck chuck if a wood chuck could chuck wood";
            $thing_to_find = "wood";
            $replace_with = "rock";

            //Act
            $result = $replace_multiple_instances_of_word_in_random_spot->replace($main_string, $thing_to_find, $replace_with);

            //Assert
            $this->assertEquals("How much rock would a rock chuck chuck if a rock chuck could chuck rock", $result);
        }

    }


?>
