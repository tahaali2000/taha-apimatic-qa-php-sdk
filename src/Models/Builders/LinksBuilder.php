<?php

declare(strict_types=1);

/*
 * PaginationTesterLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaginationTesterLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaginationTesterLib\Models\Links;

/**
 * Builder for model Links
 *
 * @see Links
 */
class LinksBuilder
{
    /**
     * @var Links
     */
    private $instance;

    private function __construct(Links $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Links Builder object.
     */
    public static function init(): self
    {
        return new self(new Links());
    }

    /**
     * Sets first field.
     *
     * @param string|null $value
     */
    public function first(?string $value): self
    {
        $this->instance->setFirst($value);
        return $this;
    }

    /**
     * Sets last field.
     *
     * @param string|null $value
     */
    public function last(?string $value): self
    {
        $this->instance->setLast($value);
        return $this;
    }

    /**
     * Sets prev field.
     *
     * @param string|null $value
     */
    public function prev(?string $value): self
    {
        $this->instance->setPrev($value);
        return $this;
    }

    /**
     * Sets next field.
     *
     * @param string|null $value
     */
    public function next(?string $value): self
    {
        $this->instance->setNext($value);
        return $this;
    }

    /**
     * Initializes a new Links object.
     */
    public function build(): Links
    {
        return CoreHelper::clone($this->instance);
    }
}
