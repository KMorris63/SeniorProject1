<?php
/*
 * Preference.php
 * Kacey Morris
 * March 7, 2022
 * CST 452 Code Drop 2 - Preferences
 *
 * This is the class which models a mirror preference.
 *
 * This is my own work, as influenced by class time and videos.
 */

class Preference {
    // preference properties
    private $id;
    // boolean
    private $alert;
    private $alertTime;
    private $alertLabel;
    // boolean
    private $alarm;
    private $alarmTime;
    private $alarmLabel;
    // array
    private $days;
    private $timezone;
    private $location;
    private $text;
    private $league;
    private $team;
    
    /**
     * Data constructor for a preferences object, passing parameters for all properties
     *
     * @param int $passID
     * @param boolean $passAlert
     * @param string $passAlertTime
     * @param string $passAlertLabel
     * @param boolean $passAlarm
     * @param string $passAlarmTime
     * @param string $passAlarmLabel
     * @param string[] $passDays
     * @param string $passTimezone
     * @param string $passLocation
     * @param string $passText
     * @param string $passLeague
     * @param string $passTeam
     * @return void
     */
    function __construct($passID, $passAlert, $passAlertTime, $passAlertLabel, $passAlarm, $passAlarmTime, $passAlarmLabel, $passDays, $passTimezone, $passLocation,
    		$passText, $passLeague, $passTeam) {
    	$this->id = $passID;
    	$this->alert = $passAlert;
    	$this->alertTime = $passAlertTime;
    	$this->alertLabel = $passAlertLabel;
    	$this->alarm = $passAlarm;
    	$this->alarmTime = $passAlarmTime;
    	$this->alarmLabel = $passAlarmLabel;
    	$this->days = $passDays;
    	$this->timezone = $passTimezone;
    	$this->location = $passLocation;
    	$this->text = $passText;
    	$this->league = $passLeague;
    	$this->team = $passTeam;
    }
    
	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return boolean
	 */
	public function getAlert() {
		return $this->alert;
	}

	/**
	 * @return string
	 */
	public function getAlertTime() {
		return $this->alertTime;
	}

	/**
	 * @return string
	 */
	public function getAlertLabel() {
		return $this->alertLabel;
	}

	/**
	 * @return boolean
	 */
	public function getAlarm() {
		return $this->alarm;
	}

	/**
	 * @return string
	 */
	public function getAlarmTime() {
		return $this->alarmTime;
	}

	/**
	 * @return string
	 */
	public function getAlarmLabel() {
		return $this->alarmLabel;
	}

	/**
	 * @return string[]
	 */
	public function getDays() {
		return $this->days;
	}

	/**
	 * @return string
	 */
	public function getTimezone() {
		return $this->timezone;
	}

	/**
	 * @return string
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * @return string
	 */
	public function getLeague() {
		return $this->league;
	}

	/**
	 * @return string
	 */
	public function getTeam() {
		return $this->team;
	}

	/**
	 * @param int $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param boolean $alert
	 */
	public function setAlert($alert) {
		$this->alert = $alert;
	}

	/**
	 * @param string $alertTime
	 */
	public function setAlertTime($alertTime) {
		$this->alertTime = $alertTime;
	}

	/**
	 * @param string $alertLabel
	 */
	public function setAlertLabel($alertLabel) {
		$this->alertLabel = $alertLabel;
	}

	/**
	 * @param boolean $alarm
	 */
	public function setAlarm($alarm) {
		$this->alarm = $alarm;
	}

	/**
	 * @param string $alarmTime
	 */
	public function setAlarmTime($alarmTime) {
		$this->alarmTime = $alarmTime;
	}

	/**
	 * @param string $alarmLabel
	 */
	public function setAlarmLabel($alarmLabel) {
		$this->alarmLabel = $alarmLabel;
	}

	/**
	 * @param string[] $days
	 */
	public function setDays($days) {
		$this->days = $days;
	}

	/**
	 * @param string $timezone
	 */
	public function setTimezone($timezone) {
		$this->timezone = $timezone;
	}

	/**
	 * @param string $location
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * @param string $text
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * @param string $league
	 */
	public function setLeague($league) {
		$this->league = $league;
	}

	/**
	 * @param string $team
	 */
	public function setTeam($team) {
		$this->team = $team;
	}
}

?>