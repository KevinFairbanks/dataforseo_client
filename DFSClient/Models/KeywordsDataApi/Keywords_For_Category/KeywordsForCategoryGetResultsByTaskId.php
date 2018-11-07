<?php


namespace DFSClient\Models\KeywordsDataApi\Keywords_For_Category;


use DFSClient\Models\AbstractModel;

class KeywordsForCategoryGetResultsByTaskId extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_category_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  = false;
}