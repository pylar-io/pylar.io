<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrty="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/img/logo.svg" />
  <title>About · Pylar Composting</title>
</head>


<script src="https://kit.fontawesome.com/ac0bb12408.js" crossorigin="anonymous"></script>
<script src="index.js"></script>

<body class="bg-dark text-white">
  <?php include "menu.html";?>
  <div style="margin-left: 230px;" class="p-5">

    <div class="row my-3">
      <div class="col-xl-4 col-md-6">
        <div class="card-max bg-dark-secondary p-2">
          <div class="test px-5 py-2">
            <div class="modal-div-canvas js-chart">
              <div class="chart-canvas">
                <canvas id="dayGauge" width="1" height="1"></canvas>
                <div class="chart-background"></div>
                <span class="chart-unique-value">
                  <div class="centered">
                    <span class="h2" id="day"><i class="fas fa-calendar-alt"></i> &nbsp;10%</span>
                  </div>
                </span>
              </div>
            </div>
          </div>

          <div class="p-2 mt-3">
            <center><h5>Compost Starting, Day 7/30</h5></center>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6">
        <div class="card-max bg-dark-secondary p-3">
          <div class="row mt-3">
            <div class="col-6">
              <div class="card bg-dark-tertiary p-2">

                <canvas id="tempTrend"></canvas>
                <div class="p-2 mt-3">
                  <p class="mb-0">Temperature</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card bg-dark-tertiary p-2">
                <canvas id="hmdTrend"></canvas>
                <div class="p-2 mt-3">
                  <p class="mb-0">Humidity</p>
                </div>
              </div>
            </div>
          </div>

          <h3 class= "font-weight-bold mb-0 mt-5">Trend</h3>
          <p class="pt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio facere illum aspernatur obcaecati, excepturi culpa necessitatibus inventore temporibus provident similique nemo dolorum amet soluta neque quisquam distinctio magnam iure consectetur.</p>
        </div>
      </div>
      <div class="col">
        <div class="card bg-dark-secondary p-3">
          <h3 class= "font-weight-bold">Actions</h3>
          <div class="card bg-dark-tertiary mt-3">
            <div class="card-body">
              <i class="fas fa-leaf"></i> &nbsp;&nbsp;Compost wet as hell, add more browns.
            </div>
          </div>
          <div class="card bg-dark-tertiary mt-3">
            <div class="card-body">
              <i class="fas fa-water"></i> &nbsp;&nbsp;You forgot to add water you dimmadumbass!
            </div>
          </div>
        </div>
      </div>


    </div>



    <div class="row my-3">
      <div class="col-xl-2 col-sm-6">
        <div class="card bg-dark-secondary p-3">
          <div class="modal-div-canvas js-chart">
            <div class="chart-canvas">
              <canvas id="tempGauge" width="1" height="1"></canvas>
              <div class="chart-background"></div>
              <span class="chart-unique-value">
                <div class="centered">
                  <span class="h2" id="hmd"><i class="fas fa-thermometer-full"></i> &nbsp;0&#8451;</span>
                </div>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-sm-6">
        <div class="card bg-dark-secondary p-3">

          <div class="modal-div-canvas js-chart">
            <div class="chart-canvas">
              <canvas id="hmdGauge" width="1" height="1"></canvas>
              <div class="chart-background"></div>
              <span class="chart-unique-value">
                <div class="centered">
                  <span class="h2" id="hmd">


                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="humidity" height= "2rem" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-humidity fa-w-12"><path fill="white" d="M223.9 22.1c-8.7-28.8-53.9-30.1-63.8 0C109.1 179.8 0 222.7 0 333.9 0 432.3 85.9 512 192 512s192-79.7 192-178.1c0-111.7-108.9-153.3-160.1-311.8zM96 288c0-17.7 14.3-32 32-32s32 14.3 32 32-14.3 32-32 32-32-14.3-32-32zm49.5 131.8c-2.8 3.5-7.8 4-11.2 1.2l-12.5-10c-3.4-2.8-4-7.8-1.2-11.2l118-147.5c2.8-3.4 7.8-4 11.2-1.2l12.5 10c3.5 2.8 4 7.8 1.2 11.2l-118 147.5zM256 416c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" class=""></path></svg> &nbsp;0%
                  </span>
                </div>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="index.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>