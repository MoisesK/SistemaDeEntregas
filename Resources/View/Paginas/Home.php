<h1>{{HomeName}} </h1>
<hr>

<section id="listaEntregas">
    <div class="card text-dark mb-3">
        <h5 class="card-header text-center">Entregador - {{entregador}} </h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Prazo Da entrega</th>
                            <th scope="col">Titulo da Entrega</th>
                            <th scope="col">Descrição da Entrega</th>
                            <th scope="col">Status da Entrega</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>{{PrazoEntrega}}</td>
                            <td>{{TituloEntrega}}</td>
                            <td>{{DescriçãoEntrega}}</td>
                            <td>{{StatusEntrega}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

</section>
