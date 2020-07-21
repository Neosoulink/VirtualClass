<?php
/**
 * Created by PhpStorm.
 * User: Merdi Elongo
 * Date: 30/01/19
 * Time: 10:23
 */

class Input extends Form{

    /**
     * @param $html
     * @return string
     */
    protected function surrond($html)
    {
        return "<div class=\"input-group\">{$html}</div>";
    }



    /**
     * @param $label
     * @param $type
     * @param $name
     * @return string
     */
    public function input($type, $name = null, $placeholder = null)
    {
        return $this->surrond(
            '<input type="' .$type. '" name="' .$name. '" value="' . $this->getValue($name) . '" placeholder = "'. $placeholder .'">'
        );
    }




    /**
     * bouton envoyer
     * @param $value
     * @return string
     */
    public function submit($value = null, $taille = null)
    {
        return $this->surrond('<input type="submit" class="form-control btn-primary ' .$taille. '" value="'.$value.'">');
    }


    /**
     * bouton envoyer
     * @param $value
     * @return string
     */
    public function submit_xs($value = 'Valider', $taille = null)
    {
        return $this->surrond('<button type="submit" class="btn btn-primary ' .$taille. '">' .$value. '</button>');
    }

} 