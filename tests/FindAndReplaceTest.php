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

    }

?>
