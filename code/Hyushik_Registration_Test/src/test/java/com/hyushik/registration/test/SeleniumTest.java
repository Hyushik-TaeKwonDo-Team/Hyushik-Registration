package com.hyushik.registration.test;

import java.io.File;
import java.io.FileInputStream;
import java.util.Properties;

import org.junit.After;
import org.junit.Before;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;


public class SeleniumTest {

    protected Properties props = new Properties();
    protected String baseUrl;
    protected String csvFolder;
    protected String csvName;
    protected String csvPath;
    protected WebDriver driver;

    protected void setUpVars() {
        FileInputStream fizban;
        try {
            fizban = new FileInputStream("webserver.properties");
        } catch (Exception e) {
            return; //don't care
        }
        try {
            props.load(fizban);
        } catch (Exception io) {
            return;
        }

        String csvFolder = props.getProperty(PropertiesNames.filepathToWebRoot);
        String csvName = props.getProperty(PropertiesNames.csvFileName);
        csvPath = csvFolder + csvName;

        baseUrl = props.getProperty(PropertiesNames.weburl);
    }

    protected void openBrowser() {
        driver = new FirefoxDriver();
        driver.get(baseUrl);
    }

    @Before
    public void setUp() {
        setUpVars();
        deleteCSVFile();
        openBrowser();
    }
    
	@After
	public void tearDown() {
        closeBrowsers();
        deleteCSVFile();
    }

    protected void closeBrowsers() {
        driver.quit(); //DON'T USE "driver.close", it fails in QA
    }

    protected void deleteCSVFile() {
        File csv = new File(csvPath);
        if (csv.exists()) {
            csv.delete();
        }
    }
    
    protected boolean fileExists(String filePath) {
        File csv = new File(filePath);
        return csv.exists();
    }
}