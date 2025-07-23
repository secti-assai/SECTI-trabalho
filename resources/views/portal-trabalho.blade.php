@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50">
  {{-- Hero Section --}}
  <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700 text-white py-20 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="absolute inset-0 bg-[url('/placeholder.svg?height=800&width=1200')] opacity-5"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
      <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">
        Portal de Empregos
      </h1>
      <p class="text-lg md:text-2xl lg:text-3xl mb-10 opacity-90 max-w-4xl mx-auto font-light">
        Conectando talentos às oportunidades em Assaí
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="#" class="bg-white text-blue-900 hover:bg-blue-50 px-8 py-6 text-lg font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center">
          <i class="fa fa-search mr-2"></i>
          Buscar Vagas
        </a>
        <a href="#" class="border-2 border-white text-white hover:bg-white hover:text-blue-900 px-8 py-6 text-lg font-semibold rounded-xl transition-all duration-300 hover:scale-105 bg-transparent flex items-center justify-center">
          <i class="fa fa-user-plus mr-2"></i>
          Cadastrar Currículo
        </a>
      </div>
    </div>
  </section>

  {{-- Estatísticas --}}
  <section class="relative -mt-16 z-20 mb-16">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
        <div class="text-center border-0 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 bg-white/95 backdrop-blur">
          <div class="p-6">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 mb-4">
              <i class="fa fa-briefcase text-blue-600 h-6 w-6"></i>
            </div>
            <div class="text-3xl font-bold text-blue-900 mb-2">{{ $estatisticas['vagas_ativas'] ?? 127 }}</div>
            <div class="text-gray-600 font-medium">Vagas Ativas</div>
          </div>
        </div>
        <div class="text-center border-0 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 bg-white/95 backdrop-blur">
          <div class="p-6">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-green-100 mb-4">
              <i class="fa fa-users text-green-600 h-6 w-6"></i>
            </div>
            <div class="text-3xl font-bold text-green-900 mb-2">{{ $estatisticas['curriculos'] ?? 2341 }}</div>
            <div class="text-gray-600 font-medium">Currículos</div>
          </div>
        </div>
        <div class="text-center border-0 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 bg-white/95 backdrop-blur">
          <div class="p-6">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-purple-100 mb-4">
              <i class="fa fa-handshake text-purple-600 h-6 w-6"></i>
            </div>
            <div class="text-3xl font-bold text-purple-900 mb-2">{{ $estatisticas['contratacoes'] ?? 456 }}</div>
            <div class="text-gray-600 font-medium">Contratações</div>
          </div>
        </div>
        <div class="text-center border-0 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 bg-white/95 backdrop-blur">
          <div class="p-6">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-orange-100 mb-4">
              <i class="fa fa-building text-orange-600 h-6 w-6"></i>
            </div>
            <div class="text-3xl font-bold text-orange-900 mb-2">{{ $estatisticas['empresas'] ?? 89 }}</div>
            <div class="text-gray-600 font-medium">Empresas</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Cursos de Capacitação --}}
  <section class="mb-16">
    <div class="container mx-auto px-4">
      <div class="border-0 shadow-xl bg-white/90 backdrop-blur p-8 rounded-xl">
        <div class="text-center pb-8">
          <h2 class="text-4xl font-bold text-blue-900 flex items-center justify-center gap-3 mb-4">
            <i class="fa fa-graduation-cap h-10 w-10"></i>
            Cursos de Capacitação
          </h2>
          <p class="text-lg">Desenvolva suas habilidades com nossos cursos gratuitos</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="bg-gradient-to-br from-blue-50 to-blue-100 border-0 shadow-lg p-8 rounded-xl">
            <div class="flex gap-6 items-start">
              <div class="bg-blue-600 p-4 rounded-full">
                <i class="fa fa-desktop text-white h-8 w-8"></i>
              </div>
              <div>
                <h4 class="text-xl font-semibold mb-3 text-gray-800">Informática Básica</h4>
                <p class="text-gray-600 mb-4">Curso básico de informática com Word, Excel e Internet</p>
                <div class="flex flex-wrap gap-2 mb-6">
                  <span class="bg-white/80 px-2 py-1 rounded text-sm"><i class="fa fa-clock mr-1"></i>40 horas</span>
                  <span class="bg-white/80 px-2 py-1 rounded text-sm"><i class="fa fa-award mr-1"></i>Gratuito</span>
                  <span class="bg-white/80 px-2 py-1 rounded text-sm"><i class="fa fa-globe mr-1"></i>Presencial</span>
                </div>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded transition-all duration-300 inline-flex items-center">
                  <i class="fa fa-user-plus mr-2"></i>
                  Inscrever-se
                </a>
              </div>
            </div>
          </div>
          <div class="bg-gradient-to-br from-green-50 to-green-100 border-0 shadow-lg p-8 rounded-xl">
            <div class="flex gap-6 items-start">
              <div class="bg-green-600 p-4 rounded-full">
                <i class="fa fa-headphones text-white h-8 w-8"></i>
              </div>
              <div>
                <h4 class="text-xl font-semibold mb-3 text-gray-800">Atendimento ao Cliente</h4>
                <p class="text-gray-600 mb-4">Técnicas de atendimento e relacionamento com clientes</p>
                <div class="flex flex-wrap gap-2 mb-6">
                  <span class="bg-white/80 px-2 py-1 rounded text-sm"><i class="fa fa-clock mr-1"></i>20 horas</span>
                  <span class="bg-white/80 px-2 py-1 rounded text-sm"><i class="fa fa-award mr-1"></i>Gratuito</span>
                  <span class="bg-white/80 px-2 py-1 rounded text-sm"><i class="fa fa-globe mr-1"></i>Online</span>
                </div>
                <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded transition-all duration-300 inline-flex items-center">
                  <i class="fa fa-user-plus mr-2"></i>
                  Inscrever-se
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Empresas Parceiras --}}
  <section class="mb-16">
    <div class="container mx-auto px-4">
      <div class="border-0 shadow-xl bg-white/90 backdrop-blur p-8 rounded-xl">
        <div class="text-center mb-8">
          <h2 class="text-3xl font-bold text-blue-900 flex items-center justify-center gap-3 mb-4">
            <i class="fa fa-building h-8 w-8"></i>
            Empresas Parceiras
          </h2>
          <p>Conheça as empresas que confiam em nosso portal</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-gradient-to-br from-blue-50 to-blue-100 border-0 shadow-lg p-6 text-center rounded-xl">
            <i class="fa fa-store h-12 w-12 text-blue-600 mx-auto mb-4"></i>
            <h4 class="font-semibold mb-2 text-gray-800">Comércio Local</h4>
            <p class="text-gray-600 text-sm mb-4">44 empresas cadastradas</p>
            <a href="#" class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-4 py-2 rounded transition-all duration-300 inline-block">Ver Empresas</a>
          </div>
          <div class="bg-gradient-to-br from-purple-50 to-purple-100 border-0 shadow-lg p-6 text-center rounded-xl">
            <i class="fa fa-industry h-12 w-12 text-purple-600 mx-auto mb-4"></i>
            <h4 class="font-semibold mb-2 text-gray-800">Indústria</h4>
            <p class="text-gray-600 text-sm mb-4">23 empresas cadastradas</p>
            <a href="#" class="border border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white px-4 py-2 rounded transition-all duration-300 inline-block">Ver Empresas</a>
          </div>
          <div class="bg-gradient-to-br from-orange-50 to-orange-100 border-0 shadow-lg p-6 text-center rounded-xl">
            <i class="fa fa-wrench h-12 w-12 text-orange-600 mx-auto mb-4"></i>
            <h4 class="font-semibold mb-2 text-gray-800">Serviços</h4>
            <p class="text-gray-600 text-sm mb-4">21 empresas cadastradas</p>
            <a href="#" class="border border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white px-4 py-2 rounded transition-all duration-300 inline-block">Ver Empresas</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Notícias e Contato --}}
  <section class="mb-16">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-2 gap-8">
        {{-- Notícias --}}
        <div class="border-0 shadow-xl bg-white/90 backdrop-blur p-8 rounded-xl">
          <h2 class="text-2xl font-bold text-blue-900 flex items-center gap-3 mb-6">
            <i class="fa fa-newspaper h-6 w-6"></i>
            Últimas Notícias
          </h2>
          <div class="space-y-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 border-0 shadow-md p-6 rounded-xl">
              <h4 class="font-semibold mb-2 text-gray-800">Nova parceria com empresas locais</h4>
              <p class="text-gray-600 text-sm mb-3">O Portal de Empregos de Assaí firmou parceria com 15 novas empresas da região, aumentando as oportunidades de trabalho para os cidadãos.</p>
              <p class="text-gray-500 text-xs font-medium">17 de Janeiro, 2024</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 border-0 shadow-md p-6 rounded-xl">
              <h4 class="font-semibold mb-2 text-gray-800">Feira de Empregos será realizada em fevereiro</h4>
              <p class="text-gray-600 text-sm mb-3">Evento reunirá empresas e candidatos no Centro de Convenções de Assaí. Inscrições abertas para empresas e participantes.</p>
              <p class="text-gray-500 text-xs font-medium">15 de Janeiro, 2024</p>
            </div>
          </div>
        </div>
        {{-- Contato --}}
        <div class="border-0 shadow-xl bg-white/90 backdrop-blur p-8 rounded-xl">
          <h2 class="text-2xl font-bold text-blue-900 flex items-center gap-3 mb-6">
            <i class="fa fa-envelope h-6 w-6"></i>
            Fale Conosco
          </h2>
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <i class="fa fa-map-marker-alt text-blue-600 h-6 w-6 mt-1 flex-shrink-0"></i>
              <div>
                <h4 class="font-semibold mb-2 text-gray-800">Endereço</h4>
                <p class="text-gray-600 text-sm leading-relaxed">
                  Rua Prefeito João Silva, 456<br>
                  Centro - Assaí/PR<br>
                  CEP: 86220-000
                </p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <i class="fa fa-phone text-blue-600 h-6 w-6 mt-1 flex-shrink-0"></i>
              <div>
                <h4 class="font-semibold mb-2 text-gray-800">Telefones</h4>
                <p class="text-gray-600 text-sm leading-relaxed">
                  Portal de Empregos: (43) 3262-1122<br>
                  Secretaria do Trabalho: (43) 3262-1123<br>
                  WhatsApp: (43) 99999-0000
                </p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <i class="fa fa-envelope text-blue-600 h-6 w-6 mt-1 flex-shrink-0"></i>
              <div>
                <h4 class="font-semibold mb-2 text-gray-800">E-mail</h4>
                <p class="text-gray-600 text-sm leading-relaxed">
                  empregos@assai.pr.gov.br<br>
                  trabalho@assai.pr.gov.br
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ...existing code... --}}
</div>
@endsection