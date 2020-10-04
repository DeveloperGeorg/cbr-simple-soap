<?php

namespace CbrSimpleSoap;

use DateTime;
use SimpleXMLElement;
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
        $xml = null;
        $dateString = $date->format('Y-m-d');
        $result = parent::GetCursOnDateXML(['On_date' => $dateString]);
        /** if any rate exists */
        if ($result->GetCursOnDateXMLResult->any) {
            $xml = new SimpleXMLElement($result->GetCursOnDateXMLResult->any);
        }
        return $xml;
    }
}
