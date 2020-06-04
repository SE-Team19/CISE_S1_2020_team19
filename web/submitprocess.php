<?php
// Decode json into object
$obj = json_decode($_POST["json"]);
$name = $obj->name;
$email = $obj->email;

echo "<h3 class='hr_title'> Submit Article</h3>
        <hr>
        <br>
        Thank you, $name!
        <br>
        <br>   
        Your submission has been received and is now in Stage 2.
        <br>
        <br>
        <br>
        <!-- image of steps (s1: submit > s2: moderation > posted to SEER) -->
        Stage 1: Submit ---> Stage 2: Moderation ---> Stage 3: Posted to SEER
        <br>
        <br>
        <br>
        A confirmation email has been sent to $email.
        <br>
        <br>
        <button class='button' onclick='window.location.href='searchform.html''>Search</button>
        <button class='button' onclick='newArticle()'>New Article</button>"

?>