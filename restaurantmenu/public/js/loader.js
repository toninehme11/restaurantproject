// Function to remove the loader
function removeLoader() {
  // Remove the loader element from the DOM
  $(".loader").remove();
}

// Add this code after the loader HTML element in your HTML file
$(document).ready(function() {
  // Set the duration for the loader to be displayed (in milliseconds)
  var loaderDuration = 3000; // Adjust as needed (3 seconds in this example)

  // Call the removeLoader function after the specified duration
  setTimeout(removeLoader, loaderDuration);
});
function removeLoader() {
  // Add the "hidden" class to hide the loader
  $(".loader").addClass("hidden");
}
// Function to remove the loader
function removeLoader() {
  console.log("Removing loader...");
  // Remove the loader element from the DOM
  $(".loader").remove();
}
