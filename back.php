<?php
// Vérification si les champs ont été soumis ;
 if(isset($_POST['pseudo']) && isset($_POST['password'])){
   
   $pseudo = $_POST['pseudo'];
   $password = $_POST['password'];
   $email = $_POST['email'];
  //exemple de validation:
 
  if(empty($pseudo) || empty($password)) {
   echo "Veuillez saisir un pseudo et un mot de passe" ;
  }else{
   echo "Bienvenue, $pseudo !";
    }
   
  if(filter_var($email, FILTER_VALIDATE_EMAIL )) {
    echo "Votre adresse email est valide";
  }else{
    echo "votre adresse email n'est pas valide" ;
  }
  if(strlen($password) <= 7) {
    echo "votre mot de passe doit fiare minimum 7 caractères";
  } else{
    echo "Bienvenue" . $email ;
  }
   
}
?>