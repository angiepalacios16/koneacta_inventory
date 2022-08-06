<?php
  require_once("../../../../config/constants.php");
  require_once "../../../private/model/product.php";
  require_once(PATH_LOCAL . "src/public/views/layouts/header.php");
  $products = new Product();
?>
<div>
  <form action="insert.php" method="post">
    <div class="row">
      <div class="mb-3 col-6">
        <label class="form-label">Productos</label>
        <select class="form-control" name="product_id" id="product_id">
        <?php
            foreach ($products->getAll() as $row) {
              echo "<option value='" . $row->id . "'>" . $row->name . "</option>";
            }
          ?>
        </select>
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
      </div>
      <div class="mb-3 col-12 d-flex align-items-end justify-content-center pe-5">
        <input type="submit" class="btn btn-success w-25" value="Agregar">
      </div>
    </div>
  </form>
</div>
<?php
  require_once(PATH_LOCAL . "src/public/views/layouts/footer.php");
?>