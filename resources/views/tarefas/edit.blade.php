<x-layout title='Editar as Tarefas'>

    <section>
        <h1 class="title">Editar Tarefa</h1>
        <hr>

        <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <label>Nova Tarefa: </label><br>
                    <input type="text" name="title" id="title" value="{{ $tarefa->title }}" class="form-control" placeholder="Digite aqui sua tarefa" required autofocus />
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Editar</button>
            <a class="btn btn-warning mt-4" href="{{ route('tarefas.index') }}">Listar</a><br><br>
        
        </form>
        <br><br>



    </section>

</x-layout>