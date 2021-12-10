var books = document.getElementById("bookType");
var bookInput = document.getElementById('BookInputs')

var furnitures = document.getElementById("furnitureType");
var furnituresInput = document.getElementById('FurnituresInputs')

var dvds = document.getElementById("dvdType");
var dvdInput = document.getElementById('DvdInputs')


books.addEventListener("click", () => {
	//console.log("clicked books");
  bookInput.style.display = "block";
  furnituresInput.style.display = "none";
  dvdInput.style.display = "none";
});

furnitures.addEventListener("click", () => {
	//console.log("clicked Furniture");
  bookInput.style.display = "none";
  furnituresInput.style.display = "block";
  dvdInput.style.display = "none";
});

dvds.addEventListener("click", () => {
	//console.log("clicked dvds");
  bookInput.style.display = "none";
  furnituresInput.style.display = "none";
  dvdInput.style.display = "block";
});
