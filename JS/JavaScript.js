let slide = 1;
let autoSlideInterval;
// Function for setting the interval of switching slide
$(document).ready(function(){
    autoSlideInterval = setInterval(next, 10000)
});
// Function for when the radio buttons are clicked
$(window).on("click", function(){
    if($("#tab-1").is(":checked")){
        $("#content-item-1").addClass("visible");
        $("#content-item-2, #content-item-3, #content-item-4").removeClass("visible");
        slide = 1;
    } else if($("#tab-2").is(":checked")){
        $("#content-item-2").addClass("visible");
        $("#content-item-1, #content-item-3, #content-item-4").removeClass("visible");
        slide = 2;
    } else if($("#tab-3").is(":checked")){
        $("#content-item-3").addClass("visible");
        $("#content-item-1, #content-item-2, #content-item-4").removeClass("visible");
        slide = 3;
    } else if($("#tab-4").is(":checked")){
        $("#content-item-4").addClass("visible");
        $("#content-item-1, #content-item-2, #content-item-3").removeClass("visible");
        slide = 4;
    }
});

// the Carousel function
// Function for going a slide back and resetting the timer for slide change
function back(){
    // Decrement the slide
    slide--;
    if (slide < 1) {
        slide = 4
    };
    // If back button is clicked, restart the interval
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(next, 10000);
    switch (slide){
        case 1:
            // Make the appearing item visible by adding the "visible" class that has the appropriate css to have it appear
            $("#content-item-1").addClass("visible");
            // Make the rest hidden by removing the "visible" class
            $("#content-item-2, #content-item-3, #content-item-4").removeClass("visible");
            // Make tab-1 checked
            $("#tab-1").prop("checked", true);
            // Make the other tabs unchecked
            $("#tab-2, #tab-3, #tab-4").prop("checked", false);
            break;
        case 2:
            $("#content-item-2").addClass("visible");
            $("#content-item-1, #content-item-3, #content-item-4").removeClass("visible");
            $("#tab-2").prop("checked", true);
            $("#tab-1, #tab-3, #tab-4").prop("checked", false);
            break;
        case 3:
            $("#content-item-3").addClass("visible");
            $("#content-item-1, #content-item-2, #content-item-4").removeClass("visible");
            $("#tab-3").prop("checked", true);
            $("#tab-1, #tab-2, #tab-4").prop("checked", false);
            break;
        case 4:
            $("#content-item-4").addClass("visible");
            $("#content-item-1, #content-item-2, #content-item-3").removeClass("visible");
            $("#tab-4").prop("checked", true);
            $("#tab-1, #tab-2, #tab-3").prop("checked", false);
            break;
        default:
            $("#content-item-4").addClass("visible");
            $("#content-item-1, #content-item-2, #content-item-3").removeClass("visible");
            $("#tab-4").prop("checked", true);
            $("#tab-1, #tab-2, #tab-3").prop("checked", false);
            break;
    }
}
// button for going to the next slide and resetting the timer
function next(){
    // Increment the slide
    slide++;
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(next, 10000)

    if (slide > 4) {
        slide = 1;
    }
    switch (slide){
        case 1:
            $("#content-item-1").addClass("visible");
            $("#content-item-2, #content-item-3, #content-item-4").removeClass("visible");
            $("#tab-1").prop("checked", true);
            $("#tab-2, #tab-3, #tab-4").prop("checked", false);
            break;
        case 2:
            $("#content-item-2").addClass("visible");
            $("#content-item-1, #content-item-3, #content-item-4").removeClass("visible");
            $("#tab-2").prop("checked", true);
            $("#tab-1, #tab-3, #tab-4").prop("checked", false);
            break;
        case 3:
            $("#content-item-3").addClass("visible");
            $("#content-item-1, #content-item-2, #content-item-4").removeClass("visible");
            $("#tab-3").prop("checked", true);
            $("#tab-1, #tab-2, #tab-4").prop("checked", false);
            break;
        case 4:
            $("#content-item-4").addClass("visible");
            $("#content-item-1, #content-item-2, #content-item-3").removeClass("visible");
            $("#tab-4").prop("checked", true);
            $("#tab-1, #tab-2, #tab-3").prop("checked", false);
            break;
        default:
            $("#content-item-1").addClass("visible");
            $("#content-item-2, #content-item-3, #content-item-4").removeClass("visible");
            $("#tab-1").prop("checked", true);
            $("#tab-2, #tab-3, #tab-4").prop("checked", false);
            break;
    }
}
//  None existing page
function notExist(){
    alert("SORRY! I did not add that page yet!")
}

// Scroll
// This section is for the about us page
// It does the slide fade in animation of the images
$(window).on("scroll", function(){
    if($(this).scrollTop() >= 900){
        $(".img-1").addClass("visible");
    }else{
        $(".img-1").removeClass("visible")
    }
    if($(this).scrollTop() >= 1300){
        $(".img-2").addClass("visible");
    }else{
        $(".img-2").removeClass("visible")
    }
    if($(this).scrollTop() >= 1800){
        $(".img-3").addClass("visible");
    }else{
        $(".img-3").removeClass("visible")
    }
    if($(this).scrollTop() >= 2200){
        $(".img-4").addClass("visible");
    }else{
        $(".img-4").removeClass("visible")
    }
});
// Ad Posting

let adItem = 1;
let adInterval;
// This function is for the hover effect on the ad carousel
// when ad is hovered, the text "click me" will appear
$(document).ready(function(){
    adInterval = setInterval(adPresented, 10000)
    $(".display-item").hover(function () {
            // Hover in: Pause the interval
            clearInterval(adInterval);
            $(".hover-effect").addClass("visible")
            console.log(adItem);
        },
        function () {
            // Hover out: Restart the interval
            adInterval = setInterval(adPresented, 5000);
            $(".hover-effect").removeClass("visible")
        }
    );
});

// This is the carousel of the ad or slideshow
function adPresented(){
    adItem++;
    // If adItem reaches greater than 3, go to the first image
    if (adItem > 3) {
        adItem = 1;
    }
    // I use a switch case for the carousel, every case has a specific image that will appear, which is the "visible" class
    // The rest will the "visible" tag remove, making them hidden
    switch (adItem){
        case 1:
            $(".display-item.box-1").addClass("visible");
            $(".display-item.box-2, .display-item.box-3").removeClass("visible");
            break;
        case 2:
            $(".display-item.box-2").addClass("visible");
            $(".display-item.box-1, .display-item.box-3").removeClass("visible");
            break;
        case 3:
            $(".display-item.box-3").addClass("visible");
            $(".display-item.box-1, .display-item.box-2").removeClass("visible");
            break;
        default:
            $(".display-item.box-1").addClass("visible");
            $(".display-item.box-2, .display-item.box-3").removeClass("visible");
            break;
    }
}
// Nav bar
// Function for mobile menu bar
$(document).ready(function() {
    // If toggleMenu is clicked, add the following
    $("#toggleMenu").click(function() {
        $(".hamburger").toggleClass("animated"); // Adds animation to the hamburger menu to become an "X"
        $("#navBar").toggleClass("animated")
    });
});

// Function for sliding down
// Measure pixels on the website
// window.addEventListener("DOMContentLoaded", (event) => {
//     var scrollValue = document.getElementById("counter");
//     if (scrollValue) {
//         window.addEventListener("scroll", () => {
//             let scroll = window.scrollY;
//             scrollValue.innerHTML = "Counter: " + scroll + "px";
//         });
//     } else {
//         console.error("Element with ID 'counter' not found.");
//     }
// });