<?php

namespace Pim\Bundle\ImportExportBundle\Transformer;

/**
 * Transforms an array in an entity
 *
 * @author    Antoine Guigan <antoine@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ORMTransformer extends AbstractORMTransformer
{
    /**
     * Transforms an array into an entity
     *
     * @param string $class
     * @param array  $data
     * @param array  $defaults
     *
     * @return object
     */
    public function transform($class, array $data, array $defaults = array())
    {
        return $this->doTransform($class, $data, $defaults);
    }
}
