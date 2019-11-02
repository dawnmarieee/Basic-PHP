<?php

	include('conn.php');
	
	$sql = "SELECT username,name,gender,address from tb_user order by username ASC, name ASC, gender ASC, address ASC";
	
	$stmt = $conn->query($sql);

?>
    <form method="post" action="editdeleteAction.php">
	<table border="1">
    	<thead>
        	<tr>
            	<th></th>
                <th>UserName</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>                                                                                                                                                    
            </tr>
        </thead>
        <tbody>
  
    
<?php
	$i = 1;
	//foreach($conn->query($sql) as $row){
		
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	
?>    
	<tr>
    	<td><input type="checkbox" name="chk" id="chk" value="<?php echo $row['username']; ?>"></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['address']; ?></td>
    </tr>
<?php 
        $i++;
    }
?>
    </tbody>
    </table>
<a href="entry.php">NEW</a>
<input name="btnedit" type="submit" value="EDIT">
<input name="btndelete" type="submit" value="DELETE">
</form>-