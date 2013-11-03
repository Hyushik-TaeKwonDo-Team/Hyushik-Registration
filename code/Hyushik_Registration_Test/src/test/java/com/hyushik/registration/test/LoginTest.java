package com.hyushik.registration.test;

import static org.junit.Assert.assertEquals;

import org.junit.Test;
import org.junit.runner.RunWith;
import org.junit.runners.JUnit4;

@RunWith(JUnit4.class)
public class LoginTest extends SeleniumTest {

	 @Test
	    public void rootPageExists() {
	        String actualTitle = driver.getTitle();
	        assertEquals("Tournament Registration", actualTitle);
	    }
}
