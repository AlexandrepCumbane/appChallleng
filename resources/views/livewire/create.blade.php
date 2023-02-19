{{-- <div>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" wire:model="description"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="homepage">Homepage</label>
            <input type="text" class="form-control" id="homepage" wire:model="homepage">
            @error('homepage') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="is_public">Is Public</label>
            <input type="checkbox" class="form-check-input" id="is_public" wire:model="is_public">
            @error('is_public') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="parent_id">Parent ID</label>
            <input type="number" class="form-control" id="parent_id" wire:model="parent_id">
            @error('parent_id') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="author_id">Author ID</label>
            <input type="number" class="form-control" id="author_id" wire:model="author_id">
            @error('author_id') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="identifier">Identifier</label>
            <input type="text" class="form-control" id="identifier" wire:model="identifier">
            @error('identifier') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" wire:model="status">
                <option value="open">Open</option>
                <option value="closed">Closed</option>
                <option value="archived">Archived</option>
            </select>
            @error('status') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="has_shared_budget">Has Shared Budget</label>
            <input type="checkbox" class="form-check-input" id="has_shared_budget" wire:model="has_shared_budget">
            @error('has_shared_budget') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">{{ $updateMode ? 'Update' : 'Save' }}</button>
        <button type="button" class="btn btn-danger" wire:click="resetInputFields">Reset</button>
    </form>
</div> --}}

<div>
    <form>
        <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" wire:model="name" class="form-control" id="name">
            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea wire:model="description" class="form-control" id="description"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="homepage">Homepage:</label>
            <input type="text" wire:model="homepage" class="form-control" id="homepage">
            @error('homepage') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="is_public">Publish:</label>
            <select wire:model="is_public" class="form-control" id="is_public">
                <option value="">Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            @error('is_public') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="parent_id">Associeted Project:</label>
            <select wire:model="parent_id" class="form-control" id="parent_id">
                <option value="">Select an option</option>
                @foreach($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
            @error('parent_id') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="author_id">Author:</label>
            <select wire:model="author_id" class="form-control" id="author_id">
                <option value="">Select an option</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('author_id') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        {{-- <div class="form-group">
            <label for="identifier">Identifier:</label>
            <input type="text" wire:model="identifier" class="form-control" id="identifier">
            @error('identifier') <span class="text-danger">{{ $message }}</span>@enderror
        </div> --}}
        <div class="form-group">
            <label for="status">Status:</label>
            <select wire:model="status" class="form-control" id="status">
                <option value="">Select an option</option>
                <option value="open">Open</option>
                <option value="closed">Closed</option>
                <option value="archived">Archived</option>
            </select>
            @error('status') <span class="text-danger">{{ $message }}
            </span>@enderror
        </div>
        <div class="form-group">
            <label for="has_shared_budget">Has Shared Budget:</label>
            <select wire:model="has_shared_budget" class="form-control" id="has_shared_budget">
                <option value="">Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            @error('has_shared_budget') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button type="submit" wire:click.prevent="{{ $updateMode ? 'update' : 'store' }}" class="btn btn-primary">{{ $updateMode ? 'Update' : 'Save' }}</button>
    </form>
</div>
