@extends('layouts.admin')

@section('title', 'Painel Administrativo - Portal de Empregos')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-900">Painel Administrativo</h1>
                <div class="flex items-center gap-4">
                    <span class="text-gray-600">Bem-vindo, Admin</span>
                    <a href="#" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">Sair</a>
                </div>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-sm min-h-screen">
            <nav class="p-6">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center gap-3 p-3 rounded-lg bg-blue-50 text-blue-700">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                            <i class="fas fa-briefcase"></i>
                            Vagas de Emprego
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                            <i class="fas fa-building"></i>
                            Empresas
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                            <i class="fas fa-graduation-cap"></i>
                            Cursos
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                            <i class="fas fa-newspaper"></i>
                            Notícias
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                            <i class="fas fa-users"></i>
                            Usuários
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 text-gray-700">
                            <i class="fas fa-cog"></i>
                            Configurações
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Stats Cards -->
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Vagas Ativas</p>
                            <p class="text-3xl font-bold text-blue-600">127</p>
                        </div>
                        <i class="fas fa-briefcase text-blue-600 text-2xl"></i>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Empresas</p>
                            <p class="text-3xl font-bold text-green-600">89</p>
                        </div>
                        <i class="fas fa-building text-green-600 text-2xl"></i>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Currículos</p>
                            <p class="text-3xl font-bold text-purple-600">2,341</p>
                        </div>
                        <i class="fas fa-users text-purple-600 text-2xl"></i>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Contratações</p>
                            <p class="text-3xl font-bold text-orange-600">456</p>
                        </div>
                        <i class="fas fa-handshake text-orange-600 text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-4">Ações Rápidas</h3>
                    <div class="space-y-3">
                        <a href="{{ route('admin.vagas.create') }}" class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                            <i class="fas fa-plus text-blue-600"></i>
                            <span>Nova Vaga de Emprego</span>
                        </a>
                        <a href="{{ route('admin.empresas.create') }}" class="flex items-center gap-3 p-3 bg-green-50 rounded-lg hover:bg-green-100 transition">
                            <i class="fas fa-plus text-green-600"></i>
                            <span>Nova Empresa Parceira</span>
                        </a>
                        <a href="{{ route('admin.cursos') }}" class="flex items-center gap-3 p-3 bg-purple-50 rounded-lg hover:bg-purple-100 transition">
                            <i class="fas fa-plus text-purple-600"></i>
                            <span>Novo Curso</span>
                        </a>
                        <a href="{{ route('admin.noticias') }}" class="flex items-center gap-3 p-3 bg-orange-50 rounded-lg hover:bg-orange-100 transition">
                            <i class="fas fa-plus text-orange-600"></i>
                            <span>Nova Notícia</span>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-4">Últimas Atividades</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                            <span>Nova vaga cadastrada</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                            <span>Empresa aprovada</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                            <span>Curso atualizado</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-4">Pendências</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between items-center">
                            <span>Vagas para aprovar</span>
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">5</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Empresas para validar</span>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">3</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Currículos novos</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">12</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Management Sections -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <!-- Vagas Management -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                        <i class="fas fa-briefcase text-blue-600"></i>
                        Gestão de Vagas
                    </h3>
                    <div class="space-y-3">
                        <a href="{{ route('admin.vagas.index') }}" class="block p-3 border rounded-lg hover:bg-gray-50 transition">
                            <div class="flex justify-between items-center">
                                <span>Ver todas as vagas</span>
                                <i class="fas fa-arrow-right text-gray-400"></i>
                            </div>
                        </a>
                        <a href="{{ route('admin.vagas.create') }}" class="block p-3 border rounded-lg hover:bg-gray-50 transition">
                            <div class="flex justify-between items-center">
                                <span>Publicar nova vaga</span>
                                <i class="fas fa-plus text-blue-600"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Empresas Management -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                        <i class="fas fa-building text-green-600"></i>
                        Gestão de Empresas
                    </h3>
                    <div class="space-y-3">
                        <a href="{{ route('admin.empresas.index') }}" class="block p-3 border rounded-lg hover:bg-gray-50 transition">
                            <div class="flex justify-between items-center">
                                <span>Ver empresas parceiras</span>
                                <i class="fas fa-arrow-right text-gray-400"></i>
                            </div>
                        </a>
                        <a href="{{ route('admin.empresas.create') }}" class="block p-3 border rounded-lg hover:bg-gray-50 transition">
                            <div class="flex justify-between items-center">
                                <span>Cadastrar nova empresa</span>
                                <i class="fas fa-plus text-green-600"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recent Items -->
            <div class="bg-white rounded-lg shadow">
                <div class="p-6 border-b">
                    <h3 class="text-lg font-semibold">Itens Recentes</h3>
                </div>
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left border-b">
                                    <th class="pb-3">Tipo</th>
                                    <th class="pb-3">Título</th>
                                    <th class="pb-3">Status</th>
                                    <th class="pb-3">Data</th>
                                    <th class="pb-3">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="space-y-2">
                                <tr class="border-b">
                                    <td class="py-3">
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Vaga</span>
                                    </td>
                                    <td class="py-3">Desenvolvedor PHP</td>
                                    <td class="py-3">
                                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Ativa</span>
                                    </td>
                                    <td class="py-3">Hoje</td>
                                    <td class="py-3">
                                        <button class="text-blue-600 hover:text-blue-800 mr-2">Editar</button>
                                        <button class="text-red-600 hover:text-red-800">Excluir</button>
                                    </td>
                                </tr>
                                <!-- Mais linhas aqui -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
