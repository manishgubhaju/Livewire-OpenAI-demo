<div class = "row">
    <div class = "col-md-12">
        <h1>Open AI demo</h1>
    </div>
    <div class = "col-md-12">
        <form wire:submit="save">
            <div>Ask a question</div>
        
            <textarea wire:model="content"></textarea>
            <div>@error('content') {{ $message }} @enderror</div>
        
            <button type="submit">Submit</button>
        </form>
    </div>   

    <h1>{{ $response }}</h1>

</div>
