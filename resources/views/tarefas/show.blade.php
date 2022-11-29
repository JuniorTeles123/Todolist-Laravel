<x-layout title='Visualizar as Tarefas'>

    <section>
        
        <h1 class="title">Visualizar Tarefas Diarias</h1>
        <hr>
        
        <p><strong>Codigo: </strong>{{$tarefa->id}}</p>
        <p><strong>Tarefa: </strong>{{$tarefa->title}}</p>

        <a class="btn btn-warning mt-4" href="{{ route('tarefas.index') }}">Listar (voltar)</a><br><br>

    </section>

</x-layout>