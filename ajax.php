<?php
/*
include 'classes/Proverbes.class.php';
include_once 'classes/ProverbesList.class.php';

$req_methode = $_SERVER['REQUEST_METHOD'];  

if ($req_methode == 'GET') {

    switch ($_GET['action']) {
    
     case 'list':
        $pm = new ProverbesList();
        echo json_encode($pm->getListFromAjax());
        break;
   
     case 'delete':
        $pm = new ProverbesList();

        if ($pm->getById($_GET['id'])->delete()) {
            echo 'Proverbe supprimé';
        } else {
            echo 'La tentative de suppression a échoué';
        }
        break;
    
     default:
      echo "Action non reconnue";
        break;
}

} elseif ($req_methode == 'POST') {

    
    $data = json_decode(file_get_contents('php://input'), $assoc = true);

    $proverbe = new Proverbes($data['proverbe']); 

    if ($proverbe->id) 
    {
        if($proverbe->update()) {
            echo 'Proverbe mis à jour';
        } else {
            echo 'La mise à jour a échoué';
        }

    } else {

        if($proverbe->save()) {
             echo 'Proverbe enregistré';

        } else {

            'L\'enregistrement a échoué';
        }
    }

} else  {  
    echo 'Methode HTTP non traitée';     
}
*/
   
?>