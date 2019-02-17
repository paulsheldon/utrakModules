<?php
/** @noinspection HtmlUnknownTarget */

/**
 * utrakJson is a class for dealing with Json functionality
 *
 * @package   utrakJson
 * @author    Paul Sheldon  <paul.sheldon@utrak.co.uk>
 * @version   1.0
 * @access    public
 * @copyright 2018-06-09 (c) Paul Sheldon
 * @license
 *
 */


namespace utrakmodules;

/**
 * Class utrakJson
 * @package utrakmodules
 */
class utrakJson
{

    /**
     * @var
     */
    private $jsonData;
    /**
     * @var
     */
    private $jsonError;

    /**
     * utrakJson constructor.
     */
    public function __construct()
    {
        $this->setJsonData('{"jsonError": "unknown"}');
        $this->setJsonError(false);
    }

    /**
     * utrakJson destructor
     */
    public function __destruct()
    {
        unset($this->jsonData, $this->jsonError);
    }

    /**
     * Validate json data
     */
    public function validateJson(): void
    {
        if ($this->jsonData === false) {
            $this->setJsonError(true);
            $this->jsonData = json_encode(array('jsonError', json_last_error_msg()));
            if ($this->jsonData === false) {
                $this->jsonData = '{"jsonError": "unknown"}';
            }
        }
        $this->setJsonError(false);
    }

    /**
     * display link to open json file in new tab/window
     *
     * @param bool $show
     */
    public function showLink($show = false): void
    {
        if ($show) {
            echo '<small><a href="\pages\tools\jsonView.php" target="json" >Open JSON in new tab/window</a></small>';
        }
    }

    /**
     * display json data on current page
     */
    public function displayJson(): ?int
    {
        $this->jsonData = json_decode(json_encode($this->jsonData));
        if ($this->jsonError) {
            return 500;
        }
        if ($_SESSION['userId'] != DEVELOPER_ID) {
            return 403;
        }
        echo $this->jsonData;
        return null;
    }

    /**
     * @return mixed
     */
    public function getJsonData()
    {
        return $this->jsonData;
    }

    /**
     * @param $jsonData
     */
    public function setJsonData($jsonData): void
    {
        $this->jsonData = $jsonData;
    }

    /**
     * @return mixed
     */
    public function getJsonError()
    {
        return $this->jsonError;
    }

    /**
     * @param mixed $jsonError
     */
    public function setJsonError($jsonError): void
    {
        $this->jsonError = $jsonError;
    }
}