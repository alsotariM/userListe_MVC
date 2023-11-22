<?php
require_once "Controllers/userController.php";

   if(isset($_GET['action']))
   {
       $action=$_GET['action'];

       switch ($action)
       {
          case 'list':
              indexAction();
              break;

           case 'create':
               createAction();
               break;

           case 'edit':
               editAction();
               break;

           case 'delete':
               deleteAction();
               break;

           case 'distroy':
               distoyAction();
               break;

           case 'store':
               storeAction();
               break;

           case 'update':
               updateAction();
               break;



       }
   }



?>