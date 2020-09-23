<!DOCTYPE html>
<html>
<head>
  <title>Admin|Dhaka Tribune It</title>
<style>
body {
  margin: 0;
  background-color: lightgray;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: red;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;

}

#customers td, #customers th {
  border: 1px solid gray;
  padding: 20px;
}
#customers tr:nth-child(odd){background-color: red;

color: white;
}

#customers tr:hover{background-color: black;
color: white;
}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.button2 {
  background-color: blue;
  border: none;
  color: white;
  padding: 10px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
</style>
</head>
<body> 
<form> 
  {{@csrf_field()}}
<ul>
  <img src="/images/Logo.JPG" width="100%">
  <li><a class="active" href="{{route('admin.index')}}">My Profile</a></li>
  <li><a href="{{route('admin.create_emp')}}">Create-Employee</a></li>
  <li><a href="{{route('admin.emp-list')}}">Employee-List</a></li>
  <li><a href="{{route('admin.complain')}}">Complain</a></li>
  <li><a href="{{route('admin.complain-list')}}">Complain-List</a></li>
  <li><a href="{{route('admin.budget')}}">Budget-Form</a></li>
  <li><a href="{{route('admin.budget_show')}}">Budget-List</a></li>
  <li><a href="{{route('logout.index')}}">Logout</a></li>
</ul>

     
<div style="margin-left:25%;padding:1px 16px;height:100px;">
    <div><h1 style="color: blue;" align="center">Dhaka Tribune IT</h1>
    <h1 style="color: blue;">Welcome To <a href="{{route('admin.index')}}">{{ Session::get('uname')}}</a></h1>
</div><hr>
<h1 align="center">My-Profile</h1>

    <table id="customers" align="center">
         @foreach($profiles as $acc)
      <tr>
        <td>Name:{{$acc['name']}}</td>
      </tr>
      <tr>
      <td>Email:{{$acc['email']}}</td>
      
    </tr>
    <tr>
      <td>Phone:{{$acc['phone']}}</td>
      
    </tr>
    <tr>
      <td>Job-Title:{{$acc['title']}}</td>
     
    </tr>
    <tr>
      <td>User-Name:{{$acc['uname']}}</td>
      
    </tr>
      @endforeach
      </table>
      <div align="center">
       <a class="button2" href="{{route('admin.edit', $acc['id'])}}">Edit</a>
      </div>
</div>
</form>
</body>
</html>
