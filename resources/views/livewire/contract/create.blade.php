<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-2">
            <form wire:submit="save">
                <div class="mb-3">
                    <label for="name" class="form-label">Contract name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('contract_name')is-invalid @enderror" id="name" wire:model="contract_name">
                    <div class="invalid-feedback">@error('contract_name') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="5" wire:model="description"></textarea>
                </div>
                <div class="action">
                    <a href="{{ route('contract.index') }}" wire:navigate class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary ms-3">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
