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

    /**
    * Data constructor for a layout object, passing parameters for all properties
    *
    * @param int $passID
    * @param string $passLabel
    * @param string $passImage
    * @param string $passTopLeft
    * @param string $passTopRight
    * @param string $passBottomLeft
    * @param string $passBottomRight
    * @param int $passIsActive
    * @return void
    */
    function __construct($passID, $passLabel, $passImage, $passTopLeft, $passTopRight, $passBottomLeft, $passBottomRight, $passIsActive) {
        $this->id = $passID;
        $this->label = $passLabel;
        $this->image = $passImage;
        $this->topLeft = $passTopLeft;
        $this->topRight = $passTopRight;
        $this->bottomLeft = $passBottomLeft;
        $this->bottomRight = $passBottomRight;
        $this->isActive = $passIsActive;
    }
    
    // getters and setters
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @return string
     */
    public function getTopLeft()
    {
        return $this->topLeft;
    }
    
    /**
     * @return string
     */
    public function getTopRight()
    {
        return $this->topRight;
    }
    
    /**
     * @return string
     */
    public function getBottomLeft()
    {
        return $this->bottomLeft;
    }
    
    /**
     * @return string
     */
    public function getBottomRight()
    {
        return $this->bottomRight;
    }
    
    /**
     * @return int
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }
    
    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
    
    /**
     * @param string $topLeft
     */
    public function setTopLeft($topLeft)
    {
        $this->topLeft = $topLeft;
    }
    
    /**
     * @param string $topRight
     */
    public function setTopRight($topRight)
    {
        $this->topRight = $topRight;
    }
    
    /**
     * @param string $bottomLeft
     */
    public function setBottomLeft($bottomLeft)
    {
        $this->bottomLeft = $bottomLeft;
    }
    
    /**
     * @param string $bottomRight
     */
    public function setBottomRight($bottomRight)
    {
        $this->bottomRight = $bottomRight;
    }
    
    /**
     * @param int $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }
}

?>
