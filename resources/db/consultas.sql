-- Tabla Users
INSERT INTO users (name, email, rol, created_at, updated_at)
VALUES 
('Montalvo Cuauhtemoc', 'cuauhtemoc@example.com', 'user', NOW(), NOW()),
('Elayne Navarrete', 'elayne@example.com', 'user', NOW(), NOW()),
('Ulises Villareal ', 'ulises@example.com', 'Admin', NOW(), NOW()),
('Willian Col', 'willian@example.com', 'user', NOW(), NOW()),
('Elmer Carrillo', 'elmer@example.com', 'user', NOW(), NOW()),
('Mary Tolentino ', 'mary@example.com', 'user', NOW(), NOW()),
('Jorge Cuevas', 'jorge@example.com', 'user', NOW(), NOW());

-- Tabla Maestros
INSERT INTO maestros (id_usuario, nombre_maestro, apellidos_maestro, idioma_maestro, estado_maestro, created_at, updated_at)
VALUES 
(1, 'Montalvo', 'Cuauhtemoc', 'Inglés', 1, NOW(), NOW()),
(2, 'Elayne', 'Navarrete', 'Inglés', 1, NOW(), NOW()),
(3, 'Ulises', 'Villareal', 'Inglés', 1, NOW(), NOW()),
(4, 'Willian', 'Col', 'Español', 1, NOW(), NOW()),
(5, 'Elmer', 'Carrillo', 'Matemáticas', 1, NOW(), NOW()),
(6, 'Mary', 'Tolentino', 'Inglés', 1, NOW(), NOW()),
(7, 'Jorge', 'Cuevas', 'Inglés', 1, NOW(), NOW());

-- Tabla Grupos
INSERT INTO grupos (nombre_grupo, carrera_grupo, num_alumnos_grupo, estado_grupo, created_at, updated_at)
VALUES 
('8 A', 'Negocios Internacionales', 30, 1, NOW(), NOW()),
('8 A', 'Ingeniería en Desarrollo de Software', 30, 1, NOW(), NOW()),
('8 A', 'ISP', 30, 1, NOW(), NOW()),
('8 A', 'Contaduría', 30, 1, NOW(), NOW()),
('8 A', 'Mecatrónica', 30, 1, NOW(), NOW()),
('8 B', 'Turismo', 30, 1, NOW(), NOW()),
('2 A', 'LITIID', 25, 1, NOW(), NOW()),
('2 A', 'Mecatrónica', 25, 1, NOW(), NOW()),
('2 A', 'LCO', 25, 1, NOW(), NOW());

-- Tabla Modulos
INSERT INTO modulos (id_maestro, id_grupo, dia_modulo, hora_inicio, hora_fin, materia_modulo, estado_modulo, created_at, updated_at)
VALUES 
(2, 1, 'Lunes', '09:00:00', '09:50:00', 'Negocios Internacionales', 1, NOW(), NOW()),
(2, 1, 'Lunes', '09:50:00', '10:40:00', 'Negocios Internacionales', 1, NOW(), NOW()),
(2, 2, 'Lunes', '10:40:00', '11:30:00', 'Ingeniería en Desarrollo de Software', 1, NOW(), NOW()),
(2, 2, 'Lunes', '11:30:00', '12:20:00', 'Ingeniería en Desarrollo de Software', 1, NOW(), NOW()),
(2, 3, 'Lunes', '12:40:00', '13:30:00', 'ISP', 1, NOW(), NOW()),
(2, 3, 'Lunes', '13:30:00', '14:20:00', 'ISP', 1, NOW(), NOW()),
(2, 4, 'Martes', '10:40:00', '11:30:00', 'Contaduría', 1, NOW(), NOW()),
(2, 4, 'Martes', '11:30:00', '12:20:00', 'Contaduría', 1, NOW(), NOW()),
(2, 5, 'Martes', '12:40:00', '13:30:00', 'Mecatrónica', 1, NOW(), NOW()),
(2, 5, 'Martes', '13:30:00', '14:20:00', 'Mecatrónica', 1, NOW(), NOW()),
(3, 7, 'Miércoles', '07:00:00', '07:50:00', 'LITIID', 1, NOW(), NOW()),
(3, 7, 'Miércoles', '07:50:00', '08:40:00', 'LITIID', 1, NOW(), NOW()),
(3, 8, 'Miércoles', '09:00:00', '09:50:00', 'Mecatrónica', 1, NOW(), NOW()),
(3, 8, 'Miércoles', '09:50:00', '10:40:00', 'Mecatrónica', 1, NOW(), NOW()),
(1, 6, 'Jueves', '09:00:00', '09:50:00', 'Turismo', 1, NOW(), NOW()),
(1, 6, 'Jueves', '09:50:00', '10:40:00', 'Turismo', 1, NOW(), NOW()),
(1, 1, 'Jueves', '12:40:00', '13:30:00', 'Turismo', 1, NOW(), NOW()),
(1, 1, 'Jueves', '13:30:00', '14:20:00', 'Turismo', 1, NOW(), NOW()),
(1, 9, 'Viernes', '07:50:00', '08:40:00', 'LCO', 1, NOW(), NOW()),
(1, 9, 'Viernes', '09:00:00', '09:50:00', 'LCO', 1, NOW(), NOW()),
(1, 9, 'Viernes', '10:40:00', '11:30:00', 'Turismo', 1, NOW(), NOW()),
(1, 9, 'Viernes', '11:30:00', '12:20:00', 'Turismo', 1, NOW(), NOW()),
(3, 7, 'Viernes', '12:40:00', '13:30:00', 'Negocios Internacionales', 1, NOW(), NOW()),
(3, 7, 'Viernes', '13:30:00', '14:20:00', 'Negocios Internacionales', 1, NOW(), NOW());

