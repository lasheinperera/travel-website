function validateForm() {
  var first_name = document.getElementById("first_name").value;
  var last_name = document.getElementById("last_name").value;
  var no_of_pax = document.getElementById("no_of_pax").value;
  var package = document.getElementById("package").value;
  var date_from = document.getElementById("date_from").value;
  var date_to = document.getElementById("date_to").value;
  var country = document.getElementById("country").value;
  var tp = document.getElementById("tp").value;
  var email = document.getElementById("email").value;

  if (first_name == "") {
    alert("First Name must be filled out");
    return false;
  } else if (typeof first_name.value == Number) {
    alert("First Name cannot contain numbers");
    return false;
  }

  if (last_name == "") {
    alert("Last Name must be filled out");
    return false;
  } else if (/\d/.test(last_name)) {
    alert("Last Name cannot contain numbers");
    return false;
  }

  if (no_of_pax == "") {
    alert("No of Pax must be filled out");
    return false;
  } else if (isNaN(no_of_pax) || no_of_pax <= 0) {
    alert("No of Pax must be a positive number");
    return false;
  }

  if (package == "") {
    alert("Package Type must be filled out");
    return false;
  }

  if (date_from == "") {
    alert("Date From must be filled out");
    return false;
  } else if (!/\d{4}-\d{2}-\d{2}/.test(date_from)) {
    alert("Invalid Date From format (yyyy-mm-dd)");
    return false;
  }

  if (date_to == "") {
    alert("Date To must be filled out");
    return false;
  } else if (!/\d{4}-\d{2}-\d{2}/.test(date_to)) {
    alert("Invalid Date To format (yyyy-mm-dd)");
    return false;
  }

  if (country == "") {
    alert("Country must be filled out");
    return false;
  }

  if (tp == "") {
    alert("Contact No. must be filled out");
    return false;
  } else if (isNaN(tp) || tp.length != 10) {
    alert("Invalid Contact No. (must be a 10-digit number)");
    return false;
  }

  if (email == "") {
    alert("Email must be filled out");
    return false;
  } else if (!/\S+@\S+\.\S+/.test(email)) {
    alert("Invalid Email format");
    return false;
  }

  return true;
}
