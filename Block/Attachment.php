<?php
namespace Daviz\Contact\Block;

use Magento\Customer\Model\Session;
use Magento\Framework\View\Element\Template;

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

    /**
     * Attachment constructor.
     * @param Template\Context $context
     * @param array $data
     * @param Session $session
     */
    public function __construct(
        Template\Context $context,
        array $data = [],
        \Magento\Customer\Model\Session $session
    ) {
        $this->session = $session;
        parent::__construct($context, $data);
    }

    public function getStatusLogin()
    {
        if ($this->session->isLoggedIn()) {
            return true;
        } else {
            return false;
        }
    }
}
