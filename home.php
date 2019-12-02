<?php


/*Group Members:
--Tassan Stewart 620108238
--Tonian Hyman 620108397
--Abigail Miles 620097489 */

    //Table which displays issues
    $host = getenv('IP');
    $username = 'final_project';
    $password = 'finals';
    $dbname = 'schema';
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $filter = $_GET['filter'];
    $context = $_GET['context'];

    if(isset($context) && ($context==="All")){
        $stmt = $conn->query("SELECT i.title as title, i.type as type, i.status as status, i.assigned_to as assigned_to, i.created as created FROM Issues i");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);}
    else if(isset($context) && ($context==="Open")){
        $stmt = $conn->query("SELECT i.title as title, i.type as type, i.status as status, i.assigned_to as assigned_to, i.created as created FROM Issues i WHERE type = '$context'");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);}
    else if(isset($context) && ($context==="My Tickets")){
        $stmt = $conn->query("SELECT i.title as title, i.type as type, i.status as status, i.assigned_to as assigned_to, i.created as created FROM Issues i WHERE assigned_to = '$email'");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);}

    
    echo "<table>";	
    echo '<tr>';
    echo '<th> Title</th>
      <th> Type</th>
      <th> Status</th>
      <th> Assigned To</th>
      <th> Created</th>';  //the date attribut in the sql must be changed
      
    echo '</tr>';
    foreach ($result as $row) {
      echo '<tr>';
      echo '<td>' . $row['title']. '</td>';
      echo '<td>' . $row['type']. '</td>';
      echo '<td>' . $row['status']. '</td>';
      echo '<td>' . $row['assigned_to']. '</td>';
      echo '<td>' . $row['created']. '</td>';
      echo '</tr>';
    }
    echo '</table>';

echo "<style>
table{
	font-family: Geneva, sans-serif;
	font-size: 1em;	
}
tr{
	background-color: white;
}

th{
	background-color: lightgray;
	color: black;
	text-align: left;
	padding: 0 10px 0 5px;
}
td{
	text-align: left;
	padding: 5px;5px;5px;5px;
}


 </style>";


?>