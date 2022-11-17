<?php

define('HOST','localhost');
define('DB_NAME', 'sea_bd');
define('USER', 'root');
define('PASS', '');
$Photo="";
try{
    $conn= new PDO("mysql:host=".HOST."; dbname=".DB_NAME, USER, PASS );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "";
}
catch(PDOException $e){
    echo " echec" .$e;	
}

if(isset($_POST['Valider'])) {
	
	$Nom = htmlspecialchars($_POST['Nom']);
	$Prenom = htmlspecialchars($_POST['Prenom']);
	$Numero = htmlspecialchars($_POST['Numero']);
	$Niveau = htmlspecialchars($_POST['Niveau']);

	$Photo = $_FILES['Photo']['name'];
	$destination ='Images/'. $Photo;

	$imagePatch =pathinfo($destination,PATHINFO_EXTENSION);
	$valid_extension =array("jpg","png","gif");
	if(!in_array(strtolower($imagePatch),$valid_extension)){
		echo"reussi";
	}
	if(!move_uploaded_file($_FILES ['Photo']['tmp_name'],$destination)){
		echo"erreur";
	}
		 
	$stmt =$conn->prepare("INSERT INTO etudiante(Nom, Prenom, Numero, Niveau, Photo) VALUES (?,?,?,?,?)");
	$exe = $stmt->execute([$Nom,$Prenom,$Numero,$Niveau,$Photo]);
	if($exe){
		echo ' Vous etes enregistre';
	}else{
		echo '';
	}
	
 }
?>


<!DOCTYPE html> 
<html lang="fr">
	<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<title>INSCRIPTION</title>
		<meta charset="utf-8">																																																																																										
	</head>
	
	<body>
		<div class="container">

	<form  method=["POST"] action="index.php" enctype="multipart/form-data" >
		
				<p>INSCRIPTION</p>
				<label>Nom</label>
				<input type="text" name='Nom' placeholder="Entrez votre nom" class="input" required/> <br>

				<label>Prenom</label>
				<input type="text" name='Prenom' placeholder="Entrez votre Prenom" class="input" required/> <br>

				<label>Numero</label>
                <input type="text" name='Numero' placeholder="Entrez votre Numero de téléphone" class="input" required/> <br>
                
				<label>Niveau</label>
				<select name="Niveau" id="Niveau" class="input>
					<option value="Licence 1">Licence 1</option>
					<option value="Licence 2">Licence 2</option>
					<option value="Licence 3">Licence 3</option>
				</select> <br>

				<label>Photo</label>
				<input type="file" placeholder="Inserez une photo" name='Photo'  class="input" /> <br>

				<input type="submit" value="Valider" name='Valider' class="submit"/>
				

			</form>
			
			<!--OMBRES-->
			<div class="drop drop-1"></div>
			<div class="drop drop-2"></div>
			<div class="drop drop-3"></div>
			<div class="drop drop-4"></div>
			<div class="drop drop-5"></div>

		</div> 
		
	</body>

</html>

