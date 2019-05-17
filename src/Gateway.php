<?php
namespace DanToma\Omnipay\PayURomania;

use Omnipay\Common\AbstractGateway;
use DanToma\Omnipay\PayURomania\Message\PurchaseResponse;


/**

 * @method \Omnipay\Common\Message\ResponseInterface completeAuthorize(array $options = array())
 * @method \Omnipay\Common\Message\ResponseInterface completePurchase(array $options = array())
 * @method \Omnipay\Common\Message\ResponseInterface void(array $options = array())
 * @method \Omnipay\Common\Message\ResponseInterface createCard(array $options = array())
 * @method \Omnipay\Common\Message\ResponseInterface updateCard(array $options = array())
 * @method \Omnipay\Common\Message\ResponseInterface deleteCard(array $options = array())
 */
class Gateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'PayU Romania';
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'merchantId' => '',
            'secretKey' => '',
            'testMode' => true,
        );
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function authorize(array $parameters = array()){
        return $this->createRequest('\DanToma\Omnipay\PayURomania\Message\AuthorizeRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function capture(array $parameters = array()){
        return $this->createRequest('\DanToma\Omnipay\PayURomania\Message\CaptureRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return PurchaseResponse
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\DanToma\Omnipay\PayURomania\Message\PurchaseRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function refund(array $parameters = array()){
        return $this->createRequest('\DanToma\Omnipay\PayURomania\Message\RefundRequest', $parameters);
    }

    function __call($name, $arguments)
    {
        // TODO: Implement @method \Omnipay\Common\Message\ResponseInterface completeAuthorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\ResponseInterface completePurchase(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\ResponseInterface void(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\ResponseInterface createCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\ResponseInterface updateCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\ResponseInterface deleteCard(array $options = array())
    }
}