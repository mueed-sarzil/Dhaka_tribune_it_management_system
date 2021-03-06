<!DOCTYPE html>
<html>
<head>
	<title>Employee-Delete|DT IT</title>
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
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=submit] {
  background-color: red;
  border: none;
  color: white;
  padding: 12px 30px;
  text-decoration: none;
  margin: 4px 7px;
  cursor: pointer;
}
body {
  background-color: lightblue;
}
</style>
</head>
<body>
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

     
<div style="margin-left:25%;padding:1px 10px;height:100px;">
    <div><h1 style="color: blue;" align="center">Dhaka Tribune IT</h1>
    <h3 style="color: blue;">Welcome To {{ Session::get('uname')}}</h3>
</div><hr>
		<h1 align="center">Budget Delete</h1>
	<table align="center">
		<tr>
			<td>Expenditure:{{$acc['expen']}}</td>
			<td></td>
		</tr>
		<tr>
			<td>January:{{$acc['jan']}}</td>
			<td></td>
		</tr>
		<tr>
			<td>February:{{$acc['feb']}}</td>
			<td></td>
		</tr>
		<tr>
			<td>March:{{$acc['mar']}}</td>
			<td></td>
		</tr>
		<tr>
			<td>April:{{$acc['apr']}}</td>
			<td></td>
		</tr>
    <tr>
      <td>May:{{$acc['may']}}</td>
      <td></td>
    </tr>
    <tr>
      <td>Jun:{{$acc['jun']}}</td>
      <td></td>
    </tr>
    <tr>
      <td>July:{{$acc['july']}}</td>
      <tr>
      <td>August:{{$acc['aug']}}</td>
      <td></td>
    </tr>
    <tr>
      <td>September:{{$acc['sep']}}</td>
      <td></td>
    </tr>
    <tr>
      <td>October:{{$acc['oct']}}</td>
      <td></td>
    </tr>
    <tr>
      <td>November:{{$acc['nov']}}</td>
      <td></td>
    </tr>
    <tr>
      <td>December:{{$acc['decem']}}</td>
      <td></td>
    </tr>
      <td></td>
    </tr>
		
	</table>
	<div align="center">
	<h2>Are you sure?</h2>
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" name="accId" value="{{$acc['id']}}">
		<input type="submit" name="confirm" value="Confirm">
	</form>
</div>
</body>
</html>