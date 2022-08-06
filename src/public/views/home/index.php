<?php
  require_once("../../../../config/constants.php");
  require_once("../../../private/model/product.php");
  require_once("../layouts/header.php");
  $products = new Product();
  if(isset($_GET['message'])) {
    if ($_GET['message'] == "error") {
      echo "<div class='alert alert-danger' role='alert'>
      Stock no esta disponible!
    </div>";
    }elseif ($_GET['message'] == "success") {
      echo "<div class='alert alert-success' role='alert'>
      Venta exitosa!
      </div>";
    }
  }
?>
<div class="d-flex align-items-end justify-content-end pe-2 mb-3">
  <a href="../products/form.php" class="btn btn-success w-25">Agregar Productos</a>
</div>
<div class="table-responsive">
  <table class="table table-striped text-center">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Referencia</th>
        <th scope="col">Precio</th>
        <th scope="col">Peso</th>
        <th scope="col">Categoria</th>
        <th scope="col">Stock</th>
        <th scope="col">Fecha creación</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($products->getAll() as $row) {
          echo "<tr>";
          echo "<th scope='row'>" . $row->id . "</th>";
          echo "<td class='text-start'>" . $row->name . "</td>";
          echo "<td>" . $row->reference . "</td>";
          echo "<td>" . $row->price . "</td>";
          echo "<td>" . $row->weight . "</td>";
          echo "<td class='text-start'>" . $row->category . "</td>";
          echo "<td>" . $row->stock . "</td>";
          echo "<td>" . $row->created_at . "</td>";
          echo "<td><a class='text-success' href='" . PATH_PRODUCT_EDIT . "?id=" . $row->id . "'>";
          echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'><path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/><path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/></svg>";
          echo "</a></td>";
          echo "<td><a class='text-danger' href='" . PATH_PRODUCT_DELETE . "?id=" . $row->id . "'>";
          echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'><path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/><path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/></svg>";
          echo "</a></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>
<?php
  require_once("../layouts/footer.php");
?>