<?php
class Proverbes 

{   
    public $db;

    public $id;  
    public $provenence;
    public $contenu;
    public $categorie;
     

    function __construct($data)  
    
    {
          
        $this->db = new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');
 
        var_dump($data);
       
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }


        $this->provenence = $data['provenence'];
        $this->contenu = $data['contenu'];
        $this->categorie = $data['categorie'];

         


    }

    function save() //envoie les donnéees dans la bdd

    {

        //2) requete
    $query = $this->db->prepare
    ('INSERT INTO proverbes (provenence, contenu, categorie) 
        VALUES (:provenence, :contenu, :categorie)');   


 
    return $query->execute(array(
    ':provenence'        => $this->provenence,
    ':contenu'           => $this->contenu,
    ':categorie'         => $this->categorie
    )); 

    }

    function update() 

    {

        $query = $this->db->prepare
            ('
            UPDATE proverbes SET provenence = :provenence, contenu = :contenu, categorie = :categorie
            WHERE id=:id
            '); 

        $query->execute(array(
        ':provenence' =>    $this->provenence,
        ':contenu' =>       $this->contenu,
        ':categorie' =>     $this->categorie,
        ':id' =>            $this->id  //voir absolument ligne 82 pour ID hidden
    ));

    }
 

 function delete() 

 {

     $query = $this->db -> prepare('DELETE FROM proverbes WHERE id = :id');  

 
  return $query->execute(array(
        ':id' => $this->id
    ));

 }

}



?>