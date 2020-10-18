<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>
 <?php
    try{
        $bdd = new PDO('mysql:host=test.chq2ilqc9hoa.us-east-1.rds.amazonaws.com;dbname=testaws;charset=utf8', 'admin', 'Houyem16051996');
    }catch(Exception $e){
        die('Erreur : ');
    }

    $stmt=$bdd->prepare('SELECT lien FROM images');
    $stmt->execute();

    foreach($stmt as $key=>$val){
        echo '<img src="/images/'.$val['lien'].'" alt="logo" width="800"
     height="400" ></br>';
    }

?>
 </body>
</html>            
