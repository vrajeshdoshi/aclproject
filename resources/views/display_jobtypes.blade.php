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
    <h1>Job Types <a href="{{route('home')}}">Home</a></h1> 


    <form method="POST" action="/revoke_role">
            {{csrf_field()}}
    <div class="form-group">
         <table class="table">
    <thead>

      <tr>
        <th>Job Type Title</th>
        <th style="padding-left: 50px">Description</th>
        <th>Manage Job Types</th>        
       {{-- <th>Revoke Role</th>        --}}
      </tr>
    </thead>
    <tbody>
        @foreach($jobtypes as $jobtype)
        <tr>
            <td>
                {{$jobtype['name']}}
            </td>
            <td>
               {{$jobtype['description']}}
             </td>
            
             <td>
             <a href="{{route('edit_jobtype', $jobtype['id'])}}">Edit</a>
             <a href="{{route('delete_jobtype', $jobtype['id'])}}">Delete</a>
             </td>
   
    </tr>
    @endforeach        
    </tbody>
  </table>
    </div>          
          <!-- <div class="form-group">
            <button type="submit" class="btn btn-primary">Revoke Role</button>
          </div> -->

        
    </form>
</body>
</html>