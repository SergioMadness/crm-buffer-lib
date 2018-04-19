<?php namespace professionalweb\crmbuffer;

use professionalweb\crmbuffer\Interfaces\Transport as ITransport;

/**
 * Transport to communicate with CRMBuffer service
 * @package professionalweb\crmbuffer
 */
class Transport implements ITransport
{
    /**
     * Data to send
     *
     * @var array
     */
    private $data;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $secretId;

    public function __construct(string $serviceUrl, string $clientId, string $secretId)
    {
        $this
            ->setClientId($clientId)
            ->setSecretId($secretId)
            ->setBaseUrl($serviceUrl);
    }

    /**
     * Send request
     *
     * @return mixed
     */
    public function send()
    {
        return \json_decode(
            $this->sendPostRequest(
                $this->getFullUrl(),
                $this->getSignedData()
            ), true);
    }

    /**
     * Get full url to API method
     *
     * @return string
     */
    protected function getFullUrl(): string
    {
        $url = $this->getUrl();
        $serviceUrl = rtrim($this->getBaseUrl(), '/');
        $needSlash = \strlen($url) > 1 && $url[0] !== '/' && \strlen($serviceUrl) > 1 && $serviceUrl[\strlen($serviceUrl) - 1] !== '/';

        return $serviceUrl . ($needSlash ? '/' : '') . $url;
    }

    /**
     * Get data with signature
     *
     * @return array
     */
    protected function getSignedData(): array
    {
        $data = $this->getData();
        $data['token'] = $this->getClientId();

        ksort($data, SORT_STRING);

        $stringToHash = http_build_query($data);

        $correctSignature = md5($stringToHash . $this->getSecretId());

        $data['sig'] = $correctSignature;

        return $data;
    }

    /**
     * Send POST request to CRMBuffer
     *
     * @param string $url
     * @param array  $params
     *
     * @return string
     */
    protected function sendPostRequest($url, array $params): string
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_USERAGENT, 'ProfessionalWeb.CRMBuffer.SDK/PHP');
        curl_setopt($curl, CURLOPT_POST, 1);
        $query = http_build_query($params);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($curl, CURLOPT_HEADER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Expect:']);
        $body = curl_exec($curl);

        return (string)$body;
    }

    /**
     * Set url to send request
     *
     * @param string $url
     *
     * @return ITransport
     */
    public function setUrl(string $url): ITransport
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set data to send to service
     *
     * @param array $data
     *
     * @return ITransport
     */
    public function setData(array $data): ITransport
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     *
     * @return $this
     */
    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     *
     * @return $this
     */
    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecretId(): string
    {
        return $this->secretId;
    }

    /**
     * @param string $secretId
     *
     * @return $this;
     */
    public function setSecretId(string $secretId): self
    {
        $this->secretId = $secretId;

        return $this;
    }


}