<?php


namespace DFSClient\Models\KeywordsDataApi\Ads_Traffic_For_Keywords;


use DFSClient\Models\AbstractModel;

class AdsTrafficForKeywordsLive extends AbstractModel
{
    protected $requestToFunction = 'kwrd_ad_traffic_by_keywords';
    protected $pathToMainData    = 'results->0';
    protected $method            = 'POST';
    protected $isSupportedMerge  = false;

}