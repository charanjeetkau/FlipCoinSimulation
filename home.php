<?php
include "nav.php";
?>


<div class="col-md-10">

<div class=main">


    <main class="bg-gradient text-dark main-content vh-100 ">

      <div class="px-3 pt-3 fw-bolder mb-5 d-flex justify-content-between">
        <h1 class="p-2 fs-3 text-center" style="color: #139f95; text-shadow:3px 3px 3px pink; ">Welcome to Dashboard, Pradeep!</h1>
      </div>

      <div class="ms-3">
        <h2 class="fw-bolder">Search</h2>

        <div class="d-flex">
          <form action="/search/" method="get" style="width: 80%">
            <div class="input-group mb-3">
              <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Enter Location or City"
              />
              <button type="submit" class="btn" style="background-color:#83BAE3">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </form>


          <button
            data-bs-toggle="collapse"
            data-bs-target="#filter"
            aria-expanded="false"
            class="bg-dark btn filter text-light btn-toggle collapsed"
            style="
              width: fit-content;
              height: min-content;
              border-radius: 3px;
              margin-left: 4%;">
            <i class="fa fa-filter px-1" aria-hidden="true"></i><span class="s-txt">Filter</span>
          </button>

        </div>

        

        <div
            id="filter"
            class="under collapse py-2 w-100 bg-dark justify-content-between shadow-lg"
            style="border: 3px solid rgb(231, 231, 231); margin-right: 2%">
            <span class="d-flex">
                    <div class="mx-2" id="bhk">
                            <button
                              type="button"
                              id="bhte"
                              class="btn btn-secondary dropdown-toggle"
                              style="font-size: 15px"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              data-bs-offset="0,5"
                            >
                              BHK
                            </button>
                    </div> 
        </div>
        
        
      <div class="container-xxl">
        <p class="w-100 text-center text-black fw-bold" ></p>
        
          <div
            class="rounded bg-gradient text-black shadow-lg  my-3 both"
            style="background-color: #f0f0f0"> 

                    <div class="row">

                          <div class="col-md-2">
                          <span class="d-flex align-items-center justify-content-center home">
                            <!-- images/Edunext_QR_Code.jpeg -->
                            
                            <img src="../images/pulin.jpeg" class="rounded p-1 w-100">
                          </span>
                          </div>

                   <!--  </div> -->

                          <div class="col-md-10">
                              <span class="d-flex justify-content-between">
                                  <p class="ps-3 pt-3 text-success-emphasis fw-bold">
                                    350 sqft residential property for  at
                                    <span id="price">250000</span>
                                  </p>
                                  <a href="/delete/2" class="text-decoration-none">
                                    <button class="btn btn-danger m-1 fw-bolder">X</button></a>
                              </span>

                                <h4 class="w-100 text-break ps-3">
                                  Pulin CHS (residential)
                                </h4>
                                <span class="d-flex justify-content-between px-3">
                                  <p>1RK BHK / 350 sqft</p>
                                  <p>Flat</p>
                                  <p class="text-info-emphasis fw-bold">
                                    ₹<span id="price"> 250000 </span> / sell
                                  </p>
                                  <p>5/10 Floor</p>
                                </span>

                                <div class="px-3 scroll text-break">one rk recently renewated </div>
                                <span class="d-flex">
                                  <p class="w-75 text-break px-3 m-0 text-info-emphasis">
                                    room no 4 , plot 34  sector 4 
                                  </p>
                                  <p class="w-25 pe-3 fw-bold" style="float: right">
                                    Posted on July 26, 2023
                                  </p>
                                </span>
                          </div>


                    </div>
        
          </div>
        
    </div>
    </main>

</div>
</div>
</div>
</div>

</body>
</html>






<script type="text/javascript">
  var slider = document.getElementById("myRange");

  function valuebhk(data) {
    localStorage.setItem("bhk", data);
    const bhk = document.getElementById("bhte");
    bhk.innerText = data;
  }
  function area(data) {
    localStorage.setItem("area", data);
    const area = document.getElementById("arte");
    area.innerText = data;
  }
  function sell(data) {
    const show = document.getElementById("show");
    show.innerText = data;
  }

  function displ() {
    let fil = document.getElementById("filter");
    if (fil.style.display == "none") {
      fil.style.display = "flex";
    } else {
      fil.style.display = "none";
    }
  }
  function need(data) {
    let areabtn = document.getElementById("area");
    let bhkbtn = document.getElementById("bhk");
    let sh = document.getElementById("ned");
    sh.innerText = data;
    if (data === "Residential") {
      bhkbtn.style.display = "";
      areabtn.style.display = "none";
    }
    if (data === "Corporate" || "Land") {
      bhkbtn.style.display = "none";
      areabtn.style.display = "block";
    }
  }
  function work() {
    let bhk = document.getElementById("bhte");
    let area = document.getElementById("arte");
    let link =
      "?type=" +
      ned.innerText.trim() +
      "&bhk=" +
      bhk.innerText.trim() +
      "&area=" +
      area.innerText.trim() +
      "&status=" +
      show.innerText.trim();
    console.log(link);
    window.location.href = link;
  }

  let x = document.querySelectorAll("#price");
  for (let i = 0, len = x.length; i < len; i++) {
    let num = Number(x[i].innerHTML).toLocaleString("en-IN");
    x[i].innerHTML = num;
    x[i].classList.add("₹");
  }

</script>

<style>
  div.scroll {
    width: 80%;
    max-height: 100px;
    overflow-x: auto;
    overflow-y: scroll;
    margin-bottom: 10px;
  }
</style>