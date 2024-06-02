<?php
/**
 * StringMap
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  onesignal\client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OneSignal
 *
 * A powerful way to send personalized messages at scale and build effective customer engagement strategies. Learn more at onesignal.com
 *
 * The version of the OpenAPI document: 1.2.1
 * Contact: devrel@onesignal.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace onesignal\client\model;

use \ArrayAccess;
use \onesignal\client\ObjectSerializer;

/**
 * StringMap Class Doc Comment
 *
 * @category Class
 * @package  onesignal\client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StringMap implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StringMap';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'en' => 'string',
        'ar' => 'string',
        'bs' => 'string',
        'bg' => 'string',
        'ca' => 'string',
        'zh_hans' => 'string',
        'zh_hant' => 'string',
        'zh' => 'string',
        'hr' => 'string',
        'cs' => 'string',
        'da' => 'string',
        'nl' => 'string',
        'et' => 'string',
        'fi' => 'string',
        'fr' => 'string',
        'ka' => 'string',
        'de' => 'string',
        'el' => 'string',
        'hi' => 'string',
        'he' => 'string',
        'hu' => 'string',
        'id' => 'string',
        'it' => 'string',
        'ja' => 'string',
        'ko' => 'string',
        'lv' => 'string',
        'lt' => 'string',
        'ms' => 'string',
        'nb' => 'string',
        'pl' => 'string',
        'fa' => 'string',
        'pt' => 'string',
        'pa' => 'string',
        'ro' => 'string',
        'ru' => 'string',
        'sr' => 'string',
        'sk' => 'string',
        'es' => 'string',
        'sv' => 'string',
        'th' => 'string',
        'tr' => 'string',
        'uk' => 'string',
        'vi' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'en' => null,
        'ar' => null,
        'bs' => null,
        'bg' => null,
        'ca' => null,
        'zh_hans' => null,
        'zh_hant' => null,
        'zh' => null,
        'hr' => null,
        'cs' => null,
        'da' => null,
        'nl' => null,
        'et' => null,
        'fi' => null,
        'fr' => null,
        'ka' => null,
        'de' => null,
        'el' => null,
        'hi' => null,
        'he' => null,
        'hu' => null,
        'id' => null,
        'it' => null,
        'ja' => null,
        'ko' => null,
        'lv' => null,
        'lt' => null,
        'ms' => null,
        'nb' => null,
        'pl' => null,
        'fa' => null,
        'pt' => null,
        'pa' => null,
        'ro' => null,
        'ru' => null,
        'sr' => null,
        'sk' => null,
        'es' => null,
        'sv' => null,
        'th' => null,
        'tr' => null,
        'uk' => null,
        'vi' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'en' => 'en',
        'ar' => 'ar',
        'bs' => 'bs',
        'bg' => 'bg',
        'ca' => 'ca',
        'zh_hans' => 'zh-Hans',
        'zh_hant' => 'zh-Hant',
        'zh' => 'zh',
        'hr' => 'hr',
        'cs' => 'cs',
        'da' => 'da',
        'nl' => 'nl',
        'et' => 'et',
        'fi' => 'fi',
        'fr' => 'fr',
        'ka' => 'ka',
        'de' => 'de',
        'el' => 'el',
        'hi' => 'hi',
        'he' => 'he',
        'hu' => 'hu',
        'id' => 'id',
        'it' => 'it',
        'ja' => 'ja',
        'ko' => 'ko',
        'lv' => 'lv',
        'lt' => 'lt',
        'ms' => 'ms',
        'nb' => 'nb',
        'pl' => 'pl',
        'fa' => 'fa',
        'pt' => 'pt',
        'pa' => 'pa',
        'ro' => 'ro',
        'ru' => 'ru',
        'sr' => 'sr',
        'sk' => 'sk',
        'es' => 'es',
        'sv' => 'sv',
        'th' => 'th',
        'tr' => 'tr',
        'uk' => 'uk',
        'vi' => 'vi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'en' => 'setEn',
        'ar' => 'setAr',
        'bs' => 'setBs',
        'bg' => 'setBg',
        'ca' => 'setCa',
        'zh_hans' => 'setZhHans',
        'zh_hant' => 'setZhHant',
        'zh' => 'setZh',
        'hr' => 'setHr',
        'cs' => 'setCs',
        'da' => 'setDa',
        'nl' => 'setNl',
        'et' => 'setEt',
        'fi' => 'setFi',
        'fr' => 'setFr',
        'ka' => 'setKa',
        'de' => 'setDe',
        'el' => 'setEl',
        'hi' => 'setHi',
        'he' => 'setHe',
        'hu' => 'setHu',
        'id' => 'setId',
        'it' => 'setIt',
        'ja' => 'setJa',
        'ko' => 'setKo',
        'lv' => 'setLv',
        'lt' => 'setLt',
        'ms' => 'setMs',
        'nb' => 'setNb',
        'pl' => 'setPl',
        'fa' => 'setFa',
        'pt' => 'setPt',
        'pa' => 'setPa',
        'ro' => 'setRo',
        'ru' => 'setRu',
        'sr' => 'setSr',
        'sk' => 'setSk',
        'es' => 'setEs',
        'sv' => 'setSv',
        'th' => 'setTh',
        'tr' => 'setTr',
        'uk' => 'setUk',
        'vi' => 'setVi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'en' => 'getEn',
        'ar' => 'getAr',
        'bs' => 'getBs',
        'bg' => 'getBg',
        'ca' => 'getCa',
        'zh_hans' => 'getZhHans',
        'zh_hant' => 'getZhHant',
        'zh' => 'getZh',
        'hr' => 'getHr',
        'cs' => 'getCs',
        'da' => 'getDa',
        'nl' => 'getNl',
        'et' => 'getEt',
        'fi' => 'getFi',
        'fr' => 'getFr',
        'ka' => 'getKa',
        'de' => 'getDe',
        'el' => 'getEl',
        'hi' => 'getHi',
        'he' => 'getHe',
        'hu' => 'getHu',
        'id' => 'getId',
        'it' => 'getIt',
        'ja' => 'getJa',
        'ko' => 'getKo',
        'lv' => 'getLv',
        'lt' => 'getLt',
        'ms' => 'getMs',
        'nb' => 'getNb',
        'pl' => 'getPl',
        'fa' => 'getFa',
        'pt' => 'getPt',
        'pa' => 'getPa',
        'ro' => 'getRo',
        'ru' => 'getRu',
        'sr' => 'getSr',
        'sk' => 'getSk',
        'es' => 'getEs',
        'sv' => 'getSv',
        'th' => 'getTh',
        'tr' => 'getTr',
        'uk' => 'getUk',
        'vi' => 'getVi'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['en'] = $data['en'] ?? null;
        $this->container['ar'] = $data['ar'] ?? null;
        $this->container['bs'] = $data['bs'] ?? null;
        $this->container['bg'] = $data['bg'] ?? null;
        $this->container['ca'] = $data['ca'] ?? null;
        $this->container['zh_hans'] = $data['zh_hans'] ?? null;
        $this->container['zh_hant'] = $data['zh_hant'] ?? null;
        $this->container['zh'] = $data['zh'] ?? null;
        $this->container['hr'] = $data['hr'] ?? null;
        $this->container['cs'] = $data['cs'] ?? null;
        $this->container['da'] = $data['da'] ?? null;
        $this->container['nl'] = $data['nl'] ?? null;
        $this->container['et'] = $data['et'] ?? null;
        $this->container['fi'] = $data['fi'] ?? null;
        $this->container['fr'] = $data['fr'] ?? null;
        $this->container['ka'] = $data['ka'] ?? null;
        $this->container['de'] = $data['de'] ?? null;
        $this->container['el'] = $data['el'] ?? null;
        $this->container['hi'] = $data['hi'] ?? null;
        $this->container['he'] = $data['he'] ?? null;
        $this->container['hu'] = $data['hu'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['it'] = $data['it'] ?? null;
        $this->container['ja'] = $data['ja'] ?? null;
        $this->container['ko'] = $data['ko'] ?? null;
        $this->container['lv'] = $data['lv'] ?? null;
        $this->container['lt'] = $data['lt'] ?? null;
        $this->container['ms'] = $data['ms'] ?? null;
        $this->container['nb'] = $data['nb'] ?? null;
        $this->container['pl'] = $data['pl'] ?? null;
        $this->container['fa'] = $data['fa'] ?? null;
        $this->container['pt'] = $data['pt'] ?? null;
        $this->container['pa'] = $data['pa'] ?? null;
        $this->container['ro'] = $data['ro'] ?? null;
        $this->container['ru'] = $data['ru'] ?? null;
        $this->container['sr'] = $data['sr'] ?? null;
        $this->container['sk'] = $data['sk'] ?? null;
        $this->container['es'] = $data['es'] ?? null;
        $this->container['sv'] = $data['sv'] ?? null;
        $this->container['th'] = $data['th'] ?? null;
        $this->container['tr'] = $data['tr'] ?? null;
        $this->container['uk'] = $data['uk'] ?? null;
        $this->container['vi'] = $data['vi'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets en
     *
     * @return string|null
     */
    public function getEn()
    {
        return $this->container['en'];
    }

    /**
     * Sets en
     *
     * @param string|null $en Text in English.  Will be used as a fallback
     *
     * @return self
     */
    public function setEn($en)
    {
        $this->container['en'] = $en;

        return $this;
    }

    /**
     * Gets ar
     *
     * @return string|null
     */
    public function getAr()
    {
        return $this->container['ar'];
    }

    /**
     * Sets ar
     *
     * @param string|null $ar Text in Arabic.
     *
     * @return self
     */
    public function setAr($ar)
    {
        $this->container['ar'] = $ar;

        return $this;
    }

    /**
     * Gets bs
     *
     * @return string|null
     */
    public function getBs()
    {
        return $this->container['bs'];
    }

    /**
     * Sets bs
     *
     * @param string|null $bs Text in Bosnian.
     *
     * @return self
     */
    public function setBs($bs)
    {
        $this->container['bs'] = $bs;

        return $this;
    }

    /**
     * Gets bg
     *
     * @return string|null
     */
    public function getBg()
    {
        return $this->container['bg'];
    }

    /**
     * Sets bg
     *
     * @param string|null $bg Text in Bulgarian.
     *
     * @return self
     */
    public function setBg($bg)
    {
        $this->container['bg'] = $bg;

        return $this;
    }

    /**
     * Gets ca
     *
     * @return string|null
     */
    public function getCa()
    {
        return $this->container['ca'];
    }

    /**
     * Sets ca
     *
     * @param string|null $ca Text in Catalan.
     *
     * @return self
     */
    public function setCa($ca)
    {
        $this->container['ca'] = $ca;

        return $this;
    }

    /**
     * Gets zh_hans
     *
     * @return string|null
     */
    public function getZhHans()
    {
        return $this->container['zh_hans'];
    }

    /**
     * Sets zh_hans
     *
     * @param string|null $zh_hans Text in Chinese (Simplified).
     *
     * @return self
     */
    public function setZhHans($zh_hans)
    {
        $this->container['zh_hans'] = $zh_hans;

        return $this;
    }

    /**
     * Gets zh_hant
     *
     * @return string|null
     */
    public function getZhHant()
    {
        return $this->container['zh_hant'];
    }

    /**
     * Sets zh_hant
     *
     * @param string|null $zh_hant Text in Chinese (Traditional).
     *
     * @return self
     */
    public function setZhHant($zh_hant)
    {
        $this->container['zh_hant'] = $zh_hant;

        return $this;
    }

    /**
     * Gets zh
     *
     * @return string|null
     */
    public function getZh()
    {
        return $this->container['zh'];
    }

    /**
     * Sets zh
     *
     * @param string|null $zh Alias for zh-Hans.
     *
     * @return self
     */
    public function setZh($zh)
    {
        $this->container['zh'] = $zh;

        return $this;
    }

    /**
     * Gets hr
     *
     * @return string|null
     */
    public function getHr()
    {
        return $this->container['hr'];
    }

    /**
     * Sets hr
     *
     * @param string|null $hr Text in Croatian.
     *
     * @return self
     */
    public function setHr($hr)
    {
        $this->container['hr'] = $hr;

        return $this;
    }

    /**
     * Gets cs
     *
     * @return string|null
     */
    public function getCs()
    {
        return $this->container['cs'];
    }

    /**
     * Sets cs
     *
     * @param string|null $cs Text in Czech.
     *
     * @return self
     */
    public function setCs($cs)
    {
        $this->container['cs'] = $cs;

        return $this;
    }

    /**
     * Gets da
     *
     * @return string|null
     */
    public function getDa()
    {
        return $this->container['da'];
    }

    /**
     * Sets da
     *
     * @param string|null $da Text in Danish.
     *
     * @return self
     */
    public function setDa($da)
    {
        $this->container['da'] = $da;

        return $this;
    }

    /**
     * Gets nl
     *
     * @return string|null
     */
    public function getNl()
    {
        return $this->container['nl'];
    }

    /**
     * Sets nl
     *
     * @param string|null $nl Text in Dutch.
     *
     * @return self
     */
    public function setNl($nl)
    {
        $this->container['nl'] = $nl;

        return $this;
    }

    /**
     * Gets et
     *
     * @return string|null
     */
    public function getEt()
    {
        return $this->container['et'];
    }

    /**
     * Sets et
     *
     * @param string|null $et Text in Estonian.
     *
     * @return self
     */
    public function setEt($et)
    {
        $this->container['et'] = $et;

        return $this;
    }

    /**
     * Gets fi
     *
     * @return string|null
     */
    public function getFi()
    {
        return $this->container['fi'];
    }

    /**
     * Sets fi
     *
     * @param string|null $fi Text in Finnish.
     *
     * @return self
     */
    public function setFi($fi)
    {
        $this->container['fi'] = $fi;

        return $this;
    }

    /**
     * Gets fr
     *
     * @return string|null
     */
    public function getFr()
    {
        return $this->container['fr'];
    }

    /**
     * Sets fr
     *
     * @param string|null $fr Text in French.
     *
     * @return self
     */
    public function setFr($fr)
    {
        $this->container['fr'] = $fr;

        return $this;
    }

    /**
     * Gets ka
     *
     * @return string|null
     */
    public function getKa()
    {
        return $this->container['ka'];
    }

    /**
     * Sets ka
     *
     * @param string|null $ka Text in Georgian.
     *
     * @return self
     */
    public function setKa($ka)
    {
        $this->container['ka'] = $ka;

        return $this;
    }

    /**
     * Gets de
     *
     * @return string|null
     */
    public function getDe()
    {
        return $this->container['de'];
    }

    /**
     * Sets de
     *
     * @param string|null $de Text in German.
     *
     * @return self
     */
    public function setDe($de)
    {
        $this->container['de'] = $de;

        return $this;
    }

    /**
     * Gets el
     *
     * @return string|null
     */
    public function getEl()
    {
        return $this->container['el'];
    }

    /**
     * Sets el
     *
     * @param string|null $el Text in Greek.
     *
     * @return self
     */
    public function setEl($el)
    {
        $this->container['el'] = $el;

        return $this;
    }

    /**
     * Gets hi
     *
     * @return string|null
     */
    public function getHi()
    {
        return $this->container['hi'];
    }

    /**
     * Sets hi
     *
     * @param string|null $hi Text in Hindi.
     *
     * @return self
     */
    public function setHi($hi)
    {
        $this->container['hi'] = $hi;

        return $this;
    }

    /**
     * Gets he
     *
     * @return string|null
     */
    public function getHe()
    {
        return $this->container['he'];
    }

    /**
     * Sets he
     *
     * @param string|null $he Text in Hebrew.
     *
     * @return self
     */
    public function setHe($he)
    {
        $this->container['he'] = $he;

        return $this;
    }

    /**
     * Gets hu
     *
     * @return string|null
     */
    public function getHu()
    {
        return $this->container['hu'];
    }

    /**
     * Sets hu
     *
     * @param string|null $hu Text in Hungarian.
     *
     * @return self
     */
    public function setHu($hu)
    {
        $this->container['hu'] = $hu;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Text in Indonesian.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets it
     *
     * @return string|null
     */
    public function getIt()
    {
        return $this->container['it'];
    }

    /**
     * Sets it
     *
     * @param string|null $it Text in Italian.
     *
     * @return self
     */
    public function setIt($it)
    {
        $this->container['it'] = $it;

        return $this;
    }

    /**
     * Gets ja
     *
     * @return string|null
     */
    public function getJa()
    {
        return $this->container['ja'];
    }

    /**
     * Sets ja
     *
     * @param string|null $ja Text in Japanese.
     *
     * @return self
     */
    public function setJa($ja)
    {
        $this->container['ja'] = $ja;

        return $this;
    }

    /**
     * Gets ko
     *
     * @return string|null
     */
    public function getKo()
    {
        return $this->container['ko'];
    }

    /**
     * Sets ko
     *
     * @param string|null $ko Text in Korean.
     *
     * @return self
     */
    public function setKo($ko)
    {
        $this->container['ko'] = $ko;

        return $this;
    }

    /**
     * Gets lv
     *
     * @return string|null
     */
    public function getLv()
    {
        return $this->container['lv'];
    }

    /**
     * Sets lv
     *
     * @param string|null $lv Text in Latvian.
     *
     * @return self
     */
    public function setLv($lv)
    {
        $this->container['lv'] = $lv;

        return $this;
    }

    /**
     * Gets lt
     *
     * @return string|null
     */
    public function getLt()
    {
        return $this->container['lt'];
    }

    /**
     * Sets lt
     *
     * @param string|null $lt Text in Lithuanian.
     *
     * @return self
     */
    public function setLt($lt)
    {
        $this->container['lt'] = $lt;

        return $this;
    }

    /**
     * Gets ms
     *
     * @return string|null
     */
    public function getMs()
    {
        return $this->container['ms'];
    }

    /**
     * Sets ms
     *
     * @param string|null $ms Text in Malay.
     *
     * @return self
     */
    public function setMs($ms)
    {
        $this->container['ms'] = $ms;

        return $this;
    }

    /**
     * Gets nb
     *
     * @return string|null
     */
    public function getNb()
    {
        return $this->container['nb'];
    }

    /**
     * Sets nb
     *
     * @param string|null $nb Text in Norwegian.
     *
     * @return self
     */
    public function setNb($nb)
    {
        $this->container['nb'] = $nb;

        return $this;
    }

    /**
     * Gets pl
     *
     * @return string|null
     */
    public function getPl()
    {
        return $this->container['pl'];
    }

    /**
     * Sets pl
     *
     * @param string|null $pl Text in Polish.
     *
     * @return self
     */
    public function setPl($pl)
    {
        $this->container['pl'] = $pl;

        return $this;
    }

    /**
     * Gets fa
     *
     * @return string|null
     */
    public function getFa()
    {
        return $this->container['fa'];
    }

    /**
     * Sets fa
     *
     * @param string|null $fa Text in Persian.
     *
     * @return self
     */
    public function setFa($fa)
    {
        $this->container['fa'] = $fa;

        return $this;
    }

    /**
     * Gets pt
     *
     * @return string|null
     */
    public function getPt()
    {
        return $this->container['pt'];
    }

    /**
     * Sets pt
     *
     * @param string|null $pt Text in Portugese.
     *
     * @return self
     */
    public function setPt($pt)
    {
        $this->container['pt'] = $pt;

        return $this;
    }

    /**
     * Gets pa
     *
     * @return string|null
     */
    public function getPa()
    {
        return $this->container['pa'];
    }

    /**
     * Sets pa
     *
     * @param string|null $pa Text in Punjabi.
     *
     * @return self
     */
    public function setPa($pa)
    {
        $this->container['pa'] = $pa;

        return $this;
    }

    /**
     * Gets ro
     *
     * @return string|null
     */
    public function getRo()
    {
        return $this->container['ro'];
    }

    /**
     * Sets ro
     *
     * @param string|null $ro Text in Romanian.
     *
     * @return self
     */
    public function setRo($ro)
    {
        $this->container['ro'] = $ro;

        return $this;
    }

    /**
     * Gets ru
     *
     * @return string|null
     */
    public function getRu()
    {
        return $this->container['ru'];
    }

    /**
     * Sets ru
     *
     * @param string|null $ru Text in Russian.
     *
     * @return self
     */
    public function setRu($ru)
    {
        $this->container['ru'] = $ru;

        return $this;
    }

    /**
     * Gets sr
     *
     * @return string|null
     */
    public function getSr()
    {
        return $this->container['sr'];
    }

    /**
     * Sets sr
     *
     * @param string|null $sr Text in Serbian.
     *
     * @return self
     */
    public function setSr($sr)
    {
        $this->container['sr'] = $sr;

        return $this;
    }

    /**
     * Gets sk
     *
     * @return string|null
     */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
     * Sets sk
     *
     * @param string|null $sk Text in Slovak.
     *
     * @return self
     */
    public function setSk($sk)
    {
        $this->container['sk'] = $sk;

        return $this;
    }

    /**
     * Gets es
     *
     * @return string|null
     */
    public function getEs()
    {
        return $this->container['es'];
    }

    /**
     * Sets es
     *
     * @param string|null $es Text in Spanish.
     *
     * @return self
     */
    public function setEs($es)
    {
        $this->container['es'] = $es;

        return $this;
    }

    /**
     * Gets sv
     *
     * @return string|null
     */
    public function getSv()
    {
        return $this->container['sv'];
    }

    /**
     * Sets sv
     *
     * @param string|null $sv Text in Swedish.
     *
     * @return self
     */
    public function setSv($sv)
    {
        $this->container['sv'] = $sv;

        return $this;
    }

    /**
     * Gets th
     *
     * @return string|null
     */
    public function getTh()
    {
        return $this->container['th'];
    }

    /**
     * Sets th
     *
     * @param string|null $th Text in Thai.
     *
     * @return self
     */
    public function setTh($th)
    {
        $this->container['th'] = $th;

        return $this;
    }

    /**
     * Gets tr
     *
     * @return string|null
     */
    public function getTr()
    {
        return $this->container['tr'];
    }

    /**
     * Sets tr
     *
     * @param string|null $tr Text in Turkish.
     *
     * @return self
     */
    public function setTr($tr)
    {
        $this->container['tr'] = $tr;

        return $this;
    }

    /**
     * Gets uk
     *
     * @return string|null
     */
    public function getUk()
    {
        return $this->container['uk'];
    }

    /**
     * Sets uk
     *
     * @param string|null $uk Text in Ukrainian.
     *
     * @return self
     */
    public function setUk($uk)
    {
        $this->container['uk'] = $uk;

        return $this;
    }

    /**
     * Gets vi
     *
     * @return string|null
     */
    public function getVi()
    {
        return $this->container['vi'];
    }

    /**
     * Sets vi
     *
     * @param string|null $vi Text in Vietnamese.
     *
     * @return self
     */
    public function setVi($vi)
    {
        $this->container['vi'] = $vi;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

