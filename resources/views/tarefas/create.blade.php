<x-layout title='Cadastrar as Tarefas'>

    <section>
        <h1 class="title">Cadastrar Tarefas Diarias</h1>
        <hr>

        <form action="{{ route('tarefas.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Nova Tarefa: </label><br>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Digite aqui sua tarefa" required autofocus />
                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
            <a class="btn btn-warning mt-4" href="{{ route('tarefas.index') }}">Listar</a>
        <br><br>

    </section>

</x-layout>