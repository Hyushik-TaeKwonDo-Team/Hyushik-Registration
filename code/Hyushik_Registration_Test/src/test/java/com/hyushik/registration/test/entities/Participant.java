/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.hyushik.registration.test.entities;

/**
 *
 * @author McAfee
 */
public class Participant {
    
    private String name;
    private String email;
    private String address;
    private String city;
    private String state;

    private String zip;
    private String phone;
    
    public Gender gender;
    
    private String instructor;
    private String school;
    
    public int age;
    public int weight;
    
    public static enum Gender {
        MALE,
        FEMALE;
    }
    
    public Participant(String name, String email, String address, String city, 
            String state, String zip, String phone, String instructor, 
            String school, int age, int weight) {
        this.name = name;
        this.email = email;
        this.address = address;
        this.city = city;
        this.state = state;
        this.zip = zip;
        this.phone = phone;
        this.instructor = instructor;
        this.school = school;
        this.age = age;
        this.weight = weight;
    }
    
    public Participant(String name, String email, String address, String city, 
            String state, String zip, String phone, Gender gender, 
            String instructor, String school, int age, int weight
            ){
        this(name, email, address, city, state, zip, phone, instructor, school, 
                age, weight);
        this.gender = gender;
    }
    
        public String getName() {
        return name;
    }

    public String getEmail() {
        return email;
    }

    public String getAddress() {
        return address;
    }

    public String getCity() {
        return city;
    }

    public String getState() {
        return state;
    }

    public String getZip() {
        return zip;
    }

    public String getPhone() {
        return phone;
    }

    public Gender getGender() {
        return gender;
    }

    public String getInstructor() {
        return instructor;
    }

    public String getSchool() {
        return school;
    }
    
    public int getAge() {
        return age;
    }

    public int getWeight() {
        return weight;
    }

    
}
