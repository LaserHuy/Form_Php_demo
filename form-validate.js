// Function to validate form

function validateForm() {
  
    var lastName = document.forms["myForm"]["lastName"].value;
    var firstName = document.forms["myForm"]["firstName"].value;
    var email = document.forms["myForm"]["email"].value;
    var phone = document.forms["myForm"]["phone"].value;
    var subject = document.forms["myForm"]["subject"].value;
    var message = document.forms["myForm"]["message"].value;

    if (lastName === "" || firstName === "" || email === "" || phone === "" || subject === "" || message === "") {
      alert("All fields must be filled out");
      return false;
    }

    // Validate email
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(email)) {
      alert("Please enter a valid email address");
      return false;
    }

    return true;
}