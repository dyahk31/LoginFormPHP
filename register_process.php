<?php 
// $message = '';
// $error = '';

// if(isset($_POST["submit"])){
//     if(empty($_POST["username"])){
//         $error = "<label class='text-danger'>Enter username</label>";
//     }else if(empty($_POST["email"])){
//         $error = "<label class='text-danger'>Enter username</label>";
//     }else if(empty($_POST["password"])){
//         $error = "<label class='text-danger'>Enter username</label>";
//     }else if(empty($_POST["confirm-password"])){
//         $error = "<label class='text-danger'>Enter username</label>";
//     }else{
//         if(file_exists('data.json')){
//             $current_data = file_get_contents('data.json');
//             $array_data = json_decode($current_data, TRUE);
//             $dataArray = array (
//                 'username' => $_POST['username'],
//                 'email' => $_POST['email'],
//                 'password' => $_POST['password'],
//                 'confirm-password' => $_POST['confirm-password']
//             );
//             $array_data[] = $dataArray;
//             $final_data = json_encode($array_data);

//             if(file_put_contents('data.json', $final_data)){
//                 $message = "<label class='text-success'>File Append Success</label>";
//             }
//         }else{
//             $error = 'JSON File not exist';
//         }
//     }
// }

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
//     function get_data(){
//         $dataForm = array();
//         $dataForm[] = array(
//             'username' => $_POST['username'],
            
//             'password'=> $_POST['password'],

//         );
//         return json_encode($dataForm);
//     }
//     $name = "data";
//     $file_name = $name. '.json';

//     if(file_put_contents("$file_name", get_data())){
//         echo $file_name.' file created';
//     }else{
//         echo 'Error';
//     }
// }

if( !empty($_POST)){
    $dataForm = array(
        "username" => $_POST['username'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "confirm-password" => $_POST['confirm-password'],
    );

    $json = json_encode($dataForm);
    $file = 'data.json';

    file_put_contents($file, $json, FILE_APPEND);
    header("Location: index.php");
}else{
    echo "Error";
}
?>
