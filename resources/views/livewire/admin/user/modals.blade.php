<div wire:ignore.self class="modal fade bg-secondary" id="createUser" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createUserLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveUser">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Student Name</label>
                            <input type="text" wire:model="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Student Email</label>
                            <input type="text" wire:model="email" class="form-control">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Student Course</label>
                            <input type="text" wire:model="course" class="form-control">
                            @error('course')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                    <x-icons.bs icon="x"></x-icons.bs> Close
                </button>
                <x-buttom color="primary" text='Confirmar'></x-buttom>
            </div>
        </div>
    </div>
</div>


<div wire:ignore.self class="modal fade" id="updateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateUserLabel">Formulário de atualização</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateUser">
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="fw-bold">Nome completo</label>
                            <input type="text" wire:model="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="fw-bold">Endereço de email</label>
                            <input type="text" wire:model="email" class="form-control">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary close" data-bs-dismiss="modal" wire:click="closeModal">
                        <x-icons.bs icon="x"></x-icons.bs> 
                        Close
                    </button>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <x-icons.bs icon="check"></x-icons.bs>
                        Fechar e Atualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade modal-alert bg-secondary py-5" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" role="dialog" id="deleteUser">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-3 shadow">
            <div class="modal-body p-4 text-center">
                <h5 class="mb-0">Enable this setting?</h5>
                <p class="mb-0">You can always change your mind in your account settings.</p>
            </div>
            <div class="modal-footer flex-nowrap p-0">
                <button type="button"
                    class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end"><strong>Yes,
                        enable</strong></button>
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"
                    data-bs-dismiss="modal">No thanks</button>
            </div>
        </div>
    </div>
</div>
