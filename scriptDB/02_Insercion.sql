-- Inserción de datos en la tabla T01_Usuarios. --
INSERT INTO T01_Usuarios (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_FechaHoraUltimaConexion, T01_NumAccesos, T01_Perfil, T01_ImagenUsuario) VALUES 
    ('admin', SHA2('paso', 256), 'Administrador', 0, 'administrador', NULL),
    ('israel', SHA2('paso', 256), 'Israel', 0, 'usuario', NULL),
    ('christian', SHA2('paso', 256), 'Christian', 0, 'usuario', NULL),
    ('david', SHA2('paso', 256), 'David', 0, 'usuario', NULL),
    ('adrian', SHA2('paso', 256), 'Adrian', 0, 'usuario', NULL),
    ('tania', SHA2('paso', 256), 'Tania', 0, 'usuario', NULL),
    ('alejandro', SHA2('paso', 256), 'Alejandro', 0, 'usuario', NULL),
    ('victor', SHA2('paso', 256), 'Victor', 0, 'usuario', NULL),
    ('mario', SHA2('paso', 256), 'Mario', 0, 'usuario', NULL),
    ('maria', SHA2('paso', 256), 'Maria', 0, 'usuario', NULL),
    ('amor', SHA2('paso', 256), 'Amor', 0, 'usuario', NULL),
    ('heraclio', SHA2('paso', 256), 'Heraclio', 0, 'usuario', NULL),
    ('baldomero', SHA2('paso', 256), 'Baldomero', 0, 'usuario', NULL),
    ('teresa', SHA2('paso', 256), 'Teresa', 0, 'usuario', NULL);

-- Inserción de datos en la tabla T02_Departamentos. --
INSERT INTO T02_Departamentos (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento) VALUES
    ('AAA', 'Mi departamento AAA', 1554923890, 10, NULL),
    ('AAB', 'Mi departamento AAB', 1554923890, 10, NULL),
    ('BBB', 'Mi departamento BBB', 1554923890, 10, NULL),
    ('BBC', 'Mi departamento BBC', 1554923890, 10, NULL),
    ('CCC', 'Mi departamento CCC', 1554923890, 10, NULL),
    ('CCD', 'Mi departamento CCD', 1554923890, 10, NULL),
    ('DDD', 'Mi departamento DDD', 1554923890, 10, NULL),
    ('DDE', 'Mi departamento DDE', 1554923890, 10, NULL),
    ('EEE', 'Mi departamento EEE', 1554923890, 10, NULL),
    ('EEF', 'Mi departamento EEF', 1554923890, 10, NULL),
    ('FFF', 'Mi departamento FFF', 1554923890, 10, NULL);

