<?php

namespace app\views;


class View
{
    const PATH = DIR_ROOT.'views/templates/';
    private $file = [];
    private $content = '';
    // remplis par les templates pour utilisation dans le MainView
    /**
    * @param mixed $action : array or string
    * @param array $data : associative array
    * @param string $error : set error action
    * description : transform les actions en chemin vers les templates
    * si $data alors continue vers @create
    */
    public function __construct($action, array $data = [], string $error = 'error')
    {
        // test si l'action est une erreur, une chaine de caractères ou un tableau d'actions
        if ($action === $error) {
            // $this->file[0] =ERROR_DIR . $action . '.php' ;
        } elseif (is_string($action)) {
            $this->file[0] = self::PATH . $action . '.php';
        } elseif (is_array($action)) {
            for ($i=0; $i < count($action) ; $i++) {
                $this->file[$i] = self::PATH . $action[$i] . '.php';
            }
        } else {
            throw new \Exception(EXCEPTION_INVALIDE);
        }
        // si des données ont été passées lors de la construction alors on créer la vue
        $this->create($data);
    }
    /**
    * @param array $data
    * description : appel @createFile autant de fois que de chemins stocker
    * appel une dernière fois creatfile pour tout envoyer dans le MainView
    */
    public function create(array $data)
    {

        // requière le contenu à afficher dans le MainView
        for ($i=0; $i < count($this->file) ; $i++) {
            $this->content .= $this->createFile($this->file[$i], $data);
        }
        // afiche le tout
        echo $this->content;
    }
    /**
    *@param string $file : file path
    *@param array $data : associative array
    *@return string : file content
    *description : requière un fichier, lui envoi des données
    * et le renvoi sous forme de chaine de caractères
    */
    private function createFile(string $file, array $data):string
    {
        if (file_exists($file)) {
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        } else {
            throw new \Exception($file.' : '.EXCEPTION_NOT_FOUND);
        }
    }
}
