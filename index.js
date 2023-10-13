
const title = document.querySelector('.hometitle');
const navbar =  document.querySelector('.navbar');


function iconMouseOver(icon) {
    icon.style.transform = "scale(1.15)";
    icon.style.transition = "transform 0.3s";
    icon.style.cursor = "pointer";
  }
  
  function iconMouseOut(icon) {
    icon.style.transform = "scale(1)";
  }
  
  function photocontMouseOver(div) {
    div.style.transform = "scale(1.1)";
    div.style.transition = "transform 1s";
    div.style.cursor = "pointer";
  }
  
  function photocontMouseOut(div) {
    div.style.transform = "scale(1)";
  }
  function iconover(svg) {
    svg.style.transform = "scale(1.3)";
    svg.style.transition = "transform 0.1s";
    svg.style.cursor = "pointer";
  }
  
  function iconout(svg) {
    svg.style.transform = "scale(1)";
    
  }
  function hidetitle(div) {
    title.style.display = "none";
  }
  
  function showtitle(div) {
    title.style.display = "block";
  }

  function randomizeColorChange() {
   
  
    const shouldAddClass = Math.random() < 0.5;
  
    if (shouldAddClass) {
      title.classList.add('color-changing');
    } else {
      title.classList.remove('color-changing');
    }
  }
  
  setInterval(randomizeColorChange, 5000); 
  
  

const slides = document.querySelectorAll(".photocont");
let left = document.getElementById("left");
let rigth = document.getElementById("right");


var i = 0;
let y = i +1;


const minis = document.querySelectorAll(".pecont");
const minis2 = document.querySelectorAll(".necont");
let z = minis2.length - 1;



function hideall(array,i){
  array.forEach(element => {
    if(element !== array[i] ){
      element.style.display = "none";}
  });
}

hideall(minis,y );
hideall(minis2,z );
hideall(slides,i);

left.addEventListener("click", function() {
      
      i++;
      if(i === slides.length){
        i = 0;}
      slides[i].style.display = "block";
      hideall(slides,i);

      y = i +1;
      if(y === minis.length)
      {
        y = 0;
      }
      minis[y].style.display = "block";
      hideall(minis,y);

      z = i -1;
      if(z === -1)
      {
        z = minis.length - 1;
      }
      minis2[z].style.display = "block";
      hideall(minis2,z)
      console.log( "z= " +z + "i=" + i +"y= " + y )
})

rigth.addEventListener("click", function() {
  i--;
  if(i === -1){
        i = slides.length -1;}
  slides[i].style.display = "block";
  hideall(slides,i);

  y = i + 1;
  if(y ===  minis.length)
      {
        y = 0;
      }
  minis[y].style.display = "block";
  hideall(minis,y)

  z = i -1;
  if(z === -1)
  {
    z = minis.length - 1;
  }
  console.log( "z= " +z + "i=" + i +"y= " + y )
  minis2[z].style.display = "block";
  hideall(minis2,z)
})

document.querySelector('.buy').addEventListener("click", function () {
  console.log('dkhel');
  var infosu = document.querySelector('.infosu');
  
  if (infosu.style.display === "none") {
    infosu.style.display = "block";
  } else {
    infosu.style.display = "none";
  }
});


