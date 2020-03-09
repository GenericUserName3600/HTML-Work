<html>
    <head>
        <title> Error Log </title> <!-- Title for the webpage -->
    </head>
    <body>
        <?php   

            date_default_timezone_set("GMT+0"); // assigning the default time zone for the system.

            $errorLog = "error_log.txt"; // assiging the text file the functions will record into.
 
            openTextFile("test_file.txt"); // Opening a file as a test before opening the needed file.

            function errorlog($logFile, $errorString) // Function #1. ErrorLog function.
            {
                $date = date("d.m.Y"); // Assigning the date and date's layout for the text file. 

                $time = date("h:i:s e"); // assigning the time and time's layout for the text file.
                $f = fopen($logFile, "a"); // opening the file 
                fwrite($f, "\n[Date]: $date" . " [time]: $time" . " [ERROR]: ".$errorString); 
                // writing the date, time and detected error into the text file.
                fclose($f); // closes the file after writing the information into the file.
            }

            function openTextFile($fileToOpen) // Function #2. OpenTextFile function
            {
                global $errorLog; // Linking the wo functions together
                if(!file_exists($fileToOpen)) // checking to see if the file has been opened.
                {
                    errorLog($errorLog, "File '$fileToOpen' does not exist.");
                    //If not opened, the function displays that the file does not exist.
                    echo ("[ERROR]"); // produces a error showing the file doesnt exist.
                }
                else 
                {
                    echo ("File Opened successfully."); 
                    // displays that the file has been opened successfully.
                }
            }
        ?>
    </body>
</html>