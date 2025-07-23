@extends('layouts.app')

@section('title', 'Cadastro - Portal de Empregos')

@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <div class="mx-auto h-12 w-12 bg-blue-600 rounded-full flex items-center justify-center">
                <i class="fas fa-user-plus text-white text-xl"></i>
            </div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Criar nova conta
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Ou 
                <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                    faça login na sua conta
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome completo</label>
                    <input id="name" name="name" type="text" required 
                           class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                           placeholder="Seu nome completo">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" required 
                           class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                           placeholder="seu@email.com">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                    <input id="phone" name="phone" type="tel" 
                           class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                           placeholder="(xx) xxxxx-xxxx">
                </div>

                <div>
                    <label for="user_type" class="block text-sm font-medium text-gray-700">Tipo de usuário</label>
                    <select id="user_type" name="user_type" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="">Selecione...</option>
                        <option value="candidato">Candidato a emprego</option>
                        <option value="empresa">Empresa</option>
                    </select>
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input id="password" name="password" type="password" required 
                           class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                           placeholder="Senha (mínimo 8 caracteres)">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar senha</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required 
                           class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                           placeholder="Confirme sua senha">
                </div>
            </div>

            <div class="flex items-center">
                <input id="terms" name="terms" type="checkbox" required
                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="terms" class="ml-2 block text-sm text-gray-900">
                    Concordo com os <a href="#" class="text-blue-600 hover:text-blue-500">termos de uso</a> 
                    e <a href="#" class="text-blue-600 hover:text-blue-500">política de privacidade</a>
                </label>
            </div>

            <div>
                <button type="submit" 
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <i class="fas fa-user-plus text-blue-500 group-hover:text-blue-400"></i>
                    </span>
                    Criar conta
                </button>
            </div>

            <div class="text-center">
                <a href="{{ route('portal.index') }}" class="font-medium text-gray-600 hover:text-gray-500">
                    ← Voltar ao portal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
