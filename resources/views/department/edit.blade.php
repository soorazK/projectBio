<html>
<head></head>
  <body>
    <h1> edit branch</h1>

 <form method="post" action="/department/{{$department->id}}">
        {{method_field('patch')}}
        {{csrf_field()}}
   <div class="field">
     <label class="label" for="department_nameshift_id">Department Name</label>


  <div class="control">
    <input type="text" class="input" name="department_name" placeholder="department_name" value="{{$department->department_name}}">
  </div>
</div>

<div class="field">
  <label class="label" for="shift_id">Shift</label>


<div class="control">
 <input type="text" class="input" name="shift_id" placeholder="shift_id" value="{{$department->shift_id}}">
</div>
</div>

<div class="field">
  <div class="control">
    <button type="submit" class="button is-link">Update Department</button>
  </div>
</div>
</form>
