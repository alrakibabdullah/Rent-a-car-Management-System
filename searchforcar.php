   <div>
   	<form action="searchforcar.php" method="post">
   	 <div class="form-group select">
   	 	<select class="form-control" name="brand">
   	 		<option>Select Brand</option>

   	 	<?php $sql = "SELECT * from tblbrands ";
   	 	$query = $dbh -> prepare($sql);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
       if($query->rowCount() > 0)
     {
    foreach($results as $result)
     {       ?>  
     <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?></option>
      <?php }} ?> 
   	 		
   	 	</select>



   	 </div>
   		





   	</form>



   </div> 