<?php
include "nav.php";
?>    


<div class="col-md-10" >

<div class=main">


<main class="main-content bg-body-secondary pt-3 py-4" style="max-height:100%">
      <div class="text-center text-grey">
        <h1 id="head" class="text-capitalize p-2 fs-3 fw-bolder text-center" style="color: grey; text-shadow:3px 3px 3px #A5D7D7; ">residential</h1>
      </div>
      <div>
        <div class="rounded d-flex justify-content-center">
          <form method="post" action="residential?for=residential&user=pradeep" enctype="multipart/form-data" style="display: block; width: 95%;">
            <input type="hidden" name="csrfmiddlewaretoken" value="Cm5k9c1F6Lh30hAamrcAJh9V4jppxlJ31Ickk1JHCnKvfiIEkggqLRDuWiBMpAEm">


            <div class="d-flex justify-content-between ">
              <div
                class="btn-group my-4 mx-1"
                role="group"
                aria-label="Basic radio toggle button group"
              >
                <input
                  type="radio"
                  class="btn-check"
                  name="btnradior"
                  id="sellr"
                  onclick="prsho()"
                  value="sell"
                  autocomplete="off"
                  checked
                />
                <label class="btn btn-outline-primary btnBgColor" for="sellr">Sell</label>

                <input
                  type="radio"
                  class="btn-check"
                  name="btnradior"
                  id="rentr"
                  onclick="rentshow()"
                  value="rent"
                  autocomplete="off"
                />
                <label class="btn btn-outline-primary btnBgColor" for="rentr">Rent</label>
              </div>
            </div>
            
              <input
                type="number"
                name="area"
                class="form-control w-100"
                placeholder="Area"
              />
              

              
                <div
                  class="btn-group my-4 mx-1 d-block"
                  role="group"
                  aria-label="Basic radio toggle button group"
                >
                  <input
                    type="radio"
                    class="btn-check"
                    name="bhk"
                    id="1rk"
                    value="1RK"
                    autocomplete="off"
                    checked
                  />
                  <label class="btn btn-outline-primary btnBgColor" for="1rk">1 RK</label>

                  <input
                    type="radio"
                    class="btn-check"
                    name="bhk"
                    id="1bhk"
                    value="1BHK"
                    autocomplete="off"
                  />
                  <label class="btn btn-outline-primary btnBgColor" for="1bhk"
                    >1 BHK</label
                  >

                  <input
                    type="radio"
                    class="btn-check"
                    name="bhk"
                    id="2bhk"
                    value="2BHK"
                    autocomplete="off"
                  />
                  <label class="btn btn-outline-primary btnBgColor" for="2bhk"
                    >2 BHK</label
                  >
                  <input
                    type="radio"
                    class="btn-check"
                    name="bhk"
                    id="3bhk"
                    value="3BHK"
                    autocomplete="off"
                  />
                  <label class="btn btn-outline-primary btnBgColor" for="3bhk"
                    >3 BHK</label
                  >
            </div>
            <div class="d-flex my-2">
              <input
                type="number"
                name="floor"
                class="form-control floor "
                placeholder="On Floor"
              />

              <input
                type="number"
                name="tfloor"
                class="form-control floor"
                placeholder="Top Floor"
              />
            </div>

            <div class="d-flex">
                <input
                  type="number"
                  name="price"
                  id="price"
                  pattern="^\d*(\.\d{0,2})?$"
                  class="form-control "
                  placeholder="Price"
              />
              <span id="deposite" style="display: none;width: 100%;">
                <span class="input-group-text p-0 my-2" id="basic-addon1">
                  <a
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Deposite"
                  >
                    <i class="fa fa-info px-2"></i
                  ></a>

                  <input
                    type="number"BNM,L
                    name="deposite"
                    value="0"
                    pattern="^\d*(\.\d{0,2})?$"
                    class="form-control"
                    placeholder="Security " /></span
              ></span>
            </div>
            <span class="input-group-text p-0 my-2 floor w-100" id="basic-addon1">
              <a
                href="#"
                data-toggle="tooltip"
                data-placement="top"
                title="Enter Building Name"
              >
                <i class="fa fa-info px-2"></i
              ></a>

              <input
                type="text"
                name="project"
                class="form-control"
                placeholder="Project name"
              />
            </span>

            <div
              class="btn-group my-4 mx-1 d-block "
              role="group"
              id="residential"
              aria-label="Basic radio toggle button group"
            >
              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio1"
                value="Flat"
                autocomplete="off"
                checked
              />
              <label class="btn btn-outline-primary btnBgColor" for="btnradio1"
                >Flat</label
              >

              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio2"
                value="Penthouse"
                autocomplete="off"
              />
              <label class="btn btn-outline-primary btnBgColor" for="btnradio2"
                >Penthouse</label
              >

              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio3"
                value="House"
                autocomplete="off"
              />
              <label class="btn btn-outline-primary btnBgColor" for="btnradio3"
                >House</label
              >

              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio4"
                value="Villa"
                autocomplete="off"
              />
              <label class="btn btn-outline-primary btnBgColor" for="btnradio4"
                >Villa</label
              >
            </div>
            <textarea
              type="text"
              class="form-control w-100 mt-3 my-2 text-left"
              placeholder="Description"
              name="desc"
              style="height: 100px"
              style="overflow-y: scroll"
            ></textarea>
            <div class="d-flex">
              <input
                type="text"
                name="location"
                class="form-control my-2"
                placeholder="Location of Property "
                style="width: 560px"
              />
            </div>
            <input
              type="text"
              name="city"
              class="form-control w-100 my-2"
              placeholder="City"
            />
            <label for="image" class="mt-2 ps-1 fw-bolder">Upload photo of your property:</label>
            <input
              type="file"
              name="img"
              id="image"
              class="form-control w-100 mb-2 chooseFile"
              placeholder="Images of property"
              
            />
            

            <span class="d-flex justify-content-center my-3">

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