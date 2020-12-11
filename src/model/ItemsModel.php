<?php


namespace App\model;


class ItemsModel
{
    protected $database;

    public function __construct()
    {
        $connect = new DBConnect();
        $this->database = $connect->connect();

    }

    public function getAll()
    {
        $sql = "SELECT * FROM items";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM items WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }


    public function add($itemsname, $itemsspecies, $price, $amount, $date, $describe)
    {

        $sql = "INSERT INTO items (`itemsname`, `itemsspecies`, `price` , `amount` , `date` , `describe`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(1, $itemsname);
        $stmt->bindValue(2, $itemsspecies);
        $stmt->bindValue(3, $price);
        $stmt->bindValue(4, $amount);
        $stmt->bindValue(5, $date);
        $stmt->bindValue(6, $describe);
        $stmt->execute();

    }


    public function getItemsById($id)
    {
        $sql = 'SELECT * FROM `items` WHERE id = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function edit( $id, $itemsname, $itemsspecies, $price, $amount, $date, $describe)
    {
        $sql = "UPDATE items SET itemsname=:itemsname,itemsspecies=:itemsspecies, price=:price ,amount=:amount, `date`=:date,`describe`=:describe WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':itemsname', $itemsname);
        $stmt->bindValue(':itemsspecies', $itemsspecies);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':amount', $amount);
        $stmt->bindValue(':date', $date);
        $stmt->bindValue(':describe', $describe);
        $stmt->bindValue(':id', $id);
        $stmt->execute();


    }


}