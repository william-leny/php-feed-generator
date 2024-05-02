<?php
namespace ShoppingFeed\Feed\Product;

class ProductAttribute
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value, $type)
    {
        $this->name  = trim($name);
        $this->value = trim($value);
        $this->type  = trim($type);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
