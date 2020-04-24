


<form method="POST" action= "/test/login">
<input type ="hidden" name="csrf" value="<php echo($csrf) ?>">
 <label for="name">Email</label>
 <input id="name" name = "name" required autocomplete="email">
 <label for = "password">Password</label>
 <input type = "password" id = "password" name = "password" required autocomplete="email">
 </form>