<?php 
require_once("templates/header.php") 

?>

<div class="container">
    <h1>
        Sondage
    </h1>
    <?php 
    if(!empty($_REQUEST))
        var_dump($_REQUEST);
    ?>
    <form action="" method="post" >
        <!-- <div class="form-line">
            <label for="civility">Civilité</label>
            <select name="user[civility]" id="civility">
                <option value="Monsieur">Monsieur</option>
                <option value="Mademoiselle">Mademoiselle</option>
                <option value="Madame">Madame</option>
            </select>
        </div> -->
        <div class="form-line">
            <label for="sexe">Sexe</label>
            <div>
                <input type="radio" name="sexe" value="M" />Masculin 
                <input type="radio" name="sexe" value="F" />Feminin 
                <input type="radio" name="sexe" value="?" checked="checked" />Ne sait pas            
            </div>
        </div>
        <div class="form-line">
            <label for="name">Name</label>
            <input id="name" name="user[full_name]" type="text">
        </div>
        <div class="form-line">
            <label for="password">Password</label>
            <input id="password" name="user[password]" type="password">
        </div>
        <div class="form-line">
            <label for="color">Couleurs préférées</label>
            <input id="color" name="color" type="color">
        </div>
        <div class="form-line">
            <label for="couleurs">Couleurs préférées</label>
            <div>
                <input type="checkbox" name="couleurs[bleu]" />Bleu 
                <input type="checkbox" name="couleurs[blanc]" />Blanc 
                <input type="checkbox" name="couleurs[rouge]" />Rouge 
                <input type="checkbox" name="couleurs[pas]" checked="checked" />Ne sait pas
            </div>
        </div>
        <div class="form-line">
            <label for="langue">Langue parlées</label>
            <select name="langue" id="langue"> 
                <option value="E">Espagnol</option> 
                <option value="F" selected="selected" >Francais</option> 
                <option value="I">Italien</option> 
            </select> 
        </div>
        <div class="form-line">
            <label for="fruits">Fruits préférés</label>
            <select name="fruits[]" id="fruits" multiple="multiple" size="8"> 
                <option value="A">Abricots</option> 
                <option value="C">Cerises</option> 
                <option value="F">Fraises</option> 
                <option value="P">Pêches</option> 
                <option value="?" selected="selected"> Ne sait pas</option> 
            </select> 
        </div>
        <div class="form-line">
            <label for="message">Messages</label>
            <textarea name="message" id="message" rows="9" cols="50"></textarea> 
        </div>
        <div class="form-line">
            <input type="hidden" id="_id" name="_id" value="123" /><br /> 
        </div>
        <div class="submit-button">
            <!-- <input type="submit" name="soumettre" value="Envoyer" />  -->
            <!-- <input type="image" name="image" alt="valider" src="valider.gif" />  -->
            <!-- <input type="reset" name="effacer" value="Effacer" />  -->
            <input type="button" name="action" value="Ne fait rien" />
            <button class="submit">Envoyer</button>
        </div>
    </form>

    
</div>

<?php require_once("templates/footer.php") ?>