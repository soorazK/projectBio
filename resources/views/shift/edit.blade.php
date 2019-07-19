<html>
<head></head>
  <body>
    <h1> edit shift</h1>

 <form method="post" action="/shift/{{$shift->id}}">
        {{method_field('patch')}}
        {{csrf_field()}}
   <div class="field">
     <label class="label" for="shiftName">shift Name</label>


  <div class="control">
    <input type="text" class="input" name="shift_name" placeholder="branch_name" value="{{$shift->shift_name}}">
  </div>
</div>

<div class="field">
  <label class="label" for="startTime">StartTime</label>


<div class="control">
 <input type="text" class="input" name="start_time" placeholder="location" value="{{$shift->start_time}}">
</div>
</div>

<div class="field">
  <label class="label" for="startTime">EndTime</label>


<div class="control">
 <input type="text" class="input" name="start_time" placeholder="location" value="{{$shift->end_time}}">
</div>
</div>

<div class="field">
  <div class="control">
    <button type="submit" class="button is-link">Update</button>
  </div>
</div>
</body>
</head>
