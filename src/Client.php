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
    public function getCursOnDateXML(DateTime $date): array
    {
        $return = [];
        $dateString = $date->format('Y-m-d');
        $result = parent::GetCursOnDateXML(['On_date' => $dateString]);
        /** if any rate exists */
        if ($result->GetCursOnDateXMLResult->any) {
            $xml = new SimpleXMLElement($result->GetCursOnDateXMLResult->any);
            foreach ($xml->ValuteCursOnDate as $currency) {
                $return[] = [
                    'Vname' => $currency->Vname,
                    'Vnom' => $currency->Vnom,
                    'Vcurs' => $currency->Vcurs,
                    'Vcode' => $currency->Vcode,
                    'VchCode' => $currency->VchCode
                ];
            }
        }

        return $return;
    }
}
