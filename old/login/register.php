<?php
	// Include config file
	require_once 'config/config.php';


	// Define variables and initialize with empty values
	$email = $password = $confirm_password = $nom = $prenom = $numero ="";

	$email_err = $password_err = $confirm_password_err = "";

	// Process submitted form data
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		// Check if email is empty
		if (empty(trim($_POST['email']))) {
			$email_err = "Please enter a email.";

			// Check if email already exist
		} else {

			// Prepare a select statement
			$sql = 'SELECT id FROM users WHERE email = ?';

			if ($stmt = $mysql_db->prepare($sql)) {
				// Set parmater
				$param_email = trim($_POST['email']);

				// Bind param variable to prepares statement
				$stmt->bind_param('s', $param_email);

				// Attempt to execute statement
				if ($stmt->execute()) {
					
					// Store executed result
					$stmt->store_result();

					if ($stmt->num_rows == 1) {
						$email_err = 'This email is already taken.';
					} else {
						$email = trim($_POST['email']);
					}
				} else {
					echo "Oops! ${$email}, something went wrong. Please try again later.";
				}

				// Close statement
				$stmt->close();
			} else {

				// Close db connction
				$mysql_db->close();
			}
		}

		// Validate password
	    if(empty(trim($_POST["password"]))){
	        $password_err = "Please enter a password.";     
	    } elseif(strlen(trim($_POST["password"])) < 6){
	        $password_err = "Password must have atleast 6 characters.";
	    } else{
	        $password = trim($_POST["password"]);
	    }
    
	    // Validate confirm password
	    if(empty(trim($_POST["confirm_password"]))){
	        $confirm_password_err = "Please confirm password.";     
	    } else{
	        $confirm_password = trim($_POST["confirm_password"]);
	        if(empty($password_err) && ($password != $confirm_password)){
	            $confirm_password_err = "Password did not match.";
	        }
		}
		

	    // Check input error before inserting into database

	    if (empty($email_err) && empty($password_err) && empty($confirm_err) && empty($confirm_password_err)) {

	    	// Prepare insert statement
			$sql = 'INSERT INTO users (email, password,nom,prenom,numero) VALUES (?,?,?,?,?)';

			if ($stmt = $mysql_db->prepare($sql)) {

				// Set parmater
				$nom = trim($_POST["nom"]);
				$prenom = trim($_POST["prenom"]);
				$numero = trim($_POST["numero"]);
				$param_email = $email;
				$param_password = password_hash($password, PASSWORD_DEFAULT); // Created a password

				// Bind param variable to prepares statement
				$stmt->bind_param('sssss', $param_email, $param_password,$nom,$prenom,$numero);

				// Attempt to execute
				if ($stmt->execute()) {
					// Redirect to login page
					header('location: ./login.php');
					// echo "Will  redirect to login page";
				} else {
					echo "Something went wrong. Try signing in again.";
				}

				// Close statement
				$stmt->close();	
			}

			// Close connection
			$mysql_db->close();
	    }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign in</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	<style>
        .wrapper{ 
        	width: 500px; 
        	padding: 20px; 
        }
        .wrapper h2 {text-align: center}
        .wrapper form .form-group span {color: red;}
	</style>
</head>
<body>
	<main>
		<section class="container wrapper">
			<h2 class="display-4 pt-3">Sign Up</h2>
        	<p class="text-center">Please fill in your credentials.</p>
        	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        		<div class="form-group">
        			<label for="Nom">Nom</label>
        			<input type="text" name="nom" id="nom" class="form-control" value="<?php echo $nom ?>">
        		</div>

				<div class="form-group">
        			<label for="Prenom">Prenom</label>
        			<input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $prenom ?>">
        		</div>

				<div class="form-group">
        			<label for="numero">Numéro de téléphone</label>
        			<input type="text" name="numero" id="numero" class="form-control" value="<?php echo $numero ?>">
        		</div>

				<div class="form-group <?php (!empty($email_err))?'has_error':'';?>">
        			<label for="email">email</label>
        			<input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>">
        			<span class="help-block"><?php echo $email_err;?></span>
        		</div>

        		<div class="form-group <?php (!empty($password_err))?'has_error':'';?>">
        			<label for="password">Mot de passe</label>
        			<input type="password" name="password" id="password" class="form-control" value="<?php echo $password ?>">
        			<span class="help-block"><?php echo $password_err; ?></span>
        		</div>

        		<div class="form-group <?php (!empty($confirm_password_err))?'has_error':'';?>">
        			<label for="confirm_password">Confirmer mot de passe</label>
        			<input type="password" name="confirm_password" id="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
        			<span class="help-block"><?php echo $confirm_password_err;?></span>
        		</div>

        		<div class="form-group">
        			<input type="submit" class="btn btn-block btn-outline-success" value="Valider">
        			<input type="reset" class="btn btn-block btn-outline-primary" value="Reset">
        		</div>
        		<p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous ici</a>.</p>
        	</form>
		</section>
	</main>
</body>
</html>