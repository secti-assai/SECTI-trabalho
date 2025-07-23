@extends('layouts.app')

@section('title', 'Login - Portal de Empregos')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <!-- Background Card -->
        <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-8 py-12 text-center">
                <div class="mx-auto h-16 w-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-6 backdrop-blur-sm">
                    <i class="fas fa-briefcase text-white text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-white mb-2">
                    Bem-vindo de volta!
                </h2>
                <p class="text-blue-100 text-sm">
                    Acesse sua conta no Portal de Empregos
                </p>
            </div>

            <!-- Form Section -->
            <div class="px-8 py-8">
                <form class="space-y-6" action="{{ route('login.post') }}" method="POST">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-semibold text-gray-700">
                            <i class="fas fa-envelope text-blue-600 mr-2"></i>
                            Endereço de email
                        </label>
                        <div class="relative">
                            <input id="email" name="email" type="email" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 bg-gray-50 focus:bg-white" 
                                   placeholder="Digite seu email">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-semibold text-gray-700">
                            <i class="fas fa-lock text-blue-600 mr-2"></i>
                            Senha
                        </label>
                        <div class="relative">
                            <input id="password" name="password" type="password" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 bg-gray-50 focus:bg-white" 
                                   placeholder="Digite sua senha">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="text-gray-400 hover:text-gray-600" onclick="togglePassword()">
                                    <i class="fas fa-eye" id="toggleIcon"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Remember & Forgot -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox" 
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded transition duration-200">
                            <label for="remember" class="ml-2 block text-sm text-gray-700 font-medium">
                                Lembrar de mim
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500 transition duration-200">
                                Esqueceu sua senha?
                            </a>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" 
                                class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-lg text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition duration-200 hover:scale-105 shadow-lg">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <i class="fas fa-sign-in-alt text-blue-300 group-hover:text-blue-200 transition duration-200"></i>
                            </span>
                            Entrar na conta
                        </button>
                    </div>

                    <!-- Divider -->
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">ou</span>
                        </div>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Ainda não tem uma conta?
                        </p>
                        <a href="{{ route('register') }}" 
                           class="inline-flex items-center mt-2 font-semibold text-blue-600 hover:text-blue-500 transition duration-200">
                            <i class="fas fa-user-plus mr-2"></i>
                            Cadastre-se gratuitamente
                        </a>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-8 py-4 text-center border-t">
                <a href="{{ route('portal.index') }}" 
                   class="inline-flex items-center text-sm font-medium text-gray-600 hover:text-gray-800 transition duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Voltar ao portal principal
                </a>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="mt-8 text-center">
            <div class="bg-white bg-opacity-80 backdrop-blur-sm rounded-xl p-4 shadow-lg">
                <div class="flex items-center justify-center space-x-6 text-sm text-gray-600">
                    <div class="flex items-center">
                        <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                        <span>Seguro</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-clock text-blue-500 mr-2"></i>
                        <span>24/7</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-users text-purple-500 mr-2"></i>
                        <span>Suporte</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    const password = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');
    
    if (password.type === 'password') {
        password.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        password.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}
</script>
@endsection
