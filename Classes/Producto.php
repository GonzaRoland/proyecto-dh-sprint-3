<?php

class Producto
{
    private $id;
    private $nombre;
    private $descripcion;
    private $codigo;
    private $precio;

    public function __construct(int $id, string $nombre, string $descripcion, string $codigo, int $precio)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->codigo = $codigo;
        $this->precio = $precio;
    }

    //ID
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    //NOMBRE
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    //DESCRIPCION
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->nombre = $nombre;
    }

    //CODIGO
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    //PRECIO
    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
}

