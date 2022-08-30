<!DOCTYPE html>
<html>
     <head>
          <meta charset="UTF-8" />
          <title> Calculator</title>
     </head>
     <body>
          <form>
                <input type="text" name="Number1" placeholder="Num1">
                <input type="text" name="Number2" placeholder="Num2"> <br/>
                <input type="text" name="Number3" placeholder="Num3">
                <input type="text" name="Number4" placeholder="Num4"> <br/>
                <select name="operator">
                    <option>None</option>
                    <option>Add</option>
                    <option>Subtract</option>
                    <option>Multiply</option>
                    <option>Divide</option>
                </select>
                <br>
                <button type="submit" name="submit" value="submit"> Calculate</button>
          </form>
           <p> The answer is:</p>
           <?php
             if (isset($_GET['submit'])) {
               $result1 = $_GET['Number1'];
               $result2 = $_GET['Number2'];
               $result3 = $_GET['Number3'];
               $result4 = $_GET['Number4'];
               $operator = $_GET['operator'];
               switch ($operator) {
                    case 'None':
                         echo "Select a method";
                    break;
                    case 'Add':
                      echo $result1 + $result2 + $result3 + $result4;
                    break;
                    case 'Subtract':
                         echo  $result3 - $result4;
                    break;
                    case 'Divide':
                         echo $result1/$result2; 
                    break;
                    case 'Multiply':
                         echo $result1 * $result2 * $result3 * $result4;
                    break;
               }
                    
             
             }

          ?>
     </body>
</html>  