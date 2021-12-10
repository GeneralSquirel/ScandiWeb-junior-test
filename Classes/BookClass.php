<?php
require_once("ProductClass.php");

class Books extends Products
{
  /** properties **/
  protected $weight;

  /** Methods **/
  function __construct($sku,$name,$price,$description,$kg)
  {
    $this->SKU = $sku;
    $this->productName = $name;
    $this->productPrice = $price;
    $this->productDescription = $description;
    $this->weight = $kg;
  }

  /*GET SET Weight*/
  public function getProductWeight()
  {

    return $this->weight;
  }

  public function setProductWeight($kg)
  {
    $value = $kg;
    //validation code

    $this->weight = $value;
  }

}


?>
