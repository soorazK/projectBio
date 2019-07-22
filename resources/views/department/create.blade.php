<html>
<head></head>
  <body>
    <h1> Create a new department</h1>
  <form method="POST" action="/department">
    {{csrf_field()}}
    <div>
      <input type="text" name="department_name" placeholder="department">
    </div>
   
  <div>
   <select name="shift_name">
  <option >Select Shift</option>
   <?php foreach ($departments as $shift) :?>
  <option value="{{$shift['id']}}">{{$shift['shift_name']}}</option>
  <?php endforeach;?>
</select>
  </div>
  <div>
    <button type="submit">Create Department</button>
  </div>
  </form>
</body>
</html>