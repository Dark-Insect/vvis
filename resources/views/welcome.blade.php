<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('newLogo2.png')}}">

        <title>Vehicle Violation Information System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: url('midtrip.jpeg');
                background-size: 100%;
                background-repeat: no-repeat;
                background-color: white;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;

            }

            .content {
                text-align: center;


            }

            .title {
                font-size: 84px;
            }

            .subtitle {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                border: 2px solid orangered;
                background-color: black;
                font-size: 18px;
                border-radius: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
               /* position: absolute;
                top: 8px;
                left: 16px;
                font-size: 18px;

                */
            }


            *{
    margin: 0;
    padding: 0;
}

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

.light {
  --mainColor: black;
  --hoverColor: orangered;
  --backgroundColor: #696666;
  --darkOne: white;
  --darkTwo: #45424b;
  --lightOne: white;
  --lightTwo: white;
}

.dark {
  --mainColor: blue;
  --hoverColor: darkred;
  --backgroundColor: #192e3a;
  --darkOne: #f3f3f3;
  --darkTwo: #fff;
  --lightOne: #ccc;
  --lightTwo: #e7e3e3;
}

*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
}

.stop-scrolling {
  height: 100%;
  overflow: hidden;
}

img {
  width: 100%;
}

a {
  text-decoration: none;
}

.big-wrapper {
  position: relative;
  padding: 1.7rem 0 2rem;
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
  background-color: var(--backgroundColor);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.container {
  position: relative;
  max-width: 81rem;
  width: 100%;
  margin: 0 auto;
  padding: 0 3rem;
  z-index: 10;
}

header {
  position: relative;
  z-index: 70;
}

header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.overlay {
  display: none;
}

.logo {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.logo img {
  width: 40px;
  margin-right: 0.6rem;
  margin-top: -0.6rem;
}

.logo h3 {
  color: var(--darkTwo);
  font-size: 1.55rem;
  line-height: 1.2;
  font-weight: 700;
}

.links ul {
  display: flex;
  list-style: none;
  align-items: center;
}

.links a {
  color: var(--lightTwo);
  margin-left: 4.5rem;
  display: inline-block;
  transition: 0.3s;
}

.links a:hover {
  color: var(--hoverColor);
  transform: scale(1.05);
}

.btn {
  display: inline-block;
  padding: 0.9rem 1.9rem;
  color: #fff !important;
  background-color: var(--mainColor);
  border-radius: 16px;
  text-transform: capitalize;
  transition: 0.3s;
}

.btn:hover {
  background-color: var(--hoverColor);
  transform: scale(1) !important;
}

.hamburger-menu {
  position: relative;
  z-index: 99;
  width: 2rem;
  height: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  display: none;
}

.hamburger-menu .bar {
  position: relative;
  width: 100%;
  height: 3px;
  background-color: var(--darkTwo);
  border-radius: 3px;
  transition: 0.5s;
}

.bar::before,
.bar::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: var(--darkTwo);
  border-radius: 3px;
  transition: 0.5s;
}

.bar::before {
  transform: translateY(-8px);
}

.bar::after {
  transform: translateY(8px);
}

.big-wrapper.active .hamburger-menu .bar {
  background-color: transparent;
}

.big-wrapper.active .bar::before {
  transform: translateY(0) rotate(-45deg);
}

.big-wrapper.active .bar::after {
  transform: translateY(0) rotate(45deg);
}

.showcase-area .container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  align-items: center;
  justify-content: center;
}

.big-title {
  font-size: 1.4rem;
  color: var(--darkOne);
  text-transform: capitalize;
  line-height: 1.4;
  background-color: darkred;
  text-align:center;

}

.text {
  color: var(--lightOne);
  font-size: 1.1rem;
  margin: 1.9rem 0 2.5rem;
  max-width: 600px;
  line-height: 2.3;
}

.showcase-area .btn {
  box-shadow: 0 0 40px 2px rgba(0, 0, 0, 0.05);
}

.person {
  width: 82%;
  transform: translate(15%, 25px);
}

.toggle-btn {
  display: inline-block;
  border: none;
  background: var(--darkTwo);
  color: var(--backgroundColor);
  outline: none;
  cursor: pointer;
  height: 39px;
  width: 39px;
  border-radius: 50%;
  font-size: 1.1rem;
  transition: 0.3s;
}

.toggle-btn i {
  line-height: 39px;
}

.toggle-btn:hover {
  background: var(--mainColor);
}

.big-wrapper.light .toggle-btn i:last-child {
  display: none;
}

.big-wrapper.light .toggle-btn i:first-child {
  display: block;
}

.big-wrapper.dark .toggle-btn i:last-child {
  display: block;
}

.big-wrapper.dark .toggle-btn i:first-child {
  display: none;
}

.shape {
  position: absolute;
  z-index: 0;
  width: 500px;
  bottom: -180px;
  left: -15px;
  opacity: 0.1;
}

.copy {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  animation: appear 1s 1 both;
}

@keyframes appear {
  0% {
    clip-path: circle(30% at -25% -25%);
  }
  100% {
    clip-path: circle(150% at 0 0);
  }
}

