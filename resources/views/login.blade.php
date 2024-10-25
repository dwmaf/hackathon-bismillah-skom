
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5" style="height: 400px">
                <div class="card-header text-center">
                    <h3 class=" font-weight-light my-4">Login</h3>
                </div>
                @if (session()->has('LoginError'))
                <div class="mx-3 alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    {{ session('LoginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-body" >
                    <form action="/loginuser" method="POST">
                        @csrf
                        <label for="input1" class="form-label">Email</label>
                            <input type="text" class="form-control border border-black mb-3" id="input1"
                            name="email" placeholder="email">
                        
                            <label for="input1" class="form-label">Password</label>
                            <input type="text" class="form-control border border-black mb-3" id="input1"
                            name="password" placeholder="password">
                        <button type="submit" class="btn btn-primary">Login</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    

