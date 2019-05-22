
<?php
session_start();//on démarre la session
// gestion des erreurs
  $errors = array("name" => "", "firstname" => "", "email" => "", "message" => "", "rgpd" => ""); // on crée une vérif de champs
if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {// on verifie l'existence du champ et d'un contenu
  $errors['name'] = "Vous n'avez pas renseigné votre nom";
  }
if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == ''){
  $errors['firstname'] = "Vous n'avez pas renseigné votre prénom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la clé
  $errors['mail'] = "Vous n'avez pas renseigné votre email";
  }
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
  $errors['message'] = "Vous n'avez pas renseigné votre message";
  }
if(!array_key_exists('rgpd', $_POST)) {
  $errors['rgpd'] = "Vous devez accepter nos conditions d'utilisation";
}  

//On check les infos transmises lors de la validation
  if(!empty($errors)){ // si erreur on renvoie vers la page précédente
    $_SESSION['errors'] = $errors;//on stocke les erreurs
    $_SESSION['inputs'] = $_POST;//on garde les données remplies
    header('Location: contact.php');//on recharge la page
  }else{
    $_SESSION['success'] = 1;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
    $to = 'test@mondomaine.local'; // Insérer votre adresse email ICI
    $subject = 'Message envoyé par ' . htmlspecialchars($_POST['name']) .' - <i>' . htmlspecialchars($_POST['firstname']) .' - <i>'. htmlspecialchars($_POST['email']) .' - <i>'. htmlspecialchars($_POST['tel']) .'</i>';
    $message_content = '
      <table>
      <tr>
      <td><b>Emetteur du message:</b></td>
      </tr>
      <tr>
      <td>'. $subject . '</td>
      </tr>
      <tr>
      <td><b>Contenu du message:</b></td>
      </tr>
      <tr>
      <td>'. htmlspecialchars($_POST['message']) .'</td>
      </tr>
      </table>
    ';
mail($to, $subject, $message_content, $headers);
  header('Location: contact.php');//on recharge la page quand le mail est envoyé
  }
