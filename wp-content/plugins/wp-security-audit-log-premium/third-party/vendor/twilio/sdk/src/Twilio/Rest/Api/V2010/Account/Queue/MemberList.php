<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Queue;

use WSAL_Vendor\Twilio\ListResource;
use WSAL_Vendor\Twilio\Stream;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
class MemberList extends \WSAL_Vendor\Twilio\ListResource
{
    /**
     * Construct the MemberList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created this resource
     * @param string $queueSid The SID of the Queue the member is in
     */
    public function __construct(\WSAL_Vendor\Twilio\Version $version, string $accountSid, string $queueSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'queueSid' => $queueSid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Queues/' . \rawurlencode($queueSid) . '/Members.json';
    }
    /**
     * Streams MemberInstance records from the API as a generator stream.
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
     * Reads MemberInstance records from the API as a list.
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
     * @return MemberInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null) : array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), \false);
    }
    /**
     * Retrieve a single page of MemberInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return MemberPage Page of MemberInstance
     */
    public function page($pageSize = \WSAL_Vendor\Twilio\Values::NONE, string $pageToken = \WSAL_Vendor\Twilio\Values::NONE, $pageNumber = \WSAL_Vendor\Twilio\Values::NONE) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Queue\MemberPage
    {
        $params = \WSAL_Vendor\Twilio\Values::of(['PageToken' => $pageToken, 'Page' => $pageNumber, 'PageSize' => $pageSize]);
        $response = $this->version->page('GET', $this->uri, $params);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Queue\MemberPage($this->version, $response, $this->solution);
    }
    /**
     * Retrieve a specific page of MemberInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return MemberPage Page of MemberInstance
     */
    public function getPage(string $targetUrl) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Queue\MemberPage
    {
        $response = $this->version->getDomain()->getClient()->request('GET', $targetUrl);
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Queue\MemberPage($this->version, $response, $this->solution);
    }
    /**
     * Constructs a MemberContext
     *
     * @param string $callSid The Call SID of the resource(s) to fetch
     */
    public function getContext(string $callSid) : \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Queue\MemberContext
    {
        return new \WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Queue\MemberContext($this->version, $this->solution['accountSid'], $this->solution['queueSid'], $callSid);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Api.V2010.MemberList]';
    }
}
