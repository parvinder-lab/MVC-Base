<h1>Update a Post</h1>
<form method="post" action="/blog/update/<?php echo($slug);?>">
<input type = "hidden" value="" name="csrf">
<label for = "title">Title</label>
<input type = "text" id="title" value="<?php echo($title);?>" name="title">
<label for = "content">Content</label>
<textarea name="content" value="<?php echo($content);?> id="content"></textarea>
<input type="submit">
</form>
