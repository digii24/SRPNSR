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
            header('Location: index.php?c=reservacionUsuarioV1');
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

//	public function Listar()
//	{
//		try
//		{
//			$result = array();
//
//			$stm = $this->pdo->prepare("SELECT * FROM ulumnos");
//			$stm->execute();
//
//			return $stm->fetchAll(PDO::FETCH_OBJ);
//		}
//		catch(Exception $e)
//		{
//			die($e->getMessage());
//		}
//	}

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

//	public function Eliminar($id)
//	{
//		try 
//		{
//			$stm = $this->pdo
//			            ->prepare("DELETE FROM usuarios WHERE ID_USUARIO = ?");			          
//
//			$stm->execute(array($id));
//		} catch (Exception $e) 
//		{
//			die($e->getMessage());
//		}
//	}
//	public function Actualizar($data)
//	{
//		try 
//		{
//			$sql = "UPDATE alumnos SET 
//						Nombre          = ?, 
//						Apellido        = ?,
//                                                Correo          = ?,
//						Sexo            = ?, 
//						FechaNacimiento = ?
//				    WHERE id = ?";
//
//			$this->pdo->prepare($sql)
//			     ->execute(
//				    array(
//                                        $data->Nombre, 
//                                        $data->Apellido,
//                                        $data->Correo,
//                                        $data->Sexo,
//                                        $data->FechaNacimiento,
//                                        $data->id
//                                    )
//				);
//		} catch (Exception $e) 
//		{
//			die($e->getMessage());
//		}
//	}

	
}