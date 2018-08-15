
<!DOCTYPE html>
<html>
<head>
  <title> Statistical page!</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/bootstrap.css">

</head>
<body>
<div class="jumbotron">
<div class="container">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statistcs</h1>
<em> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Schools and Districts</em>
</div>
</div>
   
  <div class="container">
    
    <table border=1 class="table">
     <tr>
       <th>firstname</th>
       <th>lastname</th> 
      <th>School</th>
      <th>District</th>
       <th>20 points</th>

   
   
   </tr> 
     <?php foreach($p as $post){?>

   
     <tr>
         <td><?php echo $post->fname;?></td>
         <td><?php echo $post->sname;?></td>
         <td><?php echo $post->name;?></td>
         <td><?php echo $post->region;?></td>
         <td><?php echo $post->total;?></td>
        
         
     
     
     
      </tr>    
        <?php }?>  
   </table>
   
</div>
 
  </body>
</html>