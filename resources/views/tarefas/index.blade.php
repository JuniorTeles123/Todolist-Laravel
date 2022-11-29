<x-layout title='Listar as Tarefas'>

    <h1>Listar as Tarefas</h1>
    <a class="btn btn-outline-primary" href="{{ route('tarefas.create') }}">Cadastrar</a>
    <hr>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tarefas</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tarefas as $tarefas)
            <tr>
                <td>{{ $tarefas->id }}</td>
                <td>{{ $tarefas->title }}</td>
                <td style="display: flex;">

                    <a class="btn btn-primary mt-4" href="{{ route('tarefas.show', $tarefas->id) }}">Visualizar</a>&nbsp;

                    <a class="btn btn-success mt-4" href="{{ route('tarefas.edit', $tarefas->id) }}">Editar</a>&nbsp;

                    <form action="{{ route('tarefas.destroy', $tarefas->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mt-4" type="submit">Apagar</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>


</x-layout>