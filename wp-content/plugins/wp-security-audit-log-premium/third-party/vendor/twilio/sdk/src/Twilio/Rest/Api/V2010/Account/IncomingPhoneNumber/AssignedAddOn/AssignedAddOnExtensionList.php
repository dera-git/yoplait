<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn;

use WSAL_Vendor\Twilio\ListResource;
use WSAL_Vendor\Twilio\Stream;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class AssignedAddOnExtensionList extends \WSAL_Vendor\Twilio\ListResource
{
    /**
     * Construct the AssignedAddOnExtensionList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $resourceSid The SID of the Phone Number to which the Add-on
     *                            is assigned
     * @param string $assignedAddOnSid The SID that uniquely identifies the
     *                                 assigned Add-on installation
     */
    public function __construct(\WSAL_Vendor\Twilio\Version $version, string $accountSid, string $resourceSid, string $assignedAddOnSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'resourceSid' => $resourceSid, 'assignedAddOnSid' => $assignedAddOnSid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/IncomingPhoneNumbers/' . \rawurlencode($resourceSid) . '/AssignedAddOns/' . \rawurlencode($assignedAddOnSid) . '/Extensions.json';
    }
    /**
     * Streams AssignedAddOnExtensionInstance records from the API as a generator
     * stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(int $limit = null, $pageSize = null) : \WSAL_Vendor\Twilio\Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);
        $page = $this->page($limits['pageSize']);
        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }
    /**
     * Reads AssignedAddOnExtensionInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return AssignedAddOnExtensionInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null) : array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), \false);
    }
    /**
     * Retrieve a single page of AssignedAddOnExtensionInstance records from the
     * API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return AssignedAddOnExtensionPage Page of AssignedAddOnExtensionInstance
     */
    public function page($pageSize = \WSAL_Vendor\Twilio\Values::NONE, string $pageToken = \WSAL_Vendor\Twilio\Values::NONE, $pageNumber = \WSAL_Vendor\Twilio\Values::NONE) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn\AssignedAddOnExtensionPage
    {
        $params = \WSAL_Vendor\Twilio\Values::of(['PageToken' => $pageToken, 'Page' => $pageNumber, 'PageSize' => $pageSize]);
        $response = $this->version->page('GET', $this->uri, $params);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn\AssignedAddOnExtensionPage($this->version, $response, $this->solution);
    }
    /**
     * Retrieve a specific page of AssignedAddOnExtensionInstance records from the
     * API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return AssignedAddOnExtensionPage Page of AssignedAddOnExtensionInstance
     */
    public function getPage(string $targetUrl) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn\AssignedAddOnExtensionPage
    {
        $response = $this->version->getDomain()->getClient()->request('GET', $targetUrl);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn\AssignedAddOnExtensionPage($this->version, $response, $this->solution);
    }
    /**
     * Constructs a AssignedAddOnExtensionContext
     *
     * @param string $sid The unique string that identifies the resource
     */
    public function getContext(string $sid) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn\AssignedAddOnExtensionContext
    {
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn\AssignedAddOnExtensionContext($this->version, $this->solution['accountSid'], $this->solution['resourceSid'], $this->solution['assignedAddOnSid'], $sid);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Api.V2010.AssignedAddOnExtensionList]';
    }
}
