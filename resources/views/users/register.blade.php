<x-layout>
    <x-content-header header_title="Log in to your account">
        <p>Complete the form to register for a new account and start managing events for the Labour Party. Or if you already have an account, <a href="/login">click here</a> to log in.</p>
     </x-content-header>

     <section id="registration-form" class="content-section">
         <div class="container">
            <x-form-card>
                <form method="POST" action="/users">
                    @csrf
                    <div class="mb-4">
                        <label for="first_name">First name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="first_name"
                            value="{{old('first_name')}}"
                            placeholder="Your first name"
                        />
                        @error('first_name')
                            <p class="form-error-alert">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="last_name">Last name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="last_name"
                            value="{{old('last_name')}}"
                            placeholder="Your last name"
                        />
                        @error('last_name')
                            <p class="form-error-alert">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-select">
                            <option disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="trans">Trans</option>
                            <option value="prefer_not_to_say">Prefer not to say</option>
                        </select>
                        @error('gender')
                            <p class="form-error-alert">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="{{old('email')}}"
                            placeholder="Your email address"
                        />
                        @error('email')
                            <p class="form-error-alert">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            placeholder="Enter password"
                        />
                        @error('password')
                            <p class="form-error-alert">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation">Confirm Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            placeholder="Confirm your password"
                        />
                        @error('password_confirmation')
                            <p class="form-error-alert">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-danger">
                            Register
                        </button>
                    </div>

                    <div class="">
                        <p>
                            Already have an account?
                            <a href="/login">Log in</a>
                        </p>
                    </div>


                </form>
            </x-form-card>
         </div>
        
     </section>
</x-layout>