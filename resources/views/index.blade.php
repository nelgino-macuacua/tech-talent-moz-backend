<h1>Lista de Profissionais</h1>
<table>
    <tr>
        <th> Nome: </th>
        <th> Email: </th>
        <th> Titulo: </th>
        <th> Disponibilidade: </th>
        <th> Skills: </th>
    </tr>
    @foreach($profissionais as $profissional)
        <tr>
            <td>{{ $profissional->nome }}</td>
            <td>{{ $profissional->email }}</td>
            <td>{{ $profissional->titulo }}</td>
            <td>{{ $profissional->disponibilidade }}</td>
            <td>{{ $profissional->skills }}</td>
        </tr>
    @endforeach
</table>