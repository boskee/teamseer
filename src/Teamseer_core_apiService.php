<?php

namespace Boskee\TeamSeer;

class Teamseer_core_apiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Array' => 'Boskee\\TeamSeer\\ArrayCustom',
      'Struct' => 'Boskee\\TeamSeer\\Struct',
      'duration' => 'Boskee\\TeamSeer\\duration',
      'dateTime' => 'Boskee\\TeamSeer\\dateTime',
      'NOTATION' => 'Boskee\\TeamSeer\\NOTATION',
      'time' => 'Boskee\\TeamSeer\\time',
      'date' => 'Boskee\\TeamSeer\\date',
      'gYearMonth' => 'Boskee\\TeamSeer\\gYearMonth',
      'gYear' => 'Boskee\\TeamSeer\\gYear',
      'gMonthDay' => 'Boskee\\TeamSeer\\gMonthDay',
      'gDay' => 'Boskee\\TeamSeer\\gDay',
      'gMonth' => 'Boskee\\TeamSeer\\gMonth',
      'boolean' => 'Boskee\\TeamSeer\\boolean',
      'base64Binary' => 'Boskee\\TeamSeer\\base64Binary',
      'hexBinary' => 'Boskee\\TeamSeer\\hexBinary',
      'float' => 'Boskee\\TeamSeer\\floatCustom',
      'double' => 'Boskee\\TeamSeer\\double',
      'anyURI' => 'Boskee\\TeamSeer\\anyURI',
      'QName' => 'Boskee\\TeamSeer\\QName',
      'string' => 'Boskee\\TeamSeer\\stringCustom',
      'normalizedString' => 'Boskee\\TeamSeer\\normalizedString',
      'token' => 'Boskee\\TeamSeer\\token',
      'language' => 'Boskee\\TeamSeer\\language',
      'Name' => 'Boskee\\TeamSeer\\Name',
      'NMTOKEN' => 'Boskee\\TeamSeer\\NMTOKEN',
      'NCName' => 'Boskee\\TeamSeer\\NCName',
      'NMTOKENS' => 'Boskee\\TeamSeer\\NMTOKENS',
      'ID' => 'Boskee\\TeamSeer\\ID',
      'IDREF' => 'Boskee\\TeamSeer\\IDREF',
      'ENTITY' => 'Boskee\\TeamSeer\\ENTITY',
      'IDREFS' => 'Boskee\\TeamSeer\\IDREFS',
      'ENTITIES' => 'Boskee\\TeamSeer\\ENTITIES',
      'decimal' => 'Boskee\\TeamSeer\\decimal',
      'integer' => 'Boskee\\TeamSeer\\integer',
      'nonPositiveInteger' => 'Boskee\\TeamSeer\\nonPositiveInteger',
      'negativeInteger' => 'Boskee\\TeamSeer\\negativeInteger',
      'long' => 'Boskee\\TeamSeer\\long',
      'int' => 'Boskee\\TeamSeer\\intCustom',
      'short' => 'Boskee\\TeamSeer\\short',
      'byte' => 'Boskee\\TeamSeer\\byte',
      'nonNegativeInteger' => 'Boskee\\TeamSeer\\nonNegativeInteger',
      'unsignedLong' => 'Boskee\\TeamSeer\\unsignedLong',
      'unsignedInt' => 'Boskee\\TeamSeer\\unsignedInt',
      'unsignedShort' => 'Boskee\\TeamSeer\\unsignedShort',
      'unsignedByte' => 'Boskee\\TeamSeer\\unsignedByte',
      'positiveInteger' => 'Boskee\\TeamSeer\\positiveInteger',
      'stringArray' => 'Boskee\\TeamSeer\\stringArray',
      'DayActivityAPIArray' => 'Boskee\\TeamSeer\\DayActivityAPIArray',
      'NoteAPIArray' => 'Boskee\\TeamSeer\\NoteAPIArray',
      'NoteAPI' => 'Boskee\\TeamSeer\\NoteAPI',
      'UserNotesAPIArray' => 'Boskee\\TeamSeer\\UserNotesAPIArray',
      'UserNotesAPI' => 'Boskee\\TeamSeer\\UserNotesAPI',
      'DayActivityAPI' => 'Boskee\\TeamSeer\\DayActivityAPI',
      'LeaveTypesAPIArray' => 'Boskee\\TeamSeer\\LeaveTypesAPIArray',
      'LeaveTypeAPI' => 'Boskee\\TeamSeer\\LeaveTypeAPI',
      'LeaveCategoryAPIArray' => 'Boskee\\TeamSeer\\LeaveCategoryAPIArray',
      'LeaveCategoryAPI' => 'Boskee\\TeamSeer\\LeaveCategoryAPI',
      'NoteTypeAPIArray' => 'Boskee\\TeamSeer\\NoteTypeAPIArray',
      'NoteTypeAPI' => 'Boskee\\TeamSeer\\NoteTypeAPI',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://www.teamseer.com/services/soap/coreapi/1_0_2/teamseer_core_api.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Authenticate the session with a request hash
     *
     * @param intCustom $companyId
     * @param stringCustom $companyKey
     * @param stringCustom $apiVersion
     * @return boolean
     */
    public function authenticate($companyId, $companyKey, $apiVersion)
    {
      return $this->__soapCall('authenticate', array($companyId, $companyKey, $apiVersion));
    }

    /**
     * Get a list of the active users
     *
     * @return stringArray
     */
    public function getActiveUsers()
    {
      return $this->__soapCall('getActiveUsers', array());
    }

    /**
     * Get the changes since the last API request
     *
     * @return DayActivityAPIArray
     */
    public function getChangesSinceLastAPIRequest()
    {
      return $this->__soapCall('getChangesSinceLastAPIRequest', array());
    }

    /**
     * Get a list of the users who have had some leave or absence booked since the last API request
     *
     * @return stringArray
     */
    public function getUsersChangedSinceLastAPIRequest()
    {
      return $this->__soapCall('getUsersChangedSinceLastAPIRequest', array());
    }

    /**
     * Get all the records for a given user
     *
     * @param stringCustom $userIdentifier
     * @param stringCustom $fromDate
     * @param stringCustom $toDate
     * @return DayActivityAPIArray
     */
    public function getRecordsFor($userIdentifier, $fromDate, $toDate)
    {
      return $this->__soapCall('getRecordsFor', array($userIdentifier, $fromDate, $toDate));
    }

    /**
     * Get all the notes booked in the system
     *
     * @param stringCustom $userIdentifier
     * @param stringCustom $fromDate
     * @param stringCustom $toDate
     * @return UserNotesAPIArray
     */
    public function getNotes($userIdentifier, $fromDate, $toDate)
    {
      return $this->__soapCall('getNotes', array($userIdentifier, $fromDate, $toDate));
    }

    /**
     * Get all the notes for a given user
     *
     * @param stringCustom $userIdentifier
     * @param stringCustom $fromDate
     * @param stringCustom $toDate
     * @return UserNotesAPIArray
     */
    public function getNotesFor($userIdentifier, $fromDate, $toDate)
    {
      return $this->__soapCall('getNotesFor', array($userIdentifier, $fromDate, $toDate));
    }

    /**
     * Get a list of the types and categories
     *
     * @return LeaveTypesAPIArray
     */
    public function getTypesAndCategories()
    {
      return $this->__soapCall('getTypesAndCategories', array());
    }

    /**
     * Get a list of the company note types
     *
     * @return NoteTypeAPIArray
     */
    public function getNoteTypes()
    {
      return $this->__soapCall('getNoteTypes', array());
    }

    /**
     * Authenticate the session with a request hash
     *
     * @param stringCustom $dateFormat
     * @return boolean
     */
    public function setDateFormat($dateFormat)
    {
      return $this->__soapCall('setDateFormat', array($dateFormat));
    }

    /**
     * Authenticate the session with a request hash
     *
     * @param stringCustom $identifierType
     * @return boolean
     */
    public function setUserIdentifier($identifierType)
    {
      return $this->__soapCall('setUserIdentifier', array($identifierType));
    }

}
