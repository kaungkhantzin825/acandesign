<?php if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { http_response_code(404); exit; } ?>
      </div><!-- /.container-fluid -->
    </section>
  </div><!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>&copy; <?= date('Y') ?> A CAN SOLUTIONS Co.,Ltd.</strong>
    <div class="float-right d-none d-sm-inline-block"><?= te('app.admin') ?></div>
  </footer>
</div><!-- /.wrapper -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
<script src="js/admin.js?v=3"></script>
