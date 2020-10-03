<?php

namespace CbrSimpleSoap;

use DateTime;
use SoapClient;

/**
 * Class Client
 *
 * @package CbrSimpleSoap
 */
class Client extends SoapClient
{
    /**
     * @return mixed
     */
    public function GetLatestDateTime()
    {
        return parent::GetLatestDateTime();
    }

    /**
     * @param DateTime $date
     *
     * @return mixed
     */
    public function GetCursOnDateXML(DateTime $date)
    {
        /** @todo $date */
        return parent::GetCursOnDateXML(['On_date' => $date]);
    }
}