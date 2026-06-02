<div>
        @if (session()->has('successMessage'))
            <div class="alert alert-primary">
                {{ session('successMessage')}}
            </div>
        @endif
        @if (session()->has('errorMessage'))
            <div class="alert alert-danger">
                {{ session('errorMessage')}}
            </div>
        @endif
</div>