<?php 
   require 'conexion.php';

   $sqlProductos = "SELECT p.id_product, p.name, p.description, p.image, c.name AS category FROM product AS p INNER JOIN category AS c ON p.id_category=c.id";
   $productos = $conex->query($sqlProductos);

   $dir = "img_download/";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de productos</title>
    <script src="https://kit.fontawesome.com/b408879b64.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="consult.css">
</head>


<body>
    <script>
        function advertencia(e){
            e.preventDefault();
            var url=e.currentTarget.getAttribute('href');
            Swal.fire({
                title: '¿Está seguro?',
                text: '¡No podrá recuperar este producto!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2CB073',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, Eliminar',
                cancelButtonText: 'No, Salir',
                reverseButtons:true,
                padding: '20px',
                backdrop: true,
                position: 'top',
                allowOutsideClick: true,
                allowEscapeKey: true,
                allowEnterKey: false,

            }).then((result) =>{
                if (result.isConfirmed) {
                    window.location.href=url;
                }
            })
        }
    </script>
    <a class="back" href="log.php"><i class="fas fa-arrow-left"></i>VOLVER</a>
    <div class="container py-3">
        <h2 class="text-center">Productos</h2>
        <div class="row justify-content-end">
            <div class="col-auto">
                <div class="bd-example">
                    <button type="button" id="abrirModal" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">
                        <i class="fa-solid fa-circle-plus"></i>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Nuevo Producto
                            </font>
                        </font>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <table class="table table-sm table-striped table-hover mt-4">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Categoria</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row_producto = $productos->fetch_assoc()) { ?>
            <tr>
                <td><?= $row_producto['id_product'] ?></td>
                <td><?= $row_producto['name'] ?></td>
                <td><?= $row_producto['description'] ?></td>
                <td><img src="<?= $row_producto['image']?>" width="100" height="100"></td>
                <td><?= $row_producto['category'] ?></td>
                <td>
                    <div class="bd-example">
                        <button type="submit" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenteredScrollable"
                            data-bs-id="<?= $row_producto['id_product']; ?>" id="btn">
                            <i class="fas fa-edit"></i> 
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Editar
                                </font>
                            </font>
                        </button>
                        <a href="elimina.php?id=<?= $row_producto['id_product'] ?>" onclick="advertencia(event)" class="btn btn-sm btn-danger" id="btn"><i
                                    class="fa fa-trash" aria-hidden="true"></i>Eliminar<a>
                    </div>
                    
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
    <?php
      $sqlCategoria = "SELECT id, name FROM category";
      $categorias = $conex->query($sqlCategoria); 
    ?>

    <?php
      $sqlCategoria1 = "SELECT id, name FROM category";
      $categorias1 = $conex->query($sqlCategoria1); 
    ?>

    
    <!--INICIO MODAL-->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalCenterTitle">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">AGREGAR PRODUCTO</font>
                        </font>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerca"></button>
                </div>
                <div class="modal-body">
                    <form action="code.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input class="form-control" type="text" name="name" id="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción:</label>
                            <input class="form-control" type="text" name="description" id="description" required>
                        </div>

                        <div class="mb-3">
                            <label for="image">Imágen:</label>
                            <input class="form-control" type="file" name="image" id="image" accept="image/jpg">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Categoría:</label>
                            <select class="form-select" name="category" id="category" required>
                                <option value="">Seleccionar...</option>
                                <?php while($row_categoria = $categorias->fetch_assoc()){ ?>
                                <option value="<?php echo $row_categoria["id"]; ?>"><?= $row_categoria["name"]?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Cerrar</font>
                                </font>
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-floppy-disk"></i>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Guardar</font>
                                </font>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1"
        aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalCenteredScrollableTitle">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">EDITAR PRODUCTO</font>
                        </font>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerca"></button>
                </div>
                <div class="modal-body">
                    <form action="actualiza.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="id_product" name="id_product">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input class="form-control" type="text" name="name" id="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción:</label>
                            <input class="form-control" type="text" name="description" id="description" required>
                        </div>

                        <div class="mb-3">
                            <img id="img" width="100" height="100">
                        </div>

                        <div class="mb-3">
                            <label for="image">Imágen:</label>
                            <input class="form-control" type="file" name="image" id="image" accept="image/jpg">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Categoría:</label>
                            <select class="form-select" name="category" id="category" required>
                                <option value="">Seleccionar...</option>
                                <?php while($categoria1 = $categorias1->fetch_assoc()){ ?>
                                <option value="<?php echo $categoria1["id"]; ?>"><?= $categoria1["name"]?>
                                </option>
                                <?php }?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Cerrar</font>
                                </font>
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-floppy-disk"></i>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Actualizar</font>
                                </font>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!--FIN MODAL-->

        <?php $categorias->data_seek(0); ?>
        <?php $categorias1->data_seek(0); ?>

        <script src="editarModal.js"></script>
        <script src="../scripts/bootstrap.bundle.min.js"></script>
        <script src="login.js"></script>
</body>

</html>