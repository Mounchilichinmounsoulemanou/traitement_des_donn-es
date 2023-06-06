<?php 
require_once("templates/header.php"); 
require_once("lib/contactForm.php");

?>

<div class="container">
    <h1>
        Page contact
    </h1>
    <?php 

        $_REQUEST = trimData($_REQUEST);
        $errors = checkData($_REQUEST);
    // if(!empty($_REQUEST))
        // var_dump($_REQUEST);
    ?>
    <form action="" method="post" >
        <div class="form-line">
            <label for="name">Civilité</label>
            <select name="civility" id="civility">
                <option value="Monsieur">Monsieur</option>
                <option value="Mademoiselle">Mademoiselle</option>
                <option value="Madame">Madame</option>
            </select>
        </div>
        <div class="form-line">
            <label for="full_name">Name</label>
            <input id="full_name" name="full_name" type="text"
            value="<?php echo isset($_REQUEST["full_name"]) ? $_REQUEST["full_name"] :"" ;?>"
            >
            <div class="error"> <?php echo isset($errors["full_name"]) ? $errors["full_name"] : "" ?></div>
        </div>
        <div class="form-line">
            <label for="age">Age</label>
            <input id="age" name="age" type="date"
            value="<?php echo isset($_REQUEST["age"]) ? $_REQUEST["age"] :"" ;?>"
            >
            <div class="error"> <?php echo isset($errors["age"]) ? $errors["age"] : "" ?></div>
        </div>
        <div class="form-line">
            <label for="email">Email</label>
            <input id="email" name="email" type="text"
            value="<?php echo isset($_REQUEST["email"]) ? $_REQUEST["email"] :"" ;?>"
            >
            <div class="error"> <?php echo isset($errors["email"]) ? $errors["email"] : "" ?></div>
        </div>
        <div class="form-line">
            <label for="password">Password</label>
            <input id="password" name="password" type="password"
            value="<?php echo isset($_REQUEST["password"]) ? $_REQUEST["password"] :"" ;?>"
            >
            <div class="error"> <?php echo isset($errors["password"]) ? $errors["password"] : "" ?></div>
        </div>
        <div class="form-line">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10">
                <?php echo isset($_REQUEST["message"]) ? $_REQUEST["message"] :"" ;?>
                </textarea>
                <div class="error"> <?php echo isset($errors["message"]) ? $errors["message"] : "" ?></div>
        </div>
        <div class="submit-button">
            <button class="submit">Envoyer</button>
        </div>
    </form>

    
</div>

<script>
    // const submit = document.querySelector('.submit-button button')
    // submit.style.display = 'none'
    // const full_name = document.querySelector('#full_name')

    // full_name.addEventListener('keydown', (event)=>{
    //     const value = event.target.value
    //     if(value.length > 5){
    //         submit.style.display = 'block'
    //     }else{
    //         submit.style.display = 'none'
    //     }
    // })
</script>

<?php require_once("templates/footer.php") ?>