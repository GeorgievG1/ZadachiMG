<!DOCTYPE html>
<html>
    <body>   
        <form method="post" action=" " id="form1">
            <div>            
                <input type="text"  name="st1">Въведете стойност за а
            </div>
            <div>           
                <input type="text"  name="st2">Въведете стойност за b
            </div>
            <div>            
                <input type="text"  name="st3">Въведете стойност за c
            </div>        
                <button type="submit"  value="Submit">Submit</button> 
            </form>        
    <?php
        $a=0;
        $b=0;
        $c=0;
        $x=0;
        if($_POST){
            $a=$_POST["st1"];
            $b=$_POST["st2"];
            $c=$_POST["st3"];}
            if($c < $a && $c > $b){
                $x = ($a * $b) - $c;
                echo "Стойността на x e $x";
            }
        elseif($c > $a &&  $b > $c){
               $x = ($b * $c) - ($a * $c);
                echo "Стойността на x e $x";
            }
        elseif($a > $b &&  $a > $c){
               $x = ($a - $c) * ($a - $b);
                echo "Стойността на x e $x";
        }else {
            $x = $a + $b - $c;
            echo "Стойността на x e $x";
        }
    ?>
    </body>    
</html>
