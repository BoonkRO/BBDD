package org.mvpigs;


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;


public class dbConnection {

    public static void main(String[] args) {

        try {

            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/empresa", "root","1234");
            System.out.println("Ya va!");


        } catch (SQLException ex) {
            // handle any errors
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLState: " + ex.getSQLState());
            System.out.println("VendorError: " + ex.getErrorCode());
        }
    }
}