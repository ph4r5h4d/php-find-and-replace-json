<?php
namespace Dcblogdev\FindAndReplaceJson;

class FindAndReplaceJson
{
    /**
     * replaces all values provided by $replaces into $payload
     * 
     * @param  json|array  $payload  
     * @param  array  $replaces
     * @param  boolean $isJson   
     * @return json|array
     */
    public function replace($payload, $replaces, $isJson = true) 
    {
        if ($isJson == true) {
            $payload = json_decode($payload, true);
        }

        $payload = array_replace_recursive($payload, $replaces);

        if ($isJson == true) {
            return json_encode($payload);
        }

        return $payload;
    }
}