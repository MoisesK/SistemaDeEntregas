<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModal{{id}}">
    <i class=" bi bi-pencil-square"></i>
</button>

<!-- Modal Structure -->
<div class="modal fade" id="editModal{{id}}">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Editar Entrega</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <h6>Entrega Id: {{id}}</h6>
                <form method="POST" name="editForm">
                    <input type="hidden" name="id-delivery" value="{{id}}">
                    <label>Titulo da Entrega</label><br>
                    <input class="form-control" name="title-delivery" type="text" value="{{title-delivery}}"><br>
                    <label>Descrição da Entrega</label><br>
                    <input class="form-control" name="description-delivery" type="text" value="{{description-delivery}}"><br>
                    <label>Local da Entrega</label><br>
                    <input class="form-control" name="place-delivery" type="text" value="{{place-delivery}}"><br>
                    <label>Prazo da Entrega</label><br>
                    <input class="form-control" name="deadline-delivery" type="datetime" value="{{deadline-delivery}}"><br>
                    <label>Status da Entrega</label><br>
                    <select class="custom-select" name="stats-delivery">
                        <option selected>{{stats-delivery}}</option>
                        <option value="Conclude">Concluída</option>
                        <option value="Cancel">Cancelada</option>
                    </select>
                    <!-- <input class="form-control" name="stats-delivery" type="text" value="{{stats-delivery}}"><br> -->
            </div>

            <div class="modal-footer">
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" name="editButton" value="{{id}}">
                        Editar
                    </button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- BootStrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>