<?php



class BootstrapForm extends Form{
    
    
      /**
     * @param $html
     * @return string
     */
    protected function surrond($html)
    {
        return "<div class=\"form-goup\">{$html}</div>";
    }
    
    
    
     /**
     * @param $label 
     * @param $type
     * @param $name
     * @return string
     */
    public function input($label = null, $type, $name = null, $placeholder =  null)
    {
        return $this->surrond(
            '<label>' .$label. '</label><input type="' .$type. '" name="' .$name. '" class="form-control" value="' . $this->getValue($name) . '" placeholder = "'. $placeholder .'">'
        );
    }

    /**
     * @param $label
     * @param $type
     * @param $name
     * @return string
     */
    public function text($label = null, $type, $name = null)
    {
        return $this->surrond(
            '<label>' .$label. '</label><input type="' .$type. '" name="' .$name. '" class="form-control" value="' . $this->getValue($name) . '">'
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