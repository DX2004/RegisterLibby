<html>
<head>
    <script language="javascript" type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
</script>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="asa1.css" />
    <link rel="stylesheet" href="not.css" />
  </head>
  <body>
    <section class="container">
      <h2>Staff Registration</h2>
      <form method="POST" action="connect2.php" class="form" onSubmit="return confirm('Are you sure you want to Submit ?')">
        <div class="input-box form-group">
          <label>Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" onkeyup='validateName()' pattern="[A-Za-z\s]*"  required />
          <div class="input-group">
          <span id="name-error"></span>
          </div>
        </div>

        <div class="input-box form-group">
          <label>Unique No</label>
          <input type="number" id="unique" name="unique" placeholder="Enter your unique no" onkeyup='validateunique()' required />
          <div class="input-group">
          <span id="unique-error"></span>
          </div>
        </div>

        <div class="input-box form-group">
          <label>Department</label>
          <input type="text" id="department" name="department"  pattern="[A-Za-z]*" placeholder="Enter your department" onkeyup='validatedept()' required />
          <div class="input-group">
          <span id="dept-error"></span>
          </div>
        </div>
        </div>

        <div class="input-box form-group">
          <label>Email Address</label>
          <input type="email" id="email" name="email"  pattern="[^ @]*@[^ @]*" placeholder="Enter your email" onkeyup='validatemail()' required>
          <div class="input-group">
          <span id="email-error"></span>
          </div>
        </div>

        <div class="input-box form-group">
          <label>Phone No</label>
          <input type="number" id="phoneno" name="phoneno" placeholder="Enter your phone no" onkeyup='validatephoneno()' required />
          <div class="input-group">
          <span id="phoneno-error"></span>
          </div>
        </div>

        <div class="input-box form-group">
        <label>Address</label>
                <textarea rows="4" cols="40" name="address"  id="address" placeholder="Enter your address" onkeyup='validateaddress()' required></textarea>
                <div class="input-group">
          <span id="address-error"></span>
          </div>
              </div>
        <div class="form-group">
          <label>Type</label>
          <select id="teacher" name="teacher" onkeyup='validatetype()' required>
            <option value="" disabled selected>---Select---</option>
            <option value="teaching regular">Teaching Regular</option>
            <option value="teaching contract">Teaching Contract</option>
            <option value="non teaching regular">Non Teaching Regular</option>
            <option value="non teaching contract">Non Teaching Contract</option>
            <option value="teaching visiting">Teaching Visiting</option>
          </select>
          <div class="input-group">
          <span id="type-error"></span>
          </div>
        </div>
          <div class="button">
            <input type="submit" value="Submit"  name="submit" (click)="myFunction()">
        </div>
      </form>
    </section>
 </body>
</html>



    <script>
    myFunction() {
    let text = "Press a button!\nEither OK or Cancel.";
    if (confirm(text) == true) {
      text = "You pressed OK!";
    } else {
      text = "You canceled!";
    }
  }
  // const form = document.getElementById('submit');
  // form.addEventListener('input', function(event) {
  //   event.preventDefault();
  //   if (form.checkValidity()) {
  //     // All required fields have been filled out
  //     alert('Thank you for submitting the form!');
  //   } else {
  //     // Some required fields are empty
  //     alert('Please fill out all required fields.');
  //   }
  // });
</script>


<script>
var nameError=document.getElementById('name-error');
function validateName(){
  var name=document.getElementById("name").value;
  if(!name.match(/^[A-Za-z\s]+$/)){
    nameError.innerHTML = 'Enter Valid Name';
    return false;
  }
  if (name.length <3) {
    nameError.innerHTML = 'Enter Valid Name';
    return false;
  }
  nameError.innerHTML='<header>Valid Name<header>';
  return true;
}
//   var correct_way= (/^[A-Za-z]*\s{1}[A-Za-z]*&/);
// var nameInput = document.getElementById("name");
// nameInput.addEventListener("input", function() {
//   var name = nameInput.value;
//   if (name.match(correct_way)) {
//     nameInput.setCustomValidity("");
//   } else {
//     nameInput.setCustomValidity("Please enter a valid Full Name.");
// }
// });
</script>


<script>
var uniqueError=document.getElementById('unique-error');
function validateunique(){
  var unique=document.getElementById("unique").value;
  if(unique.length!==9){
    uniqueError.innerHTML = 'Unique No must be 9 digits';
    return false;
  }
  uniqueError.innerHTML='<header>Valid Unique No<header>';
  return true;
}
// var enrollInput = document.getElementById("unique");
// enrollInput.addEventListener("input", function() {
//   var enroll = enrollInput.value;
//   if (enroll.length < 9 || enroll.length > 9) {
//     enrollInput.setCustomValidity("Please enter a valid Unique Number.");
//   } else {
//     enrollInput.setCustomValidity("");
// }
// });
</script>

<script>
var deptError=document.getElementById('dept-error');
function validatedept(){
  var dept=document.getElementById("department").value;
  if(!dept.match(/^[A-Za-z\s]+$/)){
    deptError.innerHTML = 'Enter Valid Department Name';
    return false;
  }
  if (dept.length <5) {
    deptError.innerHTML = 'Enter Valid Department Name';
    return false;
  }
  deptError.innerHTML='<header>Valid Department Name<header>';
  return true;
}

  // var phonenoInput = document.getElementById("phoneno");
  // phonenoInput.addEventListener("input", function() {
  //   var phoneno = phonenoInput.value;
  //   if (phoneno.length < 10 || phoneno.length > 10  ) {
  //     phonenoInput.setCustomValidity("Please enter a valid Phone Number.");
  //   } else {
  //     phonenoInput.setCustomValidity("");
  //   }
  // });
</script>

<script>
var emailError=document.getElementById('email-error');
function validatemail(){
  var email=document.getElementById("email").value;
  if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
    emailError.innerHTML = 'Enter Valid Email Address';
    return false;
  }
  emailError.innerHTML='<header>Valid Email Address<header>';
  return true;
}
</script>

<script>
var phonenoError=document.getElementById('phoneno-error');
function validatephoneno(){
  var phoneno=document.getElementById("phoneno").value;
  if(phoneno.length!==10){
    phonenoError.innerHTML = 'Phone No must be 10 digits';
    return false;
  }
  phonenoError.innerHTML='<header>Valid Phone No<header>';
  return true;
}
</script>


<script>
function my_confirm() {
    if( confirm("Are you sure you want to redeem?") ) {
        return true;
    }
    else {
        // do something 
        return false;
    }
}
  </script>
</body>
</form>
</html>
