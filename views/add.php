<?php include("AddToDB.php"); ?>
<h1 id="addTitle">Add</h1>
<div class="Notes" id="notes"></div>
<form id="product_form" action="" method="post">
  <div class="Cutter">

    <div class="cut">

      <!-- SKU INPUT -->
      <div class="mb-3 mt-3">
        <label for="text" class="form-label">SKU:</label>
        <input type="number" class="form-control" id="sku" placeholder="Enter SKU Code" name="SKU">
      </div>

      <!-- NAME INPUT -->
      <div class="mb-3">
        <label for="Name" class="form-label">Product Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name">
      </div>

      <!-- PRICE INPUT -->
      <div class="mb-3 mt-3">
        <label for="text" class="form-label">Price in $:</label>
        <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
      </div>

      <!-- DESCRIPTION INPUT -->
      <div class="mb-3 mt-3">
        <label for="comment">Product  Description:</label>
        <textarea class="form-control" rows="5" id="description" name="description"></textarea>
      </div>

      <!-- Type Picker -->
      <div class="mb-3 mt-3">
        <select id="typeSelecter" onchange="switchFormBlock(this)" name="TypeSelecter" class="dropdown btn btn-dark dropdown-toggle">
          <option class="dropdown-item text-light" value="" disabled selected>Choose option</option>
          <option class="dropdown-item text-light" value="furniture" id="furnitureType">Furniture</option>
          <option class="dropdown-item text-light" value="book" id="bookType">Books</option>
          <option class="dropdown-item text-light" value="dvd" id="dvdType">DvD</option>
        </select>
      </div>
      <!-- end Type Picker -->
    </div>
    <div class="cut">

      <div id="BookInputs" display-style="none">
        <!-- Weight INPUT -->
        <div class="mb-3 mt-3">
          <label for="text" class="form-label">Weight in KG:</label>
          <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="weight">
        </div>
      </div>

      <div id="FurnituresInputs"display-style="none">
        <!-- Length INPUT -->
        <div class="mb-3 mt-3">
          <label for="text" class="form-label">Length in Meters:</label>
          <input type="number" class="form-control" id="length" placeholder="Enter length" name="length">
        </div>
        <!-- Length INPUT -->
        <div class="mb-3 mt-3">
          <label for="Width" class="form-label">Width in Meters:</label>
          <input type="number" class="form-control" id="width" placeholder="Enter Width" name="width">
        </div>
        <!-- Length INPUT -->
        <div class="mb-3 mt-3">
          <label for="Height" class="form-label">Height in Meters:</label>
          <input type="number" class="form-control" id="height" placeholder="Enter height" name="height">
        </div>
      </div>

      <div id="DvdInputs">
        <!-- Size INPUT -->
        <div class="mb-3 mt-3">
          <label for="DvD" class="form-label">Size in MB:</label>
          <input type="number" class="form-control" id="size" placeholder="Enter DVD size" name="weight">
        </div>
      </div>
    </div>
  </div>

  <button type="submit" name="submit" class="btn btn-success">Save</button>
  <button type="button" class="btn btn-danger">Cancel</button>

</form>
<script src="JS/Functions.js" charset="utf-8"></script>
