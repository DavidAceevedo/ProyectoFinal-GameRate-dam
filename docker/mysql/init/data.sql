-- 1. Limpieza de tablas
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE videojuego_plataforma;
TRUNCATE TABLE videojuego;
TRUNCATE TABLE categoria;
TRUNCATE TABLE plataforma;
TRUNCATE TABLE user;
SET FOREIGN_KEY_CHECKS = 1;

-- 2. Tu Usuario (Password: 123456)
INSERT INTO user (email, roles, password)
VALUES ('acevedomarindavid@gmail.com', '["ROLE_USER", "ROLE_ADMIN"]', '123456');

-- 3. Categorías
INSERT INTO categoria (id, nombre) VALUES
                                       (1, 'Acción'), (2, 'Aventura'), (3, 'RPG'), (4, 'Estrategia'), (5, 'Terror');

-- 4. Plataformas
INSERT INTO plataforma (id, nombre) VALUES
                                        (1, 'PC'), (2, 'PS5'), (3, 'Xbox Series X'), (4, 'Nintendo Switch');

-- 5. Videojuegos
INSERT INTO videojuego (id, titulo, descripcion, categoria_id) VALUES
                                                                   (1, 'Elden Ring', 'Un épico mundo abierto lleno de desafíos.', 3),
                                                                   (2, 'The Last of Us Part II', 'Una historia emocional y cruda.', 1),
                                                                   (3, 'Zelda: Tears of the Kingdom', 'Explora los cielos y tierras de Hyrule.', 2),
                                                                   (4, 'Halo Infinite', 'El regreso del Jefe Maestro.', 1),
                                                                   (5, 'Resident Evil Village', 'Terror en un pueblo perdido.', 5);

-- 6. Relacionar Juegos con Plataformas
INSERT INTO videojuego_plataforma (videojuego_id, plataforma_id) VALUES
                                                                     (1, 1), (1, 2), (1, 3),
                                                                     (2, 2),
                                                                     (3, 4),
                                                                     (4, 3),
                                                                     (5, 1), (5, 2);
