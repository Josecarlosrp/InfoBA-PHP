<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 11">
    <div id="toast-errors" class="toast" data-bs-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header bg-light">
        <strong class="me-auto">Mensajes</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?php
        if (isset($data['alertSuccess']))
          echo '<div class="alert alert-success">' . $data['alertSuccess'] . '</div>';
        if (isset($data['alertDanger']))
          echo '<div class="alert alert-danger">' . $data['alertDanger'] . '</div>';
        if (isset($data['alertWarning']))
          echo '<div class="alert alert-warning">' . $data['alertWarning'] . '</div>';
        if (isset($data['alertInfo']))
          echo '<div class="alert alert-info">' . $data['alertInfo'] . '</div>';
        ?>
      </div>
    </div>
</div>

