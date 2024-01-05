<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber;

use WSAL_Vendor\Twilio\Deserialize;
use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceResource;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn\AssignedAddOnExtensionList;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 *
 * @property string $sid
 * @property string $accountSid
 * @property string $resourceSid
 * @property string $friendlyName
 * @property string $description
 * @property array $configuration
 * @property string $uniqueName
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $uri
 * @property array $subresourceUris
 */
class AssignedAddOnInstance extends \WSAL_Vendor\Twilio\InstanceResource
{
    protected $_extensions;
    /**
     * Initialize the AssignedAddOnInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $resourceSid The SID of the Phone Number that installed this
     *                            Add-on
     * @param string $sid The unique string that identifies the resource
     */
    public function __construct(\WSAL_Vendor\Twilio\Version $version, array $payload, string $accountSid, string $resourceSid, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['sid' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'sid'), 'accountSid' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'account_sid'), 'resourceSid' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'resource_sid'), 'friendlyName' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'friendly_name'), 'description' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'description'), 'configuration' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'configuration'), 'uniqueName' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'unique_name'), 'dateCreated' => \WSAL_Vendor\Twilio\Deserialize::dateTime(\WSAL_Vendor\Twilio\Values::array_get($payload, 'date_created')), 'dateUpdated' => \WSAL_Vendor\Twilio\Deserialize::dateTime(\WSAL_Vendor\Twilio\Values::array_get($payload, 'date_updated')), 'uri' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'uri'), 'subresourceUris' => \WSAL_Vendor\Twilio\Values::array_get($payload, 'subresource_uris')];
        $this->solution = ['accountSid' => $accountSid, 'resourceSid' => $resourceSid, 'sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return AssignedAddOnContext Context for this AssignedAddOnInstance
     */
    protected function proxy() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOnContext
    {
        if (!$this->context) {
            $this->context = new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOnContext($this->version, $this->solution['accountSid'], $this->solution['resourceSid'], $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Fetch the AssignedAddOnInstance
     *
     * @return AssignedAddOnInstance Fetched AssignedAddOnInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOnInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Delete the AssignedAddOnInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->proxy()->delete();
    }
    /**
     * Access the extensions
     */
    protected function getExtensions() : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn\AssignedAddOnExtensionList
    {
        return $this->proxy()->extensions;
    }
    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->{$method}();
        }
        throw new \WSAL_Vendor\Twilio\Exceptions\TwilioException('Unknown property: ' . $name);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "{$key}={$value}";
        }
        return '[Twilio.Api.V2010.AssignedAddOnInstance ' . \implode(' ', $context) . ']';
    }
}