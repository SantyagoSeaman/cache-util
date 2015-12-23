<?php


namespace Fig\Cache;

trait KeyValidatorTrait
{

    /**
     * Determines if the specified key is legal under PSR-6.
     *
     * @param string $key
     *   The key to validate.
     * @throws InvalidArgumentException
     *   An exception implementing The Cache InvalidArgumentException interface
     *   will be thrown if the key does not validate.
     * @return bool
     *   TRUE if the specified key is legal.
     */
    protected function validateKey($key)
    {
        $matched = preg_match('/^[A-Za-z0-9_.]{1,64}$/', $key);

        if (1 !== $matched) {
            throw new InvalidArgumentException('Can\'t validate the specified key');
        }

        return true;
    }
}
