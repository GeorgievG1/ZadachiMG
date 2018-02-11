<!DOCTYPE html>
<html> 
    <body>   
        <form method="post" action=" " id="form1">
            <select name="weather">
                <option selected disabled hidden>Моля изберете</option>
                <option value="rain">Rainy</option>
                <option value="sun">Sunny</option>
                <option value="fog">Foggy</option>
                <option value="snow">Snowy</option>
                <option value="cloud">Cloudy</option>
            </select>            
             <button type="submit"  value="Submit">Submit</button> 
            </form>
        
     <?php
            if(isset($_POST["weather"])){
            $weather=$_POST["weather"];            
            switch($weather){
                case "rain":
                    echo '<div style="display: inline-block; vertical-align: middle; margin-top: 30px;"><img style="width:130px; height:100px" src="pic/rain.jpg"/></div>';
                    echo '<div style="display: inline-block; vertical-align: middle; margin-left: 20px;"><p style="font-size: 20px;">' . "It's raining outside!" . '</p></div>';//конкатенация, за да мога да ползвам единичните кавички за It's в echo
                    break;
                case "sun":
                    echo '<div style="display: inline-block; vertical-align: middle; margin-top: 30px;"><img style="width:130px; height:100px" src="pic/sun.jpg"/></div>';
                    echo '<div style="display: inline-block; vertical-align: middle; margin-left: 20px;"><p style="font-size: 20px;">' . "It's sunny outside!" . '</p></div>';
                    break;
                case "fog":
                    echo '<div style="display: inline-block; vertical-align: middle; margin-top: 30px;"><img style="width:130px; height:100px" src="pic/fog.jpg"/></div>';
                    echo '<div style="display: inline-block; vertical-align: middle; margin-left: 20px;"><p style="font-size: 20px;">' . "It's foggy outside!" . '</p></div>';
                    break;
                case "snow":
                    echo '<div style="display: inline-block; vertical-align: middle; margin-top: 30px;"><img style="width:130px; height:100px" src="pic/snow.png"/></div>';
                    echo '<div style="display: inline-block; vertical-align: middle; margin-left: 20px;"><p style="font-size: 20px;">' . "It's snowing outside!" . '</p></div>';
                    break;
                case "cloud":
                    echo '<div style="display: inline-block; vertical-align: middle; margin-top: 30px;"><img style="width:130px; height:100px" src="pic/cloud.png"/></div>';
                    echo '<div style="display: inline-block; vertical-align: middle; margin-left: 20px;"><p style="font-size: 20px;">' . "It's cloudy outside!" . '</p></div>';
                    break;
                default:                   
                    break;
                            };
                                        };
            if(!isset($_POST["weather"])){
                echo '<div style="margin-top: 40px;"><p style="font-size: 20px;">Моля изберете опция от падащото меню!</p></div>';
                                        };
    ?>
    </body>    
</html>