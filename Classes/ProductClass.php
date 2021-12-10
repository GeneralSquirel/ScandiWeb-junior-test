<?php

class Products
{
  /** properties **/
  protected $SKU;
  protected $productName;
  protected $productPrice;
  protected $productDescription;

  /** Methods **/
  function __construct($sku,$name,$price,$description)
  {
    $this->SKU = $sku;
    $this->productName = $name;
    $this->productPrice = $price;
    $this->productDescription = $productDescription;
  }

  /*Get set SKU*/
  public function getProductSKU()
  {
    return $this->SKU;
  }

  public function setProductSKU($sku)
  {
    $value = $sku;
    //validation code

    $this->SKU = $value;
  }

  /*Get set Product name*/
  public function GetProductName()
  {
    return $this->productName;
  }

  public function setProductName($name)
  {
    $this->productName = $name;
  }


/*Get set Product price*/
public function GetProductPrice()
{
  return $this->productPrice;
}

  public function setProductPrice($price)
  {
    $this->productPrice = $price;
  }

/*Get set Product Description*/
public function GetProductDescription()
{
  return $this->productDescription;
}
  public function setProductDescription($description)
  {
    $this->productDescription = $productDescription;
  }


}


?>
