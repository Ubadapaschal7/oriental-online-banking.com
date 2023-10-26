// document.body.addEventListener('load', function() {
//   alert("Hello world");
// })


var sidemenu = document.getElementById("sidemenu");

function openmenu(){
  sidemenu.style.right = "0";
}
function closemenu(){
  sidemenu.style.right = "-200px";
}


//========= LOGIN FORM
function openForm() {
  document.getElementById("popupForm").style.display = "block";
}
function closeForm() {
  document.getElementById("popupForm").style.display = "none";
}
//================= END OF LOGIN FORM


// =================== NAVBAR

// =================== NAVBAR

// ========================================
// NUMBER STARTER
// =========================================


const items = [...document.querySelectorAll('.number')];

const updateCount = (el) => {
  const value = parseInt(el.dataset.value);
  const increment = Math.ceil(value / 200000);
  // const increment = 1;
  const intervalTime = 50;
  let initialValue = 0;

  const increaseCount = setInterval(() => {
    initialValue += increment;

    if (initialValue > value) {
      el.textContent = `${value}+`;
      clearInterval(increaseCount);
      return;
    }

    el.textContent = `${initialValue}+`;
  }, intervalTime);
  // console.log(increaseCount);
};

items.forEach((item) => {
  updateCount(item);
});



// ========================================
// END OF NUMBER STARTER
// =========================================




// =======================
// QUESTION
// ========================


// using selectors inside the element 
const questions = document.querySelectorAll(".question");

questions.forEach(function (question) {
    const btn = question.querySelector(".question-btn");
    // console,log(btn);

    btn.addEventListener("click", function() {
    //    console.log(question);

    questions.forEach(function (item) {
        if (item !== question) {
            item.classList.remove("show-text");
        }
    });

    question.classList.toggle("show-text");
    });
});





// traversing the dom
// const btns = document.querySelectorAll(".question-btn");

// btns.forEach(function (btn) {
//   btn.addEventListener("click", function (e) {
//     const question = e.currentTarget.parentElement.parentElement;

//     question.classList.toggle("show-text");
//   });
// });







// <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC663YK8Z0OOxohOykg1eOoHvuWYJ9cW0&callback=initMap" async defer></script>

//     function initMap() {
//     // Create a new map object centered on a specific location
//     var map = new google.maps.Map(document.getElementById('map'), {
//       center: { lat: 9.081999, lng: 8.675277 }, // Replace with the actual coordinates for your desired location
//       zoom: 14, // Adjust the zoom level as needed
//     });
//   }

//   // Call the initMap() function to initialize the map
//   initMap();





