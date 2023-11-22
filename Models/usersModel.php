<?php



function database_connection()
{
    $pdo = new PDO('mysql:dbname=sharpost; host=mysql57.workstation.cartware','root','root');
    return $pdo;
}

function list_users()
{
    $pdo = database_connection();

//ORDER BY id DESC --> the last one will be the first in the view
    $users= $pdo->query('SELECT * FROM users ORDER BY id DESC ')->fetchAll(PDO::FETCH_OBJ);

    return $users;

}


function create()
{
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $age=$_POST['age'];
    $login=$_POST['login'];
    $Password=$_POST['Password'];


    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO users VALUES (null,?,?,?,?,?)");
    return $sqlState->execute([$firstName,$lastName,$age,$login,$Password]);

}

function distroy($id)
{

    $pdo = database_connection();
    $sqlState = $pdo->prepare("DELETE FROM users WHERE id=?");
    return $sqlState->execute([$id]);

}
/*
 * Edit Functio
 * 1. we have to bring the Data from DB with ID require
 * 2. after that we make aur method
 */


function edit($id, $firstName,$lastName,$age, $login, $Password)
{
    $pdo = database_connection();

    $sqlState = $pdo->prepare("UPDATE `users` SET  `firstName` = ?, `lastName` = ?, `age` = ?, `login`= ?, `Password` = ?  WHERE `id` = ?");
    return $sqlState->execute([$firstName,$lastName,$age,$login,$Password,$id]);
}

function view($id){
    $pdo = database_connection();
    $sqlState= $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}