-- Insertar datos en la tabla de Control de Inventario
INSERT INTO control_inventario (nombre_producto, cantidad, fecha_registro) VALUES
('Café molido', 100, '2023-01-01'),
('Café en grano', 200, '2023-01-02'),
('Café soluble', 50, '2023-01-03'),
('Café descafeinado', 80, '2023-01-04'),
('Café tostado', 150, '2023-01-05'),
('Café instantáneo', 120, '2023-01-06'),
('Café orgánico', 90, '2023-01-07'),
('Café gourmet', 70, '2023-01-08'),
('Café aromatizado', 40, '2023-01-09'),
('Café en cápsulas', 60, '2023-01-10');

-- Insertar datos en la tabla de Gestión de Cultivos
INSERT INTO gestion_cultivos (nombre_cultivo, fecha_plantacion, fecha_cosecha, estado, observaciones, cantidad_cosechada) VALUES
('Café Arábica', '2023-01-01', '2023-04-01', 'En producción', 'Cultivo saludable', 500),
('Café Robusta', '2023-02-01', '2023-05-01', 'En producción', 'Cultivo con buen rendimiento', 700),
('Café Liberica', '2023-03-01', '2023-06-01', 'En producción', 'Cultivo resistente a plagas', 400),
('Café Excelsa', '2023-04-01', '2023-07-01', 'En producción', 'Cultivo con sabor exótico', 300),
('Café Maragogipe', '2023-05-01', '2023-08-01', 'En producción', 'Cultivo de granos grandes', 200),
('Café Catimor', '2023-06-01', '2023-09-01', 'En producción', 'Cultivo con buena resistencia climática', 600),
('Café Geisha', '2023-07-01', '2023-10-01', 'En producción', 'Cultivo de alta calidad', 100),
('Café Typica', '2023-08-01', '2023-11-01', 'En producción', 'Cultivo tradicional', 800),
('Café Bourbon', '2023-09-01', '2023-12-01', 'En producción', 'Cultivo con buen aroma', 400),
('Café Pacamara', '2023-10-01', '2024-01-01', 'En producción', 'Cultivo con sabor frutal', 300);

-- Insertar datos en la tabla de Control de Calidad
INSERT INTO control_calidad (nombre_producto, humedad, peso, fecha_registro, calidad, tueste) VALUES
('Café molido', '7%', 250, '2023-01-01', 'Alta', 'Medio'),
('Café en grano', '8%', 500, '2023-01-02', 'Alta', 'Tostado'),
('Café soluble', '5%', 150, '2023-01-03', 'Media', 'Medio'),
('Café descafeinado', '6%', 300, '2023-01-04', 'Alta', 'Tostado'),
('Café tostado', '4%', 400, '2023-01-05', 'Alta', 'Tostado'),
('Café instantáneo', '3%', 200, '2023-01-06', 'Baja', 'Tostado'),
('Café orgánico', '6%', 350, '2023-01-07', 'Alta', 'Medio'),
('Café gourmet', '5%', 250, '2023-01-08', 'Alta', 'Tostado'),
('Café aromatizado', '4%', 200, '2023-01-09', 'Baja', 'Tostado'),
('Café en cápsulas', '3%', 150, '2023-01-10', 'Media', 'Tostado');

-- Insertar datos en la tabla de Costos y Finanzas
INSERT INTO costos_finanzas (concepto, monto, fecha_registro) VALUES
('Compra de semillas', 5000.00, '2023-01-01'),
('Gastos de mantenimiento', 2000.00, '2023-01-02'),
('Sueldo de trabajadores', 10000.00, '2023-01-03'),
('Inversión en maquinaria', 8000.00, '2023-01-04'),
('Costos de producción', 6000.00, '2023-01-05'),
('Venta de café', 15000.00, '2023-01-06'),
('Impuestos y tasas', 3000.00, '2023-01-07'),
('Gastos de marketing', 4000.00, '2023-01-08'),
('Seguro de cultivo', 2500.00, '2023-01-09'),
('Inversión en tecnología', 7000.00, '2023-01-10');

