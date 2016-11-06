<?php echo '<p>Hello World</p>'; 
$string = $_GET['input'];
file_put_contents("Test.json",$string);
echo '<p>Successfully updated JSON File</p>';
?> 