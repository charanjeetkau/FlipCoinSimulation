<?php
include "nav.php";
?>


<div class="col-md-10">

<div class=main">


<main class="main-content bg-body-secondary vh-100 pt-3 py-4">
      <div class="text-center text-grey">
        <h1 class="p-2 fs-3 fw-bolder text-center" style="color: grey; text-shadow:3px 3px 3px #A5D7D7; ">Land</h1>
      </div>
      <div>
        <div class="rounded d-flex justify-content-center">
          <form method="post" action="onland?user=pradeep" style="align-self: center;display: block;width:95%;" enctype="multipart/form-data">
            <input type="hidden" name="csrfmiddlewaretoken" value="o3HX2YVVuSiSWzYDIbFwAYWsZkg7BUuMNpOXdNDX0uLkbA67G0JmCyq1Rjsut9p5">
            <input type="number" name="area" class="form-control w-100 my-1 " placeholder="area (foot)" />
      
            <input type="number" name="price" class="form-control w-100 my-1" placeholder="Price" />
            
            <input type="text" name="location" class="form-control w-100 my-1" placeholder="Location" />
     
            <textarea type="text" class="form-control w-100 text-left my-1" placeholder="Description" name="desc" style="height: 100px; overflow-y: scroll"
            ></textarea>

            <div class="btn-group my-4 mx-2 d-block" role="group" id="corporate" aria-label="Basic radio toggle button group" >
              <input type="radio" class="btn-check  " name="type" id="btnradio5" value="Evergreen" autocomplete="off" checked />

              <label class="btn btn-outline-primary btnBgColor" for="btnradio5" >Evergreen</label >

              <input type="radio" class="btn-check" name="type" id="btnradio6" value="Fertile" autocomplete="off"/>

                <label class="btn btn-outline-primary btnBgColor" for="btnradio6" >Fertile</label>

              <input type="radio" class="btn-check" name="type" id="btnradio7" value="Non-Fertile" autocomplete="off" />

                <label class="btn btn-outline-primary btnBgColor" for="btnradio7" >Non-Fertile</label >

              <input type="radio" class="btn-check" name="type" id="btnradio8" value="Dry" autocomplete="off" />

                <label class="btn btn-outline-primary btnBgColor" for="btnradio8">Dry</label>

            </div>

            <input type="file" name="img" class="form-control w-100 my-1 chooseFile"/>
            <div class="btn-group my-4 mx-2" role="group" aria-label="Basic radio toggle button group" >

                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="sell" autocomplete="off" checked />

                <label class="btn btn-outline-primary btnBgColor" for="btnradio1"
                  >Sell</label
                >

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="rent" autocomplete="off" />
                <label class="btn btn-outline-primary btnBgColor" for="btnradio2"
                  >Rent</label>
              </div>
              <br/>
              <span class="d-flex justify-content-center">

              <button type="submit" name="submit" class="btn fw-bolder progress-bar-striped progress-bar-animated text-light btn-success rounded-pill w-75  p-3">
              Post
            </button>
            </span>
          </form>
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