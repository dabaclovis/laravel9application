<form method="POST" action="{{ route('registration') }}" class="w3-light-gray w3-container w3-card-4 w3-text-blue">
    @csrf

    <div class="w3-row w3-section">
        <div class=" w3-col w3-xlarge w3-card-4 w3-center" id="mands">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>

        <div class="w3-rest">
            <input
                    id="name"
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}"
                    required
                    placeholder="Your Name"
                    autocomplete="name"
                    autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class=" w3-col w3-xlarge w3-card-4 w3-center" id="mands">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </div>

        <div class="w3-rest">
            <input
                    id="email"
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}"
                    required
                    placeholder="Email Address"
                    autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class=" w3-col w3-xlarge w3-card-4 w3-center" id="mands">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </div>

        <div class="w3-rest">
            <input
                    id="password"
                    type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    name="password"
                    required
                    placeholder="Password"
                    autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class=" w3-col w3-xlarge w3-card-4 w3-center" id="mands">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </div>

        <div class="w3-rest">
            <input
                    placeholder="Retype Password"
                    type="password"
                    class="form-control"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"/>
        </div>
    </div>

    <div class="w3-row w3-section mb-3 d-flex justify-content-end">
        <div class=" offset-md-4">
            @include('includers.loginexit')
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
