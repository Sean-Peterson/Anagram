 <?php
 require_once "src/anagram.php";

 class AnaTest extends PHPUnit_Framework_TestCase
    {
        function test_AnagramChecker_singleWord()
        {
            $newVariable = new Ana;
            $input1 = "word";
            $input2 = array("rodw");
            $result = $newVariable->AnagramChecker($input1, $input2);

            $this->assertEquals("yes" , $result);
        }

        function test_AnagramChecker_multWord()
        {
            $newVariable = new Ana;
            $input1 = "word";
            $input2 = array("asd", "rodw");
            $result = $newVariable->AnagramChecker($input1, $input2);

            $this->assertEquals("yes" , $result);
        }
        function test_AnagramChecker_multLongWord()
        {
            $newVariable = new Ana;
            $input1 = "word";
            $input2 = array("asdasd", "rodwdda");
            $result = $newVariable->AnagramChecker($input1, $input2);

            $this->assertEquals("yes" , $result);
        }
        function test_AnagramChecker_multShortWord()
        {
            $newVariable = new Ana;
            $input1 = "word";
            $input2 = array("ass", "ro");
            $result = $newVariable->AnagramChecker($input1, $input2);

            $this->assertEquals("yes" , $result);
        }
    }
?>
