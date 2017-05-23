<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/poststyle.css">
    <style>
        .btn{
            width:15px;
            height:20px;
            background-color: red;
            padding:10px;
        }
    </style>
</head>
<body>
    <h1>Company Details<a href="{{route('home')}}">Home</a></h1> 


    <form method="POST" action="/revoke_role">
            {{csrf_field()}}
    <div class="form-group">
         <table class="table">
    
      <tr>
        <th>Company Name</th>
        <td>{{$companies['company']->company}}</td>
      </tr>

      <tr>
        <th>Company Personel</th>
        <td>{{$companies['company']->user->name}}</td>
      </tr>

      <tr>
        <th>Email</th>
        <td>{{$companies['company']->user->email}}</td>
      </tr>

      <tr>
        <th>Address</th>
        <td>{{$companies['company']->address}}</td>
      </tr>

       <tr>
        <th>Website</th>
        @if($companies['company']->website != null)
        <td>{{$companies['company']->website}}</td>
        @else
        <td>Not Specified</td>
        @endif

      </tr>

      <tr>
        <th>Description</th>
        <td>{{$companies['company']->comp_desc}}</td>
      </tr>

      <tr>
            <td> <a href="{{route('edit_company', $companies['company']->id)}}">Edit</a></td>
            <td> <a href="{{route('delete_company', $companies['company']->id)}}">Delete</a>
             </td>
      </tr>
   
   
</table>
</div>          
          <!-- <div class="form-group">
            <button type="submit" class="btn btn-primary">Revoke Role</button>
          </div> -->

        
    </form>
</body>
</html>