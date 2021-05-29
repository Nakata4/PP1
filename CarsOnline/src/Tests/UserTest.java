package Tests;

import java.util.Scanner;

import org.junit.Test;

import Cars.User;

public class UserTest {
		public static void main(String[] args) {}
		
		@Test
		public UserTest() {	
			User test = new User();
			String result = test.username("first_name", "last_name", null, null); 
		}	    
		       
	}
