<?php

namespace Core\Router\Http;

use Core\Router\Exceptions\InvalidArgumentException;

class Response
{
    /**
     * Json encode
     * @param array|JsonSerializable $value
     * @param int $options JSON options Bitmask consisting of JSON_HEX_QUOT, JSON_HEX_TAG, JSON_HEX_AMP, JSON_HEX_APOS, JSON_NUMERIC_CHECK, JSON_PRETTY_PRINT, JSON_UNESCAPED_SLASHES, JSON_FORCE_OBJECT, JSON_PRESERVE_ZERO_FRACTION, JSON_UNESCAPED_UNICODE, JSON_PARTIAL_OUTPUT_ON_ERROR.
     * @param int $dept JSON debt.
     * @throws InvalidArgumentException
     */
    public function json($value,int $options,int $dept = 512)
    {
        if (($value instanceof JsonSerializable) === false && is_array($value) === false) {
            throw new InvalidArgumentException('Invalid type for parameter "value". Must be of type array or object implementing the \JsonSerializable interface.');
        }

        $this->header('Content-Type: application/json; charset=utf-8');
        echo json_encode($value, $options, $dept);
    }

    /**
     * Add header to response
     * @param string $value
     * @return static
     */
    public function header(string $value) {
        header($value);

        return $this;
    }

    /**
     * Add multiple headers to response
     * @param array $headers
     * @return static
     */
    public function headers(array $headers) {
        foreach ($headers as $header) {
            $this->header($header);
        }

        return $this;
    }

}