
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact.css">
    

    <title>ESPACE NATURE</title>
</head>
<body>
    
<div class="flexnav">
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="#articles">Article</a></li>
            <li><a href="#">A Propos</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</div>
   
<form action="base.php" method="POST">
<h1>Formulaire contact</h1>

    <div>
        <label for="name">nom :<br></label>
        <input type="texte"  name="user_last_name">
    </div>

    <div>
        <label for="last_name">prénom :</label><br>
        <input type="texte" class="prenom" name="user_first_name">
    </div>

    <label for="">Quel est votre genre ?</label>
 <select  id="gender" name="gender" >
    <option name="gender" >autre</option>
    <option name="gender">homme</option>
    <option name="gender">femme</option>
         
</select>  
     

              
    
         <label>remarque</label><br>
        <textarea name="story" class="story" cols="60" rows="30"></textarea>
    

     <div class="bottomsub">
         <button type="submit">Submit</button>
     </div>
</form>
<footer>
    <ul>
        <li><a href="index.html">Accueil</a></li>
        <li>Article</li>
        <li>A Propo</li>
        <li><a href="Contact.html">Contact</a></li>
    </ul>
</footer>



</body>
</html>