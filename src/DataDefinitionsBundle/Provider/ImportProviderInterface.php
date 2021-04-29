<?php
/**
 * Data Definitions.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2016-2019 w-vision AG (https://www.w-vision.ch)
 * @license    https://github.com/w-vision/DataDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

declare(strict_types=1);

namespace Wvision\Bundle\DataDefinitionsBundle\Provider;

use Exception;
use Wvision\Bundle\DataDefinitionsBundle\Model\ImportDefinitionInterface;
use Wvision\Bundle\DataDefinitionsBundle\Model\ImportMapping\FromColumn;

interface ImportProviderInterface
{
    /**
     * Test Data provided for this Provider
     *
     * @param array $configuration
     * @return boolean
     * @throws Exception
     */
    public function testData(array $configuration): bool;

    /**
     * Get Columns from data
     *
     * @param array $configuration
     * @return FromColumn[]
     */
    public function getColumns(array $configuration);

    /**
     * @param array                     $configuration
     * @param ImportDefinitionInterface $definition
     * @param array                     $params
     * @param null                      $filter
     * @return mixed
     */
    public function getData(array $configuration, ImportDefinitionInterface $definition, array $params, $filter = null);
}
