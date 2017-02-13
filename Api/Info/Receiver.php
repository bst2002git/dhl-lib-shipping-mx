<?php
/**
 * Dhl Versenden
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
 * PHP version 5
 *
 * @category  Dhl
 * @package   Dhl\Versenden\Bcs\Api\Info
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2017 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Versenden\Bcs\Api\Info;

use \Dhl\Versenden\Bcs\Api\Info\Receiver\ParcelShopFactory;
use \Dhl\Versenden\Bcs\Api\Info\Receiver\PackstationFactory;
use \Dhl\Versenden\Bcs\Api\Info\Receiver\PostfilialeFactory;

/**
 * Receiver
 *
 * @category Dhl
 * @package  Dhl\Versenden\Bcs\Api\Info
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class Receiver extends ArrayableInfo
{
    /** @var Receiver\Packstation */
    public $packstation;

    /** @var Receiver\Postfiliale */
    public $postfiliale;

    /** @var Receiver\ParcelShop */
    public $parcelShop;

    /** @var string */
    public $name1;

    /** @var string */
    public $name2;

    /** @var string */
    public $name3;

    /** @var string */
    public $streetName;

    /** @var string */
    public $streetNumber;

    /** @var string */
    public $addressAddition;

    /** @var string */
    public $dispatchingInformation;

    /** @var string */
    public $zip;

    /** @var string */
    public $city;

    /** @var string */
    public $country;

    /** @var string */
    public $countryISOCode;

    /** @var string */
    public $state;

    /** @var string */
    public $phone;

    /** @var string */
    public $email;

    /** @var string */
    public $contactPerson;

    /**
     * Receiver constructor.
     *
     * @param ParcelShopFactory  $parcelShopFactory
     * @param PackstationFactory $packstationFactory
     * @param PostfilialeFactory $postfilialeFactory
     */
    public function __construct(
        ParcelShopFactory $parcelShopFactory,
        PackstationFactory $packstationFactory,
        PostfilialeFactory $postfilialeFactory
    )
    {
        $this->packstation = $packstationFactory->create();
        $this->postfiliale = $postfilialeFactory->create();
        $this->parcelShop  = $parcelShopFactory->create();
    }

    /**
     * @return Receiver\Packstation
     */
    public function getPackstation()
    {
        return $this->packstation;
    }

    /**
     * @return Receiver\Postfiliale
     */
    public function getPostfiliale()
    {
        return $this->postfiliale;
    }

    /**
     * @return Receiver\ParcelShop
     */
    public function getParcelShop()
    {
        return $this->parcelShop;
    }

    /**
     * @param \stdClass $object
     *
     * @return Receiver|null
     */
    public static function fromObject(\stdClass $object)
    {
        /** @var Receiver $instance */
        $instance   = \Magento\Framework\App\ObjectManager::getInstance()->get('Dhl\Versenden\Bcs\Api\Info\Receiver');
        $properties = get_object_vars($object);
        $instance->fromArray($properties);

        return $instance;
    }
}