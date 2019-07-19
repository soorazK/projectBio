<html>
<head></head>
  <body>
    <h1> edit branch</h1>

 <form method="post" action="/branch/{{$branch->id}}">
        {{method_field('patch')}}
        {{csrf_field()}}
   <div class="field">
     <label class="label" for="branchName">Branch Name</label>

  <div class="control">
    <input type="text" class="input" name="branch_name" placeholder="branch_name" value="{{$branch->branch_name}}">
  </div>
</div>

<div class="field">
  <label class="label" for="location">Location</label>

<div class="control">
 <input type="text" class="input" name="location" placeholder="location" value="{{$branch->location}}">
</div>
</div>

<div class="field">
  <div class="control">
    <button type="submit" class="button is-link">Update Branch</button>
  </div>
</div>

</form>
