<?php 
    function random_html_color()
    {
        return sprintf( '#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255) );
    }

    $arr[0] = 'red';
    $arr[1] = 'blue';
    $arr[2] = 'green';
    $arr[3] = 'yellow';
    $arr[4] = 'lime';
    $arr1[0] = 'magenta';
    $arr1[1] = 'black';
    $arr1[2] = 'gold';
    $arr1[3] = 'gray';
    $arr1[4] = 'tomato';
    // $i =1;
    // while ($i <=3){
    //     if ($i != 4) {
    //         echo '<b style ="color:'.random_html_color().';">'.$arr[0].'</b>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr[1].'</b>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr[2].'</b>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr[3].'</b>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr[4].'</b><br>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr1[0].'</b>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr1[1].'</b>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr1[2].'</b>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr1[3].'</b>';
    //         echo '<b style ="color:'.random_html_color().';">'.$arr1[4].'</b><br>';
    //         // $i++; 
    //     }
    //         // echo '<p style ="color:'.random_html_color().';">red, blue, green, yellow, lime</p>';
    //         // echo '<p style ="color:'.random_html_color().';"> magenta, black, gold, gray, tomato</p>';
    //         // echo "<p>red, blue, green, yellow, lime </p>";
    //         // echo "<p>  magenta, black, gold, gray, tomato</p>";
    //         // echo '<div style="background-color:'.random_html_color().'; width:100px; height:100px; margin:10px;"> </div>';
    //         $i++;   
    // }
    // $str = array("red", "blue", "green", "yellow", "lime",);
    // $str1 = array ("magenta", "black", "gold", "gray", "tomato");
    // foreach ($str as $key=> $val){
    //     echo $val;
    //     echo '<b style ="color:'.random_html_color().';>".</b>';
    // }
    for ($i=0; $i<4-1; $i++){
        
            echo '<b style ="color:'.random_html_color().';">'.$arr[0].'</b> ';
            echo '<b style ="color:'.random_html_color().';">'.$arr[1].'</b>';
            echo '<b style ="color:'.random_html_color().';">'.$arr[2].'</b>';
            echo '<b style ="color:'.random_html_color().';">'.$arr[3].'</b>';
            echo '<b style ="color:'.random_html_color().';">'.$arr[4].'</b><br>';
            echo '<b style ="color:'.random_html_color().';">'.$arr1[0].'</b>';
            echo '<b style ="color:'.random_html_color().';">'.$arr1[1].'</b>';
            echo '<b style ="color:'.random_html_color().';">'.$arr1[2].'</b>';
            echo '<b style ="color:'.random_html_color().';">'.$arr1[3].'</b>';
            echo '<b style ="color:'.random_html_color().';">'.$arr1[4].'</b><br>';  
            
    }
?>