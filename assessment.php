
<html>
    <head>
        <title></title>
    </head>
    <body>
         <h2>Welcome</h2>
        <?php
        function First(){
        ?>
        <h3>First</h3>
        <form method="get" >
            <fieldset>
                <legend>Anagram</legend>
                </br>
                String One: <input type="text" name ="stringOne"/>
                </br></br>
                Compare with
                </br></br>
                String Two: <input type="text" name ="stringTwo"/>
                </br></br>
                <input type="submit" value="Check"/>
                
            </fieldset>    
        </form>
        <?php
        }
        function Second(){
        ?>
        <h3>Second</h3>
        <form method="get" >
            <fieldset>
                <legend>Reverse sentence</legend>
                </br>
                String to Reverse: <input type="text" name ="reverseString"/>
                 </br></br>
                <input type="submit" value="Reverse"/>
                
            </fieldset>    
        </form>
        <?php
        }
        function Third(){
        ?>
        <h3>Third</h3>
        <form method="get" >
            <fieldset>
                <legend>Box volume</legend>
                </br>
                Measurement Lenth: <input type="text" name ="measurementOne"/>
                </br></br>
                Measurement Width: <input type="text" name ="measurementTwo"/>
                </br></br>
                Measurement Hight: <input type="text" name ="measurementThree"/>
                </br></br>
                <input type="submit" value="Calculate"/>
                
            </fieldset>    
        </form>
        <?php
        }
        function Fourth(){
        ?>
        <h3>Fourth</h3>
        <form method="get" >
            <fieldset>
                <legend>Duplicate numbers</legend>
                </br>
                just numbers with a space: <input type="text" name ="distinct"/>
                 </br></br>
                <input type="submit" value="List"/>
                
            </fieldset>    
        </form>
        <?php
        
        }        
                 function anagram($firstWord, $secondWord){
                           $msgPrint = "We have a Match";  
                             if(strlen($firstWord) == strlen($secondWord)){
                               for($i = 0; $i <= strlen($firstWord)-1; $i++){
                                $condition = strpos($secondWord, $firstWord[$i]);
                                 if(!is_int($condition)){
                                   $msgPrint = "Nope no match ";
                                               break;
                                           }
                                         }  
                                  }else {
                                    echo 'they are not even the same lenth';
                                        }
                                   echo "</br>";
                                   echo $msgPrint;     
                                }
                                
                                
                                
        function reverseSentence($reverceMe){
                 $reverse ='';
                 $swopArray = explode(" ", $reverceMe);
                       foreach (array_reverse($swopArray) as $value) {
                        $reverse .= ' '.$value;
                            }
                        echo $reverse;
                        echo '</br>';
           }
        function boxVolume($lenth, $width, $hight) {
                $liters = $lenth * $width * $hight;    
                echo "The cubic centimeters is : ". $liters ." cm</br>";
                echo "The Liters are ". $liters/1000 ." L </br>";
                
            }
        function duplicate($makeMe){
                
                 $swopArray = explode(" ", $makeMe);
                        
                        $distinctList = array_unique($swopArray);
                        echo "Here is list you wanted: ";
                       foreach ($distinctList as $value) {
                           echo " ". $value;
                            }
                        echo '</br>';
           }
                   
                   if(isset($_REQUEST['stringOne']) || isset($_REQUEST['stringTwo'])){
                       if($_REQUEST['stringOne'] == "" || $_REQUEST['stringTwo'] == ""){
                           echo "<font color='#882222'>please enter amount</font></br>";
                       }  else {
                           $firstWord =  $_REQUEST['stringOne'];
                        $secondWord= $_REQUEST['stringTwo'];
                        anagram($firstWord, $secondWord);
                       }
                       
                   }if(isset($_REQUEST['reverseString'])){
                      $reverceMe = $_REQUEST['reverseString'];
                       reverseSentence($reverceMe);
                       
                   }if(isset($_REQUEST['measurementOne']) || isset($_REQUEST['measurementTwo']) ||isset($_REQUEST['measurementThree']) ){
                       $lenth = $_REQUEST['measurementOne'];
                       $width = $_REQUEST['measurementTwo'];
                       $hight = $_REQUEST['measurementThree'];
                       
                       if($lenth < 0 || $width < 0 || $hight < 0){
                           echo "<font color='#882222'>please enter amount</font></br>";
                       
                       }if($lenth > 0 && $width > 0 && $hight > 0) {
                         boxVolume($lenth, $width, $hight);  
                       }else{
                         echo "<font color='#882222'>please enter amount</font></br>";
                       }
                   }
                       if(isset($_REQUEST['distinct'])){
                          $makeMe = $_REQUEST['distinct'];
                           if(preg_match("/^[0-9]+\s+/", $makeMe)){
                                duplicate($makeMe);
                           }else{
                               echo "please enter only digits and spaces please";
                           }
                       }
                  
                       
                   
                   
                 
                First();  
                Second(); 
                Third();
                Fourth();
             ?>
                             
    </body>
</html>
