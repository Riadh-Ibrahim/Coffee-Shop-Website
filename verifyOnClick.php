<script>
document.getElementById("my-button").addEventListener("click", function() {
  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Set up the request
  xhr.open("GET", "my-php-script.php");

  // Send the request
  xhr.send();
});
</script>
