<?php
$structure = [
    "app" => [
        "Controllers" => [
            "AuthController.php",
            "UserController.php",
            "AcademiaController.php",
            "CompeticaoController.php",
            "InscricaoController.php",
            "PesagemController.php",
            "ChaveamentoController.php",
            "MesarioController.php",
            "AnuncioController.php",
            "PodioController.php",
            "RankingController.php",
            "NotificacaoController.php",
            "RelatorioController.php",
            "DashboardController.php",
        ],
        "Models" => [
            "User.php",
            "Academia.php",
            "Competicao.php",
            "Categoria.php",
            "Atleta.php",
            "Inscricao.php",
            "Pesagem.php",
            "Luta.php",
            "Chaveamento.php",
            "Resultado.php",
            "Podio.php",
            "Ranking.php",
            "Notificacao.php",
        ],
        "Views" => [
            "layouts" => [
                "header.php",
                "footer.php",
                "modal.php",
            ],
            "pages" => [
                "auth" => ["login.php", "register.php"],
                "users" => ["perfil.php"],
                "academias" => ["listar.php"],
                "competicoes" => ["criar.php", "gerenciar.php"],
                "inscricoes" => ["inscrever.php"],
                "pesagem" => ["registrar.php"],
                "chaveamento" => ["visualizar.php", "editar.php"],
                "mesario" => ["placar.php"],
                "anuncios" => ["tela_publica.php"],
                "podio" => ["gerar.php"],
                "ranking" => ["academias.php"],
                "relatorios" => ["gerar.php"],
                "notificacoes" => ["listar.php"],
                "dashboard" => ["index.php"],
            ],
        ],
        "Core" => [
            "App.php",
            "Controller.php",
            "Model.php",
            "View.php",
        ],
    ],
    "config" => [
        "config.php",
        "database.php",
        "routes.php",
    ],
    "database" => [
        "migrations" => [
            "create_users_table.sql",
            "create_academias_table.sql",
            "create_competicoes_table.sql",
            "create_categorias_table.sql",
            "create_atletas_table.sql",
            "create_inscricoes_table.sql",
            "create_pesagens_table.sql",
            "create_lutas_table.sql",
            "create_resultados_table.sql",
            "create_podios_table.sql",
            "create_rankings_table.sql",
            "create_notificacoes_table.sql",
        ],
        "seeds" => [
            "seed_users.sql",
            "seed_academias.sql",
            "seed_competicoes.sql",
            "seed_categorias.sql",
        ],
        "schema.sql",
    ],
    "public" => [
        "css" => [],
        "js" => [],
        "img" => [],
        "index.php",
    ],
    "storage" => [
        "logs" => [],
        "uploads" => [],
        "cache" => [],
    ],
    "vendor" => [],
];

// Função para criar pastas e arquivos
function createStructure($base, $structure) {
    foreach ($structure as $key => $value) {
        $path = $base . DIRECTORY_SEPARATOR . $key;
        if (is_array($value)) {
            if (!is_dir($path)) mkdir($path, 0777, true);
            createStructure($path, $value);
        } else {
            $file = $base . DIRECTORY_SEPARATOR . $value;
            if (!file_exists($file)) file_put_contents($file, "<?php\n");
        }
    }
}

// Executa a criação a partir da pasta atual
createStructure(__DIR__, $structure);

echo "Estrutura de pastas e arquivos criada com sucesso!\n";
