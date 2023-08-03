<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real Estate</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="/static/realest/jquery-3.6.4.min.js"
      type="text/javascript"
    ></script>
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/utilities/background/"
    />
    <title>Audit Questioner</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../css/style.css"
    />
  </head>




<body style="background-color: #dddddd">

<div class="container cont " style="max-width: 100%;">

    <div class="row ">

            <!-- Side Bar Container -->

        <div class="col-md-2  " style="background-color: #212529;">

            <nav class="sidebar bg-dark ">
                <center>
                <img
                src="../images/logo.png"
                class="bg-white p-3 rounded shadow-lg mt-3"
                width="170px"
                />
                </center>

            <hr />

            <div class="p-0">
                    <ul class="menu-sidebar fs-5 p-0  ">
                        <li class="ps-2 fs-5 li py-1 text-black onHover ">
                        <a href="home.php" class="text-decoration-none text-white ">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span class="s-txt fw-bold ps-2" style="font-size: 18px">Home</span>
                        </a>
                        </li>

                        <li class="ps-2 fs-5 li py-1 onHover " style="background-color: rgb(233, 236, 239)" >
                        <a href="home.php" class="text-decoration-none text-black ">
                            <i class="fa fa-tachometer pe-1" style="color: black" aria-hidden="true"></i>
                            <span class="s-txt fw-bold ps-2" style="font-size: 18px">Dashboard</span>
                        </a>
                        </li>

                        <li class="nav-link li onHover">
                        <button class="btn btn-toggle d-block align-items-center rounded border-0 collapsed text-white fw-normal" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span class="s-txt ps-3 fw-bold" style="font-size: 18px">Add Property</span>
                        </button>


                            <div class="collapse under text-black" id="home-collapse" style="background-color:#D9D9D9; ">
                                <div class="text-left menublock " >
                                    <ul
                                    class="menu fw-normal p-3 small mx-2 text-left lh-3 mx-4 "
                                    style="text-align: left; font-size: 15px;">
                                    
                                    <li class="text-left fw-normal p-1 my-1 hover " >
                                        <a href="residential.php" class="text-decoration-none fw-bolder "  style="color:#355678">Residential</a>   
                                    </li>
                                    <hr/>
                                    <li class="text-left fw-normal p-1 my-1 hover">
                                        <a href="commercial.php"  class="text-decoration-none fw-bolder " style="color:#48664A" >Commercial</a>  
                                    </li>
                                    <hr/>
                                    <li class="text-left fw-normal p-1 my-1 hover"><a href="land.php" class="text-decoration-none fw-bolder " style="color:#704D52" >Land</a> 
                                    </li>
                                    
                                    </ul>

                                </div>

                            </div>
           
            <a href="/logout" 
            class="text-decoration-none bg-danger d-flex justify-content-center align-items-center py-2 rounded zoom"
            style="position: fixed;bottom: 2%;width: 14%;color: #f0f0f0;font-size: medium;">
            <i class="fa fa-power-off" aria-hidden="true"></i>
            <span class="s-txt mx-1 fw-bold "> Logout</span>
            </a>
            

        </nav>

        </div>
    