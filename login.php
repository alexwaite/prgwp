<?php /* Template Name: Login Page Template */ ?>
<?php get_header(); ?>


<div class="loginbox">
    <br>
<form name="login" action="index_submit" method="post" accept-charset="utf-8">

    <label for="usermail">Username:</label><br>
    <input type="username" name="usermail" required><br>
  <br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" required><br>
  <br>
    <input type="submit" value="Login"></>
</form>
</div>


<?php get_footer(); ?>