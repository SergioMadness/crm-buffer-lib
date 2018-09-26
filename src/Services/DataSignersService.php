<?php namespace professionalweb\IntegrationHub\Connector\Services;

use professionalweb\IntegrationHub\Connector\Interfaces\DataSigner;

/**
 * Service to sign data and validate signature
 * @package professionalweb\IntegrationHub\Connector\Services
 */
class DataSignersService implements DataSigner
{

    /**
     * Sign data
     *
     * @param        $data
     * @param string $key
     *
     * @return string
     */
    public function sign($data, string $key): string
    {
        $data = (array)$data;
        ksort($data, SORT_STRING);
        $stringToSign = http_build_query($data);

        return md5($stringToSign . $key);
    }

    /**
     * Validate signature
     *
     * @param        $data
     * @param string $key
     * @param string $signature
     *
     * @return bool
     */
    public function validate($data, string $key, string $signature): bool
    {
        return $signature === $this->sign($data, $key);
    }
}