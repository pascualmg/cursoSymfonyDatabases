<?php

namespace AppBundle\Entity;

/**
 * HeskStdReplies07022012
 */
class HeskStdReplies07022012
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $replyOrder = '0';

    /**
     * @var string
     */
    private $categories;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return HeskStdReplies07022012
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return HeskStdReplies07022012
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set replyOrder
     *
     * @param integer $replyOrder
     *
     * @return HeskStdReplies07022012
     */
    public function setReplyOrder($replyOrder)
    {
        $this->replyOrder = $replyOrder;

        return $this;
    }

    /**
     * Get replyOrder
     *
     * @return integer
     */
    public function getReplyOrder()
    {
        return $this->replyOrder;
    }

    /**
     * Set categories
     *
     * @param string $categories
     *
     * @return HeskStdReplies07022012
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
