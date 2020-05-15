<?php
namespace Davidev\Contact\Block;

use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session;

/**
 * Class Comment
 *
 */
class Attachment extends Template
{
    /**
     * @var string
     */
    protected $_template = 'address/edit/field/comment.phtml';
    
    /**
     * Session of Customer
     *
     * @var Magento\Customer\Model\Session;
     */
    private $session;

    public function __construct(
        \Magento\Customer\Model\Session $session
    ){
        $this->session = $session;
    }

    public function getStatusLogin(){
        if ($this->session->isLoggedIn()) {
            return true;
        } else {
            return false;
        }
    }

}