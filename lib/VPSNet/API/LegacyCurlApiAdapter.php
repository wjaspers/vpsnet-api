<?php

namespace VPSNet\API;

/**
 * This is pulled almost directly out of the existing PHP wrapper provided by VPS.net.
 */
class LegacyCurlApiAdapter extends CurlApiAdapter
{
	public function setAPIResource($resource, $appendVersion = true, $queryString = '')
	{
		if ($appendVersion) {
			if ($queryString)
				$this->setCurlOpt(CURLOPT_URL, sprintf('%1$s/%2$s.%3$s?%4$s', $this->apiUrl, $resource, $this->apiVersion, $queryString));
			else
				$this->setCurlOpt(CURLOPT_URL, sprintf('%1$s/%2$s.%3$s', $this->apiUrl, $resource, $this->apiVersion));
		} else {
			if ($queryString)
				$this->setCurlOpt(CURLOPT_URL, sprintf('%1$s/%2$s?%3$s', $this->apiUrl, $resource, $queryString));
			else
				$this->setCurlOpt(CURLOPT_URL, sprintf('%1$s/%2$s', $this->apiUrl, $resource));
		}
	}

	public function sendGETRequest()
	{
		$this->setCurlOpt(CURLOPT_CUSTOMREQUEST, 'GET');
		$this->setCurlOpt(CURLOPT_HTTPGET, true);
		$this->setCurlOpt(CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Accept: application/json'
			));
		return $this->sendRequest();
	}


	public function sendPOSTRequest($data = null, $encodeasjson = true)
	{
		$this->setCurlOpt(CURLOPT_CUSTOMREQUEST, 'POST');
		if ($encodeasjson) {
			$this->setCurlOpt(CURLOPT_POSTFIELDS, json_encode($data));
		} else {
			$this->setCurlOpt(CURLOPT_POSTFIELDS, $data);
		}
		$this->setCurlOpt(CURLOPT_POST, true);
		$rtn = $this->sendRequest();
		return $rtn;
	}


	public function sendPUTRequest($data)
	{
		$this->setCurlOpt(CURLOPT_CUSTOMREQUEST, 'PUT');
		$json_data = json_encode($data);
		$this->setCurlOpt(CURLOPT_POSTFIELDS, $json_data);
		$this->setCurlOpt(CURLOPT_HTTPHEADER, array(
				'Content-Length: ' . strlen($json_data),
				'Content-Type: application/json',
				'Accept: application/json'
			));
		return $this->sendRequest();
	}


	public function sendDELETERequest()
	{
		$this->setCurlOpt(CURLOPT_CUSTOMREQUEST, 'DELETE');
		$this->setCurlOpt(CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Accept: application/json'
			));
		return $this->sendRequest();
	}

	protected function sendRequest()
	{
		$this->init();
		$rtn = array();
		$rtn['response_body'] = curl_exec($this->curlHandle);
		$rtn['info']          = curl_getinfo($this->curlHandle);

		if (isset($rtn['info']['content_type']) && $rtn['info']['content_type'] == 'application/json; charset=utf-8') {
			if ($rtn['info']['http_code'] == 200) {
				$rtn['response'] = json_decode($rtn['response_body']);
			} else if ($rtn['info']['http_code'] == 422) {
				$rtn['errors'] = json_decode($rtn['response_body']);
			}
		}
		return $rtn;
	}
}