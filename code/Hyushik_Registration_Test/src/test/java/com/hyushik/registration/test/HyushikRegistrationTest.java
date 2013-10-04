/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.hyushik.registration.test;

import static org.junit.Assert.*;

import org.junit.Test;
import org.junit.Ignore;
import org.junit.Before;
import org.junit.After;
import org.junit.runner.RunWith;
import org.junit.runners.JUnit4;
import junit.framework.TestCase;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;
import java.util.Properties;
import java.io.FileInputStream;
import java.io.IOException;
import au.com.bytecode.opencsv.CSVReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

/**
 *
 * @author McAfee
 */
@RunWith(JUnit4.class)
public class HyushikRegistrationTest {

    private Properties props = new Properties();
    private String baseUrl;
    private String csvFolder;
    private String csvName;
    private String csvPath;
    private WebDriver driver;

    @Before
    public void openBrowser() {
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

        baseUrl = props.getProperty(PropertiesNames.weburl);
        csvFolder = props.getProperty(PropertiesNames.filepathToWebRoot);
        csvName = props.getProperty(PropertiesNames.csvFileName);
        csvPath = csvFolder + csvName;
        driver = new FirefoxDriver();
        driver.get(baseUrl);
    }

    @Test
    public void rootPageExists() {
        String actualTitle = driver.getTitle();
        assertEquals("Tournament Registration", actualTitle);
    }

    @Test
    public void CSVFileIsBeingWritten() {
        WebElement myDynamicElement = (new WebDriverWait(driver, 10)).until(ExpectedConditions.presenceOfElementLocated(By.id("name")));
        
        submitRegistration("Test", "Test01@test.com");
        assertTrue( "File "+csvPath+" does not exist.", fileExists(csvPath));
        
    }

    @After
    public void closeBrowserWindows() {
        driver.quit(); //DON'T USE "driver.close", it fails in QA
    }
    
    private boolean fileExists(String filePath){
        File csv = new File(filePath);
        return csv.exists();
    }
    
    private void submitRegistration(String name, String email){
        driver.findElement(By.id("name")).sendKeys(name);
        driver.findElement(By.id("email")).sendKeys(email);
        driver.findElement(By.id("submitButton")).click();
    }

    private void compareCSVFile(List<String[]> expectedResults, String filepath) {
        CSVReader reader = null;
        try {
            reader = new CSVReader(new FileReader(filepath));
        } catch (FileNotFoundException fnfe) {
            fail("The provided file " + filepath + " could not be found.");
            return;
        }
        List<String[]> fileEntries = new ArrayList<String[]>();
        try {
            fileEntries = reader.readAll();
        } catch (IOException ioe) {
            fail("The provided file " + filepath + " could not be read.");
        }

        if (expectedResults.size() != fileEntries.size()) {
            fail("There are a different number of lines between expected and read");
        }

        int i;
        for (i = 0; i < expectedResults.size(); ++i) {
            compareCSVLine(expectedResults.get(i), fileEntries.get(i));
        }



    }

    public void compareCSVLine(String[] expected, String[] received) {
        assertTrue("Expect CSV line "
                + expected.toString() + " "
                + "does not match read line "
                + received.toString() + ".",
                Arrays.deepEquals(expected, received));
    }
}
