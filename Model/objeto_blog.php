<?php

    class Objeto_Blog{
        //propiedades del objeto
        private $id;
        private $titulo;
        private $fecha;
        private $comentario;
        private $imagen;

        //metodos getter y setter (de acceso)
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }


        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo=$titulo;
        }


        public function getfecha(){
            return $this->fecha;
        }

        public function setFecha($fecha){
            $this->fecha=$fecha;
        }


        public function getComentario(){
            return $this->comentario;
        }

        public function setComentario($comentario){
            $this->comentario=$comentario;
        }


        public function getImagen(){
            return $this->imagen;
        }

        public function setImagen($imagen){
            $this->imagen=$imagen;
        }
    }



?>