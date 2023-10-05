<?php 

Class Article{

    public $db;

    public function __construct( PDO $db ){
        $this->db = $db;
    }
    
    public function selectAll(){

        $select = $this->db->prepare("SELECT * FROM article");
        // SELECT * FROM article
        $select->execute();
        // objet row = 3, col = 4
        $articles = $select->fetchAll(PDO::FETCH_ASSOC);
        return $articles;

    }

    public function selectById( $id_article ){
        
        $idarticle = $id_article; 
        $select = $this->db->prepare("SELECT * FROM article where `id_article` = :idarticle ");
        $select->bindParam(':idarticle', $idarticle, PDO::PARAM_INT); 
        $select->execute();
        $article = $select->fetch(PDO::FETCH_ASSOC);
        return $article;

    }

    public function insert($form, $files){

        // print_r($form);
        extract($form);
        // print_r($files);
        $image = $files['image']['name'];

        $insertArticle = $this->db->prepare('INSERT INTO article ( `title`, `price`, `image`) values ( :title, :price, :image )');
        $insertArticle->bindParam(':title', $title, PDO::PARAM_STR);
        $insertArticle->bindParam(':price', $price);
        $insertArticle->bindParam(':image', $image);
        $insertArticle->execute();
    
        $folder = "images/upload/"; 
        $path = $folder.$image; // "images/upload/monimage.jpg
        $tmpName = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpName, $path); 

    }

    public function articlesession($form){
    print_r($form);
    $_SESSION['orders']=array(
        $form['id_article']=> array(
            'title'=> $form['title'],
            'price'=> $form['price'],
            'image'=> $form['image'],
        )
    );
    print_r($_SESSION);
    }



}






?>