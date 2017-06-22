<?php/*
include_once 'Proverbes.class.php';

class ProverbesList {

    public $db;

    function __construct()
    {
            $this->db = new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');  
    
    }

    
    function getList() 

    { 
         $query = $this->db->prepare('SELECT * FROM proverbes');  
         $query->execute();
         return $query;  
    }


    }

     function getListFetched() 

    { 
         $query = $this->db->prepare('SELECT * FROM proverbes'); // etape 2, réagencer la liste
         $query->execute();
         return $query->fetchAll(); // renvoie  un tableau associatif


    }
    function getListFromAjax() 
    
    {
        $query = $this->db->prepare('
         SELECT 
         proverbes.id, 
         proverbes.provenence, 
         proverbes.contenu, 
         proverbes.categorie
        FROM proverbes
        '); 

       $query->execute();
       $results = $query->fetchAll(); 
       for ($i=0; $i < sizeof($results); $i++) {
       $results[$i]['contenu'] = strtoupper($results[$i]['contenu']); 

   
    
}
return $results;

    }*/



?>