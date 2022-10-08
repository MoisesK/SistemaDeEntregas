<section id="form">
    <form method="POST">

        <div class="form-group mt-3">
            <label>Titulo da Entrega</label>
            <input type="text" class="form-control" name="title-delivery" required>
        </div>

        <div class="form-group mt-3">
            <label>Descrição da Entrega</label>
            <textarea class="form-control" rows="3" name="description-delivery" required></textarea>
        </div>

        <div class="form-group mt-3">
            <label>Local da Entrega</label>
            <input type="text" class="form-control" name="place-delivery" required>
        </div>

        <div class="form-group mt-3">
            <label>Prazo da Entrega</label>
            <input type="datetime-local" class="form-control" name="deadline-delivery" required>
        </div>

        <div class="form-group mt-3">
            <button class="btn btn-success" type="submit">CADASTRAR ENTREGA</button>
        </div>

    </form>
</section>