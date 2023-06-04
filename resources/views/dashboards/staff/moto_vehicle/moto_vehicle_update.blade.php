@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<title>VVIS</title>

<style>

  html, body{
    background-color: dark;
  }
    .w3-bar-item{
        background-color: orangered;
        color: white;
    }

    .box-container{
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 10px;
        padding: 5px;
    }
    .sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.box-container{
        margin-top: 20px;
        margin-left: 40px;
        margin-right: 80px;
        padding: 5px;
        align-content: center;


    }
    .down-container{

    }


    .circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: darkblue;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

h2{
    color: orange !important;
    background-color: black;
}
 p{
    color: white;
}
.logo{
    height: 120px;
  width: 120px;
  float: left;
  margin-left: 20px;
  margin-top: 9px;
  margin-bottom: 2px;
  position: relative;
}
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

*{
	list-style: none;
	text-decoration: none;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
}

body{
	background: #f5f6fa;
}

.wrapper .sidebar{
	background: rgb(5, 68, 104);
	position: fixed;
	top: 0;
	left: 0;
	width: 225px;
	height: 100%;
	padding: 20px 0;
	transition: all 0.5s ease;
    margin-top: 55px;
}

.wrapper .sidebar .profile{
	margin-bottom: 30px;
	text-align: center;
}

.wrapper .sidebar .profile img{
	display: block;
	width: 100px;
	height: 100px;
    border-radius: 50%;
	margin: 0 auto;
}

.wrapper .sidebar .profile h3{
	color: #ffffff;
	margin: 10px 0 5px;
}

.wrapper .sidebar .profile p{
	color: rgb(206, 240, 253);
	font-size: 14px;
}

.wrapper .sidebar ul li a{
	display: block;
	padding: 13px 0px;
	border-bottom: 1px solid #10558d;
	color: rgb(241, 237, 237);
	font-size: 16px;
	position: relative;
}

.wrapper .sidebar ul li a .icon{
	color: #dee4ec;
	width: 30px;
	display: inline-block;
}



.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
	color: #0c7db1;
	background:white;
    border-right: 2px solid rgb(5, 68, 104);
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
	color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
	display: block;
}

.wrapper .section{
	width: calc(100% - 225px);
	margin-left: 225px;
	transition: all 0.5s ease;
}

.wrapper .section .top_navbar{
	background: rgb(7, 105, 185);
	height: 50px;
	display: flex;
	align-items: center;
	padding: 0 30px;

}

.wrapper .section .top_navbar .hamburger a{
	font-size: 28px;
	color: #f4fbff;
}

.wrapper .section .top_navbar .hamburger a:hover{
	color: #a2ecff;
}

 .wrapper .section .container{
	margin: 10px;
	background: transparent;
	padding: 30px;
	line-height: 28px;
}

body.active .wrapper .sidebar{
	left: -225px;
}

body.active .wrapper .section{
	margin-left: 0;
	width: 100%;
}
@media only screen and (max-width:800px) {
            #no-more-tables tbody,
            #no-more-tables tr,
            #no-more-tables td {
                display: block;
            }
            #no-more-tables thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            #no-more-tables td {
                position: relative;
                padding-left: 50%;
                border: none;
                border-bottom: 1px solid #eee;
            }
            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
            #no-more-tables tr {
                border-bottom: 1px solid #ccc;
            }
}


