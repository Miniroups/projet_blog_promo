<?php
namespace app\models;

/**
 *
 */
abstract class Model
{
    const DSN = 'mysql:host='.HOST.';dbname='.DB.';charset='.CHARSET;
    public $data;
    private $pdo;
    protected $stm;

    public function getData(string $query, array $data =[])
    {
        $this->dbConnect();
        if (!empty($data)) {
            $this->stm = $this->pdo->prepare($query);
            if (array_filter(array_keys($data), 'is_string')) {
                foreach ($data as $key => $value) {
                    $this->bParam($key, $value);
                }
            } else {
                for ($i=0; $i < count($data) ; $i++) {
                    $this->bParam(($i+1), $data[$i]);
                }
            }
            $this->stm->execute();
        } else {
            $this->stm = $this->pdo->query($query);
        }
        if ($this->stm->rowCount()) {
            return $this->stm;
        } else {
            throw new \Exception("Erreur dans la requêtes SQL");
        }
    }

    private function bParam($key, $value)
    {
      $tab = ['is_string'=>\PDO::PARAM_STR,'is_int'=>\PDO::PARAM_INT,'is_bool'=>\PDO::PARAM_BOOL];
      foreach ($tab as $callable => $PDO) {
        if ($callable($value)) {
          $this->stm->bindParam($key, $value, $PDO);
        }
      }
    }

    private function dbConnect()
    {
        if ($this->pdo == null) {
            try {
                $this->pdo = new \PDO(self::DSN, USER, PWD);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}
