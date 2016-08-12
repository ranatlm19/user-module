<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ReportingTo")
 */
class ReportingTo
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $relation_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $reporting_to_id;

    /**
     * Get relationId
     *
     * @return integer
     */
    public function getRelationId()
    {
        return $this->relation_id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return ReportingTo
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set reportingToId
     *
     * @param integer $reportingToId
     *
     * @return ReportingTo
     */
    public function setReportingToId($reportingToId)
    {
        $this->reporting_to_id = $reportingToId;

        return $this;
    }

    /**
     * Get reportingToId
     *
     * @return integer
     */
    public function getReportingToId()
    {
        return $this->reporting_to_id;
    }
}
