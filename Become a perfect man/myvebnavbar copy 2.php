    <?php
    // You can add any PHP code here if needed
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Become a Perfect Man</title>
      <!-- slick slider -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

      <!-- Bootstrap CSS -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

      <!-- Your Custom CSS -->
      <link rel="stylesheet" href="navbar.css">
    
        <!-- Slick CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- Slick Theme CSS (optional) -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

      
        <style>
  .slider-container {
                    width: inherit;
                    margin: 0 auto; 
                    position: relative;
                    height: 700px;
                    margin-bottom: 20px;
                    padding-left: 0; 
                    
  }

          
  .slider div {
              padding: 0;
              margin: 0; 
              max-height: 700px;
  }

          
  .slider img {
                max-height: 1000px ;
                width: 100%;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  }
  .navbar-brand img {
        margin-top: 5px;
        width: 200px; 
        height: auto; 
  }

  .navbar {
        height: 120px;
        padding: 0.5rem 1rem;
  }
  .navbar-toggler {
        border-color: rgba(0, 0, 0, 0.1); 
  }
  .navbar-toggler-icon {
                      color: black !important;
                      z-index: 3; 
  }
  .nav-list {
          display: flex; 
          list-style-type: none; 
          padding: 0; 
          margin: 0; 
  }

      .nav-list li {
          margin-right: 40px; 
          line-height: 100px;
      }

      .navrow {
        
    
      min-height: 100px; 
      padding: 20px 0; 
    
    }
    .nav-list li a {
      color: black;
      text-decoration: none;
    }
    .formalign{
      margin-top: 38px;
    }
    .TxtAtag{
      text-decoration: none;
      color: black;
      line-height: 100px;
      margin-right: auto;
      font-size: 12px;
    }
    .searchbarstyle {
          width: 90%; /* Set the input width to 100% */
          box-sizing: border-box;
          height: 70px; /* Ensure padding is included in the width */
          background-color: transparent;
        color: white;
        margin: 15px 150px 15px 30px;
        outline-style: hidden;
        outline: none;
        font-size: 30px;
        border:none;
      }
      .searchbarstyle::placeholder {
        color: white; /* Change this to your desired color */
        opacity: 1;  /* Opacity of the placeholder (1 is fully opaque) */
    }
      .searchdiv{
        z-index: 1;
        display: none;
        position: relative;
        width: 100%;
        height: 100px;
        color: white;
        background-color: rgba(0, 0, 0, 0.8)  ;

      }
      .searchBtnOuternav{
        border: none;
        font-size: 30px;
        color: black;
        background-color: white;
        outline: none;
        line-height: 10px;
      }
      .searchbutton {
              position: absolute;
              right: 50px;
              top: 22px;
              height: 55px;
              width: 60px;
              border: none;
              background: transparent;
              cursor: pointer;
              color: white;
          }
          .searchBtnOuternav:focus, .searchbutton:focus, .btnoftoggle:focus {
        outline: none; 
        border: none;
    }

      .searchbutton i {
              font-size: 30px;
              color: white;
          }

  
    .btnoftoggle{
      
    
      background-color: white;
    border: none;
    outline: none;
    font-size: 30px;
    }
    .searchsidebarbtn{
    
      line-height: 100px;
      right: 30px;
      position: absolute;
      display: none;
      top: 19px;
    z-index: 100;
    }
    

    .sticky-top {
      z-index: 100;
    position: -webkit-sticky; /* For Safari */
    position: sticky;
    top: 0; /* Ensure top offset is set */
  }
  *{
    box-sizing: border-box;
    margin: 0%;
    padding: 0%;
  }

          @media screen and (max-width: 1430px) {
            .nav-list li {
              margin-right: auto;
            }
    }
    @media screen and (max-width: 1200px) {
            .navhide,.searchbtnhide{
            display: none;
            }
            .searchsidebarbtn {
              display: block;
            }
            .TxtAtag{
            position: relative;
            right: -92%;
            top: -63px;
            line-height: 1px;
            }
            .nav-list{
              flex-direction: row;
              margin: auto;
              line-height: 10px;
            }
            .nav-list li{
              margin:auto;
            }

    }
    @media screen and (max-width: 900px) {
      .nav-list{
        flex-direction: column;
        margin-right:5px;
        line-height: 0%;
        background-color: blue;
        width: 20%;

      }
      .nav-list li a{
              margin:auto;              

            }
            .nav-list li{
              line-height: 5px;
              padding: 7px;
              margin: 10px 10px 10px  ;
            }
            .searchbtnnone{
              display: none;
            }
            .searchdiv{
              position: relative; /* or absolute, depending on your layout */
    top: 50px;          /* Adjust top position */
    left: 20px;         /* Adjust left position */
    
    /* Optional: Adjust other properties like margin, padding, etc. */
    margin-top: 20px;
    z-index: 1000;
  }
  .searchbarstyle{
    width: 91%;
    margin-top: 0px;
    height: inherit;
    margin-left: 5px;
    font-size: 20px;
  } 
  .searchbutton{
    right: 5px;
    height: 38px;
    width: 50px;
    top: 10px;
    font-size: 20px;
  }     
 .searchdiv{
  max-width:  52%;
  left: 275px;
  top: -40px;
  margin-top: -55px;
  z-index: 1000;
  height: 50px;
  border-radius: 25px ;

 }
    }

    @media screen and (max-width: 790px){
      .searchdiv{left: 252px;}
    }
    @media screen and (max-width: 660px){
      .searchdiv{left: 230px;}
    }
    @media screen and (max-width: 610px){
      .searchbtnnone{
              display: block;
              position: relative;
              top: 63px;
              right: 58px;
            }
            .searchsidebarbtn{
              right: 30px;
              top: -11px;
            }
            .searchdiv{
              top: 54px;
              max-width: 100%;
              left: 0%;
              border-radius: 0px;
            }
    }

      </style>
    </head>
    <body>
    <div class="container-fluid">
      <!-- Bootstrap Navbar -->
      <nav class="bg-white row  sticky-top  navrow">
        <div class="col-xl-2 ">
        <a class="" href="#home">
          <img src="./logo/Screenshot from 2024-09-15 20-02-16.png" alt="Perfect Man Logo" width="200px" height="100px  " class="d-inline-block align-top">  
        </a>
        </div>
        
        <div class="col-xl-9 navhide ">
        <ul class="nav-list" >
            <li class="">
              <a class="" href="#home">Home</a>
            </li>
            <li class="">
              <a class="" href="#habit-tracker">Habit Tracker</a>
            </li>
            <li class="">
              <a class="" href="#success-stories">Success Stories</a>
            </li>
            <li class="">
              <a class="" href="#life-strategies">Life Strategies</a>
            </li>
            <!-- <li class="">
              <a class="" href="#quran-hadith">Quran & Hadith</a>
            </li> -->
            <li class="">
              <a class="" href="#blog">Blog</a>
            </li>
            <li class="">
              <a class="" href="#about">About</a>
            </li>
            <li class="">
              <a class="" href="#contact">Contact</a>
            </li >
            <li class="">      <a class="" href="#contact">Login/SignUp</a>
            </li>
          </ul>
        </div>
        <div class="col-xl-1  formalign searchbtnhide">
            <button class="searchBtnOuternav" type="submit"><i class="fas fa-search"></i></button>
        </div>
        <!-- <div class="col-xl-1  navhide">
        <a class=" TxtAtag " href="#contact">Login/SignUp</a>
        </div> -->
        </div>
        <div>
        <div class="searchsidebarbtn">
        <button class="searchBtnOuternav searchbtnnone" type="submit"><i class="fas fa-search"></i></button>
        <button class="btnoftoggle" id="btnforshowmenu"><i class="fa-solid fa-bars"></i></button>
        </button>
        </div>
        </div>
      </nav>
      <nav class="row">
      <div class="col-12 searchdiv">
            <input class="searchbarstyle" type="search" placeholder="Search" aria-label="Search" name="query" required>
            <button class="searchbutton" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </nav>
      <div class="slider-container">
            <div class="slider">
                <div><img src="./slidimg/1.jpg" alt="Slide 1"></div>
                <div><img src="./slidimg/2.jpg" alt="Slide 2"></div>
                <div><img src="./slidimg/3.jpg" alt="Slide 3"></div>
                <div><img src="./slidimg/4.jpg" alt="Slide 4"></div>
                <div><img src="./slidimg/5.jpg" alt="Slide 5"></div>
                <div><img src="./slidimg/6.jpg" alt="Slide 6"></div>
                <div><img src="./slidimg/7.jpg" alt="Slide 7"></div>
            </div>
        </div>
    
        <div class="divafterslider">

      <!-- Main Section -->
      <div class="main-section text-center" id="home">
        <h1>Welcome to Become a Perfect Man</h1>
        <p>Your journey to a better self begins here.</p>
      </div>

      <!-- Success Stories Section -->
      <div class="content-section" id="success-stories">
        <h2>Success Stories</h2>
        <p>Read inspiring stories of individuals who transformed their lives and achieved greatness.</p>
      </div>

      <!-- Life Strategies Section -->
      <div class="content-section" id="life-strategies">
        <h2>Life Improvement Strategies</h2>
        <p>Learn proven strategies from the Quran and Hadith for a balanced and fulfilling life.</p>
      </div>
      </div>
      
    </div>
    </div>
    <!-- slick slider -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- jQuery (required for Slick) -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Slick JS -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <!-- Initialize Slick Slider -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slider').slick(
                  {
                    dots: true,           // Show dots navigation
                    infinite: true,       // Loop through slides
                    speed: 300,           // Slide transition speed
                    slidesToShow: 1,      // Number of slides to show at once
                  adaptiveHeight: true, // Adjust height based on content
                arrows: true,         // Show next/prev arrows
                    autoplay: true,       // Autoplay slider
                    autoplaySpeed: 2000,  // Speed of autoplay (2 seconds)
                }
              );
            });
        </script>
    <script>
      // $(document).ready(function (){
      //   $(".searchBtnOuternav").click(function(){
      //     $(".searchdiv").slideToggle(300, function(){
      //       if($(this).is(':visible')){
      //       $(".searchbarstyle").focus();
      //       //$('.slider-container').css('top', '-100px');
      //       $(".searchBtnOuternav i").removeClass("fa-search").addClass("fa-times"); // Replace search icon with cross
      //           } else {
      //               $(".searchBtnOuternav i").removeClass("fa-times").addClass("fa-search"); // Replace cross icon with search
      //           }
      //     })
      //   });
      //   $("#btnforshowmenu").click(function(){
      //     $(".navhide").slideToggle(300);

      //   });
      // });
      $(document).ready(function(){
      function toggleSearchOnScreenResized() {
    var screenWidth = $(window).width();

    if (screenWidth <= 900 && screenWidth > 610) {
        $(".searchdiv").slideDown(300); 
    } else {
        $(".searchdiv").slideUp(300); 
    }
}
toggleSearchOnScreenResized();
$(window).resize(function () {
    toggleSearchOnScreenResized();
});
    $(".searchBtnOuternav").click(function () {
        $(".searchdiv").slideToggle(300, function () {
            if ($(this).is(':visible')) {
                $(".searchbarstyle").focus();
                $(".searchBtnOuternav i").removeClass("fa-search").addClass("fa-times"); // Replace search icon with cross
            } else {
                $(".searchBtnOuternav i").removeClass("fa-times").addClass("fa-search"); // Replace cross icon with search
            }
        });
    });
    $("#btnforshowmenu").click(function () {
        $(".navhide").slideToggle(300);
    });
});

    </script>
    </body>
    </html>
