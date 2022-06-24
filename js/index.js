// $('#sec-5-slider').slick({
//     centerMode: true,
//     centerPadding: '60px',
//     arrows: false,
//     slidesToShow: 3,
//     responsive: [
//       {
//         breakpoint: 768,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 3
//         }
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 1
//         }
//       }
//     ]
//   });

$('#home-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows : false ,
    autoplay: true,
  autoplaySpeed: 2000  });
  


$('#reviews-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1
});


$('#sideways-slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2
            }
          } ,
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 2
            }
          } ,
          {
            breakpoint: 632,
            settings: {
              slidesToShow: 1
            }
          }
        ]
});
$('#services-slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2
            }
          } ,
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 2
            }
          } ,
          {
            breakpoint: 632,
            settings: {
              slidesToShow: 1
            }
          }
        ]
});







filterSelection("")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "") c = "interview-container";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


// Get the container element
var btnContainer = document.getElementById("media-btns-container");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the media-active-btn class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("media-active-btn");
    current[0].className = current[0].className.replace(" media-active-btn", "");
    this.className += " media-active-btn";
  });
}