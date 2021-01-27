<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pages</title>
</head>

<body>
  <form action="/admin/page/save" method="post">
  @csrf
    <div>
      <label>Title</label>
      <input type="text" name="title">
    </div>
    <div>
      <label>Content</label>
      <textarea name="content"></textarea>
    </div>
    <button type="submit">Save</button>
  </form>
</body>

</html>