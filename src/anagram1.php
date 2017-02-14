<?php
    class Ana
    {
        function AnagramChecker($something, $something2) // "words", ["rowd", "wew"]
        {
            $answer = 0;
            $input1 = str_split($something);
            sort($input1);
            foreach($something2 as $character)
            {
                $input2 = str_split($character);//"rowd"
                sort($input2);//dorw
                $inputOneLen = count($input1);//5 "words"
                $inputTwoLen = count($input2);//4 "dorw"
                if ($inputOneLen > $inputTwoLen)
                {
                    // for ($i=0; $i < $inputTwoLen; $i++)//4
                    while(count($input2)>0)
                    {
                        $pos = strpos($character, $input2[0]);
                        if($pos){
                          array_shift($input2);
                          array_splice($input1,$pos,1);
                        }else{
                          return "shits broke";
                        }
                        if(count($input2)===0){
                          $answer += 1;
                        }
                    }
                }else{
                    while(count($input1)>0)
                    {
                        $pos = strpos($character, $input1[0]);
                        if($pos){
                          array_splice($input2,$pos,1);
                          array_shift($input1);
                        }else{
                          return "shits broke";
                        }
                        if(count($input1)===0){
                          $answer += 1;
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
