<?php

namespace App\controller;

use App\model\ItemsModel;

class ItemsController
{
    protected $items;

    public function __construct()
    {
        $this->items = new \App\model\ItemsModel();

    }

    public function index()
    {

        $items = $this->items->getAll();

        include "src/view/list.php";

    }

    public function delete($id)
    {
        if ($_REQUEST['id']) {
            $this->items->delete($id);
        }
        header('location:index.php?');
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include 'src/view/add.php';
        } else {
            $itemsname = $_POST['itemsname'];
            $itemsspecies = $_POST['itemsspecies'];
            $price = (float) $_POST['price'];
            $amount =(float) $_POST['amount'];
            $date = $_POST['date'];
            $describe = $_POST['describe'];

            $this->items->add($itemsname, $itemsspecies, $price, $amount, $date, $describe);
            header("location:index.php");

        }

    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_REQUEST['id'];
            $items = $this->items->getItemsById($id);
            include 'src/view/edit.php';
        } else {
            $id=$_REQUEST['id'];
            $itemsname = $_POST['itemsname'];
            $itemsspecies = $_POST['itemsspecies'];
            $price = (float) $_POST['price'];
            $amount =(float) $_POST['amount'];
            $date = $_POST['date'];
            $describe = $_POST['describe'];

            $this->items->edit($id,$itemsname, $itemsspecies, $price, $amount, $date, $describe);
            header("location:index.php");

        }

    }
}