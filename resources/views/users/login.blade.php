<x-layout>
    <x-content-header header_title="Log in to your account">
        <p>Enter your email address and password to log into your account to start managing your events. Alternatively, if you don't have an account yet, <a href="/register">click here</a> to sign up.</p>
     </x-content-header>

     <section id="login-form" class="content-section">
         <div class="container">
            <x-form-card>
                <form method="POST" action="/users/authenticate">
                    @csrf
                    <div class="mb-4">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="{{old('email')}}"
                        />
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                        />
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-danger">
                            Log in
                        </button>
                    </div>

                    <div class="">
                        <p>
                            Don't have an account?
                            <a href="/register" class="text-laravel"
                                >Regsiter</a
                            >
                        </p>
                    </div>


                </form>
            </x-form-card>
         </div>
        
     </section>
</x-layout>