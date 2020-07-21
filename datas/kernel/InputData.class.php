<?php
/**
 * Created by PhpStorm.
 * User: Merdi Elongo
 * Date: 29/07/2019
 * Time: 00:34
 */




class InputData extends Form{


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
    public function input($label = null, $type, $name = null, $class = null ,$placeholder = null)
    {
        return $this->surrond(
            '<label class="input-group-addon">' .$label. '</label><input type="' .$type. '" name="' .$name. '" class="'. $class .'" value="' . $this->getValue($name) . '" placeholder = "'. $placeholder .'">'
        );
    }

    /**
     * @param $label
     * @param $type
     * @param $name
     * @return string
     */
    public function file($label = null, $name = null, $supplement = null)
    {
        return $this->surrond(
            '<label class="input-group-addon">' .$label. '</label><input type="file" name="' .$name. '" value="' . $this->getValue($name) . '" '.$supplement.'>'
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

    public function select($label, $name, $option, $class = null)
    {
        $op = implode("</option><option>", $option).'</option>';
        return $this->surrond(
            '<label class="input-group-addon">' .$label. '</label><select name="'.$name.'" class="'.$class.'"><option>'.$op.'</option></select>'
        );
    }

    public function label($label, $class = null)
    {
        return $this->surrond('<label class="'.$class.'">' .$label. '</label>');
    }



}