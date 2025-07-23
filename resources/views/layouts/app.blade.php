<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal de Empregos - Prefeitura de Assaí')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-900': '#1e3a8a',
                        'blue-800': '#1e40af',
                        'blue-700': '#1d4ed8',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-blue-900 text-white">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <i class="fas fa-building text-4xl"></i>
                    <div>
                        <h1 class="text-xl font-bold">Prefeitura Municipal de Assaí</h1>
                        <p class="text-blue-200 text-sm">Portal de Empregos e Oportunidades</p>
                    </div>
                </div>
                <div class="hidden md:flex items-center gap-6">
                    <div class="flex items-center gap-2 text-sm">
                        <i class="fas fa-clock"></i>
                        <span>Seg-Sex: 8h às 17h</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <i class="fas fa-phone"></i>
                        <span>(43) 3262-1122</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-blue-800 text-white">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <div class="flex">
                    <!-- Link removido: rota portal.index não definida -->
                    <!-- Link removido: rota portal.cadastro não definida -->
                   
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="container mx-auto px-4 py-8">
            <div class="grid md:grid-cols-4 gap-6">
                <div>
                    <h4 class="font-semibold mb-3">Portal de Empregos</h4>
                    <p class="text-gray-300 text-sm">Conectando talentos com oportunidades na cidade de Assaí.</p>
                </div>

                <div>
                    <h4 class="font-semibold mb-3">Para Candidatos</h4>
                    
                </div>

                <div>
                    <h4 class="font-semibold mb-3">Para Empresas</h4>
                    
                </div>

                <div>
                    <h4 class="font-semibold mb-3">Atendimento</h4>
                    <p class="text-gray-300 text-sm">
                        Segunda a Sexta-feira<br>
                        8:00 às 17:00<br><br>
                        (43) 3262-1122
                    </p>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-6 pt-6 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} Prefeitura Municipal de Assaí - Portal de Empregos. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Função para alternar tabs
        function showTab(tabName) {
            // Esconder todas as tabs
            document.querySelectorAll('[data-tab-content]').forEach(tab => {
                tab.classList.add('hidden');
            });
            
            // Remover classe ativa de todos os botões
            document.querySelectorAll('[data-tab-button]').forEach(button => {
                button.classList.remove('bg-blue-600', 'text-white');
                button.classList.add('bg-gray-200', 'text-gray-700');
            });
            
            // Mostrar tab selecionada
            document.querySelector(`[data-tab-content="${tabName}"]`).classList.remove('hidden');
            
            // Ativar botão selecionado
            const activeButton = document.querySelector(`[data-tab-button="${tabName}"]`);
            activeButton.classList.remove('bg-gray-200', 'text-gray-700');
            activeButton.classList.add('bg-blue-600', 'text-white');
        }
    </script>
</body>
</html>
