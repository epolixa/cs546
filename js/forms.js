
function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
   
    document.write("<script language='javascript' src='sha512.js'></script>");
    var p = document.createElement("input");
    
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    //alert(password.value);
    p.value = hex_sha512(password.value);
     //alert(p.value);
    
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    
    // Finally submit the form. 
    form.submit();
}
 
function regformhash(form, firstname, lastname, uid, email, password, conf) {
    document.write("<script language='javascript' src='sha512.js'></script>");
     // Check each field has a value
    if (uid.value == ''         || 
          email.value == ''     || 
          password.value == ''  || 
          conf.value == ''      ||
          firstname.value == '' ||
          lastname.value == '' ) {
 
        alert('You must provide all the requested details. Please try again');
        location.reload();
        return false;
    }
 
    // Check the username lastname firstname
 
    re = /^\w+$/; 
    if(!re.test(form.username.value) || !re.test(form.firstname.value) || !re.test(form.lastname.value) ) { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        form.username.focus();
        location.reload();
        return false; 
    }
    

 
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.value.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.password.focus();
        location.reload();
        return false;
    }
 
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        location.reload();
        return false;
    }
 
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Your password and confirmation do not match. Please try again');
        form.password.focus();
        location.reload();
        return false;
    }
 
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";
 
    // Finally submit the form. 
    form.submit();
    return true;
}