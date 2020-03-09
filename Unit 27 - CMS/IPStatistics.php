<?php   
    require('stats\gChart.php');
?>
<?php  
    // function to get the client's ip address
    function get_client_ip()
    {
        $ipaddress = '';
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $log=$ipaddress."\n";
        return $log;
    }
    
    $f = fopen("stat.txt", "a"); // opening and adding the information to the program.
    //writes the error string passed in the paramater into the error log file.
    fwrite($f, get_client_ip()); // gaining client's IP.
    //closes the error file.
    fclose($f); 
    $log_history=array();
    $log_history = file("stat.txt"); // assigning the information into the array defined above
    $ips = array_count_values($log_history); 
    // counting and assiging a value to the amount of rows used by the information
    print_r($ips); //prints the IPs to the user's browser

    // the code below simply assigns values to the piChart Variable and then prints them to the user's browser.
    echo("<b> IP Statistics chart, </b>");
        $piChart = new gPie3DChart();
        $piChart -> addDataSet(array_values($ips));
        $piChart -> setLabels(array_keys($ips));
        $piChart -> setLegend(array_keys($ips));

        echo "<br /> <img class='ip' src='".$piChart->getUrl()."'>";
?>