<?php include "topbit.php"; 

$showall_sql="SELECT * FROM `L1_DB_Prac_TreRus` ORDER BY `L1_DB_Prac_TreRus`.`Title` ASC ";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>
        
<div class="box main">
            
    <h2>All Items</h2>
            
    <?php
    
    // check if there are any results
    
    if ($count<1)
    
    {
        
    ?>
    
    <div class="error">
         Sorry! There are no results that match your search.
         Please use the search box in the sidebar to try again.
        
    </div>
    
    <?php
        
    }   // end count 'if'
    
    // if there are not results, output an error
    
    else{
        
        do{
            
        } // end of 'do'
        
        while($showall_rs=mysqli_fetch_assoc(showall_query))
        
    }   // end else
    
    // if there are results, display them
    
    ?>
   
    
</div>  <!-- / main -->
        
<?php include "footer.php"; ?>