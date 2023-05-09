let del=document.getElementById("delete"); 


del.addEventListener('click',function(){    let confi= confirm("Are you sure you want to delete your account");
if (confi== true){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "deleteuser.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert("Your account has been deleted.");
      }
    };

    xhr.send();}}

)