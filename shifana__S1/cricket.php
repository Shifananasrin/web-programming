



<html>
	<body>
		<h2>List of Indian Cricket Players</h2>
		<table border="1">
        	<tr>
        		<th>Player Name</th>
        	</tr>
       		 <?php
     			$players = [
   				 	"Virat Kohli",
   				 	"Rohit Sharma",
   				 	"Shubman Gill",
    					"KL Rahul",
    					"Mohammad Shami",

			];
        		foreach ($players as $player)
        		{
            			echo "<tr><td>$player</td></tr>";
       		 	}
        	?>
   		 </table>
	</body>
</html>
