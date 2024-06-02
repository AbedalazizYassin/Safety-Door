<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div style="object-fit: fill; width: 100%; height: 100%;">
        <div style="color: white;background-color: white;width: 100%;">
      <nav class="navbar navbar-expand-lg " style="background-color: white;">
            <div class="container-fluid" style="background-color: white; ">
            <a style="font-weight: bold ;color: black;margin-left: 100px;             "    class="navbar-brand" href="#" id="90"><div style="display: flex;"><p> <h4 style="color: #E61E26; font-weight: bold ; ">Safety</h4></p><p style="width: 6px;"></p><p><h4 style="font-weight: bold ;">Doors</h4></p></div>
               </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <form class="d-flex" role="search" style="margin-left: 50px;" >
                <input class="form-control me-2" type="search" placeholder="What product are you looking for?" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" style="color: red; border-color: red;">Search</button>
              </form>
              <div class="collapse navbar-collapse" id="navbarText"  style="margin-left: 50px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a    class="nav-link active" aria-current="page" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a    class="nav-link active" aria-current="page" href="#">|</a>
                    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a    class="nav-link active" aria-current="page" >|</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a    class="nav-link active" aria-current="page" >|</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">sign in</a>
                  </li>
                </ul>
               
              </div>
            </div>
          </nav>
        </div>
        <div style="padding-top: 20px; "></div>
      <div style="background-color: #E61E26; width: 100%; "><i class="fa-solid fa-phone" style="color: white; margin-left: 180px; font-size: 13px;"></i>
      <a href="https://wa.me/+96176845208" style="margin-left: 5px;font-size: 13px;color: white;text-decoration: none;font-weight: bold;">76 845 208</a>
      <a href=""style="margin-left: 5px;font-size: 13px;color: white;text-decoration: none;">_Contact Us</a>
      <i class="fa-solid fa-truck" style="margin-left: 34px;font-size: 13px;color: white;"></i>
      <a style="margin-left: 5px; color: white;font-weight: bold;font-size: 13px;">Free Delivery on Doors</a>
      <a style="margin-left: 5px;font-size: 13px;color: white;text-decoration: none;">_All Vat included</a>
      <i class="fa-solid fa-lock" style="margin-left: 34px;font-size: 13px;color: white;"></i>
      <a style="margin-left: 5px; color: white;font-weight: bold;font-size: 13px;">Secure Purshase</a>
      <a style="margin-left: 5px;font-size: 13px;color: white;text-decoration: none;">_SSL%PCI Compliant</a>
      <i class="fa-solid fa-star" style="margin-left: 34px;font-size: 13px;color: white;"></i>
      <i class="fa-solid fa-star" style="font-size: 13px;color: white;"></i>
      <i class="fa-solid fa-star" style="font-size: 13px;color: white;"></i>
      <i class="fa-solid fa-star" style="font-size: 13px;color: white;"></i>
      <i class="fa-regular fa-star-half-stroke" style="font-size: 13px;color: white;"></i>
      <a style="margin-left: 5px; color: white;font-weight: bold;font-size: 13px;">2143 reviews</a>
      </div>
    </div>


    <div style="height: 40px;"></div>
    <center>
        <h1 style="font-weight: bold;">Login</h1>
        <div style="height: 40px;"></div>
        <h7 style="font-weight: bold;">Email</h7>
        <div style="height: 5px;"></div>
        <form action="login_action.php" method=post >
        <div class="form-floating mb-3" style="padding-left: 20%;padding-right: 20%;">
            <input type=email class="form-control" id="floatingInput"  name="txt_email">
            
          </div>
          <div style="height: 40px;"></div>
          <h7 style="font-weight: bold;">Password</h7>
          <div style="height: 5px;"></div>
        <div class="form-floating mb-3" style="padding-left: 20%;padding-right: 20%;">
            <input type=text class="form-control" id="floatingInput"  name="txt_password" >
            
          </div>
          <div style="height: 50px;"></div>
          <button type=submit value="Login" class="btn btn-danger">Login </button>

        </form>
    </center >
    <div style="height: 50px;"></div>
    <div style="background-color: #EAEAEA;">
  <center style=" text-align: center; padding-top: 30px;"><p style="font-weight: bold;">Email: <a href="#" style="text-align: center; color: #050505 ; font-weight: 400;text-decoration: none;">info@safetydoors.com</a

    >
    <a href="" style="padding-left: 10px;"></a>
    
  <a style="font-weight: bold;">Phone:</a>
  <a href="#" style="text-align: center; color: #050505 ; font-weight: 400;text-decoration: none;">+961 76 845 208</a

    >
  </p>
    
  </center>
  <center><a href=""  style="color: black; text-decoration: none;">About Us</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href="" style="color: black; text-decoration: none;">FAQ</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href=""  style="color: black; text-decoration: none;">Contact Us</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href="" style="color: black; text-decoration: none;">Delivery</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href=""  style="color: black; text-decoration: none;">My Account</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href="" style="color: black; text-decoration: none;">Blog</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href=""  style="color: black; text-decoration: none;">Help&Advice</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href="" style="color: black; text-decoration: none;">Gallery</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href=""  style="color: black; text-decoration: none;">Trade Application</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href="" style="color: black; text-decoration: none;">What is Handing?</a>
    <a href="" style="padding-left: 10px;"></a>
    <a href="" style="color: black; text-decoration: none;">Customer Service Opening Hours</a>
    
    
  </center>
  <div style="height: 10px;"></div>
  <center>
    <a href=""><i class="fa-brands fa-square-facebook" style="font-size:24px"></i></a>
    <a href="" style="padding-left: 10px;"></a>
    
    <a href=""><i class="fa-brands fa-twitter" style="font-size:24px"></i></a>
    <a href="" style="padding-left: 10px;"></a>
    
    <a href=""><i class="fa-brands fa-pinterest" style="font-size:24px"></i></a>
    <a href="" style="padding-left: 10p29x;"></a>
    <a href=""><i class="fa-brands fa-youtube" style="font-size:24px"></i></a>
    <a href="" style="padding-left: 10px;"></a>
    <a href=""><i class="fa-brands fa-instagram" style="font-size:24px"></i></a>
  </center>
  <div style="height: 20px"></div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    
</body>
</html>