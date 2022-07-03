<?php 

require_once './config.php';
    if (!empty($_POST['note']) && !empty($_POST['pseudo']) && !empty($_POST['comment']))
    {

        $note = htmlspecialchars($_POST['note']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $comment = htmlspecialchars($_POST['comment']);
                            
        $insert = $bdd->prepare('INSERT INTO avis(note, pseudo, commentaire) VALUES(:note, :pseudo, :commentaire)');
        $insert->execute(array(
        'note' => $note,
        'pseudo' => $pseudo,
        'commentaire' => $comment,
        ));
        header('Location: ../html/abonnement.html?reg_err=success');
        die();
    }else{ header('Location: ../html/abonnement.html?reg_err=already'); die();}