</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mainpower.css">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
</head>
<body>

  <div class="wrapper">
    <div class="section">
 <div class="top_navbar">
   <div class="hamburger">
     <a href="#">
       <i class="fas fa-bars"></i>
     </a>
   </div>
 </div>

 <div class="box-container">
    <div class="row">

 <div class="container">

    <div class="down-container">
        <div class="row">
            <section class="bg-light p-5">
                <h3 class="pb-2">Motor Vehicle Impounding Receipt (Update)</h3>
                <div class="card-body">
                    <div class="panel-body">
                        <form action="{{ route('moto.update', $moto_vehicle->id)}}" method="POST">
                            <input type="hidden" name="_method" value="PATCH">

                            @csrf

                            <div class="form-group">
                                <label for="ownerofthevehicle">Owner of the Vehicle </label>
                                <input class="form-control" type="text" name="ownerofthevehicle" value="{{$moto_vehicle->ownerofthevehicle}}" required>
                            </div>

                            <div class="form-group">
                                <label for="telephonenumber">Telephone Number </label>
                                <input class="form-control" type="number" name="telephonenumber" value="{{$moto_vehicle->telephonenumber}}" required>
                            </div>
                            <div class="form-group">
                                <label for="completeaddress">Complete Address</label>
                                <input class="form-control" type="text" name="completeaddress" value="{{$moto_vehicle->completeaddress}}" required>
                            </div>

                            <div class="form-group">
                                <label for="completenameofthedriver">Complete Name of Driver </label>
                                <input class="form-control" type="text" name="completenameofthedriver" value="{{$moto_vehicle->completenameofthedriver}}" required>
                            </div>

                            <div class="form-group">
                                <label for="license_number">License Number</label>
                                <input class="form-control" type="number" name="license_number" value="{{$moto_vehicle->license_number}}" required>
                            </div>

                            <div class="form-group">
                                <label for="dlrno">DLR Number</label>
                                <input class="form-control" type="number" name="dlrno" value="{{$moto_vehicle->dlrno}}" required>
                            </div>

                            <div class="form-group">
                                <label for="mvplateno">MV Plate No.</label>
                                <input class="form-control" type="number" name="mvplateno" value="{{$moto_vehicle->mvplateno}}" required>
                            </div>

                            <div class="form-group">
                                <label for="makeofthevehicle">Make of Vehicle </label>
                                <input class="form-control" type="text" name="makeofthevehicle" value="{{$moto_vehicle->makeofthevehicle}}" required>
                            </div>

                            <div class="form-group">
                                <label for="typeofthebody">Type of the Body</label>
                                <input class="form-control" type="text" name="typeofthebody" value="{{$moto_vehicle->typeofthebody}}" required>
                            </div>

                            <div class="form-group">
                                <label for="yearmodel">Year Model</label>
                                <input class="form-control" type="number" name="yearmodel" value="{{$moto_vehicle->yearmodel}}" required>
                            </div>

                            <div class="form-group">
                                <label for="motono">Motor Number</label>
                                <input class="form-control" type="number" name="motono" value="{{$moto_vehicle->motono}}" required>
                            </div>

                            <div class="form-group">
                                <label for="chassisnumber">Chassis Number </label>
                                <input class="form-control" type="number" name="chassisnumber" value="{{$moto_vehicle->chassisnumber}}" required>
                            </div>
                            <h5><center>VIOLATIONS<center></h5>
                            <div class="form-group">
                                <label for="violations">Violations </label>
                                 <select class="form-select @error('violations') is-invalid @enderror" type="string" name="violations" id="violations" value="{{$moto_vehicle->violations}}" required>
                                    <option selected disabled></option>
                                    <option value="1">Defective Muffler/No Muffler </option>
                                    <option value="2">No Headlight</option>
                                    <option value="3">No Tail Light</option>
                                    <option value="4">No Signal Light</option>
                                    <option value="5">No Plate Attached</option>
                                    <option value="6">No Brake Light</option>
                                    <option value="7">Unlicense Driver/Expired DLI</option>
                                    <option value="8">Unregistred MV</option>
                                    <option value="9">Deliquent CR/OR</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="place">Place of Apprehension</label>
                                <input class="form-control" type="text" name="place" value="{{$moto_vehicle->place}}" required>
                            </div>
                            <div class="form-group">
                                <label for="datetime">Date/Time</label>
                                <input class="form-control" type="datetime-local" name="datetime" value="{{$moto_vehicle->datetime}}"  required>
                            </div>
                            <div class="form-group">
                                <label for="remarks">Remarks</label>
                                <input class="form-control" type="text" name="remarks" value="{{$moto_vehicle->remarks}}" required>
                            </div>
                            <div class="form-group">
                                <label for="condition">General Condition of the Motor Vehicle</label>
                                <input class="form-control" type="text" name="condition" value="{{$moto_vehicle->condition}}" required>
                            </div>

                            <div class="form-group">
                                <label for="vehicle">Vehicle/Tool Lists </label>
                                <select class="form-select" @error('vehicle') is-invalid @enderror" type="string" name="vehicle" id="vehicle" value="{{$moto_vehicle->vehicle}}"  required>
                                    <option selected disabled></option>
                                    <option >Air Conditioner</option>
                                    <option >Cigarette Lighter</option>
                                    <option >Ash Trays</option>
                                    <option >Antenna</option>
                                    <option >Radio</option>
                                    <option >Stereo/Speaker</option>
                                    <option >Auto Clock</option>
                                    <option >Floor Mats Pcs.</option>
                                    <option >Wiper Knobs</option>
                                    <option >Cushion Pcs.</option>
                                    <option >Seat Cover</option>
                                    <option >Rear View Mirror</option>
                                    <option >Side View Mirror</option>
                                    <option >Windshield Glass</option>
                                    <option >Hub/Caps Pcs.</option>
                                    <option >Spare Tire</option>
                                    <option >Horns</option>
                                    <option >Headlights</option>
                                    <option >EWD</option>
                                    <option >Tire Wrench</option>
                                    <option >Jack</option>
                                    <option >Pliers Pcs.</option>

                                </select>
                            </div>
                            <h5><center>CONFORME</center></h5>
                            <div class="form-group">
                                <label for="conformeowner">Owner/Driver</label>
                                <input class="form-control" type="text" name="conformeowner" value="{{$moto_vehicle->conformeowner}}" required>
                            </div>
                            <h5><center>WITNESS</center></h5>
                            <div class="form-group">
                                <label for="witness">Name of Witness</label>
                                <input class="form-control" type="text" name="witness" value="{{$moto_vehicle->witness}}" required>
                            </div>
                            <div class="form-group">
                                <label for="witnessaddress">Address</label>
                                <input class="form-control" type="text" name="witnessaddress" value="{{$moto_vehicle->witnessaddress}}" required>
                            </div>
                            <div class="form-group">
                                <label for="apprehending">Apprehending Officers</label>
                                <input class="form-control" type="text" name="apprehending" value="{{$moto_vehicle->apprehending}}" required>
                            </div>
                            <div class="form-group">
                                <label for="agency">Agency/Office</label>
                                <input class="form-control" type="text" name="agency" value="{{$moto_vehicle->agency}}" required>
                            </div>
                            <div class="form-group">
                                <label for="acknowledging">Acknowledging Officers</label>
                                <input class="form-control" type="text" name="acknowledging" value="{{$moto_vehicle->acknowledging}}" required>
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input class="form-control" type="text" name="designation" value="{{$moto_vehicle->designation}}" required>
                            </div>
                            <div class="form-group">
                                <label for="chief">Chief,Traffic Management Office</label>
                                <input class="form-control" type="text" name="chief" value="{{$moto_vehicle->chief}}" required>
                            </div>
                            <div class="form-group">
                                <label for="chiefdatetime">DateTime</label>
                                <input class="form-control" type="datetime-local" name="chiefdatetime" value="{{$moto_vehicle->chiefdatetime}}" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>
      </div>

