-- Crear la tabla de Control de Inventario
CREATE TABLE control_inventario (
    id SERIAL PRIMARY KEY,
    nombre_producto VARCHAR(255) NOT NULL,
    cantidad INT NOT NULL,
    fecha_registro DATE NOT NULL
);

-- Crear la tabla de Gestión de Cultivos
CREATE TABLE gestion_cultivos (
    id SERIAL PRIMARY KEY,
    nombre_cultivo VARCHAR(255) NOT NULL,
    fecha_plantacion DATE NOT NULL,
    fecha_cosecha DATE NOT NULL,
    estado VARCHAR(50) NOT NULL,
    observaciones TEXT,
    cantidad_cosechada INT NOT NULL,

);

-- Crear la tabla de Control de Calidad
CREATE TABLE control_calidad (
    id SERIAL PRIMARY KEY,
    nombre_producto VARCHAR(255) NOT NULL,
    humedad VARCHAR(50) NOT NULL,
    peso INT(50) NOT NULL,
    fecha_registro DATE NOT NULL,
    calidad VARCHAR(50) NOT NULL,
    tueste VARCHAR(50) NOT NULL,

);

-- Crear la tabla de Costos y Finanzas
CREATE TABLE costos_finanzas (
    id SERIAL PRIMARY KEY,
    concepto VARCHAR(255) NOT NULL,
    monto DECIMAL(10, 2) NOT NULL,
    fecha_registro DATE NOT NULL
);

-- Crear la tabla de Trabajadores
CREATE TABLE trabajadores (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    sexo VARCHAR(20) NOT NULL,
    puesto VARCHAR(255) NOT NULL,
    direccion VARCHAR(200),
    fecha_nacimiento DATE,
    salario DECIMAL(10,2),
    fecha_inicio DATE,
    fecha_fin DATE,
    permisos TEXT,
    certificaciones TEXT
);

-- Crear la tabla de Gestión de Mantenimiento
CREATE TABLE gestion_mantenimiento (
    id SERIAL PRIMARY KEY,
    equipo VARCHAR(255) NOT NULL,
    fecha_mantenimiento DATE NOT NULL,
    tipo_mantenimiento VARCHAR(50) NOT NULL,
    descripcion VARCHAR(500) NOT NULL,
    responsable VARCHAR(100)
);

