// LOADER, SIDEBAR and ABOUT INFO
const sidey = document.getElementById('sidebar');
// const loader = document.getElementById("loaderDiv");
const extra = document.getElementById('info');
const mainpic = document.getElementById('mainpic');
const blue = window.matchMedia("(max-width: 800px)");


// Show and hide about info
function show(){info.classList.toggle('xxc');};
function unshow(){info.classList.remove('xxc');};

//Stop the sidebar appearing on small screens with matchmedia
function myFunction(x) {if (blue.matches) {sidey.classList.remove("block");}}
function toggler() {sidey.classList.toggle("block");}
myFunction(blue);

//GAME FUNCTIONALITY
const img1 = document.getElementById('mypic'); 
const inputpanel = document.getElementById('inputpanel');
const dicediv = document.getElementById('dicediv');
const choosebutton = document.getElementById('chooseButton');
const getbutton = document.getElementById('getButton');
const roll = document.querySelector('roll');
const buttondiv = document.getElementById('buttondiv');
const demobut = document.getElementById('demoBut');
const draggy = document.getElementById('draggy');
const board = document.getElementById("board");
const die = document.querySelector(".dice");
const imgdiv = document.getElementById("imgdiv");
const rolly = document.getElementById("rolly");
const me = document.getElementById("me");

function playDemo(){
  demobut.style.display = "none";
  getbutton.style.display = "none";
    rolly.style.display = "block";
  dicediv.style.display = "flex";
  die.style.display = "flex";
  choosebutton.style.display = "none";

  
  draggy.style.display = "none";

}



window.addEventListener('load', function() {
  document.querySelector('input[type="file"]').addEventListener('change', function() {
      if (this.files && this.files[0]) {
          img1.src = URL.createObjectURL(this.files[0]);
          demobut.style.display = "none";
          getbutton.style.display = "none";
          rolly.style.display = "block";
          dicediv.style.display = "flex";
          die.style.display = "flex";
          choosebutton.style.display = "none";

          draggy.style.display = "none";
      }
  });
});




function goforit(){
  imgdiv.innerHTML = ` <img src="img/${rolly.value}" alt="">`;
  rolly.style.display = "none";
  me.style.display = "none";
}

function flash(){
  die.classList.add('flash');
}

function flashoff(){
  die.classList.remove('flash');
}

//rollDice
function rollDice(){
    // get a number between 0 and 5
    let result= Math.floor(Math.random() * 6);
    flash();
    die.textContent="";
    function setText(){
      die.textContent = result + 1;
    }
    //set the dice text on the DOM to 1 to 6;
    setTimeout(flashoff, 100);
    setTimeout(setText, 200);
};

rolly.addEventListener('click', rollDice);


// Move pieces
dragElement(document.getElementById("piece1"));
dragElement(document.getElementById("piece2"));
dragElement(document.getElementById("piece3"));
dragElement(document.getElementById("piece4"));
dragElement(document.getElementById("piece5"));
dragElement(document.getElementById("piece6"));
dragElement(document.getElementById("piece7"));
dragElement(document.getElementById("piece8"));
dragElement(document.getElementById("piece9"));
dragElement(document.getElementById("piece10"));
dragElement(document.getElementById("piece11"));
dragElement(document.getElementById("piece12"));

function dragElement(elmnt) {
  let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    elmnt.onmousedown = dragMouseDown;
  

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

