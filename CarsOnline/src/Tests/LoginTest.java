package Tests;

import java.util.Scanner;

public class LoginTest {
	public static void main(String[] args) {
	    Scanner input = new Scanner(System.in);

	    String username;
	    String password;

	    System.out.println("Log in:");
	    System.out.println("username: ");
	    username = input.next();

	    System.out.println("password: ");
	    password = input.next();

	    if(username.equals(username) && password.equals(password)) 
	        System.out.println("You are logged in");

	}
	
	@Test
	public void UserTest() {	
		User test = new User();
		String result = test.username("first_name", "last_name", null, null); 
	}	    
	      	
}
