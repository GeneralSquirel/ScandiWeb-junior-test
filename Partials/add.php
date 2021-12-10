<form class='id="product_form" action="#" method="post"'>
  <!--
  fields
  -products in general
  -#sku
  -#name
  -#price
  -#Description

  - productType switcher
  - Furniture
  - #height
  - #width
  - #length
  -Book
  -#Weight
  -DvD
  -Size
-->

<!-- SKU INPUT -->
<div class="mb-3 mt-3">
  <label for="text" class="form-label">SKU:</label>
  <input type="number" class="form-control" id="sku" placeholder="Enter SKU Code" name="SKU">
</div>

<!-- NAME INPUT -->
<div class="mb-3">
  <label for="Name" class="form-label">Product Name:</label>
  <input type="text" class="form-control" id="name" placeholder="Enter password" name="name">
</div>

<!-- PRICE INPUT -->
<div class="mb-3 mt-3">
  <label for="text" class="form-label">Price in $:</label>
  <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
</div>

<!-- DESCRIPTION INPUT -->
<div class="mb-3 mt-3">
  <label for="comment">Product  Description:</label>
  <textarea class="form-control" rows="5" id="Description" name="description"></textarea>
</div>

<div class="mb-3 mt-3">
  <div class="dropdown">
    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
      Choose Type
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" id="furnitureType" href="#">Furniture</a></li>
      <li><a class="dropdown-item" id="bookType"href="#">Books</a></li>
      <li><a class="dropdown-item" id="dvdType"href="#">DvD</a></li>
    </ul>
  </div>
</div>

<div id="BookInputs" display-style="none">
  <!-- SKU INPUT -->
  <div class="mb-3 mt-3">
    <label for="text" class="form-label">Weight in KG:</label>
    <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="weight">
  </div>
</div>

<div id="FurnituresInputs"display-style="none">
  <!-- SKU INPUT -->
  <div class="mb-3 mt-3">
    <label for="text" class="form-label">Weight in KG:</label>
    <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="weight">
  </div>
</div>

<div id="DvdInputs">
  <!-- SKU INPUT -->
  <div class="mb-3 mt-3">
    <label for="text" class="form-label">Weight in KG:</label>
    <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="weight">
  </div>
</div>


<button type="submit" class="btn btn-success">Save</button>
<button type="button" class="btn btn-danger">Cancel</button>

</form>
