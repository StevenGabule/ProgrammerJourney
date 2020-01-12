function recurFib(n) {
    if( n < 2 ) {
        return n;
    } else {
        return recurFib(n-1) + recurFib(n-2);
    }
}
console.log(recurFib(10));

function factorial(num) {
    var number = 1;
    for(var i = num; i >= 1; --i) {
        number *= i;
    }
    return number;
}
console.log(factorial(4));

function curve(arr, amount) {
    for(var i = 0; i < arr.length; ++i) {
        arr[i] += amount;
    }
}

var grades = [77, 73, 74, 81, 90];
curve(grades, 3);
console.log(grades);

// RECURSION
function factorial(number) {
    if(number == 1) {
        return number;
    } else {
        return number * factorial(number-1);
    }
}

console.log(factorial(5));

// OBJECTS AND OBJECT ORIENTED PROGRAMMING
function Checking(amount) {
    this.balance = amount;    // property
    this.deposit = deposit;   // function
    this.withdraw = withdraw; // function
    this.toString = toString; // function
}

function deposit(amount) {
    this.balance += amount;
}

function withdraw(amount) {
    if(amount <= this.balance) {
        this.balance -= amount;
    }
    if(amount > this.balance) {
        console.log("Insufficient funds");
    }
}

function toString() {
    return "Balance: " + this.balance;
}

var account = new Checking(500);
account.deposit(1000);
console.log(account.toString()); // Balance: 1500
account.withdraw(750);
console.log(account.toString()); // Balance: 750
account.withdraw(800); // displays "Insufficient funds"
console.log(account.toString()); // Balance: 750