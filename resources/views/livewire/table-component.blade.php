<div>
    <div class="row">
        <div class="col-md-6">
            <div class="box-neon">
                <h3>{{ $user->name }}</h3>
                <h4>Vitorias: </h4>
                <h4>Derrotas: </h4>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box-neon">
            <h3>Adversário</h3>
            <h4>Vitorias: </h4>
            <h4>Derrotas: </h4>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="tictac-box">
                <img src="/assets/img/table.png" alt="" id="img-table" class="img-fluid">
        </div>
    </div>

    <div class="container">
        <div class="leaderboards">
        <h6 class="h6-leaderboards">Tabela de Líderes</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Vitorias</th>
                        <th scope="col">Derrotas</th>
                        <th scope="col">Diferença</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $loop->index+1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->genero }}</td>
                        <td>{{ $user->vitorias }}</td>
                        <td>{{ $user->derrotas }}</td>
                        <td>{{ $user->diferenca }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
    </div>
    
</div>
