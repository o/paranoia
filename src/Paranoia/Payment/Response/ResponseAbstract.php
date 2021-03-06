<?php
namespace Paranoia\Payment\Response;

abstract class ResponseAbstract
{

    /**
     * @var boolean
     */
    protected $_isSuccess;

    /**
     * @var string
     */
    protected $_transactionType;

    /**
     * @var string
     */
    protected $_orderId;

    /**
     * @var string
     */
    protected $_transactionId;

    /**
     * @var string
     */
    protected $_authCode;

    /**
     * @var integer
     */
    protected $_responseCode;

    /**
     * @var string
     */
    protected $_responseMessage;

    /**
     * @var string
     */
    protected $_rawData;

    /**
     * @var integer
     */
    protected $_time;

    /**
     * @see \Payment\Response\ResponseInterface::isSuccess()
     */
    public function isSuccess()
    {
        return $this->_isSuccess;
    }

    /**
     * @see \Payment\Response\ResponseInterface::setIsSuccess()
     */
    public function setIsSuccess( $isSuccess )
    {
        $this->_isSuccess = $isSuccess;
        return $this;
    }

    /**
     * @see \Payment\Response\ResponseInterface::getTransactionType()
     */
    public function getTransactionType()
    {
        return $this->_transactionType;
    }

    /**
     * @see \Payment\Response\ResponseInterface::setTransactionType()
     */
    public function setTransactionType( $transactionType )
    {
        $this->_transactionType = $transactionType;
        return $this;
    }

    /**
     * @see \Payment\Response\ResponseInterface::getOrderId()
     */
    public function getOrderId()
    {
        return $this->_orderId;
    }

    /**
     * @see \Payment\Response\ResponseInterface::setOrderId()
     */
    public function setOrderId( $orderId )
    {
        $this->_orderId = $orderId;
        return $this;
    }

    /**
     * @see \Payment\Response\ResponseInterface::getTransactionId()
     */
    public function getTransactionId()
    {
        return $this->_transactionId;
    }

    /**
     * @see \Payment\Response\ResponseInterface::setTransactionId()
     */
    public function setTransactionId( $transactionId )
    {
        $this->_transactionId = $transactionId;
        return $this;
    }

    /**
     * returns auth code.
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->_authCode;
    }

    /**
     * sets auth code to request object.
     *
     * @param string $authCode
     *
     * @return self
     */
    public function setAuthCode( $authCode )
    {
        $this->_authCode = $authCode;
        return $this;
    }

    /**
     * @see \Payment\Response\ResponseInterface::getResponseCode()
     */
    public function getResponseCode()
    {
        return $this->_responseCode;
    }

    /**
     * @see \Payment\Response\ResponseInterface::setResponseCode()
     */
    public function setResponseCode( $responseCode )
    {
        $this->_responseCode = $responseCode;
        return $this;
    }

    /**
     * @see \Payment\Response\ResponseInterface::getResponseCode()
     */
    public function getResponseMessage()
    {
        return $this->_responseMessage;
    }

    /**
     * @see \Payment\Response\ResponseInterface::setResponseMessage()
     */
    public function setResponseMessage( $responseMessage )
    {
        $this->_responseMessage = $responseMessage;
        return $this;
    }

    /**
     * returns request as raw data.
     *
     * @return string
     */
    public function getRawData()
    {
        return $this->_rawData;
    }

    /**
     * sets response data as raw.
     *
     * @param string $rawData
     *
     * @return self
     */
    public function setRawData( $rawData )
    {
        $this->_rawData = $rawData;
        return $this;
    }

    /**
     * @see \Payment\TransferInterface::getTime()
     */
    public function getTime()
    {
        return $this->_time;
    }

    /**
     * @see \Payment\TransferInterface::setTime()
     */
    public function setTime( $time )
    {
        $this->_time = $time;
        return $this;
    }
}
