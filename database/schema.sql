-- DATABASE BASE SHIAIFLOW
CREATE TABLE
    IF NOT EXISTS academias (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(120) NOT NULL,
        cidade VARCHAR(120),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE
    IF NOT EXISTS atletas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(120) NOT NULL,
        email VARCHAR(150),
        data_nascimento DATE NOT NULL,
        peso_kg DECIMAL(5, 2) NOT NULL,
        faixa ENUM ('branca', 'azul', 'roxa', 'marrom', 'preta') NOT NULL,
        academia_id INT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        CONSTRAINT fk_atleta_academia FOREIGN KEY (academia_id) REFERENCES academias (id) ON DELETE SET NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE
    IF NOT EXISTS competicoes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(160) NOT NULL,
        local VARCHAR(160),
        data DATE NOT NULL,
        modalidade ENUM ('gi', 'nogi') NOT NULL DEFAULT 'gi',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- categorias por competição
CREATE TABLE
    IF NOT EXISTS categorias (
        id INT AUTO_INCREMENT PRIMARY KEY,
        competicao_id INT NOT NULL,
        nome VARCHAR(120) NOT NULL,
        faixa_min ENUM ('branca', 'azul', 'roxa', 'marrom', 'preta') NOT NULL,
        faixa_max ENUM ('branca', 'azul', 'roxa', 'marrom', 'preta') NOT NULL,
        idade_min INT NOT NULL,
        idade_max INT NOT NULL,
        peso_min DECIMAL(5, 2) NOT NULL,
        peso_max DECIMAL(5, 2) NOT NULL,
        tempo_luta_seg INT NOT NULL DEFAULT 300,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        CONSTRAINT fk_cat_competicao FOREIGN KEY (competicao_id) REFERENCES competicoes (id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- inscrições (RF4, RF5)
CREATE TABLE
    IF NOT EXISTS inscricoes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        atleta_id INT NOT NULL,
        categoria_id INT NOT NULL,
        status ENUM ('pendente', 'aprovada', 'reprovada') NOT NULL DEFAULT 'pendente',
        motivo_reprovacao VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        UNIQUE KEY ux_atleta_categoria (atleta_id, categoria_id),
        CONSTRAINT fk_insc_atleta FOREIGN KEY (atleta_id) REFERENCES atletas (id) ON DELETE CASCADE,
        CONSTRAINT fk_insc_categoria FOREIGN KEY (categoria_id) REFERENCES categorias (id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- pesagem e uniforme (RF6)
CREATE TABLE
    IF NOT EXISTS pesagens (
        id INT AUTO_INCREMENT PRIMARY KEY,
        inscricao_id INT NOT NULL,
        peso_oficial DECIMAL(5, 2) NOT NULL,
        uniforme_ok TINYINT (1) NOT NULL DEFAULT 0,
        status ENUM ('aprovado', 'reprovado') NOT NULL,
        observacoes VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        CONSTRAINT fk_pesagem_inscricao FOREIGN KEY (inscricao_id) REFERENCES inscricoes (id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE
    IF NOT EXISTS lutas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        categoria_id INT NOT NULL,
        fase VARCHAR(50) NOT NULL, -- ex: 'quartas','semifinal','final'
        ordem INT NOT NULL,
        atleta_a_id INT,
        atleta_b_id INT,
        vencedor_id INT,
        proxima_luta_id INT, -- chaveamento aponta para a próxima luta
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        CONSTRAINT fk_luta_categoria FOREIGN KEY (categoria_id) REFERENCES categorias (id) ON DELETE CASCADE
    );