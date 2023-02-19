<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif

            {{-- @foreach($projects as $project)
              <div class="card display: flex" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $project->name }}</h6>
                  <p class="card-text">{{ $project->description }}</p>

                </div>
              </div>
            @endforeach --}}
</div>
