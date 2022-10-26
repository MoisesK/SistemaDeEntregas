<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal{{id}}">
    <i class="bi bi-x-circle-fill"></i>
</button>

<!-- Modal Structure -->
<div class="modal fade" id="deleteModal{{id}}">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title">Excluir Entrega</h3>
                <button type="button" class="btn btn-close" data-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <h5>Realmente deseja excluir a entrega: </h5>
                <p><b>ID: </b>{{id}}</p>
                <p><b>Titulo: </b>{{title}}</p>
            </div>

            <div class="modal-footer">
                <form method="POST" style="display: flex; justify-content: space-evenly;">
                    <button class="btn btn-danger" type="submit" name="deleteButton" value="{{id}}">
                        Excluir
                    </button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- BootStrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>