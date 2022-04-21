<?php

 /*
 * LayoutBusinessService.php
 * Kacey Morris
 * January 23, 2021
 * CST 452 Code Drop 1 - Layouts
 *
 * The layout business service conducts all business logic for layout functions.
 *
 * This is my own work, as influenced by class time and videos.
 */

// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// required files
require_once '../../Autoloader.php';

class LayoutBusinessService {
	/**
	 * creates a new layout with the properties of the layout passed
	 *
	 * @param Layout $layout
	 * @return boolean
	 */
    function createLayout($layout) {
        // call data service method
        $dbService = new LayoutDataService();
        $success = $dbService->createLayout($layout);
        
        // returns true or false
        return $success;
    }
    
    /**
     * get all layouts in an array from the database
     *
     * @return Layout[]
     */
    function getAllLayouts() {
        // call data service method
        $dbService = new LayoutDataService();
        $layouts = $dbService->getAllLayouts();
        
        // return the array of layouts
        return $layouts;
    }
    
    /**
     * returns a layout array containing a single layout with this id
     *
     * @param int $id
     * @return Layout[]
     */
    function findByID($id) {
        $layouts = array();
        
        // access data service
        $dbService = new LayoutDataService();
        $layouts = $dbService->findByID($id);
        
        // return layouts
        return $layouts;
    }
    
    /**
     * deletes the layout from the database with this ID
     *
     * @param int $id
     * @return boolean
     */
    function deleteItem($id) {
        $dbService = new LayoutDataService();
        $success = $dbService->deleteItem($id);
        
        // returns true or false
        return $success;
    }
    
    /**
     * updates this id with the data from the passed layout object
     *
     * @param int $id
     * @param Layout $layout
     * @return boolean
     */
    function updateOne($id, $layout) {
        $dbService = new LayoutDataService();
        $success = $dbService->updateOne($id, $layout);
        
        // returns true or false
        return $success;
    }
    
     /**
     * sets active
     *
     * @param int $id
     * @param Layout $layout
     * @return boolean
     */
    function setActive($id) {
        $dbService = new LayoutDataService();
        $success = $dbService->setActive($id);
        
        // returns true or false
        return $success;
    }
    
