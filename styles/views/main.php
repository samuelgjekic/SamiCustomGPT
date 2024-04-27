<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Sales Overview</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>
            <div id="chart"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">$36,358</h4>
                    <div class="d-flex align-items-center mb-3">
                      <span
                        class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-up-left text-success"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                      <p class="fs-3 mb-0">last year</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="me-4">
                        <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">2023</span>
                      </div>
                      <div>
                        <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">2023</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row alig n-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                      <p class="fs-3 mb-0">last year</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-currency-dollar fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="earning"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    // This is the part where user can see top 10 bots and how they perform.
    // list_bots.php can be used to edit the values shown in the "Top Bots" section.
    include $_SERVER['DOCUMENT_ROOT'] . '/styles/views/list_bots.php';
    ?>
      
    
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4"><a href="https://advantix.se" target="_blank" class="pe-1 text-primary text-decoration-underline">Suggest a feature</a> and help us improve</p>
    </div>
  </div>
</div>
</div>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>
<script src="../assets/js/dashboard.js"></script>
</body>

</html>