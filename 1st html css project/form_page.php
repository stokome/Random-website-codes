<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <Head>
    <meta charset="UTF-8"/>
    <title>Information</title>
    <link rel="stylesheet" href="form_page.css"/>
        <script>
        function cookies(){
            var data = document.getElementsByName('field1').value;
            document.cookie ="name=" + data;
        }
    </script>
</Head>


<div class="form-style-10">
    <h1>Sign Up Now!<span>Sign up and tell us what you think of the site!</span></h1>
    <form action="#">
        <div class="section"><span>1</span>First Name and Address</div>
        <div class="inner-wrap">
            <label>Your Full Name <input type="text" name="field1" /></label>
            <label>Address <textarea name="field2"></textarea></label>
        </div>
    
        <div class="section"><span>2</span>Email and Phone</div>
        <div class="inner-wrap">
            <label>Email Address <input type="email" name="field3" /></label>
            <label>Phone Number <input type="text" name="field4" /></label>
        </div>
    
        <div class="section"><span>3</span>Passwords</div>
            <div class="inner-wrap">
            <label>Password <input type="password" name="field5" /></label>
            <label>Confirm Password <input type="password" name="field6" /></label>
        </div>
        <div class="button-section">
         <input type="submit" value="submit" onclick="cookies()"/>
         <span class="privacy-policy">
         <input type="checkbox" name="field7">You agree to our Terms and Policy.</input>
         </span>
        </div>
    </form>
</div>
</html>