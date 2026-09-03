@vite(['resources/css/forgot-password.css'])

<div class="reset-page">
    <div class="reset-card">
        <!-- Encabezado con línea -->
        <div class="reset-header">
            <h2>Restablecer contraseña</h2>
            <div class="linea-subtitulo"></div>
        </div>

        <!-- Descripción -->
        <p class="reset-description">
            Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
        </p>

        <!-- Estado de sesión -->
        @if (session('status'))
            <div class="status-message">{{ session('status') }}</div>
        @endif

        <!-- Formulario -->
        <form method="POST" action="{{ route('password.email') }}" class="reset-form">
            @csrf

            <div class="grupo-campo">
                <label for="email">*Correo electrónico</label>
                <input 
                    id="email"
                    name="email" 
                    type="email" 
                    required 
                    autofocus 
                    autocomplete="email" 
                />
            </div>

            <button type="submit" class="btn-enviar" data-test="email-password-reset-link-button">
                Enviar enlace de restablecimiento
            </button>
        </form>

        <!-- Enlace para regresar -->
        <div class="reset-footer">
            <span>¿O deseas regresar?</span>
            <a href="{{ route('login') }}" wire:navigate class="enlace-login">
                Iniciar sesión
            </a>
        </div>
    </div>
</div>