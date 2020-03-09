<?php
//The following script is a script to detect the type of broswer the user has decided to use,
//And then prints the detected broswer onto the browser's page.

echo "<h1> Browser Detection </h1>"; // Prints a heading notifying the user of what the page contains.
echo "Your Browser Agent is: " . $_SERVER['HTTP_USER_AGENT']; //Uses the $_Server tag to pull the browser information from the server,
// and assigns it to the bracketed variable.
?>
