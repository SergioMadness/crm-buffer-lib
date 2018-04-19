<?php namespace professionalweb\crmbuffer\Models;

use professionalweb\crmbuffer\Interfaces\Transport;
use professionalweb\crmbuffer\Interfaces\Request as IRequest;

/**
 * Request model
 * @package professionalweb\crmbuffer\Models
 */
class Request implements IRequest
{
    /**
     * Request data
     *
     * @var array
     */
    private $data = [];

    /**
     * @var Transport
     */
    private $transport;

    public function __construct(Transport $transport)
    {
        $this->setTransport($transport);
    }

    /**
     * Set field
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return IRequest
     */
    public function setField(string $key, $value): IRequest
    {
        $this->data[$key] = $value;

        return $this;
    }

    /**
     * Get value by key
     *
     * @param string $key
     *
     * @return mixed
     */
    public function getField(string $key)
    {
        return $this->data[$key] ?? null;
    }

    /**
     * Set all data
     *
     * @param array $data
     *
     * @return IRequest
     */
    public function setData(array $data): IRequest
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get all data
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Send request to service
     *
     * @return mixed
     */
    public function send()
    {
        return $this->getTransport()
            ->setData($this->getData())
            ->send();
    }

    /**
     * @return Transport
     */
    public function getTransport(): Transport
    {
        return $this->transport;
    }

    /**
     * @param Transport $transport
     *
     * @return $this
     */
    public function setTransport(Transport $transport): self
    {
        $this->transport = $transport;

        return $this;
    }


}