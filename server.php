<?php  
$username = ""; 
$email = ""; 
$errors = array();
//conexiunea la db 
$db = mysqli_connect('localhost','root','','registration'); 
 
//daca butonu de inregistrare este apasat 
if(isset($_POST['register'])){ 
    $username = mysqli_real_escape_string($db,$_POST['username']); 
    $email = mysqli_real_escape_string($db,$_POST['email']); 
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']); 
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']); 

//asigurați-vă că fișierele de formular sunt completate corect  
if (empty($username)) { 
    array_push($errors,"Username is required");//aici se adauga eroare  
} 
if (empty($email)) { 
    array_push($errors,"Email is required");//aici se adauga eroare  
} 
if (empty($password_1)) { 
    array_push($errors,"Password is required");//aici se adauga eroare  
}
 if ($password_1 != $password_2){ 
     array_push($errors,"Parolele nu se potrivesc");
 } 
 //daca nu este nici o eroare,salvam utilizatorul in baza de date 
 if (count($errors) == 0){  
     $password = md5($password_1);//incriptarea parolei apoi stocarea in baza de date(securitate) 
      $sql = "INSERT INTO users (username,email,password)  
      VALUES('$username','$email','$password')";   
      mysqli_query($db,$sql);
 }

} 
?>