@media screen and (max-width: 870px) {
  .hamburger-menu {
    display: flex;
  }

  .links {
    position: fixed;
    top: 0;
    right: 0;
    max-width: 450px;
    width: 100%;
    height: 100%;
    background-color: var(--mainColor);
    z-index: 95;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translateX(100%);
    transition: 0.5s;
  }

  .links ul {
    flex-direction: column;
  }

  .links a {
    color: #fff;
    margin-left: 0;
    padding: 2rem 0;
  }

  .links .btn {
    background: none;
  }

  .overlay {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    opacity: 0;
    pointer-events: none;
    transition: 0.5s;
  }

  .big-wrapper.active .links {
    transform: translateX(0);
    box-shadow: 0 0 50px 2px rgba(0, 0, 0, 0.4);
  }

  .big-wrapper.active .overlay {
    pointer-events: all;
    opacity: 1;
  }

  .showcase-area {
    padding: 2.5rem 0;
    max-width: 700px;
    margin: 0 auto;
  }

  .showcase-area .container {
    grid-template-columns: 1fr;
    justify-content: center;
    grid-gap: 2rem;
  }

  .big-title {
    font-size: 1.1rem;
  }

  .text {
    font-size: 0.95rem;
    margin: 1.4rem 0 1.5rem;
  }

  .person {
    width: 100%;
    transform: none;
  }

  .logo h3 {
    font-size: 1.25rem;
  }

  .shape {
    bottom: -180px;
    left: -150px;
  }
}

@media screen and (max-width: 470px) {
  .container {
    padding: 0 1.5rem;
  }

  .big-title {
    font-size: 0.9rem;
  }

  .text {
    margin: 1.1rem 0 1.5rem;
  }

  .showcase-area .btn {
    font-size: 0.8rem;
  }

}



        </style>
   @if (Route::has('login'))
   <div class="top-right links">
       @if (Auth::check())
           <a href="{{ url('/home') }}" style="color:white">Dashboard</a>
       @else
           <a href="{{ url('/login') }}" style="color: white">Login</a>
           <a href="{{ url('/register') }}" style="color: white">Register</a>
       @endif
   </div>
@endif

    </head>
    <body>

    <main>
        <div class="big-wrapper light">
          <img src="./img/shape.png" alt="" class="shape" />

          <header>
            <div class="container">
              <div class="logo">
                <img src="Traffic-Logo.gif" alt="Logo" />
                <h3>Traffic Management Office</h3>
              </div>

              <div class="links">
                <ul>
                  <li><a href="#">Mandate</a></li>
                  <li><a href="#">Vision</a></li>
                  <li><a href="#">Mission</a></li>
                  <li><a href="#">Pledge</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="{{ url('/login')}}" class="btn">Login</a></li>
                </ul>
              </div>


              <div class="overlay"></div>

              <div class="hamburger-menu">
                <div class="bar"></div>
              </div>
            </div>
          </header>

          <div class="showcase-area">
            <div class="container">
              <div class="left">
                <div class="big-title">
                  <h1>VEHICLE VIOLATION</h1>
                  <h1>INFORMATION SYSTEM</h1>
                </div>
                <p class="text">
                    Enforce of laws, ordinances, rules and regulations on
                    traffic and parking within the territorial jurisdiction of the city of Dumaguete, and
                    cause the apprehension of violators thereof;
                </p>
                <div class="cta">
                  <a href="{{ route('client')}}" class="btn">Get started</a>
                </div>
              </div>

              <div class="right">
                <img src="Dumaguete_seal.png" alt="Person Image" class="person"/>
              </div>
            </div>
          </div>

          <div class="bottom-area">
            <div class="container">
              <button class="toggle-btn">
                <i class="far fa-moon"></i>
                <i class="far fa-sun"></i>
              </button>
            </div>
          </div>
        </div>
      </main>

      <!-- JavaScript Files -->

      <script src="https://kit.fontawesome.com/a81368914c.js"></script>
      <script>
        // Select The Elements
var toggle_btn;
var big_wrapper;
var hamburger_menu;

function declare() {
  toggle_btn = document.querySelector(".toggle-btn");
  big_wrapper = document.querySelector(".big-wrapper");
  hamburger_menu = document.querySelector(".hamburger-menu");
}

const main = document.querySelector("main");

declare();

let dark = false;

function toggleAnimation() {
  // Clone the wrapper
  dark = !dark;
  let clone = big_wrapper.cloneNode(true);
  if (dark) {
    clone.classList.remove("light");
    clone.classList.add("dark");
  } else {
    clone.classList.remove("dark");
    clone.classList.add("light");
  }
  clone.classList.add("copy");
  main.appendChild(clone);

  document.body.classList.add("stop-scrolling");

  clone.addEventListener("animationend", () => {
    document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");
    // Reset Variables
    declare();
    events();
  });
}

function events() {
  toggle_btn.addEventListener("click", toggleAnimation);
  hamburger_menu.addEventListener("click", () => {
    big_wrapper.classList.toggle("active");
  });
}

events();

      </script>
</body>
</html>
