<?
//Save json return from facebook to a variable
$result = file_get_contents("events.txt");
//convert json result to php so we can run sort on it.
$event = json_decode($result, true);
$event = $event['events']['data']; //quick fix for token leakage, sort does not work anymore

// Human readable 
//echo '<pre>';
//var_dump($event);
//echo '</pre>';
//echo substr($result, 0, -1);

//echo '###############################################';

echo json_encode($event);
?>
