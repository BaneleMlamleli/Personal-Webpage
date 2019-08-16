// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function formValidation(){
    var name = document.getElementById("name");
    var surname = document.getElementById("surname");
    var email = document.getElementById("email");
    var comment = document.getElementById("comment");
    ///^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var alphaExp = /^[a-zA-Z]+$/;

    // removing spaces and checking if the field is empty
    if(name.value.trim() == ""){
        alert("Name field cannot be left empty!");
        return false;
    }

    if(surname.value.trim() == ""){
        alert("Surname field cannot be left empty!");
        return false;
    }

    if(email.value.trim() == ""){
        alert("Email field cannot be left empty!");
        return false;
    }

    if(comment.value.trim() == ""){
        alert("Comment field is empty!");
        return false;
    }

    //checking if the name or surname contains digits or special characters
    if(name.value.match(alphaExp)){
        if(surname.value.match(alphaExp)){
            //if(email.value.match(emailRegex))
            if(emailRegex.test(email.value)) {
                return true;
            }else{
                alert("Incorrect email address");
                return false;
            }
        }else{
            alert("Surname cannot contain numbers or special characters");
            return false;
        }
    }else{
        alert("Name cannot contain numbers or special characters");
        return false;
    }
}
