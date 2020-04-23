<h1>Create a Post</h1>
<form method="post" action="/blog/create">
<input type = "hidden" value="" name="csrf">
<label for = "title">Title</label>
<input type = "text" id="title" name="title">
<label for = "content">Content</label>
<textarea name="content" id="content"></textarea>
<input type="submit">
</form>
