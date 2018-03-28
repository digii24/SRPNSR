<?php
class Usuario
{
    private $pdo;
    
    public $Id;
    public $Nombre;
    public $Apellido;
    public $Email;
    public $Sexo;
    public $Contrasena;
    public $Pais;     
    public $Telefono;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

        public function Registrar(Usuario $data) {
        try {
            $sql = "INSERT INTO usuarios (`ID_USUARIO`, `NOMBRE`, `APELLIDOS`, `CORREO_ELECT`, `CONTRASENA`, `PAIS`, `TELEFONO`, `SEXO`) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)->execute(array(
                $data->Id,
                $data->Nombre,
                $data->Apellido,
                $data->Email,
                $data->Contrasena,
                $data->Pais,
                $data->Telefono,
                $data->Sexo));
            
           header('Location: index.php?c=login');
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM usuarios WHERE ID_USUARIO = ?");


            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
   
}