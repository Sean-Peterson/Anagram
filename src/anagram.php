<?php
    class Ana
    {
        function AnagramChecker($something, $something2) // "word", ["ass", "yyy"]
        {
            $answer = 0;
            $input1 = str_split($something);
            sort($input1); // [ d,o,r,w]
            foreach($something2 as $character)//character = "ass"
            {
                $input2 = str_split($character);
                sort($input2); // [a,s,s]
                $lenOne = count($input1); //4
                $lenTwo = count($input2); //3
                $matches = 0;

                if($lenOne>=$lenTwo){//two is less
                    for($x=0;$x<$lenTwo;$x++){
                        $pos = array_search($input2[0], $input1);//a [ d,o,r,w] -> 0
                        if($pos!==false){
                            array_shift($input2); //[o,r,w]
                            array_splice($input1,$pos,1); // [ o,r,s,w]
                            $matches++; //1
                        }
                        if($lenTwo == $matches){
                          $answer++;
                          // return "first";
                        }
                    }
                }else if($lenOne<$lenTwo){
                    for($x=0;$x<$lenOne;$x++){
                        $pos = array_search($input1[0], $input2);
                        if($pos!==false){
                            array_shift($input1);
                            array_splice($input2,$pos,1);
                            $matches++;
                        }
                        if($lenOne== $matches){
                          $answer++;
                          // return "second";
                        }
                    }
                }

            }
            if($answer>0){
              return "yes";
            }else{
              return "no";
            }
        }
    }

?>
