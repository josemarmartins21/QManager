<?php
    class Cliente {
        private string $nome;
        private string $telefone;
        private string $email;
        private string $pacote;
        private string $morada;
        private string $data_nova;


        public function __construct($nome, $telefone, $email, $pacote, $morada)
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->pacote = $pacote;
            $this->morada = $morada;
        }

        public function __getNome(): string
        {
            return $this->nome;
        }

        public function __setNome(string $nome): void
        {
            $this->nome = $nome;
        }

        public function __getTelefone(): string
        {   
            return $this->telefone;
        }

        public function __setTelefone(string $telefone): void
        {
            $this->telefone = $telefone;
        }

        public function __getEmail(): string
        {
            return $this->email;
        }

        public function __setEmail(string $email): void
        {
            $this->email = $email;
        }

        public function __getPacote(): string
        {
            return $this->pacote;
        }

        public function __setPacote(string $pacote): void
        {
            $this->pacote = $pacote;
        }

        public function __getMorada()
        {
            return $this->morada;
        }

        public function __setMorada(string $morada):void
        {
            $this->morada = $morada;
        }

        public function __getDataNova()
        {
            return $this->data_nova;
        }

        public function __setDataNOva(string $data)
        {
            $this->data_nova = $data;
        }

    }