<?php
// بما أن الكنترولر هو الذي يربط بين الموديل والفيور لابد من منادات الطرفين في هذه الصفحة
require_once "Models/usersModel.php";

function indexAction ()
{
    $users = list_users();

    require_once "Views/liste_users.php"; // حتى يتم التواصل بين ملف الفيوز وملف الموديل ويكون الوسيط بينهم هو الكنترولر

}

function createAction()
{
    require_once "Views/create.php";

}

function storeAction()
{
    $isCreated = create();

    //echo "is Created Correctly";

    header('location:index.php?action=list');
}


function deleteAction()
{
    $id = $_GET['id'];
    require_once "Views/delete.php";
    //$isDeleted = delete();
}

function distoyAction()
{
    $id = $_GET['id'];
    distroy($id);
    header('location: index.php?action=list');
}

function editAction()
{
    $id=$_GET['id'];
    $user1= view($id); // to call the function from Models
    require_once "Views/edit.php";
}

function updateAction()
{
    $id=$_POST['id'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $age=$_POST['age'];
    $login=$_POST['login'];
    $Password=$_POST['Password'];

          //extract($_POST);

      edit($id, $firstName,$lastName,$age, $login, $Password);
      header("location:index.php?action=list");

}
