<?php


namespace Ling\SimplePdoWrapper\Exception;


use Throwable;

/**
 * The SimplePdoWrapperQueryException class.
 */
class SimplePdoWrapperQueryException extends SimplePdoWrapperException
{

    /**
     * This property holds the query for this instance.
     * @var string
     */
    protected $query;


    /**
     * Builds the SimplePdoWrapperQueryException instance.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }


    /**
     * Returns the query of this instance.
     *
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Sets the query.
     *
     * @param string $query
     */
    public function setQuery(string $query)
    {
        $this->query = $query;
    }
}