<?php
/**
 * Created by PhpStorm.
 * User: Merdi Elongo
 * Date: 30/01/19
 * Time: 10:23
 */

class BoostrapInput extends Form{

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
    public function input($label = null, $type, $name = null, $placeholder = null)
    {
        return $this->surrond(
            '<label class="input-group-addon">' .$label. '</label><input type="' .$type. '" name="' .$name. '" class="form-control " value="' . $this->getValue($name) . '" placeholder = "'. $placeholder .'">'
        );
    }

    /**
     * @param $label
     * @param $type
     * @param $name
     * @return string
     */
    public function input_value($label = null, $type, $name = null, $value = null, $placeholder = null, $active = false)
    {
        return $this->surrond(
            '<label class="input-group-addon">' .$label. '</label><input type="' .$type. '" name="' .$name. '" class="form-control " value="' . $value . '" placeholder = "'. $placeholder .'" '. $active . '>'
        );
    }




    /**
     * bouton envoyer
     * @param $value
     * @return string
     */
    public function submit($value = null, $class = null, $name = null)
    {
        return $this->surrond('<input type="submit" class="' .$class. '" value="'.$value.'" name="'. $name .'">');
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
