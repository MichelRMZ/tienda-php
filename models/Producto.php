<?php class Producto
{
    public function __construct(private PDO $db) {}
    public function todos(): array
    {
        return $this->db->query('SELECT * FROM productos ORDER BY id DESC')-> fetchAll();
    }
    public function crear(string $nombre, float $precio, int $existencia): void
    {
        $sql = 'INSERT INTO productos (nombre, precio, existencia) VALUES (? , ?, ?)';
        $this->db->prepare($sql)->execute([$nombre, $precio, $existencia]);
    }
}
