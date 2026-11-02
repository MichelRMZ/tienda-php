
CREATE TABLE productos (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio NUMERIC(10,2) NOT NULL CHECK (precio > 0),
    existencia INTEGER NOT NULL DEFAULT 0,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO productos (nombre, precio, existencia) VALUES
    ('Teclado', 450.00, 10),
    ('Mouse', 250.00, 0),
    ('Monitor', 3200.00, 4),
	('Audifonos', 1800.00, 7),
	('Microfono',2600.00, 5),
	('Control',850.00,2);
	

SELECT * FROM productos WHERE existencia > 0;
SELECT nombre, precio FROM productos ORDER BY precio DESC;
UPDATE productos SET existencia = 15 WHERE nombre = 'Mouse';
SELECT * FROM productos WHERE nombre ILIKE '%mo%';

DROP TABLE prodcutos
 DELETE * FROM productos 
