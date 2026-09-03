@vite(['resources/css/login.css'])

<div class="login-page">
    <div class="login-card">
        <div class="login-header">
            <h2>Inicio de sesión</h2>
            <div class="linea-subtitulo"></div>
        </div>

        @if (session('status'))
            <div class="status-message">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login.store') }}" class="login-form">
            @csrf

            <div class="grupo-campo">
                <label for="email">*Correo electrónico</label>
                <input 
                    id="email"
                    name="email" 
                    type="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus 
                    autocomplete="email" 
                />
            </div>

            <div class="grupo-campo">
                <label for="password">*Contraseña</label>
                <input 
                    id="password"
                    name="password" 
                    type="password" 
                    required 
                    autocomplete="current-password" 
                />
            </div>

            @if (Route::has('password.request'))
                <div class="olvidaste-container">
                    <a href="{{ route('password.request') }}" wire:navigate class="enlace-olvidaste">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            @endif

            <button type="submit" class="btn-iniciar">
                Iniciar sesión
            </button>
        </form>

        <div class="login-footer">
            <a 
                href="{{ $teamInvitation ? route('register', ['invitation' => $teamInvitation['code']]) : route('register') }}" 
                wire:navigate 
                class="enlace-footer"
            >  
            </a>
        </div>
    </div>
</div>