-- Insertar datos en la tabla de Trabajadores
INSERT INTO trabajadores (nombre, apellido, sexo, puesto, direccion, fecha_nacimiento, salario, fecha_inicio, fecha_fin, permisos, certificaciones) VALUES
('Juan', 'Pérez', 'Masculino', 'Productor', 'Calle Principal 123', '1980-01-01', 1500.00, '2023-01-01', NULL, 'Permiso de conducir', 'Certificado de agricultura orgánica'),
('María', 'Gómez', 'Femenino', 'Supervisora', 'Avenida Central 456', '1985-02-02', 1800.00, '2023-01-01', NULL, 'Permiso de manipulación de alimentos', 'Certificado de gestión de cultivos'),
('Carlos', 'López', 'Masculino', 'Trabajador de campo', 'Calle Secundaria 789', '1990-03-03', 1200.00, '2023-01-01', NULL, NULL, 'Certificado de primeros auxilios'),
('Laura', 'Rodríguez', 'Femenino', 'Trabajadora de campo', 'Avenida Norte 012', '1995-04-04', 1200.00, '2023-01-01', NULL, 'Permiso de uso de maquinaria', 'Certificado de seguridad laboral'),
('Pedro', 'Martínez', 'Masculino', 'Tostador', 'Calle Sur 345', '1988-05-05', 1600.00, '2023-01-01', NULL, 'Permiso de manipulación de café', 'Certificado de tostado de café'),
('Ana', 'Hernández', 'Femenino', 'Catadora', 'Avenida Oeste 678', '1993-06-06', 1800.00, '2023-01-01', NULL, 'Permiso de degustación de café', 'Certificado de catado de café'),
('José', 'García', 'Masculino', 'Operador de maquinaria', 'Calle Este 901', '1992-07-07', 1400.00, '2023-01-01', NULL, 'Permiso de operación de maquinaria', 'Certificado de mantenimiento de maquinaria'),
('Sofía', 'Vargas', 'Femenino', 'Contadora', 'Avenida Sur Este 234', '1987-08-08', 2000.00, '2023-01-01', NULL, 'Permiso de manejo de finanzas', 'Certificado de contabilidad'),
('Javier', 'Rojas', 'Masculino', 'Vendedor', 'Calle Norte Oeste 567', '1994-09-09', 1500.00, '2023-01-01', NULL, 'Permiso de atención al cliente', 'Certificado de ventas'),
('Luisa', 'Sánchez', 'Femenino', 'Recursos Humanos', 'Avenida Sur Oeste 890', '1989-10-10', 1800.00, '2023-01-01', NULL, 'Permiso de gestión de personal', 'Certificado de recursos humanos');

-- Insertar datos en la tabla de Gestión de Mantenimiento
INSERT INTO gestion_mantenimiento (equipo, fecha_mantenimiento, tipo_mantenimiento, descripcion, responsable) VALUES
('Máquina de secado', '2023-01-01', 'Preventivo', 'Limpieza y revisión general', 'Carlos López'),
('Tostadora', '2023-01-02', 'Correctivo', 'Reparación de falla en el sistema de calentamiento', 'Pedro Martínez'),
('Máquina de envasado', '2023-01-03', 'Preventivo', 'Cambio de piezas desgastadas', 'José García'),
('Máquina de molienda', '2023-01-04', 'Correctivo', 'Ajuste de la molienda para obtener el tamaño deseado', 'Carlos López'),
('Máquina de empaque', '2023-01-05', 'Preventivo', 'Limpieza y calibración del sistema de sellado', 'José García'),
('Máquina de selección', '2023-01-06', 'Correctivo', 'Reemplazo de sensores defectuosos', 'Carlos López'),
('Máquina de etiquetado', '2023-01-07', 'Preventivo', 'Verificación y ajuste de la impresión de etiquetas', 'José García'),
('Transportador de café', '2023-01-08', 'Correctivo', 'Reparación de la banda transportadora', 'Carlos López'),
('Generador de energía', '2023-01-09', 'Preventivo', 'Cambio de aceite y filtros', 'José García'),
('Equipo de filtrado de agua', '2023-01-10', 'Preventivo', 'Limpieza y cambio de filtros', 'Carlos López');