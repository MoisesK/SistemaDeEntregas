<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModal">
    <i class=" bi bi-pencil-square"></i>
</button>

<!-- Modal Structure -->
<div class="modal fade" id="editModal">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Editar Entrega</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form method="POST" style="display: flex; justify-content: space-evenly;">
                    <label>Titulo da Entrega</label>
                    <input name="title-delivery" type="text" value="{[title-delivery}}">
            </div>

            <div class="modal-footer">
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit" name="editButton" value="{{id}}">
                        Editar
                    </button>
                    </form>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- BootStrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>