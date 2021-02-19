<?php
//here i collected info and set up output
$output;
// here the algo
if(isset($POST['search'])){
    $searchq = $_POST['search'];
    $query = mysql_query("SELECT * FROM books WHERE title '%$searchq%' or auteur like '%$searchq%' ") or die("could not search");
    $count = mysql_num_rows($query);
    if($count == 0){
        $output= 'there was no search result';
    }
    else{
        while($row = mysql_fetch_array($query)){
            $title = $row['title'];
            $auteur = $row['auteur'];
            $id = $row['id'];

            $output .= '<div>test</div>'; 
        }
    }

};
?>