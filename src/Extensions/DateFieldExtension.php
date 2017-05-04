<?php

/**
 * This file is part of SilverWare.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package SilverWare\Datepicker\Extensions
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-datepicker
 */

namespace SilverWare\Datepicker\Extensions;

use SilverStripe\Core\Extension;

/**
 * An extension class which adds datepicker functionality to extended objects.
 *
 * @package SilverWare\Datepicker\Extensions
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-datepicker
 */
class DateFieldExtension extends Extension
{
    /**
     * Updates the HTML attributes of the extended object.
     *
     * @param array $attributes
     *
     * @return void
     */
    public function updateAttributes(&$attributes)
    {
        if ($format = $this->owner->getDatepickerFormat()) {
            $attributes['data-format'] = $format;
        }
        
        if ($polyfill = $this->owner->getDatepickerPolyfill()) {
            $attributes['data-polyfill'] = $polyfill;
        }
    }
    
    /**
     * Defines the datepicker format for the extended object.
     *
     * @param string $format
     *
     * @return $this->owner
     */
    public function setDatepickerFormat($format)
    {
        $this->owner->datepickerFormat = $format;
        
        return $this->owner;
    }
    
    /**
     * Answers the datepicker format defined by the extended object.
     *
     * @return string
     */
    public function getDatepickerFormat()
    {
        if ($this->owner->hasField('datepickerFormat')) {
            return $this->owner->datepickerFormat;
        } elseif ($format = $this->owner->config()->default_datepicker_format) {
            return $format;
        }
    }
    
    /**
     * Defines the datepicker polyfill setting for the extended object.
     *
     * @param string $polyfill
     *
     * @return $this->owner
     */
    public function setDatepickerPolyfill($polyfill)
    {
        $this->owner->datepickerPolyfill = $polyfill;
        
        return $this->owner;
    }
    
    /**
     * Answers the datepicker polyfill setting defined by the extended object.
     *
     * @return string
     */
    public function getDatepickerPolyfill()
    {
        if ($this->owner->hasField('datepickerPolyfill')) {
            return $this->owner->datepickerPolyfill;
        } elseif ($polyfill = $this->owner->config()->default_datepicker_polyfill) {
            return $polyfill;
        }
    }
}
