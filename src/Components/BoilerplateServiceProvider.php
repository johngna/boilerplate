<?php

namespace Johngna\Boilerplate;

use Illuminate\Support\ServiceProvider;

class BoilerplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publicar views para o diretório resources do projeto que utilizará o pacote
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'boilerplate');

        // Permitir que usuários publiquem os arquivos de view
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/boilerplate'),
        ], 'views');
    }

    public function register()
    {
        // Registrar qualquer configuração ou serviço do pacote (se necessário)
    }
}
