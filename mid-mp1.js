/*
EXERCISE 1: IDENTIFIY THE TERMS USED OR GIVE WHAT IS ASKED:
1-2 = 4pt
3   = 5
4   = 20
5   = 10
--- = 39 + 1 = 40
1. (2pts) Can be named or unnamed. -- class expression
2. (2pts) A template for creating objects. -- classes
3. (5) Write or declare a class object with name of "Robot". 
-  class Robot {}

4. (20pts) Write a class name called Person with parameter of array of 
  objects and one method to print all the records at hand(using console.table())
const persons =  
[{ name: "sample name 1", age: 24,gender: "M", contact_no: "099212141515" status: "single"},
{ name: "sample name 2",age: 22,gender: "F",contact_no: "099212141515"status: "single"},
{ name: "sample name 3", age: 24, gender: "M", contact_no: "099212141515"status: "single"}];
-- answer code:
class Person {
  constructor(data) {
    this.persons = data;
  } 
  printAll() {
    console.table(this.persons)
  }
  // answer 5:
  printAllAge() {
    this.persons.map(person => {
      console.log(person.age)
    })
  }
}
const people = new Person(persons)
people.printAll();

5. (10) Write a method corresponding to the class above that collect all the age of a persons.
people.printAllAge();

*/

// DESCRIPTION::
// PRELIM: ARRAY/OBJECTS
// MIDTERM: CLASS-BASED

// WRITE A PROGRAM CALLED SIMPLE ATM THAT HANDLE ALL THE TRANSACTION OF THE CUSTOMERS.
// THE APPLICATION CAN ACCEPT USER INPUT AND CAN VALIDATE AND CHECK EVERY ENTRY.
// USE CLASSED BASE STRUCTURE TO SOLVE THIS PROBLEM/ISSUE.

// FEATURES:
// CUSTOMERS ARE ABLE TO OPEN AN ACCOUNT AND CAN DEPOSIT A STARTING BALANCE OF 1000
// CUSTOMERS ARE ABLE TO CLOSE THERE ACCOUNT
// CUSTOMERS ARE ABLE TO RETRIEVE THERE ACCOUNT IF THEY ARE CLOSED
// CUSTOMERS ARE ABLE TO DISPLAY THE TRANSACTION HISTORY
// CUSTOMERS ABLE TO RETRIEVE THE CURRENT BALANCE
// CUSTOMERS ABLE TO DEPOSIT
// CUSTOMERS ABLE TO WITHDRAW
// CUSTOMERS ABLE TO SENT MONEY TO OTHER CUSTOMERS

// EXAMPLE:
class ATM {
  constructor(...param) {}
  loginPin() {}
  retrieveBalance() {}
  sendMoney() {}
  openAccount() {}
  closeAccount() {}
  depositAmount() {}
}

// EXAMPLE RECORDS:
// map, filter, find, push,
const customerRecords = [
  {
    pin: 1,
    name: 'John Paul',
    balance: 2000,
    transactionHistory: [
      { Date: '02/10/20 hour', amount: 200, type: 'DEPOSIT' },
      { Date: '02/12/20 hour', amount: 1200, type: 'WITHDRAW' },
      { Date: '02/14/20 hour', amount: 2200, type: 'DEPOSIT' },
      { Date: '02/15/20 hour', amount: 2400, type: 'P-TO-P' },
    ],
  },
  {
    pin: 2,
    name: 'John Doe',
    balance: 10000,
    transactionHistory: [
      { Date: '02/10/20 hour', amount: 200 },
      { Date: '02/12/20 hour', amount: 1200 },
      { Date: '02/14/20 hour', amount: 2200 },
      { Date: '02/15/20 hour', amount: 2400 },
    ],
  },
  {
    pin: 3,
    name: 'Jane Doe',
    balance: 300,
    transactionHistory: [
      { Date: '02/10/20 hour', amount: 200 },
      { Date: '02/12/20 hour', amount: 1200 },
      { Date: '02/14/20 hour', amount: 2200 },
      { Date: '02/15/20 hour', amount: 2400 },
    ],
  },
];

// STARTING CODE: (YOU CAN USE ANY IDE TO SOLVE THIS MACHINE PROBLEM)
const rd = require('readline').createInterface({
  input: process.stdin,
  output: process.stdout,
});

rd.question('Enter your pin number: ', (pin) => {
  console.log(`${pin}`);
  // logic
  rd.close();
});
//
// Enter you pin number: 1
