@extends('layouts.admin')

@section('title', 'Login Administrativo - Portal de Empregos')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <!-- Background Card -->
        <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-red-600 to-red-700 px-8 py-12 text-center">
                <div class="mx-auto h-16 w-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-6 backdrop-blur-sm">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-white mb-2">
                    Área Administrativa
                </h2>
                <p class="text-red-100 text-sm">
                    Acesso restrito para administradores
                </p>
            </div>

            <!-- Form Section -->
            <div class="px-8 py-8">
                <form class="space-y-6" action="{{ route('admin.login.post') }}" method="POST">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-semibold text-gray-700">
                            <i class="fas fa-user-shield text-red-600 mr-2"></i>
                            Email do Administrador
                        </label>
                        <div class="relative">
                            <input id="email" name="email" type="email" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 bg-gray-50 focus:bg-white" 
                                   placeholder="admin@assai.pr.gov.br">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <i class="fas fa-at text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-semibold text-gray-700">
                            <i class="fas fa-lock text-red-600 mr-2"></i>
                            Senha Administrativa
                        </label>
                        <div class="relative">
                            <input id="password" name="password" type="password" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200 bg-gray-50 focus:bg-white" 
                                   placeholder="Digite sua senha de administrador">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="text-gray-400 hover:text-gray-600" onclick="togglePassword()">
                                    <i class="fas fa-eye" id="toggleIcon"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Remember -->
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" 
                               class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded transition duration-200">
                        <label for="remember" class="ml-2 block text-sm text-gray-700 font-medium">
                            Manter-me conectado neste dispositivo
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" 
                                class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-lg text-white bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transform transition duration-200 hover:scale-105 shadow-lg">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <i class="fas fa-sign-in-alt text-red-300 group-hover:text-red-200 transition duration-200"></i>
                            </span>
                            Acessar Painel Administrativo
                        </button>
                    </div>

                    <!-- Warning -->
                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                        <div class="flex">
                            <i class="fas fa-exclamation-triangle text-yellow-600 mr-3 mt-1"></i>
                            <div class="text-sm text-yellow-800">
                                <strong>Área Restrita:</strong> Este painel é destinado exclusivamente para administradores do Portal de Empregos de Assaí.
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-8 py-4 text-center border-t">
                <a href="{{ route('portal.index') }}" 
                   class="inline-flex items-center text-sm font-medium text-gray-600 hover:text-gray-800 transition duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Voltar ao portal público
                </a>
            </div>
        </div>

        <!-- Security Info -->
        <div class="mt-8 text-center">
            <div class="bg-white bg-opacity-90 backdrop-blur-sm rounded-xl p-4 shadow-lg">
                <div class="flex items-center justify-center space-x-6 text-sm text-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                        <span>Segurança SSL</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-key text-blue-500 mr-2"></i>
                        <span>Acesso Criptografado</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-eye text-purple-500 mr-2"></i>
                        <span>Logs de Auditoria</span>
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
