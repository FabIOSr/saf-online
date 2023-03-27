<div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col" style="width: 10px">#</th>
                <th scope="col">Task</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo de usuário</th>
                <th scope="col">Status</th>
                <th scope="col">Ações Disponiveis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->user_type }}</td>
                    <td>
                        <span class="badge bg-{{ $user->is_active ? 'success' : 'danger' }}">
                            {{ $user->is_active ? 'Ativo' : 'Inativo' }}
                        </span>
                    </td>
                    <td>
                        <i class="fas fa-check-square mx-1 cursor"></i>
                        <i class="fas fa-list mx-1 cursor"></i>
                        <i class="fas fa-edit mx-1 cursor"></i>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
