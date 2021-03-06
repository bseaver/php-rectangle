<?php
    class Rectangle
    {
        private $length;
        private $width;

        function __construct($length, $width)
        {
            $this->setLength($length);
            $this->setwidth($width);
        }

        function isSquare()
        {
            return $this->length == $this->width;
        }

        function getArea()
        {
            return $this->length * $this->width;
        }

        function setLength($new_length)
        {
            $this->length = (float) $new_length;
        }

        function getLength()
        {
            return $this->length;
        }

        function setWidth($new_width)
        {
            $this->width = (float) $new_width;
        }

        function getWidth()
        {
            return $this->width;
        }
    }
?>
