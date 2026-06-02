<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('login') }}">

                    @csrf
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-light">Accedi</button>
                        </div>
                        <div class="col-6">
                            <p class="fw-bolder text-decoration-underline text-bianco">
                                Non sei ancora registrato? <a href="{{ route('register') }}" class="btn btn-light mx-3">Registrati qui</a>
                            </p>
                        </div>
                    </div>     
                </form>
            </div>
        </div>
    </div>
</x-layout>