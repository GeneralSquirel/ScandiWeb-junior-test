//Err variables
var title = document.getElementById("addTitle");
var notes = document.getElementById('notes');
// form block variables
var bookInput = document.getElementById('BookInputs');
var furnituresInput = document.getElementById('FurnituresInputs');
var dvdInput = document.getElementById('DvdInputs');
//Form field variables
var sku = document.getElementById('sku');
var name = document.getElementById('name');
var price = document.getElementById('price');
var description = document.getElementById('description');
var type = document.getElementById('typeSelecter');
var score = 0;
//Book variables
var weight = document.getElementById('weight');
//Furniture variables
var length = document.getElementById('length');
var width = document.getElementById('width');
var height = document.getElementById('height');
//DVD variables
var size = document.getElementById('size');


// Create allert function with form error messeges
function CreateAllert(falt,folt) {
  //create the allert with classes
  var element = document.createElement("div");
  element.classList.add('alert', 'alert-danger');

  //create strong text title
  var strong = document.createElement("STRONG");
  var errTittleText = document.createTextNode(falt +" ");
  strong.appendChild(errTittleText);
  //create text massage
  var errMsg = document.createTextNode(folt);

  //apend tittle and text
  element.appendChild(strong);
  element.appendChild(errMsg);
  notes.appendChild(element);

}

//Swap out the Form depending on type
function switchFormBlock(selecter){
switch(selecter.value) {

  case "book":
  // console.log("clicked books");
  bookInput.style.display = "block";
  furnituresInput.style.display = "none";
  dvdInput.style.display = "none";
  title.innerHTML = "Add a book";
  break;

  case"furniture":
  // console.log("clicked Furniture");
  bookInput.style.display = "none";
  furnituresInput.style.display = "block";
  dvdInput.style.display = "none";
  title.innerHTML = "Add a piece of furniture";
  break;

  case"dvd":
  // console.log("clicked dvds");
  bookInput.style.display = "none";
  furnituresInput.style.display = "none";
  dvdInput.style.display = "block";
  title.innerHTML = "Add a DvD";
  break;
  default:
  break;
}
}

score.addEventListener("change", () => {
  console.log(score);

});
