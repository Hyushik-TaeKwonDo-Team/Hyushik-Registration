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
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
/**
 *
 * @author McAfee
 */
@RunWith(JUnit4.class)
public class HyushikRegistrationTest{
    private Properties props = new Properties();
    private String baseUrl;
    private WebDriver driver;

    @Before
    public void openBrowser() {
        FileInputStream fizban;
        try{
            fizban = new FileInputStream("webserver.properties");
        }catch(Exception e){
            return;
        }
        try{
            props.load(fizban);
        }catch(Exception io){
            return;
        }
        
        baseUrl = props.getProperty(PropertiesNames.weburl);
        driver = new FirefoxDriver();
        driver.get(baseUrl);
    }
  
    @Test
    public void assTrue(){
        String actualTitle = driver.getTitle();
        assertEquals("Hyushik Registration", actualTitle);
        
    } 
    
    @After
    public void closeBrowserWindows(){
        driver.quit(); //DON'T USE "driver.close", it fails in QA
    }
    
    public void compareCSVFile( List<String[]> expectedResults, String filepath) {
        CSVReader reader = null;
        try{
            reader = new CSVReader(new FileReader(filepath));
        }catch (FileNotFoundException fnfe){
            fail("The provided file "+filepath+" could not be found.");
            return;
        }
        List<String[]> fileEntries = new ArrayList<String[]>();
        try{
            fileEntries = reader.readAll();
        }catch(IOException ioe){
            fail("The provided file "+filepath+" could not be read.");
        }
        
        if (expectedResults.size()!=fileEntries.size()){
            fail("There are a different number of lines between expected and read");
        }
        
        int i;
        for (i=0; i < expectedResults.size() ; ++i ){
            compareCSVLine( expectedResults.get(i), fileEntries.get(i));
        }
        
        
         
    }
    
    public void compareCSVLine( String[] expected, String[] received){
        assertTrue("Expect CSV line "+
                expected.toString() +" "+
                "does not match read line "+
                received.toString()+".",
                Arrays.deepEquals(expected, received));
    }
    
    
            
}
