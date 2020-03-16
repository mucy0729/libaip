<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 17:41
 * Source: BaseRequestAttribute.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core;

abstract class BaseRequestAttribute
{
    public function __toString()
    {
        return $this->serialize();
    }

    public function serialize($format = 'json')
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        if ($format == 'form-url-encode') {
            $json = $serializer->serialize($this, 'json');

            return http_build_query(json_decode($json, true));
        } else {
            return $serializer->serialize($this, $format);
        }
    }
}