</div>
     <div class="sidebar">
         <div class="profile">
             <img src="https://cdn3.iconfinder.com/data/icons/team-management/136/28-512.png" alt="profile_picture">
             <h3>STAFF DASHBOARD</h3>
             <p>{{ Auth::user()->name }}</p>
         </div>
         <ul>
             <li>
                 <a href="{{ route('staff.dashboard')}}">
                     <span class="icon"><i class="fas fa-home"></i></span>
                     <span class="item">Dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('moto_vehicle')}}" class="active">
                     <span class="icon"><i class="fas fa-motorcycle"></i></span>
                     <span class="item">Motor Vehicle</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('traffic_violation')}}">
                     <span class="icon"><i class="fas fa-ticket"></i></span>
                     <span class="item">Violation</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('payment.index')}}">
                     <span class="icon"><i class="fas fa-money"></i></span>
                     <span class="item">Payment</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('logout')}}">
                     <span class="icon"><i class="fas fa-sign-out"></i></span>
                     <span class="item">Logout</span>
                 </a>
             </li>
         </ul>
     </div>

 </div>

 <script>
    new MultiSelectTag('violations')  // id
    new MultiSelectTag('violations', {
    rounded: true,    // default true
    shadow: true      // default false
})
</script>


 <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

 <script>
    var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
 </script>



</body>
</html>

@endsection