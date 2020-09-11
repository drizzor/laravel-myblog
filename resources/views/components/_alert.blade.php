@if(count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show mt-3">
        <span class="mb-2"><i class="fas fa-exclamation-triangle"></i> Impossible de valider votre action:</span> 
        <ul class="mb-0 mt-0 pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>   
@endif
    
