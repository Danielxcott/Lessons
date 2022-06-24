<?php
function old($inputname){
    if(isset($_POST[$inputname])){
        return $_POST[$inputname];
    }else{
        return "";
    }
}

function filterText($txt){
    $txt = trim($txt);
    $txt = htmlentities($txt,ENT_QUOTES);
    $txt = stripslashes($txt);
    return $txt;
}

function setError($inputname,$message){
    $_SESSION['error'][$inputname] = $message;
}

function clearError(){
    $_SESSION['error']=[];
}

function getError($inputname){
    if(isset($_SESSION['error'][$inputname])){
        return $_SESSION['error'][$inputname];
    }else{
        return "";
    }
}

function register(){
    $errorStatus = 0;
    global $genderArr,$skillArr;
    $name = '';
    $email = '';
    $phone = '';
    $address='';
    $gender='';
    $skill ='';

    // usename
    if(empty($_POST['name'])){
        setError("name","Name is required");
        $errorStatus =1;
    }else{
        if(strlen($_POST['name']) < 5){
            setError("name","Name is too short");
            $errorStatus=1;
        }else{
            if(strlen($_POST['name']) > 20){
                setError("name","Name is too long");
                $errorStatus=1;
            }else{
                if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
                    setError("name","Only letters and white space allowed");
                    $errorStatus =1;
                  }else{
                    $name = filterText($_POST['name']);
                  }
            }
        }
    }
    // email
    if(empty($_POST['email'])){
        setError('email','Email is required');
        $errorStatus = 1;
    }else{
        // if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            if(!preg_match('~@gmail\.com$~',$_POST['email'])){ //only gamil.com can accept
            setError('email','Email format is incorrect, we only accept gmail.');
            $errorStatus = 1;
        }else{
            $email = filterText($_POST['email']);
        }
    }
    //phone
    if(empty($_POST['phone'])){
        setError('phone','Number is required');
        $errorStatus = 1;
    }else{
        if(!preg_match('/^[0-9]{11}+$/',$_POST['phone'])){
            setError('phone','Enter number format is incorrect');
            $errorStatus = 1;
        }else{
            $phone = filterText($_POST['phone']);
        }
    }
    //File

    $imageAccept = array("image/png","image/jpeg");

    if(isset($_FILES['image']['name'])){

        $tmpfile = $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];
        if(in_array($_FILES['image']['type'],$imageAccept)){
            $savefolder = "store/";
            move_uploaded_file($tmpfile,$savefolder.uniqid()."_".$filename);
        }else{
            setError("image","This type of file does not support.");
            $errorStatus = 1;
        }
    }else{
        setError("image","File is required."); 
            $errorStatus = 1;
    }

    //address
    if(empty($_POST['address'])){
        setError('address','Address is required');
        $errorStatus = 1;
    }else{
            $address = filterText($_POST['address']);
        }
    //gender
    if(empty($_POST['gender'])){
        setError('gender','Gender is required');
        $errorStatus = 1;
    }else{
        if(!in_array($_POST['gender'],$genderArr)){
        setError('gender','Editing gender is not allowed!');
        $errorStatus = 1;
        }else{
            $gender = filterText($_POST['gender']);
        }
    }
    //skill
    if(empty($_POST['skill'])){
        setError("skill","Skill is required");
        $errorStatus =1;
    }else{
        $skill = $_POST['skill'];
        $skillError = 0;
        foreach( $skill as $s){
            if(!in_array($s,$skillArr)){
                setError('skill','Editing skills are not allowed!');
                $skillError = 1;
                $errorStatus = 1;
            }
        }
        if(!$skillError){
            $skill = $_POST['skill'];
        }
    }

    if(!$errorStatus){
    print_r($_POST);
    print_r($_FILES);
    }
}