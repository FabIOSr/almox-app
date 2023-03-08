<div>
    <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Data Cadastro</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d M, Y') }}</td>
                        <td class="justify-content-between">
                            <a href="#" class="mx-1 text-decoration-none" data-bs-toggle="modal"
                                wire:click="editUser({{ $user->id }})" data-bs-target="#updateUser">
                                <span data-feather="edit-2" class="align-text-bottom"></span>
                            </a>
                            <a href="#" class="mx-1 text-decoration-none" data-bs-toggle="modal"
                                data-bs-target="#deleteUser">
                                <x-icons.feather icon="trash-2" color="danger"></x-icons.feather>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('livewire.admin.user.modals')
</div>
