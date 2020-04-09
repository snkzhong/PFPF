<?php

namespace PFPF;

function hasPath(Array $propChain, $arrayOrObject)
{
    if (\is_array($arrayOrObject))
    {
        $searchArr = $arrayOrObject;
        foreach($propChain as $prop)
        {
            if ( !$searchArr || !isset($searchArr[$prop]) )
            {
                return false;
            }
            else 
            {
                $searchArr = $searchArr[$prop];
            }
        }
        return true;
    }
    if (\is_object($arrayOrObject))
    {
        $searchObj = $arrayOrObject;
        foreach($propChain as $prop)
        {
            if (!$searchObj || !\property_exists($searchObj, $prop) )
            {
                return false;
            }
            else 
            {
                $searchObj = $searchObj->$prop;
            }
        }
        return true;
    }

    return false;
}