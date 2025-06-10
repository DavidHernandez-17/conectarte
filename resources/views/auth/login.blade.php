<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('assets/branding/conectarte-logo.png') }}" alt="Logo" class="w-32 h-auto">
            </div>

            @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <!-- <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                        class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm"> -->

                    <input id="email" type="email" name="email" value="admin@conectarte.co" required autofocus autocomplete="username"
                        class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <!-- <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm"> -->
                    <input id="password" type="password" name="password" value="12345" required autocomplete="current-password"
                        class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-primary text-sm">
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" name="remember" class="mr-2 rounded border-gray-300 focus:ring-primary">
                        Recordarme
                    </label>

                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-primary hover:underline">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>

                <div>
                    <button type="submit"
                        class="w-full py-2 px-4 bg-primary text-white rounded-md text-sm font-semibold hover:bg-primary focus:outline-none focus:ring focus:ring-primary-300">
                        Iniciar sesión
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>