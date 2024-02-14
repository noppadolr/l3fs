<div>
    <div class="card col-6 mx-auto offset-3">

        <div class="card card-header">
            Counter App
        </div>
        <div class="card card-body">
            @if (session('limitd'))

                 <div class="alert alert-fill-danger" role="alert">{{ session('limitd') }} </div>
               @elseif (session('limith'))
                <div class="alert alert-fill-info" role="alert">{{ session('limith') }} </div>

            @endif
            {{-- @if (session('limith'))
            <div class="alert alert-fill-info" role="alert">{{ session('limith') }} </div>
             @endif --}}
            <h1 class="text-primary">Your Counter is: {{ $counter}}</h1>
            <div class="">
                <button wire:click="increatement" class="btn btn-success btn-sm mr-2">เพิ่ม  </button>

                <button wire:click="decrement" class="btn btn-danger btn-sm ml-2">  ลด</button>

            </div>


        </div>
    </div>
    @livewire('create-user')



</div>
