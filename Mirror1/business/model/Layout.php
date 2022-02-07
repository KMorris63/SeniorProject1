<?php
/*
 * Database.php
 * Kacey Morris
 * January 23, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * This is the class which models a mirror layout.
 *
 * This is my own work, as influenced by class time and videos.
 */

class Layout {
    // layout properties
    private $id;
    private $label;
    private $image;
    private $topLeft;
    private $topRight;
    private $bottomLeft;
    private $bottomRight;
    private $isActive;

    // constructor
    function __construct($passID, $passLabel, $passImage, $passTopLeft, $passTopRight, $passBottomLeft, $passBottomRight) {
        $this->id = $passID;
        $this->label = $passLabel;
        $this->image = $passImage;
        $this->topLeft = $passTopLeft;
        $this->topRight = $passTopRight;
        $this->bottomLeft = $passBottomLeft;
        $this->bottomRight = $passBottomRight;
    }
    
    // getters and setters
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @return mixed
     */
    public function getTopLeft()
    {
        return $this->topLeft;
    }
    
    /**
     * @return mixed
     */
    public function getTopRight()
    {
        return $this->topRight;
    }
    
    /**
     * @return mixed
     */
    public function getBottomLeft()
    {
        return $this->bottomLeft;
    }
    
    /**
     * @return mixed
     */
    public function getBottomRight()
    {
        return $this->bottomRight;
    }
    
    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }
    
    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
    
    /**
     * @param mixed $topLeft
     */
    public function setTopLeft($topLeft)
    {
        $this->topLeft = $topLeft;
    }
    
    /**
     * @param mixed $topRight
     */
    public function setTopRight($topRight)
    {
        $this->topRight = $topRight;
    }
    
    /**
     * @param mixed $bottomLeft
     */
    public function setBottomLeft($bottomLeft)
    {
        $this->bottomLeft = $bottomLeft;
    }
    
    /**
     * @param mixed $bottomRight
     */
    public function setBottomRight($bottomRight)
    {
        $this->bottomRight = $bottomRight;
    }
    
    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }
}

?>