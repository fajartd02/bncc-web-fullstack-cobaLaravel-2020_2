<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="#" />
</head>

<html>
  <body>
    <h1>Buat Account Baru!</h1>

    <!-- FORM -->
    <!-- ACTION FORM NGARAH KE ROUTE  -->
    <form name="signup-form" method="POST" action="{{url('/welcome')}}" >
      @csrf
      <h4 class="form-title">Sign Up Form</h4>

      <!-- FIRST NAME -->
      <p class="signup-firstName" >First name:</p>
      <input type="text" name="firstName"/>

      <!-- LAST NAME -->
      <p class="signup-lastName">Last name:</p>
      <input type="text"name="lastName" />

      <!--GENDER-->
      <p class="signup-gender">Gender:</p>
      <input type="radio" name="gender" value="Male" /> <label>Male</label
      ><br />
      <input type="radio" name="gender" value="Female" /> <label>Female</label
      ><br />
      <input type="radio" name="gender" value="Other" /> <label>Other</label>

      <!--NATIONALITY-->
      <p class="signup-national">Nationality:</p>
      <select name="Nationality" id="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Australian">Australian</option>
      </select>

      <!--LANGUAGE-->
      <p class="signup-lang">Language Spoken:</p>
      <input type="checkbox" />Bahasa Indonesia<br />
      <input type="checkbox" />English<br />
      <input type="checkbox" />Other

      <!--BIO-->
      <p class="signup-bio">Bio:</p>
      <textarea name="bio" id="" cols="30" rows="10"></textarea><br />

      <!--SUBMIT BUTTON-->
      <button type="submit">Sign Up</button>
    </form>
  </body>
</html>
