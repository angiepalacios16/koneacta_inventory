<?php
  require_once("../../../../config/constants.php");
  require_once "../../../private/model/product.php";
  require_once(PATH_LOCAL . "src/public/views/layouts/header.php");
  $products = new Product();
  $product = $products->getById($_GET['id']);
?>
<div>
  <form action="update.php" method="post">
    <div class="row">
      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $product->id; ?>">
      <div class="mb-3 col-6">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $product->name; ?>">
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Referencia</label>
        <input type="text" class="form-control" id="reference" name="reference" value="<?php echo $product->reference; ?>">
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Precio</label>
        <input type="number" class="form-control" id="price" name="price" value="<?php echo $product->price; ?>">
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Peso</label>
        <input type="number" class="form-control" id="weight" name="weight" value="<?php echo $product->weight; ?>">
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-6">
        <label class="form-label">Categoria</label>
        <input type="text" class="form-control" id="category" name="category" value="<?php echo $product->category; ?>">
      </div>
      <div class="mb-3 col-6">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $product->stock; ?>">
      </div>
      <div class="mb-3 col-12 d-flex align-items-end justify-content-center pe-5">
        <input type="submit" class="btn btn-success w-25" value="Guardar">
      </div>
    </div>
  </form>
</div>
<?php
  require_once(PATH_LOCAL . "src/public/views/layouts/footer.php");
?>