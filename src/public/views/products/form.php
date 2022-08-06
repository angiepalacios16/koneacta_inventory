<?php
  require_once("../../../../config/constants.php");
  require_once "../../../private/model/product.php";
  require_once(PATH_LOCAL . "src/public/views/layouts/header.php");
?>
<div>
  <form action="insert.php" method="post">
    <div class="row">
      <div class="mb-3 col-6">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Referencia</label>
        <input type="text" class="form-control" id="reference" name="reference" required>
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Precio</label>
        <input type="number" class="form-control" id="price" name="price" required>
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Peso</label>
        <input type="number" class="form-control" id="weight" name="weight" required>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-6">
        <label class="form-label">Categoria</label>
        <input type="text" class="form-control" id="category" name="category" required>
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" required>
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