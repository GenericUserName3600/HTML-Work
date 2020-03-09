
<html>
    <head>
    </head>
    <body>
        <?php

            if(file_exists ("./uploaded/") == true) // Indentifying to see if a folder of this name exists.
            {
                fileupload(); //The FileUpload Function.
            }
            else
            {
                echo "Directory does not exist, new directory now created <br>"; //Displays message if directory is missing.
                mkdir('./uploaded/', 0755, true); // Creates new directory for the file.
                fileupload(); //The FileUpload Function.

            }

            function fileupload () //The FileUpload Function.
            {
                if($_FILES["fileuploader"]["error"] == 0) //If there is no error code.
                {
                    $tempFilename = $_FILES["fileuploader"]["tmp_name"]; // Checks the file name.
                    $filename = basename($_FILES["fileuploader"]["name"]); // Sets a tempory name for the file.
                    $desination = "./uploaded/".$filename; // Defines where to upload the file.
                    if (move_uploaded_file($tempFilename,$desination))  // Moves the file to the directory.
                    {
                        echo "file successfully uploaded"; // Displays message once file is uploaded.
                    }
                }
                else  // If there is a error code.
                {
                    echo "error uploading file - error code:".$_FILES["fileuploader"]["error"]; // Displays the message along with the related error code.
                }
            }
    ?>
    </body>
</html>
