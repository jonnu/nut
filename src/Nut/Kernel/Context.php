<?php

namespace Nut\Kernel;

class Context
{
    /**
     * Get environment variable
     *
     * @param string $variable Variable
     * @param mixed  $fallback Value to fall back to if $variable does not exist
     *
     * @return mixed
     */
    public function getEnv($variable, $fallback = null)
    {
        if (!array_key_exists($variable, $_SERVER)) {
            return $fallback;
        }

        return $_SERVER[$variable];
    }

    public function getSapiName()
    {
        return php_sapi_name();
    }

    public function getVersion()
    {
        return phpversion();
    }

}
