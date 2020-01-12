/*
function factorial(number) {
    var product = 1;
    for (var i = number; i >= 1; --i) {
        product *= i;
    }
    return product;
}

console.log(factorial(5));
console.log(factorial(6));
console.log(factorial(7));*/


/*
function curve(arr, amount) {
    for (var i = 0; i < arr.length; ++i) {
        arr[i] += amount;
    }
}

var grades = [77, 73, 74, 81, 90];
curve(grades, 10);
console.log(grades);*/

// RECURSIVE
/*function factorial(number) {
    if (number === 1) {
        return number;
    } else {
        return number * factorial(number-1);
    }
}
console.log(factorial(5));*/

// defining and using the checking object
function Checking(amount) {
    this.balance = amount;
    this.deposit = deposit;
    this.withdraw = withdraw;
    this.toString = toString;
}

function deposit(amount) {
    this.balance += amount;
}

function withdraw(amount) {
    if (amount <= this.balance) {
        this.balance -= amount;
    }
    if (amount > this.balance) {
        console.log("Insufficient funds");
    }
}

function toString() {
    return "Balance " + this.balance;
}

var account = new Checking(1000);

account.deposit(500);
console.log(account.toString());

account.withdraw(750);
console.log(account.toString());

account.withdraw(800);
console.log(account.toString());



