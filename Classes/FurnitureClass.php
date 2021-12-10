<?php
require_once("ProductClass.php");

class Furniture extends Products
{
  /** properties **/
  protected $width;
  protected $height;
  protected $length;

  /** Methods **/
  function __construct($sku,$name,$price,$description,$wi,$he,$le)
  {
    $this->SKU = $sku;
    $this->productName = $name;
    $this->productPrice = $price;
    $this->productDescription = $description;
    $this->width = $wi;
    $this->height = $he;
    $this->length = $le;
  }

  /*Get set Width*/
  public function getProductWidth()
  {
    return $this->width;
  }

  public function setProductWidth($wi)
  {
    $value = $wi;
    //validation code

    $this->width = $value;
  }

  /*Get set Height*/
  public function getProductHeight()
  {
    return $this->height;
  }

  public function setProductHeight($he)
  {
    $value = $he;
    //validation code

    $this->height = $value;
  }


  /*Get set Length*/
  public function getProductLength()
  {
    return $this->length;
  }

  public function setProductLength($le)
  {
    $value = $le;
    //validation code

    $this->length = $value;
  }
}

?>
