<?php

class Form
{

    /**
     * @var
     */
    public $data;
    /**
     * @var string
     */
    public $surrond = 'p';

    /**
     * Form constructor.
     * @param $data
     */

    public function  __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param $html
     * @return string
     */
    protected function surrond($html)
    {
        return "<{$this->surrond}>{$html}</{$this->surrond}>";
    }

    /**
     * @param $index
     * @return null
     */
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $type type de zone
     * @param $name
     * @param $class
     * @return string
     */
    public function input($type, $name, $class)
    {
        return $this->surrond(
            '<input type="' .$type. '" name="' .$name. '" class="'. $class .'" value="' . $this->getValue($name) . '">'
        );
    }

    /**
     * bouton envoyer
     * @param $value
     * @return string
     */
    public function submit($value = 'Valider', $class = null)
    {
        return $this->surrond('<button type="submit" class="' .$class. '">' .$value. '</button>');
    }
    
    /*public function select($option, $name, $class)
    {
        return $this->surrond('
        <select name="'.$name.'" class="'.$class.'">
            '.$option.'
        </select>
        ');
    }*/


}

