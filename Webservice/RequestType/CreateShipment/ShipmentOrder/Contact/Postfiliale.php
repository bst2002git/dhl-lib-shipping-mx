<?php
/**
 * Dhl Shipping
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to
 * newer versions in the future.
 *
 * PHP version 7
 *
 * @category  Dhl
 * @package   Dhl\Shipping\Webservice
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2017 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Shipping\Webservice\RequestType\CreateShipment\ShipmentOrder\Contact;

/**
 * Platform independent shipment order receiver postfiliale details
 *
 * @category Dhl
 * @package  Dhl\Shipping\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class Postfiliale implements PostfilialeInterface
{
    /**
     * @var string
     */
    private $postfilialNumber;

    /**
     * @var string
     */
    private $postNumber;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $state;

    /**
     * Postfiliale constructor.
     * @param string $postfilialNumber
     * @param string $postNumber
     * @param string $zip
     * @param string $city
     * @param string $countryCode
     * @param string $country
     * @param string $state
     */
    public function __construct(
        $postfilialNumber,
        $postNumber,
        $zip,
        $city,
        $countryCode,
        $country = '',
        $state = ''
    ) {
        $this->postfilialNumber = $postfilialNumber;
        $this->postNumber = $postNumber;
        $this->zip = $zip;
        $this->city = $city;
        $this->countryCode = $countryCode;
        $this->country = $country;
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getPostfilialNumber()
    {
        return $this->postfilialNumber;
    }

    /**
     * @return string
     */
    public function getPostNumber()
    {
        return $this->postNumber;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}
