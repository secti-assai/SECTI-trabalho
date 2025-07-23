<?php

use Illuminate\Support\Facades\Route;

// Página inicial abre o portal-trabalho
Route::get('/', function () {
    return view('portal-trabalho');
})->name('portal.index');

// Rota básica para acessar a área administrativa
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
})->name('admin.index');

// Rotas de autenticação pública (necessárias para o sistema de auth do Laravel)
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::get('/register', function () {
    return redirect()->route('admin.register');
})->name('register');

// Rotas administrativas de autenticação
Route::prefix('admin')->group(function () {
    // Login administrativo
    Route::middleware('guest')->group(function () {
        Route::get('/login', function () {
            return view('admin.auth.login');
        })->name('admin.login');
        
        Route::post('/login', function () {
            // Lógica de autenticação administrativa será implementada no controller
            return redirect()->route('admin.dashboard');
        })->name('admin.login.post');
        
        // Cadastro administrativo (apenas para criar novos admins)
        Route::get('/register', function () {
            return view('admin.auth.register');
        })->name('admin.register');
        
        Route::post('/register', function () {
            // Lógica de cadastro administrativa será implementada no controller
            return redirect()->route('admin.dashboard');
        })->name('admin.register.post');
    });

    // Rota temporária para cadastro sem autenticação (remover em produção)
    Route::get('/cadastrar-admin', function () {
        return view('admin.auth.register');
    })->name('admin.register.temp');

    // Logout administrativo
    Route::post('/logout', function () {
        // Lógica de logout será implementada no controller
        return redirect()->route('admin.login');
    })->middleware('auth')->name('admin.logout');

    // Rotas protegidas do painel administrativo
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        
        // Gestão de Vagas
        Route::get('/vagas', function () {
            return view('admin.vagas.index');
        })->name('admin.vagas.index');
        
        Route::get('/vagas/criar', function () {
            return view('admin.vagas.create');
        })->name('admin.vagas.create');
        
        // Gestão de Empresas
        Route::get('/empresas', function () {
            return view('admin.empresas.index');
        })->name('admin.empresas.index');
        
        Route::get('/empresas/criar', function () {
            return view('admin.empresas.create');
        })->name('admin.empresas.create');
        
        // Gestão de Cursos
        Route::get('/cursos', function () {
            return view('admin.cursos.index');
        })->name('admin.cursos.index');
        
        Route::get('/cursos/criar', function () {
            return view('admin.cursos.create');
        })->name('admin.cursos.create');
        
        // Gestão de Notícias
        Route::get('/noticias', function () {
            return view('admin.noticias.index');
        })->name('admin.noticias.index');
        
        Route::get('/noticias/criar', function () {
            return view('admin.noticias.create');
        })->name('admin.noticias.create');
    });
});

// Remover rotas públicas de autenticação - mantendo apenas rotas do portal público
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/exemplo', function () {
        return view('example');
    })->name('example');
});
