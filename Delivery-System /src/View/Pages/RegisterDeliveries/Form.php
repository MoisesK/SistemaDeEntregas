<section id="form" action="?page=1">
    <form method="POST">
        <div class="text-center form-group mt-3 mb-4">
            <label class="text-uppercase fs-4 fst-italic pb-2">Titulo da Entrega</label>
            <input placeholder="Preencha com o Título da sua Entrega!" type="text" class="text-center form-control" id="title" name="title-delivery" required>
        </div>

        <div class="text-center form-group mt-3 mb-4">
            <label class="text-uppercase fs-4 fst-italic pb-2">Descrição da Entrega</label>
            <textarea placeholder="Descreva a entrega e o objetivo da mesma!" class="form-control text-center" rows="2" name="description-delivery" required></textarea>
        </div>

        <div class="text-center form-group mt-3 mb-4">
            <label class="text-uppercase fs-4 fst-italic pb-2">Local da Entrega</label>
            <input placeholder="Onde deverá ser entregue?" type="text" class="form-control text-center" name="place-delivery" required>
        </div>

        <div class="text-center form-group mt-3 mb-4">
            <label class="text-uppercase fs-4 fst-italic pb-2">Prazo da Entrega</label>
            <input placeholder="Até quando pode ser entregue?" type="datetime-local" class="text-center form-control" name="deadline-delivery" required>
        </div>

        <div class="text-center form-group mt-5">
            <button class="btn btn-success" type="submit"><i class="bi bi-clipboard-plus"></i> CADASTRAR ENTREGA</button>
            <a class="btn btn-primary" href="/">RETORNAR PARA HOME<i class="bi bi-arrow-return-left"></i></a>
        </div>

    </form>
</section>