    /**
     * creates the content of a configuration file with the selected layout
     *
     * @param Layout $layout
     * @return string
     */
    function createConfig($layout) {
        // file creation
        $file = 'config.txt';
        // real file
        $configFile = 'config.js';

        // associate module name with section text
        // 0 = alert, 1 = Clock, 2 = Calendar, 3 = compliments, 4 = weather, 5 = forecast, 6 = news, 7 = text, 8 = moon, 9 = globe, 
        // 10 = bible, 11 = alarm, 12 = insults, 13 = sports
        $modules = ["Alert", "Clock", "Calendar", "Compliments", "Weather", "Forecast", "News", "Text", "Moon", "Globe", "Bible", "Alarm", 
			"Insults", "Sports"];

        // alert and alarm are special cases

        $moduleText = ['{
 module: "alert",
 config: {
    title: "Testing Alert Title",
    message: "Testing Alert Message",
    welcome_message: "Alert"
 }
}',
		'{
 module: "clock",
 config: {
 timezone: "America/Phoenix",
 secondsColor: "#00FFFF"
 },
',
		'{
 module: "calendar",
 header: "US Holidays",
 config: {
  calendars: [
    {
        symbol: "calendar-check",
		url: "webcal://www.calendarlabs.com/ical-calendar/ics/76/US_Holidays.ics"
    }
  ]
 },
',
		'{
 module: "compliments",
',
		'{
 module: "weather",
 config: {
    weatherProvider: "openweathermap",
    type: "current",
	location: "Phoenix",
	locationID: "5308655", //ID from http://bulk.openweathermap.org/sample/city.list.json.gz; unzip the gz file and find your city
	apiKey: "0c622a06c0944cd3d029255097fefa7e"
 },
',
		'{
 module: "weather",
 header: "Weather Forecast",
 config: {
 weatherProvider: "openweathermap",
 type: "forecast",
 location: "Arizona",
 locationID: "5308655", //ID from http://bulk.openweathermap.org/sample/city.list.json.gz; unzip the gz file and find your city
 apiKey: "0c622a06c0944cd3d029255097fefa7e"
 },
',
		'{
 module: "newsfeed",
 config: {
    feeds: [
	{
		title: "New York Times",
		url: "https://rss.nytimes.com/services/xml/rss/nyt/HomePage.xml"
	}
	],
	showSourceTitle: true,
	showPublishDate: true,
	broadcastNewsFeeds: true,
	broadcastNewsUpdates: true
 },
',
		'{
 module: "helloworld",
 config: {
 text: "Hello World!"
 },
',
		'{
 module: "MMM-MoonPhase",
 config: {
 updateInterval: 43200000,
 hemisphere: "N",
 resolution: "detailed",
 basicColor: "white",
 title: true,
 phase: true,
 x: 200,
 y: 200,
 alpha: 0.7
 },
',
		'{
 module: "MMM-Globe",
 config: {
	style: "geoColor",
	imageSize: 200,
	ownImagePath: "",
	updateInterval: 10*60*1000
 },
',
		'{
 module: "MMM-DailyBibleVerse",
 config: {
 version: "NIV",
 size: "small"
 },
',
		'{
 module: "MMM-AlarmClock",
 position: "bottom_bar",
 config: {
 alarms: [
 {time: "20:00", days: [2], title: "Testing", message: "Test Alarm", sound: "alarm.mp3"},
 ],
 }
 }',
		'{
 disabled: false,
 module: "MMM-Insults",
 config: {
	static: "You are ",
	newInsult: 60 * 1000,
 },
',
		'{
 module: "MMM-MyScoreboard",
 classes: "default everyone",
 header: "My Scoreboard",
 config: {
 showLeagueSeparators: true,
 colored: true,
 viewStyle: "mediumLogos",
 sports: [
 {
 league: "NHL",
 teams: ["ARI"]
 },
 {
 league: "MLB",
 teams: ["ARI"]
 }
 ]
 },
'
];


    // to be built based on their selections
    // bare bones start of config file
    $content = '
    let config = {
	address: "localhost",
	port: 8080,
	basePath: "/",
	ipWhitelist: ["127.0.0.1", "::ffff:127.0.0.1", "::1"],

	useHttps: false,
	httpsPrivateKey: "",
	httpsCertificate: "",

	language: "en",
	locale: "en-US",
	logLevel: ["INFO", "LOG", "WARN", "ERROR"],
	timeFormat: 12,
	units: "imperial",

	modules: [ 

';
    // if the module is a feasible option
    if (in_array($layout->getTopLeft(), $modules)) {
        // echo $layout->getTopLeft() . " was in array ";
        // get the index of the selected module TOP LEFT
        $index = array_search($layout->getTopLeft(), $modules);
        // get the text associated with that module
        $text = $moduleText[$index];
        // append the text to the end of the content
        $content = $content . $text . 'position: "top_left"
 },
 ';
    }

    // if the module is a feasible option
    if (in_array($layout->getTopRight(), $modules)) {
        // get the index of the selected module TOP RIGHT
        $index = array_search($layout->getTopRight(), $modules);
        // get the text associated with that module
        $text = $moduleText[$index];
        // append the text to the end of the content
        $content = $content . $text . 'position: "top_right"
 },
 ';
    }

    // if the module is a feasible option
    if (in_array($layout->getBottomLeft(), $modules)) {
        // get the index of the selected module BOTTOM LEFT
        $index = array_search($layout->getBottomLeft(), $modules);
        // get the text associated with that module
        $text = $moduleText[$index];
        // append the text to the end of the content
        $content = $content . $text . 'position: "bottom_left"
 },
 ';
    }

    // if the module is a feasible option
    if (in_array($layout->getBottomRight(), $modules)) {
        // get the index of the selected module BOTTOM RIGHT
        $index = array_search($layout->getBottomRight(), $modules);
        // get the text associated with that module
        $text = $moduleText[$index];
        // append the text to the end of the content
        $content = $content . $text . 'position: "bottom_right"
 },
 ';
    }

    // add end file requirements
    $content = $content . '
]
};

/*************** DO NOT EDIT THE LINE BELOW ***************/
if (typeof module !== "undefined") {module.exports = config;}';

    return $content;
    }
}

?>
