<?php 
// This is the file for the "list all bots" section, one can include it to show the
// list of user owned bots.
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/auth/authentication_handler.php';


$list = Assistant_Base::getAll($user_id);
?>

<div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">My Bots</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Bot Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Date created</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Leads</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Opens</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $row) : ?>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?= $row['assist_id'] ?></h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1"><?= $row['assist_name'] ?></h6>
                        <span class="fw-normal"><?= $row['assist_id'] ?></span>                          
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">5</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">5</h6>
                    </td>
                  </tr> 
                  <?php endforeach; ?>             
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>