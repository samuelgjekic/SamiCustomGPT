<div class="container-fluid">
    <!--  Row 1 -->
    <?php
    // This is the part where user can see top 10 bots and how they perform.
    // list_bots.php can be used to edit the values shown in the "Top Bots" section.
    require_once $_SERVER['DOCUMENT_ROOT'] . '/styles/views/mybots_view.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

    ?>
       <div class="py-6 px-6 text-center">
       <a href="<?= url_createbot ?>" class="btn btn-primary me-2">Create New</a><br><br>

      <p class="mb-0 fs-4"><a href="https://advantix.se" target="_blank" class="pe-1 text-primary text-decoration-underline">Suggest a feature</a> and help us improve</p>
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