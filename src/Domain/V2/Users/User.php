<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class User extends BaseObject
{
    /**
     * @var object
     * @Field(type="object")
     */
    private $account;

    /**
     * @var int
     * @Field(name="active_banners", type="int")
     */
    private $activeBanners;

    /**
     * @var int[]
     * @Field(name="additional_emails", type="array")
     */
    private $additionalEmails;

    /**
     * @var AdditionalUserInfo
     * @Field(name="additional_info", type="Koma136\MyTarget\Domain\V2\Users\AdditionalUserInfo")
     */
    private $additionalInfo;

    /**
     * @var Agency
     * @Field(type="Koma136\MyTarget\Domain\V2\Users\Agency")
     */
    private $agency;

    /**
     * @var string
     * @Field(name="agency_username", type="string")
     */
    private $agencyUsername;

    /**
     * @var int[]
     * @Field(name="allowed_geo", type="array")
     */
    private $allowedGeo;

    /**
     * @var int[]
     * @Field(name="available_mailings", type="array")
     */
    private $availableMailings;

    /**
     * @var string
     * @Field(name="branch_username", type="string")
     */
    private $branchUsername;

    /**
     * @var string
     * @Field(type="string")
     */
    private $currency;

    /**
     * @var string
     * @Field(type="string")
     */
    private $email;

    /**
     * @var string
     * @Field(type="string")
     */
    private $firstname;

    /**
     * @var int
     * @Field(tipe="int")
     */
    private $id;

    /**
     * @var string
     * @Field(name="info_currency", type="string")
     */
    private $infoCurrency;

    /**
     * @var string
     * @Field(type="string")
     */
    private $language;

    /**
     * @var string
     * @Field(type="string")
     */
    private $lastname;

    /**
     * @var int[]
     * @Field(type="array")
     */
    private $mailings;

    /**
     * @var int
     * @Field(name="max_active_banners", type="int")
     */
    private $maxActiveBanners;

    /**
     * @var object
     * @Field(type="object")
     */
    private $permissions;

    /**
     * @var string
     * @Field(type="string")
     */
    private $status;

    /**
     * @var int[]
     * @Field(type="array")
     */
    private $types;

    /**
     * @var string
     * @Field(type="string")
     */
    private $username;

    /**
     * @return object
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return int
     */
    public function getActiveBanners()
    {
        return $this->activeBanners;
    }

    /**
     * @param $activeBanners
     */
    public function setActiveBanners($activeBanners)
    {
        $this->activeBanners = $activeBanners;
    }

    /**
     * @return int[]
     */
    public function getAdditionalEmails()
    {
        return $this->additionalEmails;
    }

    /**
     * @param $additionalEmails
     */
    public function setAdditionalEmails($additionalEmails)
    {
        $this->additionalEmails = $additionalEmails;
    }

    /**
     * @return AdditionalUserInfo
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param AdditionalUserInfo $additionalInfo
     */
    public function setAdditionalInfo(AdditionalUserInfo $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return Agency
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * @param Agency $agency
     */
    public function setAgency(Agency $agency)
    {
        $this->agency = $agency;
    }

    /**
     * @return string
     */
    public function getAgencyUsername()
    {
        return $this->agencyUsername;
    }

    /**
     * @param $agencyUsername
     */
    public function setAgencyUsername($agencyUsername)
    {
        $this->agencyUsername = $agencyUsername;
    }

    /**
     * @return int[]
     */
    public function getAllowedGeo()
    {
        return $this->allowedGeo;
    }

    /**
     * @param $allowedGeo
     */
    public function setAllowedGeo($allowedGeo)
    {
        $this->allowedGeo = $allowedGeo;
    }

    /**
     * @return int[]
     */
    public function getAvailableMailings()
    {
        return $this->availableMailings;
    }

    /**
     * @param $availableMailings
     */
    public function setAvailableMailings($availableMailings)
    {
        $this->availableMailings = $availableMailings;
    }

    /**
     * @return string
     */
    public function getBranchUsername()
    {
        return $this->branchUsername;
    }

    /**
     * @param $branchUsername
     */
    public function setBranchUsername($branchUsername)
    {
        $this->branchUsername = $branchUsername;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getInfoCurrency()
    {
        return $this->infoCurrency;
    }

    /**
     * @param $infoCurrency
     */
    public function setInfoCurrency($infoCurrency)
    {
        $this->infoCurrency = $infoCurrency;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return int[]
     */
    public function getMailings()
    {
        return $this->mailings;
    }

    /**
     * @param $mailings
     */
    public function setMailings($mailings)
    {
        $this->mailings = $mailings;
    }

    /**
     * @return int
     */
    public function getMaxActiveBanners()
    {
        return $this->maxActiveBanners;
    }

    /**
     * @param $maxActiveBanners
     */
    public function setMaxActiveBanners($maxActiveBanners)
    {
        $this->maxActiveBanners = $maxActiveBanners;
    }

    /**
     * @return object
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param $permissions
     */
    public function setPDermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

}