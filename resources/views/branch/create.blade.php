<html>
<head></head>
  <body>
    <h1> Create a new branch</h1>
  <form method="post" action="/branch">
    {{csrf_field()}}
    <div>
      <input type="text" name="branch_name" placeholder="branchName">
    </div>
  <div>
    <input type="text" name="location" placeholder="location">
  </div>
  <div>
    <button type="submit">Create branch</button>
  </div>
  </form>
</body>
</html>
