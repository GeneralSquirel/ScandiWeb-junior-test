<?php
require_once("ProductClass.php");

class DvD extends Products
{
  /** properties **/
  protected $size;

  /** Methods **/
  function __construct($sku,$name,$price,$description,$mb)
  {
    $this->SKU = $sku;
    $this->productName = $name;
    $this->productPrice = $price;
    $this->productDescription = $description;
    $this->size = $mb;
  }

  function getProductSize()
  {

    return $this->size;
  }

  public function setProductSize($size)
  {
    $value = $size;
    //validation code

    $this->size = $value;
  }


}

?>