INSERT INTO horarios_oficiales (cuatrimestre_horario_oficial, id_modulo, descripcion_modulo, estado_horario, created_at, updated_at)
VALUES
-- Negocios Internacionales - Elayne - 8 A - Lunes
('2024-Q1', 1, 'Negocios Internacionales - Elayne', 1, NOW(), NOW()),
('2024-Q1', 2, 'Negocios Internacionales - Elayne', 1, NOW(), NOW()),
('2024-Q1', 3, 'Ingenieria en Software - Elayne', 1, NOW(), NOW()),
('2024-Q1', 4, 'Ingenieria en Software - Elayne', 1, NOW(), NOW()),
('2024-Q1', 5, 'ISP - Elayne', 1, NOW(), NOW()),
('2024-Q1', 6, 'ISP - Elayne', 1, NOW(), NOW()),
('2024-Q1', 7, 'Contaduria - Elayne', 1, NOW(), NOW()),
('2024-Q1', 8, 'Contaduria - Elayne', 1, NOW(), NOW()),
('2024-Q1', 9, 'Mecatronica - Elayne', 1, NOW(), NOW()),
('2024-Q1', 10, 'Mecatronica - Elayne', 1, NOW(), NOW()),
('2024-Q1', 11, 'LITIID - Ulises', 1, NOW(), NOW()),
('2024-Q1', 12, 'LITIID - Ulises', 1, NOW(), NOW()),
('2024-Q1', 13, 'Mecatronica - Ulises', 1, NOW(), NOW()),
('2024-Q1', 14, 'Mecatronica - Ulises', 1, NOW(), NOW()),
('2024-Q1', 15, 'Turismo - Cuauhtemoc', 1, NOW(), NOW()),
('2024-Q1', 16, 'Turismo - Cuauhtemoc', 1, NOW(), NOW()),
('2024-Q1', 17, 'Turismo - Cuauhtemoc', 1, NOW(), NOW()),
('2024-Q1', 18, 'Turismo - Cuauhtemoc', 1, NOW(), NOW()),
('2024-Q1', 19, 'LCO - Cuauhtemoc', 1, NOW(), NOW()),
('2024-Q1', 20, 'LCO - Cuauhtemoc', 1, NOW(), NOW()),
('2024-Q1', 21, 'Turismo - Cuauhtemoc', 1, NOW(), NOW()),
('2024-Q1', 22, 'Turismo - Cuauhtemoc', 1, NOW(), NOW()),
('2024-Q1', 23, 'Negocios Internacionales - Ulises', 1, NOW(), NOW()),
('2024-Q1', 24, 'Negocios Internacionales - Ulises', 1, NOW(), NOW())
;
