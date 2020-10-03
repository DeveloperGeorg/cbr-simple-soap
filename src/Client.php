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
        $dateString = $date->format('Y-m-d');
        return parent::GetCursOnDateXML(['On_date' => $dateString]);
    }
}