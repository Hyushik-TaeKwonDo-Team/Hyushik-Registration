/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.hyushik.registration.test.entities;

import java.util.EnumMap;
import java.util.Map;
import java.util.TreeMap;
import org.apache.commons.lang3.ArrayUtils;

/**
 *
 * @author McAfee
 */
public class Participant {
    
    private String name = "";
    private String email = "";
    private String address = "";
    private String city = "";
    private String state = "";

    private String zip = "";
    private String phone = "";
    
    private Gender gender = Gender.MALE;
    
    private String instructorName = "";
    private String schoolName = "";
    private String schoolAddress = "";
    private String schoolCity = "";
    private String schoolState = "";
    private String schoolZip = "";
    private String schoolPhone = "";
    private String schoolEmail = "";
    
    private Rank rank = Rank.WHITE;
    private int age = 0;
    private int weight = 0;
    
    private boolean weapons = false;
    private boolean breaking = false;
    private boolean sparring = false;
    private boolean point = false;
    private boolean olympic = false;
    
    private Map<BoardSize, Integer> boards = new EnumMap<BoardSize, Integer>(BoardSize.class);
    
    public static enum Gender {
        MALE("male"),
        FEMALE("female");
        
        private String text="";
        
        Gender(String text) {
            this.text = text;
        }
        
        @Override
        public String toString(){
            return text;
        }
    }
    
    public static enum Rank {
        WHITE("White"),
        YELLOW_ORANGE("Yellow/Orange"),
        GREEN("Green"),
        BLUE("Blue"),
        BROWN_RED("Brown/Red"),
        BLACK("Black");
        
        private String text = ""; 
        Rank(String text) {
            this.text = text;
        }
        
        @Override
        public String toString(){
            return text;
        }
    }
    public static enum BoardSize {
        QUARTER_INCH("1/4in"),
        THIRD_INCH("1/3in"),
        HALF_INCH("1/2in");
        
        
        private String text = ""; 
        BoardSize(String text) {
            this.text = text;
        }
        
        @Override
        public String toString(){
            return text;
        }
    }

    public Participant() {
    }
    
    
    //minimal for Registration
    public Participant(String name, String email, String address, String city, 
            String state, String zip, String phone, String instructor, 
            String school, int age, int weight, Map<BoardSize, Integer> boards) {
        this.name = name;
        this.email = email;
        this.address = address;
        this.city = city;
        this.state = state;
        this.zip = zip;
        this.phone = phone;
        this.instructorName = instructor;
        this.schoolName = school;
        this.age = age;
        this.weight = weight;
        this.boards=boards;
    }

    public Participant(String name, String email, String address, String city, 
            String state, String zip, String phone, Gender gender, 
            String instructor, String school, int age, int weight,
            Map<BoardSize, Integer> boards){
        this(name, email, address, city, state, zip, phone, instructor, school, 
                age, weight, boards);
        this.gender = gender;
    }
    
    public Participant(String name, String email, String address, String city, 
            String state, String zip, String phone, Gender gender, 
            String instructorName, String schoolName, String schoolAddress, 
            String schoolCity, String schoolState, String schoolZip, String schoolPhone, 
            String schoolEmail, Rank rank, int age, int weight, 
            Map<BoardSize, Integer> boards){
        this(name, email, address, city, state, zip, phone, gender, instructorName, schoolName, 
                age, weight, boards);
        this.schoolAddress = schoolAddress;
        this.schoolCity = schoolCity ;
        this.schoolState = schoolState;
        this.schoolPhone = schoolPhone;
        this.schoolEmail = schoolEmail;
        this.schoolZip = schoolZip;
        this.rank = rank;
    }
   
    
    public Participant(String name, String email, String address, String city, 
            String state, String zip, String phone, Gender gender, 
            String instructorName, String schoolName, String schoolAddress, 
            String schoolCity, String schoolState, String schoolZip, String schoolPhone,
            String schoolEmail, Rank rank, int age, int weight, boolean weapons,
            boolean breaking, boolean sparring, boolean point, boolean olympic,
            Map<BoardSize, Integer> boards){
        this(name, email, address, city, state, zip, phone, gender, 
            instructorName, schoolName, schoolAddress, 
            schoolCity, schoolState, schoolZip, schoolPhone, 
            schoolEmail, rank, age, weight, boards);
        
        this.weapons=weapons;
        this.breaking = breaking;
        this.sparring = sparring;
        this.point = point; 
        this.olympic = olympic;      
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

    public String getInstructorName() {
        return instructorName;
    }

    public String getSchoolName() {
        return schoolName;
    }

    public String getSchoolAddress() {
        return schoolAddress;
    }

    public String getSchoolCity() {
        return schoolCity;
    }

    public String getSchoolState() {
        return schoolState;
    }

    public String getSchoolZip() {
        return schoolZip;
    }
    
    public String getSchoolPhone() {
        return schoolPhone;
    }

    public String getSchoolEmail() {
        return schoolEmail;
    }

    public Rank getRank() {
        return rank;
    }

    public int getAge() {
        return age;
    }

    public int getWeight() {
        return weight;
    }

    public boolean isWeapons() {
        return weapons;
    }

    public boolean isBreaking() {
        return breaking;
    }

    public boolean isSparring() {
        return sparring;
    }

    public boolean isPoint() {
        return point;
    }

    public boolean isOlympic() {
        return olympic;
    }

    public Map<BoardSize, Integer> getBoards() {
        return boards;
    }
    
    public String[] toCSVLine(){
 
        String[] baseLine = new String[]{name,email,address,city,state,zip,phone,gender.toString(),
            instructorName, schoolName, schoolAddress, schoolCity, schoolState, schoolZip, 
            schoolPhone, schoolEmail, rank.toString(), Integer.toString(age), 
            Integer.toString(weight), boolToStringRep(weapons), 
            boolToStringRep(breaking), boolToStringRep(sparring), 
            boolToStringRep(point), boolToStringRep(olympic)};
        
        String[] boardsLine = new String[boards.keySet().size()];
        int i = 0;
        for (BoardSize boardSize : boards.keySet()){
            boardsLine[i] = boards.get(boardSize).toString();
            i++;
        }
        
        return ArrayUtils.addAll(baseLine, boardsLine);
    }
    
    private String boolToStringRep(boolean bool){
        return bool ? "Yes": "No";
    }


    
   
    
    


    
    
    
    

    
}
